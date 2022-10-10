<x-layout>

    <x-card>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create Supplier
        </h2>
        <p class="mb-4">Add a new supplier</p>
    </header>
    
    <form method="POST"action="/supplier" enctype="multipart/form-data">
        
        @csrf
        
        <div class="mb-6">
            <label
                for="sup_name"
                class="inline-block text-lg mb-2"
                >Supplier Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_name" value="{{old('sup_name')}}" 
                placeholder="Example: Mark Collins"/>
                
    
            @error('sup_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        <div class="mb-6">
            <label for="sup_contactPerson" class="inline-block text-lg mb-2"
                >Supplier Contact Person</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_contactPerson"
                placeholder="Example: Mark Zen"
                value="{{old('sup_contactPerson')}}"
            />
    
            @error('sup_contactPerson')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        <div class="mb-6">
            <label
                for="sup_address"
                class="inline-block text-lg mb-2"
                >Supplier Address</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_address"
                placeholder="Example: Davao City"
                value="{{old('sup_address')}}"
            />
    
            @error('sup_address')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="sup_phoneNum"
                class="inline-block text-lg mb-2"
                >Supplier Phone Number</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_phoneNum"
                placeholder="Example: Small,Medium,Large"
                value="{{old('sup_phoneNum')}}"
            />
    
            @error('sup_phoneNum')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="sup_email"
                class="inline-block text-lg mb-2"
                >Supplier Email</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_email"
                placeholder="Example: test@gmail.com"
                value="{{old('sup_email')}}"
            />
    
            @error('sup_email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

       
    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Create Supplier
            </button>
    
            <a href="/supplier" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
    </x-layout>