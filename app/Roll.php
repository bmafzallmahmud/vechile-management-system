<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roll extends Model
{
    use SoftDeletes;
    protected $table = 'rolls';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_name',
        'created_at',
        'updated_at',
    ];
}
