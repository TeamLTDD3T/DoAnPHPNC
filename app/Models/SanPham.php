<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SanPham extends Model
{
    use HasFactory;
    use  SoftDeletes;
    protected $guarded = [];
    public function chiTietSanPhams()
    {
        return $this->hasMany(ChiTietSanPham::class);
    }
}
