<?php

namespace spec\Structural\Adapter;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Structural\Adapter\TwitterClient;

class TwitterPostAdapterSpec extends ObjectBehavior
{
    function let(TwitterClient $twitter)
    {
        $this->beConstructedWith($twitter);
    }

    function it_can_post_updates($twitter)
    {
        $twitter->writeTweet('Message')->shouldBeCalled();
        $this->post('Message');
    }

    function it_can_send_message($twitter)
    {
        $twitter->directMessage('Message', 'UserId')->shouldBeCalled();
        $this->message('Message', 'UserId');
    }
}


