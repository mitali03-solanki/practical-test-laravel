<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileFormRequest;
use App\Providers\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function update(ProfileFormRequest $request)
    {
        return app(ProfileService::class)->update(auth()->user(), $request->validated());
    }
}
