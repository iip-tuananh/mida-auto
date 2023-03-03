@extends('layouts.main.master')
@section('title')
Tra cứu bảo hành
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('js')
<script type="text/javascript">
    $('.tra-cuu').click(function(e) {
        e.preventDefault();
        var keyword = $('#tcbh-input').val();
        var url = $(this).data('url');
        $.ajax({
            type: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {keyword: keyword},
            success: function(data){
                $('#thong-tin-chi-tiet-khach-hang').html(data.html);
            },
            error: function(data){
                console.log('Lỗi');
            }
        })
    })
</script>
@endsection
@section('content')
<section class="bread-crumb" style="background-image: linear-gradient(to bottom, rgb(10 9 9 / 44%) 0%,rgb(10 10 10 / 60%) 100%), url({{isset($serviceCate) ? $serviceCate->image : $banners[0]->image}}); background-attachment: fixed;">
    <span class="crumb-border"></span>
    <div class="container">
    <div class="rows">
        <div class="col-xs-12 a-left">
            <h1 class="title_h1 clearfix">Tra cứu bảo hành</h1>
            <ul class="breadcrumb" >
                <li class="home">
                <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>
                <li><strong ><span>Tra cứu bảo hành</span></strong></li>
            </ul>
        </div>
    </div>
    </div>
</section>
<section class="blogpage clearfix">
    <div class="containers" itemscope itemtype="https://schema.org/Blog">
    <div class="wrap_background_aside margin-bottom-0 clearfix">
        <div class="section full_background_blog clearfix">
            <div class="container">
                <div id="content" class="content-area page-wrapper" role="main">
                    <div class="row row-main">
                        <div class="large-12 col">
                            <div class="col-inner">
                                <div style="display: none;">
                                    <h1>Tra cứu bảo hành Classis</h1>
                                </div>
                                <div id="text-2039177763" class="text">
                                    Bạn vui lòng nhập <span style="color: #ff6600;">số điện thoại</span> hoặc<span style="color: #ff6600;"> biển số xe viết liền</span> vào ô tương ứng
                                    <p></p>
                                    <div class="tcbh-wrapper">
                                    <form id="tcbh-form" role="form" action="" method="GET">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="tcbh-search-wrapper">
                                                    <p><input id="tcbh-input" class="form-control" name="s" type="text" placeholder="Nhập số điện thoại hoặc biển số xe" value=""></p>
                                                    <div class="loader loader-custom hidden">&nbsp;</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="tcbh-submit-wrapper">
                                                    <button class="btn btn-success tra-cuu" data-url="{{route('resultTraCuu')}}">Tra cứu</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="tcbh-rs">&nbsp;</div>
                                    </div>
                                    <div id="thong-tin-chi-tiet-khach-hang">
                        
                                    </div>
                                    <div>
                                        <h5><span style="color: #ff6600;">ĐIỀU KIỆN BẢO HÀNH</span></h5>
                                        <p>Tại Hoàng Long Window Film, khách hàng được bảo hành 1 năm kể từ ngày lắp đặt theo các nội dung sau:</p>
                                        <ol>
                                        <li>Phồng rộp</li>
                                        <li>Rạn nứt, tách lớp</li>
                                        <li>Bay màu, loang màu</li>
                                        </ol>
                                        <p>Không bảo hành đối với các trường hợp làm thủng, rách films do người sử dụng.</p>
                                        <h5><span style="color: #ff6600;">LƯU Ý KHI SỬ DỤNG</span></h5>
                                        <ol>
                                        <li>Sau khi lắp đặt film, trong 24 giờ không được lên xuống kính, lau bề mặt film để lớp keo bám chắc vào bề mặt kính.</li>
                                        <li>Khi vệ sinh kính, nên dùng các loại khăn mềm. Không dùng vật dụng cứng, hóa chất tẩy rửa.</li>
                                        </ol>
                                        {{-- <style>#text-2039177763{color:rgb(102,102,102)}#text-2039177763>*{color:rgb(102,102,102)}</style> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="ab-module-article-mostview"></div>
@endsection