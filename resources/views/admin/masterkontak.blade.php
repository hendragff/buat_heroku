@extends('admin/mainAdmin', ["elementActive" => "masterkontak"])
@section('title', 'Master Kontak')
@section('content-title', 'Master Kontak')
@section('hacked', 'by who?')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-wight-bold text-primary">Data Siswa</h6>
            </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <thead>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <!-- <th scope="col">Alamat</th> -->
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                <?php //$i = 1; ?>
                                @foreach($data as $i => $item)
                                <tr>
                                    <th scope="row">{{++$i}}</th>
                                    <td scope="row">{{$item->siswa->nama}}</td>
                                    <td>
                                    <a href="" onclick="show({{$item->id}}, event)" class="btn btn-info btn-circle btn-sm"><i class="fas fa-folder-open"></i></a>
                                        <form method="post" action="{{route('masterkontak.destroy', $item->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"  class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{route('tambah-kontak', $item->id)}}" class="btn btn-success btn-circle btn-sm btn-success btn-circle"><bold>+</bold></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Data Kontak</h6>
            </div>
            <div class="card-body" id="kontak">
                <h6 class="text-center">Pilih Siswa Dulu</h6>
            </div>
        </div>
    </div>
</div>
<script>
    function show(id, e){
        e.preventDefault();
        $.get('masterkontak/'+id, function(data){
            $('#kontak').html(data);
        })
    }
</script>
@endsection