
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
    
    <table class="table-auto w-25 overflow-y-scroll h-32">
        <tr class="font-bold text-center">
            <td class="border-2 border-black">Order ID</td>
            <td class="border-2 border-black">Payment ID</td>
            <td class="border-2 border-black">Amount Paid</td>
            <td class="border-2 border-black">Timestamp</td>       
        </tr>
    @foreach ($cashlist as $cash)
    @csrf
        <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">{{$cash['order_id']}}</td>
            <td class="border-2 border-black">{{$cash['cashpayment_id']}}</td>
            <td class="border-2 border-black">{{$cash['cashpayment_amount']}}</td>
            <td class="border-2 border-black">{{$cash['created_at']}}</td>
            </td>    
        </tr>
    @endforeach
    </table>
    
     <table class="table-auto w-25 overflow-y-scroll h-32">
        <tr class="font-bold text-center">
            <td class="border-2 border-black">Order ID</td>
            <td class="border-2 border-black">Payment ID</td>
            <td class="border-2 border-black">Card Type</td>
            <td class="border-2 border-black">Card Number</td>
            <td class="border-2 border-black">Amount Paid</td>
            <td class="border-2 border-black">Timestamp</td>       
        </tr>
    @foreach ($cardlist as $card)
    @csrf
        <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">{{$card['order_id']}}</td>
            <td class="border-2 border-black">{{$card['cardpayment_id']}}</td>
            <td class="border-2 border-black">{{$card['card_number']}}</td>
            <td class="border-2 border-black">{{$card['card_type']}}</td>
            <td class="border-2 border-black">{{$card['cardpayment_amount']}}</td>
            <td class="border-2 border-black">{{$card['created_at']}}</td>
            </td>    
        </tr>
    @endforeach
    </table>
    
</section>
</x-layout>