<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        if(empty($Param1) || $Param1 == "") return false;

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $Get = Database::Connection()->prepare("SELECT * FROM server_clan WHERE name LIKE ? OR tag LIKE ?");  
        $Get->execute(array("%$Param1%", "%$Param1%"));
        $Clans = $Get->fetchAll();
    ?>

    <?php foreach($Clans as $Row){ ?>
<?php if($Row['clanID'] != $Player->Data['clanID']){ ?>
    <table class="full-width mb-2 clan-diplomacy">
            <tr>
                <td class="col-md-9 clan-diplomacy-search1 rb-text">[<?php echo $Row['tag']; ?>] <?php echo $Row['name']; ?></td>
                <td class="col-md-3 clan-diplomacy-search2 rb-text"><a href="javascript:;" onclick="showDiplomacyBox('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($Row['clanID'])))); ?>');"><?php echo Lang::Get('Diplomacy'); ?></a></td>
            </tr>
            <tr class="diplomacyBox_<?php echo base64_encode(base64_encode(base64_encode(base64_encode($Row['clanID'])))); ?>" style="display:none;">
                <td class="col-md-9 clan-diplomacy-search1 rb-text">
                    <select class="clanDiplomacySelect" id="clanDiplomacySelect_<?php echo base64_encode(base64_encode(base64_encode(base64_encode($Row['clanID'])))); ?>">
                        <option value="<?php echo base64_encode(base64_encode(base64_encode(base64_encode(1)))); ?>" selected><?php echo Lang::Get('Alliance'); ?></option>
                        <option value="<?php echo base64_encode(base64_encode(base64_encode(base64_encode(2)))); ?>"><?php echo Lang::Get('Nap'); ?></option>
                        <option value="<?php echo base64_encode(base64_encode(base64_encode(base64_encode(3)))); ?>"><?php echo Lang::Get('War'); ?></option>
                    </select>
                </td>
                <td class="col-md-3 clan-diplomacy-search2 rb-text">
                    <button class="btn rb-button full-width" onclick="sendDiplomacy('<?php echo base64_encode(base64_encode(base64_encode(base64_encode($Row['clanID'])))); ?>');"><?php echo Lang::Get('Send'); ?></button>
                </td>
            </tr>
    </table>

    <?php }} ?>

    <?php

}else Functions::router('Home');

?>