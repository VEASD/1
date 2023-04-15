<?php
require_once 'includes/functions.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch ads from the database
$ads = fetch_ads();

require_once 'templates/header.php';
?>

<main>
    <div class="container">
        <h1>Ads</h1>
        <table class="ads-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ads as $ad): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ad['title']); ?></td>
                        <td><?php echo htmlspecialchars($ad['description']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php require_once 'templates/footer.php'; ?>
