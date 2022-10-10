<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ordertotal extends Component
{
    
    public $subtotal = 0;
    public $subtotaldiscount = 0;
    public $orderlist = array(); //list of barcodes of items ordered
    public $pricelist = array(); //list of prices
    public $discountlist = array(); //list of all discounts
    protected $listeners = ['subtotalAdd', 'subtotalSub','subtotalUpdate'];
    
    public function render()
    {
        return view('livewire.ordertotal');
    }
    public function subtotalAdd($barcode, $quantity, $price, $discount){
        
        if(!in_array($barcode, $this->orderlist)) {
            array_push($this->orderlist,$barcode); 
            array_push($this->pricelist, $quantity*($price-$discount));
            array_push($this->discountlist, $discount);
            $this->subtotaldiscount = array_sum($this->discountlist);
            $this->subtotal = array_sum($this->pricelist);
        }
        else{
            for ($x = 0; $x <= count($this->orderlist)-1; $x++) {
                if($this->orderlist[$x]==$barcode){
                    $this->pricelist[$x]= $quantity*($price-$discount);
                    $this->discountlist[$x]= $quantity*$discount;
                }
            }
            $this->subtotaldiscount = array_sum($this->discountlist);
            $this->subtotal = array_sum($this->pricelist);
        }
        $this->emit('taxupdate', $this->subtotal);
        $this->emit('seniorupdate', $this->subtotal);
        $this->emit('grandupdate', $this->subtotal, $this->subtotaldiscount);
    }
    public function subtotalSub($barcode){
        for ($x = 0; $x <= count($this->orderlist)-1; $x++) {
                if($this->orderlist[$x]==$barcode){
                    unset($this->orderlist[$x]);
                    $this->orderlist = array_values($this->orderlist);
                    
                    unset($this->pricelist[$x]);
                    $this->pricelist = array_values($this->pricelist);
                }
            }
            $this->subtotal = array_sum($this->pricelist);
            $this->emit('taxupdate', $this->subtotal);
            $this->emit('seniorupdate', $this->subtotal);
            $this->emit('grandupdate', $this->subtotal, $this->subtotaldiscount);
    }
    public function subtotalUpdate(){
        $this->emit('grandupdate', $this->subtotal, $this->subtotaldiscount);
    }   
}
