<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Destinasi;

class UserController extends Controller
{
    public function login()
    {
        return view('welcome');
    }

    public function postlogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('admin');
        }
        return redirect()->route('login')->with('ermessage', 'Username atau password salah');
    }

    public function admin()
    {
        $destinasi = Destinasi::all();
        return view('admin', compact('destinasi'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function posttambah(Request $req)
    {
        $req->validate([
            'foto'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'link'=>'required',
            'deskripsi'=>'required',
        ]);
        Destinasi::create([
            'nama' => $req->nama,
            'foto' => $req->foto->store('img'),
            'alamat' => $req->alamat,
            'link' => $req->link,
            'deskripsi' => $req->deskripsi,
            'user_id' => auth()->id()
        ]);
        return redirect()->route('admin')->with('smessage', 'Data berhasil ditambahkan!');
    }

    public function edit(Destinasi $Destinasi)
    {
        return view('edit', compact('Destinasi'));
    }

    public function postedit(Request $req, Destinasi $Destinasi)
    {
        $data = $req->validate([
            'foto'=>'',
            'nama'=>'required',
            'alamat'=>'required',
            'link'=>'required',
            'deskripsi'=>'required',
        ]);
        if($req->hasFile('foto')){
            $data['foto'] = $req->foto->store('img');
        }else{
            unset($data['foto']);
        }
        $data['user_id'] = auth()->id();
        $Destinasi->update($data);

        return redirect()->route('admin')->with('smessage', 'Data berhasil diubah!');
    }

    public function hapus(Destinasi $Destinasi)
    {
        $Destinasi->delete();
        return redirect()->route('admin')->with('smessage', 'Data berhasil dihapus!');
    }

    public function logout()
    {
        auth()->logout();
        return view('welcome');
    }
}
