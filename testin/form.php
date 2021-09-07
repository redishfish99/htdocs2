<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Crash Course</title>
</head>
<body>

    <!-- Normal Form -->
    <!-- <form action="submit.php" method="GET">
        <input type="text" name="username">
        <button>Submit</button>
    </form> -->

    <!-- Form submit using Ajax -->
    <form>
        <input type="text" id="username">
        <button type="submit" onclick="showTextPost(event);">Submit</button>
    </form>

    <script>

        // GET
        function showTextGet(event){

            // Prevent default form submit
            event.preventDefault();
            
            // Initialize Object
            let xhr = new XMLHttpRequest();

            let name = document.getElementById("username").value;
            
            // Set the params and method
            xhr.open("GET", `submit.php?username=${name}`, true);
            // on successful load show data on webpage
            xhr.onload = function(){
                console.log(this.responseText);
            }
            // Send the request
            xhr.send();
        }

        // POST
        function showTextPost(event){

            // Prevent default form submit
            event.preventDefault();

            // Initialize Object
            let xhr = new XMLHttpRequest();

            let name = document.getElementById("username").value;

            let params = `username=${name}`;

            // Set the params and method
            xhr.open("POST", `submit.php`, true);

            // Set the params
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            
            // on successful load show data on webpage
            xhr.onload = function(){
                console.log(this.responseText);
            }
            // Send the request
            xhr.send(params);
        }
        
    </script>

</body>
</html>