<?php

// config for Elshaden/NovaTranslator
return [

    'enable_cache' => false,

    'available_languages'=>['en','ar'],

    'default_language'=>'en',

    'translation_helper'=>'_tran',

    'locales_names' => [
        'ar' => 'العربية',
        'en' => 'English',
    ],
    'svgs' => [
        'ar' => '<svg  class="h-5 w-auto" xmlns="http://www.w3.org/2000/svg" id="flag-icons-ly" viewBox="0 0 512 512">
                  <defs>
                    <clipPath id="a">
                      <path d="M250 12h500v500H250z"/>
                    </clipPath>
                  </defs>
                  <g clip-path="url(#a)" transform="translate(-256 -12.3) scale(1.024)">
                    <path fill="#239e46" d="M0 12h1000v500H0z"/>
                    <path d="M0 12h1000v375H0z"/>
                    <path fill="#e70013" d="M0 12h1000v125H0z"/>
                    <path fill="#fff" d="M544.2 217.8a54.3 54.3 0 1 0 0 88.4 62.5 62.5 0 1 1 0-88.4M530.4 262l84.1-27.3-52 71.5v-88.4l52 71.5z"/>
                  </g>
                </svg>',

        'en' => '<svg class="h-5 w-auto" xmlns="http://www.w3.org/2000/svg" id="flag-icons-gb" viewBox="0 0 512 512">
                  <path fill="#012169" d="M0 0h512v512H0z"/>
                  <path fill="#FFF" d="M512 0v64L322 256l190 187v69h-67L254 324 68 512H0v-68l186-187L0 74V0h62l192 188L440 0z"/>
                  <path fill="#C8102E" d="m184 324 11 34L42 512H0v-3l184-185zm124-12 54 8 150 147v45L308 312zM512 0 320 196l-4-44L466 0h46zM0 1l193 189-59-8L0 49V1z"/>
                  <path fill="#FFF" d="M176 0v512h160V0H176zM0 176v160h512V176H0z"/>
                  <path fill="#C8102E" d="M0 208v96h512v-96H0zM208 0v512h96V0h-96z"/>
                </svg>',
    ]
];
