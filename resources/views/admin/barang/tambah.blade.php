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
            
            
            <form action="{{isset($id) ? route('admin.barang.edit') : route('admin.barang.simpan')}}" method="POST">
                @csrf
                @if (isset($id))
                    <input type="hidden" name="uuid" value="{{$id}}">
                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleSelectRounded0">Jenis Barang</label>
                        <select name="jenis" class="custom-select rounded-0" id="exampleSelectRounded0">
                            <option selected disabled>-Pilih Jenis Barang-</option>
                            @if (isset($id))
                            @foreach (App\Models\JenisBarang::all() as $item)
                            <option {{($item->id==App\Models\Barang::where('uuid', $id)->first()->jenis_barang) ? 'selected' : ''}} value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            @else
                            @foreach (App\Models\JenisBarang::all() as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Jenis Barang" value="{{isset($id) ? App\Models\Barang::where('uuid', $id)->first()->nama : ''}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Harga Barang</label>
                        <input type="number" name="harga" class="form-control" id="exampleInputEmail2" placeholder="Harga Barang" value="{{isset($id) ? App\Models\Barang::where('uuid', $id)->first()->harga : ''}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Stok Barang</label>
                        <input type="number" name="stok" class="form-control" id="exampleInputEmail3" placeholder="Stok Barang" value="{{isset($id) ? App\Models\Barang::where('uuid', $id)->first()->stok : ''}}" required>
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