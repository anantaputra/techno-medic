@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h3 class="card-title">Bordered Table</h3>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="{{route('admin.jenis_barang.tambah')}}" type="button" class="w-50 btn btn-block btn-primary">Tambah [+]</a>
            </div>
        </div>
    </div>
     
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama Jenis Barang</th>
                    <th class="text-center"><i class="nav-icon fas fa-ellipsis-h"></i></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach (App\Models\JenisBarang::all() as $item)
                <tr>
                    <td>{{$no++;}}</td>
                    <td>{{$item->nama}}</td>
                    <td>
                        <div class="row">
                            <div class="col-6">
                                <a href="{{route('admin.jenis_barang.ubah', ['id'=>$item->uuid])}}" type="button" class="btn btn-block btn-success">Edit</a>
                            </div>
                            <div class="col-6">
                                <a href="{{route('admin.jenis_barang.hapus', ['id'=>$item->uuid])}}" type="button" class="btn btn-block btn-danger">Hapus</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection