<!DOCTYPE html>
<html>
<head>
	<title>Callum's Music - DEAF KEV - Invincible</title>
	<link rel="stylesheet" href="master.css">
  <link rel="icon" href="../res/favicon.png">
</head>
<body>
	<div class="header">
		<div class="title" onclick="gohome()">
			<h1>Callum's Music</h1>
		</div>
	</div>
	<div class="body">
    <p style="margin-top: 20px; font-size: 25px;">
      <img src="../res/C418 - Sweden Cover Art.png"
    alt="Cover Art" width="250px" height="250px" class="img">
		C148 - Sweden</p>
    <br>
    <audio controls controlsList="nodownload" id="noContextMenu">
      <source src="../music/C418 - Sweden.mp3"
      type="audio/mpeg">
    </audio>
		<br><br>
		<p>Don't refresh the page after posting a comment!</p>
		<p>Doing this will result in <b>Reposting the comment!</b></p>
    <!-- Comments Section -->
    <form action="" method="POST">
      <label> Name:
        <input type="text" name="Name" style="width: 225px" required>
      </label>
      <br><br>
      <label> Comment: <br>
        <textarea name="Comment" style="width: 300px" required></textarea>
      </label>
      <br><br>
      <input type="submit" name="Submit" value="Submit Comment">
  </form>
	</div>
  <script src="script.js" charset="utf-8"></script>
</body>
</html>

<?php

 if($_POST['Submit']){
  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name.":</b><br>".$Comment."<br><br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>
