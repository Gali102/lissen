<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected $table = 'post_tags';
    protected $guarded = false;
}
