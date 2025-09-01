<?php 
    include '../template/head.php';
?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php
    include '../template/header.php';
    ?>
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Trainings <i class="fa fa-tasks"></i>
                <div class="float-end">
                    <a href="../index.php" class="btn btn-info me-2"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:history.back()" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </h3>
        </div>

        <div class="row">
            <!-- Left Side Navigation -->
            <div class="col-lg-3 col-xl-2 mb-4">
                <div class="nav flex-column nav-pills" id="inspectorateTabs" role="tablist">
                    <a class="nav-link active" id="competency_training-tab" data-bs-toggle="pill" href="#competency_training" role="tab">Approved Training Syllabus</a>
                    <a class="nav-link" id="cpd-tab" data-bs-toggle="pill" href="#cpd" role="tab">Continues Professional Development</a>
                    <a class="nav-link" id="pipd-tab" data-bs-toggle="pill" href="#pipd" role="tab">Productivity Improvement Professional Development</a>
                    <a class="nav-link" id="outside_training-tab" data-bs-toggle="pill" href="#outside_training" role="tab">Outside Training</a>
                </div>
            </div>

             <!-- Right Side Content -->
            <div class="col-lg-9 col-xl-10">
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
    function generateServiceCards($baseUrl) {
        $sections = [
            'Aeronautical Engineering' => ['img' => 'AE.png'],
            'Air Operations' => ['img' => 'AO.png'],
            'Construction Engineering' => ['img' => 'CE.png'],
            'Electronic Engineering' => ['img' => 'EE.png'],
            'General Engineering' => ['img' => 'GE.png'],
            'Ground Operations' => ['img' => 'GO.png'],
            'Productivity Management' => ['img' => 'PEM.png'],        
            'Training' => ['img' => 'training.png'],
        ];
        
        $html = '<div class="row text-center">';
        
        foreach ($sections as $section => $data) {
            $html .= '
            <div class="col-md-3 mb-4">
                <a href="'.$baseUrl.'?section='.urlencode($section).'" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white">
                        <div class="card-body text-center p-4">
                            <img src="../assets/img/icons/'.$data['img'].'" alt="'.$section.'" style="width:60px;height:60px;" class="mb-3"/>
                            <h6 class="mb-0 text-dark fw-semibold">'.$section.'</h6>
                        </div>
                    </div>
                </a>
            </div>';
        }
        
        $html .= '</div>';
        
        return $html;
    }
    
    include '../template/footer.php';
    include '../template/foot.php';
    ?>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Handle URL hash for direct tab access
        document.addEventListener("DOMContentLoaded", function() {
            var hash = window.location.hash;
            if (hash) {
                var tabTrigger = document.querySelector('a[href="' + hash + '"]');
                if (tabTrigger) {
                    var tab = new bootstrap.Tab(tabTrigger);
                    tab.show();
                }
            }
            
            // Update URL hash when tabs are shown
            var tabEls = document.querySelectorAll('a[data-bs-toggle="pill"]');
            tabEls.forEach(function(tabEl) {
                tabEl.addEventListener('shown.bs.tab', function (e) {
                    history.replaceState(null, null, e.target.getAttribute('href'));
                });
            });
        });
    </script>
</body>
</html>