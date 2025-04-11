<?php

declare(strict_types=1);

namespace Nkamuo\GS1Parser\Parser;

use Nkamuo\GS1Parser\Barcode;

interface ParserInterface
{
    public function parse(string $barcode): Barcode;
}