<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookContacts extends Model
{
    use HasFactory;
    
    protected $table='bookcontacts';  
    protected $primaryKey='id';  

    protected $fillable = [
        'firstName',
        'lasName',
        'address',
        'telephone',
        'email',
        'user_id'
    ];
}
