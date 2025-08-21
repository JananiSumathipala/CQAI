<?php
require_once '../../includes/config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection

    // Get form data
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $category_id = intval($_POST['category_id']); 
    $branch_id = intval($_POST['branch_id']); // Ensure it's an integer
    $uploaded_by = $_SESSION['admin_id']; // Assuming admin ID is stored in session
    $is_active = 1;
    $main = trim($_POST['main']);

    // File upload
    if (isset($_FILES['document']) && $_FILES['document']['error'] === 0) {
        $allowed_types = ['pdf', 'docx', 'xlsx'];
        $file_name = $_FILES['document']['name'];
        $file_tmp = $_FILES['document']['tmp_name'];
        $file_size = $_FILES['document']['size'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Validate file type
        if (!in_array($file_ext, $allowed_types)) {
            die("Invalid file type. Allowed types: PDF, DOCX, XLSX.");
        }

        $target_dir = "uploads/productivity/";

        // Step 1: Upload temporary unique file
        $temp_name = uniqid('temp_') . '.' . $file_ext;
        $temp_path = $target_dir . $temp_name;
        if (move_uploaded_file($file_tmp, $temp_path)) {
            // Step 2: Insert into DB with temporary path
            $stmt = $db->prepare("INSERT INTO productivity_documents (title, description, category_id, file_path, uploaded_by, is_active,branch_id,section) VALUES (?, ?, ?, ?, ?, ?,?,?)");
            $stmt->bind_param("ssisiiis", $title, $description, $category_id, $temp_path, $uploaded_by, $is_active, $branch_id, $main);
            if ($stmt->execute()) {
                $last_id = $stmt->insert_id;

                // Step 3: Rename file using ID
                $new_name = 'doc_' . $last_id . '.' . $file_ext;
                $new_path = $target_dir . $new_name;

                if (rename($temp_path, $new_path)) {
                    // Step 4: Update DB with new file path
                    $update_stmt = $db->prepare("UPDATE productivity_documents SET file_path = ? WHERE id = ?");
                    $update_stmt->bind_param("si", $new_path, $last_id);
                    $update_stmt->execute();
                    $update_stmt->close();

                    // echo "Document uploaded and updated successfully.";
                    header("Location: ../productivity-docs.php?success=1");
                } else {
                    echo "File rename failed.";
                }
            } else {
                echo "DB insert failed: " . $stmt->error;
                unlink($temp_path); // Delete uploaded file on failure
            }
            $stmt->close();
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "<div class='alert alert-warning'>No file uploaded or upload error occurred.</div>";
    }

    $db->close();
}
