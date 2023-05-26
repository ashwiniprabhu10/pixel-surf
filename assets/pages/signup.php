
    <div class="login"  style="background-color: #fff6ed  ">
        <div class="col-lg-4 col-md-8 col-sm-12 bg-white border rounded p-4 shadow-sm" style="border-radius:400px; height:600px ;width:400px">>
            <form method="post" action="assets/php/actions.php?signup">
                <div class="d-flex justify-content-center">

                <h1 class="mb-4" ><b>Pixel Surf</b> </h1>
                </div>
                <h1 class="h5 mb-3 fw-normal">Create new account</h1>
                <div class="d-flex">
                    <div class="form-floating mt-1 col-6 ">
                        <input type="text" name="first_name" value="<?=showFormData('first_name')?>" class="form-control rounded-0" placeholder="username/email" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;">
                        <label for="floatingInput">first name</label>
                    </div>
                    <div class="form-floating mt-1 col-6">
                        <input type="text" name="last_name" value="<?=showFormData('last_name')?>" class="form-control rounded-0" placeholder="username/email" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;">
                        <label for="floatingInput">last name</label>
                    </div>
                </div>
                <?=showError('first_name')?>
                <?=showError('last_name')?>

                <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Other
                        </label>
                    </div>
                </div>
                <div class="form-floating mt-1">
                    <input type="email" name="email" value="<?=showFormData('email')?>" class="form-control rounded-10" placeholder="username/email" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;">
                    <label for="floatingInput">email</label>
                </div>
                <?=showError('email')?>
                <br>

                <div class="form-floating mt-1">
                    <input type="text" name="username" value="<?=showFormData('username')?>" class="form-control rounded-10" placeholder="username/email" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;">
                    <label for="floatingInput">username</label>
                </div>
                <?=showError('username')?>
<br>
                <div class="form-floating mt-1">
                    <input type="password" name="password" class="form-control rounded-10" id="floatingPassword" placeholder="Password" style="height: 50px;
    border-radius: 10px;
    border: 1px solid gray;
    font-size: 18px;
    padding-left: 20px;
    background-color: #d2edf6;">
                    <label for="floatingPassword">password</label>
                </div>
                <?=showError('password')?>

<br>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-success" type="submit">Sign Up</button>
                    <a href="?login" class="text-decoration-none">Already have an account ?</a>


                </div>

            </form>
        </div>
    </div>

