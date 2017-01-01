<?php


use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \CrudJsonClient\Client::truncate();
        factory(\CrudJsonClient\Client::class)->create();
    }
}
