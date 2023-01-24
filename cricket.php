
<html>
<body bgcolor="plum">
<h4>Players Name:ROHITH SHARMA,SACHIN,MS DHONI,JADAJA,VIRAT KHOLI</h4>
 <?php
 $name=["rohith sharma","virat kholi","MS dhoni","jadaja","sachin"];
 echo "Player Program";
 echo "<br>
 <table border='2px'>
 <tr><th> sl no.</th>
 <th>player</th>";
 for ($i=0;$i<5;$i++)
 {
 $sl=$i+1;
 echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
  }
 echo "</table>"
 ?>
</body>
</html>

