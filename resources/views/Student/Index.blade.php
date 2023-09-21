<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Page</title>
    <style>
        .text-bold {
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1 class="text-bold">Nama Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $item)
                <tr>
                    <td>{{$item['nim']}}</td>
                    <td>{{$item['nama']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
