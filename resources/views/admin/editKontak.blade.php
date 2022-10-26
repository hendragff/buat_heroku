@extends('admin/mainAdmin', ["elementActive" => "masterkontak"])
@section('title', 'Master Kontak')
@section('content-title', 'Edit Master Kontak')
@section('hacked', 'by who?')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-wight-bold text-primary">Data Siswa</h6>
            </div>
                <div class="card-body">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('masterkontak.update', ['masterkontak'=>$kontak->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="desc_kntk">Deskripsi</label>
                            <input type="text" class="form-control" id="desc_kntk" name="desc_kntk" value ="{{$kontak->desc_kntk}}" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="id_jns">Jenis Kontak</label>
                                <select type="multiple" class="form-control form-select" id="id_jns" name="id_jns" required>
                                    @foreach($data as $item)
                                    <option value="{{$item->id}}" @if($item->id == $kontak->id_jns) selected @endif>{{$item->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Edit">
                                <a href="{{route('masterkontak.index')}}" class="btn btn-danger">Batal</a>
                            </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@endsection