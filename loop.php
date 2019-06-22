<?php
//query/request
$results = "SELECT * FROM `product`";
// store. the result/ grab the result
$fetchResult = mysqli_query($conn, $results);
while ( $row = mysqli_fetch_assoc($fetchResult)){
    extract($row);
    echo "<tr>
     <td>$id</td>
     <td>$name</td>
     <td>$size</td>
     <td>$price</td>
     <td><a href = '#' class='btn btn-danger'> Delete<</a> </td>
     <td><a href = '#' class='btn btn-info'> Update<</a> </td>
     </tr>";
}
 ?>