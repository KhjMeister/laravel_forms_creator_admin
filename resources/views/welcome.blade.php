@extends('layouts.app')

@section('content')

<section class="parent-title">
    <div class="particles-title" id="particles-js"></div>
    <div class=" title flex-container">
      <div class="title-img">
        <img src="{{ asset('images/main-image.png')}}" class="img-fluid my-5 image-register" alt="">
      </div>
      <div class="title-desc">
        <p class="font-section1 fw-bold ">

          داده های کسب و کار خود را
          <br>
          مدیریت کنید
        </p>
        <p class="font-section2 fw-bold mt-3">
          اشتیاق ما به کار سخت و ارائه نتایج عالی. این می تواند نیازهای مشتریان شما را برطرف کرده و نوآوری ایجاد
          کند.با تیم ما همراه باشید
        </p>
        <button class="font-section3 mt-3">هم اکنون شروع کنید</button>
        <button class="font-section3 mt-3">تماشای ویدئو</button>
      </div>
    </div>
  </section>
  <section class="bg-light">
    <div class="container">
      <div class="row  ">
        <div class="col-lg-4 text-center my-3 ">
          <img src="{{ asset('images/compose.png')}}">
          <h1 class="mt-3 font-content2 fw-bold"> ایجاد</h2>
            <p class="mt-3 font-content3">با استفاده از چندین نوع سوال و گزینه‌های قالب‌بندی، به سرعت تست‌هایی با ظاهر
              عالی ایجاد کنید.
            </p>
        </div>

        <div class="col-lg-4 text-center my-3">
          <img src="{{ asset('images/upload.png')}}">
          <h1 class="mt-3 font-content2 fw-bold"> انتشار</h2>
            <p class="mt-3 font-content3">آزمون ها می توانند به صورت خصوصی در یک گروه منتخب منتشر شوند یا با یک پیوند و
              صفحه ثبت نام، آن
              ها را برای همه باز کنند.</p>
        </div>

        <div class="col-lg-4 text-center my-3">
          <img src="{{ asset('images/trends.png')}}">
          <h1 class="mt-3 font-content2 fw-bold"> آنالیز</h2>
            <p class="mt-3 font-content3">گزارش‌های قدرتمند به شما امکان می‌دهند تا تجزیه و تحلیل عمیق را در تمام
              پاسخ‌ها انجام دهید.
            </p>
        </div>
      </div>
  </section>



  <section>
    <div class="container-fluid mt-4">
      <h1 class="text-center my-5">
        امکانات طراحی پرسشنامه <span class="font-aboutus1">رایان لاین</span>
      </h1>

      <div class="row mr-5 mt-5">
        <div class=" col-lg-3 my-3 " data-aos="slide-up">
          <div class="card t-karbordha align-items-center shadow">
            <img class="img-fluid  img-emkanat1" src="{{ asset('images/emkanat1.png')}}">
            <h4 class="card-title fw-bold mt-3">
              کاربری فوق العاده ساده
            </h4>
            <p class="mt-1">
              طراحی به صورت Drag&Drop<br>
              تنظیمات آسان<br>
              امکانات پیشرفته<br>
              خروجی اکسل و…
            </p>

          </div>
        </div>
        <div class="col-lg-3 my-3">
          <div class="card t-karbordha align-items-center shadow " data-aos="slide-up">
            <img class="img-fluid img-emkanat" src="{{ asset('images/emkanat2.png')}}
            ">
            <h4 class="card-title fw-bold mt-3">
              ایجاد تم سفارشی
            </h4>
            <p class="mt-1">
              لوگوی دلخواه<br>
              فونت سفارشی<br>
              پس زمینه دلخواه<br>
              رنگ، حاشیه، سایه و …
            </p>
          </div>
        </div>
        <div class="col-lg-3 my-3">
          <div class="card t-karbordha align-items-center shadow" data-aos="slide-up">
            <img class="img-fluid img-emkanat2" src="{{ asset('images/emkanat3.png')}}">
            <h4 class="card-title fw-bold mt-3">
              ساخت انواع گزارش سفارشی
            </h4>
            <p class="mt-1">
              انواع نمودار دایره ای، میله ای و ..<br>
              ساخت جدول دلخواه<br>
              ساخت آسان گزارش<br>
              تنظیم، به اشتراک گذاری و …
            </p>
          </div>
        </div>
        <div class="col-lg-3 my-3 ">
          <div class="card t-karbordha align-items-center shadow" data-aos="slide-up">
            <img class="img-fluid img-emkanat" src="{{ asset('images/emkanat4.png')}}">
            <h4 class="card-title fw-bold mt-3">
              ایجاد روابط منطقی
            </h4>
            <p class="mt-1">
              روابط بین سوالات<br>
              صفحات سفارشی<br>
              صفحه پیام سفارشی<br>
              پیام ثبت سفارشی و …
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section style="background-image: url('images/parallax1-1.jpg');width: 100%; height: 35rem;">

    <h1 class="text-center fw-bold text-white p-5">ویژگی های منحصربه فرد ما</h1>
    <div class="parent-features wrap text-white">


      <div class="child-features">
        <svg xmlns=" http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
          class="bi bi-globe icon-features" viewBox="0 0 16 16">
          <path
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
        </svg>
        <h4 class="mt-3"> دسترسی همه جانبه</h4>
      </div>

      <div class="child-features">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
          class="bi bi-clock icon-features" viewBox="0 0 16 16">
          <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
        </svg>
        <h4 class="mt-3"> تست های تایم دار</h4>
      </div>

      <div class="child-features">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
          class="bi bi-lock icon-features" viewBox="0 0 16 16">
          <path
            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
        </svg>
        <h4 class="mt-3"> رمز گذاری با SSL</h4>
      </div>

      <div class="child-features">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
          class="bi bi-lightning icon-features" viewBox="0 0 16 16">
          <path
            d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641l2.5-8.5zM6.374 1 4.168 8.5H7.5a.5.5 0 0 1 .478.647L6.78 13.04 11.478 7H8a.5.5 0 0 1-.474-.658L9.306 1H6.374z" />
        </svg>
        <h4 class="mt-3">برندسازی سفارشی</h4>
      </div>

      <div class="child-features">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
          class="bi bi-check-lg icon-features" viewBox="0 0 16 16">
          <path
            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg>
        <h4 class="mt-3"> درجه بندی خودکار</h4>
      </div>

      <div class="child-features">
        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
          class="bi bi-eye icon-features" viewBox="0 0 16 16">
          <path
            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
        </svg>
        <h4 class="mt-3"> آزمون های عمومی و خصوصی</h4>
      </div>

    </div>
  </section>
  <section class="section-features">
    <div class="row">
      <div class="col-lg-10">
        <h1>جهت اطلاع از کلیه خدمات ما کلیک کنید</h1>
      </div>
      <div class="col-lg-2 mt-2">
        <button class="text-white btn-info"><h5>همه خدمات ما</h5></button>
      </div>
    </div>
    
  </section>


    <section class="bg-light">

      <div class="container-fluid">
        <div class="row">
          <h2 class="fw-bold mt-5">
            درباره <span class="font-aboutus1">رایان لاین</span> بیشتر بدانید
          </h2>
          <div class="col-lg-6 mt-5">
            <div class="container-fluid">
              <div class="aks-accordion " itemscope itemtype="https://schema.org/FAQPage" data-accordion="">

                <div class="aks-accordion-row">
                  <div class="aks-accordion-item " itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                    <div class="aks-accordion-item-row">
                      <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                          <path
                            d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                          <path
                            d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>

                      </div>
                      <div class="aks-accordion-item-title">
                        <h5 itemprop="name fw-bold"> در پلن رایگان به چه چیزی دسترسی دارم؟ </h5>
                      </div>
                    </div>
                    <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer"
                      itemtype="https://schema.org/Answer" data-accordion-content="">
                      <p itemprop="text"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان
                        گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        <br />
                    </div>

                  </div>

                  <div class="aks-accordion-item " itemscope itemprop="mainEntity"
                    itemtype="https://schema.org/Question" data-accordion-item="" data-ripple="#00000026">
                    <div class="aks-accordion-item-row">
                      <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                          <path
                            d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                          <path
                            d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>

                      </div>
                      <div class="aks-accordion-item-title">
                        <h5 itemprop="name fw-bold">در ازای بزرگتر شدن تیم من قیمت ها چگونه رشد می کند؟ </h5>
                      </div>
                    </div>
                    <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer"
                      itemtype="https://schema.org/Answer" data-accordion-content="">
                      <p itemprop="text"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان
                        گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                      </p>
                    </div>

                  </div>

                  <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                    data-accordion-item="" data-ripple="#00000026">
                    <div class="aks-accordion-item-row">
                      <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                          <path
                            d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                          <path
                            d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>

                      </div>
                      <div class="aks-accordion-item-title">
                        <h5 itemprop="name" class="mr-4">چگونه میتوانم اشتراک خود را لغو کنم؟ </h5>
                      </div>
                    </div>
                    <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer"
                      itemtype="https://schema.org/Answer" data-accordion-content="">
                      <p itemprop="text"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان
                        گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                      </p>
                    </div>

                  </div>

                  <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                    data-accordion-item="" data-ripple="#00000026">
                    <div class="aks-accordion-item-row">
                      <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                          <path
                            d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                          <path
                            d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>

                      </div>
                      <div class="aks-accordion-item-title">
                        <h5 itemprop="name">نحوه کار با پرسشنامه ساز چگونه است؟</h5>
                      </div>
                    </div>
                    <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer"
                      itemtype="https://schema.org/Answer" data-accordion-content="">
                      <p itemprop="text"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان
                        گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                      </p>
                    </div>

                  </div>

                  <div class="aks-accordion-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                    data-accordion-item="" data-ripple="#00000026">
                    <div class="aks-accordion-item-row">
                      <div class="aks-accordion-item-icon">
                        <svg class="aks-accordion-item-icon-open" viewBox="0 0 512 512">
                          <path
                            d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z" />
                        </svg>
                        <svg class="aks-accordion-item-icon-close" viewBox="0 0 512 512">
                          <path
                            d="M492,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,236,492,236z" />
                        </svg>

                      </div>
                      <div class="aks-accordion-item-title">
                        <h5 itemprop="name">این سامانه چه خروجی هایی در اختیار کاربر می دهد؟</h5>
                      </div>
                    </div>
                    <div class="aks-accordion-item-content" itemscope itemprop="acceptedAnswer"
                      itemtype="https://schema.org/Answer" data-accordion-content="">
                      <p itemprop="text"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان
                        گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                        تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                      </p>
                    </div>

                  </div>

                </div>

              </div>

            </div>



          </div>
          <div class="col-lg-6 ">
            <img src="{{ asset('images/faq-img1-2.png')}}" class="img-fluid img-aboutus1">
          </div>
        </div>

      </div>

    </section>


    <h1 class="mt-3 text-center">
      وبلاگ رایان لاین
    </h1>
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-4 shadow">
          <div class="card ">
            <img src="{{ asset('images/blog1.jpg')}}">
            <h3>
              لورم ایپسوم
            </h3>

          </div>

        </div>

        <div class="col-lg-4 shadow">
          <div class="card ">
            <img src="{{ asset('images/blog2.jpg')}}">
            <h3>
              لورم ایپسوم
            </h3>
          </div>

        </div>

        <div class="col-lg-4 shadow">
          <div class="card ">
            <img src="{{ asset('images/blog3.jpg')}}">
            <h3>
              لورم ایپسوم
            </h3>
          </div>
        </div>
      </div>
    </div>
 
 @endsection
