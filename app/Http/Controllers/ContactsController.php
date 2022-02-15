<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactsController extends Controller
{
    public function index()
    {
        $lang = App::getLocale();
        $contacts_page = Contact::first()->translate($lang);
        $page_title = [
            'ru' => 'Контакты',
            'en' => 'Contacts',
            'kz' => 'Контактілер'
        ];

        return view('contacts', [
            'page_title' => $page_title[$lang],
            'contacts_page' => $contacts_page
        ]);
    }
}
