<?php
namespace App\Http\Livewire;
use Livewire\Component;
class Addtocart extends Component
{
    public $msg = 'Add to Cart';
    public $itemId;
    public $incart = false;
    protected $listeners = ['removedFrom'];
    public function render()
    {
        return view('livewire.addtocart');
    }
    
    public function removedFrom($barCode){
        if($this->itemId == $barCode) {
        $this->msg = "Add to Cart"; 
        $this->incart = false;
        }
    }
    
    public function clickEvt()
    {
        if($this->msg == 'Add to Cart') {
            $this->msg = "Added";
            $this->incart = true; 
            $this->emit('addedIn', $this->itemId);
        }
    }
   
}
