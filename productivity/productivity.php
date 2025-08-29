<?php include '../template/head.php'; ?>
<head>
    <link rel="stylesheet" href="../assets/css/audit_card.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
        
        <div class="row text-center">
            <!-- Occupational Safety & Health Card -->
            <div class="col-md-4 mb-4">
                <a href="osh_categories.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-shield-check fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Occupational Safety & Health</h5>
                            <p class="text-muted">Workplace safety standards and health regulations</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Environment Card -->
            <div class="col-md-4 mb-4">
                <a href="environment_categories.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-tree fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Environment</h5>
                            <p class="text-muted">Environmental protection and sustainability initiatives</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Quality Control Circles Card -->
            <div class="col-md-4 mb-4">
                <a href="qcc.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-diagram-3 fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Quality Control Circles</h5>
                            <p class="text-muted">Team-based quality improvement and problem-solving</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <!-- Awards Card -->
            <div class="col-md-4 mb-4">
                <a href="awards.php" class="card-link text-decoration-none">
                    <div class="card hover-effect border border-2 border-primary bg-white" style="height: 210px;">
                        <div class="card-body text-center p-4">
                            <i class="bi bi-trophy fs-1 text-primary mb-3"></i>
                            <h5 class="mb-2 text-dark fw-semibold">Awards</h5>
                            <p class="text-muted">Recognition programs for excellence and achievement</p>
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