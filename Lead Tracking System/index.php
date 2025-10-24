<!DOCTYPE html>
<html dir="rtl" lang="he">
<head>
<style>
input {
    border-top: 1px #acaeb4 solid;
    border-left: 1px #dde1e7 solid;
    border-right: 1px #dde1e7 solid;
    border-bottom: 2px #f1f4f7 solid;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
}
</style>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>אשל הירדן</title>
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script> 
<script type="text/javascript">
function confirmDelete(delUrl) {
  if (confirm("אתה בטוח שאתה רוצה למחוק?")) {
   document.location = delUrl;
  }
}
function redirect()
{
    document.mySelect.href = this.value;
}

function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;     
   var originalContents = document.body.innerHTML;       
   document.body.innerHTML = printContents;      
   window.print();      
   document.body.innerHTML = originalContents;
   }

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

</head>
<body bgcolor="#6e6f6a">
<div style="position: absolute; top: 10px; left: 10px;">
<form style="display:inline;"><input type="button" value="הדפסה" onclick="window.print();return false;" /></form>
<form style="display:inline;"><input type="button" value="הדפסה מתקדמת" onclick="window.open('print.php?pro=<?php echo $tname; ?>', '_blank');" /></form>
</div>
<div align="center">
<img src="images/logo.png" alt="Jordan Eshel Logo" style="max-width: 700px; height: auto;" />
<br>
<font size="15">מעקב לידים</font></div><br /><br />
<?php

$connection = mysqli_connect("localhost","root","","eshel_db") or die(mysqli_connect_error());
mysqli_set_charset($connection, "utf8");

if(isset($_POST['submit2']))
{
$name = mysqli_real_escape_string($connection, $_POST['nameoftable']);
mysqli_query($connection, "CREATE TABLE `".$name."` (id int(55), firstandlastname varchar(255) NOT NULL, phone varchar(255) NOT NULL, address varchar(255) NOT NULL, col varchar(255) NOT NULL, stat varchar(255) NOT NULL, meet varchar(255) NOT NULL, color enum('red','yellow') NOT NULL,   PRIMARY KEY  (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");
?><script>alert("הפרוייקט נוסף בהצלחה!");</script>
<?php	}
;
if (isset($_GET['pro']))
{

$tname=$_GET['pro'];
?>
<script>
location.href = \"http://localhost:8000/Lead Tracking System/?pro=$tname\";
</script> 
<?php
}
if (isset($_POST['select']))
{
$select = $_POST['ctable'];
$tname=$select;
?>
<script>
location.href = \"http://localhost:8000/Lead Tracking System/?pro=$tname\";
 </script> 
<?php
}
if (!isset($_POST['select']) && !isset($_GET['pro']))
$tname="Project U";


if(isset($_POST['submit']))
{
$select=$_POST['tnamee'];
$tname=$select;
if(empty($tname)) {
    $tname = "Project U";
}
	$query = mysqli_query($connection, "INSERT INTO `$tname`
	(firstandlastname, phone, address, col, stat, meet, color) VALUES (
	'" . addslashes($_POST['firstandlastname']) . "',
	'" . addslashes($_POST['phone']) . "',
	'" . addslashes($_POST['address']) . "',
	'" . addslashes($_POST['col']) . "',
	'" . addslashes($_POST['stat']) . "',
	'" . addslashes($_POST['meet']) . "',
	'" . addslashes($_POST['color']) . "'
	)");

if($query){
    echo"query inserted";

}else{

   echo 'error while inserting : ['.mysqli_errno($connection).'] '.mysqli_error($connection);
echo 'query : '.$query;
}
?>
<script>
location.href = \"http://localhost:8000/Lead Tracking System/?pro=$tname\";
</script> 
<?php
}

if(isset($_GET['delete']))
{
	if(is_numeric($_GET['delete']))
	{
		$query = mysqli_query($connection, "DELETE FROM `$tname` WHERE id = '" . $_GET['delete'] . "'");
?>
<script>alert("נמחק בהצלחה!");</script>
<script>
location.href = \"http://localhost:8000/Lead Tracking System/?pro=$tname\";
 </script> 
<?php	
}

}

if(isset($_GET['deletedata'])) {
$dtname=$_GET['deletedata'];
$sql = "DROP TABLE IF EXISTS `$dtname`";
$retval = mysqli_query($connection, $sql);
if(!$retval)
{
  die('Could not delete tableeeee: ' . mysqli_error($connection));
}
echo "Table deleted successfully\n";
?>
<script>alert("הפרוייקט נמחק בהצלחה!");</script>
<?php

header("Location: http://localhost:8000/Lead Tracking System/");


}

if(isset($_POST['update'])) {
$query = mysqli_query($connection, "UPDATE `$tname` SET
firstandlastname='" . addslashes($_POST['firstandlastname']) . "', phone='" . addslashes($_POST['phone']) . "', address='" . addslashes($_POST['address']) . "', col='" . addslashes($_POST['col']) . "', stat='" . addslashes($_POST['stat']) . "', meet='" . addslashes($_POST['meet']) . "', color='" . addslashes($_POST['color']) . "' WHERE id = '" . addslashes($_POST['id']) . "'");
?>
<script>
location.href = \"http://localhost:8000/Lead Tracking System/?pro=$tname\";
 </script> 
<?php
}


$result = mysqli_query($connection, "SELECT * FROM `$tname` ORDER BY id ASC");
if(!$result) {
    echo "Error: " . mysqli_error($connection);
}
$number = mysqli_num_rows($result);
$sql = "SHOW TABLES";
$res = mysqli_query($connection, $sql);
$text="";
 while ($row = mysqli_fetch_row($res)) {
$text.="<div style=\"padding:3px;\">";
$text.="<div style=\"float:right\"><a href=\"javascript:confirmDelete('?deletedata=$row[0]')\"><image src=\"images/delete.jpg\" alt=\"מחק\" border=\"0\" /></a></div>";
$text.=" ";
$text.="<div style=\"float:right;\">$row[0]</div>";
$text.="</div><br />";
 }
?>
<font color="black">
<table border="0" float="center" width="100%" style="text-align:center; background-color:#92c7d9; border-style:dashed;">
<tr>
<th>סטטיסטיקה</th>
<th>בחר פרוייקט</th>
<th>הוספת פרוייקט חדש</th>
<th>מחיקת פרוייקטים</th>
<th>מקרא צבעים</th>
</tr>
<tr>
<td><?php
$num_tables = mysqli_num_rows($res); 
echo "<p>מספר פרוייקטים: $num_tables</p>";
if ($number==0 || $number=="")
echo "הפרוייקט ריק";
else
echo "<p>מספר אנשים בפרוייקט זה: $number</p>";
?></td>
<td>
<?php
$query = mysqli_query($connection, "SELECT * FROM `$tname` ORDER BY id ASC");
if(!$query) {
    echo "Error: " . mysqli_error($connection);
}
$number = mysqli_num_rows($query);
$sql = "SHOW TABLES";
$res = mysqli_query($connection, $sql);
echo "<form action='' method='post'><select name='ctable' id='mySelect'>";
echo "<option value='$tname'>$tname</option>";
 while ($row = mysqli_fetch_row($res)) {
if($tname != $row[0])
echo "<option value='$row[0]'>$row[0]</option>";
}
echo "</select> <input type='submit' name='select' value='שנה' /></form>";
?>
</td>
    <td><form action="" method="post">
שם הפרוייקט: <input width="48%" type="text" name="nameoftable" /> <input width="4%" type="submit" name="submit2" class="button" value="הוסף" />
</form></td>

<td>
<table>
<tr>
<td width="40%"></td>
<td>
<?php
echo $text;
?>
</td>
<tr>
</table>
</td>
<td><img src="images/mik.gif" /></td>
</tr>
</table>
<br />

<table border="0" float="center" width="100%" style="text-align:center; font-color:black; border-style:dotted;" >
<tr>
<td><form action="" method="post"><input type="hidden" value="<?php echo $tname ?>" name="tnamee" />
שם פרטי ושם משפחה: <input size="20" type="text" name="firstandlastname" /> טלפון: <input size="20" type="text" name="phone">  דואר אלקטרוני: <input size="30" type="text" name="address"></td>
<td>תאריך פנייה: <input size="20" type="text" name="col">  סטטוס: <input size="20" type="text" name="stat">
<select name="color">
<option value="none">ללא</option><option value="red">חוזה</option><option value="yellow">בתהליך</option>
</select>
 תאריך פגישה: <input size="20" type="text" name="meet"></td>
<td><input size="5" type="submit" name="submit" class="button" value="הוסף" /></td>
</tr>
</table>

<br /><br />
</form>
<div align="center"><font style="color: #000000" size="9"><a href="/Lead Tracking System/?pro=<?php echo $tname; ?>" style="text-decoration: none">
<font color="#000000"><?php echo "$tname"; ?></font></a></font></div>
<br /><br />
<?php if($number == 0) echo "<font size='6'><div align='center'>פרוייקט זה ריק</div></font>"; else { ?>
<table cellspacing="1" cellpadding="0" border="0" width="100%" style="text-align:center;">
<tr style="background-color:#3d5f8f;">
<td style="display:none"></td>
<td style="display:none"></td>
<td>ID</td>
<td>שם פרטי ושם משפחה</td>
<td>טלפון</td>
<td>דואר אלקטרוני</td>
<td>תאריך פנייה</td>
<td>סטטוס</td>
<td>תאריך פגישה</td>
<td>עדכן</td>
<td>מחק</td>
</tr>
<?php
$id = 0;
while ($result = mysqli_fetch_array($query)) { 
$id = $id+1;
$id2 = $result["id"];
if(!isset($_GET['update'])) {
?>

<?php
$color=$result["color"];
if($color !="red" && $color !="yellow")
$color="white";
if($color=="yellow")
$color="#f4da0b";
if($color=="red")
$color="#dd4b39";
?>
<tr style="background-color:<?php echo $color ;?>">
<td><?php echo $id; ?></td>
<td><?php echo $result["firstandlastname"]; ?></td>
<td><?php $phone_number = substr_replace($result["phone"], '-' , strlen($result["phone"])-7 , 0);  echo $phone_number; ?></td>
<td><?php echo $result["address"]; ?></td>
<td><?php echo $result["col"]; ?></td>
<td><?php echo $result["stat"]; ?></td>
<td><?php echo $result["meet"]; ?></td>
<td><a href="?pro=<?php print $tname; ?>&update=<?php print $id2; ?>">עדכן</a></td>
<td><a href="javascript:confirmDelete('?delete=<?php print $id2 ?>')">מחק</a></td>
</tr>
</div>
<?php
}
else { 
if ($_GET['update'] == $id || $_GET['update'] == $id2) {
?>
<div id="printableArea">
<form action="" method="post">
<?php
$color=$result["color"];
if($color !="red" && $color !="yellow")
$color="white";
if($color=="yellow")
$color="#f4da0b";
if($color=="red")
$color="#dd4b39";
?>
<tr style="background-color:<?php echo $color ;?>">
<td style="display:none"><input type="hidden" value="<?php echo $tname ?>" name="tnamee" /></td>
<td style="display:none"><input type="hidden" value="<?php echo $id2 ?>" name="id" /></td>
<td><?php echo $id; ?></td>
<td><input style="background-color:<?php echo $color ;?>;" size="35" type="text" value="<?php echo $result["firstandlastname"]; ?>" name="firstandlastname" /></td>
<td><input style="background-color:<?php echo $color ;?>;" size="35" type="text" value="<?php echo $result["phone"]; ?>" name="phone" /></td>
<td><input style="background-color:<?php echo $color ;?>;" size="45" type="text" value="<?php echo $result["address"]; ?>" name="address" /></td>
<td><input style="background-color:<?php echo $color ;?>;" size="35" type="text" value="<?php echo $result["col"]; ?>" name="col" /></td>
<td>
<?php
$color=$result["color"];

if($color=="red") { $color="#dd4b39"; ?>
<div style="background-color:<?php echo $color ;?>;">
<input style="background-color:<?php echo $color ;?>;" size="35" type="text" value="<?php echo $result["stat"]; ?>" name="stat" /> <select style="background-color:<?php echo $color ;?>;" name="color"><option value="none">ללא</option><option selected="selected" value="red">חוזה</option><option value="yellow">בתהליך</option></select>
</div>
<?php $color="red"; } 
if($color=="yellow") { $color="#f4da0b"; ?>
<div style="background-color:<?php echo $color ;?>;">
<input style="background-color:<?php echo $color ;?>;" size="35" type="text" value="<?php echo $result["stat"]; ?>" name="stat" /> <select style="background-color:<?php echo $color ;?>;" name="color"><option value="none">ללא</option><option value="red">חוזה</option><option selected="selected" value="yellow">בתהליך</option></select>
</div>
<?php $color="yellow"; } 
if($color !="yellow" && $color !="red") { ?>
<div style="background-color:white;">
<input style="background-color:<?php echo $color ;?>;" size="35" type="text" value="<?php echo $result["stat"]; ?>" name="stat" /> <select style="background-color:<?php echo $color ;?>;" name="color"><option selected="selected" value="none">ללא</option><option value="red">חוזה</option><option value="yellow">בתהליך</option></select>
</div>
<?php }
if($color=="yellow")
$color="#f4da0b";
if($color=="red")
$color="#dd4b39";
?>
</td>
<td><input style="background-color:<?php echo $color ;?>;" size="30" type="text" value="<?php echo $result["meet"]; ?>" name="meet" /></td>
<td><input style="background-color:<?php echo $color ;?>;" type="submit" name="update" class="button" value="עדכן" /></td>
<td><a href="javascript:confirmDelete('?delete=<?php print $id2 ?>')"><input type="submit" class="button" value="מחק" /></a></td>
</tr>
</form>
<?php }
}
}
}
?>
</table>
</font>
<?php mysqli_close($connection); ?>
</body>
</html>