<?php
include('koneksi.php');
// Query untuk mengambil data
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Umur</th>
        <th>Aksi</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['age'] . "</td>
        <td>
        <a href='edit_user.php?id=" . $row['id']
.       "'>Edit</a> |
        <a href='delete_user.php?id=" .
    $row['id'] . "'>Hapus</a>
    </td>
        </tr>";
 }
    echo "</table>";
    } else {
        echo "Tidak ada data";
    }
$conn->close();
?>
