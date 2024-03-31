<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendedBook extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'recommendation_id'];

    public function recommendation() {
        return $this->belongsTo(Recommendation::class);
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }
}
