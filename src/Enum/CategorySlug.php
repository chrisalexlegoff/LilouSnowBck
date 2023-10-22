<?php

namespace App\Enum;

enum CategorySlug: string
{
    case Mastectomie = 'mastectomie';
    case Abdominoplastie = 'abdominoplastie';
    case Cicatrices = 'cicatrices';
    case Vitiligo = 'vitiligo';
    case GrandsBrules = 'grands brûlés';
    case Tricopigmentation = 'tricopigmentation';
}
