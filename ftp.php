<meta http-equiv="refresh" content="3600;url=http://127.0.0.1/ftp.php"> 
<?php 
ini_set('user_agent', 'Android Vinebre Software');
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
); 
$content = file_get_contents('http://config.e-droid.net/srv/config.php?v=26&vname=1&idapp=904969&idusu=0&cod_g=&pw=1&gp=0&am=0&pa_env=1&pa=US&pn=ad.rar.tv&fus=010100000000&aid=347561770674fedd', false, stream_context_create($arrContextOptions));
$alkaicer = file_get_contents('http://config.e-droid.net/srv/config.php?v=26&vname=9.7&idapp=840321&idusu=0&cod_g=&pw=1&gp=0&am=0&pa_env=1&pa=US&pn=alkaicer.teamcopy&fus=010100000000&aid=347561770674fedd', false, stream_context_create($arrContextOptions));
$tilfazarab = file_get_contents('https://config.e-droid.net/srv/config.php?v=21&vname=1.0&idapp=1185384&idusu=0&cod_g=&pw=1&gp=0&am=0&pa_env=1&pa=US&pn=com.tilfazarab2020&fus=191121122231&aid=07eaa387a0ff21bd', false, stream_context_create($arrContextOptions));
//------------------------[alkaicer]----------------------------------
$first_step = explode( '[s8529122_url=' , $alkaicer );
$second_step = explode("][" , $first_step[1] );
$user= $second_step[0];
$a=str_replace("/153",'', $user);
preg_match_all('/http:\/\/(.*?)\/.*?\/.*?/', $a, $matches);
preg_match_all('/http:\/\/.*?\/(.*?)\/.*?/', $a, $matchess);
preg_match_all('/http:\/\/.*?\/.*?\/(.*)/', $a, $matchesss);
$Url = implode(' ',$matches[1]);
$UrlUser = implode(' ',$matchess[1]);
$Urlpass = implode(' ',$matchesss[1]);
$UUU = $UrlUser."/".$Urlpass;
$iptv= "http://".$Url."/get.php?username=".$UrlUser."&password=".$Urlpass."&type=m3u";
$first_step2 = explode( '[s8529122_ua=' , $alkaicer );
$second_step2 = explode("][" , $first_step2[1] );
$user2= $second_step2[0];
//------------------------[tilfazarab]----------------------------------
/*$first_step1 = explode( '[s8529047_url=' , $tilfazarab );
$second_step1 = explode("][" , $first_step1[1] );
$user1= $second_step1[0];
$a1=str_replace("/48",'', $user1);
preg_match_all('/http:\/\/(.*?)\/.*?\/.*?/', $a1, $matches1);
preg_match_all('/http:\/\/.*?\/(.*?)\/.*?/', $a1, $matchess1);
preg_match_all('/http:\/\/.*?\/.*?\/(.*)/', $a1, $matchesss1);
$Url1 = implode(' ',$matches1[1]);
$UrlUser1 = implode(' ',$matchess1[1]);
$Urlpass1 = implode(' ',$matchesss1[1]);
$UUU1 = $UrlUser1."/".$Urlpass1;*/
//----------------------------------------------------------
## START WRITING THE ARTICLE FILE
if (file_exists("match.html"))
$file_path = "match.html";
else
$file_path = "match.html";
if ($fp = @fopen($file_path,'w')){
@fwrite($fp,$content);
@fclose($fp);
}
//----------------------------------------------------------
## START WRITING THE ARTICLE FILE
if (file_exists("tilfazarab.html"))
$file_path1 = "tilfazarab.html";
else
$file_path1 = "tilfazarab.html";
if ($fp1 = @fopen($file_path1,'w')){
@fwrite($fp1,$tilfazarab);
@fclose($fp1);
}
//----------------------------------------------------------
// FTP server details
$ftpHost   = '116.202.233.84';
$ftpUsername = 'beonliv1';
$ftpPassword = 'A!Fpb7F7aV56h[';
//----------------------------------------------------------
// open an FTP connection
$connId = ftp_connect($ftpHost) or die("Couldn't connect to $ftpHost");
// login to FTP server
$ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);
//----------------------------------------------------------
// local & server file path
$localFilePath  = 'match.html';
$remoteFilePath = 'public_html/Beon/match.html';
//----------------------------------------------------------
// local & server file path
$tilfazarabFilePath  = 'tilfazarab.html';
$tilfazarabremoteFilePath = 'public_html/Beon/tilfazarab.html';
//----------------------------------------------------------
// try to upload file
if(ftp_put($connId, $remoteFilePath, $localFilePath, FTP_ASCII)){
    echo "File transfer successful - $localFilePath";
}else{
    echo "There was an error while uploading $localFilePath";
}
//----------------------------------------------------------
echo "<br>";
//----------------------------------------------------------
// try to upload file
if(ftp_put($connId, $tilfazarabremoteFilePath, $tilfazarabFilePath, FTP_ASCII)){
    echo "File transfer successful - $tilfazarabFilePath";
}else{
    echo "There was an error while uploading $tilfazarabFilePath";
}
//----------------------------------------------------------
// close the connection
ftp_close($connId);
//--------------------------------------------------------------------
$OSN = <<<line
#EXTM3U
#EXTINF:-1,AR: OSN Nat Geo SD
http://$Url/$UUU/85|user-agent=$user2
#EXTINF:-1,AR: OSN Cinema 1 SD
http://$Url/$UUU/86|user-agent=$user2
#EXTINF:-1,AR: OSN Nat Geo pepole SD
http://$Url/$UUU/88|user-agent=$user2
#EXTINF:-1,AR: OSN Star World SD
http://$Url/$UUU/89|user-agent=$user2
#EXTINF:-1,AR: OSN Star Movies SD
http://$Url/$UUU/90|user-agent=$user2
#EXTINF:-1,OSN:  ITV Choice
http://$Url/$UUU/2172|user-agent=$user2
#EXTINF:-1,[OSN] Movies firest
http://$Url/$UUU/2825|user-agent=$user2
#EXTINF:-1,[OSN] FX HD
http://$Url/$UUU/2826|user-agent=$user2
#EXTINF:-1,OSN: Nickelodeon HD
http://$Url/$UUU/3284|user-agent=$user2
#EXTINF:-1,AR: OSN  Binge
http://$Url/$UUU/84|user-agent=$user2
#EXTINF:-1,OSN Movies
http://$Url/$UUU/153|user-agent=$user2
#EXTINF:-1,OSN Disney XD HD
http://$Url/$UUU/2543|user-agent=$user2
#EXTINF:-1,[OSN] Alfa Mosalsalat
http://$Url/$UUU/995|user-agent=$user2
#EXTINF:-1,OSN:  Snaiper Anime
http://$Url/$UUU/2542|user-agent=$user2
#EXTINF:-1,OSN :  KIDS ZONE
http://$Url/$UUU/154|user-agent=$user2
#EXTINF:-1,OSN Action
http://$Url/$UUU/155|user-agent=$user2
#EXTINF:-1,OSN YAHALA HD
http://$Url/$UUU/156|user-agent=$user2
#EXTINF:-1,OSN Nat Geo
http://$Url/$UUU/157|user-agent=$user2
#EXTINF:-1,OSN Nat Geo Pepole
http://$Url/$UUU/158|user-agent=$user2
#EXTINF:-1,OSN Star Movies
http://$Url/$UUU/159|user-agent=$user2
#EXTINF:-1,OSN Star World
http://$Url/$UUU/160|user-agent=$user2
#EXTINF:-1,OSN Ya Hala Cinema
http://$Url/$UUU/161|user-agent=$user2
#EXTINF:-1,OSN Disny Junior
http://$Url/$UUU/162|user-agent=$user2
#EXTINF:-1,OSN Enigma
http://$Url/$UUU/164|user-agent=$user2
#EXTINF:-1,OSN Discovery Show
http://$Url/$UUU/165|user-agent=$user2
#EXTINF:-1,OSN History Channel
http://$Url/$UUU/167|user-agent=$user2
#EXTINF:-1,OSN Discovery Science
http://$Url/$UUU/168|user-agent=$user2
#EXTINF:-1,OSN  OSN BBC First
http://$Url/$UUU/169|user-agent=$user2
#EXTINF:-1,OSN Movies First
http://$Url/$UUU/170|user-agent=$user2
#EXTINF:-1,OSN Movies Disney
http://$Url/$UUU/171|user-agent=$user2
#EXTINF:-1,OSN  Movies First
http://$Url/$UUU/175|user-agent=$user2
#EXTINF:-1,OSN: Disney Channel
http://$Url/$UUU/667|user-agent=$user2
#EXTINF:-1,OSN: Movies First  ++2
http://$Url/$UUU/738|user-agent=$user2
#EXTINF:-1,[OSN] Movies
http://$Url/$UUU/963|user-agent=$user2
#EXTINF:-1,[OSN] wwe
http://$Url/$UUU/994|user-agent=$user2
#EXTINF:-1,[OSN] Food
http://$Url/$UUU/993|user-agent=$user2
#EXTINF:-1,[OSN] Alfa Cinema 1
http://$Url/$UUU/991|user-agent=$user2
#EXTINF:-1,[OSN] Alfa Cinema 2
http://$Url/$UUU/992|user-agent=$user2
#EXTINF:-1,[OSN] OSN Cinema
http://$Url/$UUU/964|user-agent=$user2
#EXTINF:-1,[OSN] Alfa Alyoum
http://$Url/$UUU/990|user-agent=$user2
#EXTINF:-1,[OSN] OSN Ya Hala Aloula
http://$Url/$UUU/988|user-agent=$user2
#EXTINF:-1,[OSN] : Enigma
http://$Url/$UUU/987|user-agent=$user2
#EXTINF:-1,[OSN] Thriller
http://$Url/$UUU/986|user-agent=$user2
#EXTINF:-1,[OSN] OSN Animal Planet
http://$Url/$UUU/962|user-agent=$user2
#EXTINF:-1,[OSN] OSN Nat Geo Abudhabi
http://$Url/$UUU/983|user-agent=$user2
#EXTINF:-1,[OSN] OSN Nat Geo Wild
http://$Url/$UUU/982|user-agent=$user2
#EXTINF:-1,[OSN] OSN Comedy
http://$Url/$UUU/965|user-agent=$user2
#EXTINF:-1,[OSN] OSN Nat Geo People
http://$Url/$UUU/981|user-agent=$user2
#EXTINF:-1,[OSN] OSN Movies First
http://$Url/$UUU/980|user-agent=$user2
#EXTINF:-1,[OSN] Nick JR
http://$Url/$UUU/979|user-agent=$user2
#EXTINF:-1,[OSN] OSN Living
http://$Url/$UUU/977|user-agent=$user2
#EXTINF:-1,[OSN] OSN Kids
http://$Url/$UUU/976|user-agent=$user2
#EXTINF:-1,[OSN] Pop up
http://$Url/$UUU/975|user-agent=$user2
#EXTINF:-1,[OSN] Movies Family
http://$Url/$UUU/974|user-agent=$user2
#EXTINF:-1,[OSN] OSN Box Office 1
http://$Url/$UUU/973|user-agent=$user2
#EXTINF:-1,[OSN] OSN ON DEMANDE 2
http://$Url/$UUU/972|user-agent=$user2
#EXTINF:-1,OSN MOVIES BOX OFFICE 2
http://$Url/$UUU/971|user-agent=$user2
#EXTINF:-1,[OSN] OSN Discovery HD
http://$Url/$UUU/969|user-agent=$user2
#EXTINF:-1,[OSN] Discovery ID
http://$Url/$UUU/968|user-agent=$user2
#EXTINF:-1,[OSN] OSN Comedy Central
http://$Url/$UUU/966|user-agent=$user2
#EXTINF:-1,OSN:  Fine Living
http://$Url/$UUU/2828|user-agent=$user2
#EXTINF:-1,OSN: Alfa Fann
http://$Url/$UUU/2829|user-agent=$user2
#EXTINF:-1,OSN:  Alfa Safwa
http://$Url/$UUU/2830|user-agent=$user2
#EXTINF:-1,OSN: OSN BBC First
http://$Url/$UUU/2831|user-agent=$user2
#EXTINF:-1,OSN: ON-DEMAND-EXTRA-HD
http://$Url/$UUU/2832|user-agent=$user2
line;
$art = <<<line
#EXTM3U
#EXTINF:-1,AR: ART Aflam 1
http://$Url/$UUU/997|user-agent=$user2
#EXTINF:-1,AR: ART Aflam  2
http://$Url/$UUU/102|user-agent=$user2
#EXTINF:-1,AR: ART Cinema
http://$Url/$UUU/103|user-agent=$user2
#EXTINF:-1,AR: ART Hekayat 1
http://$Url/$UUU/104|user-agent=$user2
#EXTINF:-1,AR: ART Hekayat 2
http://$Url/$UUU/105|user-agent=$user2
line;
$NETFLIX = <<<line
#EXTM3U
#EXTINF:-1,AR: NETFLIX ACTION +1
http://$Url/$UUU/3320|user-agent=$user2
#EXTINF:-1,AR: NETFLIX ACTION +2
http://$Url/$UUU/3321|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Action Top+
http://$Url/$UUU/3322|user-agent=$user2
#EXTINF:-1,AR: NETFLIX ANIME +2
http://$Url/$UUU/3324|user-agent=$user2
#EXTINF:-1,AR: NETFLIX ANIME +3
http://$Url/$UUU/3325|user-agent=$user2
#EXTINF:-1,AR: NETFLIX ANIME +4
http://$Url/$UUU/3326|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Comedy+++
http://$Url/$UUU/3327|user-agent=$user2
#EXTINF:-1,AR: NETFLIX COMEDY +1
http://$Url/$UUU/3328|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Comedy +2
http://$Url/$UUU/3329|user-agent=$user2
#EXTINF:-1,AR: Netflix DRAMA+
http://$Url/$UUU/3330|user-agent=$user2
#EXTINF:-1,AR: NETFLIX DRAMA +1
http://$Url/$UUU/3331|user-agent=$user2
#EXTINF:-1,AR: NETFLIX DRAMA +2
http://$Url/$UUU/3332|user-agent=$user2
#EXTINF:-1,AR: Netflix Horror+
http://$Url/$UUU/3333|user-agent=$user2
#EXTINF:-1,AR: NETFLIX HORROR +1
http://$Url/$UUU/3334|user-agent=$user2
#EXTINF:-1,AR: NETFLIX HORROR +3
http://$Url/$UUU/3336|user-agent=$user2
#EXTINF:-1,AR: NETFLIX HORROR +4
http://$Url/$UUU/3337|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Kids +1
http://$Url/$UUU/3339|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Kids +2
http://$Url/$UUU/3340|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Kids +3
http://$Url/$UUU/3341|user-agent=$user2
#EXTINF:-1,AR: NETFLIX Kids +4
http://$Url/$UUU/3342|user-agent=$user2
#EXTINF:-1,AR: NETFLIX S-FICTION
http://$Url/$UUU/3343|user-agent=$user2
#EXTINF:-1,NETFLIX N action
http://$Url/$UUU/2463|user-agent=$user2
#EXTINF:-1,Netflex Action
http://$Url/$UUU/2116|user-agent=$user2
#EXTINF:-1,Netflix SCF FI
http://$Url/$UUU/2041|user-agent=$user2
#EXTINF:-1,Netflix Kids
http://$Url/$UUU/2042|user-agent=$user2
#EXTINF:-1,Netflix Horror
http://$Url/$UUU/2043|user-agent=$user2
#EXTINF:-1,Netflix Comedy
http://$Url/$UUU/2044|user-agent=$user2
#EXTINF:-1,NETFLIX  ACTION
http://$Url/$UUU/2047|user-agent=$user2
#EXTINF:-1,Netflix Comedy 2
http://$Url/$UUU/2346|user-agent=$user2
#EXTINF:-1,NETFLIX_DRAMA
http://$Url/$UUU/2347|user-agent=$user2
#EXTINF:-1,NETFLIX_Musalsalat_3
http://$Url/$UUU/2349|user-agent=$user2
#EXTINF:-1,Netflix Horror 2
http://$Url/$UUU/2350|user-agent=$user2
#EXTINF:-1,Netflix Bollywood
http://$Url/$UUU/2351|user-agent=$user2
#EXTINF:-1,Netflix Drama+
http://$Url/$UUU/2354|user-agent=$user2
#EXTINF:-1,NETFLIX_KIDS2
http://$Url/$UUU/2357|user-agent=$user2
#EXTINF:-1,NETFLIX_THRILLER
http://$Url/$UUU/2358|user-agent=$user2
#EXTINF:-1,[NETFLIX] Action
http://$Url/$UUU/2418|user-agent=$user2
#EXTINF:-1,[NETFLIX] Thriller
http://$Url/$UUU/2419|user-agent=$user2
#EXTINF:-1,[NETFLIX] SCi-Fi
http://$Url/$UUU/2420|user-agent=$user2
#EXTINF:-1,[NETFLIX] Hendy
http://$Url/$UUU/2421|user-agent=$user2
#EXTINF:-1,[NETFLIX] Horror
http://$Url/$UUU/2422|user-agent=$user2
#EXTINF:-1,NETFLIX_Comedy+
http://$Url/$UUU/2505|user-agent=$user2
#EXTINF:-1,NETFLIX_SCI FI
http://$Url/$UUU/2506|user-agent=$user2
#EXTINF:-1,NETFLIX_HOME_CINEMA_1
http://$Url/$UUU/2507|user-agent=$user2
line;
$BeinE = <<<line
#EXTM3U
#EXTINF:-1,AR: beIN Movies 1 HD
http://$Url/$UUU/24|user-agent=$user2
#EXTINF:-1,AR: beIN Movies 2 HD
http://$Url/$UUU/17|user-agent=$user2
#EXTINF:-1,AR: beIN Movies 3 HD
http://$Url/$UUU/18|user-agent=$user2
#EXTINF:-1,AR: beIN Movies 4 HD
http://$Url/$UUU/19|user-agent=$user2
#EXTINF:-1,AR: beIN Series 1 HD
http://$Url/$UUU/20|user-agent=$user2
#EXTINF:-1,AR: beIN Series 2 HD
http://$Url/$UUU/21|user-agent=$user2
#EXTINF:-1,AR:  beIN Outdoor
http://$Url/$UUU/13|user-agent=$user2
#EXTINF:-1,AR:  beIN AMC
http://$Url/$UUU/14|user-agent=$user2
#EXTINF:-1,AR: beIN  Drama
http://$Url/$UUU/15|user-agent=$user2
#EXTINF:-1,AR: beIN  Gourmet
http://$Url/$UUU/16|user-agent=$user2
#EXTINF:-1,AR: beIN Jeem HD
http://$Url/$UUU/22|user-agent=$user2
#EXTINF:-1,AR: beIN Fox Movies
http://$Url/$UUU/23|user-agent=$user2
#EXTINF:-1,AR: beIN FATAFEAT HD
http://$Url/$UUU/25|user-agent=$user2
#EXTINF:-1,AR: beIN Baraeem
http://$Url/$UUU/2028|user-agent=$user2
#EXTINF:-1,AR: beIN Baraem 2
http://$Url/$UUU/2950|user-agent=$user2
#EXTINF:-1,AR :beIN_BOOMERANG
http://$Url/$UUU/2945|user-agent=$user2
#EXTINF:-1,AR: beIN DTX
http://$Url/$UUU/2946|user-agent=$user2
#EXTINF:-1,AR: beIN JUNIOR HD
http://$Url/$UUU/2947|user-agent=$user2
#EXTINF:-1,AR: beIN DREAMWORKS HD
http://$Url/$UUU/2948|user-agent=$user2
#EXTINF:-1,AR: beIN BOXOFFICE HD1
http://$Url/$UUU/3276|user-agent=$user2
#EXTINF:-1,AR:Cartoon Network Arabic
http://$Url/$UUU/2949|user-agent=$user2
#EXTINF:-1,AR: Seevii PRIME 1 HD
http://$Url/$UUU/2951|user-agent=$user2
#EXTINF:-1,AR: Seevii_PRIME 2 HD
http://$Url/$UUU/2952|user-agent=$user2
line;
$BeinFR = <<<line
#EXTM3U
#EXTINF:-1,|FR| BEIN SPORTS 1 HD
http://$Url/$UUU/1077|user-agent=$user2
#EXTINF:-1,|FR| BEIN SPORTS 2 HD
http://$Url/$UUU/1078|user-agent=$user2
#EXTINF:-1,|FR| BEIN SPORTS 3 HD
http://$Url/$UUU/1079|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 4 HD
http://$Url/$UUU/1080|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 5 HD
http://$Url/$UUU/1081|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 7 HD
http://$Url/$UUU/1083|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 8 HD
http://$Url/$UUU/1084|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 9 HD
http://$Url/$UUU/1085|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 10 HD
http://$Url/$UUU/1086|user-agent=$user2
#EXTINF:-1,|FR| BEIN MAX 6 HD
http://$Url/$UUU/1082|user-agent=$user2
line;
$RMC = <<<line
#EXTM3U
#EXTINF:-1,|FR| RMC SPORT 1 HD
http://$Url/$UUU/1073|user-agent=$user2
#EXTINF:-1,|FR| RMC SPORT 2 HD
http://$Url/$UUU/1074|user-agent=$user2
#EXTINF:-1,|FR| RMC SPORT 3 HD
http://$Url/$UUU/1075|user-agent=$user2
#EXTINF:-1,|FR| RMC SPORT 4 HD
http://$Url/$UUU/1076|user-agent=$user2
line;
$BEOUT = <<<line
#EXTM3U
#EXTINF:-1,BEOUT 1 FHD
http://$Url/$UUU/3385|user-agent=$user2
#EXTINF:-1,BEOUT 1 SD
http://$Url/$UUU/3394|user-agent=$user2
#EXTINF:-1,BEOUT 2 SD
http://$Url/$UUU/3395|user-agent=$user2
#EXTINF:-1,BEOUT 1 HD
http://$Url/$UUU/2991|user-agent=$user2
#EXTINF:-1,BEOUT 2 HD
http://$Url/$UUU/2992|user-agent=$user2
#EXTINF:-1,BEOUT 3 HD
http://$Url/$UUU/2993|user-agent=$user2
#EXTINF:-1,BEOUT ACTION
http://$Url/$UUU/2994|user-agent=$user2
#EXTINF:-1,BEOUT Arabia
http://$Url/$UUU/2995|user-agent=$user2
#EXTINF:-1,BEOUT Cinema
http://$Url/$UUU/2996|user-agent=$user2
#EXTINF:-1,BEOUT Masr7 Masr (مسرح مصر)
http://$Url/$UUU/2997|user-agent=$user2
#EXTINF:-1,BEOUT Scare tv
http://$Url/$UUU/2998|user-agent=$user2
#EXTINF:-1,BEOUT ShowTime1
http://$Url/$UUU/2999|user-agent=$user2
#EXTINF:-1,BEOUT showTime2
http://$Url/$UUU/3000|user-agent=$user2
line;
$BeinFH = <<<line
#EXTM3U
#EXTINF:-1,beIN SPORTS FullHD1 PR
http://$Url/$UUU/3221|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD2 PR
http://$Url/$UUU/3222|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD3 PR
http://$Url/$UUU/3223|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD1
http://$Url/$UUU/3224|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD2
http://$Url/$UUU/3225|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD3
http://$Url/$UUU/3226|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD4
http://$Url/$UUU/3230|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD5
http://$Url/$UUU/3227|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD6
http://$Url/$UUU/3228|user-agent=$user2
#EXTINF:-1,beIN SPORTS FullHD7
http://$Url/$UUU/3229|user-agent=$user2
line;
$Bein4K = <<<line
#EXTM3U
#EXTINF:-1,AR: beIN Sports 1 4K HEVC PR
http://$Url/$UUU/459|user-agent=$user2
#EXTINF:-1,AR: beIN Sports 2 4K HEVC PR
http://$Url/$UUU/450|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  3 4K HEVC PR
http://$Url/$UUU/451|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  1 4K HEVC
http://$Url/$UUU/452|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  2 4K HEVC
http://$Url/$UUU/453|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  3 4K HEVC
http://$Url/$UUU/454|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  4 4K HEVC
http://$Url/$UUU/455|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  5 4K HEVC
http://$Url/$UUU/456|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  6 4K HEVC
http://$Url/$UUU/457|user-agent=$user2
#EXTINF:-1,AR: beIN Sports  7 4K HEVC
http://$Url/$UUU/458|user-agent=$user2
line;
$BeinH = <<<line
#EXTM3U
#EXTINF:-1,AR: beIN Soprt HD
http://$Url/$UUU/960|user-agent=$user2
#EXTINF:-1,AR: beIN sports News
http://$Url/$UUU/2051|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD1 PR
http://$Url/$UUU/46|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD2 PR
http://$Url/$UUU/47|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD3 PR
http://$Url/$UUU/48|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD1
http://$Url/$UUU/49|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD2
http://$Url/$UUU/50|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD3
http://$Url/$UUU/51|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD4
http://$Url/$UUU/52|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD5
http://$Url/$UUU/53|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD6
http://$Url/$UUU/54|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD7
http://$Url/$UUU/55|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD11
http://$Url/$UUU/3001|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS HD12
http://$Url/$UUU/3002|user-agent=$user2
#EXTINF:-1,beIN Sport XTRA 1 HD
http://$Url/$UUU/3409|user-agent=$user2
#EXTINF:-1,beIN Sport XTRA 2 HD
http://$Url/$UUU/3410|user-agent=$user2
line;
$BeinS = <<<line
#EXTM3U
#EXTINF:-1,AR: beIN SPORTS SD1
http://$Url/$UUU/56|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD2
http://$Url/$UUU/57|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD3
http://$Url/$UUU/58|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD4
http://$Url/$UUU/59|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD5
http://$Url/$UUU/60|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD6
http://$Url/$UUU/93|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD7
http://$Url/$UUU/92|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD8
http://$Url/$UUU/91|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD9
http://$Url/$UUU/61|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS SD10
http://$Url/$UUU/1459|user-agent=$user2
line;
$BeinL = <<<line
#EXTM3U
#EXTINF:-1,AR: beIN SPORTS LOW1
http://$Url/$UUU/62|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS LOW2
http://$Url/$UUU/63|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS LOW3
http://$Url/$UUU/64|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS LOW4
http://$Url/$UUU/65|user-agent=$user2
#EXTINF:-1,AR: beIN SPORTS LOW5
http://$Url/$UUU/66|user-agent=$user2
#EXTINF:-1,AR:bein sport low6
http://$Url/$UUU/2108|user-agent=$user2
#EXTINF:-1,AR:bein sport low7
http://$Url/$UUU/2109|user-agent=$user2
#EXTINF:-1,AR:bein sport low8
http://$Url/$UUU/2110|user-agent=$user2
#EXTINF:-1,AR:bein sport low9
http://$Url/$UUU/2111|user-agent=$user2
#EXTINF:-1,AR: bein sport low10
http://$Url/$UUU/2112|user-agent=$user2
line;
$shahid = <<<line
#EXTM3U
#EXTINF:-1,shahid TV
http://$Url/$UUU/2464|user-agent=$user2
#EXTINF:-1,[Shahid Action]
http://$Url/$UUU/2423|user-agent=$user2
#EXTINF:-1,[Shahid Aflam]
http://$Url/$UUU/2424|user-agent=$user2
#EXTINF:-1,[Shahid Aflam2]
http://$Url/$UUU/2425|user-agent=$user2
#EXTINF:-1,[Shahid HINDI]
http://$Url/$UUU/2426|user-agent=$user2
#EXTINF:-1,[Shahid HORROR]
http://$Url/$UUU/2427|user-agent=$user2
#EXTINF:-1,[Shahid RMANCE]
http://$Url/$UUU/2428|user-agent=$user2
line;
$Aroma = <<<line
#EXTM3U
#EXTINF:-1,Aroma Action
http://$Url/$UUU/2953|user-agent=$user2
#EXTINF:-1,Aroma Arabic Films
http://$Url/$UUU/2954|user-agent=$user2
#EXTINF:-1,Aroma Kids
http://$Url/$UUU/2955|user-agent=$user2
#EXTINF:-1,Aroma Discovery
http://$Url/$UUU/2956|user-agent=$user2
#EXTINF:-1,Aroma Drama Films
http://$Url/$UUU/2957|user-agent=$user2
#EXTINF:-1,Aroma Masra7yat
http://$Url/$UUU/2958|user-agent=$user2
#EXTINF:-1,Aroma Horror
http://$Url/$UUU/2959|user-agent=$user2
#EXTINF:-1,Aroma Zaman
http://$Url/$UUU/2960|user-agent=$user2
#EXTINF:-1,Aroma WWE
http://$Url/$UUU/2961|user-agent=$user2
#EXTINF:-1,Aroma  Box Office 1
http://$Url/$UUU/2962|user-agent=$user2
#EXTINF:-1,Aroma  Box Office 2
http://$Url/$UUU/2963|user-agent=$user2
#EXTINF:-1,Aroma  Box Office 3
http://$Url/$UUU/2964|user-agent=$user2
#EXTINF:-1,Aroma  Box Office 4
http://$Url/$UUU/2965|user-agent=$user2
line;
$Mix = <<<line
#EXTM3U
#EXTINF:-1,Mix Action
http://$Url/$UUU/3372
#EXTINF:-1,Mix Crime
http://$Url/$UUU/3374
#EXTINF:-1,Mix Mystery
http://$Url/$UUU/3375
#EXTINF:-1,Mix Sport Movies
http://$Url/$UUU/3376
line;
$iflix = <<<line
#EXTM3U
#EXTINF:-1,iflix Arabia
http://$Url/$UUU/3378|user-agent=$user2
#EXTINF:-1,iflix Turk
http://$Url/$UUU/3379|user-agent=$user2
#EXTINF:-1,iflix Action
http://$Url/$UUU/3380|user-agent=$user2
#EXTINF:-1,iflix Comedy
http://$Url/$UUU/3381|user-agent=$user2
#EXTINF:-1,iflix moudablaj
http://$Url/$UUU/3382|user-agent=$user2
#EXTINF:-1,iflix Prime
http://$Url/$UUU/3383|user-agent=$user2
line;
$mbc = <<<line
#EXTM3U
#EXTINF:-1,MYHD: MBC 1 HD
http://$Url/$UUU/845|user-agent=$user2
#EXTINF:-1,MYHD: MBC 2 HD
http://$Url/$UUU/846|user-agent=$user2
#EXTINF:-1,MYHD: MBC 3 HD
http://$Url/$UUU/847|user-agent=$user2
#EXTINF:-1,MYHD: MBC 4 HD
http://$Url/$UUU/848|user-agent=$user2
#EXTINF:-1,MYHD: MBC 5 HD
http://$Url/$UUU/2114|user-agent=$user2
#EXTINF:-1,MYHD: MBC Bollywood HD
http://$Url/$UUU/849|user-agent=$user2
#EXTINF:-1,MYHD: MBC Massr HD
http://$Url/$UUU/850|user-agent=$user2
#EXTINF:-1,MYHD: MBC Masr 2 HD
http://$Url/$UUU/851|user-agent=$user2
#EXTINF:-1,MYHD: MBC Drama HD
http://$Url/$UUU/852|user-agent=$user2
#EXTINF:-1,MYHD: MBC Action HD
http://$Url/$UUU/853|user-agent=$user2
#EXTINF:-1,MYHD: MBC Max HD
http://$Url/$UUU/854|user-agent=$user2
#EXTINF:-1,MYHD: MBC Iraq HD
http://$Url/$UUU/855|user-agent=$user2
#EXTINF:-1,MYHD: MBC Drama+ HD
http://$Url/$UUU/856|user-agent=$user2
#EXTINF:-1,MYHD: MBC+Variety HD
http://$Url/$UUU/857|user-agent=$user2
#EXTINF:-1,MYHD: FOX Rewayat HD
http://$Url/$UUU/859|user-agent=$user2
#EXTINF:-1,MYHD: FOX Life HD
http://$Url/$UUU/860|user-agent=$user2
#EXTINF:-1,MYHD: Family Movies HD
http://$Url/$UUU/861|user-agent=$user2
#EXTINF:-1,MYHD: FOX Crime HD
http://$Url/$UUU/862|user-agent=$user2
#EXTINF:-1,MYHD: Fox Action
http://$Url/$UUU/863|user-agent=$user2
#EXTINF:-1,MYHD: Film box
http://$Url/$UUU/864|user-agent=$user2
#EXTINF:-1,MYHD: Docu Box HD
http://$Url/$UUU/865|user-agent=$user2
#EXTINF:-1,MYHD: Fight Box HD
http://$Url/$UUU/866|user-agent=$user2
#EXTINF:-1,MYHD: Fox Movies
http://$Url/$UUU/867|user-agent=$user2
#EXTINF:-1,MYHD: Planet Earth HD
http://$Url/$UUU/869|user-agent=$user2
#EXTINF:-1,MYHD: Discovery SC HD
http://$Url/$UUU/871|user-agent=$user2
#EXTINF:-1,MYHD: Gulli Arabic HD
http://$Url/$UUU/872|user-agent=$user2
#EXTINF:-1,MYHD: Duck TV HD
http://$Url/$UUU/874|user-agent=$user2
#EXTINF:-1,MBC_1 sd
http://$Url/$UUU/2771|user-agent=$user2
#EXTINF:-1,MBC_2 sd
http://$Url/$UUU/2772|user-agent=$user2
#EXTINF:-1,MBC_3 sd
http://$Url/$UUU/2773|user-agent=$user2
#EXTINF:-1,MBC_4 sd
http://$Url/$UUU/2774|user-agent=$user2
#EXTINF:-1,,MBC_5 sd
http://$Url/$UUU/2775|user-agent=$user2
#EXTINF:-1,MBC_MAX sd
http://$Url/$UUU/2776|user-agent=$user2
#EXTINF:-1,MBC_ACTION sd
http://$Url/$UUU/2777|user-agent=$user2
#EXTINF:-1,MBC_DRAMA sd
http://$Url/$UUU/2778|user-agent=$user2
#EXTINF:-1,MBC_MASR sd
http://$Url/$UUU/2779|user-agent=$user2
#EXTINF:-1,MBC_MASR 2 sd
http://$Url/$UUU/2780|user-agent=$user2
#EXTINF:-1,MBC_FM_PANORAMA sd
http://$Url/$UUU/2781|user-agent=$user2
line;
$BeinMax = <<<line
#EXTM3U
#EXTINF:-1,max 1hd
http://$Url/$UUU/3411|user-agent=$user2
#EXTINF:-1,max2 hd
http://$Url/$UUU/3412|user-agent=$user2
line;
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinMax.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinMax.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinMax.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinMax);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\OSN.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\OSN.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\OSN.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$OSN);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\art.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\art.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\art.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$art);
		@fclose($fp);
	}
## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\mbc.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\mbc.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\mbc.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$mbc);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\iflix.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\iflix.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\iflix.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$iflix);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\Mix.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\Mix.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\Mix.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$Mix);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\Aroma.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\Aroma.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\Aroma.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$Aroma);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\shahid.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\shahid.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\shahid.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$shahid);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinL.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinL.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinL.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinL);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinS.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinS.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinS.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinS);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinH.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinH.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinH.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinH);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\Bein4K.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\Bein4K.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\Bein4K.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$Bein4K);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinFH.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinFH.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinFH.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinFH);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinFR.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinFR.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinFR.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinFR);
		@fclose($fp);
	}	
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BEOUT.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BEOUT.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BEOUT.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BEOUT);
		@fclose($fp);
	}	
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\RMC.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\RMC.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\RMC.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$RMC);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\BeinE.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinE.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\BeinE.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$BeinE);
		@fclose($fp);
	}
	## START WRITING THE ARTICLE FILE
	if (file_exists("C:\Users\proeg\Dropbox\Alkass\NETFLIX.m3u"))
		$file_path = "C:\Users\proeg\Dropbox\Alkass\NETFLIX.m3u";
	else
		$file_path = "C:\Users\proeg\Dropbox\Alkass\NETFLIX.m3u";
	if ($fp = @fopen($file_path,'w')){
		@fwrite($fp,$NETFLIX);
		@fclose($fp);
	}
//--------------------------------------------------------------------
?>
