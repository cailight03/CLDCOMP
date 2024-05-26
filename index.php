<?php 
include 'config/connection.php';
session_start();
?>



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
            <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="addCategoryForm">
              <div class="mb-3">
                <label for="categoryName" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="categoryName" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" form="addCategoryForm" class="btn btn-primary">Save Category</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Add Category Modal -->

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body py-5">Basta Stocks</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body py-5">Upcoming Stocks</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-dark h-100">
                        <div class="card-body py-5">Almost Out of Stocks</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body py-5">OUT OF STOCKS</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                            Area Chart Example
                        </div>
                        <div class="card-body">
                            <canvas class="chart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-header">
                            <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                            Area Chart Example
                        </div>
                        <div class="card-body">
                            <canvas class="chart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BearBrand</td>
                                            <td>Dairy</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>PorkChop</td>
                                            <td>Meat</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Lemon</td>
                                            <td>Fruits</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>BabyWipes</td>
                                            <td>Hygiene</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Pacencia</td>
                                            <td>Baked Goods</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Knife</td>
                                            <td>Utensils</td>
                                            <td>125</td>
                                            <td>₱86.00</td>
                                            <td>2024/04/25</td>
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
