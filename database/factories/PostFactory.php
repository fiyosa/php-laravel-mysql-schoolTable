<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$pangkat_gol = array('III/B','III/C','III/D','III/E');
		$jabatan_nama = array('Plt. Tata Usaha', 'Pelaksana TU', 'Tenaga Pendidikan');
		$latihan_nama = array('Prajabatan', 'Diklat');
		$pendidikan_nama = array('STIE', 'UNPAS', 'UNPAD', 'UPI', 'STMIK');
		$pendidikan_ijazah = array('SMEA', 'SMA', 'Sarjana', 'D.III', 'SD', 'SMK');
		$agama = array('Islam', 'Protestan', 'Katolik', 'Buddha', 'Khonghucu');
		$tugas = array('Bendahara Gaji', 'UK', 'Absensi');

		return [
			'post_id' => Str::random(20),
			'nama' => $this->faker->name(),
			'nip' => $this->faker->nik(),
			// 'pangkat_gol' => $pangkat_gol[array_rand($pangkat_gol)],
			// 'pangkat_tmt' => $this->faker->date('d-m-Y'),
			'jabatan_nama' => $jabatan_nama[array_rand($jabatan_nama)],
			'jabatan_tmt' => $this->faker->date('d-m-Y'),
			'masa_thn' => $this->faker->date('Y'),
			'masa_bln' => $this->faker->date('m'),
			// 'latihan_nama' => $latihan_nama[array_rand($latihan_nama)],
			// 'latihan_thn' => $this->faker->date('Y'),
			'pendidikan_nama' => $pendidikan_nama[array_rand($pendidikan_nama)],
			'pendidikan_lulus' => $this->faker->date('Y'),
			'pendidikan_ijazah' => $pendidikan_ijazah[array_rand($pendidikan_ijazah)],
			'ttl_tempat' => $this->faker->city(),
			'ttl_tanggal' => $this->faker->date('d-m-Y'),
			'agama' => $agama[array_rand($agama)],
			'tugas' => $tugas[array_rand($tugas)],
		];
	}
}
