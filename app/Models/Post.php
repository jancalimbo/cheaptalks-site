<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //cher angel codes

    protected $guarded = [];

    public function scopeSearch($query, $terms){
        collect(explode(" ", $terms))
            ->filter()
            ->each(function($term) use ($query){
            $term = '%' . $term . '%';

            $query->where('title', 'like', $term)
            ->orWhere('content', 'like', $term);
        });

    }

    protected $fillable = ['user_id', 'title','content', 'category'];


    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');

    }
    public function isEditable()
    {
     return auth()->user()->role == 'editor' || auth()->user()->id == $this->user_id;
    }
}
