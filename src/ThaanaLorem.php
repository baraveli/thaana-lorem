<?php

namespace ThaanaLorem;

use ThaanaLorem\Utils\DictionaryLoader;

class ThaanaLorem
{
    private $first = true;

    public $words = [];

    public function __construct()
    {
        $this->words = DictionaryLoader::load('thaana');
    }

    /**
     * word.
     *
     * @param mixed $tags
     *
     * @return void
     */
    public function word($tags = false)
    {
        return $this->words(1, $tags);
    }

    /**
     * wordsArray.
     *
     * @param mixed $count
     * @param mixed $tags
     *
     * @return void
     */
    public function wordsArray($count = 1, $tags = false)
    {
        return $this->words($count, $tags, true);
    }

    /**
     * words.
     *
     * @param mixed $count
     * @param mixed $tags
     * @param mixed $array
     *
     * @return void
     */
    public function words($count = 1, $tags = false, $array = false)
    {
        $words = [];
        $word_count = 0;
        // Shuffles and appends the word list to compensate for count
        // arguments that exceed the size of our vocabulary list
        while ($word_count < $count) {
            $shuffle = true;
            while ($shuffle) {
                $this->shuffle();
                // Checks that the last word of the list and the first word of
                // the list that's about to be appended are not the same
                if (!$word_count || $words[$word_count - 1] != $this->words[0]) {
                    $words = array_merge($words, $this->words);
                    $word_count = count($words);
                    $shuffle = false;
                }
            }
        }
        $words = array_slice($words, 0, $count);

        return $this->output($words, $tags, $array);
    }

    /**
     * sentence.
     *
     * @param mixed $tags
     *
     * @return void
     */
    public function sentence($tags = false)
    {
        return $this->sentences(1, $tags);
    }

    /**
     * sentencesArray.
     *
     * @param mixed $count
     * @param mixed $tags
     *
     * @return void
     */
    public function sentencesArray($count = 1, $tags = false)
    {
        return $this->sentences($count, $tags, true);
    }

    /**
     * sentences.
     *
     * @param mixed $count
     * @param mixed $tags
     * @param mixed $array
     *
     * @return void
     */
    public function sentences($count = 1, $tags = false, $array = false)
    {
        $sentences = [];
        for ($i = 0; $i < $count; $i++) {
            $sentences[] = $this->wordsArray($this->gauss(24.46, 5.08));
        }
        $this->punctuate($sentences);

        return $this->output($sentences, $tags, $array);
    }

    /**
     * paragraph.
     *
     * @param mixed $tags
     *
     * @return void
     */
    public function paragraph($tags = false)
    {
        return $this->paragraphs(1, $tags);
    }

    /**
     * paragraphsArray.
     *
     * @param mixed $count
     * @param mixed $tags
     *
     * @return void
     */
    public function paragraphsArray($count = 1, $tags = false)
    {
        return $this->paragraphs($count, $tags, true);
    }

    /**
     * paragraphs.
     *
     * @param mixed $count
     * @param mixed $tags
     * @param mixed $array
     *
     * @return void
     */
    public function paragraphs($count = 1, $tags = false, $array = false)
    {
        $paragraphs = [];
        for ($i = 0; $i < $count; $i++) {
            $paragraphs[] = $this->sentences($this->gauss(5.8, 1.93));
        }

        return $this->output($paragraphs, $tags, $array, "\n\n");
    }

    /**
     * gauss.
     *
     * @param mixed $mean
     * @param mixed $std_dev
     *
     * @return void
     */
    private function gauss($mean, $std_dev)
    {
        $x = mt_rand() / mt_getrandmax();
        $y = mt_rand() / mt_getrandmax();
        $z = sqrt(-2 * log($x)) * cos(2 * pi() * $y);

        return $z * $std_dev + $mean;
    }

    /**
     * shuffle.
     *
     * @return void
     */
    private function shuffle()
    {
        if ($this->first) {
            $this->first = array_slice($this->words, 0, 8);
            $this->words = array_slice($this->words, 8);
            shuffle($this->words);
            $this->words = $this->first + $this->words;
            $this->first = false;
        } else {
            shuffle($this->words);
        }
    }

    /**
     * punctuate.
     *
     * @param mixed $sentences
     *
     * @return void
     */
    private function punctuate(&$sentences)
    {
        foreach ($sentences as $key => $sentence) {
            $words = count($sentence);
            // Only worry about commas on sentences longer than 4 words
            if ($words > 4) {
                $mean = log($words, 6);
                $std_dev = $mean / 6;
                $commas = round($this->gauss($mean, $std_dev));
                for ($i = 1; $i <= $commas; $i++) {
                    $word = round($i * $words / ($commas + 1));
                    if ($word < ($words - 1) && $word > 0) {
                        $sentence[$word] .= ',';
                    }
                }
            }
            $sentences[$key] = ucfirst(implode(' ', $sentence).'.');
        }
    }

    /**
     * output.
     *
     * @param mixed $strings
     * @param mixed $tags
     * @param mixed $array
     * @param mixed $delimiter
     *
     * @return void
     */
    private function output($strings, $tags, $array, $delimiter = ' ')
    {
        if ($tags) {
            if (!is_array($tags)) {
                $tags = [$tags];
            } else {
                // Flips the array so we can work from the inside out
                $tags = array_reverse($tags);
            }
            foreach ($strings as $key => $string) {
                foreach ($tags as $tag) {
                    // Detects / applies back reference
                    if ($tag[0] == '<') {
                        $string = str_replace('$1', $string, $tag);
                    } else {
                        $string = sprintf('<%1$s>%2$s</%1$s>', $tag, $string);
                    }
                    $strings[$key] = $string;
                }
            }
        }
        if (!$array) {
            $strings = implode($delimiter, $strings);
        }

        return $strings;
    }
}
