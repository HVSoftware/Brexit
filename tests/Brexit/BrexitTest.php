<?php
declare(strict_types=1);
/**
 * Package to help you with the Brexit.
 *
 * @author Harry van der Valk <info@hvsoftware.nl>
 * @package Brexit
 * @license MIT
 * @link https://packagist.org/packages/hvsoftware/brexit
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
    public function testExitDate(): void
    {
        $this->assertEquals(Brexit::EXIT_DATE_TIME, '31-01-2020T23:59', 'We have a final date.');
    }

    public function testExit(): void
    {
        Brexit::exit();
        $this->assertTrue(true);
    }
}
