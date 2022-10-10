<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Taxtotal extends Component
{
    protected $listeners = ['taxupdate', 'taxdisplay'];
    public $show = true;
    public $subtotal = 0;
    public function render()
    {
        return view('livewire.taxtotal');
    }
    public function taxupdate($a){
        $this->subtotal = number_format((float)$a*0.12,2,'.','');
    }
    public function taxdisplay(){
        if($this->show) $this->show = false;
        else $this->show = true;
    }
}
