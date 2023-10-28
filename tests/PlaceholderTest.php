<?php

declare(strict_types=1);

namespace JeckelLab\IpcSharedMemory\Tests;

use JeckelLab\IpcSharedMemory\Placeholder;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @covers \JeckelLab\IpcSharedMemory\Placeholder
 */
final class PlaceholderTest extends TestCase
{
    private Placeholder $placeholder;

    protected function setUp(): void
    {
        $this->placeholder = new Placeholder('Julien Mercier-Rojas says: ');
    }

    /**
     * @test
     */
    public function testItEchoesSomething(): void
    {
        self::assertSame('Julien Mercier-Rojas says: Hello', $this->placeholder->echo('Hello'));
    }
}
