<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statistics')->delete();
        
        \DB::table('statistics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 3,
                'statisticable_id' => 168,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-20 23:51:17',
                'updated_at' => '2022-03-21 00:13:24',
            ),
            1 => 
            array (
                'id' => 2,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 2,
                'statisticable_id' => 141,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-20 23:51:57',
                'updated_at' => '2022-03-21 00:13:28',
            ),
            2 => 
            array (
                'id' => 3,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 1,
                'statisticable_id' => 161,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-20 23:53:35',
                'updated_at' => '2022-03-20 23:53:35',
            ),
            3 => 
            array (
                'id' => 4,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 1,
                'statisticable_id' => 190,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-21 00:23:26',
                'updated_at' => '2022-03-21 00:23:26',
            ),
            4 => 
            array (
                'id' => 5,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 1,
                'statisticable_id' => 162,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-21 00:23:30',
                'updated_at' => '2022-03-21 00:23:30',
            ),
            5 => 
            array (
                'id' => 6,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 2,
                'statisticable_id' => 196,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 00:26:49',
                'updated_at' => '2022-03-23 01:47:36',
            ),
            6 => 
            array (
                'id' => 7,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 5,
                'statisticable_id' => 8,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 01:56:14',
                'updated_at' => '2022-03-23 22:34:49',
            ),
            7 => 
            array (
                'id' => 8,
                'ip' => '::1',
                'user_id' => NULL,
                'hits' => 1,
                'statisticable_id' => 185,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 20:25:17',
                'updated_at' => '2022-03-23 20:25:17',
            ),
            8 => 
            array (
                'id' => 9,
                'ip' => '::1',
                'user_id' => NULL,
                'hits' => 23,
                'statisticable_id' => 183,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 20:26:20',
                'updated_at' => '2022-03-23 21:49:13',
            ),
            9 => 
            array (
                'id' => 10,
                'ip' => '::1',
                'user_id' => NULL,
                'hits' => 3,
                'statisticable_id' => 182,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 21:53:13',
                'updated_at' => '2022-03-23 22:00:16',
            ),
            10 => 
            array (
                'id' => 11,
                'ip' => '::1',
                'user_id' => NULL,
                'hits' => 1,
                'statisticable_id' => 138,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:00:36',
                'updated_at' => '2022-03-23 22:00:36',
            ),
            11 => 
            array (
                'id' => 12,
                'ip' => '::1',
                'user_id' => NULL,
                'hits' => 3,
                'statisticable_id' => 8,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:04:13',
                'updated_at' => '2022-03-23 22:08:07',
            ),
            12 => 
            array (
                'id' => 13,
                'ip' => NULL,
                'user_id' => 2,
                'hits' => 2,
                'statisticable_id' => 8,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:18:18',
                'updated_at' => '2022-03-23 22:20:46',
            ),
            13 => 
            array (
                'id' => 14,
                'ip' => NULL,
                'user_id' => 2,
                'hits' => 1,
                'statisticable_id' => 182,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:22:59',
                'updated_at' => '2022-03-23 22:22:59',
            ),
            14 => 
            array (
                'id' => 15,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 2,
                'statisticable_id' => 130,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:35:25',
                'updated_at' => '2022-03-23 22:35:32',
            ),
            15 => 
            array (
                'id' => 16,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 2,
                'statisticable_id' => 7,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:35:37',
                'updated_at' => '2022-03-23 22:35:43',
            ),
            16 => 
            array (
                'id' => 17,
                'ip' => NULL,
                'user_id' => 5,
                'hits' => 1,
                'statisticable_id' => 11,
                'statisticable_type' => 'App\\Models\\Device',
            'agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15',
                'created_at' => '2022-03-23 22:35:49',
                'updated_at' => '2022-03-23 22:35:49',
            ),
        ));
        
        
    }
}