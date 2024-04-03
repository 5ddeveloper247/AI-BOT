<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define how many tickets you want to create
        $numberOfTickets = 10;

        // Create tickets using the Ticket factory
        Ticket::factory($numberOfTickets)->create()->each(function ($ticket) {
            // Generate a random UUID
            $ticket->uuid = mt_rand(1000000000, 9999999999);
            $ticket->save(); // Save the ticket with UUID
        });
    }
}
