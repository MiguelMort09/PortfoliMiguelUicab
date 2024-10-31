<?php

namespace App\Enums;

enum StatusPost: int
{
    case Draft = 1;
    case Published = 2;
    case UnderReview = 3;
    case Archived = 4;
    case Updated = 5;
    case Scheduled = 6;
}
