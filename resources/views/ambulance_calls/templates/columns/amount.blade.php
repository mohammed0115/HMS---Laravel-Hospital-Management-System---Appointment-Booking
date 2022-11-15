
@if($row->amount)
    <p class="cur-margin">{{ getCurrencySymbol().' '.$row->amount }}</p>
@else
    N/A
@endif
