<?php include 'template/head.php'; ?>

<body>
    <?php
    include 'template/header.php';
    ?>
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Contacts <i class="fa fa-contact"></i>
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
                        <a class="nav-link active" id="contact-tab" data-bs-toggle="pill" href="#contact" role="tab">Contact details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="feedback-tab" data-bs-toggle="pill" href="#feedback" role="tab">Feedback</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="contact" role="tabpanel">
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-building fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-ae.php">AE </a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-people fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-ao.php">AO </a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-journal-text fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-aa.php">AA </a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-calendar-event fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-ge.php">GE</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-building fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-ee.php">EE</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-people fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-be.php">BE</a></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <i class="bi bi-calendar-event fs-2 text-primary"></i>
                                        <h6 class="mt-2 text-primary"><a href="services-checklist-ce.php">CE</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="feedback" role="tabpanel">
                        <div class="alert alert-info">
                            <h5><strong>Feedback</strong></h5>
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