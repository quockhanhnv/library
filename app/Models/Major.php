<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Major extends Model
{
    use SoftDeletes;

    protected $table = 'majors';

    protected $dates = ['deleted_at'];

    protected $primaryKey = 'majors_id';
    

    protected $fillable = ['majors_name', 'majors_detail', 'majors_active', 'majors_created_by', 'majors_updated_by',];

}
