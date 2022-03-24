<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeviceStatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('device_statistics')->delete();
        
        \DB::table('device_statistics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'hits' => 69,
                'device_id' => 1,
                'day' => '2020-04-01',
            ),
            1 => 
            array (
                'id' => 2,
                'hits' => 84,
                'device_id' => 1,
                'day' => '2020-05-01',
            ),
            2 => 
            array (
                'id' => 3,
                'hits' => 37,
                'device_id' => 1,
                'day' => '2020-06-01',
            ),
            3 => 
            array (
                'id' => 4,
                'hits' => 45,
                'device_id' => 1,
                'day' => '2020-07-01',
            ),
            4 => 
            array (
                'id' => 5,
                'hits' => 16,
                'device_id' => 1,
                'day' => '2020-08-01',
            ),
            5 => 
            array (
                'id' => 6,
                'hits' => 28,
                'device_id' => 1,
                'day' => '2020-09-01',
            ),
            6 => 
            array (
                'id' => 7,
                'hits' => 49,
                'device_id' => 2,
                'day' => '2020-04-01',
            ),
            7 => 
            array (
                'id' => 8,
                'hits' => 63,
                'device_id' => 2,
                'day' => '2020-05-01',
            ),
            8 => 
            array (
                'id' => 9,
                'hits' => 77,
                'device_id' => 2,
                'day' => '2020-06-01',
            ),
            9 => 
            array (
                'id' => 10,
                'hits' => 43,
                'device_id' => 2,
                'day' => '2020-07-01',
            ),
            10 => 
            array (
                'id' => 11,
                'hits' => 41,
                'device_id' => 2,
                'day' => '2020-08-01',
            ),
            11 => 
            array (
                'id' => 12,
                'hits' => 42,
                'device_id' => 2,
                'day' => '2020-09-01',
            ),
            12 => 
            array (
                'id' => 13,
                'hits' => 122,
                'device_id' => 3,
                'day' => '2020-04-01',
            ),
            13 => 
            array (
                'id' => 14,
                'hits' => 132,
                'device_id' => 3,
                'day' => '2020-05-01',
            ),
            14 => 
            array (
                'id' => 15,
                'hits' => 89,
                'device_id' => 3,
                'day' => '2020-06-01',
            ),
            15 => 
            array (
                'id' => 16,
                'hits' => 86,
                'device_id' => 3,
                'day' => '2020-07-01',
            ),
            16 => 
            array (
                'id' => 17,
                'hits' => 55,
                'device_id' => 3,
                'day' => '2020-08-01',
            ),
            17 => 
            array (
                'id' => 18,
                'hits' => 63,
                'device_id' => 3,
                'day' => '2020-09-01',
            ),
            18 => 
            array (
                'id' => 19,
                'hits' => 80,
                'device_id' => 4,
                'day' => '2020-04-01',
            ),
            19 => 
            array (
                'id' => 20,
                'hits' => 127,
                'device_id' => 4,
                'day' => '2020-05-01',
            ),
            20 => 
            array (
                'id' => 21,
                'hits' => 115,
                'device_id' => 4,
                'day' => '2020-06-01',
            ),
            21 => 
            array (
                'id' => 22,
                'hits' => 65,
                'device_id' => 4,
                'day' => '2020-07-01',
            ),
            22 => 
            array (
                'id' => 23,
                'hits' => 57,
                'device_id' => 4,
                'day' => '2020-08-01',
            ),
            23 => 
            array (
                'id' => 24,
                'hits' => 59,
                'device_id' => 4,
                'day' => '2020-09-01',
            ),
            24 => 
            array (
                'id' => 25,
                'hits' => 70,
                'device_id' => 6,
                'day' => '2020-04-01',
            ),
            25 => 
            array (
                'id' => 26,
                'hits' => 87,
                'device_id' => 6,
                'day' => '2020-05-01',
            ),
            26 => 
            array (
                'id' => 27,
                'hits' => 143,
                'device_id' => 6,
                'day' => '2020-06-01',
            ),
            27 => 
            array (
                'id' => 28,
                'hits' => 122,
                'device_id' => 6,
                'day' => '2020-07-01',
            ),
            28 => 
            array (
                'id' => 29,
                'hits' => 88,
                'device_id' => 6,
                'day' => '2020-08-01',
            ),
            29 => 
            array (
                'id' => 30,
                'hits' => 91,
                'device_id' => 6,
                'day' => '2020-09-01',
            ),
            30 => 
            array (
                'id' => 31,
                'hits' => 224,
                'device_id' => 7,
                'day' => '2020-04-01',
            ),
            31 => 
            array (
                'id' => 32,
                'hits' => 179,
                'device_id' => 7,
                'day' => '2020-05-01',
            ),
            32 => 
            array (
                'id' => 33,
                'hits' => 86,
                'device_id' => 7,
                'day' => '2020-06-01',
            ),
            33 => 
            array (
                'id' => 34,
                'hits' => 58,
                'device_id' => 7,
                'day' => '2020-07-01',
            ),
            34 => 
            array (
                'id' => 35,
                'hits' => 48,
                'device_id' => 7,
                'day' => '2020-08-01',
            ),
            35 => 
            array (
                'id' => 36,
                'hits' => 43,
                'device_id' => 7,
                'day' => '2020-09-01',
            ),
            36 => 
            array (
                'id' => 37,
                'hits' => 79,
                'device_id' => 8,
                'day' => '2020-04-01',
            ),
            37 => 
            array (
                'id' => 38,
                'hits' => 1096,
                'device_id' => 8,
                'day' => '2020-06-01',
            ),
            38 => 
            array (
                'id' => 39,
                'hits' => 336,
                'device_id' => 8,
                'day' => '2020-07-01',
            ),
            39 => 
            array (
                'id' => 40,
                'hits' => 214,
                'device_id' => 8,
                'day' => '2020-08-01',
            ),
            40 => 
            array (
                'id' => 41,
                'hits' => 162,
                'device_id' => 8,
                'day' => '2020-09-01',
            ),
            41 => 
            array (
                'id' => 42,
                'hits' => 9,
                'device_id' => 9,
                'day' => '2020-04-01',
            ),
            42 => 
            array (
                'id' => 43,
                'hits' => 12,
                'device_id' => 10,
                'day' => '2020-04-01',
            ),
            43 => 
            array (
                'id' => 44,
                'hits' => 23,
                'device_id' => 11,
                'day' => '2020-04-01',
            ),
            44 => 
            array (
                'id' => 45,
                'hits' => 83,
                'device_id' => 11,
                'day' => '2020-05-01',
            ),
            45 => 
            array (
                'id' => 46,
                'hits' => 116,
                'device_id' => 11,
                'day' => '2020-06-01',
            ),
            46 => 
            array (
                'id' => 47,
                'hits' => 68,
                'device_id' => 11,
                'day' => '2020-07-01',
            ),
            47 => 
            array (
                'id' => 48,
                'hits' => 46,
                'device_id' => 11,
                'day' => '2020-08-01',
            ),
            48 => 
            array (
                'id' => 49,
                'hits' => 38,
                'device_id' => 11,
                'day' => '2020-09-01',
            ),
            49 => 
            array (
                'id' => 50,
                'hits' => 4,
                'device_id' => 12,
                'day' => '2020-04-01',
            ),
            50 => 
            array (
                'id' => 51,
                'hits' => 33,
                'device_id' => 13,
                'day' => '2020-04-01',
            ),
            51 => 
            array (
                'id' => 52,
                'hits' => 61,
                'device_id' => 13,
                'day' => '2020-05-01',
            ),
            52 => 
            array (
                'id' => 53,
                'hits' => 31,
                'device_id' => 13,
                'day' => '2020-06-01',
            ),
            53 => 
            array (
                'id' => 54,
                'hits' => 27,
                'device_id' => 13,
                'day' => '2020-07-01',
            ),
            54 => 
            array (
                'id' => 55,
                'hits' => 21,
                'device_id' => 13,
                'day' => '2020-08-01',
            ),
            55 => 
            array (
                'id' => 56,
                'hits' => 20,
                'device_id' => 13,
                'day' => '2020-09-01',
            ),
            56 => 
            array (
                'id' => 57,
                'hits' => 36,
                'device_id' => 14,
                'day' => '2020-04-01',
            ),
            57 => 
            array (
                'id' => 58,
                'hits' => 82,
                'device_id' => 14,
                'day' => '2020-05-01',
            ),
            58 => 
            array (
                'id' => 59,
                'hits' => 30,
                'device_id' => 14,
                'day' => '2020-06-01',
            ),
            59 => 
            array (
                'id' => 60,
                'hits' => 34,
                'device_id' => 14,
                'day' => '2020-07-01',
            ),
            60 => 
            array (
                'id' => 61,
                'hits' => 129,
                'device_id' => 14,
                'day' => '2020-08-01',
            ),
            61 => 
            array (
                'id' => 62,
                'hits' => 63,
                'device_id' => 14,
                'day' => '2020-09-01',
            ),
            62 => 
            array (
                'id' => 63,
                'hits' => 77,
                'device_id' => 15,
                'day' => '2020-04-01',
            ),
            63 => 
            array (
                'id' => 64,
                'hits' => 66,
                'device_id' => 15,
                'day' => '2020-05-01',
            ),
            64 => 
            array (
                'id' => 65,
                'hits' => 68,
                'device_id' => 15,
                'day' => '2020-06-01',
            ),
            65 => 
            array (
                'id' => 66,
                'hits' => 32,
                'device_id' => 15,
                'day' => '2020-07-01',
            ),
            66 => 
            array (
                'id' => 67,
                'hits' => 30,
                'device_id' => 15,
                'day' => '2020-08-01',
            ),
            67 => 
            array (
                'id' => 68,
                'hits' => 27,
                'device_id' => 15,
                'day' => '2020-09-01',
            ),
            68 => 
            array (
                'id' => 69,
                'hits' => 188,
                'device_id' => 16,
                'day' => '2020-04-01',
            ),
            69 => 
            array (
                'id' => 70,
                'hits' => 141,
                'device_id' => 16,
                'day' => '2020-05-01',
            ),
            70 => 
            array (
                'id' => 71,
                'hits' => 151,
                'device_id' => 16,
                'day' => '2020-06-01',
            ),
            71 => 
            array (
                'id' => 72,
                'hits' => 66,
                'device_id' => 16,
                'day' => '2020-07-01',
            ),
            72 => 
            array (
                'id' => 73,
                'hits' => 45,
                'device_id' => 16,
                'day' => '2020-08-01',
            ),
            73 => 
            array (
                'id' => 74,
                'hits' => 50,
                'device_id' => 16,
                'day' => '2020-09-01',
            ),
            74 => 
            array (
                'id' => 75,
                'hits' => 410,
                'device_id' => 20,
                'day' => '2020-04-01',
            ),
            75 => 
            array (
                'id' => 76,
                'hits' => 371,
                'device_id' => 20,
                'day' => '2020-05-01',
            ),
            76 => 
            array (
                'id' => 77,
                'hits' => 187,
                'device_id' => 20,
                'day' => '2020-06-01',
            ),
            77 => 
            array (
                'id' => 78,
                'hits' => 182,
                'device_id' => 20,
                'day' => '2020-07-01',
            ),
            78 => 
            array (
                'id' => 79,
                'hits' => 150,
                'device_id' => 20,
                'day' => '2020-08-01',
            ),
            79 => 
            array (
                'id' => 80,
                'hits' => 82,
                'device_id' => 20,
                'day' => '2020-09-01',
            ),
            80 => 
            array (
                'id' => 81,
                'hits' => 63,
                'device_id' => 23,
                'day' => '2020-04-01',
            ),
            81 => 
            array (
                'id' => 82,
                'hits' => 56,
                'device_id' => 23,
                'day' => '2020-05-01',
            ),
            82 => 
            array (
                'id' => 83,
                'hits' => 55,
                'device_id' => 23,
                'day' => '2020-06-01',
            ),
            83 => 
            array (
                'id' => 84,
                'hits' => 50,
                'device_id' => 23,
                'day' => '2020-07-01',
            ),
            84 => 
            array (
                'id' => 85,
                'hits' => 24,
                'device_id' => 23,
                'day' => '2020-08-01',
            ),
            85 => 
            array (
                'id' => 86,
                'hits' => 11,
                'device_id' => 23,
                'day' => '2020-09-01',
            ),
            86 => 
            array (
                'id' => 87,
                'hits' => 34,
                'device_id' => 24,
                'day' => '2020-04-01',
            ),
            87 => 
            array (
                'id' => 88,
                'hits' => 35,
                'device_id' => 24,
                'day' => '2020-05-01',
            ),
            88 => 
            array (
                'id' => 89,
                'hits' => 74,
                'device_id' => 24,
                'day' => '2020-06-01',
            ),
            89 => 
            array (
                'id' => 90,
                'hits' => 26,
                'device_id' => 24,
                'day' => '2020-07-01',
            ),
            90 => 
            array (
                'id' => 91,
                'hits' => 10,
                'device_id' => 24,
                'day' => '2020-08-01',
            ),
            91 => 
            array (
                'id' => 92,
                'hits' => 7,
                'device_id' => 24,
                'day' => '2020-09-01',
            ),
            92 => 
            array (
                'id' => 93,
                'hits' => 31,
                'device_id' => 25,
                'day' => '2020-04-01',
            ),
            93 => 
            array (
                'id' => 94,
                'hits' => 77,
                'device_id' => 25,
                'day' => '2020-05-01',
            ),
            94 => 
            array (
                'id' => 95,
                'hits' => 61,
                'device_id' => 25,
                'day' => '2020-06-01',
            ),
            95 => 
            array (
                'id' => 96,
                'hits' => 70,
                'device_id' => 25,
                'day' => '2020-07-01',
            ),
            96 => 
            array (
                'id' => 97,
                'hits' => 34,
                'device_id' => 25,
                'day' => '2020-08-01',
            ),
            97 => 
            array (
                'id' => 98,
                'hits' => 20,
                'device_id' => 25,
                'day' => '2020-09-01',
            ),
            98 => 
            array (
                'id' => 99,
                'hits' => 2,
                'device_id' => 26,
                'day' => '2020-04-01',
            ),
            99 => 
            array (
                'id' => 100,
                'hits' => 34,
                'device_id' => 27,
                'day' => '2020-04-01',
            ),
            100 => 
            array (
                'id' => 101,
                'hits' => 21,
                'device_id' => 27,
                'day' => '2020-05-01',
            ),
            101 => 
            array (
                'id' => 102,
                'hits' => 20,
                'device_id' => 27,
                'day' => '2020-06-01',
            ),
            102 => 
            array (
                'id' => 103,
                'hits' => 14,
                'device_id' => 27,
                'day' => '2020-07-01',
            ),
            103 => 
            array (
                'id' => 104,
                'hits' => 9,
                'device_id' => 27,
                'day' => '2020-08-01',
            ),
            104 => 
            array (
                'id' => 105,
                'hits' => 20,
                'device_id' => 27,
                'day' => '2020-09-01',
            ),
            105 => 
            array (
                'id' => 106,
                'hits' => 30,
                'device_id' => 28,
                'day' => '2020-04-01',
            ),
            106 => 
            array (
                'id' => 107,
                'hits' => 23,
                'device_id' => 28,
                'day' => '2020-05-01',
            ),
            107 => 
            array (
                'id' => 108,
                'hits' => 28,
                'device_id' => 28,
                'day' => '2020-06-01',
            ),
            108 => 
            array (
                'id' => 109,
                'hits' => 23,
                'device_id' => 28,
                'day' => '2020-07-01',
            ),
            109 => 
            array (
                'id' => 110,
                'hits' => 11,
                'device_id' => 28,
                'day' => '2020-08-01',
            ),
            110 => 
            array (
                'id' => 111,
                'hits' => 7,
                'device_id' => 28,
                'day' => '2020-09-01',
            ),
            111 => 
            array (
                'id' => 112,
                'hits' => 23,
                'device_id' => 29,
                'day' => '2020-04-01',
            ),
            112 => 
            array (
                'id' => 113,
                'hits' => 38,
                'device_id' => 29,
                'day' => '2020-05-01',
            ),
            113 => 
            array (
                'id' => 114,
                'hits' => 47,
                'device_id' => 29,
                'day' => '2020-06-01',
            ),
            114 => 
            array (
                'id' => 115,
                'hits' => 22,
                'device_id' => 29,
                'day' => '2020-07-01',
            ),
            115 => 
            array (
                'id' => 116,
                'hits' => 29,
                'device_id' => 29,
                'day' => '2020-08-01',
            ),
            116 => 
            array (
                'id' => 117,
                'hits' => 9,
                'device_id' => 29,
                'day' => '2020-09-01',
            ),
            117 => 
            array (
                'id' => 118,
                'hits' => 102,
                'device_id' => 30,
                'day' => '2020-04-01',
            ),
            118 => 
            array (
                'id' => 119,
                'hits' => 141,
                'device_id' => 30,
                'day' => '2020-05-01',
            ),
            119 => 
            array (
                'id' => 120,
                'hits' => 57,
                'device_id' => 30,
                'day' => '2020-06-01',
            ),
            120 => 
            array (
                'id' => 121,
                'hits' => 73,
                'device_id' => 30,
                'day' => '2020-07-01',
            ),
            121 => 
            array (
                'id' => 122,
                'hits' => 63,
                'device_id' => 30,
                'day' => '2020-08-01',
            ),
            122 => 
            array (
                'id' => 123,
                'hits' => 169,
                'device_id' => 30,
                'day' => '2020-09-01',
            ),
            123 => 
            array (
                'id' => 124,
                'hits' => 60,
                'device_id' => 32,
                'day' => '2020-04-01',
            ),
            124 => 
            array (
                'id' => 125,
                'hits' => 87,
                'device_id' => 32,
                'day' => '2020-05-01',
            ),
            125 => 
            array (
                'id' => 126,
                'hits' => 45,
                'device_id' => 32,
                'day' => '2020-06-01',
            ),
            126 => 
            array (
                'id' => 127,
                'hits' => 35,
                'device_id' => 32,
                'day' => '2020-07-01',
            ),
            127 => 
            array (
                'id' => 128,
                'hits' => 31,
                'device_id' => 32,
                'day' => '2020-08-01',
            ),
            128 => 
            array (
                'id' => 129,
                'hits' => 16,
                'device_id' => 32,
                'day' => '2020-09-01',
            ),
            129 => 
            array (
                'id' => 130,
                'hits' => 199,
                'device_id' => 34,
                'day' => '2020-04-01',
            ),
            130 => 
            array (
                'id' => 131,
                'hits' => 251,
                'device_id' => 34,
                'day' => '2020-05-01',
            ),
            131 => 
            array (
                'id' => 132,
                'hits' => 107,
                'device_id' => 34,
                'day' => '2020-06-01',
            ),
            132 => 
            array (
                'id' => 133,
                'hits' => 77,
                'device_id' => 34,
                'day' => '2020-07-01',
            ),
            133 => 
            array (
                'id' => 134,
                'hits' => 74,
                'device_id' => 34,
                'day' => '2020-08-01',
            ),
            134 => 
            array (
                'id' => 135,
                'hits' => 47,
                'device_id' => 34,
                'day' => '2020-09-01',
            ),
            135 => 
            array (
                'id' => 136,
                'hits' => 21,
                'device_id' => 35,
                'day' => '2020-04-01',
            ),
            136 => 
            array (
                'id' => 137,
                'hits' => 71,
                'device_id' => 35,
                'day' => '2020-05-01',
            ),
            137 => 
            array (
                'id' => 138,
                'hits' => 55,
                'device_id' => 35,
                'day' => '2020-06-01',
            ),
            138 => 
            array (
                'id' => 139,
                'hits' => 31,
                'device_id' => 35,
                'day' => '2020-07-01',
            ),
            139 => 
            array (
                'id' => 140,
                'hits' => 39,
                'device_id' => 35,
                'day' => '2020-08-01',
            ),
            140 => 
            array (
                'id' => 141,
                'hits' => 17,
                'device_id' => 35,
                'day' => '2020-09-01',
            ),
            141 => 
            array (
                'id' => 142,
                'hits' => 12,
                'device_id' => 37,
                'day' => '2020-04-01',
            ),
            142 => 
            array (
                'id' => 143,
                'hits' => 24,
                'device_id' => 37,
                'day' => '2020-05-01',
            ),
            143 => 
            array (
                'id' => 144,
                'hits' => 19,
                'device_id' => 37,
                'day' => '2020-06-01',
            ),
            144 => 
            array (
                'id' => 145,
                'hits' => 32,
                'device_id' => 37,
                'day' => '2020-07-01',
            ),
            145 => 
            array (
                'id' => 146,
                'hits' => 8,
                'device_id' => 37,
                'day' => '2020-08-01',
            ),
            146 => 
            array (
                'id' => 147,
                'hits' => 18,
                'device_id' => 37,
                'day' => '2020-09-01',
            ),
            147 => 
            array (
                'id' => 148,
                'hits' => 19,
                'device_id' => 42,
                'day' => '2020-04-01',
            ),
            148 => 
            array (
                'id' => 149,
                'hits' => 63,
                'device_id' => 42,
                'day' => '2020-05-01',
            ),
            149 => 
            array (
                'id' => 150,
                'hits' => 21,
                'device_id' => 42,
                'day' => '2020-06-01',
            ),
            150 => 
            array (
                'id' => 151,
                'hits' => 10,
                'device_id' => 42,
                'day' => '2020-07-01',
            ),
            151 => 
            array (
                'id' => 152,
                'hits' => 6,
                'device_id' => 42,
                'day' => '2020-08-01',
            ),
            152 => 
            array (
                'id' => 153,
                'hits' => 6,
                'device_id' => 42,
                'day' => '2020-09-01',
            ),
            153 => 
            array (
                'id' => 154,
                'hits' => 6,
                'device_id' => 44,
                'day' => '2020-04-01',
            ),
            154 => 
            array (
                'id' => 155,
                'hits' => 31,
                'device_id' => 44,
                'day' => '2020-05-01',
            ),
            155 => 
            array (
                'id' => 156,
                'hits' => 30,
                'device_id' => 44,
                'day' => '2020-06-01',
            ),
            156 => 
            array (
                'id' => 157,
                'hits' => 35,
                'device_id' => 44,
                'day' => '2020-07-01',
            ),
            157 => 
            array (
                'id' => 158,
                'hits' => 27,
                'device_id' => 44,
                'day' => '2020-08-01',
            ),
            158 => 
            array (
                'id' => 159,
                'hits' => 16,
                'device_id' => 44,
                'day' => '2020-09-01',
            ),
            159 => 
            array (
                'id' => 160,
                'hits' => 14,
                'device_id' => 47,
                'day' => '2020-04-01',
            ),
            160 => 
            array (
                'id' => 161,
                'hits' => 31,
                'device_id' => 47,
                'day' => '2020-05-01',
            ),
            161 => 
            array (
                'id' => 162,
                'hits' => 13,
                'device_id' => 47,
                'day' => '2020-06-01',
            ),
            162 => 
            array (
                'id' => 163,
                'hits' => 26,
                'device_id' => 47,
                'day' => '2020-07-01',
            ),
            163 => 
            array (
                'id' => 164,
                'hits' => 8,
                'device_id' => 47,
                'day' => '2020-08-01',
            ),
            164 => 
            array (
                'id' => 165,
                'hits' => 3,
                'device_id' => 47,
                'day' => '2020-09-01',
            ),
            165 => 
            array (
                'id' => 166,
                'hits' => 31,
                'device_id' => 53,
                'day' => '2020-04-01',
            ),
            166 => 
            array (
                'id' => 167,
                'hits' => 44,
                'device_id' => 53,
                'day' => '2020-05-01',
            ),
            167 => 
            array (
                'id' => 168,
                'hits' => 45,
                'device_id' => 53,
                'day' => '2020-06-01',
            ),
            168 => 
            array (
                'id' => 169,
                'hits' => 44,
                'device_id' => 53,
                'day' => '2020-07-01',
            ),
            169 => 
            array (
                'id' => 170,
                'hits' => 38,
                'device_id' => 53,
                'day' => '2020-08-01',
            ),
            170 => 
            array (
                'id' => 171,
                'hits' => 14,
                'device_id' => 53,
                'day' => '2020-09-01',
            ),
            171 => 
            array (
                'id' => 172,
                'hits' => 85,
                'device_id' => 54,
                'day' => '2020-04-01',
            ),
            172 => 
            array (
                'id' => 173,
                'hits' => 77,
                'device_id' => 54,
                'day' => '2020-05-01',
            ),
            173 => 
            array (
                'id' => 174,
                'hits' => 39,
                'device_id' => 54,
                'day' => '2020-06-01',
            ),
            174 => 
            array (
                'id' => 175,
                'hits' => 28,
                'device_id' => 54,
                'day' => '2020-07-01',
            ),
            175 => 
            array (
                'id' => 176,
                'hits' => 18,
                'device_id' => 54,
                'day' => '2020-08-01',
            ),
            176 => 
            array (
                'id' => 177,
                'hits' => 22,
                'device_id' => 54,
                'day' => '2020-09-01',
            ),
            177 => 
            array (
                'id' => 178,
                'hits' => 17,
                'device_id' => 57,
                'day' => '2020-04-01',
            ),
            178 => 
            array (
                'id' => 179,
                'hits' => 18,
                'device_id' => 57,
                'day' => '2020-05-01',
            ),
            179 => 
            array (
                'id' => 180,
                'hits' => 35,
                'device_id' => 57,
                'day' => '2020-06-01',
            ),
            180 => 
            array (
                'id' => 181,
                'hits' => 23,
                'device_id' => 57,
                'day' => '2020-07-01',
            ),
            181 => 
            array (
                'id' => 182,
                'hits' => 4,
                'device_id' => 57,
                'day' => '2020-08-01',
            ),
            182 => 
            array (
                'id' => 183,
                'hits' => 12,
                'device_id' => 57,
                'day' => '2020-09-01',
            ),
            183 => 
            array (
                'id' => 184,
                'hits' => 14,
                'device_id' => 58,
                'day' => '2020-04-01',
            ),
            184 => 
            array (
                'id' => 185,
                'hits' => 15,
                'device_id' => 58,
                'day' => '2020-05-01',
            ),
            185 => 
            array (
                'id' => 186,
                'hits' => 14,
                'device_id' => 58,
                'day' => '2020-06-01',
            ),
            186 => 
            array (
                'id' => 187,
                'hits' => 13,
                'device_id' => 58,
                'day' => '2020-07-01',
            ),
            187 => 
            array (
                'id' => 188,
                'hits' => 7,
                'device_id' => 58,
                'day' => '2020-08-01',
            ),
            188 => 
            array (
                'id' => 189,
                'hits' => 8,
                'device_id' => 58,
                'day' => '2020-09-01',
            ),
            189 => 
            array (
                'id' => 190,
                'hits' => 24,
                'device_id' => 60,
                'day' => '2020-04-01',
            ),
            190 => 
            array (
                'id' => 191,
                'hits' => 38,
                'device_id' => 60,
                'day' => '2020-05-01',
            ),
            191 => 
            array (
                'id' => 192,
                'hits' => 50,
                'device_id' => 60,
                'day' => '2020-06-01',
            ),
            192 => 
            array (
                'id' => 193,
                'hits' => 35,
                'device_id' => 60,
                'day' => '2020-07-01',
            ),
            193 => 
            array (
                'id' => 194,
                'hits' => 22,
                'device_id' => 60,
                'day' => '2020-08-01',
            ),
            194 => 
            array (
                'id' => 195,
                'hits' => 27,
                'device_id' => 60,
                'day' => '2020-09-01',
            ),
            195 => 
            array (
                'id' => 196,
                'hits' => 16,
                'device_id' => 62,
                'day' => '2020-04-01',
            ),
            196 => 
            array (
                'id' => 197,
                'hits' => 31,
                'device_id' => 62,
                'day' => '2020-05-01',
            ),
            197 => 
            array (
                'id' => 198,
                'hits' => 18,
                'device_id' => 62,
                'day' => '2020-06-01',
            ),
            198 => 
            array (
                'id' => 199,
                'hits' => 20,
                'device_id' => 62,
                'day' => '2020-07-01',
            ),
            199 => 
            array (
                'id' => 200,
                'hits' => 17,
                'device_id' => 62,
                'day' => '2020-08-01',
            ),
            200 => 
            array (
                'id' => 201,
                'hits' => 9,
                'device_id' => 62,
                'day' => '2020-09-01',
            ),
            201 => 
            array (
                'id' => 202,
                'hits' => 30,
                'device_id' => 68,
                'day' => '2020-04-01',
            ),
            202 => 
            array (
                'id' => 203,
                'hits' => 32,
                'device_id' => 68,
                'day' => '2020-05-01',
            ),
            203 => 
            array (
                'id' => 204,
                'hits' => 25,
                'device_id' => 68,
                'day' => '2020-06-01',
            ),
            204 => 
            array (
                'id' => 205,
                'hits' => 21,
                'device_id' => 68,
                'day' => '2020-07-01',
            ),
            205 => 
            array (
                'id' => 206,
                'hits' => 50,
                'device_id' => 68,
                'day' => '2020-08-01',
            ),
            206 => 
            array (
                'id' => 207,
                'hits' => 13,
                'device_id' => 68,
                'day' => '2020-09-01',
            ),
            207 => 
            array (
                'id' => 208,
                'hits' => 18,
                'device_id' => 73,
                'day' => '2020-04-01',
            ),
            208 => 
            array (
                'id' => 209,
                'hits' => 30,
                'device_id' => 73,
                'day' => '2020-05-01',
            ),
            209 => 
            array (
                'id' => 210,
                'hits' => 17,
                'device_id' => 73,
                'day' => '2020-06-01',
            ),
            210 => 
            array (
                'id' => 211,
                'hits' => 19,
                'device_id' => 73,
                'day' => '2020-07-01',
            ),
            211 => 
            array (
                'id' => 212,
                'hits' => 21,
                'device_id' => 73,
                'day' => '2020-08-01',
            ),
            212 => 
            array (
                'id' => 213,
                'hits' => 12,
                'device_id' => 73,
                'day' => '2020-09-01',
            ),
            213 => 
            array (
                'id' => 214,
                'hits' => 10,
                'device_id' => 74,
                'day' => '2020-04-01',
            ),
            214 => 
            array (
                'id' => 215,
                'hits' => 15,
                'device_id' => 74,
                'day' => '2020-05-01',
            ),
            215 => 
            array (
                'id' => 216,
                'hits' => 8,
                'device_id' => 74,
                'day' => '2020-06-01',
            ),
            216 => 
            array (
                'id' => 217,
                'hits' => 17,
                'device_id' => 74,
                'day' => '2020-07-01',
            ),
            217 => 
            array (
                'id' => 218,
                'hits' => 3,
                'device_id' => 74,
                'day' => '2020-08-01',
            ),
            218 => 
            array (
                'id' => 219,
                'hits' => 3,
                'device_id' => 74,
                'day' => '2020-09-01',
            ),
            219 => 
            array (
                'id' => 220,
                'hits' => 7,
                'device_id' => 75,
                'day' => '2020-04-01',
            ),
            220 => 
            array (
                'id' => 221,
                'hits' => 15,
                'device_id' => 75,
                'day' => '2020-05-01',
            ),
            221 => 
            array (
                'id' => 222,
                'hits' => 8,
                'device_id' => 75,
                'day' => '2020-06-01',
            ),
            222 => 
            array (
                'id' => 223,
                'hits' => 25,
                'device_id' => 75,
                'day' => '2020-07-01',
            ),
            223 => 
            array (
                'id' => 224,
                'hits' => 5,
                'device_id' => 75,
                'day' => '2020-08-01',
            ),
            224 => 
            array (
                'id' => 225,
                'hits' => 8,
                'device_id' => 75,
                'day' => '2020-09-01',
            ),
            225 => 
            array (
                'id' => 226,
                'hits' => 16,
                'device_id' => 76,
                'day' => '2020-04-01',
            ),
            226 => 
            array (
                'id' => 227,
                'hits' => 18,
                'device_id' => 76,
                'day' => '2020-05-01',
            ),
            227 => 
            array (
                'id' => 228,
                'hits' => 18,
                'device_id' => 76,
                'day' => '2020-06-01',
            ),
            228 => 
            array (
                'id' => 229,
                'hits' => 23,
                'device_id' => 76,
                'day' => '2020-07-01',
            ),
            229 => 
            array (
                'id' => 230,
                'hits' => 6,
                'device_id' => 76,
                'day' => '2020-08-01',
            ),
            230 => 
            array (
                'id' => 231,
                'hits' => 6,
                'device_id' => 76,
                'day' => '2020-09-01',
            ),
            231 => 
            array (
                'id' => 232,
                'hits' => 126,
                'device_id' => 77,
                'day' => '2020-04-01',
            ),
            232 => 
            array (
                'id' => 233,
                'hits' => 106,
                'device_id' => 77,
                'day' => '2020-05-01',
            ),
            233 => 
            array (
                'id' => 234,
                'hits' => 75,
                'device_id' => 77,
                'day' => '2020-06-01',
            ),
            234 => 
            array (
                'id' => 235,
                'hits' => 118,
                'device_id' => 77,
                'day' => '2020-07-01',
            ),
            235 => 
            array (
                'id' => 236,
                'hits' => 55,
                'device_id' => 77,
                'day' => '2020-08-01',
            ),
            236 => 
            array (
                'id' => 237,
                'hits' => 46,
                'device_id' => 77,
                'day' => '2020-09-01',
            ),
            237 => 
            array (
                'id' => 238,
                'hits' => 115,
                'device_id' => 78,
                'day' => '2020-04-01',
            ),
            238 => 
            array (
                'id' => 239,
                'hits' => 114,
                'device_id' => 78,
                'day' => '2020-05-01',
            ),
            239 => 
            array (
                'id' => 240,
                'hits' => 99,
                'device_id' => 78,
                'day' => '2020-06-01',
            ),
            240 => 
            array (
                'id' => 241,
                'hits' => 59,
                'device_id' => 78,
                'day' => '2020-07-01',
            ),
            241 => 
            array (
                'id' => 242,
                'hits' => 138,
                'device_id' => 78,
                'day' => '2020-08-01',
            ),
            242 => 
            array (
                'id' => 243,
                'hits' => 57,
                'device_id' => 78,
                'day' => '2020-09-01',
            ),
            243 => 
            array (
                'id' => 244,
                'hits' => 5,
                'device_id' => 79,
                'day' => '2020-04-01',
            ),
            244 => 
            array (
                'id' => 245,
                'hits' => 14,
                'device_id' => 79,
                'day' => '2020-05-01',
            ),
            245 => 
            array (
                'id' => 246,
                'hits' => 9,
                'device_id' => 79,
                'day' => '2020-06-01',
            ),
            246 => 
            array (
                'id' => 247,
                'hits' => 19,
                'device_id' => 79,
                'day' => '2020-07-01',
            ),
            247 => 
            array (
                'id' => 248,
                'hits' => 11,
                'device_id' => 79,
                'day' => '2020-08-01',
            ),
            248 => 
            array (
                'id' => 249,
                'hits' => 7,
                'device_id' => 79,
                'day' => '2020-09-01',
            ),
            249 => 
            array (
                'id' => 250,
                'hits' => 116,
                'device_id' => 80,
                'day' => '2020-04-01',
            ),
            250 => 
            array (
                'id' => 251,
                'hits' => 147,
                'device_id' => 80,
                'day' => '2020-05-01',
            ),
            251 => 
            array (
                'id' => 252,
                'hits' => 69,
                'device_id' => 80,
                'day' => '2020-06-01',
            ),
            252 => 
            array (
                'id' => 253,
                'hits' => 119,
                'device_id' => 80,
                'day' => '2020-07-01',
            ),
            253 => 
            array (
                'id' => 254,
                'hits' => 59,
                'device_id' => 80,
                'day' => '2020-08-01',
            ),
            254 => 
            array (
                'id' => 255,
                'hits' => 46,
                'device_id' => 80,
                'day' => '2020-09-01',
            ),
            255 => 
            array (
                'id' => 256,
                'hits' => 166,
                'device_id' => 81,
                'day' => '2020-04-01',
            ),
            256 => 
            array (
                'id' => 257,
                'hits' => 148,
                'device_id' => 81,
                'day' => '2020-05-01',
            ),
            257 => 
            array (
                'id' => 258,
                'hits' => 69,
                'device_id' => 81,
                'day' => '2020-06-01',
            ),
            258 => 
            array (
                'id' => 259,
                'hits' => 62,
                'device_id' => 81,
                'day' => '2020-07-01',
            ),
            259 => 
            array (
                'id' => 260,
                'hits' => 58,
                'device_id' => 81,
                'day' => '2020-08-01',
            ),
            260 => 
            array (
                'id' => 261,
                'hits' => 37,
                'device_id' => 81,
                'day' => '2020-09-01',
            ),
            261 => 
            array (
                'id' => 262,
                'hits' => 41,
                'device_id' => 82,
                'day' => '2020-04-01',
            ),
            262 => 
            array (
                'id' => 263,
                'hits' => 137,
                'device_id' => 82,
                'day' => '2020-05-01',
            ),
            263 => 
            array (
                'id' => 264,
                'hits' => 120,
                'device_id' => 82,
                'day' => '2020-06-01',
            ),
            264 => 
            array (
                'id' => 265,
                'hits' => 68,
                'device_id' => 82,
                'day' => '2020-07-01',
            ),
            265 => 
            array (
                'id' => 266,
                'hits' => 17,
                'device_id' => 82,
                'day' => '2020-08-01',
            ),
            266 => 
            array (
                'id' => 267,
                'hits' => 27,
                'device_id' => 82,
                'day' => '2020-09-01',
            ),
            267 => 
            array (
                'id' => 268,
                'hits' => 73,
                'device_id' => 83,
                'day' => '2020-04-01',
            ),
            268 => 
            array (
                'id' => 269,
                'hits' => 46,
                'device_id' => 83,
                'day' => '2020-05-01',
            ),
            269 => 
            array (
                'id' => 270,
                'hits' => 38,
                'device_id' => 83,
                'day' => '2020-06-01',
            ),
            270 => 
            array (
                'id' => 271,
                'hits' => 58,
                'device_id' => 83,
                'day' => '2020-07-01',
            ),
            271 => 
            array (
                'id' => 272,
                'hits' => 28,
                'device_id' => 83,
                'day' => '2020-08-01',
            ),
            272 => 
            array (
                'id' => 273,
                'hits' => 19,
                'device_id' => 83,
                'day' => '2020-09-01',
            ),
            273 => 
            array (
                'id' => 274,
                'hits' => 20,
                'device_id' => 84,
                'day' => '2020-04-01',
            ),
            274 => 
            array (
                'id' => 275,
                'hits' => 31,
                'device_id' => 84,
                'day' => '2020-05-01',
            ),
            275 => 
            array (
                'id' => 276,
                'hits' => 26,
                'device_id' => 84,
                'day' => '2020-06-01',
            ),
            276 => 
            array (
                'id' => 277,
                'hits' => 31,
                'device_id' => 84,
                'day' => '2020-07-01',
            ),
            277 => 
            array (
                'id' => 278,
                'hits' => 20,
                'device_id' => 84,
                'day' => '2020-08-01',
            ),
            278 => 
            array (
                'id' => 279,
                'hits' => 17,
                'device_id' => 84,
                'day' => '2020-09-01',
            ),
            279 => 
            array (
                'id' => 280,
                'hits' => 7,
                'device_id' => 85,
                'day' => '2020-04-01',
            ),
            280 => 
            array (
                'id' => 281,
                'hits' => 12,
                'device_id' => 85,
                'day' => '2020-05-01',
            ),
            281 => 
            array (
                'id' => 282,
                'hits' => 10,
                'device_id' => 85,
                'day' => '2020-06-01',
            ),
            282 => 
            array (
                'id' => 283,
                'hits' => 16,
                'device_id' => 85,
                'day' => '2020-07-01',
            ),
            283 => 
            array (
                'id' => 284,
                'hits' => 11,
                'device_id' => 85,
                'day' => '2020-08-01',
            ),
            284 => 
            array (
                'id' => 285,
                'hits' => 9,
                'device_id' => 85,
                'day' => '2020-09-01',
            ),
            285 => 
            array (
                'id' => 286,
                'hits' => 27,
                'device_id' => 86,
                'day' => '2020-04-01',
            ),
            286 => 
            array (
                'id' => 287,
                'hits' => 37,
                'device_id' => 86,
                'day' => '2020-05-01',
            ),
            287 => 
            array (
                'id' => 288,
                'hits' => 44,
                'device_id' => 86,
                'day' => '2020-06-01',
            ),
            288 => 
            array (
                'id' => 289,
                'hits' => 29,
                'device_id' => 86,
                'day' => '2020-07-01',
            ),
            289 => 
            array (
                'id' => 290,
                'hits' => 16,
                'device_id' => 86,
                'day' => '2020-08-01',
            ),
            290 => 
            array (
                'id' => 291,
                'hits' => 21,
                'device_id' => 86,
                'day' => '2020-09-01',
            ),
            291 => 
            array (
                'id' => 292,
                'hits' => 16,
                'device_id' => 87,
                'day' => '2020-04-01',
            ),
            292 => 
            array (
                'id' => 293,
                'hits' => 31,
                'device_id' => 87,
                'day' => '2020-05-01',
            ),
            293 => 
            array (
                'id' => 294,
                'hits' => 12,
                'device_id' => 87,
                'day' => '2020-06-01',
            ),
            294 => 
            array (
                'id' => 295,
                'hits' => 12,
                'device_id' => 87,
                'day' => '2020-07-01',
            ),
            295 => 
            array (
                'id' => 296,
                'hits' => 7,
                'device_id' => 87,
                'day' => '2020-08-01',
            ),
            296 => 
            array (
                'id' => 297,
                'hits' => 6,
                'device_id' => 87,
                'day' => '2020-09-01',
            ),
            297 => 
            array (
                'id' => 298,
                'hits' => 61,
                'device_id' => 88,
                'day' => '2020-04-01',
            ),
            298 => 
            array (
                'id' => 299,
                'hits' => 54,
                'device_id' => 88,
                'day' => '2020-05-01',
            ),
            299 => 
            array (
                'id' => 300,
                'hits' => 28,
                'device_id' => 88,
                'day' => '2020-06-01',
            ),
            300 => 
            array (
                'id' => 301,
                'hits' => 52,
                'device_id' => 88,
                'day' => '2020-07-01',
            ),
            301 => 
            array (
                'id' => 302,
                'hits' => 30,
                'device_id' => 88,
                'day' => '2020-08-01',
            ),
            302 => 
            array (
                'id' => 303,
                'hits' => 27,
                'device_id' => 88,
                'day' => '2020-09-01',
            ),
            303 => 
            array (
                'id' => 304,
                'hits' => 25,
                'device_id' => 89,
                'day' => '2020-04-01',
            ),
            304 => 
            array (
                'id' => 305,
                'hits' => 30,
                'device_id' => 89,
                'day' => '2020-05-01',
            ),
            305 => 
            array (
                'id' => 306,
                'hits' => 22,
                'device_id' => 89,
                'day' => '2020-06-01',
            ),
            306 => 
            array (
                'id' => 307,
                'hits' => 22,
                'device_id' => 89,
                'day' => '2020-07-01',
            ),
            307 => 
            array (
                'id' => 308,
                'hits' => 13,
                'device_id' => 89,
                'day' => '2020-08-01',
            ),
            308 => 
            array (
                'id' => 309,
                'hits' => 15,
                'device_id' => 89,
                'day' => '2020-09-01',
            ),
            309 => 
            array (
                'id' => 310,
                'hits' => 7,
                'device_id' => 90,
                'day' => '2020-04-01',
            ),
            310 => 
            array (
                'id' => 311,
                'hits' => 9,
                'device_id' => 90,
                'day' => '2020-05-01',
            ),
            311 => 
            array (
                'id' => 312,
                'hits' => 5,
                'device_id' => 90,
                'day' => '2020-06-01',
            ),
            312 => 
            array (
                'id' => 313,
                'hits' => 8,
                'device_id' => 90,
                'day' => '2020-07-01',
            ),
            313 => 
            array (
                'id' => 314,
                'hits' => 3,
                'device_id' => 90,
                'day' => '2020-08-01',
            ),
            314 => 
            array (
                'id' => 315,
                'hits' => 2,
                'device_id' => 90,
                'day' => '2020-09-01',
            ),
            315 => 
            array (
                'id' => 316,
                'hits' => 24,
                'device_id' => 91,
                'day' => '2020-04-01',
            ),
            316 => 
            array (
                'id' => 317,
                'hits' => 22,
                'device_id' => 91,
                'day' => '2020-05-01',
            ),
            317 => 
            array (
                'id' => 318,
                'hits' => 10,
                'device_id' => 91,
                'day' => '2020-06-01',
            ),
            318 => 
            array (
                'id' => 319,
                'hits' => 12,
                'device_id' => 91,
                'day' => '2020-07-01',
            ),
            319 => 
            array (
                'id' => 320,
                'hits' => 7,
                'device_id' => 91,
                'day' => '2020-08-01',
            ),
            320 => 
            array (
                'id' => 321,
                'hits' => 2,
                'device_id' => 91,
                'day' => '2020-09-01',
            ),
            321 => 
            array (
                'id' => 322,
                'hits' => 8,
                'device_id' => 92,
                'day' => '2020-04-01',
            ),
            322 => 
            array (
                'id' => 323,
                'hits' => 13,
                'device_id' => 92,
                'day' => '2020-05-01',
            ),
            323 => 
            array (
                'id' => 324,
                'hits' => 7,
                'device_id' => 92,
                'day' => '2020-06-01',
            ),
            324 => 
            array (
                'id' => 325,
                'hits' => 15,
                'device_id' => 92,
                'day' => '2020-07-01',
            ),
            325 => 
            array (
                'id' => 326,
                'hits' => 8,
                'device_id' => 92,
                'day' => '2020-08-01',
            ),
            326 => 
            array (
                'id' => 327,
                'hits' => 5,
                'device_id' => 92,
                'day' => '2020-09-01',
            ),
            327 => 
            array (
                'id' => 328,
                'hits' => 28,
                'device_id' => 93,
                'day' => '2020-04-01',
            ),
            328 => 
            array (
                'id' => 329,
                'hits' => 40,
                'device_id' => 93,
                'day' => '2020-05-01',
            ),
            329 => 
            array (
                'id' => 330,
                'hits' => 22,
                'device_id' => 93,
                'day' => '2020-06-01',
            ),
            330 => 
            array (
                'id' => 331,
                'hits' => 22,
                'device_id' => 93,
                'day' => '2020-07-01',
            ),
            331 => 
            array (
                'id' => 332,
                'hits' => 17,
                'device_id' => 93,
                'day' => '2020-08-01',
            ),
            332 => 
            array (
                'id' => 333,
                'hits' => 21,
                'device_id' => 93,
                'day' => '2020-09-01',
            ),
            333 => 
            array (
                'id' => 334,
                'hits' => 24,
                'device_id' => 94,
                'day' => '2020-04-01',
            ),
            334 => 
            array (
                'id' => 335,
                'hits' => 24,
                'device_id' => 94,
                'day' => '2020-05-01',
            ),
            335 => 
            array (
                'id' => 336,
                'hits' => 25,
                'device_id' => 94,
                'day' => '2020-06-01',
            ),
            336 => 
            array (
                'id' => 337,
                'hits' => 18,
                'device_id' => 94,
                'day' => '2020-07-01',
            ),
            337 => 
            array (
                'id' => 338,
                'hits' => 10,
                'device_id' => 94,
                'day' => '2020-08-01',
            ),
            338 => 
            array (
                'id' => 339,
                'hits' => 20,
                'device_id' => 94,
                'day' => '2020-09-01',
            ),
            339 => 
            array (
                'id' => 340,
                'hits' => 8,
                'device_id' => 95,
                'day' => '2020-04-01',
            ),
            340 => 
            array (
                'id' => 341,
                'hits' => 13,
                'device_id' => 95,
                'day' => '2020-05-01',
            ),
            341 => 
            array (
                'id' => 342,
                'hits' => 12,
                'device_id' => 95,
                'day' => '2020-06-01',
            ),
            342 => 
            array (
                'id' => 343,
                'hits' => 20,
                'device_id' => 95,
                'day' => '2020-07-01',
            ),
            343 => 
            array (
                'id' => 344,
                'hits' => 12,
                'device_id' => 95,
                'day' => '2020-08-01',
            ),
            344 => 
            array (
                'id' => 345,
                'hits' => 3,
                'device_id' => 95,
                'day' => '2020-09-01',
            ),
            345 => 
            array (
                'id' => 346,
                'hits' => 14,
                'device_id' => 96,
                'day' => '2020-04-01',
            ),
            346 => 
            array (
                'id' => 347,
                'hits' => 15,
                'device_id' => 96,
                'day' => '2020-05-01',
            ),
            347 => 
            array (
                'id' => 348,
                'hits' => 11,
                'device_id' => 96,
                'day' => '2020-06-01',
            ),
            348 => 
            array (
                'id' => 349,
                'hits' => 7,
                'device_id' => 96,
                'day' => '2020-07-01',
            ),
            349 => 
            array (
                'id' => 350,
                'hits' => 1,
                'device_id' => 96,
                'day' => '2020-08-01',
            ),
            350 => 
            array (
                'id' => 351,
                'hits' => 4,
                'device_id' => 96,
                'day' => '2020-09-01',
            ),
            351 => 
            array (
                'id' => 352,
                'hits' => 3,
                'device_id' => 97,
                'day' => '2020-04-01',
            ),
            352 => 
            array (
                'id' => 353,
                'hits' => 7,
                'device_id' => 97,
                'day' => '2020-05-01',
            ),
            353 => 
            array (
                'id' => 354,
                'hits' => 4,
                'device_id' => 97,
                'day' => '2020-06-01',
            ),
            354 => 
            array (
                'id' => 355,
                'hits' => 4,
                'device_id' => 97,
                'day' => '2020-07-01',
            ),
            355 => 
            array (
                'id' => 356,
                'hits' => 2,
                'device_id' => 97,
                'day' => '2020-08-01',
            ),
            356 => 
            array (
                'id' => 357,
                'hits' => 1,
                'device_id' => 98,
                'day' => '2020-04-01',
            ),
            357 => 
            array (
                'id' => 358,
                'hits' => 14,
                'device_id' => 98,
                'day' => '2020-05-01',
            ),
            358 => 
            array (
                'id' => 359,
                'hits' => 7,
                'device_id' => 98,
                'day' => '2020-06-01',
            ),
            359 => 
            array (
                'id' => 360,
                'hits' => 10,
                'device_id' => 98,
                'day' => '2020-07-01',
            ),
            360 => 
            array (
                'id' => 361,
                'hits' => 4,
                'device_id' => 98,
                'day' => '2020-08-01',
            ),
            361 => 
            array (
                'id' => 362,
                'hits' => 2,
                'device_id' => 98,
                'day' => '2020-09-01',
            ),
            362 => 
            array (
                'id' => 363,
                'hits' => 1,
                'device_id' => 99,
                'day' => '2020-04-01',
            ),
            363 => 
            array (
                'id' => 364,
                'hits' => 14,
                'device_id' => 99,
                'day' => '2020-05-01',
            ),
            364 => 
            array (
                'id' => 365,
                'hits' => 4,
                'device_id' => 99,
                'day' => '2020-06-01',
            ),
            365 => 
            array (
                'id' => 366,
                'hits' => 7,
                'device_id' => 99,
                'day' => '2020-07-01',
            ),
            366 => 
            array (
                'id' => 367,
                'hits' => 3,
                'device_id' => 99,
                'day' => '2020-09-01',
            ),
            367 => 
            array (
                'id' => 368,
                'hits' => 5,
                'device_id' => 100,
                'day' => '2020-04-01',
            ),
            368 => 
            array (
                'id' => 369,
                'hits' => 9,
                'device_id' => 100,
                'day' => '2020-05-01',
            ),
            369 => 
            array (
                'id' => 370,
                'hits' => 6,
                'device_id' => 100,
                'day' => '2020-06-01',
            ),
            370 => 
            array (
                'id' => 371,
                'hits' => 6,
                'device_id' => 100,
                'day' => '2020-07-01',
            ),
            371 => 
            array (
                'id' => 372,
                'hits' => 5,
                'device_id' => 100,
                'day' => '2020-08-01',
            ),
            372 => 
            array (
                'id' => 373,
                'hits' => 3,
                'device_id' => 100,
                'day' => '2020-09-01',
            ),
            373 => 
            array (
                'id' => 374,
                'hits' => 4,
                'device_id' => 101,
                'day' => '2020-04-01',
            ),
            374 => 
            array (
                'id' => 375,
                'hits' => 16,
                'device_id' => 101,
                'day' => '2020-05-01',
            ),
            375 => 
            array (
                'id' => 376,
                'hits' => 7,
                'device_id' => 101,
                'day' => '2020-06-01',
            ),
            376 => 
            array (
                'id' => 377,
                'hits' => 21,
                'device_id' => 101,
                'day' => '2020-07-01',
            ),
            377 => 
            array (
                'id' => 378,
                'hits' => 1,
                'device_id' => 101,
                'day' => '2020-08-01',
            ),
            378 => 
            array (
                'id' => 379,
                'hits' => 5,
                'device_id' => 101,
                'day' => '2020-09-01',
            ),
            379 => 
            array (
                'id' => 380,
                'hits' => 3,
                'device_id' => 102,
                'day' => '2020-04-01',
            ),
            380 => 
            array (
                'id' => 381,
                'hits' => 12,
                'device_id' => 102,
                'day' => '2020-05-01',
            ),
            381 => 
            array (
                'id' => 382,
                'hits' => 12,
                'device_id' => 102,
                'day' => '2020-06-01',
            ),
            382 => 
            array (
                'id' => 383,
                'hits' => 7,
                'device_id' => 102,
                'day' => '2020-07-01',
            ),
            383 => 
            array (
                'id' => 384,
                'hits' => 2,
                'device_id' => 102,
                'day' => '2020-08-01',
            ),
            384 => 
            array (
                'id' => 385,
                'hits' => 2,
                'device_id' => 102,
                'day' => '2020-09-01',
            ),
            385 => 
            array (
                'id' => 386,
                'hits' => 2,
                'device_id' => 103,
                'day' => '2020-04-01',
            ),
            386 => 
            array (
                'id' => 387,
                'hits' => 6,
                'device_id' => 103,
                'day' => '2020-05-01',
            ),
            387 => 
            array (
                'id' => 388,
                'hits' => 2,
                'device_id' => 103,
                'day' => '2020-06-01',
            ),
            388 => 
            array (
                'id' => 389,
                'hits' => 2,
                'device_id' => 103,
                'day' => '2020-07-01',
            ),
            389 => 
            array (
                'id' => 390,
                'hits' => 2,
                'device_id' => 103,
                'day' => '2020-08-01',
            ),
            390 => 
            array (
                'id' => 391,
                'hits' => 1,
                'device_id' => 103,
                'day' => '2020-09-01',
            ),
            391 => 
            array (
                'id' => 392,
                'hits' => 25,
                'device_id' => 104,
                'day' => '2020-04-01',
            ),
            392 => 
            array (
                'id' => 393,
                'hits' => 59,
                'device_id' => 104,
                'day' => '2020-05-01',
            ),
            393 => 
            array (
                'id' => 394,
                'hits' => 47,
                'device_id' => 104,
                'day' => '2020-06-01',
            ),
            394 => 
            array (
                'id' => 395,
                'hits' => 38,
                'device_id' => 104,
                'day' => '2020-07-01',
            ),
            395 => 
            array (
                'id' => 396,
                'hits' => 33,
                'device_id' => 104,
                'day' => '2020-08-01',
            ),
            396 => 
            array (
                'id' => 397,
                'hits' => 16,
                'device_id' => 104,
                'day' => '2020-09-01',
            ),
            397 => 
            array (
                'id' => 398,
                'hits' => 6,
                'device_id' => 105,
                'day' => '2020-04-01',
            ),
            398 => 
            array (
                'id' => 399,
                'hits' => 11,
                'device_id' => 105,
                'day' => '2020-05-01',
            ),
            399 => 
            array (
                'id' => 400,
                'hits' => 8,
                'device_id' => 105,
                'day' => '2020-06-01',
            ),
            400 => 
            array (
                'id' => 401,
                'hits' => 7,
                'device_id' => 105,
                'day' => '2020-07-01',
            ),
            401 => 
            array (
                'id' => 402,
                'hits' => 5,
                'device_id' => 105,
                'day' => '2020-08-01',
            ),
            402 => 
            array (
                'id' => 403,
                'hits' => 8,
                'device_id' => 105,
                'day' => '2020-09-01',
            ),
            403 => 
            array (
                'id' => 404,
                'hits' => 152,
                'device_id' => 106,
                'day' => '2020-04-01',
            ),
            404 => 
            array (
                'id' => 405,
                'hits' => 189,
                'device_id' => 106,
                'day' => '2020-05-01',
            ),
            405 => 
            array (
                'id' => 406,
                'hits' => 164,
                'device_id' => 106,
                'day' => '2020-06-01',
            ),
            406 => 
            array (
                'id' => 407,
                'hits' => 129,
                'device_id' => 106,
                'day' => '2020-07-01',
            ),
            407 => 
            array (
                'id' => 408,
                'hits' => 71,
                'device_id' => 106,
                'day' => '2020-08-01',
            ),
            408 => 
            array (
                'id' => 409,
                'hits' => 74,
                'device_id' => 106,
                'day' => '2020-09-01',
            ),
            409 => 
            array (
                'id' => 410,
                'hits' => 866,
                'device_id' => 107,
                'day' => '2020-04-01',
            ),
            410 => 
            array (
                'id' => 411,
                'hits' => 313,
                'device_id' => 107,
                'day' => '2020-05-01',
            ),
            411 => 
            array (
                'id' => 412,
                'hits' => 231,
                'device_id' => 107,
                'day' => '2020-06-01',
            ),
            412 => 
            array (
                'id' => 413,
                'hits' => 117,
                'device_id' => 107,
                'day' => '2020-07-01',
            ),
            413 => 
            array (
                'id' => 414,
                'hits' => 78,
                'device_id' => 107,
                'day' => '2020-08-01',
            ),
            414 => 
            array (
                'id' => 415,
                'hits' => 141,
                'device_id' => 107,
                'day' => '2020-09-01',
            ),
            415 => 
            array (
                'id' => 416,
                'hits' => 28,
                'device_id' => 112,
                'day' => '2020-04-01',
            ),
            416 => 
            array (
                'id' => 417,
                'hits' => 11,
                'device_id' => 112,
                'day' => '2020-05-01',
            ),
            417 => 
            array (
                'id' => 418,
                'hits' => 14,
                'device_id' => 112,
                'day' => '2020-06-01',
            ),
            418 => 
            array (
                'id' => 419,
                'hits' => 9,
                'device_id' => 112,
                'day' => '2020-07-01',
            ),
            419 => 
            array (
                'id' => 420,
                'hits' => 15,
                'device_id' => 112,
                'day' => '2020-08-01',
            ),
            420 => 
            array (
                'id' => 421,
                'hits' => 2,
                'device_id' => 112,
                'day' => '2020-09-01',
            ),
            421 => 
            array (
                'id' => 422,
                'hits' => 31,
                'device_id' => 113,
                'day' => '2020-04-01',
            ),
            422 => 
            array (
                'id' => 423,
                'hits' => 23,
                'device_id' => 113,
                'day' => '2020-05-01',
            ),
            423 => 
            array (
                'id' => 424,
                'hits' => 17,
                'device_id' => 113,
                'day' => '2020-06-01',
            ),
            424 => 
            array (
                'id' => 425,
                'hits' => 35,
                'device_id' => 113,
                'day' => '2020-07-01',
            ),
            425 => 
            array (
                'id' => 426,
                'hits' => 32,
                'device_id' => 113,
                'day' => '2020-08-01',
            ),
            426 => 
            array (
                'id' => 427,
                'hits' => 6,
                'device_id' => 113,
                'day' => '2020-09-01',
            ),
            427 => 
            array (
                'id' => 428,
                'hits' => 14,
                'device_id' => 114,
                'day' => '2020-04-01',
            ),
            428 => 
            array (
                'id' => 429,
                'hits' => 18,
                'device_id' => 114,
                'day' => '2020-05-01',
            ),
            429 => 
            array (
                'id' => 430,
                'hits' => 10,
                'device_id' => 114,
                'day' => '2020-06-01',
            ),
            430 => 
            array (
                'id' => 431,
                'hits' => 10,
                'device_id' => 114,
                'day' => '2020-07-01',
            ),
            431 => 
            array (
                'id' => 432,
                'hits' => 11,
                'device_id' => 114,
                'day' => '2020-08-01',
            ),
            432 => 
            array (
                'id' => 433,
                'hits' => 4,
                'device_id' => 114,
                'day' => '2020-09-01',
            ),
            433 => 
            array (
                'id' => 434,
                'hits' => 92,
                'device_id' => 115,
                'day' => '2020-04-01',
            ),
            434 => 
            array (
                'id' => 435,
                'hits' => 98,
                'device_id' => 115,
                'day' => '2020-05-01',
            ),
            435 => 
            array (
                'id' => 436,
                'hits' => 93,
                'device_id' => 115,
                'day' => '2020-06-01',
            ),
            436 => 
            array (
                'id' => 437,
                'hits' => 56,
                'device_id' => 115,
                'day' => '2020-07-01',
            ),
            437 => 
            array (
                'id' => 438,
                'hits' => 75,
                'device_id' => 115,
                'day' => '2020-08-01',
            ),
            438 => 
            array (
                'id' => 439,
                'hits' => 38,
                'device_id' => 115,
                'day' => '2020-09-01',
            ),
            439 => 
            array (
                'id' => 440,
                'hits' => 5,
                'device_id' => 116,
                'day' => '2020-04-01',
            ),
            440 => 
            array (
                'id' => 441,
                'hits' => 21,
                'device_id' => 116,
                'day' => '2020-05-01',
            ),
            441 => 
            array (
                'id' => 442,
                'hits' => 8,
                'device_id' => 116,
                'day' => '2020-06-01',
            ),
            442 => 
            array (
                'id' => 443,
                'hits' => 8,
                'device_id' => 116,
                'day' => '2020-07-01',
            ),
            443 => 
            array (
                'id' => 444,
                'hits' => 6,
                'device_id' => 116,
                'day' => '2020-08-01',
            ),
            444 => 
            array (
                'id' => 445,
                'hits' => 8,
                'device_id' => 116,
                'day' => '2020-09-01',
            ),
            445 => 
            array (
                'id' => 446,
                'hits' => 30,
                'device_id' => 117,
                'day' => '2020-04-01',
            ),
            446 => 
            array (
                'id' => 447,
                'hits' => 24,
                'device_id' => 117,
                'day' => '2020-05-01',
            ),
            447 => 
            array (
                'id' => 448,
                'hits' => 13,
                'device_id' => 117,
                'day' => '2020-06-01',
            ),
            448 => 
            array (
                'id' => 449,
                'hits' => 12,
                'device_id' => 117,
                'day' => '2020-07-01',
            ),
            449 => 
            array (
                'id' => 450,
                'hits' => 11,
                'device_id' => 117,
                'day' => '2020-08-01',
            ),
            450 => 
            array (
                'id' => 451,
                'hits' => 10,
                'device_id' => 117,
                'day' => '2020-09-01',
            ),
            451 => 
            array (
                'id' => 452,
                'hits' => 23,
                'device_id' => 118,
                'day' => '2020-04-01',
            ),
            452 => 
            array (
                'id' => 453,
                'hits' => 49,
                'device_id' => 118,
                'day' => '2020-05-01',
            ),
            453 => 
            array (
                'id' => 454,
                'hits' => 27,
                'device_id' => 118,
                'day' => '2020-06-01',
            ),
            454 => 
            array (
                'id' => 455,
                'hits' => 45,
                'device_id' => 118,
                'day' => '2020-07-01',
            ),
            455 => 
            array (
                'id' => 456,
                'hits' => 44,
                'device_id' => 118,
                'day' => '2020-08-01',
            ),
            456 => 
            array (
                'id' => 457,
                'hits' => 37,
                'device_id' => 118,
                'day' => '2020-09-01',
            ),
            457 => 
            array (
                'id' => 458,
                'hits' => 81,
                'device_id' => 119,
                'day' => '2020-04-01',
            ),
            458 => 
            array (
                'id' => 459,
                'hits' => 51,
                'device_id' => 119,
                'day' => '2020-05-01',
            ),
            459 => 
            array (
                'id' => 460,
                'hits' => 23,
                'device_id' => 119,
                'day' => '2020-06-01',
            ),
            460 => 
            array (
                'id' => 461,
                'hits' => 23,
                'device_id' => 119,
                'day' => '2020-07-01',
            ),
            461 => 
            array (
                'id' => 462,
                'hits' => 28,
                'device_id' => 119,
                'day' => '2020-08-01',
            ),
            462 => 
            array (
                'id' => 463,
                'hits' => 14,
                'device_id' => 119,
                'day' => '2020-09-01',
            ),
            463 => 
            array (
                'id' => 464,
                'hits' => 82,
                'device_id' => 120,
                'day' => '2020-04-01',
            ),
            464 => 
            array (
                'id' => 465,
                'hits' => 76,
                'device_id' => 120,
                'day' => '2020-05-01',
            ),
            465 => 
            array (
                'id' => 466,
                'hits' => 57,
                'device_id' => 120,
                'day' => '2020-06-01',
            ),
            466 => 
            array (
                'id' => 467,
                'hits' => 54,
                'device_id' => 120,
                'day' => '2020-07-01',
            ),
            467 => 
            array (
                'id' => 468,
                'hits' => 60,
                'device_id' => 120,
                'day' => '2020-08-01',
            ),
            468 => 
            array (
                'id' => 469,
                'hits' => 54,
                'device_id' => 120,
                'day' => '2020-09-01',
            ),
            469 => 
            array (
                'id' => 470,
                'hits' => 69,
                'device_id' => 121,
                'day' => '2020-04-01',
            ),
            470 => 
            array (
                'id' => 471,
                'hits' => 30,
                'device_id' => 121,
                'day' => '2020-05-01',
            ),
            471 => 
            array (
                'id' => 472,
                'hits' => 32,
                'device_id' => 121,
                'day' => '2020-06-01',
            ),
            472 => 
            array (
                'id' => 473,
                'hits' => 35,
                'device_id' => 121,
                'day' => '2020-07-01',
            ),
            473 => 
            array (
                'id' => 474,
                'hits' => 48,
                'device_id' => 121,
                'day' => '2020-08-01',
            ),
            474 => 
            array (
                'id' => 475,
                'hits' => 46,
                'device_id' => 121,
                'day' => '2020-09-01',
            ),
            475 => 
            array (
                'id' => 476,
                'hits' => 35,
                'device_id' => 122,
                'day' => '2020-04-01',
            ),
            476 => 
            array (
                'id' => 477,
                'hits' => 42,
                'device_id' => 122,
                'day' => '2020-05-01',
            ),
            477 => 
            array (
                'id' => 478,
                'hits' => 43,
                'device_id' => 122,
                'day' => '2020-06-01',
            ),
            478 => 
            array (
                'id' => 479,
                'hits' => 29,
                'device_id' => 122,
                'day' => '2020-07-01',
            ),
            479 => 
            array (
                'id' => 480,
                'hits' => 34,
                'device_id' => 122,
                'day' => '2020-08-01',
            ),
            480 => 
            array (
                'id' => 481,
                'hits' => 32,
                'device_id' => 122,
                'day' => '2020-09-01',
            ),
            481 => 
            array (
                'id' => 482,
                'hits' => 75,
                'device_id' => 123,
                'day' => '2020-04-01',
            ),
            482 => 
            array (
                'id' => 483,
                'hits' => 83,
                'device_id' => 123,
                'day' => '2020-05-01',
            ),
            483 => 
            array (
                'id' => 484,
                'hits' => 92,
                'device_id' => 123,
                'day' => '2020-06-01',
            ),
            484 => 
            array (
                'id' => 485,
                'hits' => 63,
                'device_id' => 123,
                'day' => '2020-07-01',
            ),
            485 => 
            array (
                'id' => 486,
                'hits' => 46,
                'device_id' => 123,
                'day' => '2020-08-01',
            ),
            486 => 
            array (
                'id' => 487,
                'hits' => 41,
                'device_id' => 123,
                'day' => '2020-09-01',
            ),
            487 => 
            array (
                'id' => 488,
                'hits' => 65,
                'device_id' => 124,
                'day' => '2020-04-01',
            ),
            488 => 
            array (
                'id' => 489,
                'hits' => 41,
                'device_id' => 124,
                'day' => '2020-05-01',
            ),
            489 => 
            array (
                'id' => 490,
                'hits' => 47,
                'device_id' => 124,
                'day' => '2020-06-01',
            ),
            490 => 
            array (
                'id' => 491,
                'hits' => 61,
                'device_id' => 124,
                'day' => '2020-07-01',
            ),
            491 => 
            array (
                'id' => 492,
                'hits' => 43,
                'device_id' => 124,
                'day' => '2020-08-01',
            ),
            492 => 
            array (
                'id' => 493,
                'hits' => 45,
                'device_id' => 124,
                'day' => '2020-09-01',
            ),
            493 => 
            array (
                'id' => 494,
                'hits' => 210,
                'device_id' => 125,
                'day' => '2020-04-01',
            ),
            494 => 
            array (
                'id' => 495,
                'hits' => 190,
                'device_id' => 125,
                'day' => '2020-05-01',
            ),
            495 => 
            array (
                'id' => 496,
                'hits' => 1150,
                'device_id' => 125,
                'day' => '2020-06-01',
            ),
            496 => 
            array (
                'id' => 497,
                'hits' => 252,
                'device_id' => 125,
                'day' => '2020-07-01',
            ),
            497 => 
            array (
                'id' => 498,
                'hits' => 227,
                'device_id' => 125,
                'day' => '2020-08-01',
            ),
            498 => 
            array (
                'id' => 499,
                'hits' => 168,
                'device_id' => 125,
                'day' => '2020-09-01',
            ),
            499 => 
            array (
                'id' => 500,
                'hits' => 158,
                'device_id' => 126,
                'day' => '2020-04-01',
            ),
        ));
        \DB::table('device_statistics')->insert(array (
            0 => 
            array (
                'id' => 501,
                'hits' => 115,
                'device_id' => 126,
                'day' => '2020-05-01',
            ),
            1 => 
            array (
                'id' => 502,
                'hits' => 113,
                'device_id' => 126,
                'day' => '2020-06-01',
            ),
            2 => 
            array (
                'id' => 503,
                'hits' => 203,
                'device_id' => 126,
                'day' => '2020-07-01',
            ),
            3 => 
            array (
                'id' => 504,
                'hits' => 137,
                'device_id' => 126,
                'day' => '2020-08-01',
            ),
            4 => 
            array (
                'id' => 505,
                'hits' => 104,
                'device_id' => 126,
                'day' => '2020-09-01',
            ),
            5 => 
            array (
                'id' => 506,
                'hits' => 162,
                'device_id' => 127,
                'day' => '2020-04-01',
            ),
            6 => 
            array (
                'id' => 507,
                'hits' => 108,
                'device_id' => 127,
                'day' => '2020-05-01',
            ),
            7 => 
            array (
                'id' => 508,
                'hits' => 79,
                'device_id' => 127,
                'day' => '2020-06-01',
            ),
            8 => 
            array (
                'id' => 509,
                'hits' => 90,
                'device_id' => 127,
                'day' => '2020-07-01',
            ),
            9 => 
            array (
                'id' => 510,
                'hits' => 60,
                'device_id' => 127,
                'day' => '2020-08-01',
            ),
            10 => 
            array (
                'id' => 511,
                'hits' => 50,
                'device_id' => 127,
                'day' => '2020-09-01',
            ),
            11 => 
            array (
                'id' => 512,
                'hits' => 710,
                'device_id' => 128,
                'day' => '2020-04-01',
            ),
            12 => 
            array (
                'id' => 513,
                'hits' => 281,
                'device_id' => 128,
                'day' => '2020-05-01',
            ),
            13 => 
            array (
                'id' => 514,
                'hits' => 140,
                'device_id' => 128,
                'day' => '2020-06-01',
            ),
            14 => 
            array (
                'id' => 515,
                'hits' => 135,
                'device_id' => 128,
                'day' => '2020-07-01',
            ),
            15 => 
            array (
                'id' => 516,
                'hits' => 148,
                'device_id' => 128,
                'day' => '2020-08-01',
            ),
            16 => 
            array (
                'id' => 517,
                'hits' => 119,
                'device_id' => 128,
                'day' => '2020-09-01',
            ),
            17 => 
            array (
                'id' => 518,
                'hits' => 3,
                'device_id' => 129,
                'day' => '2020-04-01',
            ),
            18 => 
            array (
                'id' => 519,
                'hits' => 3,
                'device_id' => 130,
                'day' => '2020-04-01',
            ),
            19 => 
            array (
                'id' => 520,
                'hits' => 1,
                'device_id' => 130,
                'day' => '2020-07-01',
            ),
            20 => 
            array (
                'id' => 521,
                'hits' => 1686,
                'device_id' => 131,
                'day' => '2020-04-01',
            ),
            21 => 
            array (
                'id' => 522,
                'hits' => 643,
                'device_id' => 131,
                'day' => '2020-05-01',
            ),
            22 => 
            array (
                'id' => 523,
                'hits' => 346,
                'device_id' => 131,
                'day' => '2020-06-01',
            ),
            23 => 
            array (
                'id' => 524,
                'hits' => 352,
                'device_id' => 131,
                'day' => '2020-07-01',
            ),
            24 => 
            array (
                'id' => 525,
                'hits' => 201,
                'device_id' => 131,
                'day' => '2020-08-01',
            ),
            25 => 
            array (
                'id' => 526,
                'hits' => 191,
                'device_id' => 131,
                'day' => '2020-09-01',
            ),
            26 => 
            array (
                'id' => 527,
                'hits' => 331,
                'device_id' => 132,
                'day' => '2020-04-01',
            ),
            27 => 
            array (
                'id' => 528,
                'hits' => 221,
                'device_id' => 132,
                'day' => '2020-05-01',
            ),
            28 => 
            array (
                'id' => 529,
                'hits' => 161,
                'device_id' => 132,
                'day' => '2020-06-01',
            ),
            29 => 
            array (
                'id' => 530,
                'hits' => 110,
                'device_id' => 132,
                'day' => '2020-07-01',
            ),
            30 => 
            array (
                'id' => 531,
                'hits' => 104,
                'device_id' => 132,
                'day' => '2020-08-01',
            ),
            31 => 
            array (
                'id' => 532,
                'hits' => 79,
                'device_id' => 132,
                'day' => '2020-09-01',
            ),
            32 => 
            array (
                'id' => 533,
                'hits' => 1,
                'device_id' => 133,
                'day' => '2020-04-01',
            ),
            33 => 
            array (
                'id' => 534,
                'hits' => 2,
                'device_id' => 134,
                'day' => '2020-04-01',
            ),
            34 => 
            array (
                'id' => 535,
                'hits' => 2,
                'device_id' => 135,
                'day' => '2020-04-01',
            ),
            35 => 
            array (
                'id' => 536,
                'hits' => 181,
                'device_id' => 136,
                'day' => '2020-04-01',
            ),
            36 => 
            array (
                'id' => 537,
                'hits' => 177,
                'device_id' => 136,
                'day' => '2020-05-01',
            ),
            37 => 
            array (
                'id' => 538,
                'hits' => 110,
                'device_id' => 136,
                'day' => '2020-06-01',
            ),
            38 => 
            array (
                'id' => 539,
                'hits' => 118,
                'device_id' => 136,
                'day' => '2020-07-01',
            ),
            39 => 
            array (
                'id' => 540,
                'hits' => 75,
                'device_id' => 136,
                'day' => '2020-08-01',
            ),
            40 => 
            array (
                'id' => 541,
                'hits' => 68,
                'device_id' => 136,
                'day' => '2020-09-01',
            ),
            41 => 
            array (
                'id' => 542,
                'hits' => 10,
                'device_id' => 137,
                'day' => '2020-04-01',
            ),
            42 => 
            array (
                'id' => 543,
                'hits' => 28,
                'device_id' => 138,
                'day' => '2020-04-01',
            ),
            43 => 
            array (
                'id' => 544,
                'hits' => 1114,
                'device_id' => 138,
                'day' => '2020-05-01',
            ),
            44 => 
            array (
                'id' => 545,
                'hits' => 191,
                'device_id' => 138,
                'day' => '2020-06-01',
            ),
            45 => 
            array (
                'id' => 546,
                'hits' => 109,
                'device_id' => 138,
                'day' => '2020-07-01',
            ),
            46 => 
            array (
                'id' => 547,
                'hits' => 73,
                'device_id' => 138,
                'day' => '2020-08-01',
            ),
            47 => 
            array (
                'id' => 548,
                'hits' => 49,
                'device_id' => 138,
                'day' => '2020-09-01',
            ),
            48 => 
            array (
                'id' => 549,
                'hits' => 737,
                'device_id' => 139,
                'day' => '2020-05-01',
            ),
            49 => 
            array (
                'id' => 550,
                'hits' => 86,
                'device_id' => 139,
                'day' => '2020-06-01',
            ),
            50 => 
            array (
                'id' => 551,
                'hits' => 62,
                'device_id' => 139,
                'day' => '2020-07-01',
            ),
            51 => 
            array (
                'id' => 552,
                'hits' => 64,
                'device_id' => 139,
                'day' => '2020-08-01',
            ),
            52 => 
            array (
                'id' => 553,
                'hits' => 71,
                'device_id' => 139,
                'day' => '2020-09-01',
            ),
            53 => 
            array (
                'id' => 554,
                'hits' => 130,
                'device_id' => 140,
                'day' => '2020-05-01',
            ),
            54 => 
            array (
                'id' => 555,
                'hits' => 66,
                'device_id' => 140,
                'day' => '2020-06-01',
            ),
            55 => 
            array (
                'id' => 556,
                'hits' => 51,
                'device_id' => 140,
                'day' => '2020-07-01',
            ),
            56 => 
            array (
                'id' => 557,
                'hits' => 41,
                'device_id' => 140,
                'day' => '2020-08-01',
            ),
            57 => 
            array (
                'id' => 558,
                'hits' => 27,
                'device_id' => 140,
                'day' => '2020-09-01',
            ),
            58 => 
            array (
                'id' => 559,
                'hits' => 2044,
                'device_id' => 141,
                'day' => '2020-05-01',
            ),
            59 => 
            array (
                'id' => 560,
                'hits' => 611,
                'device_id' => 141,
                'day' => '2020-06-01',
            ),
            60 => 
            array (
                'id' => 561,
                'hits' => 352,
                'device_id' => 141,
                'day' => '2020-07-01',
            ),
            61 => 
            array (
                'id' => 562,
                'hits' => 229,
                'device_id' => 141,
                'day' => '2020-08-01',
            ),
            62 => 
            array (
                'id' => 563,
                'hits' => 212,
                'device_id' => 141,
                'day' => '2020-09-01',
            ),
            63 => 
            array (
                'id' => 564,
                'hits' => 170,
                'device_id' => 142,
                'day' => '2020-05-01',
            ),
            64 => 
            array (
                'id' => 565,
                'hits' => 76,
                'device_id' => 142,
                'day' => '2020-06-01',
            ),
            65 => 
            array (
                'id' => 566,
                'hits' => 67,
                'device_id' => 142,
                'day' => '2020-07-01',
            ),
            66 => 
            array (
                'id' => 567,
                'hits' => 59,
                'device_id' => 142,
                'day' => '2020-08-01',
            ),
            67 => 
            array (
                'id' => 568,
                'hits' => 44,
                'device_id' => 142,
                'day' => '2020-09-01',
            ),
            68 => 
            array (
                'id' => 569,
                'hits' => 362,
                'device_id' => 143,
                'day' => '2020-05-01',
            ),
            69 => 
            array (
                'id' => 570,
                'hits' => 87,
                'device_id' => 143,
                'day' => '2020-06-01',
            ),
            70 => 
            array (
                'id' => 571,
                'hits' => 65,
                'device_id' => 143,
                'day' => '2020-07-01',
            ),
            71 => 
            array (
                'id' => 572,
                'hits' => 87,
                'device_id' => 143,
                'day' => '2020-08-01',
            ),
            72 => 
            array (
                'id' => 573,
                'hits' => 55,
                'device_id' => 143,
                'day' => '2020-09-01',
            ),
            73 => 
            array (
                'id' => 574,
                'hits' => 8,
                'device_id' => 144,
                'day' => '2020-06-01',
            ),
            74 => 
            array (
                'id' => 575,
                'hits' => 16,
                'device_id' => 145,
                'day' => '2020-06-01',
            ),
            75 => 
            array (
                'id' => 576,
                'hits' => 346,
                'device_id' => 146,
                'day' => '2020-06-01',
            ),
            76 => 
            array (
                'id' => 577,
                'hits' => 311,
                'device_id' => 146,
                'day' => '2020-07-01',
            ),
            77 => 
            array (
                'id' => 578,
                'hits' => 157,
                'device_id' => 146,
                'day' => '2020-08-01',
            ),
            78 => 
            array (
                'id' => 579,
                'hits' => 847,
                'device_id' => 146,
                'day' => '2020-09-01',
            ),
            79 => 
            array (
                'id' => 580,
                'hits' => 247,
                'device_id' => 147,
                'day' => '2020-06-01',
            ),
            80 => 
            array (
                'id' => 581,
                'hits' => 588,
                'device_id' => 147,
                'day' => '2020-07-01',
            ),
            81 => 
            array (
                'id' => 582,
                'hits' => 243,
                'device_id' => 147,
                'day' => '2020-08-01',
            ),
            82 => 
            array (
                'id' => 583,
                'hits' => 207,
                'device_id' => 147,
                'day' => '2020-09-01',
            ),
            83 => 
            array (
                'id' => 584,
                'hits' => 13,
                'device_id' => 148,
                'day' => '2020-07-01',
            ),
            84 => 
            array (
                'id' => 585,
                'hits' => 374,
                'device_id' => 148,
                'day' => '2020-08-01',
            ),
            85 => 
            array (
                'id' => 586,
                'hits' => 22,
                'device_id' => 148,
                'day' => '2020-09-01',
            ),
            86 => 
            array (
                'id' => 587,
                'hits' => 649,
                'device_id' => 149,
                'day' => '2020-08-01',
            ),
            87 => 
            array (
                'id' => 588,
                'hits' => 265,
                'device_id' => 149,
                'day' => '2020-09-01',
            ),
            88 => 
            array (
                'id' => 589,
                'hits' => 1072,
                'device_id' => 150,
                'day' => '2020-08-01',
            ),
            89 => 
            array (
                'id' => 590,
                'hits' => 543,
                'device_id' => 150,
                'day' => '2020-09-01',
            ),
            90 => 
            array (
                'id' => 591,
                'hits' => 11,
                'device_id' => 151,
                'day' => '2020-09-01',
            ),
            91 => 
            array (
                'id' => 592,
                'hits' => 5,
                'device_id' => 152,
                'day' => '2020-09-01',
            ),
            92 => 
            array (
                'id' => 593,
                'hits' => 1,
                'device_id' => 153,
                'day' => '2020-09-01',
            ),
            93 => 
            array (
                'id' => 594,
                'hits' => 3,
                'device_id' => 154,
                'day' => '2020-09-01',
            ),
            94 => 
            array (
                'id' => 595,
                'hits' => 4,
                'device_id' => 155,
                'day' => '2020-09-01',
            ),
            95 => 
            array (
                'id' => 596,
                'hits' => 2,
                'device_id' => 156,
                'day' => '2020-09-01',
            ),
            96 => 
            array (
                'id' => 597,
                'hits' => 25,
                'device_id' => 157,
                'day' => '2020-09-01',
            ),
            97 => 
            array (
                'id' => 598,
                'hits' => 2,
                'device_id' => 158,
                'day' => '2020-09-01',
            ),
            98 => 
            array (
                'id' => 599,
                'hits' => 52,
                'device_id' => 1,
                'day' => '2020-10-01',
            ),
            99 => 
            array (
                'id' => 600,
                'hits' => 31,
                'device_id' => 1,
                'day' => '2020-11-01',
            ),
            100 => 
            array (
                'id' => 601,
                'hits' => 86,
                'device_id' => 2,
                'day' => '2020-10-01',
            ),
            101 => 
            array (
                'id' => 602,
                'hits' => 38,
                'device_id' => 2,
                'day' => '2020-11-01',
            ),
            102 => 
            array (
                'id' => 603,
                'hits' => 60,
                'device_id' => 3,
                'day' => '2020-10-01',
            ),
            103 => 
            array (
                'id' => 604,
                'hits' => 68,
                'device_id' => 3,
                'day' => '2020-11-01',
            ),
            104 => 
            array (
                'id' => 605,
                'hits' => 49,
                'device_id' => 4,
                'day' => '2020-10-01',
            ),
            105 => 
            array (
                'id' => 606,
                'hits' => 97,
                'device_id' => 4,
                'day' => '2020-11-01',
            ),
            106 => 
            array (
                'id' => 607,
                'hits' => 94,
                'device_id' => 6,
                'day' => '2020-10-01',
            ),
            107 => 
            array (
                'id' => 608,
                'hits' => 85,
                'device_id' => 6,
                'day' => '2020-11-01',
            ),
            108 => 
            array (
                'id' => 609,
                'hits' => 27,
                'device_id' => 7,
                'day' => '2020-10-01',
            ),
            109 => 
            array (
                'id' => 610,
                'hits' => 43,
                'device_id' => 7,
                'day' => '2020-11-01',
            ),
            110 => 
            array (
                'id' => 611,
                'hits' => 219,
                'device_id' => 8,
                'day' => '2020-10-01',
            ),
            111 => 
            array (
                'id' => 612,
                'hits' => 169,
                'device_id' => 8,
                'day' => '2020-11-01',
            ),
            112 => 
            array (
                'id' => 613,
                'hits' => 31,
                'device_id' => 11,
                'day' => '2020-10-01',
            ),
            113 => 
            array (
                'id' => 614,
                'hits' => 42,
                'device_id' => 11,
                'day' => '2020-11-01',
            ),
            114 => 
            array (
                'id' => 615,
                'hits' => 27,
                'device_id' => 13,
                'day' => '2020-10-01',
            ),
            115 => 
            array (
                'id' => 616,
                'hits' => 28,
                'device_id' => 13,
                'day' => '2020-11-01',
            ),
            116 => 
            array (
                'id' => 617,
                'hits' => 59,
                'device_id' => 14,
                'day' => '2020-10-01',
            ),
            117 => 
            array (
                'id' => 618,
                'hits' => 70,
                'device_id' => 14,
                'day' => '2020-11-01',
            ),
            118 => 
            array (
                'id' => 619,
                'hits' => 15,
                'device_id' => 15,
                'day' => '2020-10-01',
            ),
            119 => 
            array (
                'id' => 620,
                'hits' => 25,
                'device_id' => 15,
                'day' => '2020-11-01',
            ),
            120 => 
            array (
                'id' => 621,
                'hits' => 59,
                'device_id' => 16,
                'day' => '2020-10-01',
            ),
            121 => 
            array (
                'id' => 622,
                'hits' => 71,
                'device_id' => 16,
                'day' => '2020-11-01',
            ),
            122 => 
            array (
                'id' => 623,
                'hits' => 115,
                'device_id' => 20,
                'day' => '2020-10-01',
            ),
            123 => 
            array (
                'id' => 624,
                'hits' => 143,
                'device_id' => 20,
                'day' => '2020-11-01',
            ),
            124 => 
            array (
                'id' => 625,
                'hits' => 20,
                'device_id' => 23,
                'day' => '2020-10-01',
            ),
            125 => 
            array (
                'id' => 626,
                'hits' => 37,
                'device_id' => 23,
                'day' => '2020-11-01',
            ),
            126 => 
            array (
                'id' => 627,
                'hits' => 18,
                'device_id' => 24,
                'day' => '2020-10-01',
            ),
            127 => 
            array (
                'id' => 628,
                'hits' => 66,
                'device_id' => 24,
                'day' => '2020-11-01',
            ),
            128 => 
            array (
                'id' => 629,
                'hits' => 39,
                'device_id' => 25,
                'day' => '2020-10-01',
            ),
            129 => 
            array (
                'id' => 630,
                'hits' => 46,
                'device_id' => 25,
                'day' => '2020-11-01',
            ),
            130 => 
            array (
                'id' => 631,
                'hits' => 21,
                'device_id' => 27,
                'day' => '2020-10-01',
            ),
            131 => 
            array (
                'id' => 632,
                'hits' => 24,
                'device_id' => 27,
                'day' => '2020-11-01',
            ),
            132 => 
            array (
                'id' => 633,
                'hits' => 21,
                'device_id' => 28,
                'day' => '2020-10-01',
            ),
            133 => 
            array (
                'id' => 634,
                'hits' => 27,
                'device_id' => 28,
                'day' => '2020-11-01',
            ),
            134 => 
            array (
                'id' => 635,
                'hits' => 17,
                'device_id' => 29,
                'day' => '2020-10-01',
            ),
            135 => 
            array (
                'id' => 636,
                'hits' => 22,
                'device_id' => 29,
                'day' => '2020-11-01',
            ),
            136 => 
            array (
                'id' => 637,
                'hits' => 70,
                'device_id' => 30,
                'day' => '2020-10-01',
            ),
            137 => 
            array (
                'id' => 638,
                'hits' => 82,
                'device_id' => 30,
                'day' => '2020-11-01',
            ),
            138 => 
            array (
                'id' => 639,
                'hits' => 37,
                'device_id' => 32,
                'day' => '2020-10-01',
            ),
            139 => 
            array (
                'id' => 640,
                'hits' => 44,
                'device_id' => 32,
                'day' => '2020-11-01',
            ),
            140 => 
            array (
                'id' => 641,
                'hits' => 69,
                'device_id' => 34,
                'day' => '2020-10-01',
            ),
            141 => 
            array (
                'id' => 642,
                'hits' => 91,
                'device_id' => 34,
                'day' => '2020-11-01',
            ),
            142 => 
            array (
                'id' => 643,
                'hits' => 67,
                'device_id' => 35,
                'day' => '2020-10-01',
            ),
            143 => 
            array (
                'id' => 644,
                'hits' => 27,
                'device_id' => 35,
                'day' => '2020-11-01',
            ),
            144 => 
            array (
                'id' => 645,
                'hits' => 22,
                'device_id' => 37,
                'day' => '2020-10-01',
            ),
            145 => 
            array (
                'id' => 646,
                'hits' => 38,
                'device_id' => 37,
                'day' => '2020-11-01',
            ),
            146 => 
            array (
                'id' => 647,
                'hits' => 17,
                'device_id' => 42,
                'day' => '2020-10-01',
            ),
            147 => 
            array (
                'id' => 648,
                'hits' => 25,
                'device_id' => 42,
                'day' => '2020-11-01',
            ),
            148 => 
            array (
                'id' => 649,
                'hits' => 9,
                'device_id' => 44,
                'day' => '2020-10-01',
            ),
            149 => 
            array (
                'id' => 650,
                'hits' => 20,
                'device_id' => 44,
                'day' => '2020-11-01',
            ),
            150 => 
            array (
                'id' => 651,
                'hits' => 20,
                'device_id' => 47,
                'day' => '2020-10-01',
            ),
            151 => 
            array (
                'id' => 652,
                'hits' => 9,
                'device_id' => 47,
                'day' => '2020-11-01',
            ),
            152 => 
            array (
                'id' => 653,
                'hits' => 36,
                'device_id' => 53,
                'day' => '2020-10-01',
            ),
            153 => 
            array (
                'id' => 654,
                'hits' => 21,
                'device_id' => 53,
                'day' => '2020-11-01',
            ),
            154 => 
            array (
                'id' => 655,
                'hits' => 55,
                'device_id' => 54,
                'day' => '2020-10-01',
            ),
            155 => 
            array (
                'id' => 656,
                'hits' => 52,
                'device_id' => 54,
                'day' => '2020-11-01',
            ),
            156 => 
            array (
                'id' => 657,
                'hits' => 19,
                'device_id' => 57,
                'day' => '2020-10-01',
            ),
            157 => 
            array (
                'id' => 658,
                'hits' => 24,
                'device_id' => 57,
                'day' => '2020-11-01',
            ),
            158 => 
            array (
                'id' => 659,
                'hits' => 11,
                'device_id' => 58,
                'day' => '2020-10-01',
            ),
            159 => 
            array (
                'id' => 660,
                'hits' => 17,
                'device_id' => 58,
                'day' => '2020-11-01',
            ),
            160 => 
            array (
                'id' => 661,
                'hits' => 37,
                'device_id' => 60,
                'day' => '2020-10-01',
            ),
            161 => 
            array (
                'id' => 662,
                'hits' => 29,
                'device_id' => 60,
                'day' => '2020-11-01',
            ),
            162 => 
            array (
                'id' => 663,
                'hits' => 15,
                'device_id' => 62,
                'day' => '2020-10-01',
            ),
            163 => 
            array (
                'id' => 664,
                'hits' => 26,
                'device_id' => 62,
                'day' => '2020-11-01',
            ),
            164 => 
            array (
                'id' => 665,
                'hits' => 21,
                'device_id' => 68,
                'day' => '2020-10-01',
            ),
            165 => 
            array (
                'id' => 666,
                'hits' => 31,
                'device_id' => 68,
                'day' => '2020-11-01',
            ),
            166 => 
            array (
                'id' => 667,
                'hits' => 17,
                'device_id' => 73,
                'day' => '2020-10-01',
            ),
            167 => 
            array (
                'id' => 668,
                'hits' => 21,
                'device_id' => 73,
                'day' => '2020-11-01',
            ),
            168 => 
            array (
                'id' => 669,
                'hits' => 7,
                'device_id' => 74,
                'day' => '2020-10-01',
            ),
            169 => 
            array (
                'id' => 670,
                'hits' => 8,
                'device_id' => 74,
                'day' => '2020-11-01',
            ),
            170 => 
            array (
                'id' => 671,
                'hits' => 13,
                'device_id' => 75,
                'day' => '2020-10-01',
            ),
            171 => 
            array (
                'id' => 672,
                'hits' => 16,
                'device_id' => 75,
                'day' => '2020-11-01',
            ),
            172 => 
            array (
                'id' => 673,
                'hits' => 16,
                'device_id' => 76,
                'day' => '2020-10-01',
            ),
            173 => 
            array (
                'id' => 674,
                'hits' => 22,
                'device_id' => 76,
                'day' => '2020-11-01',
            ),
            174 => 
            array (
                'id' => 675,
                'hits' => 69,
                'device_id' => 77,
                'day' => '2020-10-01',
            ),
            175 => 
            array (
                'id' => 676,
                'hits' => 64,
                'device_id' => 77,
                'day' => '2020-11-01',
            ),
            176 => 
            array (
                'id' => 677,
                'hits' => 66,
                'device_id' => 78,
                'day' => '2020-10-01',
            ),
            177 => 
            array (
                'id' => 678,
                'hits' => 74,
                'device_id' => 78,
                'day' => '2020-11-01',
            ),
            178 => 
            array (
                'id' => 679,
                'hits' => 4,
                'device_id' => 79,
                'day' => '2020-10-01',
            ),
            179 => 
            array (
                'id' => 680,
                'hits' => 16,
                'device_id' => 79,
                'day' => '2020-11-01',
            ),
            180 => 
            array (
                'id' => 681,
                'hits' => 55,
                'device_id' => 80,
                'day' => '2020-10-01',
            ),
            181 => 
            array (
                'id' => 682,
                'hits' => 55,
                'device_id' => 80,
                'day' => '2020-11-01',
            ),
            182 => 
            array (
                'id' => 683,
                'hits' => 60,
                'device_id' => 81,
                'day' => '2020-10-01',
            ),
            183 => 
            array (
                'id' => 684,
                'hits' => 58,
                'device_id' => 81,
                'day' => '2020-11-01',
            ),
            184 => 
            array (
                'id' => 685,
                'hits' => 49,
                'device_id' => 82,
                'day' => '2020-10-01',
            ),
            185 => 
            array (
                'id' => 686,
                'hits' => 44,
                'device_id' => 82,
                'day' => '2020-11-01',
            ),
            186 => 
            array (
                'id' => 687,
                'hits' => 38,
                'device_id' => 83,
                'day' => '2020-10-01',
            ),
            187 => 
            array (
                'id' => 688,
                'hits' => 30,
                'device_id' => 83,
                'day' => '2020-11-01',
            ),
            188 => 
            array (
                'id' => 689,
                'hits' => 19,
                'device_id' => 84,
                'day' => '2020-10-01',
            ),
            189 => 
            array (
                'id' => 690,
                'hits' => 15,
                'device_id' => 84,
                'day' => '2020-11-01',
            ),
            190 => 
            array (
                'id' => 691,
                'hits' => 6,
                'device_id' => 85,
                'day' => '2020-10-01',
            ),
            191 => 
            array (
                'id' => 692,
                'hits' => 18,
                'device_id' => 85,
                'day' => '2020-11-01',
            ),
            192 => 
            array (
                'id' => 693,
                'hits' => 14,
                'device_id' => 86,
                'day' => '2020-10-01',
            ),
            193 => 
            array (
                'id' => 694,
                'hits' => 9,
                'device_id' => 86,
                'day' => '2020-11-01',
            ),
            194 => 
            array (
                'id' => 695,
                'hits' => 13,
                'device_id' => 87,
                'day' => '2020-10-01',
            ),
            195 => 
            array (
                'id' => 696,
                'hits' => 10,
                'device_id' => 87,
                'day' => '2020-11-01',
            ),
            196 => 
            array (
                'id' => 697,
                'hits' => 19,
                'device_id' => 88,
                'day' => '2020-10-01',
            ),
            197 => 
            array (
                'id' => 698,
                'hits' => 38,
                'device_id' => 88,
                'day' => '2020-11-01',
            ),
            198 => 
            array (
                'id' => 699,
                'hits' => 18,
                'device_id' => 89,
                'day' => '2020-10-01',
            ),
            199 => 
            array (
                'id' => 700,
                'hits' => 23,
                'device_id' => 89,
                'day' => '2020-11-01',
            ),
            200 => 
            array (
                'id' => 701,
                'hits' => 2,
                'device_id' => 90,
                'day' => '2020-10-01',
            ),
            201 => 
            array (
                'id' => 702,
                'hits' => 7,
                'device_id' => 90,
                'day' => '2020-11-01',
            ),
            202 => 
            array (
                'id' => 703,
                'hits' => 12,
                'device_id' => 91,
                'day' => '2020-10-01',
            ),
            203 => 
            array (
                'id' => 704,
                'hits' => 6,
                'device_id' => 91,
                'day' => '2020-11-01',
            ),
            204 => 
            array (
                'id' => 705,
                'hits' => 7,
                'device_id' => 92,
                'day' => '2020-10-01',
            ),
            205 => 
            array (
                'id' => 706,
                'hits' => 10,
                'device_id' => 92,
                'day' => '2020-11-01',
            ),
            206 => 
            array (
                'id' => 707,
                'hits' => 27,
                'device_id' => 93,
                'day' => '2020-10-01',
            ),
            207 => 
            array (
                'id' => 708,
                'hits' => 25,
                'device_id' => 93,
                'day' => '2020-11-01',
            ),
            208 => 
            array (
                'id' => 709,
                'hits' => 12,
                'device_id' => 94,
                'day' => '2020-10-01',
            ),
            209 => 
            array (
                'id' => 710,
                'hits' => 11,
                'device_id' => 94,
                'day' => '2020-11-01',
            ),
            210 => 
            array (
                'id' => 711,
                'hits' => 4,
                'device_id' => 95,
                'day' => '2020-10-01',
            ),
            211 => 
            array (
                'id' => 712,
                'hits' => 12,
                'device_id' => 95,
                'day' => '2020-11-01',
            ),
            212 => 
            array (
                'id' => 713,
                'hits' => 19,
                'device_id' => 96,
                'day' => '2020-10-01',
            ),
            213 => 
            array (
                'id' => 714,
                'hits' => 14,
                'device_id' => 96,
                'day' => '2020-11-01',
            ),
            214 => 
            array (
                'id' => 715,
                'hits' => 6,
                'device_id' => 97,
                'day' => '2020-10-01',
            ),
            215 => 
            array (
                'id' => 716,
                'hits' => 3,
                'device_id' => 97,
                'day' => '2020-11-01',
            ),
            216 => 
            array (
                'id' => 717,
                'hits' => 7,
                'device_id' => 98,
                'day' => '2020-10-01',
            ),
            217 => 
            array (
                'id' => 718,
                'hits' => 19,
                'device_id' => 98,
                'day' => '2020-11-01',
            ),
            218 => 
            array (
                'id' => 719,
                'hits' => 5,
                'device_id' => 99,
                'day' => '2020-10-01',
            ),
            219 => 
            array (
                'id' => 720,
                'hits' => 17,
                'device_id' => 99,
                'day' => '2020-11-01',
            ),
            220 => 
            array (
                'id' => 721,
                'hits' => 5,
                'device_id' => 100,
                'day' => '2020-10-01',
            ),
            221 => 
            array (
                'id' => 722,
                'hits' => 12,
                'device_id' => 100,
                'day' => '2020-11-01',
            ),
            222 => 
            array (
                'id' => 723,
                'hits' => 2,
                'device_id' => 101,
                'day' => '2020-10-01',
            ),
            223 => 
            array (
                'id' => 724,
                'hits' => 14,
                'device_id' => 101,
                'day' => '2020-11-01',
            ),
            224 => 
            array (
                'id' => 725,
                'hits' => 2,
                'device_id' => 102,
                'day' => '2020-10-01',
            ),
            225 => 
            array (
                'id' => 726,
                'hits' => 8,
                'device_id' => 102,
                'day' => '2020-11-01',
            ),
            226 => 
            array (
                'id' => 727,
                'hits' => 3,
                'device_id' => 103,
                'day' => '2020-10-01',
            ),
            227 => 
            array (
                'id' => 728,
                'hits' => 5,
                'device_id' => 103,
                'day' => '2020-11-01',
            ),
            228 => 
            array (
                'id' => 729,
                'hits' => 29,
                'device_id' => 104,
                'day' => '2020-10-01',
            ),
            229 => 
            array (
                'id' => 730,
                'hits' => 62,
                'device_id' => 104,
                'day' => '2020-11-01',
            ),
            230 => 
            array (
                'id' => 731,
                'hits' => 7,
                'device_id' => 105,
                'day' => '2020-10-01',
            ),
            231 => 
            array (
                'id' => 732,
                'hits' => 13,
                'device_id' => 105,
                'day' => '2020-11-01',
            ),
            232 => 
            array (
                'id' => 733,
                'hits' => 72,
                'device_id' => 106,
                'day' => '2020-10-01',
            ),
            233 => 
            array (
                'id' => 734,
                'hits' => 101,
                'device_id' => 106,
                'day' => '2020-11-01',
            ),
            234 => 
            array (
                'id' => 735,
                'hits' => 155,
                'device_id' => 107,
                'day' => '2020-10-01',
            ),
            235 => 
            array (
                'id' => 736,
                'hits' => 136,
                'device_id' => 107,
                'day' => '2020-11-01',
            ),
            236 => 
            array (
                'id' => 737,
                'hits' => 4,
                'device_id' => 112,
                'day' => '2020-10-01',
            ),
            237 => 
            array (
                'id' => 738,
                'hits' => 17,
                'device_id' => 112,
                'day' => '2020-11-01',
            ),
            238 => 
            array (
                'id' => 739,
                'hits' => 13,
                'device_id' => 113,
                'day' => '2020-10-01',
            ),
            239 => 
            array (
                'id' => 740,
                'hits' => 13,
                'device_id' => 113,
                'day' => '2020-11-01',
            ),
            240 => 
            array (
                'id' => 741,
                'hits' => 9,
                'device_id' => 114,
                'day' => '2020-10-01',
            ),
            241 => 
            array (
                'id' => 742,
                'hits' => 23,
                'device_id' => 114,
                'day' => '2020-11-01',
            ),
            242 => 
            array (
                'id' => 743,
                'hits' => 43,
                'device_id' => 115,
                'day' => '2020-10-01',
            ),
            243 => 
            array (
                'id' => 744,
                'hits' => 49,
                'device_id' => 115,
                'day' => '2020-11-01',
            ),
            244 => 
            array (
                'id' => 745,
                'hits' => 12,
                'device_id' => 116,
                'day' => '2020-10-01',
            ),
            245 => 
            array (
                'id' => 746,
                'hits' => 22,
                'device_id' => 116,
                'day' => '2020-11-01',
            ),
            246 => 
            array (
                'id' => 747,
                'hits' => 6,
                'device_id' => 117,
                'day' => '2020-10-01',
            ),
            247 => 
            array (
                'id' => 748,
                'hits' => 20,
                'device_id' => 117,
                'day' => '2020-11-01',
            ),
            248 => 
            array (
                'id' => 749,
                'hits' => 41,
                'device_id' => 118,
                'day' => '2020-10-01',
            ),
            249 => 
            array (
                'id' => 750,
                'hits' => 29,
                'device_id' => 118,
                'day' => '2020-11-01',
            ),
            250 => 
            array (
                'id' => 751,
                'hits' => 17,
                'device_id' => 119,
                'day' => '2020-10-01',
            ),
            251 => 
            array (
                'id' => 752,
                'hits' => 31,
                'device_id' => 119,
                'day' => '2020-11-01',
            ),
            252 => 
            array (
                'id' => 753,
                'hits' => 27,
                'device_id' => 120,
                'day' => '2020-10-01',
            ),
            253 => 
            array (
                'id' => 754,
                'hits' => 43,
                'device_id' => 120,
                'day' => '2020-11-01',
            ),
            254 => 
            array (
                'id' => 755,
                'hits' => 36,
                'device_id' => 121,
                'day' => '2020-10-01',
            ),
            255 => 
            array (
                'id' => 756,
                'hits' => 32,
                'device_id' => 121,
                'day' => '2020-11-01',
            ),
            256 => 
            array (
                'id' => 757,
                'hits' => 42,
                'device_id' => 122,
                'day' => '2020-10-01',
            ),
            257 => 
            array (
                'id' => 758,
                'hits' => 29,
                'device_id' => 122,
                'day' => '2020-11-01',
            ),
            258 => 
            array (
                'id' => 759,
                'hits' => 33,
                'device_id' => 123,
                'day' => '2020-10-01',
            ),
            259 => 
            array (
                'id' => 760,
                'hits' => 63,
                'device_id' => 123,
                'day' => '2020-11-01',
            ),
            260 => 
            array (
                'id' => 761,
                'hits' => 25,
                'device_id' => 124,
                'day' => '2020-10-01',
            ),
            261 => 
            array (
                'id' => 762,
                'hits' => 28,
                'device_id' => 124,
                'day' => '2020-11-01',
            ),
            262 => 
            array (
                'id' => 763,
                'hits' => 187,
                'device_id' => 125,
                'day' => '2020-10-01',
            ),
            263 => 
            array (
                'id' => 764,
                'hits' => 123,
                'device_id' => 125,
                'day' => '2020-11-01',
            ),
            264 => 
            array (
                'id' => 765,
                'hits' => 116,
                'device_id' => 126,
                'day' => '2020-10-01',
            ),
            265 => 
            array (
                'id' => 766,
                'hits' => 100,
                'device_id' => 126,
                'day' => '2020-11-01',
            ),
            266 => 
            array (
                'id' => 767,
                'hits' => 55,
                'device_id' => 127,
                'day' => '2020-10-01',
            ),
            267 => 
            array (
                'id' => 768,
                'hits' => 76,
                'device_id' => 127,
                'day' => '2020-11-01',
            ),
            268 => 
            array (
                'id' => 769,
                'hits' => 133,
                'device_id' => 128,
                'day' => '2020-10-01',
            ),
            269 => 
            array (
                'id' => 770,
                'hits' => 125,
                'device_id' => 128,
                'day' => '2020-11-01',
            ),
            270 => 
            array (
                'id' => 771,
                'hits' => 291,
                'device_id' => 131,
                'day' => '2020-10-01',
            ),
            271 => 
            array (
                'id' => 772,
                'hits' => 200,
                'device_id' => 131,
                'day' => '2020-11-01',
            ),
            272 => 
            array (
                'id' => 773,
                'hits' => 108,
                'device_id' => 132,
                'day' => '2020-10-01',
            ),
            273 => 
            array (
                'id' => 774,
                'hits' => 130,
                'device_id' => 132,
                'day' => '2020-11-01',
            ),
            274 => 
            array (
                'id' => 775,
                'hits' => 2,
                'device_id' => 134,
                'day' => '2020-11-01',
            ),
            275 => 
            array (
                'id' => 776,
                'hits' => 71,
                'device_id' => 136,
                'day' => '2020-10-01',
            ),
            276 => 
            array (
                'id' => 777,
                'hits' => 81,
                'device_id' => 136,
                'day' => '2020-11-01',
            ),
            277 => 
            array (
                'id' => 778,
                'hits' => 72,
                'device_id' => 138,
                'day' => '2020-10-01',
            ),
            278 => 
            array (
                'id' => 779,
                'hits' => 54,
                'device_id' => 138,
                'day' => '2020-11-01',
            ),
            279 => 
            array (
                'id' => 780,
                'hits' => 77,
                'device_id' => 139,
                'day' => '2020-10-01',
            ),
            280 => 
            array (
                'id' => 781,
                'hits' => 46,
                'device_id' => 139,
                'day' => '2020-11-01',
            ),
            281 => 
            array (
                'id' => 782,
                'hits' => 34,
                'device_id' => 140,
                'day' => '2020-10-01',
            ),
            282 => 
            array (
                'id' => 783,
                'hits' => 32,
                'device_id' => 140,
                'day' => '2020-11-01',
            ),
            283 => 
            array (
                'id' => 784,
                'hits' => 254,
                'device_id' => 141,
                'day' => '2020-10-01',
            ),
            284 => 
            array (
                'id' => 785,
                'hits' => 230,
                'device_id' => 141,
                'day' => '2020-11-01',
            ),
            285 => 
            array (
                'id' => 786,
                'hits' => 39,
                'device_id' => 142,
                'day' => '2020-10-01',
            ),
            286 => 
            array (
                'id' => 787,
                'hits' => 44,
                'device_id' => 142,
                'day' => '2020-11-01',
            ),
            287 => 
            array (
                'id' => 788,
                'hits' => 86,
                'device_id' => 143,
                'day' => '2020-10-01',
            ),
            288 => 
            array (
                'id' => 789,
                'hits' => 70,
                'device_id' => 143,
                'day' => '2020-11-01',
            ),
            289 => 
            array (
                'id' => 790,
                'hits' => 258,
                'device_id' => 146,
                'day' => '2020-10-01',
            ),
            290 => 
            array (
                'id' => 791,
                'hits' => 188,
                'device_id' => 146,
                'day' => '2020-11-01',
            ),
            291 => 
            array (
                'id' => 792,
                'hits' => 334,
                'device_id' => 147,
                'day' => '2020-10-01',
            ),
            292 => 
            array (
                'id' => 793,
                'hits' => 220,
                'device_id' => 147,
                'day' => '2020-11-01',
            ),
            293 => 
            array (
                'id' => 794,
                'hits' => 17,
                'device_id' => 148,
                'day' => '2020-10-01',
            ),
            294 => 
            array (
                'id' => 795,
                'hits' => 24,
                'device_id' => 148,
                'day' => '2020-11-01',
            ),
            295 => 
            array (
                'id' => 796,
                'hits' => 187,
                'device_id' => 149,
                'day' => '2020-10-01',
            ),
            296 => 
            array (
                'id' => 797,
                'hits' => 147,
                'device_id' => 149,
                'day' => '2020-11-01',
            ),
            297 => 
            array (
                'id' => 798,
                'hits' => 549,
                'device_id' => 150,
                'day' => '2020-10-01',
            ),
            298 => 
            array (
                'id' => 799,
                'hits' => 229,
                'device_id' => 150,
                'day' => '2020-11-01',
            ),
            299 => 
            array (
                'id' => 800,
                'hits' => 1164,
                'device_id' => 157,
                'day' => '2020-10-01',
            ),
            300 => 
            array (
                'id' => 801,
                'hits' => 326,
                'device_id' => 157,
                'day' => '2020-11-01',
            ),
            301 => 
            array (
                'id' => 802,
                'hits' => 1,
                'device_id' => 158,
                'day' => '2020-10-01',
            ),
            302 => 
            array (
                'id' => 803,
                'hits' => 3,
                'device_id' => 158,
                'day' => '2020-11-01',
            ),
            303 => 
            array (
                'id' => 804,
                'hits' => 325,
                'device_id' => 159,
                'day' => '2020-10-01',
            ),
            304 => 
            array (
                'id' => 805,
                'hits' => 214,
                'device_id' => 159,
                'day' => '2020-11-01',
            ),
            305 => 
            array (
                'id' => 806,
                'hits' => 354,
                'device_id' => 160,
                'day' => '2020-11-01',
            ),
            306 => 
            array (
                'id' => 807,
                'hits' => 392,
                'device_id' => 161,
                'day' => '2020-11-01',
            ),
            307 => 
            array (
                'id' => 808,
                'hits' => 41,
                'device_id' => 1,
                'day' => '2020-12-01',
            ),
            308 => 
            array (
                'id' => 809,
                'hits' => 44,
                'device_id' => 1,
                'day' => '2021-01-01',
            ),
            309 => 
            array (
                'id' => 810,
                'hits' => 13,
                'device_id' => 1,
                'day' => '2021-02-01',
            ),
            310 => 
            array (
                'id' => 811,
                'hits' => 34,
                'device_id' => 1,
                'day' => '2021-03-01',
            ),
            311 => 
            array (
                'id' => 812,
                'hits' => 49,
                'device_id' => 1,
                'day' => '2021-04-01',
            ),
            312 => 
            array (
                'id' => 813,
                'hits' => 39,
                'device_id' => 1,
                'day' => '2021-05-01',
            ),
            313 => 
            array (
                'id' => 814,
                'hits' => 21,
                'device_id' => 1,
                'day' => '2021-06-01',
            ),
            314 => 
            array (
                'id' => 815,
                'hits' => 43,
                'device_id' => 2,
                'day' => '2020-12-01',
            ),
            315 => 
            array (
                'id' => 816,
                'hits' => 54,
                'device_id' => 2,
                'day' => '2021-01-01',
            ),
            316 => 
            array (
                'id' => 817,
                'hits' => 18,
                'device_id' => 2,
                'day' => '2021-02-01',
            ),
            317 => 
            array (
                'id' => 818,
                'hits' => 31,
                'device_id' => 2,
                'day' => '2021-03-01',
            ),
            318 => 
            array (
                'id' => 819,
                'hits' => 59,
                'device_id' => 2,
                'day' => '2021-04-01',
            ),
            319 => 
            array (
                'id' => 820,
                'hits' => 46,
                'device_id' => 2,
                'day' => '2021-05-01',
            ),
            320 => 
            array (
                'id' => 821,
                'hits' => 23,
                'device_id' => 2,
                'day' => '2021-06-01',
            ),
            321 => 
            array (
                'id' => 822,
                'hits' => 83,
                'device_id' => 3,
                'day' => '2020-12-01',
            ),
            322 => 
            array (
                'id' => 823,
                'hits' => 91,
                'device_id' => 3,
                'day' => '2021-01-01',
            ),
            323 => 
            array (
                'id' => 824,
                'hits' => 64,
                'device_id' => 3,
                'day' => '2021-02-01',
            ),
            324 => 
            array (
                'id' => 825,
                'hits' => 147,
                'device_id' => 3,
                'day' => '2021-03-01',
            ),
            325 => 
            array (
                'id' => 826,
                'hits' => 84,
                'device_id' => 3,
                'day' => '2021-04-01',
            ),
            326 => 
            array (
                'id' => 827,
                'hits' => 85,
                'device_id' => 3,
                'day' => '2021-05-01',
            ),
            327 => 
            array (
                'id' => 828,
                'hits' => 47,
                'device_id' => 3,
                'day' => '2021-06-01',
            ),
            328 => 
            array (
                'id' => 829,
                'hits' => 57,
                'device_id' => 4,
                'day' => '2020-12-01',
            ),
            329 => 
            array (
                'id' => 830,
                'hits' => 69,
                'device_id' => 4,
                'day' => '2021-01-01',
            ),
            330 => 
            array (
                'id' => 831,
                'hits' => 35,
                'device_id' => 4,
                'day' => '2021-02-01',
            ),
            331 => 
            array (
                'id' => 832,
                'hits' => 60,
                'device_id' => 4,
                'day' => '2021-03-01',
            ),
            332 => 
            array (
                'id' => 833,
                'hits' => 63,
                'device_id' => 4,
                'day' => '2021-04-01',
            ),
            333 => 
            array (
                'id' => 834,
                'hits' => 47,
                'device_id' => 4,
                'day' => '2021-05-01',
            ),
            334 => 
            array (
                'id' => 835,
                'hits' => 34,
                'device_id' => 4,
                'day' => '2021-06-01',
            ),
            335 => 
            array (
                'id' => 836,
                'hits' => 1,
                'device_id' => 5,
                'day' => '2020-12-01',
            ),
            336 => 
            array (
                'id' => 837,
                'hits' => 61,
                'device_id' => 6,
                'day' => '2020-12-01',
            ),
            337 => 
            array (
                'id' => 838,
                'hits' => 79,
                'device_id' => 6,
                'day' => '2021-01-01',
            ),
            338 => 
            array (
                'id' => 839,
                'hits' => 44,
                'device_id' => 6,
                'day' => '2021-02-01',
            ),
            339 => 
            array (
                'id' => 840,
                'hits' => 56,
                'device_id' => 6,
                'day' => '2021-03-01',
            ),
            340 => 
            array (
                'id' => 841,
                'hits' => 103,
                'device_id' => 6,
                'day' => '2021-04-01',
            ),
            341 => 
            array (
                'id' => 842,
                'hits' => 59,
                'device_id' => 6,
                'day' => '2021-05-01',
            ),
            342 => 
            array (
                'id' => 843,
                'hits' => 17,
                'device_id' => 6,
                'day' => '2021-06-01',
            ),
            343 => 
            array (
                'id' => 844,
                'hits' => 67,
                'device_id' => 7,
                'day' => '2020-12-01',
            ),
            344 => 
            array (
                'id' => 845,
                'hits' => 41,
                'device_id' => 7,
                'day' => '2021-01-01',
            ),
            345 => 
            array (
                'id' => 846,
                'hits' => 64,
                'device_id' => 7,
                'day' => '2021-02-01',
            ),
            346 => 
            array (
                'id' => 847,
                'hits' => 70,
                'device_id' => 7,
                'day' => '2021-03-01',
            ),
            347 => 
            array (
                'id' => 848,
                'hits' => 81,
                'device_id' => 7,
                'day' => '2021-04-01',
            ),
            348 => 
            array (
                'id' => 849,
                'hits' => 38,
                'device_id' => 7,
                'day' => '2021-05-01',
            ),
            349 => 
            array (
                'id' => 850,
                'hits' => 53,
                'device_id' => 7,
                'day' => '2021-06-01',
            ),
            350 => 
            array (
                'id' => 851,
                'hits' => 210,
                'device_id' => 8,
                'day' => '2020-12-01',
            ),
            351 => 
            array (
                'id' => 852,
                'hits' => 184,
                'device_id' => 8,
                'day' => '2021-01-01',
            ),
            352 => 
            array (
                'id' => 853,
                'hits' => 152,
                'device_id' => 8,
                'day' => '2021-02-01',
            ),
            353 => 
            array (
                'id' => 854,
                'hits' => 209,
                'device_id' => 8,
                'day' => '2021-03-01',
            ),
            354 => 
            array (
                'id' => 855,
                'hits' => 202,
                'device_id' => 8,
                'day' => '2021-04-01',
            ),
            355 => 
            array (
                'id' => 856,
                'hits' => 153,
                'device_id' => 8,
                'day' => '2021-05-01',
            ),
            356 => 
            array (
                'id' => 857,
                'hits' => 159,
                'device_id' => 8,
                'day' => '2021-06-01',
            ),
            357 => 
            array (
                'id' => 858,
                'hits' => 34,
                'device_id' => 11,
                'day' => '2020-12-01',
            ),
            358 => 
            array (
                'id' => 859,
                'hits' => 35,
                'device_id' => 11,
                'day' => '2021-01-01',
            ),
            359 => 
            array (
                'id' => 860,
                'hits' => 30,
                'device_id' => 11,
                'day' => '2021-02-01',
            ),
            360 => 
            array (
                'id' => 861,
                'hits' => 50,
                'device_id' => 11,
                'day' => '2021-03-01',
            ),
            361 => 
            array (
                'id' => 862,
                'hits' => 80,
                'device_id' => 11,
                'day' => '2021-04-01',
            ),
            362 => 
            array (
                'id' => 863,
                'hits' => 61,
                'device_id' => 11,
                'day' => '2021-05-01',
            ),
            363 => 
            array (
                'id' => 864,
                'hits' => 42,
                'device_id' => 11,
                'day' => '2021-06-01',
            ),
            364 => 
            array (
                'id' => 865,
                'hits' => 24,
                'device_id' => 13,
                'day' => '2020-12-01',
            ),
            365 => 
            array (
                'id' => 866,
                'hits' => 38,
                'device_id' => 13,
                'day' => '2021-01-01',
            ),
            366 => 
            array (
                'id' => 867,
                'hits' => 12,
                'device_id' => 13,
                'day' => '2021-02-01',
            ),
            367 => 
            array (
                'id' => 868,
                'hits' => 34,
                'device_id' => 13,
                'day' => '2021-03-01',
            ),
            368 => 
            array (
                'id' => 869,
                'hits' => 37,
                'device_id' => 13,
                'day' => '2021-04-01',
            ),
            369 => 
            array (
                'id' => 870,
                'hits' => 80,
                'device_id' => 13,
                'day' => '2021-05-01',
            ),
            370 => 
            array (
                'id' => 871,
                'hits' => 26,
                'device_id' => 13,
                'day' => '2021-06-01',
            ),
            371 => 
            array (
                'id' => 872,
                'hits' => 31,
                'device_id' => 14,
                'day' => '2020-12-01',
            ),
            372 => 
            array (
                'id' => 873,
                'hits' => 62,
                'device_id' => 14,
                'day' => '2021-01-01',
            ),
            373 => 
            array (
                'id' => 874,
                'hits' => 27,
                'device_id' => 14,
                'day' => '2021-02-01',
            ),
            374 => 
            array (
                'id' => 875,
                'hits' => 75,
                'device_id' => 14,
                'day' => '2021-03-01',
            ),
            375 => 
            array (
                'id' => 876,
                'hits' => 90,
                'device_id' => 14,
                'day' => '2021-04-01',
            ),
            376 => 
            array (
                'id' => 877,
                'hits' => 80,
                'device_id' => 14,
                'day' => '2021-05-01',
            ),
            377 => 
            array (
                'id' => 878,
                'hits' => 39,
                'device_id' => 14,
                'day' => '2021-06-01',
            ),
            378 => 
            array (
                'id' => 879,
                'hits' => 28,
                'device_id' => 15,
                'day' => '2020-12-01',
            ),
            379 => 
            array (
                'id' => 880,
                'hits' => 40,
                'device_id' => 15,
                'day' => '2021-01-01',
            ),
            380 => 
            array (
                'id' => 881,
                'hits' => 49,
                'device_id' => 15,
                'day' => '2021-02-01',
            ),
            381 => 
            array (
                'id' => 882,
                'hits' => 40,
                'device_id' => 15,
                'day' => '2021-03-01',
            ),
            382 => 
            array (
                'id' => 883,
                'hits' => 38,
                'device_id' => 15,
                'day' => '2021-04-01',
            ),
            383 => 
            array (
                'id' => 884,
                'hits' => 25,
                'device_id' => 15,
                'day' => '2021-05-01',
            ),
            384 => 
            array (
                'id' => 885,
                'hits' => 30,
                'device_id' => 15,
                'day' => '2021-06-01',
            ),
            385 => 
            array (
                'id' => 886,
                'hits' => 66,
                'device_id' => 16,
                'day' => '2020-12-01',
            ),
            386 => 
            array (
                'id' => 887,
                'hits' => 75,
                'device_id' => 16,
                'day' => '2021-01-01',
            ),
            387 => 
            array (
                'id' => 888,
                'hits' => 57,
                'device_id' => 16,
                'day' => '2021-02-01',
            ),
            388 => 
            array (
                'id' => 889,
                'hits' => 91,
                'device_id' => 16,
                'day' => '2021-03-01',
            ),
            389 => 
            array (
                'id' => 890,
                'hits' => 66,
                'device_id' => 16,
                'day' => '2021-04-01',
            ),
            390 => 
            array (
                'id' => 891,
                'hits' => 52,
                'device_id' => 16,
                'day' => '2021-05-01',
            ),
            391 => 
            array (
                'id' => 892,
                'hits' => 34,
                'device_id' => 16,
                'day' => '2021-06-01',
            ),
            392 => 
            array (
                'id' => 893,
                'hits' => 98,
                'device_id' => 20,
                'day' => '2020-12-01',
            ),
            393 => 
            array (
                'id' => 894,
                'hits' => 151,
                'device_id' => 20,
                'day' => '2021-01-01',
            ),
            394 => 
            array (
                'id' => 895,
                'hits' => 97,
                'device_id' => 20,
                'day' => '2021-02-01',
            ),
            395 => 
            array (
                'id' => 896,
                'hits' => 159,
                'device_id' => 20,
                'day' => '2021-03-01',
            ),
            396 => 
            array (
                'id' => 897,
                'hits' => 202,
                'device_id' => 20,
                'day' => '2021-04-01',
            ),
            397 => 
            array (
                'id' => 898,
                'hits' => 154,
                'device_id' => 20,
                'day' => '2021-05-01',
            ),
            398 => 
            array (
                'id' => 899,
                'hits' => 125,
                'device_id' => 20,
                'day' => '2021-06-01',
            ),
            399 => 
            array (
                'id' => 900,
                'hits' => 5,
                'device_id' => 21,
                'day' => '2021-06-01',
            ),
            400 => 
            array (
                'id' => 901,
                'hits' => 21,
                'device_id' => 23,
                'day' => '2020-12-01',
            ),
            401 => 
            array (
                'id' => 902,
                'hits' => 38,
                'device_id' => 23,
                'day' => '2021-01-01',
            ),
            402 => 
            array (
                'id' => 903,
                'hits' => 29,
                'device_id' => 23,
                'day' => '2021-02-01',
            ),
            403 => 
            array (
                'id' => 904,
                'hits' => 31,
                'device_id' => 23,
                'day' => '2021-03-01',
            ),
            404 => 
            array (
                'id' => 905,
                'hits' => 27,
                'device_id' => 23,
                'day' => '2021-04-01',
            ),
            405 => 
            array (
                'id' => 906,
                'hits' => 40,
                'device_id' => 23,
                'day' => '2021-05-01',
            ),
            406 => 
            array (
                'id' => 907,
                'hits' => 29,
                'device_id' => 23,
                'day' => '2021-06-01',
            ),
            407 => 
            array (
                'id' => 908,
                'hits' => 25,
                'device_id' => 24,
                'day' => '2020-12-01',
            ),
            408 => 
            array (
                'id' => 909,
                'hits' => 25,
                'device_id' => 24,
                'day' => '2021-01-01',
            ),
            409 => 
            array (
                'id' => 910,
                'hits' => 46,
                'device_id' => 24,
                'day' => '2021-02-01',
            ),
            410 => 
            array (
                'id' => 911,
                'hits' => 67,
                'device_id' => 24,
                'day' => '2021-03-01',
            ),
            411 => 
            array (
                'id' => 912,
                'hits' => 53,
                'device_id' => 24,
                'day' => '2021-04-01',
            ),
            412 => 
            array (
                'id' => 913,
                'hits' => 36,
                'device_id' => 24,
                'day' => '2021-05-01',
            ),
            413 => 
            array (
                'id' => 914,
                'hits' => 41,
                'device_id' => 24,
                'day' => '2021-06-01',
            ),
            414 => 
            array (
                'id' => 915,
                'hits' => 36,
                'device_id' => 25,
                'day' => '2020-12-01',
            ),
            415 => 
            array (
                'id' => 916,
                'hits' => 44,
                'device_id' => 25,
                'day' => '2021-01-01',
            ),
            416 => 
            array (
                'id' => 917,
                'hits' => 60,
                'device_id' => 25,
                'day' => '2021-02-01',
            ),
            417 => 
            array (
                'id' => 918,
                'hits' => 46,
                'device_id' => 25,
                'day' => '2021-03-01',
            ),
            418 => 
            array (
                'id' => 919,
                'hits' => 51,
                'device_id' => 25,
                'day' => '2021-04-01',
            ),
            419 => 
            array (
                'id' => 920,
                'hits' => 43,
                'device_id' => 25,
                'day' => '2021-05-01',
            ),
            420 => 
            array (
                'id' => 921,
                'hits' => 37,
                'device_id' => 25,
                'day' => '2021-06-01',
            ),
            421 => 
            array (
                'id' => 922,
                'hits' => 21,
                'device_id' => 27,
                'day' => '2020-12-01',
            ),
            422 => 
            array (
                'id' => 923,
                'hits' => 24,
                'device_id' => 27,
                'day' => '2021-01-01',
            ),
            423 => 
            array (
                'id' => 924,
                'hits' => 24,
                'device_id' => 27,
                'day' => '2021-02-01',
            ),
            424 => 
            array (
                'id' => 925,
                'hits' => 29,
                'device_id' => 27,
                'day' => '2021-03-01',
            ),
            425 => 
            array (
                'id' => 926,
                'hits' => 35,
                'device_id' => 27,
                'day' => '2021-04-01',
            ),
            426 => 
            array (
                'id' => 927,
                'hits' => 20,
                'device_id' => 27,
                'day' => '2021-05-01',
            ),
            427 => 
            array (
                'id' => 928,
                'hits' => 13,
                'device_id' => 27,
                'day' => '2021-06-01',
            ),
            428 => 
            array (
                'id' => 929,
                'hits' => 13,
                'device_id' => 28,
                'day' => '2020-12-01',
            ),
            429 => 
            array (
                'id' => 930,
                'hits' => 60,
                'device_id' => 28,
                'day' => '2021-01-01',
            ),
            430 => 
            array (
                'id' => 931,
                'hits' => 14,
                'device_id' => 28,
                'day' => '2021-02-01',
            ),
            431 => 
            array (
                'id' => 932,
                'hits' => 27,
                'device_id' => 28,
                'day' => '2021-03-01',
            ),
            432 => 
            array (
                'id' => 933,
                'hits' => 26,
                'device_id' => 28,
                'day' => '2021-04-01',
            ),
            433 => 
            array (
                'id' => 934,
                'hits' => 37,
                'device_id' => 28,
                'day' => '2021-05-01',
            ),
            434 => 
            array (
                'id' => 935,
                'hits' => 15,
                'device_id' => 28,
                'day' => '2021-06-01',
            ),
            435 => 
            array (
                'id' => 936,
                'hits' => 35,
                'device_id' => 29,
                'day' => '2020-12-01',
            ),
            436 => 
            array (
                'id' => 937,
                'hits' => 19,
                'device_id' => 29,
                'day' => '2021-01-01',
            ),
            437 => 
            array (
                'id' => 938,
                'hits' => 15,
                'device_id' => 29,
                'day' => '2021-02-01',
            ),
            438 => 
            array (
                'id' => 939,
                'hits' => 35,
                'device_id' => 29,
                'day' => '2021-03-01',
            ),
            439 => 
            array (
                'id' => 940,
                'hits' => 32,
                'device_id' => 29,
                'day' => '2021-04-01',
            ),
            440 => 
            array (
                'id' => 941,
                'hits' => 51,
                'device_id' => 29,
                'day' => '2021-05-01',
            ),
            441 => 
            array (
                'id' => 942,
                'hits' => 25,
                'device_id' => 29,
                'day' => '2021-06-01',
            ),
            442 => 
            array (
                'id' => 943,
                'hits' => 81,
                'device_id' => 30,
                'day' => '2020-12-01',
            ),
            443 => 
            array (
                'id' => 944,
                'hits' => 93,
                'device_id' => 30,
                'day' => '2021-01-01',
            ),
            444 => 
            array (
                'id' => 945,
                'hits' => 70,
                'device_id' => 30,
                'day' => '2021-02-01',
            ),
            445 => 
            array (
                'id' => 946,
                'hits' => 198,
                'device_id' => 30,
                'day' => '2021-03-01',
            ),
            446 => 
            array (
                'id' => 947,
                'hits' => 68,
                'device_id' => 30,
                'day' => '2021-04-01',
            ),
            447 => 
            array (
                'id' => 948,
                'hits' => 81,
                'device_id' => 30,
                'day' => '2021-05-01',
            ),
            448 => 
            array (
                'id' => 949,
                'hits' => 40,
                'device_id' => 30,
                'day' => '2021-06-01',
            ),
            449 => 
            array (
                'id' => 950,
                'hits' => 34,
                'device_id' => 32,
                'day' => '2020-12-01',
            ),
            450 => 
            array (
                'id' => 951,
                'hits' => 38,
                'device_id' => 32,
                'day' => '2021-01-01',
            ),
            451 => 
            array (
                'id' => 952,
                'hits' => 34,
                'device_id' => 32,
                'day' => '2021-02-01',
            ),
            452 => 
            array (
                'id' => 953,
                'hits' => 44,
                'device_id' => 32,
                'day' => '2021-03-01',
            ),
            453 => 
            array (
                'id' => 954,
                'hits' => 65,
                'device_id' => 32,
                'day' => '2021-04-01',
            ),
            454 => 
            array (
                'id' => 955,
                'hits' => 77,
                'device_id' => 32,
                'day' => '2021-05-01',
            ),
            455 => 
            array (
                'id' => 956,
                'hits' => 30,
                'device_id' => 32,
                'day' => '2021-06-01',
            ),
            456 => 
            array (
                'id' => 957,
                'hits' => 97,
                'device_id' => 34,
                'day' => '2020-12-01',
            ),
            457 => 
            array (
                'id' => 958,
                'hits' => 113,
                'device_id' => 34,
                'day' => '2021-01-01',
            ),
            458 => 
            array (
                'id' => 959,
                'hits' => 53,
                'device_id' => 34,
                'day' => '2021-02-01',
            ),
            459 => 
            array (
                'id' => 960,
                'hits' => 50,
                'device_id' => 34,
                'day' => '2021-03-01',
            ),
            460 => 
            array (
                'id' => 961,
                'hits' => 87,
                'device_id' => 34,
                'day' => '2021-04-01',
            ),
            461 => 
            array (
                'id' => 962,
                'hits' => 91,
                'device_id' => 34,
                'day' => '2021-05-01',
            ),
            462 => 
            array (
                'id' => 963,
                'hits' => 52,
                'device_id' => 34,
                'day' => '2021-06-01',
            ),
            463 => 
            array (
                'id' => 964,
                'hits' => 56,
                'device_id' => 35,
                'day' => '2020-12-01',
            ),
            464 => 
            array (
                'id' => 965,
                'hits' => 18,
                'device_id' => 35,
                'day' => '2021-01-01',
            ),
            465 => 
            array (
                'id' => 966,
                'hits' => 32,
                'device_id' => 35,
                'day' => '2021-02-01',
            ),
            466 => 
            array (
                'id' => 967,
                'hits' => 29,
                'device_id' => 35,
                'day' => '2021-03-01',
            ),
            467 => 
            array (
                'id' => 968,
                'hits' => 31,
                'device_id' => 35,
                'day' => '2021-04-01',
            ),
            468 => 
            array (
                'id' => 969,
                'hits' => 26,
                'device_id' => 35,
                'day' => '2021-05-01',
            ),
            469 => 
            array (
                'id' => 970,
                'hits' => 14,
                'device_id' => 35,
                'day' => '2021-06-01',
            ),
            470 => 
            array (
                'id' => 971,
                'hits' => 32,
                'device_id' => 37,
                'day' => '2020-12-01',
            ),
            471 => 
            array (
                'id' => 972,
                'hits' => 22,
                'device_id' => 37,
                'day' => '2021-01-01',
            ),
            472 => 
            array (
                'id' => 973,
                'hits' => 25,
                'device_id' => 37,
                'day' => '2021-02-01',
            ),
            473 => 
            array (
                'id' => 974,
                'hits' => 31,
                'device_id' => 37,
                'day' => '2021-03-01',
            ),
            474 => 
            array (
                'id' => 975,
                'hits' => 35,
                'device_id' => 37,
                'day' => '2021-04-01',
            ),
            475 => 
            array (
                'id' => 976,
                'hits' => 39,
                'device_id' => 37,
                'day' => '2021-05-01',
            ),
            476 => 
            array (
                'id' => 977,
                'hits' => 20,
                'device_id' => 37,
                'day' => '2021-06-01',
            ),
            477 => 
            array (
                'id' => 978,
                'hits' => 12,
                'device_id' => 42,
                'day' => '2020-12-01',
            ),
            478 => 
            array (
                'id' => 979,
                'hits' => 11,
                'device_id' => 42,
                'day' => '2021-01-01',
            ),
            479 => 
            array (
                'id' => 980,
                'hits' => 20,
                'device_id' => 42,
                'day' => '2021-02-01',
            ),
            480 => 
            array (
                'id' => 981,
                'hits' => 16,
                'device_id' => 42,
                'day' => '2021-03-01',
            ),
            481 => 
            array (
                'id' => 982,
                'hits' => 25,
                'device_id' => 42,
                'day' => '2021-04-01',
            ),
            482 => 
            array (
                'id' => 983,
                'hits' => 20,
                'device_id' => 42,
                'day' => '2021-05-01',
            ),
            483 => 
            array (
                'id' => 984,
                'hits' => 6,
                'device_id' => 42,
                'day' => '2021-06-01',
            ),
            484 => 
            array (
                'id' => 985,
                'hits' => 8,
                'device_id' => 44,
                'day' => '2020-12-01',
            ),
            485 => 
            array (
                'id' => 986,
                'hits' => 20,
                'device_id' => 44,
                'day' => '2021-01-01',
            ),
            486 => 
            array (
                'id' => 987,
                'hits' => 17,
                'device_id' => 44,
                'day' => '2021-02-01',
            ),
            487 => 
            array (
                'id' => 988,
                'hits' => 14,
                'device_id' => 44,
                'day' => '2021-03-01',
            ),
            488 => 
            array (
                'id' => 989,
                'hits' => 29,
                'device_id' => 44,
                'day' => '2021-04-01',
            ),
            489 => 
            array (
                'id' => 990,
                'hits' => 28,
                'device_id' => 44,
                'day' => '2021-05-01',
            ),
            490 => 
            array (
                'id' => 991,
                'hits' => 13,
                'device_id' => 44,
                'day' => '2021-06-01',
            ),
            491 => 
            array (
                'id' => 992,
                'hits' => 13,
                'device_id' => 47,
                'day' => '2020-12-01',
            ),
            492 => 
            array (
                'id' => 993,
                'hits' => 18,
                'device_id' => 47,
                'day' => '2021-01-01',
            ),
            493 => 
            array (
                'id' => 994,
                'hits' => 17,
                'device_id' => 47,
                'day' => '2021-02-01',
            ),
            494 => 
            array (
                'id' => 995,
                'hits' => 23,
                'device_id' => 47,
                'day' => '2021-03-01',
            ),
            495 => 
            array (
                'id' => 996,
                'hits' => 63,
                'device_id' => 47,
                'day' => '2021-04-01',
            ),
            496 => 
            array (
                'id' => 997,
                'hits' => 71,
                'device_id' => 47,
                'day' => '2021-05-01',
            ),
            497 => 
            array (
                'id' => 998,
                'hits' => 14,
                'device_id' => 47,
                'day' => '2021-06-01',
            ),
            498 => 
            array (
                'id' => 999,
                'hits' => 2,
                'device_id' => 49,
                'day' => '2020-12-01',
            ),
            499 => 
            array (
                'id' => 1000,
                'hits' => 1,
                'device_id' => 50,
                'day' => '2021-02-01',
            ),
        ));
        \DB::table('device_statistics')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'hits' => 1,
                'device_id' => 51,
                'day' => '2021-02-01',
            ),
            1 => 
            array (
                'id' => 1002,
                'hits' => 1,
                'device_id' => 52,
                'day' => '2021-02-01',
            ),
            2 => 
            array (
                'id' => 1003,
                'hits' => 74,
                'device_id' => 53,
                'day' => '2020-12-01',
            ),
            3 => 
            array (
                'id' => 1004,
                'hits' => 75,
                'device_id' => 53,
                'day' => '2021-01-01',
            ),
            4 => 
            array (
                'id' => 1005,
                'hits' => 27,
                'device_id' => 53,
                'day' => '2021-02-01',
            ),
            5 => 
            array (
                'id' => 1006,
                'hits' => 37,
                'device_id' => 53,
                'day' => '2021-03-01',
            ),
            6 => 
            array (
                'id' => 1007,
                'hits' => 28,
                'device_id' => 53,
                'day' => '2021-04-01',
            ),
            7 => 
            array (
                'id' => 1008,
                'hits' => 39,
                'device_id' => 53,
                'day' => '2021-05-01',
            ),
            8 => 
            array (
                'id' => 1009,
                'hits' => 32,
                'device_id' => 53,
                'day' => '2021-06-01',
            ),
            9 => 
            array (
                'id' => 1010,
                'hits' => 52,
                'device_id' => 54,
                'day' => '2020-12-01',
            ),
            10 => 
            array (
                'id' => 1011,
                'hits' => 46,
                'device_id' => 54,
                'day' => '2021-01-01',
            ),
            11 => 
            array (
                'id' => 1012,
                'hits' => 56,
                'device_id' => 54,
                'day' => '2021-02-01',
            ),
            12 => 
            array (
                'id' => 1013,
                'hits' => 44,
                'device_id' => 54,
                'day' => '2021-03-01',
            ),
            13 => 
            array (
                'id' => 1014,
                'hits' => 73,
                'device_id' => 54,
                'day' => '2021-04-01',
            ),
            14 => 
            array (
                'id' => 1015,
                'hits' => 65,
                'device_id' => 54,
                'day' => '2021-05-01',
            ),
            15 => 
            array (
                'id' => 1016,
                'hits' => 27,
                'device_id' => 54,
                'day' => '2021-06-01',
            ),
            16 => 
            array (
                'id' => 1017,
                'hits' => 15,
                'device_id' => 57,
                'day' => '2020-12-01',
            ),
            17 => 
            array (
                'id' => 1018,
                'hits' => 15,
                'device_id' => 57,
                'day' => '2021-01-01',
            ),
            18 => 
            array (
                'id' => 1019,
                'hits' => 35,
                'device_id' => 57,
                'day' => '2021-02-01',
            ),
            19 => 
            array (
                'id' => 1020,
                'hits' => 21,
                'device_id' => 57,
                'day' => '2021-03-01',
            ),
            20 => 
            array (
                'id' => 1021,
                'hits' => 21,
                'device_id' => 57,
                'day' => '2021-04-01',
            ),
            21 => 
            array (
                'id' => 1022,
                'hits' => 29,
                'device_id' => 57,
                'day' => '2021-05-01',
            ),
            22 => 
            array (
                'id' => 1023,
                'hits' => 8,
                'device_id' => 57,
                'day' => '2021-06-01',
            ),
            23 => 
            array (
                'id' => 1024,
                'hits' => 16,
                'device_id' => 58,
                'day' => '2020-12-01',
            ),
            24 => 
            array (
                'id' => 1025,
                'hits' => 7,
                'device_id' => 58,
                'day' => '2021-01-01',
            ),
            25 => 
            array (
                'id' => 1026,
                'hits' => 10,
                'device_id' => 58,
                'day' => '2021-02-01',
            ),
            26 => 
            array (
                'id' => 1027,
                'hits' => 21,
                'device_id' => 58,
                'day' => '2021-03-01',
            ),
            27 => 
            array (
                'id' => 1028,
                'hits' => 19,
                'device_id' => 58,
                'day' => '2021-04-01',
            ),
            28 => 
            array (
                'id' => 1029,
                'hits' => 12,
                'device_id' => 58,
                'day' => '2021-05-01',
            ),
            29 => 
            array (
                'id' => 1030,
                'hits' => 5,
                'device_id' => 58,
                'day' => '2021-06-01',
            ),
            30 => 
            array (
                'id' => 1031,
                'hits' => 12,
                'device_id' => 60,
                'day' => '2020-12-01',
            ),
            31 => 
            array (
                'id' => 1032,
                'hits' => 22,
                'device_id' => 60,
                'day' => '2021-01-01',
            ),
            32 => 
            array (
                'id' => 1033,
                'hits' => 16,
                'device_id' => 60,
                'day' => '2021-02-01',
            ),
            33 => 
            array (
                'id' => 1034,
                'hits' => 31,
                'device_id' => 60,
                'day' => '2021-03-01',
            ),
            34 => 
            array (
                'id' => 1035,
                'hits' => 31,
                'device_id' => 60,
                'day' => '2021-04-01',
            ),
            35 => 
            array (
                'id' => 1036,
                'hits' => 26,
                'device_id' => 60,
                'day' => '2021-05-01',
            ),
            36 => 
            array (
                'id' => 1037,
                'hits' => 33,
                'device_id' => 60,
                'day' => '2021-06-01',
            ),
            37 => 
            array (
                'id' => 1038,
                'hits' => 15,
                'device_id' => 62,
                'day' => '2020-12-01',
            ),
            38 => 
            array (
                'id' => 1039,
                'hits' => 15,
                'device_id' => 62,
                'day' => '2021-01-01',
            ),
            39 => 
            array (
                'id' => 1040,
                'hits' => 8,
                'device_id' => 62,
                'day' => '2021-02-01',
            ),
            40 => 
            array (
                'id' => 1041,
                'hits' => 22,
                'device_id' => 62,
                'day' => '2021-03-01',
            ),
            41 => 
            array (
                'id' => 1042,
                'hits' => 20,
                'device_id' => 62,
                'day' => '2021-04-01',
            ),
            42 => 
            array (
                'id' => 1043,
                'hits' => 26,
                'device_id' => 62,
                'day' => '2021-05-01',
            ),
            43 => 
            array (
                'id' => 1044,
                'hits' => 10,
                'device_id' => 62,
                'day' => '2021-06-01',
            ),
            44 => 
            array (
                'id' => 1045,
                'hits' => 27,
                'device_id' => 68,
                'day' => '2020-12-01',
            ),
            45 => 
            array (
                'id' => 1046,
                'hits' => 15,
                'device_id' => 68,
                'day' => '2021-01-01',
            ),
            46 => 
            array (
                'id' => 1047,
                'hits' => 20,
                'device_id' => 68,
                'day' => '2021-02-01',
            ),
            47 => 
            array (
                'id' => 1048,
                'hits' => 30,
                'device_id' => 68,
                'day' => '2021-03-01',
            ),
            48 => 
            array (
                'id' => 1049,
                'hits' => 46,
                'device_id' => 68,
                'day' => '2021-04-01',
            ),
            49 => 
            array (
                'id' => 1050,
                'hits' => 25,
                'device_id' => 68,
                'day' => '2021-05-01',
            ),
            50 => 
            array (
                'id' => 1051,
                'hits' => 10,
                'device_id' => 68,
                'day' => '2021-06-01',
            ),
            51 => 
            array (
                'id' => 1052,
                'hits' => 19,
                'device_id' => 73,
                'day' => '2020-12-01',
            ),
            52 => 
            array (
                'id' => 1053,
                'hits' => 23,
                'device_id' => 73,
                'day' => '2021-01-01',
            ),
            53 => 
            array (
                'id' => 1054,
                'hits' => 8,
                'device_id' => 73,
                'day' => '2021-02-01',
            ),
            54 => 
            array (
                'id' => 1055,
                'hits' => 16,
                'device_id' => 73,
                'day' => '2021-03-01',
            ),
            55 => 
            array (
                'id' => 1056,
                'hits' => 15,
                'device_id' => 73,
                'day' => '2021-04-01',
            ),
            56 => 
            array (
                'id' => 1057,
                'hits' => 22,
                'device_id' => 73,
                'day' => '2021-05-01',
            ),
            57 => 
            array (
                'id' => 1058,
                'hits' => 10,
                'device_id' => 73,
                'day' => '2021-06-01',
            ),
            58 => 
            array (
                'id' => 1059,
                'hits' => 4,
                'device_id' => 74,
                'day' => '2020-12-01',
            ),
            59 => 
            array (
                'id' => 1060,
                'hits' => 10,
                'device_id' => 74,
                'day' => '2021-01-01',
            ),
            60 => 
            array (
                'id' => 1061,
                'hits' => 6,
                'device_id' => 74,
                'day' => '2021-02-01',
            ),
            61 => 
            array (
                'id' => 1062,
                'hits' => 10,
                'device_id' => 74,
                'day' => '2021-03-01',
            ),
            62 => 
            array (
                'id' => 1063,
                'hits' => 14,
                'device_id' => 74,
                'day' => '2021-04-01',
            ),
            63 => 
            array (
                'id' => 1064,
                'hits' => 9,
                'device_id' => 74,
                'day' => '2021-05-01',
            ),
            64 => 
            array (
                'id' => 1065,
                'hits' => 3,
                'device_id' => 74,
                'day' => '2021-06-01',
            ),
            65 => 
            array (
                'id' => 1066,
                'hits' => 15,
                'device_id' => 75,
                'day' => '2020-12-01',
            ),
            66 => 
            array (
                'id' => 1067,
                'hits' => 21,
                'device_id' => 75,
                'day' => '2021-01-01',
            ),
            67 => 
            array (
                'id' => 1068,
                'hits' => 9,
                'device_id' => 75,
                'day' => '2021-02-01',
            ),
            68 => 
            array (
                'id' => 1069,
                'hits' => 11,
                'device_id' => 75,
                'day' => '2021-03-01',
            ),
            69 => 
            array (
                'id' => 1070,
                'hits' => 16,
                'device_id' => 75,
                'day' => '2021-04-01',
            ),
            70 => 
            array (
                'id' => 1071,
                'hits' => 16,
                'device_id' => 75,
                'day' => '2021-05-01',
            ),
            71 => 
            array (
                'id' => 1072,
                'hits' => 6,
                'device_id' => 75,
                'day' => '2021-06-01',
            ),
            72 => 
            array (
                'id' => 1073,
                'hits' => 18,
                'device_id' => 76,
                'day' => '2020-12-01',
            ),
            73 => 
            array (
                'id' => 1074,
                'hits' => 35,
                'device_id' => 76,
                'day' => '2021-01-01',
            ),
            74 => 
            array (
                'id' => 1075,
                'hits' => 25,
                'device_id' => 76,
                'day' => '2021-02-01',
            ),
            75 => 
            array (
                'id' => 1076,
                'hits' => 43,
                'device_id' => 76,
                'day' => '2021-03-01',
            ),
            76 => 
            array (
                'id' => 1077,
                'hits' => 33,
                'device_id' => 76,
                'day' => '2021-04-01',
            ),
            77 => 
            array (
                'id' => 1078,
                'hits' => 33,
                'device_id' => 76,
                'day' => '2021-05-01',
            ),
            78 => 
            array (
                'id' => 1079,
                'hits' => 29,
                'device_id' => 76,
                'day' => '2021-06-01',
            ),
            79 => 
            array (
                'id' => 1080,
                'hits' => 38,
                'device_id' => 77,
                'day' => '2020-12-01',
            ),
            80 => 
            array (
                'id' => 1081,
                'hits' => 72,
                'device_id' => 77,
                'day' => '2021-01-01',
            ),
            81 => 
            array (
                'id' => 1082,
                'hits' => 83,
                'device_id' => 77,
                'day' => '2021-02-01',
            ),
            82 => 
            array (
                'id' => 1083,
                'hits' => 73,
                'device_id' => 77,
                'day' => '2021-03-01',
            ),
            83 => 
            array (
                'id' => 1084,
                'hits' => 64,
                'device_id' => 77,
                'day' => '2021-04-01',
            ),
            84 => 
            array (
                'id' => 1085,
                'hits' => 71,
                'device_id' => 77,
                'day' => '2021-05-01',
            ),
            85 => 
            array (
                'id' => 1086,
                'hits' => 24,
                'device_id' => 77,
                'day' => '2021-06-01',
            ),
            86 => 
            array (
                'id' => 1087,
                'hits' => 35,
                'device_id' => 78,
                'day' => '2020-12-01',
            ),
            87 => 
            array (
                'id' => 1088,
                'hits' => 64,
                'device_id' => 78,
                'day' => '2021-01-01',
            ),
            88 => 
            array (
                'id' => 1089,
                'hits' => 59,
                'device_id' => 78,
                'day' => '2021-02-01',
            ),
            89 => 
            array (
                'id' => 1090,
                'hits' => 66,
                'device_id' => 78,
                'day' => '2021-03-01',
            ),
            90 => 
            array (
                'id' => 1091,
                'hits' => 110,
                'device_id' => 78,
                'day' => '2021-04-01',
            ),
            91 => 
            array (
                'id' => 1092,
                'hits' => 45,
                'device_id' => 78,
                'day' => '2021-05-01',
            ),
            92 => 
            array (
                'id' => 1093,
                'hits' => 48,
                'device_id' => 78,
                'day' => '2021-06-01',
            ),
            93 => 
            array (
                'id' => 1094,
                'hits' => 13,
                'device_id' => 79,
                'day' => '2020-12-01',
            ),
            94 => 
            array (
                'id' => 1095,
                'hits' => 22,
                'device_id' => 79,
                'day' => '2021-01-01',
            ),
            95 => 
            array (
                'id' => 1096,
                'hits' => 4,
                'device_id' => 79,
                'day' => '2021-02-01',
            ),
            96 => 
            array (
                'id' => 1097,
                'hits' => 21,
                'device_id' => 79,
                'day' => '2021-03-01',
            ),
            97 => 
            array (
                'id' => 1098,
                'hits' => 12,
                'device_id' => 79,
                'day' => '2021-04-01',
            ),
            98 => 
            array (
                'id' => 1099,
                'hits' => 30,
                'device_id' => 79,
                'day' => '2021-05-01',
            ),
            99 => 
            array (
                'id' => 1100,
                'hits' => 10,
                'device_id' => 79,
                'day' => '2021-06-01',
            ),
            100 => 
            array (
                'id' => 1101,
                'hits' => 52,
                'device_id' => 80,
                'day' => '2020-12-01',
            ),
            101 => 
            array (
                'id' => 1102,
                'hits' => 52,
                'device_id' => 80,
                'day' => '2021-01-01',
            ),
            102 => 
            array (
                'id' => 1103,
                'hits' => 49,
                'device_id' => 80,
                'day' => '2021-02-01',
            ),
            103 => 
            array (
                'id' => 1104,
                'hits' => 42,
                'device_id' => 80,
                'day' => '2021-03-01',
            ),
            104 => 
            array (
                'id' => 1105,
                'hits' => 52,
                'device_id' => 80,
                'day' => '2021-04-01',
            ),
            105 => 
            array (
                'id' => 1106,
                'hits' => 49,
                'device_id' => 80,
                'day' => '2021-05-01',
            ),
            106 => 
            array (
                'id' => 1107,
                'hits' => 20,
                'device_id' => 80,
                'day' => '2021-06-01',
            ),
            107 => 
            array (
                'id' => 1108,
                'hits' => 37,
                'device_id' => 81,
                'day' => '2020-12-01',
            ),
            108 => 
            array (
                'id' => 1109,
                'hits' => 46,
                'device_id' => 81,
                'day' => '2021-01-01',
            ),
            109 => 
            array (
                'id' => 1110,
                'hits' => 59,
                'device_id' => 81,
                'day' => '2021-02-01',
            ),
            110 => 
            array (
                'id' => 1111,
                'hits' => 83,
                'device_id' => 81,
                'day' => '2021-03-01',
            ),
            111 => 
            array (
                'id' => 1112,
                'hits' => 49,
                'device_id' => 81,
                'day' => '2021-04-01',
            ),
            112 => 
            array (
                'id' => 1113,
                'hits' => 63,
                'device_id' => 81,
                'day' => '2021-05-01',
            ),
            113 => 
            array (
                'id' => 1114,
                'hits' => 39,
                'device_id' => 81,
                'day' => '2021-06-01',
            ),
            114 => 
            array (
                'id' => 1115,
                'hits' => 35,
                'device_id' => 82,
                'day' => '2020-12-01',
            ),
            115 => 
            array (
                'id' => 1116,
                'hits' => 31,
                'device_id' => 82,
                'day' => '2021-01-01',
            ),
            116 => 
            array (
                'id' => 1117,
                'hits' => 25,
                'device_id' => 82,
                'day' => '2021-02-01',
            ),
            117 => 
            array (
                'id' => 1118,
                'hits' => 59,
                'device_id' => 82,
                'day' => '2021-03-01',
            ),
            118 => 
            array (
                'id' => 1119,
                'hits' => 46,
                'device_id' => 82,
                'day' => '2021-04-01',
            ),
            119 => 
            array (
                'id' => 1120,
                'hits' => 61,
                'device_id' => 82,
                'day' => '2021-05-01',
            ),
            120 => 
            array (
                'id' => 1121,
                'hits' => 29,
                'device_id' => 82,
                'day' => '2021-06-01',
            ),
            121 => 
            array (
                'id' => 1122,
                'hits' => 20,
                'device_id' => 83,
                'day' => '2020-12-01',
            ),
            122 => 
            array (
                'id' => 1123,
                'hits' => 17,
                'device_id' => 83,
                'day' => '2021-01-01',
            ),
            123 => 
            array (
                'id' => 1124,
                'hits' => 20,
                'device_id' => 83,
                'day' => '2021-02-01',
            ),
            124 => 
            array (
                'id' => 1125,
                'hits' => 41,
                'device_id' => 83,
                'day' => '2021-03-01',
            ),
            125 => 
            array (
                'id' => 1126,
                'hits' => 30,
                'device_id' => 83,
                'day' => '2021-04-01',
            ),
            126 => 
            array (
                'id' => 1127,
                'hits' => 49,
                'device_id' => 83,
                'day' => '2021-05-01',
            ),
            127 => 
            array (
                'id' => 1128,
                'hits' => 25,
                'device_id' => 83,
                'day' => '2021-06-01',
            ),
            128 => 
            array (
                'id' => 1129,
                'hits' => 15,
                'device_id' => 84,
                'day' => '2020-12-01',
            ),
            129 => 
            array (
                'id' => 1130,
                'hits' => 27,
                'device_id' => 84,
                'day' => '2021-01-01',
            ),
            130 => 
            array (
                'id' => 1131,
                'hits' => 19,
                'device_id' => 84,
                'day' => '2021-02-01',
            ),
            131 => 
            array (
                'id' => 1132,
                'hits' => 21,
                'device_id' => 84,
                'day' => '2021-03-01',
            ),
            132 => 
            array (
                'id' => 1133,
                'hits' => 31,
                'device_id' => 84,
                'day' => '2021-04-01',
            ),
            133 => 
            array (
                'id' => 1134,
                'hits' => 40,
                'device_id' => 84,
                'day' => '2021-05-01',
            ),
            134 => 
            array (
                'id' => 1135,
                'hits' => 13,
                'device_id' => 84,
                'day' => '2021-06-01',
            ),
            135 => 
            array (
                'id' => 1136,
                'hits' => 8,
                'device_id' => 85,
                'day' => '2020-12-01',
            ),
            136 => 
            array (
                'id' => 1137,
                'hits' => 17,
                'device_id' => 85,
                'day' => '2021-01-01',
            ),
            137 => 
            array (
                'id' => 1138,
                'hits' => 10,
                'device_id' => 85,
                'day' => '2021-02-01',
            ),
            138 => 
            array (
                'id' => 1139,
                'hits' => 17,
                'device_id' => 85,
                'day' => '2021-03-01',
            ),
            139 => 
            array (
                'id' => 1140,
                'hits' => 32,
                'device_id' => 85,
                'day' => '2021-04-01',
            ),
            140 => 
            array (
                'id' => 1141,
                'hits' => 24,
                'device_id' => 85,
                'day' => '2021-05-01',
            ),
            141 => 
            array (
                'id' => 1142,
                'hits' => 9,
                'device_id' => 85,
                'day' => '2021-06-01',
            ),
            142 => 
            array (
                'id' => 1143,
                'hits' => 19,
                'device_id' => 86,
                'day' => '2020-12-01',
            ),
            143 => 
            array (
                'id' => 1144,
                'hits' => 20,
                'device_id' => 86,
                'day' => '2021-01-01',
            ),
            144 => 
            array (
                'id' => 1145,
                'hits' => 18,
                'device_id' => 86,
                'day' => '2021-02-01',
            ),
            145 => 
            array (
                'id' => 1146,
                'hits' => 23,
                'device_id' => 86,
                'day' => '2021-03-01',
            ),
            146 => 
            array (
                'id' => 1147,
                'hits' => 27,
                'device_id' => 86,
                'day' => '2021-04-01',
            ),
            147 => 
            array (
                'id' => 1148,
                'hits' => 45,
                'device_id' => 86,
                'day' => '2021-05-01',
            ),
            148 => 
            array (
                'id' => 1149,
                'hits' => 14,
                'device_id' => 86,
                'day' => '2021-06-01',
            ),
            149 => 
            array (
                'id' => 1150,
                'hits' => 33,
                'device_id' => 87,
                'day' => '2020-12-01',
            ),
            150 => 
            array (
                'id' => 1151,
                'hits' => 26,
                'device_id' => 87,
                'day' => '2021-01-01',
            ),
            151 => 
            array (
                'id' => 1152,
                'hits' => 12,
                'device_id' => 87,
                'day' => '2021-02-01',
            ),
            152 => 
            array (
                'id' => 1153,
                'hits' => 23,
                'device_id' => 87,
                'day' => '2021-03-01',
            ),
            153 => 
            array (
                'id' => 1154,
                'hits' => 27,
                'device_id' => 87,
                'day' => '2021-04-01',
            ),
            154 => 
            array (
                'id' => 1155,
                'hits' => 29,
                'device_id' => 87,
                'day' => '2021-05-01',
            ),
            155 => 
            array (
                'id' => 1156,
                'hits' => 10,
                'device_id' => 87,
                'day' => '2021-06-01',
            ),
            156 => 
            array (
                'id' => 1157,
                'hits' => 30,
                'device_id' => 88,
                'day' => '2020-12-01',
            ),
            157 => 
            array (
                'id' => 1158,
                'hits' => 28,
                'device_id' => 88,
                'day' => '2021-01-01',
            ),
            158 => 
            array (
                'id' => 1159,
                'hits' => 27,
                'device_id' => 88,
                'day' => '2021-02-01',
            ),
            159 => 
            array (
                'id' => 1160,
                'hits' => 43,
                'device_id' => 88,
                'day' => '2021-03-01',
            ),
            160 => 
            array (
                'id' => 1161,
                'hits' => 34,
                'device_id' => 88,
                'day' => '2021-04-01',
            ),
            161 => 
            array (
                'id' => 1162,
                'hits' => 44,
                'device_id' => 88,
                'day' => '2021-05-01',
            ),
            162 => 
            array (
                'id' => 1163,
                'hits' => 18,
                'device_id' => 88,
                'day' => '2021-06-01',
            ),
            163 => 
            array (
                'id' => 1164,
                'hits' => 15,
                'device_id' => 89,
                'day' => '2020-12-01',
            ),
            164 => 
            array (
                'id' => 1165,
                'hits' => 19,
                'device_id' => 89,
                'day' => '2021-01-01',
            ),
            165 => 
            array (
                'id' => 1166,
                'hits' => 19,
                'device_id' => 89,
                'day' => '2021-02-01',
            ),
            166 => 
            array (
                'id' => 1167,
                'hits' => 19,
                'device_id' => 89,
                'day' => '2021-03-01',
            ),
            167 => 
            array (
                'id' => 1168,
                'hits' => 27,
                'device_id' => 89,
                'day' => '2021-04-01',
            ),
            168 => 
            array (
                'id' => 1169,
                'hits' => 23,
                'device_id' => 89,
                'day' => '2021-05-01',
            ),
            169 => 
            array (
                'id' => 1170,
                'hits' => 12,
                'device_id' => 89,
                'day' => '2021-06-01',
            ),
            170 => 
            array (
                'id' => 1171,
                'hits' => 6,
                'device_id' => 90,
                'day' => '2020-12-01',
            ),
            171 => 
            array (
                'id' => 1172,
                'hits' => 5,
                'device_id' => 90,
                'day' => '2021-01-01',
            ),
            172 => 
            array (
                'id' => 1173,
                'hits' => 2,
                'device_id' => 90,
                'day' => '2021-02-01',
            ),
            173 => 
            array (
                'id' => 1174,
                'hits' => 8,
                'device_id' => 90,
                'day' => '2021-03-01',
            ),
            174 => 
            array (
                'id' => 1175,
                'hits' => 6,
                'device_id' => 90,
                'day' => '2021-04-01',
            ),
            175 => 
            array (
                'id' => 1176,
                'hits' => 10,
                'device_id' => 90,
                'day' => '2021-05-01',
            ),
            176 => 
            array (
                'id' => 1177,
                'hits' => 5,
                'device_id' => 90,
                'day' => '2021-06-01',
            ),
            177 => 
            array (
                'id' => 1178,
                'hits' => 11,
                'device_id' => 91,
                'day' => '2020-12-01',
            ),
            178 => 
            array (
                'id' => 1179,
                'hits' => 9,
                'device_id' => 91,
                'day' => '2021-01-01',
            ),
            179 => 
            array (
                'id' => 1180,
                'hits' => 12,
                'device_id' => 91,
                'day' => '2021-02-01',
            ),
            180 => 
            array (
                'id' => 1181,
                'hits' => 14,
                'device_id' => 91,
                'day' => '2021-03-01',
            ),
            181 => 
            array (
                'id' => 1182,
                'hits' => 11,
                'device_id' => 91,
                'day' => '2021-04-01',
            ),
            182 => 
            array (
                'id' => 1183,
                'hits' => 13,
                'device_id' => 91,
                'day' => '2021-05-01',
            ),
            183 => 
            array (
                'id' => 1184,
                'hits' => 4,
                'device_id' => 91,
                'day' => '2021-06-01',
            ),
            184 => 
            array (
                'id' => 1185,
                'hits' => 4,
                'device_id' => 92,
                'day' => '2020-12-01',
            ),
            185 => 
            array (
                'id' => 1186,
                'hits' => 8,
                'device_id' => 92,
                'day' => '2021-01-01',
            ),
            186 => 
            array (
                'id' => 1187,
                'hits' => 5,
                'device_id' => 92,
                'day' => '2021-02-01',
            ),
            187 => 
            array (
                'id' => 1188,
                'hits' => 11,
                'device_id' => 92,
                'day' => '2021-03-01',
            ),
            188 => 
            array (
                'id' => 1189,
                'hits' => 13,
                'device_id' => 92,
                'day' => '2021-04-01',
            ),
            189 => 
            array (
                'id' => 1190,
                'hits' => 14,
                'device_id' => 92,
                'day' => '2021-05-01',
            ),
            190 => 
            array (
                'id' => 1191,
                'hits' => 6,
                'device_id' => 92,
                'day' => '2021-06-01',
            ),
            191 => 
            array (
                'id' => 1192,
                'hits' => 21,
                'device_id' => 93,
                'day' => '2020-12-01',
            ),
            192 => 
            array (
                'id' => 1193,
                'hits' => 17,
                'device_id' => 93,
                'day' => '2021-01-01',
            ),
            193 => 
            array (
                'id' => 1194,
                'hits' => 8,
                'device_id' => 93,
                'day' => '2021-02-01',
            ),
            194 => 
            array (
                'id' => 1195,
                'hits' => 20,
                'device_id' => 93,
                'day' => '2021-03-01',
            ),
            195 => 
            array (
                'id' => 1196,
                'hits' => 19,
                'device_id' => 93,
                'day' => '2021-04-01',
            ),
            196 => 
            array (
                'id' => 1197,
                'hits' => 21,
                'device_id' => 93,
                'day' => '2021-05-01',
            ),
            197 => 
            array (
                'id' => 1198,
                'hits' => 10,
                'device_id' => 93,
                'day' => '2021-06-01',
            ),
            198 => 
            array (
                'id' => 1199,
                'hits' => 5,
                'device_id' => 94,
                'day' => '2020-12-01',
            ),
            199 => 
            array (
                'id' => 1200,
                'hits' => 8,
                'device_id' => 94,
                'day' => '2021-01-01',
            ),
            200 => 
            array (
                'id' => 1201,
                'hits' => 12,
                'device_id' => 94,
                'day' => '2021-02-01',
            ),
            201 => 
            array (
                'id' => 1202,
                'hits' => 10,
                'device_id' => 94,
                'day' => '2021-03-01',
            ),
            202 => 
            array (
                'id' => 1203,
                'hits' => 12,
                'device_id' => 94,
                'day' => '2021-04-01',
            ),
            203 => 
            array (
                'id' => 1204,
                'hits' => 18,
                'device_id' => 94,
                'day' => '2021-05-01',
            ),
            204 => 
            array (
                'id' => 1205,
                'hits' => 10,
                'device_id' => 94,
                'day' => '2021-06-01',
            ),
            205 => 
            array (
                'id' => 1206,
                'hits' => 7,
                'device_id' => 95,
                'day' => '2020-12-01',
            ),
            206 => 
            array (
                'id' => 1207,
                'hits' => 4,
                'device_id' => 95,
                'day' => '2021-01-01',
            ),
            207 => 
            array (
                'id' => 1208,
                'hits' => 8,
                'device_id' => 95,
                'day' => '2021-02-01',
            ),
            208 => 
            array (
                'id' => 1209,
                'hits' => 10,
                'device_id' => 95,
                'day' => '2021-03-01',
            ),
            209 => 
            array (
                'id' => 1210,
                'hits' => 9,
                'device_id' => 95,
                'day' => '2021-04-01',
            ),
            210 => 
            array (
                'id' => 1211,
                'hits' => 9,
                'device_id' => 95,
                'day' => '2021-05-01',
            ),
            211 => 
            array (
                'id' => 1212,
                'hits' => 4,
                'device_id' => 95,
                'day' => '2021-06-01',
            ),
            212 => 
            array (
                'id' => 1213,
                'hits' => 20,
                'device_id' => 96,
                'day' => '2020-12-01',
            ),
            213 => 
            array (
                'id' => 1214,
                'hits' => 14,
                'device_id' => 96,
                'day' => '2021-01-01',
            ),
            214 => 
            array (
                'id' => 1215,
                'hits' => 20,
                'device_id' => 96,
                'day' => '2021-02-01',
            ),
            215 => 
            array (
                'id' => 1216,
                'hits' => 43,
                'device_id' => 96,
                'day' => '2021-03-01',
            ),
            216 => 
            array (
                'id' => 1217,
                'hits' => 41,
                'device_id' => 96,
                'day' => '2021-04-01',
            ),
            217 => 
            array (
                'id' => 1218,
                'hits' => 39,
                'device_id' => 96,
                'day' => '2021-05-01',
            ),
            218 => 
            array (
                'id' => 1219,
                'hits' => 28,
                'device_id' => 96,
                'day' => '2021-06-01',
            ),
            219 => 
            array (
                'id' => 1220,
                'hits' => 4,
                'device_id' => 97,
                'day' => '2020-12-01',
            ),
            220 => 
            array (
                'id' => 1221,
                'hits' => 4,
                'device_id' => 97,
                'day' => '2021-01-01',
            ),
            221 => 
            array (
                'id' => 1222,
                'hits' => 4,
                'device_id' => 97,
                'day' => '2021-02-01',
            ),
            222 => 
            array (
                'id' => 1223,
                'hits' => 4,
                'device_id' => 97,
                'day' => '2021-03-01',
            ),
            223 => 
            array (
                'id' => 1224,
                'hits' => 9,
                'device_id' => 97,
                'day' => '2021-04-01',
            ),
            224 => 
            array (
                'id' => 1225,
                'hits' => 8,
                'device_id' => 97,
                'day' => '2021-05-01',
            ),
            225 => 
            array (
                'id' => 1226,
                'hits' => 6,
                'device_id' => 97,
                'day' => '2021-06-01',
            ),
            226 => 
            array (
                'id' => 1227,
                'hits' => 11,
                'device_id' => 98,
                'day' => '2020-12-01',
            ),
            227 => 
            array (
                'id' => 1228,
                'hits' => 11,
                'device_id' => 98,
                'day' => '2021-01-01',
            ),
            228 => 
            array (
                'id' => 1229,
                'hits' => 8,
                'device_id' => 98,
                'day' => '2021-02-01',
            ),
            229 => 
            array (
                'id' => 1230,
                'hits' => 18,
                'device_id' => 98,
                'day' => '2021-03-01',
            ),
            230 => 
            array (
                'id' => 1231,
                'hits' => 18,
                'device_id' => 98,
                'day' => '2021-04-01',
            ),
            231 => 
            array (
                'id' => 1232,
                'hits' => 22,
                'device_id' => 98,
                'day' => '2021-05-01',
            ),
            232 => 
            array (
                'id' => 1233,
                'hits' => 17,
                'device_id' => 98,
                'day' => '2021-06-01',
            ),
            233 => 
            array (
                'id' => 1234,
                'hits' => 9,
                'device_id' => 99,
                'day' => '2020-12-01',
            ),
            234 => 
            array (
                'id' => 1235,
                'hits' => 14,
                'device_id' => 99,
                'day' => '2021-01-01',
            ),
            235 => 
            array (
                'id' => 1236,
                'hits' => 7,
                'device_id' => 99,
                'day' => '2021-02-01',
            ),
            236 => 
            array (
                'id' => 1237,
                'hits' => 16,
                'device_id' => 99,
                'day' => '2021-03-01',
            ),
            237 => 
            array (
                'id' => 1238,
                'hits' => 35,
                'device_id' => 99,
                'day' => '2021-04-01',
            ),
            238 => 
            array (
                'id' => 1239,
                'hits' => 35,
                'device_id' => 99,
                'day' => '2021-05-01',
            ),
            239 => 
            array (
                'id' => 1240,
                'hits' => 9,
                'device_id' => 99,
                'day' => '2021-06-01',
            ),
            240 => 
            array (
                'id' => 1241,
                'hits' => 4,
                'device_id' => 100,
                'day' => '2020-12-01',
            ),
            241 => 
            array (
                'id' => 1242,
                'hits' => 6,
                'device_id' => 100,
                'day' => '2021-01-01',
            ),
            242 => 
            array (
                'id' => 1243,
                'hits' => 8,
                'device_id' => 100,
                'day' => '2021-02-01',
            ),
            243 => 
            array (
                'id' => 1244,
                'hits' => 9,
                'device_id' => 100,
                'day' => '2021-03-01',
            ),
            244 => 
            array (
                'id' => 1245,
                'hits' => 9,
                'device_id' => 100,
                'day' => '2021-04-01',
            ),
            245 => 
            array (
                'id' => 1246,
                'hits' => 14,
                'device_id' => 100,
                'day' => '2021-05-01',
            ),
            246 => 
            array (
                'id' => 1247,
                'hits' => 7,
                'device_id' => 100,
                'day' => '2021-06-01',
            ),
            247 => 
            array (
                'id' => 1248,
                'hits' => 7,
                'device_id' => 101,
                'day' => '2020-12-01',
            ),
            248 => 
            array (
                'id' => 1249,
                'hits' => 6,
                'device_id' => 101,
                'day' => '2021-01-01',
            ),
            249 => 
            array (
                'id' => 1250,
                'hits' => 14,
                'device_id' => 101,
                'day' => '2021-02-01',
            ),
            250 => 
            array (
                'id' => 1251,
                'hits' => 11,
                'device_id' => 101,
                'day' => '2021-03-01',
            ),
            251 => 
            array (
                'id' => 1252,
                'hits' => 17,
                'device_id' => 101,
                'day' => '2021-04-01',
            ),
            252 => 
            array (
                'id' => 1253,
                'hits' => 28,
                'device_id' => 101,
                'day' => '2021-05-01',
            ),
            253 => 
            array (
                'id' => 1254,
                'hits' => 7,
                'device_id' => 101,
                'day' => '2021-06-01',
            ),
            254 => 
            array (
                'id' => 1255,
                'hits' => 4,
                'device_id' => 102,
                'day' => '2020-12-01',
            ),
            255 => 
            array (
                'id' => 1256,
                'hits' => 4,
                'device_id' => 102,
                'day' => '2021-01-01',
            ),
            256 => 
            array (
                'id' => 1257,
                'hits' => 2,
                'device_id' => 102,
                'day' => '2021-02-01',
            ),
            257 => 
            array (
                'id' => 1258,
                'hits' => 9,
                'device_id' => 102,
                'day' => '2021-03-01',
            ),
            258 => 
            array (
                'id' => 1259,
                'hits' => 3,
                'device_id' => 102,
                'day' => '2021-04-01',
            ),
            259 => 
            array (
                'id' => 1260,
                'hits' => 11,
                'device_id' => 102,
                'day' => '2021-05-01',
            ),
            260 => 
            array (
                'id' => 1261,
                'hits' => 5,
                'device_id' => 102,
                'day' => '2021-06-01',
            ),
            261 => 
            array (
                'id' => 1262,
                'hits' => 4,
                'device_id' => 103,
                'day' => '2020-12-01',
            ),
            262 => 
            array (
                'id' => 1263,
                'hits' => 3,
                'device_id' => 103,
                'day' => '2021-01-01',
            ),
            263 => 
            array (
                'id' => 1264,
                'hits' => 5,
                'device_id' => 103,
                'day' => '2021-02-01',
            ),
            264 => 
            array (
                'id' => 1265,
                'hits' => 11,
                'device_id' => 103,
                'day' => '2021-03-01',
            ),
            265 => 
            array (
                'id' => 1266,
                'hits' => 5,
                'device_id' => 103,
                'day' => '2021-04-01',
            ),
            266 => 
            array (
                'id' => 1267,
                'hits' => 6,
                'device_id' => 103,
                'day' => '2021-05-01',
            ),
            267 => 
            array (
                'id' => 1268,
                'hits' => 2,
                'device_id' => 103,
                'day' => '2021-06-01',
            ),
            268 => 
            array (
                'id' => 1269,
                'hits' => 20,
                'device_id' => 104,
                'day' => '2020-12-01',
            ),
            269 => 
            array (
                'id' => 1270,
                'hits' => 21,
                'device_id' => 104,
                'day' => '2021-01-01',
            ),
            270 => 
            array (
                'id' => 1271,
                'hits' => 18,
                'device_id' => 104,
                'day' => '2021-02-01',
            ),
            271 => 
            array (
                'id' => 1272,
                'hits' => 42,
                'device_id' => 104,
                'day' => '2021-03-01',
            ),
            272 => 
            array (
                'id' => 1273,
                'hits' => 49,
                'device_id' => 104,
                'day' => '2021-04-01',
            ),
            273 => 
            array (
                'id' => 1274,
                'hits' => 45,
                'device_id' => 104,
                'day' => '2021-05-01',
            ),
            274 => 
            array (
                'id' => 1275,
                'hits' => 20,
                'device_id' => 104,
                'day' => '2021-06-01',
            ),
            275 => 
            array (
                'id' => 1276,
                'hits' => 10,
                'device_id' => 105,
                'day' => '2020-12-01',
            ),
            276 => 
            array (
                'id' => 1277,
                'hits' => 8,
                'device_id' => 105,
                'day' => '2021-01-01',
            ),
            277 => 
            array (
                'id' => 1278,
                'hits' => 6,
                'device_id' => 105,
                'day' => '2021-02-01',
            ),
            278 => 
            array (
                'id' => 1279,
                'hits' => 14,
                'device_id' => 105,
                'day' => '2021-03-01',
            ),
            279 => 
            array (
                'id' => 1280,
                'hits' => 6,
                'device_id' => 105,
                'day' => '2021-04-01',
            ),
            280 => 
            array (
                'id' => 1281,
                'hits' => 22,
                'device_id' => 105,
                'day' => '2021-05-01',
            ),
            281 => 
            array (
                'id' => 1282,
                'hits' => 5,
                'device_id' => 105,
                'day' => '2021-06-01',
            ),
            282 => 
            array (
                'id' => 1283,
                'hits' => 51,
                'device_id' => 106,
                'day' => '2020-12-01',
            ),
            283 => 
            array (
                'id' => 1284,
                'hits' => 69,
                'device_id' => 106,
                'day' => '2021-01-01',
            ),
            284 => 
            array (
                'id' => 1285,
                'hits' => 58,
                'device_id' => 106,
                'day' => '2021-02-01',
            ),
            285 => 
            array (
                'id' => 1286,
                'hits' => 61,
                'device_id' => 106,
                'day' => '2021-03-01',
            ),
            286 => 
            array (
                'id' => 1287,
                'hits' => 106,
                'device_id' => 106,
                'day' => '2021-04-01',
            ),
            287 => 
            array (
                'id' => 1288,
                'hits' => 114,
                'device_id' => 106,
                'day' => '2021-05-01',
            ),
            288 => 
            array (
                'id' => 1289,
                'hits' => 81,
                'device_id' => 106,
                'day' => '2021-06-01',
            ),
            289 => 
            array (
                'id' => 1290,
                'hits' => 105,
                'device_id' => 107,
                'day' => '2020-12-01',
            ),
            290 => 
            array (
                'id' => 1291,
                'hits' => 126,
                'device_id' => 107,
                'day' => '2021-01-01',
            ),
            291 => 
            array (
                'id' => 1292,
                'hits' => 111,
                'device_id' => 107,
                'day' => '2021-02-01',
            ),
            292 => 
            array (
                'id' => 1293,
                'hits' => 136,
                'device_id' => 107,
                'day' => '2021-03-01',
            ),
            293 => 
            array (
                'id' => 1294,
                'hits' => 169,
                'device_id' => 107,
                'day' => '2021-04-01',
            ),
            294 => 
            array (
                'id' => 1295,
                'hits' => 185,
                'device_id' => 107,
                'day' => '2021-05-01',
            ),
            295 => 
            array (
                'id' => 1296,
                'hits' => 111,
                'device_id' => 107,
                'day' => '2021-06-01',
            ),
            296 => 
            array (
                'id' => 1297,
                'hits' => 20,
                'device_id' => 112,
                'day' => '2020-12-01',
            ),
            297 => 
            array (
                'id' => 1298,
                'hits' => 12,
                'device_id' => 112,
                'day' => '2021-01-01',
            ),
            298 => 
            array (
                'id' => 1299,
                'hits' => 7,
                'device_id' => 112,
                'day' => '2021-02-01',
            ),
            299 => 
            array (
                'id' => 1300,
                'hits' => 20,
                'device_id' => 112,
                'day' => '2021-03-01',
            ),
            300 => 
            array (
                'id' => 1301,
                'hits' => 23,
                'device_id' => 112,
                'day' => '2021-04-01',
            ),
            301 => 
            array (
                'id' => 1302,
                'hits' => 25,
                'device_id' => 112,
                'day' => '2021-05-01',
            ),
            302 => 
            array (
                'id' => 1303,
                'hits' => 11,
                'device_id' => 112,
                'day' => '2021-06-01',
            ),
            303 => 
            array (
                'id' => 1304,
                'hits' => 20,
                'device_id' => 113,
                'day' => '2020-12-01',
            ),
            304 => 
            array (
                'id' => 1305,
                'hits' => 19,
                'device_id' => 113,
                'day' => '2021-01-01',
            ),
            305 => 
            array (
                'id' => 1306,
                'hits' => 10,
                'device_id' => 113,
                'day' => '2021-02-01',
            ),
            306 => 
            array (
                'id' => 1307,
                'hits' => 20,
                'device_id' => 113,
                'day' => '2021-03-01',
            ),
            307 => 
            array (
                'id' => 1308,
                'hits' => 11,
                'device_id' => 113,
                'day' => '2021-04-01',
            ),
            308 => 
            array (
                'id' => 1309,
                'hits' => 20,
                'device_id' => 113,
                'day' => '2021-05-01',
            ),
            309 => 
            array (
                'id' => 1310,
                'hits' => 10,
                'device_id' => 113,
                'day' => '2021-06-01',
            ),
            310 => 
            array (
                'id' => 1311,
                'hits' => 7,
                'device_id' => 114,
                'day' => '2020-12-01',
            ),
            311 => 
            array (
                'id' => 1312,
                'hits' => 12,
                'device_id' => 114,
                'day' => '2021-01-01',
            ),
            312 => 
            array (
                'id' => 1313,
                'hits' => 9,
                'device_id' => 114,
                'day' => '2021-02-01',
            ),
            313 => 
            array (
                'id' => 1314,
                'hits' => 12,
                'device_id' => 114,
                'day' => '2021-03-01',
            ),
            314 => 
            array (
                'id' => 1315,
                'hits' => 12,
                'device_id' => 114,
                'day' => '2021-04-01',
            ),
            315 => 
            array (
                'id' => 1316,
                'hits' => 14,
                'device_id' => 114,
                'day' => '2021-05-01',
            ),
            316 => 
            array (
                'id' => 1317,
                'hits' => 5,
                'device_id' => 114,
                'day' => '2021-06-01',
            ),
            317 => 
            array (
                'id' => 1318,
                'hits' => 25,
                'device_id' => 115,
                'day' => '2020-12-01',
            ),
            318 => 
            array (
                'id' => 1319,
                'hits' => 55,
                'device_id' => 115,
                'day' => '2021-01-01',
            ),
            319 => 
            array (
                'id' => 1320,
                'hits' => 48,
                'device_id' => 115,
                'day' => '2021-02-01',
            ),
            320 => 
            array (
                'id' => 1321,
                'hits' => 33,
                'device_id' => 115,
                'day' => '2021-03-01',
            ),
            321 => 
            array (
                'id' => 1322,
                'hits' => 58,
                'device_id' => 115,
                'day' => '2021-04-01',
            ),
            322 => 
            array (
                'id' => 1323,
                'hits' => 68,
                'device_id' => 115,
                'day' => '2021-05-01',
            ),
            323 => 
            array (
                'id' => 1324,
                'hits' => 25,
                'device_id' => 115,
                'day' => '2021-06-01',
            ),
            324 => 
            array (
                'id' => 1325,
                'hits' => 9,
                'device_id' => 116,
                'day' => '2020-12-01',
            ),
            325 => 
            array (
                'id' => 1326,
                'hits' => 11,
                'device_id' => 116,
                'day' => '2021-01-01',
            ),
            326 => 
            array (
                'id' => 1327,
                'hits' => 13,
                'device_id' => 116,
                'day' => '2021-02-01',
            ),
            327 => 
            array (
                'id' => 1328,
                'hits' => 22,
                'device_id' => 116,
                'day' => '2021-03-01',
            ),
            328 => 
            array (
                'id' => 1329,
                'hits' => 17,
                'device_id' => 116,
                'day' => '2021-04-01',
            ),
            329 => 
            array (
                'id' => 1330,
                'hits' => 23,
                'device_id' => 116,
                'day' => '2021-05-01',
            ),
            330 => 
            array (
                'id' => 1331,
                'hits' => 10,
                'device_id' => 116,
                'day' => '2021-06-01',
            ),
            331 => 
            array (
                'id' => 1332,
                'hits' => 4,
                'device_id' => 117,
                'day' => '2020-12-01',
            ),
            332 => 
            array (
                'id' => 1333,
                'hits' => 18,
                'device_id' => 117,
                'day' => '2021-01-01',
            ),
            333 => 
            array (
                'id' => 1334,
                'hits' => 16,
                'device_id' => 117,
                'day' => '2021-02-01',
            ),
            334 => 
            array (
                'id' => 1335,
                'hits' => 36,
                'device_id' => 117,
                'day' => '2021-03-01',
            ),
            335 => 
            array (
                'id' => 1336,
                'hits' => 22,
                'device_id' => 117,
                'day' => '2021-04-01',
            ),
            336 => 
            array (
                'id' => 1337,
                'hits' => 26,
                'device_id' => 117,
                'day' => '2021-05-01',
            ),
            337 => 
            array (
                'id' => 1338,
                'hits' => 8,
                'device_id' => 117,
                'day' => '2021-06-01',
            ),
            338 => 
            array (
                'id' => 1339,
                'hits' => 27,
                'device_id' => 118,
                'day' => '2020-12-01',
            ),
            339 => 
            array (
                'id' => 1340,
                'hits' => 43,
                'device_id' => 118,
                'day' => '2021-01-01',
            ),
            340 => 
            array (
                'id' => 1341,
                'hits' => 39,
                'device_id' => 118,
                'day' => '2021-02-01',
            ),
            341 => 
            array (
                'id' => 1342,
                'hits' => 35,
                'device_id' => 118,
                'day' => '2021-03-01',
            ),
            342 => 
            array (
                'id' => 1343,
                'hits' => 30,
                'device_id' => 118,
                'day' => '2021-04-01',
            ),
            343 => 
            array (
                'id' => 1344,
                'hits' => 30,
                'device_id' => 118,
                'day' => '2021-05-01',
            ),
            344 => 
            array (
                'id' => 1345,
                'hits' => 10,
                'device_id' => 118,
                'day' => '2021-06-01',
            ),
            345 => 
            array (
                'id' => 1346,
                'hits' => 12,
                'device_id' => 119,
                'day' => '2020-12-01',
            ),
            346 => 
            array (
                'id' => 1347,
                'hits' => 25,
                'device_id' => 119,
                'day' => '2021-01-01',
            ),
            347 => 
            array (
                'id' => 1348,
                'hits' => 29,
                'device_id' => 119,
                'day' => '2021-02-01',
            ),
            348 => 
            array (
                'id' => 1349,
                'hits' => 23,
                'device_id' => 119,
                'day' => '2021-03-01',
            ),
            349 => 
            array (
                'id' => 1350,
                'hits' => 27,
                'device_id' => 119,
                'day' => '2021-04-01',
            ),
            350 => 
            array (
                'id' => 1351,
                'hits' => 24,
                'device_id' => 119,
                'day' => '2021-05-01',
            ),
            351 => 
            array (
                'id' => 1352,
                'hits' => 18,
                'device_id' => 119,
                'day' => '2021-06-01',
            ),
            352 => 
            array (
                'id' => 1353,
                'hits' => 38,
                'device_id' => 120,
                'day' => '2020-12-01',
            ),
            353 => 
            array (
                'id' => 1354,
                'hits' => 39,
                'device_id' => 120,
                'day' => '2021-01-01',
            ),
            354 => 
            array (
                'id' => 1355,
                'hits' => 33,
                'device_id' => 120,
                'day' => '2021-02-01',
            ),
            355 => 
            array (
                'id' => 1356,
                'hits' => 40,
                'device_id' => 120,
                'day' => '2021-03-01',
            ),
            356 => 
            array (
                'id' => 1357,
                'hits' => 47,
                'device_id' => 120,
                'day' => '2021-04-01',
            ),
            357 => 
            array (
                'id' => 1358,
                'hits' => 37,
                'device_id' => 120,
                'day' => '2021-05-01',
            ),
            358 => 
            array (
                'id' => 1359,
                'hits' => 9,
                'device_id' => 120,
                'day' => '2021-06-01',
            ),
            359 => 
            array (
                'id' => 1360,
                'hits' => 13,
                'device_id' => 121,
                'day' => '2020-12-01',
            ),
            360 => 
            array (
                'id' => 1361,
                'hits' => 27,
                'device_id' => 121,
                'day' => '2021-01-01',
            ),
            361 => 
            array (
                'id' => 1362,
                'hits' => 30,
                'device_id' => 121,
                'day' => '2021-02-01',
            ),
            362 => 
            array (
                'id' => 1363,
                'hits' => 34,
                'device_id' => 121,
                'day' => '2021-03-01',
            ),
            363 => 
            array (
                'id' => 1364,
                'hits' => 29,
                'device_id' => 121,
                'day' => '2021-04-01',
            ),
            364 => 
            array (
                'id' => 1365,
                'hits' => 18,
                'device_id' => 121,
                'day' => '2021-05-01',
            ),
            365 => 
            array (
                'id' => 1366,
                'hits' => 26,
                'device_id' => 121,
                'day' => '2021-06-01',
            ),
            366 => 
            array (
                'id' => 1367,
                'hits' => 14,
                'device_id' => 122,
                'day' => '2020-12-01',
            ),
            367 => 
            array (
                'id' => 1368,
                'hits' => 23,
                'device_id' => 122,
                'day' => '2021-01-01',
            ),
            368 => 
            array (
                'id' => 1369,
                'hits' => 28,
                'device_id' => 122,
                'day' => '2021-02-01',
            ),
            369 => 
            array (
                'id' => 1370,
                'hits' => 41,
                'device_id' => 122,
                'day' => '2021-03-01',
            ),
            370 => 
            array (
                'id' => 1371,
                'hits' => 59,
                'device_id' => 122,
                'day' => '2021-04-01',
            ),
            371 => 
            array (
                'id' => 1372,
                'hits' => 23,
                'device_id' => 122,
                'day' => '2021-05-01',
            ),
            372 => 
            array (
                'id' => 1373,
                'hits' => 17,
                'device_id' => 122,
                'day' => '2021-06-01',
            ),
            373 => 
            array (
                'id' => 1374,
                'hits' => 31,
                'device_id' => 123,
                'day' => '2020-12-01',
            ),
            374 => 
            array (
                'id' => 1375,
                'hits' => 50,
                'device_id' => 123,
                'day' => '2021-01-01',
            ),
            375 => 
            array (
                'id' => 1376,
                'hits' => 44,
                'device_id' => 123,
                'day' => '2021-02-01',
            ),
            376 => 
            array (
                'id' => 1377,
                'hits' => 39,
                'device_id' => 123,
                'day' => '2021-03-01',
            ),
            377 => 
            array (
                'id' => 1378,
                'hits' => 41,
                'device_id' => 123,
                'day' => '2021-04-01',
            ),
            378 => 
            array (
                'id' => 1379,
                'hits' => 34,
                'device_id' => 123,
                'day' => '2021-05-01',
            ),
            379 => 
            array (
                'id' => 1380,
                'hits' => 25,
                'device_id' => 123,
                'day' => '2021-06-01',
            ),
            380 => 
            array (
                'id' => 1381,
                'hits' => 21,
                'device_id' => 124,
                'day' => '2020-12-01',
            ),
            381 => 
            array (
                'id' => 1382,
                'hits' => 37,
                'device_id' => 124,
                'day' => '2021-01-01',
            ),
            382 => 
            array (
                'id' => 1383,
                'hits' => 38,
                'device_id' => 124,
                'day' => '2021-02-01',
            ),
            383 => 
            array (
                'id' => 1384,
                'hits' => 57,
                'device_id' => 124,
                'day' => '2021-03-01',
            ),
            384 => 
            array (
                'id' => 1385,
                'hits' => 47,
                'device_id' => 124,
                'day' => '2021-04-01',
            ),
            385 => 
            array (
                'id' => 1386,
                'hits' => 61,
                'device_id' => 124,
                'day' => '2021-05-01',
            ),
            386 => 
            array (
                'id' => 1387,
                'hits' => 24,
                'device_id' => 124,
                'day' => '2021-06-01',
            ),
            387 => 
            array (
                'id' => 1388,
                'hits' => 125,
                'device_id' => 125,
                'day' => '2020-12-01',
            ),
            388 => 
            array (
                'id' => 1389,
                'hits' => 148,
                'device_id' => 125,
                'day' => '2021-01-01',
            ),
            389 => 
            array (
                'id' => 1390,
                'hits' => 163,
                'device_id' => 125,
                'day' => '2021-02-01',
            ),
            390 => 
            array (
                'id' => 1391,
                'hits' => 85,
                'device_id' => 125,
                'day' => '2021-03-01',
            ),
            391 => 
            array (
                'id' => 1392,
                'hits' => 148,
                'device_id' => 125,
                'day' => '2021-04-01',
            ),
            392 => 
            array (
                'id' => 1393,
                'hits' => 129,
                'device_id' => 125,
                'day' => '2021-05-01',
            ),
            393 => 
            array (
                'id' => 1394,
                'hits' => 237,
                'device_id' => 125,
                'day' => '2021-06-01',
            ),
            394 => 
            array (
                'id' => 1395,
                'hits' => 110,
                'device_id' => 126,
                'day' => '2020-12-01',
            ),
            395 => 
            array (
                'id' => 1396,
                'hits' => 65,
                'device_id' => 126,
                'day' => '2021-01-01',
            ),
            396 => 
            array (
                'id' => 1397,
                'hits' => 92,
                'device_id' => 126,
                'day' => '2021-02-01',
            ),
            397 => 
            array (
                'id' => 1398,
                'hits' => 66,
                'device_id' => 126,
                'day' => '2021-03-01',
            ),
            398 => 
            array (
                'id' => 1399,
                'hits' => 69,
                'device_id' => 126,
                'day' => '2021-04-01',
            ),
            399 => 
            array (
                'id' => 1400,
                'hits' => 71,
                'device_id' => 126,
                'day' => '2021-05-01',
            ),
            400 => 
            array (
                'id' => 1401,
                'hits' => 54,
                'device_id' => 126,
                'day' => '2021-06-01',
            ),
            401 => 
            array (
                'id' => 1402,
                'hits' => 47,
                'device_id' => 127,
                'day' => '2020-12-01',
            ),
            402 => 
            array (
                'id' => 1403,
                'hits' => 43,
                'device_id' => 127,
                'day' => '2021-01-01',
            ),
            403 => 
            array (
                'id' => 1404,
                'hits' => 39,
                'device_id' => 127,
                'day' => '2021-02-01',
            ),
            404 => 
            array (
                'id' => 1405,
                'hits' => 37,
                'device_id' => 127,
                'day' => '2021-03-01',
            ),
            405 => 
            array (
                'id' => 1406,
                'hits' => 49,
                'device_id' => 127,
                'day' => '2021-04-01',
            ),
            406 => 
            array (
                'id' => 1407,
                'hits' => 42,
                'device_id' => 127,
                'day' => '2021-05-01',
            ),
            407 => 
            array (
                'id' => 1408,
                'hits' => 17,
                'device_id' => 127,
                'day' => '2021-06-01',
            ),
            408 => 
            array (
                'id' => 1409,
                'hits' => 145,
                'device_id' => 128,
                'day' => '2020-12-01',
            ),
            409 => 
            array (
                'id' => 1410,
                'hits' => 139,
                'device_id' => 128,
                'day' => '2021-01-01',
            ),
            410 => 
            array (
                'id' => 1411,
                'hits' => 101,
                'device_id' => 128,
                'day' => '2021-02-01',
            ),
            411 => 
            array (
                'id' => 1412,
                'hits' => 106,
                'device_id' => 128,
                'day' => '2021-03-01',
            ),
            412 => 
            array (
                'id' => 1413,
                'hits' => 101,
                'device_id' => 128,
                'day' => '2021-04-01',
            ),
            413 => 
            array (
                'id' => 1414,
                'hits' => 138,
                'device_id' => 128,
                'day' => '2021-05-01',
            ),
            414 => 
            array (
                'id' => 1415,
                'hits' => 79,
                'device_id' => 128,
                'day' => '2021-06-01',
            ),
            415 => 
            array (
                'id' => 1416,
                'hits' => 123,
                'device_id' => 129,
                'day' => '2021-02-01',
            ),
            416 => 
            array (
                'id' => 1417,
                'hits' => 101,
                'device_id' => 129,
                'day' => '2021-03-01',
            ),
            417 => 
            array (
                'id' => 1418,
                'hits' => 61,
                'device_id' => 129,
                'day' => '2021-04-01',
            ),
            418 => 
            array (
                'id' => 1419,
                'hits' => 70,
                'device_id' => 129,
                'day' => '2021-05-01',
            ),
            419 => 
            array (
                'id' => 1420,
                'hits' => 56,
                'device_id' => 129,
                'day' => '2021-06-01',
            ),
            420 => 
            array (
                'id' => 1421,
                'hits' => 157,
                'device_id' => 131,
                'day' => '2020-12-01',
            ),
            421 => 
            array (
                'id' => 1422,
                'hits' => 204,
                'device_id' => 131,
                'day' => '2021-01-01',
            ),
            422 => 
            array (
                'id' => 1423,
                'hits' => 139,
                'device_id' => 131,
                'day' => '2021-02-01',
            ),
            423 => 
            array (
                'id' => 1424,
                'hits' => 158,
                'device_id' => 131,
                'day' => '2021-03-01',
            ),
            424 => 
            array (
                'id' => 1425,
                'hits' => 175,
                'device_id' => 131,
                'day' => '2021-04-01',
            ),
            425 => 
            array (
                'id' => 1426,
                'hits' => 200,
                'device_id' => 131,
                'day' => '2021-05-01',
            ),
            426 => 
            array (
                'id' => 1427,
                'hits' => 100,
                'device_id' => 131,
                'day' => '2021-06-01',
            ),
            427 => 
            array (
                'id' => 1428,
                'hits' => 107,
                'device_id' => 132,
                'day' => '2020-12-01',
            ),
            428 => 
            array (
                'id' => 1429,
                'hits' => 92,
                'device_id' => 132,
                'day' => '2021-01-01',
            ),
            429 => 
            array (
                'id' => 1430,
                'hits' => 98,
                'device_id' => 132,
                'day' => '2021-02-01',
            ),
            430 => 
            array (
                'id' => 1431,
                'hits' => 104,
                'device_id' => 132,
                'day' => '2021-03-01',
            ),
            431 => 
            array (
                'id' => 1432,
                'hits' => 149,
                'device_id' => 132,
                'day' => '2021-04-01',
            ),
            432 => 
            array (
                'id' => 1433,
                'hits' => 80,
                'device_id' => 132,
                'day' => '2021-05-01',
            ),
            433 => 
            array (
                'id' => 1434,
                'hits' => 67,
                'device_id' => 132,
                'day' => '2021-06-01',
            ),
            434 => 
            array (
                'id' => 1435,
                'hits' => 59,
                'device_id' => 136,
                'day' => '2020-12-01',
            ),
            435 => 
            array (
                'id' => 1436,
                'hits' => 92,
                'device_id' => 136,
                'day' => '2021-01-01',
            ),
            436 => 
            array (
                'id' => 1437,
                'hits' => 46,
                'device_id' => 136,
                'day' => '2021-02-01',
            ),
            437 => 
            array (
                'id' => 1438,
                'hits' => 67,
                'device_id' => 136,
                'day' => '2021-03-01',
            ),
            438 => 
            array (
                'id' => 1439,
                'hits' => 69,
                'device_id' => 136,
                'day' => '2021-04-01',
            ),
            439 => 
            array (
                'id' => 1440,
                'hits' => 68,
                'device_id' => 136,
                'day' => '2021-05-01',
            ),
            440 => 
            array (
                'id' => 1441,
                'hits' => 61,
                'device_id' => 136,
                'day' => '2021-06-01',
            ),
            441 => 
            array (
                'id' => 1442,
                'hits' => 1,
                'device_id' => 137,
                'day' => '2020-12-01',
            ),
            442 => 
            array (
                'id' => 1443,
                'hits' => 62,
                'device_id' => 138,
                'day' => '2020-12-01',
            ),
            443 => 
            array (
                'id' => 1444,
                'hits' => 50,
                'device_id' => 138,
                'day' => '2021-01-01',
            ),
            444 => 
            array (
                'id' => 1445,
                'hits' => 40,
                'device_id' => 138,
                'day' => '2021-02-01',
            ),
            445 => 
            array (
                'id' => 1446,
                'hits' => 40,
                'device_id' => 138,
                'day' => '2021-03-01',
            ),
            446 => 
            array (
                'id' => 1447,
                'hits' => 50,
                'device_id' => 138,
                'day' => '2021-04-01',
            ),
            447 => 
            array (
                'id' => 1448,
                'hits' => 49,
                'device_id' => 138,
                'day' => '2021-05-01',
            ),
            448 => 
            array (
                'id' => 1449,
                'hits' => 42,
                'device_id' => 138,
                'day' => '2021-06-01',
            ),
            449 => 
            array (
                'id' => 1450,
                'hits' => 60,
                'device_id' => 139,
                'day' => '2020-12-01',
            ),
            450 => 
            array (
                'id' => 1451,
                'hits' => 70,
                'device_id' => 139,
                'day' => '2021-01-01',
            ),
            451 => 
            array (
                'id' => 1452,
                'hits' => 42,
                'device_id' => 139,
                'day' => '2021-02-01',
            ),
            452 => 
            array (
                'id' => 1453,
                'hits' => 55,
                'device_id' => 139,
                'day' => '2021-03-01',
            ),
            453 => 
            array (
                'id' => 1454,
                'hits' => 43,
                'device_id' => 139,
                'day' => '2021-04-01',
            ),
            454 => 
            array (
                'id' => 1455,
                'hits' => 37,
                'device_id' => 139,
                'day' => '2021-05-01',
            ),
            455 => 
            array (
                'id' => 1456,
                'hits' => 36,
                'device_id' => 139,
                'day' => '2021-06-01',
            ),
            456 => 
            array (
                'id' => 1457,
                'hits' => 23,
                'device_id' => 140,
                'day' => '2020-12-01',
            ),
            457 => 
            array (
                'id' => 1458,
                'hits' => 27,
                'device_id' => 140,
                'day' => '2021-01-01',
            ),
            458 => 
            array (
                'id' => 1459,
                'hits' => 22,
                'device_id' => 140,
                'day' => '2021-02-01',
            ),
            459 => 
            array (
                'id' => 1460,
                'hits' => 20,
                'device_id' => 140,
                'day' => '2021-03-01',
            ),
            460 => 
            array (
                'id' => 1461,
                'hits' => 23,
                'device_id' => 140,
                'day' => '2021-04-01',
            ),
            461 => 
            array (
                'id' => 1462,
                'hits' => 24,
                'device_id' => 140,
                'day' => '2021-05-01',
            ),
            462 => 
            array (
                'id' => 1463,
                'hits' => 13,
                'device_id' => 140,
                'day' => '2021-06-01',
            ),
            463 => 
            array (
                'id' => 1464,
                'hits' => 218,
                'device_id' => 141,
                'day' => '2020-12-01',
            ),
            464 => 
            array (
                'id' => 1465,
                'hits' => 313,
                'device_id' => 141,
                'day' => '2021-01-01',
            ),
            465 => 
            array (
                'id' => 1466,
                'hits' => 245,
                'device_id' => 141,
                'day' => '2021-02-01',
            ),
            466 => 
            array (
                'id' => 1467,
                'hits' => 134,
                'device_id' => 141,
                'day' => '2021-03-01',
            ),
            467 => 
            array (
                'id' => 1468,
                'hits' => 197,
                'device_id' => 141,
                'day' => '2021-04-01',
            ),
            468 => 
            array (
                'id' => 1469,
                'hits' => 201,
                'device_id' => 141,
                'day' => '2021-05-01',
            ),
            469 => 
            array (
                'id' => 1470,
                'hits' => 145,
                'device_id' => 141,
                'day' => '2021-06-01',
            ),
            470 => 
            array (
                'id' => 1471,
                'hits' => 23,
                'device_id' => 142,
                'day' => '2020-12-01',
            ),
            471 => 
            array (
                'id' => 1472,
                'hits' => 27,
                'device_id' => 142,
                'day' => '2021-01-01',
            ),
            472 => 
            array (
                'id' => 1473,
                'hits' => 17,
                'device_id' => 142,
                'day' => '2021-02-01',
            ),
            473 => 
            array (
                'id' => 1474,
                'hits' => 24,
                'device_id' => 142,
                'day' => '2021-03-01',
            ),
            474 => 
            array (
                'id' => 1475,
                'hits' => 23,
                'device_id' => 142,
                'day' => '2021-04-01',
            ),
            475 => 
            array (
                'id' => 1476,
                'hits' => 32,
                'device_id' => 142,
                'day' => '2021-05-01',
            ),
            476 => 
            array (
                'id' => 1477,
                'hits' => 16,
                'device_id' => 142,
                'day' => '2021-06-01',
            ),
            477 => 
            array (
                'id' => 1478,
                'hits' => 73,
                'device_id' => 143,
                'day' => '2020-12-01',
            ),
            478 => 
            array (
                'id' => 1479,
                'hits' => 93,
                'device_id' => 143,
                'day' => '2021-01-01',
            ),
            479 => 
            array (
                'id' => 1480,
                'hits' => 86,
                'device_id' => 143,
                'day' => '2021-02-01',
            ),
            480 => 
            array (
                'id' => 1481,
                'hits' => 75,
                'device_id' => 143,
                'day' => '2021-03-01',
            ),
            481 => 
            array (
                'id' => 1482,
                'hits' => 88,
                'device_id' => 143,
                'day' => '2021-04-01',
            ),
            482 => 
            array (
                'id' => 1483,
                'hits' => 105,
                'device_id' => 143,
                'day' => '2021-05-01',
            ),
            483 => 
            array (
                'id' => 1484,
                'hits' => 44,
                'device_id' => 143,
                'day' => '2021-06-01',
            ),
            484 => 
            array (
                'id' => 1485,
                'hits' => 1,
                'device_id' => 144,
                'day' => '2021-02-01',
            ),
            485 => 
            array (
                'id' => 1486,
                'hits' => 235,
                'device_id' => 146,
                'day' => '2020-12-01',
            ),
            486 => 
            array (
                'id' => 1487,
                'hits' => 295,
                'device_id' => 146,
                'day' => '2021-01-01',
            ),
            487 => 
            array (
                'id' => 1488,
                'hits' => 149,
                'device_id' => 146,
                'day' => '2021-02-01',
            ),
            488 => 
            array (
                'id' => 1489,
                'hits' => 174,
                'device_id' => 146,
                'day' => '2021-03-01',
            ),
            489 => 
            array (
                'id' => 1490,
                'hits' => 213,
                'device_id' => 146,
                'day' => '2021-04-01',
            ),
            490 => 
            array (
                'id' => 1491,
                'hits' => 229,
                'device_id' => 146,
                'day' => '2021-05-01',
            ),
            491 => 
            array (
                'id' => 1492,
                'hits' => 108,
                'device_id' => 146,
                'day' => '2021-06-01',
            ),
            492 => 
            array (
                'id' => 1493,
                'hits' => 174,
                'device_id' => 147,
                'day' => '2020-12-01',
            ),
            493 => 
            array (
                'id' => 1494,
                'hits' => 170,
                'device_id' => 147,
                'day' => '2021-01-01',
            ),
            494 => 
            array (
                'id' => 1495,
                'hits' => 126,
                'device_id' => 147,
                'day' => '2021-02-01',
            ),
            495 => 
            array (
                'id' => 1496,
                'hits' => 120,
                'device_id' => 147,
                'day' => '2021-03-01',
            ),
            496 => 
            array (
                'id' => 1497,
                'hits' => 111,
                'device_id' => 147,
                'day' => '2021-04-01',
            ),
            497 => 
            array (
                'id' => 1498,
                'hits' => 113,
                'device_id' => 147,
                'day' => '2021-05-01',
            ),
            498 => 
            array (
                'id' => 1499,
                'hits' => 92,
                'device_id' => 147,
                'day' => '2021-06-01',
            ),
            499 => 
            array (
                'id' => 1500,
                'hits' => 34,
                'device_id' => 148,
                'day' => '2020-12-01',
            ),
        ));
        \DB::table('device_statistics')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'hits' => 5,
                'device_id' => 148,
                'day' => '2021-01-01',
            ),
            1 => 
            array (
                'id' => 1502,
                'hits' => 99,
                'device_id' => 148,
                'day' => '2021-02-01',
            ),
            2 => 
            array (
                'id' => 1503,
                'hits' => 114,
                'device_id' => 148,
                'day' => '2021-03-01',
            ),
            3 => 
            array (
                'id' => 1504,
                'hits' => 192,
                'device_id' => 148,
                'day' => '2021-04-01',
            ),
            4 => 
            array (
                'id' => 1505,
                'hits' => 180,
                'device_id' => 148,
                'day' => '2021-05-01',
            ),
            5 => 
            array (
                'id' => 1506,
                'hits' => 112,
                'device_id' => 148,
                'day' => '2021-06-01',
            ),
            6 => 
            array (
                'id' => 1507,
                'hits' => 127,
                'device_id' => 149,
                'day' => '2020-12-01',
            ),
            7 => 
            array (
                'id' => 1508,
                'hits' => 125,
                'device_id' => 149,
                'day' => '2021-01-01',
            ),
            8 => 
            array (
                'id' => 1509,
                'hits' => 97,
                'device_id' => 149,
                'day' => '2021-02-01',
            ),
            9 => 
            array (
                'id' => 1510,
                'hits' => 71,
                'device_id' => 149,
                'day' => '2021-03-01',
            ),
            10 => 
            array (
                'id' => 1511,
                'hits' => 132,
                'device_id' => 149,
                'day' => '2021-04-01',
            ),
            11 => 
            array (
                'id' => 1512,
                'hits' => 77,
                'device_id' => 149,
                'day' => '2021-05-01',
            ),
            12 => 
            array (
                'id' => 1513,
                'hits' => 56,
                'device_id' => 149,
                'day' => '2021-06-01',
            ),
            13 => 
            array (
                'id' => 1514,
                'hits' => 195,
                'device_id' => 150,
                'day' => '2020-12-01',
            ),
            14 => 
            array (
                'id' => 1515,
                'hits' => 237,
                'device_id' => 150,
                'day' => '2021-01-01',
            ),
            15 => 
            array (
                'id' => 1516,
                'hits' => 203,
                'device_id' => 150,
                'day' => '2021-02-01',
            ),
            16 => 
            array (
                'id' => 1517,
                'hits' => 292,
                'device_id' => 150,
                'day' => '2021-03-01',
            ),
            17 => 
            array (
                'id' => 1518,
                'hits' => 317,
                'device_id' => 150,
                'day' => '2021-04-01',
            ),
            18 => 
            array (
                'id' => 1519,
                'hits' => 211,
                'device_id' => 150,
                'day' => '2021-05-01',
            ),
            19 => 
            array (
                'id' => 1520,
                'hits' => 184,
                'device_id' => 150,
                'day' => '2021-06-01',
            ),
            20 => 
            array (
                'id' => 1521,
                'hits' => 1,
                'device_id' => 151,
                'day' => '2020-12-01',
            ),
            21 => 
            array (
                'id' => 1522,
                'hits' => 1,
                'device_id' => 155,
                'day' => '2020-12-01',
            ),
            22 => 
            array (
                'id' => 1523,
                'hits' => 64,
                'device_id' => 156,
                'day' => '2021-02-01',
            ),
            23 => 
            array (
                'id' => 1524,
                'hits' => 64,
                'device_id' => 156,
                'day' => '2021-03-01',
            ),
            24 => 
            array (
                'id' => 1525,
                'hits' => 57,
                'device_id' => 156,
                'day' => '2021-04-01',
            ),
            25 => 
            array (
                'id' => 1526,
                'hits' => 57,
                'device_id' => 156,
                'day' => '2021-05-01',
            ),
            26 => 
            array (
                'id' => 1527,
                'hits' => 38,
                'device_id' => 156,
                'day' => '2021-06-01',
            ),
            27 => 
            array (
                'id' => 1528,
                'hits' => 144,
                'device_id' => 157,
                'day' => '2020-12-01',
            ),
            28 => 
            array (
                'id' => 1529,
                'hits' => 177,
                'device_id' => 157,
                'day' => '2021-01-01',
            ),
            29 => 
            array (
                'id' => 1530,
                'hits' => 157,
                'device_id' => 157,
                'day' => '2021-02-01',
            ),
            30 => 
            array (
                'id' => 1531,
                'hits' => 101,
                'device_id' => 157,
                'day' => '2021-03-01',
            ),
            31 => 
            array (
                'id' => 1532,
                'hits' => 88,
                'device_id' => 157,
                'day' => '2021-04-01',
            ),
            32 => 
            array (
                'id' => 1533,
                'hits' => 131,
                'device_id' => 157,
                'day' => '2021-05-01',
            ),
            33 => 
            array (
                'id' => 1534,
                'hits' => 84,
                'device_id' => 157,
                'day' => '2021-06-01',
            ),
            34 => 
            array (
                'id' => 1535,
                'hits' => 3,
                'device_id' => 158,
                'day' => '2021-02-01',
            ),
            35 => 
            array (
                'id' => 1536,
                'hits' => 160,
                'device_id' => 159,
                'day' => '2020-12-01',
            ),
            36 => 
            array (
                'id' => 1537,
                'hits' => 212,
                'device_id' => 159,
                'day' => '2021-01-01',
            ),
            37 => 
            array (
                'id' => 1538,
                'hits' => 157,
                'device_id' => 159,
                'day' => '2021-02-01',
            ),
            38 => 
            array (
                'id' => 1539,
                'hits' => 145,
                'device_id' => 159,
                'day' => '2021-03-01',
            ),
            39 => 
            array (
                'id' => 1540,
                'hits' => 235,
                'device_id' => 159,
                'day' => '2021-04-01',
            ),
            40 => 
            array (
                'id' => 1541,
                'hits' => 204,
                'device_id' => 159,
                'day' => '2021-05-01',
            ),
            41 => 
            array (
                'id' => 1542,
                'hits' => 129,
                'device_id' => 159,
                'day' => '2021-06-01',
            ),
            42 => 
            array (
                'id' => 1543,
                'hits' => 99,
                'device_id' => 160,
                'day' => '2020-12-01',
            ),
            43 => 
            array (
                'id' => 1544,
                'hits' => 82,
                'device_id' => 160,
                'day' => '2021-01-01',
            ),
            44 => 
            array (
                'id' => 1545,
                'hits' => 89,
                'device_id' => 160,
                'day' => '2021-02-01',
            ),
            45 => 
            array (
                'id' => 1546,
                'hits' => 118,
                'device_id' => 160,
                'day' => '2021-03-01',
            ),
            46 => 
            array (
                'id' => 1547,
                'hits' => 153,
                'device_id' => 160,
                'day' => '2021-04-01',
            ),
            47 => 
            array (
                'id' => 1548,
                'hits' => 155,
                'device_id' => 160,
                'day' => '2021-05-01',
            ),
            48 => 
            array (
                'id' => 1549,
                'hits' => 242,
                'device_id' => 160,
                'day' => '2021-06-01',
            ),
            49 => 
            array (
                'id' => 1550,
                'hits' => 314,
                'device_id' => 161,
                'day' => '2020-12-01',
            ),
            50 => 
            array (
                'id' => 1551,
                'hits' => 286,
                'device_id' => 161,
                'day' => '2021-01-01',
            ),
            51 => 
            array (
                'id' => 1552,
                'hits' => 1026,
                'device_id' => 161,
                'day' => '2021-02-01',
            ),
            52 => 
            array (
                'id' => 1553,
                'hits' => 401,
                'device_id' => 161,
                'day' => '2021-03-01',
            ),
            53 => 
            array (
                'id' => 1554,
                'hits' => 485,
                'device_id' => 161,
                'day' => '2021-04-01',
            ),
            54 => 
            array (
                'id' => 1555,
                'hits' => 481,
                'device_id' => 161,
                'day' => '2021-05-01',
            ),
            55 => 
            array (
                'id' => 1556,
                'hits' => 243,
                'device_id' => 161,
                'day' => '2021-06-01',
            ),
            56 => 
            array (
                'id' => 1557,
                'hits' => 70,
                'device_id' => 162,
                'day' => '2020-12-01',
            ),
            57 => 
            array (
                'id' => 1558,
                'hits' => 199,
                'device_id' => 162,
                'day' => '2021-01-01',
            ),
            58 => 
            array (
                'id' => 1559,
                'hits' => 1152,
                'device_id' => 162,
                'day' => '2021-02-01',
            ),
            59 => 
            array (
                'id' => 1560,
                'hits' => 298,
                'device_id' => 162,
                'day' => '2021-03-01',
            ),
            60 => 
            array (
                'id' => 1561,
                'hits' => 221,
                'device_id' => 162,
                'day' => '2021-04-01',
            ),
            61 => 
            array (
                'id' => 1562,
                'hits' => 249,
                'device_id' => 162,
                'day' => '2021-05-01',
            ),
            62 => 
            array (
                'id' => 1563,
                'hits' => 201,
                'device_id' => 162,
                'day' => '2021-06-01',
            ),
            63 => 
            array (
                'id' => 1564,
                'hits' => 994,
                'device_id' => 163,
                'day' => '2020-12-01',
            ),
            64 => 
            array (
                'id' => 1565,
                'hits' => 305,
                'device_id' => 163,
                'day' => '2021-01-01',
            ),
            65 => 
            array (
                'id' => 1566,
                'hits' => 252,
                'device_id' => 163,
                'day' => '2021-02-01',
            ),
            66 => 
            array (
                'id' => 1567,
                'hits' => 231,
                'device_id' => 163,
                'day' => '2021-03-01',
            ),
            67 => 
            array (
                'id' => 1568,
                'hits' => 214,
                'device_id' => 163,
                'day' => '2021-04-01',
            ),
            68 => 
            array (
                'id' => 1569,
                'hits' => 204,
                'device_id' => 163,
                'day' => '2021-05-01',
            ),
            69 => 
            array (
                'id' => 1570,
                'hits' => 157,
                'device_id' => 163,
                'day' => '2021-06-01',
            ),
            70 => 
            array (
                'id' => 1571,
                'hits' => 674,
                'device_id' => 164,
                'day' => '2020-12-01',
            ),
            71 => 
            array (
                'id' => 1572,
                'hits' => 253,
                'device_id' => 164,
                'day' => '2021-01-01',
            ),
            72 => 
            array (
                'id' => 1573,
                'hits' => 768,
                'device_id' => 164,
                'day' => '2021-02-01',
            ),
            73 => 
            array (
                'id' => 1574,
                'hits' => 270,
                'device_id' => 164,
                'day' => '2021-03-01',
            ),
            74 => 
            array (
                'id' => 1575,
                'hits' => 293,
                'device_id' => 164,
                'day' => '2021-04-01',
            ),
            75 => 
            array (
                'id' => 1576,
                'hits' => 275,
                'device_id' => 164,
                'day' => '2021-05-01',
            ),
            76 => 
            array (
                'id' => 1577,
                'hits' => 225,
                'device_id' => 164,
                'day' => '2021-06-01',
            ),
            77 => 
            array (
                'id' => 1578,
                'hits' => 9,
                'device_id' => 165,
                'day' => '2020-12-01',
            ),
            78 => 
            array (
                'id' => 1579,
                'hits' => 6,
                'device_id' => 166,
                'day' => '2020-12-01',
            ),
            79 => 
            array (
                'id' => 1580,
                'hits' => 5,
                'device_id' => 167,
                'day' => '2020-12-01',
            ),
            80 => 
            array (
                'id' => 1581,
                'hits' => 1543,
                'device_id' => 168,
                'day' => '2021-01-01',
            ),
            81 => 
            array (
                'id' => 1582,
                'hits' => 449,
                'device_id' => 168,
                'day' => '2021-02-01',
            ),
            82 => 
            array (
                'id' => 1583,
                'hits' => 837,
                'device_id' => 168,
                'day' => '2021-03-01',
            ),
            83 => 
            array (
                'id' => 1584,
                'hits' => 418,
                'device_id' => 168,
                'day' => '2021-04-01',
            ),
            84 => 
            array (
                'id' => 1585,
                'hits' => 702,
                'device_id' => 168,
                'day' => '2021-05-01',
            ),
            85 => 
            array (
                'id' => 1586,
                'hits' => 250,
                'device_id' => 168,
                'day' => '2021-06-01',
            ),
            86 => 
            array (
                'id' => 1587,
                'hits' => 6,
                'device_id' => 169,
                'day' => '2021-02-01',
            ),
            87 => 
            array (
                'id' => 1588,
                'hits' => 10,
                'device_id' => 170,
                'day' => '2021-02-01',
            ),
            88 => 
            array (
                'id' => 1589,
                'hits' => 3,
                'device_id' => 171,
                'day' => '2021-02-01',
            ),
            89 => 
            array (
                'id' => 1590,
                'hits' => 606,
                'device_id' => 172,
                'day' => '2021-02-01',
            ),
            90 => 
            array (
                'id' => 1591,
                'hits' => 224,
                'device_id' => 172,
                'day' => '2021-03-01',
            ),
            91 => 
            array (
                'id' => 1592,
                'hits' => 179,
                'device_id' => 172,
                'day' => '2021-04-01',
            ),
            92 => 
            array (
                'id' => 1593,
                'hits' => 159,
                'device_id' => 172,
                'day' => '2021-05-01',
            ),
            93 => 
            array (
                'id' => 1594,
                'hits' => 115,
                'device_id' => 172,
                'day' => '2021-06-01',
            ),
            94 => 
            array (
                'id' => 1595,
                'hits' => 5,
                'device_id' => 173,
                'day' => '2021-02-01',
            ),
            95 => 
            array (
                'id' => 1596,
                'hits' => 3,
                'device_id' => 174,
                'day' => '2021-02-01',
            ),
            96 => 
            array (
                'id' => 1597,
                'hits' => 9,
                'device_id' => 175,
                'day' => '2021-02-01',
            ),
            97 => 
            array (
                'id' => 1598,
                'hits' => 575,
                'device_id' => 177,
                'day' => '2021-03-01',
            ),
            98 => 
            array (
                'id' => 1599,
                'hits' => 406,
                'device_id' => 177,
                'day' => '2021-04-01',
            ),
            99 => 
            array (
                'id' => 1600,
                'hits' => 283,
                'device_id' => 177,
                'day' => '2021-05-01',
            ),
            100 => 
            array (
                'id' => 1601,
                'hits' => 139,
                'device_id' => 177,
                'day' => '2021-06-01',
            ),
            101 => 
            array (
                'id' => 1602,
                'hits' => 648,
                'device_id' => 178,
                'day' => '2021-03-01',
            ),
            102 => 
            array (
                'id' => 1603,
                'hits' => 324,
                'device_id' => 178,
                'day' => '2021-04-01',
            ),
            103 => 
            array (
                'id' => 1604,
                'hits' => 193,
                'device_id' => 178,
                'day' => '2021-05-01',
            ),
            104 => 
            array (
                'id' => 1605,
                'hits' => 130,
                'device_id' => 178,
                'day' => '2021-06-01',
            ),
            105 => 
            array (
                'id' => 1606,
                'hits' => 4,
                'device_id' => 179,
                'day' => '2021-04-01',
            ),
            106 => 
            array (
                'id' => 1607,
                'hits' => 402,
                'device_id' => 180,
                'day' => '2021-05-01',
            ),
            107 => 
            array (
                'id' => 1608,
                'hits' => 967,
                'device_id' => 180,
                'day' => '2021-06-01',
            ),
            108 => 
            array (
                'id' => 1609,
                'hits' => 373,
                'device_id' => 181,
                'day' => '2021-06-01',
            ),
            109 => 
            array (
                'id' => 1610,
                'hits' => 209,
                'device_id' => 182,
                'day' => '2021-06-01',
            ),
            110 => 
            array (
                'id' => 1611,
                'hits' => 264,
                'device_id' => 183,
                'day' => '2021-06-01',
            ),
            111 => 
            array (
                'id' => 1612,
                'hits' => 117,
                'device_id' => 184,
                'day' => '2021-06-01',
            ),
            112 => 
            array (
                'id' => 1613,
                'hits' => 23,
                'device_id' => 1,
                'day' => '2021-07-01',
            ),
            113 => 
            array (
                'id' => 1614,
                'hits' => 37,
                'device_id' => 1,
                'day' => '2021-08-01',
            ),
            114 => 
            array (
                'id' => 1615,
                'hits' => 15,
                'device_id' => 1,
                'day' => '2021-09-01',
            ),
            115 => 
            array (
                'id' => 1616,
                'hits' => 28,
                'device_id' => 1,
                'day' => '2021-10-01',
            ),
            116 => 
            array (
                'id' => 1617,
                'hits' => 28,
                'device_id' => 2,
                'day' => '2021-07-01',
            ),
            117 => 
            array (
                'id' => 1618,
                'hits' => 21,
                'device_id' => 2,
                'day' => '2021-08-01',
            ),
            118 => 
            array (
                'id' => 1619,
                'hits' => 50,
                'device_id' => 2,
                'day' => '2021-09-01',
            ),
            119 => 
            array (
                'id' => 1620,
                'hits' => 25,
                'device_id' => 2,
                'day' => '2021-10-01',
            ),
            120 => 
            array (
                'id' => 1621,
                'hits' => 60,
                'device_id' => 3,
                'day' => '2021-07-01',
            ),
            121 => 
            array (
                'id' => 1622,
                'hits' => 52,
                'device_id' => 3,
                'day' => '2021-08-01',
            ),
            122 => 
            array (
                'id' => 1623,
                'hits' => 51,
                'device_id' => 3,
                'day' => '2021-09-01',
            ),
            123 => 
            array (
                'id' => 1624,
                'hits' => 52,
                'device_id' => 3,
                'day' => '2021-10-01',
            ),
            124 => 
            array (
                'id' => 1625,
                'hits' => 43,
                'device_id' => 4,
                'day' => '2021-07-01',
            ),
            125 => 
            array (
                'id' => 1626,
                'hits' => 64,
                'device_id' => 4,
                'day' => '2021-08-01',
            ),
            126 => 
            array (
                'id' => 1627,
                'hits' => 33,
                'device_id' => 4,
                'day' => '2021-09-01',
            ),
            127 => 
            array (
                'id' => 1628,
                'hits' => 49,
                'device_id' => 4,
                'day' => '2021-10-01',
            ),
            128 => 
            array (
                'id' => 1629,
                'hits' => 57,
                'device_id' => 6,
                'day' => '2021-07-01',
            ),
            129 => 
            array (
                'id' => 1630,
                'hits' => 66,
                'device_id' => 6,
                'day' => '2021-08-01',
            ),
            130 => 
            array (
                'id' => 1631,
                'hits' => 39,
                'device_id' => 6,
                'day' => '2021-09-01',
            ),
            131 => 
            array (
                'id' => 1632,
                'hits' => 46,
                'device_id' => 6,
                'day' => '2021-10-01',
            ),
            132 => 
            array (
                'id' => 1633,
                'hits' => 38,
                'device_id' => 7,
                'day' => '2021-07-01',
            ),
            133 => 
            array (
                'id' => 1634,
                'hits' => 57,
                'device_id' => 7,
                'day' => '2021-08-01',
            ),
            134 => 
            array (
                'id' => 1635,
                'hits' => 52,
                'device_id' => 7,
                'day' => '2021-09-01',
            ),
            135 => 
            array (
                'id' => 1636,
                'hits' => 82,
                'device_id' => 7,
                'day' => '2021-10-01',
            ),
            136 => 
            array (
                'id' => 1637,
                'hits' => 158,
                'device_id' => 8,
                'day' => '2021-07-01',
            ),
            137 => 
            array (
                'id' => 1638,
                'hits' => 130,
                'device_id' => 8,
                'day' => '2021-08-01',
            ),
            138 => 
            array (
                'id' => 1639,
                'hits' => 121,
                'device_id' => 8,
                'day' => '2021-09-01',
            ),
            139 => 
            array (
                'id' => 1640,
                'hits' => 160,
                'device_id' => 8,
                'day' => '2021-10-01',
            ),
            140 => 
            array (
                'id' => 1641,
                'hits' => 50,
                'device_id' => 11,
                'day' => '2021-07-01',
            ),
            141 => 
            array (
                'id' => 1642,
                'hits' => 67,
                'device_id' => 11,
                'day' => '2021-08-01',
            ),
            142 => 
            array (
                'id' => 1643,
                'hits' => 48,
                'device_id' => 11,
                'day' => '2021-09-01',
            ),
            143 => 
            array (
                'id' => 1644,
                'hits' => 60,
                'device_id' => 11,
                'day' => '2021-10-01',
            ),
            144 => 
            array (
                'id' => 1645,
                'hits' => 30,
                'device_id' => 13,
                'day' => '2021-07-01',
            ),
            145 => 
            array (
                'id' => 1646,
                'hits' => 38,
                'device_id' => 13,
                'day' => '2021-08-01',
            ),
            146 => 
            array (
                'id' => 1647,
                'hits' => 33,
                'device_id' => 13,
                'day' => '2021-09-01',
            ),
            147 => 
            array (
                'id' => 1648,
                'hits' => 41,
                'device_id' => 13,
                'day' => '2021-10-01',
            ),
            148 => 
            array (
                'id' => 1649,
                'hits' => 54,
                'device_id' => 14,
                'day' => '2021-07-01',
            ),
            149 => 
            array (
                'id' => 1650,
                'hits' => 82,
                'device_id' => 14,
                'day' => '2021-08-01',
            ),
            150 => 
            array (
                'id' => 1651,
                'hits' => 51,
                'device_id' => 14,
                'day' => '2021-09-01',
            ),
            151 => 
            array (
                'id' => 1652,
                'hits' => 50,
                'device_id' => 14,
                'day' => '2021-10-01',
            ),
            152 => 
            array (
                'id' => 1653,
                'hits' => 22,
                'device_id' => 15,
                'day' => '2021-07-01',
            ),
            153 => 
            array (
                'id' => 1654,
                'hits' => 40,
                'device_id' => 15,
                'day' => '2021-08-01',
            ),
            154 => 
            array (
                'id' => 1655,
                'hits' => 32,
                'device_id' => 15,
                'day' => '2021-09-01',
            ),
            155 => 
            array (
                'id' => 1656,
                'hits' => 34,
                'device_id' => 15,
                'day' => '2021-10-01',
            ),
            156 => 
            array (
                'id' => 1657,
                'hits' => 51,
                'device_id' => 16,
                'day' => '2021-07-01',
            ),
            157 => 
            array (
                'id' => 1658,
                'hits' => 53,
                'device_id' => 16,
                'day' => '2021-08-01',
            ),
            158 => 
            array (
                'id' => 1659,
                'hits' => 50,
                'device_id' => 16,
                'day' => '2021-09-01',
            ),
            159 => 
            array (
                'id' => 1660,
                'hits' => 46,
                'device_id' => 16,
                'day' => '2021-10-01',
            ),
            160 => 
            array (
                'id' => 1661,
                'hits' => 105,
                'device_id' => 20,
                'day' => '2021-07-01',
            ),
            161 => 
            array (
                'id' => 1662,
                'hits' => 136,
                'device_id' => 20,
                'day' => '2021-08-01',
            ),
            162 => 
            array (
                'id' => 1663,
                'hits' => 90,
                'device_id' => 20,
                'day' => '2021-09-01',
            ),
            163 => 
            array (
                'id' => 1664,
                'hits' => 67,
                'device_id' => 20,
                'day' => '2021-10-01',
            ),
            164 => 
            array (
                'id' => 1665,
                'hits' => 21,
                'device_id' => 23,
                'day' => '2021-07-01',
            ),
            165 => 
            array (
                'id' => 1666,
                'hits' => 32,
                'device_id' => 23,
                'day' => '2021-08-01',
            ),
            166 => 
            array (
                'id' => 1667,
                'hits' => 23,
                'device_id' => 23,
                'day' => '2021-09-01',
            ),
            167 => 
            array (
                'id' => 1668,
                'hits' => 51,
                'device_id' => 23,
                'day' => '2021-10-01',
            ),
            168 => 
            array (
                'id' => 1669,
                'hits' => 68,
                'device_id' => 24,
                'day' => '2021-07-01',
            ),
            169 => 
            array (
                'id' => 1670,
                'hits' => 28,
                'device_id' => 24,
                'day' => '2021-08-01',
            ),
            170 => 
            array (
                'id' => 1671,
                'hits' => 50,
                'device_id' => 24,
                'day' => '2021-09-01',
            ),
            171 => 
            array (
                'id' => 1672,
                'hits' => 57,
                'device_id' => 24,
                'day' => '2021-10-01',
            ),
            172 => 
            array (
                'id' => 1673,
                'hits' => 63,
                'device_id' => 25,
                'day' => '2021-07-01',
            ),
            173 => 
            array (
                'id' => 1674,
                'hits' => 62,
                'device_id' => 25,
                'day' => '2021-08-01',
            ),
            174 => 
            array (
                'id' => 1675,
                'hits' => 47,
                'device_id' => 25,
                'day' => '2021-09-01',
            ),
            175 => 
            array (
                'id' => 1676,
                'hits' => 52,
                'device_id' => 25,
                'day' => '2021-10-01',
            ),
            176 => 
            array (
                'id' => 1677,
                'hits' => 43,
                'device_id' => 27,
                'day' => '2021-07-01',
            ),
            177 => 
            array (
                'id' => 1678,
                'hits' => 29,
                'device_id' => 27,
                'day' => '2021-08-01',
            ),
            178 => 
            array (
                'id' => 1679,
                'hits' => 33,
                'device_id' => 27,
                'day' => '2021-09-01',
            ),
            179 => 
            array (
                'id' => 1680,
                'hits' => 29,
                'device_id' => 27,
                'day' => '2021-10-01',
            ),
            180 => 
            array (
                'id' => 1681,
                'hits' => 21,
                'device_id' => 28,
                'day' => '2021-07-01',
            ),
            181 => 
            array (
                'id' => 1682,
                'hits' => 25,
                'device_id' => 28,
                'day' => '2021-08-01',
            ),
            182 => 
            array (
                'id' => 1683,
                'hits' => 22,
                'device_id' => 28,
                'day' => '2021-09-01',
            ),
            183 => 
            array (
                'id' => 1684,
                'hits' => 24,
                'device_id' => 28,
                'day' => '2021-10-01',
            ),
            184 => 
            array (
                'id' => 1685,
                'hits' => 20,
                'device_id' => 29,
                'day' => '2021-07-01',
            ),
            185 => 
            array (
                'id' => 1686,
                'hits' => 23,
                'device_id' => 29,
                'day' => '2021-08-01',
            ),
            186 => 
            array (
                'id' => 1687,
                'hits' => 31,
                'device_id' => 29,
                'day' => '2021-09-01',
            ),
            187 => 
            array (
                'id' => 1688,
                'hits' => 34,
                'device_id' => 29,
                'day' => '2021-10-01',
            ),
            188 => 
            array (
                'id' => 1689,
                'hits' => 88,
                'device_id' => 30,
                'day' => '2021-07-01',
            ),
            189 => 
            array (
                'id' => 1690,
                'hits' => 73,
                'device_id' => 30,
                'day' => '2021-08-01',
            ),
            190 => 
            array (
                'id' => 1691,
                'hits' => 72,
                'device_id' => 30,
                'day' => '2021-09-01',
            ),
            191 => 
            array (
                'id' => 1692,
                'hits' => 50,
                'device_id' => 30,
                'day' => '2021-10-01',
            ),
            192 => 
            array (
                'id' => 1693,
                'hits' => 56,
                'device_id' => 32,
                'day' => '2021-07-01',
            ),
            193 => 
            array (
                'id' => 1694,
                'hits' => 92,
                'device_id' => 32,
                'day' => '2021-08-01',
            ),
            194 => 
            array (
                'id' => 1695,
                'hits' => 52,
                'device_id' => 32,
                'day' => '2021-09-01',
            ),
            195 => 
            array (
                'id' => 1696,
                'hits' => 64,
                'device_id' => 32,
                'day' => '2021-10-01',
            ),
            196 => 
            array (
                'id' => 1697,
                'hits' => 88,
                'device_id' => 34,
                'day' => '2021-07-01',
            ),
            197 => 
            array (
                'id' => 1698,
                'hits' => 74,
                'device_id' => 34,
                'day' => '2021-08-01',
            ),
            198 => 
            array (
                'id' => 1699,
                'hits' => 68,
                'device_id' => 34,
                'day' => '2021-09-01',
            ),
            199 => 
            array (
                'id' => 1700,
                'hits' => 45,
                'device_id' => 34,
                'day' => '2021-10-01',
            ),
            200 => 
            array (
                'id' => 1701,
                'hits' => 29,
                'device_id' => 35,
                'day' => '2021-07-01',
            ),
            201 => 
            array (
                'id' => 1702,
                'hits' => 26,
                'device_id' => 35,
                'day' => '2021-08-01',
            ),
            202 => 
            array (
                'id' => 1703,
                'hits' => 22,
                'device_id' => 35,
                'day' => '2021-09-01',
            ),
            203 => 
            array (
                'id' => 1704,
                'hits' => 26,
                'device_id' => 35,
                'day' => '2021-10-01',
            ),
            204 => 
            array (
                'id' => 1705,
                'hits' => 43,
                'device_id' => 37,
                'day' => '2021-07-01',
            ),
            205 => 
            array (
                'id' => 1706,
                'hits' => 45,
                'device_id' => 37,
                'day' => '2021-08-01',
            ),
            206 => 
            array (
                'id' => 1707,
                'hits' => 49,
                'device_id' => 37,
                'day' => '2021-09-01',
            ),
            207 => 
            array (
                'id' => 1708,
                'hits' => 77,
                'device_id' => 37,
                'day' => '2021-10-01',
            ),
            208 => 
            array (
                'id' => 1709,
                'hits' => 15,
                'device_id' => 42,
                'day' => '2021-07-01',
            ),
            209 => 
            array (
                'id' => 1710,
                'hits' => 18,
                'device_id' => 42,
                'day' => '2021-08-01',
            ),
            210 => 
            array (
                'id' => 1711,
                'hits' => 23,
                'device_id' => 42,
                'day' => '2021-09-01',
            ),
            211 => 
            array (
                'id' => 1712,
                'hits' => 27,
                'device_id' => 42,
                'day' => '2021-10-01',
            ),
            212 => 
            array (
                'id' => 1713,
                'hits' => 18,
                'device_id' => 44,
                'day' => '2021-07-01',
            ),
            213 => 
            array (
                'id' => 1714,
                'hits' => 21,
                'device_id' => 44,
                'day' => '2021-08-01',
            ),
            214 => 
            array (
                'id' => 1715,
                'hits' => 26,
                'device_id' => 44,
                'day' => '2021-09-01',
            ),
            215 => 
            array (
                'id' => 1716,
                'hits' => 26,
                'device_id' => 44,
                'day' => '2021-10-01',
            ),
            216 => 
            array (
                'id' => 1717,
                'hits' => 24,
                'device_id' => 47,
                'day' => '2021-07-01',
            ),
            217 => 
            array (
                'id' => 1718,
                'hits' => 20,
                'device_id' => 47,
                'day' => '2021-08-01',
            ),
            218 => 
            array (
                'id' => 1719,
                'hits' => 28,
                'device_id' => 47,
                'day' => '2021-09-01',
            ),
            219 => 
            array (
                'id' => 1720,
                'hits' => 25,
                'device_id' => 47,
                'day' => '2021-10-01',
            ),
            220 => 
            array (
                'id' => 1721,
                'hits' => 31,
                'device_id' => 53,
                'day' => '2021-07-01',
            ),
            221 => 
            array (
                'id' => 1722,
                'hits' => 23,
                'device_id' => 53,
                'day' => '2021-08-01',
            ),
            222 => 
            array (
                'id' => 1723,
                'hits' => 30,
                'device_id' => 53,
                'day' => '2021-09-01',
            ),
            223 => 
            array (
                'id' => 1724,
                'hits' => 39,
                'device_id' => 53,
                'day' => '2021-10-01',
            ),
            224 => 
            array (
                'id' => 1725,
                'hits' => 27,
                'device_id' => 54,
                'day' => '2021-07-01',
            ),
            225 => 
            array (
                'id' => 1726,
                'hits' => 40,
                'device_id' => 54,
                'day' => '2021-08-01',
            ),
            226 => 
            array (
                'id' => 1727,
                'hits' => 33,
                'device_id' => 54,
                'day' => '2021-09-01',
            ),
            227 => 
            array (
                'id' => 1728,
                'hits' => 54,
                'device_id' => 54,
                'day' => '2021-10-01',
            ),
            228 => 
            array (
                'id' => 1729,
                'hits' => 22,
                'device_id' => 57,
                'day' => '2021-07-01',
            ),
            229 => 
            array (
                'id' => 1730,
                'hits' => 62,
                'device_id' => 57,
                'day' => '2021-08-01',
            ),
            230 => 
            array (
                'id' => 1731,
                'hits' => 37,
                'device_id' => 57,
                'day' => '2021-09-01',
            ),
            231 => 
            array (
                'id' => 1732,
                'hits' => 35,
                'device_id' => 57,
                'day' => '2021-10-01',
            ),
            232 => 
            array (
                'id' => 1733,
                'hits' => 12,
                'device_id' => 58,
                'day' => '2021-07-01',
            ),
            233 => 
            array (
                'id' => 1734,
                'hits' => 31,
                'device_id' => 58,
                'day' => '2021-08-01',
            ),
            234 => 
            array (
                'id' => 1735,
                'hits' => 27,
                'device_id' => 58,
                'day' => '2021-09-01',
            ),
            235 => 
            array (
                'id' => 1736,
                'hits' => 42,
                'device_id' => 58,
                'day' => '2021-10-01',
            ),
            236 => 
            array (
                'id' => 1737,
                'hits' => 26,
                'device_id' => 60,
                'day' => '2021-07-01',
            ),
            237 => 
            array (
                'id' => 1738,
                'hits' => 26,
                'device_id' => 60,
                'day' => '2021-08-01',
            ),
            238 => 
            array (
                'id' => 1739,
                'hits' => 28,
                'device_id' => 60,
                'day' => '2021-09-01',
            ),
            239 => 
            array (
                'id' => 1740,
                'hits' => 40,
                'device_id' => 60,
                'day' => '2021-10-01',
            ),
            240 => 
            array (
                'id' => 1741,
                'hits' => 13,
                'device_id' => 62,
                'day' => '2021-07-01',
            ),
            241 => 
            array (
                'id' => 1742,
                'hits' => 16,
                'device_id' => 62,
                'day' => '2021-08-01',
            ),
            242 => 
            array (
                'id' => 1743,
                'hits' => 23,
                'device_id' => 62,
                'day' => '2021-09-01',
            ),
            243 => 
            array (
                'id' => 1744,
                'hits' => 25,
                'device_id' => 62,
                'day' => '2021-10-01',
            ),
            244 => 
            array (
                'id' => 1745,
                'hits' => 41,
                'device_id' => 68,
                'day' => '2021-07-01',
            ),
            245 => 
            array (
                'id' => 1746,
                'hits' => 33,
                'device_id' => 68,
                'day' => '2021-08-01',
            ),
            246 => 
            array (
                'id' => 1747,
                'hits' => 31,
                'device_id' => 68,
                'day' => '2021-09-01',
            ),
            247 => 
            array (
                'id' => 1748,
                'hits' => 44,
                'device_id' => 68,
                'day' => '2021-10-01',
            ),
            248 => 
            array (
                'id' => 1749,
                'hits' => 15,
                'device_id' => 73,
                'day' => '2021-07-01',
            ),
            249 => 
            array (
                'id' => 1750,
                'hits' => 19,
                'device_id' => 73,
                'day' => '2021-08-01',
            ),
            250 => 
            array (
                'id' => 1751,
                'hits' => 12,
                'device_id' => 73,
                'day' => '2021-09-01',
            ),
            251 => 
            array (
                'id' => 1752,
                'hits' => 15,
                'device_id' => 73,
                'day' => '2021-10-01',
            ),
            252 => 
            array (
                'id' => 1753,
                'hits' => 4,
                'device_id' => 74,
                'day' => '2021-07-01',
            ),
            253 => 
            array (
                'id' => 1754,
                'hits' => 10,
                'device_id' => 74,
                'day' => '2021-08-01',
            ),
            254 => 
            array (
                'id' => 1755,
                'hits' => 10,
                'device_id' => 74,
                'day' => '2021-09-01',
            ),
            255 => 
            array (
                'id' => 1756,
                'hits' => 7,
                'device_id' => 74,
                'day' => '2021-10-01',
            ),
            256 => 
            array (
                'id' => 1757,
                'hits' => 14,
                'device_id' => 75,
                'day' => '2021-07-01',
            ),
            257 => 
            array (
                'id' => 1758,
                'hits' => 13,
                'device_id' => 75,
                'day' => '2021-08-01',
            ),
            258 => 
            array (
                'id' => 1759,
                'hits' => 13,
                'device_id' => 75,
                'day' => '2021-09-01',
            ),
            259 => 
            array (
                'id' => 1760,
                'hits' => 14,
                'device_id' => 75,
                'day' => '2021-10-01',
            ),
            260 => 
            array (
                'id' => 1761,
                'hits' => 68,
                'device_id' => 76,
                'day' => '2021-07-01',
            ),
            261 => 
            array (
                'id' => 1762,
                'hits' => 32,
                'device_id' => 76,
                'day' => '2021-08-01',
            ),
            262 => 
            array (
                'id' => 1763,
                'hits' => 49,
                'device_id' => 76,
                'day' => '2021-09-01',
            ),
            263 => 
            array (
                'id' => 1764,
                'hits' => 52,
                'device_id' => 76,
                'day' => '2021-10-01',
            ),
            264 => 
            array (
                'id' => 1765,
                'hits' => 53,
                'device_id' => 77,
                'day' => '2021-07-01',
            ),
            265 => 
            array (
                'id' => 1766,
                'hits' => 53,
                'device_id' => 77,
                'day' => '2021-08-01',
            ),
            266 => 
            array (
                'id' => 1767,
                'hits' => 47,
                'device_id' => 77,
                'day' => '2021-09-01',
            ),
            267 => 
            array (
                'id' => 1768,
                'hits' => 41,
                'device_id' => 77,
                'day' => '2021-10-01',
            ),
            268 => 
            array (
                'id' => 1769,
                'hits' => 82,
                'device_id' => 78,
                'day' => '2021-07-01',
            ),
            269 => 
            array (
                'id' => 1770,
                'hits' => 79,
                'device_id' => 78,
                'day' => '2021-08-01',
            ),
            270 => 
            array (
                'id' => 1771,
                'hits' => 42,
                'device_id' => 78,
                'day' => '2021-09-01',
            ),
            271 => 
            array (
                'id' => 1772,
                'hits' => 51,
                'device_id' => 78,
                'day' => '2021-10-01',
            ),
            272 => 
            array (
                'id' => 1773,
                'hits' => 13,
                'device_id' => 79,
                'day' => '2021-07-01',
            ),
            273 => 
            array (
                'id' => 1774,
                'hits' => 43,
                'device_id' => 79,
                'day' => '2021-08-01',
            ),
            274 => 
            array (
                'id' => 1775,
                'hits' => 23,
                'device_id' => 79,
                'day' => '2021-09-01',
            ),
            275 => 
            array (
                'id' => 1776,
                'hits' => 54,
                'device_id' => 79,
                'day' => '2021-10-01',
            ),
            276 => 
            array (
                'id' => 1777,
                'hits' => 39,
                'device_id' => 80,
                'day' => '2021-07-01',
            ),
            277 => 
            array (
                'id' => 1778,
                'hits' => 57,
                'device_id' => 80,
                'day' => '2021-08-01',
            ),
            278 => 
            array (
                'id' => 1779,
                'hits' => 48,
                'device_id' => 80,
                'day' => '2021-09-01',
            ),
            279 => 
            array (
                'id' => 1780,
                'hits' => 42,
                'device_id' => 80,
                'day' => '2021-10-01',
            ),
            280 => 
            array (
                'id' => 1781,
                'hits' => 57,
                'device_id' => 81,
                'day' => '2021-07-01',
            ),
            281 => 
            array (
                'id' => 1782,
                'hits' => 45,
                'device_id' => 81,
                'day' => '2021-08-01',
            ),
            282 => 
            array (
                'id' => 1783,
                'hits' => 62,
                'device_id' => 81,
                'day' => '2021-09-01',
            ),
            283 => 
            array (
                'id' => 1784,
                'hits' => 77,
                'device_id' => 81,
                'day' => '2021-10-01',
            ),
            284 => 
            array (
                'id' => 1785,
                'hits' => 42,
                'device_id' => 82,
                'day' => '2021-07-01',
            ),
            285 => 
            array (
                'id' => 1786,
                'hits' => 37,
                'device_id' => 82,
                'day' => '2021-08-01',
            ),
            286 => 
            array (
                'id' => 1787,
                'hits' => 50,
                'device_id' => 82,
                'day' => '2021-09-01',
            ),
            287 => 
            array (
                'id' => 1788,
                'hits' => 61,
                'device_id' => 82,
                'day' => '2021-10-01',
            ),
            288 => 
            array (
                'id' => 1789,
                'hits' => 46,
                'device_id' => 83,
                'day' => '2021-07-01',
            ),
            289 => 
            array (
                'id' => 1790,
                'hits' => 46,
                'device_id' => 83,
                'day' => '2021-08-01',
            ),
            290 => 
            array (
                'id' => 1791,
                'hits' => 47,
                'device_id' => 83,
                'day' => '2021-09-01',
            ),
            291 => 
            array (
                'id' => 1792,
                'hits' => 46,
                'device_id' => 83,
                'day' => '2021-10-01',
            ),
            292 => 
            array (
                'id' => 1793,
                'hits' => 24,
                'device_id' => 84,
                'day' => '2021-07-01',
            ),
            293 => 
            array (
                'id' => 1794,
                'hits' => 49,
                'device_id' => 84,
                'day' => '2021-08-01',
            ),
            294 => 
            array (
                'id' => 1795,
                'hits' => 27,
                'device_id' => 84,
                'day' => '2021-09-01',
            ),
            295 => 
            array (
                'id' => 1796,
                'hits' => 27,
                'device_id' => 84,
                'day' => '2021-10-01',
            ),
            296 => 
            array (
                'id' => 1797,
                'hits' => 15,
                'device_id' => 85,
                'day' => '2021-07-01',
            ),
            297 => 
            array (
                'id' => 1798,
                'hits' => 28,
                'device_id' => 85,
                'day' => '2021-08-01',
            ),
            298 => 
            array (
                'id' => 1799,
                'hits' => 22,
                'device_id' => 85,
                'day' => '2021-09-01',
            ),
            299 => 
            array (
                'id' => 1800,
                'hits' => 34,
                'device_id' => 85,
                'day' => '2021-10-01',
            ),
            300 => 
            array (
                'id' => 1801,
                'hits' => 45,
                'device_id' => 86,
                'day' => '2021-07-01',
            ),
            301 => 
            array (
                'id' => 1802,
                'hits' => 54,
                'device_id' => 86,
                'day' => '2021-08-01',
            ),
            302 => 
            array (
                'id' => 1803,
                'hits' => 27,
                'device_id' => 86,
                'day' => '2021-09-01',
            ),
            303 => 
            array (
                'id' => 1804,
                'hits' => 30,
                'device_id' => 86,
                'day' => '2021-10-01',
            ),
            304 => 
            array (
                'id' => 1805,
                'hits' => 21,
                'device_id' => 87,
                'day' => '2021-07-01',
            ),
            305 => 
            array (
                'id' => 1806,
                'hits' => 19,
                'device_id' => 87,
                'day' => '2021-08-01',
            ),
            306 => 
            array (
                'id' => 1807,
                'hits' => 26,
                'device_id' => 87,
                'day' => '2021-09-01',
            ),
            307 => 
            array (
                'id' => 1808,
                'hits' => 28,
                'device_id' => 87,
                'day' => '2021-10-01',
            ),
            308 => 
            array (
                'id' => 1809,
                'hits' => 39,
                'device_id' => 88,
                'day' => '2021-07-01',
            ),
            309 => 
            array (
                'id' => 1810,
                'hits' => 17,
                'device_id' => 88,
                'day' => '2021-08-01',
            ),
            310 => 
            array (
                'id' => 1811,
                'hits' => 50,
                'device_id' => 88,
                'day' => '2021-09-01',
            ),
            311 => 
            array (
                'id' => 1812,
                'hits' => 35,
                'device_id' => 88,
                'day' => '2021-10-01',
            ),
            312 => 
            array (
                'id' => 1813,
                'hits' => 16,
                'device_id' => 89,
                'day' => '2021-07-01',
            ),
            313 => 
            array (
                'id' => 1814,
                'hits' => 19,
                'device_id' => 89,
                'day' => '2021-08-01',
            ),
            314 => 
            array (
                'id' => 1815,
                'hits' => 16,
                'device_id' => 89,
                'day' => '2021-09-01',
            ),
            315 => 
            array (
                'id' => 1816,
                'hits' => 17,
                'device_id' => 89,
                'day' => '2021-10-01',
            ),
            316 => 
            array (
                'id' => 1817,
                'hits' => 5,
                'device_id' => 90,
                'day' => '2021-07-01',
            ),
            317 => 
            array (
                'id' => 1818,
                'hits' => 12,
                'device_id' => 90,
                'day' => '2021-08-01',
            ),
            318 => 
            array (
                'id' => 1819,
                'hits' => 9,
                'device_id' => 90,
                'day' => '2021-09-01',
            ),
            319 => 
            array (
                'id' => 1820,
                'hits' => 6,
                'device_id' => 90,
                'day' => '2021-10-01',
            ),
            320 => 
            array (
                'id' => 1821,
                'hits' => 7,
                'device_id' => 91,
                'day' => '2021-07-01',
            ),
            321 => 
            array (
                'id' => 1822,
                'hits' => 11,
                'device_id' => 91,
                'day' => '2021-08-01',
            ),
            322 => 
            array (
                'id' => 1823,
                'hits' => 12,
                'device_id' => 91,
                'day' => '2021-09-01',
            ),
            323 => 
            array (
                'id' => 1824,
                'hits' => 11,
                'device_id' => 91,
                'day' => '2021-10-01',
            ),
            324 => 
            array (
                'id' => 1825,
                'hits' => 7,
                'device_id' => 92,
                'day' => '2021-07-01',
            ),
            325 => 
            array (
                'id' => 1826,
                'hits' => 10,
                'device_id' => 92,
                'day' => '2021-08-01',
            ),
            326 => 
            array (
                'id' => 1827,
                'hits' => 9,
                'device_id' => 92,
                'day' => '2021-09-01',
            ),
            327 => 
            array (
                'id' => 1828,
                'hits' => 11,
                'device_id' => 92,
                'day' => '2021-10-01',
            ),
            328 => 
            array (
                'id' => 1829,
                'hits' => 20,
                'device_id' => 93,
                'day' => '2021-07-01',
            ),
            329 => 
            array (
                'id' => 1830,
                'hits' => 18,
                'device_id' => 93,
                'day' => '2021-08-01',
            ),
            330 => 
            array (
                'id' => 1831,
                'hits' => 11,
                'device_id' => 93,
                'day' => '2021-09-01',
            ),
            331 => 
            array (
                'id' => 1832,
                'hits' => 16,
                'device_id' => 93,
                'day' => '2021-10-01',
            ),
            332 => 
            array (
                'id' => 1833,
                'hits' => 15,
                'device_id' => 94,
                'day' => '2021-07-01',
            ),
            333 => 
            array (
                'id' => 1834,
                'hits' => 11,
                'device_id' => 94,
                'day' => '2021-08-01',
            ),
            334 => 
            array (
                'id' => 1835,
                'hits' => 15,
                'device_id' => 94,
                'day' => '2021-09-01',
            ),
            335 => 
            array (
                'id' => 1836,
                'hits' => 16,
                'device_id' => 94,
                'day' => '2021-10-01',
            ),
            336 => 
            array (
                'id' => 1837,
                'hits' => 11,
                'device_id' => 95,
                'day' => '2021-07-01',
            ),
            337 => 
            array (
                'id' => 1838,
                'hits' => 14,
                'device_id' => 95,
                'day' => '2021-08-01',
            ),
            338 => 
            array (
                'id' => 1839,
                'hits' => 12,
                'device_id' => 95,
                'day' => '2021-09-01',
            ),
            339 => 
            array (
                'id' => 1840,
                'hits' => 11,
                'device_id' => 95,
                'day' => '2021-10-01',
            ),
            340 => 
            array (
                'id' => 1841,
                'hits' => 52,
                'device_id' => 96,
                'day' => '2021-07-01',
            ),
            341 => 
            array (
                'id' => 1842,
                'hits' => 19,
                'device_id' => 96,
                'day' => '2021-08-01',
            ),
            342 => 
            array (
                'id' => 1843,
                'hits' => 41,
                'device_id' => 96,
                'day' => '2021-09-01',
            ),
            343 => 
            array (
                'id' => 1844,
                'hits' => 37,
                'device_id' => 96,
                'day' => '2021-10-01',
            ),
            344 => 
            array (
                'id' => 1845,
                'hits' => 3,
                'device_id' => 97,
                'day' => '2021-07-01',
            ),
            345 => 
            array (
                'id' => 1846,
                'hits' => 9,
                'device_id' => 97,
                'day' => '2021-08-01',
            ),
            346 => 
            array (
                'id' => 1847,
                'hits' => 10,
                'device_id' => 97,
                'day' => '2021-09-01',
            ),
            347 => 
            array (
                'id' => 1848,
                'hits' => 11,
                'device_id' => 97,
                'day' => '2021-10-01',
            ),
            348 => 
            array (
                'id' => 1849,
                'hits' => 34,
                'device_id' => 98,
                'day' => '2021-07-01',
            ),
            349 => 
            array (
                'id' => 1850,
                'hits' => 39,
                'device_id' => 98,
                'day' => '2021-08-01',
            ),
            350 => 
            array (
                'id' => 1851,
                'hits' => 25,
                'device_id' => 98,
                'day' => '2021-09-01',
            ),
            351 => 
            array (
                'id' => 1852,
                'hits' => 38,
                'device_id' => 98,
                'day' => '2021-10-01',
            ),
            352 => 
            array (
                'id' => 1853,
                'hits' => 24,
                'device_id' => 99,
                'day' => '2021-07-01',
            ),
            353 => 
            array (
                'id' => 1854,
                'hits' => 21,
                'device_id' => 99,
                'day' => '2021-08-01',
            ),
            354 => 
            array (
                'id' => 1855,
                'hits' => 35,
                'device_id' => 99,
                'day' => '2021-09-01',
            ),
            355 => 
            array (
                'id' => 1856,
                'hits' => 32,
                'device_id' => 99,
                'day' => '2021-10-01',
            ),
            356 => 
            array (
                'id' => 1857,
                'hits' => 14,
                'device_id' => 100,
                'day' => '2021-07-01',
            ),
            357 => 
            array (
                'id' => 1858,
                'hits' => 12,
                'device_id' => 100,
                'day' => '2021-08-01',
            ),
            358 => 
            array (
                'id' => 1859,
                'hits' => 15,
                'device_id' => 100,
                'day' => '2021-09-01',
            ),
            359 => 
            array (
                'id' => 1860,
                'hits' => 10,
                'device_id' => 100,
                'day' => '2021-10-01',
            ),
            360 => 
            array (
                'id' => 1861,
                'hits' => 27,
                'device_id' => 101,
                'day' => '2021-07-01',
            ),
            361 => 
            array (
                'id' => 1862,
                'hits' => 34,
                'device_id' => 101,
                'day' => '2021-08-01',
            ),
            362 => 
            array (
                'id' => 1863,
                'hits' => 22,
                'device_id' => 101,
                'day' => '2021-09-01',
            ),
            363 => 
            array (
                'id' => 1864,
                'hits' => 28,
                'device_id' => 101,
                'day' => '2021-10-01',
            ),
            364 => 
            array (
                'id' => 1865,
                'hits' => 8,
                'device_id' => 102,
                'day' => '2021-07-01',
            ),
            365 => 
            array (
                'id' => 1866,
                'hits' => 7,
                'device_id' => 102,
                'day' => '2021-08-01',
            ),
            366 => 
            array (
                'id' => 1867,
                'hits' => 12,
                'device_id' => 102,
                'day' => '2021-09-01',
            ),
            367 => 
            array (
                'id' => 1868,
                'hits' => 9,
                'device_id' => 102,
                'day' => '2021-10-01',
            ),
            368 => 
            array (
                'id' => 1869,
                'hits' => 5,
                'device_id' => 103,
                'day' => '2021-07-01',
            ),
            369 => 
            array (
                'id' => 1870,
                'hits' => 9,
                'device_id' => 103,
                'day' => '2021-08-01',
            ),
            370 => 
            array (
                'id' => 1871,
                'hits' => 8,
                'device_id' => 103,
                'day' => '2021-09-01',
            ),
            371 => 
            array (
                'id' => 1872,
                'hits' => 10,
                'device_id' => 103,
                'day' => '2021-10-01',
            ),
            372 => 
            array (
                'id' => 1873,
                'hits' => 38,
                'device_id' => 104,
                'day' => '2021-07-01',
            ),
            373 => 
            array (
                'id' => 1874,
                'hits' => 58,
                'device_id' => 104,
                'day' => '2021-08-01',
            ),
            374 => 
            array (
                'id' => 1875,
                'hits' => 38,
                'device_id' => 104,
                'day' => '2021-09-01',
            ),
            375 => 
            array (
                'id' => 1876,
                'hits' => 26,
                'device_id' => 104,
                'day' => '2021-10-01',
            ),
            376 => 
            array (
                'id' => 1877,
                'hits' => 12,
                'device_id' => 105,
                'day' => '2021-07-01',
            ),
            377 => 
            array (
                'id' => 1878,
                'hits' => 11,
                'device_id' => 105,
                'day' => '2021-08-01',
            ),
            378 => 
            array (
                'id' => 1879,
                'hits' => 11,
                'device_id' => 105,
                'day' => '2021-09-01',
            ),
            379 => 
            array (
                'id' => 1880,
                'hits' => 13,
                'device_id' => 105,
                'day' => '2021-10-01',
            ),
            380 => 
            array (
                'id' => 1881,
                'hits' => 118,
                'device_id' => 106,
                'day' => '2021-07-01',
            ),
            381 => 
            array (
                'id' => 1882,
                'hits' => 78,
                'device_id' => 106,
                'day' => '2021-08-01',
            ),
            382 => 
            array (
                'id' => 1883,
                'hits' => 56,
                'device_id' => 106,
                'day' => '2021-09-01',
            ),
            383 => 
            array (
                'id' => 1884,
                'hits' => 109,
                'device_id' => 106,
                'day' => '2021-10-01',
            ),
            384 => 
            array (
                'id' => 1885,
                'hits' => 152,
                'device_id' => 107,
                'day' => '2021-07-01',
            ),
            385 => 
            array (
                'id' => 1886,
                'hits' => 144,
                'device_id' => 107,
                'day' => '2021-08-01',
            ),
            386 => 
            array (
                'id' => 1887,
                'hits' => 161,
                'device_id' => 107,
                'day' => '2021-09-01',
            ),
            387 => 
            array (
                'id' => 1888,
                'hits' => 129,
                'device_id' => 107,
                'day' => '2021-10-01',
            ),
            388 => 
            array (
                'id' => 1889,
                'hits' => 16,
                'device_id' => 112,
                'day' => '2021-07-01',
            ),
            389 => 
            array (
                'id' => 1890,
                'hits' => 26,
                'device_id' => 112,
                'day' => '2021-08-01',
            ),
            390 => 
            array (
                'id' => 1891,
                'hits' => 28,
                'device_id' => 112,
                'day' => '2021-09-01',
            ),
            391 => 
            array (
                'id' => 1892,
                'hits' => 39,
                'device_id' => 112,
                'day' => '2021-10-01',
            ),
            392 => 
            array (
                'id' => 1893,
                'hits' => 19,
                'device_id' => 113,
                'day' => '2021-07-01',
            ),
            393 => 
            array (
                'id' => 1894,
                'hits' => 17,
                'device_id' => 113,
                'day' => '2021-08-01',
            ),
            394 => 
            array (
                'id' => 1895,
                'hits' => 24,
                'device_id' => 113,
                'day' => '2021-09-01',
            ),
            395 => 
            array (
                'id' => 1896,
                'hits' => 19,
                'device_id' => 113,
                'day' => '2021-10-01',
            ),
            396 => 
            array (
                'id' => 1897,
                'hits' => 13,
                'device_id' => 114,
                'day' => '2021-07-01',
            ),
            397 => 
            array (
                'id' => 1898,
                'hits' => 11,
                'device_id' => 114,
                'day' => '2021-08-01',
            ),
            398 => 
            array (
                'id' => 1899,
                'hits' => 15,
                'device_id' => 114,
                'day' => '2021-09-01',
            ),
            399 => 
            array (
                'id' => 1900,
                'hits' => 13,
                'device_id' => 114,
                'day' => '2021-10-01',
            ),
            400 => 
            array (
                'id' => 1901,
                'hits' => 53,
                'device_id' => 115,
                'day' => '2021-07-01',
            ),
            401 => 
            array (
                'id' => 1902,
                'hits' => 52,
                'device_id' => 115,
                'day' => '2021-08-01',
            ),
            402 => 
            array (
                'id' => 1903,
                'hits' => 56,
                'device_id' => 115,
                'day' => '2021-09-01',
            ),
            403 => 
            array (
                'id' => 1904,
                'hits' => 47,
                'device_id' => 115,
                'day' => '2021-10-01',
            ),
            404 => 
            array (
                'id' => 1905,
                'hits' => 26,
                'device_id' => 116,
                'day' => '2021-07-01',
            ),
            405 => 
            array (
                'id' => 1906,
                'hits' => 14,
                'device_id' => 116,
                'day' => '2021-08-01',
            ),
            406 => 
            array (
                'id' => 1907,
                'hits' => 19,
                'device_id' => 116,
                'day' => '2021-09-01',
            ),
            407 => 
            array (
                'id' => 1908,
                'hits' => 22,
                'device_id' => 116,
                'day' => '2021-10-01',
            ),
            408 => 
            array (
                'id' => 1909,
                'hits' => 21,
                'device_id' => 117,
                'day' => '2021-07-01',
            ),
            409 => 
            array (
                'id' => 1910,
                'hits' => 30,
                'device_id' => 117,
                'day' => '2021-08-01',
            ),
            410 => 
            array (
                'id' => 1911,
                'hits' => 33,
                'device_id' => 117,
                'day' => '2021-09-01',
            ),
            411 => 
            array (
                'id' => 1912,
                'hits' => 33,
                'device_id' => 117,
                'day' => '2021-10-01',
            ),
            412 => 
            array (
                'id' => 1913,
                'hits' => 38,
                'device_id' => 118,
                'day' => '2021-07-01',
            ),
            413 => 
            array (
                'id' => 1914,
                'hits' => 39,
                'device_id' => 118,
                'day' => '2021-08-01',
            ),
            414 => 
            array (
                'id' => 1915,
                'hits' => 32,
                'device_id' => 118,
                'day' => '2021-09-01',
            ),
            415 => 
            array (
                'id' => 1916,
                'hits' => 32,
                'device_id' => 118,
                'day' => '2021-10-01',
            ),
            416 => 
            array (
                'id' => 1917,
                'hits' => 29,
                'device_id' => 119,
                'day' => '2021-07-01',
            ),
            417 => 
            array (
                'id' => 1918,
                'hits' => 22,
                'device_id' => 119,
                'day' => '2021-08-01',
            ),
            418 => 
            array (
                'id' => 1919,
                'hits' => 26,
                'device_id' => 119,
                'day' => '2021-09-01',
            ),
            419 => 
            array (
                'id' => 1920,
                'hits' => 43,
                'device_id' => 119,
                'day' => '2021-10-01',
            ),
            420 => 
            array (
                'id' => 1921,
                'hits' => 23,
                'device_id' => 120,
                'day' => '2021-07-01',
            ),
            421 => 
            array (
                'id' => 1922,
                'hits' => 30,
                'device_id' => 120,
                'day' => '2021-08-01',
            ),
            422 => 
            array (
                'id' => 1923,
                'hits' => 25,
                'device_id' => 120,
                'day' => '2021-09-01',
            ),
            423 => 
            array (
                'id' => 1924,
                'hits' => 30,
                'device_id' => 120,
                'day' => '2021-10-01',
            ),
            424 => 
            array (
                'id' => 1925,
                'hits' => 24,
                'device_id' => 121,
                'day' => '2021-07-01',
            ),
            425 => 
            array (
                'id' => 1926,
                'hits' => 23,
                'device_id' => 121,
                'day' => '2021-08-01',
            ),
            426 => 
            array (
                'id' => 1927,
                'hits' => 20,
                'device_id' => 121,
                'day' => '2021-09-01',
            ),
            427 => 
            array (
                'id' => 1928,
                'hits' => 27,
                'device_id' => 121,
                'day' => '2021-10-01',
            ),
            428 => 
            array (
                'id' => 1929,
                'hits' => 33,
                'device_id' => 122,
                'day' => '2021-07-01',
            ),
            429 => 
            array (
                'id' => 1930,
                'hits' => 28,
                'device_id' => 122,
                'day' => '2021-08-01',
            ),
            430 => 
            array (
                'id' => 1931,
                'hits' => 30,
                'device_id' => 122,
                'day' => '2021-09-01',
            ),
            431 => 
            array (
                'id' => 1932,
                'hits' => 27,
                'device_id' => 122,
                'day' => '2021-10-01',
            ),
            432 => 
            array (
                'id' => 1933,
                'hits' => 51,
                'device_id' => 123,
                'day' => '2021-07-01',
            ),
            433 => 
            array (
                'id' => 1934,
                'hits' => 19,
                'device_id' => 123,
                'day' => '2021-08-01',
            ),
            434 => 
            array (
                'id' => 1935,
                'hits' => 31,
                'device_id' => 123,
                'day' => '2021-09-01',
            ),
            435 => 
            array (
                'id' => 1936,
                'hits' => 31,
                'device_id' => 123,
                'day' => '2021-10-01',
            ),
            436 => 
            array (
                'id' => 1937,
                'hits' => 46,
                'device_id' => 124,
                'day' => '2021-07-01',
            ),
            437 => 
            array (
                'id' => 1938,
                'hits' => 43,
                'device_id' => 124,
                'day' => '2021-08-01',
            ),
            438 => 
            array (
                'id' => 1939,
                'hits' => 25,
                'device_id' => 124,
                'day' => '2021-09-01',
            ),
            439 => 
            array (
                'id' => 1940,
                'hits' => 27,
                'device_id' => 124,
                'day' => '2021-10-01',
            ),
            440 => 
            array (
                'id' => 1941,
                'hits' => 149,
                'device_id' => 125,
                'day' => '2021-07-01',
            ),
            441 => 
            array (
                'id' => 1942,
                'hits' => 181,
                'device_id' => 125,
                'day' => '2021-08-01',
            ),
            442 => 
            array (
                'id' => 1943,
                'hits' => 162,
                'device_id' => 125,
                'day' => '2021-09-01',
            ),
            443 => 
            array (
                'id' => 1944,
                'hits' => 129,
                'device_id' => 125,
                'day' => '2021-10-01',
            ),
            444 => 
            array (
                'id' => 1945,
                'hits' => 72,
                'device_id' => 126,
                'day' => '2021-07-01',
            ),
            445 => 
            array (
                'id' => 1946,
                'hits' => 117,
                'device_id' => 126,
                'day' => '2021-08-01',
            ),
            446 => 
            array (
                'id' => 1947,
                'hits' => 68,
                'device_id' => 126,
                'day' => '2021-09-01',
            ),
            447 => 
            array (
                'id' => 1948,
                'hits' => 79,
                'device_id' => 126,
                'day' => '2021-10-01',
            ),
            448 => 
            array (
                'id' => 1949,
                'hits' => 32,
                'device_id' => 127,
                'day' => '2021-07-01',
            ),
            449 => 
            array (
                'id' => 1950,
                'hits' => 30,
                'device_id' => 127,
                'day' => '2021-08-01',
            ),
            450 => 
            array (
                'id' => 1951,
                'hits' => 30,
                'device_id' => 127,
                'day' => '2021-09-01',
            ),
            451 => 
            array (
                'id' => 1952,
                'hits' => 34,
                'device_id' => 127,
                'day' => '2021-10-01',
            ),
            452 => 
            array (
                'id' => 1953,
                'hits' => 178,
                'device_id' => 128,
                'day' => '2021-07-01',
            ),
            453 => 
            array (
                'id' => 1954,
                'hits' => 114,
                'device_id' => 128,
                'day' => '2021-08-01',
            ),
            454 => 
            array (
                'id' => 1955,
                'hits' => 113,
                'device_id' => 128,
                'day' => '2021-09-01',
            ),
            455 => 
            array (
                'id' => 1956,
                'hits' => 69,
                'device_id' => 128,
                'day' => '2021-10-01',
            ),
            456 => 
            array (
                'id' => 1957,
                'hits' => 129,
                'device_id' => 129,
                'day' => '2021-07-01',
            ),
            457 => 
            array (
                'id' => 1958,
                'hits' => 68,
                'device_id' => 129,
                'day' => '2021-08-01',
            ),
            458 => 
            array (
                'id' => 1959,
                'hits' => 52,
                'device_id' => 129,
                'day' => '2021-09-01',
            ),
            459 => 
            array (
                'id' => 1960,
                'hits' => 78,
                'device_id' => 129,
                'day' => '2021-10-01',
            ),
            460 => 
            array (
                'id' => 1961,
                'hits' => 222,
                'device_id' => 131,
                'day' => '2021-07-01',
            ),
            461 => 
            array (
                'id' => 1962,
                'hits' => 212,
                'device_id' => 131,
                'day' => '2021-08-01',
            ),
            462 => 
            array (
                'id' => 1963,
                'hits' => 196,
                'device_id' => 131,
                'day' => '2021-09-01',
            ),
            463 => 
            array (
                'id' => 1964,
                'hits' => 190,
                'device_id' => 131,
                'day' => '2021-10-01',
            ),
            464 => 
            array (
                'id' => 1965,
                'hits' => 68,
                'device_id' => 132,
                'day' => '2021-07-01',
            ),
            465 => 
            array (
                'id' => 1966,
                'hits' => 96,
                'device_id' => 132,
                'day' => '2021-08-01',
            ),
            466 => 
            array (
                'id' => 1967,
                'hits' => 79,
                'device_id' => 132,
                'day' => '2021-09-01',
            ),
            467 => 
            array (
                'id' => 1968,
                'hits' => 85,
                'device_id' => 132,
                'day' => '2021-10-01',
            ),
            468 => 
            array (
                'id' => 1969,
                'hits' => 95,
                'device_id' => 136,
                'day' => '2021-07-01',
            ),
            469 => 
            array (
                'id' => 1970,
                'hits' => 87,
                'device_id' => 136,
                'day' => '2021-08-01',
            ),
            470 => 
            array (
                'id' => 1971,
                'hits' => 78,
                'device_id' => 136,
                'day' => '2021-09-01',
            ),
            471 => 
            array (
                'id' => 1972,
                'hits' => 71,
                'device_id' => 136,
                'day' => '2021-10-01',
            ),
            472 => 
            array (
                'id' => 1973,
                'hits' => 25,
                'device_id' => 138,
                'day' => '2021-07-01',
            ),
            473 => 
            array (
                'id' => 1974,
                'hits' => 44,
                'device_id' => 138,
                'day' => '2021-08-01',
            ),
            474 => 
            array (
                'id' => 1975,
                'hits' => 43,
                'device_id' => 138,
                'day' => '2021-09-01',
            ),
            475 => 
            array (
                'id' => 1976,
                'hits' => 51,
                'device_id' => 138,
                'day' => '2021-10-01',
            ),
            476 => 
            array (
                'id' => 1977,
                'hits' => 75,
                'device_id' => 139,
                'day' => '2021-07-01',
            ),
            477 => 
            array (
                'id' => 1978,
                'hits' => 34,
                'device_id' => 139,
                'day' => '2021-08-01',
            ),
            478 => 
            array (
                'id' => 1979,
                'hits' => 48,
                'device_id' => 139,
                'day' => '2021-09-01',
            ),
            479 => 
            array (
                'id' => 1980,
                'hits' => 32,
                'device_id' => 139,
                'day' => '2021-10-01',
            ),
            480 => 
            array (
                'id' => 1981,
                'hits' => 28,
                'device_id' => 140,
                'day' => '2021-07-01',
            ),
            481 => 
            array (
                'id' => 1982,
                'hits' => 30,
                'device_id' => 140,
                'day' => '2021-08-01',
            ),
            482 => 
            array (
                'id' => 1983,
                'hits' => 23,
                'device_id' => 140,
                'day' => '2021-09-01',
            ),
            483 => 
            array (
                'id' => 1984,
                'hits' => 17,
                'device_id' => 140,
                'day' => '2021-10-01',
            ),
            484 => 
            array (
                'id' => 1985,
                'hits' => 712,
                'device_id' => 141,
                'day' => '2021-07-01',
            ),
            485 => 
            array (
                'id' => 1986,
                'hits' => 298,
                'device_id' => 141,
                'day' => '2021-08-01',
            ),
            486 => 
            array (
                'id' => 1987,
                'hits' => 234,
                'device_id' => 141,
                'day' => '2021-09-01',
            ),
            487 => 
            array (
                'id' => 1988,
                'hits' => 168,
                'device_id' => 141,
                'day' => '2021-10-01',
            ),
            488 => 
            array (
                'id' => 1989,
                'hits' => 29,
                'device_id' => 142,
                'day' => '2021-07-01',
            ),
            489 => 
            array (
                'id' => 1990,
                'hits' => 47,
                'device_id' => 142,
                'day' => '2021-08-01',
            ),
            490 => 
            array (
                'id' => 1991,
                'hits' => 26,
                'device_id' => 142,
                'day' => '2021-09-01',
            ),
            491 => 
            array (
                'id' => 1992,
                'hits' => 21,
                'device_id' => 142,
                'day' => '2021-10-01',
            ),
            492 => 
            array (
                'id' => 1993,
                'hits' => 79,
                'device_id' => 143,
                'day' => '2021-07-01',
            ),
            493 => 
            array (
                'id' => 1994,
                'hits' => 70,
                'device_id' => 143,
                'day' => '2021-08-01',
            ),
            494 => 
            array (
                'id' => 1995,
                'hits' => 50,
                'device_id' => 143,
                'day' => '2021-09-01',
            ),
            495 => 
            array (
                'id' => 1996,
                'hits' => 42,
                'device_id' => 143,
                'day' => '2021-10-01',
            ),
            496 => 
            array (
                'id' => 1997,
                'hits' => 174,
                'device_id' => 146,
                'day' => '2021-07-01',
            ),
            497 => 
            array (
                'id' => 1998,
                'hits' => 190,
                'device_id' => 146,
                'day' => '2021-08-01',
            ),
            498 => 
            array (
                'id' => 1999,
                'hits' => 153,
                'device_id' => 146,
                'day' => '2021-09-01',
            ),
            499 => 
            array (
                'id' => 2000,
                'hits' => 173,
                'device_id' => 146,
                'day' => '2021-10-01',
            ),
        ));
        \DB::table('device_statistics')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'hits' => 110,
                'device_id' => 147,
                'day' => '2021-07-01',
            ),
            1 => 
            array (
                'id' => 2002,
                'hits' => 104,
                'device_id' => 147,
                'day' => '2021-08-01',
            ),
            2 => 
            array (
                'id' => 2003,
                'hits' => 50,
                'device_id' => 147,
                'day' => '2021-09-01',
            ),
            3 => 
            array (
                'id' => 2004,
                'hits' => 59,
                'device_id' => 147,
                'day' => '2021-10-01',
            ),
            4 => 
            array (
                'id' => 2005,
                'hits' => 207,
                'device_id' => 148,
                'day' => '2021-07-01',
            ),
            5 => 
            array (
                'id' => 2006,
                'hits' => 168,
                'device_id' => 148,
                'day' => '2021-08-01',
            ),
            6 => 
            array (
                'id' => 2007,
                'hits' => 142,
                'device_id' => 148,
                'day' => '2021-09-01',
            ),
            7 => 
            array (
                'id' => 2008,
                'hits' => 116,
                'device_id' => 148,
                'day' => '2021-10-01',
            ),
            8 => 
            array (
                'id' => 2009,
                'hits' => 101,
                'device_id' => 149,
                'day' => '2021-07-01',
            ),
            9 => 
            array (
                'id' => 2010,
                'hits' => 76,
                'device_id' => 149,
                'day' => '2021-08-01',
            ),
            10 => 
            array (
                'id' => 2011,
                'hits' => 88,
                'device_id' => 149,
                'day' => '2021-09-01',
            ),
            11 => 
            array (
                'id' => 2012,
                'hits' => 68,
                'device_id' => 149,
                'day' => '2021-10-01',
            ),
            12 => 
            array (
                'id' => 2013,
                'hits' => 250,
                'device_id' => 150,
                'day' => '2021-07-01',
            ),
            13 => 
            array (
                'id' => 2014,
                'hits' => 314,
                'device_id' => 150,
                'day' => '2021-08-01',
            ),
            14 => 
            array (
                'id' => 2015,
                'hits' => 216,
                'device_id' => 150,
                'day' => '2021-09-01',
            ),
            15 => 
            array (
                'id' => 2016,
                'hits' => 148,
                'device_id' => 150,
                'day' => '2021-10-01',
            ),
            16 => 
            array (
                'id' => 2017,
                'hits' => 1,
                'device_id' => 151,
                'day' => '2021-10-01',
            ),
            17 => 
            array (
                'id' => 2018,
                'hits' => 27,
                'device_id' => 156,
                'day' => '2021-07-01',
            ),
            18 => 
            array (
                'id' => 2019,
                'hits' => 47,
                'device_id' => 156,
                'day' => '2021-08-01',
            ),
            19 => 
            array (
                'id' => 2020,
                'hits' => 23,
                'device_id' => 156,
                'day' => '2021-09-01',
            ),
            20 => 
            array (
                'id' => 2021,
                'hits' => 26,
                'device_id' => 156,
                'day' => '2021-10-01',
            ),
            21 => 
            array (
                'id' => 2022,
                'hits' => 116,
                'device_id' => 157,
                'day' => '2021-07-01',
            ),
            22 => 
            array (
                'id' => 2023,
                'hits' => 107,
                'device_id' => 157,
                'day' => '2021-08-01',
            ),
            23 => 
            array (
                'id' => 2024,
                'hits' => 136,
                'device_id' => 157,
                'day' => '2021-09-01',
            ),
            24 => 
            array (
                'id' => 2025,
                'hits' => 92,
                'device_id' => 157,
                'day' => '2021-10-01',
            ),
            25 => 
            array (
                'id' => 2026,
                'hits' => 3,
                'device_id' => 158,
                'day' => '2021-09-01',
            ),
            26 => 
            array (
                'id' => 2027,
                'hits' => 160,
                'device_id' => 159,
                'day' => '2021-07-01',
            ),
            27 => 
            array (
                'id' => 2028,
                'hits' => 150,
                'device_id' => 159,
                'day' => '2021-08-01',
            ),
            28 => 
            array (
                'id' => 2029,
                'hits' => 139,
                'device_id' => 159,
                'day' => '2021-09-01',
            ),
            29 => 
            array (
                'id' => 2030,
                'hits' => 112,
                'device_id' => 159,
                'day' => '2021-10-01',
            ),
            30 => 
            array (
                'id' => 2031,
                'hits' => 173,
                'device_id' => 160,
                'day' => '2021-07-01',
            ),
            31 => 
            array (
                'id' => 2032,
                'hits' => 225,
                'device_id' => 160,
                'day' => '2021-08-01',
            ),
            32 => 
            array (
                'id' => 2033,
                'hits' => 180,
                'device_id' => 160,
                'day' => '2021-09-01',
            ),
            33 => 
            array (
                'id' => 2034,
                'hits' => 95,
                'device_id' => 160,
                'day' => '2021-10-01',
            ),
            34 => 
            array (
                'id' => 2035,
                'hits' => 468,
                'device_id' => 161,
                'day' => '2021-07-01',
            ),
            35 => 
            array (
                'id' => 2036,
                'hits' => 456,
                'device_id' => 161,
                'day' => '2021-08-01',
            ),
            36 => 
            array (
                'id' => 2037,
                'hits' => 367,
                'device_id' => 161,
                'day' => '2021-09-01',
            ),
            37 => 
            array (
                'id' => 2038,
                'hits' => 319,
                'device_id' => 161,
                'day' => '2021-10-01',
            ),
            38 => 
            array (
                'id' => 2039,
                'hits' => 292,
                'device_id' => 162,
                'day' => '2021-07-01',
            ),
            39 => 
            array (
                'id' => 2040,
                'hits' => 263,
                'device_id' => 162,
                'day' => '2021-08-01',
            ),
            40 => 
            array (
                'id' => 2041,
                'hits' => 205,
                'device_id' => 162,
                'day' => '2021-09-01',
            ),
            41 => 
            array (
                'id' => 2042,
                'hits' => 191,
                'device_id' => 162,
                'day' => '2021-10-01',
            ),
            42 => 
            array (
                'id' => 2043,
                'hits' => 166,
                'device_id' => 163,
                'day' => '2021-07-01',
            ),
            43 => 
            array (
                'id' => 2044,
                'hits' => 186,
                'device_id' => 163,
                'day' => '2021-08-01',
            ),
            44 => 
            array (
                'id' => 2045,
                'hits' => 111,
                'device_id' => 163,
                'day' => '2021-09-01',
            ),
            45 => 
            array (
                'id' => 2046,
                'hits' => 109,
                'device_id' => 163,
                'day' => '2021-10-01',
            ),
            46 => 
            array (
                'id' => 2047,
                'hits' => 287,
                'device_id' => 164,
                'day' => '2021-07-01',
            ),
            47 => 
            array (
                'id' => 2048,
                'hits' => 284,
                'device_id' => 164,
                'day' => '2021-08-01',
            ),
            48 => 
            array (
                'id' => 2049,
                'hits' => 215,
                'device_id' => 164,
                'day' => '2021-09-01',
            ),
            49 => 
            array (
                'id' => 2050,
                'hits' => 152,
                'device_id' => 164,
                'day' => '2021-10-01',
            ),
            50 => 
            array (
                'id' => 2051,
                'hits' => 414,
                'device_id' => 168,
                'day' => '2021-07-01',
            ),
            51 => 
            array (
                'id' => 2052,
                'hits' => 431,
                'device_id' => 168,
                'day' => '2021-08-01',
            ),
            52 => 
            array (
                'id' => 2053,
                'hits' => 330,
                'device_id' => 168,
                'day' => '2021-09-01',
            ),
            53 => 
            array (
                'id' => 2054,
                'hits' => 264,
                'device_id' => 168,
                'day' => '2021-10-01',
            ),
            54 => 
            array (
                'id' => 2055,
                'hits' => 1,
                'device_id' => 169,
                'day' => '2021-09-01',
            ),
            55 => 
            array (
                'id' => 2056,
                'hits' => 177,
                'device_id' => 172,
                'day' => '2021-07-01',
            ),
            56 => 
            array (
                'id' => 2057,
                'hits' => 160,
                'device_id' => 172,
                'day' => '2021-08-01',
            ),
            57 => 
            array (
                'id' => 2058,
                'hits' => 153,
                'device_id' => 172,
                'day' => '2021-09-01',
            ),
            58 => 
            array (
                'id' => 2059,
                'hits' => 123,
                'device_id' => 172,
                'day' => '2021-10-01',
            ),
            59 => 
            array (
                'id' => 2060,
                'hits' => 1,
                'device_id' => 174,
                'day' => '2021-07-01',
            ),
            60 => 
            array (
                'id' => 2061,
                'hits' => 3,
                'device_id' => 175,
                'day' => '2021-09-01',
            ),
            61 => 
            array (
                'id' => 2062,
                'hits' => 188,
                'device_id' => 177,
                'day' => '2021-07-01',
            ),
            62 => 
            array (
                'id' => 2063,
                'hits' => 192,
                'device_id' => 177,
                'day' => '2021-08-01',
            ),
            63 => 
            array (
                'id' => 2064,
                'hits' => 170,
                'device_id' => 177,
                'day' => '2021-09-01',
            ),
            64 => 
            array (
                'id' => 2065,
                'hits' => 108,
                'device_id' => 177,
                'day' => '2021-10-01',
            ),
            65 => 
            array (
                'id' => 2066,
                'hits' => 169,
                'device_id' => 178,
                'day' => '2021-07-01',
            ),
            66 => 
            array (
                'id' => 2067,
                'hits' => 152,
                'device_id' => 178,
                'day' => '2021-08-01',
            ),
            67 => 
            array (
                'id' => 2068,
                'hits' => 201,
                'device_id' => 178,
                'day' => '2021-09-01',
            ),
            68 => 
            array (
                'id' => 2069,
                'hits' => 145,
                'device_id' => 178,
                'day' => '2021-10-01',
            ),
            69 => 
            array (
                'id' => 2070,
                'hits' => 358,
                'device_id' => 180,
                'day' => '2021-07-01',
            ),
            70 => 
            array (
                'id' => 2071,
                'hits' => 282,
                'device_id' => 180,
                'day' => '2021-08-01',
            ),
            71 => 
            array (
                'id' => 2072,
                'hits' => 155,
                'device_id' => 180,
                'day' => '2021-09-01',
            ),
            72 => 
            array (
                'id' => 2073,
                'hits' => 151,
                'device_id' => 180,
                'day' => '2021-10-01',
            ),
            73 => 
            array (
                'id' => 2074,
                'hits' => 266,
                'device_id' => 181,
                'day' => '2021-07-01',
            ),
            74 => 
            array (
                'id' => 2075,
                'hits' => 197,
                'device_id' => 181,
                'day' => '2021-08-01',
            ),
            75 => 
            array (
                'id' => 2076,
                'hits' => 142,
                'device_id' => 181,
                'day' => '2021-09-01',
            ),
            76 => 
            array (
                'id' => 2077,
                'hits' => 116,
                'device_id' => 181,
                'day' => '2021-10-01',
            ),
            77 => 
            array (
                'id' => 2078,
                'hits' => 271,
                'device_id' => 182,
                'day' => '2021-07-01',
            ),
            78 => 
            array (
                'id' => 2079,
                'hits' => 292,
                'device_id' => 182,
                'day' => '2021-08-01',
            ),
            79 => 
            array (
                'id' => 2080,
                'hits' => 139,
                'device_id' => 182,
                'day' => '2021-09-01',
            ),
            80 => 
            array (
                'id' => 2081,
                'hits' => 89,
                'device_id' => 182,
                'day' => '2021-10-01',
            ),
            81 => 
            array (
                'id' => 2082,
                'hits' => 244,
                'device_id' => 183,
                'day' => '2021-07-01',
            ),
            82 => 
            array (
                'id' => 2083,
                'hits' => 198,
                'device_id' => 183,
                'day' => '2021-08-01',
            ),
            83 => 
            array (
                'id' => 2084,
                'hits' => 181,
                'device_id' => 183,
                'day' => '2021-09-01',
            ),
            84 => 
            array (
                'id' => 2085,
                'hits' => 119,
                'device_id' => 183,
                'day' => '2021-10-01',
            ),
            85 => 
            array (
                'id' => 2086,
                'hits' => 209,
                'device_id' => 184,
                'day' => '2021-07-01',
            ),
            86 => 
            array (
                'id' => 2087,
                'hits' => 165,
                'device_id' => 184,
                'day' => '2021-08-01',
            ),
            87 => 
            array (
                'id' => 2088,
                'hits' => 99,
                'device_id' => 184,
                'day' => '2021-09-01',
            ),
            88 => 
            array (
                'id' => 2089,
                'hits' => 108,
                'device_id' => 184,
                'day' => '2021-10-01',
            ),
            89 => 
            array (
                'id' => 2090,
                'hits' => 963,
                'device_id' => 185,
                'day' => '2021-08-01',
            ),
            90 => 
            array (
                'id' => 2091,
                'hits' => 238,
                'device_id' => 185,
                'day' => '2021-09-01',
            ),
            91 => 
            array (
                'id' => 2092,
                'hits' => 120,
                'device_id' => 185,
                'day' => '2021-10-01',
            ),
            92 => 
            array (
                'id' => 2093,
                'hits' => 4,
                'device_id' => 186,
                'day' => '2021-09-01',
            ),
            93 => 
            array (
                'id' => 2094,
                'hits' => 2,
                'device_id' => 187,
                'day' => '2021-09-01',
            ),
            94 => 
            array (
                'id' => 2095,
                'hits' => 2,
                'device_id' => 188,
                'day' => '2021-10-01',
            ),
            95 => 
            array (
                'id' => 2096,
                'hits' => 917,
                'device_id' => 189,
                'day' => '2021-10-01',
            ),
            96 => 
            array (
                'id' => 2097,
                'hits' => 18,
                'device_id' => 1,
                'day' => '2021-11-01',
            ),
            97 => 
            array (
                'id' => 2098,
                'hits' => 20,
                'device_id' => 1,
                'day' => '2021-12-01',
            ),
            98 => 
            array (
                'id' => 2101,
                'hits' => 23,
                'device_id' => 2,
                'day' => '2021-11-01',
            ),
            99 => 
            array (
                'id' => 2102,
                'hits' => 31,
                'device_id' => 2,
                'day' => '2021-12-01',
            ),
            100 => 
            array (
                'id' => 2105,
                'hits' => 78,
                'device_id' => 3,
                'day' => '2021-11-01',
            ),
            101 => 
            array (
                'id' => 2106,
                'hits' => 67,
                'device_id' => 3,
                'day' => '2021-12-01',
            ),
            102 => 
            array (
                'id' => 2109,
                'hits' => 48,
                'device_id' => 4,
                'day' => '2021-11-01',
            ),
            103 => 
            array (
                'id' => 2110,
                'hits' => 43,
                'device_id' => 4,
                'day' => '2021-12-01',
            ),
            104 => 
            array (
                'id' => 2113,
                'hits' => 46,
                'device_id' => 6,
                'day' => '2021-11-01',
            ),
            105 => 
            array (
                'id' => 2114,
                'hits' => 36,
                'device_id' => 6,
                'day' => '2021-12-01',
            ),
            106 => 
            array (
                'id' => 2117,
                'hits' => 75,
                'device_id' => 7,
                'day' => '2021-11-01',
            ),
            107 => 
            array (
                'id' => 2118,
                'hits' => 37,
                'device_id' => 7,
                'day' => '2021-12-01',
            ),
            108 => 
            array (
                'id' => 2121,
                'hits' => 208,
                'device_id' => 8,
                'day' => '2021-11-01',
            ),
            109 => 
            array (
                'id' => 2122,
                'hits' => 85,
                'device_id' => 8,
                'day' => '2021-12-01',
            ),
            110 => 
            array (
                'id' => 2125,
                'hits' => 54,
                'device_id' => 11,
                'day' => '2021-11-01',
            ),
            111 => 
            array (
                'id' => 2126,
                'hits' => 73,
                'device_id' => 11,
                'day' => '2021-12-01',
            ),
            112 => 
            array (
                'id' => 2129,
                'hits' => 44,
                'device_id' => 13,
                'day' => '2021-11-01',
            ),
            113 => 
            array (
                'id' => 2130,
                'hits' => 25,
                'device_id' => 13,
                'day' => '2021-12-01',
            ),
            114 => 
            array (
                'id' => 2133,
                'hits' => 34,
                'device_id' => 14,
                'day' => '2021-11-01',
            ),
            115 => 
            array (
                'id' => 2134,
                'hits' => 31,
                'device_id' => 14,
                'day' => '2021-12-01',
            ),
            116 => 
            array (
                'id' => 2137,
                'hits' => 49,
                'device_id' => 15,
                'day' => '2021-11-01',
            ),
            117 => 
            array (
                'id' => 2138,
                'hits' => 22,
                'device_id' => 15,
                'day' => '2021-12-01',
            ),
            118 => 
            array (
                'id' => 2141,
                'hits' => 51,
                'device_id' => 16,
                'day' => '2021-11-01',
            ),
            119 => 
            array (
                'id' => 2142,
                'hits' => 45,
                'device_id' => 16,
                'day' => '2021-12-01',
            ),
            120 => 
            array (
                'id' => 2145,
                'hits' => 71,
                'device_id' => 20,
                'day' => '2021-11-01',
            ),
            121 => 
            array (
                'id' => 2146,
                'hits' => 77,
                'device_id' => 20,
                'day' => '2021-12-01',
            ),
            122 => 
            array (
                'id' => 2149,
                'hits' => 43,
                'device_id' => 23,
                'day' => '2021-11-01',
            ),
            123 => 
            array (
                'id' => 2150,
                'hits' => 24,
                'device_id' => 23,
                'day' => '2021-12-01',
            ),
            124 => 
            array (
                'id' => 2153,
                'hits' => 56,
                'device_id' => 24,
                'day' => '2021-11-01',
            ),
            125 => 
            array (
                'id' => 2154,
                'hits' => 47,
                'device_id' => 24,
                'day' => '2021-12-01',
            ),
            126 => 
            array (
                'id' => 2157,
                'hits' => 46,
                'device_id' => 25,
                'day' => '2021-11-01',
            ),
            127 => 
            array (
                'id' => 2158,
                'hits' => 62,
                'device_id' => 25,
                'day' => '2021-12-01',
            ),
            128 => 
            array (
                'id' => 2161,
                'hits' => 24,
                'device_id' => 27,
                'day' => '2021-11-01',
            ),
            129 => 
            array (
                'id' => 2162,
                'hits' => 18,
                'device_id' => 27,
                'day' => '2021-12-01',
            ),
            130 => 
            array (
                'id' => 2165,
                'hits' => 31,
                'device_id' => 28,
                'day' => '2021-11-01',
            ),
            131 => 
            array (
                'id' => 2166,
                'hits' => 21,
                'device_id' => 28,
                'day' => '2021-12-01',
            ),
            132 => 
            array (
                'id' => 2169,
                'hits' => 42,
                'device_id' => 29,
                'day' => '2021-11-01',
            ),
            133 => 
            array (
                'id' => 2170,
                'hits' => 23,
                'device_id' => 29,
                'day' => '2021-12-01',
            ),
            134 => 
            array (
                'id' => 2173,
                'hits' => 78,
                'device_id' => 30,
                'day' => '2021-11-01',
            ),
            135 => 
            array (
                'id' => 2174,
                'hits' => 56,
                'device_id' => 30,
                'day' => '2021-12-01',
            ),
            136 => 
            array (
                'id' => 2177,
                'hits' => 56,
                'device_id' => 32,
                'day' => '2021-11-01',
            ),
            137 => 
            array (
                'id' => 2178,
                'hits' => 79,
                'device_id' => 32,
                'day' => '2021-12-01',
            ),
            138 => 
            array (
                'id' => 2181,
                'hits' => 64,
                'device_id' => 34,
                'day' => '2021-11-01',
            ),
            139 => 
            array (
                'id' => 2182,
                'hits' => 63,
                'device_id' => 34,
                'day' => '2021-12-01',
            ),
            140 => 
            array (
                'id' => 2185,
                'hits' => 25,
                'device_id' => 35,
                'day' => '2021-11-01',
            ),
            141 => 
            array (
                'id' => 2186,
                'hits' => 17,
                'device_id' => 35,
                'day' => '2021-12-01',
            ),
            142 => 
            array (
                'id' => 2189,
                'hits' => 30,
                'device_id' => 37,
                'day' => '2021-11-01',
            ),
            143 => 
            array (
                'id' => 2190,
                'hits' => 24,
                'device_id' => 37,
                'day' => '2021-12-01',
            ),
            144 => 
            array (
                'id' => 2193,
                'hits' => 17,
                'device_id' => 42,
                'day' => '2021-11-01',
            ),
            145 => 
            array (
                'id' => 2194,
                'hits' => 17,
                'device_id' => 42,
                'day' => '2021-12-01',
            ),
            146 => 
            array (
                'id' => 2197,
                'hits' => 30,
                'device_id' => 44,
                'day' => '2021-11-01',
            ),
            147 => 
            array (
                'id' => 2198,
                'hits' => 21,
                'device_id' => 44,
                'day' => '2021-12-01',
            ),
            148 => 
            array (
                'id' => 2201,
                'hits' => 28,
                'device_id' => 47,
                'day' => '2021-11-01',
            ),
            149 => 
            array (
                'id' => 2202,
                'hits' => 28,
                'device_id' => 47,
                'day' => '2021-12-01',
            ),
            150 => 
            array (
                'id' => 2205,
                'hits' => 28,
                'device_id' => 53,
                'day' => '2021-11-01',
            ),
            151 => 
            array (
                'id' => 2206,
                'hits' => 24,
                'device_id' => 53,
                'day' => '2021-12-01',
            ),
            152 => 
            array (
                'id' => 2209,
                'hits' => 51,
                'device_id' => 54,
                'day' => '2021-11-01',
            ),
            153 => 
            array (
                'id' => 2210,
                'hits' => 39,
                'device_id' => 54,
                'day' => '2021-12-01',
            ),
            154 => 
            array (
                'id' => 2213,
                'hits' => 34,
                'device_id' => 57,
                'day' => '2021-11-01',
            ),
            155 => 
            array (
                'id' => 2214,
                'hits' => 24,
                'device_id' => 57,
                'day' => '2021-12-01',
            ),
            156 => 
            array (
                'id' => 2217,
                'hits' => 27,
                'device_id' => 58,
                'day' => '2021-11-01',
            ),
            157 => 
            array (
                'id' => 2218,
                'hits' => 24,
                'device_id' => 58,
                'day' => '2021-12-01',
            ),
            158 => 
            array (
                'id' => 2221,
                'hits' => 36,
                'device_id' => 60,
                'day' => '2021-11-01',
            ),
            159 => 
            array (
                'id' => 2222,
                'hits' => 20,
                'device_id' => 60,
                'day' => '2021-12-01',
            ),
            160 => 
            array (
                'id' => 2225,
                'hits' => 20,
                'device_id' => 62,
                'day' => '2021-11-01',
            ),
            161 => 
            array (
                'id' => 2226,
                'hits' => 17,
                'device_id' => 62,
                'day' => '2021-12-01',
            ),
            162 => 
            array (
                'id' => 2229,
                'hits' => 50,
                'device_id' => 68,
                'day' => '2021-11-01',
            ),
            163 => 
            array (
                'id' => 2230,
                'hits' => 31,
                'device_id' => 68,
                'day' => '2021-12-01',
            ),
            164 => 
            array (
                'id' => 2233,
                'hits' => 15,
                'device_id' => 73,
                'day' => '2021-11-01',
            ),
            165 => 
            array (
                'id' => 2234,
                'hits' => 5,
                'device_id' => 73,
                'day' => '2021-12-01',
            ),
            166 => 
            array (
                'id' => 2237,
                'hits' => 13,
                'device_id' => 74,
                'day' => '2021-11-01',
            ),
            167 => 
            array (
                'id' => 2238,
                'hits' => 10,
                'device_id' => 74,
                'day' => '2021-12-01',
            ),
            168 => 
            array (
                'id' => 2241,
                'hits' => 18,
                'device_id' => 75,
                'day' => '2021-11-01',
            ),
            169 => 
            array (
                'id' => 2242,
                'hits' => 9,
                'device_id' => 75,
                'day' => '2021-12-01',
            ),
            170 => 
            array (
                'id' => 2245,
                'hits' => 75,
                'device_id' => 76,
                'day' => '2021-11-01',
            ),
            171 => 
            array (
                'id' => 2246,
                'hits' => 40,
                'device_id' => 76,
                'day' => '2021-12-01',
            ),
            172 => 
            array (
                'id' => 2249,
                'hits' => 62,
                'device_id' => 77,
                'day' => '2021-11-01',
            ),
            173 => 
            array (
                'id' => 2250,
                'hits' => 45,
                'device_id' => 77,
                'day' => '2021-12-01',
            ),
            174 => 
            array (
                'id' => 2253,
                'hits' => 100,
                'device_id' => 78,
                'day' => '2021-11-01',
            ),
            175 => 
            array (
                'id' => 2254,
                'hits' => 31,
                'device_id' => 78,
                'day' => '2021-12-01',
            ),
            176 => 
            array (
                'id' => 2257,
                'hits' => 26,
                'device_id' => 79,
                'day' => '2021-11-01',
            ),
            177 => 
            array (
                'id' => 2258,
                'hits' => 28,
                'device_id' => 79,
                'day' => '2021-12-01',
            ),
            178 => 
            array (
                'id' => 2261,
                'hits' => 100,
                'device_id' => 80,
                'day' => '2021-11-01',
            ),
            179 => 
            array (
                'id' => 2262,
                'hits' => 50,
                'device_id' => 80,
                'day' => '2021-12-01',
            ),
            180 => 
            array (
                'id' => 2265,
                'hits' => 84,
                'device_id' => 81,
                'day' => '2021-11-01',
            ),
            181 => 
            array (
                'id' => 2266,
                'hits' => 56,
                'device_id' => 81,
                'day' => '2021-12-01',
            ),
            182 => 
            array (
                'id' => 2269,
                'hits' => 73,
                'device_id' => 82,
                'day' => '2021-11-01',
            ),
            183 => 
            array (
                'id' => 2270,
                'hits' => 42,
                'device_id' => 82,
                'day' => '2021-12-01',
            ),
            184 => 
            array (
                'id' => 2273,
                'hits' => 77,
                'device_id' => 83,
                'day' => '2021-11-01',
            ),
            185 => 
            array (
                'id' => 2274,
                'hits' => 53,
                'device_id' => 83,
                'day' => '2021-12-01',
            ),
            186 => 
            array (
                'id' => 2277,
                'hits' => 50,
                'device_id' => 84,
                'day' => '2021-11-01',
            ),
            187 => 
            array (
                'id' => 2278,
                'hits' => 23,
                'device_id' => 84,
                'day' => '2021-12-01',
            ),
            188 => 
            array (
                'id' => 2281,
                'hits' => 41,
                'device_id' => 85,
                'day' => '2021-11-01',
            ),
            189 => 
            array (
                'id' => 2282,
                'hits' => 15,
                'device_id' => 85,
                'day' => '2021-12-01',
            ),
            190 => 
            array (
                'id' => 2285,
                'hits' => 24,
                'device_id' => 86,
                'day' => '2021-11-01',
            ),
            191 => 
            array (
                'id' => 2286,
                'hits' => 28,
                'device_id' => 86,
                'day' => '2021-12-01',
            ),
            192 => 
            array (
                'id' => 2289,
                'hits' => 38,
                'device_id' => 87,
                'day' => '2021-11-01',
            ),
            193 => 
            array (
                'id' => 2290,
                'hits' => 23,
                'device_id' => 87,
                'day' => '2021-12-01',
            ),
            194 => 
            array (
                'id' => 2293,
                'hits' => 57,
                'device_id' => 88,
                'day' => '2021-11-01',
            ),
            195 => 
            array (
                'id' => 2294,
                'hits' => 44,
                'device_id' => 88,
                'day' => '2021-12-01',
            ),
            196 => 
            array (
                'id' => 2297,
                'hits' => 25,
                'device_id' => 89,
                'day' => '2021-11-01',
            ),
            197 => 
            array (
                'id' => 2298,
                'hits' => 9,
                'device_id' => 89,
                'day' => '2021-12-01',
            ),
            198 => 
            array (
                'id' => 2301,
                'hits' => 13,
                'device_id' => 90,
                'day' => '2021-11-01',
            ),
            199 => 
            array (
                'id' => 2302,
                'hits' => 10,
                'device_id' => 90,
                'day' => '2021-12-01',
            ),
            200 => 
            array (
                'id' => 2305,
                'hits' => 13,
                'device_id' => 91,
                'day' => '2021-11-01',
            ),
            201 => 
            array (
                'id' => 2306,
                'hits' => 5,
                'device_id' => 91,
                'day' => '2021-12-01',
            ),
            202 => 
            array (
                'id' => 2309,
                'hits' => 10,
                'device_id' => 92,
                'day' => '2021-11-01',
            ),
            203 => 
            array (
                'id' => 2310,
                'hits' => 10,
                'device_id' => 92,
                'day' => '2021-12-01',
            ),
            204 => 
            array (
                'id' => 2313,
                'hits' => 20,
                'device_id' => 93,
                'day' => '2021-11-01',
            ),
            205 => 
            array (
                'id' => 2314,
                'hits' => 9,
                'device_id' => 93,
                'day' => '2021-12-01',
            ),
            206 => 
            array (
                'id' => 2317,
                'hits' => 20,
                'device_id' => 94,
                'day' => '2021-11-01',
            ),
            207 => 
            array (
                'id' => 2318,
                'hits' => 12,
                'device_id' => 94,
                'day' => '2021-12-01',
            ),
            208 => 
            array (
                'id' => 2321,
                'hits' => 16,
                'device_id' => 95,
                'day' => '2021-11-01',
            ),
            209 => 
            array (
                'id' => 2322,
                'hits' => 9,
                'device_id' => 95,
                'day' => '2021-12-01',
            ),
            210 => 
            array (
                'id' => 2325,
                'hits' => 45,
                'device_id' => 96,
                'day' => '2021-11-01',
            ),
            211 => 
            array (
                'id' => 2326,
                'hits' => 34,
                'device_id' => 96,
                'day' => '2021-12-01',
            ),
            212 => 
            array (
                'id' => 2329,
                'hits' => 12,
                'device_id' => 97,
                'day' => '2021-11-01',
            ),
            213 => 
            array (
                'id' => 2330,
                'hits' => 10,
                'device_id' => 97,
                'day' => '2021-12-01',
            ),
            214 => 
            array (
                'id' => 2333,
                'hits' => 41,
                'device_id' => 98,
                'day' => '2021-11-01',
            ),
            215 => 
            array (
                'id' => 2334,
                'hits' => 34,
                'device_id' => 98,
                'day' => '2021-12-01',
            ),
            216 => 
            array (
                'id' => 2337,
                'hits' => 52,
                'device_id' => 99,
                'day' => '2021-11-01',
            ),
            217 => 
            array (
                'id' => 2338,
                'hits' => 27,
                'device_id' => 99,
                'day' => '2021-12-01',
            ),
            218 => 
            array (
                'id' => 2341,
                'hits' => 14,
                'device_id' => 100,
                'day' => '2021-11-01',
            ),
            219 => 
            array (
                'id' => 2342,
                'hits' => 8,
                'device_id' => 100,
                'day' => '2021-12-01',
            ),
            220 => 
            array (
                'id' => 2345,
                'hits' => 29,
                'device_id' => 101,
                'day' => '2021-11-01',
            ),
            221 => 
            array (
                'id' => 2346,
                'hits' => 17,
                'device_id' => 101,
                'day' => '2021-12-01',
            ),
            222 => 
            array (
                'id' => 2349,
                'hits' => 10,
                'device_id' => 102,
                'day' => '2021-11-01',
            ),
            223 => 
            array (
                'id' => 2350,
                'hits' => 14,
                'device_id' => 102,
                'day' => '2021-12-01',
            ),
            224 => 
            array (
                'id' => 2353,
                'hits' => 11,
                'device_id' => 103,
                'day' => '2021-11-01',
            ),
            225 => 
            array (
                'id' => 2354,
                'hits' => 7,
                'device_id' => 103,
                'day' => '2021-12-01',
            ),
            226 => 
            array (
                'id' => 2357,
                'hits' => 45,
                'device_id' => 104,
                'day' => '2021-11-01',
            ),
            227 => 
            array (
                'id' => 2358,
                'hits' => 27,
                'device_id' => 104,
                'day' => '2021-12-01',
            ),
            228 => 
            array (
                'id' => 2361,
                'hits' => 15,
                'device_id' => 105,
                'day' => '2021-11-01',
            ),
            229 => 
            array (
                'id' => 2362,
                'hits' => 7,
                'device_id' => 105,
                'day' => '2021-12-01',
            ),
            230 => 
            array (
                'id' => 2365,
                'hits' => 117,
                'device_id' => 106,
                'day' => '2021-11-01',
            ),
            231 => 
            array (
                'id' => 2366,
                'hits' => 80,
                'device_id' => 106,
                'day' => '2021-12-01',
            ),
            232 => 
            array (
                'id' => 2369,
                'hits' => 177,
                'device_id' => 107,
                'day' => '2021-11-01',
            ),
            233 => 
            array (
                'id' => 2370,
                'hits' => 96,
                'device_id' => 107,
                'day' => '2021-12-01',
            ),
            234 => 
            array (
                'id' => 2373,
                'hits' => 34,
                'device_id' => 112,
                'day' => '2021-11-01',
            ),
            235 => 
            array (
                'id' => 2374,
                'hits' => 22,
                'device_id' => 112,
                'day' => '2021-12-01',
            ),
            236 => 
            array (
                'id' => 2377,
                'hits' => 34,
                'device_id' => 113,
                'day' => '2021-11-01',
            ),
            237 => 
            array (
                'id' => 2378,
                'hits' => 24,
                'device_id' => 113,
                'day' => '2021-12-01',
            ),
            238 => 
            array (
                'id' => 2381,
                'hits' => 14,
                'device_id' => 114,
                'day' => '2021-11-01',
            ),
            239 => 
            array (
                'id' => 2382,
                'hits' => 12,
                'device_id' => 114,
                'day' => '2021-12-01',
            ),
            240 => 
            array (
                'id' => 2385,
                'hits' => 60,
                'device_id' => 115,
                'day' => '2021-11-01',
            ),
            241 => 
            array (
                'id' => 2386,
                'hits' => 46,
                'device_id' => 115,
                'day' => '2021-12-01',
            ),
            242 => 
            array (
                'id' => 2389,
                'hits' => 39,
                'device_id' => 116,
                'day' => '2021-11-01',
            ),
            243 => 
            array (
                'id' => 2390,
                'hits' => 23,
                'device_id' => 116,
                'day' => '2021-12-01',
            ),
            244 => 
            array (
                'id' => 2393,
                'hits' => 37,
                'device_id' => 117,
                'day' => '2021-11-01',
            ),
            245 => 
            array (
                'id' => 2394,
                'hits' => 23,
                'device_id' => 117,
                'day' => '2021-12-01',
            ),
            246 => 
            array (
                'id' => 2397,
                'hits' => 23,
                'device_id' => 118,
                'day' => '2021-11-01',
            ),
            247 => 
            array (
                'id' => 2398,
                'hits' => 16,
                'device_id' => 118,
                'day' => '2021-12-01',
            ),
            248 => 
            array (
                'id' => 2401,
                'hits' => 53,
                'device_id' => 119,
                'day' => '2021-11-01',
            ),
            249 => 
            array (
                'id' => 2402,
                'hits' => 31,
                'device_id' => 119,
                'day' => '2021-12-01',
            ),
            250 => 
            array (
                'id' => 2405,
                'hits' => 27,
                'device_id' => 120,
                'day' => '2021-11-01',
            ),
            251 => 
            array (
                'id' => 2406,
                'hits' => 20,
                'device_id' => 120,
                'day' => '2021-12-01',
            ),
            252 => 
            array (
                'id' => 2409,
                'hits' => 35,
                'device_id' => 121,
                'day' => '2021-11-01',
            ),
            253 => 
            array (
                'id' => 2410,
                'hits' => 17,
                'device_id' => 121,
                'day' => '2021-12-01',
            ),
            254 => 
            array (
                'id' => 2413,
                'hits' => 37,
                'device_id' => 122,
                'day' => '2021-11-01',
            ),
            255 => 
            array (
                'id' => 2414,
                'hits' => 18,
                'device_id' => 122,
                'day' => '2021-12-01',
            ),
            256 => 
            array (
                'id' => 2417,
                'hits' => 42,
                'device_id' => 123,
                'day' => '2021-11-01',
            ),
            257 => 
            array (
                'id' => 2418,
                'hits' => 32,
                'device_id' => 123,
                'day' => '2021-12-01',
            ),
            258 => 
            array (
                'id' => 2421,
                'hits' => 44,
                'device_id' => 124,
                'day' => '2021-11-01',
            ),
            259 => 
            array (
                'id' => 2422,
                'hits' => 28,
                'device_id' => 124,
                'day' => '2021-12-01',
            ),
            260 => 
            array (
                'id' => 2425,
                'hits' => 138,
                'device_id' => 125,
                'day' => '2021-11-01',
            ),
            261 => 
            array (
                'id' => 2426,
                'hits' => 102,
                'device_id' => 125,
                'day' => '2021-12-01',
            ),
            262 => 
            array (
                'id' => 2429,
                'hits' => 128,
                'device_id' => 126,
                'day' => '2021-11-01',
            ),
            263 => 
            array (
                'id' => 2430,
                'hits' => 64,
                'device_id' => 126,
                'day' => '2021-12-01',
            ),
            264 => 
            array (
                'id' => 2433,
                'hits' => 47,
                'device_id' => 127,
                'day' => '2021-11-01',
            ),
            265 => 
            array (
                'id' => 2434,
                'hits' => 66,
                'device_id' => 127,
                'day' => '2021-12-01',
            ),
            266 => 
            array (
                'id' => 2437,
                'hits' => 81,
                'device_id' => 128,
                'day' => '2021-11-01',
            ),
            267 => 
            array (
                'id' => 2438,
                'hits' => 62,
                'device_id' => 128,
                'day' => '2021-12-01',
            ),
            268 => 
            array (
                'id' => 2441,
                'hits' => 91,
                'device_id' => 129,
                'day' => '2021-11-01',
            ),
            269 => 
            array (
                'id' => 2442,
                'hits' => 69,
                'device_id' => 129,
                'day' => '2021-12-01',
            ),
            270 => 
            array (
                'id' => 2445,
                'hits' => 225,
                'device_id' => 131,
                'day' => '2021-11-01',
            ),
            271 => 
            array (
                'id' => 2446,
                'hits' => 147,
                'device_id' => 131,
                'day' => '2021-12-01',
            ),
            272 => 
            array (
                'id' => 2449,
                'hits' => 89,
                'device_id' => 132,
                'day' => '2021-11-01',
            ),
            273 => 
            array (
                'id' => 2450,
                'hits' => 83,
                'device_id' => 132,
                'day' => '2021-12-01',
            ),
            274 => 
            array (
                'id' => 2453,
                'hits' => 64,
                'device_id' => 136,
                'day' => '2021-11-01',
            ),
            275 => 
            array (
                'id' => 2454,
                'hits' => 85,
                'device_id' => 136,
                'day' => '2021-12-01',
            ),
            276 => 
            array (
                'id' => 2457,
                'hits' => 61,
                'device_id' => 138,
                'day' => '2021-11-01',
            ),
            277 => 
            array (
                'id' => 2458,
                'hits' => 19,
                'device_id' => 138,
                'day' => '2021-12-01',
            ),
            278 => 
            array (
                'id' => 2461,
                'hits' => 25,
                'device_id' => 139,
                'day' => '2021-11-01',
            ),
            279 => 
            array (
                'id' => 2462,
                'hits' => 25,
                'device_id' => 139,
                'day' => '2021-12-01',
            ),
            280 => 
            array (
                'id' => 2465,
                'hits' => 22,
                'device_id' => 140,
                'day' => '2021-11-01',
            ),
            281 => 
            array (
                'id' => 2466,
                'hits' => 12,
                'device_id' => 140,
                'day' => '2021-12-01',
            ),
            282 => 
            array (
                'id' => 2469,
                'hits' => 487,
                'device_id' => 141,
                'day' => '2021-11-01',
            ),
            283 => 
            array (
                'id' => 2470,
                'hits' => 183,
                'device_id' => 141,
                'day' => '2021-12-01',
            ),
            284 => 
            array (
                'id' => 2473,
                'hits' => 17,
                'device_id' => 142,
                'day' => '2021-11-01',
            ),
            285 => 
            array (
                'id' => 2474,
                'hits' => 44,
                'device_id' => 142,
                'day' => '2021-12-01',
            ),
            286 => 
            array (
                'id' => 2477,
                'hits' => 71,
                'device_id' => 143,
                'day' => '2021-11-01',
            ),
            287 => 
            array (
                'id' => 2478,
                'hits' => 43,
                'device_id' => 143,
                'day' => '2021-12-01',
            ),
            288 => 
            array (
                'id' => 2481,
                'hits' => 167,
                'device_id' => 146,
                'day' => '2021-11-01',
            ),
            289 => 
            array (
                'id' => 2482,
                'hits' => 134,
                'device_id' => 146,
                'day' => '2021-12-01',
            ),
            290 => 
            array (
                'id' => 2485,
                'hits' => 89,
                'device_id' => 147,
                'day' => '2021-11-01',
            ),
            291 => 
            array (
                'id' => 2486,
                'hits' => 86,
                'device_id' => 147,
                'day' => '2021-12-01',
            ),
            292 => 
            array (
                'id' => 2489,
                'hits' => 191,
                'device_id' => 148,
                'day' => '2021-11-01',
            ),
            293 => 
            array (
                'id' => 2490,
                'hits' => 105,
                'device_id' => 148,
                'day' => '2021-12-01',
            ),
            294 => 
            array (
                'id' => 2493,
                'hits' => 64,
                'device_id' => 149,
                'day' => '2021-11-01',
            ),
            295 => 
            array (
                'id' => 2494,
                'hits' => 109,
                'device_id' => 149,
                'day' => '2021-12-01',
            ),
            296 => 
            array (
                'id' => 2497,
                'hits' => 318,
                'device_id' => 150,
                'day' => '2021-11-01',
            ),
            297 => 
            array (
                'id' => 2498,
                'hits' => 191,
                'device_id' => 150,
                'day' => '2021-12-01',
            ),
            298 => 
            array (
                'id' => 2501,
                'hits' => 161,
                'device_id' => 157,
                'day' => '2021-11-01',
            ),
            299 => 
            array (
                'id' => 2502,
                'hits' => 115,
                'device_id' => 157,
                'day' => '2021-12-01',
            ),
            300 => 
            array (
                'id' => 2505,
                'hits' => 124,
                'device_id' => 159,
                'day' => '2021-11-01',
            ),
            301 => 
            array (
                'id' => 2506,
                'hits' => 102,
                'device_id' => 159,
                'day' => '2021-12-01',
            ),
            302 => 
            array (
                'id' => 2509,
                'hits' => 156,
                'device_id' => 160,
                'day' => '2021-11-01',
            ),
            303 => 
            array (
                'id' => 2510,
                'hits' => 95,
                'device_id' => 160,
                'day' => '2021-12-01',
            ),
            304 => 
            array (
                'id' => 2513,
                'hits' => 417,
                'device_id' => 161,
                'day' => '2021-11-01',
            ),
            305 => 
            array (
                'id' => 2514,
                'hits' => 278,
                'device_id' => 161,
                'day' => '2021-12-01',
            ),
            306 => 
            array (
                'id' => 2517,
                'hits' => 351,
                'device_id' => 162,
                'day' => '2021-11-01',
            ),
            307 => 
            array (
                'id' => 2518,
                'hits' => 190,
                'device_id' => 162,
                'day' => '2021-12-01',
            ),
            308 => 
            array (
                'id' => 2521,
                'hits' => 152,
                'device_id' => 163,
                'day' => '2021-11-01',
            ),
            309 => 
            array (
                'id' => 2522,
                'hits' => 116,
                'device_id' => 163,
                'day' => '2021-12-01',
            ),
            310 => 
            array (
                'id' => 2525,
                'hits' => 183,
                'device_id' => 164,
                'day' => '2021-11-01',
            ),
            311 => 
            array (
                'id' => 2526,
                'hits' => 149,
                'device_id' => 164,
                'day' => '2021-12-01',
            ),
            312 => 
            array (
                'id' => 2529,
                'hits' => 362,
                'device_id' => 168,
                'day' => '2021-11-01',
            ),
            313 => 
            array (
                'id' => 2530,
                'hits' => 245,
                'device_id' => 168,
                'day' => '2021-12-01',
            ),
            314 => 
            array (
                'id' => 2533,
                'hits' => 232,
                'device_id' => 172,
                'day' => '2021-11-01',
            ),
            315 => 
            array (
                'id' => 2534,
                'hits' => 141,
                'device_id' => 172,
                'day' => '2021-12-01',
            ),
            316 => 
            array (
                'id' => 2537,
                'hits' => 150,
                'device_id' => 177,
                'day' => '2021-11-01',
            ),
            317 => 
            array (
                'id' => 2538,
                'hits' => 136,
                'device_id' => 177,
                'day' => '2021-12-01',
            ),
            318 => 
            array (
                'id' => 2541,
                'hits' => 132,
                'device_id' => 178,
                'day' => '2021-11-01',
            ),
            319 => 
            array (
                'id' => 2542,
                'hits' => 96,
                'device_id' => 178,
                'day' => '2021-12-01',
            ),
            320 => 
            array (
                'id' => 2545,
                'hits' => 230,
                'device_id' => 180,
                'day' => '2021-11-01',
            ),
            321 => 
            array (
                'id' => 2546,
                'hits' => 167,
                'device_id' => 180,
                'day' => '2021-12-01',
            ),
            322 => 
            array (
                'id' => 2549,
                'hits' => 184,
                'device_id' => 181,
                'day' => '2021-11-01',
            ),
            323 => 
            array (
                'id' => 2550,
                'hits' => 87,
                'device_id' => 181,
                'day' => '2021-12-01',
            ),
            324 => 
            array (
                'id' => 2553,
                'hits' => 258,
                'device_id' => 182,
                'day' => '2021-11-01',
            ),
            325 => 
            array (
                'id' => 2554,
                'hits' => 121,
                'device_id' => 182,
                'day' => '2021-12-01',
            ),
            326 => 
            array (
                'id' => 2557,
                'hits' => 166,
                'device_id' => 183,
                'day' => '2021-11-01',
            ),
            327 => 
            array (
                'id' => 2558,
                'hits' => 80,
                'device_id' => 183,
                'day' => '2021-12-01',
            ),
            328 => 
            array (
                'id' => 2561,
                'hits' => 111,
                'device_id' => 184,
                'day' => '2021-11-01',
            ),
            329 => 
            array (
                'id' => 2562,
                'hits' => 55,
                'device_id' => 184,
                'day' => '2021-12-01',
            ),
            330 => 
            array (
                'id' => 2565,
                'hits' => 269,
                'device_id' => 185,
                'day' => '2021-11-01',
            ),
            331 => 
            array (
                'id' => 2566,
                'hits' => 163,
                'device_id' => 185,
                'day' => '2021-12-01',
            ),
            332 => 
            array (
                'id' => 2569,
                'hits' => 706,
                'device_id' => 189,
                'day' => '2021-11-01',
            ),
            333 => 
            array (
                'id' => 2570,
                'hits' => 193,
                'device_id' => 189,
                'day' => '2021-12-01',
            ),
            334 => 
            array (
                'id' => 2573,
                'hits' => 1272,
                'device_id' => 190,
                'day' => '2021-11-01',
            ),
            335 => 
            array (
                'id' => 2574,
                'hits' => 207,
                'device_id' => 190,
                'day' => '2021-12-01',
            ),
            336 => 
            array (
                'id' => 2577,
                'hits' => 534,
                'device_id' => 191,
                'day' => '2021-11-01',
            ),
            337 => 
            array (
                'id' => 2578,
                'hits' => 164,
                'device_id' => 191,
                'day' => '2021-12-01',
            ),
            338 => 
            array (
                'id' => 2581,
                'hits' => 611,
                'device_id' => 192,
                'day' => '2021-11-01',
            ),
            339 => 
            array (
                'id' => 2582,
                'hits' => 172,
                'device_id' => 192,
                'day' => '2021-12-01',
            ),
            340 => 
            array (
                'id' => 2585,
                'hits' => 22,
                'device_id' => 196,
                'day' => '2021-11-01',
            ),
            341 => 
            array (
                'id' => 2586,
                'hits' => 9,
                'device_id' => 1,
                'day' => '2022-01-01',
            ),
            342 => 
            array (
                'id' => 2587,
                'hits' => 10,
                'device_id' => 1,
                'day' => '2022-02-01',
            ),
            343 => 
            array (
                'id' => 2588,
                'hits' => 19,
                'device_id' => 2,
                'day' => '2022-01-01',
            ),
            344 => 
            array (
                'id' => 2589,
                'hits' => 16,
                'device_id' => 2,
                'day' => '2022-02-01',
            ),
            345 => 
            array (
                'id' => 2590,
                'hits' => 29,
                'device_id' => 3,
                'day' => '2022-01-01',
            ),
            346 => 
            array (
                'id' => 2591,
                'hits' => 19,
                'device_id' => 3,
                'day' => '2022-02-01',
            ),
            347 => 
            array (
                'id' => 2592,
                'hits' => 25,
                'device_id' => 4,
                'day' => '2022-01-01',
            ),
            348 => 
            array (
                'id' => 2593,
                'hits' => 23,
                'device_id' => 4,
                'day' => '2022-02-01',
            ),
            349 => 
            array (
                'id' => 2594,
                'hits' => 29,
                'device_id' => 6,
                'day' => '2022-01-01',
            ),
            350 => 
            array (
                'id' => 2595,
                'hits' => 23,
                'device_id' => 6,
                'day' => '2022-02-01',
            ),
            351 => 
            array (
                'id' => 2596,
                'hits' => 29,
                'device_id' => 7,
                'day' => '2022-01-01',
            ),
            352 => 
            array (
                'id' => 2597,
                'hits' => 29,
                'device_id' => 7,
                'day' => '2022-02-01',
            ),
            353 => 
            array (
                'id' => 2598,
                'hits' => 46,
                'device_id' => 8,
                'day' => '2022-01-01',
            ),
            354 => 
            array (
                'id' => 2599,
                'hits' => 67,
                'device_id' => 8,
                'day' => '2022-02-01',
            ),
            355 => 
            array (
                'id' => 2600,
                'hits' => 12,
                'device_id' => 11,
                'day' => '2022-01-01',
            ),
            356 => 
            array (
                'id' => 2601,
                'hits' => 9,
                'device_id' => 11,
                'day' => '2022-02-01',
            ),
            357 => 
            array (
                'id' => 2602,
                'hits' => 28,
                'device_id' => 13,
                'day' => '2022-01-01',
            ),
            358 => 
            array (
                'id' => 2603,
                'hits' => 19,
                'device_id' => 13,
                'day' => '2022-02-01',
            ),
            359 => 
            array (
                'id' => 2604,
                'hits' => 23,
                'device_id' => 14,
                'day' => '2022-01-01',
            ),
            360 => 
            array (
                'id' => 2605,
                'hits' => 10,
                'device_id' => 14,
                'day' => '2022-02-01',
            ),
            361 => 
            array (
                'id' => 2606,
                'hits' => 11,
                'device_id' => 15,
                'day' => '2022-01-01',
            ),
            362 => 
            array (
                'id' => 2607,
                'hits' => 16,
                'device_id' => 15,
                'day' => '2022-02-01',
            ),
            363 => 
            array (
                'id' => 2608,
                'hits' => 37,
                'device_id' => 16,
                'day' => '2022-01-01',
            ),
            364 => 
            array (
                'id' => 2609,
                'hits' => 31,
                'device_id' => 16,
                'day' => '2022-02-01',
            ),
            365 => 
            array (
                'id' => 2610,
                'hits' => 57,
                'device_id' => 20,
                'day' => '2022-01-01',
            ),
            366 => 
            array (
                'id' => 2611,
                'hits' => 29,
                'device_id' => 20,
                'day' => '2022-02-01',
            ),
            367 => 
            array (
                'id' => 2612,
                'hits' => 16,
                'device_id' => 23,
                'day' => '2022-01-01',
            ),
            368 => 
            array (
                'id' => 2613,
                'hits' => 11,
                'device_id' => 23,
                'day' => '2022-02-01',
            ),
            369 => 
            array (
                'id' => 2614,
                'hits' => 22,
                'device_id' => 24,
                'day' => '2022-01-01',
            ),
            370 => 
            array (
                'id' => 2615,
                'hits' => 28,
                'device_id' => 24,
                'day' => '2022-02-01',
            ),
            371 => 
            array (
                'id' => 2616,
                'hits' => 27,
                'device_id' => 25,
                'day' => '2022-01-01',
            ),
            372 => 
            array (
                'id' => 2617,
                'hits' => 19,
                'device_id' => 25,
                'day' => '2022-02-01',
            ),
            373 => 
            array (
                'id' => 2618,
                'hits' => 12,
                'device_id' => 27,
                'day' => '2022-01-01',
            ),
            374 => 
            array (
                'id' => 2619,
                'hits' => 16,
                'device_id' => 27,
                'day' => '2022-02-01',
            ),
            375 => 
            array (
                'id' => 2620,
                'hits' => 11,
                'device_id' => 28,
                'day' => '2022-01-01',
            ),
            376 => 
            array (
                'id' => 2621,
                'hits' => 8,
                'device_id' => 28,
                'day' => '2022-02-01',
            ),
            377 => 
            array (
                'id' => 2622,
                'hits' => 13,
                'device_id' => 29,
                'day' => '2022-01-01',
            ),
            378 => 
            array (
                'id' => 2623,
                'hits' => 7,
                'device_id' => 29,
                'day' => '2022-02-01',
            ),
            379 => 
            array (
                'id' => 2624,
                'hits' => 32,
                'device_id' => 30,
                'day' => '2022-01-01',
            ),
            380 => 
            array (
                'id' => 2625,
                'hits' => 26,
                'device_id' => 30,
                'day' => '2022-02-01',
            ),
            381 => 
            array (
                'id' => 2626,
                'hits' => 28,
                'device_id' => 32,
                'day' => '2022-01-01',
            ),
            382 => 
            array (
                'id' => 2627,
                'hits' => 22,
                'device_id' => 32,
                'day' => '2022-02-01',
            ),
            383 => 
            array (
                'id' => 2628,
                'hits' => 46,
                'device_id' => 34,
                'day' => '2022-01-01',
            ),
            384 => 
            array (
                'id' => 2629,
                'hits' => 27,
                'device_id' => 34,
                'day' => '2022-02-01',
            ),
            385 => 
            array (
                'id' => 2630,
                'hits' => 12,
                'device_id' => 35,
                'day' => '2022-01-01',
            ),
            386 => 
            array (
                'id' => 2631,
                'hits' => 12,
                'device_id' => 35,
                'day' => '2022-02-01',
            ),
            387 => 
            array (
                'id' => 2632,
                'hits' => 13,
                'device_id' => 37,
                'day' => '2022-01-01',
            ),
            388 => 
            array (
                'id' => 2633,
                'hits' => 13,
                'device_id' => 37,
                'day' => '2022-02-01',
            ),
            389 => 
            array (
                'id' => 2634,
                'hits' => 10,
                'device_id' => 42,
                'day' => '2022-01-01',
            ),
            390 => 
            array (
                'id' => 2635,
                'hits' => 8,
                'device_id' => 42,
                'day' => '2022-02-01',
            ),
            391 => 
            array (
                'id' => 2636,
                'hits' => 12,
                'device_id' => 44,
                'day' => '2022-01-01',
            ),
            392 => 
            array (
                'id' => 2637,
                'hits' => 7,
                'device_id' => 44,
                'day' => '2022-02-01',
            ),
            393 => 
            array (
                'id' => 2638,
                'hits' => 14,
                'device_id' => 47,
                'day' => '2022-01-01',
            ),
            394 => 
            array (
                'id' => 2639,
                'hits' => 4,
                'device_id' => 47,
                'day' => '2022-02-01',
            ),
            395 => 
            array (
                'id' => 2640,
                'hits' => 19,
                'device_id' => 53,
                'day' => '2022-01-01',
            ),
            396 => 
            array (
                'id' => 2641,
                'hits' => 16,
                'device_id' => 53,
                'day' => '2022-02-01',
            ),
            397 => 
            array (
                'id' => 2642,
                'hits' => 25,
                'device_id' => 54,
                'day' => '2022-01-01',
            ),
            398 => 
            array (
                'id' => 2643,
                'hits' => 20,
                'device_id' => 54,
                'day' => '2022-02-01',
            ),
            399 => 
            array (
                'id' => 2644,
                'hits' => 8,
                'device_id' => 57,
                'day' => '2022-01-01',
            ),
            400 => 
            array (
                'id' => 2645,
                'hits' => 9,
                'device_id' => 57,
                'day' => '2022-02-01',
            ),
            401 => 
            array (
                'id' => 2646,
                'hits' => 7,
                'device_id' => 58,
                'day' => '2022-01-01',
            ),
            402 => 
            array (
                'id' => 2647,
                'hits' => 11,
                'device_id' => 58,
                'day' => '2022-02-01',
            ),
            403 => 
            array (
                'id' => 2648,
                'hits' => 10,
                'device_id' => 60,
                'day' => '2022-01-01',
            ),
            404 => 
            array (
                'id' => 2649,
                'hits' => 16,
                'device_id' => 60,
                'day' => '2022-02-01',
            ),
            405 => 
            array (
                'id' => 2650,
                'hits' => 14,
                'device_id' => 62,
                'day' => '2022-01-01',
            ),
            406 => 
            array (
                'id' => 2651,
                'hits' => 7,
                'device_id' => 62,
                'day' => '2022-02-01',
            ),
            407 => 
            array (
                'id' => 2652,
                'hits' => 10,
                'device_id' => 68,
                'day' => '2022-01-01',
            ),
            408 => 
            array (
                'id' => 2653,
                'hits' => 13,
                'device_id' => 68,
                'day' => '2022-02-01',
            ),
            409 => 
            array (
                'id' => 2654,
                'hits' => 12,
                'device_id' => 73,
                'day' => '2022-01-01',
            ),
            410 => 
            array (
                'id' => 2655,
                'hits' => 15,
                'device_id' => 73,
                'day' => '2022-02-01',
            ),
            411 => 
            array (
                'id' => 2656,
                'hits' => 8,
                'device_id' => 74,
                'day' => '2022-01-01',
            ),
            412 => 
            array (
                'id' => 2657,
                'hits' => 4,
                'device_id' => 74,
                'day' => '2022-02-01',
            ),
            413 => 
            array (
                'id' => 2658,
                'hits' => 10,
                'device_id' => 75,
                'day' => '2022-01-01',
            ),
            414 => 
            array (
                'id' => 2659,
                'hits' => 9,
                'device_id' => 75,
                'day' => '2022-02-01',
            ),
            415 => 
            array (
                'id' => 2660,
                'hits' => 11,
                'device_id' => 76,
                'day' => '2022-01-01',
            ),
            416 => 
            array (
                'id' => 2661,
                'hits' => 13,
                'device_id' => 76,
                'day' => '2022-02-01',
            ),
            417 => 
            array (
                'id' => 2662,
                'hits' => 17,
                'device_id' => 77,
                'day' => '2022-01-01',
            ),
            418 => 
            array (
                'id' => 2663,
                'hits' => 17,
                'device_id' => 77,
                'day' => '2022-02-01',
            ),
            419 => 
            array (
                'id' => 2664,
                'hits' => 29,
                'device_id' => 78,
                'day' => '2022-01-01',
            ),
            420 => 
            array (
                'id' => 2665,
                'hits' => 23,
                'device_id' => 78,
                'day' => '2022-02-01',
            ),
            421 => 
            array (
                'id' => 2666,
                'hits' => 8,
                'device_id' => 79,
                'day' => '2022-01-01',
            ),
            422 => 
            array (
                'id' => 2667,
                'hits' => 16,
                'device_id' => 79,
                'day' => '2022-02-01',
            ),
            423 => 
            array (
                'id' => 2668,
                'hits' => 36,
                'device_id' => 80,
                'day' => '2022-01-01',
            ),
            424 => 
            array (
                'id' => 2669,
                'hits' => 27,
                'device_id' => 80,
                'day' => '2022-02-01',
            ),
            425 => 
            array (
                'id' => 2670,
                'hits' => 19,
                'device_id' => 81,
                'day' => '2022-01-01',
            ),
            426 => 
            array (
                'id' => 2671,
                'hits' => 11,
                'device_id' => 81,
                'day' => '2022-02-01',
            ),
            427 => 
            array (
                'id' => 2672,
                'hits' => 18,
                'device_id' => 82,
                'day' => '2022-01-01',
            ),
            428 => 
            array (
                'id' => 2673,
                'hits' => 16,
                'device_id' => 82,
                'day' => '2022-02-01',
            ),
            429 => 
            array (
                'id' => 2674,
                'hits' => 23,
                'device_id' => 83,
                'day' => '2022-01-01',
            ),
            430 => 
            array (
                'id' => 2675,
                'hits' => 10,
                'device_id' => 83,
                'day' => '2022-02-01',
            ),
            431 => 
            array (
                'id' => 2676,
                'hits' => 13,
                'device_id' => 84,
                'day' => '2022-01-01',
            ),
            432 => 
            array (
                'id' => 2677,
                'hits' => 12,
                'device_id' => 84,
                'day' => '2022-02-01',
            ),
            433 => 
            array (
                'id' => 2678,
                'hits' => 10,
                'device_id' => 85,
                'day' => '2022-01-01',
            ),
            434 => 
            array (
                'id' => 2679,
                'hits' => 12,
                'device_id' => 85,
                'day' => '2022-02-01',
            ),
            435 => 
            array (
                'id' => 2680,
                'hits' => 12,
                'device_id' => 86,
                'day' => '2022-01-01',
            ),
            436 => 
            array (
                'id' => 2681,
                'hits' => 10,
                'device_id' => 86,
                'day' => '2022-02-01',
            ),
            437 => 
            array (
                'id' => 2682,
                'hits' => 10,
                'device_id' => 87,
                'day' => '2022-01-01',
            ),
            438 => 
            array (
                'id' => 2683,
                'hits' => 9,
                'device_id' => 87,
                'day' => '2022-02-01',
            ),
            439 => 
            array (
                'id' => 2684,
                'hits' => 33,
                'device_id' => 88,
                'day' => '2022-01-01',
            ),
            440 => 
            array (
                'id' => 2685,
                'hits' => 17,
                'device_id' => 88,
                'day' => '2022-02-01',
            ),
            441 => 
            array (
                'id' => 2686,
                'hits' => 12,
                'device_id' => 89,
                'day' => '2022-01-01',
            ),
            442 => 
            array (
                'id' => 2687,
                'hits' => 18,
                'device_id' => 89,
                'day' => '2022-02-01',
            ),
            443 => 
            array (
                'id' => 2688,
                'hits' => 9,
                'device_id' => 90,
                'day' => '2022-01-01',
            ),
            444 => 
            array (
                'id' => 2689,
                'hits' => 12,
                'device_id' => 90,
                'day' => '2022-02-01',
            ),
            445 => 
            array (
                'id' => 2690,
                'hits' => 10,
                'device_id' => 91,
                'day' => '2022-01-01',
            ),
            446 => 
            array (
                'id' => 2691,
                'hits' => 5,
                'device_id' => 91,
                'day' => '2022-02-01',
            ),
            447 => 
            array (
                'id' => 2692,
                'hits' => 6,
                'device_id' => 92,
                'day' => '2022-01-01',
            ),
            448 => 
            array (
                'id' => 2693,
                'hits' => 7,
                'device_id' => 92,
                'day' => '2022-02-01',
            ),
            449 => 
            array (
                'id' => 2694,
                'hits' => 11,
                'device_id' => 93,
                'day' => '2022-01-01',
            ),
            450 => 
            array (
                'id' => 2695,
                'hits' => 6,
                'device_id' => 93,
                'day' => '2022-02-01',
            ),
            451 => 
            array (
                'id' => 2696,
                'hits' => 10,
                'device_id' => 94,
                'day' => '2022-01-01',
            ),
            452 => 
            array (
                'id' => 2697,
                'hits' => 9,
                'device_id' => 94,
                'day' => '2022-02-01',
            ),
            453 => 
            array (
                'id' => 2698,
                'hits' => 10,
                'device_id' => 95,
                'day' => '2022-01-01',
            ),
            454 => 
            array (
                'id' => 2699,
                'hits' => 9,
                'device_id' => 95,
                'day' => '2022-02-01',
            ),
            455 => 
            array (
                'id' => 2700,
                'hits' => 12,
                'device_id' => 96,
                'day' => '2022-01-01',
            ),
            456 => 
            array (
                'id' => 2701,
                'hits' => 10,
                'device_id' => 96,
                'day' => '2022-02-01',
            ),
            457 => 
            array (
                'id' => 2702,
                'hits' => 10,
                'device_id' => 97,
                'day' => '2022-01-01',
            ),
            458 => 
            array (
                'id' => 2703,
                'hits' => 10,
                'device_id' => 97,
                'day' => '2022-02-01',
            ),
            459 => 
            array (
                'id' => 2704,
                'hits' => 7,
                'device_id' => 98,
                'day' => '2022-01-01',
            ),
            460 => 
            array (
                'id' => 2705,
                'hits' => 13,
                'device_id' => 98,
                'day' => '2022-02-01',
            ),
            461 => 
            array (
                'id' => 2706,
                'hits' => 14,
                'device_id' => 99,
                'day' => '2022-01-01',
            ),
            462 => 
            array (
                'id' => 2707,
                'hits' => 6,
                'device_id' => 99,
                'day' => '2022-02-01',
            ),
            463 => 
            array (
                'id' => 2708,
                'hits' => 12,
                'device_id' => 100,
                'day' => '2022-01-01',
            ),
            464 => 
            array (
                'id' => 2709,
                'hits' => 9,
                'device_id' => 100,
                'day' => '2022-02-01',
            ),
            465 => 
            array (
                'id' => 2710,
                'hits' => 11,
                'device_id' => 101,
                'day' => '2022-01-01',
            ),
            466 => 
            array (
                'id' => 2711,
                'hits' => 7,
                'device_id' => 101,
                'day' => '2022-02-01',
            ),
            467 => 
            array (
                'id' => 2712,
                'hits' => 11,
                'device_id' => 102,
                'day' => '2022-01-01',
            ),
            468 => 
            array (
                'id' => 2713,
                'hits' => 12,
                'device_id' => 102,
                'day' => '2022-02-01',
            ),
            469 => 
            array (
                'id' => 2714,
                'hits' => 11,
                'device_id' => 103,
                'day' => '2022-01-01',
            ),
            470 => 
            array (
                'id' => 2715,
                'hits' => 3,
                'device_id' => 103,
                'day' => '2022-02-01',
            ),
            471 => 
            array (
                'id' => 2716,
                'hits' => 14,
                'device_id' => 104,
                'day' => '2022-01-01',
            ),
            472 => 
            array (
                'id' => 2717,
                'hits' => 13,
                'device_id' => 104,
                'day' => '2022-02-01',
            ),
            473 => 
            array (
                'id' => 2718,
                'hits' => 14,
                'device_id' => 105,
                'day' => '2022-01-01',
            ),
            474 => 
            array (
                'id' => 2719,
                'hits' => 9,
                'device_id' => 105,
                'day' => '2022-02-01',
            ),
            475 => 
            array (
                'id' => 2720,
                'hits' => 48,
                'device_id' => 106,
                'day' => '2022-01-01',
            ),
            476 => 
            array (
                'id' => 2721,
                'hits' => 38,
                'device_id' => 106,
                'day' => '2022-02-01',
            ),
            477 => 
            array (
                'id' => 2722,
                'hits' => 50,
                'device_id' => 107,
                'day' => '2022-01-01',
            ),
            478 => 
            array (
                'id' => 2723,
                'hits' => 43,
                'device_id' => 107,
                'day' => '2022-02-01',
            ),
            479 => 
            array (
                'id' => 2724,
                'hits' => 21,
                'device_id' => 112,
                'day' => '2022-01-01',
            ),
            480 => 
            array (
                'id' => 2725,
                'hits' => 13,
                'device_id' => 112,
                'day' => '2022-02-01',
            ),
            481 => 
            array (
                'id' => 2726,
                'hits' => 13,
                'device_id' => 113,
                'day' => '2022-01-01',
            ),
            482 => 
            array (
                'id' => 2727,
                'hits' => 9,
                'device_id' => 113,
                'day' => '2022-02-01',
            ),
            483 => 
            array (
                'id' => 2728,
                'hits' => 7,
                'device_id' => 114,
                'day' => '2022-01-01',
            ),
            484 => 
            array (
                'id' => 2729,
                'hits' => 9,
                'device_id' => 114,
                'day' => '2022-02-01',
            ),
            485 => 
            array (
                'id' => 2730,
                'hits' => 17,
                'device_id' => 115,
                'day' => '2022-01-01',
            ),
            486 => 
            array (
                'id' => 2731,
                'hits' => 25,
                'device_id' => 115,
                'day' => '2022-02-01',
            ),
            487 => 
            array (
                'id' => 2732,
                'hits' => 14,
                'device_id' => 116,
                'day' => '2022-01-01',
            ),
            488 => 
            array (
                'id' => 2733,
                'hits' => 5,
                'device_id' => 116,
                'day' => '2022-02-01',
            ),
            489 => 
            array (
                'id' => 2734,
                'hits' => 21,
                'device_id' => 117,
                'day' => '2022-01-01',
            ),
            490 => 
            array (
                'id' => 2735,
                'hits' => 9,
                'device_id' => 117,
                'day' => '2022-02-01',
            ),
            491 => 
            array (
                'id' => 2736,
                'hits' => 17,
                'device_id' => 118,
                'day' => '2022-01-01',
            ),
            492 => 
            array (
                'id' => 2737,
                'hits' => 17,
                'device_id' => 118,
                'day' => '2022-02-01',
            ),
            493 => 
            array (
                'id' => 2738,
                'hits' => 7,
                'device_id' => 119,
                'day' => '2022-01-01',
            ),
            494 => 
            array (
                'id' => 2739,
                'hits' => 14,
                'device_id' => 119,
                'day' => '2022-02-01',
            ),
            495 => 
            array (
                'id' => 2740,
                'hits' => 22,
                'device_id' => 120,
                'day' => '2022-01-01',
            ),
            496 => 
            array (
                'id' => 2741,
                'hits' => 19,
                'device_id' => 120,
                'day' => '2022-02-01',
            ),
            497 => 
            array (
                'id' => 2742,
                'hits' => 14,
                'device_id' => 121,
                'day' => '2022-01-01',
            ),
            498 => 
            array (
                'id' => 2743,
                'hits' => 10,
                'device_id' => 121,
                'day' => '2022-02-01',
            ),
            499 => 
            array (
                'id' => 2744,
                'hits' => 20,
                'device_id' => 122,
                'day' => '2022-01-01',
            ),
        ));
        \DB::table('device_statistics')->insert(array (
            0 => 
            array (
                'id' => 2745,
                'hits' => 13,
                'device_id' => 122,
                'day' => '2022-02-01',
            ),
            1 => 
            array (
                'id' => 2746,
                'hits' => 20,
                'device_id' => 123,
                'day' => '2022-01-01',
            ),
            2 => 
            array (
                'id' => 2747,
                'hits' => 25,
                'device_id' => 123,
                'day' => '2022-02-01',
            ),
            3 => 
            array (
                'id' => 2748,
                'hits' => 18,
                'device_id' => 124,
                'day' => '2022-01-01',
            ),
            4 => 
            array (
                'id' => 2749,
                'hits' => 16,
                'device_id' => 124,
                'day' => '2022-02-01',
            ),
            5 => 
            array (
                'id' => 2750,
                'hits' => 38,
                'device_id' => 125,
                'day' => '2022-01-01',
            ),
            6 => 
            array (
                'id' => 2751,
                'hits' => 44,
                'device_id' => 125,
                'day' => '2022-02-01',
            ),
            7 => 
            array (
                'id' => 2752,
                'hits' => 41,
                'device_id' => 126,
                'day' => '2022-01-01',
            ),
            8 => 
            array (
                'id' => 2753,
                'hits' => 25,
                'device_id' => 126,
                'day' => '2022-02-01',
            ),
            9 => 
            array (
                'id' => 2754,
                'hits' => 45,
                'device_id' => 127,
                'day' => '2022-01-01',
            ),
            10 => 
            array (
                'id' => 2755,
                'hits' => 30,
                'device_id' => 127,
                'day' => '2022-02-01',
            ),
            11 => 
            array (
                'id' => 2756,
                'hits' => 44,
                'device_id' => 128,
                'day' => '2022-01-01',
            ),
            12 => 
            array (
                'id' => 2757,
                'hits' => 36,
                'device_id' => 128,
                'day' => '2022-02-01',
            ),
            13 => 
            array (
                'id' => 2758,
                'hits' => 47,
                'device_id' => 129,
                'day' => '2022-01-01',
            ),
            14 => 
            array (
                'id' => 2759,
                'hits' => 35,
                'device_id' => 129,
                'day' => '2022-02-01',
            ),
            15 => 
            array (
                'id' => 2760,
                'hits' => 46,
                'device_id' => 131,
                'day' => '2022-01-01',
            ),
            16 => 
            array (
                'id' => 2761,
                'hits' => 58,
                'device_id' => 131,
                'day' => '2022-02-01',
            ),
            17 => 
            array (
                'id' => 2762,
                'hits' => 29,
                'device_id' => 132,
                'day' => '2022-01-01',
            ),
            18 => 
            array (
                'id' => 2763,
                'hits' => 22,
                'device_id' => 132,
                'day' => '2022-02-01',
            ),
            19 => 
            array (
                'id' => 2764,
                'hits' => 40,
                'device_id' => 136,
                'day' => '2022-01-01',
            ),
            20 => 
            array (
                'id' => 2765,
                'hits' => 33,
                'device_id' => 136,
                'day' => '2022-02-01',
            ),
            21 => 
            array (
                'id' => 2766,
                'hits' => 25,
                'device_id' => 138,
                'day' => '2022-01-01',
            ),
            22 => 
            array (
                'id' => 2767,
                'hits' => 22,
                'device_id' => 138,
                'day' => '2022-02-01',
            ),
            23 => 
            array (
                'id' => 2768,
                'hits' => 50,
                'device_id' => 139,
                'day' => '2022-01-01',
            ),
            24 => 
            array (
                'id' => 2769,
                'hits' => 28,
                'device_id' => 139,
                'day' => '2022-02-01',
            ),
            25 => 
            array (
                'id' => 2770,
                'hits' => 18,
                'device_id' => 140,
                'day' => '2022-01-01',
            ),
            26 => 
            array (
                'id' => 2771,
                'hits' => 22,
                'device_id' => 140,
                'day' => '2022-02-01',
            ),
            27 => 
            array (
                'id' => 2772,
                'hits' => 121,
                'device_id' => 141,
                'day' => '2022-01-01',
            ),
            28 => 
            array (
                'id' => 2773,
                'hits' => 107,
                'device_id' => 141,
                'day' => '2022-02-01',
            ),
            29 => 
            array (
                'id' => 2774,
                'hits' => 38,
                'device_id' => 142,
                'day' => '2022-01-01',
            ),
            30 => 
            array (
                'id' => 2775,
                'hits' => 20,
                'device_id' => 142,
                'day' => '2022-02-01',
            ),
            31 => 
            array (
                'id' => 2776,
                'hits' => 49,
                'device_id' => 143,
                'day' => '2022-01-01',
            ),
            32 => 
            array (
                'id' => 2777,
                'hits' => 28,
                'device_id' => 143,
                'day' => '2022-02-01',
            ),
            33 => 
            array (
                'id' => 2778,
                'hits' => 70,
                'device_id' => 146,
                'day' => '2022-01-01',
            ),
            34 => 
            array (
                'id' => 2779,
                'hits' => 40,
                'device_id' => 146,
                'day' => '2022-02-01',
            ),
            35 => 
            array (
                'id' => 2780,
                'hits' => 31,
                'device_id' => 147,
                'day' => '2022-01-01',
            ),
            36 => 
            array (
                'id' => 2781,
                'hits' => 16,
                'device_id' => 147,
                'day' => '2022-02-01',
            ),
            37 => 
            array (
                'id' => 2782,
                'hits' => 44,
                'device_id' => 148,
                'day' => '2022-01-01',
            ),
            38 => 
            array (
                'id' => 2783,
                'hits' => 40,
                'device_id' => 148,
                'day' => '2022-02-01',
            ),
            39 => 
            array (
                'id' => 2784,
                'hits' => 31,
                'device_id' => 149,
                'day' => '2022-01-01',
            ),
            40 => 
            array (
                'id' => 2785,
                'hits' => 25,
                'device_id' => 149,
                'day' => '2022-02-01',
            ),
            41 => 
            array (
                'id' => 2786,
                'hits' => 98,
                'device_id' => 150,
                'day' => '2022-01-01',
            ),
            42 => 
            array (
                'id' => 2787,
                'hits' => 94,
                'device_id' => 150,
                'day' => '2022-02-01',
            ),
            43 => 
            array (
                'id' => 2788,
                'hits' => 49,
                'device_id' => 157,
                'day' => '2022-01-01',
            ),
            44 => 
            array (
                'id' => 2789,
                'hits' => 57,
                'device_id' => 157,
                'day' => '2022-02-01',
            ),
            45 => 
            array (
                'id' => 2790,
                'hits' => 46,
                'device_id' => 159,
                'day' => '2022-01-01',
            ),
            46 => 
            array (
                'id' => 2791,
                'hits' => 43,
                'device_id' => 159,
                'day' => '2022-02-01',
            ),
            47 => 
            array (
                'id' => 2792,
                'hits' => 24,
                'device_id' => 160,
                'day' => '2022-01-01',
            ),
            48 => 
            array (
                'id' => 2793,
                'hits' => 24,
                'device_id' => 160,
                'day' => '2022-02-01',
            ),
            49 => 
            array (
                'id' => 2794,
                'hits' => 112,
                'device_id' => 161,
                'day' => '2022-01-01',
            ),
            50 => 
            array (
                'id' => 2795,
                'hits' => 96,
                'device_id' => 161,
                'day' => '2022-02-01',
            ),
            51 => 
            array (
                'id' => 2796,
                'hits' => 61,
                'device_id' => 162,
                'day' => '2022-01-01',
            ),
            52 => 
            array (
                'id' => 2797,
                'hits' => 60,
                'device_id' => 162,
                'day' => '2022-02-01',
            ),
            53 => 
            array (
                'id' => 2798,
                'hits' => 61,
                'device_id' => 163,
                'day' => '2022-01-01',
            ),
            54 => 
            array (
                'id' => 2799,
                'hits' => 49,
                'device_id' => 163,
                'day' => '2022-02-01',
            ),
            55 => 
            array (
                'id' => 2800,
                'hits' => 70,
                'device_id' => 164,
                'day' => '2022-01-01',
            ),
            56 => 
            array (
                'id' => 2801,
                'hits' => 66,
                'device_id' => 164,
                'day' => '2022-02-01',
            ),
            57 => 
            array (
                'id' => 2802,
                'hits' => 148,
                'device_id' => 168,
                'day' => '2022-01-01',
            ),
            58 => 
            array (
                'id' => 2803,
                'hits' => 93,
                'device_id' => 168,
                'day' => '2022-02-01',
            ),
            59 => 
            array (
                'id' => 2804,
                'hits' => 56,
                'device_id' => 172,
                'day' => '2022-01-01',
            ),
            60 => 
            array (
                'id' => 2805,
                'hits' => 56,
                'device_id' => 172,
                'day' => '2022-02-01',
            ),
            61 => 
            array (
                'id' => 2806,
                'hits' => 83,
                'device_id' => 177,
                'day' => '2022-01-01',
            ),
            62 => 
            array (
                'id' => 2807,
                'hits' => 73,
                'device_id' => 177,
                'day' => '2022-02-01',
            ),
            63 => 
            array (
                'id' => 2808,
                'hits' => 50,
                'device_id' => 178,
                'day' => '2022-01-01',
            ),
            64 => 
            array (
                'id' => 2809,
                'hits' => 59,
                'device_id' => 178,
                'day' => '2022-02-01',
            ),
            65 => 
            array (
                'id' => 2810,
                'hits' => 68,
                'device_id' => 180,
                'day' => '2022-01-01',
            ),
            66 => 
            array (
                'id' => 2811,
                'hits' => 46,
                'device_id' => 180,
                'day' => '2022-02-01',
            ),
            67 => 
            array (
                'id' => 2812,
                'hits' => 49,
                'device_id' => 181,
                'day' => '2022-01-01',
            ),
            68 => 
            array (
                'id' => 2813,
                'hits' => 35,
                'device_id' => 181,
                'day' => '2022-02-01',
            ),
            69 => 
            array (
                'id' => 2814,
                'hits' => 53,
                'device_id' => 182,
                'day' => '2022-01-01',
            ),
            70 => 
            array (
                'id' => 2815,
                'hits' => 33,
                'device_id' => 182,
                'day' => '2022-02-01',
            ),
            71 => 
            array (
                'id' => 2816,
                'hits' => 72,
                'device_id' => 183,
                'day' => '2022-01-01',
            ),
            72 => 
            array (
                'id' => 2817,
                'hits' => 49,
                'device_id' => 183,
                'day' => '2022-02-01',
            ),
            73 => 
            array (
                'id' => 2818,
                'hits' => 31,
                'device_id' => 184,
                'day' => '2022-01-01',
            ),
            74 => 
            array (
                'id' => 2819,
                'hits' => 23,
                'device_id' => 184,
                'day' => '2022-02-01',
            ),
            75 => 
            array (
                'id' => 2820,
                'hits' => 93,
                'device_id' => 185,
                'day' => '2022-01-01',
            ),
            76 => 
            array (
                'id' => 2821,
                'hits' => 65,
                'device_id' => 185,
                'day' => '2022-02-01',
            ),
            77 => 
            array (
                'id' => 2822,
                'hits' => 70,
                'device_id' => 189,
                'day' => '2022-01-01',
            ),
            78 => 
            array (
                'id' => 2823,
                'hits' => 55,
                'device_id' => 189,
                'day' => '2022-02-01',
            ),
            79 => 
            array (
                'id' => 2824,
                'hits' => 117,
                'device_id' => 190,
                'day' => '2022-01-01',
            ),
            80 => 
            array (
                'id' => 2825,
                'hits' => 95,
                'device_id' => 190,
                'day' => '2022-02-01',
            ),
            81 => 
            array (
                'id' => 2826,
                'hits' => 50,
                'device_id' => 191,
                'day' => '2022-01-01',
            ),
            82 => 
            array (
                'id' => 2827,
                'hits' => 76,
                'device_id' => 191,
                'day' => '2022-02-01',
            ),
            83 => 
            array (
                'id' => 2828,
                'hits' => 103,
                'device_id' => 192,
                'day' => '2022-01-01',
            ),
            84 => 
            array (
                'id' => 2829,
                'hits' => 60,
                'device_id' => 192,
                'day' => '2022-02-01',
            ),
        ));
        
        
    }
}