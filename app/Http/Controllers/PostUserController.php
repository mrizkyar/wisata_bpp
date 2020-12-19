<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;
 
class PostUserController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
 
        return view('pengunjung.post.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function show(Post $post)
    {
        return view('pengunjung.post.show',compact('post'));
    }
 
}