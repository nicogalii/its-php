<table>
    <tr>
        <th>titolo</th>
        <th>Cantante</th>
    </tr>
    <?php foreach ($canzoni as $canzone) : ?>
        <tr>
            <td><?= $canzone->titolo ?></td>
            <td><?= $canzone->cantante ?></td>
        </tr>
    <?php endforeach; ?>

</table>