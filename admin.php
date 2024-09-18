<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

 
     
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #6251e5;
            color: #ecf0f1;
            padding-top: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: #eff1ec;
            display: block;
            padding: 10px 15px;
            font-size: 18px;
            
        }

        .sidebar a:hover {
            background-color: #313bb3;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar {
            background-color:   #40456b;
            color: #ecf0f1;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            z-index: 1000;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            margin-top: 60px;
        }

        .card {
            background-color: #83838b;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            color: rgb(255, 255, 255);
            height: 70px;
        }

        .card h2 {
            margin-top: 0;
        }

        .stats_card {
            background-color: rgb(22, 115, 144);
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            color: white;
            height: 500px;

        
        }

      .resize{
        width: 25px;
        height: auto;
        padding-left: 1px;
      }
      .metallic-button{
        font-size: 14px;
        padding: 6px 16px;
        font-weight: 400;
        border: none;
        outline: none;
        color: #000;
        background: linear-gradient(
          45deg,
          #999 5%,
          #fff 10%,
          #ccc 30%,
          #ddd 50%,
          #ccc 70%,
          #fff 80%,
          #999 95%
        );
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }
      
      .metallic-button:hover {
        transform: translateY(-2px);
      }

    .search-container {
    display: flex;
    align-items: center;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search-input {
    border: none;
    padding: 8px 12px;
    font-size: 17px;
    outline: none;
    border-radius: 25px 0 0 25px;
    flex: 1;
    background-color: #fff;
    
}

.search-button {
    background-color: #007bff;
    border: none;
    color: #fff;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 0 20px 20px 0;
    transition: background-color 0.3s;
}

.search-button:hover {
    background-color: #0056b3;
}





.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 10px;
    width: 80%;
    max-width: 800px;
}

.grid-item {
    
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
}
     .metallic-button{
        font-size: 14px;
        padding: 6px 16px;
        font-weight: 400;
        border: none;
        outline: none;
        color: #000;
        background: linear-gradient(
          45deg,
          #999 5%,
          #fff 10%,
          #ccc 30%,
          #ddd 50%,
          #ccc 70%,
          #fff 80%,
          #999 95%
        );
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }
      
      .metallic-button:hover {
        transform: translateY(-2px);
      }
	
      .chart {
        display: flex;
        align-items: flex-end;
        height: 200px;
        width: 600px;
        padding: 10px;
    }
    
    .bar {
        width: 80px;
        margin: 0 10px;
        background-color: #4CAF50;
        display: inline-block;
        position: relative;
    }
    
    .bar::after {
        content: attr(title);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        margin-bottom: 5px;
        background-color: #333;
        color: #fff;
        padding: 3px 6px;
        border-radius: 3px;
        font-size: 14px;
        white-space: nowrap;
    }
 .bar-label{
    margin-top: 10px;
    text-align: center;
    font-size: 14px;
    color: #333;
 }
        
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
       <!--- <a href="#">Dashboard</a> -->
       <h1>&nbsp;&nbsp;&nbsp;Dashboard</h1>
       <a href="profile.html"><img src="images/user.svg" alt="Admin SVG" class="resize">&nbsp;&nbsp;Profile</a>
        <a href="#"><img src="images/view.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;View Form</a>
       <!--<a href="form.html"><img src="C:\Users\User\Desktop\Ice_project\create.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Create Notice</a> -->
        <a href="#"><img src="images/update.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Update Form</a>
        <a href="#"><img src="images/delete.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Delete Form</a>
        <a href="Landing_page.html"><img src="images/off.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Logout</a>
    </div>

    <!-- Main content area -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="navbar">
            <h1>Document Management System</h1>



           <h1> <img src="images/Admin.svg" alt="Description of the SVG" class="resize">Administrator<h1>
        </div>
      <br>
        <!-- Content area -->
        <div class="content">
            <div class="card">
        
              <!--  <button type="submit">CREATE</button> -->
              <!--<button class="metallic-button" type="button" onclick="window.location.href='form.html'">Create</button> -->
        
              <div class="grid-container">
                <!--<div class="grid-item"><button class="metallic-button" type="submit"></button></div> -->
                <div class="grid-item"><button class="metallic-button" type="submit">Delete User</button></div>
                <div class="grid-item"><button class="metallic-button" type="submit">View Users</button></div>
              <!-- <div class="grid-item"><button class="metallic-button" type="submit">Statistics</button></div>
               <!--<div class="grid-item"><button class="metallic-button" type="submit">Reset User Password</button></div>-->
              <!--<div class="grid-item"><button class="metallic-button" type="submit">Processing</button></div> -->


                </div>


            </div>
            <div class="card">
                <h2>Search User(s)</h2>
              <!--  <button type="submit">CREATE</button> -->
            
              <!-- <button class="metallic-button" type="button" onclick="window.location.href='form.html'">Create</button> -->
              <input type="text" class="search-input" placeholder="Search...">
              <button class="search-button">🔍</button>
            </div>
            <!--<div class="card">
                <!-- <h2>Create Notice</h2> -->
              <!--  <button type="submit">CREATE</button> -->
             <!--<button class="metallic-button" type="button" onclick="window.location.href='form.html'">Create</button> -->
           <!-- </div> -->
            <div class="card">
                <h2>View Document(s)</h2>
                <button class="metallic-button" type="submit">VIEW</button>
            </div>

            <div class="card">
                <h2>Update Form</h2>

                <button class="metallic-button" type="submit">Update</button>


            </div>
             
            <div class="card">
                <h2>Delete Form</h2>
                <button class="metallic-button"type="submit">Delete</button>
            </div>
			<div class="card">
                <h2>Delete User</h2>
                <button class="metallic-button"type="submit">Delete</button>
            </div>
            <div class="stats_card">

                
                <h1>STATISTICS</h1> 
                <div class="chart">
                   <!--<div class="bar" style="height: 10%; background-color: #4CAF50;" title="10%"></div>-->
                    <div class="bar" style="height: 60%; background-color: #2196F3;" title="60%"></div>
                    <div class="bar-label">Printed Forms</div>
                   <!--<div class="bar" style="height: 40%; background-color: #f44336;" title="40%"></div> -->
                    <div class="bar" style="height: 20%; background-color: #FF9800;" title="20%"></div>
                    <div class="bar-label">Users</div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>