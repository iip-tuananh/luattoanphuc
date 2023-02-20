<aside class="left left-content col-lg-3 col-md-3 col-md-pull-9 col-lg-pull-9 space-30 col-sm-12 col-xs-12">
   <aside class="aside-item collection-category">
      <div class="categories-box">
         <ul class="lv1">
            <li class="nav-item nav-items ">
               <a  href="#" title="Giới thiệu" class="nav-link">
               Giới thiệu</a>
               <span class="open-close">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                  <ul class="lv2">
                     @foreach ($pageContentMenu as $item)
                     @if ($item->type == 'gioi-thieu-chung')
                        <li class="">
                           <a class="nav-link" href="{{route('aboutUs')}}" title="{{$item->name}}">
                           {{$item->name}} 
                           </a>
                        </li>
                     @else
                        <li class="">
                           <a class="nav-link" href="{{route('pagecontent', ['slug'=>$item->slug])}}" title="{{$item->name}}">
                           {{$item->name}} 
                           </a>
                        </li>
                     @endif
                     @endforeach
                  </ul>
            </li>
            <li class="nav-item nav-items ">
               <a href="{{route('listService')}}" class="nav-link" title="Dịch vụ luật">
               Dịch vụ luật	
               </a> 
               <span class="open-close">
               <i class="fa fa-angle-down" aria-hidden="true"></i>
               </span>
               <ul class="lv2">
                  @foreach ($servicehome as $service)
                     <li class="">
                        <a class="nav-link" href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">
                        {{$service->name}} 
                        </a>
                     </li>
                  @endforeach
               </ul>
            </li>
            <li class="nav-item nav-items ">
               <a href="#" class="nav-link" title="Hỏi đáp luật">
               Hỏi đáp luật	
               </a> 
               <span class="open-close">
               <i class="fa fa-angle-down" aria-hidden="true"></i>
               </span>
               <ul class="lv2">
                  @foreach ($categoryhome as $category)
                     <li class="">
                        <a class="nav-link" href="{{route('allListProCate', ['cate'=>$category->slug])}}" title="{{languageName($category->name)}}">
                        {{languageName($category->name)}} 
                        </a>
                     </li>
                  @endforeach
               </ul>
            </li>
            @foreach ($blogCate as $category)
            <li class="nav-item nav-items ">
               <a href="{{route('listCateBlog', ['slug'=>$category->slug])}}" class="nav-link" title="{{languageName($category->name)}}">
               {{languageName($category->name)}}	
               </a> 
               @if (count($category->typeCate) > 0)
                  <span class="open-close">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                  <ul class="lv2">
                     @foreach ($category->typeCate as $type)
                        <li class="">
                           <a class="nav-link" href="{{route('listTypeBlog', ['slug'=>$type->slug])}}" title="{{languageName($type->name)}}">
                           {{languageName($type->name)}} 
                           </a>
                        </li>
                     @endforeach
                  </ul>
               @endif
            </li>
            @endforeach
            <li class="nav-item nav-items ">
               <a  href="{{route('lienHe')}}" title="Liên hệ">
               Liên hệ</a>
            </li>
         </ul>
      </div>
   </aside>
   @if (count($blogs) > 0)
      <div class="aside-item">
         <div class="aside-title">
            <h2 class="title-head margin-top-0">
               <a href="#" title="Bài viết liên quan">
               <span>Bài viết liên quan</span>
               </a>
            </h2>
         </div>
         @if (isset($blog_detail))
            <div class="list-blogs">
               @foreach ($blogs as $item)
                  @if ($blog_detail->id != $item->id)
                     <article class="blog-item blog-item-list">
                        <div class="blog-item-thumbnail">
                           <a href="{{route('detailBlog', ['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                              <picture>
                                 <img src="{{$item->image}}" style="max-width:100%;" class="img-responsive" alt="{{languageName($item->title)}}" loading="lazy">
                              </picture>
                           </a>
                        </div>
                        <div class="blog-info">
                           <h3 class="blog-item-name"><a href="{{route('detailBlog', ['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a></h3>
                           <div class="post-time">
                              {{date_format($item->updated_at, 'd/m/Y')}}
                           </div>
                        </div>
                     </article>
                  @endif
               @endforeach
            </div>
         @else
            <div class="list-blogs">
               @foreach ($blogs as $item)
                  <article class="blog-item blog-item-list">
                     <div class="blog-item-thumbnail">
                        <a href="{{route('detailBlog', ['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                           <picture>
                              <img src="{{$item->image}}" style="max-width:100%;" class="img-responsive" alt="{{languageName($item->title)}}" loading="lazy">
                           </picture>
                        </a>
                     </div>
                     <div class="blog-info">
                        <h3 class="blog-item-name"><a href="{{route('detailBlog', ['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a></h3>
                        <div class="post-time">
                           {{date_format($item->updated_at, 'd/m/Y')}}
                        </div>
                     </div>
                  </article>
               @endforeach
            </div>
         @endif
      </div>
   @endif
   <aside class="aside-item">
      <div class="aside-content banner-sidebar">
         <a href="#" title="Banner quảng cáo">
            @foreach ($bannerAds as $banner)
            <a href="{{$banner->name}}"><img class="img-responsive center-block" src="{{url('frontend/images/loading.svg')}}"  data-lazyload="{{$banner->image}}"  alt="Banner quảng cáo" loading="lazy"></a>
            @endforeach
         </a>
      </div>
   </aside>
</aside>