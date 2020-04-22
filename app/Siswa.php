<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	// mendeklarasikan kata siswa*karena siswa bukan bahasa inggris
    protected $table = 'siswa';
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'user_id'];

    public function getAvatar()
    {
    	if(!$this->avatar){
    		return asset('images/default.jpg');
    	}
    	return asset('images/'.$this->avatar);
    }

    //mendeklarasikan 2 tabel yang saling berelasi
    public function mapel()
    {
       return $this->belongsToMany(Mapel::class)->withpivot(['nilai']);
    }
}