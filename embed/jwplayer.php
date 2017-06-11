<!doctype html>
<html>
    <head>
        <title>Google</title>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex" />
        <meta name="googlebot" content="noindex" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
        <script src="../dist/js/jquery.min.js" type="text/javascript"></script>
    </head>
<body>
<?php
    include('curl.php');
    include('../config.php');
    $Curl = new EmbedCurl();

    $linkDrive = base64_decode(urldecode(@$_GET['url']));
    $htmlDrive = $Curl->file_get_contents_curl($linkDrive);

    $doc = new DOMDocument();
    @$doc->loadHTML($htmlDrive);
    $nodes = $doc->getElementsByTagName("title");
    $title = str_replace(" - Google Drive", "", $nodes->item(0)->nodeValue);

    $idDrive = "";
    if ($linkDrive) {
        $pecahLink = explode("/", $linkDrive);
        $idDrive = $pecahLink[5];
    }
    $options = array(
        "http" => array(
            "header"     => "Content-Type: application/json\n",
            "method"     => "GET"
        )
    );
    $urlIhik = "http://file.tangituru.com/file/get_video_info/";
    $dataDrive = $Curl->file_get_contents_curl($urlIhik . $idDrive);
    if( ( $response = json_decode( $dataDrive ) ) === NULL )
    {
        exit( "File tidak tersedia" );
    }
    $jsonDrive = json_decode($dataDrive);
    if ($jsonDrive->status != 200) {
        echo "File tidak tersedia";
        die();
    }
    $sourceMentah = $jsonDrive->data;
    $sourceMatang = array();
    foreach ($sourceMentah as $row) {
        $file = str_replace("explorer", "file.tangituru.com", $row->filename);
        $object = array(
            "label" => $row->label,
            "file" => $file."&title=" . $title . "-".$row->label."p",
            "type" => "video/mp4"
        );
        $sourceMatang[] = $object;
    }

    extract($_GET);
?>
<!-- Begin player -->
<style type="text/css">
    * {
        margin: 0;
        padding: 0
    }

    #player {
        position: absolute;
        width: 100%!important;
        height: 100%;
    }
</style>
<script type="text/javascript" src="https://content.jwplatform.com/libraries/B0jgHhOE.js"></script>
<div id="player" class="player"></div>

<script type="text/javascript">
    jwplayer.key = "/IzEqVjRNGbvR6o5C9Fa0V+d5RKsU6WMks6OoUQ==";
    var playerInstance = jwplayer("player");
    playerInstance.setup({
        id: 'player',
        controls: true,
        displaytitle: true,
        flashplayer: "<?php echo $baseurl; ?>/jwplayer.flash.swf",
        width: "100%",
        height: "100%",
        aspectratio: "16:9",
        fullscreen: "true",
        primary: 'html5',
        abouttext: "Google",
        aboutlink: "http://google.com/",
        provider: 'http',
        autostart: false,
        image: "<?php echo $baseurl; ?>/embed/?bypass=<?php echo $thumbnail; ?>",
        sources: <?php echo json_encode($sourceMatang, JSON_UNESCAPED_SLASHES); ?>,
        <?php
        if ($sub) {
            ?>
            tracks:[{file:'<?php echo $baseurl; ?>/embed/?bypass=<?php echo @$sub; ?>', label:'Indonesia', kind:'captions', "default":true}],captions:{color:'#fffbfb',fontSize:15,backgroundOpacity:30}
            <?php
        }
        ?>
    });
</script>
