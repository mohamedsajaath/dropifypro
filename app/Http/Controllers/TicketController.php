<?php

namespace App\Http\Controllers;

use App\Helper\Service\TicketContentService;
use App\Helper\Service\TicketService;
use App\Http\Controllers\AbstractController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return 'pages.seller.support.includes.create_ticket_modal';
    }

    public function store(Request $request)
    {
        $tickets = new Ticket();
        $tickets->loadFromRequest($request);
        TicketService::save($tickets);
        return self::response('Successfully Added');

        // $ticket = TicketMapper::loadFromRequest($request);  
        // TicketService::save($ticket);
        // return self::response('Successfully inserted');
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
    public function ticketDetails($id){
        $authUserId = Auth()->user()->id;
        $ticket = TicketService::getById($id);
        $ticketContents = TicketContentService::getByTicketId($id);
        //fetch data from database by using id
        // pass fetched data into below blade
        return view('pages.seller.support.includes.ticket_view')
        ->with([
            'ticket'=> $ticket,
            'contents'=> $ticketContents,
            'auth_id'=> $authUserId
        ]);
    }
}
