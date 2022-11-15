@if(!empty($row->service_tax))
<p class="cur-margin">  {{ getCurrencySymbol().' '.$row->service_tax }}</p>
    @else
    N/A
@endif

