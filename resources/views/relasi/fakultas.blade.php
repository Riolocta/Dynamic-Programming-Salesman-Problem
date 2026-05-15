<h1>UNIVERSITAS JAMBI</h1>
@foreach($data as $f)
    <h3>{{ $f->nama }}</h3>

    @foreach($f->prodi as $p)
        <p>- {{ $p->nama }}</p>
    @endforeach

@endforeach
