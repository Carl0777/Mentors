<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) 
{
    $query = "SELECT * FROM users WHERE username = :username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username", $username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}

function get_email(object $pdo, int $userId) 
{// Prepare the SQL query to retrieve the email
    $query = "SELECT email FROM users WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    
    // Execute the query
    $stmt->execute();
    
    // Fetch the result and return the email
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result['email'] : null;
}

function set_user(object $pdo, int $userId, string $username, string $email) 
{// Prepare the SQL query to update username and email
    $query = "UPDATE users SET username = :username, email = :email WHERE id = :id";
    $stmt = $pdo->prepare($query);
    
    // Bind parameters to the query
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
    // Execute the query and return whether it was successful
    return $stmt->execute();
}
