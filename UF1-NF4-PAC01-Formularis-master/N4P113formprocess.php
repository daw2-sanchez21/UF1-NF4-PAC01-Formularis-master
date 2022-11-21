<?php 
   $name=$_POST['name'];
   $email=$_POST['email'];
   $desc=$_POST['description'];
   $color=$_POST['color'];
    ?>
<html>
 <head>
  <title>Exercice 2</title>
 </head>
 <body>
  
   <table>
    <tr>
      <td>Name: 
      <select name="name">
       <option value="<?php $name?>"><?php echo $name ?></option>
       <option value="<?php $email?>"><?php echo $email ?></option>
       <option value="<?php $desc?>"><?php echo $desc ?></option>
       <option value="<?php $color?>"><?php echo $color ?></option>
      </select>
      </td>
    </tr>
   </table>

 </body>
</html>