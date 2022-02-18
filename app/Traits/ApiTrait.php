<?php

namespace App\Traits;


trait ApiTrait
{
    public function prepareApiRequest(array $data)
    {
        $per_page   = $data['per_page'] ?? 10;
        $page       = $data['page'] ?? 1;

        return (object)[
            'per_page'  => is_numeric($per_page) ? $per_page : 0,
            'page'      => is_numeric($page) ? $page : 0,
        ];
    }
}