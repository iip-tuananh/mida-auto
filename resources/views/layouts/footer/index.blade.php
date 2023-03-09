<footer class="bg-white pt-5">
   <div class="foo_mid mb-4">
      <div class="container">
            <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 footer-left">
               <a href="{{route('home')}}" title="{{$setting->company}}" class="logo_foo d-block mb-2">
               <img alt="Logo {{$setting->company}}" class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{$setting->logo}}">
               </a>
               <address class="vcard mb-4">
                  <p class="adr"><b>Trụ sở chính:  </b>{{$setting->address1}}</p>
                  <p><b>Email: </b><a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a></p>
                  <p><b>Hotline: </b><a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a></p>
               </address>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left">
               <h3 class="footer-title mb-2 position-relative font-weight-bold">Map</h3>
               {!!$setting->iframe_map!!}
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left">
               <h3 class="footer-title mb-2 position-relative font-weight-bold">Chính sách</h3>
               <ul class="links">
                  <li><a href="/chinh-sach" title="Chính sách mua hàng">Chính sách mua hàng</a></li>
                  <li><a href="/chinh-sach" title="Chính sách đổi trả">Chính sách đổi trả</a></li>
                  <li><a href="/chinh-sach" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                  <li><a href="/lien-he" title="Gửi góp ý, khiếu nại">Gửi góp ý, khiếu nại</a></li>
               </ul>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 footer-left">
               <h3 class="footer-title mb-2 position-relative font-weight-bold">Kết nối với chúng tôi</h3>
               <div class="social position-relative pb-2">
                  <a href="#" target="_blank" class="position-relative iso sitdown modal-open d-inline-block facebook mr-1" title="Facebook">
                  <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/facebook.png')}}" alt="facebook" width=32 height=32>
                  </a>
                  <a href="#" target="_blank" class="position-relative iso sitdown modal-open d-inline-block twitter mr-1" title="Twitter">
                  <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/twitter.png')}}" alt="twitter" width=32 height=32>
                  </a>
                  <a href="#" target="_blank" class="position-relative iso sitdown modal-open d-inline-block instagram mr-1" title="Instagram+">
                  <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/instagram.png')}}" alt="instagram" width=32 height=32>
                  </a>
                  <a href="#" target="_blank" class="position-relative iso sitdown modal-open d-inline-block youtube mr-1" title="Youtube">
                  <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/youtube.png')}}" alt="youtube" width=32 height=32>
                  </a>
                  <a href="#" target="_blank" class="position-relative iso sitdown modal-open d-inline-block shopee mr-1" title="Shopee">
                  <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/shopee.png')}}" alt="Shopee" width=32 height=32>
                  </a>
                  <a href="#" target="_blank" class="position-relative iso sitdown modal-open d-inline-block lazada mr-1" title="Lazada">
                  <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/lazada.jpg')}}" alt="Lazada" width=32 height=32>
                  </a>
               </div>
               <p class="mb-3 position-relative">Phương thức thanh toán</p>
               <div class="footer-column-1">
                  <div class="payment-accept">
                        <img class="first lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/payment-1.png')}}" alt="payment-1">
                        <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/payment-2.png')}}" alt="payment-2"> 
                        <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/payment-3.png')}}" alt="payment-3"> 
                        <img class="lazy" src="//bizweb.dktcdn.net/100/459/533/themes/868331/assets/placeholder_1x1.png?1676652384879" data-src="{{url('frontend/images/payment-4.png')}}" alt="payment-4">
                  </div>
               </div>
            </div>
            </div>
      </div>
   </div>
   <div class="foo_bot pt-2 pb-2 border-top">
      <div class="container">
            <div class="row bgk align-items-center">
            <div class="col-12">
               <div class="coppyright">Bản quyền thuộc về <a rel="nofollow noopener" href="{{route('home')}}" title="{{$setting->company}}" target="_blank">{{$setting->company}}</a>. Cung cấp bởi <a href="https://sbtsoftware.vn/" title="SBT" target="_blank" rel="nofollow noopener">SBT</a>.</div>
            </div>
            </div>
      </div>
   </div>
   <style>
      #mapDiv{
    height: 223px !important;
}
   </style>
</footer>