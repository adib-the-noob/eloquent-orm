<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "cat",
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
