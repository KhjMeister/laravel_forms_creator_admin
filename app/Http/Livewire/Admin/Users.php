<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User as USSer;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;


class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public 
    // $users,
    $user,
    $user_id,
    $user_name,
    $user_role,
    $u_activeTime,
    $u_phone,
    $u_activeType;

    public $search = '';

    public function mount()
    {
        // $this->users = USSer::where('role','!=','admin')->get();

    }
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin.users.users',[
            'users'=> USSer::where([
                ['role','!=','admin'],
                ['name', 'like', '%'.$this->search.'%'],
            ])->orWhere([
                ['role','!=','admin'],
                ['phone', 'like', '%'.$this->search.'%'],
            ])->orWhere([
                ['role','!=','admin'],
                ['email', 'like', '%'.$this->search.'%'],
            ])->paginate(3)
        ]);
    }
}
