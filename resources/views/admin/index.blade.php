@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
    
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ App\Models\User::where('is_active', true)->where('username', '!=', 'admin')->count() }}</h3>
                <p>User Aktif</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('admin.user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ App\Models\User::where('username', '!=', 'admin')->count() }}</h3>
                <p>Total User</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('admin.user')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{App\Models\JenisBarang::count()}}</h3>
                <p>Jenis Barang</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
                <a href="{{route('admin.jenis_barang')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{App\Models\Barang::count()}}</h3>
                <p>Barang</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('admin.barang')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
</div>
@endsection