<?php

namespace App\Models;

use Core\DataLayer\DataLayer;
use DateTime;
use Exception;

class Eleitor extends DataLayer
{

    public function __construct()
    {
        parent::__construct('eleitor', ["nome", "cpf", "idade"], "id", false);
    }
 
    
}
