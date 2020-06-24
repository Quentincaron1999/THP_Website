<!doctype html>
    <html lang="en">
        <head>

        </head>
        <body>
        <div class="central">
                <form action="index.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputFirstName">Firstname <sup>*</sup></label>
                        <input type="text" class="form-control" id="inputFirstName" name="firstName" placeholder="Your Firstname" require>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputLastName">Lastname <sup>*</sup></label>
                        <input type="text" class="form-control" id="inputLastName" name="lastName" placeholder="Your lastname" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail">Email <sup>*</sup></label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Your email" require>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPhoneNumber">Phone number <sup>*</sup></label>
                        <input type="tel" class="form-control" id="inputPhoneNumber" name="phoneNumber" placeholder="Your phone number" require>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCompany">Company</label>
                        <input type="text" class="form-control" id="inputCompany" name="company" placeholder="Your company">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputJob">Job</label>
                        <input type="text" class="form-control" id="inputJob" name="job" placeholder="Your job">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-bambou">Sign in</button>
                </form>
            </div>
        </body>