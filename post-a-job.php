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
                        <h2>Post A Job</h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Post A Job</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="post-job-area pt-100">
        <div class="container">
            <div class="post-job-item">
                <form>
                    <div class="post-job-heading">
                        <h2>Post Your Job</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" placeholder="UX/UI Designer">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Category</label>
                                <div class="job-category-area">
                                    <select class="form-select" aria-label="Default select example">
                                        <option>IT & Technology</option>
                                        <option>Web Developer</option>
                                        <option>UX/UI Design</option>
                                        <option>SEO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" placeholder="Winbrans.com">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="job-currency-area">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" placeholder="Winbrans.com">
                                    <select class="form-select" aria-label="Default select example">
                                        <option>$USD</option>
                                        <option>EURO</option>
                                        <option>POUND</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Vacancies</label>
                                <input type="text" class="form-control" placeholder="10">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="210-27 Quadra, Market Street, Victoria Canada">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="job-type-area">
                                    <span>Job Type</span>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Full Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Part Time</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                                        <label class="form-check-label" for="inlineRadio3">Intern</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea id="your_message" rows="8" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn create-ac-btn">Post</button>
                    </div>
                </form>
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