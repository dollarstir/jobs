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
                        <h2>Candidate Dashboard</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Candidate Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="dashboard-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="dashboard-img">
                        <img src="https://templates.hibootstrap.com/Topeople/default/assets/img/dashboard/1.jpg" alt="Dashboard">
                        <h3>Aikin Ward</h3>
                        <p>UX/UI Designer</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="dashboard-nav">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Change Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Saved Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-logout-tab" data-bs-toggle="pill" href="#pills-logout" role="tab" aria-controls="pills-logout" aria-selected="false">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                        <input type="text" class="form-control" placeholder="Aikin Ward">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" class="form-control" placeholder="hello@Topeople.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="text" class="form-control" placeholder="21 / 2 / 1997">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Your Phone</label>
                                        <input type="text" class="form-control" placeholder="+12345678910">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" class="form-control" placeholder="UX/UI Designer">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Address:</label>
                                        <input type="text" class="form-control" placeholder="210-27 Quadra, Market Street, Victoria Canada">
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
                                        <textarea id="your_message" class="form-control" rows="8" placeholder="Type Here"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="create-education create-education-two">
                        <div class="create-education-wrap">
                            <div class="create-education-left">
                                <h3>Education</h3>
                            </div>
                            <div class="create-education-right">
                                <a href="#">Edit</a>
                                <a href="#">Add Education</a>
                            </div>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="Under Graduate">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Degree</label>
                                        <input type="text" class="form-control" placeholder="BSC in Computer Science">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Institute</label>
                                        <input type="text" class="form-control" placeholder="Topeople University of Design & Arts">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="text" class="form-control" placeholder="2016-2019">
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
                                        <input type="text" class="form-control" placeholder="Frontend Design">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="skill">
                                        <p>Percentage</p>
                                        <div class="skill-bar skill1 skill3 wow slideInLeft animated">
                                            <span class="skill-count1">60%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="UX/UI Design">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="skill">
                                        <p>Percentage</p>
                                        <div class="skill-bar skill1 skill4 wow slideInLeft animated">
                                            <span class="skill-count1">95%</span>
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
                                        <input type="text" class="form-control" placeholder="https://www.facebook,com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" placeholder="https://www.instagram,com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Linedin</label>
                                        <input type="text" class="form-control" placeholder="https://www.linkedin,com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Dribbble</label>
                                        <input type="text" class="form-control" placeholder="https://www.dribble,com">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="text-left">
                        <button type="submit" class="btn create-ac-btn">Save</button>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn create-ac-btn">Preview</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="change-password-area">
                        <h2>Change Your Password</h2>
                        <form>
                            <div class="form-group">
                                <label>Current Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>New Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="text-left">
                                <button type="submit" class="btn change-pass-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="dashboard-saved-job">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/img/home-1/jobs/1.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">UI/UX Designer</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Winbrans.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Full Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/img/home-1/jobs/2.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">Android Developer</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Infiniza.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Part Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".3s">
                                    <img src="assets/img/home-1/jobs/3.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">Senior Manager</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Glovibo.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Intern</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="job-item wow fadeInUp" data-wow-delay=".4s">
                                    <img src="assets/img/home-1/jobs/4.png" alt="Job">
                                    <div class="job-inner align-items-center">
                                        <div class="job-inner-left">
                                            <h3>
                                                <a href="job-details.php">Product Designer</a>
                                            </h3>
                                            <a class="company" href="company-details.php">Bizotic.com</a>
                                            <ul>
                                                <li>
                                                    <i class="icofont-money-bag"></i>
                                                    $20k - $25k
                                                </li>
                                                <li>
                                                    <i class="icofont-location-pin"></i>
                                                    Location 210-27 Quadra, Market Street, Victoria Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="job-inner-right">
                                            <ul>
                                                <li>
                                                    <a href="create-account.php">Apply</a>
                                                </li>
                                                <li>
                                                    <span>Part Time</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-logout" role="tabpanel" aria-labelledby="pills-logout-tab">
                    <div class="login-area dashboard-logout-area">
                        <div class="login-wrap">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="jobseeker-item">
                                        <div class="jobseeker-icon">
                                            <i class="flaticon-job-search"></i>
                                        </div>
                                        <div class="jobseeker-inner">
                                            <span>Candidate</span>
                                            <h3>Login as a Candidate</h3>
                                        </div>
                                        <a href="login.php">Get Started
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
                                            <span>Employer</span>
                                            <h3>Login as a Employer</h3>
                                        </div>
                                        <a href="login.php">Get Started
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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