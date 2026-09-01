<?php
/**
 * Tests for APIEndpointMax
 */

use PHPUnit\Framework\TestCase;
use Apiendpointmax\Apiendpointmax;

class ApiendpointmaxTest extends TestCase {
    private Apiendpointmax $instance;

    protected function setUp(): void {
        $this->instance = new Apiendpointmax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apiendpointmax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
