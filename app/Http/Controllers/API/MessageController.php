<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\MessagePostRequest;
use App\Models\Message;

class MessageController extends Controller
{

    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessagePostRequest $request,$userId)
    {

        $message = new Message();
        $message->title = $request->title;
        $message->message = $request->message;
        $message->user_id = $userId;
        $message->save();
        return response()->json(['success' => true, 'message' => 'Message created successfully'], 200);
    }

}
