<div class="d-flex align-items-center mt-2">
    @if(!empty($row->total_amount))
        <p class="cur-margin">  {{ getCurrencySymbol().' '.$row->total_amount }}</p>
    @else
        N/A
    @endif    
</div>

