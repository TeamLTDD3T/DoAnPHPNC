<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class LoaiTaiKhoan extends Model
{
    use HasFactory, softDeletes;
    protected $guarded = [];
    // protected $table = 'loai_tai_khoans';
    //  /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $dates =['deleted_at'];
    // protected $primaryKey ='id';
}
