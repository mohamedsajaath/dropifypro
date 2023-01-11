<?php
namespace App\Helper\Mapper\Admin;

use App\Models\Ticket;
use App\Models\TicketContent;

class TicketMapper{
    public static function loadFromRequest($request)
    {
        $ticket = new Ticket();
        $ticket->title = $request->get('title');

        $ticketContent = new TicketContent();
        $ticketContent->description = $request->get('description');

        $ticket->content = $ticketContent;
        return $ticket;
    }
}