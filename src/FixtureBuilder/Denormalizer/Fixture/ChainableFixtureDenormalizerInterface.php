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

namespace Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture;

interface ChainableFixtureDenormalizerInterface extends FixtureDenormalizerInterface
{
    /**
     * @param string $reference
     *
     * @example:
     *  'user0', 'user{0..10}'
     *
     * @return bool
     */
    public function canDenormalize(string $reference): bool;
}
