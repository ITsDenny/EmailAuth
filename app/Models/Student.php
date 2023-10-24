<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'classes_assigment','student_id','class_id');   
    }
}
