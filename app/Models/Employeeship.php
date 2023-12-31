<?php
declare(strict_types=1);

namespace App\Models;

use Wallo\FilamentCompanies\Employeeship as FilamentCompaniesEmployeeship;

class Employeeship extends FilamentCompaniesEmployeeship
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
