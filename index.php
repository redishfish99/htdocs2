<html>
<!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Button to trigger modal -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
    Open Contact Form
</button>

<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" method="post" class="form-control" id="inputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="sendContact()">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<?php
phpinfo();
?>
<script>
function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "contact_mail.php",
		data:'userName='+$("#inputName").val()+'&inputEmail='+$("#inputEmail").val()+'&Message='+$("#Message").val()+'&content='+$(content).val(),
		type: "POST",
		success:function(data){
		$("#mail-status").html(data);
		},
		error:function (){}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#userName").val()) {
		$("#userName-info").html("(required)");
		$("#userName").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("(invalid)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#subject").val()) {
		$("#subject-info").html("(required)");
		$("#subject").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#content").val()) {
		$("#content-info").html("(required)");
		$("#content").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}
</script>
</html>