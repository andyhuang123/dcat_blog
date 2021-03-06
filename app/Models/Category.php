<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Dcat\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree;
	use HasDateTimeFormatter;
    use SoftDeletes; 
    
    //子集存储
    public $son_nav = [];
}
