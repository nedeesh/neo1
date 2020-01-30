<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    <form method="GET">
    <table class="table">
      <tr>
        <td>Name</td>
        <td><input type="text" class="form-controll" name="name"></td>
      </tr>
      <tr>
        <td></td>
        <td><button name="getvalue" class="btn btn-danger">Search</button></td>
      </tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_GET["getvalue"]))
{
  $value=$_GET["name"];
  $ServerName="localhost";
  $DbUserName="root";
  $DbPassword="";
  $DBName="mydb1";
  $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
  $sql="SELECT `Movie`, `Actor`, `Actress` FROM `movie` WHERE `Movie`='$value'";
  $result=$connection->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
  $MOVIE=$row["Movie"];
  $ACTOR=$row["Actor"];
  $ACTRESS=$row["Actress"];
  echo "<table class='table'><tr><td>Name</td><td>$MOVIE</td></tr>
  <tr><td>roll</td><td>$ACTOR</td></tr>
  <tr><td>COLLEGE</td><td>$ACTRESS</td></tr>
  </table>";
}
}
    else
    {
      echo"invalid movie";
    }
}
?>