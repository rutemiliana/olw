<?php

namespace App\Enums;

// Enum é uma criação de tipagem para tipos específicos de valores. Este referenciamento é usado em $casts da model Sale
enum status: string
{
    CASE PEDDING = 'P';
    CASE APPROVED = 'A';
    CASE CANCELED = 'C';
}
