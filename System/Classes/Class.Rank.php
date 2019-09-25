<?php

    class Rank
    {
        public static function getPlayerRank($Limit){
            $GetRank = Database::Connection()->prepare("SELECT * FROM player_accounts WHERE rankID not in ('0','21','22','99') ORDER BY rankPoints DESC LIMIT $Limit");
            if ($GetRank->execute()) return $GetRank->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function getClanRank($Limit){
            $GetRank = Database::Connection()->prepare("SELECT * FROM server_clan ORDER BY rankPoints DESC LIMIT $Limit");
            if ($GetRank->execute()) return $GetRank->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function getOtherRank($Rank, $Faction){
            if($Rank >= 20) $Rank = 19;
            
            $GetRank = Database::Connection()->query("SELECT * FROM player_accounts WHERE factionID = $Faction and rankID = $Rank ORDER BY rankPoints DESC LIMIT 1", PDO::FETCH_OBJ);
            if($GetRank->rowCount()){
              foreach($GetRank as $row){ return $row->rankPoints; }
            }
        }

        public static function GetHallOfFameRanking($userID, $rankBy, $limit)
        {
          $db = Database::Connection();
          $ranking = [];
          $htmlString = '';

          foreach ($db->query('SELECT * FROM player_accounts WHERE rankID != 21')->fetchAll() as $value)
            $ranking[] = array('userID' => $value['userID'], 'data' => ($rankBy != 'user' ? json_decode($value['Data'])->$rankBy : $value['rankPoints']));

          usort($ranking, Functions::SortBy('data'));
          $ranking = array_slice($ranking, 0, $limit);

          foreach ($ranking as $key => $value) {
            $user = $db->query('SELECT * FROM player_accounts WHERE userID = '.$value['userID'].'')->fetch();
            $htmlString .= '<tr '.($userID == $user['userID'] ? 'class="halloffame_myrank"' : '').'>
              <td class="p-10">'.($key+1).'.</td>
              <td class="p-10" title="'.$user['shipName'].'" style="cursor:pointer">
              <a href="'.Config::Get('SERVER_URL').'Profile/'.$user['profileID'].'" target="_blank">'.$user['shipName'].'</a>
              </td>
              <td class="p-10"><img src="'.Config::Get('SERVER_URL').'do_img/global/companies/company_'.(($user['factionID'] != 0) ? $user['factionID'] : 1).'.png"></td>
              <td class="p-10"><img src="'.Config::Get('SERVER_URL').'do_img/global/ranks/rank_'.$user['rankID'].'.png"></td>
              <td class="p-10">'.number_format($value['data']).'</td>
            </tr>';
          }
          echo $htmlString;
        }
    }

?>