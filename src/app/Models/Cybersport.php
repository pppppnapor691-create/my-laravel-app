<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cybersport extends Model
{
    use softDeletes;
    protected $table = 'cybersports';
    protected $guarded = false;

}
