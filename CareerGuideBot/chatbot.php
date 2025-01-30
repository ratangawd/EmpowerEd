<!DOCTYPE html>
<?php include 'header.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intelligent Career Guidance</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/s.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            overflow: hidden;
        }

        
        .navbar {
            background-color: rgb(120, 70, 167);
            padding: 10px;
            text-align: center;
            color: #ffffff;
            margin-top: 50px; /* Adjust as needed */
        }

        .chat-container {
            height: calc(100vh - 150px); /* Adjust the height as needed */
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .chat-header {
            background-color: #7a67e8;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 18px;
        }

        .chat-body {
            height: calc(100% - 50px);
            overflow-y: auto;
            padding: 10px;
        }

        .user-message {
            text-align: right;
            margin-bottom: 10px;
        }

        .bot-message {
            text-align: left;
            margin-bottom: 10px;
        }

        .message {
            padding: 8px;
            border-radius: 5px;
            display: inline-block;
            word-break: break-word;
        }

        .user-message .message {
            background-color: #7a67e8;
            color: #ffffff;
        }

        .bot-message .message {
            background-color: #e6e6e6;
            color: #333333;
        }

        .chat-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f2f2f2;
            border-top: 1px solid #dddddd;
        }

        .input-box {
            flex-grow: 1;
            padding: 8px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            margin-right: 10px;
        }

        .send-button {
            background-color: #7a67e8;
            color: #ffffff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>


<div class="navbar">
    <!-- Your navbar content goes here -->
    <div class="container">
        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a class="logo" href="main.php"></a>
            </div>
            <!-- /Logo -->

            <!-- Mobile toggle -->
            <button class="navbar-toggle">
                <span></span>
            </button>
            <!-- /Mobile toggle -->
        </div>

        <?php
        // Check if the user is logged in, if not then redirect him to login page
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true):
            ?>

            <!-- Navigation -->
            
            <!-- /Navigation -->
        <?php endif; ?>

    </div>
</div>

<div class="chat-container">
    <div class="chat-body" id="chatBody">
        <div class="bot-message">
            <div class="message">Hello! How can I assist you today?</div>
        </div>
    </div>
    <div class="chat-input">
        <input type="text" id="userInput" class="input-box" placeholder="Type your message..." onkeypress="handleKeyPress(event)">
        <button onclick="sendMessage()" class="send-button">Send</button>
    </div>
</div>

<script>
    function handleKeyPress(event) {
        // Check if the pressed key is Enter (key code 13)
        if (event.key === "Enter") {
            // Prevent the default behavior of the Enter key (form submission)
            event.preventDefault();
            // Call the sendMessage function
            sendMessage();
        }
    }

    function sendMessage() {
            const userInput = document.getElementById("userInput");
            const userMessage = userInput.value.trim().toLowerCase();

            if (userMessage.includes("test")) {
                // If the user asks to take a test, ask for their field of interest
                appendMessage("user", userMessage); // Show user's question
                appendMessage("bot", "Great! Please enter your field of interest.");
                enableFieldOfInterestInput();
            } else if (userMessage.includes("counselling") || userMessage.includes("help") || userMessage.includes("career")) {
                // If the user asks for counseling, help, or career guidance
                appendMessage("user", userMessage);
                appendMessage("bot", "Please choose in what do you need help:");
                showOptions(["Education", "Career"]);
            } else if (userMessage.includes("education")) {
                // If the user chooses education, ask for their grade
                appendMessage("user", userMessage);
                appendMessage("bot", "Please choose your grade:");
                showOptions(["10th", "12th"]);
            } else if (userMessage.includes("grade") || userMessage.includes("standard")) {
                // If the user mentions grade/standard, ask them to choose their grade
                appendMessage("user", userMessage);
                appendMessage("bot", "Please choose your grade:");
                showOptions(["10th", "12th"]);
            } else if (fieldOfInterestInputEnabled) {
                // If field of interest input is enabled, process the user's response
                appendMessage("user", userMessage); // Show user's response
                processFieldOfInterest(userMessage);
            } else {
                // Handle other user messages or initiate other actions as needed
                // For simplicity, I'm showing a hardcoded response
                appendMessage("user", userMessage); // Show user's question
                const botResponse = "I received your message!";
                appendMessage("bot", botResponse);
            }

            userInput.value = "";
        }

        function showOptions(options) {
            const chatBody = document.getElementById("chatBody");
            const optionsContainer = document.createElement("div");
            optionsContainer.classList.add("bot-message");

            options.forEach((option) => {
                const optionButton = document.createElement("button");
                optionButton.innerText = option;
                optionButton.className = "send-button";
                optionButton.addEventListener("click", () => handleOptionClick(option));
                optionsContainer.appendChild(optionButton);
            });

            chatBody.appendChild(optionsContainer);
            fieldOfInterestInputEnabled = false; // Disable further field of interest input
        }

        function handleOptionClick(option) {
    appendMessage("user", option);

    if (option === "Education") {
        appendMessage("bot", "Please choose your grade:");
        showOptions(["10th", "12th"]);
    } else if (option === "Career") {
        // Add logic for career-related actions if needed
        window.location.href="phyblog.php"
    } else if (option === "10th" || option === "12th") {
        // Redirect to respective pages for 10th or 12th grade
        window.location.href = option === "10th" ? "10thgrade.php" : "12thgrade.php";
    } else {
        // Process other options as needed
        const botResponse = `You've selected ${option}.`; 
        appendMessage("bot", botResponse);
    }
}



    let fieldOfInterestInputEnabled = false;

    function enableFieldOfInterestInput() {
        fieldOfInterestInputEnabled = true;
    }

    function processFieldOfInterest(userMessage) {
        // Process the user's field of interest and generate a response
        // For simplicity, I'm showing a hardcoded response
        const botResponse = `You've selected ${userMessage}. Click the button below to take the test.`;
        appendMessage("bot", botResponse);

        // Display a button to take the test
        showTestButton();
    }

    function showTestButton() {
        const chatBody = document.getElementById("chatBody");
        const testButton = document.createElement("button");

        testButton.innerText = "Take Me to Test";
        testButton.className = "send-button";
        testButton.addEventListener("click", redirectToTest);

        const buttonContainer = document.createElement("div");
        buttonContainer.classList.add("bot-message");
        buttonContainer.appendChild(testButton);

        chatBody.appendChild(buttonContainer);
        fieldOfInterestInputEnabled = false; // Disable further field of interest input
    }

    function redirectToTest() {
        // Redirect to the test.php page
        window.location.href = "apt.html";
    }

    function appendMessage(sender, message) {
        const chatBody = document.getElementById("chatBody");
        const messageContainer = document.createElement("div");
        const messageElement = document.createElement("div");

        messageElement.classList.add("message");
        messageElement.innerText = message;

        messageContainer.classList.add(sender === "user" ? "user-message" : "bot-message");
        messageContainer.appendChild(messageElement);

        chatBody.appendChild(messageContainer);

        // Scroll to the bottom of the chat body to show the latest message
        chatBody.scrollTop = chatBody.scrollHeight;
    }
</script>

</body>
</html>
