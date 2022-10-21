<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Book extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'author_id', 'country', 'language', 'pages', 'year', 'imageLink'];

    public function scopeFilter($query, array $filters)
    {
        $user = User::where('name', 'like', '%' . request('search') . '%')->first();
        $author = $user?->author;

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('author_id', '=', $author?->id)
                ->orWhere('language', 'like', '%' . request('search') . '%')
                ->orWhere('country', 'like', '%' . request('search') . '%')
                ->orWhere('year', 'like', '%' . request('search') . '%');
        }
    }


    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
