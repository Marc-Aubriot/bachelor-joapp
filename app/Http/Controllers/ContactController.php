<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {

        return Inertia::render('Contact');
    }

    public function sendContactForm(Request $request) {
        
        $contact =  Contact::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'mail' => $request['mail'],
            'title' => $request['title'],
            'message' => $request['message'],
        ]);

        return response(
            [
                'contact_form' => $contact
            ]
            );
    }
}
