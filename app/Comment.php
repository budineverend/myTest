<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Comment extends Model
{
    //
	use HasApiTokens;
	
	protected $fillable = array('author','text');
 
}
