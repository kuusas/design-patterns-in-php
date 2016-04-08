<?php

namespace Structural\Adapter;

class Twitter implements TwitterClient
{
    public function writeTweet($tweet)
    {
        // ...
    }
    
    public function directMessage($message, $userId)
    {
        // ...
    }
}
