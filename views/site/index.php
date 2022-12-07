<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>ToDo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>ToDo Web Application</h1>
    <button type="button" class="btn btn-primary">Add new task +</button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">What to do</th>
            <th scope="col">Description</th>
            <th scope="col">Date of creating</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tasksList as $taskItem): ?>
            <tr>
                <th scope="row"><?php echo $taskItem['id']; ?></th>
                <td><?php echo $taskItem['name']; ?></td>
                <td><?php echo $taskItem['description']; ?></td>
                <td><?php echo $taskItem['date']; ?></td>
                <td>
                    <button type="button" class="btn btn-success">Edit</button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>