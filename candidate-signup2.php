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
                        <h2>Create Account</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Create Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="create-account-area pt-100 pb-100">
        <div class="container">
            <!-- <div class="create-photo">
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
            </div> -->
            <div class="create-information">
                <form>
                    <h3>Basic Information</h3>
                    <div class="create-information-btn">
                        <a href="#">Upload Cover Photo</a>
                        <a href="#">Upload Your CV</a>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-6">
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
                        </div> -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" class="form-control">
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
                                <label>Job Title</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Region</label>
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
                        <!-- <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="your_message" class="form-control" rows="8"></textarea>
                            </div>
                        </div> -->
                    </div>
                </form>
            </div>
            <div class="create-education">
                <div class="create-education-wrap">
                    <div class="create-education-left">
                        <h3>Education</h3>
                    </div>
                    <!-- <div class="create-education-right">
                        <a href="#">Add Education</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>School or College/University</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option value="University of cape coast">University of cape coast</option>
                                    <option value="University of Ghana">University of Ghana</option>

                                    <!-- <option>Finance</option>
                                    <option>Marketing</option>
                                    <option>Production</option>
                                    <option>Bank</option>
                                    <option>Hospitality</option>
                                    <option>NGO</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Degree</label>
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Postgraduate">Postgraduate</option>
                                    <!-- <option>ICT</option>
                                    <option>Finance</option>
                                    <option>Marketing</option>
                                    <option>Production</option>
                                    <option>Bank</option>
                                    <option>Hospitality</option>
                                    <option>NGO</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Specialization</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>GPA</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Start Year</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>End Year</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>

                </form>
                <div class="create-education-wrap">
                    <div class="create-education-left">
                        <!-- <a href="employer-signup.php">I'm not a Student</a> -->
                    </div>
                    <div class="create-education-right">
                        <a href="#">I'm not a Student</a>
                    </div>
                </div>
            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Are you looking for a new job?</h3> <br>
                        <!-- <h6>We can help you prepare for your search. Your response is private to you</h6> -->
                    </div>
                    <!-- <div class="create-skills-left">
                        <h6>We can help you prepare for your search. Your response is private to you</h6>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <!-- <span>Gender</span> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="yes">Yes</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <form>
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
                </form> -->
            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>What kind of job are you looking for?</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job titles</label>
                                <input type="text" class="form-control" placeholder="E.g. Sales Manager">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Locations</label>
                                <input type="text" class="form-control" placeholder="E.g. Accra - Achimota">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        I'm open to remote work
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                                <!-- <div class="create-skills-right"> -->
                                <div class="create-skills-wrap">
                                    <!-- <div class="create-skills-left">
                         <h3>What kind of job are you looking for?</h3> 
                    </div>
                    <div class="create-skills-right">
                        <a href="#">Edit</a> 
                        <a href="#">Next</a>
                    </div> -->
                                </div>

                            </div>

                        </div>

                        <!-- <div class="col-lg-6">
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
                        </div> -->
                    </div>
                </form>


            </div>
            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Get Notified when new jobs are posted</h3> <br>
                        <!-- <h6>We can help you prepare for your search. Your response is private to you</h6> -->
                    </div>
                    <!-- <div class="create-skills-left">
                        <h6>We can help you prepare for your search. Your response is private to you</h6>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <!-- <span>Gender</span> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="yes">Yes</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <form>
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
                </form> -->
            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Are you authorized to work lawfully in the Ghana?</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="gender-area">
                            <!-- <span>Gender</span> -->
                            <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                            <label for="yes">Yes</label>
                            <input type="radio" name="authorized" id="authorized" value="authorized">
                            <label for="no">No</label>
                        </div>
                    </div>
                </div>


            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>What kind of job are you looking for?</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job titles</label>
                                <input type="text" class="form-control" placeholder="E.g. Sales Manager">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Locations</label>
                                <input type="text" class="form-control" placeholder="E.g. Accra - Achimota">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        I'm open to remote work
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                                <!-- <div class="create-skills-right"> -->
                                <div class="create-skills-wrap">
                                    <!-- <div class="create-skills-left">
                         <h3>What kind of job are you looking for?</h3> 
                    </div>
                    <div class="create-skills-right">
                        <a href="#">Edit</a> 
                        <a href="#">Next</a>
                    </div> -->
                                </div>

                            </div>

                        </div>

                        <!-- <div class="col-lg-6">
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
                        </div> -->
                    </div>
                </form>


            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Clubs</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Club Name</label>
                                <input type="text" class="form-control" placeholder="Club Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Club Type</label>
                                <input type="text" class="form-control" placeholder="Club Type">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Club position</label>
                                <input type="text" class="form-control" placeholder="Club position">
                            </div>
                        </div>


                        <!-- <div class="col-lg-6">
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
                        </div> -->
                    </div>
                </form>



            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>What kind of job are you looking for?</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Account Management" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Account Management
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Accounting" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Accounting
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Business Analyst" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Business Analyst
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Accounting" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Accounting
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Business Analyst" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Business Analyst
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Business Analyst" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Business Analyst
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job titles</label>
                                <input type="text" class="form-control" placeholder="E.g. Sales Manager">
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Locations</label>
                                <input type="text" class="form-control" placeholder="E.g. Accra - Achimota">
                            </div>
                        </div> -->



                    </div>
                </form>


            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Location Preferences</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Select all" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Select all
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Remote" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Remote
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="International" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        International
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Accra" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Accra
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Accra" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Accra
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Accra" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Accra
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job titles</label>
                                <input type="text" class="form-control" placeholder="E.g. Sales Manager">
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Locations</label>
                                <input type="text" class="form-control" placeholder="E.g. Accra - Achimota">
                            </div>
                        </div> -->



                    </div>
                </form>


            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Job Preferences</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Extremely interested" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Extremely interested
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Very interested" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Very interested
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="interested" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        interested
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Somewhat interested" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Somewhat interested
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input name="gridCheck" value="Not interested at all" class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        Not interested at all
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>

                        <div class="create-skills-wrap">
                            <div class="create-skills-left">
                                <h5>What is you expected first year compensation range?</h5>
                            </div>
                            <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                        </div>



                        <div class="col-lg-6">
                            <div class="form-group">
                                <!-- <label>School or College/University</label> -->
                                <select class="form-select form-control" aria-label="Default select example">
                                    <option value="200 - 500">200 - 500</option>
                                    <option value="500 - 1000">500 - 1000</option>
                                    <!-- <option>Finance</option>
                                    <option>Marketing</option>
                                    <option>Production</option>
                                    <option>Bank</option>
                                    <option>Hospitality</option>
                                    <option>NGO</option> -->
                                </select>
                            </div>
                        </div>


                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job titles</label>
                                <input type="text" class="form-control" placeholder="E.g. Sales Manager">
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label>Job Locations</label>
                                <input type="text" class="form-control" placeholder="E.g. Accra - Achimota">
                            </div>
                        </div> -->



                    </div>
                </form>


            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Upload profile picture</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>

                <div class="create-photo">
                    <!-- <div class="already-create">
                        <span>Already create an account?</span>
                        <a href="#">Sign In</a>
                    </div> -->
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
                            <!-- <div class="col-lg-8">
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
                            </div> -->
                        </div>
                    </form>
                </div>



            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Equal Employment Opportunities</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Ethnicity</label>
                                <input type="text" class="form-control" placeholder="Ethnicity">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Disability</label>
                                <input type="text" class="form-control" placeholder="Disability">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Are you a first generation college student?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Have your been eligible to receive need-based financial aid while enrolled in college?</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>


                        <!-- <div class="col-lg-6">
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
                        </div> -->
                    </div>
                </form>



            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>How much do you agree or disagree with the following statements?</h3> <br>
                        <!-- <h6>We can help you prepare for your search. Your response is private to you</h6> -->
                    </div>
                    <!-- <div class="create-skills-left">
                        <h6>We can help you prepare for your search. Your response is private to you</h6>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <h4>I am more extroverted than introverted</h4>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly disagree">Strongly disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- <div style="width: 90px; display: inline;"></div> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Disagree">Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Neutral">Neutral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Agree">Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly Agree">Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <h4>I want to work in a client-facing role</h4>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly disagree">Strongly disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- <div style="width: 90px; display: inline;"></div> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Disagree">Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Neutral">Neutral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Agree">Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly Agree">Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            </div>
                        </div>
                    </div><div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <h4>I prefer working on a team to working individually</h4>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly disagree">Strongly disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- <div style="width: 90px; display: inline;"></div> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Disagree">Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Neutral">Neutral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Agree">Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly Agree">Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            </div>
                        </div>
                    </div><div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <h4>I am very competitive</h4>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly disagree">Strongly disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- <div style="width: 90px; display: inline;"></div> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Disagree">Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Neutral">Neutral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Agree">Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly Agree">Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            </div>
                        </div>
                    </div><div class="col-lg-12">
                        <div class="form-group">
                            <div class="gender-area">
                                <h4>I am more creativev than analytical</h4>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly disagree">Strongly disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <!-- <div style="width: 90px; display: inline;"></div> -->
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Disagree">Disagree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Neutral">Neutral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized">
                                <label for="Agree">Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                <input type="radio" name="authorized" id="authorized" value="authorized" checked>
                                <label for="Strongly Agree">Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>

                            </div>
                        </div>
                    </div>

            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Social Links</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Personal URL</label>
                            <input type="text" class="form-control" placeholder="Personal URL">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>LinkedIn URL</label>
                            <input type="text" class="form-control" placeholder="LinkedIn URL">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Github URL</label>
                            <input type="text" class="form-control" placeholder="Github URL">
                        </div>
                    </div>


                    <!-- <div class="col-lg-6">
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
                        </div> -->
                </div>




            </div>

            <div class="create-skills">
                <div class="create-skills-wrap">
                    <div class="create-skills-left">
                        <h3>Curate your headlines</h3>
                    </div>
                    <!-- <div class="create-skills-right">
                        <a href="#">Edit</a>
                        <a href="#">Add New</a>
                    </div> -->
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Headliner</label>
                            <input type="text" class="form-control" placeholder="Headliner">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Work Experience</label>
                            <input type="text" class="form-control" placeholder="Work Experience">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>On-Campus involvement</label>
                            <input type="text" class="form-control" placeholder="On-Campus involvement">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Achievements</label>
                            <input type="text" class="form-control" placeholder="Achievements">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Skills</label>
                            <input type="text" class="form-control" placeholder="Skills">
                        </div>
                    </div>


                    <!-- <div class="col-lg-6">
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
                        </div> -->
                </div>




            </div>


            <div class="text-left">
                <button type="submit" class="btn create-ac-btn">Save</button>
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