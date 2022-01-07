
<html lang="en">
<head><meta charset="gb18030">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trabajo Unir</title>
    <!-- Favicon-->
    <link rel="icon" href="https://bitumovil.com/wp-content/uploads/2016/10/iconofav.png" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link  rel="stylesheet" href="{{URL::asset('assets/css/app.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/styles/all-themes.css')}}"/>
     <link rel="stylesheet" href="{{URL::asset('assets/sweetalert/sweetalert.css')}}"/> 
     <script src="{{ asset('assets/js/app.js') }}"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi&display=swap" rel="stylesheet">

    @yield('css')

</head>
<body class="light">

        <!-- Include this after the sweet alert js file -->

    <!-- Page Loader -->
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
        <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a href="/" class="navbar-brand" >

                    <span class="bitu">PHP</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="pull-left">
                    <li>
                        <a href="javascript:void(0);" class="sidemenu-collapse">
                            <i class="material-icons">reorder</i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Full Screen Button -->
                    <li class="fullscreen">
                        <a href="javascript:;" class="fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <!-- #END# Full Screen Button -->
                    <!-- #START# Notifications-->

                    <!-- #END# Notifications-->
                    <li class="dropdown user_profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img src="https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824144_960_720.png" width="32" height="32" alt="User">
                        </a>
                        <ul class="dropdown-menu pullDown">
                            <li class="body">
                                <ul class="user_dw_menu">
                                    <li>
                                        <a href="#">
                                            <i class="material-icons">person</i>Profile
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->

                </ul>
            </div>
        </div>
    </nav>

    <!-- #Top Bar -->
    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                 <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="https://cdn.pixabay.com/photo/2016/11/14/17/39/person-1824144_960_720.png" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            
                                    <div class="sidebar-userpic-name">
                                        
                                        UNIR
                                    </div>
                            <div class="profile-usertitle-job ">
                                    Administrador
                            </div>
                        </div>
                    </li>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </div>
    <section class="content">
        <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card" style="margin: 10px; padding: 20px;">

                            @yield('contenido')

                        </div>
                    </div>
                </div>

        </div>

    </section>
    <!-- Plugins Js -->
    <script src="{{URL::asset('assets/js/app.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/chart.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{URL::asset('assets/js/admin.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/index.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/charts/jquery-knob.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/sparkline/sparkline-data.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/medias/carousel.js')}}"></script>
    {{-- <script src="{{URL::asset('assets/js/form.min.js')}}"></script> --}}
    <script src="{{URL::asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>

    <!-- table -->
    <script type="text/javascript">
            $('.btnModal').on("click", function(event) {
              event.preventDefault();

              var $contenedorModal = $('#myModal');
              var urlModal         = $(this).attr("href");
              var idModal          = $(this).data("idmodal");

              $contenedorModal.load(urlModal + ' ' + idModal , function(response) {
              $(this).modal({backdrop: "static"});
              });
          });
    </script>

<!--<script>
    window.fwSettings={
    'widget_id':64000001176
    };
    !function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}()
</script>-->
<script type='text/javascript' src='https://widget.freshworks.com/widgets/64000001176.js' async defer></script>
        @yield('script')
</body>

</html>