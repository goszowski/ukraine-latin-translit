<?php
namespace Goszowski\UkraineLatinTranslit;

class Translit {

    protected $letters = [

    ];

    public function __construct()
    {
        $this->letters = json_decode(file_get_contents(__DIR__.'/data.json'));
    }

    public function string($string)
    {
        foreach($this->letters as $cyr=>$lat)
        {
            $string = str_replace($cyr, $lat, $string);
            $string = str_replace(mb_strtoupper($cyr), mb_strtoupper($lat), $string);
        }
        return $string;
    }
}