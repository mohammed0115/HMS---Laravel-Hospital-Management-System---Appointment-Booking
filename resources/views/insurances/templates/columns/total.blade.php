@if(!empty($row->total))
    <p class="cur-margin">  {{ getCurrencySymbol().' '.$row->total }}</p>
@else
    N/A
@endif
