<?php
include_once "BaseModel.php";
class UserModel extends BaseModel
{
    protected $table = "users";

    public function store($request)
    {
        $sql = "INSERT INTO $this->table (name,email,password,country,birthday) values (?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$request["name"]);
        $stmt->bindValue(2,$request["email"]);
        $stmt->bindValue(3,$request["password"]);
        $stmt->bindValue(4,$request["country"]);
        $stmt->bindValue(5,$request["birthday"]);
        $stmt->execute();
    }

    public function update($request)
    {
        $sql = "UPDATE $this->table SET name=?,email=?,password=?,birthday=?,country=? WHERE id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(1,$request["name"]);
        $stmt->bindValue(2,$request["email"]);
        $stmt->bindValue(3,$request["password"]);
        $stmt->bindValue(4,$request["birthday"]);
        $stmt->bindValue(5,$request["country"]);
        $stmt->bindValue(6,$request["id"]);
        $stmt->execute();
    }
}