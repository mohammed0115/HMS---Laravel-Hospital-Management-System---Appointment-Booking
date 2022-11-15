<div class="d-flex align-items-center mt-2">
    @if(!empty($row->fee))
        <p class="cur-margin">{{ getCurrencySymbol().' '.number_format($row->fee) }} </p>
    @else
        N/A
    @endif    
</div>

