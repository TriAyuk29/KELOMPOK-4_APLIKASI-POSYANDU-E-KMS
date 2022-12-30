<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPeserta1;

class DataPesertaController1 extends Controller
{
    //
    public function DataPeserta1View(Request $request)
    {
        $DataPeserta1 = DataPeserta1::all();
        return response()->json($DataPeserta1, 200);
    }

    public function DataPeserta1Add(Request $request)
    {
        $validateData  = $request->validate([
            'nama_pasien'           => 'required',
            'alamat'         => 'required',
            'nohp'                 => 'required',
            'usia'                 => 'required',
        ]);

        $DataPeserta1 = new DataPeserta1([
            'nama_pasien'             => $request->nama_pasien,
            'alamat'             => $request->alamat,
            'nohp'                  => $request->nohp,
            'usia'                  => $request->usia,
        ]);

        $DataPeserta1->save();

        return response()->json($DataPeserta1, 201);
    }
    public function DataPeserta1Update(Request $request, $id)
    {
        $DataPeserta1 = DataPeserta1::find($id);
        $DataPeserta1->nama_pasien           = $request->input('nama_pasien');
        $DataPeserta1->alamat                = $request->input('alamat');
        $DataPeserta1->nohp                  = $request->input('nohp');
        $DataPeserta1->usia                  = $request->input('usia');

        $DataPeserta1->save();

        return response()->json($DataPeserta1, 201);
    }
    public function DataPeserta1Delete(Request $request, $id)
    {
        $DataPeserta1 = DataPeserta1::find($id);
        $DataPeserta1->delete();

        return response()->json($DataPeserta1, 201);
    }
}
