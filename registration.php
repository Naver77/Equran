$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['username'], $password);
$stmt->execute();