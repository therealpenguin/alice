<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception\FixtureBuilder\ExpressionLanguage;

use PHPUnit\Framework\TestCase;
use Nelmio\Alice\Throwable\ExpressionLanguageParseThrowable;

/**
 * @covers \Nelmio\Alice\Throwable\Exception\FixtureBuilder\ExpressionLanguage\ParserNotFoundException
 */
class ParserNotFoundExceptionTest extends TestCase
{
    public function testIsALogicException()
    {
        $this->assertTrue(is_a(ParserNotFoundException::class, \LogicException::class, true));
    }

    public function testIsNotAParseThrowable()
    {
        $this->assertFalse(is_a(ParserNotFoundException::class, ExpressionLanguageParseThrowable::class, true));
    }

    public function testIsExtensible()
    {
        $exception = new ChildParserNotFoundException();
        $this->assertInstanceOf(ChildParserNotFoundException::class, $exception);
    }
}
