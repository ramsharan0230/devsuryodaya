<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function __construct(ContactRepository $contact){
        $this->contact=$contact;
    }

    public function index()
    {
        $details=$this->contact->orderBy('created_at', 'desc')->get();
        return view('admin.contact.list', compact('details'));
    }

    public function destroy($id)
    {
        $this->contact->destroy($id);
        return redirect()->route('admin.contact.index')->with('message','Contact Deleted Successfully');
    }
}
