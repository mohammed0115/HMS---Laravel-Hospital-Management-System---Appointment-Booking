@if($row->purchase_price)
    <p class="cur-margin"> {{getCurrencySymbol() . " " . $row->purchase_price}}
@else
    {{__('messages.common.n/a')}}
@endif
