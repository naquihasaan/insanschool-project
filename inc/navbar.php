<style type="text/css">
    
.navbar{
-webkit-box-shadow: 0px 5px 7px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 5px 7px 1px rgba(0,0,0,0.75);
box-shadow: 0px 5px 7px 1px rgba(0,0,0,0.75);
z-index: 99;
}

.btn-dark ,.btn-success
{
  font-family: 'Raleway', sans-serif;
}


.navbar .navbar-nav .nav-link{
  font-family: 'Raleway', sans-serif;
  
}

@media (max-width: 768px) { 

       /*.navbar .navbar-nav .nav-link{
        padding-left: 1rem;
       }*/
}

@media (min-width: 1015px) and (max-width: 1199.98px) { 
   .navbar .navbar-nav .nav-link{
    font-size: 18px;
   }

 }

@media (min-width: 768px) and (max-width: 1015px) {

 .navbar .navbar-nav .nav-link{
    font-size: 15px;
   }

 .dropdown .dropdown-menu a{
  font-size: 13px;

 }
 }


@media (max-width: 576px) {

 .navbar .navbar-nav .nav-link{
    font-size: 15px;
   }

 .dropdown .dropdown-menu a{
  font-size: 11px;

 }
 }



.dropdown .dropdown-menu a{
  
   font-family: 'Raleway', sans-serif;
 }


item:focus, .dropdown-item:hover {
    color: white;
    text-decoration: none;
    background-color: #f58817;
}
</style>

<nav class="navbar navbar-expand-md bg-warning navbar-dark sticky-top">
        <!-- Brand -->

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-around" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item ml-lg-3  active">
                    <a class="nav-link  " href="index.php">Home </a>
                </li>
                <li class="nav-item ml-lg-3">
                    <a class="nav-link " href="about.php">About</a>
                </li>
                <li class="nav-item ml-lg-3">
                    <a class="nav-link " href="founder.php">Founder</a>
                </li>

                <li class="nav-item ml-lg-3">
                    <a class="nav-link " href="department.php">Department</a>
                </li>

                <li class="nav-item ml-lg-3">
                  <a class="nav-link " href="gallery.php">Gallery</a>
                </li>

                <li class="nav-item dropdown ml-lg-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Information
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="information.php">Available Courses</a>
                    <a class="dropdown-item" href="images/Admission-form/insan-school.pdf">Admission form INSAN SCHOOL</a>
                    <a class="dropdown-item" href="images/Admission-form/insan-degree-college.pdf">Admission form INSAN DEGREE COLLEGE</a>
                    <a class="dropdown-item" href="images/Admission-form/teacher-list.pdf">Teacher List</a>
                  </div>
                </li>

                <li class="nav-item dropdown ml-lg-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    link
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="http://biharboardonline.bihar.gov.in/">BSEB</a>
                     <a class="dropdown-item" href="http://www.mmhapu.bih.nic.in/">MMHU</a>
                     <a class="dropdown-item" href="http://www.cdeamu.ac.in/">CDE AMU</a>
                     <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Syed_Hassan_(educationist)">Dr Sayed Hasan Bhai</a>
                      
                     <a class="dropdown-item" href="https://www.islamicity.org/2138/nobel-prize-nomination-for-noble-efforts/">Nobel Prize Nomination</a>
                  </div>
                </li>
                
                <li class="nav-item ml-lg-3">
                    <a class="nav-link " href="alumini.php">Alumini</a>
                </li>
                 
                <li class="nav-item ml-lg-3">
                    <a class="nav-link " href="contact.php">Contact Us</a>
                </li>
               

            </ul>
        </div>
    </nav>