<?php   
include "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $type = $_POST['feedback_type'];
        $review = $_POST['review'];
        try{
        $query = "INSERT INTO feedback (username, email, feedback_type, review) VALUES ('$name', '$email', '$type', '$review')";
        $stmt = $conn->prepare($query);
        $stmt->execute(
            [
                ':username' => $name,
                ':email' => $email,
                ':feedback_type' => $type,
                ':review' => $review
            ]);
        echo "<h1>Feedback submitted successfully!</h1>";
        }
        catch(PDOException $e){
            echo "Error: " . $e->getMessage(); 
        }
    
            
    }
    ?>