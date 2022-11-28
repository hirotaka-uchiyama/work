<?php
function h($str){
    return htmlspecialchars($str , ENT_QUOTES , "UTF-8");}
$message = filter_input(INPUT_POST, 'message');
?>
<main>
    <form action="index.php" method="post">
        <input type="text" name="message" >
        <button>送信</button>
    </form>
    <div>
        <?php echo h($message) ?>
    </div>
</main>