
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('SERVER_URL'); ?>Assets/Css/Hangar.min.css" />

    <div class="spacer-40"></div>

    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="card-read">
                <?php
                  $db = Database::Connection();
                  $equipment = $db->query("SELECT * FROM player_equipment WHERE userId = {$Player->Data['userID']}")->fetch();
                  $equipmentShips = json_decode($equipment['items'])->ships;

                  array_push($equipmentShips, 8);
                  array_push($equipmentShips, 10);

                  sort($equipmentShips);

                  foreach ($equipmentShips as $shipId) {
                    $ship = $db->query("SELECT * FROM server_ships WHERE shipID = '$shipId'")->fetch();
                    echo '<div class="shipBox text-center p-4 mb-2 '.($db->query('SELECT baseShipId FROM server_ships WHERE shipID = '.$Player->Data['shipID'].'')->fetch()['baseShipId'] == $ship['shipID'] ? 'selectedBaseShip' : '').'" data-id="'.$ship['shipID'].'"><img src="'.Config::Get('IMG').'Shop/Ship/'.mb_strtolower(in_array($ship['shipID'], [49,69,70]) ? $ship['name'] . '-' . $Player->Data['factionID'] : $ship['name']).'_top.png" alt="'.$ship['name'].'"></div>';
                  }
                ?>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>

    <script>
    var currentShipBaseId = <?php echo $db->query('SELECT baseShipId FROM server_ships WHERE shipID = '.$Player->Data['shipID'].'')->fetch()['baseShipId']; ?>;

        $(".shipBox").click(function(){
          var shipBox = $(this);
          var shipId = shipBox.data('id');

          if (currentShipBaseId != shipId) {
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Hangar.php',
                data: {"ShipId": shipId},
                success: function(resultData){
                  if (!resultData.error)
                  {
                    currentShipBaseId = shipId;
                    $('.selectedBaseShip').removeClass('selectedBaseShip');
                    shipBox.addClass('selectedBaseShip');
                  }

                  swal(resultData.error ? '<?php echo Lang::Get('Error'); ?>!' : '<?php echo Lang::Get('Successful'); ?>', resultData.msg, resultData.error ? 'error' : 'success');
                }
            });
          }
        });
    </script>
