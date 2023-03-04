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
<link rel="stylesheet" href="{{asset('frontend/css/collection_style.scss.css')}}">
@endsection
@section('content')
<div class="col-right position-relative">
   <div class="contentWarp ">
      <div class="opacity_filter"></div>
      <div class="breadcrumbs bg-white">
         <div class="container position-relative">
            <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 small pt-2 pb-2">
               <li class="home">
                  <a href="/" title="Trang chủ">
                     <svg width="12" height="10.633">
                        <use href="#svg-home" />
                     </svg>
                     Trang chủ
                  </a>
                  <span class="slash-divider ml-2 mr-2">/</span>
               </li>
               <li > {{$title}}</li>
            </ul>
         </div>
      </div>
      <section class="collection-layout mt-3 mb-3">
         <div class="container">
            <div class="rounded p-2 p-md-3 bg-white">
               <div class="banner_collection mb-3 swiper-container position-relative">
                  <div class="swiper-wrapper">
                     
                     <div class="swiper-slide text-center effect-ming">
                        <a href="javascrip:;" class="rounded modal-open position-relative w-100 m-0 ratio1by6 d-block aspect sitdown" title="Điện thoại">
                        <img src="{{$cate_img}}" alt="Điện thoại" class="d-block img img-cover position-absolute" />
                        </a>
                     </div>
                   
                  </div>
                  <div class="swiper-button-prev mbc_prev d-none d-md-flex"></div>
                  <div class="swiper-button-next mbc_next d-none d-md-flex"></div>
               </div>
               {{-- <div class="aside-content d-none d-lg-block bg-main rounded-10 mb-3">
                  <ul class="nav navbar-pills p-2">
                     @foreach ($cateno->TypeCate as $item)
                        <li class="nav-item position-relative ">
                           <a title="Android" class="nav-link font-weight-bold text-white" href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20product_type:(Android)&page=1&view=grid">{{languageName($item->name)}}</a>
                        </li>
                     @endforeach
                  </ul>
               </div> --}}
               <h1 class="collection-name font-weight-bold mb-lg-3 text-uppercase pb-2 pt-2 mb-2 d-none">
                  Điện thoại
               </h1>
               <div class="row">
                  <div class="col-12 col-lg-9 order-lg-2 pt-3 pt-lg-0">
                     <div class="sortPagiBar pb-2 border-bottom">
                        <ul class="aside-content filter-vendor list-unstyled mb-0 d-flex align-items-baseline gap-10">
                           <li>
                              <span class="h6 title-head m-0 pt-2 pb-2 font-weight-bold">Sắp xếp theo: </span>
                           </li>
                           <li class="filter-item filter-item--check-box">
                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                              <input type="radio" class="d-none sortby-default" name="sortBy" onclick="sortby('default')">
                              <span class="fa2 px-2 py-1 rounded border">Mặc định</span> 
                              </label>
                           </li>
                           <li class="filter-item filter-item--check-box">
                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                              <input type="radio" class="d-none sortby-price-asc" name="sortBy" onclick="sortby('price-asc')">
                              <span class="fa2 px-2 py-1 rounded border">Giá tăng dần</span> 
                              </label>
                           </li>
                           <li class="filter-item filter-item--check-box">
                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                              <input type="radio" class="d-none sortby-price-desc" name="sortBy" onclick="sortby('price-desc')">
                              <span class="fa2 px-2 py-1 rounded border">Giá giảm dần</span> 
                              </label>
                           </li>
                           <li class="filter-item filter-item--check-box">
                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                              <input type="radio" class="d-none sortby-created-asc" name="sortBy" onclick="sortby('created-asc')">
                              <span class="fa2 px-2 py-1 rounded border">Mới nhất </span> 
                              </label>
                           </li>
                        </ul>
                     </div>
                     <div class="collection">
                        <div class="category-products position-relative mt-3 mb-3">
                           <div class="row slider-items">
                              @foreach ($list as $pro)
                                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3 ">
                                   @include('layouts.product.item',['product'=>$pro])
                                 </div>
                              @endforeach
                              <div class="pagenav">
                                 {{$list->links()}}
                                 </div>
                                 
                               
                       
                           </div>
                           {{-- <ul class="pagination d-flex justify-content-center clearfix mt-4 mb-4">
                              <li class="page-item mr-1 ml-1 disabled"><a class="page-link rounded text-center" href="#" title="Trang trước">&#xab;</a></li>
                              <li class="active page-item disabled mr-1 ml-1"><a class="page-link rounded text-center" href="javascript:;" title="Trang 1">1</a></li>
                              <li class="page-item mr-1 ml-1"><a class="page-link rounded text-center" onclick="doSearch(2)" href="javascript:;" title="Trang 2">2</a></li>
                              <li class="page-item mr-1 ml-1"><a class="page-link rounded text-center" onclick="doSearch(2)" href="javascript:;" title="Trang sau">&#xbb;</a></li>
                           </ul> --}}
                        </div>
                     </div>
                     {{-- <div class="category-gallery pb-3 pt-3">
                        <div class="content_coll position-relative rte">
                           <h2>Điện thoại di động – Vật “bất li thân” ở thời đại công nghệ</h2>
                           <p>Khi khoa học kỹ thuật liên tục được cải tiến và công nghệ phát triển không ngừng thì đó cũng là lúc chiếc điện thoại di động trở nên quan trọng hơn bao giờ hết. Thật vậy, chúng ta có thể làm được rất nhiều việc: gọi điện, nhắn tin, gửi mail, soạn tài liệu (Word, Excel), chụp ảnh – quay video, xem phim hay chơi game với thiết bị có kích thước chỉ bằng một bàn tay.</p>
                           <p>Chính vì vậy, thị trường di động&nbsp;luôn chứng kiến sự cạnh tranh vô cùng khốc liệt giữa các nhà sản xuất. Họ sẵn sàng đầu tư nghiên cứu để liên tục cho ra đời những chiếc&nbsp;điện thoại mới nhất&nbsp;chất lượng, từ giá rẻ, tầm trung, cận cao cấp cho đến cao cấp để đáp ứng tối đa nhu cầu của mọi đối tượng người dùng.</p>
                           <table align="center" border="0">
                              <tbody>
                                 <tr>
                                    <td>
                                       <p><strong>RAM</strong></p>
                                    </td>
                                    <td>
                                       <p>2GB - 12GB</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Bộ nhớ trong</strong></p>
                                    </td>
                                    <td>
                                       <p>32GB - 1TB</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Kích thước màn hình</strong></p>
                                    </td>
                                    <td>
                                       <p>4.7 inch - 7.6 inch</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Tần số quét</strong></p>
                                    </td>
                                    <td>
                                       <p>60Hz - 144Hz</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Camera sau</strong></p>
                                    </td>
                                    <td>
                                       <p>1 camera - 4 camera</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Pin</strong></p>
                                    </td>
                                    <td>
                                       <p>2.406mAh - 6.000mAh</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Hệ điều hành</strong></p>
                                    </td>
                                    <td>
                                       <p>iOS, Android</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <p><strong>Giá bán</strong></p>
                                    </td>
                                    <td>
                                       <p>2.000.000đ - Trên 20.000.000đ</p>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <h2><strong>Có mấy loại điện thoại di động?</strong></h2>
                           <p>Xét về mục đích sử dụng, và thiết kế thì điện thoại di động sẽ được chia làm 4 loại chính:</p>
                           <h3><strong>Điện thoại thông minh</strong></h3>
                           <p>Điện thoại thông minh hay là smartphone, những mẫu điện thoại này được trang bị nhiều tính năng tân tiến về các điện toán và khả năng kết nối. Ngoài tính năng nghe – gọi cơ bản thì loại điện thoại này còn nhiều tính năng hiện đại khác như đọc báo, chơi game, lướt web và lên mạng xã hội.</p>
                           <p>Những điện thoại thuộc phân khúc này thường sở hữu màn hình lớn, camera độ phân giải cao và trang bị nhiều tính năng sinh trắc học như mở khóa gương mặt, vân tay,..</p>
                           <h3><strong>Điện thoại phổ thông</strong></h3>
                           <p>Điện thoại phổ thông là những mẫu điện thoại tập trung vào các chức năng nghe – gọi là chính. Do đó mẫu điện thoại này sở hữu thiết kế vô cùng nhỏ gọn với hệ thống phím bấm lớn và viên pin sử dụng lâu ngày. Một số hiện thoại phổ thông ngày nay cũng được trang bị khả năng kết nối mạng, lên mạng xã hội.</p>
                           <h3><strong>Điện thoại chơi game</strong></h3>
                           <p>Điện thoại chơi game là một điện thoại thông minh nhưng được thiết kế tối ưu hơn cho việc chơi game như tần số quét màn hình lớn, cấu hình máy khủng cùng hệ thống tản nhiệt được nâng cấp. Ngoài ra, điện thoại chơi game thường được hãng trang bị thêm các phụ kiện hỗ trợ quá trình chơi game hiệu quả hơn như tản nhiệt, tay cầm chơi game.</p>
                           <h3><strong>Điện thoại chụp ảnh</strong></h3>
                           <p>Tương tự điện thoại chơi game, điện thoại chụp ảnh là một điện thoại thông minh với phần camera được tối ưu. Hầu hết các điện thoại thông minh ngày nay đều được trang bị hệ thống camera chất lượng với khả năng chụp góc rộng, lấy nét quang học, chụp thiếu sáng,.. và chúng đều có thể là một chiếc điện thoại chụp ảnh chất lượng.</p>
                           <h2>Tại sao nên mua điện thoại thông minh?</h2>
                           <p>-&nbsp; &nbsp;Được trang bị nhiều công nghệ hiện đại.</p>
                           <p>-&nbsp; &nbsp;Hỗ trợ tốt cho việc liên lạc, làm việc lẫn giải trí.</p>
                           <p>-&nbsp; &nbsp;Không chỉ là thiết bị di động mà còn có thể đóng vai trò như một món đồ trang sức.</p>
                           <p>-&nbsp; &nbsp;Dễ dàng kết nối với cộng đồng và thế giới.</p>
                           <p>-&nbsp; &nbsp;Khả năng lưu giữ những khoảnh khắc đáng nhớ trong cuộc sống theo nhiều hình thức.</p>
                           <h2><strong>Phân loại điện thoại smartphone theo tầm giá</strong></h2>
                           <p>Dựa vào giá bán, ta có thể chia điện thoại thông minh làm 4 loại chính như sau:</p>
                           <h3><strong>Điện thoại giá rẻ</strong></h3>
                           <p><em>-&nbsp; Thông tin chung</em>: Là những thiết bị được bán với mức giá bình dân, phù hợp với đối tượng người dùng có điều kiện tài chính hạn chế.</p>
                           <p><em>-&nbsp; Đặc điểm</em>: Cấu hình tuy không mạnh mẽ nhưng vẫn đáp ứng tốt những nhu cầu hàng ngày (RAM 2 – 3 GB, chip Qualcomm 4xx hoặc Mediatek 6xxx), có thể được phát hành với nhiều phiên bản màu sắc thời trang, kích thước nhỏ gọn mang lại trải nghiệm cầm nắm dễ chịu…</p>
                           <p><em>-&nbsp; Thương hiệu tiêu biểu</em>: Xiaomi Redmi Note 10 Pro hay&nbsp;điện thoại Realme 8&nbsp;vừa ra mắt.</p>
                           <h3><strong>Điện thoại tầm trung</strong></h3>
                           <p><em>-&nbsp; Thông tin chung</em>: Bước nâng cấp so với dòng smartphone giá rẻ, có ngoại hình bắt mắt hơn và được nâng cấp về một số yếu tố.</p>
                           <p><em>-&nbsp; Đặc điểm</em>: Thiết kế kim loại sang trọng, màn hình lớn, viền mỏng có độ phân giải Full HD, tích hợp chip Snapdragon đời 6xx hoặc Helio P, RAM 3 – 4 GB cho hiệu suất giải trí tốt hơn. Ngoài ra, chúng còn sở hữu camera kép có khả năng chụp ảnh xóa phông, cảm biến vân tay, công nghệ mở khóa bằng gương mặt hay hỗ trợ cả AI (trí tuệ nhân tạo)...</p>
                           <h3><strong>Điện thoại cận cao cấp</strong></h3>
                           <p><em>-&nbsp; Thông tin chung</em>: Những sản phẩm nằm ở trên phân khúc tầm trung, được trang bị những thông số và công nghệ rất gần với nhóm cao cấp.</p>
                           <p><em>-&nbsp; Đặc điểm</em>: Thiết kế quyến rũ với kim loại + kính, sử dụng chip Snapdragon 6xx tiên tiến hơn dòng smartphone tầm trung, RAM từ 4 – 6 GB, màn hình Full HD tràn viền kích thước lớn, tích hợp tiêu chuẩn chống nước, được trang bị viên pin dung lượng lớn cùng công nghệ sạc nhanh, camera kép độ phân giải cao đi kèm nhiều tính năng hữu ích…</p>
                           <p><em>-&nbsp; Thương hiệu tiêu biểu</em>: Samsung Galaxy A…</p>
                           <h3><strong>Điện thoại cao cấp</strong></h3>
                           <p><em>-&nbsp; Thông tin chung</em>: Những smartphone thuộc nhóm này đều có vẻ ngoài tuyệt đẹp, được trang bị phần cứng cực mạnh, phiên bản phần mềm mới nhất và nhiều công nghệ, tính năng hiện đại.</p>
                           <p><em>-&nbsp; Đặc điểm</em>: Hoàn thiện tinh xảo từ chất liệu kim loại, kính và có thể là cả gốm, màn hình tràn cạnh độ phân giải 2K, màn hình cong về 2 cạnh bên, tích hợp chip Snapdragon đời mới nhất (8xx) hay Apple A-series, có khả năng chống nước, cảm biến nhận diện gương mặt 3D, camera kép hỗ trợ zoom quang học, tạo biểu tượng cảm xúc bằng chính gương mặt người dùng…</p>
                           <p><em>-&nbsp; Sản phẩm tiêu biểu:&nbsp;</em>Xiaomi Mi 11 5G, Samsung Galaxy S21 Ultra 5G,&nbsp;iPhone 12...</p>
                           <h2><strong>Các tiêu chí để lựa chọn điện thoại giá rẻ chất lượng</strong></h2>
                           <p>Có rất nhiều yếu tố khác nhau để quyết định một mẫu smartphone có phải tốt nhất hay không. Hãy cùng điểm nhanh qua một số tiêu chí sau đây:</p>
                           <h3><strong>Thiết kế</strong></h3>
                           <p>Thiết kế bên ngoài ảnh hưởng rất lớn đến quyết định chọn mua của người dùng. Vì ngày nay, các sản phẩm điện thoại không chỉ đơn thuần là một thiết bị liên lạc, giải trí mà nó còn đóng vai trò là một phụ kiện trang trí, thể hiện phần nào tính cách của người dùng. Đây cũng là một lý do khiến các mẫu smartphone ngày càng trở nên mỏng hơn, nhiều màu sắc hơn. Hay thiết kế pin rời kém sang đã biến mất, thay vào đó là pin liền nguyên khối sang trọng.</p>
                           <h3><strong>Màn hình</strong></h3>
                           <p>Kích thước màn hình cũng sẽ ảnh hưởng đến tiêu chí chọn mua của người tiêu dùng. Bởi một số người dùng thiết thích bị nhỏ gọn nhưng số khác lại yêu thích các thiết bị màn hình lớn. Ngày nay các mẫu điện thoại mới ra mắt đang sở hữu kích thước màn hình ngày càng lớn do đa phần người dùng thích những chiếc điện thoại có màn hình càng lớn càng tốt.</p>
                           <h3><strong>Hệ điều hành</strong></h3>
                           <p>Sẽ có nhiều người dùng lựa chọn hệ điều hành đầu tiên trước khi chọn mua mẫu điện thoại nào đó. Hiện nay một số hệ điều hành có trên điện thoại di động phải kể đến như iOS, Android, BlackBerry OS hay Windows Phone. Mỗi hệ điều hành sẽ được xây dựng và phát triển trên các nền tảng khác nhau nên sẽ có những ưu và nhược điểm khác nhau.</p>
                           <p>-&nbsp;<strong>Hệ điều hành Android:</strong></p>
                           <p>Đây là hệ điều hành mở được Google phát triển trên nền tảng Linux và là hệ điều hành được sử dụng phổ biến nhất. Do được sử dụng phổ biến bởi nhiều thương hiệu nên các thiết bị chạy hệ điều hành Android cũng sở hữu mức giá khá đa dạng, từ điện thoại giá rẻ, tầm trung, cận cao cấp đến cao cấp bạn đều có thể tìm được sản phẩm chạy trên hệ điều hành này.</p>
                           <p>Ngoài ra, do là hệ điều hành mở nên người dùng có thể tùy biến giao diện một cách dễ dàng theo sở thích cá nhân. Nhưng đây cũng là một điểm yếu của hệ điều hành Android này khi độ an toàn, tính bảo mật chưa cao.</p>
                           <p>-&nbsp;<strong>Hệ điều hành iOS:</strong></p>
                           <p>iOS là hệ điều hành với tính bảo mật cao do được phát triển trên một nền tảng đóng. Mỗi một phiên bản iOS đều được kiểm thử rất kỹ càng trước khi đưa ra thị trường. Nếu phát hiện lỗ hổng mới sẽ được update nhanh chóng.</p>
                           <p>Nhược điểm của hệ điều hành là người dùng sẽ không được tùy biến giao diện, bàn phím theo phong cách của bản thân.</p>
                           <p>-&nbsp;<strong>Hệ điều hành BlackBerry OS</strong></p>
                           <p>Hệ điều hành BlackBerry OS có tính bảo mật cao dùng giao diện sử dụng bắt mắt. Tuy nhiên kho ứng dụng trên hệ điều hành này chưa thực sự phong phú.</p>
                           <h3><strong>Cấu hình</strong></h3>
                           <p>Con chip CPU + GPU sẽ quyết định đến tốc độ đa nhiệm và hoạt động của máy. Dung lượng RAM càng lớn, khả năng đa nhiệm của máy càng mượt. Và hầu hết các sản phẩm điện thoại hiện nay đều được trang bị dung lượng ram từ 3GB trở nên. Với các dòng sản phẩm cao cấp, có thể lên đến 6-8GB RAM.</p>
                           <h3><strong>Bộ nhớ trong</strong></h3>
                           <p>Bộ nhớ là không gian lưu trữ hình ảnh, ứng dụng. Do đó người dùng sẽ ưu tiên một thiết bị sở hữu dung lượng bộ nhớ lớn hoặc có hỗ trợ thẻ nhớ mở rộng. Ngày nay, hầu hết các thiết bị smartphone đều sở hữu dung lượng bộ nhớ trong lớn tủ 64GB.</p>
                           <h3><strong>Camera</strong></h3>
                           <p>Nếu người dùng yêu thích quay phim, chụp ảnh hoặc sử dụng điện thoại phục vụ công việc tương tự thì camera là nhân tố rất quan trọng. Lúc này, ngoài thông số camera thì còn sẽ quan tâm nhiều tính năng khác như hỗ trợ chụp ảnh góc rộng, khả năng lấy nét,...</p>
                           <h3><strong>Dung lượng pin</strong></h3>
                           <p>Một điện thoại pin càng lớn, càng được người dùng yêu thích. Vì chỉ số dung lượng càng lớn (mAH) đồng nghĩa điện thoại có thể sử dụng càng lâu. Ngoài ra, người dùng sẽ còn quan tâm đến tính năng sạc nhanh của máy để lựa chọn sản phẩm khi mua.</p>
                           <h3><strong>Tính năng đặc biệt</strong></h3>
                           <p>Ngoài những thông số trên thì quyết định tiêu dùng của điện thoại còn ảnh hưởng bởi một số tính năng đặc biệt của sản phẩm. Như một số điện thoại sẽ hỗ trợ vân tay mặt lưng, như số khác sẽ trang bị vân tay trong màn hình.</p>
                           <h3><strong>Giá thành</strong></h3>
                           <p>Giá bán là một trong những yếu tố quan trọng nhất để quyết định người dùng có chọn mua một sản phẩm nào đó hay không. Với mỗi người dùng sẽ có những phân khúc lựa chọn khác nhau:</p>
                           <p>-&nbsp; Học sinh, sinh viên: Đối tượng này đặc điểm là khả năng tài chính còn phụ thuộc gia đình do đó sản phẩm hướng tới đa số là điện thoại phân khúc giá rẻ 3-4 triệu đồng.</p>
                           <p>-&nbsp; Nhân viên văn phòng, công – nhân viên chức: Đây là nhóm người dùng đã có khả năng tự chủ tài chính nên tiêu chí chọn mua smartphone cũng cao hơn như thiết kế đẹp, camera chụp tốt,... và các sản phẩm chọn mua đa số thuộc phân khúc cận cao cấp: từ 8 – 10 triệu đồng.</p>
                           <p>-&nbsp; Tín đồ công nghệ: Đây là phân khúc người yêu công nghệ, thường mong muốn sở hữu một mẫu điện thoại mạnh nhất, tốt nhất.</p>
                           <h2><strong>TOP 5 hãng điện thoại bán chạy nhất hiện nay</strong></h2>
                           <p>Thị trường smartphone khá nhộn nhịp với nhiều sản phẩm đến từ nhiều thương hiệu khác nhau. Nhưng bán chạy nhất trên thị trường là 5 thương hiệu smartphone sau:</p>
                           <h3><strong>Apple</strong></h3>
                           <p>Điện thoại iPhone với hầu hết sản phẩm nằm trong phân khúc cao cấp, do đó sản phẩm điện thoại iPhone với hiệu năng mạnh. Năm 2020, Apple đứng thứ 3 thế giới (chiếm tới 14% thị phần) với hơn 36 triệu thiết bị bán ra.</p>
                           <p>Một số sản phẩm nổi bật: iPhone 11, iPhone 12, iPhone Xr,...</p>
                           <h3><strong>Samsung</strong></h3>
                           <p>Là mẫu điện thoại bán chạy thứ 2 thế giới trong năm 2020, Samsung chiếm tới 20% thị trường smartphone khi bán ra hơn 54 triệu máy. Các sản phẩm điện thoại Samsung khá đa dạng phân khúc từ flagship cao cấp (dòng Samsung S, Samsung Note), tầm trung (Samsung A) và một số sản phẩm phân khúc giá rẻ khác.</p>
                           <p>Một số sản phẩm nổi bật: Samsung Note 20, Samsung S21, Samsung A52,...</p>
                           <h3><strong>Xiaomi</strong></h3>
                           <p>Xiaomi là thương hiệu điện thoại Trung Quốc, hãng điện thoại này chiếm tới 10% thị phần điện thoại di động trên toàn thế giới với hơn 26 triệu máy bán ra trong năm 2020 và dừng chân ở vị trí thứ 4 trong 5 thương hiệu smartphone bán chạy toàn cầu.</p>
                           <p>Các sản phẩm Xiaomi nổi bật với dung lượng pin siêu cao, hiệu năng khủng. Một số sản phẩm nổi bật như: Xiaomi Mi 11 Lite 5G, Xiaomi Redmi Note 10, Xiaomi Mi 10T Pro,..</p>
                           <h3><strong>Oppo</strong></h3>
                           <p>Là thương hiệu đứng thứ 5 trong danh sách, điện thoại OPPO có doanh số bán lên đến hơn 24 triệu máy, chiếm 9% thị phần. Các sản phẩm điện thoại OPPO với thiết kế sang trọng, camera chất lượng cùng giá bán phải chăng.</p>
                           <p>Một số điện thoại OPPO nổi bật: OPPO Reno5, OPPO A93, OPPO A15,…</p>
                           <h3><strong>Realme</strong></h3>
                           <p>Điện thoại Realme đang có sự tăng trưởng vượt bậc trong những năm gần đây. Sản phẩm điện thoại Realme tập trung chủ yếu ở phân khúc giá rẻ và tầm trung.</p>
                           <p>Một số sản phẩm nổi bật: Realme 6, Realme 8 Pro, Realme C15,…</p>
                           <div class="bg_cl position-absolute w-100"></div>
                        </div>
                        <div class="view_mores text-center mb-2">
                           <a href="javascript:;" class="one pt-2 pb-2 pl-4 pr-4 modal-open position-relative btn rounded-10 box_shadow font-weight-bold" title="Xem tất cả">Xem tất cả <img class="m_more" src="//bizweb.dktcdn.net/thumb/pico/100/459/533/themes/868331/assets/sortdown.png?1676652384879" alt="Xem tất cả"></a>
                           <a href="javascript:;" class="two pt-2 pb-2 pl-4 pr-4 modal-open position-relative btn rounded-10 box_shadow font-weight-bold d-none" title="Thu gọn">Thu gọn <img class="m_less" src="//bizweb.dktcdn.net/thumb/pico/100/459/533/themes/868331/assets/sortdown.png?1676652384879" alt="Thu gọn"></a>
                        </div>
                     </div> --}}
                  </div>
                  <div class="col-12 col-lg-3 order-lg-1">
                     <div class="sidebar sidebar_mobi m-0 p-2 p-lg-0 mt-lg-1 d-flex flex-column">
                        <script src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/search_filter.js?1676652384879" type="text/javascript"></script>
                        <div class="heading d-none">
                           <div class="h2 title-head font-weight-bold big text-uppercase mt-2 mb-0">
                              Bộ lọc sản phẩm
                           </div>
                           <p class="font-italic pt-2 pb-2 mb-0">Giúp lọc nhanh sản phẩm bạn tìm kiếm</p>
                        </div>
                        <div class="aside-filter mb-3 modal-open w-100 pr-0 pr-md-2 order-lg-3 clearfix">
                           <div class="filter-container row">
                              <aside class="aside-item filter-price mb-3 col-12 col-sm-12 col-lg-12">
                                 <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Lọc giá</div>
                                 <div class="aside-content filter-group mb-1">
                                    <div class="row">
                                       <div class="col-6 col-lg-12 col-xl-6">
                                          <label class="d-flex align-items-baseline pt-1 pb-1 m-0" for="filter-khoanggia-tu">
                                          <input type="text" id="filter-khoanggia-tu" class="form-control rounded pr-0" value="" placeholder="Giá tối thiểu">
                                          </label>
                                       </div>
                                       <div class="col-6 col-lg-12 col-xl-6">
                                          <label class="d-flex align-items-baseline pt-1 pb-1 m-0" for="filter-khoanggia-den">
                                          <input type="text" id="filter-khoanggia-den" class="form-control rounded pr-0" value="" placeholder="Giá tối đa">
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <a class="btn btn-primary js-filter-pricerange font-weight-bold rounded-10" href="javascript:;" data-value="(>=0 AND <=0)">Áp dụng</a>
                              </aside>
                              <aside class="aside-item filter-vendor mb-3 col-12 col-sm-4 col-lg-12">
                                 <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Thương hiệu</div>
                                 <div class="aside-content filter-group">
                                    <ul class="filter-vendor filter-grid list-unstyled m-0">
                                       <li class="filter-item filter-item--check-box  ">
                                          <label class="d-flex align-items-baseline m-0 apple" data-filter="apple" for="filter-apple">
                                          <input type="checkbox" id="filter-apple" class="d-none" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor"  value="(Apple)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Apple</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box  ">
                                          <label class="d-flex align-items-baseline m-0 nokia" data-filter="nokia" for="filter-nokia">
                                          <input type="checkbox" id="filter-nokia" class="d-none" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor"  value="(Nokia)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Nokia</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box  ">
                                          <label class="d-flex align-items-baseline m-0 oppo" data-filter="oppo" for="filter-oppo">
                                          <input type="checkbox" id="filter-oppo" class="d-none" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor"  value="(Oppo)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Oppo</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box  ">
                                          <label class="d-flex align-items-baseline m-0 samsung" data-filter="samsung" for="filter-samsung">
                                          <input type="checkbox" id="filter-samsung" class="d-none" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor"  value="(Samsung)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Samsung</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box  ">
                                          <label class="d-flex align-items-baseline m-0 xiaomi" data-filter="xiaomi" for="filter-xiaomi">
                                          <input type="checkbox" id="filter-xiaomi" class="d-none" onchange="toggleFilter(this)" data-group="Hãng" data-field="vendor"  value="(Xiaomi)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Xiaomi</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </aside>
                              <aside class="aside-item filter-type mb-3 col-12 col-sm-4 col-lg-12">
                                 <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Loại</div>
                                 <div class="aside-content filter-group">
                                    <ul class="filter-type d-flex flex-wrap gap_8 list-unstyled m-0">
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" data-filter="android" for="filter-android">
                                          <input type="checkbox" id="filter-android" class="d-none" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type"  value="(Android)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Android</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" data-filter="điện thoại phổ thông" for="filter-dien-thoai-pho-thong">
                                          <input type="checkbox" id="filter-dien-thoai-pho-thong" class="d-none" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type"  value="(Điện thoại phổ thông)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Điện thoại phổ thông</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" data-filter="ios" for="filter-ios">
                                          <input type="checkbox" id="filter-ios" class="d-none" onchange="toggleFilter(this)"  data-group="Loại" data-field="product_type"  value="(IOS)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">IOS</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </aside>
                              <aside class="aside-item filter-tag-style-1 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                                 <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Kiểu màn hình</div>
                                 <div class="aside-content filter-group">
                                    <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-tai-tho">
                                          <input type="checkbox" id="filter-tai-tho" class="d-none" onchange="toggleFilter(this)" data-group="tag1" data-field="tags"  value="(Tai thỏ)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Tai thỏ</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-tran-vien">
                                          <input type="checkbox" id="filter-tran-vien" class="d-none" onchange="toggleFilter(this)" data-group="tag1" data-field="tags"  value="(Tràn viền)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Tràn viền</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-man-hinh-nbsp-gap">
                                          <input type="checkbox" id="filter-man-hinh-nbsp-gap" class="d-none" onchange="toggleFilter(this)" data-group="tag1" data-field="tags"  value="(Màn hình&nbsp;gập)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Màn hình&nbsp;gập</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-giot-nuoc">
                                          <input type="checkbox" id="filter-giot-nuoc" class="d-none" onchange="toggleFilter(this)" data-group="tag1" data-field="tags"  value="(Giọt nước)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Giọt nước</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-duc-lo-not-ruoi">
                                          <input type="checkbox" id="filter-duc-lo-not-ruoi" class="d-none" onchange="toggleFilter(this)" data-group="tag1" data-field="tags"  value="(Đục lỗ(Nốt ruồi))" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Đục lỗ(Nốt ruồi)</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </aside>
                              <aside class="aside-item filter-tag-style-2 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                                 <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Tính năng đặc biệt</div>
                                 <div class="aside-content filter-group">
                                    <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-sac-khong-day">
                                          <input type="checkbox" id="filter-sac-khong-day" class="d-none" onchange="toggleFilter(this)" data-group="tag2" data-field="tags"  value="(Sạc không dây)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Sạc không dây</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-bao-mat-van-tay">
                                          <input type="checkbox" id="filter-bao-mat-van-tay" class="d-none" onchange="toggleFilter(this)" data-group="tag2" data-field="tags"  value="(Bảo mật vân tay)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Bảo mật vân tay</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-nhan-dien-khuon-mat">
                                          <input type="checkbox" id="filter-nhan-dien-khuon-mat" class="d-none" onchange="toggleFilter(this)" data-group="tag2" data-field="tags"  value="(Nhận diện khuôn mặt)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Nhận diện khuôn mặt</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-khang-nuoc-khang-bui">
                                          <input type="checkbox" id="filter-khang-nuoc-khang-bui" class="d-none" onchange="toggleFilter(this)" data-group="tag2" data-field="tags"  value="(Kháng nước - kháng bụi)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Kháng nước - kháng bụi</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-ho-tro-5g">
                                          <input type="checkbox" id="filter-ho-tro-5g" class="d-none" onchange="toggleFilter(this)" data-group="tag2" data-field="tags"  value="(Hỗ trợ 5G)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Hỗ trợ 5G</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </aside>
                              <aside class="aside-item filter-tag-style-3 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                                 <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Tính năng camera</div>
                                 <div class="aside-content filter-group">
                                    <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-chup-xoa-phong">
                                          <input type="checkbox" id="filter-chup-xoa-phong" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Chụp xóa phông)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Chụp xóa phông</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-chup-goc-rong">
                                          <input type="checkbox" id="filter-chup-goc-rong" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Chụp góc rộng)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Chụp góc rộng</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-quay-video-4k">
                                          <input type="checkbox" id="filter-quay-video-4k" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Quay video 4k)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Quay video 4k</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-chup-zoom-xa">
                                          <input type="checkbox" id="filter-chup-zoom-xa" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Chụp Zoom xa)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Chụp Zoom xa</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-chup-macro">
                                          <input type="checkbox" id="filter-chup-macro" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Chụp macro)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Chụp macro</span>
                                          </label>
                                       </li>
                                       <li class="filter-item filter-item--check-box">
                                          <label class="d-flex align-items-baseline m-0" for="filter-chong-rung-nbsp">
                                          <input type="checkbox" id="filter-chong-rung-nbsp" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Chống rung
                                             &nbsp;)" data-operator="OR">
                                          <span class="fa2 px-2 py-1 rounded border">Chống rung
                                          &nbsp;</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </aside>
                           </div>
                        </div>
                        <div class="filter-container__selected-filter position-relative d-none order-lg-2 rounded-10 p-2 mb-3">
                           <div class="filter-container__selected-filter-header d-flex clearfix pt-1 pb-1">
                              <b class="filter-container__selected-filter-header-title text-white position-relative">Lọc theo:</b>
                           </div>
                           <ul class="filter-container__selected-filter-list pl-0 m-0 list-unstyled d-block w-100 position-relative clearfix"></ul>
                        </div>
                        {{-- <div class="aside-item mb-2 pt-2 order-3 d-none d-lg-block ">
                           <a class="h2 title-head font-weight-bold big text-uppercase d-inline-block mb-2 px-3 py-2 box_shadow position-relative" href="24h-cong-nghe" title="24h công nghệ">
                           24h công nghệ
                           </a>
                           <div class="list-blogs">
                              <article class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                 <div class="img_art thumb_img_blog_list">
                                    <a href="/he-lo-thong-so-ky-thuat-galaxy-buds-2-pro-rat-dang-de-cho-doi" title="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!" class="effect-ming">
                                       <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                          <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/articles/galaxy-buds-2-pro-face.jpg?v=1660017575640" class="lazy d-block img img-cover position-absolute" alt="Hé lộ thông số kỹ thuật Galaxy Buds 2 Pro, rất đáng để chờ đợi!!!">
                                       </div>
                                    </a>
                                 </div>
                                 <h3 class="blog-item-name pl-3 m-0 position-relative">
                                    <a class="line_3" href="/he-lo-thong-so-ky-thuat-galaxy-buds-2-pro-rat-dang-de-cho-doi" title="H&#233; lộ th&#244;ng số kỹ thuật Galaxy Buds 2 Pro, rất đ&#225;ng để chờ đợi!!!">H&#233; lộ th&#244;ng số kỹ thuật Galaxy Buds 2 Pro, rất đ&#225;ng để chờ đợi!!!</a>
                                 </h3>
                              </article>
                              <article class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                 <div class="img_art thumb_img_blog_list">
                                    <a href="/apple-tung-ra-ban-cap-nhat-ios-16-beta-5-danh-cho-nha-phat-trien" title="Apple tung ra bản cập nhật iOS 16 Beta 5 dành cho nhà phát triển" class="effect-ming">
                                       <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                          <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/articles/cover-20.jpg?v=1660017528540" class="lazy d-block img img-cover position-absolute" alt="Apple tung ra bản cập nhật iOS 16 Beta 5 dành cho nhà phát triển">
                                       </div>
                                    </a>
                                 </div>
                                 <h3 class="blog-item-name pl-3 m-0 position-relative">
                                    <a class="line_3" href="/apple-tung-ra-ban-cap-nhat-ios-16-beta-5-danh-cho-nha-phat-trien" title="Apple tung ra bản cập nhật iOS 16 Beta 5 d&#224;nh cho nh&#224; ph&#225;t triển">Apple tung ra bản cập nhật iOS 16 Beta 5 d&#224;nh cho nh&#224; ph&#225;t triển</a>
                                 </h3>
                              </article>
                              <article class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                 <div class="img_art thumb_img_blog_list">
                                    <a href="/realme-narzo-50i-prime-ra-mat-unisoc-t612-pin-5000mah-gia-tu-2-79-trieu-dong" title="Realme Narzo 50i Prime ra mắt: Unisoc T612, pin 5000mAh, giá từ 2.79 triệu đồng" class="effect-ming">
                                       <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                          <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/articles/realme-narzo-50i-prime-ra-mat-viet-nam-7.jpg?v=1660017343050" class="lazy d-block img img-cover position-absolute" alt="Realme Narzo 50i Prime ra mắt: Unisoc T612, pin 5000mAh, giá từ 2.79 triệu đồng">
                                       </div>
                                    </a>
                                 </div>
                                 <h3 class="blog-item-name pl-3 m-0 position-relative">
                                    <a class="line_3" href="/realme-narzo-50i-prime-ra-mat-unisoc-t612-pin-5000mah-gia-tu-2-79-trieu-dong" title="Realme Narzo 50i Prime ra mắt: Unisoc T612, pin 5000mAh, gi&#225; từ 2.79 triệu đồng">Realme Narzo 50i Prime ra mắt: Unisoc T612, pin 5000mAh, gi&#225; từ 2.79 triệu đồng</a>
                                 </h3>
                              </article>
                              <article class="d-flex blog-item blog-item-list clearfix border-bottom pt-2 pb-2">
                                 <div class="img_art thumb_img_blog_list">
                                    <a href="/xiaomi-13-series-co-the-duoc-trang-bi-pin-mot-cell-100w-chip-sac-the-he-moi" title="Xiaomi 13 series có thể được trang bị pin một cell 100W, chip sạc thế hệ mới" class="effect-ming">
                                       <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                          <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/articles/xiaomi-13-series-3-1280x720-800-resize.jpg?v=1658220122433" class="lazy d-block img img-cover position-absolute" alt="Xiaomi 13 series có thể được trang bị pin một cell 100W, chip sạc thế hệ mới">
                                       </div>
                                    </a>
                                 </div>
                                 <h3 class="blog-item-name pl-3 m-0 position-relative">
                                    <a class="line_3" href="/xiaomi-13-series-co-the-duoc-trang-bi-pin-mot-cell-100w-chip-sac-the-he-moi" title="Xiaomi 13 series c&#243; thể được trang bị pin một cell 100W, chip sạc thế hệ mới">Xiaomi 13 series c&#243; thể được trang bị pin một cell 100W, chip sạc thế hệ mới</a>
                                 </h3>
                              </article>
                              <article class="d-flex blog-item blog-item-list clearfix pt-2 pb-2">
                                 <div class="img_art thumb_img_blog_list">
                                    <a href="/ro-ri-anh-chup-phien-ban-surface-duo-tam-trung-bi-microsoft-huy-bo" title="Rò rỉ ảnh chụp phiên bản Surface Duo tầm trung bị Microsoft hủy bỏ" class="effect-ming">
                                       <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect rounded">
                                          <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/articles/h2-1280x720-800-resize.jpg?v=1658220152440" class="lazy d-block img img-cover position-absolute" alt="Rò rỉ ảnh chụp phiên bản Surface Duo tầm trung bị Microsoft hủy bỏ">
                                       </div>
                                    </a>
                                 </div>
                                 <h3 class="blog-item-name pl-3 m-0 position-relative">
                                    <a class="line_3" href="/ro-ri-anh-chup-phien-ban-surface-duo-tam-trung-bi-microsoft-huy-bo" title="R&#242; rỉ ảnh chụp phi&#234;n bản Surface Duo tầm trung bị Microsoft hủy bỏ">R&#242; rỉ ảnh chụp phi&#234;n bản Surface Duo tầm trung bị Microsoft hủy bỏ</a>
                                 </h3>
                              </article>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script>
         var colId = 2921522;
         var selectedViewData = 'data';
         var isFilterRange = true;
      </script>
   </div>
   <style>
      .pagenav{
         
         width: 100% !important;
         display: flex !important;
         justify-content: center !important;
         padding: 40px 0 !important;
      }
      .pagenav ul.pagination{
         background-color: rgb(255 255 255) !important;
         display: flex !important;
         list-style: none !important;
      }
      .pagenav ul.pagination li span{
      
         height:41px !important;
         width: 35px!important;
         display: flex;
         justify-content: center!important;
         align-items: center!important;
      }
      .pagenav .pagination a{
         height:41px!important;
         width: 35px!important;
         display: flex!important;
         justify-content: center!important;
         align-items: center!important;
      }
      .pagenav .pagination a:hover{
         background-color: #847467!important;
         color: antiquewhite!important;
      }
      .pagenav li.active{
         background-color: #847467!important;
         color: antiquewhite!important;
      }
      </style>
@endsection