<?php

namespace App;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use AlgoliaEloquentTrait;

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
