<?php
/**
 * This software is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License version 3 as published by the Free Software Foundation
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * @copyright  Copyright (c) 2012 Mayflower GmbH (http://www.mayflower.de)
 * @license    LGPL v3 (See LICENSE file)
 */
namespace Holiday\Test;
use Holiday;

require_once "vendor/autoload.php";

class BavariaTest extends \PHPUnit_Framework_TestCase
{
    public function testEasterBug() {
        $by       = new Holiday\Bavaria(new \DateTimeZone("UTC"));
        $holidays = $by->between(
            new \DateTime("2012-04-09"),
            new \DateTime("2012-04-09"));

        $holiday = array_pop($holidays);
        $this->assertEquals("Ostermontag", $holiday->name);
        $this->assertEquals("2012-04-09 00:00:00", $holiday->format("Y-m-d H:i:s"));
    }
}
