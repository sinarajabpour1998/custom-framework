<h1>Register</h1>

<form method="post" action="">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="full_name">Full name</label>
                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Your first and last name">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="form-group">
        <label for="passwordConfirm">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirm" id="passwordConfirm">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>