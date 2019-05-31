<?php 
    
$f = "./rss.txt";


if($_GET["ac"]=="rss"){

    
    $a = explode("\n", file_get_contents($f));
    
    $before_hash = 'magnet:?xt=urn:btih:';
    // $after_hash = '&amp;&tr=udp://tracker.openbittorrent.com:80&tr=udp://opentor.org:2710&tr=udp://tracker.ccc.de:80&tr=udp://tracker.blackunicorn.xyz:6969&tr=udp://tracker.coppersurfer.tk:6969&tr=udp://tracker.leechers-paradise.org:6969';
    $after_hash = "&amp;tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80"
    . "&amp;tr=udp%3A%2F%2Fopentor.org%3A2710"
    . "&amp;tr=udp%3A%2F%2Ftracker.ccc.de%3A80"
    . "&amp;tr=udp%3A%2F%2Ftracker.blackunicorn.xyz%3A6969"
    . "&amp;tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969"
    . "&amp;tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969";
    
    //header("content-type:text/xml");
echo '<rss xmlns:atom="http://www.w3.org/2005/Atom" version="2.0">
   <channel>
      <title>RSS for Q</title>
      <description>RSS for Q</description>
      <link>http://nomansland.info</link>';
    foreach($a as $e) {
        if($e){
        echo "\n<item>\n";
        echo "<title>$e</title>";
        echo '
        <link>'.$before_hash.$e.$after_hash.'</link>
        ';
        echo "</item>\n";
    }}
    echo ' </channel>
    </rss>';







} elseif($_GET["ac"]=="add") {
    $mf = fopen($f, 'a') or die("Unable to open file!");
    fwrite($mf,  $_GET["hash"]."\n");
    fclose($mf);
    header('Location: '.'/torrent-search/rss.php');

}else{
    


?><!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RSS</title>

        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
				<link href="assets/lib/jquery-ui/jquery-ui.css" rel="stylesheet">

        <!-- Custom Css-->
        <link href="assets/css/style.css" rel="stylesheet">
		
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="horizontal">


        
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		
			<div class="container mt-20">
			<div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form role="form" class="form-inline" action="?">
                            <div class="input-group m-b col-md-12" >
                                                
                                                <input type="text" class="form-control" name="hash" value="">
                                                <input type="hidden" class="form-control" name="ac" value="add">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-default">Add!</button>
                                                </span>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            

            <section class="container">

					
                <div class="row">
                        <div class="col-sm-12">
                                <div class="card">
                                        
                                        <div class="card-body">
                                                <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <?php 
                                                                $a = explode("\n", file_get_contents($f));
                                                                //header("content-type:text/xml");

                                                                foreach($a as $e) {
                                                                    if($e){
                                                                    echo "<tr><td>$e<td></tr>";
                                                                }}
                                                            ?>	
                                                        </table>
                                                </div>

                                        </div>
                                </div>

                        </div>
							
				</div>


        </section>

        <!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->

        <!-- Common Plugins -->
        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
				<script src="assets/lib/bootstrap/js/popper.min.js"></script>
				<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
				<script src="assets/lib/ace-menu/ace-responsive-menu-min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
				<script src="assets/js/custom.js"></script>
				
				<script src="assets/lib/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/js/jquery.ui.custom.js"></script>
       
    </body>
</html>

<?php 
}
?>