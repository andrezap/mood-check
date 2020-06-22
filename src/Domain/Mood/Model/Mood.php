<?php

declare(strict_types=1);

namespace App\Domain\Mood\Model;

use MabeEnum\Enum;

/**
 * @method static Mood FANTASTIC()
 * @method static Mood GOOD()
 * @method static Mood NORMAL()
 * @method static Mood TIRED()
 * @method static Mood SAD()
 */

class Mood extends Enum
{
    private const FANTASTIC = 'FANTASTIC';
    private const GOOD = 'GOOD';
    private const NORMAL = 'NORMAL';
    private const TIRED = 'TIRED';
    private const SAD = 'SAD';

}