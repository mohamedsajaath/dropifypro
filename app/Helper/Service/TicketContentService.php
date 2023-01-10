<?php
namespace App\Helper\Service;

use App\Models\TicketContent;
use Illuminate\Support\Facades\DB;

class TicketContentService{
    public static function save(TicketContent $ticketContent)
    {
        $ticketContent->save();
    }

    public static function getByTicketId($id){
        return TicketContent::query()
            ->join('users','users.id','=', 'ticket_contents.user_id')
            ->select(['ticket_contents.*', DB::raw('CONCAT(users.first_name, " ", users.last_name) AS user_name')])
            ->get();
    }
}