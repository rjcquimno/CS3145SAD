<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Seniorbutton extends Component
{
    public $msg = 'Turn Senior Discount on';
    public function render()
    {
        return view('livewire.seniorbutton');
    }
    public function clickEvt()
    {
        if($this->msg == 'Turn Senior Discount on') {
            $this->msg = "Turn Senior Discount off";
        }
        else{
            $this->msg = "Turn Senior Discount on";
        }
        $this->emit('seniormode');
        $this->emit('taxdisplay');
        $this->emit('seniordisplay');
    }
}
