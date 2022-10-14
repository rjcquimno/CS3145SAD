<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4">
<h1 class="text-5xl font-bold align-center">Procurement</h1>
    </section>
@include('partials._search')

<br/>
<br/>


<div class="flex flex-col justify-center align-center text-center px-1 mx-4">

    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Item ID</td>
        <td class="border-2 border-black">Item Barcode</td>
        <td class="border-2 border-black">Item Name</td>
        <td class="border-2 border-black">Item Quantity</td>
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
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_quantity']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_expirydate']}}</td>
                        <td class="border-2 border-black"><a  class="bg-zinc-600 rounded-lg" href="/stockin/{{$inventory->id}}">
                            <i class="fa-solid fa-pencil"></i>Stock in
                        </a></td>
                        <td class="border-2 border-black"><button class="text-red-500"> 
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Stock out</button>
                        </td>
                    </tr>
                @else
                        
                @endif
                @csrf
            @endforeach

             @endforeach
            @else
                    <tr class="border-2 border-black text-center">
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
            @endif
    
    </table>
</div>
</x-layout>