<p>This is the index page</p>
       
<?php
/**
* MAIN HOME INDEX
*/
 $action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
 $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
 $action = 'home';
}
if($action == NULL){
 $action = 'assignm';
}


}

switch ($action) {
    
 case 'home':
  include ($_SERVER['DOCUMENT_ROOT'].'/web/home.php');
break;
 
  case 'assignm':
     include ($_SERVER['DOCUMENT_ROOT'].'/web/hello.html');
     break;

 
}

?>
        
        
        
        

        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73953218-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Code for Camden Convertion Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 854086913;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "piifCJityHIQgaqhlwM";
var google_conversion_value = 3.00;
var google_conversion_currency = "USD";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/854086913/?value=3.00&amp;currency_code=USD&amp;label=piifCJityHIQgaqhlwM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

        
        <div></div>
    </body>
</html>


