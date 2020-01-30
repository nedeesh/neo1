<!DOCTYPE html>
<html lang="en">
<head>
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="movies.php">Movie entry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">Movie search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit.php">Movie edit</a>
            </li>
          </ul>
    </nav>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method=GET>
    <table class="table">
        <TR>
            <td>Movie name</td>
            <td><input type="text" class="form-control" name="getMovie"></td>
        </TR>
        <tr>
            <td>Actor name</td>
            <td><input type="text" class="form-control" name="getActor"></td>
        </tr>
        <tr>
            <td>Actress</td>
            <td><input type="text" class="form-control" name="getActress"></td>
        </tr>
        <tr>
            <td>Director</td>
            <td><input type="text" class="form-control"name="getDirector"></td>
        </tr>
        <tr>
            <td>Camera</td>
            <td><input type="text" class="form-control"name="getCamera"></td>
        </tr>
        <tr>
            <td>Producer</td>
            <td><input type="text" class="form-control"name="getProducer"></td>
        </tr>
        <tr>
            <td>Distributor</td>
            <td><input type="text" class="form-control"name="getDistributer"></td>
        </tr>
        <tr>
            <td>Released date</td>
            <td><input type="text" class="form-control"name="getReleased"></td>
        </tr>
        <tr>
            <td><button class="btn btn-danger"name="getReset">Reset</button></td>
            <td><button class="btn btn-danger"name="getSubmit">Submit</button></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if(isset($_GET["getSubmit"]))
{
    $actor=$_GET["getActor"];
    $movie=$_GET["getMovie"];
    $actress=$_GET["getActress"];
    $director=$_GET["getDirector"];
    $camera=$_GET["getCamera"];
    $producer=$_GET["getProducer"];
    $distributer=$_GET["getDistributer"];
    $released=$_GET["getReleased"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="mydb1";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="INSERT INTO `Movie`(`Movie`, `Actor`, `Actress`, `Director`, `Camera`, `Producer`, `Distributor`,
     `Release`) VALUES ('$movie','$actor','$actress','$director','$camera','$producer','$distributer',
     '$released')";
    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo"successfull";
    }
    else
    {
        echo $connection->error;
    }
}
?>