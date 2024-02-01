<!-- userlist.php -->

<?php
require_once 'dbconnect.php';

// Function to delete a user by ID
function deleteUser($conn, $userId) {
    $deleteStmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $deleteStmt->bind_param("i", $userId);
    $deleteStmt->execute();
    $deleteStmt->close();
}

// Check if the delete button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_user"])) {
    $userIdToDelete = $_POST["delete_user"];
    deleteUser($conn, $userIdToDelete);
}

// Fetch and display user information
$sql = "SELECT id, emri, mbiemri FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List Page</title>
    <link rel="stylesheet" href="userlist.css">
</head>
<body>

<div class="userdashboard">
    <div class="teksti">
        <h2>User List</h2>
    </div>

    <ul class="user-list">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <li class="user-list-item">
                <?php echo "ID: {$row['id']}, Name: {$row['emri']} {$row['mbiemri']}"; ?>
                <form method="post">
                    <input type="hidden" name="delete_user" value="<?php echo $row['id']; ?>">
                    <button type="submit"><b>DELETE</b></button>
                </form>
            </li>
        <?php endwhile; ?>
    </ul>

    <!-- Go Back button -->
    <button class="go-back-button" onclick="goBack()"><b>GO BACK</b></button>

</div>

<script>
    // JavaScript function to go back to the admin dashboard
    function goBack() {
        // Set the location to the admin dashboard page
        window.location.href = 'Admin-dashboard.php'; // Change the URL to your admin dashboard page
    }
</script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
