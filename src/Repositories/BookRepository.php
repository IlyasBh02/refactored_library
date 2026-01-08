<?php

require_once __DIR__ . '/../Core/Database.php';
require_once __DIR__ . '/../Entities/Book.php';
require_once __DIR__ . '/../Entities/Author.php';

class BookRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    public function findAll(): array
    {
        $sql = "SELECT b.*, a.name AS author_name
                FROM books b
                JOIN authors a ON b.author_id = a.id";

        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(Book $book): void
    {
        $sql = "INSERT INTO books (title, price, stock, author_id)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            $book->getTitle(),
            $book->getPrice(),
            $book->getStock(),
            $book->getAuthor()->getId()
        ]);
    }
}
