<section class="section">
    <div class="container">
        <h1 class="sticky-title"><a href="#">ইসলামী জীবন</a></h1>
        <div class="row">
            <div class="col-12 col-lg-6">
                <a class="row" href="#">
                    <img alt="আল্লাহর কাছে সবচেয়ে প্রিয় যে শহর" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                    <div class="col-12">
                        <h4 class="m-0 my-3">আল্লাহর কাছে সবচেয়ে প্রিয় যে শহর</h4>
                        <p class="card-text">প্রখ্যাত তাবেঈন হাসান বসরি (রহ.) একজন বিশিষ্ট বুজুর্গ ছিলেন, আধ্যাত্মিক সাধনা ও আল্লাহভীতি অতুলনীয় ছিলেন, সাধারণ ও বিশেষ উভয়ে শ্রেণিতে ব্যাপকভাবে...</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row">
                    @for($i = 0; $i < 2; $i++)
                    <div class="col-6 list-2">
                        <a href="#">
                            <img alt="মহানবী (সা.)-এর সুন্নত অনুসারে ইবাদত করা" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                            <h5 class="m-0 my-2">মহানবী (সা.)-এর সুন্নত অনুসারে ইবাদত করা</h5>
                            <p class="card-text">রাসুল (সা.)-এর সুন্নত অনুযায়ী ইবাদত করা। আল্লাহ বলেন, ‘রাসুল তোম...</p>
                        </a>
                    </div>
                    @endfor
                </div>
                @for($i = 0; $i < 2; $i++)
                <div class="col-12 mt-3 list-3">
                <a class="row" href="#">
                    <div class="col-4 col-md-3">
                        <img alt="মুসলিম বিশ্বের সাংস্কৃতিক রাজধানী মারাকেশ" width="800" height="483" class="rounded w-100 h-auto" style="color: transparent;" src="{{asset('img/default.jpg')}}">
                    </div>
                    <div class="col-8 col-md-9">
                        <h5 class="m-0 mb-2">মুসলিম বিশ্বের সাংস্কৃতিক রাজধানী মারাকেশ</h5>
                        <p class="card-text">২০২৪ সালে মুসলিম বিশ্বের সাংস্কৃতিক রাজধানী হবে মরক্কোর মারাকেশ শহর। গত ২ মে এই ঘোষণা দেন দেশটির যুব, সংস্কৃতি ও যোগাযোগ বিষয়ক মন্ত্রী মেহদি বিনসাইদ।...</p>
                    </div>
                </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>