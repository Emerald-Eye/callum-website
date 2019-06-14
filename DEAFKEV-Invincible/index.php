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
      <img src="../res/DEAF KEV - Invincible Cover Art.jpg"
    alt="Cover Art" width="250px" height="250px" class="img">
    DEAF KEV - Invincible</p>
    <br>
    <p>Track: DEAF KEV - Invincible [NCS Release]</p>
    <p>Music provided by NoCopyrightSounds.</p>
    <p>Watch: <a href="https://youtu.be/J2X5mJ3HDYE">
      https://youtu.be/J2X5mJ3HDYE</a></p>
    <p>Free Download / Stream: <a href="https://ncs.io/invincible">
      https://ncs.io/invincible</a></p>
    <audio controls controlsList="nodownload" id="noContextMenu">
      <source src="../music/DEAF KEV - Invincible [NCS Release].mp3"
      type="audio/mpeg">
    </audio>
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
