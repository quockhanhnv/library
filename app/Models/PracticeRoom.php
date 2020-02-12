<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PracticeRoom extends Model
{
	use SoftDeletes;

    protected $table = 'practicerooms';

    protected $dates = ['deleted_at'];

    protected $fillable = ['practicerooms_name', 'practicerooms_computer_numbers', 'subjects_created_by', 'subjects_updated_by', 'practicerooms_active'];

    
}
