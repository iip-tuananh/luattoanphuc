@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
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
            <li><strong ><span >{{$title}}</span></strong></li>
         </ul>
      </div>
   </div>
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <div class="breadcrumb-container">
               <div class="title-page ">
                  {{$title}}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="page">
   <div class="container">
      <div class="page-title category-title">
         <h1 class="title-head hidden"><a href="#">{{$title}}</a></h1>
      </div>
      <div class="content-page rte">
         <h3 class="text-center space-30 space-top-30">{{$title}}</h3>
         <div class="question-content">
            {!!$content!!}
         </div>
         <div class="panel-group page-faq space-30 list-question" id="faqAccordion">
            <h3 style="font-size: 18px;">Câu hỏi thường gặp</h3>
            @foreach ($list as $item)
            <div class="panel panel-default ">
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
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
@endsection