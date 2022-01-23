<?php

namespace App\Http\Livewire\User;
use App\Models\normalType as Tashrihi;
use App\Models\Question;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Single extends Component
{
    public $qnairId,$ipp;

    // بارگیری اطلاعات جواب هر یک از کاربران
    public function render()
    {
        return view('livewire.user.single',[
            'uniqT' => Tashrihi::where([
                ['q_id' , $this->qnairId],
                ['ip' , $this->ipp]
                ])->get()
        ]);
    }

    public function getOneQuestin($id)
    {
        return Question::where('id',$id)->first()->stext;
    }

    public function getInfoOfIp()
    {
        
    }
    public function deleteAnswer()
    {
        Tashrihi::where([
            ['ip',$this->ipp],
            ['q_id', $this->qnairId]
        ])->delete();
        
    }
}
