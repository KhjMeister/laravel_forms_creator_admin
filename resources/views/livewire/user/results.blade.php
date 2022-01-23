
    <div class="card">
        <div class="card-body">
            <div class="row">
                <p class="card-title mb-0 col-4">جدول نتایج  </p>
                
            </div>
            <div class="col-md-12">
                <div class="card-body">
                    <div class="row align-center">
                        <div class="col-12">     
                            <div class="table-responsive"> 
       
        

                            @foreach( $ips as $ip)
                                <livewire:user.single :qnairId="$qnairId" :ipp="$ip->ip" :wire:key="$ip->ip">
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>  
    </div>

