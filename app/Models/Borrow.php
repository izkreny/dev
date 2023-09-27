<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_member',
        'id_book',
        'borrow_start_date',
        'borrow_end_date'
    ];

    public static function availableBooks()
    {
        /*
        |------------------------------------------------------------------
        | https://laravel.com/docs/10.x/queries#raw-expressions
        |
        | SQL QUERY
        |------------------------------------------------------------------
        |
        |   SELECT
        |       books.id, books.title
        |   FROM
        |       (SELECT *
        |       FROM borrows
        |       WHERE borrows.borrow_end_date is null)
        |       AS borrowed
        |   RIGHT JOIN books
        |       ON borrowed.id_book = books.id
        |   WHERE borrowed.id_book is null;
        |
        */
        return Borrow::select('books.id', 'books.title')
                        ->from(Borrow::raw(
                            '(SELECT *
                            FROM borrows
                            WHERE borrows.borrow_end_date is null)
                            AS borrowed'
                        ))
                        ->rightJoin('books', 'borrowed.id_book', '=', 'books.id')
                        ->where('borrowed.id_book', '=', null)
                        ->get();
    }
}
