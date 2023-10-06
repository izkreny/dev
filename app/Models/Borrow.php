<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use App\Models\Book;

class Borrow extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'borrows';

    protected $fillable = [
        'id_member',
        'id_book',
        'borrow_start_date',
        'borrow_end_date'
    ];

    public function member()
    {
        // Each record from Borrow MUST belong to some record in Member
        return $this->belongsTo(Member::class, 'id_member');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book');
    }
}
