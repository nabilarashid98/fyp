<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->insert([
            'name' => 'Pusat Disleksia Setia',
            'state' => 'Johor',
            'address' => '56-02, Jalan Setia Tropika 1/24, Taman, Setia Tropika,Johor Bahru',
            'contact' => '07-244 5933',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia HQ',
            'state' => 'WP Kuala Lumpur',
            'address' => '349, Jalan Ampang, Desa Pahlawan,Kuala Lumpurr',
            'contact' => '03-4265 1632',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('centers')->insert([
            'name' => 'Dyslexia Remedial Centre',
            'state' => 'Selangor',
            'address' => '10, Jalan USJ 10/1, Taipan Business Centre,Subang Jaya',
            'contact' => '012-640 9146',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia( Subang Jaya)',
            'state' => 'Selangor',
            'address' => 'No.2, Jalan USJ 4/4b, Usj 4,Subang Jaya, Selangor',
            'contact' => '03-8023 0919',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia( Melaka )',
            'state' => 'Melaka',
            'address' => '39, Jalan Duku 6, Taman Rumpun Bahagia,Bachang',
            'contact' => '019 667 6572',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia( Batu Pahat)',
            'state' => 'Johor',
            'address' => 'No. 20 Jalan Rimba, Taman Abdul Rahman',
            'contact' => '019 708 5580',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Puchong)',
            'state' => 'Selangor',
            'address' => 'No. 16 Jalan Serindit 18,Bandar Puchong Jaya',
            'contact' => '017 474 7389',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Tun Dr Ismail)',
            'state' => 'WP Kuala Lumpur',
            'address' => 'No. 2 Lorong Abang Haji Openg 3, Taman Tun Dr Ismail',
            'contact' => '03 7722 1314',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Bangi)',
            'state' => 'Selangor',
            'address' => 'No. 4 Jalan 8/11 Seksyen 8,Bandar Baru Bangi',
            'contact' => '012 884 7474',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia ( Sekinchan)',
            'state' => 'Selangor',
            'address' => 'No. 18849 Jalan Alamanda 5,Sekinchan',
            'contact' => '017 884 4316',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia ( Sekinchan)',
            'state' => 'Selangor',
            'address' => 'No. 18849 Jalan Alamanda 5,Sekinchan',
            'contact' => '017 884 4316',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Kemaman)',
            'state' => 'Pahang',
            'address' => 'No. 18449 Jalan Mak Lagam, Chukai',
            'contact' => '012 956 5565',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Sungai Petani)',
            'state' => 'Kedah',
            'address' => ' No. 452 Lorong BLM 1/21, Bandar Mutiara,Sungai Petani / No. 73, Jalan Precint 9/3,Sungai Petani, ',
            'contact' => '012 422 0782 / 013 204 8142',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



          DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Pulau Pinang)',
            'state' => 'Pulau Pinang',
            'address' => 'No. 45 Lorong Nipah 5, Pulau Pinang',
            'contact' => '016 520 9017',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

           DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Johor Bharu)',
            'state' => 'Johor Bharu ',
            'address' => 'Hospital Permai',
            'contact' => '019 749 6129 / 016 741 4028',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

            DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia(Kuantan)',
            'state' => 'Pahang',
            'address' => 'No. 58 Lorong 1M 15/29, Bandar Indera Mahkota, Kuantan',
            'contact' => '09 573 7905',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia(Ipoh)',
            'state' => 'Perak',
            'address' => '32-D-1 Jalan Ng Weng Har, Taman Pertama',
            'contact' => '017 524 3162',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia (Shah Alam)',
            'state' => 'Selangor',
            'address' => 'No.1, Jalan Tekukur, 16/1c Seksyen 6, Shah Alam',
            'contact' => '011 2835 1761',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia(Ipoh)',
            'state' => 'Perak',
            'address' => '32-D-1 Jalan Ng Weng Har, Taman Pertama',
            'contact' => '017 524 3162',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia Titiwangsa, Dyslexia Genius',
            'state' => 'WP Kuala Lumpur',
            'address' => '6-8, Persiaran Kuantan, Titiwangsa',
            'contact' => '03-4031 6833',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Persatuan Dyslexia Malaysia(Ipoh)',
            'state' => 'Perak',
            'address' => '32-D-1 Jalan Ng Weng Har, Taman Pertama',
            'contact' => '017 524 3162',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'HilsLearning',
            'state' => 'WP Kuala Lumpur',
            'address' => 'No 13-2 , Jalan Solaris 4 , Mont Kiara ',
            'contact' => '03-62030029',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'SRI RAFELSIA',
            'state' => 'WP Kuala Lumpur',
            'address' => 'No. 65, Persiaran Zaaba, Taman Tun Dr Ismail ',
            'contact' => '012 371 0372',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Tuition Dyslexia Senawang',
            'state' => 'Negeri Sembilan',
            'address' => '646 jalan lavender heights 7,Senawang',
            'contact' => '013-346 0954',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Louis Center for Children with Special Needs Seremban',
            'state' => 'Negeri Sembilan',
            'address' => '1908, Lorong Sentul 1, 1, Jalan Tok Ungku, Taman Ujong',
            'contact' => '012-393 5821',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'Dyslexia Ampang Enrichment Care Center',
            'state' => 'Selangor',
            'address' => '17, Jalan Avenue 3, Kampung Ampang Campuran,Ampang ',
            'contact' => '03-4288 3539',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'DYSLEXIA KEMAMAN ENRICHMENT CARE CENTRE',
            'state' => 'Terengganu',
            'address' => 'No 59 Perumahan SCDC Lot 144,Chukai,  ',
            'contact' => '012-949 3916',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

             DB::table('centers')->insert([
            'name' => 'SPECIAL KIDZ REHAB CARE CENTRE KUALA TERENGGANU',
            'state' => 'Terengganu',
            'address' => '36/68, Taman Teratai, Jalan Sultan Omar,Kuala Terengganu ',
            'contact' => '-',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


            DB::table('centers')->insert([
            'name' => 'Dyslexia Association of Sarawak',
            'state' => 'Sarawak',
            'address' => 'Lorong Maxwell 2, 93000 Kuching  ',
            'contact' => '082-242 900',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);




    }
}
