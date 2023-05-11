<div class="container-fluid bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light" id="navbar_top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="logo" style="display: none;">
                    <img src="{{asset('img/logo2.png')}}" alt="Logo" class="img-fluid" style="height: 34px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#right_sided_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <div class="w-100">
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> বাংলাদেশ </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> সারাবাংলা </a></li>
                                    <li><a class="dropdown-item" href="#"> জাতীয় </a></li>
                                    <li><a class="dropdown-item" href="#"> শিক্ষা </a></li>
                                    <li><a class="dropdown-item" href="#"> রাজনীতি </a></li>
                                </ul>
                            </li>
                            <li class="nav-item active"> <a class="nav-link" href="#"> সিটি নির্বাচন ২০২৩ </a> </li>
                            <li class="nav-item"><a class="nav-link" href="#"> বিশ্ব </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> খেলা </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> বিনোদন </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> বাণিজ্য </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> ইসলামী জীবন </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> জীবনযাপন </a></li>
                            <li class="nav-item"><a class="nav-link text-danger" href="#"> ই-পেপার </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> পত্রিকা </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> প্রথম পাতা </a></li>
                                    <li><a class="dropdown-item" href="#"> শেষের পাতা </a></li>
                                    <li><a class="dropdown-item" href="#"> খবর </a></li>
                                    <li><a class="dropdown-item" href="#"> শিল্প বাণিজ্য </a></li>
                                    <li><a class="dropdown-item" href="#"> খেলা </a></li>
                                    <li><a class="dropdown-item" href="#"> দেশে দেশে </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> ফিচার </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> A টু Z </a></li>
                                    <li><a class="dropdown-item" href="#"> টুনটুন টিনটিন </a></li>
                                    <li><a class="dropdown-item" href="#"> ঈদ সংখ্যা ২০২৩ </a></li>
                                    <li><a class="dropdown-item" href="#"> অবসরে </a></li>
                                    <li><a class="dropdown-item" href="#"> শিলালিপি </a></li>
                                    <li><a class="dropdown-item" href="#"> ডাক্তার আছেন </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- navbar btn -->
                    <span class="navbar-text" id="navbar-text-btn">
                        <button class="toggle-Navbar-Btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#right_sided_nav" aria-controls="toggle-Navbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </span>
                    <!-- navbar btn end -->

                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </div>
</div>


<div class="offcanvas offcanvas-end" id="right_sided_nav" aria-modal="true" role="dialog">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">
            <img alt="" loading="lazy" width="250" height="47" decoding="async" data-nimg="1" class="w-50 h-auto" src="{{asset('/')}}img/logo.png" style="color: transparent;">
        </h1>
        <button type="button" id="offcanvasClose" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body pt-0">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">প্রচ্ছদ</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/#">বাংলাদেশ</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">সারাবাংলা</a></li>
                    <li><a class="dropdown-item" href="#">জাতীয়</a></li>
                    <li><a class="dropdown-item" href="#">শিক্ষা</a></li>
                    <li><a class="dropdown-item" href="#">রাজনীতি</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">বিশ্ব</a></li>
            <li class="nav-item"><a class="nav-link" href="#">খেলা</a></li>
            <li class="nav-item"><a class="nav-link" href="#">বিনোদন</a></li>
            <li class="nav-item"><a class="nav-link" href="#">বাণিজ্য</a></li>
            <li class="nav-item"><a class="nav-link" href="#">ইসলামী জীবন</a></li>
            <li class="nav-item"><a class="nav-link" href="#">জীবনযাপন</a></li>
            <li class="nav-item"><a class="nav-link" href="#">শুভসংঘ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">কর্পোরেট কর্নার</a></li>
            <li class="nav-item"><a class="nav-link" href="#">সিটি নির্বাচন ২০২৩</a></li>
            <li class="nav-item"><a class="nav-link" href="#">বিবিধ</a></li>
            <li class="nav-item"><a class="nav-link" href="#">বই মেলা</a></li>
            <li class="nav-item"><a class="nav-link" href="#">ভালোবাসার গল্প</a></li>
            <li class="nav-item"><a class="nav-link" href="#">রিপোর্টার্স ডায়েরি</a></li>
            <li class="nav-item"><a class="nav-link text-danger" target="_blank" href="#">ই-পেপার</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle text-success" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/#">পত্রিকা</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a class="nav-link" href="#">প্রথম পাতা</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">শেষের পাতা</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">খবর</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">শিল্প বাণিজ্য</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">খেলা</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">দেশে দেশে</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">প্রিয় দেশ</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">টেক প্রতিদিন</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">পড়ালেখা</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">সম্পাদকীয়</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">উপ-সম্পাদকীয়</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">রংবেরং</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">দ্বিতীয় রাজধানী</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">ইসলামী জীবন</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="/#">ফিচার</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a class="nav-link text-success" href="#">রঙের মেলা</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">ঈদ সংখ্যা ২০২৩</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">অবসরে</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">শিলালিপি</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">A টু Z</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">ডাক্তার আছেন</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">টুনটুন টিনটিন</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">চাকরি আছে</a></li>
                    <li class="dropdown-item"><a class="nav-link" href="#">লাভ ক্ষতি </a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>