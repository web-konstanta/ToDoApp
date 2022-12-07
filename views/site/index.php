<?php require_once(ROOT.'/views/layouts/header.php'); ?>
    <h1>ToDo Web Application</h1>
    <button type="button" class="btn btn-primary">
        <a href="/create" style="color: white; text-decoration: none">Add new task +</a>
    </button>
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
                    <button type="button" class="btn btn-success"><a href="/edit/<?php echo $taskItem['id']; ?>" style="color: white; text-decoration: none">Edit</a></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php require_once(ROOT.'/views/layouts/footer.php'); ?>