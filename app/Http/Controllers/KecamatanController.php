<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Kecamatan;
 
class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kecamatans = Kecamatan::latest()->paginate(10);
 
        return view('kecamatans.index',compact('kecamatans'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
 
    public function create()
    {
        return view('kecamatans.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'kode_post' => ['required','unique:kecamatans'],
            'nama_kecamatan' => ['required','unique:kecamatans'],
        ]);
 
        Kecamatan::create($request->all());
 
        return redirect()->route('kecamatans.index')
                        ->with('success','Kecamatan created successfully.');
    }
 
    public function show(Kecamatan $kecamatan)
    {
        return view('kecamatans.show',compact('kecamatan'));
    }
 
    public function edit(Kecamatan $kecamatan)
    {
        return view('kecamatans.edit',compact('kecamatan'));
    }
 
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $request->validate([
            'kode_post' => ['required','unique:kecamatans'],
            'nama_kecamatan' => ['required','unique:kecamatans'],
        ]);
 
        $kecamatan->update($request->all());
 
        return redirect()->route('kecamatans.index')
                        ->with('success','Kecamatan updated successfully');
    }
 
    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();
 
        return redirect()->route('kecamatans.index')
                        ->with('success','Kecamatan deleted successfully');
    }
}