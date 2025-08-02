<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chess</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- <h2>Online Chess</h2>
    <div id="board" style="width: 400px"></div>
    <p id="status"></p> -->

     <div class="chessboard" id="chessboard"></div>
     

    <script src="app.js"></script>

   

    <?php 
      
      include "connect.php";
      
      // $sql = "CREATE TABLE account (
      //   id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      //   name VARCHAR(20) NOT NULL,
      //   password VARCHAR(20) NOT NULL
      // )" ;

      // if ($conn->query($sql) === TRUE) {
      //   echo "success";
      // } else {
      //   echo "fail";
      // }

      // $id = "";
      // $name = 'nguyenvu';
      // $password = '123';

      // $sql = " INSERT INTO account (id, name, password)
      // VALUES ('$id', '$name', '$password')
      // ";

      // mysqLi_query($conn, $sql);

      $sql = "SELECT * FROM account";
      $result = mysqLi_query($conn,$sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          echo $row["id"]."/".$row["name"]."/".$row["password"];
          echo '<br>';
        }
      }

    ?>

    


</body>
</html>