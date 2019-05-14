<?php

namespace App\Console\Commands;

use App\Restaurant;
use App\User;
use Carbon\Carbon;

use Closure;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do something just do it';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        $date = Carbon::now();
        $package_expiry = User::where('package_expiry', '<', $date)->get();
        foreach ($package_expiry as $key => $object) {
            $restaurant = Restaurant::where('user_id', $object->id)->delete();
            $object->is_active = 0;
            $object->save();
        }



//       $today_date =  Carbon::now();
//        $package_expiry = \DB::table('users')
//            ->select('package_expiry', Auth::user()->id)->first();
//
//        if($today_date > $package_expiry) {
//            $totalUsers = \DB::table('users')
//              ->delete();
//        }

//        $totalUsers = \DB::table('users')
//            ->delete();
    }
}
