
    private static $pattern = array();
	public static $names = array(
        '\xe2\x98\x80' => 'e29880',
        '\xe2\x98\x81' => 'e29881',
        '\xe2\x98\x94' => 'e29894',
        '\xe2\x9b\x84' => 'e29b84',
        '\xe2\x9a\xa1' => 'e29aa1',
        '\xf0\x9f\x8c\x80' => 'f09f8c80',
        '\xf0\x9f\x8c\x81' => 'f09f8c81',
        '\xf0\x9f\x8c\x82' => 'f09f8c82',
        '\xf0\x9f\x8c\x83' => 'f09f8c83',
        '\xf0\x9f\x8c\x84' => 'f09f8c84',
        '\xf0\x9f\x8c\x85' => 'f09f8c85',
        '\xf0\x9f\x8c\x86' => 'f09f8c86',
        '\xf0\x9f\x8c\x87' => 'f09f8c87',
        '\xf0\x9f\x8c\x88' => 'f09f8c88',
        '\xe2\x9d\x84' => 'e29d84',
        '\xe2\x9b\x85' => 'e29b85',
        '\xf0\x9f\x8c\x89' => 'f09f8c89',
        '\xf0\x9f\x8c\x8a' => 'f09f8c8a',
        '\xf0\x9f\x8c\x8b' => 'f09f8c8b',
        '\xf0\x9f\x8c\x8c' => 'f09f8c8c',
        '\xf0\x9f\x8c\x8f' => 'f09f8c8f',
        '\xf0\x9f\x8c\x91' => 'f09f8c91',
        '\xf0\x9f\x8c\x94' => 'f09f8c94',
        '\xf0\x9f\x8c\x93' => 'f09f8c93',
        '\xf0\x9f\x8c\x99' => 'f09f8c99',
        '\xf0\x9f\x8c\x95' => 'f09f8c95',
        '\xf0\x9f\x8c\x9b' => 'f09f8c9b',
        '\xf0\x9f\x8c\x9f' => 'f09f8c9f',
        '\xf0\x9f\x8c\xa0' => 'f09f8ca0',
        '\xf0\x9f\x95\x90' => 'f09f9590',
        '\xf0\x9f\x95\x91' => 'f09f9591',
        '\xf0\x9f\x95\x92' => 'f09f9592',
        '\xf0\x9f\x95\x93' => 'f09f9593',
        '\xf0\x9f\x95\x94' => 'f09f9594',
        '\xf0\x9f\x95\x95' => 'f09f9595',
        '\xf0\x9f\x95\x96' => 'f09f9596',
        '\xf0\x9f\x95\x97' => 'f09f9597',
        '\xf0\x9f\x95\x98' => 'f09f9598',
        '\xf0\x9f\x95\x99' => 'f09f9599',
        '\xf0\x9f\x95\x9a' => 'f09f959a',
        '\xf0\x9f\x95\x9b' => 'f09f959b',
        '\xe2\x8c\x9a' => 'e28c9a',
        '\xe2\x8c\x9b' => 'e28c9b',
        '\xe2\x8f\xb0' => 'e28fb0',
        '\xe2\x8f\xb3' => 'e28fb3',
        '\xe2\x99\x88' => 'e29988',
        '\xe2\x99\x89' => 'e29989',
        '\xe2\x99\x8a' => 'e2998a',
        '\xe2\x99\x8b' => 'e2998b',
        '\xe2\x99\x8c' => 'e2998c',
        '\xe2\x99\x8d' => 'e2998d',
        '\xe2\x99\x8e' => 'e2998e',
        '\xe2\x99\x8f' => 'e2998f',
        '\xe2\x99\x90' => 'e29990',
        '\xe2\x99\x91' => 'e29991',
        '\xe2\x99\x92' => 'e29992',
        '\xe2\x99\x93' => 'e29993',
        '\xe2\x9b\x8e' => 'e29b8e',
        '\xf0\x9f\x8d\x80' => 'f09f8d80',
        '\xf0\x9f\x8c\xb7' => 'f09f8cb7',
        '\xf0\x9f\x8c\xb1' => 'f09f8cb1',
        '\xf0\x9f\x8d\x81' => 'f09f8d81',
        '\xf0\x9f\x8c\xb8' => 'f09f8cb8',
        '\xf0\x9f\x8c\xb9' => 'f09f8cb9',
        '\xf0\x9f\x8d\x82' => 'f09f8d82',
        '\xf0\x9f\x8d\x83' => 'f09f8d83',
        '\xf0\x9f\x8c\xba' => 'f09f8cba',
        '\xf0\x9f\x8c\xbb' => 'f09f8cbb',
        '\xf0\x9f\x8c\xb4' => 'f09f8cb4',
        '\xf0\x9f\x8c\xb5' => 'f09f8cb5',
        '\xf0\x9f\x8c\xbe' => 'f09f8cbe',
        '\xf0\x9f\x8c\xbd' => 'f09f8cbd',
        '\xf0\x9f\x8d\x84' => 'f09f8d84',
        '\xf0\x9f\x8c\xb0' => 'f09f8cb0',
        '\xf0\x9f\x8c\xbc' => 'f09f8cbc',
        '\xf0\x9f\x8c\xbf' => 'f09f8cbf',
        '\xf0\x9f\x8d\x92' => 'f09f8d92',
        '\xf0\x9f\x8d\x8c' => 'f09f8d8c',
        '\xf0\x9f\x8d\x8e' => 'f09f8d8e',
        '\xf0\x9f\x8d\x8a' => 'f09f8d8a',
        '\xf0\x9f\x8d\x93' => 'f09f8d93',
        '\xf0\x9f\x8d\x89' => 'f09f8d89',
        '\xf0\x9f\x8d\x85' => 'f09f8d85',
        '\xf0\x9f\x8d\x86' => 'f09f8d86',
        '\xf0\x9f\x8d\x88' => 'f09f8d88',
        '\xf0\x9f\x8d\x8d' => 'f09f8d8d',
        '\xf0\x9f\x8d\x87' => 'f09f8d87',
        '\xf0\x9f\x8d\x91' => 'f09f8d91',
        '\xf0\x9f\x8d\x8f' => 'f09f8d8f',
        '\xf0\x9f\x91\x80' => 'f09f9180',
        '\xf0\x9f\x91\x82' => 'f09f9182',
        '\xf0\x9f\x91\x83' => 'f09f9183',
        '\xf0\x9f\x91\x84' => 'f09f9184',
        '\xf0\x9f\x91\x85' => 'f09f9185',
        '\xf0\x9f\x92\x84' => 'f09f9284',
        '\xf0\x9f\x92\x85' => 'f09f9285',
        '\xf0\x9f\x92\x86' => 'f09f9286',
        '\xf0\x9f\x92\x87' => 'f09f9287',
        '\xf0\x9f\x92\x88' => 'f09f9288',
        '\xf0\x9f\x91\xa4' => 'f09f91a4',
        '\xf0\x9f\x91\xa6' => 'f09f91a6',
        '\xf0\x9f\x91\xa7' => 'f09f91a7',
        '\xf0\x9f\x91\xa8' => 'f09f91a8',
        '\xf0\x9f\x91\xa9' => 'f09f91a9',
        '\xf0\x9f\x91\xaa' => 'f09f91aa',
        '\xf0\x9f\x91\xab' => 'f09f91ab',
        '\xf0\x9f\x91\xae' => 'f09f91ae',
        '\xf0\x9f\x91\xaf' => 'f09f91af',
        '\xf0\x9f\x91\xb0' => 'f09f91b0',
        '\xf0\x9f\x91\xb1' => 'f09f91b1',
        '\xf0\x9f\x91\xb2' => 'f09f91b2',
        '\xf0\x9f\x91\xb3' => 'f09f91b3',
        '\xf0\x9f\x91\xb4' => 'f09f91b4',
        '\xf0\x9f\x91\xb5' => 'f09f91b5',
        '\xf0\x9f\x91\xb6' => 'f09f91b6',
        '\xf0\x9f\x91\xb7' => 'f09f91b7',
        '\xf0\x9f\x91\xb8' => 'f09f91b8',
        '\xf0\x9f\x91\xb9' => 'f09f91b9',
        '\xf0\x9f\x91\xba' => 'f09f91ba',
        '\xf0\x9f\x91\xbb' => 'f09f91bb',
        '\xf0\x9f\x91\xbc' => 'f09f91bc',
        '\xf0\x9f\x91\xbd' => 'f09f91bd',
        '\xf0\x9f\x91\xbe' => 'f09f91be',
        '\xf0\x9f\x91\xbf' => 'f09f91bf',
        '\xf0\x9f\x92\x80' => 'f09f9280',
        '\xf0\x9f\x92\x81' => 'f09f9281',
        '\xf0\x9f\x92\x82' => 'f09f9282',
        '\xf0\x9f\x92\x83' => 'f09f9283',
        '\xf0\x9f\x90\x8c' => 'f09f908c',
        '\xf0\x9f\x90\x8d' => 'f09f908d',
        '\xf0\x9f\x90\x8e' => 'f09f908e',
        '\xf0\x9f\x90\x94' => 'f09f9094',
        '\xf0\x9f\x90\x97' => 'f09f9097',
        '\xf0\x9f\x90\xab' => 'f09f90ab',
        '\xf0\x9f\x90\x98' => 'f09f9098',
        '\xf0\x9f\x90\xa8' => 'f09f90a8',
        '\xf0\x9f\x90\x92' => 'f09f9092',
        '\xf0\x9f\x90\x91' => 'f09f9091',
        '\xf0\x9f\x90\x99' => 'f09f9099',
        '\xf0\x9f\x90\x9a' => 'f09f909a',
        '\xf0\x9f\x90\x9b' => 'f09f909b',
        '\xf0\x9f\x90\x9c' => 'f09f909c',
        '\xf0\x9f\x90\x9d' => 'f09f909d',
        '\xf0\x9f\x90\x9e' => 'f09f909e',
        '\xf0\x9f\x90\xa0' => 'f09f90a0',
        '\xf0\x9f\x90\xa1' => 'f09f90a1',
        '\xf0\x9f\x90\xa2' => 'f09f90a2',
        '\xf0\x9f\x90\xa4' => 'f09f90a4',
        '\xf0\x9f\x90\xa5' => 'f09f90a5',
        '\xf0\x9f\x90\xa6' => 'f09f90a6',
        '\xf0\x9f\x90\xa3' => 'f09f90a3',
        '\xf0\x9f\x90\xa7' => 'f09f90a7',
        '\xf0\x9f\x90\xa9' => 'f09f90a9',
        '\xf0\x9f\x90\x9f' => 'f09f909f',
        '\xf0\x9f\x90\xac' => 'f09f90ac',
        '\xf0\x9f\x90\xad' => 'f09f90ad',
        '\xf0\x9f\x90\xaf' => 'f09f90af',
        '\xf0\x9f\x90\xb1' => 'f09f90b1',
        '\xf0\x9f\x90\xb3' => 'f09f90b3',
        '\xf0\x9f\x90\xb4' => 'f09f90b4',
        '\xf0\x9f\x90\xb5' => 'f09f90b5',
        '\xf0\x9f\x90\xb6' => 'f09f90b6',
        '\xf0\x9f\x90\xb7' => 'f09f90b7',
        '\xf0\x9f\x90\xbb' => 'f09f90bb',
        '\xf0\x9f\x90\xb9' => 'f09f90b9',
        '\xf0\x9f\x90\xba' => 'f09f90ba',
        '\xf0\x9f\x90\xae' => 'f09f90ae',
        '\xf0\x9f\x90\xb0' => 'f09f90b0',
        '\xf0\x9f\x90\xb8' => 'f09f90b8',
        '\xf0\x9f\x90\xbe' => 'f09f90be',
        '\xf0\x9f\x90\xb2' => 'f09f90b2',
        '\xf0\x9f\x90\xbc' => 'f09f90bc',
        '\xf0\x9f\x90\xbd' => 'f09f90bd',
        '\xf0\x9f\x98\xa0' => 'f09f98a0',
        '\xf0\x9f\x98\xa9' => 'f09f98a9',
        '\xf0\x9f\x98\xb2' => 'f09f98b2',
        '\xf0\x9f\x98\x9f' => 'f09f989f',
        '\xf0\x9f\x98\x9e' => 'f09f989e',
        '\xf0\x9f\x98\xb5' => 'f09f98b5',
        '\xf0\x9f\x98\xb0' => 'f09f98b0',
        '\xf0\x9f\x98\x92' => 'f09f9892',
        '\xf0\x9f\x98\x91' => 'f09f9891',
        '\xf0\x9f\x98\x8d' => 'f09f988d',
        '\xf0\x9f\x98\x8e' => 'f09f988e',
        '\xf0\x9f\x98\x87' => 'f09f9887',
        '\xf0\x9f\x98\xa7' => 'f09f98a7',
        '\xf0\x9f\x98\xa6' => 'f09f98a6',
        '\xf0\x9f\x98\xa4' => 'f09f98a4',
        '\xf0\x9f\x98\x9c' => 'f09f989c',
        '\xf0\x9f\x98\x9d' => 'f09f989d',
        '\xf0\x9f\x98\x8b' => 'f09f988b',
        '\xf0\x9f\x98\x98' => 'f09f9898',
        '\xf0\x9f\x98\x9a' => 'f09f989a',
        '\xf0\x9f\x98\xb7' => 'f09f98b7',
        '\xf0\x9f\x98\xb4' => 'f09f98b4',
        '\xf0\x9f\x98\xb3' => 'f09f98b3',
        '\xf0\x9f\x98\x83' => 'f09f9883',
        '\xf0\x9f\x98\x85' => 'f09f9885',
        '\xf0\x9f\x98\x86' => 'f09f9886',
        '\xf0\x9f\x98\x88' => 'f09f9888',
        '\xf0\x9f\x98\x80' => 'f09f9880',
        '\xf0\x9f\x98\x81' => 'f09f9881',
        '\xf0\x9f\x98\x82' => 'f09f9882',
        '\xf0\x9f\x98\x8a' => 'f09f988a',
        '\xe2\x98\xba' => 'e298ba',
        '\xf0\x9f\x98\x84' => 'f09f9884',
        '\xf0\x9f\x98\xa2' => 'f09f98a2',
        '\xf0\x9f\x98\xae' => 'f09f98ae',
        '\xf0\x9f\x98\xac' => 'f09f98ac',
        '\xf0\x9f\x98\xad' => 'f09f98ad',
        '\xf0\x9f\x98\xa8' => 'f09f98a8',
        '\xf0\x9f\x98\xa3' => 'f09f98a3',
        '\xf0\x9f\x98\xa1' => 'f09f98a1',
        '\xf0\x9f\x98\x8c' => 'f09f988c',
        '\xf0\x9f\x98\x9b' => 'f09f989b',
        '\xf0\x9f\x98\x99' => 'f09f9899',
        '\xf0\x9f\x98\x97' => 'f09f9897',
        '\xf0\x9f\x98\x96' => 'f09f9896',
        '\xf0\x9f\x98\x95' => 'f09f9895',
        '\xf0\x9f\x98\x94' => 'f09f9894',
        '\xf0\x9f\x98\x90' => 'f09f9890',
        '\xf0\x9f\x98\xb1' => 'f09f98b1',
        '\xf0\x9f\x98\xaf' => 'f09f98af',
        '\xf0\x9f\x98\xaa' => 'f09f98aa',
        '\xf0\x9f\x98\x8f' => 'f09f988f',
        '\xf0\x9f\x98\x93' => 'f09f9893',
        '\xf0\x9f\x98\xa5' => 'f09f98a5',
        '\xf0\x9f\x98\xab' => 'f09f98ab',
        '\xf0\x9f\x98\x89' => 'f09f9889',
        '\xf0\x9f\x98\xba' => 'f09f98ba',
        '\xf0\x9f\x98\xb6' => 'f09f98b6',
        '\xf0\x9f\x98\xb8' => 'f09f98b8',
        '\xf0\x9f\x98\xb9' => 'f09f98b9',
        '\xf0\x9f\x98\xbd' => 'f09f98bd',
        '\xf0\x9f\x98\xbb' => 'f09f98bb',
        '\xf0\x9f\x98\xbf' => 'f09f98bf',
        '\xf0\x9f\x98\xbe' => 'f09f98be',
        '\xf0\x9f\x98\xbc' => 'f09f98bc',
        '\xf0\x9f\x99\x80' => 'f09f9980',
        '\xf0\x9f\x99\x85' => 'f09f9985',
        '\xf0\x9f\x99\x86' => 'f09f9986',
        '\xf0\x9f\x99\x87' => 'f09f9987',
        '\xf0\x9f\x99\x88' => 'f09f9988',
        '\xf0\x9f\x99\x8a' => 'f09f998a',
        '\xf0\x9f\x99\x89' => 'f09f9989',
        '\xf0\x9f\x99\x8b' => 'f09f998b',
        '\xf0\x9f\x99\x8c' => 'f09f998c',
        '\xf0\x9f\x99\x8d' => 'f09f998d',
        '\xf0\x9f\x99\x8e' => 'f09f998e',
        '\xf0\x9f\x99\x8f' => 'f09f998f',
        '\xf0\x9f\x8f\xa0' => 'f09f8fa0',
        '\xf0\x9f\x8f\xa1' => 'f09f8fa1',
        '\xf0\x9f\x8f\xa2' => 'f09f8fa2',
        '\xf0\x9f\x8f\xa3' => 'f09f8fa3',
        '\xf0\x9f\x8f\xa5' => 'f09f8fa5',
        '\xf0\x9f\x8f\xa6' => 'f09f8fa6',
        '\xf0\x9f\x8f\xa7' => 'f09f8fa7',
        '\xf0\x9f\x8f\xa8' => 'f09f8fa8',
        '\xf0\x9f\x8f\xa9' => 'f09f8fa9',
        '\xf0\x9f\x8f\xaa' => 'f09f8faa',
        '\xf0\x9f\x8f\xab' => 'f09f8fab',
        '\xe2\x9b\xaa' => 'e29baa',
        '\xe2\x9b\xb2' => 'e29bb2',
        '\xf0\x9f\x8f\xac' => 'f09f8fac',
        '\xf0\x9f\x8f\xaf' => 'f09f8faf',
        '\xf0\x9f\x8f\xb0' => 'f09f8fb0',
        '\xf0\x9f\x8f\xad' => 'f09f8fad',
        '\xe2\x9a\x93' => 'e29a93',
        '\xf0\x9f\x8f\xae' => 'f09f8fae',
        '\xf0\x9f\x97\xbb' => 'f09f97bb',
        '\xf0\x9f\x97\xbc' => 'f09f97bc',
        '\xf0\x9f\x97\xbd' => 'f09f97bd',
        '\xf0\x9f\x97\xbe' => 'f09f97be',
        '\xf0\x9f\x97\xbf' => 'f09f97bf',
        '\xf0\x9f\x91\x9e' => 'f09f919e',
        '\xf0\x9f\x91\x9f' => 'f09f919f',
        '\xf0\x9f\x91\xa0' => 'f09f91a0',
        '\xf0\x9f\x91\xa1' => 'f09f91a1',
        '\xf0\x9f\x91\xa2' => 'f09f91a2',
        '\xf0\x9f\x91\xa3' => 'f09f91a3',
        '\xf0\x9f\x91\x93' => 'f09f9193',
        '\xf0\x9f\x91\x95' => 'f09f9195',
        '\xf0\x9f\x91\x96' => 'f09f9196',
        '\xf0\x9f\x91\x91' => 'f09f9191',
        '\xf0\x9f\x91\x94' => 'f09f9194',
        '\xf0\x9f\x91\x92' => 'f09f9192',
        '\xf0\x9f\x91\x97' => 'f09f9197',
        '\xf0\x9f\x91\x98' => 'f09f9198',
        '\xf0\x9f\x91\x99' => 'f09f9199',
        '\xf0\x9f\x91\x9a' => 'f09f919a',
        '\xf0\x9f\x91\x9b' => 'f09f919b',
        '\xf0\x9f\x91\x9c' => 'f09f919c',
        '\xf0\x9f\x91\x9d' => 'f09f919d',
        '\xf0\x9f\x92\xb0' => 'f09f92b0',
        '\xf0\x9f\x92\xb1' => 'f09f92b1',
        '\xf0\x9f\x92\xb9' => 'f09f92b9',
        '\xf0\x9f\x92\xb2' => 'f09f92b2',
        '\xf0\x9f\x92\xb3' => 'f09f92b3',
        '\xf0\x9f\x92\xb4' => 'f09f92b4',
        '\xf0\x9f\x92\xb5' => 'f09f92b5',
        '\xf0\x9f\x92\xb8' => 'f09f92b8',
        '\xf0\x9f\x87\xa8\xf0\x9f\x87\xb3' => 'f09f87a8f09f87b3',
        '\xf0\x9f\x87\xa9\xf0\x9f\x87\xaa' => 'f09f87a9f09f87aa',
        '\xf0\x9f\x87\xaa\xf0\x9f\x87\xb8' => 'f09f87aaf09f87b8',
        '\xf0\x9f\x87\xab\xf0\x9f\x87\xb7' => 'f09f87abf09f87b7',
        '\xf0\x9f\x87\xac\xf0\x9f\x87\xa7' => 'f09f87acf09f87a7',
        '\xf0\x9f\x87\xae\xf0\x9f\x87\xb9' => 'f09f87aef09f87b9',
        '\xf0\x9f\x87\xaf\xf0\x9f\x87\xb5' => 'f09f87aff09f87b5',
        '\xf0\x9f\x87\xb0\xf0\x9f\x87\xb7' => 'f09f87b0f09f87b7',
        '\xf0\x9f\x87\xb7\xf0\x9f\x87\xba' => 'f09f87b7f09f87ba',
        '\xf0\x9f\x87\xba\xf0\x9f\x87\xb8' => 'f09f87baf09f87b8',
        '\xf0\x9f\x94\xa5' => 'f09f94a5',
        '\xf0\x9f\x94\xa6' => 'f09f94a6',
        '\xf0\x9f\x94\xa7' => 'f09f94a7',
        '\xf0\x9f\x94\xa8' => 'f09f94a8',
        '\xf0\x9f\x94\xa9' => 'f09f94a9',
        '\xf0\x9f\x94\xaa' => 'f09f94aa',
        '\xf0\x9f\x94\xab' => 'f09f94ab',
        '\xf0\x9f\x94\xae' => 'f09f94ae',
        '\xf0\x9f\x94\xaf' => 'f09f94af',
        '\xf0\x9f\x94\xb0' => 'f09f94b0',
        '\xf0\x9f\x94\xb1' => 'f09f94b1',
        '\xf0\x9f\x92\x89' => 'f09f9289',
        '\xf0\x9f\x92\x8a' => 'f09f928a',
        '\xf0\x9f\x85\xb0' => 'f09f85b0',
        '\xf0\x9f\x85\xb1' => 'f09f85b1',
        '\xf0\x9f\x86\x8e' => 'f09f868e',
        '\xf0\x9f\x85\xbe' => 'f09f85be',
        '\xf0\x9f\x8e\x80' => 'f09f8e80',
        '\xf0\x9f\x8e\x81' => 'f09f8e81',
        '\xf0\x9f\x8e\x82' => 'f09f8e82',
        '\xf0\x9f\x8e\x84' => 'f09f8e84',
        '\xf0\x9f\x8e\x85' => 'f09f8e85',
        '\xf0\x9f\x8e\x8c' => 'f09f8e8c',
        '\xf0\x9f\x8e\x86' => 'f09f8e86',
        '\xf0\x9f\x8e\x88' => 'f09f8e88',
        '\xf0\x9f\x8e\x89' => 'f09f8e89',
        '\xf0\x9f\x8e\x8d' => 'f09f8e8d',
        '\xf0\x9f\x8e\x8e' => 'f09f8e8e',
        '\xf0\x9f\x8e\x93' => 'f09f8e93',
        '\xf0\x9f\x8e\x92' => 'f09f8e92',
        '\xf0\x9f\x8e\x8f' => 'f09f8e8f',
        '\xf0\x9f\x8e\x87' => 'f09f8e87',
        '\xf0\x9f\x8e\x90' => 'f09f8e90',
        '\xf0\x9f\x8e\x83' => 'f09f8e83',
        '\xf0\x9f\x8e\x8a' => 'f09f8e8a',
        '\xf0\x9f\x8e\x8b' => 'f09f8e8b',
        '\xf0\x9f\x8e\x91' => 'f09f8e91',
        '\xf0\x9f\x93\x9f' => 'f09f939f',
        '\xe2\x98\x8e' => 'e2988e',
        '\xf0\x9f\x93\x9e' => 'f09f939e',
        '\xf0\x9f\x93\xb1' => 'f09f93b1',
        '\xf0\x9f\x93\xb2' => 'f09f93b2',
        '\xf0\x9f\x93\x9d' => 'f09f939d',
        '\xf0\x9f\x93\xa0' => 'f09f93a0',
        '\xe2\x9c\x89' => 'e29c89',
        '\xf0\x9f\x93\xa8' => 'f09f93a8',
        '\xf0\x9f\x93\xa9' => 'f09f93a9',
        '\xf0\x9f\x93\xaa' => 'f09f93aa',
        '\xf0\x9f\x93\xab' => 'f09f93ab',
        '\xf0\x9f\x93\xae' => 'f09f93ae',
        '\xf0\x9f\x93\xb0' => 'f09f93b0',
        '\xf0\x9f\x93\xa2' => 'f09f93a2',
        '\xf0\x9f\x93\xa3' => 'f09f93a3',
        '\xf0\x9f\x93\xa1' => 'f09f93a1',
        '\xf0\x9f\x93\xa4' => 'f09f93a4',
        '\xf0\x9f\x93\xa5' => 'f09f93a5',
        '\xf0\x9f\x93\xa6' => 'f09f93a6',
        '\xf0\x9f\x93\xa7' => 'f09f93a7',
        '\xf0\x9f\x94\xa0' => 'f09f94a0',
        '\xf0\x9f\x94\xa1' => 'f09f94a1',
        '\xf0\x9f\x94\xa2' => 'f09f94a2',
        '\xf0\x9f\x94\xa3' => 'f09f94a3',
        '\xf0\x9f\x94\xa4' => 'f09f94a4',
        '\xe2\x9c\x92' => 'e29c92',
        '\xf0\x9f\x92\xba' => 'f09f92ba',
        '\xf0\x9f\x92\xbb' => 'f09f92bb',
        '\xe2\x9c\x8f' => 'e29c8f',
        '\xf0\x9f\x93\x8e' => 'f09f938e',
        '\xf0\x9f\x92\xbc' => 'f09f92bc',
        '\xf0\x9f\x92\xbd' => 'f09f92bd',
        '\xf0\x9f\x92\xbe' => 'f09f92be',
        '\xf0\x9f\x92\xbf' => 'f09f92bf',
        '\xf0\x9f\x93\x80' => 'f09f9380',
        '\xe2\x9c\x82' => 'e29c82',
        '\xf0\x9f\x93\x8d' => 'f09f938d',
        '\xf0\x9f\x93\x83' => 'f09f9383',
        '\xf0\x9f\x93\x84' => 'f09f9384',
        '\xf0\x9f\x93\x85' => 'f09f9385',
        '\xf0\x9f\x93\x81' => 'f09f9381',
        '\xf0\x9f\x93\x82' => 'f09f9382',
        '\xf0\x9f\x93\x93' => 'f09f9393',
        '\xf0\x9f\x93\x96' => 'f09f9396',
        '\xf0\x9f\x93\x94' => 'f09f9394',
        '\xf0\x9f\x93\x95' => 'f09f9395',
        '\xf0\x9f\x93\x97' => 'f09f9397',
        '\xf0\x9f\x93\x98' => 'f09f9398',
        '\xf0\x9f\x93\x99' => 'f09f9399',
        '\xf0\x9f\x93\x9a' => 'f09f939a',
        '\xf0\x9f\x93\x9b' => 'f09f939b',
        '\xf0\x9f\x93\x9c' => 'f09f939c',
        '\xf0\x9f\x93\x8b' => 'f09f938b',
        '\xf0\x9f\x93\x86' => 'f09f9386',
        '\xf0\x9f\x93\x8a' => 'f09f938a',
        '\xf0\x9f\x93\x88' => 'f09f9388',
        '\xf0\x9f\x93\x89' => 'f09f9389',
        '\xf0\x9f\x93\x87' => 'f09f9387',
        '\xf0\x9f\x93\x8c' => 'f09f938c',
        '\xf0\x9f\x93\x92' => 'f09f9392',
        '\xf0\x9f\x93\x8f' => 'f09f938f',
        '\xf0\x9f\x93\x90' => 'f09f9390',
        '\xf0\x9f\x93\x91' => 'f09f9391',
        '\xf0\x9f\x8e\xbd' => 'f09f8ebd',
        '\xe2\x9a\xbe' => 'e29abe',
        '\xe2\x9b\xb3' => 'e29bb3',
        '\xf0\x9f\x8e\xbe' => 'f09f8ebe',
        '\xe2\x9a\xbd' => 'e29abd',
        '\xf0\x9f\x8e\xbf' => 'f09f8ebf',
        '\xf0\x9f\x8f\x80' => 'f09f8f80',
        '\xf0\x9f\x8f\x81' => 'f09f8f81',
        '\xf0\x9f\x8f\x82' => 'f09f8f82',
        '\xf0\x9f\x8f\x83' => 'f09f8f83',
        '\xf0\x9f\x8f\x84' => 'f09f8f84',
        '\xf0\x9f\x8f\x86' => 'f09f8f86',
        '\xf0\x9f\x8f\x88' => 'f09f8f88',
        '\xf0\x9f\x8f\x8a' => 'f09f8f8a',
        '\xf0\x9f\x9a\x83' => 'f09f9a83',
        '\xf0\x9f\x9a\x87' => 'f09f9a87',
        '\xe2\x93\x82' => 'e29382',
        '\xf0\x9f\x9a\x84' => 'f09f9a84',
        '\xf0\x9f\x9a\x85' => 'f09f9a85',
        '\xf0\x9f\x9a\x97' => 'f09f9a97',
        '\xf0\x9f\x9a\x99' => 'f09f9a99',
        '\xf0\x9f\x9a\x8c' => 'f09f9a8c',
        '\xf0\x9f\x9a\x8f' => 'f09f9a8f',
        '\xf0\x9f\x9a\xa2' => 'f09f9aa2',
        '\xe2\x9c\x88' => 'e29c88',
        '\xe2\x9b\xb5' => 'e29bb5',
        '\xf0\x9f\x9a\x89' => 'f09f9a89',
        '\xf0\x9f\x9a\x80' => 'f09f9a80',
        '\xf0\x9f\x9a\xa4' => 'f09f9aa4',
        '\xf0\x9f\x9a\x95' => 'f09f9a95',
        '\xf0\x9f\x9a\x9a' => 'f09f9a9a',
        '\xf0\x9f\x9a\x92' => 'f09f9a92',
        '\xf0\x9f\x9a\x91' => 'f09f9a91',
        '\xf0\x9f\x9a\x93' => 'f09f9a93',
        '\xe2\x9b\xbd' => 'e29bbd',
        '\xf0\x9f\x85\xbf' => 'f09f85bf',
        '\xf0\x9f\x9a\xa5' => 'f09f9aa5',
        '\xf0\x9f\x9a\xa7' => 'f09f9aa7',
        '\xf0\x9f\x9a\xa8' => 'f09f9aa8',
        '\xe2\x99\xa8' => 'e299a8',
        '\xe2\x9b\xba' => 'e29bba',
        '\xf0\x9f\x8e\xa0' => 'f09f8ea0',
        '\xf0\x9f\x8e\xa1' => 'f09f8ea1',
        '\xf0\x9f\x8e\xa2' => 'f09f8ea2',
        '\xf0\x9f\x8e\xa3' => 'f09f8ea3',
        '\xf0\x9f\x8e\xa4' => 'f09f8ea4',
        '\xf0\x9f\x8e\xa5' => 'f09f8ea5',
        '\xf0\x9f\x8e\xa6' => 'f09f8ea6',
        '\xf0\x9f\x8e\xa7' => 'f09f8ea7',
        '\xf0\x9f\x8e\xa8' => 'f09f8ea8',
        '\xf0\x9f\x8e\xa9' => 'f09f8ea9',
        '\xf0\x9f\x8e\xaa' => 'f09f8eaa',
        '\xf0\x9f\x8e\xab' => 'f09f8eab',
        '\xf0\x9f\x8e\xac' => 'f09f8eac',
        '\xf0\x9f\x8e\xad' => 'f09f8ead',
        '\xf0\x9f\x8e\xae' => 'f09f8eae',
        '\xf0\x9f\x80\x84' => 'f09f8084',
        '\xf0\x9f\x8e\xaf' => 'f09f8eaf',
        '\xf0\x9f\x8e\xb0' => 'f09f8eb0',
        '\xf0\x9f\x8e\xb1' => 'f09f8eb1',
        '\xf0\x9f\x8e\xb2' => 'f09f8eb2',
        '\xf0\x9f\x8e\xb3' => 'f09f8eb3',
        '\xf0\x9f\x8e\xb4' => 'f09f8eb4',
        '\xf0\x9f\x83\x8f' => 'f09f838f',
        '\xf0\x9f\x8e\xb5' => 'f09f8eb5',
        '\xf0\x9f\x8e\xb6' => 'f09f8eb6',
        '\xf0\x9f\x8e\xb7' => 'f09f8eb7',
        '\xf0\x9f\x8e\xb8' => 'f09f8eb8',
        '\xf0\x9f\x8e\xb9' => 'f09f8eb9',
        '\xf0\x9f\x8e\xba' => 'f09f8eba',
        '\xf0\x9f\x8e\xbb' => 'f09f8ebb',
        '\xf0\x9f\x8e\xbc' => 'f09f8ebc',
        '\xe3\x80\xbd' => 'e380bd',
        '\xf0\x9f\x93\xb7' => 'f09f93b7',
        '\xf0\x9f\x93\xb9' => 'f09f93b9',
        '\xf0\x9f\x93\xba' => 'f09f93ba',
        '\xf0\x9f\x93\xbb' => 'f09f93bb',
        '\xf0\x9f\x93\xbc' => 'f09f93bc',
        '\xf0\x9f\x92\x8b' => 'f09f928b',
        '\xf0\x9f\x92\x8c' => 'f09f928c',
        '\xf0\x9f\x92\x8d' => 'f09f928d',
        '\xf0\x9f\x92\x8e' => 'f09f928e',
        '\xf0\x9f\x92\x8f' => 'f09f928f',
        '\xf0\x9f\x92\x90' => 'f09f9290',
        '\xf0\x9f\x92\x91' => 'f09f9291',
        '\xf0\x9f\x92\x92' => 'f09f9292',
        '\xf0\x9f\x94\x9e' => 'f09f949e',
        '\xc2\xa9' => 'c2a9',
        '\xc2\xae' => 'c2ae',
        '\xe2\x84\xa2' => 'e284a2',
        '\xe2\x84\xb9' => 'e284b9',
        '#\xe2\x83\xa3' => '#e283a3',
        '1\xe2\x83\xa3' => '1e283a3',
        '2\xe2\x83\xa3' => '2e283a3',
        '3\xe2\x83\xa3' => '3e283a3',
        '4\xe2\x83\xa3' => '4e283a3',
        '5\xe2\x83\xa3' => '5e283a3',
        '6\xe2\x83\xa3' => '6e283a3',
        '7\xe2\x83\xa3' => '7e283a3',
        '8\xe2\x83\xa3' => '8e283a3',
        '9\xe2\x83\xa3' => '9e283a3',
        '0\xe2\x83\xa3' => '0e283a3',
        '\xf0\x9f\x94\x9f' => 'f09f949f',
        '\xf0\x9f\x93\xb6' => 'f09f93b6',
        '\xf0\x9f\x93\xb3' => 'f09f93b3',
        '\xf0\x9f\x93\xb4' => 'f09f93b4',
        '\xf0\x9f\x8d\x94' => 'f09f8d94',
        '\xf0\x9f\x8d\x99' => 'f09f8d99',
        '\xf0\x9f\x8d\xb0' => 'f09f8db0',
        '\xf0\x9f\x8d\x9c' => 'f09f8d9c',
        '\xf0\x9f\x8d\x9e' => 'f09f8d9e',
        '\xf0\x9f\x8d\xb3' => 'f09f8db3',
        '\xf0\x9f\x8d\xa6' => 'f09f8da6',
        '\xf0\x9f\x8d\x9f' => 'f09f8d9f',
        '\xf0\x9f\x8d\xa1' => 'f09f8da1',
        '\xf0\x9f\x8d\x98' => 'f09f8d98',
        '\xf0\x9f\x8d\x9a' => 'f09f8d9a',
        '\xf0\x9f\x8d\x9d' => 'f09f8d9d',
        '\xf0\x9f\x8d\x9b' => 'f09f8d9b',
        '\xf0\x9f\x8d\xa2' => 'f09f8da2',
        '\xf0\x9f\x8d\xa3' => 'f09f8da3',
        '\xf0\x9f\x8d\xb1' => 'f09f8db1',
        '\xf0\x9f\x8d\xb2' => 'f09f8db2',
        '\xf0\x9f\x8d\xa7' => 'f09f8da7',
        '\xf0\x9f\x8d\x96' => 'f09f8d96',
        '\xf0\x9f\x8d\xa5' => 'f09f8da5',
        '\xf0\x9f\x8d\xa0' => 'f09f8da0',
        '\xf0\x9f\x8d\x95' => 'f09f8d95',
        '\xf0\x9f\x8d\x97' => 'f09f8d97',
        '\xf0\x9f\x8d\xa8' => 'f09f8da8',
        '\xf0\x9f\x8d\xa9' => 'f09f8da9',
        '\xf0\x9f\x8d\xaa' => 'f09f8daa',
        '\xf0\x9f\x8d\xab' => 'f09f8dab',
        '\xf0\x9f\x8d\xac' => 'f09f8dac',
        '\xf0\x9f\x8d\xad' => 'f09f8dad',
        '\xf0\x9f\x8d\xae' => 'f09f8dae',
        '\xf0\x9f\x8d\xaf' => 'f09f8daf',
        '\xf0\x9f\x8d\xa4' => 'f09f8da4',
        '\xf0\x9f\x8d\xb4' => 'f09f8db4',
        '\xe2\x98\x95' => 'e29895',
        '\xf0\x9f\x8d\xb8' => 'f09f8db8',
        '\xf0\x9f\x8d\xba' => 'f09f8dba',
        '\xf0\x9f\x8d\xb5' => 'f09f8db5',
        '\xf0\x9f\x8d\xb6' => 'f09f8db6',
        '\xf0\x9f\x8d\xb7' => 'f09f8db7',
        '\xf0\x9f\x8d\xbb' => 'f09f8dbb',
        '\xf0\x9f\x8d\xb9' => 'f09f8db9',
        '\xe2\x86\x97' => 'e28697',
        '\xe2\x86\x98' => 'e28698',
        '\xe2\x86\x96' => 'e28696',
        '\xe2\x86\x99' => 'e28699',
        '\xe2\xa4\xb4' => 'e2a4b4',
        '\xe2\xa4\xb5' => 'e2a4b5',
        '\xe2\x86\x94' => 'e28694',
        '\xe2\x86\x95' => 'e28695',
        '\xe2\xac\x86' => 'e2ac86',
        '\xe2\xac\x87' => 'e2ac87',
        '\xe2\x9e\xa1' => 'e29ea1',
        '\xe2\xac\x85' => 'e2ac85',
        '\xe2\x96\xb6' => 'e296b6',
        '\xe2\x97\x80' => 'e29780',
        '\xe2\x8f\xa9' => 'e28fa9',
        '\xe2\x8f\xaa' => 'e28faa',
        '\xe2\x8f\xab' => 'e28fab',
        '\xe2\x8f\xac' => 'e28fac',
        '\xf0\x9f\x94\xba' => 'f09f94ba',
        '\xf0\x9f\x94\xbb' => 'f09f94bb',
        '\xf0\x9f\x94\xbc' => 'f09f94bc',
        '\xf0\x9f\x94\xbd' => 'f09f94bd',
        '\xe2\xad\x95' => 'e2ad95',
        '\xe2\x9d\x8c' => 'e29d8c',
        '\xe2\x9d\x8e' => 'e29d8e',
        '\xe2\x9d\x97' => 'e29d97',
        '\xe2\x81\x89' => 'e28189',
        '\xe2\x80\xbc' => 'e280bc',
        '\xe2\x9d\x93' => 'e29d93',
        '\xe2\x9d\x94' => 'e29d94',
        '\xe2\x9d\x95' => 'e29d95',
        '\xe3\x80\xb0' => 'e380b0',
        '\xe2\x9e\xb0' => 'e29eb0',
        '\xe2\x9e\xbf' => 'e29ebf',
        '\xe2\x9d\xa4' => 'e29da4',
        '\xf0\x9f\x92\x93' => 'f09f9293',
        '\xf0\x9f\x92\x94' => 'f09f9294',
        '\xf0\x9f\x92\x95' => 'f09f9295',
        '\xf0\x9f\x92\x96' => 'f09f9296',
        '\xf0\x9f\x92\x97' => 'f09f9297',
        '\xf0\x9f\x92\x98' => 'f09f9298',
        '\xf0\x9f\x92\x99' => 'f09f9299',
        '\xf0\x9f\x92\x9a' => 'f09f929a',
        '\xf0\x9f\x92\x9b' => 'f09f929b',
        '\xf0\x9f\x92\x9c' => 'f09f929c',
        '\xf0\x9f\x92\x9d' => 'f09f929d',
        '\xf0\x9f\x92\x9e' => 'f09f929e',
        '\xf0\x9f\x92\x9f' => 'f09f929f',
        '\xe2\x99\xa5' => 'e299a5',
        '\xe2\x99\xa0' => 'e299a0',
        '\xe2\x99\xa6' => 'e299a6',
        '\xe2\x99\xa3' => 'e299a3',
        '\xf0\x9f\x9a\xac' => 'f09f9aac',
        '\xf0\x9f\x9a\xad' => 'f09f9aad',
        '\xe2\x99\xbf' => 'e299bf',
        '\xf0\x9f\x9a\xa9' => 'f09f9aa9',
        '\xe2\x9a\xa0' => 'e29aa0',
        '\xe2\x9b\x94' => 'e29b94',
        '\xe2\x99\xbb' => 'e299bb',
        '\xf0\x9f\x9a\xb2' => 'f09f9ab2',
        '\xf0\x9f\x9a\xb6' => 'f09f9ab6',
        '\xf0\x9f\x9a\xb9' => 'f09f9ab9',
        '\xf0\x9f\x9a\xba' => 'f09f9aba',
        '\xf0\x9f\x9b\x80' => 'f09f9b80',
        '\xf0\x9f\x9a\xbb' => 'f09f9abb',
        '\xf0\x9f\x9a\xbd' => 'f09f9abd',
        '\xf0\x9f\x9a\xbe' => 'f09f9abe',
        '\xf0\x9f\x9a\xbc' => 'f09f9abc',
        '\xf0\x9f\x9a\xaa' => 'f09f9aaa',
        '\xf0\x9f\x9a\xab' => 'f09f9aab',
        '\xe2\x9c\x94' => 'e29c94',
        '\xf0\x9f\x86\x91' => 'f09f8691',
        '\xf0\x9f\x86\x92' => 'f09f8692',
        '\xf0\x9f\x86\x93' => 'f09f8693',
        '\xf0\x9f\x86\x94' => 'f09f8694',
        '\xf0\x9f\x86\x95' => 'f09f8695',
        '\xf0\x9f\x86\x96' => 'f09f8696',
        '\xf0\x9f\x86\x97' => 'f09f8697',
        '\xf0\x9f\x86\x98' => 'f09f8698',
        '\xf0\x9f\x86\x99' => 'f09f8699',
        '\xf0\x9f\x86\x9a' => 'f09f869a',
        '\xf0\x9f\x88\x81' => 'f09f8881',
        '\xf0\x9f\x88\x82' => 'f09f8882',
        '\xf0\x9f\x88\xb2' => 'f09f88b2',
        '\xf0\x9f\x88\xb3' => 'f09f88b3',
        '\xf0\x9f\x88\xb4' => 'f09f88b4',
        '\xf0\x9f\x88\xb5' => 'f09f88b5',
        '\xf0\x9f\x88\xb6' => 'f09f88b6',
        '\xf0\x9f\x88\x9a' => 'f09f889a',
        '\xf0\x9f\x88\xb7' => 'f09f88b7',
        '\xf0\x9f\x88\xb8' => 'f09f88b8',
        '\xf0\x9f\x88\xb9' => 'f09f88b9',
        '\xf0\x9f\x88\xaf' => 'f09f88af',
        '\xf0\x9f\x88\xba' => 'f09f88ba',
        '\xe3\x8a\x99' => 'e38a99',
        '\xe3\x8a\x97' => 'e38a97',
        '\xf0\x9f\x89\x90' => 'f09f8990',
        '\xf0\x9f\x89\x91' => 'f09f8991',
        '\xe2\x9e\x95' => 'e29e95',
        '\xe2\x9e\x96' => 'e29e96',
        '\xe2\x9c\x96' => 'e29c96',
        '\xe2\x9e\x97' => 'e29e97',
        '\xf0\x9f\x92\xa0' => 'f09f92a0',
        '\xf0\x9f\x92\xa1' => 'f09f92a1',
        '\xf0\x9f\x92\xa2' => 'f09f92a2',
        '\xf0\x9f\x92\xa3' => 'f09f92a3',
        '\xf0\x9f\x92\xa4' => 'f09f92a4',
        '\xf0\x9f\x92\xa5' => 'f09f92a5',
        '\xf0\x9f\x92\xa6' => 'f09f92a6',
        '\xf0\x9f\x92\xa7' => 'f09f92a7',
        '\xf0\x9f\x92\xa8' => 'f09f92a8',
        '\xf0\x9f\x92\xa9' => 'f09f92a9',
        '\xf0\x9f\x92\xaa' => 'f09f92aa',
        '\xf0\x9f\x92\xab' => 'f09f92ab',
        '\xf0\x9f\x92\xac' => 'f09f92ac',
        '\xe2\x9c\xa8' => 'e29ca8',
        '\xe2\x9c\xb4' => 'e29cb4',
        '\xe2\x9c\xb3' => 'e29cb3',
        '\xe2\x9a\xaa' => 'e29aaa',
        '\xe2\x9a\xab' => 'e29aab',
        '\xf0\x9f\x94\xb4' => 'f09f94b4',
        '\xf0\x9f\x94\xb5' => 'f09f94b5',
        '\xf0\x9f\x94\xb2' => 'f09f94b2',
        '\xf0\x9f\x94\xb3' => 'f09f94b3',
        '\xe2\xad\x90' => 'e2ad90',
        '\xe2\xac\x9c' => 'e2ac9c',
        '\xe2\xac\x9b' => 'e2ac9b',
        '\xe2\x96\xab' => 'e296ab',
        '\xe2\x96\xaa' => 'e296aa',
        '\xe2\x97\xbd' => 'e297bd',
        '\xe2\x97\xbe' => 'e297be',
        '\xe2\x97\xbb' => 'e297bb',
        '\xe2\x97\xbc' => 'e297bc',
        '\xf0\x9f\x94\xb6' => 'f09f94b6',
        '\xf0\x9f\x94\xb7' => 'f09f94b7',
        '\xf0\x9f\x94\xb8' => 'f09f94b8',
        '\xf0\x9f\x94\xb9' => 'f09f94b9',
        '\xe2\x9d\x87' => 'e29d87',
        '\xf0\x9f\x92\xae' => 'f09f92ae',
        '\xf0\x9f\x92\xaf' => 'f09f92af',
        '\xe2\x86\xa9' => 'e286a9',
        '\xe2\x86\xaa' => 'e286aa',
        '\xf0\x9f\x94\x83' => 'f09f9483',
        '\xf0\x9f\x94\x8a' => 'f09f948a',
        '\xf0\x9f\x94\x8b' => 'f09f948b',
        '\xf0\x9f\x94\x8c' => 'f09f948c',
        '\xf0\x9f\x94\x8d' => 'f09f948d',
        '\xf0\x9f\x94\x8e' => 'f09f948e',
        '\xf0\x9f\x94\x92' => 'f09f9492',
        '\xf0\x9f\x94\x93' => 'f09f9493',
        '\xf0\x9f\x94\x8f' => 'f09f948f',
        '\xf0\x9f\x94\x90' => 'f09f9490',
        '\xf0\x9f\x94\x91' => 'f09f9491',
        '\xf0\x9f\x94\x94' => 'f09f9494',
        '\xe2\x98\x91' => 'e29891',
        '\xf0\x9f\x94\x98' => 'f09f9498',
        '\xf0\x9f\x94\x96' => 'f09f9496',
        '\xf0\x9f\x94\x97' => 'f09f9497',
        '\xf0\x9f\x94\x99' => 'f09f9499',
        '\xf0\x9f\x94\x9a' => 'f09f949a',
        '\xf0\x9f\x94\x9b' => 'f09f949b',
        '\xf0\x9f\x94\x9c' => 'f09f949c',
        '\xf0\x9f\x94\x9d' => 'f09f949d',
        '\xe2\x80\x83' => 'e28083',
        '\xe2\x80\x82' => 'e28082',
        '\xe2\x80\x85' => 'e28085',
        '\xe2\x9c\x85' => 'e29c85',
        '\xe2\x9c\x8a' => 'e29c8a',
        '\xe2\x9c\x8b' => 'e29c8b',
        '\xe2\x9c\x8c' => 'e29c8c',
        '\xf0\x9f\x91\x8a' => 'f09f918a',
        '\xf0\x9f\x91\x8d' => 'f09f918d',
        '\xe2\x98\x9d' => 'e2989d',
        '\xf0\x9f\x91\x86' => 'f09f9186',
        '\xf0\x9f\x91\x87' => 'f09f9187',
        '\xf0\x9f\x91\x88' => 'f09f9188',
        '\xf0\x9f\x91\x89' => 'f09f9189',
        '\xf0\x9f\x91\x8b' => 'f09f918b',
        '\xf0\x9f\x91\x8f' => 'f09f918f',
        '\xf0\x9f\x91\x8c' => 'f09f918c',
        '\xf0\x9f\x91\x8e' => 'f09f918e',
        '\xf0\x9f\x91\x90' => 'f09f9190',
    );
    /**
     * 表情标识符
     * @var string
     */
    public static $left_delimiter = "[emoji:";
    public static $left_delimiter2 = "[em:";
    public static $right_delimiter = "]";

    /**
     * 生成正则
     *
     * @return string
     */
    public static function get_pattern()
    {
        if (!empty(self::$pattern))
        {
            return self::$pattern;
        }

        $func1 = function ($v) {
            return '/' . $v . '/';
        };
        $patterns = array_map($func1, array_keys(self::$names));

        $func2 = function ($v) {
            return cls_emoji::$left_delimiter . $v . cls_emoji::$right_delimiter;
        };
        $replacement = array_map($func2, array_values(self::$names));

        return self::$pattern = array(
            'patterns' => $patterns,
            'replacement' => $replacement,
        );
    }

    /**
     * 将字符串中的 emoji 字符换成对应的 16 进制特殊字符串
     *
     * @param string $str
     * @return string
     */
    public static function str_bin2hex($str)
    {
        $pattern = self::get_pattern();
        $str = preg_replace(
            $pattern['patterns'],
            $pattern['replacement'],
            $str
        );
        return $str;
    }

    /**
     * 将字符串中特殊的 16 进制字符串替换为 emoji 字符
     *
     * @param string $str
     * @return string
     */
    public static function str_hex2bin($str)
    {
        $names = cls_emoji::$names;
        $func = function ($match) use($names) {
            $replace = array(
                '[emoji:' => '',
                '[em:' => '',
                ']' => '',
            );
            $str = strtr($match[0], $replace);
            if (!in_array($str, $names))
            {
                return $match[0];
            }
            if ('#' === $str[0] || is_numeric($str[0]))
            {
                return $str[0] . cls_emoji::hex2bin(substr($str, 1));
            }
            else
            {
                return cls_emoji::hex2bin($str);
            }
        };
        $pattern = '/\[em(oji)?:[_0-9a-fN]{4,}\]/';
        $str = preg_replace_callback($pattern, $func, $str);
        return $str;
    }

    /**
     * 判断是否包含emoji字符
     * @param $str
     * @param bool $ori
     * @return bool
     */
    public static function has_emoji($str, $ori = true)
    {
        if (strlen($str) < 4)
        {
            return false;
        }
        if (!$ori)
        {
            return stripos($str, self::$left_delimiter)  !== false   ||
                   stripos($str, self::$left_delimiter2) !== false;
        }
        return true;
    }

    /**
     * 将 16 进制转为字节
     *
     * @param string $h
     * @return string
     */
    public static function hex2bin($h)
    {
        if (!is_string($h))
        {
            return null;
        }

        $r = '';
        $l = strlen($h);
        for ($a = 0; $a < $l; $a += 2)
        { 
            $r .= chr(hexdec($h{$a} . $h{($a+1)})); 
        }
        return $r;
    }

    /**
     * 获取有效的EMOJI表情
     * @param string $name
     * @return string
     */
    public static function get_emoji_name($name)
    {
        if(!empty($name))
        {
            if (self::has_emoji($name, false))
            {
                $name = self::str_hex2bin($name);
            }
            $name_arr = explode('[e', $name);
            return $name_arr[0];
        }
        return $name;
    }

    /**
     * 将有emoji表情网名去掉保存
     *
     * @param string $str
     * @return string
     */
    public static function remove_emojistr($str)
    {
        if (empty($str) || !is_string($str))
        {
            return null;
        }

        $pattern = '/\[emoji:[_0-9a-fN]{4,}\]/';
        return preg_replace($pattern, '', $str);
    }

    /**
     * 包含emoji表情网名长度
     *
     * @param string $str
     * @return int
     */
    public static function emojistr_len($str)
    {
        if (empty($str) || !is_string($str))
        {
            return null;
        }

        $pattern  = '/\[emoji:[_0-9a-fN]{4,}\]/';
        $emojilen = preg_match_all($pattern, $str, $count);
        $strlen   = mb_strlen(self::remove_emojistr($str), 'UTF8');
        return intval($emojilen) + intval($strlen);
    }

    /**
     * 将字符串中的 emoji 字符换成空字符串
     *
     * @param string $str
     * @return string
     */
    public static function clear_emoji($str)
    {
        $pattern = self::get_pattern();
        $str     = preg_replace(
            $pattern['patterns'],
            "",
            $str
        );
        return $str;
    }

    /**
     * 将字符串中的 emoji 字符换成空字符串
     *
     * @param string $str
     * @return string
     */
    public static function clear_mb4_emoji($str)
    {
        $str = preg_replace(
            "/[\x{10000}-\x{10FFFF}]/u",
            "",
            $str
        );
        return $str;
    }
