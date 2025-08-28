<?php include '../template/head.php'; ?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <?php include '../template/header.php'; ?>
    
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Publications <i class="fa fa-book"></i>
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
                    <a class="nav-link active" id="online_sub-tab" data-bs-toggle="pill" href="#online_sub" role="tab">Online Subscription</a>
                    <a class="nav-link" id="ad_bulleting-tab" data-bs-toggle="pill" href="#ad_bulleting" role="tab">Airworthiness Directives & Bulletins</a>
                    <a class="nav-link" id="qai_news-tab" data-bs-toggle="pill" href="#qai_news" role="tab">QAI Safety Newsletters</a>
                    <a class="nav-link" id="maintenance-tab" data-bs-toggle="pill" href="#maintenance" role="tab">Maintenance Programme</a>
                    <a class="nav-link" id="tech_lib-tab" data-bs-toggle="pill" href="#tech_lib" role="tab">Technical Library</a>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-9 col-xl-10">
                <div class="tab-content" id="inspectorateTabsContent">
                    
                    <!-- Tab 1: Online Subscription -->
                    <div class="tab-pane fade show active" id="online_sub" role="tabpanel">
                        <?php echo generateServiceCards('publications-online_sub.php'); ?>
                    </div>

                    <!-- Tab 2: AD & Bulletins -->
                    <div class="tab-pane fade" id="ad_bulleting" role="tabpanel">
                        <?php echo generateServiceCards('publications-ad_bulleting.php'); ?>
                    </div>
                    
                    <!-- Tab 3: QAI Safety Newsletters -->
                    <div class="tab-pane fade" id="qai_news" role="tabpanel">
                        <?php echo generateServiceCards('publications-qai_news.php'); ?>
                    </div>
                    
                    <!-- Tab 4: Maintenance Programme -->
                    <div class="tab-pane fade" id="maintenance" role="tabpanel">
                        <?php echo generateServiceCards('publications-maintenance.php'); ?>
                    </div>
                    
                    <!-- Tab 5: Technical Library -->
                    <div class="tab-pane fade" id="tech_lib" role="tabpanel">
                        <?php echo generateServiceCards('publications-tech_lib.php'); ?>
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