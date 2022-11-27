<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Ticket;

class CommentController extends Controller
{
    public function index(Request $request, Ticket $ticket)
    {
        $comments = Comment::where('ticket_id', '=', $ticket->id)->get();
        return view('comments.index')->with(['ticket' => $ticket, 'comments' => $comments]);
    }


    public function create(Request $request, Ticket $ticket)
    {
        return view('comments.create')->with(['ticket' => $ticket]);
    }

    public function store(Request $request, Ticket $ticket)
    {
        
        $comment = new Comment();
        $comment->name=$request->input('name');
        $comment->email=$request->input('email');
        $comment->comment=$request->input('comment');
        $comment->ticket_id = $ticket->id;
        $comment->save();

        return redirect()->route('comments.index', ['ticket' => $ticket]);
    }

    public function show(Ticket $ticket, Comment $comment)
    {
        return view('comments.show', ['comment' =>$comment]);
    }

    public function edit(Ticket $ticket, Comment $comment)
    {
        return view('comments.edit', ['comment' =>$comment]);
    }

    public function update(Request $request, Ticket $ticket, Comment $comment)
    {
        $comment->name=$request->input('name');
        $comment->email=$request->input('email');
        $comment->comment=$request->input('comment');

        $comment->save();

        return redirect()->route('comments.index');

    }

    public function destroy(Ticket $ticket, Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index', ['ticket'=>$ticket]);
    }
}
