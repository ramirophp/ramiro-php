<?php

namespace Rmo;

class Valida {

    public static function email ($value) {

        return (bool)filter_var($value, FILTER_VALIDATE_EMAIL);

    }

}