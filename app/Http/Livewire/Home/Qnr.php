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
    public $qnrurl,$qnairs,$allquestions,$onequestion,$qnaircount,$number=0;

    // متغیرها برای ذخیره جواب ها

    public $qid,$qtext;

    // متغیر برای شروع
    public $start = false;
    

    public function mount()
    {
        $this->qnairs  = Quest::where(
             'qnr_url' , $this->qnrurl
         )->first();

         $this->allquestions  = Question::where(
            'q_id' , $this->qnairs->id,
        )->get();
        $this->qnaircount = count($this->allquestions);
        $this->getNumberedQuestion();
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
            first();
        
    }
    public function getPerviousQuestion()
    {
        $this->number--;
        $this->onequestion  = Question::
            where('q_id' , $this->qnairs->id)->
            where('number' , $this->number)->
            first();
        
    }

    public function changeStart()
    {
        if (!$this->start ) {
            $this->start = true;
        }else{
            $this->start = false;

        }
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
            'ip' => request()->ip()
            
       ]);

       $this->qtext = null;

       if($this->qnaircount > $this->number){
            $this->getNumberedQuestion();
        }

        if( $f===1 ){
            $this->start = false;
        }
    }
}
