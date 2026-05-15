<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One To Many</title>
</head>
<body>

<h1>Data User & Pesanan</h1>

@foreach($data as $row)
    <h3>Nama User: {{ $row->name }}</h3>

    @forelse($row->pesanan as $rowPesanan)
        <p>- Pesanan ID: {{ $rowPesanan->id }}</p>
    @empty
        <p>Tidak ada pesanan</p>
    @endforelse

    <hr>
@endforeach

</body>
</html>