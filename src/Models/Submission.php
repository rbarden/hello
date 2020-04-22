<?php

namespace Rbarden\Hello\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
     protected $fillable = [
        'name',
        'email',
        'message',
     ];

     public function __construct(array $attributes = [])
     {
        parent::__construct($attributes);

        $this->setTable(config('hello.table'));
     }
}
