<div>
    
    <div class="card">
        <div class="card-body">
           <div class="row">
                <div class="col-10">
                    <p class="card-title mb-0 "> سوالات خود را به پرسش نامه ... اضافه کنید</p>
                </div>
                <div class="col-2">
                    <a wire:click="Change_to_index()" href="#" class="btn btn-outline-secondary">{{ __('message.back')}}</a>
                </div>
           </div>

            <div class="row">
                <div class="col-3">
                    <div class="row">
                    <div class="col-12 mb-1">
                            <a wire:click="Change_to_Add_questionT()" class="btn btn-outline-secondary">
                                 تشریحی پاسخ کوتاه
                            </a>
                        </div>
                        
                        <div class="col-12">
                            <a class="btn btn-outline-secondary">
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
