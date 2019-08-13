<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use App\Mail\SendAll;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emails = \DB::table('emails')->where('hasSent', 0)->orderBy('id', 'DESC')->paginate(5);
        return view('emails.index', ['emails' => $emails, 'title' => 'Saved Emails']);
    }

    public function archived()
    {
        $emails = \DB::table('emails')->where('hasSent', 1)->orderBy('id', 'DESC')->paginate(20);
        return view('emails.index', ['emails' => $emails, 'title' => 'Sent Emails']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('emails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'from' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);


        $email = new Email();

        $email->title = request('title');
        $email->from = request('from');
        $email->subject = request('subject');
        $email->body = request('body');
        $email->created = date('m/d/y');
        $email->hasSent = false;

        $email->save();

        return redirect('/emails');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        return view('emails.show', ['email' => $email]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        return view('emails.edit', ['email' => $email]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {

        $request->validate([
            'title' => 'required',
            'from' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        $email->title = request('title');
        $email->from = request('from');
        $email->subject = request('subject');
        $email->body = request('body');

        $email->save();

        return redirect("emails/{$email->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        $email->delete();

        return redirect('/emails');
    }

    public function sendEmail()
    {
        $email = Email::find(request('id'));

        \Mail::to('butlerfuqua@gmail.com')->send(
            new SendAll($email)
        );

        $email->hasSent = true;
        $email->save();

        return redirect('/emails/archived');
    }
}
