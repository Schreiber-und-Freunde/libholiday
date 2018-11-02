<?php

namespace Holiday\IT;

use Holiday\Holiday;

class IT34 extends IT
{
    protected function getHolidays($year)
    {
        $timezone = $this->timezone;

        $easter = parent::getEaster($year);

        $data[] = new Holiday("25.04." . $year, "St. Markus", $timezone, Holiday::NOTABLE);

        return $data;
    }
}
