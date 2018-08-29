<?php

namespace App\Http\Controllers\Api;

use Auth;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmailRequest;
use App\Http\Controllers\Controller;

use App\Models\Email;

class EmailController extends Controller
{
    public function index()
    {
        return Auth::user()->emails()->orderBy('id', 'desc')->get();
    }

    public function store(StoreEmailRequest $request)
    {
        return Email::create([
            'user_id' => Auth::user()->id,
            'text' => $request->text,
            'subject' => $request->subject,
        ]);
    }

    public function show($id)
    {
        $this->authorize('show', Email::class);
        return Email::find($id);
    }
}
