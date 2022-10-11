<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Grandtotal extends Component
{
    public $subtotal = 0; //for handling actual calculations
    public $msg = "0"; //variable for displaying total in the table as formatted string
    public $senior = false; //checks if senior discount is on or not
    public $totaldiscount; //for calculating total discount
    protected $listeners = ['grandupdate', 'seniormode'];
    public function render()
    {
        return view('livewire.grandtotal');
    }
    public function seniormode(){
        if($this->senior) {
        $this->senior = false;
        }
        else {
        $this->senior = true;
        }
        $this->emit('subtotalUpdate');
    }
    public function grandupdate($sub, $disco)
    {
        if($this->senior) $this->subtotal = $sub - (0.2*$sub);
        else $this->subtotal = $sub + (0.12*$sub);
        $this->msg=number_format((float)$this->subtotal,2,'.','');
        $this->totaldiscount = $disco;
    }
}
