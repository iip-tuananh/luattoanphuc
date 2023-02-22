@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="awe-section-1">
   <div class="home-slider tiny-slider arrow-large" id="home_slider_show" data-target-id="home_slider_show" data-lg-items='1' data-md-items='1' data-sm-items='1' data-xs-items='1' data-xss-items='1' data-margin='0' data-dot="false" data-nav="true" >
      @foreach ($banners as $banner)
         <div class="item">
         <picture>
            <source media="(max-width: 480px)" srcset="{{$banner->image}}">
            <img class="img-responsive center-block"  src="{{$banner->image}}" alt="alt" loading="lazy">
         </picture>
         </div>
      @endforeach
   </div>
   <!-- /.products -->
</section>
<section class="awe-section-4">
   <section class="home-blog1 space-30">
         <div class="container">
         <div class="title-text text-center">
            <h2 class="text-uppercase">Các dịch vụ luật nổi bật</h2>
         </div>
         <div class="row text-center dots-hidden space-20">
            @foreach ($servicehome as $service)
            <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6">
               <div class="item">
                  <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">
                        <picture>
                        <source media="(max-width: 480px)" srcset="{{$service->image}}" data-lazyload3="{{$service->image}}" loading="lazy">
                        <source media="(min-width: 481px) and (max-width: 767px)" srcset="{{$service->image}}" loading="lazy">
                        <source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{$service->image}}" loading="lazy">
                        <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{$service->image}}" loading="lazy">
                        <source media="(min-width: 1200px)" srcset="{{$service->image}}" loading="lazy">
                        <img src="{{url('frontend/images/loading.svg')}}" data-lazyload="{{$service->image}}" style="max-width:100%;" class="img-responsive" alt="{{$service->name}}" loading="lazy">
                        </picture>
                        <h3 class="text2line">{{$service->name}}</h3>
                  </a>
               </div>
            </div>
            @endforeach
         </div>
         </div>
   </section>
</section>
<section class="awe-section-3">
   <section>
         <div class="section-achievement">
         <div class="item">
            <div class="text">
               <h2 class="text-uppercase">Chúng tôi ở đây</h2>
               <p>Để tư vấn, cung cấp các giải pháp cho các vấn đề pháp lý bạn đang gặp phải</p>
               <p>Hãy gửi đề nghị tư vấn/yêu cầu cung cấp dịch vụ pháp lý của bạn cho chúng tôi. HTC Việt Nam sẽ cố gắng phản hồi cho bạn trong vòng 24h.</p>
               <div class="single-funfact">
                  <form action="{{route('postcontact')}}" method="post">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Họ và tên">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" name="phone" class="form-control" placeholder="Số điện thoại">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="email" name="email" class="form-control" placeholder="Địa chỉ Email">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="from-group select">
                              <select name="service" class="form-control">
                                 <option disabled selected >Chọn dịch vụ cần tư vấn</option>
                                 @foreach ($servicehome as $service)
                                    <option value="{{$service->name}}">{{$service->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea name="mess" cols="30" rows="3" placeholder="Yêu cầu tư vấn" class="form-control"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <button type="submit" class="btn-gui-tin">Gửi yêu cầu</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="bg-dot">
               <img src="{{url('frontend/images/loading.svg')}}" data-lazyload="{{url('frontend/images/bg-thanhtuu.png')}}" class="img-responsive" alt="" loading="lazy">
            </div>
         </div>
         <!--End item-->
         <div class="item hidden-xs">
            <div class="divider"></div>
            <div class="bg-cover" style='background-image: url({{url('frontend/images/loading.svg')}})' data-lazyload2="{{url('frontend/images/thanhtuu.jpg')}}"></div>
         </div>
         </div>
   </section>
</section>
<section class="awe-section-6">
   <div class="container space-30">
         <div class="title-text text-center space-top-40">
         <h2 class="text-uppercase">Danh sách các luật sư</h2>
         <p></p>
         </div>
         <div class="tiny-slider text-center space-20 box-testimo" id="section_testimonials" data-target-id="section_testimonials" data-lg-items='3' data-md-items='3' data-sm-items='2' data-xs-items="1" data-margin='20' data-dots="false">
            @foreach ($founders as $founder)
               <div class="item">
                  <div class="htesti-item text-center">
                     <div class="htesti-img">
                           <img src="{{url('frontend/images/loading.svg')}}" data-lazyload="{{$founder->image}}" alt="{{$founder->name}}" loading="lazy">
                     </div>
                     @if ($founder->description)
                     <div class="htesti-desc " style="margin-top: 20px;">
                           “{{$founder->description}}”
                     </div>
                     @endif
                     <div class="htesti-title">
                           {{$founder->name}}
                     </div>
                     <div class="htesti-role">
                           {{$founder->position}}
                     </div>
                     <div class="row mt-3"> 
                        <a href="{{route('chiTietLuatSu', ['slug'=>$founder->slug])}}" class="view-more">Xem chi tiết</a>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
   </div>
</section>

<section class="awe-section-2">
   <div class="row-full home-about">
         <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 space-30">
               <div class="text space-10">
                     <h2 class="text-uppercase">Giới thiệu chung</h2>
                     {!!$aboutUs->description!!}
               </div>
               <div class="bottom-text">
                     <a class="btn btn-primary" href="{{route('aboutUs')}}" title="Xem thêm">Xem thêm</a>	
               </div>
            </div>
            <div class="col-md-6 col-sm-6 space-30 text-center">
               <div class="images">
                     <picture>
                     <source media="(max-width: 480px)" srcset="{{url('frontend/images/loading.svg')}}" data-lazyload3="{{$aboutUs->image}}" loading="lazy">
                     <img src="{{url('frontend/images/loading.svg')}}" data-lazyload="{{$aboutUs->image}}" class="img-responsive" alt="Giới thiệu chung" loading="lazy">
                     </picture>
                     <div class="dot-ab">
                     <img src="{{url('frontend/images/loading.svg')}}" data-lazyload="{{url('frontend/images/section_about_dot.png')}}" class="img-responsive" alt="Giới thiệu chung" loading="lazy">
                     </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section>


<section class="awe-section-5">
   <section class="section_blogs home-tin-tuc-su-kien">
         <div class="container">
         <div class="title-text text-center">
            <h2 class="text-uppercase">Các bài viết tư vấn luật nổi bật</h2>
         </div>
         <div class="list-blogs-link">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="tiny-slider owl-blog-index"
                     id="section_blog"
                     data-target-id="section_blog"
                     data-nav="true" 
                     data-lg-items="3"
                     data-md-items="2" 
                     data-height="false"
                     data-xs-items="2" 
                     data-xxs-items="1" 
                     data-sm-items="2"
                     data-margin="15">
                     @foreach ($homeBlog as $blog)
                        <div class="item_wrap_blog">
                           <div class="item-blg blog-large">
                              <div class="blog-inner">
                                    <div class="blog-img">
                                    <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                                       <picture>
                                          <source media="(max-width: 480px)" srcset="{{url('frontend/images/loading.svg')}}" data-lazyload3="{{$blog->image}}" loading="lazy">
                                          <source media="(min-width: 481px) and (max-width: 767px)" srcset="{{$blog->image}}" loading="lazy">
                                          <source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{$blog->image}}" loading="lazy">
                                          <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{$blog->image}}" loading="lazy">
                                          <source media="(min-width: 1200px)" srcset="{{$blog->image}}" loading="lazy">
                                          <img src="{{url('frontend/images/loading.svg')}}" data-lazyload="{{$blog->image}}" style="max-width:100%;" class="img-responsive" alt="{{languageName($blog->title)}}" loading="lazy">
                                       </picture>
                                    </a>
                                    <span class="time_post f"><i class="fa fa-clock-o"></i>&nbsp;
                                    {{date_format($blog->updated_at, 'd/m/Y')}}</span>
                                    </div>
                                    <div class="content__">
                                    <h3 class="h4">
                                       <a class="text2line" title="{{languageName($blog->title)}}" href="{{route('detailBlog', ['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a>
                                    </h3>
                                    <div class="desc"> {{languageName($blog->description)}}</div>
                                    </div>
                              </div>
                           </div>
                        </div>
                     @endforeach
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section>

<section class="awe-section-7">
   <section>
         <div class="section-why-choose">
         <div class="item hidden-xs">
            <div class="bg-cover" style='background-image: url({{url('frontend/images/loading.svg')}})' data-lazyload2="{{url('frontend/images/why-choose1.jpg')}}"></div>
         </div>
         <div class="item">
            <div class="text bg-cover" style='background:#333333 url({{url('frontend/images/loading.svg')}});background-attachment: fixed; background-size: cover;' data-lazyload2="{{url('frontend/images/bg-footer1.png')}}" loading="lazy">
               <h2>TẠI SAO CHỌN CHÚNG TÔI</h2>
               <p>Sự lựa chọn pháp lý uy tín<br>
                  Bảo vệ quyền lợi và lợi ích khách hàng<br>
                  Ngoài hỗ trợ khách hàng, chúng tôi còn tạo điều kiện cho sinh viên và người tập sự có một môi trường rèn luyện và học tập tốt nhất.
               </p>
               <div class="features-list">
                     <div class="it">
                     <div class="icon">
                        <i class="fa fa-balance-scale"></i>
                     </div>
                     <h3>Có nhiều năm kinh nghiệm hành nghề</h3>
                     </div>
                     <div class="it">
                     <div class="icon">
                        <i class="fa fa-life-ring"></i>
                     </div>
                     <h3>Hỗ trợ 24/7 </h3>
                     </div>
                     <div class="it">
                     <div class="icon">
                        <i class="fa fa-lightbulb-o"></i>
                     </div>
                     <h3>Xây dựng, đào tạo hệ thống chuyên nghiệp</h3>
                     </div>
                     <div class="it">
                     <div class="icon">
                        <i class="fa fa-money "></i>
                     </div>
                     <h3>Bảo vệ gia đình của bạn</h3>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section>
<section class="awe-section-8">
   <section class="section_brand">
         <div class="container">
         <div class="title-text text-center">
            <h2 class="text-uppercase">Đối tác</h2>
         </div>
         <div class="bg-brand">
            <div class="block-brand tiny-slider"
               id="section_brand" data-target-id="section_brand"
               data-lg-items='5'
               data-md-items='5'
               data-sm-items='4'
               data-xs-items="3"
               data-xss-items="2"
               data-dots="false"
               data-margin='20'>
               @foreach ($partners as $partner)
                  <a class="text-center" href="#" title="">
                  <img src="{{url('frontend/images/loading.svg')}}"  data-lazyload="{{$partner->image}}" alt="" loading="lazy">
                  </a>
               @endforeach
            </div>
         </div>
         </div>
   </section>
</section>

@endsection