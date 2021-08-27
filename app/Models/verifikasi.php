<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifikasi extends Model
{
    use HasFactory;
    public $table = "verifikasi";
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'user_id',
        "file_path",
        'type',
        "created_at",
        "updated_at"
    ];

}
