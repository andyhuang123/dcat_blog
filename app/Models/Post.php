<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\HasMany;
 
class Post extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'post';

    /**
     * 所说导航分类
     */
    public function nav_name()
    {
        return $this->belongsTo(Category::class, 'nav_id');
    }

    public function getTagAttribute($tag)
    {
        return json_decode($tag);
    }
    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

     /**
     * @param int $id
     * @return Post
     */
    public static function getPostById(int $id): Post
    {
        return Post::with(['comments' => function (HasMany $hasMany) {
            $hasMany->where('parent_id', 0);
            $hasMany->orderBy('id', 'desc');
        }])->findOrFail($id);
    }

     

 
 
    
}
