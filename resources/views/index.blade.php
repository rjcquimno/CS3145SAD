<x-layout>
    @include('partials._hero')
    @auth

    
    <div class="container">
        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2"> 
    
           <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-6">
                    <div class="col-lg-2">
                    <h1 class="text-4xl font-bold uppercase text-black">
                            <a href="/salesorder" class="hover:text-laravel pt-1 py-2 px-5 border-8 border-black">
                                &nbsp&nbsp&nbsp&nbsp Cashier &nbsp&nbsp&nbsp&nbsp&nbsp
                            </a><br><br>
                            <a href="/saleshistory" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Sales &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            </a><br><br>
                            <a href="/inventory" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                &nbsp Inventory &nbsp
                            </a><br><br>
                           <a href="/procurement" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Stock&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            </a><br><br>
                            <a href="/supplier" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                &nbsp&nbsp&nbsp&nbsp Supplier&nbsp&nbsp&nbsp&nbsp
                            </a><br><br>
                            <a href="/employee" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                &nbsp&nbsp&nbsp Employee&nbsp&nbsp&nbsp
                            </a><br><br>
                            <a href="/showattendancecreator/{{$id=Auth::id();}}" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                Attendance
                            </a>

                           
                        
                    </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endauth
</x-layout>

    
    
    
    
    
