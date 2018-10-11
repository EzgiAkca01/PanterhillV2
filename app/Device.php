<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'Device';
    public $timestamps = false;
    protected $dateFormat = 'U';
    protected  $primaryKey = 'Id';
}
