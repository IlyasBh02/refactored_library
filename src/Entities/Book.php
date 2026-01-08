<?php

class Book
{
    private ?int $id;
    private string $title;
    private float $price;
    private int $stock;
    private Author $author;

    public function __construct(
        ?int $id,
        string $title,
        float $price,
        int $stock,
        Author $author
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->stock = $stock;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
}
