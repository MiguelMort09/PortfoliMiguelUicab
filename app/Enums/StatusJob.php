<?php

namespace App\Enums;

enum StatusJob: int
{
    case CurrentJob = 1;
    case PreviousJob = 2;
    case CompletedJob = 3;
    case JobOfferAccepted = 4;
}
