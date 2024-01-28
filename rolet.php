<?php

function getUserRole($conn, $userId, $userName) {
    
    $adminNames = ["ym64822@ubt-uni.net", "fk67828@ubt-uni.net"]; 

    if (in_array($userName, $adminNames)) {
        return "admin";
    }
    // If not admin, fetch the role from the database
    $roleSql = "SELECT roli FROM users WHERE id = ?";
    
    if ($roleStmt = $conn->prepare($roleSql)) {
        $roleStmt->bind_param("i", $userId);
        
        if ($roleStmt->execute()) {
            $roleStmt->bind_result($userRole);
            
            if ($roleStmt->fetch()) {
                return $userRole;
            }
        }
        
        $roleStmt->close();
    }

    return "user"; // Default role if not found
}

function updateUserRole($conn, $userId, $newRole) {
    $updateRoleSql = "UPDATE users SET roli = ? WHERE id = ?";
    
    if ($updateRoleStmt = $conn->prepare($updateRoleSql)) {
        $updateRoleStmt->bind_param("si", $newRole, $userId);
        $updateRoleStmt->execute();
        $updateRoleStmt->close();
    }
}
?>


?>