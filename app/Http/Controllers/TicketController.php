<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketsCount = Ticket::Where("is_read", false)->count();
        $tickets = Ticket::orderByDesc("created_at")->paginate(10);
        return view("admin.mailbox", compact("tickets", "ticketsCount"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $mailbox)
    {
        $mailbox->update(["is_read" => true]);
        $mails = Ticket::orderByDesc("id")->paginate(10);
        return view("admin.mail", compact("mails", "mailbox"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "phone" => "required|numeric",
            "body" => "required|string",
        ]);
        Ticket::create($request->all());
        return redirect()->back()->with("success", "Your message has been sent successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $mailbox)
    {
        $mailbox->delete();
        return redirect()->route("admin.mailbox.index");
    }

    /**
     * Display a listing of the deleted resource.
     */
    public function trash()
    {
        $ticketsCount = Ticket::onlyTrashed()->count();
        $tickets = Ticket::onlyTrashed()->orderByDesc("deleted_at")->paginate(10);
        return view("admin.trashmailbox", compact("tickets", "ticketsCount"));
    }

    public function restore($id)
    {
        $ticket = Ticket::onlyTrashed()->find($id);
        $ticket->restore();
        return redirect()->route("admin.mailbox.show", $ticket->id);
    }

    public function forceDestroy($id)
    {
        $ticket = Ticket::onlyTrashed()->find($id);
        $ticket->forceDelete();
        return redirect()->route("admin.mailbox-trash");
    }
}
