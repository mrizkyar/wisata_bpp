<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;
 
class PostUserController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        return view('pengunjung.post.index', compact('posts'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function show(Post $post)
    {
        return view('pengunjung.post.show',compact('post'));
    }
 
}