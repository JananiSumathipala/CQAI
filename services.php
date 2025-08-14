<?php include 'template/head.php'; ?>
<head>
    <link rel="stylesheet" href="assets/css/audit_card.css">
</head>
<body>
    <?php include 'template/header.php'; ?>
    
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
            <!-- Left Side Navigation -->
            <div class="col-lg-2">
                <ul class="nav flex-column nav-pills" id="inspectorateTabs" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link active" id="checklist-tab" data-bs-toggle="pill" href="#checklist" role="tab">Check List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="auditreport-tab" data-bs-toggle="pill" href="#auditreport" role="tab">Audit Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="feedback-tab" data-bs-toggle="pill" href="#feedback" role="tab">Feedback Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="rdproject-tab" data-bs-toggle="pill" href="#rdproject" role="tab">R&D Project Proposal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="latitude-tab" data-bs-toggle="pill" href="#latitude" role="tab">Latitude</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="leaflet-tab" data-bs-toggle="pill" href="#leaflet" role="tab">Modification Leaflet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="confidency-tab" data-bs-toggle="pill" href="#confidency" role="tab">Confidency</a>
                    </li>
                </ul>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-10">
                <div class="tab-content" id="inspectorateTabsContent">
                    
                    <!-- Tab 1: Check List -->
                    <div class="tab-pane fade show active" id="checklist" role="tabpanel">
                        <?php echo generateServiceCards('services-check.php'); ?>
                    </div>
                    
                    <!-- Tab 2: Audit Report -->
                    <div class="tab-pane fade" id="auditreport" role="tabpanel">
                        <?php echo generateServiceCards('services-auditreport.php'); ?>
                    </div>
                    
                    <!-- Tab 3: Feedback Report -->
                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                        <?php echo generateServiceCards('services-feedback.php'); ?>
                    </div>
                    
                    <!-- Tab 4: R&D Project Proposal -->
                    <div class="tab-pane fade" id="rdproject" role="tabpanel">
                        <?php echo generateServiceCards('services-r&dproject.php'); ?>
                    </div>
                    
                    <!-- Tab 5: Latitude -->
                    <div class="tab-pane fade" id="latitude" role="tabpanel">
                        <?php echo generateServiceCards('services-latitude.php'); ?>
                    </div>
                    
                    <!-- Tab 6: Modification Leaflet -->
                    <div class="tab-pane fade" id="leaflet" role="tabpanel">
                        <?php echo generateServiceCards('services-leaflet.php'); ?>
                    </div>
                    
                    <!-- Tab 7: Confidency -->
                    <div class="tab-pane fade" id="confidency" role="tabpanel">
                        <?php echo generateServiceCards('services-confidency.php'); ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <hr>
    </main>

    <?php
    include 'template/footer.php';
    include 'template/foot.php';
    
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