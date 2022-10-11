<?php

namespace App\View\Components;
use Illuminate\Http\Request; 
use Illuminate\View\Component;

class AddToCartButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public $inventoryid;
    public $inCart;
    
    public function __construct($inventoryid, $inCart)
    {
        //
        $this->inventoryid = $inventoryid;
        $this->inCart = $inCart;
        $this->a = 'a';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        //console.log("rendered");
        return view('components.add-to-cart-button');
    }
    public function addcart()
    {
       //$this->inCart ? 'notinCart' : 'inCart';
       
       if($this->a == 'b') $this->a = 'Add to Cart';
       else $this->a = 'Added';
       error_log('Some message here.');
    }
     public function showstatus()
    {    
        return $this->a;
    }
    
    
}
