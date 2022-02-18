<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categories extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table= 'categories';
    protected $fillable =[
        'name',
       'slug',
       'status',

    ];

    public const STATUS = [
        0,1
    ];
    protected static function boot()
   {
       parent::boot();

       // update data for field slug of table categories
       static::saving(function ($model) {
           $slug = Str::of($model->name)->slug('-');
           $model->slug = strtolower($slug);
       });
   }

    public function products(){
        return $this->hasMany(products::class);
    }
}

