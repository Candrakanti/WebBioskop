    <table>
    <thead>
        <tr>
            <th>Number of Tickets</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customerTicketCount as $row)
        <tr>
            <td>{{ $row->jumlah }}</td>
        </tr>
        @endforeach
    </tbody>
</table>