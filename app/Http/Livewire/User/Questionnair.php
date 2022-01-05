<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Questionnair as Quest;
use App\Models\Question as Deseptive;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;


class Questionnair extends Component
{
    use WithPagination;


    public $questionPart = false;
    public $indexPart = true;

    public $QTAPart = false;
    public 
    $qunair,
    // $qunairs,
    $name,
    $q_id,
    $c_id,
    $u_id;
    
    public $updateQN = false;
    public $search = '';
    protected $paginationTheme = 'bootstrap';


    // this are for question
    public $allQuestion,$sText, $stype, $sstate, $force_answer, $image_url, $video_url;


    public function mount()
    {
        $this->u_id = Auth::id();
        $this->questionPart = false;
        $this->indexPart = true;
        $this->QTAPart = false;
        //  $this->getQNairs();
    }

    // public function getQNairs()
    // {
    //     $this->qunairs = Quest::get()->where(
    //         'u_id' , $this->u_id,
    //     );
    // }
    private function resetInputFields(){
        $this->name = '';
        $this->sText = '';
    }
    // getting 1 QuestionNair info
    public function getOneQNair($id)
    {
        $this->qunair = Quest::find($id);
    }

    // Renderring The page
    public function render()
    {
        // $this->getQNairs();
        return view('livewire.user.questionnair.questionnair',[
            'qunairs'=> Quest::where([
               [ 'u_id' , $this->u_id],
               ['qname', 'like', '%'.$this->search.'%']
            ])->paginate(4)
        ]);
    }

    // Storing Question Nair Name
    public function storeQNair()
    {
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'], 
        ]);
        $itemsID = DB::table('questionnairs')->insertGetId([ 
            'qname' =>  $validatedDate['name'],
            'u_id' =>  $this->u_id,
            'c_id' =>  1,
            'qstate' =>  0
            ]);
        
        $this->resetInputFields();

        $this->q_id =$itemsID;
        $this->name =$validatedDate['name'];
        // session()->flash('message', 'createQNair');
        $this->Change_to_question();
    }
    // Deleting 1 QuestionNair 
    public function deleteQNair($id)
    {
        Quest::find($id)->delete();
        session()->flash('message', 'deleteQNair');
    }
    //  Changing Active Or Deactivity of Question Nair
    public function changeQState($id,$qstate)
    {
        if($qstate === 1){
             Quest::where('id',$id)->update([
            'qstate' => 0
        ]);
        }elseif($qstate === 0){
            Quest::where('id',$id)->update([
                'qstate' => 1
            ]);
        }
    }
    // Edite Part for Question Nair
    public function editQNair($id)
    {
        $qust = Quest::findOrFail($id);
        $this->q_id = $id;
        $this->name = $qust->qname;
        $this->updateQN = true;
    }
    // Sending Update to the Sever
    public function updateQNair()
    {
        Quest::where('id',$this->q_id)->update([
            'qname' => $this->name
        ]);
        $this->updateQN = false;
        $this->resetInputFields();
        session()->flash('message', 'updateQNair');
    }
    // Getting info of 1 QuestionNair
    public function showQNair($id)
    {
        $qust = Quest::findOrFail($id);
        $this->q_id = $id;
        $this->name = $qust->qname;

    }
    
    public function Change_to_index()
    {
        $this->questionPart = false;
        $this->indexPart = true;  
    }
    public function Change_to_question()
    {
        $this->questionPart = true;
        $this->indexPart = false; 

        if($this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->get();
        }elseif(!$this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->get();
        }

    }
    public function show_questions($qid)
    {

        $this->questionPart = true;
        $this->indexPart = false; 
        $this->q_id = $qid;
        

        if($this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->get();
        }elseif(!$this->allQuestion){
            $this->allQuestion = Deseptive::where([
                [ 'q_id' , $this->q_id],
             ])->get();
        }

    }
    public function Change_to_Add_questionT()
    {
        if($this->QTAPart === false){
            $this->QTAPart = true;
        }else{
            $this->QTAPart = false;
        }

    }

    public function storeTQuestion()
    {
        $validatedDate = $this->validate([
            'sText' => ['required', 'string', 'max:255'], 
            
        ]);
        
        $this->QTAPart = false;
        $this->stype = 1;
        // $this->sstate = 0;
        // $this->force_answer = 0;
        // $this->image_url = '';
        // $this->video_url = '';

        
        Deseptive::insert([
             'stext' => $validatedDate['sText'],
             'stype' => $this->stype,
             'q_id' => $this->q_id,
             'u_id' => $this->u_id,
        ]);
        
        // session()->flash('message', 'createQuestion');

        $this->allQuestion = Deseptive::where([
            [ 'q_id' , $this->q_id],
         ])->get();
         $this->resetInputFields();
    }
}
