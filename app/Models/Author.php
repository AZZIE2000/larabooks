<?php

namespace App\Models;


use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;



    protected $fillable = ['bio', 'country', 'age', 'phone', 'gender', 'image', 'user_id'];
    



    public function books()
    {
        return $this->hasMany(Book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
