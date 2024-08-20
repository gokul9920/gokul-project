<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proffesor Details Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box; 
        }
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            background-image: url('https://images.unsplash.com/photo-1625225230517-7426c1be750c?fm=jpg&w=3000&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGZvcm18ZW58MHx8MHx8fDA%3D');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
            
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
            /* margin-top: 50px; */
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="container">
            <div class="form-container">
                <h2 class="text-center">Update Details Form</h2>
                <form action="./update" method="post">
                    <input type="text" name ="id" value="<?php echo $project["id"]; ?>" hidden>
                    <div class="form-group">
                        <label for="studentName">Name</label>
                        <input type="text" class="form-control" id="studentName" placeholder="Enter your name" name="name" value="<?php echo  $project["name"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="studentEmail">bookingdate</label>
                        <input type="text" class="form-control" id="studentEmail" placeholder="Enter your department
                        " name="bookingdate" value="<?php echo  $project["bookingdate"] ;?>">
                    </div>
                    <div class="form-group">
                        <label for="studentPhone">address</label>
                        <input type="text" class="form-control" id="studentPhone" placeholder="Enter your phone number" name="address" value="<?php echo  $project["address"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="studentAddress">email</label>
                        <textarea class="form-control" id="studentAddress" rows="3" placeholder="Enter your address" name="email" ><?php echo  $project["email"]; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>

                   
                    
                </form>
            </div>
        </div>

</body>
</html>
c