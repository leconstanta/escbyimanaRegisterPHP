<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Escbyimana Registration platform">
    <meta name="author" content="Muhirwe Leo Constantin">

    <!--bootstrap link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--bootstrap script-->
    

    <!--Bootstrap icon-->
    <!-- Option 1:  Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/student.css">
    <title>ESC BYIMANA | Register</title>

    <!--favicon-->
    <link rel="shortcut icon" href="images/byimanalogo.png" type="image/x-icon">

</head>

<body class="vh-100 bg-dark">

    <div class="spinner-wrapper text-light">
        <div class="spinner-grow text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>       
    </div>
    <!--Navbar-->

    <nav class="navbar navbar-expand-lg  bg-white">
        <div class="container">
            <!--Logo-->
            <div>
                <img src="images/byimanalogo.png" title="Byimana Logo" loading="lazy" class="ByimanaLogo">
                <a class="navbar-brand text-black" href="#" style="font-size: 22px;">
                    ESC BYIMANA
                </a>
            </div>
            

            <!--toggler btn-->
            <button 
            class="navbar-toggler shadow-none "
            style="background: transparent;
            font-size: 18px;
            border: none !important;
            " 
            type="button" 
            data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasNavbar" 
            aria-controls="offcanvasNavbar" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>

            <!--sidebar-->
            <div class="sidebar offcanvas offcanvas-start" 
                tabindex="-1" 
                id="offcanvasNavbar" 
                aria-labelledby="offcanvasNavbarLabel"
            >
            <!--sidebar header-->
            <div class="offcanvas-header text-white border-bottom">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"
            style="font-size: 17px;">
                Ecole Des Science Byimana
            </h5>
            <button 
                type="button" 
                class="btn-close btn-close-black shadow-none" 
                data-bs-dismiss="offcanvas" 
                aria-label="Close"
            ></button>
            </div>

            <!--sidebar body-->
            <div class="offcanvas-body d-flex 
            flex-column flex-lg-row p-4 p-lg-0">
            <ul class="navbar-nav justify-content-center 
            align-items-center fs-5 flex-grow-1 pe-3">
                <li class="nav-item mx-2">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link active" style="color: rgba(46, 46, 229, 0.762);" href="student.php">Student</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="admin.php">Adminstration</a>
                </li>
                <li class="nav-item mx-2">

                    <button 
                        class="btn btn-white btn-sm nav-button" 
                        data-bs-toggle="modal"
                        data-bs-target="#enroll"
                        >
                        <span class="nav-button-span">Contact us</span>
                    </button>
                    
                </li>
            
            </ul>
            <div class="d-flex flex- flex-lg-row align-items-center justify-content-center gap-3">
                <a href="https://escbyimana.co.rw/Aboutus.html" class="text-black about" style="font-family: Poor Richard;">About us</a>
                <a href="https://escbyimana.co.rw/" class="text-black text-decoration-none
                px-3 py-1 rounded-2 about" style="background-color: rgba(172, 171, 171, 0.276); font-family: Poor Richard;">visit</a>
            </div>
            </div>
        </div>
        </div>
    </nav>

    <!--main-->
    <section class="container-fluid">
        <div class="studentForm1 my-5 text-start container">
            <form action="form2.php" method="POST" class="mx-3">
                <h2 class=" text-center mb-3 mt-4">Personal Information</h2>
                <div class="form1h"></div>
                
                <!-- name -->
                <div class="input-group bg-white mb-3 mt-5 input-box">
                    <span class="input-group-text"><i class="bi bi-person-badge-fill"></i></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username"  maxlength="45">
                      <label for="floatingInputGroup1">Username</label>
                    </div>
                </div>

                <!-- gender -->
                <div class="form-floating mb-3 input-box">
                    <select class="form-select form-select-sm" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Choose Your Gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                    <label for="floatingSelect">Gender</label>
                </div>

                <!-- DOB -->
                <div class="mb-3 input-box">
                    <label for="text" class="form-label text-black">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" required>
                </div>

                <!-- Nationality -->
                <div class="input-group mb-3 input-box">
                    <span class="input-group-text"><i class="bi bi-flag-fill"></i></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" maxlength="10">
                      <label for="floatingInputGroup1">Nationality</label>
                    </div>
                </div>

                <!-- Email -->
                <div class="form-floating mb-3 input-box">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" maxlength="40">
                    <label for="floatingInput">Email address</label>
                </div>

                <!--disability  -->
                <div class="form-floating mb-3 input-box">
                    <input type="text" class="form-control" id="floatingInput" placeholder="your disability ,ex: blind"  maxlength="40">
                    <label for="floatingInput">Disability</label>
                </div>

                <!-- official paper -->
                <div class="mb-3 input-box">
                    <label  class="form-label text-dark">Official Paper</label><br>
                    <input type="radio" name="op" value="Passport"><span class="" style="margin-right: 15px;">Passport</span>
                    <input type="radio" name="op" value="National ID"><span class="" style="margin-right: 15px;">National ID</span>
                    <input type="radio" name="op" value="Driving License"><span class="" style="margin-right: 15px;">Driving License</span>
                    <input type="radio" name="op" value="None"><span class="">None</span>
                </div>

                <!-- official No -->
                <div class="form-floating mb-3 input-box">
                    <input type="text" max="9" maxlength="17" minlength="15" class="form-control">
                    <label for="floatingInput">Official Paper Number</label>
                </div>


                <button type="submit" class="w-100 bg-dark my-3">
                    <a href="form2.html" class="text-decoration-none text-white">Next</a></button>

                <div class="text-center text-dark">
                    <p><i class="bi bi-hand-thumbs-up"></i><a href="form2.html" class="text-decoration-none text-white">Next</a>
                        Thank you for registering your personal information ?
                        <i class="bi bi-hand-thumbs-up"></i>
                    </p>
                    <p class="text-warning">1/5</p>
                </div>
                
            </form>
        </div>

    </section>
    

    <!--footer-->
    <footer class="text-white pt-5 pb-4 position-relative">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                
                <div class="col-lg-3 col-sm-6 col-xs-6 mx-auto text-sm-start mt-3">
                    <h5 class="text-uppercase mb-3 text-white fw-bold text-sm-start hfoot">
                        Esc Byimana
                    </h5>
                    <p class="fotrprag">
                        "Providing inclusive and wholistic education grounded
                        in christian values enabling our student to be good
                        christians and good citizens"
                    </p>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6 col-md-push-1  text-sm-start mt-3">
                    <h5 class="text-uppercase mb-3 text-white fw-bold text-sm-start hfoot">
                        QUICK LINKS
                    </h5>

                    <ul class="footer-links list-unstyled">
                    <li>
                        <a href="index.php" class="link" style="text-decoration: none;">Home</a>
                    </li>
                    <li>
                        <a href="student.php" class="link" style="text-decoration: none;">Student</a>
                    </li>
                    <li>
                        <a href="admin.php" class="link" style="text-decoration: none;">Administration</a>
                    </li>
                    <li>
                        <a href="https://escbyimana.co.rw/Aboutus.html" class="link" style="text-decoration: none;">About</a>
                    </li>
                    </ul>

                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6 col-md-push-1 text-sm-start mt-3">
                    <h5 class="text-uppercase mb-3 text-white fw-bold hfoot">
                        Contacts
                    </h5>
                    <ul class="list-unstyled">
                        <li class="list-item">
                            <a href="https://twitter.com/EscByimana" target="_blank"  
                            class="btn-floating btn-sm text-decoration-none link"
                            ><i class="bi bi-twitter"></i>@EscByimana</a>
                        </li>
                        <li class="list-item">
                            <a href="https://rw.linkedin.com/in/ecole-byimana-337a09167" target="_blank" 
                            class="btn-floating btn-sm text-decoration-none link"
                            ><i class="bi bi-linkedin"></i>Ecole Byimana</a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank" 
                            class="btn-floating btn-sm text-decoration-none link"
                            ><i class="bi bi-google"></i>escbyimana@gmail.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.youtube.com/channel/UCkQNI83wTS5zKyK62lcjKgA" target="_blank" 
                            class="btn-floating btn-sm text-decoration-none link"
                            ><i class="bi bi-youtube"></i>ESC Byimana</a>
                        </li>
                    </ul>
                    
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-6 col-md-push-1 text-sm-start mt-3">
                    <h5 class="text-uppercase mb-3 text-white fw-bold hfoot">
                        OPEN HOURS
                    </h5>
                    <div>
                        <p class="link">
                            Our support available to help you 24 hours a day, seven days a week.
                        </p>
                    </div>
                    <ul class="footer-links list-unstyled">
                        <li class="link">
                            Monday-Friday: <span>8am to 5pm</span>
                        </li>
                        <li class="link">
                            Saturday: <span>10am to 3pm</span>
                        </li>
                        <li class="link">
                            Sunday: <span>Closed</span>
                        </li>
                    </ul>
                    

                </div>
            
            <hr class="mb-4 mt-4">

            <div class="align-items-center">
                <div class="col-lg-md-12">
                    <p>Copyright &copy; 2025 Ecole Des Science Byimana All Rights Reserved.
                        <a href="#" class="position-absolute bottom-0 end-0 p-5 text-warning">
                            <i class="bi bi-airplane-engines h1 arrow"></i>
                        </a>
                    </p>
                </div>

            </div>
            <div class="align-items-center p-5">
                <!-- <p>Designed BY</p>
                <img src="images/logo(1).png" alt="" class="mark"> -->
            </div>
        </div>
    </footer>

        <!-- modal for contact us button -->

        <div class="modal fade" 
            id="enroll" 
            tabindex="-1" 
            aria-labelledby="enrollLabel" 
            aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title text-white" 
                        id="enrollLabel">Contact us</h5>
                        <button type="button" 
                        class="btn-close btn-close-white" 
                        data-bs-dismiss="modal" 
                        aria-label="Close"
                        ></button>
                    </div>

                    <div class="modal-body">
                        <p class="lead text-white">
                            Please Fill Out This Form To contact Us
                        </p>
                        <form action="">


                            <div class="input-group mb-2 mt-4">
                                <span class="input-group-text">First and last name</span>
                                <input type="text" aria-label="First name" class="form-control">
                                <input type="text" aria-label="Last name" class="form-control">
                            </div>

                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="tel" class="form-control" id="floatingInput" placeholder="+250792345526">
                                <label for="floatingInput">Telphone No</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                <label for="floatingTextarea2">Comments/Question</label>
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" 
                        class="btn btn-secondary" 
                        data-bs-dismiss="modal"
                        >Close</button>
                        <button type="button" class="btn btn-warning text-white">Submit</button>
                    </div>
                </div>
            </div>
        </div>

      <!-- Jva Script -->

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>


</body>
</html>