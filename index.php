<?php include 'header.php';?>

<?php
include 'config.php';
echo "<h2>HTML Table</h2>

<table>
<thead>
  <tr>
    <th>No</th>
    <th>Name</th>
    <th>Size</th>
    <th>Price</th>
  </tr>
  </thead>
  
  <body>
  ";
include 'loop.php';
echo ""
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</body>
</table>


<form action='product_handler.php' method='post'>

<input type='text' name='shoename' placeholder='Enter shoe' >
<input type='number' name='shoesize' placeholder='Enter shoe size' >
<input type='number' name='shoeprice' placeholder='Enter shoe price' >
<input type='submit' name='btn_submit' value='Save'>

</form>"
<?php include 'footer.php';?>
`