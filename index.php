<?php
include "conecction.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofolio</title>
        <link rel="icon" type="image/x-icon" href="assets/kimetsu.svg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <?php
    $strSQL = "SELECT * FROM tugas";
    $execStrSQL = mysqli_query($conn, $strSQL);
    if (mysqli_num_rows($execStrSQL) > 0){
        while ($row = mysqli_fetch_assoc($execStrSQL)){

    ?>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">HOME</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#biodata">Biodata</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portofolio">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase"><?= $row["nama"]?></h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Halo nama saya Pram</h2>
                        <a class="btn btn-primary" href="#biodata">Ingin tahu saya lebih lanjut?</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="biodata">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Biodata</h2>
                        <p class="text-white-50"><?= $row["biodata"]?></p>
                        <a class="btn btn-primary" href="#skill">Ingin tahu skill saya?</a>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/guts.png" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="skill-section bg-light" id="skill">
            <div class="container px-4 px-lg-5">
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-5"><img class="img-fluid" src="assets/img/ps.jpg" alt="..." /></div>
                    <div class="col-lg-5">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Skill</h4>
                                    <p class="mb-0 text-white-50"><?= $row["skill"]?></p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-5"><img class="img-fluid" src="assets/img/pr.jpg" alt="..." /></div>
                    <div class="col-lg-5 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <a class="btn btn-primary" href="#portofolio">Ingin tahu portofolio saya?</a>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTOH -->
        <section class="projects-section bg-light" id="portofolio">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/tiger glitch.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Portofolio</h4>
                            <p class="text-black-50 mb-0"><?= $row["portofolio"]?></p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/sl.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Penjelasan Singkat</h4>
                                    <p class="mb-0 text-white-50"><?= $row["penjelasan1"]?></p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/Guts berserk.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Penjelasan Singkat</h4>
                                    <p class="mb-0 text-white-50"><?= $row["penjelasan2"]?></p>
                                    <a class="btn btn-primary" href="#contact">Ingin mengetahui media sosial saya?</a>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container px-4 px-lg-5 h-100 justify-content-center">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card py-4 h-100">
                                <div class="card-body text-center">
                                    <i class="fas fa-envelope text-primary mb-2"></i>
                                    <h4 class="text-uppercase m-0">Instagram</h4>
                                    <hr class="my-4 mx-auto" />
                                    <div class="small text-black-100"><a href="https://www.instagram.com/mphstphls_/!">mphstphls_</a></div>
                                </div>
                                <div class="row gx-4 gx-lg-5 justify-content-center">
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="container px-4 px-lg-5 text-center">
                
                <p> </P>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div><?= $row["contact"]?></div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; My website 2021</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
<?php
        }
    }
?>
</html>
