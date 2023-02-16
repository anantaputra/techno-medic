@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
    </div>
     
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no=1;
                @endphp
                @foreach (App\Models\User::where('username', '!=', 'admin')->get() as $item)
                <tr>
                    <td>{{$no++;}}</td>
                    <td>{{$item->username}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>
                        @if ($item->is_active == 0)
                        <a href="{{route('admin.user.active', ['id'=>$item->uuid])}}" type="button" class="btn btn-block btn-success">Aktifkan</a>
                        @else
                        <button type="button" class="btn btn-block btn-success" disabled>Aktifkan</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection