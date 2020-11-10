@foreach($trades as $trade)
    <tr>
        <td>{{$trade->ticketID}}</td>
        <td>{{$trade->created_at}}</td>
        <td>{{$trade->pair}}</td>
        <td>{{$trade->units}}</td>
        <td>{{$trade->type}}</td>
        <td>{{$trade->entry_price}}</td>
        <td>{{$trade->exit_price}}</td>
        <td>{{$trade->cost}}</td>
        <td>{{$trade->profit}}</td>
    </tr>
@endforeach

@if ($trades->hasPages())
    <tr>
        <td colspan="9" align="center">{{ $trades->links() }}</td>                
    </tr>   
@endif

                           