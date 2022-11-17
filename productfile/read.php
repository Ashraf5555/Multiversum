<?php
include '../functions/functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;
// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY Id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
$num_contacts = $pdo->query('SELECT COUNT(*) FROM products')->fetchColumn();
?>

<?=template_header('Read')?>

<div class="content read">
	<h2>Read products</h2>
	<a href="create.php" class="create-contact">Create Contact</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>poductId</td>
                <td>productName</td>
                <td>productPrice</td>
                <td>EAN</td>
                <td>kleur</td>
                <td>Merk</td>
                <td>Verbinding</td>
                <td>Aansluitingen</td>
                <td>Refreshrate</td>
                <td>Gezichtsveld</td>
                <td>Resolutie</td>
                <td>created</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['productName']?></td>
                <td><?=$contact['productPrice']?></td>
                <td><?=$contact['EAN']?></td>
                <td><?=$contact['kleur']?></td>
                <td><?=$contact['Merk']?></td>
                <td><?=$contact['Verbinding']?></td>
                <td><?=$contact['Aansluitingen']?></td>
                <td><?=$contact['Refreshrate']?></td>
                <td><?=$contact['Gezichtsveld']?></td>
                <td><?=$contact['Resolutie']?></td>
                <td><?=$contact['created']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>