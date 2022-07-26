<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <link rel="stylesheet" href="assets/css/meanmenu.css" />

  <link rel="stylesheet" href="assets/css/icofont.min.css" />

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

  <link rel="stylesheet" href="assets/css/animate.min.css" />

  <link rel="stylesheet" href="assets/fonts/flaticon.css" />

  <link rel="stylesheet" href="assets/css/odometer.min.css" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="assets/css/responsive.css" />

  <link rel="stylesheet" href="assets/css/theme-dark.css" />
  <title>Topeople - Job Portal</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
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

  <div class="banner-area banner-area-two banner-img-two">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="banner-text">
            <h1>Get Your <span>Preferred</span> Job</h1>
            <p>Jobs, Employment & Future Career Opportunities</p>
            <div class="banner-form-area">
              <form>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Job Title" />
                      <label>
                        <i class="icofont-search-1"></i>
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>
                        <i class="icofont-location-pin"></i>
                      </label>
                      <input type="text" class="form-control" placeholder="City or State" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <select class="form-select" aria-label="Default select example">
                        <option>Job Category</option>
                        <option>ICT</option>
                        <option>Finance</option>
                        <option>Marketing</option>
                        <option>Production</option>
                        <option>Bank</option>
                        <option>Hospitality</option>
                        <option>NGO</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn banner-form-btn">
                  Search
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jobseeker-area">
    <div class="container">
      <div class="row job-wrap">
        <div class="col-sm-6 col-lg-6">
          <div class="jobseeker-item">
            <div class="jobseeker-icon">
              <i class="flaticon-job-search"></i>
            </div>
            <div class="jobseeker-inner">
              <span>Jobseeker</span>
              <h3>Looking For a Job ?</h3>
            </div>
            <a href="create-account.php">Apply Now
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
              <span>Recruiter</span>
              <h3>Are You Recruiting ?</h3>
            </div>
            <a href="post-a-job.php">Post a Job
              <i class="icofont-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="category-area category-area-two pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <h2>Job Category</h2>
      </div>
      <div class="row">
        <div class="col-sm-4 col-lg-3">
          <div class="category-item wow fadeInUp" data-wow-delay=".3s">
            <i class="flaticon-settings"></i>
            <a href="#">Technical Support</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-two wow fadeInUp" data-wow-delay=".4s">
            <i class="flaticon-layers"></i>
            <a href="#">Business Development</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-three wow fadeInUp" data-wow-delay=".5s">
            <i class="flaticon-house"></i>
            <a href="#">Real Estate Business</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-four wow fadeInUp" data-wow-delay=".6s">
            <i class="flaticon-analysis"></i>
            <a href="#">Share Maeket Analysis</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-five wow fadeInUp" data-wow-delay=".7s">
            <i class="flaticon-sun"></i>
            <a href="#">Weather & Environment</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-six wow fadeInUp" data-wow-delay=".3s">
            <i class="flaticon-hand"></i>
            <a href="#">Finance & Banking Service</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-seven wow fadeInUp" data-wow-delay=".4s">
            <i class="flaticon-neural"></i>
            <a href="#">IT & Networing Sevices</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-eight wow fadeInUp" data-wow-delay=".5s">
            <i class="flaticon-dish"></i>
            <a href="#">Restaurant Services</a>
          </div>
        </div>
        <div class="col-sm-4 col-lg-3">
          <div class="category-item category-nine wow fadeInUp" data-wow-delay=".6s">
            <i class="icofont-fire-burn"></i>
            <a href="#">Defence & Fire Service</a>
          </div>
        </div>
        <div class="col-sm-4 offset-sm-4 offset-lg-0 col-lg-3">
          <div class="category-item category-ten wow fadeInUp" data-wow-delay=".7s">
            <i class="flaticon-truck"></i>
            <a href="#">Home Delivery Services</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="job-area ptb-100">
    <div class="container">
      <div class="section-title">
        <h2>Recent Jobs</h2>
      </div>
      <div class="sorting-menu">
        <ul>
          <li class="filter active" data-filter="all">All</li>
          <!-- <li class="filter" data-filter=".web">New</li>
            <li class="filter" data-filter=".ui">Featured</li>
            <li class="filter" data-filter=".branding">Recent</li> -->
          <li class="filter" data-filter=".ux">Internship</li>
          <li class="filter" data-filter=".wp">Part Time</li>
        </ul>
      </div>
      <div id="container">
        <div class="row">
          <div class="col-lg-6 mix web ui">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/1.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">UI/UX Designer</a>
                  </h3>
                  <a class="company" href="company-details.html">Winbrans.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Full Time</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix ui web">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/2.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3><a href="job-details.html">Android Developer</a></h3>
                  <a class="company" href="company-details.html">Infiniza.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Part Time</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix branding wp">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/3.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">Senior Manager</a>
                  </h3>
                  <a class="company" href="company-details.html">Glovibo.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Intern</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix ux branding">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/4.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">Product Designer</a>
                  </h3>
                  <a class="company" href="company-details.html">Bizotic.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Part Time</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix wp web">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/5.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">Digital Marketer</a>
                  </h3>
                  <a class="company" href="company-details.html">Hotelzo.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Intern</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix web ui">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/6.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">Sales Manager</a>
                  </h3>
                  <a class="company" href="company-details.html">Gozuto.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Part Time</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix ux ui">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/7.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">Web Developer</a>
                  </h3>
                  <a class="company" href="company-details.html">Udiza.com</a>
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
                      <a href="create-account.html">Apply</a>
                    </li>
                    <li>
                      <span>Full Time</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mix branding web">
            <div class="job-item">
              <img src="assets/img/home-1/jobs/8.png" alt="Job" />
              <div class="job-inner align-items-center">
                <div class="job-inner-left">
                  <h3>
                    <a href="job-details.html">SEO</a>
                  </h3>
                  <a class="company" href="company-details.html">Oqota.com</a>
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
                      <a href="create-account.html">Apply</a>
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
      <div class="job-pagination">
        <ul>
          <li>
            <a href="#">
              <i class="icofont-simple-left"></i>
            </a>
          </li>
          <li>
            <a href="#">1</a>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">3</a>
          </li>
          <li>
            <a href="#">
              <i class="icofont-simple-right"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <div class="account-area account-area-two">
    <div class="container">
      <div class="row account-wrap">
        <div class="col-sm-6 col-lg-4">
          <div class="account-item">
            <i class="flaticon-approved"></i>
            <span>Register Your Account</span>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="account-item">
            <i class="flaticon-cv"></i>
            <span>Upload Your Resume</span>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
          <div class="account-item account-last">
            <i class="flaticon-customer-service"></i>
            <span>Apply for Dream Job</span>
          </div>
        </div>
      </div>
      <div class="banner-btn">
        <a href="create-account.php">Create Your Profile</a>
        <a href="submit-resume.php">Upload Your CV</a>
      </div>
    </div>
  </div>

  <!-- <div class="portal-area pt-100 pb-70">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="portal-item">
              <div class="row">
                <div class="col-lg-7">
                  <img src="assets/img/home-1/1.jpg" alt="Portal" />
                </div>
                <div class="col-lg-5">
                  <img src="assets/img/home-1/2.jpg" alt="Portal" />
                </div>
              </div>
              <div class="portal-trusted">
                <span>100% Trusted</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="portal-item portal-right portal-right-two">
              <h2>Trusted & Popular Job Portal</h2>
              <p>
                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit
                amet, consectetur.
              </p>
              <div class="portal-counter-area">
                <div class="row">
                  <div class="col-6 col-sm-4 col-lg-4">
                    <div class="counter-item">
                      <h3>
                        <span class="odometer" data-count="14">00</span>
                        <span class="target">k+</span>
                      </h3>
                      <p>Job Available</p>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-lg-4">
                    <div class="counter-item">
                      <h3>
                        <span class="odometer" data-count="18">00</span>
                        <span class="target">k+</span>
                      </h3>
                      <p>Submitted CV</p>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-lg-4">
                    <div class="counter-item">
                      <h3>
                        <span class="odometer" data-count="9">00</span>
                        <span class="target">k+</span>
                      </h3>
                      <p>Company</p>
                    </div>
                  </div>
                  <div class="col-6 col-sm-6 col-lg-4 offset-lg-2">
                    <div class="counter-item">
                      <h3>
                        <span class="odometer" data-count="22">00</span>
                        <span class="target">k+</span>
                      </h3>
                      <p>Registered Member</p>
                    </div>
                  </div>
                  <div class="col-6 col-sm-6 col-lg-4">
                    <div class="counter-item">
                      <h3>
                        <span class="odometer" data-count="55">00</span>
                        <span class="target">k+</span>
                      </h3>
                      <p>Appointed to Job</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <section class="companies-area ptb-100">
    <div class="container">
      <div class="section-title">
        <h2>Top Employers</h2>
      </div>
      <div class="companies-slider owl-theme owl-carousel">
        <div class="companies-item">
          <img src="assets/img/home-1/companies/1.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Winbrans.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Quadra, Street, Canada
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/2.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Infiniza.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            North Street, California
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/3.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Glovibo.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Barming Road, UK
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/4.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Bizotic.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Washington, New York
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/1.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Winbrans.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Quadra, Street, Canada
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/2.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Infiniza.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            North Street, California
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/3.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Glovibo.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Barming Road, UK
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/4.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Bizotic.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Washington, New York
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/1.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Winbrans.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Quadra, Street, Canada
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/2.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Infiniza.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            North Street, California
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/3.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Glovibo.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Barming Road, UK
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/4.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Bizotic.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Washington, New York
          </p>
          <a class="companies-btn" href="create-account.php">Hiring</a>
        </div>
      </div>
    </div>
  </section>

  <section class="companies-area ptb-100">
    <div class="container">
      <div class="section-title">
        <h2>Partner Universities</h2>
      </div>
      <div class="companies-slider owl-theme owl-carousel">
        <div class="companies-item">
          <img src="assets/img/home-1/companies/1.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Winbrans.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Quadra, Street, Canada
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/2.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Infiniza.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            North Street, California
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/3.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Glovibo.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Barming Road, UK
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/4.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Bizotic.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Washington, New York
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/1.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Winbrans.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Quadra, Street, Canada
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/2.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Infiniza.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            North Street, California
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/3.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Glovibo.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Barming Road, UK
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/4.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Bizotic.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Washington, New York
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/1.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Winbrans.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Quadra, Street, Canada
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/2.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Infiniza.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            North Street, California
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/3.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Glovibo.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Barming Road, UK
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
        <div class="companies-item">
          <img src="assets/img/home-1/companies/4.png" alt="Companies" />
          <h3>
            <a href="company-details.php">Bizotic.com</a>
          </h3>
          <p>
            <i class="icofont-location-pin"></i>
            Washington, New York
          </p>
          <!-- <a class="companies-btn" href="create-account.php">Hiring</a> -->
        </div>
      </div>
    </div>
  </section>

  <!-- <div class="popular-area pt-100 pb-70">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="popular-item">
              <div class="row align-items-center">
                <div class="col-lg-7">
                  <img src="assets/img/home-1/3.jpg" alt="Popular" />
                </div>
                <div class="col-lg-5">
                  <div class="practice-inner">
                    <img src="assets/img/home-1/4.jpg" alt="Popular" />
                    <img src="assets/img/home-1/5.jpg" alt="Popular" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="popular-item popular-right">
              <div class="section-title text-left">
                <h2>Why We are Most Popular</h2>
              </div>
              <p>
                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse
                ultrices gravida
              </p>
              <div class="row popular-wrap">
                <div class="col-sm-6 col-lg-6">
                  <ul>
                    <li>
                      <i class="flaticon-approved"></i>
                      Trusted & Quality Job
                    </li>
                    <li>
                      <i class="flaticon-no-money"></i>
                      No Extra Charge
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6 col-lg-6">
                  <ul>
                    <li>
                      <i class="flaticon-enterprise"></i>
                      Top Companies
                    </li>
                    <li>
                      <i class="flaticon-employee"></i>
                      International Job
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <section class="profile-area pb-100">
    <div class="container">
      <div class="section-title">
        <h2>Top candidates</h2>
      </div>
      <div class="profile-slider owl-theme owl-carousel">
        <div class="profile-item">
          <img src="assets/img/home-1/profile/1.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Jerry Hudson</h3>
            <span>Business Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/2.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Jac Jacson</h3>
            <span>Web Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/3.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Tom Potter</h3>
            <span>UX/UI Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/4.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Shane Mac</h3>
            <span>SEO Consultant </span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/5.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Jerry Hudson</h3>
            <span>Business Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/6.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Jac Jacson</h3>
            <span>Web Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/7.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Tom Potter</h3>
            <span>UX/UI Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/8.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Shane Mac</h3>
            <span>SEO Consultant </span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/1.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Jerry Hudson</h3>
            <span>Business Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/2.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Jac Jacson</h3>
            <span>Web Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/3.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Tom Potter</h3>
            <span>UX/UI Consultant</span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="profile-item">
          <img src="assets/img/home-1/profile/4.jpg" alt="Profile" />
          <div class="profile-inner">
            <h3>Shane Mac</h3>
            <span>SEO Consultant </span>
            <a href="candidate-details.php">View Profile
              <i class="icofont-swoosh-right"></i>
            </a>
            <div class="profile-heart">
              <a href="candidate-details.php">
                <i class="icofont-heart-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <div class="app-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="app-item app-left">
              <img src="assets/img/home-1/6.png" alt="Mobile" />
              <img src="assets/img/home-1/7.png" alt="Mobile" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="app-item">
              <div class="section-title text-left">
                <h2>Download The Glabe Mobile App</h2>
              </div>
              <p>
                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit
                amet, consectetur adipiscing elit, sed do eiusmod.
              </p>
              <div class="app-btn">
                <a class="app-btn-one" href="#">
                  <i class="flaticon-apple"></i>
                  <span>Download on the</span>
                  <p>App Store</p>
                </a>
                <a class="app-btn-two" href="#">
                  <i class="flaticon-playstore"></i>
                  <span>ANDROID APP ON</span>
                  <p>Google Play</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <section class="blog-area pt-100">
    <div class="container">
      <div class="section-title">
        <h2>Our Latest Blogs</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="blog-item wow fadeInUp" data-wow-delay=".3s">
            <div class="blog-top">
              <a href="blog-details.php">
                <img src="assets/img/home-1/blog/1.jpg" alt="Blog" />
              </a>
              <span>21 May, 2020</span>
            </div>
            <div class="blog-bottom">
              <h3>
                <a href="blog-details.php">The next genaration IT will change the world</a>
              </h3>
              <ul>
                <li>
                  <img src="assets/img/home-1/blog/1.png" alt="Blog" />
                  Aikin Ward
                </li>
                <li>
                  <a href="blog-details.php">Read More
                    <i class="icofont-simple-right"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="blog-item wow fadeInUp" data-wow-delay=".4s">
            <div class="blog-top">
              <a href="blog-details.php">
                <img src="assets/img/home-1/blog/2.jpg" alt="Blog" />
              </a>
              <span>22 May, 2020</span>
            </div>
            <div class="blog-bottom">
              <h3>
                <a href="blog-details.php">It is the most important sector in the world</a>
              </h3>
              <ul>
                <li>
                  <img src="assets/img/home-1/blog/1.png" alt="Blog" />
                  Aikin Ward
                </li>
                <li>
                  <a href="blog-details.php">Read More
                    <i class="icofont-simple-right"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
          <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
            <div class="blog-top">
              <a href="blog-details.php">
                <img src="assets/img/home-1/blog/3.jpg" alt="Blog" />
              </a>
              <span>23 May, 2020</span>
            </div>
            <div class="blog-bottom">
              <h3>
                <a href="blog-details.php">Nowadays IT is being most popular</a>
              </h3>
              <ul>
                <li>
                  <img src="assets/img/home-1/blog/1.png" alt="Blog" />
                  Aikin Ward
                </li>
                <li>
                  <a href="blog-details.php">Read More
                    <i class="icofont-simple-right"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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