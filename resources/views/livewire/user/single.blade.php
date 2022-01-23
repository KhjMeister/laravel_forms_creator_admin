
         
<table class="table table-striped table-borderless ">
    <thead>
        <tr>
            <th><p class="text-primary"> پاسخنامه </p></th>
            <th><p class="text-primary"> کاربر </p></th>
            @foreach( $uniqT as $uniq )
                <th>
                <p class="text-primary">{{ $this->getOneQuestin($uniq->n_id) }}</p> 

                </th>
            @endforeach
            <th>
            <p class="text-primary"> عملیات</p>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        
        <td>  <a type="button" wire:click="getInfoOfIp()" data-bs-toggle="modal" data-bs-target="#result" ><i class="icon-paper menu-icon text-primary"></i></a> </td>
        <td>{{ $ipp }}</td>
        @foreach( $uniqT as $uniq )
            <td>
                {{ $uniq->hbigtext }}
            </td>
        @endforeach
        <td>
            <a class="btn btn-outline-danger btn-sm" wire:click="deleteAnswer()">حذف</a>
        </td>

        </tr>

    </tbody>
</table>
                            
   
        <div class="modal fade" id="result" tabindex="-1" aria-labelledby="result1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="result1"> ایجاد پرسش نامه</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('message.Cancel')}}</button>
                        
                    </div>
                </div>
            </div>
        </div>