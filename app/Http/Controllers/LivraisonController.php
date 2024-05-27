<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livraison;

class LivraisonController extends Controller
{



    public function store(Request $request)
    {
        // Validez d'abord les données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'option_livraison' => 'required|string|max:255',
            'lieu_prise_en_charge' => 'required|string|max:255',
            'lieu_destination' => 'required|string|max:255',
            'date_livraison' => 'required|date',
            'heure_livraison' => 'required|date_format:H:i',
        ]);

        // Créez une nouvelle instance du modèle Livraison et insérez les données dans la base de données

        Livraison::create($validatedData);

        // Redirigez l'utilisateur vers le numéro whatsapp de l'entreprise
        // Préparez les informations à inclure dans le message WhatsApp
        $name = $request->input('name');
        $phone = $request->input('phone');
        $lieuPriseEnCharge = $request->input('lieu_prise_en_charge');
        $lieuDestination = $request->input('lieu_destination');
        $optionLivraison = $request->input('option_livraison'); // Récupérez l'option de livraison

        // Générez le message WhatsApp avec les informations pré-remplies
        $whatsappMessage = "Bonjour, je souhaite passer une commande de livraison.\nNom: $name\nTéléphone: $phone\nLieu de prise en charge: $lieuPriseEnCharge\nLieu de destination: $lieuDestination\nOption de livraison: $optionLivraison";

        // Encodez le message WhatsApp pour l'URL
        $encodedMessage = urlencode($whatsappMessage);

        // Générez le lien WhatsApp avec les informations pré-remplies
        $whatsappLink = "https://wa.me/+22678898461/?text=$encodedMessage";

        // Redirigez l'utilisateur vers le lien WhatsApp
        return redirect()->away($whatsappLink);
    }
}
