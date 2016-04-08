<?php

namespace Structural\Adapter;

use Structural\Adapter\TwitterClient;

interface Post
{
    public function post($message);
    public function message($message, $user);
}
