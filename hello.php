<?php

$halo = 'hello world';

echo($hello);
$no = 0;

?>

<html>
    <table>
        <tr>
            <th>No</th>
            <th>Teks</th>
        </tr>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $hello ?></td>
        </tr>
    </table>
</html>