<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Product Inventory</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <div class="logo">
          <img src="img/minimart.png" width="100">
        </div>
        <div class="navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->

    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dairy</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Poultry</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-lock fa-fw me-3"></i><span>Meat</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Fruits</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-bar fa-fw me-3"></i><span>Vegetables</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-globe fa-fw me-3"></i><span>Hygiene</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-building fa-fw me-3"></i><span>Baked Goods</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-calendar fa-fw me-3"></i><span>Utensils</span>
                </a>
            </div>

            <div class="sidebar-button">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Category</button>
            </div>
        </div>
    </nav>
    <!-- End Sidebar -->

    <!-- Add Category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addCategoryModalLabel">Add New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addCategoryForm">
              <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" required>
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" required>
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="addCategoryForm" class="btn btn-primary">Save Product</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Add Category Modal -->

    <!-- Update Product Modal -->
    <div class="modal fade" id="updateProductModal" tabindex="-1" aria-labelledby="updateProductModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateProductModalLabel">Update Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="updateProductForm">
              <div class="mb-3">
                <label for="updateCategoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="updateCategoryName" required>
                <label for="updateProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="updateProductName" required>
                <label for="updatePrice" class="form-label">Price</label>
                <input type="text" class="form-control" id="updatePrice" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="updateProductForm" class="btn btn-primary">Update Product</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Update Product Modal -->

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to delete this product?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Delete Confirmation Modal -->

    <!-- Restock Product Modal -->
    <div class="modal fade" id="restockProductModal" tabindex="-1" aria-labelledby="restockProductModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="restockProductModalLabel">Restock Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="restockProductForm">
              <div class="mb-3">
                <label for="restockAmount" class="form-label">Amount to Restock</label>
                <input type="number" class="form-control" id="restockAmount" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="restockProductForm" class="btn btn-primary">Restock</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Restock Product Modal -->

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="bi bi-table me-2"></i></span> Product list
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped data-table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Last Restock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BearBrand</td>
                                            <td>Meat</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal">Update</button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete</button>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#restockProductModal">Restock</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PorkChop</td>
                                            <td>Meat</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal">Update</button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete</button>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#restockProductModal">Restock</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lemon</td>
                                            <td>Meat</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal">Update</button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete</button>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#restockProductModal">Restock</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BabyWipes</td>
                                            <td>Meat</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal">Update</button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete</button>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#restockProductModal">Restock</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pacencia</td>
                                            <td>Baked Goods</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal">Update</button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete</button>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#restockProductModal">Restock</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Knife</td>
                                            <td>Utensils</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateProductModal">Update</button>
                                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">Delete</button>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#restockProductModal">Restock</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                
            </div>
 </div>          
        </div>
    </div>
</div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>

 
</body>
</html>
