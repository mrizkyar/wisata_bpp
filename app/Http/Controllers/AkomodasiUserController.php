<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Akomodasi;
 
class AkomodasiUserController extends Controller
{
    
    public function index()
    {
        $akomodasis = Akomodasi::latest()->paginate(5);
 
        return view('pengunjung.akomodasi.index',compact('akomodasis'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Akomodasi $akomodasi)
    {
        return view('pengunjung.akomodasi.show',compact('akomodasi'));
    }
}