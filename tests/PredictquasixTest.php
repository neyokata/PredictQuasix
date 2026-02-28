<?php
/**
 * Tests for PredictQuasix
 */

use PHPUnit\Framework\TestCase;
use Predictquasix\Predictquasix;

class PredictquasixTest extends TestCase {
    private Predictquasix $instance;

    protected function setUp(): void {
        $this->instance = new Predictquasix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Predictquasix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
