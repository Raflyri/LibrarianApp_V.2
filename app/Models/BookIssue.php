<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model
{
    public function student()
    {
        return $this->belongsTo(student::Class, 'student_id');
    }
    public function book()
    {
        return $this->belongsTo(book::Class, 'book_id');
    }
}
