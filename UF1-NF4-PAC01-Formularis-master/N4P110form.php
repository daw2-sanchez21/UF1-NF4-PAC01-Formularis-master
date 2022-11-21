<?php $reviewid=$_GET['id'];
?>
<html>
 <head>
  <title>Rating</title>
 </head>
 <body>
  <form action="N4P110form.php" method="post">
   <table>
    <tr>
     <td>Valoration <br></td>
    </tr>
    <tr>
      <td>Reviewer: </td>
        <input type="hidden" name="reviewid" value="<?php echo $reviewid; ?>"/>
        <td><input type="text" name="reviewerform"/></td>
    </tr>
    <tr>
      <td>Comment: </td>
        <td><input type="text" name="commentform"/></td>
    </tr>
    <tr>
      <td>Rating: 
      <select name="rateform">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
      </select>
      </td>
    </tr>
    <tr>
     <td>
      <input type="submit" name="submit" value="Submit" /><a href="N4P110form.php?newid=$reviewid"></a></td>
    </tr>
   </table>
   <?php
   $db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.'); 
    //make sure our recently created database is the active one
    mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
    $nvpstid=$_POST['reviewid'];
    $rname= $_POST['reviewerform'];
    $rcomment = $_POST['commentform'];
    $rrating =$_POST['rateform'];
    $query = 'INSERT INTO reviews
        (review_movie_id, review_date, reviewer_name, review_comment, review_rating)
    VALUES
        ("'.$nvpstid.'",now(),"'.$rname.'","'.$rcomment.'",'.$rrating.');'; //poner valores
    echo $query; 

  mysqli_query($db,$query) or die(mysqli_error($db));


     
  
 ?>
 </body>
</html>
