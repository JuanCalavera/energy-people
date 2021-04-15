<?php

include "conection.php";

class Controller
{

    function show_all()
    {
        $dbh = new Connection();
        $dbh->connect();
        $dbh = new PDO('mysql:host=localhost;dbname=energy;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));


        $sth = $dbh->query('SELECT * FROM beneficios')->fetchAll();
        foreach ($sth as $row) {
            $names[] = $row['name'];
        }

        return $names;
    }

    function showAll()
    {
        $dbh = new PDO('mysql:host=localhost;dbname=energypeople;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));
        $sth = $dbh->query('SELECT * FROM beneficios');
        $row = $sth->fetch();
        return $row;
    }

    function insert($name, $codigo, $operadora, $tipo, $valor, $data)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=energypeople;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));

        $stmt = $dbh->prepare("INSERT INTO BENEFICIOS (name, number, char, char, number, date ) VALUES (:name, :number, :char, :char, :number, :date)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':number', $codigo);
        $stmt->bindParam(':char', $operadora);
        $stmt->bindParam(':char', $tipo);
        $stmt->bindParam(':number', $valor);
        $stmt->bindParam(':date', $data);
        $stmt->execute();
        $newId = $dbh->lastInsertId();

        if ($stmt->execute()) {
            $message = "Foi inserida as informações";
        } else {
            $message = "Deu Erro :(";
        }

        return $message;
    }

    function show($id)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=energypeople;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));

        $stmt = $dbh->prepare("SELECT * FROM beneficios WHERE id=?");
        $stmt->execute([$id]);
        $beneficios = $stmt->fetch();

        return $beneficios;
    }

    function update($name, $codigo, $operadora, $tipo, $valor, $data, $id)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=energypeople;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));
        $sql = "UPDATE beneficios SET nome = :nome, 
            codigo = :codigo, 
            operadora = :operadora,  
            tipo = :tipo,  
            valor = :valor  
            WHERE  id= :id";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':number', $codigo);
        $stmt->bindParam(':char', $operadora);
        $stmt->bindParam(':char', $tipo);
        $stmt->bindParam(':number', $valor);
        $stmt->bindParam(':date', $data);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        if($stmt->execute()){
            $message = "Atualizou";
        } else{
            $message = "Deu Ruim :(";
        }
        return $message;
    }

    function delete($id)
    {
        $dbh = new PDO('mysql:host=localhost;dbname=energypeople;', 'root', 'root', array(
            PDO::ATTR_PERSISTENT => true
        ));
        $sql = "DELETE FROM beneficios WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);
        $stmt->execute();
        if($stmt->execute()){
            $message = "Deletou";
        } else {
            $message = "Deu ruim :(";
        }

        return $message;
    }
}
