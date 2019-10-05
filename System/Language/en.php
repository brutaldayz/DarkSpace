<?php

    class Lang
    {
        public static function Get($Data){
            $Lang = array(
                "Error" => "Error",
                "Successful" => "Successful",
                "Empty" => "Please fill in!",
                "UserNotFound" => "The username you’ve entered doesn’t match any account.",
                "Banned" => "Sorry, your account is banned! Reason: ",
                "PasswordError" => "Error! Passwords do not match.",
                "Checkbox" => "Please confirm that you have accepted our Terms & Conditions and our Data Privacy Policy. Afterwards, you may continue with your registration.",
                "NotCorrectMail" => "Your e-mail address doesn't seem to be correct. Please enter a valid e-mail address.",
                "VerificationFailed" => "Verification failed.",
                "PregUsername" => "You can't use special characters in your username, dont forgot: You will use this username always when you want to login. (Also you will able to change in-game name in your pilot profile page.)",
                "LongUsername" => "This Username is too long. Please maximum 20 characters.",
                "LongPassword" => "This Password is too long. Please maximum 40 characters.",
                "LongEmail" => "This Email is too long. Please maximum 255 characters.",
                "LongClanName" => "This Clan Name is too long. Please maximum 50 characters.",
                "LongClanTag" => "This Clan Tag is too long. Please maximum 4 characters.",
                "LongClanDescription" => "This Clan Description is too long. Please maximum 200 characters.",
                "ShortUsername" => "This Username is too short. Please minimum 4 characters.",
                "ShortPassword" => "This Password is too short. Please minimum 4 characters.",
                "ShortEmail" => "This Email is too short. Please minimum 4 characters.",
                "ShortClanName" => "This Clan Name is too short. Please minimum 1 characters.",
                "ShortClanTag" => "This Clan Tag is too short. Please minimum 1 characters.",
                "ShortClanDescription" => "This Clan Description is too short. Please minimum 1 characters.",
                "AlreadyExist" => "already exist!",
                "DontHaveClan" => "Free Agent",
                "ClanEditInfoSocket" => "You must be at a location with a hangar facility to change a data clan!",
                "ClanInfoUpdated" => "The data was changed.",
                "RequestNotFound" => "No such request was found.",
                "AcceptApp" => "This user was accepted: ",
                "Decline" => "This user was declined: ",
                "ClanDeleteSocket" => "You must be at a location with a hangar facility to delete a clan!",
                "ClanLeaveSocket" => "You must be at a location with a hangar facility to leave from clan!",
                "KickedPlayer" => "Member deleted.",
                "ChangeFirm1" => "You're already a member of this company.",
                "ChangeFirmOk" => "Company successfully changed.",
                "Uridium" => "You don't have enough Uridium for that.",
                "ChangeFirmHangar" => "Change of company is not possible. You must be at a location with a hangar facility!",
                "DiplomacyAlreadyHave" => "Such an application for diplomacy already exists.",
                "StartWar" => "War was announced successfully.",
                "DiplomacySuccess" => "Your diplomacy request was sent.",
                "Alliance" => "Alliance",
                "Nap" => "NAP",
                "War" => "War",
                "DiplomacyEnded" => "Diplomacy has been successfully terminated.",
                "DiplomacyDecline" => "The diplomacy application was successfully rejected.",
                "WarEnded" => "The war ended.",
                "DiplomacyAccepted" => "Diplomacy application was accepted.",
                "DiplomacyCancel" => "Diplomacy application has been canceled.",
                "CreatedClan" => "Created clan.",
                "UsernameChanged" => "Username successfully changed.",
                "UsernameSocket" => "You must be at a location with a hangar facility to change a username!",
                "UsernameDanger" => "When logging in, you will use the username you specified during registration. (That means right now you are editing your in-game name)",
                "PasswordChanged" => "Password successfully changed.",
                "NavHome" => "Home",
                "NavPlay" => "Play",
                "NavHangar" => "Hangar",
                "NavEquipment" => "Equipment",
                "NavShop" => "Shop",
                "NavEvoucher" => "Vouchers",
                "NavPayment" => "Payment",
                "NavClan" => "Clan",
                "NavJoin" => "Join",
                "NavFound" => "Found",
                "NavMembers" => "Members",
                "NavDiplomacy" => "Diplomacy",
                "NavCompany" => "Company",
                "NavAccount" => "Account",
                "NavProfile" => "Profile",
                "NavSettings" => "Settings",
                "NavLogout" => "Logout",
                "Exp" => "Exp",
                "Honor" => "Honor",
                "Rank" => "Rank",
                "Level" => "Level",
                "News" => "News",
                "Events" => "Events",
                "Announcements" => "Announcements",
                "Players" => "Pilots",
                "Clans" => "Clans",
                "Username" => "Username",
                "Password" => "Password",
                "Company" => "Company",
                "Value" => "Value",
                "NameTag" => "Name [Tag]",
                "Close" => "Close",
                "Change" => "Change",
                "PilotProfile" => "Pilot Profile",
                "ClanNameTag" => "Clan Name [Tag]",
                "ClanLeader" => "Clan Leader",
                "ClanMembers" => "Clan Members",
                "ClanRank" => "Clan Rank",
                "Edit" => "Edit",
                "EditClan" => "Edit Clan",
                "EditInformation" => "Edit Information",
                "AddNews" => "Add News",
                "ClanName" => "Clan Name",
                "ClanTag" => "Clan Tag",
                "ClanDescription" => "Clan Description",
                "ClanCompany" => "Clan Company",
                "Add" => "Add",
                "ClanDiplomacy" => "Clan Diplomacy",
                "Delete" => "Delete",
                "Requests" => "Requests",
                "Accept" => "Accept",
                "RequestDiplomacy" => "Request Diplomacy",
                "OpenApplications" => "Open Applications",
                "InGameName" => "In-Game Name",
                "Search" => "Search",
                "ClanSearch" => "Search clan...",
                "ClanFoundTitle" => "Founding a clan will cost you a total of 0 Credits. After founding your clan, you can upload a logo, raise taxes, manage members and much more under Clan Info in the management section.",
                "ClanFound1" => "To found a clan, please enter the following information.",
                "ClanFound2" => "Name: (min. 1 character, max: 50 characters)",
                "ClanFound3" => "Tag: (min. 1 character, max: 4 characters)",
                "ClanFound4" => "Description: (min. 1 character, max: 200 characters)",
                "ClanFound5" => "Confirm your entries with the \"Found\" button.",
                "FoundButton" => "Found",
                "EnterClanDesc" => "Enter clan description here.",
                "ClanList" => "Clan List",
                "Members" => "Members",
                "Joined" => "Joined",
                "Function" => "Function",
                "LeaveClan" => "Leave Clan",
                "DissmissClanMember" => "Dismiss Clan Member",
                "Position" => "Position",
                "DeleteClan" => "Delete Clan",
                "TransferLeadership" => "Transfer Leadership",
                "ClanDeleteMessage" => "Do you really want to delete this clan?",
                "PlayerKickMessage" => "Do you really want to kick member?",
                "TransferLMessage" => "Bu kişiye klanı devretmek istediğinden emin misin?",
                "Date" => "Date",
                "See" => "See",
                "Decline" => "Decline",
                "LeaveClanMessage" => "Are you sure you want to leave the clan?",
                "Leader" => "Leader",
                "CompanyCost" => "Changing your company costs 5,000 U. and 50% of your Honor Points.",
                "EnterCode" => "Enter Code",
                "UseCode" => "Use Code",
                "Language" => "Language",
                "Version" => "Version",
                "LanguageChanged" => "Language succesfully changed.",
                "Send" => "Send",
                "Diplomacy" => "Diplomacy",
                "ClanFoundSocket" => "You must be at a location with a hangar facility to create a clan!",
                "AppSuccess" => "Your application was sent to the clan leader.",
                "LeaderPerm" => "You can't do this because you're not a clan leader.",
                "Update" => "Update",
                "Announcement" => "Announcement",
                "New" => "New",
                "ReadMore" => "Read More",
                "PlayersJoined" => "players joined.",
                "TotalJoined" => "Total",
                "ShowJoinedP" => "Show Joined Players",
                "Day" => " Day",
                "Hour" => " Hour",
                "Minute" => " Minute",
                "Second" => " Second",
                "Tournament" => "Tournament",
                "FinalistPlayers" => "Finalist Players",
                "Winner" => "Winner",
                "Events" => "Events",
                "Tournaments" => "Tournaments",
                "BackToGame" => "Back To Game",
                "apis" => "You already have the Apis drone.",
                "zeus" => "You already have the Zeus drone.",
                "ANNENIZISIKEYIM" => "You can find the history of jackpot tournaments in Blog -> Tournaments section.",
                "BuyOk" => " purchased.",
                "BuyMessage" => "Do you really want to buy? ",
                "Price" => "Price",
                "BuyButton" => "Buy",
                "VersionChanged" => "The version has been updated successfully.",
                "Select" => "Select",
                "CompanySMessage" => "Are you sure you want to choose this company?",
                "HighestRank" => "You currently have the highest rank.",
                "ExperiencePoints" => "Experience Points",
                "HonorPoints" => "Honor Points",
                "YourLevel" => "Your Level",
                "DaySince" => "Days Since Registration",
                "ShipType" => "Your Ship Type",
                "Pilot" => "Pilot",
                "Ranking" => "Ranking",
                "Logbook" => "Logbook",
                "KillLog" => "Kill Log",
                "AccountLog" => "Account Log",
                "CodeNotFound" => "Code not found.",
                "MaxUsedCode" => "The code has reached its usage limit.",
                "AlreadyUsed" => "You've already used this code.",
                "UsedSuccess" => "Code successfully used.",
                "AvailableCodes" => "Available Codes",
                "Available" => "Available",
                "Code" => "Code",
                "Reward" => "Reward",
                "CodeStatu" => "Status",
                "VideoEventTitle" => "Award-winning contest!",
                "VideoEventHead" => "Hello! You can join the competition with the video you took on our server!",
                "VideoEventRating" => "Rating",
                "VideoEventReward" => "Reward",
                "VideoEventNote" => "Note",
                "VideoEventParticipate" => "How can I participate in the competition?",
                "VideoEventPAnswer" => "You can join the competition with the video you took on our server!",
                "VideoEventRAnser" => "The quality of the video will depend on its effects and montage.",
                "VideoEventReAnswer" => "Apis and Zeus.",
                "VideoEventNAnswer" => "Uridium will be charged if you have Apis or Zeus.",
                "VideoEventDetails" => "Details",
                "VideoEventLastDay" => "The competition will end on May 1st.",
                "VideoEventResultDAnswer" => "The results will be shared on the <a href='".Config::Get('SERVER_URL')."Blog'>Blog</a>.",
                "VideoEventMaxVideoCount" => "You can apply with a maximum of <span class='rb-text'>3</span> videos.",
                "VideoLastApp" => "Application deadline April <span class='rb-text'>29</span>",
                "VideoEventMaxApp" => "Unfortunately, you cannot participate more.",
                "VideoMyApplications" => "My Applications",
                "VideoApplicationID" => "Application Code",
                "VideoLinkFail" => "Please enter a valid address.",
        		"actionSellError" => "You can't sell your stuff!",
        		"actionSellShipError" => "You can't sell your ship!",
        		"actionSellDroneError" => "You can't sell your drones!",
        		"equippingError" => "Equipping isn't possible. You must be at a location with a hangar facility!",
        		"hangarError" => "Change of company is not possible. You must be at a location with a hangar facility!",
                "equippingWrongError" => "Something went wrong.",
                "hangarChangeSuccess" => "Ship successfully changed.",
                "LoginTitle" => "LOGIN",
                "LoginUsername" => "Username",
                "LoginPassword" => "Password",
                "LoginForgotPW" => "Forgot password?",
                "LoginRegisterText" => "Need an account? Register now!",
                "LoginEmail" => "Email",
                "LoginRegister" => "REGISTER",
                "LoginAlready" => "Already registered?",
                "HallOfFame" => "Hall of Fame",
                "ArentLog" => "There aren't logs to display.",
                "OldPassword" => "Old Password",
                "NewPassword" => "New Password",
                "RepeatPassword" => "Repeat Password",
                "ExpRank" => "Experience Ranking",
                "HonorRank" => "Honor Ranking",
                "UserRank" => "User Ranking",
                "ClanRank" => "Clan Ranking",
                "ClanDetailsHaveClan" => "You can't apply because you're already in a clan.",
                "ClanDetailsEnterApp" => "Enter your application text here.",
                "ClanDetailsPending" => "Your application to this Clan is pending.",
                "ClanDetailsDeleteApp" => "Delete Application",
                "CurrentLevel" => "Current Level",
                "NavSkillTree" => "Skill Tree",
                "Upgrade" => "Upgrade",
                "AgreementError" => "You must accept the conditions to continue!",
                "ResearchPoints" => "Research Points:",
                "LogDisk" => "LOG-DISKS:",
                "RequiredDisk" => "REQUIRED:",
                "Exchange" => "EXCHANGE",
                "Soon" => "Soon...",
                "NavDsc" => "Buy DSC",
                "Amount" => "Amount",
                "NeedVerify" => "You must verify your email address before you can log in to your account.",
                "VerifyEmail" => "An activation link has been sent to your email address to verify your account. Don't forget to check the spam folder.",
                "ErrorEmail" => "Failed to send email. Please try registering again.",
                "RegisterError" => "An error occurred during registration, please contact the administrators.",
                "WaitRegister" => "Your registration is being processed, please wait ...",
                "RegisterVerified" => "Your registration is complete. You can log in to your account.",
                "Maintenance" => "The server is currently under maintenance..."
            );

            return $Lang[$Data];
        }

        public static function Terms($Data){
            $SERVER_NAME = Config::Get('SERVER_NAME');

            $Lang = array(
                "Title" => "Agreement Web Site Terms and Conditions of Use",
                "SmallTitle" => "In order to proceed, you must agree with the following rules:",
                "1Title" => "1. Terms",
                "1Message" => "By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are not protected by applicable copyright and trade mark law. By surfing on this website, you agree that your the only one who would be punished for breaking copyright laws.By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are not protected by applicable copyright and trade mark law. By surfing on this website, you agree that your the only one who would be punished for breaking copyright laws.",
                "2Title" => "2. Use License",
                "2Message" => "Permission is granted to temporarily download one copy of the materials (information or software) on {$SERVER_NAME}'s web site for personal, non-commercial transitory viewing only.",
                "3Title" => "3. Disclaimer",
                "3Message" => "The materials on {$SERVER_NAME}'s web site are provided \"as is\". {$SERVER_NAME} makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, {$SERVER_NAME} does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Internet web site or otherwise relating to such materials or on any sites linked to this site.",
                "4Title" => "4. Limitations",
                "4Message" => "In no event shall {$SERVER_NAME} or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption,) arising out of the use or inability to use the materials on {$SERVER_NAME}'s Internet site, even if {$SERVER_NAME} or a {$SERVER_NAME} authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.",
                "5Title" => "5. Revisions and Errata",
                "5Message" => "The materials appearing on {$SERVER_NAME}'s web site could include technical, typographical, or photographic errors. {$SERVER_NAME} does not warrant that any of the materials on its web site are accurate, complete, or current. {$SERVER_NAME} may make changes to the materials contained on its web site at any time without notice. {$SERVER_NAME} does not, however, make any commitment to update the materials.",
                "6Title" => "6. Links",
                "6Message" => "{$SERVER_NAME} has not reviewed all of the sites linked to its Internet web site and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by {$SERVER_NAME} of the site. Use of any such linked web site is at the user's own risk.",
                "7Title" => "7. Site Terms of Use Modifications",
                "7Message" => "{$SERVER_NAME} may revise these terms of use for its web site at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.",
                "8Title" => "8. Governing Law",
                "8Message" => "Any claim relating to {$SERVER_NAME}'s web site shall be governed by the laws of the State of Spain without regard to its conflict of law provisions. <br> General Terms and Conditions applicable to Use of a Web Site." ,
                "9Title" => "9. Copyright Protection",
                "9MessageA" => "If you believe any materials accessible on or from the Site infringe your copyright, you may request removal 
                of those materials (or access thereto) from this web site by contacting us and providing the 
                following information:",
                "9MessageB" => "<li> Identification of the copyrighted work that you believe to be copied. Please describe the work,and where possible, include a copy or the location of an authorized version of the work.</li>
                <li> Your name, address, telephone number, and e-mail address.</li>
                <li> A statement that you have a good faith belief that the complained of use of the materials is not authorized by the copyright owner, its agent, or the law.</li>
                <li> A statement that the information that you have supplied is accurate, and indicating that \"under penalty of perjury,\" you are the copyright owner or are authorized to act on the copyright owner’s behalf.</li>
                <li> A signature or the electronic equivalent from the copyright holder or authorized representative.</li>",
                "10Title" => "10. Privacy Policy",
                "10MessageA" => "Your privacy is very important to us. Accordingly, we have developed this Policy in order for you to understand how we collect, use, communicate and disclose and make use of personal information. The following outlines our privacy policy.",
                "10MessageB" => "<li> Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
                <li> We will collect and use of personal information solely with the objective of fulfilling those purposes specified by us and for other compatible purposes, unless we obtain the consent of the individual concerned or as required by law.       </li>
                <li> We will only retain personal information as long as necessary for the fulfillment of those purposes. </li>
                <li> We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned. </li>
                <li> Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date. </li>
                <li> We will protect personal information by reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
                <li> We will make readily available to customers information about our policies and practices relating to the management of personal information. </li>",
                "10MessageC" => "We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained.",
                "Footer1" => "{$SERVER_NAME} is an independent project (Nonprofit goal) © 2019.",
                "Footer2" => "<a target=\"_blank\" href=\"http://darkorbit.com/\">DarkOrbit</a> is a registered trademark of <a target=\"_blank\" href=\"http://bigpoint.com/\">BigPoint GmbH</a>. All rights reserved to their respective owner(s).",
                "Footer3" => "We are not endorsed, affiliated or offered by <a target=\"_blank\" href=\"http://bigpoint.com/\">BigPoint GmbH</a>."
            );
            return $Lang[$Data];
        }

        public static function GetDailyRank(){
            global $Player;
            return "You are a <span class='text-info halloffame_rank'>".self::Rank($Player->Data['rankID'])." <img class='halloffame_rank' src='".Config::Get('SERVER_URL')."do_img/global/ranks/rank_".$Player->Data['rankID'].".png'></span>. Your rank is calculated as follows:";
        }

        public static function KillLog($Type, $name){ return ($Type == 1 ? "You have destroyed " : "You have been destroyed by ") . Functions::getShipName($name) . "."; }
        public static function getOtherRank($Point, $Rank){ return "You need approx. {$Point} rank points to reach the next rank of <img src='".Config::Get('SERVER_URL')."do_img/global/ranks/rank_{$Rank}.png'> <strong>".self::Rank($Rank)."</strong>."; }
        public static function getTerms(){ return "<span><a href='javascript:;' id='terms'>Terms & Conditions</a> read and accepted.</span>"; }
        public static function getRP($Data){ return "Research Points used: {$Data}/50."; }
        public static function convertPT($Data){ return ($Data == 1) ? 'Uridium' : 'Kredi'; }

        public static function shopLogMessages($Data, $PaymentType, $PaymentAmount, $Amount){
            $Lang = array(
                "1" => "The Apis drone was purchased.",
                "2" => "The Zeus drone was purchased.",
                "12" => "Pet was purchased.",
                "37" => "CD-B01 was purchased.",
                "38" => "CD-B02 was purchased.",
                "39" => "DMG-B01 was purchased.",
                "40" => "DMG-B02 was purchased.",
                "41" => "EP-B01 was purchased.",
                "42" => "EP-B02 was purchased.",
                "43" => "HON-B01 was purchased.",
                "44" => "HON-B02 was purchased.",
                "45" => "HP-B01 was purchased.",
                "46" => "HP-B02 was purchased.",
                "47" => "REP-B01 was purchased.",
                "48" => "REP-B02 was purchased.",
                "49" => "Aegis was purchased.",
                "50" => "REP-S01 was purchased.",
                "51" => "RES-B01 was purchased.",
                "52" => "RES-B02 was purchased.",
                "53" => "SHD-B01 was purchased.",
                "54" => "SHD-B02 was purchased.",
                "55" => "SREG-B01 was purchased.",
                "56" => "SREG-B02 was purchased.",
                "69" => "Citadel was purchased.",
                "70" => "Spearhead was purchased.",
                "81" => "Pusat was purchased.",
                "156" => "Surgeon was purchased.",
                "445" => "Champion was purchased.",
                "480" => "Cyborg was purchased.",
                "583" => "Log-Disk was purchased.",
                "584" => "Green Booty Key was purchased.",
                "585" => "The module Auto-looter has been purchased.",
                "586" => "The module Kamikaze has been purchased.",
                "587" => "The module Repair has been purchased.",
                "588" => "The module Combo Ship Repair has been purchased.",
                "589" => "Red Booty Key was purchased.",
                "590" => "Blue Booty Key was purchased."
            );
            return (($Amount > 1) ? "({$Amount}) " : '') . $Lang[$Data] . " (". number_format($PaymentAmount) . " " . self::convertPT($PaymentType) . ")";
        }

        public static function skillTreeLogMessages($Data){
            $Lang = array(
                "" => ""
            );
            return $Lang[$Data];
        }

        public static function accountLogMessages($Data){
            $Lang = array(
                "1" => "Logged in."
            );
            return $Lang[$Data];
        }

        public static function clanMessage($UserID, $Data){
            $Lang = array(
                "1" => '<span class="clan-description">' . Functions::getShipName($UserID) . ' </span> has joined the clan.',
                "2" =>'<span class="clan-description">' . Functions::getShipName($UserID) . ' </span> has been kicked from the clan.',
                "3" => '<span class="clan-description">' . Functions::getShipName($UserID) . ' </span> has been leaved from the clan.',
                "4" => 'New Leader: <span class="clan-description"> ' . Functions::getShipName($UserID) . ' </span>'
            );
            return $Lang[$Data];
        }

        public static function Shop($Data){
            $Lang = array(
                "Ship" => "Ships",
                "Drone" => "Drones",
                "Booster" => "Boosters",
                "Extra" => "Extras",
                "Design" => "Designs",
                "Description" => 'Description :'
            );
            return $Lang[$Data];
        }

        public static function shopItems($Data){
            $Lang = array(
                "Apis" => "Epic drone with two slots.",
                "Zeus" => "Epic drone with two slots.",
                "LogFile" => "Log-disks can be exchanged for Research Points.",
                "RedKey" => "Used to open red pirate booty and collect the valuable treasure contained within.",
                "BlueKey" => "Used to open blue pirate booty and collect the valuable treasure contained within.",
                "GreenKey" => "Used to open pirate booty and collect the valuable treasure contained within.",
                "Pet" => "The P.E.T. 10 is designed to accompany your ship and assist when it can. You can upgrade it with gear and AI protocols to enhance its effectiveness. It also collects experience and can level-up, becoming a powerful companion.",
                "cd-b01" => "20% quicker cooldown times for all ship skills for 10 h.",
                "cd-b02" => "30% quicker cooldown times for all ship skills for 10 h.",
                "dmg-b01" => "+10% damage for all damage inflicted for 10 h.",
                "dmg-b02" => "+10% damage for damage inflicted. 1% of bonus damage can be shared with friendly ships nearby for 10 h.",
                "ep-b01" => "Gives you a 10% EP bonus for 10 h.",
                "ep-b02" => "+10% EP; 5% of this EP bonus can be shared with friendly ships nearby for 10 h.",
                "hon-b01" => "+10% honor for 10 h.",
                "hon-b02" => "Grants a +10% bonus to earning Honor Points, and 5% of that bonus is applied to friendly ships nearby for 10 h.",
                "hp-b01" => "+10% ship HP for 10 h.",
                "hp-b02" => "Increases ship\'s maximum HP by 10% and allows you to share 1% of this bonus with friendly ships nearby for 10 h.",
                "rep-b01" => "+10% faster ship repairs for 10 h.",
                "rep-b02" => "+10% repair speed; increases ship repair speed. 1% of this bonus can be shared with friendly ships nearby for 10 h.",
                "rep-s01" => "",
                "res-b01" => "The resource booster increases the number of resources from collected NPC cargo boxes by 25% for 10 h.",
                "res-b02" => "The resource booster increases the number of resources from collected NPC cargo boxes by 25% and provides a 10 % of this bonus for friendly ships in the vicinity for 10 h.",
                "shd-b01" => "+25% shield power for 10 h.",
                "shd-b02" => "Increases ship\'s maximum shield power by 25% and allows you to share 2% of this bonus with friendly ships nearby for 10 h.",
                "sreg-b01" => "+25% shield regeneration speed for 10 h.",
                "sreg-b02" => "Increases the shield\'s regeneration speed by 25% and allows you to share 2% of this bonus with friendly ships nearby for 10 h.",
                "Lightning" => "Strike out of a clear blue sky - or the deep black cold of space - and give your enemies an electrifying reception in the Lightning! This ship has the following abilities: 5% extra damage, and the Afterburner ability, which will boost your ship\'s speed by 30% for 5 seconds!",
                "Pusat" => "Developed by the brilliant minds on Yeni\'turkiye Station, the Pusat Vengeance design features a rich arsenal of lasers and generators for delicious, hard-hitting firepower, at the expense of armour. Strike hard and fast when you\'re at its helm.",
                "Peacemaker" => "The Goliath Peacemaker was developed after the signing of the Crystal Truce in 2641. One of three ships, created by the three different factions to provide a new sense of unity between the companies. The ship gives a 5% bonus to Influence earned, and 7% extra damage against pilots from rival Factions!",
                "Sovereign" => "The Goliath Sovereign was developed after the signing of the Crystal Truce in 2641. One of three ships, created by the three different factions to provide a new sense of unity between the companies. The ship gives a 5% bonus to Influence earned, and 7% extra damage against pilots from rival Factions!",
                "Vanquisher" => "The Goliath Vanquisher was developed after the signing of the Crystal Truce in 2641. One of three ships, created by the three different factions to provide a new sense of unity between the companies. The ship gives a 5% bonus to Influence earned, and 7% extra damage against pilots from rival Factions!",
                "Kick" => "Show your love of the beautiful game - and of fast ships and exciting dogfights! - with the G-Kick. This ship has the following abilities: 10% extra shield power.",
                "Goal" => "There\'s the shot, and -- goooooal! If football is your life, this is the battlecruiser for you. Bring the excitement of the stadium to deep space! This ship has the following abilities: 10% bonus to experience.",
                "Referee" => "The Goliath Referee was developed to celebrate the human games of the past and future. Radiating authority and remaining impartial the ship also gives 5% extra damage.",
                "Crimson" => "Customize your Goliath with this refined design, and enjoy your hot new look!",
                "Centaur" => "Shield your fragile human body from the dangers of space - aliens, cold, vacuum, and enemy pilots, among others - with the Centaur, an extra layer of the finest protection the Goliath class can offer. This ship has the following abilities: 10% bonus to HP.",
                "Ignite" => "A rare gem matching the design of the ships, which fought and won the second Sibelon War of 2727. Relive past glories, fly the flag of humanity and ride into battle with this paragon of mankind!",
                "Surgeon" => "As precise and potentially deadly as a scalpel! Equip yourself with the very latest innovation to come out of our R&D department. This ship has the following abilities: 6% extra damage, 6% more honor point earned, %6 more XP earned, and an additional Generator Slot.",
                "Spearhead" => "An agile reconnaissance ship, ideal for the ruthless, cold-blooded lone wolf. Spearheads can penetrate unseen deep into enemy territory as scouts, disable enemy ships\' skills, or even mark them for her allies.",
                "Aegis" => "The Aegis tips the scales one way or the other in every battle she\'s flown in. This versatile engineering ship\'s support and repair abilities have often made the difference between defeat and victory - so make sure she\'s on your side!",
                "Citadel" => "A Citadel is often affectionately called a \'Clank Tank\' - or just The Tank - by her crew. She\'s a hulking Heavy Cruiser with two rocket launcher slots and various abilities that make her a mobile shield for her allies. Now this bulwark among spaceships can be yours!",
                "KK" => "When your P.E.T. or ship is close to being destroyed, the Kamikaze Detonator will start the self-destruct sequence and explode, thereby taking out all enemies in the immediate vicinity. <br><br> Effect: Causes 75,000 splash damage upon exploding. <br> Radius: 450",
                "AL" => "Once you activate this P.E.T gear, your P.E.T. will automatically collect bonus boxes and cargo boxes within close range. <br><br> Range: 2,500",
                "REP" => "The P.E.T. repairer will fix your P.E.T. by 12,000 per second. <br><br> Effect: Repairs 12,000 HP per second. <br> Duration: 30 seconds",
                "CSR" => "Repairs your ship during flight. Uses extra fuel for each repair. <br><br> Effect: Repairs 25,000 HP per second. <br> Duration: 5 Seconds <br> Consumption: 512 Uridium"
            );
            return $Lang[$Data];
        }

        public static function Rank($RankID){
            $getRank = array(
                "1" => "Basic Space Pilot",
                "2" => "Space Pilot",
                "3" => "Chief Space Pilot",
                "4" => "Basic Sergeant",
                "5" => "Sergeant",
                "6" => "Chief Sergeant",
                "7" => "Basic Lieutenant",
                "8" => "Lieutenant",
                "9" => "Chief Lieutenant",
                "10" => "Basic Captain",
                "11" => "Captain",
                "12" => "Chief Captain",
                "13" => "Basic Major",
                "14" => "Major",
                "15" => "Chief Major",
                "16" => "Basic Colonel",
                "17" => "Colonel",
                "18" => "Chief Colonel",
                "19" => "Basic General",
                "20" => "General",
                "21" => "Administrator",
                "22" => "Wanted"
            );
            return $getRank[$RankID];
        }

        public static function SkillName($SkillID){
            $Skill = array(
                '1' => 'Engineering',
                '2' => 'Detonation 1',
                '3' => 'Heat-seeking Missiles',
                '4' => 'Rocket Fusion',
                '5' => 'Luck 1',
                '6' => 'Cruelty 1',
                '7' => 'Detonation 2',
                '8' => 'Cruelty 2',
                '9' => 'Luck 2',
                '10' => 'Explosives'
            );
            return $Skill[$SkillID];
        }

        public static function SkillDescription($SkillID){
            $Skill = array(
                '1' => 'Level 1: Lets your repair bots repair 5% more HP per second. <br> Level 2: Lets your repair bots repair 10% more HP per second. <br> Level 3: Lets your repair bots repair 15% more HP per second. <br> Level 4: Lets your repair bots repair 20% more HP per second. <br> Level 5: Lets your repair bots repair 30% more HP per second.',
                '2' => 'Level 1: Makes your mines cause 7% more damage. <br> Level 2: Makes your mines cause 14% more damage.',
                '3' => 'Level 1: Increases hit probability of your rockets by 1%. <br> Level 2: Increases hit probability of your rockets by 2%. <br> Level 3: Increases hit probability of your rockets by 4%. <br> Level 4: Increases hit probability of your rockets by 6%. <br> Level 5: Increases hit probability of your rockets by 10%.',
                '4' => 'Level 1: Makes your rockets cause 2% more damage. <br> Level 2: Makes your rockets cause 5% more damage. <br> Level 3: Makes your rockets cause 6% more damage. <br> Level 4: Makes your rockets cause 8% more damage. <br> Level 5: Makes your rockets cause 15% more damage.',
                '5' => 'Level 1: Gives you 2% more bonus-box Uridium. <br> Level 2: Gives you 4% more bonus-box Uridium.',
                '6' => 'Level 1: Gives you 4% more Honor Points. <br> Level 2: Gives you 8% more Honor Points.',
                '7' => 'Level 1: Makes your mines cause 21% more damage. <br> Level 2: Makes your mines cause 28% more damage. <br> Level 3: Makes your mines cause 50% more damage.',
                '8' => 'Level 1: Gives you 12% more Honor Points. <br> Level 2: Gives you 18% more Honor Points. <br> Level 2: Gives you 25% more Honor Points.',
                '9' => 'Level 1: Gives you 6% more bonus-box Uridium. <br> Level 2: Gives you 8% more bonus-box Uridium. <br> Level 3: Gives you 12% more bonus-box Uridium.',
                '10' => 'Level 1: Increases the radius of mine explosions by 4%. <br> Level 2: Increases the radius of mine explosions by 8%. <br> Level 3: Increases the radius of mine explosions by 12%. <br> Level 4: Increases the radius of mine explosions by 18%. <br> Level 5: Increases the radius of mine explosions by 25%.'
            );
            return $Skill[$SkillID] . "<br><br>";
        }

        public static function Map($MapID){
            $getMap = array(
                '1' => '1-1',
                '2' => '1-2',
                '3' => '1-3',
                '4' => '1-4',
                '5' => '2-1',
                '6' => '2-2',
                '7' => '2-3',
                '8' => '2-4',
                '9' => '3-1',
                '10' => '3-2',
                '11' => '3-3',
                '12' => '3-4',
                '13' => '4-1',
                '14' => '4-2',
                '15' => '4-3',
                '16' => '4-4',
                '17' => '1-5',
                '18' => '1-6',
                '19' => '1-7',
                '20' => '1-8',
                '21' => '2-5',
                '22' => '2-6',
                '23' => '2-7',
                '24' => '2-8',
                '25' => '3-5',
                '26' => '3-6',
                '27' => '3-7',
                '28' => '3-8',
                '42' => '???',
                '71' => 'GG Zeta',
                '74' => 'GG Kappa',
                '101' => 'JP',
                '102' => 'JP',
                '103' => 'JP',
                '104' => 'JP',
                '105' => 'JP',
                '106' => 'JP',
                '107' => 'JP',
                '108' => 'JP',
                '109' => 'JP',
                '110' => 'JP',
                '111' => 'JP',
                '121' => 'TA',
                '200' => 'LoW',
                '224' => 'Custom Tournament'
            );
            return $getMap[$MapID];
        }
    }

?>
