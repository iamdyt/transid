<?php

    namespace TransId;

    class GenerateID{
        
        public static function get($prefix, $separator){
            $alpha = str_shuffle(implode('',range('A', 'Z')))[rand(0,25)];
            $number = random_int(mt_rand(1000000000,PHP_INT_MAX), PHP_INT_MAX);
            $id = $alpha.$number.$alpha.$alpha;
            return $prefix.$separator.$id;
            
        }
    }
   