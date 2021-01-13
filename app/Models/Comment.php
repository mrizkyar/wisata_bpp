<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'username', 'komentar','post_id'
    ];
    public function akomodasi()
    {
        return $this->belongsTo(Akomodasi::class);
    }
}

