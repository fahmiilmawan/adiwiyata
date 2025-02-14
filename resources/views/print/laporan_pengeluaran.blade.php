<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengeluaran</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Pengeluaran</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Pengeluaran</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 2;
            @endphp
            @foreach ($records as $record)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $record->jenis_pengeluaran }}</td>
                    <td>{{ $record->jumlah }}</td>
                    <td>{{ number_format($record->harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($record->total, 0, ',', '.') }}</td>
                    <td>{{ $record->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
