<?php

declare(strict_types=1);

namespace Nkamuo\GS1Parser\Validator;

interface ValidatorInterface
{
    public function validate($barcode): Resolution;
}