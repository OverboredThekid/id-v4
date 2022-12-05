<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\staff;
use \Illuminate\Session\SessionManager;


class Svg extends Component
{
    public $staff;
 
    public function mount(SessionManager $session, staff $staff)
    {
        $session->put("staff.{$staff->id}.last_viewed", now());
        $this->staff = $staff;
    }


    public function render()
    {
        return view('livewire.svg')->layout('layouts.svg');
    }
}
