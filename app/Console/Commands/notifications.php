<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Cat; // Assuming you have a Cat model for the cats table

class Notifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will insert a new record in cats table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $cat = new Cat();
        $cat->name = 'New Cat';
        $cat->age = 2;
        $cat->save();

        $this->info('New cat inserted successfully!');
    }
}
