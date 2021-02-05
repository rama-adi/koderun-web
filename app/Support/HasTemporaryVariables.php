<?php


namespace App\Support;


trait HasTemporaryVariables
{


    protected function getTempVar(string $var)
    {
        return $this->tempVar[$var];
    }

    protected function setTempVar(string $var, $value)
    {
        return $this->tempVar[$var] = $value;
    }
}
