<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }


    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap'     => 'required',
            'email'     => 'required',
            'nomor_ktp'   => 'required',
            'nomor_hp'   => 'required',
            'alamat'   => 'required'
        ]);

        Post::create([
            'nama_lengkap'     => $request->nama_lengkap,
            'email'   => $request->email,
            'nomor_ktp'     => $request->nomor_ktp,
            'nomor_hp'     => $request->nomor_hp,
            'alamat'     => $request->alamat,
        ]);

        return redirect('/ticket/success')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}