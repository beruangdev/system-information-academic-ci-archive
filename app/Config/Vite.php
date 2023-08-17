<?php

namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class Vite extends BaseConfig
{
    public array $entryPoints = [
        'main' => 'app/Views/assets/js/main.js',
        'admin' => 'app/Views/assets/js/admin.js',
    ];
}