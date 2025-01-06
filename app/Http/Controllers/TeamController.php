<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function showTeam()
    {
        $user = Auth::user();
        $team = $user->currentTeam();

        if (!$team) {
            return view('team', ['members' => [], 'team' => null]);
        }

        // Récupérer les membres de l'équipe
    $members = $team->users()->select('name', 'email', 'mbti_type', 'job')->get();

            return view('team', ['members' => $members, 'team' => $team]);

    }
}
