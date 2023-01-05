<?php

namespace App\Helper\Service\Admin;

use App\Models\Ticket;
use App\Models\TicketContent;
use Illuminate\Http\Request;

class TicketService
{
    public static function save(Ticket $ticket)
    {
        $ticket->save();
        $ticketContent = $ticket->content;
        $ticketContent->ticket_id = $ticket->id;
        TicketContentService::save($ticketContent);
        
    }
}
?>