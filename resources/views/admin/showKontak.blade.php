@if($data -> isEmpty())
    <h6 class="text-center">Siswa Belum Memiliki Kontak</h6>
@else

@foreach($data as $item)
    <div class="card">
        <div class="card-header">
            {{$item->nama}}
        </div>
        <div class="card-body">
        <a href="{{$item->desc_kntk}}">
                    {{$item->jenis->jenis}}<br>   
                </a>
        </div>
        <div class="card-footer">
            <a href="{{route('masterkontak.hapus', $item->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
            <a href="/masterkontak/{{$item->id}}/edit" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
        </div>
    </div>
    @endforeach
@endif