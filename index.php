<?php 
    
$before_hash = 'magnet:?xt=urn:btih:';
$after_hash = '&dn=&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80&tr=udp%3A%2F%2Fopentor.org%3A2710&tr=udp%3A%2F%2Ftracker.ccc.de%3A80&tr=udp%3A%2F%2Ftracker.blackunicorn.xyz%3A6969&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969';


    include_once('simple_html_dom.php');

$s = $_GET["s"];

$html = file_get_html('https://torrentz2.eu/search?f='.$s.'&safe=0');


$items = $html->find('div.results dl');  
 
foreach($items as $post) {
    # remember comments count as nodes

    $hash = substr($post->find('dt a',0)->href,1);    
    

    

    $articles[] = array("hash"=>$hash,
                        "title"=>$post->find('dt a',0)->innertext,
                        "size"=>$post->find('dd',0)->children(2)->outertext,
                        "peer"=>$post->find('dd',0)->children(3)->outertext,
                        "seed"=>$post->find('dd',0)->children(4)->outertext);
}
?><!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FixedPlus - Bootstrap Admin Dashboard Template</title>

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
		
			<div class="container-fluid mt-20">
			<div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form role="form" class="form-inline" action="?">
                            <div class="input-group m-b col-md-12" >
                                                
                                                <input type="text" class="form-control" name="s" value="<?php echo $s; ?>">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-default">Go!</button>
                                                </span>
                                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

			</div>

        <section class="container-fluid">

					
								<div class="row">
										<div class="col-sm-12">
												<div class="card">
														<div class="card-header card-default">
																Results
														</div>
														<div class="card-body">
																<div class="table-responsive">
																		<table class="table table-striped">
																			<?php 
																			foreach ($articles as $key => $value) {
                                                                                    echo '<tr>';
                                                                                    echo '<td width="70%"><a href='.$before_hash.$value['hash'].$after_hash.'">'.$value['title'].'</a></td>';
                                                                                    echo '<td>';
                                                                                        echo $value['size'];
                                                                                        echo ' <b>('. $value['peer'].') </b>';
                                                                                        echo ' ('. $value['seed'].') ';
                                                                                        echo '</td>';
                                                                                    echo '<td><button type="button" class="btn btn-default classloader">Add</button></td>';
                                                                                    echo '</tr>';
																				}
																		 ?>	
																				
																				
																		</table>
																</div>

																

																<div id="dialog-overlay" title="Overlay dialog">
																		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
																		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
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
        <script language="javascript">
        $(function(){
        $(".classloader").click(function () {
        // $.post('http://localhost:3300/login', // url
        //     {
        //         data: 'username=mali&password=sspspsfdp'
        //     }, // data to be submit
        //     function (data, status, jqXHR) { // success callback
        //         $.post('http://localhost:3300/command/download', // url
        //             {
        //                 urls: 'magnet:?xt=urn:btih:7ba0c6bd9b4e52ea2ad137d02394de7d83b98091&dn=&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A80&tr=udp%3A%2F%2Fopentor.org%3A2710&tr=udp%3A%2F%2Ftracker.ccc.de%3A80&tr=udp%3A%2F%2Ftracker.blackunicorn.xyz%3A6969&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969&tr=udp%3A%2F%2Ftracker.leechers-paradise.org%3A6969"'
        //             }, // data to be submit
        //             function (data, status, jqXHR) { // success callback
        //                 console.log("success");
        //             })
        //     })
        // });
        });
        </script>
    </body>
</html>