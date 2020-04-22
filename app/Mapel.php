<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
   // mendeklarasikan kata siswa*karena siswa bukan bahasa inggris
	protected $table = 'mapel';
	protected $fillable = ['kode', 'nama', 'semester'];

	public function siswa()
	{
		return $this->belongsToMany(Siswa::class)->withpivot(['nilai']);
	}
}
