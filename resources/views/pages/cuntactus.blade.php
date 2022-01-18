@extends('layouts.app')

@section('content')

    <div class="container-fluid content-register">
        <div class="row ">
            <div class="col-lg-1">
                
            </div>
            <div class="col-lg-5 mt-5 ">
                <div class="card">
                    <h4 class="text-contactus mt-3">{{ __('message.connectionWays') }}</h4>
                    <h6 class="mt-3 textcard">{{ __('message.address') }} </h6>
                    <div class="row mt-2 textcard">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>
                        </div>
                        <div class="col-sm-11">
                           <p> {{ __('message.behboodAddress') }}</p>
                        </div>
                    </div>
                    <div class="row mt-2 textcard">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <p>  {{ __('message.backupPhone') }} : {{ __('message.companyPhone') }} </p>
                        </div>
                    </div>
                    <div class="row mt-2 textcard">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                        </div>
                        <div class="col-sm-11">
                            <p> {{ __('message.companyemail') }} : {{ __('message.behhbodemail') }}</p>
                        </div>
                    </div>
                    <iframe class=" map mt-2"
                        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7201574.160173701!2d65.55049602684313!3d28.195350869714723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ee72fe485d299cd%3A0xa3628a297409ce68!2zQjkxNdiMINin2LPYqtin2YYg2LPbjNiz2KrYp9mGINmIINio2YTZiNqG2LPYqtin2YbYjCDYp9uM2LHYp9mG!3m2!1d29.4544231!2d60.7581413!5e0!3m2!1sfa!2s!4v1640456914248!5m2!1sfa!2s"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-5 mt-5">
                <div class="card">

                    <div class="col-sm-9 m-auto mt-3">
                        <label>{{ __('message.nameAndFamily') }}:</label>
                        <input type="text" class="form-control text-muted mt-2 text-center" id="name" name="text">
                    </div>
                    <div class="col-sm-9 m-auto">
                        <label class="mt-1">{{ __('message.emailLabel') }}:</label>
                        <input type="email" class="form-control mt-2 text-center" id="email"
                            placeholder="example@gmail.com" name="email">
                    </div>
                    <div class="col-sm-9 m-auto">
                        <label class="mt-1">{{ __('message.message') }} :</label>
                        <textarea class="form-control mt-2  text-muted"
                            aria-label="With textarea"> {{ __('message.askForMessage') }}</textarea>
                    </div>
                    <div class="col-sm-9 m-auto my-3 mb-4 ">
                        <button type="submit" class="btn btn-default px-5 header1">{{ __('message.send') }}</button>
                      </div>
                </div>

            </div>
        </div>
    </div>
 
 @endsection
