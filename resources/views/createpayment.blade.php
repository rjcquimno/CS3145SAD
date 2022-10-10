<x-layout>

    <x-card>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            PAYMENT RECEIVED
        </h2>
        <p class="mb-4">Cash Payment</p>
    </header>
    
    <form method="POST"action="/inventory" enctype="multipart/form-data">
        
        @csrf
        
    
    

 

        <div class="mb-6">
            <label
                for="item_price"
                class="inline-block text-lg mb-2"
                >Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_price"
                placeholder="Example: 21.22,22.36"
                value="{{old('item_price')}}"
            />
    
            @error('item_price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="item_procprice"
                class="inline-block text-lg mb-2"
                >Procurement Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_procprice"
                placeholder="Example: 21.22,22.36"
                value="{{old('item_procprice')}}"
            />
    
            @error('item_procprice')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        
    

        <div class="mb-6">
            <label
                for="item_discount"
                class="inline-block text-lg mb-2"
                >Item Discount</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_discount"
                placeholder="Example: 10.51,7.97"
                value="{{old('item_discount')}}"
            />
    
            @error('item_discount')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>


    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Submit Payment
            </button>
    
            <a href="/inventory" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
    </x-layout>