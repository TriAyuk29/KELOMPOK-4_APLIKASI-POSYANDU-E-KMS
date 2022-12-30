<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeserta1;

class DataPesertaController1 extends Controller
{
    //
    public function DataPeserta1View(){
        //$allDatamhs=mhs::all();
        $data=DataPeserta1::all();
        return view('backend.dataPeserta1.view_datapeserta1', compact('data'));
    }
    public function DataPeserta1Add(){
        //$allDataUser=Mhs::all();
        //$data['allDataMhs']=Mhs::all();
        return view('backend.datapeserta1.add_datapeserta1');
    
    }
    public function DataPeserta1Store(Request $request){
        
        $data=new DataPeserta1();
        $data->nama_pasien=$request->nama_pasien;
        $data->alamat=$request->alamat;
        $data->nohp=$request->nohp;
        $data->usia=$request->usia;
        $data->save();

        return redirect()->route('datapeserta1.view')->with('info','Tambah Data Berhasil');
    }

    public function DataPeserta1Edit($id){
        //dd('berhasil masuk controller user edit');
        $editData= DataPeserta1::find($id);
        return view('backend.DataPeserta1.edit_datapeserta1', compact('editData'));
    }


    public function DataPeserta1Update(Request $request, $id){
        
        
        // $validatedData=$request->validate([
        //     'email' =>'required|unique:users',
        //     'textNama' =>'required',
        // ]);
        //dd($request);
        $data=DataPeserta1::find($id);
        $data->nama_pasien=$request->nama_pasien;
        $data->alamat=$request->alamat;
        $data->nohp=$request->nohp;
        $data->usia=$request->usia;
        // $data->email=$request->email;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }

        $data->save();

        return redirect()->route('datapeserta1.view')->with('info','Update Data berhasil');
    }
    public function DataPeserta1Delete($id){
        //dd('berhasil masuk controller barang edit');
        $deleteData= DataPeserta1::find($id);
        $deleteData->delete();


        return redirect()->route('datapeserta1.view')->with('info','Delete Data berhasil');
    }



}
