<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
class Details extends Eloquent
{
    protected $table = 'details_user';
    public $timestamps = false;

      public function User() {
        return $this->belongsTo(User::class);
    }
}
