<?php

    class Lang
    {
        public static function Get($Data){
            $Lang = array(
                "Error" => "Hata",
                "Successful" => "Başarılı",
                "Empty" => "Boş alan bırakma!",
                "UserNotFound" => "Girdiğin kullanıcı adı hiçbir hesapla eşleşmiyor.",
                "Banned" => "Üzgünüm, hesabın yasaklanmış! Sebep: ",
                "PasswordError" => "Hata, Şifreler eşleşmiyor!",
                "Checkbox" => "Lütfen Şartlar ve Koşullarımızı ve Veri Gizlilik Politikamızı kabul ettiğinizi onaylayın. Daha sonra kaydınıza devam edebilirsiniz.",
                "NotCorrectMail" => "E-posta adresin doğru görünmüyor. Lütfen geçerli bir e-posta adresi giriniz.",
                "VerificationFailed" => "Doğrulama başarısız.",
                "PregUsername" => "Kullanıcı adınızdaki özel karakterleri kullanamazsınız, unutma: Giriş yapmak istediğinizde her zaman bu kullanıcı adını kullanacaksınız. (Ayrıca oyun içi ismini pilot profil sayfanda değiştirebilirsin.)",
                "LongUsername" => "Kullanıcı adı çok uzun. Yeniden dene ve maksimum 20 karakterden oluşmasına dikkat et.",
                "LongPassword" => "Şifre çok uzun. Yeniden dene ve maksimum 40 karakterden oluşmasına dikkat et.",
                "LongEmail" => "Eposta çok uzun. Yeniden dene ve maksimum 255 karakterden oluşmasına dikkat et.",
                "LongClanName" => "Klan adı çok uzun. Yeniden dene ve maksimum 50 karakterden oluşmasına dikkat et.",
                "LongClanTag" => "Klan kısaltması çok uzun. Yeniden dene ve maksimum 4 karakterden oluşmasına dikkat et.",
                "LongClanDescription" => "Klan açıklaması çok uzun. Yeniden dene ve maksimum 200 karakterden oluşmasına dikkat et.",
                "ShortUsername" => "Kullanıcı adı çok kısa. Yeniden dene ve minimum 4 karakterden oluşmasına dikkat et.",
                "ShortPassword" => "Şifre çok kısa. Yeniden dene ve minimum 4 karakterden oluşmasına dikkat et.",
                "ShortEmail" => "Eposta çok kısa. Yeniden dene ve minimum 4 karakterden oluşmasına dikkat et.",
                "ShortClanName" => "Klan adı çok kısa. Yeniden dene ve minimum 1 karakterden oluşmasına dikkat et.",
                "ShortClanTag" => "Klan kısaltması çok kısa. Yeniden dene ve minimum 1 karakterden oluşmasına dikkat et.",
                "ShortClanDescription" => "Klan açıklaması çok kısa. Yeniden dene ve minimum 1 karakterden oluşmasına dikkat et.",
                "AlreadyExist" => "zaten mevcut!",
                "DontHaveClan" => "Serbest Ajan",
                "ClanEditInfoSocket" => "Klan verilerini değiştirmek için şirketinin hangar tesisi üzerinde olmalısın.",
                "ClanInfoUpdated" => "Veriler değiştirildi.",
                "RequestNotFound" => "Böyle bir istek bulunamadı.",
                "AcceptApp" => "Bu kullanıcı kabul edildi: ",
                "Decline" => "Bu kullanıcı reddedildi: ",
                "ClanDeleteSocket" => "Klan silmek için şirketinin hangar tesisi üzerinde olmalısın.",
                "ClanLeaveSocket" => "Klandan ayrılmak için şirketinin hangar tesisi üzerinde olmalısın.",
                "KickedPlayer" => "Üye silindi.",
                "ChangeFirm1" => "Sen zaten bu şirketin bir üyesisin.",
                "ChangeFirmOk" => "Şirket başarıyla değişti.",
                "Uridium" => "Bunun için yeterince Uridium'a sahip değilsin.",
                "ChangeFirmHangar" => "Şirket değiştirme mümkün değil. Hangar tesisi olan bir yerde olmalısın.",
                "DiplomacyAlreadyHave" => "Diplomasi için böyle bir başvuru zaten var.",
                "StartWar" => "Savaş başarıyla ilan edildi.",
                "DiplomacySuccess" => "Diplomasi isteğiniz gönderildi.",
                "Alliance" => "İttifak",
                "Nap" => "NAP",
                "War" => "Savaş",
                "DiplomacyEnded" => "Diplomasi başarıyla sonlandırıldı.",
                "DiplomacyDecline" => "Diplomasi başvurusu başarıyla reddedildi.",
                "WarEnded" => "Savaş sonlandırıldı.",
                "DiplomacyAccepted" => "Diplomasi başvurusu kabul edildi.",
                "DiplomacyCancel" => "Diplomasi başvurusu iptal edildi.",
                "CreatedClan" => "Klan oluşturuldu.",
                "UsernameChanged" => "Kullanıcı adı başarıyla değiştirildi.",
                "UsernameSocket" => "Kullanıcı adı değiştirmek için şirketinin hangar tesisi üzerinde olmalısın.",
                "UsernameDanger" => "Giriş yaparken, kayıt sırasında belirttiğiniz kullanıcı adını kullanacaksınız. (Şuanda değiştirdiğin isim oyun içerisindeki ismindir)",
                "PasswordChanged" => "Şifre başarıyla değiştirildi.",
                "NavHome" => "Anasayfa",
                "NavPlay" => "Oyna",
                "NavHangar" => "Hangar",
                "NavEquipment" => "Ekipman",
                "NavShop" => "Dükkan",
                "NavEvoucher" => "Kuponlar",
                "NavPayment" => "Ödeme",
                "NavClan" => "Klan",
                "NavJoin" => "Katıl",
                "NavFound" => "Oluştur",
                "NavMembers" => "Üyeler",
                "NavDiplomacy" => "Diplomasi",
                "NavCompany" => "Şirket",
                "NavAccount" => "Hesap",
                "NavProfile" => "Profil",
                "NavSettings" => "Ayarlar",
                "NavLogout" => "Çıkış Yap",
                "Exp" => "Tp",
                "Honor" => "Şeref",
                "Rank" => "Rütbe",
                "Level" => "Seviye",
                "News" => "Haberler",
                "Events" => "Etkinlikler",
                "Announcements" => "Duyurular",
                "Players" => "Pilotlar",
                "Clans" => "Klanlar",
                "Username" => "Kullanıcı Adı",
                "Password" => "Şifre",
                "Company" => "Şirket",
                "Value" => "Değer",
                "NameTag" => "İsim [Etiket]",
                "Close" => "Kapat",
                "Change" => "Değiştir",
                "PilotProfile" => "Pilot Profili",
                "ClanNameTag" => "Klan İsim [Etiket]",
                "ClanLeader" => "Klan Lideri",
                "ClanMembers" => "Klan Üyeleri",
                "ClanRank" => "Klan Rütbesi",
                "Edit" => "Düzenle",
                "EditClan" => "Klanı Düzenle",
                "EditInformation" => "Bilgileri Düzenle",
                "AddNews" => "Haber Ekle",
                "ClanName" => "Klan Adı",
                "ClanTag" => "Klan Kısaltması",
                "ClanDescription" => "Klan Açıklaması",
                "ClanCompany" => "Klan Şirketi",
                "Add" => "Ekle",
                "ClanDiplomacy" => "Klan Diplomasisi",
                "Delete" => "Sil",
                "Requests" => "İstekler",
                "Accept" => "Kabul Et",
                "RequestDiplomacy" => "Diplomasi Başvurusunda Bulun",
                "OpenApplications" => "Açık Başvurular",
                "InGameName" => "Oyun İçi İsim",
                "Search" => "Ara",
                "ClanSearch" => "Klan ara...",
                "ClanFoundTitle" => "Klan kurmak için bir kereliğine 0 Credits vermek gerekir. Klan kurulduktan sonra, yönetim bölümündeki klan bilgilerinde logo yükleyebilir, vergi alabilir, üyeleri yönetebilirsin, vs.",
                "ClanFound1" => "Klan kurmak için lütfen aşağıdaki bilgileri gir.",
                "ClanFound2" => "Adı: (min. 1 karakter, maks.: 50 karakter)",
                "ClanFound3" => "Kısaltma: (min. 1 karakter, maks.: 4 karakter)",
                "ClanFound4" => "Açıklama: (min. 1 karakter, maks.: 200 karakter)",
                "ClanFound5" => "\"Kur\" butonuyla girdilerini teyit et.",
                "FoundButton" => "Kur",
                "EnterClanDesc" => "Klan açıklaması gir.",
                "ClanList" => "Klan Listesi",
                "Members" => "Üyeler",
                "Joined" => "Üyelik",
                "Function" => "Fonksiyon",
                "LeaveClan" => "Klandan Ayrıl",
                "DissmissClanMember" => "Klan Üyesini Çıkar",
                "Position" => "Pozisyon",
                "DeleteClan" => "Klanı Sil",
                "TransferLeadership" => "Liderliği Devret",
                "ClanDeleteMessage" => "Bu klanı silmek istediğine emin misin?",
                "PlayerKickMessage" => "Bu kişiyi atmak istediğinden emin misin?",
                "TransferLMessage" => "Bu kişiye klanı devretmek istediğinden emin misin?",
                "Date" => "Tarih",
                "See" => "Gör",
                "Decline" => "Ret et",
                "LeaveClanMessage" => "Klandan çıkmak istediğine emin misin?",
                "Leader" => "Lider",
                "CompanyCost" => "Şirketinizi değiştirmek, 5.000 U. ve Şeref puanınızın %50'sine mal olur.",
                "EnterCode" => "Kodu Gir",
                "UseCode" => "Kodu Kullan",
                "Language" => "Dil",
                "Version" => "Versiyon",
                "LanguageChanged" => "Dil başarıyla değiştirildi.",
                "Send" => "Gönder",
                "Diplomacy" => "Diplomasi",
                "ClanFoundSocket" => "Klan oluşturmak için şirketinin hangar tesisi üzerinde olmalısın.",
                "AppSuccess" => "Başvurun klan liderine gönderildi.",
                "LeaderPerm" => "Bunu yapamazsın çünkü bir klan lideri değilsin.",
                "Update" => "Güncelleme",
                "Announcement" => "Duyuru",
                "New" => "Yeni",
                "ReadMore" => "Devamını Oku",
                "PlayersJoined" => "oyuncu katıldı.",
                "TotalJoined" => "Toplam",
                "ShowJoinedP" => "Katılan Oyuncuları Göster",
                "Day" => " Gün",
                "Hour" => " Saat",
                "Minute" => " Dakika",
                "Second" => " Saniye",
                "Tournament" => "Turnuva",
                "FinalistPlayers" => "Finalist Oyuncular",
                "Winner" => "Kazanan",
                "Events" => "Etkinlikler",
                "Tournaments" => "Turnuvalar",
                "BackToGame" => "Oyuna Dön",
                "apis" => "Zaten Apis droidin var.",
                "zeus" => "Zaten Zeus droidin var.",
                "ANNENIZISIKEYIM" => "Jackpot turnuvalarına ait maçların geçmişlerini Blog -> Turnuvalar bölümünden bulabilirsin.",
                "BuyOk" => " satın alındı.",
                "BuyMessage" => "Gerçekten satın almak istiyor musun? ",
                "Price" => "Ücret",
                "BuyButton" => "Satın Al",
                "VersionChanged" => "Versiyon başarıyla güncellendi.",
                "Select" => "Seç",
                "CompanySMessage" => "Bu şirketi seçmek istediğinden emin misin?",
                "HighestRank" => "Şu an en yüksek rütbede bulunuyorsun.",
                "ExperiencePoints" => "Tecrübe Puanı",
                "HonorPoints" => "Şeref Puanı",
                "YourLevel" => "Seviyen",
                "DaySince" => "Kayıttan Beri Gün Sayısı",
                "ShipType" => "Geminin Türü",
                "Pilot" => "Pilot",
                "Ranking" => "Sıralama",
                "Logbook" => "Seyir Defteri",
                "KillLog" => "Öldürme Günlüğü",
                "AccountLog" => "Hesap Günlüğü",
                "CodeNotFound" => "Kod bulunamadı.",
                "MaxUsedCode" => "Kod kullanım sınırına ulaştı.",
                "AlreadyUsed" => "Bu kodu zaten kullandınız.",
                "UsedSuccess" => "Kod başarıyla kullanıldı.",
                "AvailableCodes" => "Kullanılabilir Kodlar",
                "Available" => "Kullanılabilir",
                "Code" => "Kod",
                "Reward" => "Ödül",
                "CodeStatu" => "Statü",
                "VideoEventTitle" => "Ödüllü yarışma!",
                "VideoEventHead" => "Merhaba! Sunucumuzda çektiğiniz video ile yarışmaya katılabilirsiniz!",
                "VideoEventRating" => "Değerlendirme",
                "VideoEventReward" => "Ödül",
                "VideoEventNote" => "Not",
                "VideoEventParticipate" => "Yarışmaya nasıl katılabilirim?",
                "VideoEventPAnswer" => "Sunucumuzda çektiğiniz video ile yarışmaya katılabilirsiniz!",
                "VideoEventRAnser" => "Videonun kalitesi, efektlerine ve montajına bağlı olacaktır.",
                "VideoEventReAnswer" => "Apis ve Zeus.",
                "VideoEventNAnswer" => "Apis veya Zeus varsa Uridium verilecektir.",
                "VideoEventDetails" => "Detaylar",
                "VideoEventLastDay" => "Yarışma 1 Mayıs'ta sona erecek.",
                "VideoEventResultDAnswer" => "Sonuçlar <a href='".Config::Get('SERVER_URL')."Blog'>Blog</a>'da paylaşılacaktır.",
                "VideoEventMaxVideoCount" => "En fazla <span class='rb-text'>3</span> video ile başvurabilirsiniz.",
                "VideoLastApp" => "Son başvuru tarihi <span class='rb-text'>29</span> Nisan.",
                "VideoEventMaxApp" => "Ne yazık ki, daha fazla katılamazsınız.",
                "VideoMyApplications" => "Başvurularım",
                "VideoApplicationID" => "Başvuru Kodu",
                "VideoLinkFail" => "Lütfen geçerli bir adres giriniz.",
        		"actionSellError" => "Eşyalarını satamazsın!",
        		"actionSellShipError" => "Gemini satamazsın!",
        		"actionSellDroneError" => "Diroitlerini satamazsın!",
        		"equippingError" => "Donatma mümkün değil. Hangar tesisi olan bir yerde olmalısın.",
        		"hangarError" => "Şirket değiştirme mümkün değil. Hangar tesisi olan bir yerde olmalısın.",
                "equippingWrongError" => "Bir şeyler ters gitti.",
                "hangarChangeSuccess" => "Gemi başarı ile değiştirildi.",
                "LoginTitle" => "GİRİŞ YAP",
                "LoginUsername" => "Kullanıcı Adı",
                "LoginPassword" => "Şifre",
                "LoginForgotPW" => "Şifreni mi unuttun?",
                "LoginRegisterText" => "Bir hesaba mı ihtiyacınız var? Şimdi üye ol!",
                "LoginEmail" => "Eposta",
                "LoginRegister" => "KAYIT OL",
                "LoginAlready" => "Zaten kayıtlımısınız?",
                "HallOfFame" => "Şeref Salonu",
                "ArentLog" => "Görüntülenecek günlük yok.",
                "OldPassword" => "Eski Şifre",
                "NewPassword" => "Yeni Şifre",
                "RepeatPassword" => "Şifre Tekrar",
                "ExpRank" => "Tecrübe Sıralaması",
                "HonorRank" => "Şeref Sıralaması",
                "UserRank" => "Kullanıcı Sıralaması",
                "ClanRank" => "Klan Sıralaması",
                "ClanDetailsHaveClan" => "Başvuramazsın çünkü sen zaten bir klandasın.",
                "ClanDetailsEnterApp" => "Başvuru metnini gir.",
                "ClanDetailsPending" => "Bu klandaki başvurun şu anda işlemde.",
                "ClanDetailsDeleteApp" => "Başvuruyu Sil",
                "CurrentLevel" => "Mevcut Seviye",
                "NavSkillTree" => "Yetenek Ağacı",
                "Upgrade" => "Geliştir",
                "AgreementError" => "Devam etmek için şartları kabul etmelisin!",
                "ResearchPoints" => "ArGe Puanı:",
                "LogDisk" => "GÜNLÜK DOSYASI:",
                "RequiredDisk" => "GEREKLİ OLAN:",
                "Exchange" => "DEĞİŞTİR",
                "Soon" => "Yakında...",
                "NavDsc" => "DSC Satın Al",
                "Amount" => "Miktar",
                "NeedVerify" => "Hesabınıza giriş yapabilmek için e-posta adresinizi doğrulamalısınız.",
                "VerifyEmail" => "Hesabınızı doğrulamak için e-posta adresinize bir etkinleştirme bağlantısı gönderildi. Spam klasörüne bakmayı unutmayınız.",
                "ErrorMail" => "E-posta gönderilemedi. Lütfen tekrar kayıt olmayı deneyin.",
                "RegisterError" => "Kayıt sırasında bir hata oluştu lütfen yetkililerle iletişime geçin.",
                "WaitRegister" => "Kayıt işleminiz yapılıyor lütfen bekleyin...",
                "RegisterVerified" => "Kaydınız tamamlandı. Hesabınıza giriş yapabilirsiniz.",
                "Maintenance" => "Sunucu şu anda bakımda...",
                "NextLevel" => "Sonraki Seviye",
                "CurrentLevel" => "Mevcut Seviye",
                "SkillName" => "İsim"
            );

            return $Lang[$Data];
        }

        public static function Terms($Data){
            $SERVER_NAME = Config::Get('SERVER_NAME');

            $Lang = array(
                "Title" => "Web Sitesi Kullanım Şartları Anlaşması",
                "SmallTitle" => "Devam etmek için aşağıdaki kurallara uymalısınız:",
                "1Title" => "1. Şartlar",
                "1Message" => "Bu web sitesine erişerek, bu web sitesinin Şartlar ve Koşullar, yürürlükteki tüm yasa ve düzenlemelere tabi olmayı kabul edersiniz ve yürürlükteki yerel yasalara uymaktan sorumlu olduğunuzu kabul edersiniz. Bu şartların hiçbirine katılmıyorsanız, bu siteyi kullanmanız veya bu siteye erişmeniz yasaktır. Bu web sitesinde bulunan materyaller, telif hakları ve ticari marka yasaları ile korunmamaktadır. Bu web sitesinde gezinerek, telif hakkı yasalarını çiğnemekle cezalandırılacak tek kişinin siz olduğunu kabul edersiniz.",
                "2Title" => "2. Kullanım Lisansı",
                "2Message" => "Yalnızca kişisel, ticari olmayan geçici görüntüleme için {$SERVER_NAME}'in web sitesindeki materyallerin (bilgi veya yazılım) bir kopyasını geçici olarak indirmek için izin verilir.",
                "3Title" => "3. Feragatname",
                "3Message" => "{$SERVER_NAME}'in web sitesindeki materyaller \"olduğu gibi\" sağlanmıştır. {$SERVER_NAME}, hiçbir garanti vermez, ifade etmez veya ima etmez ve işbu sözleşmeyle sınırlı olmamak kaydıyla, ima edilen garantiler veya satılabilirlik koşulları, belirli bir amaca uygunluk veya fikri mülkiyet haklarının ihlali veya diğer hakların ihlal edilmemesi de dahil olmak üzere diğer tüm garantileri reddeder ve reddeder. Ayrıca, {$SERVER_NAME}, malzemelerin İnternet web sitesinde kullanımının doğruluğu, olası sonuçları veya güvenilirliği ile ilgili veya başka türlü bu malzemelerle veya bu siteye bağlı herhangi bir site ile ilgili hiçbir garanti vermez veya sunmaz.",
                "4Title" => "4. Sınırlamalar",
                "4Message" => "Hiçbir koşulda {$SERVER_NAME} veya tedarikçileri, malzemelerin {$SERVER_NAME} İnternet sitesinde kullanılmamasından veya kullanılmamasından doğacak zararlardan (bunlarla sınırlı olmamak üzere, veri veya kar zararı veya iş kesintisi nedeniyle) sorumlu tutulamaz. {$SERVER_NAME} veya bir {$SERVER_NAME} yetkili temsilcisine sözlü olarak veya bu tür bir hasar olasılığını yazılı olarak bildirilmiş olsa bile. Bazı yargı bölgelerinde zımni garantilerde sınırlamalar veya dolaylı veya olası zararlar için sorumluluk sınırlamaları bulunmadığından, bu sınırlamalar sizin için geçerli olmayabilir.",
                "5Title" => "5. Revizyonlar ve Hata",
                "5Message" => "{$SERVER_NAME}'in web sitesinde görünen materyaller teknik, tipografik veya fotografik hatalar içerebilir. {$SERVER_NAME}, web sitesindeki materyallerin hiçbirinin doğru, eksiksiz veya güncel olduğunu garanti etmemektedir. {$SERVER_NAME}, web sitesinde bulunan materyallerde herhangi bir zamanda önceden bildirimde bulunmaksızın değişiklik yapabilir. Ancak {$SERVER_NAME}, malzemeleri güncellemek için herhangi bir taahhütte bulunmaz.",
                "6Title" => "6. Bağlantılar",
                "6Message" => "{$SERVER_NAME}, İnternet web sitesine bağlı tüm siteleri incelememiştir ve bu bağlantılı sitelerin içeriğinden sorumlu değildir. Herhangi bir bağlantının eklenmesi, sitenin {$SERVER_NAME} tarafından onaylandığı anlamına gelmez. Bu tür bağlantılı web sitelerinin kullanımı kullanıcının sorumluluğundadır.",
                "7Title" => "7. Site Kullanım Koşulları Değişiklikleri",
                "7Message" => "{$SERVER_NAME}, web sitesi için bu kullanım koşullarını herhangi bir zamanda önceden bildirimde bulunmaksızın gözden geçirebilir. Bu web sitesini kullanarak, bu Kullanım Koşulları'nın güncel versiyonuna bağlı kalmayı kabul etmiş sayılırsınız.",
                "8Title" => "8. Geçerli Yasa",
                "8Message" => "{$SERVER_NAME}'in web sitesi ile ilgili herhangi bir iddia, yasa hükümleriyle çelişki ne olursa olsun, İspanya Eyaleti yasalarına tabidir. <br> Bir Web Sitesinin Kullanımı ile İlgili Genel Hüküm ve Koşullar.",
                "9Title" => "9. Telif Hakkı Koruması",
                "9MessageA" => "Sitede veya Siteden erişilebilecek herhangi bir materyalin telif hakkınızı ihlal ettiğini düşünüyorsanız, bizimle iletişime geçerek ve aşağıdaki bilgileri vererek bu materyallerin (veya bunlara erişimin) bu siteden kaldırılmasını isteyebilirsiniz:",
                "9MessageB" => "<li> Kopyalandığını düşündüğünüz telif hakkı alınmış çalışmanın tespiti. Lütfen çalışmayı tanımlayın ve mümkünse çalışmanın yetkili bir versiyonunun bir kopyasını veya konumunu da ekleyin.</li>
                <li> Adınız, adresiniz, telefon numaranız ve e-posta adresiniz.</li>
                <li> Materyallerin kullanımından şikayet edilenlerin telif hakkı sahibi, vekili veya yasa tarafından yetkilendirilmediğine dair iyi bir inanca sahip olduğunuza dair bir ifade.</li>
                <li> Sağladığınız bilgilerin doğru olduğunu ve \"hak ihlali cezası altında\" olduğunu belirten bir ifade, telif hakkı sahibi olduğunuzu veya telif hakkı sahibinin adına hareket etmeye yetkili olduğunuzu belirtir.</li>
                <li> Telif hakkı sahibinden veya yetkili temsilcisinden bir imza veya elektronik eşdeğeri.</li>",
                "10Title" => "10. Gizlilik Politikası",
                "10MessageA" => "Gizliliğiniz bizim için çok önemlidir. Bu doğrultuda, kişisel bilgileri nasıl topladığımızı, kullandığımızı, açıkladığımızı, açıkladığımızı ve kullandığınızı anlamanız için bu Politika'yı geliştirdik. Aşağıdaki gizlilik politikamızı özetlemektedir.",
                "10MessageB" => "<li> Kişisel bilgi toplamanın öncesinde veya sırasında, bilgilerin toplanma amaçlarını belirleyeceğiz.</li>
                <li> Kişisel bilgileri yalnızca tarafımızca belirtilen amaçları yerine getirmek veya yasaların gerektirdiği şekilde onaylamadıkça, tarafımızca belirtilen amaçları yerine getirmek ve diğer uyumlu amaçlar doğrultusunda kullanmak ve kullanacağız.</li>
                <li> Kişisel bilgileri yalnızca bu amaçların yerine getirilmesi için gerekli olduğu sürece saklayacağız.</li>
                <li> Kişisel bilgileri yasal ve adil yollarla ve uygun olduğu durumlarda ilgili kişinin bilgisi veya rızası ile toplayacağız.</li>
                <li> Kişisel veriler, kullanılma amaçları ile ilgili olmalı ve bu amaçlar için gerekli olan ölçüde doğru, eksiksiz ve güncel olmalıdır.</li>
                <li> Kişisel bilgileri, makul olmayan güvenlik önlemleriyle kayıp veya hırsızlığa karşı koruyacağız, ayrıca yetkisiz erişim, açıklama, kopyalama, kullanım veya değiştirmeyle koruyacağız.</li>
                <li> Kişisel bilgilerin yönetimi ile ilgili politikalarımız ve uygulamalarımız hakkında müşterilerimize bilgi sunacağız.</li>",
                "10MessageC" => "Kişisel bilgilerin gizliliğinin korunmasını ve korunmasını sağlamak için işimizi bu ilkelere uygun olarak yürütmeyi taahhüt ediyoruz.",
                "Footer1" => "{$SERVER_NAME} bağımsız bir projedir (Kâr amacı gütmeyen hedef) © 2019.",
                "Footer2" => "<a target=\"_blank\" href=\"http://darkorbit.com/\">DarkOrbit</a>, <a target=\"_blank\" href=\"http://bigpoint.com/\">BigPoint GmbH</a> şirketinin tescilli ticari markasıdır. Tüm hakları kendi sahip(lerine) aittir.",
                "Footer3" => "<a target=\"_blank\" href=\"http://bigpoint.com/\">BigPoint GmbH</a> tarafından desteklenmiyor, bağlı değil veya teklif edilmiyoruz."
            );
            return $Lang[$Data];
        }

        public static function GetDailyRank(){
            global $Player;
            return "Bugünkü <span class='text-info halloffame_rank'>".self::Rank($Player->Data['rankID'])." <img class='halloffame_rank' src='".Config::Get('SERVER_URL')."do_img/global/ranks/rank_".$Player->Data['rankID'].".png'></span> rütbenin hesaplaması böyle oldu:.";
        }

        public static function KillLog($Type, $name){ return Functions::getShipName($name) . ($Type == 1 ? " isimli oyuncuyu yok ettin." : " isimli oyuncu tarafından yok edildin."); }
        public static function getOtherRank($Point, $Rank){ return "Bir sonraki <img src='".Config::Get('SERVER_URL')."do_img/global/ranks/rank_{$Rank}.png'> <strong>".self::Rank($Rank)."</strong> rütbesine ulaşmak için, şu anda {$Point} Rütbe Puanı'na ihtiyacın var."; }
        public static function getTerms(){ return "<span><a href='javascript:;' id='terms'>Şartlar & Koşullar </a> okundu ve kabul edildi.</span>"; }
        public static function getRP($Data){ return "ArGe Puanı dağıtıldı: 50 vardı {$Data} kullanıldı."; }
        public static function convertPT($Data){ return ($Data == 1) ? 'Uridium' : 'Kredi'; }

        public static function shopLogMessages($Data, $PaymentType, $PaymentAmount, $Amount){
            $Lang = array(
                "1" => "Apis droidi satın alındı.",
                "2" => "Zeus droidi satın alındı.",
                "12" => "Pet satın alındı.",
                "37" => "CD-B01 satın alındı.",
                "38" => "CD-B02 satın alındı.",
                "39" => "DMG-B01 satın alındı.",
                "40" => "DMG-B02 satın alındı.",
                "41" => "EP-B01 satın alındı.",
                "42" => "EP-B02 satın alındı.",
                "43" => "HON-B01 satın alındı.",
                "44" => "HON-B02 satın alındı.",
                "45" => "HP-B01 satın alındı.",
                "46" => "HP-B02 satın alındı.",
                "47" => "REP-B01 satın alındı.",
                "48" => "REP-B02 satın alındı.",
                "49" => "Aegis satın alındı.",
                "50" => "REP-S01 satın alındı.",
                "51" => "RES-B01 satın alındı.",
                "52" => "RES-B02 satın alındı.",
                "53" => "SHD-B01 satın alındı.",
                "54" => "SHD-B02 satın alındı.",
                "55" => "SREG-B01 satın alındı.",
                "56" => "SREG-B02 satın alındı.",
                "69" => "Citadel satın alındı.",
                "70" => "Spearhead satın alındı.",
                "81" => "Pusat satın alındı.",
                "156" => "Cerrah satın alındı.",
                "445" => "Champion satın alındı.",
                "480" => "Cyborg satın alındı.",
                "583" => "Günlük Dosya satın alındı.",
                "584" => "Yeşil Ganimet Anahtarı satın alındı.",
                "585" => "Otomatik Toplayıcı modülü satın alındı.",
                "586" => "Kamikaze modülü satın alındı.",
                "587" => "Tamir modülü satın alındı.",
                "588" => "Kombo Gemi Tamir modülü satın alındı.",
                "589" => "Kırmızı Ganimet Anahtarı satın alındı.",
                "590" => "Mavi Ganimet Anahtarı satın alındı."
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
                "1" => "Giriş yapıldı."
            );
            return $Lang[$Data];
        }

        public static function clanMessage($UserID, $Data){
            $Lang = array(
                "1" => '<span class="clan-description">' . Functions::getShipName($UserID) . ' </span> klana katıldı.',
                "2" => '<span class="clan-description">' . Functions::getShipName($UserID) . ' </span> klandan atıldı.',
                "3" => '<span class="clan-description">' . Functions::getShipName($UserID) . ' </span> klandan ayrıldı.',
                "4" => 'Yeni Lider: <span class="clan-description"> ' . Functions::getShipName($UserID) . ' </span>'
            );
            return $Lang[$Data];
        }

        public static function Shop($Data){
            $Lang = array(
                "Ship" => "Gemiler",
                "Drone" => "Diroitler",
                "Booster" => "Destekler",
                "Extra" => "Ekstralar",
                "Design" => "Tasarımlar",
                "Description" => 'Açıklama :'
            );
            return $Lang[$Data];
        }

        public static function shopItems($Data){
            $Lang = array(
                "Apis" => "2 slotlu Epic diroidi.",
                "Zeus" => "2 slotlu Epic diroidi.",
                "LogFile" => "ArGe Puanı elde etmek için gerekli.",
                "RedKey" => "Değerli kırmızı korsan ganimetlerini açabilmek ve üstün nitelikli hazinelere sahip olabilmek için gereklidir.",
                "BlueKey" => "Değerli mavi korsan ganimetlerini açabilmek ve üstün nitelikli hazinelere sahip olabilmek için gereklidir.",
                "GreenKey" => "Değerli korsan ganimetlerini açabilmek ve üstün nitelikli hazinelere sahip olabilmek için gereklidir.",
                "Pet" => "P.E.T. senin sadık muhafızındır. Seni uzaydaki maceran sırasında pek çok konuda destekler. Motorlar ve YZ Protokolleri ile onu değişik kabiliyetlerle donatabilirsin. Senin için Tecrübe Puanı toplar ve seviyeni yükseltmeni sağlar.",
                "cd-b01" => "10 saat boyunca bütün gemi yeteneklerinin yükleme süresini % 20 kısaltır.",
                "cd-b02" => "10 saat boyunca bütün gemi yeteneklerinin yükleme süresini % 30 kısaltır.",
                "dmg-b01" => "10 saat boyunca yol açılan tüm hasar için +%10 hasar.",
                "dmg-b02" => "Yol açılan tüm hasar için +%10 hasar. Bonus hasarın %1 kadarı 10 saat boyunca etrafındaki gemiler ile paylaşılabilir.",
                "ep-b01" => "10 saat boyunca %10 Tecrübe bonusu verir.",
                "ep-b02" => "+%10 Tecrübe Bonusu; Bu bonusun %5 kadarı 10 saat boyunca etrafındaki gemiler ile paylaşılabilir.",
                "hon-b01" => "10 saat boyunca +%10 şeref.",
                "hon-b02" => "10 saat boyunca Şeref Puanı kazanırken +%10 bonus sağlar ve etrafında bulunan dost gemilere de bu avantajdan %5 verir.",
                "hp-b01" => "10 saat boyunca +%10 gemi Darbe Puanı.",
                "hp-b02" => "10 saat boyunca geminin azami DP değerinin %10 artmasını sağlar ve etrafında bulunan dost gemilere de bu avantajdan %1 verir.",
                "rep-b01" => "10 saat boyunca +%10 daha hızlı uzay gemisi onarımları.",
                "rep-b02" => "+%10 tamir hızı: Geminin tamir hızını artırır. Bu bonusun %1 kadarı 10 saat boyunca etrafındaki gemiler ile paylaşılabilir.",
                "rep-s01" => "",
                "res-b01" => "Ham madde desteği, NPC kargo kutularından toplanan ham madde sayısını 10 saat boyunca %25 arttırır.",
                "res-b02" => "Ham madde desteği, NPC kargo kutularından toplanan ham madde sayısını 10 saat boyunca %25 artırır ve etrafındaki dost gemilere bu bonustan %10 verir.",
                "shd-b01" => "10 saat boyunca +%25 kalkan desteği.",
                "shd-b02" => "10 saat boyunca geminin destek kalkanın azami değerinin %25 artmasını sağlar ve etrafında bulunan dost gemilere de bu avantajdan %2 verir.",
                "sreg-b01" => "10 saat boyunca +%25 kalkan yenileme hızı.",
                "sreg-b02" => "10 saat boyunca Kalkanın azami değerinin %25 artmasını sağlar ve etrafında bulunan dost gemilere de bu avantajdan %2 verir.",
                "Lightning" => "Masmavi bir gök yüzünde, daha doğrusu uzayın derin karanlığında bir şimşek gibi çakarak düşmanlarını elektrik şokuna uğrat! Bu uzay gemisi şu yeteneklere sahip: %5 ekstra hasar ve Muavin yakıcı yeteneği ile geminin hızını 5 saniye boyunca %30 artır!",
                "Pusat" => "Eşsiz Türk eseri olan Pusat\'la birlikte tüm evrene hükmedecek ve Şanlı Türk filosunun adını her yerde duyuracaksın! 16 Adet Lazer Slotu ile birlikte kimsenin veremediği hasarı verecek, kimsenin gidemediği kadar hızlı gideceksin! Onu kullandığında sert ve hızlı darbeler vurabilirsin.",
                "Peacemaker" => "Goliath Peacemaker, 2641 yılında Kristal Antlaşması imzalandıktan sonra geliştirilmişti. Şirketler arasında bir birliktelik duygusu yaratmak için üç farklı fraksiyon tarafından geliştirilen üç uzay gemisinden birisiydi. Bu uzay gemisi, kazanılan Nüfuza %5 bonus verirken rakip Fraksiyonlardan gelen pilotlara karşı %7ekstra hasar sağlıyor.",
                "Sovereign" => "Goliath Sovereign, 2641 yılında Kristal Antlaşması imzalandıktan sonra geliştirilmişti. Şirketler arasında bir birliktelik duygusu yaratmak için üç farklı fraksiyon tarafından geliştirilen üç uzay gemisinden birisiydi. Bu uzay gemisi, kazanılan Nüfuza %5 bonus verirken rakip Fraksiyonlardan gelen pilotlara karşı %7ekstra hasar sağlıyor.",
                "Vanquisher" => "Goliath Vanquisher, 2641 yılında Kristal Antlaşması imzalandıktan sonra geliştirilmişti. Şirketler arasında bir birliktelik duygusu yaratmak için üç farklı fraksiyon tarafından geliştirilen üç uzay gemisinden birisiydi. Bu uzay gemisi, kazanılan Nüfuza %5 bonus verirken rakip Fraksiyonlardan gelen pilotlara karşı %7ekstra hasar sağlıyor.",
                "Kick" => "Bu harika oyunu, hızlı uzay gemilerini ve heyecan verici it dalaşlarını ne kadar sevdiğini göster! G-Kick bunun için yaratıldı. Bu gemi şu yeteneklere sahip: %10 ekstra kalkan gücü.",
                "Goal" => "İşte şut ve goooool! Futbol senin hayatınsa, bu savaş gemisi tam sana göre. Stadyumun heyecanını uzağın derinliklerine taşı! Bu uzay gemisi şu yeteneklere sahip: tecrübe puanında %10 bonus.",
                "Referee" => "Goliath Referee, geçmiş ve gelecekte insanların düzenlediği oyunları kutlamak için geliştirilmişti. Onurlu duruşu ve bağımsız çehresiyle bu uzay gemisi ayrıca %5 ekstra hasar veriyor.",
                "Crimson" => "Goliath için özel bir tasarım. Sadece bir Goliath sahibi olduğunda kullanabilirsin.",
                "Centaur" => "Goliath sınıfının sunabileceği en iyi koruma için ekstra katmana sahip olan Centaur ile kırılgan insan bedenini uzayın tehlikelerinden, yaratıklardan, soğuktan, vakumdan ve düşman pilotlardan koru. Bu uzay gemisi şu yeteneklere sahip: DP\'de %10 bonus.",
                "Ignite" => "2727 yılındaki İkinci Sibelon Savaşında çarpışarak o savaşı kazanan uzay gemilerinin tasarımına uygun nadir bir mücevher. İnsani erdemin bu büyük örneğiyle geçmişteki zaferleri tekrar yaşa, insanlığın bayrağını taşı ve çatışmaların ortasına dal!",
                "Surgeon" => "Bir neşter kadar hassas ve ölümcül! Ar-Ge departmanınızdan çıkan en son yenilikle kendinizi donatın. Bu uzay gemisi şu yeteneklere sahip: %6 ekstra hasar, %6 daha çok şeref puanı, %6 daha çok TP ve fazladan bir Jeneratör Yeri.",
                "Spearhead" => "Acımasız, soğuk kanlı yalnız bir kurt için ideal, çevik bir keşif gemisi. Spearheads bir kaşif olarak düşman bölgesinin derinlerine ulaşabilir, düşman gemilerinin yeteneklerini devre dışı bırakabilir ve hatta onları müttefikler için işaretleyebilir.",
                "Aegis" => "Aegis, içine girdiği tüm çatışmalarda dengeleri değiştirir. Bu çok yönlü mühendislik ürünü uzay gemisinin sağladığı destek ve onarım yetenekleri kazanmak ile kaybetmek arasındaki farkı belirler. Bu yüzden o savaş gemisini kendi yanında görmeyi isteyeceksin.",
                "Citadel" => "Citadel, mürettebatı arasında \'Ağır Tank\' ya da sadece Tank olarak tanınır. Dev bir Ağır Kruvazör olan bu uzay gemisi, iki roket atar yuvası ve farklı yetenekleriyle düşmanlara karşı tam bir hareketli kalkan oluşturur. Şimdi, uzay gemilerinin bu dev koruyucusuna sen de sahip olabilirsin!",
                "KK" => "P.E.T.\'in veya gemin imha edilmek üzereyken, kamikaze modülü etkin hale gelir ve P.E.T.\'in düşmanlarını yok etmek üzere son kez kamikaze saldırısına geçer. <br><br> Etki: Patladığında 75,000 alan hasarına yol açar. <br> Yarıçap: 450",
                "AL" => "Bu modülü etkinleştirdiğin takdirde, P.E.T\'in yakınlardaki bütün avantaj kutularını ve kargo kutularını otomatik olarak toplar. <br><br> Menzil: 2,500",
                "REP" => "Tamir modülü P.E.T hasarını saniyede 12,000 oranında tamir eder. <br><br> Etki: Saniyede 12,000 DP tamir eder. <br> Süre: 30 saniye",
                "CSR" => "Uzay gemini uçuş sırasında tamir eder. Her tamirat için fazladan yakıt tüketir. <br> <br>Etki: Saniyede 25,000 DP tamir eder. <br> Süre: 5 Saniye <br> Tüketim: 512 Uridium"
            );
            return $Lang[$Data];
        }

        public static function Rank($RankID){
            $getRank = array(
                "1" => "Acemi Uzay Pilotu",
                "2" => "Uzay Pilotu",
                "3" => "Acemi Pilot",
                "4" => "Acemi Çavuş",
                "5" => "Çavuş",
                "6" => "Uzman Çavuş",
                "7" => "Asteğmen",
                "8" => "Teğmen",
                "9" => "Üsteğmen",
                "10" => "Acemi Yüzbaşı",
                "11" => "Yüzbaşı",
                "12" => "Uzman Yüzbaşı",
                "13" => "Acemi Binbaşı",
                "14" => "Binbaşı",
                "15" => "Kurmay Binbaşı",
                "16" => "Acemi Albay",
                "17" => "Albay",
                "18" => "Kurmay Albay",
                "19" => "Tümgeneral",
                "20" => "General",
                "21" => "Yönetici",
                "22" => "Aranan"
            );
            return $getRank[$RankID];
        }

        public static function SkillName($SkillID){
            $Skill = array(
                '1' => 'Mühendis',
                '2' => 'Mayıncı I',
                '3' => 'Mayıncı II',
                '4' => 'Patlayıcı Uzmanı',
                '5' => 'Isı Arayıcısı',
                '6' => 'Roket Uzmanı',
                '7' => 'Kısmet I',
                '8' => 'Kısmet II',
                '9' => 'Acımasız I',
                '10' => 'Acımasız II'
            );
            return $Skill[$SkillID];
        }

        public static function SkillDescription($SkillID, $Level){
            $Skill = array(
                '1' => "<span style='color: #a4d3ef;'>Tamir robotların saniyede %".($Level <= 1 ? "5" : ($Level == 2 ? "10" : ($Level == 3 ? "15" : ($Level == 4 ? "20" : "30"))))." daha fazla Darbe Puanı tamir edebilir.</span>",
                '2' => "<span style='color: #a4d3ef;'>Mayınların %".($Level <= 1 ? "7" : "14")." daha fazla hasar verecek.</span>",
                '3' => "<span style='color: #a4d3ef;'>Mayınların %".($Level <= 1 ? "21" : ($Level == 2 ? "28" : "50"))." daha fazla hasar verecek.</span>",
                '4' => "<span style='color: #a4d3ef;'>Mayınların tahrip alanı %".($Level <= 1 ? "4" : ($Level == 2 ? "8" : ($Level == 3 ? "12" : ($Level == 4 ? "18" : "25"))))." artıyor.</span>",
                '5' => "<span style='color: #a4d3ef;'>Roketlerin isabet oranları %".($Level <= 1 ? "1" : ($Level == 2 ? "2" : ($Level == 3 ? "4" : ($Level == 4 ? "6" : "10"))))." artacaktır.</span>",
                '6' => "<span style='color: #a4d3ef;'>Roketlerin %".($Level <= 1 ? "2" : ($Level == 2 ? "4" : ($Level == 3 ? "6" : ($Level == 4 ? "8" : "15"))))." daha fazla hasar verecek.</span>",
                '7' => "<span style='color: #a4d3ef;'>Avantaj kutularından %".($Level <= 1 ? "2" : "4")." daha fazla Uridium alacaksın.</span>",
                '8' => "<span style='color: #a4d3ef;'>Avantaj kutularından %".($Level <= 1 ? "6" : ($Level == 2 ? "8" : "12"))." daha fazla Uridium alacaksın.</span>",
                '9' => "<span style='color: #a4d3ef;'>%".($Level <= 1 ? "4" : "8")." daha fazla Şeref Puanı alacaksın.</span>",
                '10' => "<span style='color: #a4d3ef;'>%".($Level <= 1 ? "12" : ($Level == 2 ? "18" : "25"))." daha fazla Şeref Puanı alacaksın.</span>"
            );
            return $Skill[$SkillID];
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
                '224' => 'Özel Turnuva'
            );
            return $getMap[$MapID];
        }
    }

?>
