<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function resume()
    {
        return view('pages.resume.index');
    }

    public function projects()
    {
        return view('pages.projects.index');
    }

    public function contact()
    {
        return view('pages.contact.index');
    }

    public function contactSend(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
            'time'    => 'required',
            'title'   => 'required',
        ]);

        Mail::raw(
            "Name: {$data['name']}\n"
            ."Email: {$data['email']}\n"
            ."Time: {$data['time']}\n\n"
            ."Message:\n{$data['message']}",
            function ($mail) use ($data) {
                $mail->to('indramahayana3@gmail.com')
                     ->subject($data['title'])
                     ->replyTo($data['email']);
            }
        );

        return back()->with('success', 'Message sent successfully.');
    }
}
