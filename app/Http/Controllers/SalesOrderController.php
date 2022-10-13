<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\SalesOrder;
use App\Models\cardpayment;
use App\Models\cashpayment;

use Illuminate\Http\Request;
use App\Models\InventoryLine;
use App\Models\ordercontents;
use Illuminate\Validation\Rule;



class SalesOrderController extends Controller
{
    //
    // show salesorderview which references the inventory
    public function show(Inventory $inventoryData){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $saleData = SalesOrder::select()->get();
        $cashData = cashpayment::select()->get();
        $cardData = cardpayment::select()->get();
        return view('salesorder', ['inventorylist'=>$inventoryData , 'salelist'=>$saleData , 'cashlist'=>$cashData, 'cardlist'=>$cardData]);
        return view('salesorder', ['inventorylist'=>$inventoryData , 'salelist'=>$saleData , 'cashlist'=>$cashData, 'cardlist'=>$cardData]);
    }

    public function showHistory(Inventory $inventoryData){
        $saleData = SalesOrder::select()->get();
        $cashData = cashpayment::select()->get();
        $cardData = cardpayment::select()->get();
        return view('saleshistory', ['salelist'=>$saleData , 'cashlist'=>$cashData, 'cardlist'=>$cardData]);
    }
    
    //store item salesorder data
    public function store(Request $request){
        $formFields = $request->validate([
            'order_total' =>'required',
            'order_discount' => '',
            'order_senior_discount' => ''
        ]);

        $ordered = SalesOrder::create($formFields);
        $orderedid = $ordered->id;
   
        $input = $request->all();
       
        if($input['cardmode']) $this->storeCard($request, $orderedid);
        else $this->storeCash($request, $orderedid);
        
        return redirect('/salesorder')->with('message', 'A sale was made successfully.');
    }
    
    //update inventory when a sale is made
     /*public function updateInventory(Request $request){
         $input = $request->all();
         $i = 0;
         $count = count($input['barcode']);
         while($i < $count){
             Inventory::where('item_barcode',$input['barcode'][$i])->update(array('item_quantity'=>$input['oldquantity'][$i] - $input['quantity'][$i])); //search inventory for matching barcode, then update the quantity entry.
             $i++;
         }
         /*$count = $input['quantity'];
         dd($count);
         $this->store($request);
         
        return redirect('/salesorder');
    }*/
    
    public function updateInventory(Request $request){ //this version of updateInventory will go to InventoryLine instead of Inventory now
         $input = $request->all();
         $i = 0;
         $count = count($input['idd']);
         while($i < $count){
             InventoryLine::where('inventory_id',$input['idd'][$i])->update(array(
                 'inventoryline_quantity'=>$input['oldquantity'][$i] - $input['quantity'][$i])); //search inventory for matching barcode, then update the quantity entry.
             $i++;
         }
         $this->store($request); //command to store SalesOrder data
         
        return redirect('/salesorder');
    }
    
    //store info of payment with card
    public function storeCard(Request $request, $orderid){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $input = $request->all();
        CardPayment::create(array('order_id' =>$orderid, 'card_number'=>$input['cardnumber'], 'card_type'=>$input['cardtype'], 'cardpayment_amount' => $input['amount_paid'],));
    }
    
    //store info of payment with cash
    public function storeCash(Request $request, $orderid){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $input = $request->all();
        CashPayment::create(array('order_id' =>$orderid, 'cashpayment_amount' => $input['amount_paid']));
    }
     public function storeOrderContents(Request $request, $orderid){
        $inventoryData = Inventory::first()->filter(request(['search']))->get();
        $input = $request->all();
        ordercontents::create(array('order_id' =>$orderid, 'cashpayment_amount' => $input['amount_paid']));
     
     }
    //delete an entry
    public function destroy(SalesOrder $salesorder){
        $salesorder->delete();
        return redirect('/inventory')->with('message', 'An item was deleted successfully.');
    }
    
    
    
    /* Not sure if editing and updating entries will be needed as sales are final anyway.
    //show edit form
    
    public function edit(SalesOrder $salesorder){
        return view('edit', ['salesorder'=>$salesorder]);
    }*/

 
    
    
    
    
    
    
}
