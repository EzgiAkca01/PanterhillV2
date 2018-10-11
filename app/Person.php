<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //

    protected $table = 'Person';
    public $timestamps = false;
    protected $dateFormat = 'U';
    protected  $primaryKey = 'Id';




}
