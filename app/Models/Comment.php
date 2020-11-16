<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\RoutesNotifications;

class Comment extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'comment';
    
    public $guarded = ['id'];

    protected $appends = ['content_str'];

    protected $with = ['user', 'replys'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     /**
     * @return string
     */
    public function getContentStrAttribute(): string
    {
        return  $this->content;
    }

    /**
     * @return HasMany
     */
    public function replys(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id')->orderBy('id', 'desc');
    }

    /**
     * @return BelongsTo
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * @return BelongsTo
     */
    public function target(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'target_id');
    }

}
