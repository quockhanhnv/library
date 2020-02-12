<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Classes extends Model
{
    use SoftDeletes;

    protected $table = 'classes';

    protected $date = ['deleted_at'];

    protected $fillable = ['classes_name', 'classes_student_numbers', 'classes_course', 'classes_active', 'classes_created_by', 'classes_updated_by'];
}
