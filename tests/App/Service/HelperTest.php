<?php

namespace Tests\App\Service;

use App\Service\Helper;
use App\Vo\Word;
use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
    public function testArray_uniqueCaseInsensitive(): void
    {
        $helper = new Helper();

        $input = [
            'Case',
            'CASE',
            'inst',
            'case',
            'insT',
            'ONE',
        ];
        $actual = $helper->array_uniqueCaseInsensitive($input);
        $expected = [
            'Case',
            'inst',
            'ONE',
        ];
        self::assertSame($expected, $actual);
    }

    public function testArray_diff_inLowercase(): void
    {
        $helper = new Helper();

        $array1 = array(
            'sTay1',
            'Leave1',
            'STAY2',
            'LEAVE2',
        );
        $array2 = array(
            'leave1',
        );
        $array3 = array(
            'leave2',
        );
        $actual = $helper->array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
            'sTay1',
            'STAY2',
        );
        self::assertSame($expected, $actual);

        $array1 = array(
            new Word('sTay1', ''),
            new Word('Leave1', ''),
            new Word('STAY2', ''),
            new Word('LEAVE2', ''),
        );
        $array2 = array(
            'leave1',
        );
        $array3 = array(
            'leave2',
        );
        $words = $helper->array_diff_inLowercase($array1, $array2, $array3);
        self::assertSame('sTay1', "$words[0]");
        self::assertSame('STAY2', "$words[1]");

        $array1 = array(
            new Word('sT-ay1', ''),
            new Word('Leave1', ''),
            new Word('STAY2', ''),
            new Word('LEAVE2', ''),
        );
        $array2 = array(
            'leave1',
        );
        $array3 = array(
            'leave2',
        );
        $words = $helper->array_diff_inLowercase($array1, $array2, $array3);
        self::assertSame('sT-ay1', "$words[0]");
        self::assertSame('STAY2', "$words[1]");

        $array1 = ['on', 'erwerewr'];
        $array2 = ['on'];
        $array3 = [];
        $actual = $helper->array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
            'erwerewr',
        );
        self::assertSame($expected, $actual);

        $array1 = ['on', 'alice', 'erwerewr'];
        $array2 = ['on'];
        $array3 = array (
                0 => 'alice',
                1 => 'arthur',
                2 => 'brandt',
                3 => 'bwana',
                4 => 'cadillac',
                5 => 'carlyle',
                6 => 'charlie',
                7 => 'claire',
                8 => 'congo',
                9 => 'cuban',
                10 => 'dorian',
                11 => 'dr',
                12 => 'franklin',
                13 => 'godiva',
                14 => 'grant',
                15 => 'humungo',
                16 => 'ipkiss',
                17 => 'jackson',
                18 => 'kellaway',
                19 => 'landfill',
                20 => 'latin',
                21 => 'lieutenant',
                22 => 'loki',
                23 => 'margaret',
                24 => 'milo',
                25 => 'napoleon',
                26 => 'neuman',
                27 => 'niko',
                28 => 'odin',
                29 => 'peenman',
                30 => 'peggy',
                31 => 'pete',
                32 => 'porsche',
                33 => 'ramsey',
                34 => 'ripley',
                35 => 'romeo',
                36 => 'rorschach',
                37 => 'scarlet',
                38 => 'stanley',
                39 => 'tilton',
                40 => 'tim',
                41 => 'tina',
                42 => 'tommy',
                43 => 'tyrel',
                44 => 'valhalla',
                45 => 'vegas',
            );
        $actual = $helper->array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
            'erwerewr',
        );
        self::assertSame($expected, $actual);

        // Big array2
        $array1 = ['on', 'erwerewr'];
        $array2 = array (
            1147 => 'monkeys',
            1148 => 'monster',
            1149 => 'month',
            1150 => 'months',
            1151 => 'moon',
            1152 => 'more',
            1153 => 'morgue',
            1154 => 'morning',
            1155 => 'mortal',
            1156 => 'mortals',
            1157 => 'most',
            1158 => 'mother',
            1159 => 'motherfucker',
            1160 => 'mouth',
            1161 => 'move',
            1162 => 'movement',
            1163 => 'moves',
            1164 => 'movies',
            1165 => 'mozart',
            1166 => 'mr',
            1167 => 'mrs',
            1168 => 'much',
            1169 => 'muggle',
            1170 => 'muggle-born',
            1171 => 'muggles',
            1172 => 'mum',
            1173 => 'mummy',
            1174 => 'murder',
            1175 => 'music',
            1176 => 'must',
            1177 => 'my',
            1178 => 'myself',
            1179 => 'mythology',
            1180 => 'name',
            1181 => 'named',
            1182 => 'names',
            1183 => 'nap',
            1184 => 'napping',
            1185 => 'narcissa',
            1186 => 'nasty',
            1187 => 'natural',
            1188 => 'naturally',
            1189 => 'nature',
            1190 => 'near',
            1191 => 'nearly',
            1192 => 'necessary',
            1193 => 'neck',
            1194 => 'necks',
            1195 => 'need',
            1196 => 'needed',
            1197 => 'needs',
            1198 => 'negotiate',
            1199 => 'nerves',
            1200 => 'never',
            1201 => 'new',
            1202 => 'news',
            1203 => 'next',
            1204 => 'nice',
            1205 => 'night',
            1206 => 'nightfall',
            1207 => 'nights',
            1208 => 'nine',
            1209 => 'nineteen',
            1210 => 'ninety-five',
            1211 => 'ninety-four',
            1212 => 'ninety-three',
            1213 => 'ninety-two',
            1214 => 'no',
            1215 => 'nobody',
            1216 => 'nod',
            1217 => 'noise',
            1218 => 'none',
            1219 => 'nope',
            1220 => 'normal',
            1221 => 'north',
            1222 => 'norwegian-style',
            1223 => 'nose',
            1224 => 'not',
            1225 => 'notes',
            1226 => 'nothing',
            1227 => 'notice',
            1228 => 'noticed',
            1229 => 'now',
            1230 => 'number',
            1231 => 'numbers',
            1232 => 'nuts',
            1233 => 'obey',
            1234 => 'object',
            1235 => 'objects',
            1236 => 'observe',
            1237 => 'obvious',
            1238 => 'obviously',
            1239 => 'of',
            1240 => 'off',
            1241 => 'offer',
            1242 => 'office',
            1243 => 'officer',
            1244 => 'officers',
            1245 => 'often',
            1246 => 'oh',
            1247 => 'oil',
            1248 => 'ok',
            1249 => 'okay',
            1250 => 'old',
            1251 => 'older',
            1252 => 'oldest',
            1253 => 'ollivander',
            1254 => 'on',
            1255 => 'once',
            1256 => 'one',
            1257 => 'only',
            1258 => 'oops',
            1259 => 'open',
            1260 => 'opens',
            1261 => 'opinion',
            1262 => 'opponents',
            1263 => 'opportunities',
            1264 => 'opposite',
            1265 => 'or',
            1266 => 'orange',
            1267 => 'order',
            1268 => 'ordered',
            1269 => 'organization',
            1270 => 'organizations',
            1271 => 'original',
            1272 => 'orphans',
            1273 => 'other',
            1274 => 'others',
            1275 => 'our',
            1276 => 'ours',
            1277 => 'ourselves',
            1278 => 'out',
            1279 => 'outside',
            1280 => 'over',
            1281 => 'overcome',
            1282 => 'owl',
        );
        $array3 = array (
                0 => 'alice',
                1 => 'arthur',
                2 => 'brandt',
                3 => 'bwana',
                4 => 'cadillac',
                5 => 'carlyle',
                6 => 'charlie',
                7 => 'claire',
                8 => 'congo',
                9 => 'cuban',
                10 => 'dorian',
                11 => 'dr',
                12 => 'franklin',
                13 => 'godiva',
                14 => 'grant',
                15 => 'humungo',
                16 => 'ipkiss',
                17 => 'jackson',
                18 => 'kellaway',
                19 => 'landfill',
                20 => 'latin',
                21 => 'lieutenant',
                22 => 'loki',
                23 => 'margaret',
                24 => 'milo',
                25 => 'napoleon',
                26 => 'neuman',
                27 => 'niko',
                28 => 'odin',
                29 => 'peenman',
                30 => 'peggy',
                31 => 'pete',
                32 => 'porsche',
                33 => 'ramsey',
                34 => 'ripley',
                35 => 'romeo',
                36 => 'rorschach',
                37 => 'scarlet',
                38 => 'stanley',
                39 => 'tilton',
                40 => 'tim',
                41 => 'tina',
                42 => 'tommy',
                43 => 'tyrel',
                44 => 'valhalla',
                45 => 'vegas',
            );
        $actual = $helper->array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
            'erwerewr',
        );
        self::assertSame($expected, $actual);

        // Array2 bigger then prev array2
        $array1 = ['on', 'erwerewr'];
        $array2 = array (
            0 => 'a',
            1 => 'ability',
            2 => 'able',
            3 => 'about',
            4 => 'absolute',
            5 => 'absolutely',
            6 => 'academic',
            7 => 'acceptable',
            8 => 'access',
            9 => 'accident',
            10 => 'accompany',
            11 => 'accordance',
            12 => 'according',
            13 => 'account',
            14 => 'achievement',
            15 => 'acromantula',
            16 => 'across',
            17 => 'actions',
            18 => 'activities',
            19 => 'activity',
            20 => 'actual',
            21 => 'actually',
            22 => 'add',
            23 => 'admired',
            24 => 'admiring',
            25 => 'adult',
            26 => 'advance',
            27 => 'afraid',
            28 => 'after',
            29 => 'afternoon',
            30 => 'again',
            31 => 'against',
            32 => 'age',
            33 => 'agenda',
            34 => 'agent',
            35 => 'ago',
            36 => 'agree',
            37 => 'agreed',
            38 => 'ah',
            39 => 'aha',
            40 => 'aim',
            41 => 'air',
            42 => 'albus',
            43 => 'alive',
            44 => 'all',
            45 => 'alley',
            46 => 'allow',
            47 => 'allowed',
            48 => 'almost',
            49 => 'alone',
            50 => 'along',
            51 => 'alpha',
            52 => 'already',
            53 => 'alright',
            54 => 'also',
            55 => 'alternative',
            56 => 'always',
            57 => 'am',
            58 => 'amazing',
            59 => 'ambition',
            60 => 'american',
            61 => 'among',
            62 => 'ampoule',
            63 => 'an',
            64 => 'and',
            65 => 'angel',
            66 => 'angry',
            67 => 'animal',
            68 => 'animals',
            69 => 'another',
            70 => 'answer',
            71 => 'answers',
            72 => 'anxiety',
            73 => 'any',
            74 => 'anybody',
            75 => 'anymore',
            76 => 'anyone',
            77 => 'anything',
            78 => 'anyway',
            79 => 'anywhere',
            80 => 'apart',
            81 => 'apartment',
            82 => 'appears',
            83 => 'appetite',
            84 => 'aragog',
            85 => 'are',
            86 => 'area',
            87 => 'arm',
            88 => 'armchair',
            89 => 'armed',
            90 => 'army',
            91 => 'around',
            92 => 'arrival',
            93 => 'arrived',
            94 => 'arriving',
            95 => 'artist',
            96 => 'arts',
            97 => 'as',
            98 => 'ask',
            99 => 'asked',
            100 => 'asking',
            101 => 'ass',
            102 => 'astronomy',
            103 => 'at',
            104 => 'ate',
            105 => 'attached',
            106 => 'attack',
            107 => 'attacked',
            108 => 'attacking',
            109 => 'attention',
            110 => 'audience',
            111 => 'august',
            112 => 'austrian',
            113 => 'auto',
            114 => 'avada',
            115 => 'away',
            116 => 'awful',
            117 => 'awfully',
            118 => 'babberton',
            119 => 'baby',
            120 => 'back',
            121 => 'back-up',
            122 => 'bad',
            123 => 'badly',
            124 => 'baggage',
            125 => 'ball',
            126 => 'balls',
            127 => 'bank',
            128 => 'banking',
            129 => 'banks',
            130 => 'barber',
            131 => 'barnabas',
            132 => 'based',
            133 => 'basics',
            134 => 'bazooka',
            135 => 'be',
            136 => 'beard',
            137 => 'beat',
            138 => 'beautiful',
            139 => 'beautifully',
            140 => 'became',
            141 => 'because',
            142 => 'become',
            143 => 'becoming',
            144 => 'bed',
            145 => 'been',
            146 => 'before',
            147 => 'began',
            148 => 'begin',
            149 => 'beginners',
            150 => 'beginning',
            151 => 'behavior',
            152 => 'behind',
            153 => 'being',
            154 => 'believe',
            155 => 'believing',
            156 => 'bella',
            157 => 'bellatrix',
            158 => 'belonged',
            159 => 'belongs',
            160 => 'below',
            161 => 'best',
            162 => 'better',
            163 => 'between',
            164 => 'bezoar',
            165 => 'bezoars',
            166 => 'big',
            167 => 'bigger',
            168 => 'bike',
            169 => 'bingo',
            170 => 'bird',
            171 => 'birds',
            172 => 'bit',
            173 => 'bitch',
            174 => 'bitches',
            175 => 'bite',
            176 => 'black',
            177 => 'blender',
            178 => 'blinded',
            179 => 'blocked',
            180 => 'blood',
            181 => 'bloody',
            182 => 'blue',
            183 => 'boat',
            184 => 'body',
            185 => 'bolivia',
            186 => 'bolts',
            187 => 'bones',
            188 => 'bonnie',
            189 => 'book',
            190 => 'books',
            191 => 'boom',
            192 => 'boredom',
            193 => 'born',
            194 => 'boss',
            195 => 'both',
            196 => 'bottle',
            197 => 'bottom',
            198 => 'bought',
            199 => 'box',
            200 => 'boy',
            1147 => 'monkeys',
            1148 => 'monster',
            1149 => 'month',
            1150 => 'months',
            1151 => 'moon',
            1152 => 'more',
            1153 => 'morgue',
            1154 => 'morning',
            1155 => 'mortal',
            1156 => 'mortals',
            1157 => 'most',
            1158 => 'mother',
            1159 => 'motherfucker',
            1160 => 'mouth',
            1161 => 'move',
            1162 => 'movement',
            1163 => 'moves',
            1164 => 'movies',
            1165 => 'mozart',
            1166 => 'mr',
            1167 => 'mrs',
            1168 => 'much',
            1169 => 'muggle',
            1170 => 'muggle-born',
            1171 => 'muggles',
            1172 => 'mum',
            1173 => 'mummy',
            1174 => 'murder',
            1175 => 'music',
            1176 => 'must',
            1177 => 'my',
            1178 => 'myself',
            1179 => 'mythology',
            1180 => 'name',
            1181 => 'named',
            1182 => 'names',
            1183 => 'nap',
            1184 => 'napping',
            1185 => 'narcissa',
            1186 => 'nasty',
            1187 => 'natural',
            1188 => 'naturally',
            1189 => 'nature',
            1190 => 'near',
            1191 => 'nearly',
            1192 => 'necessary',
            1193 => 'neck',
            1194 => 'necks',
            1195 => 'need',
            1196 => 'needed',
            1197 => 'needs',
            1198 => 'negotiate',
            1199 => 'nerves',
            1200 => 'never',
            1201 => 'new',
            1202 => 'news',
            1203 => 'next',
            1204 => 'nice',
            1205 => 'night',
            1206 => 'nightfall',
            1207 => 'nights',
            1208 => 'nine',
            1209 => 'nineteen',
            1210 => 'ninety-five',
            1211 => 'ninety-four',
            1212 => 'ninety-three',
            1213 => 'ninety-two',
            1214 => 'no',
            1215 => 'nobody',
            1216 => 'nod',
            1217 => 'noise',
            1218 => 'none',
            1219 => 'nope',
            1220 => 'normal',
            1221 => 'north',
            1222 => 'norwegian-style',
            1223 => 'nose',
            1224 => 'not',
            1225 => 'notes',
            1226 => 'nothing',
            1227 => 'notice',
            1228 => 'noticed',
            1229 => 'now',
            1230 => 'number',
            1231 => 'numbers',
            1232 => 'nuts',
            1233 => 'obey',
            1234 => 'object',
            1235 => 'objects',
            1236 => 'observe',
            1237 => 'obvious',
            1238 => 'obviously',
            1239 => 'of',
            1240 => 'off',
            1241 => 'offer',
            1242 => 'office',
            1243 => 'officer',
            1244 => 'officers',
            1245 => 'often',
            1246 => 'oh',
            1247 => 'oil',
            1248 => 'ok',
            1249 => 'okay',
            1250 => 'old',
            1251 => 'older',
            1252 => 'oldest',
            1253 => 'ollivander',
            1254 => 'on',
            1255 => 'once',
            1256 => 'one',
            1257 => 'only',
            1258 => 'oops',
            1259 => 'open',
            1260 => 'opens',
            1261 => 'opinion',
            1262 => 'opponents',
            1263 => 'opportunities',
            1264 => 'opposite',
            1265 => 'or',
            1266 => 'orange',
            1267 => 'order',
            1268 => 'ordered',
            1269 => 'organization',
            1270 => 'organizations',
            1271 => 'original',
            1272 => 'orphans',
            1273 => 'other',
            1274 => 'others',
            1275 => 'our',
            1276 => 'ours',
            1277 => 'ourselves',
            1278 => 'out',
            1279 => 'outside',
            1280 => 'over',
            1281 => 'overcome',
            1282 => 'owl',
        );
        $array3 = array (
                0 => 'alice',
                1 => 'arthur',
                2 => 'brandt',
                3 => 'bwana',
                4 => 'cadillac',
                5 => 'carlyle',
                6 => 'charlie',
                7 => 'claire',
                8 => 'congo',
                9 => 'cuban',
                10 => 'dorian',
                11 => 'dr',
                12 => 'franklin',
                13 => 'godiva',
                14 => 'grant',
                15 => 'humungo',
                16 => 'ipkiss',
                17 => 'jackson',
                18 => 'kellaway',
                19 => 'landfill',
                20 => 'latin',
                21 => 'lieutenant',
                22 => 'loki',
                23 => 'margaret',
                24 => 'milo',
                25 => 'napoleon',
                26 => 'neuman',
                27 => 'niko',
                28 => 'odin',
                29 => 'peenman',
                30 => 'peggy',
                31 => 'pete',
                32 => 'porsche',
                33 => 'ramsey',
                34 => 'ripley',
                35 => 'romeo',
                36 => 'rorschach',
                37 => 'scarlet',
                38 => 'stanley',
                39 => 'tilton',
                40 => 'tim',
                41 => 'tina',
                42 => 'tommy',
                43 => 'tyrel',
                44 => 'valhalla',
                45 => 'vegas',
            );
        $actual = $helper->array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
            'erwerewr',
        );
        self::assertSame($expected, $actual);

        $array1 = array(null
        );
        $array2 = array(1);
        $array3 = array(null);
        $actual = $helper->array_diff_inLowercase($array1, $array2, $array3);
        $expected = array(
        );
        self::assertSame($expected, $actual);
    }

    public function testGetContext(): void
    {
        $helper = new Helper();

        $text = "56 characters to the left of the word qwerty qwerty qwa central-word 57 characters to the right of the word qwerty qwerty qwa";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "characters to the left of the word qwerty qwerty qwa central-word 57 characters to the right of the word qwerty qwerty";
        self::assertSame($expected, $actual);

        $text = "56 characters to the left of the word qwerty qwerty qwa central-word 47 characters to the right of the word qwerty.";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "characters to the left of the word qwerty qwerty qwa central-word 47 characters to the right of the word qwerty.";
        self::assertSame($expected, $actual);

        $text = "56 characters to the left of the word qwerty qwerty qwa central-word";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "characters to the left of the word qwerty qwerty qwa central-word";
        self::assertSame($expected, $actual);

        $text = "49 characters to the left of the word qwerty qwa central-word 57 characters to the right of the word qwerty qwerty qwa";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "49 characters to the left of the word qwerty qwa central-word 57 characters to the right of the word qwerty qwerty";
        self::assertSame($expected, $actual);

        $text = "49 characters to the left of the word qwerty qwa central-word 47 characters to the right of the word qwerty.";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "49 characters to the left of the word qwerty qwa central-word 47 characters to the right of the word qwerty.";
        self::assertSame($expected, $actual);

        $text = "49 characters to the left of the word qwerty qwa central-word";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "49 characters to the left of the word qwerty qwa central-word";
        self::assertSame($expected, $actual);

        $text = "central-word 57 characters to the right of the word qwerty qwerty qwa";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "central-word 57 characters to the right of the word qwerty qwerty";
        self::assertSame($expected, $actual);

        $text = "central-word 47 characters to the right of the word qwerty.";
        $word = "central-word";
        $actual = $helper->getContext($text, $word);
        $expected = "central-word 47 characters to the right of the word qwerty.";
        self::assertSame($expected, $actual);

        $text = "word";
        $word = "word";
        $actual = $helper->getContext($text, $word);
        $expected = "word";
        self::assertSame($expected, $actual);

        $text = "word text
        enter";
        $word = "word";
        $actual = $helper->getContext($text, $word);
        $expected = "word text
        enter";
        self::assertSame($expected, $actual);
    }
}
