<h2>Monitoring du blog</h2>

<table class="monitor-table">

    <thead>
        <tr>
            <th>
                <a href="index.php?action=showMonitoring&sort=title&dir=ASC">Titre ▲</a>
                <a href="index.php?action=showMonitoring&sort=title&dir=DESC">▼</a>
            </th>

            <th>
                <a href="index.php?action=showMonitoring&sort=views&dir=ASC">Vues ▲</a>
                <a href="index.php?action=showMonitoring&sort=views&dir=DESC">▼</a>
            </th>

            <th>
                <a href="index.php?action=showMonitoring&sort=nb_comments&dir=ASC">Commentaires ▲</a>
                <a href="index.php?action=showMonitoring&sort=nb_comments&dir=DESC">▼</a>
            </th>

            <th>
                <a href="index.php?action=showMonitoring&sort=date_creation&dir=ASC">Date ▲</a>
                <a href="index.php?action=showMonitoring&sort=date_creation&dir=DESC">▼</a>
            </th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($articles as $art): ?>
        <tr>
            <td><?= htmlspecialchars($art['title']) ?></td>
            <td><?= $art['views'] ?></td>
            <td><?= $art['nb_comments'] ?></td>
            <td><?= $art['date_creation'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>

</table>

<style>
.monitor-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
.monitor-table th, .monitor-table td {
    border: 1px solid #ccc;
    padding: 10px;
}
.monitor-table tr:nth-child(even) {
    background: #f2f2f2;
}
</style>
