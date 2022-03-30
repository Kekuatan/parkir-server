<?php

namespace App\Services\Ticket;

use Illuminate\Support\Carbon;

class TicketService
{
    private $dateTimeServer;

    public function __construct()
    {
        $this->dateTimeServer = Carbon::now();
    }

    public function dateTime(){
        return $this->dateTimeServer->format('d/m/Y H:i:s');
    }

    public function dateTimeBarcode(){
        return $this->dateTimeServer->format('YmdHis');
    }

    public function barcodeNumber(){
        $dateTime = self::dateTimeParkir();
        return $dateTime;
    }
}
