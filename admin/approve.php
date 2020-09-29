<?php include('con_db.php');
    include('session.php');
                $mid=$_GET['mid'];
                $sql=mysqli_query($con,"update member set status='approved' where mid='$mid'"); 
                        if($sql)
                        {
                            echo '<script>alert("Member is approved"); window.location="view_member.php";</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error"); window.location="new_member.php";</script>';
                        }
?>