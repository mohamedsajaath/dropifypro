<?php

namespace App\Helper\Service;

use App\Models\Ticket;
use App\Models\TicketContent;
use Illuminate\Http\Request;

class TicketService
{
    public static function save(Ticket $tickets)
    {
        $tickets->save();
        return $tickets;
        // $ticket->save();
        // $ticketContent = $ticket->content;
        // $ticketContent->ticket_id = $ticket->id;
        // TicketContentService::save($ticketContent);
        
    }


    public static function getById($id)
    {
            return Ticket::findById($id);
    }
}
?>