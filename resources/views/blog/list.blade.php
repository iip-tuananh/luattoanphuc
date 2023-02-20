@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="blog_template">
   <section class="bread-crumb">
      <div class="head-bread">
         <div class="container">
            <ul class="breadcrumb">
               <li class="home">
                  <a href="{{route('home')}}" title="Trang chủ" ><span >Trang chủ</span></a>	
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
               </li>
               <li><strong ><span >{{$title_page}}</span></strong></li>
            </ul>
         </div>
      </div>
      <span class="crumb-border"></span>
      <div class="container">
         <div class="row">
            <div class="col-xs-12 a-left">
               <div class="breadcrumb-container">
                  <div class="title-page ">
                     {{$title_page}}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="container" itemscope itemtype="http://schema.org/Blog">
      <div class="row">
         <section class="right-content col-lg-9 col-md-9  col-md-push-3 col-lg-push-3">
            <div class="box-heading hidden">
               <h1 class="title-head">{{$title_page}}</h1>
            </div>
            <section class="list-blogs blog-main">
               @foreach ($blogs as $blog)
               <div class="row">
                  <article class="blog-item" style="width: 100%; background-color: #e5edf8;">
                        <div class="col-md-4" style="padding: 20px;">
                           <div class="blog-item-thumbnail">
                              <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">
                                 <picture>
                                    <source media="(max-width: 480px)" srcset="{{$blog->image}}" loading="lazy">
                                    <source media="(min-width: 481px) and (max-width: 767px)" srcset="{{$blog->image}}" loading="lazy">
                                    <source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{$blog->image}}" loading="lazy">
                                    <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{$blog->image}}" loading="lazy">
                                    <source media="(min-width: 1200px)" srcset="{{$blog->image}}" loading="lazy">
                                    <img src="{{$blog->image}}" style="max-width:100%;" class="img-responsive" alt="{{languageName($blog->title)}}" loading="lazy">
                                 </picture>
                              </a>
                           </div>
                        </div>
                        <div class="col-md-8" style="padding: 25px 10px 25px 20px;">
                           <div class="blog-item-info">
                              <h3 class="blog-item-name"><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h3>
                              <div class="blog-item-summary margin-bottom-5 desc">   {{languageName($blog->description)}}</div>
                           </div>
                           <div class="draf-tool">
                              @if (isset($blog->type_cate))
                                 <a href="{{route('listTypeBlog', ['slug'=>$blog->type_cate])}}" class="draf-term">{{languageName($blog->typeCate->name)}}</a>
                                 <span>{{date_format($blog->created_at, 'd/m/Y')}}</span>
                              @else
                                 <span class="draf-term">{{date_format($blog->created_at, 'd/m/Y')}}</span>
                              @endif
                           </div>
                        </div>
                     </article>
                  </div>
               @endforeach
            </section>
            <div class="paginate">
               {{$blogs->links()}}
            </div>
         </section>
         @include('layouts.main.rightnav-page')
      </div>
   </div>
</div>
@endsection