@extends('layout.master')

@section('content')
<div class="my-4"></div>
<!-- Lead Area Start -->
@include('home.leadeing_area')
<!-- Lead Area End -->

<div class="my-4"></div>

<!-- Anniversary Section Start -->
<section class="anniversary">
    <div class="container py-3 mb-lg-4">
        <a class="anniversary_title" href="#">
            <img alt="" width="100" height="92" class="img-responsive" style="color: transparent;" src="{{asset('img/default.jpg')}}">
            <span class="anniversary_title_text">সিটি নির্বাচন ২০২৩</span>
        </a>
        <div class="clearfix"></div>
        <div class="row mt-3">
            @for($i = 0; $i < 4; $i++) <div class="col-6 col-sm-3">
                <a class="anniversary_news_list__85qmv" href="#">
                    <span class="col">
                        <img alt="হাইকোর্টের আদেশের বিরুদ্ধে আপিল করবেন জাহাঙ্গীর" width="800" height="483" class="rounded w-100 h-auto" src="{{asset('img/default.jpg')}}" style="color: transparent;"></span>
                    <span class="col">
                        <h5 class="mt-3">হাইকোর্টের আদেশের বিরুদ্ধে আপিল করবেন জাহাঙ্গীর</h5>
                    </span>
                </a>
        </div>
        @endfor
    </div>
    </div>
</section>
<!-- Anniversary Section End -->


<!-- section1 start -->
@include('home.sports_section')
<!-- section1 end -->


<!-- section2 start -->
@include('home.entertainment_section')
<!-- section2 end -->


<!-- section3 start -->
@include('home.national_and_politics')
<!-- section3 end -->

<div class="container feature my-5">
    <!-- slide -->
</div>

<!-- section4 start -->
@include('home.sarabangla_section')
<!-- section4 end -->

<!-- section5 start -->
@include('home.sarabisoya_section')
<!-- section5 end -->

<!-- section6 start -->
@include('home.business_section')
<!-- section6 end -->


<!-- section7 start -->
@include('home.islamic_section')
<!-- section7 end -->

<!-- section8 start -->
@include('home.sobishesh_section')
<!-- section8 end -->


<!-- section9 start -->
@include('home.video_gallery')
<!-- section9 end -->

<!-- section10 start -->
@include('home.lifestyle_section')
<!-- section10 end -->

<!-- section11 start -->
@include('home.viral_section')
<!-- section11 end -->


<!-- section12 start -->
@include('home.miscellaneous')
<!-- section12 end -->


<!-- section13 start -->
@include('home.photo_gallery')
<!-- section13 end -->

<!-- section14 start -->
@include('home.astrology_section')
<!-- section14 end -->
@endsection