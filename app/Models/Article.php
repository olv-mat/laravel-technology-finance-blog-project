<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Model,
    Builder
};

class Article extends Model
{
    protected $fillable = [
        "title",
        "slug",
        "caption",
        "cover",
        "content",
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected static function booted()
    {
        self::addGlobalScope("ordered", function(Builder $queryBuilder) {
            $queryBuilder->orderBy("created_at", "desc");
        });
    }
}
