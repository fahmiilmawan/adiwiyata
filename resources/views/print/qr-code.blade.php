<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        td, th {
            padding: 10px;
            border: 1px solid #ddd;
        }

        img {
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
    <h1>QR Code Tanaman</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Tanaman</th>
                <th>QR Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tanaman as $item)
                <tr>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>
                        <img src="{{ $item->qrCode }}" alt="QR Code">
                        <br>
                        <p>{{ $item->nama_latin }}</p>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
