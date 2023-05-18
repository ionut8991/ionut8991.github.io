<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

@include('../assets-main/php/contact.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    mysqli_query($conn_contact, "DELETE FROM `contact_form` WHERE `id`='$id'");
}

if(isset($_GET['idu']))
{
    $id = $_GET['idu'];
    mysqli_query($conn, "DELETE FROM `user_form` WHERE `id`='$id'");
}

?>


<!DOCTYPE html>
<html>
<head>
   <title>Elysium Hotel - Admin Page</title>
   <meta charset="utf-8">
   <meta name="robots" content="noindex">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
   <link rel="stylesheet" href="css/admin.css">
</head>
<body>

<div class="exterior">


    <div class="wrapper">



            <header class="header-main">
                <p>Hello, <?php echo $_SESSION['admin_name'];?></p>
                <p class="button"> <button onclick="location.href='login_form.php'" type="button"> Logout </button> </p>
            </header>



        <main class="content">
            <table>
                <tr>
                    <th>ID</th>
                    <th id="name">Name</th>
                    <th id="mail">Email</th>
                    <th id="mesaj">Parola</th>
                    <th id="data">Tip user</th>
                    <th id="action">Action</th>
                </tr>
                <tr>
                    <?php
                        @include('config.php');



                        $sql =  "SELECT id, name, email, password, user_type FROM user_form";
                        $result = $conn -> query($sql);

                        if($result -> num_rows > 0)
                        {
                            while ($row = $result -> fetch_assoc()){
                                echo "
                                        <tr> 
                                        <td>". $row["id"] ."</td>
                                        <td>". $row["name"] ."</td>
                                        <td>". $row["email"] ."</td>
                                        <td>". $row["password"] ."</td>
                                        <td>". $row["user_type"] ."</td>
                                        <td>
                                            <a href='admin_page.php?idu=".$row['id']."'>Delete</a>
                                        </td> </tr>";


                            }
                            echo "</table>";
                        }
                        else
                        {
                            echo "0 results";
                        }

                        $conn -> close();

                    ?>
                </tr>

            </table>
            <br> <br>

            <table>
                <tr>
                    <th>ID</th>
                    <th id="name">Name</th>
                    <th id="mail">Email</th>
                    <th id="mesaj">Mesaj</th>
                    <th id="data">Data</th>
                    <th id="action">Action</th>
                </tr>
                <tr>
                    <?php
                    @include('../assets-main/php/contact.php');

                    if($conn_contact -> connect_error)
                    {
                        die("Connection failed:". $conn_contact -> connect_error);
                    }

                    $sql =  "SELECT id, name, email, message, date FROM contact_form";
                    $result = $conn_contact -> query($sql);

                    if($result -> num_rows > 0)
                    {
                        while ($row = $result -> fetch_assoc()){
                            echo "
                                        <tr> 
                                        <td>". $row["id"] ."</td>
                                        <td>". $row["name"] ."</td>
                                        <td>". $row["email"] ."</td>
                                        <td>". $row["message"] ."</td>
                                        <td>". $row["date"] ."</td>
                                        <td>
                                            <a href='admin_page.php?id=".$row['id']."'>Delete</a>
                                        </td> </tr>";


                        }
                        echo "</table>";
                    }
                    else
                    {
                        echo "0 results";
                    }

                    $conn_contact -> close();

                    ?>
                </tr>

            </table>

            <?php
                        @include('../assets-main/php/contact.php');

                        if($conn_contact -> connect_error)
                        {
                            die("Connection failed:". $conn_contact -> connect_error);
                        }


                    $conn_contact -> close();
            ?>
        </main>

    </div>




    <footer class="main-footer">
        <p >&copy;Gortoescu Ionut Adrian.</p>
    </footer>

</div>


</body>
</html>