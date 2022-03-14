<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AB+',
                'slug' => 'ab',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'AERON',
                'slug' => 'aeron',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AFS',
                'slug' => 'afs',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'AFTER',
                'slug' => 'after',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'AHD',
                'slug' => 'ahd',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'AL360',
                'slug' => 'al360',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ALL IN',
                'slug' => 'all-in',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ALPINEFOIL',
                'slug' => 'alpinefoil',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'AMEX',
                'slug' => 'amex',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'AQUAPAC',
                'slug' => 'aquapac',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'ARROW',
                'slug' => 'arrow',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ART',
                'slug' => 'art',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ATAN',
                'slug' => 'atan',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'BIC',
                'slug' => 'bic',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'BILLABONG',
                'slug' => 'billabong',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BONZ SUP',
                'slug' => 'bonz-sup',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BRUNOTTI',
                'slug' => 'brunotti',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BUMP & JUMP',
                'slug' => 'bump-jump',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'C3',
                'slug' => 'c3',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'CHALLENGER',
                'slug' => 'challenger',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'CHINOOK',
                'slug' => 'chinook',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'COPELLO',
                'slug' => 'copello',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'DAKINE',
                'slug' => 'dakine',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'DEBOICHET',
                'slug' => 'deboichet',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'DECATHLON',
                'slug' => 'decathlon',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'DIVERS',
                'slug' => 'divers',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'DRAKE',
                'slug' => 'drake',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'DUOTONE',
                'slug' => 'duotone',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'DYNAFIBER',
                'slug' => 'dynafiber',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'ELIX',
                'slug' => 'elix',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ERD',
                'slug' => 'erd',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'EXOCET',
                'slug' => 'exocet',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'EZZY',
                'slug' => 'ezzy',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'F2',
                'slug' => 'f2',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'F4',
                'slug' => 'f4',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'FANATIC',
                'slug' => 'fanatic',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'FCS',
                'slug' => 'fcs',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'FIBERSPAR',
                'slug' => 'fiberspar',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'FIBERTECK',
                'slug' => 'fiberteck',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'FIN\'S',
                'slug' => 'fins',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'FONE',
                'slug' => 'fone',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'GA',
                'slug' => 'ga',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'GASOIL',
                'slug' => 'gasoil',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'GLISS ATTITUDE',
                'slug' => 'gliss-attitude',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'GOYA',
                'slug' => 'goya',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'GUN',
                'slug' => 'gun',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'HARKEN',
                'slug' => 'harken',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'HI TECH',
                'slug' => 'hi-tech',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'HIFLY',
                'slug' => 'hifly',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'HOBIE SUP',
                'slug' => 'hobie-sup',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'HORUE',
                'slug' => 'horue',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'HOT SAILS',
                'slug' => 'hot-sails',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'HOWZIT',
                'slug' => 'howzit',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'ION',
                'slug' => 'ion',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'JDC',
                'slug' => 'jdc',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'JP AUSTRALIA',
                'slug' => 'jp-australia',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'K4',
                'slug' => 'k4',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'LOFT',
                'slug' => 'loft',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'LOKAHI',
                'slug' => 'lokahi',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'LOKEFOIL',
                'slug' => 'lokefoil',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'MANERA',
                'slug' => 'manera',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'MAUI SAILS',
                'slug' => 'maui-sails',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'MAUI ULTRA FIN',
                'slug' => 'maui-ultra-fin',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'MFC',
                'slug' => 'mfc',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'MISTRAL',
                'slug' => 'mistral',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'MYSTIC',
                'slug' => 'mystic',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'NAISH',
                'slug' => 'naish',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'NAUTIX',
                'slug' => 'nautix',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'NEILPRYDE',
                'slug' => 'neilpryde',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'NEON',
                'slug' => 'neon',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'NORTH',
                'slug' => 'north',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'ONEILL',
                'slug' => 'oneill',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'OPTIMUM TIME',
                'slug' => 'optimum-time',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'OZED',
                'slug' => 'ozed',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'PACIFIC MOTION',
                'slug' => 'pacific-motion',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'PAT LOWE',
                'slug' => 'pat-lowe',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'PATRICK',
                'slug' => 'patrick',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'PHANTOM',
                'slug' => 'phantom',
                'logo_path' => 'phantom.png',
                'body' => 'blablabla',
                'url' => 'https://www.phantom-windsurfing.com',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'PICTURE',
                'slug' => 'picture',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'POINT 7',
                'slug' => 'point-7',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'POWEREX',
                'slug' => 'powerex',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'PROLIMIT',
                'slug' => 'prolimit',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'QUATRO',
                'slug' => 'quatro',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'REPTILE',
                'slug' => 'reptile',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'RESTUBE',
                'slug' => 'restube',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'RIP CURL',
                'slug' => 'rip-curl',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'ROTOMOD',
                'slug' => 'rotomod',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'RRD',
                'slug' => 'rrd',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'RYDE',
                'slug' => 'ryde',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'S2',
                'slug' => 's2',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'SEAWAG',
                'slug' => 'seawag',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'SELDEN',
                'slug' => 'selden',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'SELECT',
                'slug' => 'select',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'SEVENTYONE PERCENT',
                'slug' => 'seventyone-percent',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'SEVERNE',
                'slug' => 'severne',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'SIDE ON',
                'slug' => 'side-on',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'SIMMER',
                'slug' => 'simmer',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'SLINGSHOT',
                'slug' => 'slingshot',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'SPACE DOG',
                'slug' => 'space-dog',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'STARBOARD',
                'slug' => 'starboard',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'STREAMLINED',
                'slug' => 'streamlined',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'SUPLAYER',
                'slug' => 'suplayer',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'TAAROA',
                'slug' => 'taaroa',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'TABOU',
                'slug' => 'tabou',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'TECHNO LIMIT',
                'slug' => 'techno-limit',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'TECTONICS',
                'slug' => 'tectonics',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'THOMMEN T1',
                'slug' => 'thommen-t1',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'TIGA',
                'slug' => 'tiga',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'UFO',
                'slug' => 'ufo',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'UP SAILS',
                'slug' => 'up-sails',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'VANDAL',
                'slug' => 'vandal',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'WATTS',
                'slug' => 'watts',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'XO SAIL',
                'slug' => 'xo-sail',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'XSPAR',
                'slug' => 'xspar',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'XTREM VIDEO',
                'slug' => 'xtrem-video',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'YES SAIL',
                'slug' => 'yes-sail',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'ZAG',
                'slug' => 'zag',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'ZEEKO',
                'slug' => 'zeeko',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'AEROMOD',
                'slug' => 'aeromod',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'MANTAFOIL',
                'slug' => 'mantafoil',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'KETOS',
                'slug' => 'ketos',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'MAKO',
                'slug' => 'mako',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'TAKUMA',
                'slug' => 'takuma',
                'logo_path' => NULL,
                'body' => NULL,
                'url' => NULL,
            ),
        ));
        
        
    }
}