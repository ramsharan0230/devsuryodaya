<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactRepository;
use Illuminate\Http\Request;
use App\Models\Subscription;

class ContactController extends Controller
{

    public function __construct(ContactRepository $contact, Subscription $subscription){
        $this->contact=$contact;
        $this->subscription=$subscription;
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

    public function subscription(){
        $details = $this->subscription->all();
        return view('admin.contact.subscription', compact('details'));
    }
}
