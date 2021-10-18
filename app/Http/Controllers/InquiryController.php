<?php

namespace App\Http\Controllers;

use App\Mail\InquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function inquiry()
    {
        return view('inquiry-form');
    }

    public function sendInquiry(Request $request)
    {
        $details = [
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'location' => $request-> location,
            'message' => $request -> message
        ];

        Mail::to('test@test.com')->send(new InquiryMail($details));
        return back() ->with('message_sent', 'Your message has sent sucssesfully');
    }
}
