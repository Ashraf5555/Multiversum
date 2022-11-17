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
    $FullName = isset($_POST['FullName']) ? $_POST['FullName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO contact VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $FullName, $email, $subject, $created]);
    // Output message
    $msg = 'Created Successfully!';
}
?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="name">productName </label>
        <input type="text" name="id" placeholder="26" value="auto" id="id">
        <input type="text" name="productName" placeholder="productName" id="name">
        <label for="id">productPrice</label>
        <label for="name"> EAN  </label>
        <input type="text" name="productPrice" placeholder="productPrice"  id="id">
        <input type="text" name="EAN" placeholder="EAN" id="name">
        <label for="id">kleur </label>
        <label for="name">Merk </label>
        <input type="text" name="kleur" placeholder="kleur"  id="id">
        <input type="text" name="Merk" placeholder="Merk" id="name">
        <label for="id">Verbinding </label>
        <label for="name">Aansluitingen </label>
        <input type="text" name="Verbinding" placeholder="Verbinding"  id="id">
        <input type="text" name="Aansluitingen" placeholder="Aansluitingen" id="name">
        <label for="id">Refreshrate </label>
        <label for="name">Gezichtsveld </label>
        <input type="text" name="Refreshrate" placeholder="Refreshrate"  id="id">
        <input type="text" name="Gezichtsveld" placeholder="Gezichtsveld" id="name">
        <label for="id">Resolutie </label>
        <label for="name">newproduct </label>
        <input type="text" name="Resolutie " placeholder="Resolutie"  id="id">
        <input type="text" name="newproduct" placeholder="newproduct" id="name">
        <label for="id">sales </label>
        <label for="name">img </label>
        <input type="text" name="sales" placeholder="sales"  id="id">
        <input type="text" name="img" placeholder="img/source" id="name">
        <label for=" subject">desc </label>
        <label for="created">Created</label>
        <input type="textarea" name="desc" placeholder="desc" id="title">
        <input type="datetime-local" name="created" value="<?=date('Y-m-d\TH:i')?>" id="created">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>