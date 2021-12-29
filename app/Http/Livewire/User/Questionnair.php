<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Questionnair as Quest;

class Questionnair extends Component
{
    public $qunair,$qunairs,$name,$q_id,$c_id,$u_id;
    public $updateQN = false;
    public function mount()
    {
        $this->u_id = Auth::id();
        //  $this->getQNairs();
    }

    public function getQNairs()
    {
        $this->qunairs = Quest::get()->where(
            'u_id' , $this->u_id,
        );
    }
    private function resetInputFields(){
        $this->name = '';
    }
    public function getOneQNair($id)
    {
        $this->qunair = Quest::find($id);
    }
    public function render()
    {
        $this->getQNairs();
        return view('livewire.user.questionnair.questionnair');
    }

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
        session()->flash('message', 'createQNair');
    }

    public function deleteQNair($id)
    {
        Quest::find($id)->delete();
        session()->flash('message', 'deleteQNair');
    }

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
    public function editQNair($id)
    {
        $qust = Quest::findOrFail($id);
        $this->q_id = $id;
        $this->name = $qust->qname;
        $this->updateQN = true;
    }
    public function updateQNair()
    {
        Quest::where('id',$this->q_id)->update([
            'qname' => $this->name
        ]);
        $this->updateQN = false;
        $this->resetInputFields();
        session()->flash('message', 'updateQNair');
    }
    public function showQNair($id)
    {
        $qust = Quest::findOrFail($id);
        $this->q_id = $id;
        $this->name = $qust->qname;

    }
    

}
