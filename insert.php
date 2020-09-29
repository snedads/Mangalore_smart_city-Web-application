<?php include "con_db.php";
      include 'session.php';
            if(isset($_POST['save']))
            {
                    $content=$_POST['content'];

                    $query=mysqli_query($con,"INSERT INTO `loopholes`(`mid`, `content`, `datetime`, `mname`, `status`) VALUES ('$mid','$content',now(),'$mname','sender')")or die(mysqli_error($con));
                            if($query==true)
                            {
                    
                                echo '<script>alert("Sent");window.location="discussion.php";</script>';
                            }
                            else
                            {
                                echo '<script>alert("Failed");window.location="discussion.php";</script>';
                            }
            }
            if(isset($_POST['reply']))
            {
                    $lid=$_GET['lid'];
                    $content=$_POST['content'];

                    $query=mysqli_query($con,"INSERT INTO `replies`(`lid`, `mid`, `reply`, `datetime`, `mname`) VALUES ('$lid','$mid','$content',now(),'$mname')")or die(mysqli_error($con));
                            if($query==true)
                            {
                    
                                echo '<script>alert("Sent");window.location="discussion.php";</script>';
                            }
                            else
                            {
                                echo '<script>alert("Failed");window.location="discussion.php";</script>';
                            }
            }
?>