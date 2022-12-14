 
    <div class="login">
        <div class="col-4 bg-white border rounded p-4 shadow-sm">
            <form method="post" id="formdata" name="formdata" action="assets/php/actions.php?signup">
                <div class="d-flex justify-content-center">

                    <img class="mb-4" src="assets/images/pictogram.png" alt="" height="45">
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" class="form-control rounded-0" id="first_name" name="first_name" placeholder="first name" value="<?php showFormData('first_name')?>"
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" id="last_name" name="last_name" class="form-control rounded-0" placeholder="last name" value="<?php showFormData('last_name')?>">
                        <label for="floatingInput">last name</label>
                    </div>
                </div>
                <?=showError('first_name')?>
                <?=showError('last_name')?>
                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender"
                            value="Male" checked>
                        <label class="form-check-label" for="">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender"
                            value="Female">
                        <label class="form-check-label" for="">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender"
                            value="other">
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <?=showError('gender')?>
                <div class="form-floating mt-1">
                    <input type="email" class="form-control rounded-0"  name = "email" id="email" placeholder="email" value=>
                    <label for="floatingInput">email</label>
                </div>
                <?=showError('email')?>

                <div class="form-floating mt-1">
                    <input type="text" class="form-control rounded-0"  name="username" id="username"  placeholder="username">
                    <label for="floatingInput">username</label>
                </div>
                <?=showError('username')?>

                <div class="form-floating mt-1">
                    <input type="password" class="form-control rounded-0" name = "password" id="password" placeholder="Password">
                    <label for="floatingPassword">password</label>
                </div>
                <?=showError('password')?>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary"  type="submit">Sign Up</button>
                    <a href="#" class="text-decoration-none">Already have an account ?</a>
 
                </div>

            </form>
        </div>
    </div>

 
   