<?php

namespace Holiday\CH;

use Holiday\Holiday;

class OW extends CH
{
    protected function getHolidays($year)
    {
        $timezone = $this->timezone;

        $data   = parent::getHolidays($year);

        $easter = new \DateTimeImmutable(parent::getEaster($year));

        $data[] = new Holiday($easter->modify("-2 days"), "Karfreitag", $timezone);
        $data[] = new Holiday($easter->modify("+1 day"), "Ostermontag", $timezone);
        $data[] = new Holiday($easter->modify("+50 days"), "Pfingstmontag", $timezone);
        $data[] = new Holiday($easter->modify("+60 days"), "Fronleichnam", $timezone);

        $data[] = new Holiday('15.08.' . $year, "Mariä Himmelfahrt", $timezone);
        $date = new \DateTimeImmutable('Third Sunday of September ' . $year);
        $data[] = new Holiday($date, "Eidgenössischer Dank-, Buss- und Bettag", $timezone);
        $data[] = new Holiday('25.09.'.$year, "St. Niklas von Flüe", $timezone);
        $data[] = new Holiday('01.11.' . $year, "Allerheiligen", $timezone);
        $data[] = new Holiday('08.12.' . $year, "Mariä Empfängnis", $timezone);
        $data[] = new Holiday("26.12." . $year, "Stephanstag", $timezone);

        return $data;
    }
}