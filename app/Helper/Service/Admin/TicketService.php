<?php

namespace App\Helper\Service\Admin;

use App\Models\Ticket;
use App\Models\TicketContent;
use Illuminate\Http\Request;

class TicketService
{
    public static function save(Ticket $ticket)
    {
        // 1)

        // $ticket  = Ticket::create([
        //     'title'=> $request->title
        // ]);

        // TicketContent::create([
        //     'ticket_id'=> $ticket->id,
        //     'description' => $request->description,
        // ]);

        $ticket->save();
        $ticketContent = $ticket->content;
        $ticketContent->ticket_id = $ticket->id;
        TicketContentService::save($ticketContent);
        
    }
}
?>