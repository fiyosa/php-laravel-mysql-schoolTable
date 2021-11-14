<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function (Blueprint $table) {
			$table->id();
			$table->string('post_id')->unique();
			$table->string('nama');
			$table->string('nip')->nullable();
			// $table->string('pangkat_gol')->nullable();
			// $table->string('pangkat_tmt')->nullable();
			$table->string('jabatan_nama')->nullable();
			$table->string('jabatan_tmt')->nullable();
			$table->string('masa_thn')->nullable();
			$table->string('masa_bln')->nullable();
			// $table->string('latihan_nama')->nullable();
			// $table->string('latihan_thn')->nullable();
			$table->string('pendidikan_nama')->nullable();
			$table->string('pendidikan_lulus')->nullable();
			$table->string('pendidikan_ijazah')->nullable();
			$table->string('ttl_tempat')->nullable();
			$table->string('ttl_tanggal')->nullable();
			$table->string('agama')->nullable();
			$table->string('tugas')->nullable();
			$table->timestamps();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
