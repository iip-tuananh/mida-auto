<div class="menubar w-100 text-right d-flex d-lg-none position-fixed align-items-center scroll_down ">
   <a href="{{route('home')}}" title="{{$setting->company}}" class="mr-auto ml-3">
   <img alt="{{$setting->company}}" src="{{$setting->logo}}" class="img-fluid mb_logo">
   </a> 
   </div>
   <div class="bg_head position-fixed w-100 scroll_down "></div>
   <div class="col-left position-fixed d-flex flex-column pt-2 pb-2">
   <div class="container position-relative">
      <div class="row align-items-center">
         <div class="col-12 col-lg-3 d-none d-lg-block">
               <a href="{{route('home')}}" title="{{$setting->company}}" class="logo">
               <img alt="{{$setting->company}}" src="{{$setting->logo}}" class="img-fluid img-logo-cus">
               </a> 
         </div>
         <div class="col-12 col-lg-9">
               <div class="d-lg-flex align-items-center position-static pr-menu">
               <div class="mr-2 mr-xl-3 level0 position-relative cls">
                  <a href="{{route('tracuubaohanh')}}" title="Tra cứu bảo hành" class="align-items-center d-flex head_svg p-1 pl-xl-2 pr-xl-2 rounded-10">
                  <small class="title-tracuu">Tra cứu 
                  <b class="d-block">bảo hành</b>
                  </small>
                  </a>
               </div>
               <div class="search-block mr-3">
                  <form action="{{route('search_result')}}" method="post" class="js-search-form left-search position-relative mt-4 mt-lg-0 pt-2 pb-2 pt-lg-1 pb-lg-1">
                     @csrf
                     <input type="text" id="js-search-form" placeholder="Từ khoá..." value="" maxlength="70" name="keyword" class="rounded form-control pl-2 pl-lg-3 pr-5" autocomplete="off" required>
                     <input type="submit" class="border-0 position-absolute p-0">
                     <div class="w-100 position-absolute rounded searchResult px-2 d-none">
                           <div class="overflow-auto search-result-warpper">
                           <div class="d-block text-left h6 searchResult_products_text mt-2 p-2 rounded text-white">Sản phẩm (<span>0</span>)</div>
                           <div class="searchResult_products"></div>
                           <div class="d-block text-left h6 searchResult_articles_text mt-2 p-2 rounded text-white">Tin tức (<span>0</span>)</div>
                           <div class="searchResult_articles"></div>
                           <div class="d-block text-left h6 searchResult_pages_text mt-2 p-2 rounded text-white">Trang nội dung (<span>0</span>)</div>
                           <div class="searchResult_pages"></div>
                           <a href="/search?type=product&q=" class="btn border-0 rounded-0 w-100 my-0 all-result d-block mb-2 font-weight-bold">Xem tất cả kết quả</a>
                           </div>
                     </div>
                  </form>
               </div>
               {{-- <div class="blog-block">
                  <div class="blog_head text-center d-flex align-items-center">
                     <a class="pl-2 pl-xl-3 pr-2 pr-xl-3 d-inline-block position-relative" href="/24h-cong-nghe" title="24h<br>Công nghệ">24h<br>Công nghệ</a>
                     <a class="pl-2 pl-xl-3 pr-2 pr-xl-3 d-inline-block position-relative" href="/tin-tuc" title="News">News</a>
                  </div>
               </div> --}}
               <div class="info-block mr-3 title-tracuu">
                  <a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}" class="align-items-center d-flex">
                     <span class="play0 d-none d-xl-block">
                           <svg width="32" height="32">
                           <use href="#svg-phone" />
                           </svg>
                     </span>
                     <b><small >Gọi mua hàng</small> <br>{{$setting->phone1}}</b>
                  </a>
               </div>
               <div class="navigation-bottom mt-auto mt-lg-0 title-tracuu">
                  <div class="b_use d-none d-lg-flex align-items-stretch">
                     {{-- <div id="js-login-toggle" class="btn-account d-none d-lg-flex align-items-center justify-content-center mr-3">
                           <svg width="24" height="24" class="mr-2 d-none d-xl-block">
                           <use href="#svg-account"/>
                           </svg>
                           <div id="m_login" class="pop_login">
                           <a href="/account/login" class="item_login d-block font-weight-bold small" title="Đăng nhập">Đăng nhập</a>
                           <a href="/account/register" class="item_login d-block font-weight-bold small" title="Đăng ký">Đăng ký</a>
                           </div>
                     </div> --}}
                     <a class=" p-1 btn-cart position-relative d-inline-flex head_svg justify-content-center align-items-center rounded-10" title="Giỏ hàng" href="/cart">
                           <span class="b_ico_Cart text-center d-flex justify-content-center align-items-center position-relative">
                           <svg width="20" height="20" >
                              <use href="#svg-cart" />
                           </svg>
                           <span class="btn-cart-indicator position-absolute d-none font-weight-bold text-center text-white"></span>
                           </span>
                           <small class="d-none d-xl-block ml-lg-1">Giỏ hàng</small>
                     </a>
                  </div>
               </div>
               </div>
         </div>
      </div>
   </div>
   </div>
   <div class="navigation-block mr-lg-auto d-none d-lg-block">
   <div class="container">
      <ul id="menu_pc" class="p-0 m-0 list-unstyled position-relative d-lg-flex">
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 mega">
            <a href="{{route('allProduct')}}" title="Sản phẩm" class="font-weight-bold d-block pt-1 pb-1  pr-4 js-checkMenu position-relative ">
            Sản phẩm
            <i class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
            </a>
            <i class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
            <ul class="lv1 list-group p-0 list-unstyled rounded">
               @foreach ($categoryhome as $cate)
                  <li class=" level1 pr-lg-2 pt-lg-2 pb-lg-2 pl-2 position-relative cls">
                     <a href="{{route('allListProCate', ['danhmuc'=>$cate->slug])}}" class="pt-1 pb-1 pr-4 position-relative  js-checkMenu" title="{{languageName($cate->name)}}">
                     {{languageName($cate->name)}}
                     </a>
                     @if (count($cate->typeCate) > 0)
                        <i class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
                        <ul class="lv2 list-group p-0 list-unstyled rounded">
                           @foreach ($cate->typeCate as $type)
                              <li class="level2 "> 
                                    <a href="{{route('allListProType', ['danhmuc'=>$type->cate_slug, 'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                              </li>
                           @endforeach
                        </ul>
                     @endif
                  </li>
               @endforeach
            </ul>
         </li>
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
            <a href="{{route('home')}}" title="Trang chủ" class="font-weight-bold d-block pt-1 pb-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
            Trang chủ
            </a>
         </li>
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
            <a href="{{route('aboutUs')}}" title="Giới thiệu" class="font-weight-bold d-block pt-1 pb-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
            Giới thiệu
            </a>
         </li>
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
            <a href="{{route('listAllService')}}" title="Dịch vụ" class="font-weight-bold d-block pt-1 pb-1 pl-lg-3 pr-4 js-checkMenu position-relative ">
            Dịch vụ
            <i class="down_icon align-items-center justify-content-center position-absolute d-none d-lg-block mg"></i>
            </a>
            <i class="js-submenu down_icon d-flex align-items-center justify-content-center position-absolute d-lg-none"></i>
            <ul class="lv1 list-group p-0 list-unstyled rounded">
               @foreach ($servicehome as $item)
                  <li class="no level1 pr-lg-2  pl-2 position-relative cls">
                     <a href="{{route('serviceDetail',['slug'=>$item->slug])}}" class="pt-1 pb-1 pr-4 position-relative  js-checkMenu" title="Phụ kiện di động">
                     {{$item->name}}
                     </a>
                  </li>
               @endforeach
          
            </ul>
         </li>
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
               <a href="{{route('tracuubaohanh')}}" title="Tra cứu bảo hành" class="font-weight-bold d-block pt-1 pb-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
               Tra cứu bảo hành
               </a>
         </li>
         
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
               <a href="{{route('allListBlog')}}" title="Tin tức" class="font-weight-bold d-block pt-1 pb-1 pl-lg-3 pr-lg-3 pr-2 position-relative active">
               Tin tức
               </a>
         </li>
         <li class="level0 position-relative cls pt-1 pt-lg-2 pb-lg-2 pb-1 ">
               <a href="{{route('lienHe')}}" title="Liên hệ" class="font-weight-bold d-block pt-1 pb-1 pl-lg-3 pr-lg-3 pr-2 position-relative ">
               Liên hệ
               </a>
         </li>
      </ul>
   </div>
   </div>
   <div class="col-left position-fixed d-flex flex-column pt-lg-2 pb-lg-2 pt-0 pb-0 d-lg-none" id="col-left-mew">
   <div class="align-items-center menu_mobile h-100 position-relative">
      <ul id="menu-mew" class="p-0 m-0 list-unstyled d-lg-flex justify-content-lg-end">
         <li class="level0 d-block w-100 position-static">
               <a title="Điện thoại" class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_1.png?1676652384879" alt="Điện thoại">
               <span class="line_1 line_2">Điện thoại</span>
               </a>
               <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
               <li class="level1 main position-sticky bg-white">
                  <a href="/dien-thoai" class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main" title="Chi tiết danh mục">
                  Chi tiết danh mục
                  </a>
               </li>
               <li class="level1 position-relative">
                  <a href="/dien-thoai" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Chọn theo hãng">
                  Chọn theo hãng
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20vendor:(Apple)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Apple">
                           Apple
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20vendor:(Samsung)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Samsung">
                           Samsung
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20vendor:(Xiaomi)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Xiaomi">
                           Xiaomi
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20vendor:(Oppo)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Oppo">
                           Oppo
                           </a>
                     </li>
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/dien-thoai" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Chọn theo mức giá">
                  Chọn theo mức giá
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20price_min:(%3E=0%20AND%20%3C=5000000)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Dưới 5 triệu">
                           Dưới 5 triệu
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20price_min:(%3E=5000000%20AND%20%3C=10000000)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Từ 5 - 10 triệu">
                           Từ 5 - 10 triệu
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20price_min:(%3E=10000000%20AND%20%3C=15000000)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Từ 10 - 15 triệu">
                           Từ 10 - 15 triệu
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20price_min:(%3E=15000000%20AND%20%3C=20000000)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Từ 15 - 20 triệu">
                           Từ 15 - 20 triệu
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20price_min:(%3E=20000000%20AND%20%3C=99999999)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Trên 20 triệu">
                           Trên 20 triệu
                           </a>
                     </li>
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/dien-thoai" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Loại điện thoại">
                  Loại điện thoại
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20product_type:(Android)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Android">
                           Android
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20product_type:(IOS)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="IOS">
                           IOS
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="https://mew-mobile.mysapo.net/dien-thoai?q=collections:2921522%20AND%20product_type:(%C4%90i%E1%BB%87n%20tho%E1%BA%A1i%20ph%E1%BB%95%20th%C3%B4ng)&page=1&view=grid" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Điện thoại phổ thông">
                           Điện thoại phổ thông
                           </a>
                     </li>
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/dien-thoai-hot" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Điện thoại Hot">
                  Điện thoại Hot
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                     <li class="level2 position-relative">
                           <a href="/" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Galaxy Z Fold4">
                           Galaxy Z Fold4
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="/" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Galaxy Z Flip4">
                           Galaxy Z Flip4
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="/iphone-13-512gb" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="iPhone 13">
                           iPhone 13
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="/iphone-13-256gb" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="iPhone 12">
                           iPhone 12
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="/iphone-13-128gb" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="iPhone 11">
                           iPhone 11
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="/" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Samsung S22 Ultra">
                           Samsung S22 Ultra
                           </a>
                     </li>
                     <li class="level2 position-relative">
                           <a href="/xiaomi-redmi-note-11-pro-plus-5g" class="h-100 d-flex pl-3 pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Xiaomi Redmi Note 11">
                           Xiaomi Redmi Note 11
                           </a>
                     </li>
                  </ul>
               </li>
               </ul>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a href="/smartwatch" title="Smart watch" class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_2.png?1676652384879" alt="Smart watch">
               <span class="line_1 line_2">Smart watch</span>
               </a>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a title="Laptop" class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_3.png?1676652384879" alt="Laptop">
               <span class="line_1 line_2">Laptop</span>
               </a>
               <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
               <li class="level1 main position-sticky bg-white">
                  <a href="/laptop" class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main" title="Chi tiết danh mục">
                  Chi tiết danh mục
                  </a>
               </li>
               <li class="level1 position-relative">
                  <a href="/macbook" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Macbook">
                  Macbook
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/laptop-van-phong" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Văn phòng">
                  Văn phòng
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/laptop-gaming" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Gaming">
                  Gaming
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/laptop-sinh-vien" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Sinh viên">
                  Sinh viên
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               </ul>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a href="/loa" title="Loa" class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_4.png?1676652384879" alt="Loa">
               <span class="line_1 line_2">Loa</span>
               </a>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a title="Phụ kiện" class="position-relative d-flex js-submenu flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_5.png?1676652384879" alt="Phụ kiện">
               <span class="line_1 line_2">Phụ kiện</span>
               </a>
               <ul class="lv1 p-0 list-unstyled position-absolute m_chill m-0">
               <li class="level1 main position-sticky bg-white">
                  <a href="/phu-kien" class="font-weight-bold d-flex pt-2 pb-2 border-bottom align-items-center w-100 justify-content-center text-main" title="Chi tiết danh mục">
                  Chi tiết danh mục
                  </a>
               </li>
               <li class="level1 position-relative">
                  <a href="/phu-kien-di-dong" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Phụ kiện di động">
                  Phụ kiện di động
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/phu-kien-laptop" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Phụ kiện Laptop">
                  Phụ kiện Laptop
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               <li class="level1 position-relative">
                  <a href="/phu-kien-gaming" class="font-weight-bold d-flex pt-2 pb-2 border-bottom mr-2 ml-2 align-items-center" title="Phụ kiện Gaming">
                  Phụ kiện Gaming
                  </a>
                  <ul class="lv2 d-flex list-unstyled flex-column pl-0">
                  </ul>
               </li>
               </ul>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a href="/may-tinh-bang" title="Tablet" class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_6.png?1676652384879" alt="Tablet">
               <span class="line_1 line_2">Tablet</span>
               </a>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a href="/" title="Đồng hồ" class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_7.png?1676652384879" alt="Đồng hồ">
               <span class="line_1 line_2">Đồng hồ</span>
               </a>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a href="/may-in" title="PC, Máy in" class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_8.png?1676652384879" alt="PC, Máy in">
               <span class="line_1 line_2">PC, Máy in</span>
               </a>
         </li>
         <li class="level0 d-block w-100 position-static">
               <a href="/" title="Máy cũ giá rẻ" class="position-relative d-flex flex-column justify-content-center align-items-center text-center p-2">
               <img class="lazy d-block pb-2 m-auto" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/icon_menu_9.png?1676652384879" alt="Máy cũ giá rẻ">
               <span class="line_1 line_2">Máy cũ giá rẻ</span>
               </a>
         </li>
      </ul>
   </div>
</div>