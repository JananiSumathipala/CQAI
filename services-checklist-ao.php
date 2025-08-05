<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'template/head.php';

require_once "includes/config.php";

// Fetch document details
$stmt = $db->prepare("SELECT d.title,d.description, b.name AS branch_name , d.uploaded_by ,c.name AS category, d.uploaded_at, d.file_path FROM documents d
JOIN categories c ON d.category_id = c.id
JOIN branches b ON d.branch_id = b.id
 WHERE d.category_id = 7 AND d.is_active = 1 AND d.branch_id = 7 ORDER BY d.uploaded_at DESC");

$stmt->execute();
$result = $stmt->get_result();
?>


<body>
    <?php 
    include 'template/header.php';
    ?>


    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Services <i class="fa fa-tasks"></i>
                <div class="float-end">
                    <a href="index.php" class="btn btn-info me-2"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:history.back()" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </h3>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <!-- Nav Tabs -->
                <ul class="nav flex-column nav-pills" id="inspectorateTabs" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link active" id="org-tab" data-bs-toggle="pill" href="#org" role="tab">Check List</a>
                    </li>
                    
                </ul>
            </div>

            <div class="col-lg-10">
                <table class="table table-bordered text-center align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>Title</th>
                            <th>description</th>
                            <!-- <th>Branch</th> -->
                            <!-- <th>Category</th> -->
                            <!-- <th>Uploaded By</th> -->
                            <th>Uploaded Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?= htmlspecialchars($row['title']) ?></td>
                                    <td><?= htmlspecialchars($row['description']) ?></td>
                                    <!-- <td><?= htmlspecialchars($row['branch_name']) ?></td> -->
                                    <!-- <td><?= htmlspecialchars($row['category']) ?></td> -->
                                    <!-- <td><?= htmlspecialchars($row['uploaded_by']) ?></td> -->
                                    <td><?= htmlspecialchars($row['uploaded_at']) ?></td>
                                    <td>
                                        <a href="admin/action/<?= htmlspecialchars($row['file_path']) ?>" target="_blank" class="btn btn-sm btn-primary">View</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No documents found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Repeat for 6 more cards -->
        </div>



        </div>

        <!-- Tab 2 -->
        <div class="tab-pane fade" id="functions" role="tabpanel">
            <div class="alert alert-info">
                <h5><strong>FUNCTIONS</strong></h5>
            </div>
            <p><strong>ROLE:</strong></p>
            <ul>
                <li>Advise commanders...</li>
                <!-- More items -->
            </ul>
            <p><strong>STATUS:</strong></p>
            <ul>
                <li>Advisory in the application of flight safety...</li>
            </ul>
            <p><strong>DIVISION OF WORK:</strong></p>
            <ul>
                <li>Remedial (including reporting and investigation).</li>
                <!-- More items -->
            </ul>
        </div>

        <!-- Tab 3 -->
        <div class="tab-pane fade" id="structure" role="tabpanel">
            <div class="alert alert-info">
                <h5><strong>ORGANIZATION</strong></h5>
            </div>
            <img class="img-fluid" src="assets/img/about/organisation.jpg" alt="Organization Chart">
        </div>

        <!-- Tab 4 -->
        <div class="tab-pane fade" id="responsibilities" role="tabpanel">
            <div class="alert alert-info">
                <h5><strong>RESPONSIBILITIES</strong></h5>
            </div>
            <h6>Responsibilities of Command Flight Safety</h6>
            <ul>
                <li>Conducting visits to flying units...</li>
                <!-- More items -->
            </ul>

            <h6 class="mt-4">Responsibilities of Base/Station Flight Safety</h6>
            <ul>
                <li>Assisting the Base/Station commander...</li>
                <!-- More items -->
            </ul>

            <h6 class="mt-4">Responsibilities of Squadron Flight Safety</h6>
            <ul>
                <li>Promoting high standards of risk awareness...</li>
                <!-- More items -->
            </ul>
        </div>
        </div>
        </div>
        </div>
        <hr>
    </main>
    <?php
    include 'template/footer.php';
    include 'template/foot.php';
    ?>

</body>

</html>