<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Komentar;
use Carbon\Carbon;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 3;
        $data_forum = Forum::orderBY('id', 'desc')->paginate($batas);
        $jml_forum = Forum::count();
        $tgl = Carbon::today();
        $no = $batas * ($data_forum->currentPage() - 1);
        return view('forum.index', compact('data_forum','no','jml_forum', 'tgl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $this->validate($request,[
            'judul_forum'         => 'required|string',
            'isi_forum'       => 'required|string',
            
        ]);
        $forum = New Forum;
        $forum->judul_forum = $request->judul_forum;
        $forum->isi_forum = $request->isi_forum;
        $forum->id = $request->id;

        $forum->save();
        return redirect('/forum')->with('pesan','Forum berhasil disimpan');

        /*$produk->produk_seo = Str::slug($request->nama_produk);

        $foto = $request->foto;
        //dd($request);
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(200,150)->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);

        $produk->foto = $namafile;
        $produk->save();
        return redirect('/produk')->with('pesan','Data produk berhasil disimpan');*/
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $forum = Forum::find($id);
        return view('forum.edit', compact("forum"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul_forum'         => 'required|string',
            'isi_forum'       => 'required|string',
        ]);
        $forum = Forum::find($id);
        $forum->judul_forum = $request->judul_forum;
        $forum->isi_forum = $request->isi_forum;

        
        //$produk->suka;
        $forum->update();
        return redirect('/forum')->with('pesan','Forum berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::find($id);
        $forum->delete();
        return redirect('/forum')->with('pesan', 'Forum berhasil dihapus');
    }

    public function detail_forum($id){
    
        $forum = Forum::find($id);
        $data_komentar = Komentar::where('id_forum', $forum->id)->get();
        return view('forum.detail_forum', compact('data_komentar', 'forum'));
        
    }

    public function likefoto(Request $request, $id){

        $forum = Forum::find($id);
        $forum->increment('suka');
        return back();
    }
}
