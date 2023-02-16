@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <h3 class="card-title">Bordered Table</h3>
            </div>
        </div>
    </div>
     
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
            </div>
            
            
            <form action="{{isset($id) ? route('admin.jenis_barang.edit') : route('admin.jenis_barang.simpan')}}" method="POST">
                @csrf
                @if (isset($id))
                    <input type="hidden" name="uuid" value="{{$id}}">
                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jenis Barang</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Jenis Barang" value="{{isset($id) ? App\Models\JenisBarang::where('uuid', $id)->first()->nama : ''}}" required>
                    </div>
                </div>
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection