<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VwPerson extends Model
{

    protected $table = 'VwPerson';
    public $timestamps = false;
    protected $dateFormat = 'U';
    protected  $primaryKey = 'Id';
}
