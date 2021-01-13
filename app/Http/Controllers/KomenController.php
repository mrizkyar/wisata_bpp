<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Komen;

class KomenController extends Controller
{
    public function store(Request $request,Post $post)
    {
        $post->komens()->create(array_merge(
                                $request->only('username'),
                                $request->only('komentar')
        )); 
        return redirect()->back();
        
    }
    public function destroy($id)
    {
        Komen::find($id)->delete();
        return redirect()->back()
            ->with('success','Komentar deleted successfully');

    }


}
