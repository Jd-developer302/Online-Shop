<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Category;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = 'subcategories';
    protected $fillable = ['name', 'slug', 'status', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
