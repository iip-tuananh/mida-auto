@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/sidebar_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')<section class="bread-crumb" style="background-image: linear-gradient(to bottom, rgb(10 9 9 / 44%) 0%,rgb(10 10 10 / 60%) 100%), url({{isset($serviceCate) ? $serviceCate->avatar : $banners[0]->image}});">
    <span class="crumb-border"></span>
    <div class="container">
    <div class="rows">
        <div class="col-xs-12 a-left">
            <h1 class="title_h1 clearfix">{{$title_page}}</h1>
            <ul class="breadcrumb" >
                <li class="home">
                <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>
                <li><strong ><span>{{$title_page}}</span></strong></li>
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
                <div class="title_main_page clearfix">
                <h1>{{$title_page}}</h1>
                </div>
                <div class="row">
                <div class="right-content margin-bottom-fix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <section class="list-blogs blog-main listmain_blog clearfix">
                        <div class="row row_blog_responsive">
                            @foreach ($services as $service)
                            @php
                                $img = json_decode($service->image);
                            @endphp
                            <div class="col-lg-4 col-md-6 col-12 itembb">
                            <div class="blocg_item margin-bottom-15">
                                <div class="blogwp clearfix">
                                    <a  class="image-blog clearfix" href="{{route('serviceDetail', ['cate'=>$service->category_slug, 'slug'=>$service->slug])}}" title="{{$service->name}}">
                                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$img[0]}}"  alt="{{$service->name}}">
                                    </a>
                                    <div class="post-date clearfix"> 
                                        {!!languageName($service->description)!!}
                                    </div>
                                    <h3>
                                        <a href="{{route('serviceDetail', ['cate'=>$service->category_slug, 'slug'=>$service->slug])}}" title="{{$service->name}}">{{$service->name}}</a>
                                    </h3>
                                </div>
                            </div>
                            </div>
                            @endforeach
                            <style>
                            .post-date{
                                overflow: hidden;
                                text-overflow: ellipsis;
                                display: -webkit-box;
                                -webkit-line-clamp: 3; 
                                -webkit-box-orient: vertical;
                                }
                            </style>
                        </div>
                        <div class="text-xs-right pageinate-page-blog section pagenav clearfix">
                            {{$services->links()}}
                        </div>
                    </section>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="ab-module-article-mostview"></div>

@endsection