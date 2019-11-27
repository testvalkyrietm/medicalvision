<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubmission;
use App\Name;
use Illuminate\Http\Request;
use App\Language;
use App\PersonTitle;
use App\Country;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Submission;
use Mail;
use App\Mail\entrySubmittedCustomer;

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

    function store(StoreSubmission $request) {
        $submission = Submission::create($request->all());

        if ($submission) {

            $mail_data = [
                'to'    =>  $request->email,
                'toname'    =>  $request->first_name.($request->center_name != '' ? ' '.$request->center_name : '').' '.$request->last_name,
                'mail_template' =>  'mails.customerMail',
                'formdata'  =>  $submission,
                'subject'  =>  'Submission Received'
            ];

            $to = [
                [
                    'email' => $request->email,
                    'name' => $request->first_name.($request->center_name != '' ? ' '.$request->center_name : '').' '.$request->last_name,
                ]
            ];

            Mail::to($request->email)->send(new entrySubmittedCustomer($submission));
            MailController::html_email($mail_data);

            $mail_data['to'] = 'admin@admin.com';
            $mail_data['toname'] = 'Admin';
            $mail_data['subject'] = 'New Submission Made';
            $mail_data['mail_template'] = 'mails.adminMail';

            MailController::html_email($mail_data);

            return redirect()->route('success');
        }

        return Redirect::back()->withErrors(['msg', "There's something wrong with your submission"]);
    }

    function success() {
        return view('registration_form.success');
    }

}
