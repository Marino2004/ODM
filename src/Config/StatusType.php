<?php

namespace App\Config;

enum StatusType: string
{
    case IN_PROGRESS = 'en progression';
    case COMPLETED = 'achever';
    case CANCELLED = 'annuler';
    case PENDING = 'en attente';
    case UNDER_REVIEW = 'en review';

}