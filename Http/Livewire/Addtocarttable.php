<?php
namespace App\Http\Livewire;
use Livewire\Component;
class Addtocarttable extends Component
{
    public $msg = 'Remove from Cart';
    public $idd, $barcode, $name, $price, $discount;
    public $quantity = 1;
    public $oldquantity;
    public $show = false;
    protected $listeners = ['addedIn'];
    
    public function mount()
    {
      
    }
    public function addedIn($itemid)
    {
        if($this->barcode == $itemid) {
            $this->show = true;
            $this->emit('subtotalAdd', $this->barcode, $this->quantity, $this->price, $this->discount);
        }
        
    }
    public function quantchange()
    {
        $this->emit('subtotalAdd', $this->barcode, $this->quantity, $this->price, $this->discount);
    }
    
    public function render()
    {
       
       
        
        return view('livewire.addtocarttable');
    }
    
    public function clickEvt()
    {
        
        $this->msg = "Remove from Cart";
        $this->emit('removedFrom', $this->barcode);
        $this->emit('subtotalSub', $this->barcode);
        $this->show = false;
        //$this->emit('refreshParentComponent');
       
    }
   
}

