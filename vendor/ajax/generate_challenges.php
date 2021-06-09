<?php

session_start();
if (!isset($_SESSION["score"])) {
    $_SESSION["score"] = 0;
}
// Include autoload file
require_once "../autoload.php";
// Count challenges from database
$count_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM challenges"));
if ($count_data > 0) {
    $random_value = rand(1, $count_data);
    
    // Showing challenges
    $sql = "SELECT * FROM challenges WHERE id='$random_value'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        foreach ($result as $row) {
        
?>

<div class="points">
    <div class="num" id="total_score"><?php echo $_SESSION["score"]; ?></div>
    <div class="txt">Points</div>
</div>
<h1 class="title">Which programming language is this?</h1>
<div class="code">
    <pre><?php echo $row["code"]; ?></pre>
</div>
<div class="options" id="select_programming_languages">
    <?php get_random_programming_languages("button", "5", "class='programming_lang' data-id='{$row["id"]}'"); ?>
    <button id="i_dont_know">I don't know.</button>
</div>

<?php

        }
    }
} else {
    echo "No challenges are available.";
    die();
}

?>