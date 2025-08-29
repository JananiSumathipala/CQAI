<?php include '../template/head.php'; ?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        .full-width-cards .row {
            width: 100%;
            margin: 0;
        }
        .full-width-cards .card {
            height: 100%;
            transition: transform 0.2s;
        }
        .full-width-cards .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .full-width-cards .col-md-3 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }
        @media (max-width: 992px) {
            .full-width-cards .col-md-3 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media (max-width: 576px) {
            .full-width-cards .col-md-3 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <?php include '../template/header.php'; ?>
    
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Maintenace Programme<i class="fa fa-tasks"></i>
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
                    <a class="nav-link active" id="schedule-tab" data-bs-toggle="pill" href="#schedule" role="tab">Servicing Schedule</a>
                    <a class="nav-link" id="worksheets-tab" data-bs-toggle="pill" href="#worksheets" role="tab">Worksheets</a>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-9 col-xl-10">
                <div class="tab-content full-width-cards" id="inspectorateTabsContent">

                    <!-- Tab 1: Servicing Schedule -->
                    <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                        <?php echo generateServiceCards('services-schedule.php'); ?>
                    </div>
                    
                    <!-- Tab 2: Worksheets -->
                    <div class="tab-pane fade" id="worksheets" role="tabpanel">
                        <?php echo generateServiceCards('services-worksheets.php'); ?>
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
            'Electrical Engineering' => ['img' => 'EE.png'],
            'General Engineering' => ['img' => 'GE.png'],
        ];
        
        $html = '<div class="row g-4">'; // Remove text-center and use g-4 for consistent gap
        
        foreach ($sections as $section => $data) {
            $html .= '
            <div class="col-md-4"> <!-- Changed to col-md-4 for 3 equal-width columns -->
                <a href="'.$baseUrl.'?section='.urlencode($section).'" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white h-100">
                        <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                            <img src="../assets/img/icons/'.$data['img'].'" alt="'.$section.'" style="width:60px;height:60px;" class="mb-3 mx-auto"/>
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