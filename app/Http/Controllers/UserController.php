<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
 
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
 
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
 
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ]);
 
        $user->update($request->all());
 
        return redirect()->route('home')
                        ->with('success','User updated successfully');
    }
 
    public function destroy(User $user)
    {
        $user->delete();
 
        return redirect()->route('users.index')
                        ->with('success','Users deleted successfully');
    }
}