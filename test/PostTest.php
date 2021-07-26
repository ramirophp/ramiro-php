<?php

use PHPUnit\Framework\TestCase;
use Rmo\Post;
use Rmo\Comment;

class PostTest extends TestCase {

    public function test_add_comment_to_post () {

        $post = new Post();
        $comment = new Comment();

        $post->addComment();

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);

    }

}