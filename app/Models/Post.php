<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

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

 
 
    
}
