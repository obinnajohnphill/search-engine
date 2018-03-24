<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

     protected $connection = 'mysql';

     protected $table = 'members';

     protected $fillable = ['firstname', 'lastname', 'gender', 'email'];

}
