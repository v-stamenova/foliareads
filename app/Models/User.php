<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function recommendationRequest()
    {
        return $this->hasMany(RecommendationRequest::class, 'client_id');
    }

    public function hasRequestedRecommendation($month){
        return ($this->recommendationRequest->where('month', $month))->count() != 0;
    }

    public function quiz() {
        return $this->hasOne(Quiz::class, 'client_id');
    }

    public function recommendedToMe() {
        return $this->hasMany(Recommendation::class, 'client_id');
    }

    public function recommendedByMe() {
        return $this->hasMany(Recommendation::class, 'admin_id');
    }

    public function getRecommendedBooks()
    {
        return $this->recommendedToMe->flatMap(function ($recommendation) {
            return $recommendation->recommendedBooks;
        });
    }
}
