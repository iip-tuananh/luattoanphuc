@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
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
				<a href="{{route('listService')}}" title="Dịch vụ luật"><span >Dịch vụ luật</span></a>	
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</li>
			<li><strong><span >{{($detail_service->name)}}</span></strong></li>
		</ul>
	</div>
	</div>
	<span class="crumb-border"></span>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 a-left">
			<div class="breadcrumb-container">
				<div class="title-page ">
					{{($detail_service->name)}}
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
				<h1 class="title-head" itemprop="name">{{($detail_service->name)}}</h1>
				<div class="article-details">
					<div class="article-image hidden">
						<a href="{{route('serviceDetail', ['slug'=>$detail_service->slug])}}">
						<img itemprop="image" class="img-fluid" src="{{$detail_service->image}}" alt="{{($detail_service->name)}}" loading="lazy">
						</a>
					</div>
					<div class="article-content" itemprop="description">
						<div class="rte">
							{!!languageName($detail_service->content)!!}
						</div>
					</div>
				</div>
				</div>
				<div class="col-lg-12">
				<div class="social-media" data-permalink="{{route('serviceDetail', ['slug'=>$detail_service->slug])}}">
					<label>Chia sẻ: </label>
					<a target="_blank" href="//www.facebook.com/sharer.php?u={{route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="share-facebook" title="Chia sẻ lên Facebook">
					<i class="fa fa-facebook-official"></i>
					</a>
					<a target="_blank" href="//twitter.com/share?url={{route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="share-twitter" title="Chia sẻ lên Twitter">
					<i class="fa fa-twitter"></i>
					</a>
					<a target="_blank" href="//plus.google.com/share?url={{route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="share-google" title="+1">
					<i class="fa fa-google-plus"></i>
					</a>
				</div>
				</div>
				@if (isset($proCate))
				<div class="col-lg-12 space-30">
					<div class="related-blog-title">
						<h2><a href="#" title="Các câu hỏi liên quan" >Các câu hỏi liên quan</a></h2>
					</div>
					<div class="list-blogs related-blogs list-question">
						@foreach ($proCate->product as $item)
							<article class="blog-item blog-item-list panel-heading" >
								<h4 class="blog-item-name">{{languageName($item->name)}}
									<span class="open-close">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</span>
								</h4>
								<ul style="display: none;" >
									<div class="answer-content">
										{!!languageName($item->content)!!}
									</div>
								</ul>
							</article>
							{{-- <div class="panel panel-default ">
								<div class="panel-heading accordion-toggle question-toggle collapsed">
								<h4 class="panel-title" style="padding: 20px;">{{languageName($item->name)}}
									<span class="open-close">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</span>
								</h4>
								<ul style="display: none;" >
									<div class="answer-content">
										{!!languageName($item->content)!!}
									</div>
								</ul>
								</div>
							</div> --}}
						@endforeach
					</div>
				</div>
				@endif
			</div>
		</article>
	</section>
	@include('layouts.main.rightnav-page')
	</div>
</div>
@endsection