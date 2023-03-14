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
               <a href="{{route('home')}}" title="Trang chủ">
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
                  @if(isset($cate_img))
                  <div class="swiper-slide text-center effect-ming">
                     <a href="javascrip:;" class="rounded modal-open position-relative w-100 m-0 ratio1by6 d-block aspect sitdown" title="Điện thoại">
                     <img src="{{$cate_img}}" alt="Điện thoại" class="d-block img img-cover position-absolute" />
                     </a>
                  </div>
                  @endif
               </div>
               <div class="swiper-button-prev mbc_prev d-none d-md-flex"></div>
               <div class="swiper-button-next mbc_next d-none d-md-flex"></div>
            </div>
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
                  <div class="collection" id="form-ketqua">
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
                        <ul class="pagination d-flex justify-content-center clearfix mt-4 mb-4">
                           <li class="page-item mr-1 ml-1 disabled"><a class="page-link rounded text-center" href="#" title="Trang trước">&#xab;</a></li>
                           <li class="active page-item disabled mr-1 ml-1"><a class="page-link rounded text-center" href="javascript:;" title="Trang 1">1</a></li>
                           <li class="page-item mr-1 ml-1"><a class="page-link rounded text-center" onclick="doSearch(2)" href="javascript:;" title="Trang 2">2</a></li>
                           <li class="page-item mr-1 ml-1"><a class="page-link rounded text-center" onclick="doSearch(2)" href="javascript:;" title="Trang sau">&#xbb;</a></li>
                        </ul>
                     </div>
                  </div>
                 
               </div>
               <div class="col-12 col-lg-3 order-lg-1">
                  <div class="sidebar sidebar_mobi m-0 p-2 p-lg-0 mt-lg-1 d-flex flex-column">
                     <script src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/search_filter.js?1676652384879" type="text/javascript"></script>
                     <div class="aside-filter mb-3 modal-open w-100 pr-0 pr-md-2 order-lg-3 clearfix">
                        <div class="filter-container row">
                           <aside class="aside-item filter-price mb-3 col-12 col-sm-12 col-lg-12">
                              <div class="aside-content filter-group mb-1">
                                 <div class="row">
                                 </div>
                              </div>
                             
                           </aside>
                           <aside class="aside-item filter-type mb-3 col-12 col-sm-4 col-lg-12">
                              <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Loại</div>
                              <div class="aside-content filter-group">
                                 <ul class="filter-type d-flex flex-wrap gap_8 list-unstyled m-0">
                                    @if (isset($cate_id))
                                    <input type="text" name="cateno" data-id="{{$cate_id}}" class="cate-id" hidden>
                                    @elseif(isset($type_id))
                                    <input type="text" name="cateno" data-id="{{$type_id}}" class="type-id" hidden>
                                    @endif
                                    @foreach ($categoryhome as $cate)
                           <li >
                              <a  title="{{languageName($cate->name)}}"  href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                           </li>   
                        @endforeach
                                 </ul>
                              </div>
                           </aside>
                           <aside class="aside-item filter-tag-style-1 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                              <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Khoảng giá</div>
                              <div class="aside-content filter-group">
                                 <form>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value="<1trieu" onchange="toggleCheckboxes(this)"> Nhỏ hơn 1 triệu<br>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value="1-2trieu" onchange="toggleCheckboxes(this)"> Từ 1tr -2tr<br>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value="2-3trieu" onchange="toggleCheckboxes(this)"> Từ 2tr -3tr<br>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value="3-5trieu" onchange="toggleCheckboxes(this)"> Từ 3tr -5tr<br>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value="5-8trieu" onchange="toggleCheckboxes(this)"> Từ 5tr -8tr<br>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value="8-10trieu" onchange="toggleCheckboxes(this)"> Từ 8tr -10tr<br>
                                    <input data-url="{{route('filterProduct')}}" type="checkbox" name="price" value=">10trieu" onchange="toggleCheckboxes(this)"> Trên 10tr<br>
                                 </form>
                                 <script>
                                    function toggleCheckboxes(checkbox) {
                                    event.preventDefault(); // Prevent default form behavior
                                    var url = $('input[name="price"]').data('url');
                                    var cate = $('.cate-id').data('id');
                                    console.log(cate);
                                    var checkboxes = document.getElementsByName('price');
                                    for (var i = 0; i < checkboxes.length; i++) {
                                    if (checkboxes[i] != checkbox) {
                                    checkboxes[i].checked = false;
                                    }
                                    }
                                    // Send AJAX request to server
                                    $.ajax({
                                    type: 'POST',
                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                    url: url,
                                    data: { 
                                       price: checkbox.value ,
                                       cate :cate,
                                    },
                                    success: function (data) {
                                    $('#form-ketqua').html(data.html7);
                                    console.log('thành công');
                                    },
                                    error: function (data) {
                                    // Handle error response from server
                                    console.log('sai');
                                    }
                                    });
                                    }
                                    
                                 </script>
                              </div>
                           </aside>
                           {{-- <aside class="aside-item filter-tag-style-2 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
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
                           </aside> --}}
                           {{-- 
                           <aside class="aside-item filter-tag-style-3 tag-filtster mb-3 col-12 col-sm-4 col-lg-12">
                              <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">Tính năng </div>
                              <div class="aside-content filter-group">
                                 <ul class="d-flex flex-wrap gap_8 list-unstyled m-0">
                                    <li class="filter-item filter-item--check-box">
                                       <label class="d-flex align-items-baseline m-0" for="filter-chup-xoa-phong">
                                       <input type="checkbox" id="filter-chup-xoa-phong" class="d-none" onchange="toggleFilter(this)" data-group="tag3" data-field="tags"  value="(Chụp xóa phông)" data-operator="OR">
                                       <span class="fa2 px-2 py-1 rounded border">Tính Năng 1</span>
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
                           --}}
                        </div>
                     </div>
                     <div class="filter-container__selected-filter position-relative d-none order-lg-2 rounded-10 p-2 mb-3">
                        <div class="filter-container__selected-filter-header d-flex clearfix pt-1 pb-1">
                           <b class="filter-container__selected-filter-header-title text-white position-relative">Lọc theo:</b>
                        </div>
                        <ul class="filter-container__selected-filter-list pl-0 m-0 list-unstyled d-block w-100 position-relative clearfix"></ul>
                     </div>
                     {{-- 
                     <div class="aside-item mb-2 pt-2 order-3 d-none d-lg-block ">
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
                     </div>
                     --}}
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