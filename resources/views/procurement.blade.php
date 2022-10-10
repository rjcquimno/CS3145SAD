<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Procurement</h1>
    </section>
@include('partials._search')

<br/>
<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">id</td>
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
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
        <td class="border-2 border-black">{{$inventory['expire_date']}}</td>
        <td class="border-2 border-black"><a href="/stockin/{{$inventory->id}}">
            <i class="fa-solid fa-pencil"></i>Stock in
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500"> 
            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Stock out</button>
        </td>
    </tr>
    @endforeach
    
    </table>
</section>
</x-layout>