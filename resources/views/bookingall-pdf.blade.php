<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pemesanan Ticket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Pemesanan Ticket</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Ticket</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($booking as $b)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $b->id_ticketing }}</td>
                <td>{{ $b->name }}</td>
                <td>{{ $b->address }}</td>
                <td>{{ $b->phone }}</td>
                <td>{{ $b->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
