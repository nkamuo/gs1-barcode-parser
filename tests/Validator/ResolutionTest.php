<?php

declare(strict_types=1);

namespace Nkamuo\GS1Parser\Tests\Validator;

use Nkamuo\GS1Parser\Validator\ErrorCodes;
use Nkamuo\GS1Parser\Validator\Resolution;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Nkamuo\GS1Parser\Validator\Resolution
 */
final class ResolutionTest extends TestCase
{
    public function testValid(): void
    {
        $resolution = Resolution::createValid();

        self::assertTrue($resolution->isValid());
        self::assertEmpty($resolution->getErrors());
    }

    public function testInvalid(): void
    {
        $resolution = Resolution::createInvalid([
            ErrorCodes::VALUE_IS_NOT_STRING => 'test'
        ]);

        self::assertFalse($resolution->isValid());
        self::assertEquals([
            ErrorCodes::VALUE_IS_NOT_STRING => 'test'
        ], $resolution->getErrors());
    }
}
