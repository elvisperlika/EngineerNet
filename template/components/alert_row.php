<?php
    echo "<li>";
        echo "<a href='profile.php?user=".$alert["sender"]."'>".$alert["sender"]." </a>";
        echo "<span>";
        switch ($alert["type"]) {
            case 'LIKE_POST':
                echo "liked your post";
                break;
            case 'LIKE_COMMENT':
                echo "liked your comment";
                break;
            case 'COMMENT_POST':
                echo "commented on your post";
                break;
            case 'COMMENT_COMMENT':
                echo "replied to your comment";
                break;
            case 'FOLLOW':
                echo "followed you";
                break;
            default:
                echo "alert error: type not found";
                break;
        }
        echo "</span>";
        echo "<a class='elementBtn' href='#".$alert["idElement"]."'>Show</a>";
        echo "<a class='deleteBtn' href='#' data-alert=".$alert["username"].">Delete</a>";
    echo "</li>";
?>