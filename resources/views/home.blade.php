@extends('layout.master')

@section('content')
<div class="my-4"></div>
<!-- Lead Area Start -->
<section class="lead_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <a href="/online/campus-online/2023/05/08/1278019">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
                            <h1 class="d-none d-sm-block">ধর্ষণ মামলায় খুকৃবির সাবেক উপাচার্য কারাগারে</h1>
                            <p class="d-none d-sm-none d-md-block d-lg-none d-xl-block">খুলনা কৃষি বিশ্ববিদ্যালয়ের সাবেক উপাচার্য অধ্যাপক ড. মো. শহীদুর রহমান খানকে ধর্ষণ মামলায় কারাগারে পা...</p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-8">
                            <img alt="ধর্ষণ মামলায় খুকৃবির সাবেক উপাচার্য কারাগারে" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 h-auto" style="color: transparent;" src="{{ asset('/img/default.jpg') }}">
                        </div>
                        <h1 class="d-block d-sm-none mt-2">ধর্ষণ মামলায় খুকৃবির সাবেক উপাচার্য কারাগারে</h1>
                        <p class="d-block d-sm-none">খুলনা কৃষি বিশ্ববিদ্যালয়ের সাবেক উপাচার্য অধ্যাপক ড. মো. শহীদুর রহমান খানকে ধর্ষণ মামলায় কারাগারে পাঠিয়েছেন আদালত। নারী ও শিশু নির্যাতন দমন......</p>
                    </div>
                </a>
                <hr>
                <div class="row highlight-news2">
                    <div class="col-12 col-md-6 col-lg-6 border-end"><a class="list-group-item" href="/online/national/2023/05/08/1278013">
                            <h5>হঠাৎ বাড়ছে ডেঙ্গু, নতুন করে হাসপাতালে ৩৪</h5>
                            <p class="mb-0">হঠাৎ করেই বাড়ছে ডেঙ্গু জ্বর। হাসপাতালে ভর্তি বেড়েছে ডেঙ্গু আক্রান্ত রোগীদের। দেশ...</p>
                        </a></div>
                    <div class="col-12 col-md-6 col-lg-6 border-end"><a class="list-group-item" href="/online/national/2023/05/08/1278009">
                            <h5>‘নগরীর বৃক্ষ নিধনের পরিণতি হবে ভয়াবহ’</h5>
                            <p class="mb-0">'আইনের তোয়াক্কা না করে নির্বিচারে গাছ কেটে সড়কদ্বীপ উন্নয়ন পরিবেশ ও জনস্বা...</p>
                        </a></div>
                </div>
                <hr>
                <div class="row highlight-img">
                    @for($i = 0; $i < 3; $i++) <div class="col-12 col-md-4 col-lg-4">
                        <a class="highlight-row" href="#">
                            <div class="col-4 col-md-12 col-lg-12 pe-0">
                                <img alt="‘রাশিয়ার তেল বিপুল দামে বেচছে ভারতের দুই সংস্থা?’" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="card-img-top rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                            </div>
                            <div class="col-8 col-md-12 col-lg-12">
                                <h5 class="mt-2">‘রাশিয়ার তেল বিপুল দামে বেচছে ভারতের দুই সংস্থা?’</h5>
                                <p>রাশিয়া থেকে ভারতে তেল এনে শোধন করে গুজরাটের দুই সংস্থা কি তা বিপুল দামে ইউরোপে ব...</p>
                            </div>
                        </a>
                </div>
                @endfor
            </div>
            <div class="row">
                <div class="col">
                    <ul class="w-100 highlightMoreIteam mb-0">
                        @for($i = 0; $i < 6; $i++) <li class="list-group-item px-0">
                            <a href="#">
                                <h5>অভিষেকের পর রাজা চার্লসের জন্য যেসব চ্যালেঞ্জ রয়েছে</h5>
                            </a>
                            </li>
                            @endfor
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 leadAreaMid border-end border-secondary">
            <ul class="list-group list-group-flush leadNewsMoreDesktop">
                @for($i = 0; $i < 4; $i++) <li class="list-group-item px-0">
                    <a class="row" href="/online/city-election-2023/2023/05/08/1277983">
                        <span class="col pe-0">
                            <h5>রিট খারিজ, প্রার্থী হতে পারছেন না জাহাঙ্গীর</h5>
                        </span>
                        <span class="col-5">
                            <img src="{{asset('img/default.jpg')}}" alt="রিট খারিজ, প্রার্থী হতে পারছেন না জাহাঙ্গীর" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" style="color: transparent;">
                        </span>
                    </a>
                    </li>
                    @endfor
            </ul>
            <div class="card my-2">
                <a class="card-header" href="#">উপ-সম্পাদকীয়</a>
                <div class="card-body p-2 py-0">
                    <ul class="list-group list-group-flush m-0">
                        <li class="list-group-item px-0">
                            <a class="row" href="#">
                                <span class="col-5"><img alt="অশেষ রবীন্দ্রনাথ" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}"></span><span class="col px-0">
                                    <h5>অশেষ রবীন্দ্রনাথ</h5>
                                </span></a>
                        </li>
                        <li class="list-group-item px-0">
                            <a class="row" href="#">
                                <span class="col-5">
                                    <img alt="রবীন্দ্রভুবন ভাবনাহীন আশ্রয়" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                                </span>
                                <span class="col px-0">
                                    <h5>রবীন্দ্রভুবন ভাবনাহীন আশ্রয়</h5>
                                </span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabs_area">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tabPane1" type="button" role="tab" aria-controls="tabPane1" aria-selected="true">সর্বশেষ</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tabPane2" type="button" role="tab" aria-controls="tabPane2" aria-selected="false" tabindex="-1">দিনের সেরা</button></li>
                    <li class="nav-item" role="presentation"><button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tabPane3" type="button" role="tab" aria-controls="tabPane3" aria-selected="false" tabindex="-1">সপ্তাহের সেরা</button></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="tabPane1" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <ul class="section-list list-group list-group-flush pt-3">
                            @for($i = 0; $i < 10; $i++) <li class="bi bi-play-fill list-group-item">
                                <a href="#">আর্জেন্টিনায় দুই ক্লাবের ফুটবলারদের মারামারি; ৭ লাল কার্ড!</a>
                                <div class="clearfix"></div>
                                <time>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12h2c0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10c-2.777 0-5.287 1.141-7.099 2.977l2.061 2.061-6.962 1.354 1.305-7.013 2.179 2.18c2.172-2.196 5.182-3.559 8.516-3.559 6.627 0 12 5.373 12 12zm-13-6v8h7v-2h-5v-6h-2z" />
                                    </svg>
                                    ৪৫ সেকেন্ড আগে |
                                </time>
                                <span>খেলা</span>
                                </li>
                                @endfor
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tabPane2" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
                        <ul class="section-list list-group list-group-flush pt-3">
                            @for($i = 0; $i < 10; $i++) <li class="bi bi-play-fill list-group-item">
                                <a href="#">ধানমন্ডি লেকে পদ্মফুলের আড়ালে ভেসে উঠল লাশ!</a>
                                <div class="clearfix"></div>
                                <time>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12h2c0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10c-2.777 0-5.287 1.141-7.099 2.977l2.061 2.061-6.962 1.354 1.305-7.013 2.179 2.18c2.172-2.196 5.182-3.559 8.516-3.559 6.627 0 12 5.373 12 12zm-13-6v8h7v-2h-5v-6h-2z" />
                                    </svg>
                                    ৩ ঘণ্টা আগে |
                                </time>
                                <span>বিবিধ</span>
                                </li>
                                @endfor
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tabPane3" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
                        <ul class="section-list list-group list-group-flush pt-3">
                            @for($i = 0; $i < 10; $i++) <li class="bi bi-play-fill list-group-item">
                                <a href="#">সাইবার জগতে তিন ব্যক্তির দেশবিরোধী প্রচারণা</a>
                                <div class="clearfix"></div>
                                <time>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                                        <path d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12h2c0 5.514 4.486 10 10 10s10-4.486 10-10-4.486-10-10-10c-2.777 0-5.287 1.141-7.099 2.977l2.061 2.061-6.962 1.354 1.305-7.013 2.179 2.18c2.172-2.196 5.182-3.559 8.516-3.559 6.627 0 12 5.373 12 12zm-13-6v8h7v-2h-5v-6h-2z" />
                                    </svg>
                                    ৫ দিন আগে |
                                </time>
                                <span>জাতীয়</span>
                                </li>
                                @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 leadAreaRight">
            <div class="card">
                <a href="#">
                    <img src="{{asset('img/default.jpg')}}" alt="নারী আইনজীবী চড়ালেন রিকশাচালককে" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 h-auto card-img-top" style="color: transparent;">
                    <div class="card-body">
                        <h4 class="card-title">নারী আইনজীবী চড়ালেন রিকশাচালককে</h4>
                        <p class="card-text">তুচ্ছ ঘটনায় এক রিকশাচালককে মারধর করেছেন আরতি রাণী ঘোষ নামের এক আইনজীবী। তার বিরুদ্ধে ওই রিকশাচালককে জুতাপেটা করার অভিযোগও উঠেছে। রবিবার (০৭ মে)......</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
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
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="sticky-title"><a href="#">জাতীয়</a></h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card border-0">
                        <a href="#">
                            <img alt="এবার টিটো রহমান ও নাজমুস সাকিবের বিরুদ্ধে সাইবার ট্রাইব্যুনালে ছাত্রলীগ নেতার মামলা" width="800" height="483" class="card-img-top rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                            <div class="card-body">
                                <h4 class="card-title">এবার টিটো রহমান ও নাজমুস সাকিবের বিরুদ্ধে সাইবার ট্রাইব্যুনালে ছাত্রলীগ নেতার মামলা</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 border-end">
                    <ul class="list-group list-group-flush m-0">
                        @for($i = 0; $i < 3; $i++) <li class="list-group-item px-0">
                            <a class="row" href="#">
                                <span class="col pe-0">
                                    <h5>‘পরিকল্পনা ও বাস্তবায়নের আগে অংশীদারদের সমন্বয় জরুরি’</h5>
                                </span>
                                <span class="col-5">
                                    <img alt="‘পরিকল্পনা ও বাস্তবায়নের আগে অংশীদারদের সমন্বয় জরুরি’" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                                </span>
                            </a>
                            </li>
                            @endfor
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="sticky-title"><a href="#">রাজনীতি</a></h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card border-0">
                        <a href="#">
                            <img alt="নির্বাচন এলেই পাইকারি গ্রেপ্তারে ঝাঁপিয়ে পড়ে সরকার : রিজভী" width="800" height="483" class="card-img-top rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                            <div class="card-body">
                                <h4 class="card-title">নির্বাচন এলেই পাইকারি গ্রেপ্তারে ঝাঁপিয়ে পড়ে সরকার : রিজভী</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="list-group list-group-flush m-0">
                        @for($i = 0; $i < 3; $i++) <li class="list-group-item px-0">
                            <a class="row" href="#">
                                <span class="col pe-0">
                                    <h5>তত্ত্বাবধায়ক সরকার নিয়ে বিদেশি কোনো চাপ নেই : কাদের</h5>
                                </span>
                                <span class="col-5">
                                    <img alt="তত্ত্বাবধায়ক সরকার নিয়ে বিদেশি কোনো চাপ নেই : কাদের" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                                </span>
                            </a>
                            </li>
                            @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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