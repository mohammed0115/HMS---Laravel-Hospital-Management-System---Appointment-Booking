@if($row->rate)
    <p class="cur-margin">{{ getCurrencySymbol().' '.$row->rate }}</p>
@else
    N/A
@endif
