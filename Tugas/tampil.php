<?php
require_once("koneksi.php");
?>
<table border=1>
    <thead>
        <th>Nama</th>
        <th>NIM</th>
        <th>Action</th>
    </thead>
    <tbody>
<?php
$conn = new mysqli($host,$uname,$pass,$db);

$sql            = "SELECT * FROM mahasiswa";
$result         = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>"."</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 
    </tbody>
</table>