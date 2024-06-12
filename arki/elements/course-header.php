<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><header id="site-header" aria-label="Main menu and search">
  
<!-- Add Bootstrap JS and dependencies (jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>
    .site-header {
    background-color: var(--darkred);
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 4px solid var(--yellow);
    width: 100vw;
}.navbar-dark .navbar-nav .nav-link {
    color: rgb(255 255 255);
}
.navbar-nav{gap:20px}
.site-header__logo__link{display: flex;text-decoration: none;flex-direction: column;align-content: center;align-items: center;}
  .site-header__logo__link  h2{        font-size: 2rem;
    font-weight: bolder;
    color: #000;
    font-family: serif;}
    .site-header__logo__link  h4 {    margin-top: -10px;
    text-align: center;
    font-weight: 600;color:#000;
    font-family: serif;
    letter-spacing: 3px;}
    .menu{   padding-right: 1.5rem;
    display: flex;
    gap: 10px;
    align-content: flex-end;
    list-style: none;
    flex-direction: column;}
    .right-menu{  text-align:right;  align-content: center;}
    .right-menu a{color: #fff;
    background: #a6192e;
    padding: 5px 20px;
    margin: 5px;
    display: inline-flex;
    border-radius: 20px;
    gap: 10px;
    align-content: center;
    align-items: center;}
    .right-menu a:visited{color:#fff}
    .left-menu{text-align:left;    align-content: center;}
    .left-menu a{color: #fff;
    background: #a6192e;
    padding: 5px 20px;
    margin: 5px;
    display: inline-flex;
    border-radius: 20px;
    gap: 10px;
    align-content: center;
    align-items: center;}
    </style>
<header>  
 <div class="container-fluid">
 <div class="row">
    <div class="col-md-4 left-menu">
    <ul class="menu" style="padding-right: 1.5rem;">
                        <li class="first leaf menu-mlid-3491"> <a href="mailto:gcarki-hp@nic.in">
            <i class="fas fa-envelope me-3" aria-hidden="true"></i>
            gcarki-hp@nic.in
    </a>
    </li>
    <li>
    <a href="tel:+07196220690"><i class="fas fa-phone me-3" aria-hidden="true"></i> + 07196-220690</a>
    </li>
    </ul>
    </div>
<div class="site-header__logo col-md-4">
            <a class="site-header__logo__link" href="./index.php" aria-label="Home" style="display: flex; text-decoration: none;">
                <img src="../assets/img/logo_1.png" alt="" style="width: 100px; height: 80px;">
                <div style="align-items: center;">
                    <h2 >Government College Arki</h2>
                    <h4 style="margin-top: -10px;">Established in 1994</h4>
                    <!-- <img src="./assets/img/logo.png" alt="" style="width: 80%;"> -->
                </div>
            </a>
        </div>
        <div class="col-md-4 right-menu">

        <ul class="menu" style="padding-right: 1.5rem;">
                        <li class="first leaf menu-mlid-3491">
                            <a href=""><span class="fas fa-user" aria-hidden="true"></span><span>Student Login</span></a>
                        </li>
                        <li class="leaf menu-mlid-3476">
                            <a href=""><span class="fas fa-user" aria-hidden="true"></span><span>Teacher Login</span></a>
                        </li>
                        <li class="leaf active menu-mlid-3481">
                            <a href="index.html" class="apply-widget-link active"><span class="fas fa-check-circle" aria-hidden="true"></span><span>Apply</span></a>
                        </li>
                    </ul>
        </div>
        </div>
        </div>
</header>

    <div class="site-header">
       
    <nav class="skip-link" aria-label="Skip to main content and navigation">
        <a id="skip-to-main" href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
        <a id="skip-to-nav" href="#globalMenuButton" class="element-invisible element-focusable">Skip to main navigation</a>
    </nav>
    <nav id="main-menu" class="navbar navbar-expand-lg navbar-dark" aria-label="Main Menu">
 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <!-- Home -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Home
                </a>
                <div class="dropdown-menu" aria-labelledby="homeDropdown">
                    <a class="dropdown-item" href="./index.php">Home</a>
                    <a class="dropdown-item" href="./about-us.php">About Us</a>
                    <a class="dropdown-item" href="./vision-and-mission.php">Vision and Mission</a>
                    <a class="dropdown-item" href="./former-principals.php">Former Principals</a>
                    <a class="dropdown-item" href="./HPU-Affiliation.php">HPU Affiliation</a>
                    <a class="dropdown-item" href="./IQAC.php">IQAC</a>
                    <a class="dropdown-item" href="./NAAC.php">NAAC</a>
                    <a class="dropdown-item" href="./message.php">Principal's Message</a>
                    <a class="dropdown-item" href="#">Report and Certificate</a>
                    <a class="dropdown-item" href="./RTI.php">RTI</a>
                </div>
            </li>
            <!-- Amenities -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="amenitiesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Amenities
                </a>
                <div class="dropdown-menu" aria-labelledby="amenitiesDropdown">
                    <a class="dropdown-item" href="./eating-joints.php">Eating Joints (Canteen)</a>
                    <a class="dropdown-item" href="./garden-and-lawns.php">Garden and Lawns</a>
                    <a class="dropdown-item" href="./hostel.php">Hostel</a>
                    <a class="dropdown-item" href="./infrastructure.php">Infrastructure</a>
                    <a class="dropdown-item" href="./it-services.php">IT Services</a>
                    <a class="dropdown-item" href="./laboratories.php">Laboratories</a>
                    <a class="dropdown-item" href="./research.php">Research</a>
                    <a class="dropdown-item" href="./sports.php">Sports</a>
                </div>
            </li>
            <!-- Academics -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="academicsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Academics
                </a>
                <div class="dropdown-menu" aria-labelledby="academicsDropdown">
                    <a class="dropdown-item" href="./admissions.php">Admissions</a>
                    <a class="dropdown-item" href="./college-committee.php">College Committees</a>
                    <a class="dropdown-item" href="./courses.php">Courses</a>
                    <a class="dropdown-item" href="./syllabus.php">Syllabus</a>
                    <a class="dropdown-item" href="./departments.php">Departments</a>
                    <a class="dropdown-item" href="./results.php">Results</a>
                    <a class="dropdown-item" href="./scholarships.php">Scholarships</a>
                    <a class="dropdown-item" href="./self-financing.php">Self Financing Courses</a>
                    <a class="dropdown-item" href="./skill-courses.php">Skill Courses</a>
                </div>
            </li>
            <!-- Student Zone -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="studentZoneDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student Zone
                </a>
                <div class="dropdown-menu" aria-labelledby="studentZoneDropdown">
                    <a class="dropdown-item" href="./campus-life.php">Campus Life</a>
                    <a class="dropdown-item" href="./center-and-cell.php">Center and Cell</a>
                    <a class="dropdown-item" href="./clubs.php">Club</a>
                    <a class="dropdown-item" href="./code-and-conduct.php">Code and Conduct</a>
                    <a class="dropdown-item" href="./csca.php">CSCA</a>
                    <a class="dropdown-item" href="./ncc.php">NCC</a>
                    <a class="dropdown-item" href="./notice-board.php">Notice Board</a>
                    <a class="dropdown-item" href="./nss.php">NSS</a>
                    <a class="dropdown-item" href="./rover-and-ranger.php">Rover and Ranger</a>
                    <a class="dropdown-item" href="./societies.php">Societies</a>
                </div>
            </li>
            <!-- Library -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="libraryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Library
                </a>
                <div class="dropdown-menu" aria-labelledby="libraryDropdown">
                    <a class="dropdown-item" href="./about-the-library.php">About the Library</a>
                    <a class="dropdown-item" href="./digital-library.php">Digital Library</a>
                    <a class="dropdown-item" href="./library-rules.php">Library Rules</a>
                    <a class="dropdown-item" href="./message-librarian.php">Message from Librarian</a>
                    <a class="dropdown-item" href="./print-resources.php">Print Resources</a>
                    <a class="dropdown-item" href="./question-papers.php">Question Papers</a>
                </div>
            </li>
            <!-- Staff -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="staffDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Staff
                </a>
                <div class="dropdown-menu" aria-labelledby="staffDropdown">
                    <a class="dropdown-item" href="./teaching-staff.php">Teaching Staff</a>
                    <a class="dropdown-item" href="./administrative-staff.php">Administrative Staff</a>
                    <a class="dropdown-item" href="./laboratory-staff.php">Laboratory Staff</a>
                    <a class="dropdown-item" href="./supporting-staff.php">Supporting Staff</a>
                </div>
            </li>
            <!-- Gallery -->
            <li class="nav-item">
                <a class="nav-link" href="./gallery.php">Gallery</a>
            </li>
            <!-- Contact Us -->
            <li class="nav-item">
                <a class="nav-link" href="./contact-us.php">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
        

            <template id="globalUnderlayTemplate">
                <div data-name="" id="globalUnderlay" style="top: 107px;"></div>
            </template>
        </div>
    </div>
</header>