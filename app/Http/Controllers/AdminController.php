<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function user()
    {
        return view('admin.user');
    }

    public function _active($id)
    {
        $user = User::where('uuid', $id)->first();
        $user->is_active = true;
        $user->save();
        return redirect()->back();
    }

    public function jenis_barang()
    {
        return view('admin.jenis_barang.index');
    }

    public function jenis_barang_tambah()
    {
        return view('admin.jenis_barang.tambah');
    }

    public function jenis_barang_simpan(Request $request)
    {
        $jenis = new JenisBarang();
        $jenis->nama = $request->nama;
        $jenis->save();
        return redirect()->route('admin.jenis_barang');
    }

    public function jenis_barang_ubah($id)
    {
        return view('admin.jenis_barang.tambah', compact('id'));
    }

    public function jenis_barang_edit(Request $request)
    {
        $jenis = JenisBarang::where('uuid', $request->uuid)->first();
        $jenis->nama = $request->nama;
        $jenis->save();
        return redirect()->route('admin.jenis_barang');
    }

    public function jenis_barang_hapus($id)
    {
        $jenis = JenisBarang::where('uuid', $id)->first();
        $jenis->delete();
        return redirect()->route('admin.jenis_barang');
    }

    public function barang()
    {
        return view('admin.barang.index');
    }

    public function barang_tambah()
    {
        return view('admin.barang.tambah');
    }

    public function barang_simpan(Request $request)
    {
        $barang = new Barang();
        $barang->jenis_barang = $request->jenis;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();
        return redirect()->route('admin.barang');
    }

    public function barang_ubah($id)
    {
        return view('admin.barang.tambah', compact('id'));
    }

    public function barang_edit(Request $request)
    {
        $barang = Barang::where('uuid', $request->uuid)->first();
        $barang->jenis_barang = $request->jenis;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();
        return redirect()->route('admin.barang');
    }

    public function barang_hapus($id)
    {
        $barang = Barang::where('uuid', $id)->first();
        $barang->delete();
        return redirect()->route('admin.barang');
    }
}
