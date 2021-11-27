<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SenderMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sender_Mails')->delete();

        $senderemails = [
            ['name'=>'Suma de Puntos', 'active'=>'Y'],
            ['name'=>'Día de Cumpletaños', 'active'=>'Y'],
            ['name'=>'Canje de Puntos', 'active'=>'Y'],
        ];

        foreach ($senderemails as $senderemail) {
            App\SenderMail::create($senderemail);
        }
    }
}
