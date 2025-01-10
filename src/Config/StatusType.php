<?php

namespace App\Config;

enum StatusType: string
{
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';
    case CANCELLED = 'cancelled';
    case PENDING = 'pending';
    case UNDER_REVIEW = 'under_review';

}