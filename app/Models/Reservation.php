<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['email', 'book_id','borrow_date', 'return_date'];

    public function libraries(){
        return $this->hasMany(Library::class);
    }
}
