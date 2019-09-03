<?php
/**
 * Created by PhpStorm.
 * User: HVSoftware
 * Date: 3-9-2019
 * Time: 12:00
 */

namespace Brexit;

/**
 * Class BrexitTest
 *
 * @package Brexit
 */
class BrexitTest extends \PHPUnit\Framework\TestCase
{
    public function testExit()
    {
        $this->assertEquals(Brexit::EXIT_DATE_TIME, '31-10-2019T23:59', 'The Brexit exit date has changed. We do not know how to handle this.');
    }
}
