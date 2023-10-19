<?php

namespace App\Http\Controllers;
use App\Http\Requests\contactRequest;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function storeMessage(contactRequest $request){
        $data=$request->validated();
        Contact::create($data);
        return redirect()->back()->with('message','Message sent successfully');
    }
}
