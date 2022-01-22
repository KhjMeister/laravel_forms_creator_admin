<div >
     @if($start===1)
     <div class="container-fluid content-question">
        <div class="row ">
            <div class="col-lg-3">
                
            </div>
            <div class="col-lg-6 mt-10">
                <div class="card ">
                    <h4 class="text-question mt-2">{{ $this->qnairs->qname }}</h4>
                    <div class="row mt-2 textcard">
                        <div class="container" >
                            <h6> </h6>
                            <div class="row">
                                <div class="col-lg-5">
                                </div>   
                                <div class="col-lg-5 ">
                                    @if(!$user_ips)
                                    <button wire:click="changeStart(2)" class="btn btn-lg btn-outline-secondary " >
                                        {{ __('message.Start') }} 
                                       
                                    </button>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <br> 
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    @elseif($start === 2)
  
    <div class="container-fluid {{ $onequestion->image_url||$onequestion->video_url ? '' : 'mt-5' }} content-question" >
        <div class="row ">
            <div class="col-lg-3">
                
            </div>
            <div class="col-lg-6 {{ $onequestion->image_url||$onequestion->video_url ? '' : 'mt-5' }}">
                <div class="card ">
                    <!-- <h4 class="text-question mt-3"></h4> -->
                    <div class="row mt-2 textcard">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                            <div class="row">
                                <!-- <div class="col-lg-3"></div> -->
                                <div class="col-lg-7">
                                    <h5> {{$onequestion->stext}}  </h5>
                                    
                                </div>
                            </div>
                            
                            </div>
                            <div class="col-lg-12">
                                <form >
                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div>
                                                @if($onequestion->image_url)
                                                    <img style="width:200px;height:auto;" src="{{ asset('storage/'.$onequestion->image_url) }}" alt="image">
                                                @elseif($onequestion->video_url)
                                                    <video style="width:200px;height:auto;"  controls>
                                                        <source src="{{$onequestion->image_url}}" type="video/mp4">
                                                    </video>
                                                @endif
                                            </div>

                                            <label for="answer_input_{{ $onequestion->id }}" class="">جواب شما :</label>
                                            <textarea wire:model="qtext" id="answer_input_{{ $onequestion->id }}" type="text" class="form-control " {{ $onequestion->force_answer ? 'required' : '' }}></textarea>
                                            <input type="text" wire:model="qid" value="{{ $onequestion->id }}" hidden>
                                            {{ $qid }}
                                            <br>
                                            @if($onequestion->force_answer)
                                                <label  class=" alert-danger" dir="ltr"> جواب دادن به این سوال الزامی است</label>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="col-lg-12 mt-3 mb-3" dir="ltr">
                                            @if($qnaircount>$number)
                                                <button class="btn btn-outline-success" wire:click.prevent="addAnswer({{ $onequestion->id }},0);">بعدی</button>
                                            @else
                                                <button class="btn btn-outline-info finish" wire:click.prevent="addAnswer({{ $onequestion->id }},1);">اتمام</button>
                                                آیا مطمئن هستید ؟
                                            @endif 
                                            @if($qnaircount > $number and $number !== 1)
                                               <!-- <button class="btn btn-outline-secondary" wire:click.prevent="getPerviousQuestion({{ $onequestion->id }});">قبلی</button> -->
                                            @endif 

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div>
    @elseif($start === 3)
    <div class="container-fluid content-question">
        <div class="row ">
            <div class="col-lg-3">
                
            </div>
            <div class="col-lg-6 mt-10">
                <div class="card ">
                    <h4 class="text-question mt-2">متشکریم</h4>
                    <div class="row mt-2 textcard">
                        <div class="container" >

                            <div class="row">
                                <div class="col-lg-5">
                                </div>   
                                <div class="col-lg-5 ">
                                    
                                </div>
                            </div>
                            <br>
                            <br> 
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    @endif

   
</div>
