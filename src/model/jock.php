<?php

namespace src\model;
require_once 'src/lib/database.php';
class Jock
{
    private ?int $id;
    private ?string $jock;

    public function __construct(int|null $id, string|null $jock)
    {
        $this->id = $id;
        $this->jock = $jock;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getJock(): ?string
    {
        return $this->jock;
    }

    /**
     * @param string|null $jock
     */
    public function setJock(?string $jock): void
    {
        $this->jock = $jock;
    }


    public static function getAllJock(): array
    {
        return \Database::connect()->query("select * from jock")->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addJock():bool{
        $stmt = \Database::connect()->prepare("INSERT INTO jock (id, jock) VALUES (:id, :jock)");
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':jock', $this->jock);
        return $stmt->execute();
    }
}

interface IJock{

}