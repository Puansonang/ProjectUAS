<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produk_tbl')->insert([
            [
                'name'=>'Backpack Bear',
                "harga"=>'230000',
                "deskripsi"=>'Tas Punggung Wanita Kawai Anti Air',
                "kategori"=>'Tas',
                "galeri"=>'https://i.pinimg.com/564x/85/2d/1b/852d1ba169cb88571b1e7db1faa51b73.jpg'
            ],
            [
                'name'=>'Backpack Teddy',
                "harga"=>'237000',
                "deskripsi"=>'Tas Punggung Wanita Kawai Anti Air',
                "kategori"=>'Tas',
                "galeri"=>'https://i.pinimg.com/564x/75/67/e3/7567e3b00827f3aaba0d3b91c3b9806f.jpg'
            ],
            [
                'name'=>'Hoodie Ice Cream',
                "harga"=>'210000',
                "deskripsi"=>'Hoodie unisex oversize',
                "kategori"=>'Pakaian',
                "galeri"=>'https://i.pinimg.com/564x/ce/fc/35/cefc35b43241ac9b4e0197424b50d6a1.jpg'
            ],
            [
                'name'=>'Hoodie Avocado',
                "harga"=>'185000',
                "deskripsi"=>'Hoodie unisex oversize',
                "kategori"=>'Pakaian',
                "galeri"=>'https://i.pinimg.com/564x/d0/17/95/d01795bdc53ebb17efb115609063029f.jpg'
            ],
            [
                'name'=>'Sepatu Cats',
                "harga"=>'275000',
                "deskripsi"=>'Cats Wanita Ukuran 37-40',
                "kategori"=>'Sepatu',
                "galeri"=>'https://i.pinimg.com/564x/2b/fc/9c/2bfc9c73c9bbaf41ab754326c1a233bf.jpg'
            ],
            [
                'name'=>'Sendal Cute',
                "harga"=>'255000',
                "deskripsi"=>'Sendal Wanita Ukuran 37-40',
                "kategori"=>'Sepatu',
                "galeri"=>'https://i.pinimg.com/564x/1e/37/fe/1e37fe8137a0414d43b3f1575bcfbf57.jpg'
            ]
        ]);
    }
}
