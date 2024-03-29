<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PointSeeder::class);
        $this->call(GiftSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(SaleSeeder::class);
        $this->call(SenderMailSeeder::class);
    }
}
