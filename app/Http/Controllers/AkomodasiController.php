<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Akomodasi;
 
class AkomodasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $akomodasis = Akomodasi::latest()->paginate(10);
 
        return view('akomodasis.index',compact('akomodasis'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }
 
    public function create()
    {
        return view('akomodasis.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'kode_akomodasi' => 'required',
            'nama_akomodasi'=> 'required',
            'alamat_akomodasi' => 'required',
            'kontak_akomodasi' => 'required',
        ]);
 
        Akomodasi::create($request->all());
 
        return redirect()->route('akomodasis.index')
                        ->with('success','Akomodasi created successfully.');
    }
 
    public function show(Akomodasi $akomodasi)
    {
        return view('akomodasis.show',compact('akomodasi'));
    }
 
    public function edit(Akomodasi $akomodasi)
    {
        return view('akomodasis.edit',compact('akomodasi'));
    }
 
    public function update(Request $request, Akomodasi $akomodasi)
    {
        $request->validate([
            'kode_akomodasi' => 'required',
            'nama_akomodasi'=> 'required',
            'alamat_akomodasi' => 'required',
            'kontak_akomodasi' => 'required',
        ]);
 
        $akomodasi->update($request->all());
 
        return redirect()->route('akomodasis.index')
                        ->with('success','Akomodasi updated successfully');
    }
 
    public function destroy(Akomodasi $akomodasi)
    {
        $akomodasi->delete();
 
        return redirect()->route('akomodasis.index')
                        ->with('success','Akomodasi deleted successfully');
    }
}