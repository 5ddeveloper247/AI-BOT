<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface ContactRepositoryInterface
{
    public function store(Request $request);
}
