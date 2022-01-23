
         
<table class="table table-striped table-borderless ">
    <thead>
        <tr>
            <th> کاربر</th>
            @foreach( $uniqT as $uniq )
                <th>
                {{ $this->getOneQuestin($uniq->n_id) }}

                </th>
            @endforeach
            <th>
                عملیات
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>
            {{ $ipp }}
        </td>
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
                            
   
