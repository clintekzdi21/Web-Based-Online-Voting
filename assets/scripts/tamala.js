function getlogin(){

                    $.ajax({
                        url: '/Web Based Online Voting/tamala.php',
                        async: false,
                        type: 'POST',
                        crossDomain: true,
                        dataType: 'json',
                        data: {
                            username: $('#username').val(),
                            password: $('#password').val()
                        },
                        success: function(response) {
                            var decode = response;
                             alert('Invalid Credentials!');
                            console.log(decode);
                            if (decode.success == true) {
                               alert('Successfully Login!');
                               
                                console.log('index.php');
                                window.location.href = "index.php";
                            } else {
                                alert('Invalid Credentials!')
								console.log(decode.msg);
                                return;
                            }
                        },
                        error: function(error) {
                            console.log("Error:");
                            console.log(error);
                            return;
                        }
                    });
}