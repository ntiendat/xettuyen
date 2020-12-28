<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Thisinh;
use App\Models\User;
use App\Mail\ThongBao;               // Mail
use Illuminate\Support\Facades\Mail; // Mail
use Illuminate\Support\Facades\Log;



class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {   
        $thisinh = Thisinh::where('trang_thai_kiem_duyet','Chưa duyệt')->count();

        // $user = User::where('role','AdUSER')->get();
          $mess = [
              'title'=>'TRƯỜNG ĐẠI HỌC THUỶ LỢI ',
              'body'=>'THÔNG BÁO KIỂM DUYỆT',
              'mess1'=>'Bạn Còn '.$thisinh.' hồ sơ chưa xét duyệt',
           
          ];

          $inactive_user = User::where('role','AdUSER')->get();
          foreach ($inactive_user as $user) {
            Mail::to($user)->send(new ThongBao ($mess));
            Log::channel('after')->info( $user->name.' Còn '.$thisinh.' hồ sơ chưa xét duyệt');
          }



     

        return 0;
    }
}
