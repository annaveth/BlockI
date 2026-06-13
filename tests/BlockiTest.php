<?php
/**
 * Tests for BlockI
 */

use PHPUnit\Framework\TestCase;
use Blocki\Blocki;

class BlockiTest extends TestCase {
    private Blocki $instance;

    protected function setUp(): void {
        $this->instance = new Blocki(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocki::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
