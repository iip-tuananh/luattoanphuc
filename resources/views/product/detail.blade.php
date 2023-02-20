@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
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
            <li><strong ><span >{{languageName($product->name)}}</span></strong></li>
         </ul>
      </div>
   </div>
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <div class="breadcrumb-container">
               <div class="title-page ">
                  {{languageName($product->name)}}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="page">
   <h1 class="hidden">{{languageName($product->name)}}</h1>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 col-sm-12">
            <div class="content-page rte">
               {!!languageName($product->content)!!}
            </div>
         </div>
      </div>
   </div>
</section>
@endsection