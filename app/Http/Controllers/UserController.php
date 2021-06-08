<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
 
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
 
    public function edit()
    {
       if(Auth::user())
       {
           $user = User::find(Auth::user()->id);
           if($user)
           {
               return view('users.edit')->withUser($user);
           }
            else
           {
               return redirect()->back();
           }
       } 
       else
       {
        return redirect()->back();
       } 
    }
 
    public function update(Request $request)
    {
        $user  = User::find(Auth::user()->id);
        if ($user)
        {
            $validate = $request->validate([
                'name'=>'required',
                'email'=>'required'
            ]);

            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();
            return redirect('/')->with('success','user edited successfully.');
            

        }
        else
        {
            return redirect()->back();
        }

        
 
    }
 
    public function destroy(User $user)
    {
        $user->delete();
 
        return redirect()->route('users.index')
                        ->with('success','Users deleted successfully');
    }
}