
<h3 style='padding:20px; '> ВЫБЕРИТЕ ЗАПИCЬ: </h3>
<?php
$db = require 'db.php';
$connect = mysqli_connect($db['host'], $db['username'], $db['password'], $db['database']);
if (mysqli_connect_errno()) print_r(mysqli_connect_error());

$selected_record_id = isset($_GET['id']) ? $_GET['id'] : null;

$sql_select_all = "SELECT `id`, `firstname`, `name`,`lastname`,`phone`,`email` FROM `friends` ORDER BY  `firstname`,`name`,`lastname`";
$res = mysqli_query($connect, $sql_select_all);

echo "<div class='container mt-3'>";
while ($arr = mysqli_fetch_assoc($res)) {
    $selected_class = $selected_record_id == $arr['id'] ? 'selected' : '';
    echo '<a href="?p=update&id=' . $arr['id'] . '" class="' . $selected_class . '">' . $arr['firstname'] . ' ' . $arr['name'] . ' ' . $arr['lastname'].  '</a><br>';
}
echo "</div>";

if ($selected_record_id !== null) {
    if (isset($_POST['edit_submit'])) {
        $id = $selected_record_id; 
        $new_firstname = $_POST['edit_firstname'];
        $new_name = $_POST['edit_name'];
        $new_lastname = $_POST['edit_lastname'];
        $new_phone = $_POST['edit_phone'];
        $new_email = $_POST['edit_email'];

        $update_query = "UPDATE `friends` SET `firstname`='$new_firstname',`name`='$new_name', `lastname`='$new_lastname' , `phone`='$new_phone' , `email`='$new_email' WHERE `id`='$id'";
        $result = mysqli_query($connect, $update_query);
        if ($result) {
            echo "<h3 style='padding:20px; '> ЗАПИСЬ ИЗМЕНЕНА </h3>";
        } else {
            echo "<h3 style='padding:20px; '> ОШИБКА В ИЗМЕНЕНИИ </h3>" . mysqli_error($connect);
        }
    }

    // Получение выбранной записи для отображения в форме
    $query = "SELECT * FROM friends WHERE id = $selected_record_id";
    $result = mysqli_query($connect, $query);
    $record = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    echo "<form action='' method='post' class='container mt-3'>";
    echo "<input type='hidden' name='edit_id' value='{$record['id']}'>";
    echo "<div class='form-group'>";
    echo "<label for='edit_firstname'>First Name:</label>";
    echo "<input type='text' name='edit_firstname' id='edit_firstname' value='{$record['firstname']}'><br>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='edit_name'>Name:</label>";
    echo "<input type='text' name='edit_name' id='edit_name' value='{$record['name']}'  style='margin-left:35px'><br>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='edit_lastname'>Last Name:</label>";
    echo "<input type='text' name='edit_lastname' id='edit_lastname' value='{$record['lastname']}'><br>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='edit_phone'>Phone:</label>";
    echo "<input type='tel' name='edit_phone' id='edit_phone' maxlenght='15' minlenght='11' value='{$record['phone']}' style='margin-left:30px'><br>";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<label for='edit_email'>Email:</label>";
    echo "<input type='email' name='edit_email' id='edit_email' value='{$record['email']}' style='margin-left:35px'><br>";
    echo "</div>";
    echo "<button type='submit' name='edit_submit' class='btn btn-primary mb-3'>Update</button>";
    echo "</form>";
    
}
?>
