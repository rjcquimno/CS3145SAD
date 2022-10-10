
<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Inventory</h1>
    </section>
@include('partials._search')
@livewireScripts
<a href="/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Order</a>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4">
     <form method="POST" action="/salesorder" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
    <livewire:seniorbutton/>
     <table class="table-auto m-10">
        <tr class="font-bold text-center">
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
        <td class="border-2 border-black">item_discount</td>
        <td class="border-2 border-black">item_price</td>
        
    </tr>
    
    @foreach ($inventorylist as $inventory)
    @csrf
    <livewire:addtocarttable :barcode="$inventory['item_barcode']" :oldquantity="$inventory['item_quantity']" :name="$inventory['item_name']" :price="$inventory['item_price']" :discount="$inventory['item_discount']" :wire:key="$inventory['item_barcode']"/>
    @endforeach
    <livewire:ordertotal/>
    <livewire:taxtotal/>
    <livewire:seniortotal/>
    <livewire:grandtotal/>

    <tr>
        <div class="mb-6">
            <label
                for="item_price"
                class="inline-block text-lg mb-2"
                >Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-auto"
                name="item_price"
                placeholder="Example: 21.22,22.36"
                
            />
    
            @error('item_price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Submit Payment
            </button>
        </div>
    </tr>
    
    </table>
    </form>
    
    
    
    
    
    <table class="table-auto m-10  w-25">
        <tr class="font-bold text-center">
        
        
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
        
        <td class="border-2 border-black">item_price</td>
        
        
        <td class="border-2 border-black">item_discount</td>
        <td class="border-2 border-black">expire_date</td>
      
       
        
    </tr>
    @foreach ($inventorylist as $inventory)
    @csrf
    <tr class="border-2 border-black text-center">
        
        
        <td class="border-2 border-black">{{$inventory['item_barcode']}}</td>
        <td class="border-2 border-black">{{$inventory['item_name']}}</td>
        <td class="border-2 border-black">{{$inventory['item_quantity']}}</td>
        
        <td class="border-2 border-black">{{$inventory['item_price']}}</td>
        
        
        <td class="border-2 border-black">{{$inventory['item_discount']}}</td>
        <td class="border-2 border-black">{{$inventory['expire_date']}}</td>
        <td class="border-2 border-black">
           
            <livewire:addtocart :itemId="$inventory['item_barcode']" />
            
        
    
        </td>
        
    </tr>
    @endforeach
    
    </table>
    
    <table class="table-auto w-25 overflow-y-scroll h-32">
        <tr class="font-bold text-center">
        
        
        <td class="border-2 border-black">ID</td>
        <td class="border-2 border-black">Order Total</td>
        <td class="border-2 border-black">Order Discount</td>
        
        <td class="border-2 border-black">Senior Discounted</td>
        
        
        <td class="border-2 border-black">Timestamp</td>
    
      
       
        
    </tr>
    @foreach ($salelist as $sales)
    @csrf
    <tr class="border-2 border-black text-center">
        <td class="border-2 border-black">{{$sales['id']}}</td>
        <td class="border-2 border-black">{{$sales['order_total']}}</td>
        <td class="border-2 border-black">{{$sales['order_discount']}}</td>
        <td class="border-2 border-black">{{$sales['order_senior_discount']}}</td>
        <td class="border-2 border-black">{{$sales['created_at']}}</td>
        </td>
        
    </tr>
    @endforeach
    
    </table>
    
    
    <div>
   
    </div>
    
</section>
</x-layout>