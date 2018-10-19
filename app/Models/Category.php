<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = 'categories';

    protected $fillable = ['name', 'parent_id', 'pinyin', 'description', 'thumb'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
