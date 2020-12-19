<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Kecamatan;
 
class KecamatanUserController extends Controller
{
    public function index()
    {
        $kecamatans = Kecamatan::latest()->paginate(5);
 
        return view('pengunjung.kecamatan.index',compact('kecamatans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Kecamatan $kecamatan)
    {
        return view('pengunjung.kecamatan.show',compact('kecamatan'));
    }
}