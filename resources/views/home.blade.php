@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold">{{__('message.wellcome')}}&nbsp;{{ Auth()->user()->name; }}</h3>
        <h6 class="font-weight-normal mb-0"> <span class="text-primary"></span></h6>
    </div>

</div>

<div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img class="move-1" src="Admin/images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">سیستان</h4>
                        <h6 class="font-weight-normal">زاهدان</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">کاربران فعال امروز</p>
                      <p class="fs-30 mb-2">33</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4"> خرید های امروز</p>
                      <p class="fs-30 mb-2">2</p>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">ثبت نام های امروز</p>
                      <p class="fs-30 mb-2">160</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4"> پرسش نامه های جدید</p>
                      <p class="fs-30 mb-2">2</p>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


@endsection
