            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 center-xs">
                            <p class="topbar-text">
                                <!-- <strong><i class="fa fa-phone"></i></strong> +90 987 123 45 67 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope-o"></i></strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a> -->
                                <h8 class="color-letra">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMMAN</h8>
                            </p>
                        </div>

                        <div class="col-md-6 col-sm-12 center-xs text-right">
                            <div class="social-topbar">
                                <ul class="list-inline social-small">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end topbar -->

              <header class="header">
                  <div class="container-fluid">
                      <nav class="navbar navbar-default yamm">
                          <div class="container">
                              <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                      <span class="sr-only">Toggle navigation</span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                  </button>
                                  <a class="navbar-brand" title="" href="#"><img src="/images/logo.png" alt="" class="img-responsive"></a>
                              </div>
                              <!-- end navbar header -->

                              <div id="navbar" class="navbar-collapse collapse">
                                  <ul class="nav navbar-nav">
                                      <li><a title="" href="/">Inicio</a></li>
                                      <li class="dropdown yamm-half hasmenu">
                                          <a href="/naturaleza" >Naturaleza y Finalidad<span></span></a>
                                          <!--
                                          <ul class="dropdown-menu">
                                              <li><a href="job-single.html">Job Single Page</a></li>
                                          </ul>-->
                                      </li>
                                      <li >
                                          <a href="/Mision-Vision" >Mision y Vision <span ></span></a>
                                          <!--
                                          <ul class="dropdown-menu">
                                              <li><a href="freelancer-profile.html">Freelancer Profile</a></li>
                                              <li><a href="freelancer-dashboard.html">Freelancer Dashboard</a></li>
                                          </ul>-->
                                      </li>
                                      <li >
                                          <a href="/Objetivos" >Objetivos <span ></span></a>
                                          <!--
                                          <ul class="dropdown-menu">
                                              <li><a href="page-about.html">About us</a></li>
                                              <li><a href="page-services.html">Custom Services</a></li>
                                          </ul>-->
                                      </li>
                                      <li><a title="" href="/">Funciones</a></li>
                                      <li><a title="" href="/">Estructura Organica</a></li>
                                      <li><a title="" href="/contactanos">Contactenos</a></li>
                                  </ul>
                                  @if (! $logged_in_user)

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#loginmodal" role="button" data-toggle="modal" title=""><span class="glyphicon glyphicon-user"></span></a></li>
                                        <!--<li><a class="btn btn-primary" title="" href="job-add.html">No funciona</a></li>-->
                                    </ul>
                                  @else
                                  <ul class="nav navbar-nav navbar-right">
                                      <li class="dropdown user user-menu">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
                                          <ul class="dropdown-menu">
                                              <li><a href="/admin/dashboard">Panel de administracion</a></li>

                                              <li><a href="page-services.html">Cerrar sesion</a></li>
                                          </ul>
                                      </li>
                                    </ul>
                                  @endif

                                  <!-- end dropdown -->
                              </div>
                              <!--/.nav-collapse -->
                          </div>
                          <!--/.container-fluid -->
                      </nav>
                      <!-- end nav -->
                  </div>
                  <!-- end container -->
              </header>

              @include('portada.auth.login')
