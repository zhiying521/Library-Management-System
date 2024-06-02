<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBook extends Model
{
    use HasFactory;
    protected $fillable=[
        'book_number',
        'book_name',
        'book_author',
        'book_press',
        'book_price',
        'book_local',
        'book_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @return string
     */
    public static function getModelName(): string
    {
        return trans('书籍');
    }
}
