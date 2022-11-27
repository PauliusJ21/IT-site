<?php

namespace App\Http\Controllers;


use App\Models\Ticket;
use Illuminate\Http\Request;

class Ticket_Controller extends Controller
{
    //
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', ['tickets'=>$tickets]);
    }

    public function all()
    {
        $tickets = Ticket::all();
        return view('tickets.all', ['tickets'=>$tickets]);
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->name=$request->input('name');
        $ticket->email=$request->input('email');
        $ticket->title=$request->input('title');
        $ticket->question=$request->input('question');

        $ticket->save();

        return redirect()->route('tickets.index');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', ['ticket' =>$ticket]);
    }

    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', ['ticket' =>$ticket]);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $ticket->answer=$request->input('answer');
        $ticket->adminName=$request->input('adminName');
        $ticket->adminEmail=$request->input('adminEmail');
        $ticket->state=$request->input('state');

        $ticket->save();

        return redirect()->route('tickets.all');

    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index');
    }

    public function rating (Ticket $ticket)
    {
        return view('tickets.rating', ['ticket' => $ticket]);
    }

    public function updatep(Request $request, Ticket $ticket)
    {
        $ticket->rating=$request->input('rating');

        $ticket->save();

        return redirect()->route('tickets.all');

    }

}
