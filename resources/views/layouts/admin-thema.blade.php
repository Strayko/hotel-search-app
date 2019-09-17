<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css" >
    <link rel="stylesheet" href="{{asset('css/adminMediaQuery.css')}}" type="text/css" >

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/003e33b51d.js"></script>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjscloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjscloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Dashboard</title>
</head>
<body>

@yield('content')



@yield('footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('.toggle-menu-link').click( function() {
        $(".admin2-menu").toggleClass("admin-navbar").css({"display": "block!important", "z-index": "9999", "box-shadow": "1px 1px 2px rgba(0,0,0,.5)"});
    } );
</script>

</body>
</html>