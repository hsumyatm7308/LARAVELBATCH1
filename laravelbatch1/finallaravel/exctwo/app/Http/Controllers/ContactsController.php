<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Stage;
use App\Models\Status;
use App\Models\Relatives;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ContactsController extends Controller
{

    public function index()
    {
        $data['contacts'] = Contact::all();
        $relatives = Relatives::pluck('name', 'id')->prepend('Choose relatives', '');
        return view('contacts.index', $data, compact('relatives'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|min:3|max:50',
            'lastname' => 'max:50'
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
        // return redirect(route('contacts.index'));
        session()->flash('success', 'Create Contact Cteated');
        return redirect(route('contacts.index'));
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => ['required', 'max:50', 'unique:contacts,name,' . $id],
            'status_id' => ['required', 'in:3,4']
        ]);

        $user = Auth::user();
        $user_id = $user['id'];

        $contact = contact::findOrFail($id);

        $contact->name = $request['name'];
        $contact->slug = Str::slug($request['name']);
        $contact->status_id = $request['status_id'];
        $contact->user_id = $user_id;

        $contact->save();
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
