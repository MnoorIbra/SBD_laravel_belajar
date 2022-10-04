<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProdukController extends Controller
{
    public function index() {
        $datas = DB::select('select * from produk');

        return view('produk.index')
            ->with('datas', $datas);
    }

    public function create() {
        return view('produk.add');
    }

    public function store(Request $request) {
        $request->validate([
            'id_produk' => 'required',
            'merk' => 'required',
            'stock' => 'required',
            'harga' => 'required',

        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO produk(id_produk, merk, stock, harga, id_admin) VALUES (:id_produk, :merk, :stock, :harga, 3)',
        [
            'id_produk' => $request->id_produk,
            'merk' => $request->merk,
            'stock' => $request->stock,
            'harga' => $request->harga,

        ]
        );

        // Menggunakan laravel eloquent
        // produk::create([
        //     'id_produk' => $request->id_produk,
        //     'nama_produk' => $request->nama_produk,
        //     'alamat' => $request->alamat,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        // ]);

        return redirect()->route('produk.index')->with('success', 'Data produk berhasil disimpan');
    }

    public function edit($id) {
        $data = DB::table('produk')->where('id_produk', $id)->first();

        return view('produk.edit')->with('data', $data);
    }

    public function update($id, Request $request) {
        $request->validate([
            'id_produk' => 'required',
            'merk' => 'required',
            'stock' => 'required',
            'harga' => 'required',

        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('UPDATE produk SET id_produk = :id_produk, merk = :merk, stock = :stock, harga = :harga, id_admin = 3 WHERE id_produk = :id',
        [
            'id_produk' => $request->id_produk,
            'merk' => $request->merk,
            'stock' => $request->stock,
            'harga' => $request->harga
        ]
        );

        // Menggunakan laravel eloquent
        // produk::where('id_produk', $id)->update([
        //     'id_produk' => $request->id_produk,
        //     'nama_produk' => $request->nama_produk,
        //     'alamat' => $request->alamat,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        // ]);

        return redirect()->route('produk.index')->with('success', 'Data produk berhasil diubah');
    }

    public function delete($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('DELETE FROM produk WHERE id_produk = :id_produk', ['id_produk' => $id]);

        // Menggunakan laravel eloquent
        // produk::where('id_produk', $id)->delete();

        return redirect()->route('produk.index')->with('success', 'Data produk berhasil dihapus');
    }

}
