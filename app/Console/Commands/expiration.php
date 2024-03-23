<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire users every 5 minutes automatically';

    /**
     * Execute the console command.
     *
     * @return int
     */

  


    public function handle()
    {
        // $users=User::where('expire',0)->get();
        // foreach($users as $user){
        //     $user ->update(['expier' => 1]);
        // }
      User::create([
        'name' => Str::random(5),
      ]);

    }
}
