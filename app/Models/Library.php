<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'author', 'ganre_id', 'release_date'];
    public function Foglalasok(){
        return $this->belongsTo(Reservation::class);
    }
}
