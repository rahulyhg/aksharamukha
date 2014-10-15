<?PHP


// http://en.wikipedia.org/wiki/Devanagari_script#Devan.C4.81gar.C4.AB_in_Unicode
// http://en.wikibooks.org/wiki/Windows_Programming/Unicode/Character_reference/0000-0FFF


$v = "੍"; // Virama

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

	203 => "Za",
	201 => "La",
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

	146 => "Sa",
	145 => "za",
	147 => "sa",

	199 => "K",

	149 => "M",
	150 => "H",
	151 => "~",
	152 => "||", // ||
    153 => "|", // |
    154 => "Q", // Nukta
    155 => "@", // Abbreviation
//	156 => ":", // Udatta
//	157 => ";", // Anudatta (svarita)

	158 => "M", //Tippi

	159 => "X", //Addak

	148 => "ha",
);

$vow['tra'] = array(

	269 => " aE",
	270 => " AE",
	271 => " aO",

	265 => " E",
	266 => " O",

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

	267 => "oM",

);

$yukta['tra'] = array(

	317 => "aE",
	318 => "AE",
	319 => "aO",

	315 => "E",
	316 => "O",

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

);

$num['scr'] = array(
	60 => "੦", // 0
    61 => "੧", // 1
    62 => "੨", // 2
    63 => "੩", // 3
    64 => "੪", // 4
    65 => "੫", // 5
    66 => "੬", // 6
    67 => "੭", // 7
    68 => "੮", // 8
    69 => "੯", // 9
);

$main['scr'] = array(

	//20 => "ৎ", // t end

	40 => "(ਅ)", // apostrophe (avagraha)
    41 => "’", // Latin apostrophe (’)
    42 => "॰", // Abbreviation

	203 => "ਲ਼਼",
	201 => "ਲ਼",
	200 => "ਨ਼",
	202 => "ਰ਼",

	205 => "ਁˆਗ",
//	206 => "ज्ञ",
    207 => "ਁˆਜ",
	208 => "ਁˆਡ",
	209 => "ਁˆਦ",
	210 => "ਁˆਬ",
	211 => "ਫ਼",

	212 => "ਕ਼",
	213 => "ਖ਼",
	214 => "ਗ਼",
	215 => "ਜ਼",
	216 => "ੜ",
	217 => "ਢ਼",

	116 => "ਖ", // kha
    115 => "ਕ", // ka
    118 => "ਘ", // gha
    117 => "ਗ", // ga
    119 => "ਙ", // Ga

	121 => "ਛ", // cha
    120 => "ਚ", // ca
    123 => "ਝ", // jha
    122 => "ਜ", // ja
    124 => "ਞ", // Ja

	126 => "ਠ", // Tha
    125 => "ਟ", // Ta
    128 => "ਢ", // Dha
    127 => "ਡ", // Da
    129 => "ਣ", // Na

	131 => "ਥ", // tha
    130 => "ਤ", // ta
    133 => "ਧ", // dha
    132 => "ਦ", // da
    134 => "ਨ", // na

	136 => "ਫ", // pha
    135 => "ਪ", // pa
    138 => "ਭ", // bha
    137 => "ਬ", // ba
    139 => "ਮ", // ma

	141 => "ਯ਼", // Ya
    140 => "ਯ", // ya
    142 => "ਰ", // ra
    143 => "ਲ", // la
    144 => "ਵ", // va

	146 => "ਸ਼਼", // Sa
    145 => "ਸ਼", // za
    147 => "ਸ", // sa

	199 => "ਃʼ",

	149 => "ਂ", // M
    150 => "ਃ", // H
    151 => "ਁ", // ~
    152 => "॥", // ||
    153 => "।", // |
    154 => "਼", // . Nukta
    155 => "॰", // Abbreviation
//	156 => "॑", // Udatta
//	157 => "॒", // Anudatta (svarita)

	158 => "ੰ", //Tippi

	159 => "ੱ", //Addak

	148 => "ਹ", // ha
);

$vow['scr'] = array(

	269 => " ਏʼ",
	270 => " ਏˇ",
	271 => " ਆʼ",

	265 => " ਏ˘",
	266 => " ਓ˘",

	257 => " ਰੁʼ", // R
    258 => " ਰੂʼ", // q
    259 => " ਲੁʼ", // L
    260 => " ਲੂʼ", // W

	261 => " ਏ", // e
    262 => " ਐ", // ai
    263 => " ਓ", // o
    264 => " ਔ", // au

	251 => " ਅ", // a
    252 => " ਆ", // A
    253 => " ਇ", // i
    254 => " ਈ", // I
    255 => " ਉ", // u
    256 => " ਊ", // U

	267 => "ੴ",

);

$yukta['scr'] = array(

	317 => "ੇʼ",
	318 => "ੇˇ",
	319 => "ਾʼ",

	315 => "ੇ˘",
	316 => "ੋ˘",

	307 => "੍ਰੁʼ", // R joint
    308 => "੍ਰੂʼ", // q joint
    309 => "੍ਲੁʼ", // L joint
    310 => "੍ਲੂʼ", // W  joint

	311 => "ੇ", // e joint
    312 => "ੈ", // ai joint
    313 => "ੋ", // o joint
    314 => "ੌ", // au joint

	301 => "&#8205;", // a joint
    302 => "ਾ", // A joint
    303 => "ਿ", // i joint
    304 => "ੀ", // I joint
    305 => "ੁ", // u joint
    306 => "ੂ", // U joint
);
