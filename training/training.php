<?php 
    include '../template/head.php';
?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
</head>
<body>
    <?php
    include '../template/header.php';
    ?>
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Training <i class="fa fa-tasks"></i>
                <div class="float-end">
                    <a href="../index.php" class="btn btn-info me-2"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:history.back()" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </h3>
        </div>

        <div class="row">
            <div class="col-lg-2">
                <!-- Nav Tabs -->
                <ul class="nav flex-column nav-pills" id="inspectorateTabs" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link active" id="org-tab" data-bs-toggle="pill" href="#competency_training" role="tab">Competency Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="functions-tab" data-bs-toggle="pill" href="#cpd" role="tab">CPD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#pipd" role="tab">PIPD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="responsibilities-tab" data-bs-toggle="pill" href="#outside_training" role="tab">Outside Training</a>
                    </li>
                </ul>
            </div>

             <!-- Right Side Content -->
            <div class="col-lg-10">
                <div class="tab-content" id="inspectorateTabsContent">
                    
                    <!-- Tab 1: Competency Training -->
                    <div class="tab-pane fade show active" id="competency_training" role="tabpanel">
                        <?php echo generateServiceCards('training-competency_training.php'); ?>
                    </div>
                    
                    <!-- Tab 2: CPD -->
                    <div class="tab-pane fade" id="cpd" role="tabpanel">
                        <?php echo generateServiceCards('training-cpd.php'); ?>
                    </div>
                    
                    <!-- Tab 3: PIPD Report -->
                    <div class="tab-pane fade" id="pipd" role="tabpanel">
                        <?php echo generateServiceCards('training-pipd.php'); ?>
                    </div>
                    
                    <!-- Tab 4: Outside Training -->
                    <div class="tab-pane fade" id="outside_training" role="tabpanel">
                        <?php echo generateServiceCards('training-outside_training.php'); ?>
                    </div>
                   
                </div>
            </div>
        </div>
        <hr>
    </main>

    <?php
    include '../template/footer.php';
    include '../template/foot.php';
    
    // Function to generate service cards
    function generateServiceCards($baseUrl) {
        $sections = [
            'AE' => ['color' => 'blue', 'icon' => 'building'],
            'AO' => ['color' => 'teal', 'icon' => 'people'],
            'AA' => ['color' => 'purple', 'icon' => 'journal-text'],
            'GE' => ['color' => 'pink', 'icon' => 'calendar-event'],
            'EE' => ['color' => 'orange', 'icon' => 'building'],
            'BE' => ['color' => 'green', 'icon' => 'people'],
            'CE' => ['color' => 'red', 'icon' => 'calendar-event']
        ];
        
        $html = '<div class="row text-center">';
        
        foreach ($sections as $section => $data) {
            $html .= '
            <div class="col-md-3 mb-3">
                <a href="'.$baseUrl.'?section='.$section.'" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-'.$data['color'].' bg-white">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-'.$data['icon'].' fs-3 text-'.$data['color'].' mb-3"></i>
                            <h6 class="mb-0 text-dark fw-semibold">'.$section.'</h6>
                        </div>
                    </div>
                </a>
            </div>';
        }
        
        $html .= '</div>';
        
        return $html;
    }
    ?>
    
    </body>
</html>