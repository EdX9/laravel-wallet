<?php

declare(strict_types=1);

namespace Bavix\Wallet\Interfaces;

interface ExchangeInterface
{
    /** @param float|int|string $amount */
    public function convertTo(string $fromCurrency, string $toCurrency, $amount): string;
}
