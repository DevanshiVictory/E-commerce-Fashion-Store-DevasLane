<?php   
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $type = $_POST['feedback_type'];
    $review = $_POST['user_review'];

    $stmt = $conn->prepare("INSERT INTO feedback_table 
        (user_name, user_email, feedback_type, user_review) 
        VALUES (?, ?, ?, ?)");

    $stmt->bind_param("ssss", $name, $email, $type, $review);

    if ($stmt->execute()) {
        echo "<h3 style='color:light brown;'>Feedback submitted successfully!</h3>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>


    

    
