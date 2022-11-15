@if(!empty($row->net_salary))
    <p class="cur-margin">{{ getCurrencySymbol().' '.number_format($row->net_salary) }} </p>
@else
    N/A
@endif
