@if(!Empty($row->charge)) 
    <p class="mt-3">{{getCurrencySymbol().' '.number_format($row->charge)}}</p>
    @else
    N/A
@endif
