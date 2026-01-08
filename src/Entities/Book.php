<?php 


class Book {
    private int $id;
    private string $title;
    private float $price;
    private int $stock;
    private Author $author;

    public function __construct(
        int $id = null,
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

    public function getTitle(): string {
        return $this->title;
    }
}
