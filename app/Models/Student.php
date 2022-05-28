<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function issuebook()
    {
        return $this->hasMany(bookissue::Class, 'student_id');
    }
}
