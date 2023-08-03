<?php 
    include('config/constants.php');
?>
<html>
    <head>
        <title>Task Manager with PHP and MySQL</title>
        <link rel="stylesheet" href="<?php echo SITEURL; ?>css/style2.css" />
    </head>
    
    <body>
        
        <div class="wrapper">
    
        <h1>TASK MANAGER</h1>
        
        <a href="index.php">Home</a>
        <a href="manage-list.php">Manage Lists</a>
        
        
        <h3>Add List Page</h3>        
        <!-- Form to Add List Starts Here -->
        <p>
        
        <?php 
        
            //Check whether the session is created or not
            if(isset($_SESSION['add_fail']))
            {
                //display session message
                echo $_SESSION['add_fail'];
                //Remove the message after displaying once
                unset($_SESSION['add_fail']);
            }
        
        ?>
        
        </p>
        
        <form method="POST" action="">
            
            <table class="tbl-half">
                <tr>
                    <td>List Name: </td>
                    <td><input type="text" name="list_name" placeholder="Type list name here" required="required" /></td>
                </tr>
                <tr>
                    <td>List Description: </td>
                    <td><textarea name="list_description" placeholder="Type List Description Here"></textarea></td>
                </tr>
                
                <tr>
                    <td><input class="btn-primary btn-lg" type="submit" name="save" value="SAVE" /></td>
                </tr>
                
            </table>
            
        </form>
        
        <!-- Form to Add List Ends Here -->
        </div>
    </body>
</html>
<?php
if(isset($_POST['save'])){
    $list_name = $_POST['list_name'];
    $list_description = $_POST['list_description'];

    // connect DB

    $conn = mysqli_connect('localhost','root','') or die(mysqli_error($conn));
    // if($conn==true){
    //     echo "Connection Successful";
    // }
     //SElect Database
    $db_select = mysqli_select_db($conn,'task-manager');
        
     //Check whether database is connected or not
    if($db_select==true)
     {
        echo "Database Selected";
     }
    //SQL Query to Insert data into database
    $sql = "INSERT INTO tbl_lists SET 
    list_name = '$list_name',
    list_description = '$list_description'
    ";

//Execute Query and Insert into Database
    $res = mysqli_query($conn, $sql);

//Check whether the query executed successfully or not
    if($res==true) {
        // echo "Data Inserted";
         //Create a SESSION VAriable to Display message
         $_SESSION['add'] = "List Added Successfully";
            
         //Redirect to Manage List Page
         header('location:manage-list.php');
    }
    else {

            //Failed to insert data
            //echo "Failed to Insert Data";
             //Create SEssion to save message
             $_SESSION['add_fail'] = "Failed to Add List";
            
             //REdirect to Same Page
             header('location:add-list.php');
    }
}
?>