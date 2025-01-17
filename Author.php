<?php

class Author
{
    // Attributs
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $biography;

    // Constructeur
    public function __construct(int $id, string $firstName, string $lastName, string $biography)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->biography = $biography;
    }

