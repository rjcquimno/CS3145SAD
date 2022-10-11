<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Seniortotal extends Component
{
    public $show = false;
    public $subtotal = 0;
    public $receivedtotal = 0;
    protected $listeners = ['seniorupdate', 'seniordisplay'];
    public function render()
    {
        return view('livewire.seniortotal');
    }
     public function seniorupdate($a){
        $this->receivedtotal = number_format((float)$a*0.2,2,'.','');
        if($this->show) $this->subtotal = $this->receivedtotal;
        else $this->subtotal = 0;
    }
    public function seniordisplay(){
        if($this->show) { $this->show = false; $this->subtotal = 0;}
        else {$this->show = true; $this->subtotal = $this->receivedtotal;}
    }
}
