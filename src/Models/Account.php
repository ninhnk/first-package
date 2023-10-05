<?php

namespace Ninhnk\FirstPackage\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    protected $guarded = ['id', 'update_at'];
}
