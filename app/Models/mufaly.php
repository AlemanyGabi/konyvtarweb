<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mufaly extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['ganre', 'ganre_id'];
    public function Library(){
        return $this->hasOne(Library::class);
    }
}
