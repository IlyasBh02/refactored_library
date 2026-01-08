<?php

require_once __DIR__ . '/../Repositories/BookRepository.php';

class LibraryService
{
    private BookRepository $bookRepository;

    public function __construct()
    {
        $this->bookRepository = new BookRepository();
    }

    public function addBook(Book $book): void
    {
        if (empty($book->getTitle())) {
            throw new Exception("Le titre est obligatoire");
        }

        if ($book->getStock() < 0) {
            throw new Exception("Stock invalide");
        }

        $this->bookRepository->save($book);
    }

    public function listBooks(): array
    {
        return $this->bookRepository->findAll();
    }
}
