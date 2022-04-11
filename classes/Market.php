<?php 
include 'Connection.php';


class Market extends Connection {


    public function store($name,$price,$desc){
        
        $sql = "INSERT INTO items(name,price,description)VALUES('$name','$price','$desc')";
        $result = $this->conn->query($sql);

        if($result){ // if $result == TRUE
            header('location: ../views/dash-item.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }
    public function show(){
        $sql = "SELECT * FROM items";
        $result = $this->conn->query($sql);

        

        if($result->num_rows>0){
            // $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }else{
            return FALSE; //= 1
        }
    }

    public function destroy($id){
        $sql = "DELETE FROM items WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if($result){
            header('location: ../views/dash-item.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

    public function edit($id,$name,$price,$desc){
        $sql = "UPDATE items SET name = '$name', price = '$price', description = '$desc' WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if($result){
            header('location: ../views/dash-item.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    public function show_data($id){
        $sql = "SELECT * FROM items WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if($result){
           return $result->fetch_assoc();
        }else{
            return FALSE;// to show error if youre sql is not working
            
        }
    }

}
?>
