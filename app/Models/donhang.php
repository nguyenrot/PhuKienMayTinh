<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function chitietdonhang(){
        return $this->hasMany(chitietdonhang::class,'donhang_id');
    }
}
