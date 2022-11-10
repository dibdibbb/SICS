<?php
if (isset($_POST['search'])) {
    $valueToSearch = $_POST['searchValue'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `customer` WHERE CONCAT(`No internet`, `nama lengkap`, `alamat`, `contact person`) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `customer`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sicstelkom");

    if ($connect->connect_error) {
        echo "koneksi database gagal: " . mysqli_connect_error();
        die;
    } else {
        $filter_Result = mysqli_query($connect, $query);
        // $result = mysqli_fetch_array($filter_Result);
        return $filter_Result;
    }
}
