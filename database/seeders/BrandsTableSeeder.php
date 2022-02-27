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
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'AERON',
                'slug' => 'aeron',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'AFS',
                'slug' => 'afs',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'AFTER',
                'slug' => 'after',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'AHD',
                'slug' => 'ahd',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'AL360',
                'slug' => 'al360',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ALL IN',
                'slug' => 'all-in',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ALPINEFOIL',
                'slug' => 'alpinefoil',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'AMEX',
                'slug' => 'amex',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'AQUAPAC',
                'slug' => 'aquapac',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'ARROW',
                'slug' => 'arrow',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'ART',
                'slug' => 'art',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ATAN',
                'slug' => 'atan',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'BIC',
                'slug' => 'bic',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'BILLABONG',
                'slug' => 'billabong',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'BONZ SUP',
                'slug' => 'bonz-sup',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'BRUNOTTI',
                'slug' => 'brunotti',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'BUMP & JUMP',
                'slug' => 'bump-jump',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'C3',
                'slug' => 'c3',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'CHALLENGER',
                'slug' => 'challenger',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'CHINOOK',
                'slug' => 'chinook',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'COPELLO',
                'slug' => 'copello',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'DAKINE',
                'slug' => 'dakine',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'DEBOICHET',
                'slug' => 'deboichet',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'DECATHLON',
                'slug' => 'decathlon',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'DIVERS',
                'slug' => 'divers',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'DRAKE',
                'slug' => 'drake',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'DUOTONE',
                'slug' => 'duotone',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'DYNAFIBER',
                'slug' => 'dynafiber',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'ELIX',
                'slug' => 'elix',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ERD',
                'slug' => 'erd',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'EXOCET',
                'slug' => 'exocet',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'EZZY',
                'slug' => 'ezzy',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'F2',
                'slug' => 'f2',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'F4',
                'slug' => 'f4',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'FANATIC',
                'slug' => 'fanatic',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'FCS',
                'slug' => 'fcs',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'FIBERSPAR',
                'slug' => 'fiberspar',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'FIBERTECK',
                'slug' => 'fiberteck',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'FIN\'S',
                'slug' => 'fins',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'FONE',
                'slug' => 'fone',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'GA',
                'slug' => 'ga',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'GASOIL',
                'slug' => 'gasoil',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'GLISS ATTITUDE',
                'slug' => 'gliss-attitude',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'GOYA',
                'slug' => 'goya',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'GUN',
                'slug' => 'gun',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'HARKEN',
                'slug' => 'harken',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'HI TECH',
                'slug' => 'hi-tech',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'HIFLY',
                'slug' => 'hifly',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'HOBIE SUP',
                'slug' => 'hobie-sup',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'HORUE',
                'slug' => 'horue',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'HOT SAILS',
                'slug' => 'hot-sails',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'HOWZIT',
                'slug' => 'howzit',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'ION',
                'slug' => 'ion',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'JDC',
                'slug' => 'jdc',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'JP AUSTRALIA',
                'slug' => 'jp-australia',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'K4',
                'slug' => 'k4',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'LOFT',
                'slug' => 'loft',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'LOKAHI',
                'slug' => 'lokahi',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'LOKEFOIL',
                'slug' => 'lokefoil',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'MANERA',
                'slug' => 'manera',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'MAUI SAILS',
                'slug' => 'maui-sails',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'MAUI ULTRA FIN',
                'slug' => 'maui-ultra-fin',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'MFC',
                'slug' => 'mfc',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'MISTRAL',
                'slug' => 'mistral',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'MYSTIC',
                'slug' => 'mystic',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'NAISH',
                'slug' => 'naish',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'NAUTIX',
                'slug' => 'nautix',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'NEILPRYDE',
                'slug' => 'neilpryde',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'NEON',
                'slug' => 'neon',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'NORTH',
                'slug' => 'north',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'ONEILL',
                'slug' => 'oneill',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'OPTIMUM TIME',
                'slug' => 'optimum-time',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'OZED',
                'slug' => 'ozed',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'PACIFIC MOTION',
                'slug' => 'pacific-motion',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'PAT LOWE',
                'slug' => 'pat-lowe',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'PATRICK',
                'slug' => 'patrick',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'PHANTOM',
                'slug' => 'phantom',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'PICTURE',
                'slug' => 'picture',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'POINT 7',
                'slug' => 'point-7',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'POWEREX',
                'slug' => 'powerex',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'PROLIMIT',
                'slug' => 'prolimit',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'QUATRO',
                'slug' => 'quatro',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'REPTILE',
                'slug' => 'reptile',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'RESTUBE',
                'slug' => 'restube',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'RIP CURL',
                'slug' => 'rip-curl',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'ROTOMOD',
                'slug' => 'rotomod',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'RRD',
                'slug' => 'rrd',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'RYDE',
                'slug' => 'ryde',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'S2',
                'slug' => 's2',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'SEAWAG',
                'slug' => 'seawag',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'SELDEN',
                'slug' => 'selden',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'SELECT',
                'slug' => 'select',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'SEVENTYONE PERCENT',
                'slug' => 'seventyone-percent',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'SEVERNE',
                'slug' => 'severne',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'SIDE ON',
                'slug' => 'side-on',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'SIMMER',
                'slug' => 'simmer',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'SLINGSHOT',
                'slug' => 'slingshot',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'SPACE DOG',
                'slug' => 'space-dog',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'STARBOARD',
                'slug' => 'starboard',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'STREAMLINED',
                'slug' => 'streamlined',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'SUPLAYER',
                'slug' => 'suplayer',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'TAAROA',
                'slug' => 'taaroa',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'TABOU',
                'slug' => 'tabou',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'TECHNO LIMIT',
                'slug' => 'techno-limit',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'TECTONICS',
                'slug' => 'tectonics',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'THOMMEN T1',
                'slug' => 'thommen-t1',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'TIGA',
                'slug' => 'tiga',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'UFO',
                'slug' => 'ufo',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'UP SAILS',
                'slug' => 'up-sails',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'VANDAL',
                'slug' => 'vandal',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'WATTS',
                'slug' => 'watts',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'XO SAIL',
                'slug' => 'xo-sail',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'XSPAR',
                'slug' => 'xspar',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'XTREM VIDEO',
                'slug' => 'xtrem-video',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'YES SAIL',
                'slug' => 'yes-sail',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'ZAG',
                'slug' => 'zag',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'ZEEKO',
                'slug' => 'zeeko',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'AEROMOD',
                'slug' => 'aeromod',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'MANTAFOIL',
                'slug' => 'mantafoil',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'KETOS',
                'slug' => 'ketos',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'MAKO',
                'slug' => 'mako',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'TAKUMA',
                'slug' => 'takuma',
            ),
        ));
        
        
    }
}