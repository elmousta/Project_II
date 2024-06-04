<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $description="Tüm kitapların kağıt kopyası ve elektronik kopyası olmak üzere iki versiyonu mevcuttur.
    Bu ki   taplar son teknoloji kullanılarak son derece lüks bir şekilde basılmıştır.";

        $booksRecords = [
            [
                'id' => 1,
                'title' => 'Ahmet Hanbal Görüşleri',
                'author' => 'Ahmet Hanbal',
                'publication_date' => '1995-01-07',
                'description' =>$description ,
                'price' => 250.00,
                'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A2%D8%B1%D8%A7%D8%A1%20%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D9%85%20%D8%A3%D8%AD%D9%85%D8%AF%20%D8%A8%D9%86%20%D8%AD%D9%86%D8%A8%D9%84-550x550w.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Kurbanları',
                'author' => 'Emin Elhaj Mohamed Ahmed',
                'publication_date' => '2014-01-01',
                'description' =>$description ,
                'price' => 8.00,
                'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A7%D9%84%D8%A3%D8%B6%D8%AD%D9%8A%D8%A9-550x550w.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Mübarek Mescid-i Aksanın yaklaşan kurtuluşu için stratejik planlama',
                'author' => 'ِAbdel Fetah Mohamed',
                'publication_date' => '2014-09-09',
                'description' =>$description ,
                'price' => 10.99,
                'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A7%D9%84%D8%AA%D8%AE%D8%B7%D9%8A%D8%B7%20%D8%A7%D9%84%D8%A7%D9%95%D8%B3%D8%AA%D9%8A%D8%B1%D8%A7%D8%AA%D9%8A%D8%AC%D9%8A-550x550h.jpg'
            ],
            [
            'id' => 4,
            'title' => 'Kuran eğitimine dönüş',
            'author' => 'Mohamed Elabra',
            'publication_date' => '2013-01-01',
            'description' =>$description ,
            'price' => 60.00,
            'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A7%D9%84%D8%B9%D9%88%D8%AF%D8%A9%20%D8%A7%D9%95%D9%84%D9%89%20%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9%20%D8%A7%D9%84%D9%82%D8%B1%D8%A7%D9%93%D9%86%D9%8A%D8%A9-550x550w.jpg'
            ],
            [
            'id' => 5,
            'title' => 'Peygamberlik biyografisinde savaş etiği',
            'author' => 'Mohamed Ahmed Moubid',
            'publication_date' => '2007-11-15',
            'description' =>$description ,
            'price' => 500.00,
            'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A7%D9%94%D8%AE%D9%84%D8%A7%D9%82%D9%8A%D8%A7%D8%AA%20%D8%A7%D9%84%D8%AD%D8%B1%D8%A8-550x550w.jpg'
            ],
            [
            'id' => 6,
            'title' => 'Tarih dersleri',
            'author' => 'Mohamed Abda',
            'publication_date' => '1997-02-10',
            'description' =>$description ,
            'price' => 5.00,
            'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%AF%D8%B1%D9%88%D8%B3%20%D8%A7%D9%84%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE-550x550w.jpg'
            ],
            [
            'id' => 7,
            'title' => 'Bilim adamları ve kelimenin dürüstlüğü',
            'author' => '	Mohamed Serour',
            'publication_date' => '2001-12-07',
            'description' =>$description ,
            'price' => 34.99,
            'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A7%D9%84%D8%B9%D9%84%D9%85%D8%A7%D8%A1%20%D9%88%D8%A7%D9%94%D9%85%D8%A7%D9%86%D8%A9%20%D8%A7%D9%84%D9%83%D9%84%D9%85%D8%A9-550x550h.jpg'
            ],
            [
            'id' => 8,
            'title' => 'Peygamberler ve kutsal ev',
            'author' => 'Aicha Mohamed',
            'publication_date' => '2018-08-16',
            'description' =>$description ,
            'price' => 25.00,
            'cover_image' => 'https://dar-alusool.com/image/cache/catalog/%D8%A3%D8%BA%D9%84%D9%81%D8%A9%20%D8%A7%D9%84%D9%83%D8%AA%D8%A8/%D8%AF%D8%A7%D8%B1%20%D8%A7%D9%84%D8%A3%D8%B5%D9%88%D9%84%20%D8%A7%D9%84%D8%B9%D9%84%D9%85%D9%8A%D8%A9/%D8%A7%D9%84%D8%A7%D9%94%D9%86%D8%A8%D9%8A%D8%A7%D8%A1%20%D9%88%D8%A8%D9%8A%D8%AA%20%D8%A7%D9%84%D9%85%D9%82%D8%AF%D8%B3-550x550w.jpg'
            ],
        ];

        Book::insert($booksRecords);
    }
}
