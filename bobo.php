<?php
include 'config/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Last Restock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            // Fetch categories from the database
                $query = "SELECT * FROM product_list where category='Dairy'";
                $result = mysqli_query($connection, $query);

                // Check if any categories were found
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                      // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>';
                  echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                  echo '<td>' . htmlspecialchars($row['stock']) . '</td>';
                  echo '<td>₱' . htmlspecialchars($row['price']) . '</td>';
                  echo '<td>' . htmlspecialchars($row['last_restock']) . '</td>';
                  

                  echo '<td>
                  <button class="btn btn-warning btn-sm update-btn" 
                  data-bs-toggle="modal" 
                  data-bs-target="#updateProductModal">Update</button>
          <button class="btn btn-danger btn-sm" 
                  data-bs-toggle="modal" 
                  data-bs-target="#deleteConfirmationModal">Delete</button>
          <button class="btn btn-success btn-sm" 
                  data-bs-toggle="modal" 
                  data-bs-target="#restockProductModal">Restock</button>
                  </td>';
                  echo '</tr>';
              }
          } else {
              echo "<tr><td colspan='55' class='text-center'>No products found</td></tr>";
          }
                            ?>
                                    </tbody>
                                </table>


    <form action="update_product.php"></form>
</body>
</html>