<?php
/**
 * Tests for GigaVision
 */

use PHPUnit\Framework\TestCase;
use Gigavision\Gigavision;

class GigavisionTest extends TestCase {
    private Gigavision $instance;

    protected function setUp(): void {
        $this->instance = new Gigavision(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gigavision::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
