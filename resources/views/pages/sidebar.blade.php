<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
  <base href="../">
  <meta charset="utf-8">
  <meta name="author" content="Softnio">
  
  <title>{{ config('app.name', 'app.aliases.File') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}">
  <!-- Page Title  -->
  <!-- StyleSheets  -->
  <link rel="stylesheet" href="{{url('assets/css/dashlite.css')}}">
  <link id="skin-default" rel="stylesheet" href="{{url('assets/css/theme.css')}}">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="nk-body bg-lighter npc-general has-sidebar no-touch nk-nio-theme">
  <div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
      <!-- sidebar @s -->
      <div class="nk-sidebar nk-sidebar-fixed is-dark" data-content="sidebarMenu">
        <div class="nk-sidebar-element nk-sidebar-head">
          <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
              <em class="icon ni ni-arrow-left"></em>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu">
              <em class="icon ni ni-menu"></em>
            </a>
          </div>
          <div class="nk-sidebar-brand">
            <a href="{{url('/')}}" class="logo-link nk-sidebar-logo">
              <img class="logo-light logo-img logo-img-lg" src="{{url('assets/images/logo.png')}}" alt="logo">
              <img class="logo-dark logo-img logo-img-lg" src="{{url('assets/images/logo-dark.pn')}}" alt="logo-dark">
            </a>
          </div>
        </div>
        <!-- .nk-sidebar-element -->
        <div class="nk-sidebar-element nk-sidebar-body">
          <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar="init">
              <div class="simplebar-wrapper" style="margin: -16px 0px -40px;">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                  <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                      <div class="simplebar-content" style="padding: 16px 0px 40px;">
                        <ul class="nk-menu">
                          <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Driver Detail</h6>
                          </li><!-- .nk-menu-item -->
                          <li class="nk-menu-item">
                            <a href="{{url('/dashboard')}}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                              <span class="nk-menu-text">Dashboard</span>
                            </a>
                          </li>
                          <li class="nk-menu-item">
                            <a href="{{url('DriverDetail')}}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-truck"></em></span>
                              <span class="nk-menu-text">Driver Detail</span>
                            </a>
                          </li><!-- .nk-menu-item -->
                          <li class="nk-menu-item">
                            <a href="{{url('RouteDetail')}}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-map"></em></span>
                              <span class="nk-menu-text">Routes Detail</span>
                            </a>
                          </li><!-- .nk-menu-item -->
                          <li class="nk-menu-item">
                            <a href="{{url('reports')}}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-reports"></em></span>
                              <span class="nk-menu-text">Reports</span>
                            </a>
                          </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                        <!-- .nk-menu -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 1586px;"></div>
              </div>
              <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
              </div>
              <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 75px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
              </div>
            </div>
            <!-- .nk-sidebar-menu -->
          </div>
          <!-- .nk-sidebar-content -->
        </div>
        <!-- .nk-sidebar-element -->
      </div>
      <!-- sidebar @e -->
      <!-- wrap @s -->
      <div class="nk-wrap ">
        <!-- main header @s -->
        <div class="nk-header nk-header-fixed is-light">
          <div class="container-fluid">
            <div class="nk-header-wrap">
              <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                  <em class="icon ni ni-menu"></em>
                </a>
              </div>
              <div class="nk-header-brand d-xl-none">
                <a href="{{url('/')}}" class="logo-link">
                  <img class="logo-light logo-img" src="{{url('assets/images/logo.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                  <img class="logo-dark logo-img" src="{{url('assets/images/logo-dark.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
              </div>
              <!-- .nk-header-brand -->
              <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                  <li class=" notification-dropdown me-n1">
                    <a href="{{url('expiredDocs')}}" class="dropdown-toggle nk-quick-nav-icon" aria-expanded="false">
                      <div class="icon-status icon-status-danger"><em class="icon ni ni-bell">
                        
                      </em></div>
                    </a>
                  </li>
                  <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                      <div class="user-toggle">
                        <div class="user-avatar">
                          <img src="{{url('assets/images/avatar/b-sm.jpg')}}" alt="">
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                      <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                        <div class="user-card">
                          <div class="user-avatar">
                            <img src="{{url('assets/images/avatar/b-sm.jpg')}}" alt="">
                          </div>
                          <div class="user-info">
                            <span class="lead-text">{{ auth()->user()->name }}</span>
                            <span class="sub-text">{{ auth()->user()->email}}</span>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown-inner">
                        <ul class="link-list">
                          <li>
                            <a href="{{url('userprofile')}}">
                              <em class="icon ni ni-user-alt"></em>
                              <span>View Profile</span>
                            </a>
                          </li>
                          <li>
                            <a class="dark-switch" href="#">
                              <em class="icon ni ni-moon"></em>
                              <span>Dark Mode</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="dropdown-inner">


                        <ul class="link-list">
                          <li class="nav-item dropdown">
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              <em class="icon ni ni-signout"></em>{{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        @yield('content')
      </div>
    </div>
  </div>
  <!-- JavaScript -->
  <script src="{{url('assets/js/bundle.js')}}"></script>
  <script src="{{url('assets/js/scripts.js')}}"></script>
  <script src="{{url('assets/js/charts/gd-default.js')}}"></script>
  <script src="{{url('assets/js/libs/datatable-btns.js')}}"></script>
</body>

</html>