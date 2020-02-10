<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    protected $table = 'members';

    protected $primaryKey = 'member_id';

    use SoftDeletes;
}
