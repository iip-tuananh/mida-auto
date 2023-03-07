@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="contentWarp ">
   <section class="mew_mobile_slide mb-4">
      <div class="mew_slide_main swiper-container">
         <div class="swiper-wrapper">
            @foreach ($banners as $banner)
               <div class="swiper-slide">
                  <a class="d-none d-md-block w-100 h-100" href="{{$banner->link}}" title="{{$banner->title}}">
                        <picture class="position-relative w-100 m-0 ratio1by4 d-block aspect">
                        <source media="(min-width: 1200px)" src="{{$banner->image}}">
                        <source media="(min-width: 992px)" src="{{$banner->image}}">
                        <source media="(max-width: 569px)" src="{{$banner->image}}">
                        <source media="(max-width: 480px)" src="{{$banner->image}}">
                        <img class="d-block img img-cover position-absolute" src="{{$banner->image}}" alt="{{$banner->title}}"/>
                        </picture>
                  </a>
               </div>
            @endforeach
         </div>
      </div>
      <div class="container">
            <div class="mew_slide swiper-container position-relative">
            <div class="swiper-wrapper">
               @foreach ($bannerAds as $banner)
                  <div class="swiper-slide text-center">
                     <a class="d-block w-100 h-100 rounded-10 modal-open" href="{{$banner->name}}" title="banner ads">
                           <picture class="position-relative w-100 m-0 ratio1by3 d-block aspect">
                           <source media="(min-width: 1200px)" srcset="{{$banner->image}}">
                           <source media="(min-width: 992px)" srcset="{{$banner->image}}">
                           <source media="(max-width: 569px)" srcset="{{$banner->image}}">
                           <source media="(max-width: 480px)" srcset="{{$banner->image}}">
                           <img class="d-block img img-cover position-absolute" src="{{$banner->image}}" alt="banner ads"/>
                           </picture>
                     </a>
                  </div>
               @endforeach
            </div>
            <div class="swiper-button-prev msl_prev"></div>
            <div class="swiper-button-next msl_next"></div>
            </div>
      </div>
   </section>
   <script rel="dns-prefetch">
      var swiperMainHomeSlider = new Swiper('.mew_slide_main', {
            spaceBetween: 1,
            loop: true,
            speed:1000,
            autoplay: {
               delay: 4000,
               disableOnInteraction: true,
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
               },
               576: {
                  slidesPerView: 1,
               },
               768: {
                  slidesPerView: 1
               },
               992: {
                  slidesPerView: 1
               },
               1200: {
                  slidesPerView: 1
               }
            }
      });
      var swiperHomeSlider = new Swiper('.mew_slide', {
            spaceBetween: 10,
            navigation: {
               nextEl: '.msl_next',
               prevEl: '.msl_prev',
            },
            loop: true,
            speed:1000,
            autoplay: {
               delay: 6000,
               disableOnInteraction: true,
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
                  effect: 'fade'
               },
               576: {
                  slidesPerView: 1,
                  effect: 'fade'
               },
               768: {
                  slidesPerView: 2
               },
               992: {
                  slidesPerView: 2
               },
               1200: {
                  slidesPerView: 2
               }
            }
      });
   </script>
   <section class="product_poli_wrap mt-3 mb-3">
      <div class="container">
            <div class="product_poli m-0">
            <div class="row">
               <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="item d-flex align-items-center p-2 p-xl-3 bg-white rounded-10 modal-open h-100 ">
                        <div class="mr-2 mr-sm-3">
                        <img src="{{url('frontend/images/img_poli_1.png')}}" alt="Sản phẩm an toàn" decoding="async">
                        </div>
                        <div class="media-body"> 
                        Sản phẩm an toàn
                        </div>
                  </div>
               </div>
               <div class="col-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="item d-flex align-items-center p-2 p-xl-3 bg-white rounded-10 modal-open h-100 ">
                        <div class="mr-2 mr-sm-3">
                        <img src="{{url('frontend/images/img_poli_2.png')}}" alt="Chất lượng cam kết" decoding="async">
                        </div>
                        <div class="media-body"> 
                        Chất lượng cam kết
                        </div>
                  </div>
               </div>
               <div class="col-6 col-lg-3 ">
                  <div class="item d-flex align-items-center p-2 p-xl-3 bg-white rounded-10 modal-open h-100 ">
                        <div class="mr-2 mr-sm-3">
                        <img src="{{url('frontend/images/img_poli_3.png')}}" alt="Dịch vụ vượt trội" decoding="async">
                        </div>
                        <div class="media-body"> 
                        Dịch vụ vượt trội
                        </div>
                  </div>
               </div>
               <div class="col-6 col-lg-3 ">
                  <div class="item d-flex align-items-center p-2 p-xl-3 bg-white rounded-10 modal-open h-100 ">
                        <div class="mr-2 mr-sm-3">
                        <img src="{{url('frontend/images/img_poli_4.png')}}" alt="Giao hàng nhanh chóng" decoding="async">
                        </div>
                        <div class="media-body"> 
                        Giao hàng nhanh chóng
                        </div>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
   {{-- <section id="mew_cate_1" class="mew_cate_1 mt-3 mt-lg-4 mb-3 mt-lg-4">
      <div class="container">
            <div class="b_mew_cate rounded bg-white p-2 p-xl-3">
            <h3 class="title text-uppercase font-weight-bold position-relative pb-3 m-0">
               Danh mục nổi bật
            </h3>
            <div class="d-flex b_item flex-unset flex-md-wrap mobi_cate">
               <a href="/dien-thoai" title="Điện thoại" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute " alt="Điện thoại" src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-940-svg.png?v=1657688578017" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Điện thoại</span>
               </a>
               <a href="/smartwatch" title="Smart watch" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute " alt="Smart watch" src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-451-svg.png?v=1657688588927" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Smart watch</span>
               </a>
               <a href="/laptop" title="Laptop" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute " alt="Laptop" src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-878-svg.png?v=1657688563233" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Laptop</span>
               </a>
               <a href="/may-tinh-bang" title="Máy tính bảng" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Máy tính bảng" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-941-svg.png?v=1657688547797" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Máy tính bảng</span>
               </a>
               <a href="/thiet-bi-mang" title="Thiết bị mạng" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Thiết bị mạng" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-676-svg.png?v=1657688531713" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Thiết bị mạng</span>
               </a>
               <a href="/tivi" title="Tivi" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Tivi" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/1-74-38.png?v=1657688670313" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Tivi</span>
               </a>
               <a href="/tai-nghe" title="Tai nghe" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Tai nghe" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-897-svg.png?v=1657688367593" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Tai nghe</span>
               </a>
               <a href="/op-lung-bao-da" title="Ốp lưng, bao da" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Ốp lưng, bao da" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-108-svg.png?v=1657688686797" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Ốp lưng, bao da</span>
               </a>
               <a href="/loa" title="Loa" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Loa" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/22-2-14.png?v=1657688489700" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Loa</span>
               </a>
               <a href="/pin-du-phong" title="Pin dự phòng" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Pin dự phòng" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/sacduphong-128x129.png?v=1657688356620" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Pin dự phòng</span>
               </a>
               <a href="/cap-cu-sac" title="Cáp, củ sạc" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Cáp, củ sạc" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-114-svg.png?v=1657688308413" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Cáp, củ sạc</span>
               </a>
               <a href="/man-hinh" title="Màn hình" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Màn hình" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-962-svg.png?v=1657688275223" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Màn hình</span>
               </a>
               <a href="/chuot" title="Chuột" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Chuột" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-663-svg.png?v=1657688263360" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Chuột</span>
               </a>
               <a href="/ban-phim" title="Bàn phím" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Bàn phím" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/ban-phim-128x129.png?v=1657688254860" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Bàn phím</span>
               </a>
               <a href="/phu-kien-gaming" title="Phụ kiện gaming" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Phụ kiện gaming" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-669-svg.png?v=1657688197510" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Phụ kiện gaming</span>
               </a>
               <a href="/camera-webcam" title="Camera, webcam" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Camera, webcam" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-363-svg.png?v=1657688184703" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Camera, webcam</span>
               </a>
               <a href="/may-in" title="Máy in" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Máy in" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/250-23196-may-in-canon-lbp6230dn-01.png?v=1657688284543" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Máy in</span>
               </a>
               <a href="/may-quet-ma-vach" title="Máy quét mã vạch" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Máy quét mã vạch" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/y-quet-ma-vach-khong-day-cam-tay-wni-6213bv-chinh-hang-saposhop-1.png?v=1657688294310" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Máy quét mã vạch</span>
               </a>
               <a href="/thiet-bi-nha-thong-minh" title="Thiết bị nhà thông minh" class="item_cate d-flex align-items-center flex-column position-relative pt-2 rounded-10">
                  <div class="b_img modal-open">
                        <span class="position-relative w-100 m-0 ratio1by1 has-edge aspect d-block bg_fade">
                        <img class="d-block img img-cover position-absolute lazy" alt="Thiết bị nhà thông minh" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/small/100/459/533/collections/cate-846-svg.png?v=1657688168063" decoding="async">
                        </span>
                  </div>
                  <span class="tit pl-3 pr-3 mt-2 mb-2 text-center line_1 line_2">Thiết bị nhà thông minh</span>
               </a>
            </div>
            </div>
      </div>
   </section> --}}
   <section id="flash_sale" class="m_product mt-3 mt-lg-4 mb-3 mt-lg-4" style="--cl_tit_fl: #ffd641;--bg_fl_1: #d70018;--bg_fl_2: #ff8a97;">
      <div class="container">
            <div class="rounded bg-flash modal-open p-2">
            <div class="time_box row align-items-center">
               <div class=" col-12 col-lg-9 mb-2 mb-lg-0">
                  <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                        <h2 class="title text-uppercase font-weight-bold position-relative p-2 m-0 text-center text-lg-left cl_tit_fl">
                           <a class="position-relative" href="#" title="Sản phẩm khuyến mại">
                           <img alt="Sản phẩm khuyến mại" src="{{url('frontend/images/flash.gif')}}"> 
                           Sản phẩm khuyến mại
                           </a>
                        </h2>
                        </div>
                        <div class="col-12 col-lg-8">
                        <div class="mew_text_fade swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide text-center">
                                    <a class="modal-open text-white line_1" href="#" title="Giảm ngay 120k (áp dụng cho các đơn hàng trên 500k)">
                                    Giảm ngay 120k (áp dụng cho các đơn hàng trên 500k)
                                    </a>
                              </div>
                              <div class="swiper-slide text-center">
                                    <a class="modal-open text-white line_1" href="#" title="Giảm ngay 20% tổng giá trị đơn hàng. Số lượng có hạn">
                                    Giảm ngay 20% tổng giá trị đơn hàng. Số lượng có hạn
                                    </a>
                              </div>
                           </div>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class=" col-12">
                  <div class="b_product">
                        <div class="mew_flash swiper-container p-2 position-relative">
                        <div class="swiper-wrapper">
                           @foreach ($saleHomeProduct as $product)
                              <div class="swiper-slide">
                                 @include('layouts.product.item', ['product'=>$product])
                              </div>
                           @endforeach
                        </div>
                        <div class="swiper-button-prev mf_prev"></div>
                        <div class="swiper-button-next mf_next"></div>
                        </div>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
   <script rel="dns-prefetch">
      var mew_text_fade = new Swiper('.mew_text_fade', {
            loop: true,
            speed:800,
            autoplay: {
               delay: 3000,
               disableOnInteraction: true,
            },
            slidesPerView: 1,
            effect: 'fade'
      });
      
      var swiperProductSaleSlider = new Swiper('.mew_flash', {
            spaceBetween: 18,
            loop: false,
            speed: 1000,
            autoplay: false,
            slidesPerColumnFill: 'row',
            slidesPerColumn: 2,
            navigation: {
               nextEl: '.mf_next',
               prevEl: '.mf_prev',
            },
            breakpoints: {
               320: {
                  slidesPerView: 2
               },
               768: {
                  slidesPerView: 2
               },
               992: {
                  slidesPerView: 3
               },
               1200: {
                  slidesPerView: 4
               }
            }
      });
   </script>
   {{-- <section id="product_2" class="m_product mt-3 mt-lg-4 mb-3 mt-lg-4">
      <div class="container">
            <div class="rounded bg-white p-2 js-tab-product">
            <div class="tab_link d-flex p-2 gap_8">
               <a class="border rounded-10 font-weight-bold js-tab-title active px-3 py-2 d-flex align-items-center gap_8" href="/goi-y-cho-ban" data-tab="tab-item-1" title="Gợi ý cho bạn">
               <img class="lazy" decoding="async" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879"  data-src="https://bizweb.dktcdn.net/100/459/533/collections/goiy-1.png?v=1660661337540" alt="Gợi ý cho bạn">
               Gợi ý cho bạn
               </a>
               <a class="border rounded-10 font-weight-bold js-tab-title  px-3 py-2 d-flex align-items-center gap_8" href="/xa-hang-giam-soc" data-tab="tab-item-2" title="Xả hàng giảm sốc">
               <img class="lazy" decoding="async" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879"  data-src="https://bizweb.dktcdn.net/100/459/533/collections/icon-xa-hang-50-50x50-2.png?v=1660661329113" alt="Xả hàng giảm sốc">
               Xả hàng giảm sốc
               </a>
               <a class="border rounded-10 font-weight-bold js-tab-title  px-3 py-2 d-flex align-items-center gap_8" href="/sale-cuoi-he" data-tab="tab-item-3" title="Sale cuối hè">
               <img class="lazy" decoding="async" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879"  data-src="https://bizweb.dktcdn.net/100/459/533/collections/chigiamonlinedesk-50x54-1.png?v=1660661320310" alt="Sale cuối hè">
               Sale cuối hè
               </a>
               <a class="border rounded-10 font-weight-bold js-tab-title  px-3 py-2 d-flex align-items-center gap_8" href="/deal-ngon-bo-re" data-tab="tab-item-4" title="Deal ngon bổ rẻ">
               <img class="lazy" decoding="async" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879"  data-src="https://bizweb.dktcdn.net/100/459/533/collections/icon-desk-51x50-2.png?v=1660661310503" alt="Deal ngon bổ rẻ">
               Deal ngon bổ rẻ
               </a>
            </div>
            <div class="b_product position-relative">
               <div class="js-tab-content tab-item-1 d-block loaded">
                  <div class="mew_product_2 pb-2 pl-2 pr-2 pt-0 position-relative">
                        <div class="row">
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    8% 
                              </div>
                              <a href="/apple-watch-se-44mm-gps-vien-nhom-day-cao-su" class="thumb d-block modal-open position-relative" title="Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/apple-watch-se-40mm-2-2-2316fd70-b59f-4d60-96e4-98afdc57224a.jpg?v=1660126672000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su">
                                    </div>
                                    <span class="label_tag label2 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                                    <img width="20" height="20" alt="label_con_2" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_2.png?1676652384879" class="mr-1">Giảm cực sốc
                                    </span>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/apple-watch-se-44mm-gps-vien-nhom-day-cao-su" title="Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su">
                                    Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">6.890.000₫</span>
                                    <del class="old-price"> 7.500.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/apple-watch-se-44mm-gps-vien-nhom-day-cao-su" data-type="Đồng hồ"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    9% 
                              </div>
                              <a href="/apple-watch-se-40mm-gps-vien-nhom-day-cao-su" class="thumb d-block modal-open position-relative" title="Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/apple-watch-se-40mm-gps-mkq03.jpg?v=1660124012000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su">
                                    </div>
                                    <span class="label_tag label1 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                                    <img width="20" height="20" alt="label_con_1" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_1.png?1676652384879" class="mr-1">Sale giữa tháng
                                    </span>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/apple-watch-se-40mm-gps-vien-nhom-day-cao-su" title="Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su">
                                    Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">6.790.000₫</span>
                                    <del class="old-price"> 7.500.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/apple-watch-se-40mm-gps-vien-nhom-day-cao-su" data-type="Đồng hồ"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    16% 
                              </div>
                              <a href="/dong-ho-thong-minh-huawei-watch-gt3-day-da" class="thumb d-block modal-open position-relative" title="Đồng hồ thông minh Huawei Watch GT3 dây da">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/watch-3-leather.jpg?v=1660123436000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Đồng hồ thông minh Huawei Watch GT3 dây da">
                                    </div>
                                    <span class="label_tag label4 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                                    <img width="20" height="20" alt="label_con_4" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_4.png?1676652384879" class="mr-1">Xả hàng giảm sốc
                                    </span>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/dong-ho-thong-minh-huawei-watch-gt3-day-da" title="Đồng hồ thông minh Huawei Watch GT3 dây da">
                                    Đồng hồ thông minh Huawei Watch GT3 dây da 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">5.490.000₫</span>
                                    <del class="old-price"> 6.500.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/dong-ho-thong-minh-huawei-watch-gt3-day-da" data-type="Đồng hồ"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <a href="/macbook-pro-14-inch-2021-m1-pro-10-cpu-16-gpu-32gb-1tb-sac-96w" class="thumb d-block modal-open position-relative" title="Macbook Pro 14 inch 2021 M1 Pro 10 CPU - 16 GPU 32GB 1TB sạc 96W">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/25-1-12-1a127c92-de96-41e8-820d-5d7c0c602391.jpg?v=1660138042000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Macbook Pro 14 inch 2021 M1 Pro 10 CPU - 16 GPU 32GB 1TB sạc 96W">
                                    </div>
                                    <span class="label_tag label3 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                                    <img width="20" height="20" alt="label_con_3" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_3.png?1676652384879" class="mr-1">VNPAY giảm 500K
                                    </span>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/macbook-pro-14-inch-2021-m1-pro-10-cpu-16-gpu-32gb-1tb-sac-96w" title="Macbook Pro 14 inch 2021 M1 Pro 10 CPU - 16 GPU 32GB 1TB sạc 96W">
                                    Macbook Pro 14 inch 2021 M1 Pro 10 CPU - 16 GPU 32GB 1TB sạc 96W 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="regular-price font-weight-bold">77.590.000₫</span>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/macbook-pro-14-inch-2021-m1-pro-10-cpu-16-gpu-32gb-1tb-sac-96w" data-type="Laptop"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    11% 
                              </div>
                              <a href="/macbook-pro-14-inch-2021-m1-pro-8-cpu-14-gpu-32gb-512gb-sac-96w" class="thumb d-block modal-open position-relative" title="Macbook Pro 14 inch 2021 M1 Pro 8 CPU - 14 GPU 32GB 512GB sạc 96W">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/25-1-12.jpg?v=1660125379000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Macbook Pro 14 inch 2021 M1 Pro 8 CPU - 14 GPU 32GB 512GB sạc 96W">
                                    </div>
                                    <span class="label_tag label1 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                                    <img width="20" height="20" alt="label_con_1" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_1.png?1676652384879" class="mr-1">Sale giữa tháng
                                    </span>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/macbook-pro-14-inch-2021-m1-pro-8-cpu-14-gpu-32gb-512gb-sac-96w" title="Macbook Pro 14 inch 2021 M1 Pro 8 CPU - 14 GPU 32GB 512GB sạc 96W">
                                    Macbook Pro 14 inch 2021 M1 Pro 8 CPU - 14 GPU 32GB 512GB sạc 96W 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">57.590.000₫</span>
                                    <del class="old-price"> 65.000.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/macbook-pro-14-inch-2021-m1-pro-8-cpu-14-gpu-32gb-512gb-sac-96w" data-type="Laptop"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <a href="/apple-macbook-air-m2-2022-8gb-256gb" class="thumb d-block modal-open position-relative" title="Apple Macbook Air M2 2022 8GB 256GB">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/macbook-air-m2-4-1.jpg?v=1660102914000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Apple Macbook Air M2 2022 8GB 256GB">
                                    </div>
                                    <span class="label_tag label2 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                                    <img width="20" height="20" alt="label_con_2" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_2.png?1676652384879" class="mr-1">Giảm cực sốc
                                    </span>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/apple-macbook-air-m2-2022-8gb-256gb" title="Apple Macbook Air M2 2022 8GB 256GB">
                                    Apple Macbook Air M2 2022 8GB 256GB 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="regular-price font-weight-bold">31.590.000₫</span>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/apple-macbook-air-m2-2022-8gb-256gb" data-type="Laptop"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    25% 
                              </div>
                              <a href="/iphone-13-512gb" class="thumb d-block modal-open position-relative" title="iPhone 13 512GB">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/iphone-13-01-4.jpg?v=1659712405000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="iPhone 13 512GB">
                                    </div>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/iphone-13-512gb" title="iPhone 13 512GB">
                                    iPhone 13 512GB 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">25.590.000₫</span>
                                    <del class="old-price"> 33.990.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/iphone-13-512gb" data-type="IOS"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    19% 
                              </div>
                              <a href="/iphone-13-256gb" class="thumb d-block modal-open position-relative" title="iPhone 13 256GB">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/iphone-13-03-2.jpg?v=1659712401000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="iPhone 13 256GB">
                                    </div>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/iphone-13-256gb" title="iPhone 13 256GB">
                                    iPhone 13 256GB 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">22.590.000₫</span>
                                    <del class="old-price"> 27.990.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/iphone-13-256gb" data-type="IOS"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    18% 
                              </div>
                              <a href="/iphone-13-128gb" class="thumb d-block modal-open position-relative" title="iPhone 13 128GB">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/iphone-13-02.jpg?v=1659713045000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="iPhone 13 128GB">
                                    </div>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/iphone-13-128gb" title="iPhone 13 128GB">
                                    iPhone 13 128GB 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">20.190.000₫</span>
                                    <del class="old-price"> 24.590.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/iphone-13-128gb" data-type="IOS"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    18% 
                              </div>
                              <a href="/samsung-galaxy-a73-5g-256gb" class="thumb d-block modal-open position-relative" title="Samsung Galaxy A73 (5G) 256GB">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/samsung-galaxy-a73-1-600x600.jpg?v=1657870828000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Samsung Galaxy A73 (5G) 256GB">
                                    </div>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/samsung-galaxy-a73-5g-256gb" title="Samsung Galaxy A73 (5G) 256GB">
                                    Samsung Galaxy A73 (5G) 256GB 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">10.690.000₫</span>
                                    <del class="old-price"> 12.990.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/samsung-galaxy-a73-5g-256gb" data-type="Android"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    16% 
                              </div>
                              <a href="/samsung-galaxy-a13-4g" class="thumb d-block modal-open position-relative" title="Samsung Galaxy A13 (4G)">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/galaxy-a13.jpg?v=1657870778000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Samsung Galaxy A13 (4G)">
                                    </div>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/samsung-galaxy-a13-4g" title="Samsung Galaxy A13 (4G)">
                                    Samsung Galaxy A13 (4G) 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">3.950.000₫</span>
                                    <del class="old-price"> 4.690.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/samsung-galaxy-a13-4g" data-type="Android"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-6 col-lg-3 col-xl-2 mt-3">
                           <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                              <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                                    13% 
                              </div>
                              <a href="/samsung-galaxy-a73-128gb" class="thumb d-block modal-open position-relative" title="Samsung Galaxy A73 128GB">
                                    <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                                    <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/a73-xanh-2.jpg?v=1657870476000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Samsung Galaxy A73 128GB">
                                    </div>
                              </a>
                              <div class="item-info mt-1 position-relative">
                                    <h3 class="item-title font-weight-bold">
                                    <a class="line_1" href="/samsung-galaxy-a73-128gb" title="Samsung Galaxy A73 128GB">
                                    Samsung Galaxy A73 128GB 
                                    </a>
                                    </h3>
                                    <div class="item-price">
                                    <span class="special-price font-weight-bold">10.390.000₫</span>
                                    <del class="old-price"> 11.990.000₫</del>
                                    </div>
                                    <label class="compare-label position-relative d-flex align-items-center m-0">
                                    <input type="checkbox" class="compare-checkbox d-none" value="/samsung-galaxy-a73-128gb" data-type="Android"> 
                                    <span class="compare-checkbox mr-1 rounded-circle"></span>
                                    So sánh
                                    </label>
                              </div>
                           </div>
                        </div>
                        </div>
                        <a class="view_mores box_shadow rounded-10 modal-open d-block py-2 px-3 mt-3 text-center font-weight-bold" href="goi-y-cho-ban" title="Xem tất cả">
                        Xem tất cả
                        </a>
                  </div>
               </div>
               <div class="js-tab-content tab-item-2 ">
               </div>
               <div class="js-tab-content tab-item-3 ">
               </div>
               <div class="js-tab-content tab-item-4 ">
               </div>
            </div>
            </div>
      </div>
   </section> --}}
   <section id="mew_cate_2" class="mew_cate_2 mt-3 mt-lg-4 mb-3 mb-lg-4" style="--cl_tit_trending: #333;--bg_trending_1: #ffecd2;--bg_trending_2: #fcb69f;">
      <div class="container">
            <div class="mew_bts_cate rounded pl-3 pr-3 pt-3 pb-3">
            <div class="cate-pro-home position-relative swiper-container">
               <div class="swiper-wrapper ">
                  @foreach ($cateProHome as $cate)
                     <div class=" swiper-slide ">
                           <a href="{{route('allListProCate', ['danhmuc'=>$cate->slug])}}" title="{{languageName($cate->name)}}" class="item_cate d-flex align-items-center flex-column position-relative bg-white rounded-10 p-3 h-100">
                           <div class="b_img d-flex align-items-center justify-content-space-between w-100">
                              <div class="item modal-open position-relative p-2">
                                 <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect">
                                       <img class="lazy d-block img img-cover position-absolute" alt="{{languageName($cate->name)}}" src="{{$cate->avatar}}" data-src="{{$cate->avatar}}">
                                 </div>
                              </div>
                           </div>
                           <div class="b_inf mt-2 w-100 pr-5 position-relative">
                              <p class="tit m-0 modal-open text-primary">
                                 Có {{count($cate->product)}} sản phẩm
                              </p>
                              <p class="tit m-0 font-weight-bold">
                                 {{languageName($cate->name)}}
                              </p>
                              <svg width="24" height="24" class="position-absolute rounded-circle">
                                 <use href="#svg-right" />
                              </svg>
                           </div>
                           </a>
                     </div>
                  @endforeach
               </div>
            </div>
            </div>
      </div>
      <script>
         var swiperCateHoem = new Swiper('.cate-pro-home', {
            spaceBetween: 20,
            loop: true,
            speed:1000,
            autoplay: {
               delay: 4000,
               disableOnInteraction: true,
            },
            breakpoints: {
               0: {
                  slidesPerView: 1,
               },
               576: {
                  slidesPerView: 1,
               },
               768: {
                  slidesPerView: 2
               },
               992: {
                  slidesPerView: 2
               },
               1200: {
                  slidesPerView: 3
               }
            }
         });
      </script>
   </section>
   @foreach ($categoryhome as $key=>$cate)
   @if (count($cate->product) > 0)
      @if ($key%2==0)
      <section id="product_3" class="m_product mt-3 mt-lg-4 mb-3 mt-lg-4">
         <div class="container">
               <div class="rounded bg-white p-2">
               <div class="head_box p-2 d-flex align-items-md-center justify-content-between flex-column flex-md-row">
                  <h2 class="title text-uppercase font-weight-bold position-relative m-0">
                     <a class="position-relative" href="dien-thoai" title="{{languageName($cate->name)}}">
                     {{languageName($cate->name)}}
                     </a>
                  </h2>
                  @if (count($cate->typeCate) > 0)
                  <div class="list_link_pr d-flex pt-2 pb-2">
                     @foreach ($cate->typeCate as $type)
                        <a class="border rounded-10 font-weight-bold js-tab-title" href="{{route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}">
                              <div>
                              </div>
                              {{languageName($type->name)}}
                        </a>
                     @endforeach
                  </div>
                  @endif
               </div>
               <div class="row align-items-lg-center">
                  <div class="col-xl-9 col-lg-8 col-12 pl-lg-0 order-lg-2 ">
                     <div class="mew_product_3 swiper-container p-2 position-relative">
                           <div class="swiper-wrapper">
                              @foreach ($cate->product as $product)
                                 <div class="swiper-slide">
                                    @include('layouts.product.item', ['product' => $product])
                                 </div>
                              @endforeach
                           </div>
                           <div class="swiper-button-prev mf_prev"></div>
                           <div class="swiper-button-next mf_next"></div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-12 order-lg-1">
                     <div class="b_product p-2 pr-lg-0 d-flex flex-lg-column">
                           <a href="#" title="{{languageName($cate->name)}}" class="rounded modal-open position-relative w-100 w-mb-50 ratio1by1 has-edge aspect d-block sitdown">
                           <img class="d-block img img-cover position-absolute lazy" src="{{$cate->imagehome}}" data-src="{{$cate->imagehome}}" alt="{{languageName($cate->name)}}">
                           </a>
                     </div>
                  </div>
               </div>
               </div>
         </div>
      </section>
      <script rel="dns-prefetch">
         var swiperProduct3Slider = new Swiper('.mew_product_3', {
               spaceBetween: 15,
               loop: false,
               speed: 1000,
               autoplay: false,
               navigation: {
                  nextEl: '.mf_next',
                  prevEl: '.mf_prev',
               },
               breakpoints: {
                  320: {
                     slidesPerView: 2,
                  },
                  768: {
                     slidesPerView: 2
                  },
                  992: {
                     slidesPerView: 3,
                     slidesPerColumnFill: 'row',
                     slidesPerColumn: 2
                  },
                  1200: {
                     slidesPerView: 4,
                     slidesPerColumnFill: 'row',
                     slidesPerColumn: 2
                  }
               }
         });
      </script>
      @else
      <section id="product_4" class="m_product mt-3 mt-lg-4 mb-3 mt-lg-4">
         <div class="container">
               <div class="rounded bg-white p-2">
               <div class="head_box p-2 d-flex align-items-md-center justify-content-between flex-column flex-md-row">
                  <h2 class="title text-uppercase font-weight-bold position-relative m-0">
                     <a class="position-relative" href="imac-macbook" title="{{languageName($cate->name)}}">
                     {{languageName($cate->name)}}
                     </a>
                  </h2>
                  @if (count($cate->typeCate) > 0)
                  <div class="list_link_pr d-flex pt-2 pb-2">
                     @foreach ($cate->typeCate as $type)
                        <a class="border rounded-10 font-weight-bold js-tab-title" href="{{route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}">
                              <div>
                              </div>
                              {{languageName($type->name)}}
                        </a>
                     @endforeach
                  </div>
                  @endif
               </div>
               <div class="row align-items-lg-center">
                  <div class="col-xl-9 col-lg-8 col-12 pr-lg-0">
                     <div class="mew_product_4 swiper-container p-2 position-relative">
                           <div class="swiper-wrapper">
                              @foreach ($cate->product as $product)
                                 <div class="swiper-slide">
                                    @include('layouts.product.item', ['product' => $product])
                                 </div>
                              @endforeach
                           </div>
                           <div class="swiper-button-prev mf_prev"></div>
                           <div class="swiper-button-next mf_next"></div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-12 order-lg-1">
                     <div class="b_product p-2 pr-lg-0 d-flex flex-lg-column">
                           <a href="#" title="{{languageName($cate->name)}}" class="rounded modal-open position-relative w-100 w-mb-50 ratio1by1 has-edge aspect d-block sitdown">
                           <img class="d-block img img-cover position-absolute lazy" src="{{$cate->imagehome}}" data-src="{{$cate->imagehome}}" alt="{{languageName($cate->name)}}">
                           </a>
                     </div>
                  </div>
               </div>
               </div>
         </div>
      </section>
      <script rel="dns-prefetch">
         var swiperProduct4Slider = new Swiper('.mew_product_4', {
               spaceBetween: 15,
               loop: false,
               speed: 1000,
               autoplay: false,
               navigation: {
                  nextEl: '.mf_next',
                  prevEl: '.mf_prev',
               },
               breakpoints: {
                  320: {
                     slidesPerView: 2
                  },
                  768: {
                     slidesPerView: 2
                  },
                  992: {
                     slidesPerView: 3,
                     slidesPerColumnFill: 'row',
                     slidesPerColumn: 2
                  },
                  1200: {
                     slidesPerView: 4,
                     slidesPerColumnFill: 'row',
                     slidesPerColumn: 2
                  }
               }
         });
      </script>
      @endif
   @endif
   @endforeach
   {{-- <section id="product_5" class="m_product mt-3 mt-lg-4 mb-3 mt-lg-4">
      <div class="container">
            <div class="rounded bg-white p-2">
            <div class="head_box pt-2 pl-2 pr-2 d-flex align-items-md-center justify-content-between flex-column flex-md-row">
               <h2 class="title text-uppercase font-weight-bold position-relative m-0">
                  <a class="position-relative" href="smartwatch" title="ĐỒNG HỒ THÔNG MINH">
                  ĐỒNG HỒ THÔNG MINH
                  </a>
               </h2>
               <div class="list_link_pr d-flex pt-2 pb-2">
                  <a class="border rounded-10 font-weight-bold" href="smartwatch" title="Xem tất cả">
                  Xem tất cả
                  </a>
               </div>
            </div>
            <div class="mew_product_5 pb-2 pl-2 pr-2 position-relative">
               <div class="row">
                  <div class="col-6 col-lg-4 col-xl-2 mt-3">
                        <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                        <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                           8% 
                        </div>
                        <a href="/apple-watch-se-44mm-gps-vien-nhom-day-cao-su" class="thumb d-block modal-open position-relative" title="Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su">
                           <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                              <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/apple-watch-se-40mm-2-2-2316fd70-b59f-4d60-96e4-98afdc57224a.jpg?v=1660126672000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su">
                           </div>
                           <span class="label_tag label2 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                           <img width="20" height="20" alt="label_con_2" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_2.png?1676652384879" class="mr-1">Giảm cực sốc
                           </span>
                        </a>
                        <div class="item-info mt-1 position-relative">
                           <h3 class="item-title font-weight-bold">
                              <a class="line_1" href="/apple-watch-se-44mm-gps-vien-nhom-day-cao-su" title="Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su">
                              Apple Watch SE 44mm (GPS) Viền Nhôm - Dây Cao Su 
                              </a>
                           </h3>
                           <div class="item-price">
                              <span class="special-price font-weight-bold">6.890.000₫</span>
                              <del class="old-price"> 7.500.000₫</del>
                           </div>
                           <label class="compare-label position-relative d-flex align-items-center m-0">
                           <input type="checkbox" class="compare-checkbox d-none" value="/apple-watch-se-44mm-gps-vien-nhom-day-cao-su" data-type="Đồng hồ"> 
                           <span class="compare-checkbox mr-1 rounded-circle"></span>
                           So sánh
                           </label>
                        </div>
                        </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xl-2 mt-3">
                        <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                        <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                           9% 
                        </div>
                        <a href="/apple-watch-se-40mm-gps-vien-nhom-day-cao-su" class="thumb d-block modal-open position-relative" title="Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su">
                           <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                              <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/apple-watch-se-40mm-gps-mkq03.jpg?v=1660124012000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su">
                           </div>
                           <span class="label_tag label1 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                           <img width="20" height="20" alt="label_con_1" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_1.png?1676652384879" class="mr-1">Sale giữa tháng
                           </span>
                        </a>
                        <div class="item-info mt-1 position-relative">
                           <h3 class="item-title font-weight-bold">
                              <a class="line_1" href="/apple-watch-se-40mm-gps-vien-nhom-day-cao-su" title="Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su">
                              Apple Watch SE 40mm (GPS) Viền Nhôm - Dây Cao Su 
                              </a>
                           </h3>
                           <div class="item-price">
                              <span class="special-price font-weight-bold">6.790.000₫</span>
                              <del class="old-price"> 7.500.000₫</del>
                           </div>
                           <label class="compare-label position-relative d-flex align-items-center m-0">
                           <input type="checkbox" class="compare-checkbox d-none" value="/apple-watch-se-40mm-gps-vien-nhom-day-cao-su" data-type="Đồng hồ"> 
                           <span class="compare-checkbox mr-1 rounded-circle"></span>
                           So sánh
                           </label>
                        </div>
                        </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xl-2 mt-3">
                        <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                        <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                           16% 
                        </div>
                        <a href="/dong-ho-thong-minh-huawei-watch-gt3-day-da" class="thumb d-block modal-open position-relative" title="Đồng hồ thông minh Huawei Watch GT3 dây da">
                           <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                              <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/watch-3-leather.jpg?v=1660123436000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Đồng hồ thông minh Huawei Watch GT3 dây da">
                           </div>
                           <span class="label_tag label4 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                           <img width="20" height="20" alt="label_con_4" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_4.png?1676652384879" class="mr-1">Xả hàng giảm sốc
                           </span>
                        </a>
                        <div class="item-info mt-1 position-relative">
                           <h3 class="item-title font-weight-bold">
                              <a class="line_1" href="/dong-ho-thong-minh-huawei-watch-gt3-day-da" title="Đồng hồ thông minh Huawei Watch GT3 dây da">
                              Đồng hồ thông minh Huawei Watch GT3 dây da 
                              </a>
                           </h3>
                           <div class="item-price">
                              <span class="special-price font-weight-bold">5.490.000₫</span>
                              <del class="old-price"> 6.500.000₫</del>
                           </div>
                           <label class="compare-label position-relative d-flex align-items-center m-0">
                           <input type="checkbox" class="compare-checkbox d-none" value="/dong-ho-thong-minh-huawei-watch-gt3-day-da" data-type="Đồng hồ"> 
                           <span class="compare-checkbox mr-1 rounded-circle"></span>
                           So sánh
                           </label>
                        </div>
                        </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xl-2 mt-3">
                        <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                        <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                           21% 
                        </div>
                        <a href="/dong-ho-thong-minh-xiaomi-redmi-watch-2-lite" class="thumb d-block modal-open position-relative" title="Đồng hồ thông minh Xiaomi Redmi Watch 2 Lite">
                           <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                              <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/0001-redmi-watch-2-lite-941x800-16357.jpg?v=1660122807000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Đồng hồ thông minh Xiaomi Redmi Watch 2 Lite">
                           </div>
                        </a>
                        <div class="item-info mt-1 position-relative">
                           <h3 class="item-title font-weight-bold">
                              <a class="line_1" href="/dong-ho-thong-minh-xiaomi-redmi-watch-2-lite" title="Đồng hồ thông minh Xiaomi Redmi Watch 2 Lite">
                              Đồng hồ thông minh Xiaomi Redmi Watch 2 Lite 
                              </a>
                           </h3>
                           <div class="item-price">
                              <span class="special-price font-weight-bold">1.190.000₫</span>
                              <del class="old-price"> 1.500.000₫</del>
                           </div>
                           <label class="compare-label position-relative d-flex align-items-center m-0">
                           <input type="checkbox" class="compare-checkbox d-none" value="/dong-ho-thong-minh-xiaomi-redmi-watch-2-lite" data-type="Đồng hồ"> 
                           <span class="compare-checkbox mr-1 rounded-circle"></span>
                           So sánh
                           </label>
                        </div>
                        </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xl-2 mt-3">
                        <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                        <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                           37% 
                        </div>
                        <a href="/vong-deo-tay-thong-minh-xiaomi-mi-band-7" class="thumb d-block modal-open position-relative" title="Vòng đeo tay thông minh Xiaomi Mi Band 7">
                           <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                              <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/template-dongho123-recovered-5.jpg?v=1660119981000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Vòng đeo tay thông minh Xiaomi Mi Band 7">
                           </div>
                           <span class="label_tag label4 position-absolute d-inline-block pr-2 text-white d-flex align-items-center gap_5 rounded-10">
                           <img width="20" height="20" alt="label_con_4" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/label_img_4.png?1676652384879" class="mr-1">Xả hàng giảm sốc
                           </span>
                        </a>
                        <div class="item-info mt-1 position-relative">
                           <h3 class="item-title font-weight-bold">
                              <a class="line_1" href="/vong-deo-tay-thong-minh-xiaomi-mi-band-7" title="Vòng đeo tay thông minh Xiaomi Mi Band 7">
                              Vòng đeo tay thông minh Xiaomi Mi Band 7 
                              </a>
                           </h3>
                           <div class="item-price">
                              <span class="special-price font-weight-bold">1.190.000₫</span>
                              <del class="old-price"> 1.900.000₫</del>
                           </div>
                           <label class="compare-label position-relative d-flex align-items-center m-0">
                           <input type="checkbox" class="compare-checkbox d-none" value="/vong-deo-tay-thong-minh-xiaomi-mi-band-7" data-type="Đồng hồ"> 
                           <span class="compare-checkbox mr-1 rounded-circle"></span>
                           So sánh
                           </label>
                        </div>
                        </div>
                  </div>
                  <div class="col-6 col-lg-4 col-xl-2 mt-3">
                        <div class="product-item position-relative p-2 rounded bg-white h-100 box_shadow">
                        <div class="sale-label sale-top-right position-absolute font-weight-bold">Giảm 
                           57% 
                        </div>
                        <a href="/dong-ho-thong-minh-tre-em-myalo-kidsphone-k84" class="thumb d-block modal-open position-relative" title="Đồng hồ thông minh trẻ em Myalo KidsPhone K84">
                           <div class="position-relative w-100 m-0 ratio1by1 has-edge aspect zoom">
                              <img src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/thumb/large/100/459/533/products/image-removebg-preview-1-1.jpg?v=1660119525000" decoding="async" class="d-block img img-cover position-absolute lazy" alt="Đồng hồ thông minh trẻ em Myalo KidsPhone K84">
                           </div>
                        </a>
                        <div class="item-info mt-1 position-relative">
                           <h3 class="item-title font-weight-bold">
                              <a class="line_1" href="/dong-ho-thong-minh-tre-em-myalo-kidsphone-k84" title="Đồng hồ thông minh trẻ em Myalo KidsPhone K84">
                              Đồng hồ thông minh trẻ em Myalo KidsPhone K84 
                              </a>
                           </h3>
                           <div class="item-price">
                              <span class="special-price font-weight-bold">2.790.000₫</span>
                              <del class="old-price"> 6.500.000₫</del>
                           </div>
                           <label class="compare-label position-relative d-flex align-items-center m-0">
                           <input type="checkbox" class="compare-checkbox d-none" value="/dong-ho-thong-minh-tre-em-myalo-kidsphone-k84" data-type="Đồng hồ"> 
                           <span class="compare-checkbox mr-1 rounded-circle"></span>
                           So sánh
                           </label>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="b_product p-2">
               <a href="smartwatch" title="ĐỒNG HỒ THÔNG MINH" class="rounded modal-open position-relative w-100 ratio1by12 has-edge aspect d-block sitdown">
               <img class="d-block img img-cover position-absolute lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/bn_pr_5.png?1676652384879" alt="ĐỒNG HỒ THÔNG MINH">
               </a>
            </div>
            </div>
      </div>
   </section> --}}
   <section id="video" class="m_blog mt-3 mt-lg-4 mb-3 mb-lg-4">
      <div class="container">
            <div class="rounded bg-white p-3">
            <h2 class="title text-uppercase font-weight-bold position-relative pb-2 pb-lg-3 m-0">
               <a class="position-relative" href="mew-reviews" title="Dịch vụ">Dịch vụ</a>
            </h2>
            <div class="b_product">
               <div class="mew_video swiper-container position-relative">
                  <div class="swiper-wrapper">
                     @foreach ($servicehome as $service)
                     @php
                         $imgs = json_decode($service->image);
                     @endphp
              
                        <div class="swiper-slide">
                        <div class="item_grid mb-3">
                           <div class="img_thm position-relative bor-10 modal-open">
                              <a href="{{route('serviceDetail', ['slug'=>$service->slug])}}" class="effect-ming open_video" title="{{$service->name}}">
                                    <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                                    <img src="{{$imgs[0]}}" class="d-block img img-cover position-absolute lazy" alt="{{$service->name}}">
                                    <div class="position-absolute w-100 h-100 video_open lazy_bg" data-background="url({{$imgs[0]}})"></div>
                                    </div>
                              </a>
                           <h3 class="title_blo font-weight-bold mt-2"><a class="line_2" href="{{route('serviceDetail', ['slug'=>$service->slug])}}" title="{{$service->name}}">{{$service->name}}</a></h3>
                        </div>
                        </div>
                     </div>
                     @endforeach
                  <div class="swiper-button-prev mv_prev"></div>
                  <div class="swiper-button-next mv_next"></div>
               </div>
            </div>
            </div>
      </div>
   </section>
   <script rel="dns-prefetch">
      var swiperVideoSlider = new Swiper('.mew_video', {
            spaceBetween: 15,
            loop: false,
            speed: 1000,
            autoplay: false,
            navigation: {
               nextEl: '.mv_next',
               prevEl: '.mv_prev',
            },
            breakpoints: {
               375: {
                  slidesPerView: 1.2
               },
               768: {
                  slidesPerView: 2.3
               },
               992: {
                  slidesPerView: 3
               },
               1200: {
                  slidesPerView: 4
               }
            }
      });
   </script>
   <section id="m_blog" class="m_blog mt-3 mt-lg-4 mb-3 mb-lg-4">
      <div class="container">
            <div class="rounded bg-white p-3">
            <h2 class="title text-uppercase font-weight-bold position-relative pb-2 pb-lg-3 m-0">
               <a class="position-relative" href="{{route('allListBlog')}}" title="Tin tức nổi bật">
               Tin tức nổi bật
               </a>
            </h2>
            <div class="b_blog row">
               <div class="col-12 col-md-6">
                  <div class="item_grid mb-3 mb-md-0">
                        <div class="img_thm position-relative modal-open bor-10">
                        <a href="{{route('detailBlog', ['slug'=>$homeBlog[0]->slug])}}" title="{{languageName($homeBlog[0]->title)}}" class="effect-ming">
                           <div class="position-relative w-100 m-0 be_opa modal-open ratio3by2 has-edge aspect">
                              <img src="{{$homeBlog[0]->image}}" data-src="{{$homeBlog[0]->image}}" class="lazy d-block img img-cover position-absolute" alt="{{languageName($homeBlog[0]->title)}}">
                              <div class="position-absolute w-100 h-100 overlay"></div>
                           </div>
                        </a>
                        <div class="entry-date position-absolute text-center rounded-right">
                           <p class="day font-weight-bold">
                              {{date('d', strtotime($homeBlog[0]->created_at))}}
                           </p>
                           <p class="yeah">
                              {{date('m/Y', strtotime($homeBlog[0]->created_at))}}
                           </p>
                        </div>
                        </div>
                        <div class="cont">
                        <h3 class="title_blo font-weight-bold mt-2"><a class="line_1" href="{{route('detailBlog', ['slug'=>$homeBlog[0]->slug])}}" title="{{languageName($homeBlog[0]->title)}}">{{languageName($homeBlog[0]->title)}}</a></h3>
                        <div class="sum line_2 h-auto text-justify">
                           {{languageName($homeBlog[0]->description)}}
                        </div>
                        </div>
                  </div>
               </div>
               <div class="col-12 col-md-6">
                  @foreach ($homeBlog as $key=>$blog)
                  @if ($key != 0)
                     <article class="blog-item-list clearfix mb-3 row">
                           <div class="col-4 col-lg-3 pr-0 ">
                           <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class=" d-block modal-open thumb_img_blog_list thumb rounded" title="{{languageName($blog->title)}}"> 
                           <span class="modal-open position-relative d-block w-100 m-0 ratio3by2 has-edge aspect zoom">
                           <img src="{{$blog->image}}" data-src="{{$blog->image}}" decoding="async" alt="{{languageName($blog->title)}}" class="lazy d-block img img-cover position-absolute">
                           </span>
                           </a>
                           </div>
                           <div class="blogs-rights col-8 col-lg-9">
                           <h3 class="blog-item-name font-weight-bold mb-1 title_blo">
                              <a class="line_1" href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a>
                           </h3>
                           <div class="post-time small">                              
                              {{date('d/m/Y', strtotime($blog->created_at))}}
                           </div>
                           <div class="sum line_2 h-auto text-justify">
                              {{languageName($blog->description)}}
                           </div>
                           </div>
                     </article>
                  @endif
                  @endforeach
                  <div class="d-block mt-auto text-center">
                        <a href="{{route('allListBlog')}}" title="Xem thêm" class="view_mores box_shadow rounded-10 modal-open d-block py-2 px-3 mt-3 text-center font-weight-bold">Xem thêm</a>
                  </div>
               </div>
            </div>
            </div>
      </div>
   </section>
</div>
@endsection