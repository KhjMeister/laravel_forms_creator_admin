<?php

namespace App\Http\Livewire\Home;
use App\Models\Questionnair as Quest;
use App\Models\Question ;
use App\Models\NormalType ;
use Illuminate\Http\Request;


use Livewire\Component;

class Qnr extends Component
{
    // متغیرها برای ذخیره اطلاعات سوالات یک پرسشنامه
    public $qnrurl,$qnairs,$allquestions,$onequestion,$qnaircount,$number=0,$user_ips=false;

    // متغیرها برای ذخیره جواب ها

    public $qid,$qtext;

    // متغیر برای شروع
    public $start = 1;
    
    public $ipp;

    public function ckecking_user_access()
    {
        $this->user_ips = NormalType::where(
            'n_id' , $this->qnairs->id 
             
        )->where('ip' ,$this->ipp )->first();
    }
    
    public function mount()
    {
        $this->qnairs  = Quest::where(
             'qnr_url' , $this->qnrurl
         )->first();
         $this->allquestions  = Question::where(
             'q_id' , $this->qnairs->id
             )
             // ->where('sstate' , 1)
             ->get();
             $this->qnaircount = count($this->allquestions);
             $this->number = Question::where('q_id',$this->qnairs->id)->min('number') - 1;
             $this->getNumberedQuestion();
             $this->ckecking_user_access();
    }
    public function render()
    {
        return view('livewire.home.qnr');
    }
    
    public function getNumberedQuestion()
    {
        $this->number++;
        $this->onequestion  = Question::
            where('q_id' , $this->qnairs->id)->
            where('number' , $this->number)->
            // where('sstate' , 1)->
            first();
        
    }
    public function getPerviousQuestion()
    {
        $this->number--;
        $this->onequestion  = Question::
            where('q_id' , $this->qnairs->id)->
            where('number' , $this->number)->
            // where('sstate' , 1)->
            first();
        
    }

    public function changeStart($id)
    {
        
            $this->start = $id;
       
    }

    public function addAnswer($nid,$f)
    {
        $validatedDate = $this->validate([
            'qtext' => ['required', 'string', 'max:255'], 
            
        ]);

        NormalType::create([
            'htext' => $validatedDate['qtext'],
            'hbigtext' => $validatedDate['qtext'],
            'ntype' => 1,
            'n_id' => $nid,
            'ip' =>  $this->ipp
            
       ]);

       $this->qtext = null;

       if($this->qnaircount > $this->number){
            $this->getNumberedQuestion();
        }

        if( $f===1 ){
            $this->start = 3;
        }
    }
}
