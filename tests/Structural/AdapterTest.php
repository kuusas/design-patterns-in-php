<?php

namespace tests\Structural\Adapter;

use Structural\Adapter\FacebookPost;
use Structural\Adapter\TwitterPostAdapter;
use Structural\Adapter\Twitter;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    public function testAdapter()
    {
        $facebook = new FacebookPost();
        $this->assertTrue(method_exists($facebook, 'post'));
        $this->assertTrue(method_exists($facebook, 'message'));

        $twitter = new TwitterPostAdapter(new Twitter());
        $this->assertTrue(method_exists($twitter, 'post'));
        $this->assertTrue(method_exists($twitter, 'message'));
    }
}
