<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "್"; // Virama

/* Main arrays */

$num['tra'] = array(
	60 => "0",
	61 => "1",
	62 => "2",
	63 => "3",
	64 => "4",
	65 => "5",
	66 => "6",
	67 => "7",
	68 => "8",
	69 => "9",
);

$main['tra'] = array(

	//20 => "t ", // t end

	40 => "'", // apostrophe (avagraha)
    41 => "`", // Latin apostrophe (’)
    42 => "#", // Abbreviation

	200 => "n2a",
	202 => "r2a",

	205 => "*ga",
//	206 => "jJa",
    207 => "*ja",
	208 => "*Da",
	209 => "*da",
	210 => "*ba",
	211 => "fa",

	212 => "qha",
	213 => "khha",
	214 => "ghha",
	215 => "xa",
	216 => "Dhha",
	217 => "rhha",

	116 => "kha",
	115 => "ka",
	118 => "gha",
	117 => "ga",
	119 => "Ga",

	121 => "cha",
	120 => "ca",
	123 => "jha",
	122 => "ja",
	124 => "Ja",

	126 => "Tha",
	125 => "Ta",
	128 => "Dha",
	127 => "Da",
	129 => "Na",

	131 => "tha",
	130 => "ta",
	133 => "dha",
	132 => "da",
	134 => "na",

	136 => "pha",
	135 => "pa",
	138 => "bha",
	137 => "ba",
	139 => "ma",

	141 => "Ya",
	140 => "ya",
	142 => "ra",
	143 => "la",
	144 => "va",

	145 => "za",
	146 => "Sa",
	147 => "sa",

	199 => "K",

	151 => "~",
	149 => "M",
	150 => "H",
	152 => "||", // ||
    153 => "|", // |
    154 => "Q", // Nukta
    155 => "@", // Abbreviation
//	156 => "", // Udatta
//	157 => "", // Anudatta (svarita)


	201 => "La",

	203 => "Za",

	148 => "ha",
);

$vow['tra'] = array(

	269 => " aE",
	270 => " AE",
	271 => " aO",

	257 => " R",
	258 => " q",
	259 => " w",
	260 => " W",

	261 => " e",
	262 => " ai",
	263 => " o",
	264 => " au",

	251 => " a",
	252 => " A",
	253 => " i",
	254 => " I",
	255 => " u",
	256 => " U",

	265 => " E",
	266 => " O",

	267 => "oM",
);

$yukta['tra'] = array(

	317 => "aE",
	318 => "AE",
	319 => "aO",

	307 => "R", // joint
    308 => "q", // joint
    309 => "w", // joint
    310 => "W", // joint

	311 => "e", // joint
    312 => "ai", // joint
    313 => "o", // joint
    314 => "au", // joint

	301 => "a", // joint
    302 => "A", // joint
    303 => "i", // joint
    304 => "I", // joint
    305 => "u", // joint
    306 => "U", // joint

	315 => "E",
	316 => "O",
);

$num['scr'] = array(
	60 => "೦", // 0
    61 => "೧", // 1
    62 => "೨", // 2
    63 => "೩", // 3
    64 => "೪", // 4
    65 => "೫", // 5
    66 => "೬", // 6
    67 => "೭", // 7
    68 => "೮", // 8
    69 => "೯", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end

	40 => "ಽ", // apostrophe (avagraha)
    41 => "’", // Latin apostrophe (’)
    42 => "॰", // Abbreviation

	200 => "ನ಼",
	202 => "ಱ",

	205 => "ಂˆಗ",
//	206 => "ಜ್ಞ",
    207 => "ಂˆಜ",
	208 => "ಂˆಡ",
	209 => "ಂˆದ",
	210 => "ಂˆಬ",
	211 => "ಫ಼",

	212 => "ಕ಼",
	213 => "ಖ಼",
	214 => "ಗ಼",
	215 => "ಜ಼",
	216 => "ಡ಼",
	217 => "ಢ಼",

	116 => "ಖ", // kha
    115 => "ಕ", // ka
    118 => "ಘ", // gha
    117 => "ಗ", // ga
    119 => "ಙ", // Ga

	121 => "ಛ", // cha
    120 => "ಚ", // ca
    123 => "ಝ", // jha
    122 => "ಜ", // ja
    124 => "ಞ", // Ja

	126 => "ಠ", // Tha
    125 => "ಟ", // Ta
    128 => "ಢ", // Dha
    127 => "ಡ", // Da
    129 => "ಣ", // Na

	131 => "ಥ", // tha
    130 => "ತ", // ta
    133 => "ಧ", // dha
    132 => "ದ", // da
    134 => "ನ", // na

	136 => "ಫ", // pha
    135 => "ಪ", // pa
    138 => "ಭ", // bha
    137 => "ಬ", // ba
    139 => "ಮ", // ma

	141 => "ಯ಼", // Ya
    140 => "ಯ", // ya
    142 => "ರ", // ra
    143 => "ಲ", // la
    144 => "ವ", // va

	145 => "ಶ", // za
    146 => "ಷ", // Sa
    147 => "ಸ", // sa

	199 => "ಃʼ",

	151 => "ಂ ̐", // ~
    149 => "ಂ", // M
    150 => "ಃ", // H
    152 => "॥", // ||
    153 => "।", // |
    154 => "಼", // . Nukta
    155 => "॰", // Abbreviation
//	156 => "", // Udatta
//	157 => "", // Anudatta (svarita)

	201 => "ಳ",

	203 => "ೞ",

	148 => "ಹ", // ha
);

$vow['scr'] = array(

	269 => " ಎʼ",
	270 => " ಏʼ",
	271 => " ಆʼ",

	257 => " ಋ", // R
    258 => " ೠ", // q
    259 => " ಌ", // L
    260 => " ೡ", // W

	261 => " ಏ", // e
    262 => " ಐ", // ai
    263 => " ಓ", // o
    264 => " ಔ", // au

	251 => " ಅ", // a
    252 => " ಆ", // A
    253 => " ಇ", // i
    254 => " ಈ", // I
    255 => " ಉ", // u
    256 => " ಊ", // U

	265 => " ಎ",
	266 => " ಒ",

	267 => "ಓಂ",

);

$yukta['scr'] = array(

	317 => "ೆʼ",
	318 => "ೇʼ",
	319 => "ಾʼ",

	307 => "ೃ", // R joint
    308 => "ೄ", // q joint
    309 => "ೢ", // L joint
    310 => "ೣ", // W  joint

	311 => "ೇ", // e joint
    312 => "ೈ", // ai joint
    313 => "ೋ", // o joint
    314 => "ೌ", // au joint

	301 => "&#8205;", // a joint
    302 => "ಾ", // A joint
    303 => "ಿ", // i joint
    304 => "ೀ", // I joint
    305 => "ು", // u joint
    306 => "ೂ", // U joint

	315 => "ೆ",
	316 => "ೊ",
);
