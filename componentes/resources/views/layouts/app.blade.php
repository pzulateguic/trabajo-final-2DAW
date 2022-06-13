<!DOCTYPE html>

<!-- =========================================================
* Gestiona - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/Gestiona-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)
=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title></title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/7227a121d5.js" crossorigin="anonymous"></script>
    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- Page CSS -->
    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
  </head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="mx-auto d-block">
              <img src="\assets\img\favicon\LOGO.jpeg"  width="80%" height="50%">
            </a>
          </div>
          <div class="menu-inner-shadow"></div>
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle "></i>
                <div data-i18n="Analytics">Inicio</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Configuración</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bi bi-gear-wide-connected"></i>
                <div data-i18n="Account Settings">Configuración</div>
              </a>
              <ul class="menu-sub">
               <li class="menu-item">
              <a href="/usuarios" class="menu-link">
                <i class="menu-icon tf-icons  bi bi-person"></i>
                <div data-i18n="Analytics">Usuarios</div>
              </a>
              <a href="/clientes" class="menu-link">
                <i class="menu-icon tf-icons bi bi-people"></i>
                <div data-i18n="Analytics">Clientes</div>
              </a>
              <a href="/aplicaciones" class="menu-link">
                <i class="menu-icon tf-icons bi bi-app-indicator"></i>
                <div data-i18n="Analytics">Aplicaciones</div>
              </a>
              <a href="/componentes" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Componentes</div>
              </a>
              </ul>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Componentes</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bi bi-gear-wide-connected"></i>
                <div data-i18n="Account Settings">Configuración de componentes</div>
              </a>
              <ul class="menu-sub">
                <a href="/actualizacionesComponentes" class="menu-link">
                <i class="bi bi-arrow-repeat"></i>
                  <div data-i18n="Analytics">Actualizaciones de Componentes</div>
                </a>
                <a href="/instalacionesComponentes" class="menu-link">
                  <i class="menu-icon tf-icons bi bi-app-indicator"></i>
                  <div data-i18n="Analytics">Instalaciones de Componentes</div>
                </a>
              </ul>
              <ul>
                <a href="/logout" class="menu-link">
                    <i class="menu-icon tf-icons"></i>
                    <div data-i18n="Analytics"></div>
                </a>
              </ul>
              <ul>
                <a href="/logout" class="menu-link">
                    <i class="menu-icon tf-icons"></i>
                    <div data-i18n="Analytics"></div>
                </a>
              </ul>
              <ul>
                <a href="/logout" class="menu-link">
                    <i class="menu-icon tf-icons"></i>
                    <div data-i18n="Analytics"></div>
                </a>
              </ul>
                <a href="/logout" class="menu-link">
                  <i class="bi bi-box-arrow-right"></i>
                    <div data-i18n="Analytics">Log out</div>
                </a>
              
            </li>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
			@yield('content')
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html> 