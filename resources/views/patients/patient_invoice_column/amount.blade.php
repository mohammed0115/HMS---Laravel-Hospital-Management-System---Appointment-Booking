<span>{{ getCurrencySymbol() }}</span>
<span> {{ number_format($row->amount - ($row->amount * $row->discount / 100), 2) }} </span>
