<?php

interface Insert {

    function insertInto($value, $table);

    function insertIntoFields($fields, $values, $table);
}
