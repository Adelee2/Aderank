<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    // protected $guarded = ['id'];

    protected $primaryKey = 'id';

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
