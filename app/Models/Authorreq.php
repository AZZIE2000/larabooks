<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorreq extends Model
{
    use HasFactory;
    protected $fillable = ['bio', 'country', 'age', 'phone', 'gender', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
