<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\JoinClause;
use App\Models\Book;

class Borrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_member',
        'id_book',
        'borrow_start_date',
        'borrow_end_date'
    ];

    protected static function availableBooks()
    {
        /*
        |------------------------------------------------------------------
        | https://laravel.com/docs/10.x/queries#or-where-clauses
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
        
        /*$books = Book::select('books.id', 'books.title')->get();
        return Borrow::select('borrows.id_book', 'borrows.borrow_end_date')
                ->where('borrows.borrow_end_date', '=', null)
                ->rightJoinSub($books, 'books', function (JoinClause $join) {
                    $join->on('borrows.id_book', '=', 'books.id');
                })
                ->where('borrows.id_book', '=', null)
                ->get();*/

        return Borrow::rightJoin('books', 'borrows.id_book', '=', 'books.id')
                    ->select('books.id', 'books.title',
                        'borrows.borrow_start_date', 'borrows.borrow_end_date')
                    ->where('borrows.borrow_start_date', '=', null)
                    ->orWhere(function (Builder $query) {
                        $query->where('borrows.borrow_start_date', '<>', null)
                            ->where('borrows.borrow_end_date', '<>', null);
                    })
                    ->get();
    }
}
