<?php
require_once __DIR__ . '/db.php';

class Project
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    //   pak alle projecten 

    public function getAll(): array
    {
        $sql = "SELECT * FROM projects ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //  pak project bij ID

    public function getById(int $id): ?array
    {
        $sql = "SELECT * FROM projects WHERE id = :id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    //  voeg nieuw project toe

    public function add(string $title, string $description, string $image, string $link, string $category): bool
    {
        $sql = "INSERT INTO projects (title, description, image, link, category) 
                VALUES (:title, :description, :image, :link, :category)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'title'       => $title,
            'description' => $description,
            'image'       => $image,
            'link'        => $link,
            'category'    => $category
        ]);
    }

    //   Update  project

    public function update(int $id, string $title, string $description, string $image, string $link, string $category): bool
    {
        $sql = "UPDATE projects 
                SET title = :title, description = :description, image = :image, link = :link, category = :category
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            'id'          => $id,
            'title'       => $title,
            'description' => $description,
            'image'       => $image,
            'link'        => $link,
            'category'    => $category
        ]);
    }

    //   verwijder  project

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM projects WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}
