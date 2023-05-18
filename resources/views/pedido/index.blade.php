<h1>Listagem pedidos </h1>
<table>
    <thead>
        <th>id</th>
        <th>diarias</th>
        <th>produtos</th>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
        <tr>
            <td>
                {{$pedido->id}}
                {{$pedido->diarias}}
                {{$pedido->produtos}}
            </td>
        </tr>
    
        @endforeach
    </tbody>

</table>
