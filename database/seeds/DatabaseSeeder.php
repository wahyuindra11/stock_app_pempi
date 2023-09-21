<?php

use App\Category;
use App\Product;
use App\User;
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
        // $this->call(UsersTableSeeder::class);
        User::Create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret')
        ]);

        
        Category::create([
            'name' => 'Accessories'
        ]);

        Category::create([
            'name' => 'Material'
        ]);

        Category::create([
            'name' => 'Finish Good'
        ]);
        Product::create([
            'category_id' => 1,
            'nama' => 'Pressure Gauge',
            'harga_beli' => 10000,
            'qty' => 10,
            'nomer_spb' => 'S09DSAD',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 2
        Product::create([
            'category_id' => 1,
            'nama' => 'Hose Nozle',
            'harga_beli' => 17000,
            'qty' => 10,
            'nomer_spb' => 'dw2334rw',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 3
        Product::create([
            'category_id' => 1,
            'nama' => 'Belt',
            'harga_beli' => 30000,
            'qty' => 10,
            'nomer_spb' => '2211212',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 4
        Product::create([
            'category_id' => 3,
            'nama' => 'APAR 12KG',
            'harga_beli' => 30000,
            'qty' => 7,
            'nomer_spb' => 'sdfq3rfas',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 5
        Product::create([
            'category_id' => 3,
            'nama' => 'APAR 3KG',
            'harga_beli' => 15000,
            'qty' => 10,
            'nomer_spb' => 'sdfq3rfas',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 6
        Product::create([
            'category_id' => 3,
            'nama' => 'APAR 5KG',
            'harga_beli' => 120000,
            'qty' => 10,
            'nomer_spb' => 'S09DSAD',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 7
        Product::create([
            'category_id' => 2,
            'nama' => 'TABUNG 4KG',
            'harga_beli' => 10000,
            'qty' => 3,
            'nomer_spb' => 'S09DSAD',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 8
        Product::create([
            'category_id' => 2,
            'nama' => 'TABUNG 5KG',
            'harga_beli' => 10000,
            'qty' => 12,
            'nomer_spb' => 'S09DSAD',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

        // Product 9
        Product::create([
            'category_id' => 2,
            'nama' => 'TABUNG 6KG',
            'harga_beli' => 120000,
            'qty' => 10,
            'nomer_spb' => 'S09DSAD',
            'keterangan' => null, // Ubah jika ada keterangan
        ]);

    }
}
