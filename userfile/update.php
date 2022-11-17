<?php
include '../functions/functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $firstname = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $lastname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        $updatedat = isset($_POST['updated_at']) ? $_POST['updated_at'] : date('Y-m-d H:i:s');
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $pas=md5($password);
        // Update the record
        $stmt = $pdo->prepare('UPDATE user SET id = ?, first_name = ?, last_name = ?, email = ?, status = ?, created = ?, updated_at = ? , password = ? WHERE id = ?');
        $stmt->execute([$id, $firstname, $lastname, $email, $status, $created,$updatedat,$password, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM user WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>
<?=template_header('Create')?>


<div class="content update">
	<h2>Create user</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">first_name</label>
        <input type="text" name="id" placeholder="26" value="<?=$contact['id']?>" id="id">
        <input type="text" name="first_name" placeholder="John Doe" value="<?=$contact['first_name']?>" id="name">
        <label for="email">lastname</label>
        <label for="email">Email</label>
        <input type="text" name="last_name" placeholder="last_name" value="<?=$contact['last_name']?>" id="email">
        <input type="email" name="email" placeholder="johndoe@example.com" value="<?=$contact['email']?>" id="email">
        <label for=" subject">status</label>
        <label for="created">Created</label>
        <input type="text" name="status" placeholder="Employee" value="1" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <label for="created">updated_at</label>
        <label for="created">password</label>
        <input type="datetime-local" name="updated_at" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="password" name="password" placeholder="password" value="<?=$contact['password']?>"  id="email">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>