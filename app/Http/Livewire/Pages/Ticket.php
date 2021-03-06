<?php

namespace App\Http\Livewire\Pages;

use App\Traits\Ticket\TicketQueryTrait;
use Livewire\Component;

class Ticket extends Component
{
    use TicketQueryTrait;

    public function getResponseData()
    {
        $data = $this->getTicketDataWithSimplePaginate();
        return [
            'tickets' => $data,
            'showingPage' =>$data->perPage() * $data->currentPage(),
            'sumTotalRecord' => $this->getTicketDataCount()
        ];
    }

    public function render()
    {
        return view('livewire.pages.ticket', $this->getResponseData());
    }
}
