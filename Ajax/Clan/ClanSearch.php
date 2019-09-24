<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Value = Security::Post('Value');
        if(empty($Value) || $Value == "") return false;

        $Get = Database::Connection()->prepare("SELECT * FROM server_clan WHERE name LIKE ? OR tag LIKE ?");  
        $Get->execute(array("%$Value%", "%$Value%"));
        $Clans = $Get->fetchAll();

        if(count($Clans) == 0) return print_r('<script>clear();</script>');
    ?>
    <script>hide();</script>
    <div class="clan-list">
    <table class="table table-dark">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th><?php echo Lang::Get('ClanNameTag'); ?></th>
                <th><?php echo Lang::Get('Members'); ?></th>
                <th><?php echo Lang::Get('Value'); ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($Clans as $Row){ ?>
            <tr>
                <th><?php echo $Row['rank']; ?></th>
                <td><a href="<?php echo Main; ?>ClanDetails/<?php echo $Row['randomID']; ?>"><?php echo $Row['name']; ?> [<?php echo $Row['tag']; ?>]</a></td>
                <td><?php echo Clan::GetMemberCount($Row['clanID']); ?></td>
                <td><?php echo number_format($Row['rankPoints']); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>

    <?php

}else Functions::router('Home');

?>