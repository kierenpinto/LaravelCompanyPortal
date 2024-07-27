<?php 

namespace App\Enums;

enum UserTypeEnum:string {
    case Customer = 'customer';
    case Superuser = 'superuser';
} 