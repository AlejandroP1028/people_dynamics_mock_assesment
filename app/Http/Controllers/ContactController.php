<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->authorizeResource(Contact::class, 'contact');
    }

    public function index(Request $request): View
    {
        $contacts = $request->user()->role === 'admin'
            ? Contact::latest()->paginate(10)
            : Contact::where('user_id', $request->user()->id)->latest()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    public function create(): View
    {
        return view('contacts.create');
    }

    public function store(StoreContactRequest $request): RedirectResponse
    {
        $contact = new Contact($request->validated());
        $contact->user()->associate($request->user());
        $contact->save();

        return redirect()->route('contacts.index')->with('status', 'Contact created.');
    }

    public function show(Contact $contact): View
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact): View
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact): RedirectResponse
    {
        $contact->update($request->validated());

        return redirect()->route('contacts.index')->with('status', 'Contact updated.');
    }

    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('status', 'Contact deleted.');
    }

    /**
     * Example: Raw PDO prepared statement via DB::select with bindings
     * (Laravel uses PDO under the hood; this demonstrates prepared statements.)
     */
    public function pdoExample(Request $request): View
    {
        $email = $request->query('email');

        // Safe prepared statement using binding
        $contacts = DB::select(
            'SELECT * FROM contacts WHERE email = ?',
            [$email]
        );

        return view('contacts.pdo_example', [
            'contacts' => $contacts,
            'email' => $email,
        ]);
    }
}
