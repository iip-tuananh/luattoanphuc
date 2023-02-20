@extends('layouts.main.master')
@section('title')
{{$founder->name}}
@endsection
@section('description')
{{$founder->name}}
@endsection
@section('image')
{{url(''.$founder->image)}}
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
            <li><strong ><span >{{$founder->position}} {{$founder->name}}</span></strong></li>
         </ul>
      </div>
   </div>
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <div class="breadcrumb-container">
               <div class="title-page ">
                  {{$founder->position}} {{$founder->name}}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="page">
   <div class="container">
   <div class="page-title category-title">
      <h1 class="title-head hidden"><a href="#">{{$founder->position}} {{$founder->name}}</a></h1>
   </div>
   <div class="content-page rte">
      <div class="row space-30">
         <div class="col-md-8">
            {!!languageName($founder->content)!!}
         </div>
         <div class="col-md-4"><img class="img-responsive" data-thumb="original" src="{{$founder->image}}" alt="{{$founder->position}} {{$founder->name}}" loading="lazy" /></div>
      </div>
   </div>
</section>
@endsection