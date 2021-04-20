<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- inisialisasi koneksi -->
    <!-- jika online, user & password database, itu biasanya sama dengan user & password login cpanel. 
        Tetapi jika online, disarankan membuat user baru, terutama jika shared hosting -->
    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'resume');
    $displayprofile = mysqli_query($koneksi, 'select * from profile');
    $profile = mysqli_fetch_object($displayprofile);
    ?>
    <!-- akhir koneksi -->
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">


            </span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/p2.jpg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <!-- tampilkan nama  -->
                    <!-- setiap rangkaian string adalah array of character -->
                    <!-- vb, split, php, explode -->
                    <?php
                    $nama=explode(' ',$profile->username);
                    echo $nama[0];
                    ?>
                    <span class="text-primary">
                        <?php
                        echo $nama[1];
                        ?>
                    </span>
                    <!-- akhir dari tampilkan nama -->
                </h1>
                <div class="subheading mb-5">
                    <!-- tampilkan alamat dan email -->
                    <?php
                    echo $profile->useraddress;
                    ?>
                    <a href="mailto:name@email.com">
                        <?php
                        echo $profile->useremail;
                        ?>
                    </a>
                    <!-- akhir dari tampilan alamat dan email -->
                </div>
                <p class="lead mb-5">
                   <!-- tampilkan deskripsi -->
                   <?php
                   echo $profile->userdescription;
                   ?>
                   <!-- akhir tampilan deskripsi -->
            </p>
                <div class="social-icons">
                    <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                <?php
                $displayinterest=mysqli_query($koneksi,"select * from interest");
                while ($row=mysqli_fetch_assoc($displayinterest))
                {
                ?>
                <p><?php
                   echo $row['interestdesc'];
                }
                   ?>
                   </p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">
                    <!-- tampilkan daftar awards -->
                    
                        <?php
                        $displayawards=mysqli_query($koneksi,"select * from awards");
                        while ($row=mysqli_fetch_assoc($displayawards))
                        {
                           
                        ?>
                        <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        <?php
                         echo $row['awardsname'];
                        }
                        ?>
                       
                    </li>
                    <!-- akhir tampilan awards -->
                    
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>