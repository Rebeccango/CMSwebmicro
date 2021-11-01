<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 5,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 3,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 5,
                'role_id' => 3,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 5,
            ),
            11 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            13 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            14 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 8,
                'role_id' => 3,
            ),
            17 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 9,
                'role_id' => 3,
            ),
            19 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            21 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 11,
                'role_id' => 3,
            ),
            23 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 12,
                'role_id' => 3,
            ),
            25 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 13,
                'role_id' => 3,
            ),
            27 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 14,
                'role_id' => 3,
            ),
            29 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            36 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 21,
                'role_id' => 3,
            ),
            38 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 25,
                'role_id' => 3,
            ),
            43 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            44 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 26,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 26,
                'role_id' => 4,
            ),
            47 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 27,
                'role_id' => 3,
            ),
            49 => 
            array (
                'permission_id' => 27,
                'role_id' => 4,
            ),
            50 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            51 => 
            array (
                'permission_id' => 28,
                'role_id' => 3,
            ),
            52 => 
            array (
                'permission_id' => 28,
                'role_id' => 4,
            ),
            53 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 29,
                'role_id' => 3,
            ),
            55 => 
            array (
                'permission_id' => 29,
                'role_id' => 4,
            ),
            56 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 30,
                'role_id' => 3,
            ),
            58 => 
            array (
                'permission_id' => 30,
                'role_id' => 4,
            ),
            59 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 31,
                'role_id' => 3,
            ),
            61 => 
            array (
                'permission_id' => 31,
                'role_id' => 4,
            ),
            62 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 32,
                'role_id' => 3,
            ),
            64 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 33,
                'role_id' => 3,
            ),
            66 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 34,
                'role_id' => 3,
            ),
            68 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 55,
                'role_id' => 3,
            ),
            70 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 56,
                'role_id' => 3,
            ),
            72 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 57,
                'role_id' => 3,
            ),
            74 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 58,
                'role_id' => 3,
            ),
            76 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 59,
                'role_id' => 3,
            ),
            78 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 80,
                'role_id' => 3,
            ),
            80 => 
            array (
                'permission_id' => 80,
                'role_id' => 4,
            ),
            81 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 81,
                'role_id' => 3,
            ),
            83 => 
            array (
                'permission_id' => 81,
                'role_id' => 4,
            ),
            84 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 82,
                'role_id' => 3,
            ),
            86 => 
            array (
                'permission_id' => 82,
                'role_id' => 4,
            ),
            87 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 83,
                'role_id' => 3,
            ),
            89 => 
            array (
                'permission_id' => 83,
                'role_id' => 4,
            ),
            90 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 84,
                'role_id' => 3,
            ),
            92 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            93 => 
            array (
                'permission_id' => 105,
                'role_id' => 3,
            ),
            94 => 
            array (
                'permission_id' => 105,
                'role_id' => 4,
            ),
            95 => 
            array (
                'permission_id' => 105,
                'role_id' => 5,
            ),
            96 => 
            array (
                'permission_id' => 106,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 106,
                'role_id' => 3,
            ),
            98 => 
            array (
                'permission_id' => 106,
                'role_id' => 4,
            ),
            99 => 
            array (
                'permission_id' => 106,
                'role_id' => 5,
            ),
            100 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 107,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 107,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 107,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 108,
                'role_id' => 1,
            ),
            105 => 
            array (
                'permission_id' => 108,
                'role_id' => 3,
            ),
            106 => 
            array (
                'permission_id' => 108,
                'role_id' => 4,
            ),
            107 => 
            array (
                'permission_id' => 108,
                'role_id' => 5,
            ),
            108 => 
            array (
                'permission_id' => 109,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 109,
                'role_id' => 3,
            ),
            110 => 
            array (
                'permission_id' => 109,
                'role_id' => 4,
            ),
            111 => 
            array (
                'permission_id' => 109,
                'role_id' => 5,
            ),
            112 => 
            array (
                'permission_id' => 110,
                'role_id' => 1,
            ),
            113 => 
            array (
                'permission_id' => 110,
                'role_id' => 3,
            ),
            114 => 
            array (
                'permission_id' => 111,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 111,
                'role_id' => 3,
            ),
            116 => 
            array (
                'permission_id' => 112,
                'role_id' => 1,
            ),
            117 => 
            array (
                'permission_id' => 112,
                'role_id' => 3,
            ),
            118 => 
            array (
                'permission_id' => 113,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 113,
                'role_id' => 3,
            ),
            120 => 
            array (
                'permission_id' => 114,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 114,
                'role_id' => 3,
            ),
            122 => 
            array (
                'permission_id' => 115,
                'role_id' => 1,
            ),
            123 => 
            array (
                'permission_id' => 115,
                'role_id' => 3,
            ),
            124 => 
            array (
                'permission_id' => 116,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 116,
                'role_id' => 3,
            ),
            126 => 
            array (
                'permission_id' => 117,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 117,
                'role_id' => 3,
            ),
            128 => 
            array (
                'permission_id' => 118,
                'role_id' => 1,
            ),
            129 => 
            array (
                'permission_id' => 118,
                'role_id' => 3,
            ),
            130 => 
            array (
                'permission_id' => 119,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 120,
                'role_id' => 1,
            ),
            132 => 
            array (
                'permission_id' => 120,
                'role_id' => 3,
            ),
            133 => 
            array (
                'permission_id' => 121,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 121,
                'role_id' => 3,
            ),
            135 => 
            array (
                'permission_id' => 122,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 122,
                'role_id' => 3,
            ),
            137 => 
            array (
                'permission_id' => 123,
                'role_id' => 1,
            ),
            138 => 
            array (
                'permission_id' => 123,
                'role_id' => 3,
            ),
            139 => 
            array (
                'permission_id' => 124,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 124,
                'role_id' => 3,
            ),
            141 => 
            array (
                'permission_id' => 155,
                'role_id' => 1,
            ),
            142 => 
            array (
                'permission_id' => 155,
                'role_id' => 3,
            ),
            143 => 
            array (
                'permission_id' => 156,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 156,
                'role_id' => 3,
            ),
            145 => 
            array (
                'permission_id' => 157,
                'role_id' => 1,
            ),
            146 => 
            array (
                'permission_id' => 157,
                'role_id' => 3,
            ),
            147 => 
            array (
                'permission_id' => 158,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 158,
                'role_id' => 3,
            ),
            149 => 
            array (
                'permission_id' => 159,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 160,
                'role_id' => 1,
            ),
            151 => 
            array (
                'permission_id' => 160,
                'role_id' => 3,
            ),
            152 => 
            array (
                'permission_id' => 161,
                'role_id' => 1,
            ),
            153 => 
            array (
                'permission_id' => 161,
                'role_id' => 3,
            ),
            154 => 
            array (
                'permission_id' => 162,
                'role_id' => 1,
            ),
            155 => 
            array (
                'permission_id' => 162,
                'role_id' => 3,
            ),
            156 => 
            array (
                'permission_id' => 163,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 163,
                'role_id' => 3,
            ),
            158 => 
            array (
                'permission_id' => 164,
                'role_id' => 1,
            ),
            159 => 
            array (
                'permission_id' => 164,
                'role_id' => 3,
            ),
            160 => 
            array (
                'permission_id' => 165,
                'role_id' => 1,
            ),
            161 => 
            array (
                'permission_id' => 165,
                'role_id' => 3,
            ),
            162 => 
            array (
                'permission_id' => 166,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 166,
                'role_id' => 3,
            ),
            164 => 
            array (
                'permission_id' => 167,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 167,
                'role_id' => 3,
            ),
            166 => 
            array (
                'permission_id' => 168,
                'role_id' => 1,
            ),
            167 => 
            array (
                'permission_id' => 169,
                'role_id' => 1,
            ),
            168 => 
            array (
                'permission_id' => 170,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 170,
                'role_id' => 3,
            ),
            170 => 
            array (
                'permission_id' => 170,
                'role_id' => 4,
            ),
            171 => 
            array (
                'permission_id' => 171,
                'role_id' => 1,
            ),
            172 => 
            array (
                'permission_id' => 171,
                'role_id' => 3,
            ),
            173 => 
            array (
                'permission_id' => 171,
                'role_id' => 4,
            ),
            174 => 
            array (
                'permission_id' => 172,
                'role_id' => 1,
            ),
            175 => 
            array (
                'permission_id' => 172,
                'role_id' => 3,
            ),
            176 => 
            array (
                'permission_id' => 172,
                'role_id' => 4,
            ),
            177 => 
            array (
                'permission_id' => 173,
                'role_id' => 1,
            ),
            178 => 
            array (
                'permission_id' => 173,
                'role_id' => 3,
            ),
            179 => 
            array (
                'permission_id' => 173,
                'role_id' => 4,
            ),
            180 => 
            array (
                'permission_id' => 174,
                'role_id' => 1,
            ),
            181 => 
            array (
                'permission_id' => 174,
                'role_id' => 3,
            ),
            182 => 
            array (
                'permission_id' => 174,
                'role_id' => 4,
            ),
            183 => 
            array (
                'permission_id' => 180,
                'role_id' => 1,
            ),
            184 => 
            array (
                'permission_id' => 180,
                'role_id' => 3,
            ),
            185 => 
            array (
                'permission_id' => 180,
                'role_id' => 4,
            ),
            186 => 
            array (
                'permission_id' => 181,
                'role_id' => 1,
            ),
            187 => 
            array (
                'permission_id' => 181,
                'role_id' => 3,
            ),
            188 => 
            array (
                'permission_id' => 181,
                'role_id' => 4,
            ),
            189 => 
            array (
                'permission_id' => 182,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 182,
                'role_id' => 3,
            ),
            191 => 
            array (
                'permission_id' => 182,
                'role_id' => 4,
            ),
            192 => 
            array (
                'permission_id' => 183,
                'role_id' => 1,
            ),
            193 => 
            array (
                'permission_id' => 183,
                'role_id' => 3,
            ),
            194 => 
            array (
                'permission_id' => 183,
                'role_id' => 4,
            ),
            195 => 
            array (
                'permission_id' => 184,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 184,
                'role_id' => 3,
            ),
            197 => 
            array (
                'permission_id' => 184,
                'role_id' => 4,
            ),
            198 => 
            array (
                'permission_id' => 186,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 187,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 188,
                'role_id' => 1,
            ),
            201 => 
            array (
                'permission_id' => 189,
                'role_id' => 1,
            ),
            202 => 
            array (
                'permission_id' => 190,
                'role_id' => 1,
            ),
            203 => 
            array (
                'permission_id' => 191,
                'role_id' => 1,
            ),
            204 => 
            array (
                'permission_id' => 192,
                'role_id' => 1,
            ),
            205 => 
            array (
                'permission_id' => 193,
                'role_id' => 1,
            ),
            206 => 
            array (
                'permission_id' => 193,
                'role_id' => 3,
            ),
            207 => 
            array (
                'permission_id' => 194,
                'role_id' => 1,
            ),
            208 => 
            array (
                'permission_id' => 194,
                'role_id' => 3,
            ),
            209 => 
            array (
                'permission_id' => 195,
                'role_id' => 1,
            ),
            210 => 
            array (
                'permission_id' => 195,
                'role_id' => 3,
            ),
            211 => 
            array (
                'permission_id' => 196,
                'role_id' => 1,
            ),
            212 => 
            array (
                'permission_id' => 197,
                'role_id' => 1,
            ),
            213 => 
            array (
                'permission_id' => 198,
                'role_id' => 1,
            ),
            214 => 
            array (
                'permission_id' => 198,
                'role_id' => 3,
            ),
            215 => 
            array (
                'permission_id' => 199,
                'role_id' => 1,
            ),
            216 => 
            array (
                'permission_id' => 199,
                'role_id' => 3,
            ),
            217 => 
            array (
                'permission_id' => 200,
                'role_id' => 1,
            ),
            218 => 
            array (
                'permission_id' => 200,
                'role_id' => 3,
            ),
            219 => 
            array (
                'permission_id' => 201,
                'role_id' => 1,
            ),
            220 => 
            array (
                'permission_id' => 202,
                'role_id' => 1,
            ),
            221 => 
            array (
                'permission_id' => 203,
                'role_id' => 1,
            ),
            222 => 
            array (
                'permission_id' => 203,
                'role_id' => 3,
            ),
            223 => 
            array (
                'permission_id' => 204,
                'role_id' => 1,
            ),
            224 => 
            array (
                'permission_id' => 204,
                'role_id' => 3,
            ),
            225 => 
            array (
                'permission_id' => 205,
                'role_id' => 1,
            ),
            226 => 
            array (
                'permission_id' => 205,
                'role_id' => 3,
            ),
            227 => 
            array (
                'permission_id' => 206,
                'role_id' => 1,
            ),
            228 => 
            array (
                'permission_id' => 207,
                'role_id' => 1,
            ),
            229 => 
            array (
                'permission_id' => 208,
                'role_id' => 1,
            ),
            230 => 
            array (
                'permission_id' => 208,
                'role_id' => 3,
            ),
            231 => 
            array (
                'permission_id' => 209,
                'role_id' => 1,
            ),
            232 => 
            array (
                'permission_id' => 210,
                'role_id' => 1,
            ),
            233 => 
            array (
                'permission_id' => 211,
                'role_id' => 1,
            ),
            234 => 
            array (
                'permission_id' => 212,
                'role_id' => 1,
            ),
            235 => 
            array (
                'permission_id' => 213,
                'role_id' => 1,
            ),
            236 => 
            array (
                'permission_id' => 214,
                'role_id' => 1,
            ),
            237 => 
            array (
                'permission_id' => 214,
                'role_id' => 3,
            ),
            238 => 
            array (
                'permission_id' => 214,
                'role_id' => 4,
            ),
            239 => 
            array (
                'permission_id' => 215,
                'role_id' => 1,
            ),
            240 => 
            array (
                'permission_id' => 215,
                'role_id' => 3,
            ),
            241 => 
            array (
                'permission_id' => 215,
                'role_id' => 4,
            ),
            242 => 
            array (
                'permission_id' => 216,
                'role_id' => 1,
            ),
            243 => 
            array (
                'permission_id' => 216,
                'role_id' => 3,
            ),
            244 => 
            array (
                'permission_id' => 216,
                'role_id' => 4,
            ),
            245 => 
            array (
                'permission_id' => 217,
                'role_id' => 1,
            ),
            246 => 
            array (
                'permission_id' => 217,
                'role_id' => 3,
            ),
            247 => 
            array (
                'permission_id' => 217,
                'role_id' => 4,
            ),
            248 => 
            array (
                'permission_id' => 218,
                'role_id' => 1,
            ),
            249 => 
            array (
                'permission_id' => 218,
                'role_id' => 4,
            ),
            250 => 
            array (
                'permission_id' => 219,
                'role_id' => 1,
            ),
            251 => 
            array (
                'permission_id' => 219,
                'role_id' => 3,
            ),
            252 => 
            array (
                'permission_id' => 219,
                'role_id' => 4,
            ),
            253 => 
            array (
                'permission_id' => 220,
                'role_id' => 1,
            ),
            254 => 
            array (
                'permission_id' => 220,
                'role_id' => 3,
            ),
            255 => 
            array (
                'permission_id' => 220,
                'role_id' => 4,
            ),
            256 => 
            array (
                'permission_id' => 221,
                'role_id' => 1,
            ),
            257 => 
            array (
                'permission_id' => 221,
                'role_id' => 3,
            ),
            258 => 
            array (
                'permission_id' => 221,
                'role_id' => 4,
            ),
            259 => 
            array (
                'permission_id' => 222,
                'role_id' => 1,
            ),
            260 => 
            array (
                'permission_id' => 222,
                'role_id' => 3,
            ),
            261 => 
            array (
                'permission_id' => 222,
                'role_id' => 4,
            ),
            262 => 
            array (
                'permission_id' => 223,
                'role_id' => 1,
            ),
            263 => 
            array (
                'permission_id' => 223,
                'role_id' => 4,
            ),
            264 => 
            array (
                'permission_id' => 224,
                'role_id' => 1,
            ),
            265 => 
            array (
                'permission_id' => 224,
                'role_id' => 3,
            ),
            266 => 
            array (
                'permission_id' => 224,
                'role_id' => 4,
            ),
            267 => 
            array (
                'permission_id' => 225,
                'role_id' => 1,
            ),
            268 => 
            array (
                'permission_id' => 225,
                'role_id' => 3,
            ),
            269 => 
            array (
                'permission_id' => 225,
                'role_id' => 4,
            ),
            270 => 
            array (
                'permission_id' => 226,
                'role_id' => 1,
            ),
            271 => 
            array (
                'permission_id' => 226,
                'role_id' => 3,
            ),
            272 => 
            array (
                'permission_id' => 226,
                'role_id' => 4,
            ),
            273 => 
            array (
                'permission_id' => 227,
                'role_id' => 1,
            ),
            274 => 
            array (
                'permission_id' => 227,
                'role_id' => 3,
            ),
            275 => 
            array (
                'permission_id' => 227,
                'role_id' => 4,
            ),
            276 => 
            array (
                'permission_id' => 228,
                'role_id' => 1,
            ),
            277 => 
            array (
                'permission_id' => 228,
                'role_id' => 3,
            ),
            278 => 
            array (
                'permission_id' => 228,
                'role_id' => 4,
            ),
            279 => 
            array (
                'permission_id' => 229,
                'role_id' => 1,
            ),
            280 => 
            array (
                'permission_id' => 230,
                'role_id' => 1,
            ),
            281 => 
            array (
                'permission_id' => 231,
                'role_id' => 1,
            ),
            282 => 
            array (
                'permission_id' => 231,
                'role_id' => 3,
            ),
            283 => 
            array (
                'permission_id' => 231,
                'role_id' => 4,
            ),
            284 => 
            array (
                'permission_id' => 232,
                'role_id' => 1,
            ),
            285 => 
            array (
                'permission_id' => 232,
                'role_id' => 3,
            ),
            286 => 
            array (
                'permission_id' => 232,
                'role_id' => 4,
            ),
            287 => 
            array (
                'permission_id' => 233,
                'role_id' => 1,
            ),
            288 => 
            array (
                'permission_id' => 233,
                'role_id' => 3,
            ),
            289 => 
            array (
                'permission_id' => 233,
                'role_id' => 4,
            ),
            290 => 
            array (
                'permission_id' => 234,
                'role_id' => 1,
            ),
            291 => 
            array (
                'permission_id' => 234,
                'role_id' => 3,
            ),
            292 => 
            array (
                'permission_id' => 234,
                'role_id' => 4,
            ),
            293 => 
            array (
                'permission_id' => 235,
                'role_id' => 1,
            ),
            294 => 
            array (
                'permission_id' => 235,
                'role_id' => 4,
            ),
            295 => 
            array (
                'permission_id' => 236,
                'role_id' => 1,
            ),
            296 => 
            array (
                'permission_id' => 236,
                'role_id' => 3,
            ),
            297 => 
            array (
                'permission_id' => 237,
                'role_id' => 1,
            ),
            298 => 
            array (
                'permission_id' => 237,
                'role_id' => 3,
            ),
            299 => 
            array (
                'permission_id' => 238,
                'role_id' => 1,
            ),
            300 => 
            array (
                'permission_id' => 238,
                'role_id' => 3,
            ),
            301 => 
            array (
                'permission_id' => 239,
                'role_id' => 1,
            ),
            302 => 
            array (
                'permission_id' => 239,
                'role_id' => 3,
            ),
            303 => 
            array (
                'permission_id' => 240,
                'role_id' => 1,
            ),
            304 => 
            array (
                'permission_id' => 246,
                'role_id' => 1,
            ),
            305 => 
            array (
                'permission_id' => 246,
                'role_id' => 3,
            ),
            306 => 
            array (
                'permission_id' => 246,
                'role_id' => 4,
            ),
            307 => 
            array (
                'permission_id' => 247,
                'role_id' => 1,
            ),
            308 => 
            array (
                'permission_id' => 247,
                'role_id' => 3,
            ),
            309 => 
            array (
                'permission_id' => 247,
                'role_id' => 4,
            ),
            310 => 
            array (
                'permission_id' => 248,
                'role_id' => 1,
            ),
            311 => 
            array (
                'permission_id' => 248,
                'role_id' => 3,
            ),
            312 => 
            array (
                'permission_id' => 248,
                'role_id' => 4,
            ),
            313 => 
            array (
                'permission_id' => 249,
                'role_id' => 1,
            ),
            314 => 
            array (
                'permission_id' => 249,
                'role_id' => 3,
            ),
            315 => 
            array (
                'permission_id' => 249,
                'role_id' => 4,
            ),
            316 => 
            array (
                'permission_id' => 250,
                'role_id' => 1,
            ),
            317 => 
            array (
                'permission_id' => 250,
                'role_id' => 3,
            ),
            318 => 
            array (
                'permission_id' => 250,
                'role_id' => 4,
            ),
            319 => 
            array (
                'permission_id' => 251,
                'role_id' => 1,
            ),
            320 => 
            array (
                'permission_id' => 251,
                'role_id' => 4,
            ),
            321 => 
            array (
                'permission_id' => 252,
                'role_id' => 1,
            ),
            322 => 
            array (
                'permission_id' => 252,
                'role_id' => 4,
            ),
            323 => 
            array (
                'permission_id' => 253,
                'role_id' => 1,
            ),
            324 => 
            array (
                'permission_id' => 253,
                'role_id' => 4,
            ),
            325 => 
            array (
                'permission_id' => 254,
                'role_id' => 1,
            ),
            326 => 
            array (
                'permission_id' => 254,
                'role_id' => 4,
            ),
            327 => 
            array (
                'permission_id' => 255,
                'role_id' => 1,
            ),
            328 => 
            array (
                'permission_id' => 255,
                'role_id' => 4,
            ),
            329 => 
            array (
                'permission_id' => 256,
                'role_id' => 1,
            ),
            330 => 
            array (
                'permission_id' => 256,
                'role_id' => 3,
            ),
            331 => 
            array (
                'permission_id' => 256,
                'role_id' => 4,
            ),
            332 => 
            array (
                'permission_id' => 257,
                'role_id' => 1,
            ),
            333 => 
            array (
                'permission_id' => 257,
                'role_id' => 3,
            ),
            334 => 
            array (
                'permission_id' => 257,
                'role_id' => 4,
            ),
            335 => 
            array (
                'permission_id' => 258,
                'role_id' => 1,
            ),
            336 => 
            array (
                'permission_id' => 258,
                'role_id' => 3,
            ),
            337 => 
            array (
                'permission_id' => 258,
                'role_id' => 4,
            ),
            338 => 
            array (
                'permission_id' => 259,
                'role_id' => 1,
            ),
            339 => 
            array (
                'permission_id' => 259,
                'role_id' => 3,
            ),
            340 => 
            array (
                'permission_id' => 259,
                'role_id' => 4,
            ),
            341 => 
            array (
                'permission_id' => 260,
                'role_id' => 1,
            ),
            342 => 
            array (
                'permission_id' => 260,
                'role_id' => 4,
            ),
            343 => 
            array (
                'permission_id' => 261,
                'role_id' => 1,
            ),
            344 => 
            array (
                'permission_id' => 261,
                'role_id' => 3,
            ),
            345 => 
            array (
                'permission_id' => 261,
                'role_id' => 4,
            ),
            346 => 
            array (
                'permission_id' => 262,
                'role_id' => 1,
            ),
            347 => 
            array (
                'permission_id' => 262,
                'role_id' => 3,
            ),
            348 => 
            array (
                'permission_id' => 262,
                'role_id' => 4,
            ),
            349 => 
            array (
                'permission_id' => 263,
                'role_id' => 1,
            ),
            350 => 
            array (
                'permission_id' => 263,
                'role_id' => 3,
            ),
            351 => 
            array (
                'permission_id' => 263,
                'role_id' => 4,
            ),
            352 => 
            array (
                'permission_id' => 264,
                'role_id' => 1,
            ),
            353 => 
            array (
                'permission_id' => 264,
                'role_id' => 3,
            ),
            354 => 
            array (
                'permission_id' => 264,
                'role_id' => 4,
            ),
            355 => 
            array (
                'permission_id' => 265,
                'role_id' => 1,
            ),
            356 => 
            array (
                'permission_id' => 265,
                'role_id' => 4,
            ),
            357 => 
            array (
                'permission_id' => 266,
                'role_id' => 1,
            ),
            358 => 
            array (
                'permission_id' => 267,
                'role_id' => 1,
            ),
        ));
        
        
    }
}