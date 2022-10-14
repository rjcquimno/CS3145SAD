<x-layout>
    @include('partials._hero')
    @auth

    
    <div class="container">
        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2"> 
    
           <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-6">
                    <div class="col-lg-2">
                    <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/salesorder" class="hover:text-laravel pt-1 py-1 px-4 border-8 border-black">
                                &nbsp &nbsp Cashier &nbsp &nbsp
                            </a>
                        
                    </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/saleshistory" class="hover:text-laravel px-1 border-8 border-black">
                                &nbsp &nbsp &nbsp &nbsp Sales &nbsp &nbsp &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/inventory" class="hover:text-laravel border-8 border-black pr-3 pl-3">
                                &nbsp Inventory &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/procurement" class="hover:text-laravel border-8 border-black">
                                &nbsp &nbsp &nbsp &nbsp STOCK &nbsp &nbsp &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/supplier" class="hover:text-laravel border-8 border-black pr-3 pl-3">
                                &nbsp  &nbsp Supplier &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/employee" class="hover:text-laravel border-8 px-1 border-black">
                                &nbsp &nbsp Employee &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
            <br/>
            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-3xl font-bold uppercase text-black">
                            <a href="/showattendancecreator/{{$id=Auth::id();}}" class="hover:text-laravel border-8 border-black">
                                &nbsp Attendance &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
    </div>
</div>
<div>

    @endauth
</x-layout>

    
    
    
    
    