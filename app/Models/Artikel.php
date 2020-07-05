<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Artikel {
	protected $fillable = [
		'slug'
	];
	public static function get_all(){
		$artikel = DB::table('artikel')->get();
		return $artikel;
	}
	public static function save($data){
		$artikel = DB::table('artikel')->insert($data);
		return $artikel;
	}
	public static function find_by_id($id_artikel){
		$artikel = DB::table('artikel')
			->where('id_artikel',$id_artikel)
			->first();
		return $artikel;
	}
	public static function update($id_artikel, $request){
		$artikel = DB::table('artikel')
				->where('id_artikel',$id_artikel)
				->update([
					'judul'=>$request["judul"],
					'isi'=>$request["isi"],
					'slug'=>$request["slug"],
					'tag'=>$request["tag"],
				]);
		return $artikel;
	}
	public static function destroy($id_artikel){
		$deleted = DB::table('artikel')
				->where('id_artikel',$id_artikel)
				->delete();
		return $deleted;
	}
}