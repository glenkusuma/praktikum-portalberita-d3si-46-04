<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * Table yang diwakili oleh model ini.
     *
     * @var string
     */
    protected $table = 'article_category';
    /**
     * Kolom ID tabel database
     *
     * @var string
     */
    protected $fillable = [
        'name'
    ];

    public function articles() : HasMany {
        return $this->hasMany(Article::class);
    }
}
