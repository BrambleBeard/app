<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    // protected $table = 'secrets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','passcode','url'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
