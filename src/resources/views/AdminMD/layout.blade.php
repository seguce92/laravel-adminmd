<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="description" content="{{ config('seguce92.base.app_description') }}">
    <meta name="keywords" content="{{ config('seguce92.base.app_keywords') }}">
    <meta name="author" content="{{ config('seguce92.base.developer_name') }}">

    <title>{{ config('app.name') }} | @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('vendor/seguce92/AdminMD/favicon.ico') }}" type="image/x-icon">

    @yield('after-style')
    @if(env('APP_ENV') === 'local' || env('APP_ENV') === 'testing')
        {!! Html::style('vendor/seguce92/AdminMD/css/fonts.googleapis.com.min.css') !!}
        <!-- Bootstrap Core Css -->
        {!! Html::style('vendor/seguce92/AdminMD/plugins/bootstrap/css/bootstrap.min.css') !!}
    @else
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    @endif
    <!-- Waves Effect Css -->
    {!! Html::style('vendor/seguce92/AdminMD/plugins/node-waves/waves.min.css') !!}

    <!-- Animation Css -->
    {!! Html::style('vendor/seguce92/AdminMD/plugins/animate-css/animate.min.css') !!}

    <!-- Custom Css -->
    {!! Html::style('vendor/seguce92/AdminMD/css/style.min.css') !!}

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all theme -->
    {!! Html::style('vendor/seguce92/AdminMD/css/themes/theme-'.config('seguce92.adminmd.theme').'.min.css') !!}
    @yield('before-style')

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token()
        ]); ?>
    </script>
</head>

<body class="theme-{{ config('seguce92.adminmd.theme') }}">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Espere Por Favor...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">buscar</i>
        </div>
        <input type="text" placeholder="COMIENCE A ESCRIBIR...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('seguce92.base.app_title') }} - {{ config('seguce92.base.app_name') }}</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    @yield('icons')
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                @include('AdminMD::user')
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    @include('AdminMD::menu')
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 <a href="{{ config('seguce92.base.developer_link') }}">{{ config('seguce92.base.developer_name') }}</a>.
                </div>
                <div class="version">
                    <b>Version: </b> {{ config('seguce92.base.version') }}
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#profile" data-toggle="tab">PERFIL</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="profile">
                    <div class="bg-{{ config('seguce92.adminmd.theme') }}" style="border-bottom: 1px solid #FFFFFF">
                        <img src="{{ asset('vendor/seguce92/AdminMD/images/user.jpg') }}" width="48" height="48" alt="User" />
                        Alias
                    </div>
                    <div class="bg-{{ config('seguce92.adminmd.theme') }} p-l-10 p-t-10 p-b-10 p-r-10" style="min-height:49px; border-bottom: 1px solid #FFFFFF">
                        <div class="pull-left"><i class="material-icons" style="font-size:35px">email</i></div>
                        <div class="pull-left m-t-5 m-l-5">{{ config('seguce92.base.developer_email') }}</div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!--div class="block-header">
                <h2>@yield('page-title')</h2>
            </div-->
            @yield('content')
        </div>
    </section>

    @yield('before-script')
    <!-- Jquery Core Js -->
    {!! Html::script('vendor/seguce92/AdminMD/js/jquery.min.js') !!}

    <!-- Bootstrap Core Js -->
    {!! Html::script('vendor/seguce92/AdminMD/plugins/bootstrap/js/bootstrap.min.js') !!}

    <!-- Slimscroll Plugin Js -->
    {!! Html::script('vendor/seguce92/AdminMD/plugins/jquery-slimscroll/jquery.slimscroll.min.js') !!}

    <!-- Waves Effect Plugin Js -->
    {!! Html::script('vendor/seguce92/AdminMD/plugins/node-waves/waves.min.js') !!}

    <!-- Custom Js -->
    {!! Html::script('vendor/seguce92/AdminMD/js/admin.min.js') !!}

    <!-- Demo Js -->
    {{--!! Html::script('vendor/seguce92/AdminMD/js/demo.min.js') !!--}}
    @yield('after-script')
</body>

</html>
