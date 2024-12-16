<?php
include('koneksi.php');
$id = $_GET['id']; // Mengambil ID dari URL
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<form action="edit_user.php?id=<?php echo $user['id']; ?>"
method="POST">
 <label for="name">Nama:</label>
 <input type="text" id="name" name="name" value="<?php
echo $user['name']; ?>" required>
 <br>
 <label for="email">Email:</label>
 <input type="email" id="email" name="email" value="<?php
echo $user['email']; ?>" required>
 <br>
 <label for="age">Umur:</label>
 <input type="number" id="age" name="age" value="<?php
echo $user['age']; ?>" required>
 <br>
 <button type="submit" name="submit">Update</button>
</form>

<?php
include('koneksi.php');
if (isset($_POST['submit'])) {
 $id = $_GET['id'];
 $name = $_POST['name'];
 $email = $_POST['email'];
 $age = $_POST['age'];
 // Query untuk mengupdate data
 $sql = "UPDATE users SET name='$name', email='$email',
age='$age' WHERE id=$id";
 if ($conn->query($sql) === TRUE) {
 echo "Data berhasil diperbarui";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
$conn->close();
?>
