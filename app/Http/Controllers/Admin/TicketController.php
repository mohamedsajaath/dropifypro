<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AbstractController;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends AbstractController
{
    public function getIndexView()
    {
        return 'pages.admin.support.tickets.index';
    }

    public function getIndexData()
    {
        $ticket = Ticket::getAll();
        return [
            'tickets' => $ticket,
        ];
    }

    public function create()
    {
        return view('pages.admin.support.tickets.create');
    }

    public function store(Request $request)
    {
        //get all request data as array
        $inputs = $request->all();

        //create new record
        $newTickets = new Ticket();
        $newTickets->fill($inputs);

        // dd($newAccountManager);
        $newTickets->save();

        $result = "result";
        $message = "Succesfully insert";
        $errors = [];
        $status = 200;

        return response()->json(['result' => $result, 'message' => $message, 'errors' => $errors], $status);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function ticketDetails(){
        return view('pages.admin.support.tickets.includes.ticket-details');
    }
}
