var Script = function () {

    $.validator.setDefaults({
        submitHandler: function() { alert("submitted!"); }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        // $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#form_add_user").validate({
            rules: {
                nama: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                konpassword: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                status:"required"
            },
            messages: {
                nama: "Nama harus diisi",
                username: {
                    required: "Username harus diisi",
                    minlength: "Isi username minimal 2 karakter"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy"
            }
        });

        // propose username by combining first- and lastname
        // $("#username").focus(function() {
        //     var firstname = $("#firstname").val();
        //     var lastname = $("#lastname").val();
        //     if(firstname && lastname && !this.value) {
        //         this.value = firstname + "." + lastname;
        //     }
        // });

        //code to hide topic selection, disable for demo
        // var newsletter = $("#newsletter");
        // // newsletter topics are optional, hide at first
        // var inital = newsletter.is(":checked");
        // var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        // var topicInputs = topics.find("input").attr("disabled", !inital);
        // // show when newsletter is checked
        // newsletter.click(function() {
        //     topics[this.checked ? "removeClass" : "addClass"]("gray");
        //     topicInputs.attr("disabled", !this.checked);
        // });
    });


}();