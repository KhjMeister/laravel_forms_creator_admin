<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Livewire\WithPagination;


use App\Models\Category as Cat;

class Category extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public 
    $c_id,
    $name,
    $img_url,
    $old_img_url,
    $u_id,
    $active_state;
    // $categorys;

    public $search = '';
    public $updateMode = false;
    public $createMode = false;
    

    public function render()
    {
        // $this->categorys =Cat::all();
        return view('livewire.admin.category.category',[
            'categorys' => Cat::where('name', 'like', '%'.$this->search.'%')->paginate(5)
        ]);
    }
    public function getOneCategory($id)
    {
        return Cat::find($id);
    }
    public function addCategory()
    {
        $this->createMode = true;
    }
    public function canceladd()
    {
        $this->createMode = false;
        $this->resetInputFields();
    }
    public function cancelUpdate()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        $this->c_id = $id;
        $this->name = $cat->name;
        // $this->img_url = $cat->img_url;
        $this->old_img_url = $cat->img_url;
        $this->updateMode = true;
    }
    private function resetInputFields(){
        $this->name = '';
        $this->img_url = '';
    }
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'], 
            'img_url' => 'image|max:2048',
        ]);
        $filename = $this->img_url->store('uploads','public');
        Cat::insert([
             'name' => $validatedDate['name'],
            'img_url' => $filename,
            'u_id' => 1,
            'active_state' => 0,
        ]);
        // Cat::create($validatedDate);
        session()->flash('message', 'create');
        $this->canceladd();
    }

    public function delete($id)
    {
        File::delete(public_path('storage/').$this->getOneCategory($id)->img_url);
        Cat::find($id)->delete();
        session()->flash('message', 'delete');
    }

    public function update()

    {
        $cat = Cat::find($this->c_id);

        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            
        ]);
        if($this->img_url){
            if($image =  $this->img_url->store('uploads','public')){
                File::delete(public_path('storage/').$this->getOneCategory($this->c_id)->img_url);
                $cat->update([
                    'name' => $this->name,
                    'img_url' => $image,
                ]);
            }
        }elseif(!$this->img_url) {
            $cat->update([
                'name' => $this->name,
            ]);
        } 
        $this->updateMode = false;
        $this->resetInputFields();
        session()->flash('message', 'updated');

    }
}
