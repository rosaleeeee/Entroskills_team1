<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['idea_id', 'user_id'];

    public function idea()
    {
        return $this->belongsTo(Idea::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function allUsersHaveVoted()
    {
        $totalUsers = User::count();
        $usersWhoVoted = Vote::distinct('user_id')->count('user_id');

        return $totalUsers === $usersWhoVoted;
    }
}
