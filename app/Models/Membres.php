<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membres extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'age',
        'img',
        'genre_id'
    ];
    public function genre(){
        return $this->belongsTo(Genres::class);
    }
}
