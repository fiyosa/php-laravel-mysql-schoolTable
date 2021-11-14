<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function home()
	{
		return view('dashboard.dashboard', [
			'title' => 'Dashboard'
		]);
	}

	public function index(Request $request, Post $post)
	{
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
			return view('dashboard.posts.index', [
				'title' => 'Dashboard',
				'search' => 'active',
				'posts' => 	$posts
			]);
		}
		else{
			return view('dashboard.posts.index', [
				'title' => 'Dashboard',
				'search' => 'active',
				'posts' => Post::latest()->get()
			]);
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('dashboard.posts.create', [
			'title' => 'Create',
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validateData = $request->validate([
			'nama' => 'required|min:3',
			"nip" => '',
      // "pangkat_gol" => '',
      // "pangkat_tmt" => '',
      "jabatan_nama" => '',
      "jabatan_tmt" => '',
      "masa_thn" => '',
      "masa_bln" => '',
      // "latihan_nama" => '',
      // "latihan_thn" => '',
      "pendidikan_nama" => '',
      "pendidikan_lulus" => '',
      "pendidikan_ijazah" => '',
      "ttl_tempat" => '',
      "ttl_tanggal" => '',
      "agama" => '',
      "tugas" => '',
		]);
		$validateData['post_id'] = Str::random(20);
		Post::create($validateData);
		return redirect('/dashboard/posts')->with('success', 'New data has been added');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Post $post)
	{
		return view('dashboard.posts.index', [
			'title' => 'Dashboard',
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Post $post)
	{
		return view('dashboard.posts.edit', [
			'title' => 'Dashboard',
			'post' => Post::where('id', $post->id)->get()
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Post $post)
	{
		$validateData = $request->validate([
			'nama' => 'required|min:3',
			"nip" => '',
      // "pangkat_gol" => '',
      // "pangkat_tmt" => '',
      "jabatan_nama" => '',
      "jabatan_tmt" => '',
      "masa_thn" => '',
      "masa_bln" => '',
      // "latihan_nama" => '',
      // "latihan_thn" => '',
      "pendidikan_nama" => '',
      "pendidikan_lulus" => '',
      "pendidikan_ijazah" => '',
      "ttl_tempat" => '',
      "ttl_tanggal" => '',
      "agama" => '',
      "tugas" => '',
		]);
		Post::where('id', $post->id)->update($validateData);
		return redirect('/dashboard/posts')->with('success', 'Data has been updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Post $post)
	{
		Post::destroy($post->id);
		return redirect('/dashboard/posts')->with('success', 'Data has been deleted!');
	}

}
