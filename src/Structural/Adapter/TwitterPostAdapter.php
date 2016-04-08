<?php

namespace Structural\Adapter;

use Structural\Adapter\TwitterClient;

class TwitterPostAdapter implements Post
{
    private $client;

    public function __construct(TwitterClient $client)
    {
        $this->client = $client;
    }

    public function post($message)
    {
        $this->client->writeTweet($message);
    }

    public function message($message, $user)
    {
        $this->client->directMessage($message, $user);
    }
}
