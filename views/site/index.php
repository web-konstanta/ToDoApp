<?php require_once(ROOT.'/views/layouts/header.php'); ?>
    <h1>ToDo Web Application</h1>
    <button type="button" class="btn btn-primary">
        <a href="/create" style="color: white; text-decoration: none">Add new task +</a>
    </button>
    <button type="button" class="btn btn-danger">
        <a href="/truncate" style="color: white; text-decoration: none">Delete all tasks</a>
    </button>
    <?php if (isset($_SESSION['success'])): ?>
        <h3 class="text-success">
            - <?php echo $_SESSION['success'];
                unset($_SESSION['success']); ?>
        </h3>
    <?php endif; ?>
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
                    <button type="button" class="btn btn-danger"><a href="/delete/<?php echo $taskItem['id']; ?>" style="color: white; text-decoration: none">Delete</a></button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php require_once(ROOT.'/views/layouts/footer.php'); ?>