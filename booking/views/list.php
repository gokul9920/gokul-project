
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function confirmDelete(e) {
      if (!confirm("confirm delete or not")) {
        e.preventDefault();
      }
    }
    function confirmupdate(u) {
      if (!confirm("confirm to update")) {
        u.preventDefault();
      }
    }
  </script>
</head>
<body>

<div class="container mt-3">
  <h2>person detail</h2>            
  <table class="table table-dark table-striped">
    <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
        <th>bookingdate</th>
        <th>address</th>
        <th>email</th>
        <th></th>
        <th>
          
        </th>
      </tr>
    </thead>
    <tbody>
      <?php  foreach($project as $row) {
        echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['bookingdate']}</td>
                  <td>{$row['address']}</td>
                  <td>{$row['email']}</td>
                  <td>
                  <a href="."delete?id={$row['id'] } class='btn btn-danger'onclick='confirmDelete(event)'>Delete</a>
                  </td>
                  <td>
                  <a href="."updated?id={$row['id'] } class='btn btn-success' onclick='confirmupdate(event)'>update</a>
                  </td>
              </tr>";
       }?>
    </tbody>
  </table>
</div>

</body>
</html>
