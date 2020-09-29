<?php include('con_db.php');
    include('session.php');
                $eid=$_GET['eid'];
                $sql=mysqli_query($con,"DELETE from events where eid='$eid'"); 
                        if($sql)
                        {
                            echo '<script>alert("Event Deleted"); window.location="userevents.php";</script>';
                        }
                        else
                        {
                            echo '<script>alert("Error"); window.location="userevents.php";</script>';
                        }
?>