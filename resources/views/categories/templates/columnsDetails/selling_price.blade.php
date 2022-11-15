@if(!empty($row->selling_price))
    <p class="cur-margin">{{ getCurrencySymbol().' '.number_format($row->selling_price) }} </p>
@else
    N/A
@endif
