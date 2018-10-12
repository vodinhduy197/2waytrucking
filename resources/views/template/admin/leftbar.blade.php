<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/apple-icon.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="/public/admin/assets/css/normalize.css">
    <link rel="stylesheet" href="/public/admin/assets/css/animate.css">
    <link rel="stylesheet" href="/public/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/public/admin/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/public/admin/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/public/admin/assets/css/custom.css">
    {{--<link rel="stylesheet" href="/public/admin/assets/css/bootstrap-select.css">--}}
    <link rel="stylesheet" href="/public/admin/assets/scss/style.css">
    <link rel="stylesheet" href="/public/admin/assets/css/lib/chosen/chosen.min.css">

    <link href="/public/admin/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

   {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>--}}

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="/public/admin/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="/public/admin/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <h3 class="menu-title">thống kê</h3>
                <li class="active menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-dashboard"></i>Bảng thống kê</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li> <i class="menu-icon fa fa-bar-chart-o"></i><a href="{{ route('admin.index.index') }}">Admin </a></li>
                        <li> <i class="menu-icon fa fa-line-chart"></i><a href="{{ route('admin.partner.index') }}">Công ty đối tác </a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Quản lý</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Quản lý người dùng</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-truck"></i><a href="{{ route('admin.user.trucking.index') }}">Quản lý công ty</a></li>
                        <li><i class="fa fa-archive"></i><a href="{{ route('admin.user.cargo.index') }}">Quản lý chủ hàng</a></li>
                        <li><i class="fa fa-user"></i><a href="{{ route('admin.user.admin.index') }}">Quản lý admin</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-desktop "></i>Quản lý danh mục </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li> <i class="menu-icon fa fa-desktop"></i><a href="{{ route('admin.category.website.index') }}">Quản lý danh mục web</a></li>
                        <li> <i class="menu-icon fa fa-suitcase"></i><a href="{{ route('admin.category.typeofcargo.index') }}">Quản lý danh mục hàng</a></li>
                        <li> <i class="menu-icon fa fa-train"></i><a href="{{ route('admin.category.typeoftruck.index') }}">Quản lý danh mục xe</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.contact.index') }}"> <i class="menu-icon ti-email"></i>Quản lý liên hệ </a>
                </li>
                <li>
                    <a href="{{ route('admin.comment.index') }}"> <i class="menu-icon ti-comment"></i>Quản lý bình luận </a>
                </li>
                <li>
                    <a href="{{ route('admin.position.index') }}"> <i class="menu-icon ti-check-box"></i>Quản lý chức vụ </a>
                </li>
                <h3 class="menu-title">Tài khoản</h3>
                <li>
                    <a href="{{ route('admin.account.index') }}"> <i class="menu-icon ti-settings"></i>Thiết lập tài khoản </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>