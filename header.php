<?php
    //구매기록 들어갈때 세션 스타트 에러 무시
    error_reporting(E_ALL);
    ini_set("display_errors", 0);


    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
?>


 <hr cla>
     <div class="topbox">
        <div>
            <?php
                if(!$userid) {
            ?>

            &nbsp;<a href="login_form.php">LOGIN</a>
            &nbsp;<a href="member_form.php">JOIN</a> &nbsp; 
            &nbsp;<a href="notice_list.php">NOTICE</a> &nbsp; 
            &nbsp;<a href="qna_list.php">Q&A</a> &nbsp;
            &nbsp;<a href="review_list.php">REVIEW</a> &nbsp;
            <?php
              } else {
                    $logged = $username."(".$userid.")님";
            ?>
            
            &nbsp;<?=$logged?> &nbsp;
            &nbsp;<a href="logout.php">LOGOUT</a> &nbsp;
            &nbsp;<a href="member_modify_form.php">MYPAGE</a> &nbsp;
            &nbsp;<a href="shopping.php">ORDER</a> &nbsp;
            &nbsp;<a href="notice_list.php">NOTICE</a> &nbsp; 
            &nbsp;<a href="qna_list.php">Q&A</a> &nbsp;
            &nbsp;<a href="review_list.php">REVIEW</a> &nbsp;
            
            <?php
                }
            ?>
        </div>
  	</div>

    	<hr>
    	<div id="top">
        	<div id="topleft">
        	<a href="main.php"><img src="./img/hamster.png" height="100px" width="80px" class="logo">
        	<h1 class="font-align">해씨별</h1></a>
         
    	</div>
    	<div id="topright">
        	<img src="./img/nature.PNG" class="nat">
        	
    	</div>
    </div>

     <hr class="hr1">
     <div id="center">
   		 <div id=menu>
        	<ul id="menustyle">
            	<li id="a"><a href="category5.php">베딩/모래</a></li>
            	<li id="a"><a href="category4.php">은신처/화장실</a></li>
            	<li id="a"><a href="category3.php">급수/급식기</a></li>
            	<li id="a"><a href="category2.php">쳇바퀴/장난감</a></li>
            	<li id="a"><a href="category1.php">하우스/이동장</a></li>
        	</ul>
    	</div>
     </div>

    <hr class="hr1"> 
