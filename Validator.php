<?php

class Validator {
    //pure method tāpēc static
    static public function string($data, $min=0, $max = INF) {
        $data = trim($data);

        return is_string($data)
        && strlen($data) >= $min
        && strlen($data) <= $max;
    }   
}