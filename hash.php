<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
</head>
<body>
<p class="classloader">Click Here</p>
<div id="contenthere"></div>
<!-- <pre> -->
    <?php 
    
    include_once('simple_html_dom.php');

$h = $_GET["h"];

$html = file_get_html('https://torrentz2.eu/'.$h);


$items = $html->find('div.files ul',0)->innertext;  
 
// foreach($items as $post) {
//     # remember comments count as nodes

//     // $hash = substr($post->find('dt a',0)->href,1);    

//     // $articles[] = array("hash"=>$hash,
//     //                     "title"=>$post->find('dt a',0)->innertext,
//     //                     "size"=>$post->find('dd',0)->children(2)->outertext,
//     //                     "peer"=>$post->find('dd',0)->children(3)->outertext,
//     //                     "seed"=>$post->find('dd',0)->children(4)->outertext);
// }



// var_dump($items);

    ?>
    <ul><?php echo $items; ?></ul>
</body>
<script language="javascript">
$(function(){
  $(".classloader").click(function(){
    $("#contenthere").load("https://ip.bayhan.ca");
  });
});
</script>
</script>
</html>