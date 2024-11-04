<?php

namespace App\Enums;

enum TypeTechnology: int
{
    case type_backend = 1;
    case type_frontend = 2;
    case type_devops = 3;
    case type_database = 4;
    case type_mobile = 5;
    case type_testing = 6;
    case type_security = 7;
    case type_cloud = 8;
    case type_dataScience = 9;
    case type_machineLearning = 10;
    case type_artificialIntelligence = 11;
    case type_data = 12;
}
