<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Stage;
use App\Models\Status;
use App\Models\Relatives;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactEmailNotify;


class ContactsController extends Controller
{

    public function index()
    {
        // $data['contacts'] = Contact::paginate(5);
        $data['contacts'] = Contact::filteronly()->searchonly()->zafirstname()->paginate(5)->withQueryString();

        $relatives = Relatives::pluck('name', 'id')->prepend('Choose relatives', '');
        return view('contacts.index', $data, compact('relatives'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'max:50',
            'birthday' => 'nullable',
            'relative_id' => 'nullable'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $contact = new Contact();

        $contact->firstname = $request['firstname'];
        $contact->lastname = $request['lastname'];
        $contact->birthday = $request['birthday'];
        $contact->relative_id = $request['relative_id'];
        $contact->user_id = $user_id;


        $contact->save();
        $contactdata = [
            "firstname" => $contact->firstname,
            "lastname" => $contact->lastname,
            "birthday" => $contact->birthday,
            "relative" => $contact->relative->name, // Access the name property directly
            'url' => url('/')
        ];

        Notification::send($user, new ContactEmailNotify($contactdata));

        Notification::send($user, new ContactEmailNotify($contactdata));
        session()->flash('success', 'Create Contact Cteated');
        return redirect(route('contacts.index'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'max:50',
            'birthday' => 'nullable',
            'relative_id' => 'nullable'
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $contact = contact::findOrFail($id);

        $contact->firstname = $request['firstname'];
        $contact->lastname = $request['lastname'];
        $contact->birthday = $request['birthday'];
        $contact->relative_id = $request['relative_id'];
        $contact->user_id = $user_id;

        $contact->save();
        session()->flash('success', 'Update Successful');
        return redirect(route('contacts.index'));
    }



    public function destroy(string $id)
    {
        $contact = contact::findOrFail($id);
        $contact->delete();
        session()->flash('info', 'Delete Successful');
        return redirect(route('contacts.index'));
    }
}
