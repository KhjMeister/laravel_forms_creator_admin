<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Questionnair as Quest;
use Livewire\WithPagination;

class Questionnair extends Component
{
    public $questionPart = true;
    public $indexPart = false;
    public 
    $qunair,
    // $qunairs,
    $name,
    $q_id,
    $c_id,
    $u_id;
    
    public $updateQN = false;
    public $search = '';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->u_id = Auth::id();
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
         Quest::insert([
            'qname' => $validatedDate['name'],
            'u_id' => $this->u_id,
            'qstate' => 0,
            'c_id' => 1,
        ]);
        $this->resetInputFields();
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
        
    }

}
