<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    // Afficher la page de l'attestation
    public function show()
    {
        $user = Auth::user();

        // Données pour la vue
        $data = [
            'name' => $user->name,
            'mbti' => $user->mbti_type,
            'job' =>  $user->job,
            'completion_date' => now()->format('F d, Y'),
            'isPdf' => false, // Permet de gérer les boutons
        ];

        // Afficher la vue
        return view('certificate', $data);
    }

    // Télécharger le PDF de l'attestation
    public function generate()
    {
        $user = Auth::user();

        // Données pour le PDF
        $data = [
            'mbti' => $user->mbti_type,
            'job' =>  $user->job,
            'name' => $user->name,
            'completion_date' => now()->format('F d, Y'),
            'isPdf' => true, // Cache les boutons dans le PDF
        ];

        // Génération du PDF avec DomPDF
        $pdf = Pdf::loadView('certificate', $data);

        // Retourner le fichier PDF téléchargeable
        return $pdf->download('certificate_of_achievement.pdf');
    }

    // Redirection vers la prochaine page
    public function nextPage()
    {
        // Logique pour accéder à la page suivante
        return redirect()->route('next.page'); // Remplacez par votre logique ou route réelle
    }
}
