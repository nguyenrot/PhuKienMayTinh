<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sanpham(){
        return $this->hasOne(sanpham::class,'id','sanpham_id');
    }
}
