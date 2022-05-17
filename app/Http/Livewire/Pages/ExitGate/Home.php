<?php

namespace App\Http\Livewire\Pages\ExitGate;

use App\Models\Ticket;
use App\Traits\Ticket\TicketQueryTrait;
use Livewire\Component;

class Home extends Component
{
    use TicketQueryTrait;
    public $input = [];

    public function getTicketData(){
        $ticket = null;
        if (isset($this->input['barcodeNo'])){
            $this->ticket = Ticket::where('barcode_no','=', $this->input['barcodeNo'])->first();
        }
        return $ticket;
    }
    public function submit (){
        $this->render();
    }
    public function render()
    {
        return view('livewire.pages.exit-gate.home', ['ticket' => $this->getTicketData()]);
    }
}
