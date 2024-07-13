<?php
    //Query to search for a girlfriend. You are welcome.

    $query = "SELECT * FROM GIRLS
                WHERE age BETWEEN 18 and 26
                and boyfriend = false
                and is_cute = true
                and can_cook = true
                and is_crazy = false
                and bum_bum = true
            ";
    if($query)
    {
        echo "Finally, I don find my jollof rice";
    }
    else
    {
        echo "Kai, another talking stage don cast";
    }

    //byeee!

?>