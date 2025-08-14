<?php include 'template/head.php'; ?>
<head>
    <link rel="stylesheet" href="assets/css/audit_card.css">
</head>
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
                    <li class="nav-item">
                        <a class="nav-link" id="functions-tab" data-bs-toggle="pill" href="#functions" role="tab">Audit Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#structure" role="tab">Feedback Report</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#rd-project" role="tab">R&D Project Proposal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#structure" role="tab">Latitude</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#leaflet" role="tab">Modification Leaflet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#confidency" role="tab">Confidency</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="responsibilities-tab" data-bs-toggle="pill" href="#responsibilities" role="tab">RESPONSIBILITIES</a>
                    </li> -->
                </ul>
            </div>

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                    <!-- Tab 1  check-->
                    <div class="tab-pane fade" id="org" role="tabpanel">
                        <div class="row text-center">
             
                            <!-- AE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-check.php?section=AE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-blue bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AO Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-check.php?section=AO" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-teal bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AA Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=AA" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-purple bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- GE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=GE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-pink bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        
                        <div class="row text-center">
                            <!-- EE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-check.php?section=EE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-orange bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- BE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-check.php?section=BE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-green bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-green mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- CE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-check.php?section=CE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-red bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>


          
            
            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                    <!-- Tab 2 audit -->
                    <div class="tab-pane fade" id="functions" role="tabpanel">
                        <div class="row text-center">
                            <!-- AE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=AE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-blue bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AO Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=AO" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-teal bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AA Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=AA" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-purple bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- GE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=GE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-pink bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row text-center">    
                            <!-- EE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=EE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-orange bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- BE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=BE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-green bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-green mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- CE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-auditreport.php?section=CE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-red bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                <!-- Tab 3  feedback-->
                    <div class="tab-pane fade" id="structure" role="tabpanel">
                                    <div class="row text-center">
                                        <!-- AE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=AE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-blue bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- AO Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=AO" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-teal bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- AA Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=AA" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-purple bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- GE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=GE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-pink bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> 

                                    <div class="row text-center">
                                        <!-- EE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=EE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-orange bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- BE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=BE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-green bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-people fs-3 text-green mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- CE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-feedback.php?section=CE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-red bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    
                                    </div>
                    </div>    
                </div>
            </div>

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                <!-- Tab 4 -->
                    <div class="tab-pane fade" id="responsibilities" role="tabpanel">

                        <div class="row text-center">
                            <!-- AE Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-ae.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-blue bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AO Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-ao.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-teal bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AA Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-aa.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-purple bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- GE Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-ge.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-pink bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="row text-center">
                            <!-- EE Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-ee.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-orange bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- BE Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-be.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-green bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-green mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- CE Card -->
                            <div class="col-md-3 mb-4">
                                <a href="services-checklist-ce.php" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-red bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                    <!-- Tab 6  leaflet-->
                    <div class="tab-pane fade" id="leaflet" role="tabpanel">
                        <div class="row text-center">
             
                            <!-- AE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=AE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-blue bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AO Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=AO" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-teal bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AA Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=AA" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-purple bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- GE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=GE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-pink bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> 
                        
                        <div class="row text-center">
                            <!-- EE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=EE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-orange bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- BE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=BE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-green bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-green mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- CE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-leaflet.php?section=CE" class="card-link text-decoration-none">
                                    <div class="card hover-effect border border-2 border-red bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                 </div>


            </div>

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">

                <!-- Tab 4 -->
                <div class="tab-pane fade" id="rd-project" role="tabpanel">

                      <div class="row text-center">
                            <!-- AE Card -->
                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=AE" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-blue bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AO Card -->

                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=AO" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-teal bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- AA Card -->

                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=AA" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-purple bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            

                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=GE" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-pink bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    </div> 
                        
                        <div class="row text-center">
                            <!-- EE Card -->

                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=EE" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-orange bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- BE Card -->

                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=BE" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-green bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-people fs-3 text-green mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <!-- CE Card -->

                            <div class="col-md-3 mb-3">
                                <a href="services-r&dproject.php?section=CE" class="card-link text-decoration-none">

                                    <div class="card hover-effect border border-2 border-red bg-white">
                                        <div class="card-body text-center p-4">
                                            <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                            <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


            

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                <!-- Tab 3  feedback-->
                    <div class="tab-pane fade" id="confidency" role="tabpanel">
                                    <div class="row text-center">
                                        <!-- AE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=AE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-blue bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-building fs-3 text-blue mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">AE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- AO Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=AO" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-teal bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-people fs-3 text-teal mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">AO</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- AA Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=AA" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-purple bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-journal-text fs-3 text-purple mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">AA</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- GE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=GE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-pink bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-calendar-event fs-3 text-pink mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">GE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> 

                                    <div class="row text-center">
                                        <!-- EE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=EE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-orange bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-building fs-3 text-orange mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">EE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- BE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=BE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-green bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-people fs-3 text-green mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">BE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <!-- CE Card -->
                                        <div class="col-md-3 mb-3">
                                            <a href="services-confidency.php?section=CE" class="card-link text-decoration-none">
                                                <div class="card hover-effect border border-2 border-red bg-white">
                                                    <div class="card-body text-center p-4">
                                                        <i class="bi bi-calendar-event fs-3 text-red mb-3"></i>
                                                        <h6 class="mb-0 text-dark fw-semibold">CE</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    
                                    </div>
                        
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