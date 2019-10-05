<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = ['name','email','created_at','updated_at'];
    
      public function Details() {
        return $this->hasOne(Details::class);
    }
}
