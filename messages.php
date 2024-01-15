<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include CSS/JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7355024ecc.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <title>InternHub</title>
</head>

<body onload="getCookie()">
    <div id="app">
        <?php include 'inc/nav.php' ?>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: 24px;">
                <!-- Message List -->
                <div class="col-md-4 order-md-1">
                    <div class="card card-message-list" style="max-height:80vh;overflow: auto;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <button class="btn btn-primary btn-block d-md-none" data-bs-toggle="collapse" data-bs-target="#responsive-list">
                                        Show Messages
                                    </button>
                                    <ul class="list-group collapse show" id="responsive-list" style="list-style-type:none;">
                                        <li><a href="?i=2" class="list-group-item">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="message-list-image">
                                                            <img src="img/pfp.jpeg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col text-bold">Username 1</div>
                                                        <div class="col">Last message.</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2"></div>
                </div>
                <!-- Message List -->

                <!-- Message Box -->
                <div class="col-md-8 order-md-2">
                    <div class="card">
                        <div class="card-header">
                            <span id="username"></span>
                        </div>
                        <div class="card-body">
                            <div id="chat-container"></div>
                        </div>
                        <div class="card-footer">
                            <input type="text" id="messageInput" placeholder="Type your message">
                            <button onclick="sendMessage()">Send</button>
                        </div>
                    </div>
                </div>
                <!-- Message Box -->
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    var receiverId = getParameterByName('i');
    if (receiverId == "1") {
        receiverId = "userkey1";
    } else if (receiverId == "2") {
        receiverId = "userkey2";
    }

    document.getElementById('username').innerHTML = '<div>' + receiverId + '</div>';


    const socket = new WebSocket("ws://localhost:5000/ws");
    var authKey;
    const chatContainer = document.getElementById("chat-container");

    socket.addEventListener("open", (event) => {
        console.log("WebSocket connection opened");
        retrieveData();
    });

    socket.addEventListener("message", (event) => {
        console.log("Received from server: ", event.data);

        try {
            const data = JSON.parse(event.data);

            if (data.hasOwnProperty("Sender") && data.hasOwnProperty("Receiver") && data.hasOwnProperty("Message") && data.hasOwnProperty("Datetime")) {
                //check with db what key connects to what userid
                if (authKey == "userkey1") {
                    check = "1";
                } else if (authKey == "userkey2") {
                    check = "2";
                }

                // Determine if the sender should be on the right side
                let sendRightSide = false;
                if (check == data.Sender) {
                    sendRightSide = true;
                }

                const messageDiv = document.createElement("div");
                messageDiv.classList.add("message");

                if (sendRightSide) {
                    messageDiv.classList.add("sender");
                } else {
                    // Use your existing logic for left side
                    messageDiv.classList.add("receiver");
                }


                const date = new Date(data.Datetime);

                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');

                const formattedTime = `${hours}:${minutes}`;

                messageDiv.textContent = `${data.Message} ${formattedTime}`;
                chatContainer.appendChild(messageDiv);

                // Scroll to the bottom to show the latest message
                chatContainer.scrollTop = chatContainer.scrollHeight;
            } else {
                console.log("Skipping non-chat message:", event.data);
            }
        } catch (error) {
            console.error("Error parsing JSON:", error);
        }
    });

    socket.addEventListener("close", (event) => {
        console.log("WebSocket connection closed");
    });

    function getCookie() {
        checkAuthkey();
        // Read the value of the specified cookie
        authKey = document.cookie.replace(/(?:(?:^|.*;\s*)authkey\s*\=\s*([^;]*).*$)|^.*$/, "$1");

        // Log the value (you can remove this in production)
        console.log('Value of authkey cookie:', authKey);
    }

    // Function to send a message to the WebSocket server
    function sendMessage() {
        const messageInput = document.getElementById('messageInput');
        const message = messageInput.value;

        // Prompt the user for the receiver information
        var receiverId = getParameterByName('i');

        if (authKey !== undefined && receiverId !== null && message.trim() !== '') {
            const data = {
                sender: authKey,
                receiver: parseInt(receiverId),
                message: message
            };

            if (socket.readyState === WebSocket.OPEN) {
                socket.send(JSON.stringify(data));
                console.log(JSON.stringify(data));

                // Clear the input field
                messageInput.value = '';
            } else {
                console.error('WebSocket is not in the OPEN state.');
            }
        }
    }

    function retrieveData() {

        if (authKey == "userkey1") {
            var receiverID = 2;
        }
        if (authKey == "userkey2") {
            var receiverID = 1;
        }

        if (authKey !== undefined && receiverID !== undefined) {
            const data = {
                sender: authKey,
                receiver: parseInt(receiverID),
                data: "retrieve_data"
            };

            socket.send(JSON.stringify(data));
            console.log(JSON.stringify(data));

            // Clear the input field
            messageInput.value = '';
        }
    }
</script>

</html>