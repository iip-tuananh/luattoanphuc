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
                @foreach ($services as $service)
                    <article class="blog-item">
                        <div class="blog-item-thumbnail">
                            <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="{{$service->image}}" loading="lazy">
                                    <source media="(min-width: 481px) and (max-width: 767px)" srcset="{{$service->image}}" loading="lazy">
                                    <source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{$service->image}}" loading="lazy">
                                    <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{$service->image}}" loading="lazy">
                                    <source media="(min-width: 1200px)" srcset="{{$service->image}}" loading="lazy">
                                    <img src="{{$service->image}}" style="max-width:100%;" class="img-responsive" alt="{{$service->name}}" loading="lazy">
                                </picture>
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <h3 class="blog-item-name"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">{{$service->name}}</a></h3>
                            <div class="blog-item-summary margin-bottom-5 desc">{!!languageName($service->description)!!}</div>
                        </div>
                    </article>
                @endforeach
            </section>
            <div class="paginate">
                {{$services->links()}}
            </div>
        </section>
        @include('layouts.main.rightnav-page')
    </div>
    </div>
</div>
@endsection