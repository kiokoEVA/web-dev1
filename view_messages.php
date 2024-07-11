<?php 
require_once ("includes/db_connect.php");
include_once("templates/heading.php"); 
include_once("templates/nav.php"); ?>

        <div class="banner">
            <h1>Messages</h1> 
        </div>
        <div class="row">
        <div class="content">
            <h1>Messages</h1>
            <p>Welcome! We’re thrilled to have you here. Explore our innovative products and discover how they can simplify your life.Thanks for visiting! </p>

<table>
    <thead>
                    <tr>
                        <th colspan="2">sender Name</th>
                        <th>Sender Email</td>
                        <th>Subject Line</th>
                        <th>Time</th>
                    </tr>
           </thead>         
           
<?php

        $select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC";
        $sel_msg_res= $conn->query($select_msg);
        $en = 0;
        if ($sel_msg_res->num_rows > 0) {
        // output data of each row
        while($sel_msg_row= $sel_msg_res->fetch_assoc()) {
            $en++;
?>            

            <tr>
               <td><?php print $en; ?></td>
               <td><?php print $sel_msg_row["sender_name"]; ?></td>
               <td><?php print $sel_msg_row["sender_email"]; ?></td>
               <td><?php print $sel_msg_row["subject_line"] .'' . substr($sel_msg_row["text_message"], 0, 20) . '...' ; ?></td>
               <td><?php print  date("d-M-Y H:i",strtotime($sel_msg_row["datecreated"])); ?></td>
          </tr>


<?php
       }
       } else {
       echo "0 results";
       }
?>   
          </body>
        


                 </table>
    </div>
<?php include_once("templates/side_bar.php"); ?>
    </div>
    
<?php include_once("templates/footer.php"); ?>

  
    
       

            
      
                
                   
                   
 

                  