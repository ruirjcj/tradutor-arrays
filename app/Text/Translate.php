<?php

namespace App\Text;
use Google\Cloud\Translate\V2\TranslateClient;
/**
 * 
 * 
 * 
 */
class Translate{

    private static function getClient()
    {
        return new TranslateClient([
            'key' => ''
        ]);
    }

    public static function traduzir($input, $targetLanguages = [])
    {
        $obClient = self::getClient();

        $response = [];

        foreach($targetLanguages as $language)
        {
            $result = $obClient->translate(
                $input,
                ['target' => $language]);

            $response[$language] = $result['text'] ?? '';
        }

        return $response;
    }

    public static function separaString($array = [])
    {
        $texto = "";
        foreach($array as $key=>$value)
        {
            $texto .= $value."-";
        }
        
    return $texto;
    }

    public static function juntarArray($traducao)
    {
        $traducaoArray = explode('-', $traducao);
        return $traducaoArray;
    }
}
