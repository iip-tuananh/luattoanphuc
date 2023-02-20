<section class="section-banner-footer">
   <div class="container">
         <div class="row">
         <div class="col-md-5">
            <img class="img-responsive" src="{{url('frontend/images/loading.svg')}}"  data-lazyload="{{url('frontend/images/tam-nhin.png')}}"  alt="Tầm nhìn - Chiến lược phát triển" style="width: 57%;">
         </div>
         <div class="col-md-7">
            <div class="text">
               <h2>TẦM NHÌN - CHIẾN LƯỢC PHÁT TRIỂN</h2>
               <ul>
                     <li class="item">
                     <i class="fa fa-bolt "></i>Trở thành lựa chọn pháp lý uy tín cho khách hàng khi có nhu cầu sử dụng dịch vụ pháp lý
                     </li>
                     <li class="item">
                     <i class="fa fa-bolt "></i>Trở thành công ty luật tích hợp công nghệ số lớn nhất
                     </li>
                     <li class="item">
                     <i class="fa fa-bolt "></i>Mang lại sự bình an trước mọi biến động
                     </li>
                     <li class="item">
                     <i class="fa fa-bolt "></i>Đặt khách hàng làm trọng tâm
                     </li>
                     <li class="item">
                     <i class="fa fa-bolt "></i>Tập trung vào những thị trường và phân khúc có lợi thế cạnh tranh nhất
                     </li>
                     <li class="item">
                     <i class="fa fa-bolt "></i>Ưu tiên phát triển nâng cao trình độ
                     </li>
               </ul>
            </div>
         </div>
         </div>
   </div>
</section>
<footer class="footer">
   <div class="back-to-top"><i class="fa  fa-long-arrow-up"></i></div>
   <div class="site-footer">
         <div class="container">
         {{-- <div class="footer-top">
            <div class="text">
               <h3>Đăng ký nhận tin</h3>
               <p>Hãy để lại email tại đây. Chúng tôi sẽ liên hệ lại cho bạn ngay.</p>
            </div>
            <form action="{{route('postcontact')}}" method="post" id="mc-embedded-subscribe-form" class="section-newsletter__form">
               @csrf
               <input type="email" value="" placeholder="Email của bạn" name="email" id="mail" aria-label="general.newsletter_form.newsletter_email" >
               <button  class="btn btn-white subscribe" type="submit" id="subscribe"><i class="fa fa-paper-plane"></i></button>
            </form>
         </div> --}}
         <div class="footer-inner">
            <div class="row">
               <div class="block block-cs col-xs-12 col-sm-6 col-md-4 col-lg-4">
                     <div class="footer-widget footer-info-first text-center">
                     <a href="{{route('home')}}" class="logo" title="{{$setting->company}}">		
                     <img src="{{url('frontend/images/loading.svg')}}"  data-lazyload="{{$setting->logo}}"  alt="{{$setting->company}}" loading="lazy">
                     </a>
                     <p>{{$setting->webname}}</p>
                     <ul class="list-menu has-toggle social-media-footer" style="display: block;">
                        <li><a href="{{$setting->facebook}}" title="facebook"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="https://www.youtube.com/" title="youtube"><i class="fa fa-youtube"> </i></a></li>
                        <li><a href="#" title="instagram"><i class="fa fa-instagram"> </i></a></li>
                     </ul>
                     </div>
               </div>
               <div class="block block-cs col-xs-12 col-sm-6 col-md-4 col-lg-4">
                     <div class="footer-widget">
                     <h4>
                        <span>Giới thiệu</span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                     </h4>
                     <ul class="list-menu has-toggle">
                        <li><a href="{{route('aboutUs')}}" title="Giới thiệu">Giới thiệu</a></li>
                        <li><a href="{{route('listService')}}" title="Dịch vụ luật">Dịch vụ luật</a></li>
                        {{-- <li><a href="{{route('allProduct')}}" title="Hỏi đáp luật">Hỏi đáp luật</a></li> --}}
                        @foreach ($blogCate as $category)
                        <li><a href="{{route('listCateBlog', ['slug'=>$category->slug])}}" title="{{languageName($category->name)}}">{{languageName($category->name)}}</a></li>
                        @endforeach
                     </ul>
                     </div>
               </div>
               <div class="block block-cs col-xs-12 col-sm-6 col-md-4 col-lg-4">
                     <div class="footer-widget">
                     <h4>
                        <span>Thông tin công ty</span>
                     </h4>
                     <ul class="list-menu infomation" style="display: block;">
                        <li class="item">
                           <div class="company"><i class="fa fa-map-marker"></i>
                                 {{$setting->address1}} - Trụ sở chính
                           </div>
                           @if ($setting->address2)
                              <div class="address"><i class="far fa-map-marker-alt"></i> Văn phòng giao dịch: {{$setting->address2}}i
                              </div>
                           @endif
                           <div class="hotline">Hotline: <a href="tel:{{$setting->phone1}}" title="Phone">{{$setting->phone1}}</a></div>
                           @if ($setting->phone2)
                           <div class="hotline">Số điện thoại: <a href="tel:{{$setting->phone2}}" title="Phone">{{$setting->phone2}}</a></div>
                           @endif
                           <div class="hotline">Email: <a href="mailto:{{$setting->email}}" title="Email">{{$setting->email}}</a></div>
                        </li>
                     </ul>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
   <div class="copyright clearfix">
         <div class="container">
         <div class="border">© Bản quyền thuộc về HTC Việt Nam <span class="nc hidden-xs">|</span> <span class="cungcap">Cung cấp bởi 
            <a href="https://sbtsoftware.vn/" rel="nofollow" title="SBT software" target="_blank">SBT</a>
            </span>
         </div>
         </div>
   </div>
</footer>