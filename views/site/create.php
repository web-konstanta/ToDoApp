<?php require_once(ROOT.'/views/layouts/header.php'); ?>
    <div class="card" style="border-radius: 15px;">
        <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Add new task</h2>

            <form action="#" method="post">

                <?php if (isset($errors) && is_array($errors)): ?>
                    <?php foreach ($errors as $error): ?>
                        <p class="text-danger"> - <?php echo $error; ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">What to do</label>
                    <input type="text" name="name" class="form-control form-control-lg">
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1cg" style="margin-left: 0px;">Description</label>
                    <textarea name="description" class="form-control form-control-lg"></textarea>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Add task</button>
                </div>

            </form>

        </div>
    </div>
<?php require_once(ROOT.'/views/layouts/footer.php'); ?>