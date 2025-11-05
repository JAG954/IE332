<?php
if(isset($_POST['submit-btn'])){
    echo "<div> What's in POST? <br>";
    print_r($_POST);
    echo "</div>";
}
?>