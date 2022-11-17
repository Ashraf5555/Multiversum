<?php
include '../functions/functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $firstname = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $lastname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    $updatedat = isset($_POST['updated_at']) ? $_POST['updated_at'] : date('Y-m-d H:i:s');
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $pas=md5($password);
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO user VALUES (?, ?, ?, ?, ?,?,?,?)');
    $stmt->execute([$id, $firstname, $lastname, $email, $status,$created,$updatedat,$pas]);
    // Output message
    $msg = 'Created Successfully!';
}
?>

<?=template_header('Create')?>


<div class="content update">
	<h2>Create user</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">first_name</label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="first_name" placeholder="John Doe" id="name">
        <label for="email">lastname</label>
        <label for="email">Email</label>
        <input type="text" name="last_name" placeholder="last_name" id="email">
        <input type="email" name="email" placeholder="johndoe@example.com" id="email">
        <label for=" subject">status</label>
        <label for="created">Created</label>
        <input type="text" name="status" placeholder="Employee" value="1" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <label for="created">updated_at</label>
        <label for="created">password</label>
        <input type="datetime-local" name="updated_at" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="password" name="password" placeholder="password" id="email">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>