<?php

namespace App\Http\Livewire\ModulosAdmin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class HomeAdmin extends Component
{   
    use WithPagination;
    public $query;
    public User $user;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }
    public function render()
    {   
        if(strlen($this->query)> 0){
            $items = User::search($this->query)->get();
        }else{
            $items = User::paginate(10);
        }

        if(Auth::check()){
            return view('livewire.modulos-admin.home-admin', compact('items') );
        }else{
            return view('index');
        }
    }
}
