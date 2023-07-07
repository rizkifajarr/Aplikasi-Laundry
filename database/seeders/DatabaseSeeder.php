<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Faq;
use App\Models\User;
use App\Models\Paket;
use App\Models\Sosmed;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'kanada kurniawan',
            'hp' => '08115737027',
            'alamat' => 'Jalan M. Yamin Gg. PGA no27',
            'email' => 'kanada.kurniawan@gmail.com',
            'password' => bcrypt('123'),
            'admin' => 1
        ]);

        User::create([
            'nama' => 'wawan kurniawan',
            'hp' => '08115737027',
            'alamat' => 'Jalan M. Yamin Gg. PGA no27',
            'email' => 'kanadakurniawan@gmail.com',
            'password' => bcrypt('123'),
            'admin' => 0
        ]);

        Paket::create([
            'nama' => 'Reguler',
            'harga' => 10000,
            'waktu' => 3
        ]);

        Paket::create([
            'nama' => 'Kilat',
            'harga' => 15000,
            'waktu' => 2
        ]);

        Paket::create([
            'nama' => 'Spesial',
            'harga' => 20000,
            'waktu' => 1
        ]);

        Faq::create([
            'pertanyaan' => 'Berapa lama waktu yang diperlukan untuk mencuci dan mengeringkan pakaian?',
            'jawaban' => 'Di Laundry Kite, kami berkomitmen untuk memberikan layanan yang cepat dan efisien. Waktu yang diperlukan tergantung pada jumlah dan jenis pakaian yang Anda serahkan. Secara umum, kami menargetkan pengembalian dalam waktu 24-48 jam.'
        ]);

        Faq::create([
            'pertanyaan' => 'Bagaimana sistem pengambilan dan pengantaran bekerja?',
            'jawaban' => 'Kami menawarkan layanan pengambilan dan pengantaran gratis untuk memudahkan Anda. Setelah Anda memesan layanan, tim kami akan mengatur jadwal pengambilan sesuai dengan waktu yang Anda pilih. Kami akan mengambil cucian Anda di lokasi yang ditentukan dan mengantarkannya kembali setelah selesai dicuci dan dikeringkan.'
        ]);

        Faq::create([
            'pertanyaan' => 'Apakah Anda menerima pakaian dengan instruksi khusus atau bahan sensitif?',
            'jawaban' => 'Ya, kami dapat menangani pakaian dengan instruksi khusus atau bahan sensitif. Kami memiliki pengalaman dalam merawat berbagai jenis pakaian dan memahami kebutuhan khusus yang mungkin Anda miliki. Anda dapat memberikan instruksi khusus kepada tim kami dan kami akan merawat pakaian Anda dengan hati-hati sesuai dengan permintaan Anda.'
        ]);

        Faq::create([
            'pertanyaan' => 'Bagaimana jika ada kerusakan atau kehilangan pakaian?',
            'jawaban' => 'Kami sangat memperhatikan keamanan dan keandalan. Namun, jika terjadi kerusakan atau kehilangan pakaian selama proses pencucian, kami memiliki kebijakan tanggung jawab yang sesuai. Anda dapat menghubungi tim kami dan kami akan menindaklanjuti secara profesional dan memberikan solusi yang adil.'
        ]);
        
        Sosmed::create([
            'jenis' => 'Twitter',
            'sosmed_id' => 'LaundryKite'
        ]);
        
        Sosmed::create([
            'jenis' => 'Facebook',
            'sosmed_id' => 'LaundryKite'
        ]);
        
        Sosmed::create([
            'jenis' => 'Instagram',
            'sosmed_id' => 'LaundryKite'
        ]);
        
        Sosmed::create([
            'jenis' => 'LinkedIn',
            'sosmed_id' => 'LaundryKite'
        ]);
    }
}
