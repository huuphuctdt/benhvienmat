<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ url('upload/favicon.png') }}"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Quản trị - Bệnh viện mắt Long Xuyên</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('css/sb-admin.css') }}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{ url('css/plugins/morris.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=s7ka3y9htsubvpeq7r07whns7zeu1nujf0amv4dw3yz0czk5'></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        tinymce.init({
            toolbar: "imageupload | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            selector : "textarea.my-textarea",
            setup: function(editor) {
                var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                $(editor.getElement()).parent().append(inp);

                inp.on("change",function(){
                    var input = inp.get(0);
                    var file = input.files[0];
                    var fr = new FileReader();
                    fr.onload = function() {
                        var img = new Image();
                        img.src = fr.result;
                        editor.insertContent('<img src="'+img.src+'"/>');
                        inp.val('');
                    }
                    fr.readAsDataURL(file);
                });

                editor.addButton( 'imageupload', {
                    text:"IMAGE",
                    icon: false,
                    onclick: function(e) {
                        inp.trigger('click');
                    }
                });
            },
            theme: "modern",
//            width: 100%,
            height: 400,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
//            content_css: "css/content.css",

            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    </script>
    <style>
        #modal-body-video iframe{
            width: 100%;
            height: 300px;
        }#modal-body-video img{
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Quản trị Bệnh viện mắt Long Xuyên</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Thông tin</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                @if( Auth::user()->role == 1)
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#ul1">
                        <i class="fa fa-fw fa-header"></i> Header <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="ul1" class="collapse">
                        <li>
                            <a href="/admin/logo">Logo</a>
                        </li>
                        <li>
                            <a href="/admin/menu">Menu</a>
                        </li>
                    </ul>
                </li>
                {{--<li >--}}
                    {{--<a href="javascript:;" data-toggle="collapse" data-target="#ul2">--}}
                        {{--<i class="fa fa-fw fa-picture-o"></i> Banner <i class="fa fa-fw fa-caret-down"></i>--}}
                    {{--</a>--}}
                    {{--<ul id="ul2" class="collapse">--}}
                        {{--<li>--}}
                            {{--<a href="/admin/banner">Banner Lớn</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="/admin/banner-child">Banner Nhỏ</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ url('admin/banner') }}">
                        <i class="fa fa-fw fa-picture-o"></i> Banner
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{ url('admin/intro') }}">
                        <i class="fa fa-fw fa-briefcase"></i> Giới thiệu
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#ulpost">
                        <i class="fa fa-fw fa-th-large"></i> Bài viết <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="ulpost" class="collapse">
                        <li>
                            <a href="{{ url('admin/post_category') }}">Danh mục</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/post') }}">Bài viết</a>
                        </li>
                    </ul>
                </li>
                @if( Auth::user()->role == 1)
                <li>
                    <a href="{{ url('admin/review') }}">
                        <i class="fa fa-fw fa-commenting"></i> Ý kiến khách hàng
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/question') }}">
                        <i class="fa fa-fw fa-question-circle"></i> Câu hỏi thường gặp
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/promotion') }}">
                        <i class="fa fa-fw fa-money"></i> Khuyến mãi
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/footer') }}">
                        <i class="fa fa-fw fa-phone-square"></i> Footer
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/admin-show') }}">
                        <i class="fa fa-fw fa-eye"></i> Hiển thị
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/user') }}">
                        <i class="fa fa-fw fa-user"></i> Quản lý người dùng
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            @yield('admin-content')
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<script src="{{ url('js/app.js') }}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('.alert_notification').delay(2000).slideUp();
    });
</script>
</body>

</html>
