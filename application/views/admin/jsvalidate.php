<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Validation</title>
</head>
<style>
.formdesign {
    font-size: 20px;
}

.formdesign input {
    font-size: 20px;
    width: 50%;
    padding: 12px 20px;
    border: 2px solid blue;
    border-radius: 4px;
    margin: 14px;
}

.formerror {
    color: red;

}

.but {
    border-radius: 9px;
    width: 100px;
    height: 50px;
    font-size: 25px;
    margin: 22px 20px;
}
</style>

<body>


    <div class="page-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">Javascript Validation</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <h1 class="text-center mt-3">Form Validation</h1>
                        <div class="card-body mt-5">
                            <form action="home/jsvalidate" method="post" name="form">
                                <div class="formdesign" id="name">
                                    Name : <input type="text" name="fname"><b><span class="formerror"></span></b>
                                </div>
                                <div class="formdesign" id="email">
                                    Email : <input type="email" name="femail"><b><span class="formerror"></span></b>
                                </div>
                                <div class="formdesign" id="phone">
                                    Phone : <input type="phone" name="fphone"><b><span class="formerror"></span></b>
                                </div>
                                <div class="formdesign" id="password">
                                    Password : <input type="password" name="fpassword"><b><span
                                            class="formerror"></span></b>
                                </div>
                                <div class="formdesign" id="cpassword">
                                    Confirm Password : <input type="password" name="fcpassword"><b><span
                                            class="formerror"></span></b>
                                </div>
                                <input type="submit" class="but" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function clearErrors() {
        error = document.getElementsByClassName('formerror');
        for (let item of errors) {
            item.innerHTML = '';
        }

    }

    function seterror(id, error) {
        element = document.getElementById(id);
        element.document.getElementsByClassName('formerror')[0].innerHTML = error;

    }

    function validateForm() {
        var returnval = true;
        clearErrors();

        var name = document.forms['myForm']['fname'].value;
        if (name.length < 5) {
            seterror('name', " *Length of name is too short");
            returnval = false;
        }

    }
    </script>

</body>

</html>