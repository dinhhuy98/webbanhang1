
<?php
//$phantrang = loadClass('') 
$category=loadModel('Category');
  $mainmenu1=$category->catergoryMainMenu(0);
  $htmlmainmenu="";
  foreach($mainmenu1 as $m1){
      $htmlmainmenu.="<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='index.php?option=sanpham&cat=".$m1['link']."'>".mb_strtoupper($m1['name'],'utf8')."<span class='caret'></span></a><ul class='dropdown-menu'>";
      $mainmenu2=$category->catergoryMainMenu($m1['id']);
      foreach($mainmenu2 as $m2)
        $htmlmainmenu.="<li><a href='index.php?option=sanpham&cat=".$m2['link']."'>".mb_strtoupper($m2['name'],'utf8')."</a></li>";
      $htmlmainmenu.="</ul></li>";
  }
  echo $htmlmainmenu; 
   ?>