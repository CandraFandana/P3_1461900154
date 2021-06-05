<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dokter154;
use App\Models\kamar154;
use App\Models\pasien154;
use App\Models\User;

class doktercontroller extends Controller
{
    public function index(){
        $pasien =pasien154::all();
        return view('pasien154',[
            'pasien' => $pasien
        ]);
    }

    public function search($key){
        $kamar = kamar154::where('');
        return view('kamar154',[
            'kamar' => $kamar
        ]);
        }
    public function tambah(){
        $kamar = kamar154::all();
        $pasien = pasien154::all();
        return view('tambah-dokter154',[
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function edit ($id){
        $kamar = kamar154::all();
        $pasien = pasien154::all();
        $dokter = dokter154::all();
        return view('edit-dokter154',[
            'dokter' => $dokter,
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
     }

    public function update(Request $request, $id){
        Transaksi::where('id',$id)->update([
            'id_pasien'=>$request->id_pasien,
            'id_kamar'=>$request->id_kamar

        ]);
    }

    public function destroy($id){
        $dokter = dokter154::where('id',$id)->first();
        $dokter->delete();
        return redirect()->route('');
    }
}
