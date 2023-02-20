@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
	<div class="head-bread">
	<div class="container">
		<ul class="breadcrumb">
			<li class="home">
				<a href="{{route('home')}}" title="Trang chủ" ><span >Trang chủ</span></a>	
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</li>
			<li>
				<a href="{{route('listCateBlog', ['slug'=>$blog_detail->category])}}" title="{{languageName($cate->name)}}"><span >{{languageName($cate->name)}}</span></a>	
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</li>
			<li><strong><span >{{languageName($blog_detail->title)}}</span></strong></li>
		</ul>
	</div>
	</div>
	<span class="crumb-border"></span>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 a-left">
			<div class="breadcrumb-container">
				<div class="title-page ">
					{{languageName($blog_detail->title)}}
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<div class="container article-wraper">
	<div class="row">
	<section class="right-content col-lg-9 col-md-9  col-md-push-3 col-lg-push-3">
		<article class="article-main" itemscope itemtype="http://schema.org/Article">
			<div class="row">
				<div class="col-lg-12">
				<h1 class="title-head" itemprop="name">{{languageName($blog_detail->title)}}</h1>
				<div class="article-details">
					<div class="article-image hidden">
						<a href="{{route('detailBlog', ['slug'=>$blog_detail->slug])}}">
						<img itemprop="image" class="img-fluid" src="{{$blog_detail->image}}" alt="{{languageName($blog_detail->title)}}" loading="lazy">
						</a>
					</div>
					<div class="article-content" itemprop="description">
						<div class="rte">
							{!!languageName($blog_detail->content)!!}
						</div>
					</div>
				</div>
				</div>
				<div class="col-lg-12">
				<div class="social-media" data-permalink="{{route('detailBlog', ['slug'=>$blog_detail->slug])}}">
					<label>Chia sẻ: </label>
					<a target="_blank" href="//www.facebook.com/sharer.php?u={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" class="share-facebook" title="Chia sẻ lên Facebook">
					<i class="fa fa-facebook-official"></i>
					</a>
					<a target="_blank" href="//twitter.com/share?url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" class="share-twitter" title="Chia sẻ lên Twitter">
					<i class="fa fa-twitter"></i>
					</a>
					<a target="_blank" href="//plus.google.com/share?url={{route('detailBlog', ['slug'=>$blog_detail->slug])}}" class="share-google" title="+1">
					<i class="fa fa-google-plus"></i>
					</a>
				</div>
				</div>
				{{-- <div class="col-lg-12 space-30">
				<div class="related-blog-title">
					<h2><a href="dau-tu" title="Tin liên quan" >Tin liên quan</a></h2>
				</div>
				<div class="list-blogs related-blogs">
					<article class="blog-item blog-item-list hidden" >
						<h3 class="blog-item-name"><i class="fa fa-caret-right"></i> <a href="/an-phat-hung-gia" title="{{languageName($blog_detail->title)}}">{{languageName($blog_detail->title)}}</a></h3>
					</article>
					<article class="blog-item blog-item-list " >
						<h3 class="blog-item-name"><i class="fa fa-caret-right"></i> <a href="/tao-dung-tai-san-va-dau-tu-hieu-qua" title="TẠO DỰNG TÀI SẢN VÀ ĐẦU TƯ HIỆU QUẢ">TẠO DỰNG TÀI SẢN VÀ ĐẦU TƯ HIỆU QUẢ</a></h3>
					</article>
				</div>
				</div> --}}
			</div>
		</article>
	</section>
	@include('layouts.main.rightnav-page')
	</div>
</div>
@endsection