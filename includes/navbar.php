    <!-- header-area start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin:0px; padding: 0px;">
              <div class="top-header-area" style="background-color:black;">
                  <div class="container">
                      <div class="row">
                            <div class="col-12">
                            <div class="top-header-content d-flex align-items-center justify-content-between" style="padding: 10px;">
                            <!-- Top Header Content -->
                              <div class="top-header-meta">
                                <p class="para1"></p>
                              </div>
                            <!-- Top Header Content -->
                              <div class="top-header-meta text-right">
                                 <a href="#" data-toggle="tooltip" data-placement="bottom" title="" style="color:white;" data-original-title="info@spm.org"><i class="fa fa-envelope-o" aria-hidden="true"></i><span> Email: info@spm.org</span></a>&nbsp;&nbsp;
                                 <a href="#" data-toggle="tooltip" data-placement="bottom" title="" style="color:white;" data-original-title="9096659550"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +012 549 594</span></a>
                              </div>
                           </div>
                           </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <header class="header-area bg-1" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-9 col-sm-8 col-6">
                    <div class="logo">
                        <a href="index.php"><h4>Sat Chikitsa<BR> Prasarak Mandal</h4></a>
                    </div>
                </div>
                <div class="col-lg-9 d-none d-lg-block">
                    <div class="mainmenu">
                        <ul id="navigation">
                            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a>
                                <!-- <ul>
                                    <li><a href="index.php">Home One</a></li>
                                    <li><a href="index2.html">Home Two</a></li>
                                    <li><a href="index3.html">Home Three</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About</a>
                                <!-- <ul>
                                    <i class="fa fa-angle-down"></i>
                                    <li><a href="about.html">About One</a></li>
                                    <li><a href="about2.html">About Two</a></li>
                                    <li><a href="about3.html">About Three</a></li>
                                    <li><a href="about4.html">About Four</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a>
                                <!-- <ul>
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog2.html">Blog Two</a></li>
                                    <li><a href="blog-left.html">Blog Left</a></li>
                                    <li><a href="blog-right.html">Blog Right</a></li>
                                    <li><a href="blog-detsils.html">Blog Detsils</a></li>
                                </ul> -->
                            </li>
                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Management<i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="management.php">Management Team</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Courses<i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="courses.php">courses1</a></li>
                                    <li><a href="courses2.php">courses2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Services<i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a href="services.php">Services</a></li>
                                    <!-- <li><a href="404.html">404 Pages</a></li> -->
                                </ul>
                            </li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-1 col-md-2 col-sm-3 col-4">
                    <div class="search-wrapper">
                        <ul>
                            <li><a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                                <ul>
                                    <li>
                                        <form action="#">
                                            <input type="text" placeholder="Search Here...">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-md-3 col-sm-4 col-6 d-lg-none d-sm-block">
                    <div class="responsive-menu-wrap floatright"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->
    <script>
        var navitem = document.getElementsByClassName('nav-item');
var navLink = document.getElementsByClassName('nav-link');
var current = document.getElementsByClassName('active');

for (var item of navLink) {
  if (item.getAttribute('href') === location.pathname.replace(/^\/+/g, '')) {
    current[0].classList.remove('active');
    item.parentElement.classList.add('active');
  }
}
    </script>