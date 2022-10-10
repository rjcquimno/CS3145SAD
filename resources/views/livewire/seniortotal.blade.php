    <tr class="font-bold text-center">
        @if ($show)
        <td></td>
        <td ></td>
        <td ></td>
        <td class="border-2 border-black">Senior Discount</td>
        <input type="hidden" name="order_discount" value="0" class="text-center" readonly>
        <td class="border-2 border-black"><input type="text" name="order_senior_discount" value="{{$subtotal}}" class="text-center" readonly></td>
        @endif 
    </tr>

