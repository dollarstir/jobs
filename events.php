<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/icofont.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/theme-dark.css">
    <title>Topeople - Job Portal</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>


    <?php include "sidebar.php" ?>


    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-text">
                        <h2>Events</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-area pt-100">
        <div class="container">
            <h2>Sign Up Your Account</h2>
            <div class="login-wrap">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-job-search"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span>Candidate Events</span>
                                <h3>SignUp as a Candidate</h3>
                            </div>
                            <a href="candidate-events.php">Get Started
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="jobseeker-item">
                            <div class="jobseeker-icon">
                                <i class="flaticon-recruitment"></i>
                            </div>
                            <div class="jobseeker-inner">
                                <span>Employer Events</span>
                                <h3>SignUp as a Employer</h3>
                            </div>
                            <a href="employer-events.php">Get Started
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username, Phone Number or Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </form>
            <div class="login-sign-in">
                <a href="#">Forgot Password?</a>
                <ul>
                    <li>Don’t Have Account ?</li>
                    <li>
                        <a href="create-account.php">Sign Up Here</a>
                    </li>
                </ul>
                <div class="text-center">
                    <button type="submit" class="btn login-btn">Sign In</button>
                </div>
            </div>
            <div class="login-social">
                <a href="https://www.facebook.com/" target="_blank">
                    <i class="icofont-facebook"></i>
                    Login With Facebook
                </a>
                <a class="login-google" href="https://mail.google.com/" target="_blank">
                    <i class="icofont-google-plus"></i>
                    Login With Google
                </a>
            </div> -->
        </div>
    </div>


    <!-- <div class="create-account-area pt-100 pb-100">
        <div class="container">
            <div class="create-photo">
                <div class="already-create">
                    <span>Already create an account?</span>
                    <a href="#">Sign In</a>
                </div>
                <form>
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="create-photo-item">
                                <div class="create-photo-left">
                                    <div class="d-table">
                                        <div class="d-table-cell">
                                            <div class="form-group">
                                                <i class="icofont-photobucket"></i>
                                                <input type="file" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="create-photo-item">
                                <div class="create-photo-right">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name Here">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Profession">
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn create-photo-btn">Done</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-information">
                <form>
                    <h3>Basic Information</h3>
                    <div class="create-information-btn">
                        <a href="#">Upload Cover Photo</a>
                        <a href="#">Upload Your CV</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="gender-area">
                                    <span>Gender</span>
                                    <input type="radio" name="gender" id="male" value="male" checked>
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="female" value="female">
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="your_message" class="form-control" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-education">
                <div class="create-education-wrap">
                    <div class="create-education-left">
                        <h3>Education</h3>
                    </div>
                    <div class="create-education-right">
                        <a href="#">Add Education</a>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Skill</h3>
                    </div>
                    <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add Skill</a>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="skill">
                                <p>Percentage</p>
                                <div class="skill-bar skill1 wow slideInLeft animated">
                                    <span class="skill-count1">70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Social Links</h3>
                    </div>
                    <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Linedin</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Dribbble</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-left">
                <button type="submit" class="btn create-ac-btn">Save</button>
            </div> 
        </div>
    </div>-->


    <?php include "footer.php" ?>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.meanmenu.js"></script>

    <script src="assets/js/jquery.mixitup.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>