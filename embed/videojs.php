<?php
header('Access-Control-Allow-Origin: *');
?>
<!doctype html>
<html>
    <head>
        <title>Google </title>
        <meta charset="utf-8" />
        <meta name="robots" content="noindex" />
        <meta name="googlebot" content="noindex" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
        <!-- <link type="text/css" rel="stylesheet" href="../dist/video.js-5.10.4/dist/video-js.css"/> -->
        <!-- <link href="../dist/videojs-resolution-switcher/lib/videojs-resolution-switcher.css" rel="stylesheet"/> -->
        <link rel="stylesheet" type="text/css" href="http://vjs.zencdn.net/4.7.1/video-js.css" />
        <style>
            body {
                padding:0;
                margin:0;
            }
            .wrapper-video {
                width: 100%;
                height:100vh;
            }
            #my-video {
                width:100% !important;
                height:100%;
            }
        </style>
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
    $context = stream_context_create( $options );
    $dataDrive = @file_get_contents($urlIhik . $idDrive, false, $context);
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
        $object = array(
            "label" => $row->label,
            "file" => $row->filename."&title=" . $title . "-".$row->label."p&format=getlink/video.mp4"
        );
        $sourceMatang[] = $object;
    }

    extract($_GET);
?>
    <!-- WRAPPER VIDEO ELEMENT -->
    <div class="wrapper-video">
        <video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered" controls  poster="<?php echo $baseurl; ?>/embed/?bypass=<?php echo $thumbnail; ?>" width="100%" height="100%">
            <?php
                // VIDEO
                foreach ($sourceMatang as $s) {
                    $mirror = json_decode(json_encode($s));
                    ?>
                        <source src="<?php echo $mirror->file; ?>" type="video/mp4" label="<?php echo $mirror->label; ?>p" res="<?php echo $mirror->label; ?>"></source>
                    <?php
                }
                // SUBTITLE
                if (@$sub) {
                    ?>
                        <track kind="captions" srclang="id" src="<?php echo $baseurl; ?>/embed/?bypass=<?php echo @$sub; ?>" label="Indonesia" default>
                    <?php
                }
            ?>
        </video>
    </div>
    <!-- END WRAPPER VIDEO ELEMENT -->
    <script src="../dist/js/jquery.min.js" type="text/javascript"></script>
    <!-- <script src="../dist/video.js-5.10.4/dist/video.min.js"></script> -->
    <script src="http://vjs.zencdn.net/4.7.1/video.js"></script>
    <script src="../dist/js/video-quality-selector.js"></script>

    <script type="text/javascript">
        var plugins = {};
        var player = videojs("#my-video");

        function initResolution() {
            player.videoJsResolutionSwitcher({
                default : 2,
                dynamicLabel : true
            });
            $(".vjs-audio-button").remove();
        }
        initResolution();        
    </script>
    <?php include 'tracking.php'; ?>
</body>
</html>
