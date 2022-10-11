<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Seniorbutton extends Component
{
    public $msg = 'Turn Senior Discount on';
    public $msg2 = 'Turn Card Payment on';
    public $cardmode = false;
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
    public function clickEvt2()
    {
        if($this->msg2 == 'Turn Card Payment on') {
            $this->msg2 = "Turn Cash Payment on";
            $this->cardmode = true;
        }
        else{
            $this->msg2 = "Turn Card Payment on";
            $this->cardmode = false;
        }
    }
    
}
