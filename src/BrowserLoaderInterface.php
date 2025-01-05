<?php

/**
 * This file is part of the mimmi20/ua-loader-interface package.
 *
 * Copyright (c) 2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaLoader;

use UaResult\Browser\BrowserInterface;

interface BrowserLoaderInterface
{
    /**
     * @return array{client: BrowserInterface, engine: string|null}
     * @throws Exception\NotFoundException
     */
    public function load(string $key, string $useragent = ''): array;
}
