<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>One To One</title>
</head>
<body>
    <h1>Tes Relasi Buku → Penerbit</h1>
    @foreach($data as $row)
    <p>Judul: {{ $row->judul }}</p>
    <p>Penerbit: {{ $row->penerbit->nama ?? 'Tanpa Penerbit' }}</p>
    <hr>
@endforeach
</body>
</html>