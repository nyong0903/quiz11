<?php
namespace App\Http\Controllers;
use DB;
use App\models\Kategori;
use Illuminate\Http\Request;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan data kategori
        $ar_kategori = DB::table('kategori')->get();
        //arahkan ke halaman baru dengan menyertakan data kategori(compact)
        //di resources/views/kategori/index.blade.php
        
        return view('kategori.index',compact('ar_kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menambahkan kategori buku
        return view('kategori.c_kategori');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // tangkap data
        DB::table('kategori')->insert(
            [
            'nama'=>$request->nama,
            ]
        );
         //4. setelah input data arahkan ke/kategori
         return redirect()->route('kategori.index')->with('success', 'Kategori Buku Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Menampilkan Detail Kategori
        $ar_kategori = Kategori::where('id', $id)->get();
        return view('kategori.show', compact('ar_kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Mengarahkan Ke Arh Form Edit
        $data = DB::table('kategori')->where('id','=',$id)->get();
        return view('kategori.edit',compact('data'));

    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Mengarahkan Ke Halaman Update
         //mengarahkan ke halaman update
         DB::table('kategori')->where('id','=',$id)->update(
            [
                'nama'=>$request->nama,
            ]
        );

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       //Menghapus Data
       DB::table('kategori')->where('id',$id)->delete();
       return redirect('/kategori');
    }
}