<?php

namespace App\Http\Controllers;

use App\Signup;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;

class SignupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store', 'invalid', 'success']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $signups = \DB::table('signups')->orderBy('id', 'DESC')->paginate(20);
        return view('signups.index', ['signups' => $signups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sNum = count(Signup::all());
        return view('signups.create', ['count' => $sNum]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $email = \DB::table('signups')->where('email', request('email'))->first();
        if ($email == null) {
            $signup = new Signup();

            $signup->email = request('email');
            $signup->added = date('m/d/y');

            $signup->save();

            \Mail::to($signup->email)->send(
                new WelcomeEmail($signup)
            );

            session()->flash('message', 'You have successfully been added to the list!');
            session()->flash('link', '/');

            return view('signups.success');
        } else {

            session()->flash('message', 'Sorry, that email is invalid or has already been submitted.');
            session()->flash('link', '/');

            return view('signups.invalid');
        }
    }

    public function success()
    {
        echo 'Success Route.';
        // return view('signups.success');
    }

    public function invalid()
    {
        echo 'Invalid Route.';
        // return view('signups.invalid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function show(Signup $signup)
    {
        return view('signups.show', ['signup' => $signup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function edit(Signup $signup)
    {
        return view('signups.edit', ['signup' => $signup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Signup $signup)
    {
        $email = \DB::table('signups')->where('email', request('email'))->first();
        if ($email == null) {


            $signup->email = request('email');
            $signup->added = date('m/d/y');

            $signup->save();

            \Mail::to($signup->email)->send(
                new WelcomeEmail($signup)
            );
            return redirect('/signups');
        } else {
            echo 'Sorry, that email is invalid or already taken. <br> <a href="/signups/create">&larr; Back</a>';
            // return view('signups.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Signup $signup)
    {
        $signup->delete();
        return redirect('/signups');
    }
}
