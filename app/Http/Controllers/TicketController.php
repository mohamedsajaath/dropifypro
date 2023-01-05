<?php

namespace App\Http\Controllers;

use App\Helper\Mapper\Admin\TicketMapper;
use App\Helper\Service\Admin\TicketService;
use App\Http\Controllers\AbstractController;
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

    public function getCreateView()
    {
        return 'pages.seller.support.includes.create';
    }

    public function store(Request $request)
    {
        $ticket = TicketMapper::loadFromRequest($request);
        TicketService::save($ticket);
        return self::response('Successfully inserted');
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
    public function ticketDetails(){
        return view('pages.seller.support.includes.ticket_view');
    }
}
