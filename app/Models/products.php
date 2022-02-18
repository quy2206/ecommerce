<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class products extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable =[
        'category_id',
        'name',
        'thumbnail',
        'description',
        'content',
        'status',
        'quantity',
        'price',
        'images',

    ];
    public const STATUS = [
        0, // hidden
        1, // show
    ];

    public function categories(){
        return $this->belongsTo(categories::class);
    }
}
