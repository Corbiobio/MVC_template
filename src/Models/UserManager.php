<?php
namespace MVC\Models;

use MVC\Models\User;
use PDO;

class UserManager extends _TemplateManager
{
    private User $User;

    function __construct()
    {
        parent::__construct();
        $this->User = new User();
    }

    function get_all(): array
    {
        $sql = "SELECT * FROM user";

        $result = $this->bdd->query($sql);

        $result->setFetchMode(PDO::FETCH_CLASS, "MVC\Models\User");
        return $result->fetchAll();
    }
    function get_one($id): User
    {
        $sql = "SELECT * FROM user WHERE id = ?";

        $result = $this->bdd->prepare($sql);

        $result->execute([
            $id,
        ]);

        $result->setFetchMode(PDO::FETCH_CLASS, "MVC\Models\User");
        return $result->fetch();
    }

    function delete($id): bool
    {
        $sql = "DELETE FROM user WHERE id = ?";

        $result = $this->bdd->prepare($sql);

        $result->execute([
            $id,
        ]);

        return $result->fetch();
    }
    function insert($id, $password): bool
    {
        $sql = "INSERT INTO user(id, password) VALUES (?,?)";

        $result = $this->bdd->prepare($sql);

        $result->execute([
            $id,
            $password
        ]);

        return $result->fetch();
    }
}