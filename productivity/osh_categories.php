<?php include '../template/head.php'; ?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #1a4f72;
            --secondary-color: #ffcc00;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: #333;
            line-height: 1.6;
        }
        
        .colour-defult {
            color: var(--primary-color) !important;
        }
        
        .page-header {
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        
        .nav-pills .nav-link {
            color: #495057;
            border-radius: 0;
            padding: 12px 20px;
            margin-bottom: 8px;
            transition: all 0.3s;
            border-left: 3px solid transparent;
        }
        
        .nav-pills .nav-link.active, 
        .nav-pills .nav-link:hover {
            background-color: rgba(26, 79, 114, 0.1);
            color: var(--primary-color);
            border-left: 3px solid var(--primary-color);
        }
        
        .tab-content {
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .nav-pills {
                flex-direction: row !important;
                overflow-x: auto;
                white-space: nowrap;
                padding-bottom: 10px;
            }
            
            .nav-pills .nav-item {
                display: inline-block;
                float: none;
            }
            
            .nav-pills .nav-link {
                border-left: none;
                border-bottom: 3px solid transparent;
                margin-bottom: 0;
                margin-right: 5px;
            }
            
            .nav-pills .nav-link.active, 
            .nav-pills .nav-link:hover {
                border-left: none;
                border-bottom: 3px solid var(--primary-color);
            }
        }
        
        @media (max-width: 768px) {
            .page-header h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include '../template/header.php'; ?>
    
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Productivity<i class="fa fa-tasks"></i>
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
                    <a class="nav-link active" id="checklist-tab" data-bs-toggle="pill" href="#checklist" role="tab">Audit Check list</a>
                    <a class="nav-link" id="auditreport-tab" data-bs-toggle="pill" href="#auditreport" role="tab">Audit Reports</a>
                    <a class="nav-link" id="feedback-tab" data-bs-toggle="pill" href="#feedback" role="tab">Audit Plans</a>
                    <a class="nav-link" id="osh_manual-tab" data-bs-toggle="pill" href="#osh_manual" role="tab">OSH Manual</a>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-9 col-xl-10">
                <div class="tab-content" id="inspectorateTabsContent">
                    
                    <!-- Tab 1: Audit Plan -->
                    <div class="tab-pane fade show active" id="checklist" role="tabpanel">
                        <?php echo generateServiceCards('services-check.php'); ?>
                    </div>
                    
                    <!-- Tab 2: Audit Check list -->
                    <div class="tab-pane fade" id="auditreport" role="tabpanel">
                        <?php echo generateServiceCards('services-auditreport.php'); ?>
                    </div>
                    
                    <!-- Tab 3: Audit Reports -->
                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                        <?php echo generateServiceCards('services-feedback.php'); ?>
                    </div>

                                        
                    <!-- Tab 2: Audit Check list -->
                    <div class="tab-pane fade" id="osh_manual" role="tabpanel">
                        <?php echo generateServiceCards('services-auditreport.php'); ?>
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
            'Electrical Engineering' => ['img' => 'EE.png'],
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
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