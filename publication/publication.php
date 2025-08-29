<?php include '../template/head.php'; ?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include '../template/header.php'; ?>
    
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Publications <i class="fas fa-book"></i>
                <div class="float-end">
                    <a href="../index.php" class="btn btn-info me-2"><i class="fa fa-home"></i> Home</a>
                    <a href="javascript:history.back()" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </h3>
        </div>
        
        <div class="row text-center">
            <!-- Online Subscription Card -->
            <div class="col-md-4 mb-4">
                <a href="online_sub.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-globe fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Online Subscription</h5>
                            <p class="text-muted">Access to digital publications and resources</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Airworthiness Directives & Bulletins Card -->
            <div class="col-md-4 mb-4">
                <a href="ad_bulletins.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-file-alt fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Airworthiness Directives & Bulletins</h5>
                            <p class="text-muted">Regulatory updates and safety information</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- QAI Safety Newsletters Card -->
            <div class="col-md-4 mb-4">
                <a href="qai_news.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-newspaper fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">QAI Safety Newsletters</h5>
                            <p class="text-muted">Latest safety updates and industry insights</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Maintenance Programme Card -->
            <div class="col-md-4 mb-4">
                <a href="maintenace.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-cogs fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Maintenance Programme</h5>
                            <p class="text-muted">Scheduled maintenance plans and procedures</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Technical Library Card -->
            <div class="col-md-4 mb-4">
                <a href="tech_lib.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-book-open fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Technical Library</h5>
                            <p class="text-muted">Comprehensive collection of technical documents</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
    </main>

    <?php
    include '../template/footer.php';
    include '../template/foot.php';
    ?>
</body>
</html>