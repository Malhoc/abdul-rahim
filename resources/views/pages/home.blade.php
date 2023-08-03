@extends('layouts.master')
@section('content')
<section id="portfolio" class="portfolio portfolio-4col pt-0 pb-0 bg-white">
    <div class=" pr-0 pl-0" >
        <div id="portfolio-all" class="row-no-padding" >
            <div class="carousel portfolio--slider "  data-slide="1" data-slide-rs="1" data-autoplay="true"
                data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                <!-- Portfolio #1 -->
                <div class="col-xs-12 col-sm-12 col-md-12 portfolio-item ">
                    <div class="portfolio--img">
                        <video autoplay  id="video1">
                            <source src="{{ asset('assets') }}/images/sliders/slide-bg/golden-sky.mp4">
                        </video>
                        {{-- <video src="{{ asset('assets') }}/images/sliders/slide-bg/golden-sky.mp4" autoplay ></video> --}}

                    </div><!-- .Portfolio-img end -->
                </div><!-- . portfolio-item end -->

                <!-- Portfolio #2 -->
                <div class="col-xs-12 col-sm-12 col-md-12 portfolio-item">
                    <div class="portfolio--img">
                        <video autoplay>
                            <source src="{{ asset('assets') }}/images/sliders/slide-bg/beach.mp4" type="video/mp4">
                        </video>
                        {{-- <video src="{{ asset('assets') }}/images/sliders/slide-bg/beach.mp4" autoplay ></video> --}}

                    </div><!-- .Portfolio-img end -->
                </div><!-- . portfolio-item end -->

                <!-- Portfolio #3 -->
                <div class="col-xs-12 col-sm-12 col-md-12 portfolio-item">
                    <div class="portfolio--img">
                        <video autoplay muted id="video1">
                            <source src="{{ asset('assets') }}/images/sliders/slide-bg/motorway.mp4">
                        </video>
                        {{-- <video src="{{ asset('assets') }}/images/sliders/slide-bg/motorway.mp4" autoplay ></video> --}}
                    </div><!-- .Portfolio-img end -->
                </div><!-- . portfolio-item end -->

            </div>

        </div><!-- .row end -->
    </div><!-- .container end -->
</section>
    <!-- Hero Section
                                ====================================== -->

    <!-- #hero end -->
    {{-- Ummah's Feature Start --}}

    {{-- <section id="calendar" class="calendar section-2 bg-overlay bg-overlay-dark4 ">
        <div class="bg-section ">
            <img src="assets/images/background/bg-12.jpg" alt="bg">
        </div>
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-2 mb-60 text--center">
                        <p class="heading--subtitle text-theme">Get Ready</p>
                        <h2 class="heading--title text-white">Conference Daily Program</h2>
                        <div class="divider--line divider--center divider--gray"></div>
                    </div>
                </div><!-- .col-md-8 end -->
            </div><!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                   <div class="calendar-panel">
                    <div class="calendar--heading">
                        <div class="calendar--icon">
                            <i class="lnr lnr-briefcase"></i>
                        </div>
                        <h2>Social Media Conference</h2>
                            <p>Feb 22, 2017</p>
                        <div class="divider--line"></div>

                    </div><!-- .calendar--heading end -->
                    <div class="calendar--body">
                    <div class="calendar--date">
                        <h6>12:00 - 14:30</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    <div class="calendar--date">
                        <h6>15:00 - 19:00</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    <div class="calendar--date">
                        <h6>21:00 - 00:00</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    </div><!-- .calendar--body end -->
                    </div><!-- .calendar-panel end -->

                </div><!-- .col-md-4 end -->

                <div class="col-xs-12 col-sm-4 col-md-4">
                   <div class="calendar-panel">
                    <div class="calendar--heading">
                        <div class="calendar--icon">
                            <i class="lnr lnr-bullhorn"></i>
                        </div>
                        <h2>Branding Conference</h2>
                            <p>Feb 24, 2017</p>
                        <div class="divider--line"></div>
                    </div><!-- .calendar--heading end -->
                    <div class="calendar--body">
                    <div class="calendar--date">
                        <h6>12:00 - 14:30</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    <div class="calendar--date">
                        <h6>15:00 - 19:00</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    <div class="calendar--date">
                        <h6>21:00 - 00:00</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    </div><!-- .calendar--body end -->
                    </div><!-- .calendar-panel end -->
                </div><!-- .col-md-4 end -->

                <div class="col-xs-12 col-sm-4 col-md-4">
                   <div class="calendar-panel">
                    <div class="calendar--heading">
                        <div class="calendar--icon">
                            <i class="lnr lnr-chart-bars"></i>
                        </div>
                        <h2>Marketing Conference</h2>
                            <p>Feb 26, 2017</p>
                        <div class="divider--line"></div>
                    </div><!-- .calendar--heading end -->
                    <div class="calendar--body">
                    <div class="calendar--date">
                        <h6>12:00 - 14:30</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    <div class="calendar--date">
                        <h6>15:00 - 19:00</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    <div class="calendar--date">
                        <h6>21:00 - 00:00</h6>
                        <p>Collecting a wide array of samples and inspiration is a great way to start your next awesome project. At its core, every brand has something.</p>
                    </div><!-- .date end -->
                    </div><!-- .calendar--body end -->
                    </div><!-- .calendar-panel end -->

                </div><!-- .col-md-4 end -->

            </div><!-- .row end -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="text-center mt-10">
                        <a class="btn btn--white btn--bordered" href="#">Download PDF</a>
                    </div>
                </div><!-- .col-md-12 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section><!-- #calendar end --> --}}
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12  col-md-12">
                    <div class="collection_info">
                        <div class="colindextitle incomplete">

                            <div class="english">Sunan Abi Dawud</div>
                            <div class=clear></div>
                        </div>
                        <div class="colindextitle">
                            Sunan Abi Dawud is a collection of hadith compiled by Imam Abu Dawud Sulayman ibn al-Ash'ath
                            as-Sijistani (rahimahullah). It is widely considered to be among the six canonical collections
                            of hadith (Kutub as-Sittah) of the Sunnah of the Prophet (ﷺ). It consists of 5274 ahadith in 43
                            books.
                            <br><br><a href="/abudawud/letter">Letter from Imam Abu Dawud to the people of Makkah
                                explaining his book, terms he uses, and his methodology.</a><br>


                        </div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Sunnah Abi Dawud Collection</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Purification (Kitab Al-Taharah)</td>
                                    <td> كتاب الطهارة </td>
                                    <td> 1 &ensp;to &ensp; 390 </td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td> Prayer (Kitab Al-Salat) </td>
                                    <td>كتاب الصلاة </td>
                                    <td> 391 &ensp;to &ensp; 1160 </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>The Book Of The Prayer For Rain (Kitab al-Istisqa')</td>
                                    <td>كتاب الاستسقاء</td>
                                    <td> 1161 &ensp;to &ensp; 1197 </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Prayer (Kitab Al-Salat): Detailed Rules of Law about the Prayer during Journey</td>
                                    <td>كتاب صلاة السفر</td>
                                    <td> 1198 &ensp;to &ensp; 1249 </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Prayer (Kitab Al-Salat): Voluntary Prayers</td>
                                    <td>كتاب التطوع</td>
                                    <td> 1250 &ensp;to &ensp; 1370 </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Prayer (Kitab Al-Salat): Detailed Injunctions about Ramadan</td>
                                    <td>كتاب شهر رمضان</td>
                                    <td> 1371 &ensp;to &ensp; 1400 </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td> Prayer (Kitab Al-Salat): Prostration while reciting the Qur'an </td>
                                    <td>كتاب سجود القرآن</td>
                                    <td> 1401 &ensp;to &ensp; 1415 </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td> Prayer (Kitab Al-Salat): Detailed Injunctions about Witr </td>
                                    <td>كتاب الوتر </td>
                                    <td> 1416 &ensp;to &ensp; 1555 </td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td> Zakat (Kitab Al-Zakat) </td>
                                    <td> كتاب الزكاة </td>
                                    <td> 1556 &ensp;to &ensp; 1700 </td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td> The Book of Lost and Found Items </td>
                                    <td> كتاب اللقطة </td>
                                    <td> 1701 &ensp;to &ensp; 1720 </td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>The Rites of Hajj (Kitab Al-Manasik Wa'l-Hajj)</td>
                                    <td> كتاب المناسك </td>
                                    <td> 1721 &ensp;to &ensp; 2045 </td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Marriage (Kitab Al-Nikah)</td>
                                    <td>كتاب النكاح </td>
                                    <td> 2046 &ensp;to &ensp; 2174 </td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Divorce (Kitab Al-Talaq)</td>
                                    <td> كتاب الطلاق </td>
                                    <td> 2175 &ensp;to &ensp; 2312 </td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td> Fasting (Kitab Al-Siyam) </td>
                                    <td> كتاب الصوم </td>
                                    <td> 2313 &ensp;to &ensp; 2476 </td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td> Jihad (Kitab Al-Jihad) </td>
                                    <td> كتاب الجهاد </td>
                                    <td> 2477 &ensp;to &ensp; 2787 </td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td> Sacrifice (Kitab Al-Dahaya) </td>
                                    <td> كتاب الضحايا </td>
                                    <td> 2788 &ensp;to &ensp; 2843 </td>
                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td> Game (Kitab Al-Said) </td>
                                    <td> كتاب الصيد </td>
                                    <td> 2844 &ensp;to &ensp; 2861 </td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td> Wills (Kitab Al-Wasaya) </td>
                                    <td> كتاب الوصايا </td>
                                    <td> 2862 &ensp;to &ensp; 2884 </td>
                                </tr>
                                <tr>
                                    <th scope="row">19</th>
                                    <td>Shares of Inheritance (Kitab Al-Fara'id)</td>
                                    <td> كتاب الفرائض </td>
                                    <td> 2885 &ensp;to &ensp; 2927 </td>
                                </tr>
                                <tr>
                                    <th scope="row">20</th>
                                    <td> Tribute, Spoils, and Rulership (Kitab Al-Kharaj, Wal-Fai' Wal-Imarah) </td>
                                    <td> كتاب الخراج والإمارة والفىء </td>
                                    <td> 2928 &ensp;to &ensp; 3088 </td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td> Funerals (Kitab Al-Jana'iz) </td>
                                    <td> كتاب الجنائز </td>
                                    <td> 3089 &ensp;to &ensp; 3241 </td>
                                </tr>
                                <tr>
                                    <th scope="row">22</th>
                                    <td> Oaths and Vows (Kitab Al-Aiman Wa Al-Nudhur) </td>
                                    <td> كتاب الأيمان والنذور </td>
                                    <td> 3242 &ensp;to &ensp; 3325 </td>
                                </tr>
                                <tr>
                                    <th scope="row">23</th>
                                    <td> Commercial Transactions (Kitab Al-Buyu) </td>
                                    <td> كتاب البيوع </td>
                                    <td> 3326 &ensp;to &ensp; 3415 </td>
                                </tr>
                                <tr>
                                    <th scope="row">24</th>
                                    <td> Wages (Kitab Al-Ijarah) </td>
                                    <td> كتاب الإجارة </td>
                                    <td> 3416 &ensp;to &ensp; 3570 </td>
                                </tr>
                                <tr>
                                    <th scope="row">25</th>
                                    <td> The Office of the Judge (Kitab Al-Aqdiyah) </td>
                                    <td> كتاب الأقضية </td>
                                    <td> 3571 &ensp;to &ensp; 3640 </td>
                                </tr>
                                <tr>
                                    <th scope="row">26</th>
                                    <td>Knowledge (Kitab Al-Ilm)</td>
                                    <td> كتاب العلم </td>
                                    <td> 3641 &ensp;to &ensp; 3668 </td>
                                </tr>
                                <tr>
                                    <th scope="row">27</th>
                                    <td> Drinks (Kitab Al-Ashribah) </td>
                                    <td> كتاب الأشربة </td>
                                    <td> 3669 &ensp;to &ensp; 3735 </td>
                                </tr>
                                <tr>
                                    <th scope="row">28</th>
                                    <td>Foods (Kitab Al-At'imah)</td>
                                    <td>كتاب الأطعمة </td>
                                    <td> 3736 &ensp;to &ensp; 3854 </td>
                                </tr>
                                <tr>
                                    <th scope="row">29</th>
                                    <td> Medicine (Kitab Al-Tibb) </td>
                                    <td> كتاب الطب </td>
                                    <td> 3855 &ensp;to &ensp; 3903 </td>
                                </tr>
                                <tr>
                                    <th scope="row">30</th>
                                    <td> Divination and Omens (Kitab Al-Kahanah Wa Al-Tatayyur) </td>
                                    <td> كتاب الكهانة و التطير </td>
                                    <td> 3904 &ensp;to &ensp; 1197 </td>
                                </tr>
                                <tr>
                                    <th scope="row">31</th>
                                    <td> The Book of Manumission of Slaves </td>
                                    <td> كتاب العتق </td>
                                    <td> 3926 &ensp;to &ensp; 3968 </td>
                                </tr>
                                <tr>
                                    <th scope="row">32</th>
                                    <td>Dialects and Readings of the Qur'an (Kitab Al-Huruf Wa Al-Qira'at)</td>
                                    <td> كتاب الحروف والقراءات </td>
                                    <td> 3969 &ensp;to &ensp; 4008 </td>
                                </tr>
                                <tr>
                                    <th scope="row">33</th>
                                    <td>Hot Baths (Kitab Al-Hammam)</td>
                                    <td> كتاب الحمَّام </td>
                                    <td> 4009 &ensp;to &ensp; 4019 </td>
                                </tr>
                                <tr>
                                    <th scope="row">34</th>
                                    <td> Clothing (Kitab Al-Libas) </td>
                                    <td> كتاب اللباس </td>
                                    <td> 4020 &ensp;to &ensp; 4158 </td>
                                </tr>
                                <tr>
                                    <th scope="row">35</th>
                                    <td> Combing the Hair (Kitab Al-Tarajjul) </td>
                                    <td> كتاب الترجل </td>
                                    <td> 4159 &ensp;to &ensp; 4213 </td>
                                </tr>
                                <tr>
                                    <th scope="row">36</th>
                                    <td> Signet-Rings (Kitab Al-Khatam) </td>
                                    <td> كتاب الخاتم </td>
                                    <td> 4214 &ensp;to &ensp; 4239 </td>
                                </tr>
                                <tr>
                                    <th scope="row">37</th>
                                    <td> Trials and Fierce Battles (Kitab Al-Fitan Wa Al-Malahim) </td>
                                    <td> كتاب الفتن والملاحم </td>
                                    <td> 4240 &ensp;to &ensp; 4278 </td>
                                </tr>
                                <tr>
                                    <th scope="row">38</th>
                                    <td> The Promised Deliverer (Kitab Al-Mahdi) </td>
                                    <td> كتاب المهدى </td>
                                    <td> 4279 &ensp;to &ensp; 4290 </td>
                                </tr>
                                <tr>
                                    <th scope="row">39</th>
                                    <td> Battles (Kitab Al-Malahim) </td>
                                    <td> كتاب الملاحم </td>
                                    <td> 4291 &ensp;to &ensp; 4350 </td>
                                </tr>
                                <tr>
                                    <th scope="row">40</th>
                                    <td>Prescribed Punishments (Kitab Al-Hudud)</td>
                                    <td> كتاب الحدود </td>
                                    <td> 4351 &ensp;to &ensp; 4493 </td>
                                </tr>
                                <tr>
                                    <th scope="row">41</th>
                                    <td> Types of Blood-Wit (Kitab Al-Diyat) </td>
                                    <td> كتاب الديات </td>
                                    <td> 4494 &ensp;to &ensp; 4595 </td>
                                </tr>
                                <tr>
                                    <th scope="row">42</th>
                                    <td> Model Behavior of the Prophet (Kitab Al-Sunnah) </td>
                                    <td> كتاب السنة </td>
                                    <td> 4596 &ensp;to &ensp; 4772 </td>
                                </tr>
                                <tr>
                                    <th scope="row">43</th>
                                    <td> General Behavior (Kitab Al-Adab) </td>
                                    <td> كتاب الأدب </td>
                                    <td> 4773 &ensp;to &ensp; 5274 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>

    <!-- Feature #1
                                ============================================= -->
    {{-- <section id="feature1" class="feature feature-1 text-center bg-white">
        <div class="container">
            <div class="row">
                <!-- Panel #1 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <i class="lnr lnr-tablet"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Fully Responsive</h3>
                            <p>
                                League impresses you with fully responsiveness and highly
                                customization. We did it in combination of very clean and
                                flexible design.
                            </p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Panel #2 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <i class="lnr lnr-cloud-sync"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Free Updates</h3>
                            <p>
                                League impresses you with fully responsiveness and highly
                                customization. We did it in combination of very clean and
                                flexible design.
                            </p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Panel #3 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel">
                        <div class="feature--icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Powerful Customization</h3>
                            <p>
                                League impresses you with fully responsiveness and highly
                                customization. We did it in combination of very clean and
                                flexible design.
                            </p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #feature1 end -->
    <!-- Portfolio 3 Column
                                ============================================= -->
    {{-- <section id="portfolio" class="portfolio portfolio-grid portfolio-3col portfolio-hover-2">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-2 mb-40 text--center">
                        <p class="heading--subtitle">What We Do</p>
                        <h2 class="heading--title">Our Great Works</h2>
                        <p class="heading--desc">
                            At League Agency, we shows only the best websites and
                            portfolios built completely with passion, simplicity &amp;
                            creativity !
                        </p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <div class="row">
                <!-- Portfolio Filter
                ============================================= -->
                <div class="col-xs-12 col-sm-12 col-md-12 portfolio-filter">
                    <ul class="list-inline mb-0">
                        <li>
                            <a class="active-filter" href="#" data-filter="*">All</a>
                        </li>
                        <li><a href="#" data-filter=".filter-branding">Branding</a></li>
                        <li>
                            <a href="#" data-filter=".filter-packaging">packaging</a>
                        </li>
                        <li><a href="#" data-filter=".filter-print">Print</a></li>
                        <li>
                            <a href="#" data-filter=".filter-web">Web Development</a>
                        </li>
                    </ul>
                </div>
                <!-- .Portfolio-filter end -->
            </div>
            <div id="portfolio-all">
                <!-- Portfolio #1 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-print filter-web">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/1.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/1.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#"> Woman T Shirt MockUp</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">branding</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #2 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-packaging">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/2.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/2.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Black Fish Branding</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #3 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-branding">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/3.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/3.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">The Living Branding</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #4 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-branding">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/4.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/4.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Free Coffee Cup Mockup</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #5 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-print">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/5.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/5.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Black Fish Branding</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->

                <!-- Portfolio #6 -->
                <div class="col-xs-12 col-sm-6 col-md-4 portfolio-item filter-branding">
                    <div class="portfolio--img">
                        <img src="assets/images/portfolio/grid/3col/6.jpg" alt="Portfolio Item" />
                        <div class="portfolio--hover">
                            <div class="portfolio--action">
                                <div class="pos-vertical-center">
                                    <div class="portfolio--zoom">
                                        <a class="img-gallery-item" href="assets/images/portfolio/full/6.jpg"
                                            title="Portfolio Item"></a>
                                    </div>
                                    <div class="portfolio--title">
                                        <h4><a href="#">Gifts Box Mockup</a></h4>
                                    </div>
                                    <div class="portfolio--cat">
                                        <a href="#">Branding</a> , <a href="#">Print</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .Portfolio-action end -->
                        </div>
                        <!-- .Portfolio-hover end -->
                    </div>
                    <!-- .Portfolio-img end -->
                </div>
                <!-- . portfolio-item end -->
            </div>
            <!-- .row end -->
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text--center mt-10">
                    <a class="btn btn--link btn-more" href="#"><span></span>Load More</a>
                </div>
                <!-- .col-md-2 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #portfolio end -->
    <!-- Testimonial #1
                                ============================================= -->
    {{-- <section id="testimonial1" class="testimonial testimonial-boxed testimonial-1 bg-white">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-20 text--center">
                        <p class="heading--subtitle">Testimonials</p>
                        <h2 class="heading--title">Why People Believe in Us!</h2>
                        <div class="divider--line divider--center mb-0"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div id="testimonial-carousel" class="carousel carousel-dots" data-slide="3" data-slide-rs="1"
                        data-autoplay="false" data-nav="false" data-dots="true" data-space="0" data-loop="true"
                        data-speed="800" data-center="true">
                        <!-- Testimonial #1 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->
                            <div class="testimonial--body">
                                <p>
                                    League agency is the most impressive & great social media
                                    agencies I've ever seen. From the intuitive interface to
                                    the powerful tools!
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/1.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>Mahmoud Baghagho</h4>
                                    <p>7oroof Agency</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #2 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->
                            <div class="testimonial--body">
                                <p>
                                    My project was a simple task, but the persistence &
                                    determination of the team turned it into a great project
                                    which make me happy!
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/2.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>ayman fikry</h4>
                                    <p>zytheme</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #3 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->

                            <div class="testimonial--body">
                                <p>
                                    In my job as social media strategist, I've tried every
                                    analytics product on the market and when I came across
                                    league,I love it.
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/3.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>Fouad badawy</h4>
                                    <p>Tie Labs Inc</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->

                        <!-- Testimonial #4 -->
                        <div class="testimonial-panel">
                            <div class="testimonial--icon"></div>
                            <!-- .testimonial-icon end -->
                            <div class="testimonial--body">
                                <p>
                                    In my job as social media strategist, I've tried every
                                    analytics product on the market and I was blown away!, I
                                    love and trust it.
                                </p>
                            </div>
                            <!-- .testimonial-body end -->
                            <div class="testimonial--meta">
                                <div class="testimonial--meta-img">
                                    <img src="assets/images/testimonial/4.png" alt="Testimonial Author" />
                                </div>
                                <div class="testimonial--meta-content">
                                    <h4>Mostafa Mabrook</h4>
                                    <p>Code 125</p>
                                </div>
                            </div>
                            <!-- .testimonial-meta end -->
                        </div>
                        <!-- .testimonial-panel end -->
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #testimonial1 end -->

    <!-- Blog Grid Carousel
                                ============================================= -->
    {{-- <section id="blog" class="blog blog-carousel pb-100">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-2 text--center mb-50">
                        <p class="heading--subtitle">Latest News</p>
                        <h2 class="heading--title">Our Insights & Articles</h2>
                        <p class="heading--desc">
                            Follow our latest news and thoughts which focuses exclusively
                            on design, art, vintage, and also our latest work updates.
                        </p>
                        <div class="divider--line divider--center m-0"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                        data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                        <!-- Blog Entry #1 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/1.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Business</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">Four ways to cheer yourself up on the Next Blue
                                            Monday!</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    The third Monday of January is supposed to be the most
                                    depressing day of the year. Whether you believe that or
                                    not, the long nights, cold weather and trying to keep...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #2 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/2.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Modern</a> ,
                                        <a href="#">Photography</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">Old cameras can capture images better than nowdays</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    Actually, Woodstock was not the first outdoor festival to
                                    feature multiple bands over several days performing on a
                                    stage set up out in the middle of a farmer’s field...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #3 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/3.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Technology</a> , <a href="#">City</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">New subway line has the most advanced technology</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    That may be true, but today, almost half a century later,
                                    Gary Eagle says it was only part of the story. “Well,” he
                                    begins, “it was a few things. We were hauling a piano
                                    through...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #4 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/4.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Design</a> , <a href="#">Tips</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">7 Signs You’re Not A Good UX Designer
                                            Yet!Discussion</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    UX Designer is still a relatively new profession, and one
                                    that is still being defined. Emil suggests it is an often
                                    misinterpreted role and that ‘User Experience Designer’
                                    is...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                        <!-- Blog Entry #5 -->
                        <div class="blog-entry">
                            <div class="entry--img">
                                <a href="#">
                                    <img src="assets/images/blog/grid/1.jpg" alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--format">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="entry--meta">
                                    <span><a href="#">Money</a> , <a href="#">Tips</a></span>
                                </div>
                                <div class="entry--title">
                                    <h4>
                                        <a href="#">15 Money Tips To Make You Rich In the end of 2015</a>
                                    </h4>
                                </div>
                                <div class="entry--bio">
                                    To make 2015 your most lucrative year yet, you may have to
                                    do some things differently than what you've done in the
                                    past.Here are 15 action items that can put you ahead...
                                </div>
                                <div class="entry--footer">
                                    <div class="entry--date">Feb 22, 2017</div>
                                    <div class="entry--more">
                                        <a href="#"><i class="fa fa-long-arrow-right"></i><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- .entry-content end -->
                        </div>
                        <!-- .blog-entry end -->

                    </div>
                    <!-- .carousel end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #blog end -->
    <!-- Skills #1
                                ============================================= -->
    {{-- <section id="skills1" class="skills bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="heading heading-8 pt-50 mb-30">
                        <h2 class="heading--title">
                            Awesome, Clean, <br />Poweful and Creative!
                        </h2>
                        <div class="divider--line m-0"></div>
                    </div>
                    <!-- .heading end -->
                </div>
                <!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <!-- progress 1 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">Marketing</span>
                            <span class="value">95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->

                    <!-- progress 2 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">Development</span>
                            <span class="value">87%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->

                    <!-- progress 3 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">User Experience</span>
                            <span class="value">81%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="81" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->

                    <!-- progress 4 -->
                    <div class="progressbar">
                        <div class="progress-title">
                            <span class="title">Branding</span>
                            <span class="value">70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!-- .progressbar end -->
                </div>
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #skills1 end -->
    <!-- Counter #4
                                ============================================= -->
    {{-- <section id="counter4" class="counter counter-dark bg-overlay bg-overlay-theme3">
        <div class="bg-section">
            <img src="assets/images/counter/counter-1.jpg" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <!-- count #1 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">538</div>
                        <div class="count-title">Coffee Cups</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <!-- count #2 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">106</div>
                        <div class="count-title">Clients</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <!-- count #3 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">215</div>
                        <div class="count-title">Projects</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->

                <!-- count #4 -->
                <div class="col-xs-6 col-sm-3 col-md-3">
                    <div class="count-box text-center">
                        <div class="counting">79</div>
                        <div class="count-title">Awards</div>
                    </div>
                </div>
                <!-- .col-md-3 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #counter4 end -->
    <!-- workflow
                            ===
                            === === === === === === === === === === === === === === -->
    {{-- <section id="workflow" class="workflow">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 mb-30 text--center">
                        <p class="heading--subtitle">Explore and Create</p>
                        <h2 class="heading--title">Build Your Own Website</h2>
                        <p class="heading--desc">
                            League impresses you with fully responsiveness and highly
                            customization. We did it in combination of very clean and
                            flexible design.
                        </p>
                        <div class="divider--line divider--center mb-0"></div>
                    </div>
                </div>
                <!-- .col-md-8 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#Brainstorming" data-toggle="tab">Brainstorming</a>
                            </li>
                            <li><a href="#Prototype" data-toggle="tab">Prototype</a></li>
                            <li><a href="#Design" data-toggle="tab">Design</a></li>
                            <li>
                                <a href="#Evaluation" data-toggle="tab">Evaluation</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="Brainstorming">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                                        <div class="col-img">
                                            <div class="bg-section">
                                                <img src="assets/images/workflow/1.jpg" alt="Background" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                                        <div class="col-content bg-white">
                                            <h4>Take all data <br />and think about it!</h4>
                                            <p>
                                                After all, as described in Web Design Trends 2015 &
                                                2016, vision dominates a lot of our subconscious
                                                interpretation of the world around us. On top of
                                                that, pleasing images create a better user
                                                experience.
                                            </p>
                                            <p>
                                                At League Agency, we shows only the best websites
                                                and portfolios built completely with passion,
                                                simplicity & creativity !
                                            </p>
                                            <a class="btn btn--primary mt-20" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .tab-pane end -->
                            <div class="tab-pane" id="Prototype">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                                        <div class="col-img">
                                            <div class="bg-section">
                                                <img src="assets/images/workflow/2.jpg" alt="Background" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                                        <div class="col-content bg-white">
                                            <h4>Work on the design<br />taking in mind.</h4>
                                            <p>
                                                After all, as described in Web Design Trends 2015 &
                                                2016, vision dominates a lot of our subconscious
                                                interpretation of the world around us. On top of
                                                that, pleasing images create a better user
                                                experience.
                                            </p>
                                            <p>
                                                At League Agency, we shows only the best websites
                                                and portfolios built completely with passion,
                                                simplicity & creativity !
                                            </p>
                                            <a class="btn btn--primary mt-20" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .tab-pane end -->
                            <div class="tab-pane" id="Design">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                                        <div class="col-img">
                                            <div class="bg-section">
                                                <img src="assets/images/workflow/3.jpg" alt="Background" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                                        <div class="col-content bg-white">
                                            <h4>Know about customers and competitors.</h4>
                                            <p>
                                                After all, as described in Web Design Trends 2015 &
                                                2016, vision dominates a lot of our subconscious
                                                interpretation of the world around us. On top of
                                                that, pleasing images create a better user
                                                experience.
                                            </p>
                                            <p>
                                                At League Agency, we shows only the best websites
                                                and portfolios built completely with passion,
                                                simplicity & creativity !
                                            </p>
                                            <a class="btn btn--primary mt-20" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .tab-pane end -->
                            <div class="tab-pane" id="Evaluation">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-6 pr-0">
                                        <div class="col-img">
                                            <div class="bg-section">
                                                <img src="assets/images/workflow/4.jpg" alt="Background" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6 pl-0">
                                        <div class="col-content bg-white">
                                            <h4>Work on the design <br />and think about it!</h4>
                                            <p>
                                                After all, as described in Web Design Trends 2015 &
                                                2016, vision dominates a lot of our subconscious
                                                interpretation of the world around us. On top of
                                                that, pleasing images create a better user
                                                experience.
                                            </p>
                                            <p>
                                                At League Agency, we shows only the best websites
                                                and portfolios built completely with passion,
                                                simplicity & creativity !
                                            </p>
                                            <a class="btn btn--primary mt-20" href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- .tab-pane end -->
                        </div>
                    </div>
                    <!-- .tabs end -->
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #workflow end -->
    <!-- Clients Carousel
                            ============================================= -->
    {{-- <section id="clients" class="clients clients-carousel bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-dots" data-slide="6" data-slide-rs="2" data-autoplay="true"
                        data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="3000">
                        <!-- Client #1 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/1.png" alt="client" />
                        </div>

                        <!-- Client #2 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/2.png" alt="client" />
                        </div>

                        <!-- Client #3 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/3.png" alt="client" />
                        </div>

                        <!-- Client #4 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/4.png" alt="client" />
                        </div>

                        <!-- Client #5 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/5.png" alt="client" />
                        </div>

                        <!-- Client #6 -->
                        <div class="client">
                            <img class="center-block" src="assets/images/clients/6.png" alt="client" />
                        </div>
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section> --}}
    <!-- #clients end -->

    {{-- Subscribe Modal Section  --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Subscribe to our Newsletter </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="modal-body">
                    <form id="subscribeForm" method="POST" action="{{ route('newsletter.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" @error('name') has-error @enderror>
                            <label for="name" class="col-form-label">Name:</label>
                            <input required type="text" class="form-control" name="name" id="name">
                            @error('name')
                                <span class="help-block m-b-none">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group" @error('name') has-error @enderror>
                            <label for="email" class="col-form-label">Email:</label>
                            <input required type="email" class="form-control" name="email" id="email">
                            @error('email')
                                <span class="help-block m-b-none">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button id="modalCloseBtn" type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        $(document).ready(function() {
            const hasVisited = localStorage.getItem('hasVisited');
            if (!hasVisited) {
                $('#exampleModal').modal('show')

            }
        });

        $("#subscribeForm").submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    $('.modal').each(function() {
                        $(this).modal('hide');
                        localStorage.setItem('hasVisited', 'true');
                    });
                },
                error: (error) => {
                    console.log(error);
                    var errors = $.parseJSON(error.responseText);
                    $.each(errors, function(key, value) {
                        alert(value);
                    });
                }
            });
        });

        $("#modalCloseBtn").click(function() {
            localStorage.setItem('hasVisited', 'true');
        });

        // var video1 = document.getElementById('video1');
        // var video2 = document.getElementById('video2');
        // var video3 = document.getElementById('video3');

        // video1.onended = function() {
        //     video2.play();
        //     video1.style.opacity = 0;
        //     video2.style.opacity = 1;
        // }

        // video2.onended = function() {
        //     video3.play();
        //     video2.style.opacity = 0;
        //     video3.style.opacity = 1;
        // }
        // video3.onended = function() {
        //     video1.play();
        //     video3.style.opacity = 0;
        //     video1.style.opacity = 1;
        // }
    </script>
@endsection
{{-- @section('custom-script')
    <script>
        $(document).ready(function() {

            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['fontname', ['fontname']],
                    ['height', ['height']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });

        });
    </script>

    <script>
        var Success = `{{ \Session::has('success') }}`;
        var Error = `{{ \Session::has('error') }}`;

        if (Success) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 7000
                };
                toastr.success('Success Message', `{{ \Session::get('success') }}`);

            }, 1300);
        } else if (Error) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.error('Failure Message', `{{ \Session::get('error') }}`);

            }, 1300);
        }
    </script>
@endsection --}}
