<html>
    <body>

    <?php
    include_once 'DBConnect.php';
    $sql = "SELECT * FROM product;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['name'] . "<br>"; 
        }
    }

    ?>
   <h1>This is the title of my website   </h1> 
   <h2> Sub sections of my website</h2>
   <table> 
    <th>
    First Name
    </th>
    <th>
    Surname
    </th>
    <tr>
    <td>
    John
    </td>
    <td>
    Hanks
    </td>
    </tr>
    <tr>
    <td>
    Mickey
    </td>
    <td>
    Mouse
    </td>
    </tr>
   </table>
    </body>
</html>