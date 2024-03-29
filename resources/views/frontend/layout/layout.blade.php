<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
    <title>{{$title ?? "Phụ sản Tina - Bác sĩ phòng khám bệnh viện Từ Dũ – Hùng Vương"}}</title>
    <meta name="description"
        content="{{$description ?? "Thăm khám và điều trị tại Phụ sản Tina với trải nghiệm dịch vụ chăm sóc sức khỏe 5* cùng đội ngũ chuyên gia hàng đầu."}}">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
   <link rel="canonical" href="https://phusantina.vn/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link  href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$title ?? "Phụ sản Tina - Bác sĩ phòng khám bệnh viện Từ Dũ – Hùng Vương"}}">
    <meta property="og:description"
        content="{{$description ?? "Thăm khám và điều trị tại Phụ sản Tina với trải nghiệm dịch vụ chăm sóc sức khỏe 5* cùng đội ngũ chuyên gia hàng đầu."}}">
    <meta property="og:url" content="#">
    <meta property="og:site_name" content="{{$title ?? "Phụ sản Tina - Bác sĩ phòng khám bệnh viện Từ Dũ – Hùng Vương"}}">
    <meta property="og:image" content="{{asset("assets/images/logo-tina.png")}}">
    <meta property="og:image:secure_url" content="{{asset("assets/images/logo-tina.png")}}">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="670">
    <meta name="keywords" content="{{$keywords ?? "Phụ sản Tina - Bác sĩ phòng khám bệnh viện Từ Dũ – Hùng Vương"}}">
    <link rel="shortcut icon" href="{{asset("assets/images/logo-tina-bak.png")}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/reset.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    </script>
    <!-- <script type="text/javascript" async="" src="{{asset("assets/js/analytics.js")}}">
    </script>

    <script async="" src="{{asset("assets/js/gtm.js")}}">
    </script> -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/all.css")}}">
    <meta http-equiv="origin-trial"
        content="A727AcAeLCei/ZogJHBlJUS63SxP6AeIROo7qXrkjrxkoxBu0eSSmypAHmGYwk4HjBMQp5nxCFODzfVnUIe31AQAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjg4MDgzMTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script type="text/javascript" src="{{asset("assets/js/jquery.lazy.min.js")}}">
    </script>
    <script type="text/javascript" src="{{asset("assets/js/jquery.lazy.plugins.min.js")}}">
    </script>
    <script type="text/javascript" src="{{asset("assets/js/bootstrap.min.js")}}">
    </script>
    <script type="text/javascript" src="{{asset("assets/js/owl.carousel.min.js")}}">
    </script>
    <script type="text/javascript" src="{{asset("assets/js/main.js")}}">
    </script>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WFBLMZ3');</script>
<!-- End Google Tag Manager -->


<?xml version="1.0" encoding="UTF-8"?>




</head>

<body data-rsssl="1"
    class="home page-template page-template-templates page-template-page-new-home page-template-templatespage-new-home-php page page-id-77039">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFBLMZ3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    
 

            @include('frontend.layout.header')
            @yield('content')
            @include('frontend.layout.footer')
    </div>
    <a href="https://m.me/phusantina" target="_blank">
        <img src="{{asset("assets/images/icon-chat.png")}}" class="icon-chat-facebook">
    </a>
@stack('js')
</body>

</html>