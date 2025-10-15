<?php
  
  include "conn.php";

  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"DELETE FROM `userdata` WHERE `id`='$id'");
  }

  $select = "SELECT * FROM userdata"; 
  $query=mysqli_query($conn,$select);
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="admincss.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
    <li class="logout warn"><a href="adminout.php">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="admindashboard">Dashboard</a></li>
    <li class="edit"><a href="#">Edit Website</a></li>
    <li class="users"><a href="#manageuser">Manage Users</a></li>
  </ul>
</nav>

<main role="main">
  
  <section class="panel important">
    <h2>Write Some News</h2>
    <ul>
      <li>Information Panel</li>
    </ul>
  </section>
  
  <section class="panel important">
    <h2>Write a post</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="twothirds">
          Blog title:<br/>
          <input type="text" name="title" size="40"/><br/><br/>
          Content:<br/>    
          <textarea name="newstext" rows="15" cols="67"></textarea><br/>  
        </div>
        <div>
          <input type="submit" name="submit" value="Save" />
        </div>
        </div>
      </form>
  </section>

  <section id="manageuser">
    <h2>Manage User</h2>

    <table border="2">
      <tr>
           <th>ID</th>
           <th>Username</th>
           <th>E-mail</th>
           <th>Passsword</th>
           <th>Manage</th>   
      </tr>
      <?php
        $num=mysqli_num_rows($query);

        if($num>0)
        {
          while($row=mysqli_fetch_assoc($query))
          {
            echo"
              <tr>
                <td>".$row['id']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email']."</td>
                <td>".$row['password']."</td>
                <td>
                  <a href='adminpage.php?id=".$row['id']."'>DELETE</a>
                </td>
              </tr>
            ";
          }
        }
      ?> 
    </table>
    
  </section>

</main>
<!-- partial -->
  
</body>
</html>
