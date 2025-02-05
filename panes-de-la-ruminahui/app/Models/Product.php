<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
/** 
     *  The table associated with the model
     * 
     * @var string
     */
    protected $table = 'productslaravel';

    /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
];
}
