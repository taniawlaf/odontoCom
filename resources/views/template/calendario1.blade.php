 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>OdontoCom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
  <meta content="Coderthemes" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('style/assets/images/favicon.ico') }}">

  <!-- plugin css -->
  <link href="{{asset('style/assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

  <!-- App css -->
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
  <link href="{!! asset('style/assets/css/stylecal.css') !!}" rel="stylesheet" type="text/css" />
  <link href="{!! asset('style/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
  <link href="{!! asset('style/assets/css/icons.min.css') !!}" rel="stylesheet" type="text/css" />
  <link href="{!! asset('style/assets/css/app.min.css') !!}" rel="stylesheet" type="text/css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>

<body>
    <header id="topnav" class="moved">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
        
                    <li class="dropdown notification-list">
                        <!--<li class="dropdown notification-list show">-->
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <!--<a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">-->
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <!--<div class="dropdown-menu dropdown-menu-right dropdown-lg show" x-placement="top-end" style="position : absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-269px, 5px, 0px);">-->
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="style/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="style/assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                            <img src="style/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                Marcia J. <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    Welcome !
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="style/assets/images/logo.png" alt="" height="45">
                        </span>
                    </a>
                </div>

                <!--page Name-->
                <div class="page-title-box">
                    <h1 class="page-title"> OdontoCom &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¡Bienvenido!</h1>
                    
                </div>

                <div class="clearfix"></div>
            </div>
         </div>
        <!--end Topbar -->
    <!--</header>-->
    <!--Menu-->
    <div>
      <br>
      <br>
      <br>
      <br>
    </div>
    <!--<header id="topnav">-->
        
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-cube"></i>Cuenta <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="perfil1">Perfil</a>
                            </li>
                            <li>
                                <a href="calendario1">Calendario</a>
                            </li>
                            <!--<li>
                                <a href="contactos">Contactos</a>
                            </li>-->
                            <li>
                                <a href="historialTratamientos1">Historial Tratamientos</a>
                            </li>
                           <!-- <li class="has-submenu">
                                <a href="#">Correo <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="email-inbox.html">Bandeja de entrada</a>
                                    </li>
                                    <li>
                                        <a href="email-read.html">Leer Email</a>
                                    </li>
                                    <li>
                                        <a href="email-compose.html">Redactar Email</a>
                                    </li>
                                    
                                </ul>
                            </li>-->
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"> <i class="la la-briefcase"></i>Elementos <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="formulario1">Registrar cita</a>
                            </li>
                            <li>
                                <a href="clinicas1">Ubicaciones de Clinicas</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#">
                            <i class="la la-diamond"></i>Componentes <div class="arrow-down"></div></a>
                        <ul class="submenu">
                            <li>
                                <a href="{!! asset('cruds') !!}"> Cruds</a>
                            </li>
                            <li>
                                <a href="#"><i class="fe-bar-chart-2 mr-1"></i> Graficas <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    
                                    <li>
                                        <a href="charts-brite.html">Grafica de barras</a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->


    </header>

    <!--Calendario-->
    <div class="wrapper">
      <div class="container">
        <div class="left">
          <div class="calendar">
            <div class="month">
              <i class="fas fa-angle-left prev"></i>
              <div class="date">december 2015</div>
              <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
              <div>Sun</div>
              <div>Mon</div>
              <div>Tue</div>
              <div>Wed</div>
              <div>Thu</div>
              <div>Fri</div>
              <div>Sat</div>
            </div>
            <div class="days"></div>
            <div class="goto-today">
              <div class="goto">
                <input type="text" placeholder="mm/yyyy" class="date-input" />
                <button class="goto-btn">Go</button>
              </div>
              <button class="today-btn">Today</button>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="today-date">
            <div class="event-day">wed</div>
            <div class="event-date">12th december 2022</div>
          </div>
          <div class="events"></div>
          <div class="add-event-wrapper">
            <div class="add-event-header">
              <div class="title">Add Event</div>
              <i class="fas fa-times close"></i>
            </div>
            <div class="add-event-body">
              <div class="add-event-input">
                <input type="text" placeholder="Event Name" class="event-name" />
              </div>
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Event Time From"
                  class="event-time-from"
                />
              </div>
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Event Time To"
                  class="event-time-to"
                />
              </div>
            </div>
            <div class="add-event-footer">
              <button class="add-event-btn">Add Event</button>
            </div>
          </div>
        </div>
        <button class="add-event">
          <i class="fas fa-plus"></i>
        </button>
      </div>

      <div class="credits">
        <p>
          Crafted with ❤️ by
          <a href="https://youtu.be/6EVgmpm4z5U" target="_blank">Open Source Coding</a>
        </p>
      </div>

      <script src="{!! asset('style/assets/js/script.js') !!}"></script>

    </div>


  </body>
  </html>

