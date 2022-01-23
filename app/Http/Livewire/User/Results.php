<?php

namespace App\Http\Livewire\User;
use Illuminate\Database\Eloquent\Collection;
use App\Models\normalType as Tashrihi;

use Livewire\Component;

class Results extends Component
{
    public $qnairId,$ips;
    public function render()
    {
        return view('livewire.user.results');
    }

    public function mount()
    {
       $this->ips = $this->getUniqueIps();
       
    }

    public function getUniqueIps()
    {
        return Tashrihi::where('q_id' , $this->qnairId)->groupBy('ip')->select('ip')->get();
    }

}
