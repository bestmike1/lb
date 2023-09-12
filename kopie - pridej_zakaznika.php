<!-- Page Heading -->
<?php
    if (isset($_POST['submit']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        Databaze::pridejZakaznika($firstName, $lastName, $email, $phone);
    }
    else{
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Přidání zákazníka</h1>
</div>
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Přidej zákazníka</h1>
                            </div>
                            <form class="user" action="index.php?zobraz=pridej_zakaznika" method="post" onsubmit="return signupValidation()">
                            
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="jmeno" name="firstName" placeholder="Jméno" required />
                                    <span class="required error" style="font-size: 1em;" id="jmeno-info"></span>
                                </div>
                            <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="prijmeni" name="lastName" placeholder="Příjmení" required />
                                    <span class="required error" style="font-size: 1em;" id="prijmeni-info"></span>
                                </div>                                
                            <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        aria-describedby="emailHelp" placeholder="Vlož Emailovou Adresu..." required />
                                        <span class="required error" style="font-size: 1em;" id="email-info"></span>
                                </div>                                
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="phone" name="phone" value="" placeholder="př. 111 111 111" required>
                                </div>


                                <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Ulož" />

                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function signupValidation() {
	var valid = true;

	$("#jmeno").removeClass("error-field");
    $("#prijmeni").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var jmeno = $("#jmeno").val();
    var prijmeni = $("#prijmeni").val();
	var email = $("#email").val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#jmeno-info").html("").hide();
    $("#prijmeni-info").html("").hide();
	$("#email-info").html("").hide();

	if (jmeno.trim() == "") {
		$("#jmeno-info").html("required.").css("color", "#ee0000").show();
		$("#jmeno").addClass("error-field");
		valid = false;
	}
    if (prijmeni.trim() == "") {
		$("#prijmeni-info").html("required.").css("color", "#ee0000").show();
		$("#prijmeni").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
<?php
    }
?>