<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ChiTietSanPham extends Model
{
    use HasFactory;
    use  SoftDeletes;
    protected $guarded = [];
    public function SanPham()
    {
        return $this->belongsTo(SanPham::class);
    }
}
