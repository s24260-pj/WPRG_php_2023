<?php

class Task_1_3
{
    const RESTRICTED_WORDS = ['test', 'kurcze'];

    public static function replaceRestrictedWordsInSentence(string $sentence): string
    {
        $arrayOfWords = explode(" ", $sentence);

        foreach ($arrayOfWords as $key => $word) {
            if (self::isWordRestricted($word)) {
                $arrayOfWords[$key] = self::getStarsFromWord($word);
            }
        }

        return implode(" ", $arrayOfWords);
    }

    private static function isWordRestricted(string $word): bool
    {
        $foundRestricted = array_filter(self::RESTRICTED_WORDS, function ($restrictedWord) use ($word) {
            return str_contains($word, $restrictedWord);
        });

        return count($foundRestricted) > 0;
    }

    private static function getStarsFromWord(string $word): string
    {
        $wordLength = strlen($word);
        $starString = "";

        while ($wordLength) {
            $starString .= "*";
            $wordLength--;
        }

        return $starString;
    }
}

echo Task_1_3::replaceRestrictedWordsInSentence("kurcze ale to test nie siedzi");
