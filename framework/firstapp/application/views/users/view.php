<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1>User Information</h1>
        <?php echo validation_errors(); ?>

        <?php echo form_open('users/view/' . $user->id); ?>
            <div class="form-group">
                <label for="name">User ID</label><br>
                <?php echo ": ".$user->id; ?>
            </div>
            <div class="form-group">
                <label for="name">First Name</label><br>
                <?php echo ": ".$user->first_name; ?>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label><br>
                <?php echo ": ".$user->last_name; ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label><br>
                <?php echo ": ".$user->email; ?>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label><br>
                <?php echo ": ".$user->phone_number; ?>
            </div>
        <?php echo form_close(); ?>
    </div>
</main>