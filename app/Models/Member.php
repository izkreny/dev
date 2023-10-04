<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Define which base to use, or even table
    protected $connection = 'mysql';
    protected $table = 'members';
    
    protected $fillable = [
        'name',
        'surname',
        'member_uid'
    ];
}
