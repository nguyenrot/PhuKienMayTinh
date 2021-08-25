<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class khuyenmai extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded=[];
    public function sanpham(){
        return $this->belongsToMany(sanpham::class,'chitietkhuyenmais','khuyenmai_id','sanpham_id')->withTimestamps();
    }
}
