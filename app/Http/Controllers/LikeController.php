<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
     /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    // Like Function
    public function likeIt(Reply $reply){
        $reply->likes()->create([
            // 'user_id' => auth()->id();
            'user_id' => '1'
        ]);
    }

    // Dislike Function
    public function dislikeIt(Reply $reply){
        // $reply->likes()->where(['user_id', auth()->id()])->first()->delete();
        $reply->likes()->where('user_id', '1')->first()->delete();
    }
}
