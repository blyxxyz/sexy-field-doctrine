<?php
declare (strict_types=1);

namespace Tardigrades\SectionField\Service;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass Tardigrades\SectionField\Service\EntryNotFoundException
 * @covers ::<private>
 */
final class EntryNotFoundExceptionTest extends TestCase
{
    /**
     * @test
     * @covers ::__construct
     */
    public function it_should_construct_with_custom_message()
    {
        $exception = new EntryNotFoundException('custom message');
        $this->assertSame('custom message', $exception->getMessage());
    }

    /**
     * @test
     * @covers ::__construct
     */
    public function it_should_construct_with_default_message()
    {
        $exception = new EntryNotFoundException();
        $this->assertSame('Entry not found', $exception->getMessage());
    }
}
