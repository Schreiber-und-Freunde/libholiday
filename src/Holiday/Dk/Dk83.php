<?php

namespace Holiday\Dk;

class Dk83 extends Dk
{
    protected function getHolidays($year)
    {
        $timezone = $this->timezone;

        $data   = parent::getHolidays($year);

        return $data;
    }
}
