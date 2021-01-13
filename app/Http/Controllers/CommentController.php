<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akomodasi;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request,Akomodasi $akomodasi)
    {
        $akomodasi->comments()->create(array_merge(
                                $request->only('username'),
                                $request->only('komentar')
        )); 
        return redirect()->back();
        
    }
    public function destroy($id)
    {
        Comment::find($id)->delete();
        return redirect()->back()
            ->with('success','Komentar deleted successfully');

    }

}