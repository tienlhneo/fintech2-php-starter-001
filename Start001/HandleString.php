<?php

/**
 * Created by PhpStorm.
 * User: trinm
 * Date: 14/05/2019
 * Time: 10:48
 */
class HandleString
{

    var $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function replaceSpaceToUnderscore($name)
    {
//        $str = $name.trim();
        $str = str_replace(' ', '_', $name);
        return $str;
    }

    public function deleteNumberDigitFromString($name)
    {
//        $str = $name . trim();
        return preg_replace('/[0-9]+/', '', $name);
    }
}
$name = "trumt tin tac tri 9";
$handle = new HandleString($name);

echo "Replace space to Under    "; echo  $handle->replaceSpaceToUnderscore($name);
echo  " Delete numderdigit   "; echo $handle->deleteNumberDigitFromString($name);
