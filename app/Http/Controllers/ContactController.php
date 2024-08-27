<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
    
        foreach($contacts as $contact) {
            $contact->name = Crypt::decryptString($contact->name);
            $contact->email = Crypt::decryptString($contact->email);
        }

        return view('contact', compact('contacts'));
    }

    public function store() {
        $contact = new Contact();
        $contact->name = Crypt::encryptString('Gabriel Anicheski');
        $contact->email = Crypt::encryptString('ganicheski8@gmail.com');
        $contact->telefone = '(42) 99905-9644';
        $contact->data_nascimento = '2004-02-11';
        $contact->save();
    }

    public function update(){
        $contact = Contact::where('name', 'Gabriel Anicheski')->first();
        $contact->name = 'Carlos';
        $contact->email = 'carlos@gmail.com';
        $contact->save();
    }

    public function destroy($id) {
        $contact = Contact::find($id);
        $contact->delete();
    }
}
