@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
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
            <li><strong ><span >Giới thiệu</span></strong></li>
         </ul>
      </div>
   </div>
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <div class="breadcrumb-container">
               <div class="title-page ">
                  Giới thiệu
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="page">
   <div class="container content-page">
      <div class=" space-30">
         {!!$pageContent->content!!}
      </div>
      <div class="title-page text-center space-30">
         <h3>TẠI SAO LỰA CHỌN LUẬT TOÀN PHÚC?</h3>
         <p>Với lịch sử hoạt động nhiều năm trong ngành cùng đội ngũ Luật sư, chuyên viên pháp lý có kinh nghiệm và kỹ năng tốt, CÔNG TY LUẬT TNHH LUẬT TOÀN PHÚC đã và đang ngày càng khẳng định vị thế mình với các tổ chức, đối tác và khách hàng về năng lực, sự phát triển bền vững mạnh mẽ của mình, xứng đáng với sự tin cậy và tôn vinh của xã hội.  Chúng tôi luôn nỗ lực và cam kết mang đến cho khách hàng dịch vụ pháp lý chất lượng, hiệu quả cùng phong cách làm việc chuyên nghiệp nhất và tận tâm nhất.</p>
      </div>
      <div class="row flex-row space-30">
         <div class="col-md-4 col-sm-6 col-xs-12 flex-column">
            <div class="box-about text-justify" style="background-color: #009ab1">
               <h3>TẦM NHÌN</h3>
               <p>- Xây dựng Công ty luật TNHH LUẬT TOÀN PHÚC trở thành công ty luật hàng đầu Việt Nam, có uy tín trong cả khu vực và ngoài thế giới. </p>
               <p>- Góp sức trong quá trình thúc đẩy sự phát triển, hoàn thiện của hoạt động pháp lý, góp phần xây dựng xã hội công bằng, dân chủ, văn minh. </p>
               <p>- Chú trọng đến sự phát triển của từng cá nhân để xây dựng tinh thần đoàn kết vững chắc trong môi trường LUẬT TOÀN PHÚC, là nền tảng để mỗi cá nhân phát triển toàn diện về kỹ năng và cuộc sống tại Công ty.</p>
            </div>
         </div>
         <div class="col-md-8 col-sm-6 col-xs-12 flex-column">
            <div class="box-about text-justify" style="background-color: #004fb6">
               <h3>SỨ MỆNH LUẬT TOÀN PHÚC</h3>
               <p>- Bảo vệ quyền và lợi ích hợp pháp cho khách hàng, cung cấp giải pháp pháp lý hiệu quả cho cá nhân, doanh nghiệp, tổ chức, góp phần đảm bảo tiếng nói của “công lý” trong xã hội.</p>
               <p>- Xây dựng Công ty luật có môi trường chuyên nghiệp, hỗ trợ cho sinh viên luật, người tập sự hành nghề luật sư cũng như các luật sư trẻ có cơ hội học tập, rèn luyện và phát triển.</p>
               <p>- Phát huy trí tuệ và năng lực của luật sư Việt Nam trong quá trình hội nhập quốc tế, quảng bá hình ảnh, môi trường đầu tư Việt Nam tốt đẹp tới bạn bè quốc tế.</p>
            </div>
         </div>
      </div>
      <div class="row flex-row">
         <div class="col-md-4 col-sm-6 col-xs-12 flex-column">
            <div class="box-about text-justify" style="background-color: #87378e">
               <h3>LUẬT TOÀN PHÚC HƯỚNG ĐẾN VIỆC TẠO RA SỰ KHÁC BIỆT VÀ NỖ LỰC KHÔNG NGỪNG.</h3>
               <p>Việt Nam đang trong quá trình hội nhập với nền kinh tế thế giới trong thời kỳ toàn cầu hoá và cuộc cách mạng 4.0. Quá trình này đã đã thúc đẩy sự phát triển của đất nước trên toàn bộ lĩnh vực của đời sống kinh tế - chính trị - xã hội. Để có thể cùng đất nước đi lên cũng như hỗ trợ khách hàng tốt nhất trong mọi hoàn cảnh và điều kiện, chúng tôi đã phát triển đẩy mạnh các các dịch vụ trên nền tảng công nghệ kỹ thuật số để hỗ trợ khách hàng. Với tiên chỉ lấy khách hàng làm trọng tâm, chúng tôi luôn không ngừng hoàn thiện bản thân và tạo ra các giá trị khác biệt đến với khách hàng.</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 flex-column">
            <div class="box-about text-justify" style="background-color: #59b337">
               <h3>GIÁ TRỊ CỐT LÕI LUẬT TOÀN PHÚC</h3>
               <p>Với phương châm mang đến cho khách hàng “Hạnh phúc – Thành công – Cường thịnh”, LUẬT TOÀN PHÚC hướng đến xây dựng và phát triển những giá trị cốt lõi:</p>
               <p>- Thượng tôn pháp luật.</p>
               <p>- Hợp tác và chia sẻ.</p>
               <p>- Kỷ luật và trách nhiệm.</p>
               <p>- Chuyên nghiệp và tận tâm.</p>
               <p>- Minh bạch và hiệu quả.</p>
               <p>- Huấn luyện và đào tạo.</p>
               <p>- Sáng tạo và đổi mới.</p>
               <p>- Cống hiến và thụ hưởng.</p>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 col-xs-12 flex-column">
            <div class="box-about text-justify" style="background-color: #106cb1">
               <h3>TUYỂN DỤNG</h3>
               <p>Với tinh thần khởi nghiệp nhằm tạo ra một môi trường thoải mái, năng động và giàu sáng tạo, tại LUẬT TOÀN PHÚC luôn mở ra những cơ hội mới để chào đón các ứng viên tiềm năng, sinh viên luật, người tập sự gia nhập đại gia đình LUẬT TOÀN PHÚC .</p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection