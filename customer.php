<?php

    require "koneksi.php";

    $query = "SELECT * FROM photographer";
    $result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM camera";
    $result2 = mysqli_query($conn, $query2);

    if( isset($_GET["tambah"])){
        $nama2 =  $_GET["nama2"];
        $id_photographer = $_GET["id_photographer"];
        $jenis_layanan = $_GET["jenis_layanan"];
    
        $query3 = "INSERT INTO transaction1 VALUES
                    ('','$nama2', '$id_photographer', '$jenis_layanan','')";
        $masuk = mysqli_query($conn, $query3);
    
        if ($masuk) {
            echo "<script>
                        alert('Berhasil Memesan!');
                        document.location.href = 'customer.php';
                    </script>";
        }
    }
    
    if( isset($_GET["tambah2"])){
        $nama =  $_GET["nama"];
        $nomor_hp = $_GET["nomor_hp"];
        $alamat = $_GET["alamat"];
    
        $query4 = "INSERT INTO customer VALUES
                    ('$nama', '$nomor_hp', '$alamat')";
        $masuk2 = mysqli_query($conn, $query4);
    
        if ($masuk2) {
            echo "<script>
                    alert('Berhasil Mendaftar!');
                    document.location.href = 'customer.php';
                </script>";
}
    }
?>

<?php
require "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/customer.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <title>Portfolibsite</title>

    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <p><b>Hello, </b><span id='hello' style="font-weight: 600;"></span></p>    
                <p><b>ABSLT STUDIO</b></p>
                <a href="customer.php"><b>Book Now</b></a>
                <a href="kontak.php">Contact Us</a>
                <a href="portofolio.php">Portofolio</a>
                <a href="about.php">About us</a>
                <a href="webphoto.php">Home</a>
                <a href="logout.php">Logout</a>
                <br> 
            </div>
            <div class="content">
                <h3>Daftar Member</h3>
                <form action="" method="get">
                    Nama:
                    <br>
                    <br>
                    <input type="text" name="nama">
                    <br>
                    Nomor HP:
                    <br>
                    <br>
                    <input type="text" name="nomor_hp" >
                    <br>
                    Alamat:
                    <br>
                    <br>
                    <input type="text" name="alamat">
                    <br>
                    <button type="submit" name="tambah2">Daftar</button>
                </form>
                <script>
                    function searchTable(inputId, tableId) {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById(inputId);
                    filter = input.value.toUpperCase();
                    table = document.getElementById(tableId);
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td");
                        for (var j = 0; j < td.length; j++) {
                        if (td[j]) {
                            txtValue = td[j].textContent || td[j].innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                            } else {
                            tr[i].style.display = "none";
                            }
                        }
                        }
                    }
                    }
                </script>
                <script>
                    function sortTable(tableId, n) {
                        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                        table = document.getElementById(tableId);
                        switching = true;
                        dir = "asc";
                        while (switching) {
                            switching = false;
                            rows = table.rows;
                            for (i = 1; i < (rows.length - 1); i++) {
                                shouldSwitch = false;
                                x = rows[i].getElementsByTagName("TD")[n];
                                y = rows[i + 1].getElementsByTagName("TD")[n];
                                if (dir == "asc") {
                                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                        shouldSwitch= true;
                                        break;
                                    }
                                } else if (dir == "desc") {
                                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                        shouldSwitch= true;
                                        break;
                                    }
                                }
                            }
                            if (shouldSwitch) {
                                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                switching = true;
                                switchcount ++;      
                            } else {
                                if (switchcount == 0 && dir == "asc") {
                                    dir = "desc";
                                    switching = true;
                                }
                            }
                        }
                        setSortArrow(n, dir);
                    }
                    function setSortArrow(n, dir) {
                        var th = document.getElementsByTagName("th")[n];
                        var ths = document.getElementsByTagName("th");
                        for (i = 0; i < ths.length; i++) {
                            ths[i].classList.remove("arrow-up");
                            ths[i].classList.remove("arrow-down");
                        }
                        if (dir == "asc"){
                            th.classList.add("arrow-up");
                        }else if (dir == "desc"){
                            th.classList.add("arrow-down");
                        }
                    }
                </script>

                    <h3>Photographer</h3>
                    <label type="search" style="text-align : center;">
                        Search Photographer
                        <input type="search" id="photographerInput" onkeyup="searchTable('photographerInput', 'photographerTable')" placeholder="Search" title="Type in a name">
                    </label>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable" id="photographerTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="sortable" onclick="sortTable('photographerTable', 1, 'asc')">
                                    Nama
                                    <span id="arrow-down" class="fas fa-long-arrow-alt-down" onclick="sortTable('photographerTable', 1, 'asc')"></span>
                                    <span id="arrow-up" class="fas fa-long-arrow-alt-up" onclick="sortTable('photographerTable', 1, 'desc')"></span>
                                </th>

                                <th>No. HP</th>
                                <th>ID_Kamera</th>
                            </tr>
                        </thead>
                    <?php
                    while( $row = mysqli_fetch_assoc($result)) {

                    ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php echo $row["id"] ?></td>
                                <td><?php echo $row["nama"] ?></td>
                                <td><?php echo $row["nomor_hp"] ?></td>
                                <td><?php echo $row["id_kamera"] ?></td>
                            </tr>
                        </tbody>
                    <?php }?>   
                    </table>
                    
                    <h3>Camera</h3>
                    <label type="search" style="text-align : center;">
                        Search Camera
                        <input type="search" id="cameraInput" onkeyup="searchTable('cameraInput', 'cameraTable')" placeholder="Search" title="Type in a name">
                    </label>
                    <table border="1" cellpadding="10" cellspacing="0" class="ctable" id="cameraTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="sortable" onclick="sortTable('cameraTable', 1)">
                                Kamera
                                <span id="arrow-down" class="fas fa-long-arrow-alt-down" onclick="sortTable('cameraTable', 1, 'asc')"></span>
                                    <span id="arrow-up" class="fas fa-long-arrow-alt-up" onclick="sortTable('cameraTable', 1, 'desc')"></span>
                            </th>
                                <th>Jenis</th>
                                <th>Kapasitas</th>
                            </tr>
                        </thead>
                    <?php
                    while( $row = mysqli_fetch_assoc($result2)) {

                    ?>
                        <tbody>
                            <tr>
                                <td style="text-align: center;"><?php echo $row["id"] ?></td>
                                <td><?php echo $row["kamera"] ?></td>
                                <td><?php echo $row["jenis"] ?></td>
                                <td><?php echo $row["kapasitas"] ?></td>
                            </tr>
                        </tbody>
                    <?php }?>   
                    </table>
                    <h3>Memesan Layanan</h3>
                    <form action="" method="get">
                        Nama Anda:
                        <input type="text" name="nama2">
                        <br>
                        ID Photographer:
                        <input type="text" name="id_photographer" >
                        <br>
                        Jenis Layanan:
                        <input type="text" name="jenis_layanan">
                        <br>
                        <button type="submit" name="tambah">Pesan</button>
                    </form>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable();
                        } );
                    </script>
                
                        </div>
                        <footer>
                            <b>ABSLT STUDIO</b></a>
                            <br>
                            <p id="slogan">REDEFINING MOMENTS</p>
                            <br>
                            <p id="kontak"><b>Found us</b></p>
                            <br>
                            
                                <a href="https://instagram.com/indrabna?igshid=OGQ2MjdiOTE=" target="_blank" ><img src="img/ig.png"></a>  
                                <a href=""><img src="img/yt.png"></a>
                                <br><br>
                                <div class="copy">
                                    <p><b>&copy; 2023 Abslt Studios. All rights reserved.</b></p>
                                </div>
                 </footer>
            </div>
    </body>
</html>