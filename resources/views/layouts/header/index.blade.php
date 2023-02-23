<header class="header homepage">
   <div class="middle-header">
         <div class="container">
         <div class="headertop">
            <p class="left text-uppercase">Chào mừng bạn đến với {{$setting->company}}</p>
            <div class="box-right">
               <div class="email">
                     <span class="icon">
                     <i class="fa fa-envelope-o"></i>
                     </span>
                     <div class="txt">
                     <p> Gửi mail cho chúng tôi:</p>
                     <a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a>
                     </div>
               </div>
               <div class="phone">
                     <span class="icon">
                     <i class="fa fa-phone"></i>
                     </span>
                     <div class="txt">
                     <p>Gọi ngay cho chúng tôi:</p>
                     <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
                     </div>
               </div>
            </div>
            <div id="translate_select" style="display: none"></div>
            <div class="image-item " style="display: flex;">
               <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Việt" data-lang="vi" style="margin-right: 20px;">
                  <div>
                     <img src="{{url('frontend/images/flag-vn.png')}}" alt="" loading="lazy">
                  </div>
                  <div>
                     <span style="color: white">Tiếng Việt</span>
                  </div>
               </a>
               <a href="javascript:;" class="flag_link text-center" rel="" title="Tiếng Anh" data-lang="en">
                  <div>
                     <img src="{{url('frontend/images/flag-en.png')}}" alt="" loading="lazy">
                  </div>
                  <div>
                     <span style="color: white">Tiếng Anh</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="header-main">
            <div class="row">
               <div class="col-lg-11 col-md-11 col-sm-12 text-center">
                     <div class="menu-bar hidden-md hidden-lg">
                     <i class="fa fa-bars" aria-hidden="true"></i>
                     </div>
                     <div class="logo">
                     <a href="{{route('home')}}" class="logo-wrapper " title="{{$setting->company}}">		
                     <img src="{{url('frontend/images/loading.svg')}}"  data-lazyload="{{$setting->logo}}"  alt="{{$setting->company}}" loading="lazy">
                     </a>
                     </div>
                     <div class="main-nav">
                     <div class="hidden-lg hidden-md head-menu">
                        <a href="{{route('home')}}" class="logo-wrapper " title="{{$setting->company}}">		
                        <img src="{{$setting->logo}}" alt="{{$setting->company}}" loading="lazy">
                        </a>
                        <div class="close-menu"><span>&times;</span></div>
                     </div>
                     <nav>
                        <ul id="nav" class="nav hidden-sm hidden-xs">
                           <li class="hidden-sm hidden-xs nav-item has-mega has-dropdown">
                              <a class="nav-link" href="#" title="Giới thiệu">Giới thiệu <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>
                              <div class="mega-content">
                                 <div>
                                    <div class="level0-wrapper2">
                                       <div class="nav-block nav-block-center">
                                             <ul class="level0">
                                                @foreach ($pageContentMenu as $item)
                                                @if ($item->type == 'gioi-thieu-chung')
                                                   <li class="level1 item">
                                                      <h2 class="h4"><a href="{{route('aboutUs')}}" title="{{$item->title}}"><span>{{$item->title}}</span></a> </h2>
                                                   </li>
                                                @else
                                                   <li class="level1 item">
                                                      <h2 class="h4"><a href="{{route('pagecontent', ['slug'=>$item->slug])}}" title="{{$item->title}}"><span>{{$item->title}}</span></a> </h2>
                                                   </li>
                                                @endif
                                                @endforeach
                                             </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="hidden-sm hidden-xs nav-item  has-mega has-dropdown">
                                 <a href="{{route('listService')}}" title="Dịch vụ" class="nav-link">Dịch vụ luật <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			
                                 <div class="mega-content">
                                 <div>
                                    <div class="level0-wrapper2">
                                       <div class="nav-block nav-block-center">
                                             <ul class="level0">
                                                @foreach ($servicehome as $service)
                                                   <li class="level1 item">
                                                      <h2 class="h4"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}"><span>{{$service->name}}</span></a> </h2>
                                                   </li>
                                                @endforeach
                                             </ul>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                           </li>
                           <li class="hidden-sm hidden-xs nav-item  has-mega has-dropdown">
                                 <a href="#" title="Hỏi đáp luật" class="nav-link">Hỏi đáp luật <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			
                                 <div class="mega-content">
                                 <div>
                                    <div class="level0-wrapper2">
                                       <div class="nav-block nav-block-center">
                                             <ul class="level0">
                                                @foreach ($categoryhome as $category)
                                                   <li class="level1 item">
                                                      <h2 class="h4"><a href="{{route('allListProCate', ['cate'=>$category->slug])}}" title="{{languageName($category->name)}}"><span>{{languageName($category->name)}}</span></a> </h2>
                                                   </li>
                                                @endforeach
                                             </ul>
                                       </div>
                                    </div>
                                 </div>
                                 </div>
                           </li>
                           @foreach ($blogCate as $category)
                              <li class="hidden-sm hidden-xs nav-item  has-mega has-dropdown">
                                    <a href="{{route('listCateBlog', ['slug'=>$category->slug])}}" title="{{languageName($category->name)}}" class="nav-link">{{languageName($category->name)}} <i class="{{count($category->typeCate) > 0 ? 'fa fa-angle-down' : '' }}" data-toggle="dropdown"></i></a>
                                    @if (count($category->typeCate) > 0)
                                       <div class="mega-content">
                                       <div>
                                          <div class="level0-wrapper2">
                                             <div class="nav-block nav-block-center">
                                                   <ul class="level0">
                                                      @foreach ($category->typeCate as $type)
                                                         <li class="level1 item">
                                                            <h2 class="h4"><a href="{{route('listTypeBlog', ['slug'=>$type->slug])}}" title="{{languageName($type->name)}}"><span>{{languageName($type->name)}}</span></a> </h2>
                                                         </li>
                                                      @endforeach
                                                   </ul>
                                             </div>
                                          </div>
                                       </div>
                                       </div>
                                    @endif	
                              </li>
                           @endforeach
                           <li class="hidden-sm hidden-xs nav-item "><a class="nav-link" href="{{route('lienHe')}}" title="Liên hệ">Liên hệ</a></li>
                           <!-- menu mobile -->
                           <li class="hidden-lg hidden-md nav-item "><a class="nav-link" href="{{route('aboutUs')}}" title="Giới thiệu">Giới thiệu</a></li>
                           <li class="hidden-lg hidden-md nav-item  has-dropdown">
                                 <a href="{{route('listService')}}" title="Dịch vụ luật" class="nav-link">Dịch vụ luật <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			
                                 <ul class="dropdown-menu">
                                    @foreach ($servicehome as $service)
                                       <li class="nav-item-lv2">
                                          <a class="nav-link" title="{{$service->name}}" href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a>
                                       </li>
                                    @endforeach
                                 </ul>
                           </li>
                           <li class="hidden-lg hidden-md nav-item  has-dropdown">
                                 <a href="{{route('allProduct')}}" title="Hỏi đáp luật" class="nav-link">Hỏi đáp luật <i class="fa fa-angle-down" data-toggle="dropdown"></i></a>			
                                 <ul class="dropdown-menu">
                                    @foreach ($categoryhome as $category)
                                       <li class="nav-item-lv2">
                                          <a class="nav-link" title="{{languageName($category->name)}}" href="{{route('allListProCate', ['cate'=>$category->slug])}}">{{languageName($category->name)}}</a>
                                       </li>
                                    @endforeach
                                 </ul>
                           </li>
                           @foreach ($blogCate as $category)
                           <li class="hidden-lg hidden-md nav-item  has-dropdown">
                              <a href="{{route('listCateBlog', ['slug'=>$category->slug])}}" title="{{languageName($category->name)}}" class="nav-link">{{languageName($category->name)}} <i class="{{count($category->typeCate) > 0 ? 'fa fa-angle-down' : ''}}" data-toggle="dropdown"></i></a>	
                              @if (count($category->typeCate) > 0)
                                 <ul class="dropdown-menu">
                                    @foreach ($category->typeCate as $type)
                                       <li class="nav-item-lv2">
                                          <a class="nav-link" title="{{languageName($type->name)}}" href="{{route('listTypeBlog', ['slug'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                       </li>
                                    @endforeach
                                 </ul>
                              @endif
                           </li>
                           @endforeach
                           <li class="hidden-lg hidden-md nav-item "><a class="nav-link" href="{{route('lienHe')}}" title="Liên Hệ">Liên Hệ</a></li>
                        </ul>
                        <ul class="nav hidden-lg hidden-md nav-mobile">
                           <li class="nav-item">
                                 <a class="nav-link" href="{{route('aboutUs')}}" title="Giới thiệu">
                                 Giới thiệu
                                 </a>
                           </li>
                           <li class="nav-item">
                                 <a href="{{route('listService')}}" class="nav-link" title="Dịch vụ luật">
                                 Dịch vụ luật 
                                 </a>
                                 <span class="open-close2">
                                 <i class="fa fa-angle-down" aria-hidden="true"></i>
                                 </span>
                                 <ul class="sub-menu-1" style="display: none">
                                    @foreach ($servicehome as $service)
                                       <li class="nav-item-lv2">
                                          <a class="nav-link" href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">
                                          <span>{{$service->name}}</span>
                                          </a>
                                       </li>
                                    @endforeach
                                 </ul>
                           </li>
                           <li class="nav-item">
                                 <a href="#" class="nav-link" title="Hỏi đáp luật">
                                 Hỏi đáp luật 
                                 </a>
                                 <span class="open-close2">
                                 <i class="fa fa-angle-down" aria-hidden="true"></i>
                                 </span>
                                 <ul class="sub-menu-1" style="display: none">
                                    @foreach ($categoryhome as $category)
                                       <li class="nav-item-lv2">
                                          <a class="nav-link" href="{{route('allListProCate', ['cate'=>$category->slug])}}" title="{{languageName($category->name)}}">
                                          <span>{{languageName($category->name)}}</span>
                                          </a>
                                       </li>
                                    @endforeach
                                 </ul>
                           </li>
                           @foreach ($blogCate as $category)
                           <li class="nav-item">
                              <a href="{{route('listCateBlog', ['slug'=>$category->slug])}}" class="nav-link" title="{{languageName($category->name)}}">
                              {{languageName($category->name)}} 
                              </a>
                              @if (count($category->typeCate) > 0)
                                 <span class="open-close2">
                                 <i class="fa fa-angle-down" aria-hidden="true"></i>
                                 </span>
                                 <ul class="sub-menu-1" style="display: none">
                                    @foreach ($category->typeCate as $type)
                                       <li class="nav-item-lv2">
                                          <a class="nav-link" href="{{route('listTypeBlog', ['slug'=>$type->slug])}}" title="{{languageName($type->name)}}">
                                          <span>{{languageName($type->name)}}</span>
                                          </a>
                                       </li>
                                    @endforeach
                                 </ul>
                              @endif
                           </li>
                           @endforeach
                           <li class="nav-item">
                                 <a class="nav-link" href="{{route('lienHe')}}" title="Liên hệ">
                                 Liên hệ
                                 </a>
                           </li>
                        </ul>
                     </nav>
                     <div class="hidden-lg hidden-md footer-menu">
                        <div id="translate_select" style="display: none"></div>
                        <div class="image-item " style="display: flex; justify-content: space-evenly;">
                           <a href="javascript:;" class="flag_link" rel="" title="Tiếng Việt" data-lang="vi">
                                 <img src="{{url('frontend/images/flag-vn.png')}}" alt="" loading="lazy">
                                 <span style="color: #000">Tiếng Việt</span>
                           </a>
                           <a href="javascript:;" class="flag_link" rel="" title="Tiếng Anh" data-lang="en">
                                 <img src="{{url('frontend/images/flag-en.png')}}" alt="" loading="lazy">
                                 <span style="color: #000">Tiếng Anh</span>
                           </a>
                        </div>
                        <div class="box">
                           <a class="hotline" href="tel:{{$setting->phone1}}" title="phone"><i class="fa fa-phone"></i> {{$setting->phone1}}</a>
                        </div>
                        <div class="box text-center">
                           <ul class="social-media">
                                 <li><a href="https://www.facebook.com/" title="facebook"><i class="fa fa-facebook"> </i></a></li>
                                 <li><a href="https://www.youtube.com/" title="youtube"><i class="fa fa-youtube-play"> </i></a></li>
                           </ul>
                        </div>
                     </div>
                     </div>
               </div>
               <div class="col-lg-1 col-md-1 text-right box-relative">
                     <div class="inner-box">
                     <div class="search">
                        <div class="header_search search_form" onclick="">
                           <span class="icon-click-search"><i class="fa fa-search"></i></span>
                           <form class="input-group search-bar search_form" action="{{route('search_result')}}" method="post" role="search">		
                              @csrf
                                 <input type="search" name="keyword" value="" placeholder="Tìm kiếm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                                 <span class="input-group-btn">
                                 <button class="btn icon-fallback-text" type="submit">
                                 <i class="fa fa-search"></i>
                                 </button>
                                 </span>
                           </form>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</header>