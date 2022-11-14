<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Tembusan;
use App\Models\JenisLaporan;
use App\Models\NomorLaporan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = auth()->user()->id;
        $nomorLaporan = Post::with('nomor_laporan')->get();
        $postsIn = Post::all()->where('kepada_id', $user);
        $postsTembusan = Post::with('tembusans')->where('id', $user)->get();

        $postsOut = Post::all()->where('author_id', $user);

        return view('dashboard.user.index', ['postsIn' => $postsIn,'postsTembusan' => $postsTembusan, 'postsOut' => $postsOut, 'author' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Push data to Post table
        $user = auth()->user()->id;
        $validateData = $request->validate([
            'jenis_laporan_id' => 'required',
            'judul_laporan' => 'required|max:255',
            'kepada_id' => 'required',
            'isi' => 'required',
            'gambar' => 'image|file|max:10240'
        ]);
        
        $validateData['tanggal'] = date("Y-m-d");
        $validateData['author_id'] = $user;

        if($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('images');
        }

        Post::create($validateData);

        //Push data to Tembusan table
        $lastPost = DB::table('posts')->latest()->first();
        $post_id = $lastPost -> id;

        if(!empty($request->input('tembusan'))){
            $checkbox = [];
            foreach ($request->input('tembusan') as $key => $value){
                array_push($checkbox, [
                    'post_id'=>$post_id,
                    'user_id'=>$value
                ]);
            }
            Tembusan::insert($checkbox);
        } else {
            $checkbox = '';
        }

        //Push data to NomorLaporan table
        // if(DB::table('nomor_laporans')->exists()){
        //     $lastNomorLaporan = DB::table('nomor_laporans')->where([
        //         ['user_id', $user],
        //         ['jenis_laporan_id', $request->input('jenis_laporan_id')]
        //     ])->latest()->first()->nomor_laporan;
        
        $lastNomorLaporans = DB::table('nomor_laporans')->where([
            ['user_id', $user],
            ['jenis_laporan_id', $request
            ->input('jenis_laporan_id')]
            ])
            ->latest()
            ->first();

        if($lastNomorLaporans){
            $lastNomorLaporan = DB::table('nomor_laporans')->where([
                ['user_id', $user],
                ['jenis_laporan_id', $request
                ->input('jenis_laporan_id')]
                ])
                ->latest()
                ->first()
                ->nomor_laporan;
            
            $currentNomorLaporan = $lastNomorLaporan + 1;
        } else {
            $currentNomorLaporan = 1;
        }
        
        $nomorLaporan = [
            'post_id' => $post_id,
            // 'user_id' => $request->input('author'),
            'user_id' => $user,
            'jenis_laporan_id' => $request->input('jenis_laporan_id'),
            'nomor_laporan' => $currentNomorLaporan
        ];

        NomorLaporan::create($nomorLaporan);

        //Redirection
        return redirect('/dashboard')->with('success', 'Laporan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        // $posts = Post::find(1)->with('tembusans');
        $posts = Post::with('tembusans')->where('id', $post->id)->get();

        return view('dashboard.user.show', ['post' => $post, 'posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   
        return view('dashboard.manage.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'video' => 'required|mimes:mp4|file:max:40000'
        ]);
        
        if($request->file('video')) {
            if($request->oldVideo){
                Storage::delete($request->oldVideo);
            }
            $validateData['video'] = $request->file('video')->store('videos');
        }

        Post::where('id', $post->id)
            ->update($validateData);

        return redirect('/dashboard/manage')->with('success', 'Video edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->video){
            Storage::delete($post->video);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/manage')->with('success', 'Video deleted successfully');
    }
}
