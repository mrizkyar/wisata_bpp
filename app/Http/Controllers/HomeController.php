<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use DB;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function adminHome()
     {
        $count = DB::table('users')->count();
        $post = DB::table('posts')->count();
        $akomodasi = DB::table('akomodasis')->count();
        $kecamatan = DB::table('kecamatans')->count();
        return view('adminHome',compact('count','post','akomodasi','kecamatan'));
     }
     
 }