<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class contactController extends Controller
{

    public function store(Request $request)
    {
        // Validez d'abord les données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|max:15',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:255',
        ]);

        // Créez une nouvelle instance du modèle Livraison et insérez les données dans la base de données

        Contact::create($validatedData);

        // Redirigez l'utilisateur vers le numéro whatsapp de l'entreprise
        // Préparez les informations à inclure dans le message WhatsApp
        $name = $request->input('name');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        // Générez le message WhatsApp avec les informations pré-remplies
        $whatsappMessage = "Bonjour, je souhaite passer une commande de livraison.\nNom: $name\n Prénom: $prenom\n Email: $email\nTéléphone: $phone\nLieu de prise en charge: $lieuPriseEnCharge\n Message: $message";

        // Encodez le message WhatsApp pour l'URL
        $encodedMessage = urlencode($whatsappMessage);

        // Générez le lien WhatsApp avec les informations pré-remplies
        $whatsappLink = "https://wa.me/+22678898461/?text=$encodedMessage";

        // Redirigez l'utilisateur vers le lien WhatsApp
        return redirect()->away($whatsappLink);
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
}
