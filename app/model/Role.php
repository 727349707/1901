<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
    protected $primaryKey='role_id';
    public $timestamps = false;
    protected $guarded = [];
}
