<?php

namespace Structural\Adapter;

interface TwitterClient
{
    public function writeTweet($tweet);
    public function directMessage($message, $userId);
}
