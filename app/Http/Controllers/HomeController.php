<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{	
  public function index(){
		return view('home', [
			'title' => 'Beranda',
			'active' => 'home'
		]); 
	}

  public function about(){
		return view('about', [
			'title' => 'Tentang',
			'active' => 'about'
		]); 
	}

  public function learning(){
		return view('learning', [
			'title' => 'Pembelajaran',
			'active' => 'learning'
		]); 
	}
	
  public function content(Request $request){
		if(request('search')){
			$posts = Post::where('nama', 'like', '%'.request('search').'%')
						->orwhere('nip', 'like', '%'.request('search').'%')
						// ->orwhere('pangkat_gol', 'like', '%'.request('search').'%')
						// ->orwhere('pangkat_tmt', 'like', '%'.request('search').'%')
						->orwhere('jabatan_nama', 'like', '%'.request('search').'%')
						->orwhere('jabatan_tmt', 'like', '%'.request('search').'%')
						->orwhere('masa_thn', 'like', '%'.request('search').'%')
						->orwhere('masa_bln', 'like', '%'.request('search').'%')
						// ->orwhere('latihan_nama', 'like', '%'.request('search').'%')
						// ->orwhere('latihan_thn', 'like', '%'.request('search').'%')
						->orwhere('pendidikan_nama', 'like', '%'.request('search').'%')
						->orwhere('pendidikan_lulus', 'like', '%'.request('search').'%')
						->orwhere('pendidikan_ijazah', 'like', '%'.request('search').'%')
						->orwhere('ttl_tempat', 'like', '%'.request('search').'%')
						->orwhere('ttl_tanggal', 'like', '%'.request('search').'%')
						->orwhere('agama', 'like', '%'.request('search').'%')
						->orwhere('tugas', 'like', '%'.request('search').'%')
						->get();
			return view('content', [
				'title' => 'Tenaga Kependidikan',
				'active' => 'content',
				'posts' => $posts
			]);
		}
		else{
			return view('content', [
				'title' => 'Tenaga Kependidikan',
				'active' => 'content',
				'posts' => Post::latest()->get()
			]);
		}

		
	}
}
