<?php

namespace Blog\Model;

class Post
{
    public $id;
    public $title;
    public $body;

    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->title  = (isset($data['title'])) ? $data['title'] : null;
        $this->body = (isset($data['body'])) ? $data['body'] : null;
    }
}