@if($data -> isEmpty())
    <h6 class="text-center">Siswa Belum Memiliki Kontak</h6>
@else
@foreach($data as $item)
    <div class="card">
        <div class="card-header">
            {{$item->siswa->nama}}
        </div>
        <div class="card-body">
            <h3>Instagram</h3>
            {{$item->instagram}}
            <h3>Whatsapp</h3>
            {{$item->whatsapp}}
        </div>
        <div class="card-footer">
            <a href="{{route('masterkontak.destroy', $item->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
            <a href="{{route('masterkontak.edit', $item->id)}}" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
        </div>
    </div>
    @endforeach
@endif