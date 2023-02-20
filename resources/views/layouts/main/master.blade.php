<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <link rel="preload" href="{{asset('frontend/css/base.scss.css')}}" as="style">
   <link rel="preload" href="{{asset('frontend/css/style.scss.css')}}" as="style">
   <!-- Plugin CSS -->			
   <link rel="stylesheet" href="{{asset('frontend/css/base.scss.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/style.scss.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/callbuttom.css')}}">
   <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <link rel="preload" href="https://fonts.googleapis.com/icon?family=Material+Icons" as="style">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Build Main CSS -->			
   <!-- Bizweb javascript customer -->
   <script src="{{asset('frontend/js/jquery-min.js')}}" type="text/javascript"></script>
   <script src="https://uhchat.net/code.php?f=09067c"></script>
</head>
<body class="body_index">
   <!-- Main content -->
   @include('layouts.header.index')
   @yield('content')
   @include('layouts.footer.index')
   <h1 class="hidden">htc việt nam - </h1>
   <div class="bizweb-product-reviews-module"></div>
   <div class="menu-box-fixed">
      <ul>
         <li class="item">
            <a href="{{route('listService')}}" title="Dịch vụ luật">
            <i class="material-icons">event_note</i>
            <span>
            Dịch vụ luật
            </span>
            </a>
         </li>
         <li class="item">
            <a href="{{route('dangKiDichVu')}}" title="Đăng kí dịch vụ">
            <i class="material-icons">description</i>
            <span>
            Đăng kí dịch vụ
            </span>
            </a>
         </li>
         <li class="item">
            <a href="{{route('lienHe')}}" title="Liên hệ">
            <i class="material-icons">question_answer</i>
            <span>
            Liên hệ
            </span>
            </a>
         </li>
      </ul>
   </div>
   <div class="hotline-phone-ring-wrap">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
         <a href="tel:{{$setting->phone1}}" class="pps-btn-img">
         <img src="{{url('frontend/images/phone.png')}}" alt="Gọi điện thoại" width="50">
         </a>
         </div>
      </div>
   </div>
   <div class="hotline-phone-ring-wrap3">
      <div class="hotline-phone-ring">
         <div class="hotline-phone-ring-circle"></div>
         <div class="hotline-phone-ring-circle-fill"></div>
         <div class="hotline-phone-ring-img-circle">
         <a href="https://zalo.me/{{$setting->phone1}}" class="pps-btn-img">
         <img src="{{url('frontend/images/zalo.png')}}" alt="Chat qua zalo" width="50">
         </a>
         </div>
      </div>
   </div>
   <!-- Add to cart -->	
   <!-- Main JS -->
   <link rel="preload" as="script" href="{{asset('frontend/js/loading.js')}}" />
   <script src="{{asset('frontend/js/loading.js')}}" type="text/javascript"></script> 
   <link rel="preload" as="script" href="{{asset('frontend/js/plugin-date.js')}}" />
   <script src="{{asset('frontend/js/plugin-date.js')}}" type="text/javascript"></script> 
   <link rel="preload" as="script" href="{{asset('frontend/js/main.js')}}" />
   <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script> 
   <script src="{{asset('frontend/js/notify.min.js')}}" type="text/javascript"></script> 
   <script type="text/javascript" 
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
   </script>
   <script type="text/javascript">
      function googleTranslateElementInit() {
      new google.translate.TranslateElement({
      pageLanguage: 'vi',
      includedLanguages:'en,vi', 
      }, 'translate_select');
      }
   </script>
   <script>
      var flags = document.getElementsByClassName('flag_link');
      Array.prototype.forEach.call(flags, function(e){
      e.addEventListener('click', function(){
      var lang = e.getAttribute('data-lang'); 
      var languageSelect = document.querySelector("select.goog-te-combo");
      // console.log(document.querySelector("select.goog-te-combo"));
      languageSelect.value = lang; 
      languageSelect.dispatchEvent(new Event("change"));
      }); 
      });
   </script>
   <style type="text/css">
      /*google translate Dropdown */
      #translate_select select{
      background:#f6edfd;
      color:#383ffa;
      border: none;
      border-radius:3px;
      padding:6px 8px
      }
      /*google translate link | logo */
      .goog-logo-link{
      display:none!important;
      }
      .goog-te-gadget{
      color:transparent!important;
      }
      
      /* google translate banner-frame */
      
      .goog-te-banner-frame{
      display:none !important;
      }
      
      #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
      .goog-text-highlight { background: none !important; box-shadow: none !important;}
      
      body{top:0!important;}
      </style>
   <!-- Product detail JS,CSS -->
   <!-- Quick view -->
</body>
</html>