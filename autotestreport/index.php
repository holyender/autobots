<html>
<body>

<?php 
$users = array(
 "user" => "202cb962ac59075b964b07152d234b70"
);

if(isset($_POST['Submit'])) {
  $password = isset($users[$_POST['user']]) ? $users[$_POST['user']] : NULL;
    if($password !== NULL && $password == md5($_POST['password'])) {
      $_SESSION['user'] = $_POST['user'];
     // header('Location:  ' . $_SERVER['PHP_SELF']);
?>
    <html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>AUTOMATION TEST REPORT SYSTEM</title>
      <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
   <div id="page" class="container">
      <header class="header-region" role="banner">
         <div id="logo"><img src="./image/logo.png" alt="Home" title="Home"></div>
         <h2 id="header_title">AUTOMATION TEST REPORT SYSTEM</h2>
          <div id="logout_btn"><button class="tool_button" onclick="location.href='?logout'">Logout</button></div>
     </header>
     <content class="content-region" role="banner">
      <div class="panel-cus">
      <?php
        $path = "./report/backstop_data/";
    $dir = opendir($path);
    // get each entry
    while($entryName = readdir($dir)) {
        $dirArray[] = $entryName;
    }
    // close directory
    closedir($dir);
    //print_r($dirArray);
    //  count elements in array
    $indexCount = count($dirArray);
    //Print ("$indexCount files<br>\n");
    // sort 'em
    rsort($dirArray);

// print 'em
print("<table cellpadding='10'>");
print("<TR><TH>Visual Regression Report</TH><TH>Acceptance Report</TH><th>Date</th></TR>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 6) == "ARhtml"){ // don't list hidden files
        print("<tr><td><a href=\"$path$dirArray[$index]/index.html\">$dirArray[$index]</a></td>");
        //print("<td>");
        print("<td><a href=\"$path$dirArray[$index]/_output/report.html\">$dirArray[$index]/_output</a></td>");
        print("<td>");
        print(date("Y-m-d H:i:s", filectime($path.$dirArray[$index])));
        print("</td>");
        print("</tr>\n");
    }
}
print("</table>\n");
?>
</div>
     </content>
    </div>
  </body>
</html>
<?php   
    }else {
      include 'form.php';
      echo '<script language="javascript">';
        echo 'alert("Incorrect Username or password")';
        echo '</script>';

    }
}else {
       include 'form.php';
}

?>