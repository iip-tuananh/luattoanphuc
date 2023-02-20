@extends('layouts.main.master')
@section('title')
Đăng kí dịch vụ
@endsection
@section('description')
Cảm ơn khách hàng đã tin tưởng và sử dụng dịch vụ của chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
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
			<li><strong ><span >Đăng kí sử dụng dịch vụ</span></strong></li>
		</ul>
	</div>
	</div>
	<span class="crumb-border"></span>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 a-left">
			<div class="breadcrumb-container">
				<div class="title-page ">
					Đăng kí sử dụng dịch vụ
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="page">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="content-page rte">
				<div class="form-dang-ky-bao-hiem">
				<form id="contact" >
					<h4><b>1.Thông tin của bạn</b></h4>
					<div class="row">
						<div class="col-md-6">
							<p>Họ tên *</p>
							<input class="form-control"	name="contact[name]" id="name"  type="text" />
						</div>
						<div class="col-sm-6">
							<p>Số điện thoại</p>
							<input class="form-control"	name="contact[phone]" type="text"/>
						</div>
						<div class="col-sm-6">
							<p>Email</p>
							<input class="form-control" type="email" name="contact[email]" />
						</div>
						<div class="col-md-6">
							<p>Ngày sinh</p>
							<div class="wrap-date">
							<input class="form-control date-input"	name="contact[Ngày sinh]" />
							<i class="fa fa-calendar"></i>
							</div>
						</div>
						<div class="col-sm-6">
							<p>Địa chỉ</p>
							<input class="form-control" type="text" name="contact[Địa chỉ]" />
						</div>
						<div class="col-md-6">
							<p>Giới tính</p>
							<div class="wrap-radio">
							<label><input type="radio" name="contact[Giới tính]" value="Nam"><span>Nam</span></label>
							<label><input type="radio" name="contact[Giới tính]" value="Nữ"><span>Nữ</span></label>
							</div>
						</div>
					</div>
					<h4><b>2.Nhu cầu của bạn</b></h4>
					<div class="row space-20">
						<div class="col-sm-6">
							<p class="text-uppercase"><b>Dịch vụ sử dụng</b></p>
							@foreach ($servicehome as $service)
							<label><input type="checkbox" name="contact[Dịch vụ]" value="{{$service->name}}"><span>{{$service->name}}</span></label>
							@endforeach
						</div>
					</div>
					<textarea name="contact[body]" placeholder="Nhập nội dung*" id="comment" class="form-control form-control-lg" rows="6" ></textarea>
					<div class="row" style="margin-top: 30px;">
						<div class="col-xs-12">
							<button type="submit" class="btn btn-yellow text-uppercase" id="submit-contact">Đăng ký</button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<script>
	$(function() {
	$('#submit-contact').click( function(e) {
		e.preventDefault();
		$.ajax({
				type: 'post',
				url: 'https://script.google.com/macros/s/AKfycbyrUTdoGWoHEkxnwtulcppLjXgvSxx2Dfij8NbXJr-u6Qlg8pxEON5xQ4QZsHgaxPo/exec',
				data: $('#contact').serializeArray(),
				success: function (data) {
					$.notify("Đăng kí thành công!", "success");
					$('#contact').reset();
				},
				error: function (data) {
					$.notify("Đăng kí thất bại!", "error");
					console.log('Đăng kí thất bại!.');
					console.log(data);
				},
			});
	})
	})
</script>
@endsection