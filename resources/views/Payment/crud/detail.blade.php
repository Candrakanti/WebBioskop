    <table>
    <thead>
        <tr>
            <th>Customer ID</th>
            <th>Number of Tickets</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customerTicketCount as $row)
        <tr>
            <td>{{ $row->id_customer }}</td>
            <td>{{ $row->jumlah }}</td>
        </tr>
        @endforeach
    </tbody>
</table>