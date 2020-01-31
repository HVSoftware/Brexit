<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 3-9-2019
 * Time: 12:00
 */

namespace Brexit;

use PHPUnit\Framework\TestCase;

/**
 * Class BrexitTest
 *
 * @package Brexit
 */
class BrexitTest extends TestCase
{
    public function testExitDate() {
        $this->assertEquals(Brexit::EXIT_DATE_TIME, '31-01-2020T23:59', 'We have a final date.');
    }

    public function testExit()
    {
        Brexit::exit();
        $this->assertTrue(TRUE);
    }
}
