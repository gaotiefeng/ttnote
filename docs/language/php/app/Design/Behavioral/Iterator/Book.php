<?php

declare(strict_types=1);


namespace App\Design\Behavioral\Iterator;


class Book
{
    private $author;
    private $title;

    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor():string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorAndTitle() : string
    {
        return $this->getTitle().' by '.$this->getAuthor();
    }
}