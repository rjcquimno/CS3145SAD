<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Inventory</h1>
    </section>
@include('partials._search')
<a href="/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">New item</a>
<br/>
<br/>
<br/>
<br/>
<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">id</td>
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
        <td class="border-2 border-black">item_size</td>
        <td class="border-2 border-black">item_price</td>
        <td class="border-2 border-black">item_procprice</td>
        <td class="border-2 border-black">item_description</td>
        <td class="border-2 border-black">item_discount</td>
        <td class="border-2 border-black">expire_date</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    @foreach ($inventorylist as $inventory)
    @csrf
    <tr class="border-2 border-black text-center">
        
        <td class="border-2 border-black">{{$inventory['id']}}</td>
        <td class="border-2 border-black">{{$inventory['item_barcode']}}</td>
        <td class="border-2 border-black">{{$inventory['item_name']}}</td>
        <td class="border-2 border-black">{{$inventory['item_quantity']}}</td>
        <td class="border-2 border-black">{{$inventory['item_size']}}</td>
        <td class="border-2 border-black">{{$inventory['item_price']}}</td>
        <td class="border-2 border-black">{{$inventory['item_procprice']}}</td>
        <td class="border-2 border-black">{{$inventory['item_description']}}</td>
        <td class="border-2 border-black">{{$inventory['item_discount']}}</td>
        <td class="border-2 border-black">{{$inventory['expire_date']}}</td>
        <td class="border-2 border-black"><a href="/edit/{{$inventory->id}}">
            <i class="fa-solid fa-pencil"></i>Edit
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500">
            <form method="Post" action="/inventory/{{$inventory->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
        
            </form>
        </td>
    </tr>
    @endforeach
    
    </table>
</section>
</x-layout>