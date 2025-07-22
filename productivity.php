<?php include 'template/head.php'; ?>

<body>

    <?php
    include 'template/header.php';
    ?>
    <!-- Main Content -->
    <main class="container my-5 pt-5">
        <div class="page-header mb-4">
            <h3 class="colour-defult">Productivity <i class="fa fa-tasks"></i>
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
                        <a class="nav-link active" id="org-tab" data-bs-toggle="pill" href="#org" role="tab">OSH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="functions-tab" data-bs-toggle="pill" href="#functions" role="tab">Eventment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#structure" role="tab">Pub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#structure" role="tab">Tool & Technique </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="structure-tab" data-bs-toggle="pill" href="#structure" role="tab">QCC </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="responsibilities-tab" data-bs-toggle="pill" href="#responsibilities" role="tab">RESPONSIBILITIES</a>
                    </li> -->
                </ul>
            </div>

            <div class="col-lg-10">
                <!-- Tab Content -->
                <div class="tab-content" id="inspectorateTabsContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="org" role="tabpanel">
                        <div class="alert alert-info">
                            <h5><strong>THE ORGANIZATION</strong></h5>
                        </div>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur quisquam quis est quod mollitia. Culpa veniam, facilis, incidunt numquam obcaecati temporibus quis qui maiores nulla odio magnam. A deserunt cum vitae provident quas rerum ea explicabo mollitia, labore neque commodi aperiam asperiores. Maxime, aut aperiam nulla molestiae ipsam odit, rerum esse laborum exercitationem, animi autem impedit eligendi optio perspiciatis est! Mollitia, error similique. Consequuntur veniam ab nesciunt rem aliquid aliquam sequi maiores excepturi, iste tenetur. Sed, illum? Ex, labore! Explicabo officiis perferendis id deleniti similique ratione soluta veritatis blanditiis. Pariatur aperiam quasi sunt esse? Illo possimus animi recusandae architecto maxime, obcaecati consectetur dolorum. Voluptatem optio perferendis aliquid veniam? Officia, corrupti. Numquam, officiis! Corrupti dolorem saepe rem nihil quas nam quisquam, provident, labore distinctio blanditiis modi facere aliquam iusto assumenda expedita ducimus deserunt delectus cupiditate vero corporis amet. Fugit ea deserunt, ipsam laborum itaque atque dicta dolores, dolore expedita adipisci porro distinctio inventore officia explicabo nulla. Possimus et mollitia blanditiis. Earum, dolorum omnis nam eius quisquam laborum tenetur accusamus velit ullam, magnam a facere aspernatur tempore deleniti quos explicabo ea possimus corrupti consequuntur totam ad enim. Dignissimos facere exercitationem quidem veniam praesentium eos? Minima accusamus temporibus officia nesciunt assumenda voluptate velit dignissimos fugiat libero eligendi? Expedita non, reiciendis porro nesciunt libero quaerat, quidem repellat ad, maxime nihil hic animi ducimus doloribus eveniet eaque quisquam culpa alias voluptatem minus iusto magnam laboriosam. Eos voluptatem tempora asperiores neque maiores, autem deleniti quo blanditiis impedit iste voluptatum, ea sapiente? Quos id similique magnam quae.</p>
                    </div>

                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="functions" role="tabpanel">
                        <div class="alert alert-info">
                            <h5><strong>FUNCTIONS</strong></h5>
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

                    <!-- Tab 3 -->
                    <div class="tab-pane fade" id="structure" role="tabpanel">
                        <div class="alert alert-info">
                            <h5><strong>ORGANIZATION</strong></h5>
                        </div>
                        <img class="img-fluid" src="assets/img/about/organisation.jpg" alt="Organization Chart">
                    </div>

                    <!-- Tab 4 -->
                    <div class="tab-pane fade" id="responsibilities" role="tabpanel">
                        <div class="alert alert-info">
                            <h5><strong>RESPONSIBILITIES</strong></h5>
                        </div>
                        <h6>Responsibilities of Command Flight Safety</h6>
                        <ul>
                            <li>Conducting visits to flying units...</li>
                            <!-- More items -->
                        </ul>

                        <h6 class="mt-4">Responsibilities of Base/Station Flight Safety</h6>
                        <ul>
                            <li>Assisting the Base/Station commander...</li>
                            <!-- More items -->
                        </ul>

                        <h6 class="mt-4">Responsibilities of Squadron Flight Safety</h6>
                        <ul>
                            <li>Promoting high standards of risk awareness...</li>
                            <!-- More items -->
                        </ul>
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