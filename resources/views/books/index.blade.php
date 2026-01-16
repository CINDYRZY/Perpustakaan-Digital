<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
        </tr>

        @foreach ($books as $book)
        <tr>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->stok }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
