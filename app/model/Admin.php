<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey='admin_id';
    public $timestamps = false;
    protected $guarded = [];
}
