<section class="section">
    <div class="container">
        <h1 class="sticky-title"><a href="#">সারাবাংলা</a></h1>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title ps-4">জেলার খবর</h5>
                <div class="d-flex justify-content-center">
                    <div class="row col-10">
                        <div class="col">
                            <select name="divisions" class="form-select" aria-label="বিভাগ">
                                <option value="0" selected="">বিভাগ</option>
                                <option value="Dhaka">ঢাকা</option>
                                <option value="Chattagram">চট্টগ্রাম</option>
                                <option value="Rajshahi">রাজশাহী</option>
                                <option value="Khulna">খুলনা</option>
                                <option value="Barisal">বরিশাল</option>
                                <option value="Sylhet">সিলেট</option>
                                <option value="Rangpur">রংপুর</option>
                                <option value="Mymensingh">ময়মনসিংহ</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="districts" class="form-control" aria-label="জেলা">
                                <option value="">জেলা</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="upazilas" class="form-control" aria-label="উপজেলা">
                                <option value="">উপজেলা</option>
                            </select>
                        </div>
                        <div class="col-2"><button class="btn btn-primary">অনুসন্ধান</button></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="card border-0">
                    <a href="#">
                        <img alt="নারী আইনজীবী চড়ালেন রিকশাচালককে" width="800" height="483" class="card-img-top rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                        <div class="card-body">
                            <h4 class="card-title">নারী আইনজীবী চড়ালেন রিকশাচালককে</h4>
                            <p class="card-text">তুচ্ছ ঘটনায় এক রিকশাচালককে মারধর করেছেন আরতি রাণী ঘোষ নামের এক আইনজীবী। তার বিরুদ্ধে ওই রিকশাচালককে ...</p>
                        </div>
                    </a>
                    <hr>
                    <a class="row" href="#">
                        <span class="col-4">
                            <img alt="বিদ্যালয়ের পাশে ইটের পাঁজা, গুঁড়িয়ে দিল প্রশাসন" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                        </span>
                        <span class="col pe-0">
                            <h5>বিদ্যালয়ের পাশে ইটের পাঁজা, গুঁড়িয়ে দিল প্রশাসন</h5>
                            <p>বাগেরহাটের শরণখোলার ধানসাগর ইউনিয়নের একটি প্রাথমিক বিদ্যালয়ের পাশে অবৈধভাবে গড়ে ওঠা ইটের পাঁজা বুলডো...</p>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                <ul class="list-group list-group-flush m-0">
                    @for($i = 0; $i < 7; $i++) <li class="list-group-item px-0">
                        <a class="row" href="#">
                            <span class="col pe-0">
                                <h5>কমিশন প্রতিটা নির্বাচনের ব্যাপারে খুবই সতর্ক : ইসি হাবিব</h5>
                            </span>
                            <span class="col-5"><img alt="কমিশন প্রতিটা নির্বাচনের ব্যাপারে খুবই সতর্ক : ইসি হাবিব" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                            </span>
                        </a>
                        </li>
                        @endfor
                </ul>
            </div>
            <!-- ads start -->
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3">
                <div class="ads mb-3 d-flex justify-content-center">
                </div>
            </div>
            <!-- ads end -->
        </div>
    </div>
</section>