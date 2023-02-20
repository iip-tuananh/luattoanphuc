@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/contact_style.scss.css')}}" rel="stylesheet" type="text/css" />
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
			<li><strong ><span >Liên hệ</span></strong></li>
		</ul>
	</div>
	</div>
	<span class="crumb-border"></span>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 a-left">
			<div class="breadcrumb-container">
				<div class="title-page ">
				Liên hệ
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<div class="container">
	<div class="row">
	<div class="col-sm-12 margin-bottom-30 margin-top-20">
		<div class="box-maps">
			<div class="iFrameMap">
				{!!$setting->iframe_map!!}
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<h1 class="title-head page_title margin-bottom-5">Liên hệ</h1>
		<p></p>
		<div class="contact-box-info clearfix margin-bottom-30">
			<ul class="list-menu">
				<li>Trụ sở chính: <span>{{$setting->address1}}</span></li>
				@if ($setting->address2)
				<li>Địa chỉ: <span>{{$setting->address2}}</span></li>
				@endif
				<li>Hotline: <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></li>
				@if ($setting->phone2)
				<li>Số điện thoại: <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></li>
				@endif
				<li>Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm-8">
		<div id="login">
			<h2 class="title-head"><span> Hãy liên hệ với chúng tôi</span></h2>
			<form accept-charset="utf-8" action="{{route('postcontact')}}" id="contact" method="post">
				@csrf
				<div id="emtry_contact" class="form-signup form_contact clearfix">
				<div class="row row-8Gutter">
					<div class="col-md-6">
						<fieldset class="form-group">							
							<input type="text" placeholder="Họ tên*" name="name" id="name" class="form-control  form-control-lg">
						</fieldset>
					</div>
					<div class="col-md-6">
						<fieldset class="form-group">							
							<input type="email" placeholder="Email*" name="email"  id="email" class="form-control form-control-lg">
						</fieldset>
					</div>
					<div class="col-md-12">
						<fieldset class="form-group">						
							<input type="text" placeholder="Điện thoại*" name="phone"  class="form-control form-control-lg" >
						</fieldset>
					</div>
				</div>
				<fieldset class="form-group">							
					<textarea name="mess" placeholder="Nhập nội dung*" id="comment" class="form-control form-control-lg" rows="6"></textarea>
				</fieldset>
				<div>
					<button type="submit" class="btn btn-primary" style="padding:0 40px;text-transform: inherit;">Gửi liên hệ</button>
				</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>
@endsection