<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Queueverif extends Model
{
    use HasFactory;
    public $table = "queueverif";
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'tambahan',
    ];
}
