<?php
namespace App\Helper\Service\Admin;

use App\Models\TicketContent;

class TicketContentService{
    public static function save(TicketContent $ticketContent)
    {
        $ticketContent->save();
    }
}