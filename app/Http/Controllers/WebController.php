<?php

namespace App\Http\Controllers;

use App\Enums\SubscriberEnum;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WebController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('arrangement', 'ASC')->take(3)->get();

        $portfolios = Portfolio::orderBy('arrangement', 'ASC')->take(5)->get();
        return view('web.index', compact('services', 'portfolios'));
    }
    public function about()
    {
        return view('web.about');
    }
    public function services()
    {
        return view('web.services');
    }
    public function contact()
    {
        return view('web.contact');
    }
   
    public function contact_us_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $contact = Contact::create($request->except('_token', '_method'));
        return redirect()->back()->with('success', 'Thank you for contact us');
    }

    public function subscriber(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', Rule::unique("subscribers")->where(
                    function ($query) use ($request) {
                        return $query->where(
                            [
                                ["email", "=", $request->email],
                                ["status", "=", SubscriberEnum::Subscribed->value]
                            ]
                        );
                    }
                )]
            ],
            [
                'email.unique' => 'Sorry, This email is already subscribed to our mailling list',
            ]
        );
        $subscriber = Subscriber::updateOrCreate($request->except('_token', '_method'), [
            'status' => SubscriberEnum::Subscribed->value
        ]);
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}
