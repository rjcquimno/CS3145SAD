<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Inventory</h1>
    </section>
@include('partials._search')
<a href="/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Stock in</a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Item ID</td>
        <td class="border-2 border-black">Item Barcode</td>
        <td class="border-2 border-black">Item Name</td>
        <td class="border-2 border-black">Item Size</td>
        <td class="border-2 border-black">Item Description</td>
        <td class="border-2 border-black">Item Selling Price</td>
        <td class="border-2 border-black">Item Procurement Cost</td>
        <td class="border-2 border-black">Item Discount</td>
        <td class="border-2 border-black">Item Quantity</td>
        <td class="border-2 border-black">Item Restock Value</td>
        <td class="border-2 border-black">Item Out of Stock Value</td>
        <td class="border-2 border-black">Expiry Date</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    @if($inventorylist && $inventorylinelist)
        @foreach($inventorylist as $inventory) 
                @foreach($inventorylinelist as $inventoryline) 
                    @csrf
                    @if($inventory['id']==$inventoryline['inventory_id'])
                        <tr class="border-2 border-black text-center">
                        <td class="border-2 border-black">{{$inventory['id']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_barcode']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_name']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_size']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_description']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_price']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_procprice']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_discount']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_quantity']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_restockvalue']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_outofstock']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_expirydate']}}</td>
                        
                        <td class="border-2 border-black">
                            <a href="/edit/{{$inventory->id}}">
                            <i class="fa-solid fa-pencil"></i>Edit
                            </a>
                        </td>
                        
                        <td class="border-2 border-black"><button class="text-red-500">
                        <form method="Post" action="/inventory/{{$inventory->id}}">
                             <input type="hidden" name="inventoryline" value="{{$inventory->id}}" class="text-center" readonly>
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                   
                    @else
                        
                    @endif
                    @csrf
                @endforeach
                @method('DELETE')
                
            </td>
        </tr>
        @endforeach
    @else
            <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td>
    @endif
    </table>
</section>
</x-layout>