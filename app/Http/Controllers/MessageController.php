<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\MessagePostRequest;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
          $messages = Message::with('user')->get();
          return view('messages', compact(['messages']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessagePostRequest $request, $userId)
    {

    }

}
