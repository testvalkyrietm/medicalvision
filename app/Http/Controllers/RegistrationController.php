<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\PersonTitle;
use App\Country;

class RegistrationController extends Controller
{
    function showForm() {

        // Getting relational fields form the database
        $person_titles = PersonTitle::all();
        $languages = Language::all();
        $countries = Country::all();

        // Creating data to send to blade
        $structured_titles = array();
        $structured_languages = array();
        $structured_countries = array();

        foreach ($person_titles as $person_title) {
            $structured_titles[$person_title->id] = $person_title->person_title;
        }

        foreach ($languages as $language) {
            $structured_languages[$language->id] = strtoupper($language->language);
        }

        foreach ($countries as $country) {
            $structured_countries[$country->id] = $country->country_name;
        }

        $pushToBlade = [
            "person_titles"=>$structured_titles,
            "languages"=>$structured_languages,
            "countries"=>$structured_countries
        ];

        return view('registration_form.registration', $pushToBlade);
    }

    function store(Request $request) {

        dd($request);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'email' => 'required|email',
            'first_name'=>  'required',

        ]);

        return Submission::create([

        ]);
    }
}
