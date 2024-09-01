<?php

namespace App\Console\Commands;

use App\Models\Sale;
use Illuminate\Console\Command;
use App\Models\UserTicket;
use App\Models\Ticket;

class getSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get tickets sold and add datas to sales table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tickets_type = Ticket::get();
        $this->info("There is ".count($tickets_type)." type of ticket");

        foreach($tickets_type as $ticket) {
            //  get all ticket type sold and count them, then create a sale or if sale existe update
            $ticket_type_sold = UserTicket::where("ticket_id", $ticket->id)->get();
            $sales = Sale::where("ticket_id", $ticket->id)->first();

            if ($sales == null) {
                $sales = new Sale(['ticket_id' => $ticket->id, 'ticket_title' => $ticket->title, 'ticket_price' => $ticket->price]);
                $sales->ticket_sold = count($ticket_type_sold);
                $sales->save();
            } else {
                $sales->ticket_sold = $ticket_type_sold + count($ticket_type_sold);
                $sales->save();
            }
            $this->info("There is ".count($ticket_type_sold)." ticket of type ".$ticket->title);
        }

        $this->info("End of capturing data for sales table");
    }
}
