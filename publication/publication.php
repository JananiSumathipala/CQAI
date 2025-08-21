<?php include '../template/head.php'; ?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
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
            <div class="col-lg-2">
                <ul class="nav flex-column nav-pills" id="inspectorateTabs" role="tablist" aria-orientation="vertical">
                    <li class="nav-item">
                        <a class="nav-link active" id="publication_update-tab" data-bs-toggle="pill" href="#publication_update" role="tab">Publication Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="master_copies-tab" data-bs-toggle="pill" href="#master_copies" role="tab">Master Copies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="publication_index-tab" data-bs-toggle="pill" href="#publication_index" role="tab">Publication Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="worksheet-tab" data-bs-toggle="pill" href="#worksheet" role="tab">Worksheets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="service_shedule-tab" data-bs-toggle="pill" href="#service_shedule" role="tab">Service Shedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ad_bulleting-tab" data-bs-toggle="pill" href="#ad_bulleting" role="tab">AD & Bulletings</a>
                    </li>
                </ul>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-10">
                <div class="tab-content" id="inspectorateTabsContent">
                    
                    <!-- Tab 1: Publication Update -->
                    <div class="tab-pane fade show active" id="publication_update" role="tabpanel">
                        <?php echo generateServiceCards('publications-publication_update.php'); ?>
                    </div>
                    
                    <!-- Tab 2: Master Copies -->
                    <div class="tab-pane fade" id="master_copies" role="tabpanel">
                        <?php echo generateServiceCards('publications-master_copies.php'); ?>
                    </div>
                    
                    <!-- Tab 3: Publication Index -->
                    <div class="tab-pane fade" id="publication_index" role="tabpanel">
                        <?php echo generateServiceCards('publications-publication_index.php'); ?>
                    </div>
                    
                    <!-- Tab 4: Worksheets -->
                    <div class="tab-pane fade" id="worksheet" role="tabpanel">
                        <?php echo generateServiceCards('publications-worksheet.php'); ?>
                    </div>
                    
                    <!-- Tab 5: Service Shedule  -->
                    <div class="tab-pane fade" id="service_shedule" role="tabpanel">
                        <?php echo generateServiceCards('publications-service_shedule.php'); ?>
                    </div>
                    
                    <!-- Tab 6: AD & Bulletings -->
                    <div class="tab-pane fade" id="ad_bulleting" role="tabpanel">
                        <?php echo generateServiceCards('publications-ad_bulleting.php'); ?>
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