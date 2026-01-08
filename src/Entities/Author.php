<?php

class Author {
    private int $id;
    private string $name;

    public function __construct(int $id = null, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }
}
