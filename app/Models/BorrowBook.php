<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowBook extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_number',
        'book_number',
        'borrow_date',
        'due_date',
        'return_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
