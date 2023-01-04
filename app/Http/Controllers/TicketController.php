<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends AbstractController
{
    public function getIndexView()
    {
        return 'pages.seller.support.index';
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
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Ticket $ticket)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    public function destroy(Ticket $ticket)
    {
        //
    }
}
