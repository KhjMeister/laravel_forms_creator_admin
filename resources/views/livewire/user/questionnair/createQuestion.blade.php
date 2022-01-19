<div >
    <div class="card">
        <div class="card-body">
           <div class="row">
                <div class="col-10">
                    <p class="card-title mb-0 ">  سوالات خود را اضافه کنید</p>
                </div>
                <div class="col-2">
                    <a wire:click="Change_to_index()" href="#" class="btn btn-outline-secondary btn-sm">{{ __('message.back')}}</a>
                    <a  class="btn btn-outline-primary btn-sm" target="_blank" href="answer/{{ $qunair->qnr_url }}">{{__('message.qnrUrl')}}</a> 
                </div>
           </div>

            <div class="row">
                <div class="col-3">
                    <div class="row">
                    <div class="col-12 mb-1">
                            <a wire:click="Change_to_Add_questionT()" class="btn btn-sm btn-outline-secondary">
                                 تشریحی پاسخ کوتاه
                            </a>
                        </div>
                        
                        <div class="col-12">
                            <a class="btn btn-outline-secondary btn-sm">
                             تشریحی با پاسخ زیاد
                            </a>
                        </div>
                       

                       
                    </div>
                </div>
                <div class="col-9">
                    <div class="container">
                        @if($QTAPart)
                            @include('livewire.user.questionnair.createTashrihQuest')
                        @endif
                    </div>
                </div>
            </div>


		    <!-- <div class="environment">
                <div class="main_row_append_box" id="sortable"></div>
                    <div class="form_generated_box"></div>
                        <textarea class="code_box form-control"></textarea>
                        
                        <div style="margin-top: 20px">
                            <a href="#" class="btn btn-primary btn_round main_row_btn">
                                <i class="fa fa-plus"></i> گروه سوالی خود را اضافه کنید
                            </a>

                            <span class="pull-right">
                                <span class="btn_round html_btn btn btn-default" data-code-btn="code">
                                    <i class="fa fa-code"></i>
                                </span>

                                <span class="btn_round generate_btn btn btn-success">
                                    نمایش 
                                </span>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                        
                    </div>
                </div>
            </div> -->

            
    
        
        </div>
    </div>
    <br>
    <div class="card">
    @if($allQuestionsPart)
        
        <div class="table-responsive">  
            <table class="table table-striped table-borderless ">
                <thead>
                    <tr>
                    <th>{{__('message.questText')}}</th>
                    
                    <th >{{__('message.status')}}</th>
                    <th >{{__('message.stype')}}</th>
                    <th >{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($allQuestion as $question)
                    <tr>
                        <td>
                            {{ $question->stext }}
                        </td>
                        
                        <td>
                            @if($question->sstate === 0)
                                    <span class="badge badge-danger">غیرفعال</span>
                            @elseif($question->sstate === 1)
                            <span class="badge badge-success">فعال</span>
                            @endif
                        </td>
                        <td>
                            @if($question->stype === 1)
                                <span class="badge badge-secondary">متنی با پاسخ کوتاه</span>
                            @endif
                        </td>

                        <td>
                            <button wire:click="editeQuestion({{ $question->id }})" class="btn btn-outline-info btn-sm">{{__('message.edite')}}</button>
                            <button wire:click="deletequestion({{ $question->id }})" class="btn btn-outline-danger btn-sm">{{ __('Delete') }}</button>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    @else
        @include('livewire.user.questionnair.updateQuestion')
    @endif
    </div>
</div>
