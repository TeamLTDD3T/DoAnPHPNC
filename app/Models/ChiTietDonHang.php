<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function DonHang()
    {
        return $this->belongsTo(DonHang::class);
    }
}
