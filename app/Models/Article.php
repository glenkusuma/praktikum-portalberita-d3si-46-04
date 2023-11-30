<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * Table yang diwakili oleh model ini.
     *
     * @var string
     */
    protected $table = 'article';
    /**
     * Kolom ID tabel database
     *
     * @var string
     */
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'image',
        'slug',
        'category_id',
    ];

    /**
     * Relasi dengan tabel article_category
     *
     * @return BelongsTo
     */
    function category() : BelongsTo {
        //            belongsTo($related, $foreignKey, $ownerKey)
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
