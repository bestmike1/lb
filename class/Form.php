<?php

class Form {

    private static string $form = "
<form class='user' action='#_action' method='post' onsubmit='return signupValidation()'>
                            
                            <div class='form-group'>
                                    <input type='text' class='form-control form-control-user' id='jmeno' name='firstName' value='#_firstName' placeholder='Jméno' required />
                                    <span class='required error' style='font-size: 1em;' id='jmeno-info'></span>
                                </div>
                            <div class='form-group'>
                                    <input type='text' class='form-control form-control-user' id='prijmeni' name='lastName' value='#_lastName' placeholder='Příjmení' required />
                                    <span class='required error' style='font-size: 1em;' id='prijmeni-info'></span>
                                </div>                                
                            <div class='form-group'>
                                    <input type='email' class='form-control form-control-user' id='email' name='email'
                                        aria-describedby='emailHelp' value='#_email' placeholder='Vlož Emailovou Adresu...' required />
                                        <span class='required error' style='font-size: 1em;' id='email-info'></span>
                                </div>                                
                                <div class='form-group'>
                                    <input type='tel' class='form-control form-control-user' id='phone' name='phone' value='#_phone' placeholder='př. 111 111 111' required>
                                </div>

                                #_id
                                <input class='btn btn-primary btn-user btn-block' type='submit' name='submit' value='Ulož' />

                            </form>
                            
                            " . '<script>
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
                                var emailRegex = /^[a-zA-Z0-9.!#$%&\'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
                            
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
                                    $(\'.error-field\').first().focus();
                                    valid = false;
                                }
                                return valid;
                            }
                            </script>';
    
    public static function printInsert(string $action): string {
        $editedForm = str_replace("#_action", $action, self::$form);
        $editedForm = str_replace("#_id", "", $editedForm);
        $editedForm = str_replace("#_firstName", "", $editedForm);
        $editedForm = str_replace("#_lastName", "", $editedForm);
        $editedForm = str_replace("#_email", "", $editedForm);
        $editedForm = str_replace("#_phone", "", $editedForm);
        return $editedForm;
    }

    public static function printUpdate(string $action, int $id, string $firstName, string $lastName, string $email, string $phone): string {
        $idInput = "<input type='hidden' name='id' value='$id'>";
        $editedForm = str_replace("#_action", $action, self::$form);
        $editedForm = str_replace("#_id", $idInput, $editedForm);
        $editedForm = str_replace("#_firstName", $firstName, $editedForm);
        $editedForm = str_replace("#_lastName", $lastName, $editedForm);
        $editedForm = str_replace("#_email", $email, $editedForm);
        $editedForm = str_replace("#_phone", $phone, $editedForm);
        return $editedForm;
    }
}