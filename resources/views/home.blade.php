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
<section>
    <div class="container">
        <h1 class="sticky-title"><a href="/video">ভিডিও গ্যালারি</a></h1>
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="row">
                    <div class="col-6 col-lg-12">
                        <div class="pb-video"><a href="/video/448"><img alt="দৃষ্টির সীমানা জুড়ে ফুলের বাগান" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="pb-video-frame mh-auto w-100" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676375484-790128008b8eeb42e14d945eee29abf3.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676375484-790128008b8eeb42e14d945eee29abf3.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676375484-790128008b8eeb42e14d945eee29abf3.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><label class="text-center">দৃষ্টির সীমানা জুড়ে ফুলের বাগান</label><i class="bi bi-play-btn-fill"></i></a></div>
                    </div>
                    <div class="col-6 col-lg-12">
                        <div class="pb-video"><a href="/video/451"><img alt="রাজবাড়ী থেকে ভারত যাচ্ছে স্পেশাল ট্রেন" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="pb-video-frame mh-auto w-100" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676375548-68a87393326464917397e37bce3e0c3a.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676375548-68a87393326464917397e37bce3e0c3a.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676375548-68a87393326464917397e37bce3e0c3a.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><label class="text-center">রাজবাড়ী থেকে ভারত যাচ্ছে স্পেশাল ট্রেন</label><i class="bi bi-play-btn-fill"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 midVideo">
                <div class="col-12">
                    <div class="pb-video"><a href="/video/460"><img alt="ঔষধ ভেজালের রমরমা বাণিজ্য…" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="pb-video-frame-lead mh-auto w-100" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F05%2F06%2Fmedium%2F1683368128-e06d061a77a7bde916b8a91163029d41.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F05%2F06%2Fmedium%2F1683368128-e06d061a77a7bde916b8a91163029d41.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F05%2F06%2Fmedium%2F1683368128-e06d061a77a7bde916b8a91163029d41.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><label class="text-center">ঔষধ ভেজালের রমরমা বাণিজ্য…</label><i class="bi bi-play-btn-fill"></i></a></div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="row">
                    <div class="col-6 col-lg-12">
                        <div class="pb-video"><a href="/video/454"><img alt="প্রেম করার জন্য কোন বিভাগের মানুষকে বেছে নেবেন" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="pb-video-frame mh-auto w-100" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F15%2Fmedium%2F1676478973-5d1ba683fe9d04bcabc3c6269f59206f.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F15%2Fmedium%2F1676478973-5d1ba683fe9d04bcabc3c6269f59206f.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F15%2Fmedium%2F1676478973-5d1ba683fe9d04bcabc3c6269f59206f.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><label class="text-center">প্রেম করার জন্য কোন বিভাগের মানুষকে বেছে নেবেন</label><i class="bi bi-play-btn-fill"></i></a></div>
                    </div>
                    <div class="col-6 col-lg-12">
                        <div class="pb-video"><a href="/video/445"><img alt="'কেউ পাবে, কেউ পাবে না, তা হবে না, তা হবে না' - প্রেম বঞ্চিত সংঘ" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="pb-video-frame mh-auto w-100" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676373549-4f53f4d9f5a1dba1a455649945773d59.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676373549-4f53f4d9f5a1dba1a455649945773d59.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F14%2Fmedium%2F1676373549-4f53f4d9f5a1dba1a455649945773d59.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><label class="text-center">'কেউ পাবে, কেউ পাবে না, তা হবে না, তা হবে না' - প্রেম বঞ্চিত সংঘ</label><i class="bi bi-play-btn-fill"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section9 end -->

<!-- section10 start -->
<section>
    <div class="container">
        <h1 class="sticky-title"><a href="/online/lifestyle">জীবনযাপন</a></h1>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"><a href="/online/lifestyle/2023/05/08/1277978"><img alt="থ্যালাসেমিয়ার কারণ ও লক্ষণ, প্রতিরোধে করণীয়" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="card-img-top rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2F1683533655-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2F1683533655-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2F1683533655-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></a></div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6"><a href="/online/lifestyle/2023/05/08/1277978">
                    <h5 class="m-0 mt-4">থ্যালাসেমিয়ার কারণ ও লক্ষণ, প্রতিরোধে করণীয়</h5>
                    <p class="txt">থ্যালাসেমিয়া রোগীর দেহে পর্যাপ্ত লোহিত রক্ত কণা উৎপাদন হয় না। অ্যানিমিয়ার ফলে অবসাদগ্রস্ততা থেকে শুরু করে অঙ্গহানি পর্যন্ত ঘটতে পারে।

                        কারণ ও ধরন

                        মা অথবা বাবা অথবা মা-বাবা উভয়েরই থ্যালাসেমিয়ার জিন থাকলে বংশানুক্রমে এটি সন্তানের মধ্যে ছড়ায়। তবে এই রোগ ছোঁয়াচে......</p>
                </a>
                <div class="clearfix"></div>
                <hr>
                <div class="row">
                    <div class="col-6 mb-4"><a class="row" href="/online/lifestyle/2023/05/08/1277930">
                            <div class="col-4"><img alt="আজকের রাশিফলে কী আছে? জেনে নিন" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683513451-ec445f9dcb78658499181761603a03f8.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683513451-ec445f9dcb78658499181761603a03f8.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683513451-ec445f9dcb78658499181761603a03f8.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></div>
                            <div class="col-8 ps-0">
                                <h6 class="m-0">আজকের রাশিফলে কী আছে? জেনে নিন</h6>
                            </div>
                        </a></div>
                    <div class="col-6 mb-4"><a class="row" href="/online/lifestyle/2023/05/08/1277869">
                            <div class="col-4"><img alt="বংশগত রোগ থ্যালাসেমিয়া প্রতিরোধ ও ব্যবস্থাপনা" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683486871-53d6c3c4a958727f1fcdc97e607850e5.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683486871-53d6c3c4a958727f1fcdc97e607850e5.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683486871-53d6c3c4a958727f1fcdc97e607850e5.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></div>
                            <div class="col-8 ps-0">
                                <h6 class="m-0">বংশগত রোগ থ্যালাসেমিয়া প্রতিরোধ ও ব্যবস্থাপনা</h6>
                            </div>
                        </a></div>
                    <div class="col-6 mb-4"><a class="row" href="/online/lifestyle/2023/05/08/1277868">
                            <div class="col-4"><img alt="থ্যালাসেমিয়া একটি বংশগত রক্তস্বল্পতাজনিত রোগ" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683486490-537e089023123db1914392e2fe3cb977.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683486490-537e089023123db1914392e2fe3cb977.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fmob%2F1683486490-537e089023123db1914392e2fe3cb977.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></div>
                            <div class="col-8 ps-0">
                                <h6 class="m-0">থ্যালাসেমিয়া একটি বংশগত রক্তস্বল্পতাজনিত রোগ</h6>
                            </div>
                        </a></div>
                    <div class="col-6 mb-4"><a class="row" href="/online/lifestyle/2023/05/07/1277647">
                            <div class="col-4"><img alt="শিশু দিনদিন ফ্যাকাসে হয়ে যাচ্ছে? যা করবেন" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F07%2Fmob%2F1683446161-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F07%2Fmob%2F1683446161-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F07%2Fmob%2F1683446161-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></div>
                            <div class="col-8 ps-0">
                                <h6 class="m-0">শিশু দিনদিন ফ্যাকাসে হয়ে যাচ্ছে? যা করবেন</h6>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section10 end -->

<!-- section11 start -->
<section>
    <div class="container">
        <h1 class="sticky-title"><a href="/online/viral">ভাইরাল</a></h1>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                <div class="card border-0"><a href="/online/viral/2023/04/03/1267523"><img alt="অল্পবিস্তর ২৭ দেশের ভাষা জানেন ভাইরাল কালু" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="card-img-top rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F03%2Fthumbnails%2F1680514511-32a27af8d54906c77e818a6b79f33480.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F03%2Fthumbnails%2F1680514511-32a27af8d54906c77e818a6b79f33480.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F03%2Fthumbnails%2F1680514511-32a27af8d54906c77e818a6b79f33480.jpg&amp;w=1920&amp;q=100" style="color: transparent;">
                        <div class="card-body ps-0">
                            <h4 class="card-title">অল্পবিস্তর ২৭ দেশের ভাষা জানেন ভাইরাল কালু</h4>
                            <p class="card-text">অল্পবিস্তর ২৭টি দেশের ভাষা জানেন আলোচিত আব্দুল্লাহ কালু ওরফে ভাইরাল কালু। পর্যটক হয়রানির অভিযোগে কাল...</p>
                        </div>
                    </a>
                    <ul class="list-group list-group-flush m-0">
                        <li class="list-group-item px-0"><a href="/online/viral/2023/04/03/1267518">
                                <h5>ক্ষমা চেয়েও পার পেলেন না ভাইরাল কালু</h5>
                            </a></li>
                        <li class="list-group-item px-0"><a href="/online/viral/2023/03/19/1262646">
                                <h5>ভাইরাল হতে বিশ্ববিদ্যালয় শিক্ষার্থীদের ভুয়া বিয়ে!</h5>
                            </a></li>
                        <li class="list-group-item px-0"><a href="/online/viral/2023/02/06/1244430">
                                <h5>ঢাকা বিশ্ববিদ্যালয়ের সেই রনি এখন চা বিক্রেতা!</h5>
                            </a></li>
                        <li class="list-group-item px-0"><a href="/online/viral/2022/12/19/1214313">
                                <h5>এলিয়েনদের মাধ্যমে মেসিদের বিশ্বকাপ জিতিয়েছেন, দাবি যুবকের</h5>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card border-0"><a href="/online/viral/2023/04/08/1269316"><img alt="মাকে কাঁধে নিয়ে তাওয়াফ, ভিডিও ভাইরাল" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="card-img-top rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F08%2F1680967260-619829c864c9dc828d2c108734134e76.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F08%2F1680967260-619829c864c9dc828d2c108734134e76.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F08%2F1680967260-619829c864c9dc828d2c108734134e76.jpg&amp;w=1920&amp;q=100" style="color: transparent;">
                        <div class="card-body">
                            <h4 class="card-title">মাকে কাঁধে নিয়ে তাওয়াফ, ভিডিও ভাইরাল</h4>
                            <p class="card-text">পবিত্র কাবাঘর প্রদক্ষিণ (তাওয়াফ) করছেন এক ব্যক্তি। তার কাঁধে বসে আছেন একজন বৃদ্ধা। দুজনের মুখেই হাসি...</p>
                        </div>
                    </a>
                    <hr><a class="row" href="/online/viral/2023/04/03/1267565"><span class="col-4"><img alt="অবশেষে মুক্তি পেলেন ভাইরাল কালু" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded w-100 h-auto" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F03%2Fthumbnails%2F1680522956-c655ea123682698a8981977c4a74c70c.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F03%2Fthumbnails%2F1680522956-c655ea123682698a8981977c4a74c70c.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F04%2F03%2Fthumbnails%2F1680522956-c655ea123682698a8981977c4a74c70c.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span><span class="col pe-0">
                            <h5>অবশেষে মুক্তি পেলেন ভাইরাল কালু</h5>
                            <p>অস্ট্রেলিয়ান ব্লগারকে উত্ত্যক্ত করার অভিযোগে আটক দোভাষী আব্দুল্লাহ কালুকে ২০০ টাকা অর্থদণ্ড, অনাদায়ে...</p>
                        </span></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                <ul class="list-group list-group-flush m-0">
                    <li class="list-group-item px-0"><a href="/online/viral/2022/12/06/1210384">
                            <h5>আর্জেন্টাইন যুবক জন্মদিনে কেটেছেন ‘বাংলান্টিনা’ কেক</h5>
                        </a></li>
                    <li class="list-group-item px-0"><a href="/online/viral/2022/11/23/1206301">
                            <h5>ভাঙা পা নিয়ে একা একাই হাসপাতালে এলো বিড়াল, ভিডিও ভাইরাল</h5>
                        </a></li>
                </ul>
                <div class="ads mb-2 d-flex justify-content-center">
                    <div class="mb-2 desktopView">
                        <div ad-position="desktop-secion-ad-20" class="ad-300">
                            <div class="ads mb-2 d-flex justify-content-center" ad-id="22">
                                <div class="desktop-ads">
                                    <div class="adunitContainer">
                                        <div class="adBox" id="JS_DH_SEC_MR_12" data-google-query-id="CLjV-8CK5v4CFTMj1QoduGsDXQ">
                                            <div id="google_ads_iframe_21700576687/JS_DH_SEC_MR_12_1__container__" style="border: 0pt none; width: 300px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ads d-flex justify-content-center">
                    <div class="mb-2 desktopView">
                        <div ad-position="desktop-secion-ad-21" class="ad-300">
                            <div class="ads mb-2 d-flex justify-content-center" ad-id="23">
                                <div class="desktop-ads">
                                    <div class="adunitContainer">
                                        <div class="adBox" id="JS_DH_SEC_MR_13" data-google-query-id="CLnV-8CK5v4CFTMj1QoduGsDXQ">
                                            <div id="google_ads_iframe_21700576687/JS_DH_SEC_MR_13_1__container__" style="border: 0pt none; width: 300px; height: 0px;"></div>
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
<!-- section11 end -->


<!-- section12 start -->
<section>
    <div class="container">
        <h1 class="sticky-title"><a href="/online/miscellaneous">বিবিধ</a></h1>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                <ul class="list-unstyled row">
                    <li class="col-12 col-md-6 py-2"><a class="row" href="/online/miscellaneous/2023/05/08/1277969"><span class="col-3"><img alt="ধানমণ্ডি লেকে পদ্মফুলের আড়ালে ভেসে উঠল লাশ!" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded-circle w-100 mh-auto" srcset="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fthumbnails%2F1683531294-673edc654846a59d3f165b5e022d1844.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fthumbnails%2F1683531294-673edc654846a59d3f165b5e022d1844.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F08%2Fthumbnails%2F1683531294-673edc654846a59d3f165b5e022d1844.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span>
                            <h5 class="col-9 m-0">ধানমণ্ডি লেকে পদ্মফুলের আড়ালে ভেসে উঠল লাশ!</h5>
                        </a></li>
                    <li class="col-12 col-md-6 py-2"><a class="row" href="/online/miscellaneous/2023/05/07/1277613"><span class="col-3"><img alt="লটারিতে গৃহহীন নারীর বাজিমাত" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded-circle w-100 mh-auto" srcset="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F07%2Fthumbnails%2F1683430080-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F07%2Fthumbnails%2F1683430080-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F07%2Fthumbnails%2F1683430080-9cf928308dfc0614b424cdc5ae37b938.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span>
                            <h5 class="col-9 m-0">লটারিতে গৃহহীন নারীর বাজিমাত</h5>
                        </a></li>
                    <li class="col-12 col-md-6 py-2"><a class="row" href="/online/miscellaneous/2023/05/05/1277048"><span class="col-3"><img alt="ভূমিকম্পের উৎপত্তি ঢাকার দোহারে ভূপৃষ্ঠের ১০ কিলোমিটার গভীরে" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded-circle w-100 mh-auto" srcset="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F05%2Fthumbnails%2F1683275260-9c4fc9f6805b3226fca7dc9dee55cc8f.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F05%2Fthumbnails%2F1683275260-9c4fc9f6805b3226fca7dc9dee55cc8f.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F05%2Fthumbnails%2F1683275260-9c4fc9f6805b3226fca7dc9dee55cc8f.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span>
                            <h5 class="col-9 m-0">ভূমিকম্পের উৎপত্তি ঢাকার দোহারে ভূপৃষ্ঠের ১০ কিলোমিটার গভীরে</h5>
                        </a></li>
                    <li class="col-12 col-md-6 py-2"><a class="row" href="/online/miscellaneous/2023/05/05/1276999"><span class="col-3"><img alt="ফেসবুক লাইভে আরাভ খান : ৩৭ দিন জেল খেটে বেরোলাম, বড় বড় মাফিয়া পেয়েছি" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded-circle w-100 mh-auto" srcset="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F05%2Fthumbnails%2F1683250175-95d2eecf0b37ebea12adc51873c0dd07.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F05%2Fthumbnails%2F1683250175-95d2eecf0b37ebea12adc51873c0dd07.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F05%2Fthumbnails%2F1683250175-95d2eecf0b37ebea12adc51873c0dd07.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span>
                            <h5 class="col-9 m-0">ফেসবুক লাইভে আরাভ খান : ৩৭ দিন জেল খেটে বেরোলাম, বড় বড় মাফিয়া পেয়েছি</h5>
                        </a></li>
                    <li class="col-12 col-md-6 py-2"><a class="row" href="/online/miscellaneous/2023/05/04/1276774"><span class="col-3"><img alt="থানায় আসা নারীকে দিয়ে শরীর ম্যাসাজ, পাটনার পুলিশ কর্মকর্তা বরখাস্ত" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded-circle w-100 mh-auto" srcset="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F04%2Fthumbnails%2F1683204085-548d79c306e182995f6ba6c915a2a1ba.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F04%2Fthumbnails%2F1683204085-548d79c306e182995f6ba6c915a2a1ba.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F04%2Fthumbnails%2F1683204085-548d79c306e182995f6ba6c915a2a1ba.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span>
                            <h5 class="col-9 m-0">থানায় আসা নারীকে দিয়ে শরীর ম্যাসাজ, পাটনার পুলিশ কর্মকর্তা বরখাস্ত</h5>
                        </a></li>
                    <li class="col-12 col-md-6 py-2"><a class="row" href="/online/miscellaneous/2023/05/04/1276702"><span class="col-3"><img alt="ঢাকা উত্তরের ‘চিফ হিট অফিসার’ বুশরা" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="rounded-circle w-100 mh-auto" srcset="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F04%2Fthumbnails%2F1683184672-becfd3539312a86dc07a3fb15f71d9af.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F04%2Fthumbnails%2F1683184672-becfd3539312a86dc07a3fb15f71d9af.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=https%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fnews_images%2F2023%2F05%2F04%2Fthumbnails%2F1683184672-becfd3539312a86dc07a3fb15f71d9af.jpg&amp;w=1920&amp;q=100" style="color: transparent;"></span>
                            <h5 class="col-9 m-0">ঢাকা উত্তরের ‘চিফ হিট অফিসার’ বুশরা</h5>
                        </a></li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-4 col-xl-4">
                <div class="ads d-flex justify-content-center">
                    <div class="mb-2 desktopView">
                        <div ad-position="desktop-secion-ad-22" class="ad-300">
                            <div class="ads mb-2 d-flex justify-content-center" ad-id="24">
                                <div class="desktop-ads">
                                    <div class="adunitContainer">
                                        <div class="adBox" id="JS_DH_SEC_MR_14" data-google-query-id="CLrV-8CK5v4CFTMj1QoduGsDXQ">
                                            <div id="google_ads_iframe_21700576687/JS_DH_SEC_MR_14_1__container__" style="border: 0pt none; width: 300px; height: 0px;"></div>
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
<!-- section12 end -->


<!-- section13 start -->
<section class="section section-10 photogallery">
    <div class="container">
        <h1 class="sticky-title"><a href="/photo">ফটো গ্যালারি</a></h1>
        <div class="gallery">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="row mt-2 imgList smallPhoto">
                        <div class="col-6 col-md-6 col-lg-12 mb-4"><a href="/photo/458"><img alt="নজরকাড়া লাল সোনাইল" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 mh-auto shadow-1-strong rounded" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F28%2Fmedium%2F1682678044-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F28%2Fmedium%2F1682678044-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F28%2Fmedium%2F1682678044-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><span>নজরকাড়া লাল সোনাইল</span></a></div>
                        <div class="col-6 col-md-6 col-lg-12 mb-4"><a href="/photo/457"><img alt="কচুরিপানায় ছেয়ে গেছে বুড়িগঙ্গার তীর" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 mh-auto shadow-1-strong rounded" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F28%2Fmedium%2F1682673937-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F28%2Fmedium%2F1682673937-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F28%2Fmedium%2F1682673937-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><span>কচুরিপানায় ছেয়ে গেছে বুড়িগঙ্গার তীর</span></a></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 morePhoto"><a class="leadImage" href="/photo/459"><img alt="বর্ণিল দেয়ালচিত্র" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 mh-auto shadow-1-strong rounded" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F05%2F03%2Fmedium%2F1683108763-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F05%2F03%2Fmedium%2F1683108763-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F05%2F03%2Fmedium%2F1683108763-f3ccdd27d2000e3f9255a7e3e2c48800.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><span>বর্ণিল দেয়ালচিত্র</span></a></div>
                <div class="col-12 col-lg-3">
                    <div class="row mt-2 imgList smallPhoto">
                        <div class="col-6 col-md-6 col-lg-12 mb-4"><a href="/photo/456"><img alt="শপথ নিলেন নতুন রাষ্ট্রপতি" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 mh-auto shadow-1-strong rounded" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F24%2Fmedium%2F1682329670-799bad5a3b514f096e69bbc4a7896cd9.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F24%2Fmedium%2F1682329670-799bad5a3b514f096e69bbc4a7896cd9.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F04%2F24%2Fmedium%2F1682329670-799bad5a3b514f096e69bbc4a7896cd9.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><span>শপথ নিলেন নতুন রাষ্ট্রপতি</span></a></div>
                        <div class="col-6 col-md-6 col-lg-12 mb-4"><a href="/photo/418"><img alt="আলো ছড়ালেন নোরা ফাতেহি" loading="lazy" width="800" height="483" decoding="async" data-nimg="1" class="w-100 mh-auto shadow-1-strong rounded" srcset="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F11%2Fmedium%2F1676118112-baeb3e87d78fb711ad0526ff04e611e2.jpg&amp;w=828&amp;q=100 1x, /_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F11%2Fmedium%2F1676118112-baeb3e87d78fb711ad0526ff04e611e2.jpg&amp;w=1920&amp;q=100 2x" src="/_next/image?url=http%3A%2F%2Fcdn.kalerkantho.com%2Fpublic%2Fgallery%2F2023%2F02%2F11%2Fmedium%2F1676118112-baeb3e87d78fb711ad0526ff04e611e2.jpg&amp;w=1920&amp;q=100" style="color: transparent;"><span>আলো ছড়ালেন নোরা ফাতেহি</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section13 end -->

<!-- section14 start -->
<section class="section section-1 section-astrology">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1 class="sticky-title"><a href="/#">আজকের রাশিফল</a></h1>
                <ul class="m-0 astrology">
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে বৃষ রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="বৃষ : অন্যের সহযোগিতা পাবেন। ব্যবসায় বাড়তি চাপ আসতে পারে। কর্মক্ষেত্রে কিছুটা জটিলতা দেখা দিতে পারে। উন্নতির ক্ষেত্রে অন্যের সহযোগিতা পাবেন। প্রিয়জনের অসুস্থতায় উদ্বেগ থাকবে। সময়োপযোগী সিদ্ধান্ত নিন।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Taurus-icon.svg" style="color: transparent;"></figure>
                        <h5>বৃষ</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে মিথুন রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="মিথুন : জনসংযোগ ও প্রচারমূলক কাজে উন্নতি। ব্যবসায় অংশীদারের সঙ্গে সম্পর্কের উন্নয়ন ঘটবে। কর্মক্ষেত্রে উন্নতির যোগ। প্রেমে বাধা মিটবে। আবেগের বশে কাজ করবেন না। প্রয়োজনে সাহসী পদক্ষেপ নিতে হবে।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Gemini-icon.svg" style="color: transparent;"></figure>
                        <h5>মিথুন</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে কর্কট রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="কর্কট : সকাল থেকে একটু ভালো, একটু খারাপ চলতে পারে। কাজের প্রতি অনীহা আসতে পারে। প্রতিকূল পরিস্থিতি হঠাৎ পরিবর্তনের ইঙ্গিত রয়েছে। আপনার শক্তি ও উদ্যম আপনার অনুকূলে ফলাফল আনতে পারে।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Cancer-icon.svg" style="color: transparent;"></figure>
                        <h5>কর্কট</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে সিংহ রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="সিংহ : অপ্রত্যাশিত প্রাপ্তি ঘটতে পারে। নতুন অভিজ্ঞতা কাজে লাগবে। অর্থের ঘর শুভ। ভবিষ্যতের জন্য রঙিন স্বপ্ন দেখতে পারেন। আপনার চারপাশের মানুষের সম্প্রসারিত সমর্থন আপনাকে খুশি করবে।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Leo-icon.svg" style="color: transparent;"></figure>
                        <h5>সিংহ</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে কন্যা রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="কন্যা : নিজ পরিবারের সদস্যদের প্রয়োজন আজ আপনার কাছে অগ্রাধিকার পাবে। প্রত্যাশা পূরণে অন্যের সমর্থন পাবেন। সন্তানের কারণে ব্যয় বাড়তে পারে। আপনার প্রফুল্ল স্বভাব অন্যদের খুশি করবে।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Virgo-icon.svg" style="color: transparent;"></figure>
                        <h5>কন্যা</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে তুলা রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="তুলা : ভালো কোনো যোগাযোগে আশাবাদী হয়ে উঠবেন। বাধা-বিঘ্ন অনেকটা দূর হবে। আগের তুলনায় মানসিক চাপ কমবে। ব্যাবসায়িক লেনদেন ও কেনাকাটা শুভ। ভ্রমণের পরিকল্পনায় অগ্রগতি হবে।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Libra-icon.svg" style="color: transparent;"></figure>
                        <h5>তুলা</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে বৃশ্চিক রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="বৃশ্চিক : অর্থপ্রাপ্তির সুযোগ আসতে পারে। ব্যবসায় উন্নতির যোগ আছে। নতুন কিছু করার সুযোগ আসবে। কোনো বন্ধু বা আত্মীয়কে সাহায্য করতে হতে পারে। যাদের ভালোবাসেন তাদের সঙ্গে ভুল-বোঝাবুঝি মিটিয়ে ফেলার উদ্যোগ নিন।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Scorpio-icon.svg" style="color: transparent;"></figure>
                        <h5>বৃশ্চিক</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে ধনু রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="ধনু : কাজে সুনাম ও প্রতিপত্তি বৃদ্ধি পাবে। কোনো ব্যতিক্রমী বিষয়ের প্রতি আগ্রহ বাড়তে পারে। কোনো উদ্যোগ নিলে বৈষয়িকভাবে লাভবান হওয়ার সুযোগ পাবেন। ভালো ব্যবহার দিয়ে অন্যকে প্রভাবিত করতে পারবেন।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Sagittarius-icon.svg" style="color: transparent;"></figure>
                        <h5>ধনু</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে মকর রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="মকর : আজ কিছুটা মানসিক চাপ থাকতে পারে। প্রত্যাশিত অর্থপ্রাপ্তিতে বাধা। ব্যয় বাড়বে। কোনো কিছু নিয়ে সিদ্ধান্তহীনতায় ভুগতে পারেন। পুরনো সমস্যা কিছুটা মিটবে। ইতিবাচক মনোভাব নিয়ে কাজ করুন। মন ভালো রাখুন।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Capricorn-icon.svg" style="color: transparent;"></figure>
                        <h5>মকর</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে কুম্ভ রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="কুম্ভ : কোনো গুরুত্বপূর্ণ কাজে হাত দিতে পারেন। উপার্জন বৃদ্ধির নতুন কোনো পথ খুঁজে পাবেন। প্রত্যাশার চেয়ে আরো ভালো কিছু পেতে পারেন। প্রিয়সঙ্গ আনন্দ দেবে। নিজের ভালো লাগার জন্য কাজ করতে হবে।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Aquarius-icon.svg" style="color: transparent;"></figure>
                        <h5>কুম্ভ</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে মীন রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="মীন : কাজে উন্নতির যোগ প্রবল। ব্যবসায় নতুন সম্ভাবনার সৃষ্টি হতে পারে। ঊর্ধ্বতন কর্তৃপক্ষের সঙ্গে সুসম্পর্ক থাকবে। আয় বাড়বে। সুদূরপ্রসারী লক্ষ্য নিয়ে এগোতে হবে। লক্ষ্যে স্থির থাকলে সুফল পাবেন।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Pisces-icon.svg" style="color: transparent;"></figure>
                        <h5>মীন</h5>
                        </p>
                    </li>
                    <li>
                        <p data-title="আজকের দিনটা কেমন যাবে মেষ রাশির <time>(০৮ মে, ২০২৩)</time>" data-content="মেষ : শিক্ষার্থীদের পড়াশোনায় শুভ পরিবর্তন হবে। কাজে দায়িত্ব বাড়বে। কর্মস্থলে কর্তৃত্ব বৃদ্ধি পাবে। পরিবেশ পক্ষে থাকবে। যেকোনো বিষয়ে দ্রুত সিদ্ধান্ত না নেওয়াই ভালো। পরিস্থিতির সঙ্গে নিজেকে মানিয়ে চলুন।">
                        <figure><img alt="মেষ" loading="lazy" width="300" height="300" decoding="async" data-nimg="1" class="w-auto h-auto" src="/img/Aries-icon.svg" style="color: transparent;"></figure>
                        <h5>মেষ</h5>
                        </p>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <div class="card card-tooltip mt-2">
                    <div class="card-header">আজকের দিনটা কেমন যাবে মেষ রাশির <time>(০৮ মে, ২০২৩)</time></div>
                    <div class="card-body">
                        <p class="card-text">বৃষ : অন্যের সহযোগিতা পাবেন। ব্যবসায় বাড়তি চাপ আসতে পারে। কর্মক্ষেত্রে কিছুটা জটিলতা দেখা দিতে পারে। উন্নতির ক্ষেত্রে অন্যের সহযোগিতা পাবেন। প্রিয়জনের অসুস্থতায় উদ্বেগ থাকবে। সময়োপযোগী সিদ্ধান্ত নিন।</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <h1 class="sticky-title"><a href="/#">অনলাইন জরিপ</a></h1>
                <div class="poll-wrapper">
                    <h2>আজকের প্রশ্ন </h2>
                    <hr>
                    <p>আওয়ামী লীগ সরকার ক্ষমতায় থাকলে নিরপেক্ষ নির্বাচন সম্ভব হবে না। বিএনপি মহাসচিব মির্জা ফখরুল ইসলাম আলমগীরের এ বক্তব্যের সঙ্গে আপনি একমত?</p>
                    <div>
                        <div class="poll-area"><input type="hidden" name="id" value="190"><input type="checkbox" name="poll" id="opt-1" value="1"><input type="checkbox" name="poll" id="opt-2" value="2"><input type="checkbox" name="poll" id="opt-3" value="3"><label for="opt-1" class="opt-1">
                                <div class="row">
                                    <div class="column"><span class="circle"></span><span class="text">হ্যাঁ</span></div>
                                </div>
                            </label><label for="opt-2" class="opt-2">
                                <div class="row">
                                    <div class="column"><span class="circle"></span><span class="text">না</span></div>
                                </div>
                            </label><label for="opt-3" class="opt-3">
                                <div class="row">
                                    <div class="column"><span class="circle"></span><span class="text">মতামত নেই</span></div>
                                </div>
                            </label><button type="submit" class="btn btn-secondary w-100">Vote</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section14 end -->
@endsection