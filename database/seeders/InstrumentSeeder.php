<?php

namespace Database\Seeders;

use App\Models\Instrument;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    public function run(): void
    {
        // [name, brand, price, description, image, type]
        $instruments = [
            ['Gitar Akustik F310', 'Yamaha', 1850000,
             'Gitar akustik full-size dengan top spruce dan body meranti. Suara hangat dan seimbang, sangat cocok untuk pemula maupun latihan harian.',
             'yamaha-f310.jpg', 'Senar'],
            ['Stratocaster Player', 'Fender', 14500000,
             'Gitar listrik legendaris dengan tiga pickup single-coil dan tremolo sinkron. Karakter suara jernih dan responsif untuk pop, blues, hingga rock.',
             'fender-stratocaster.jpg', 'Senar'],
            ['Ukulele Soprano KA-S', 'Kala', 750000,
             'Ukulele soprano berbahan mahoni dengan suara ceria dan ringan dimainkan. Praktis dibawa bepergian dan ideal untuk belajar dasar musik.',
             'kala-ukulele.jpg', 'Senar'],
            ['Biola 4/4 Student', 'Stentor', 2300000,
             'Biola ukuran 4/4 untuk pelajar, lengkap dengan bow, rosin, dan hard case. Nada bersih serta stabil, cocok untuk latihan klasik.',
             'stentor-violin.jpg', 'Gesek'],
            ['Keyboard PSR-E373', 'Yamaha', 3900000,
             'Keyboard portabel 61 tuts touch response dengan 622 suara dan 205 style iringan. Fitur lesson membantu pemula belajar lebih cepat.',
             'yamaha-psr-e373.jpg', 'Keyboard'],
            ['Piano Digital PX-S1100', 'Casio', 9500000,
             'Piano digital 88 tuts dengan scaled hammer action dan desain super tipis. Suara piano akustik yang realistis serta konektivitas Bluetooth audio.',
             'casio-px-s1100.jpg', 'Keyboard'],
            ['Drum Set Roadshow 5-Piece', 'Pearl', 7800000,
             'Satu set drum 5 piece lengkap dengan hardware, cymbal, dan stool. Paket komplit untuk pemula yang ingin langsung bermain band.',
             'pearl-roadshow.jpg', 'Perkusi'],
            ['Saksofon Alto YAS-280', 'Yamaha', 21000000,
             'Saksofon alto untuk pelajar dengan mekanik ringan dan intonasi akurat. Finishing gold lacquer yang elegan dengan suara penuh dan merdu.',
             'yamaha-yas-280.jpg', 'Tiup'],
            ['Flute YFL-222', 'Yamaha', 7200000,
             'Flute silver-plated dengan keyed-C dan closed hole. Nada jernih dan mudah ditiup, pilihan favorit pelajar dan orkestra sekolah.',
             'yamaha-yfl-222.jpg', 'Tiup'],
            ['Bass Listrik GSR200', 'Ibanez', 4200000,
             'Bass listrik 4 senar dengan pickup PJ dan neck ramping yang nyaman. Menghasilkan low-end yang tebal dan bertenaga untuk berbagai genre.',
             'ibanez-gsr200.jpg', 'Senar'],
        ];

        foreach ($instruments as [$name, $brand, $price, $description, $image, $type]) {
            Instrument::create([
                'name'        => $name,
                'brand'       => $brand,
                'price'       => $price,
                'description' => $description,
                'image'       => $image,
                'type'        => $type,
            ]);
        }
    }
}
