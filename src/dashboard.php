<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="../assets/js/index.js"></script>
    <title>Document</title>
</head>

<body>
    <button id="getEmployee" type="submit">Get Employees</button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Street</th>
                <th scope="col">City</th>
                <th scope="col">Phone State</th>
                <th scope="col">Phone Postal Code</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <tr id="employeeRow">

            </tr>
            <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr> -->
        </tbody>
    </table>
    <form action="" >
        <input type="text" id="addName"  />
        <input type="email" id="addEmail"  />
        <button type="submit" method="POST" id="addEmployee">+</button>
    </form>
</body>

</html>