<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
   public function index(Request $request)
   {
        if($request->has('cari')){
          $data_siswa = \App\Siswa::where('nama_depan', 'LIKE', '%'.$request->cari.'%')->get();
        }
        else{
           	$data_siswa = \App\Siswa::all();
        }
   	  return view('siswa.index',['data_siswa' => $data_siswa]);
   }

   public function create(Request $request)
      {

        // Insert ke table siswa        
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
   	    $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->save();

          // Insert ke table user
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());
        
        return redirect('/siswa')->with('sukses','Data Berhasil diinput !');
   }

   public function edit($id)
   {
    $siswa = \App\Siswa::find($id);
    return view('siswa/edit',['siswa' => $siswa]);
   }

   public function update(Request $request,$id)
   {
   // dd($request->all());
   	$siswa = \App\Siswa::find($id);
   	$siswa->update($request->all());
    // untuk mengecek
    if($request->hasFile('avatar')){
      // memindahkan file avatar ke images                                 // memanggil nama original name dari file yg kita upload
      $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
      // menyimpan ke database
      $siswa->avatar = $request->file('avatar')->getClientOriginalName();
      $siswa->save();
    }
   	return redirect('/siswa')->with('sukses','Data Berhasil diupdate !');
   }

   public function delete($id)
   {
      $siswa = \App\Siswa::find($id);
      $siswa ->delete();
      return redirect('/siswa')->with('sukses','Data Berhasil didelete !');
   }

   public function profile($id)
   {
     $siswa = \App\Siswa::find($id);
                                  // untuk melempar data ke siswa
     return view('siswa.profile', ['siswa'=>$siswa]);
   }
}