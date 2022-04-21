<?php

namespace Database\Seeders;

use App\Models\Download;
use App\Models\Info;
use App\Models\Item;
use App\Models\Weblink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->for(Info::factory(), 'content')->count(4)->create();
        Item::factory()->for(Weblink::factory(), 'content')->count(2)->create();
        Item::factory()->for(Download::factory(), 'content')->count(3)->create();
        Item::factory()->for(Info::factory(), 'content')->count(1)->create();
    }
}
