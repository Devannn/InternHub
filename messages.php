<?php
include 'inc/checkAuthKey.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include CSS/JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/messages.js"></script>

    <title>InternHub</title>
	
	<style>
		.list-group {
			list-style: none;
		}	
	
        #chat-container {
            display: flex;
            flex-direction: column;
            border: 1px solid #ccc;
			max-width: 100%; /* Set your desired maximum width */
			max-height: 400px; /* Set your desired maximum height */
			overflow-y: auto; /* Enable vertical scrolling */
        }

        .message {
            margin: 5px;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
			display: flex;
			align-items: center;
			position: relative;
			justify-content: space-between;
        }

        .sender {
            background-color: #e0f7fa; 
            align-self: flex-end;
        }

        .receiver {
            background-color: #ffccbc; 
            align-self: flex-start;
        }
		
		.message {word-wrap: break-word !important;}
		
		input{
			width: 90%;
			margin: 20px 0px 0px 0px;
		}
		
		.message-time {
		  font-size: 50%; 
		  padding-left: 10px;
		  padding-bottom: 2px;
		  padding-right: 4px;
		  position: absolute;
		  bottom: 0;
		  right: 0;
		  z-index: 1; 
		}
    </style>
</head>

<body onload="getMessages(); retrieveData(getParameterByName('i'));">
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
                                        
										
										<div id="messageContainer"></div>
										

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
                        
						<div id="messagebox">
							<div class="card-header">
								<span id="receiver">No Display Name</span>
							</div>
							<div class="card-body">
								<div id="chat-container"></div>
							</div>
							<div class="card-footer">
								<input type="text" id="messageInput" placeholder="Type your message">
								<button onclick="sendMessage(getParameterByName('i'), document.getElementById('messageInput'))">Send</button>
							</div>
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
(async function() {
	try {
		const authKey = GetAuthKey();
		const receiverName = await getDisplayNameFromUserID(authKey, getParameterByName('i'));
		
		if (receiverName === undefined || receiverName === null || receiverName === "") {
			receiverName = "No Display Name";
		}

		document.getElementById('receiver').innerHTML = receiverName;
		
		// Check if receiverName is 0, and hide the textbox accordingly
        const messageInput = document.getElementById('messagebox');
        if (receiverName == "0") {
            messageInput.style.display = 'none';
        } else {
            messageInput.style.display = 'block';
        }
		
	} catch (error) {
		console.error('Error updating receiver:', error);
	}
})();

    const socket = new WebSocket(WSaddress());
    var authKey = GetAuthKey();
	var user_id;	

	(async () => {
		user_id = await getUserIdFromAuthKey(authKey);
	})();
	
    const chatContainer = document.getElementById("chat-container"); 

    socket.addEventListener("open", (event) => {
        console.log("WebSocket connection opened");
		AcknowledgeWebsocket(authKey);
    });

    socket.addEventListener("message", (event) => {
	console.log("Received from server: ", event.data);
        try {
			const data = JSON.parse(event.data);
			
			if (
			  data.hasOwnProperty("Sender") &&
			  data.hasOwnProperty("Receiver") &&
			  data.hasOwnProperty("Message") &&
			  data.hasOwnProperty("Datetime")
			) {
			
			  const messageDiv = document.createElement("div");
			  messageDiv.classList.add("message");
			  
			  // Check if the sender is the current user
				console.log(user_id);
				console.log(data.Sender);
              const sendRightSide = (user_id == data.Sender);
			  
              if (sendRightSide) {
                  messageDiv.classList.add("sender");
              } else {
                  messageDiv.classList.add("receiver");
              }

			  const timeDiv = document.createElement("span");
			  timeDiv.classList.add("message-time");

			  const date = new Date(data.Datetime);
			  const hours = String(date.getHours()).padStart(2, "0");
			  const minutes = String(date.getMinutes()).padStart(2, "0");
			  const formattedTime = `${hours}:${minutes}`;

			  timeDiv.textContent = formattedTime;

              // Create div for message content
		      const messageContentDiv = document.createElement("div");
			  messageContentDiv.classList.add("message-content");
			  messageContentDiv.textContent = data.Message;
            
			  // Append message content and time to message div
			  messageDiv.appendChild(messageContentDiv);
			  messageDiv.appendChild(timeDiv);

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

document.addEventListener("DOMContentLoaded", function() {	
    setInterval(function() {
        getMessages();
    }, 10000);
});

</script>


</html>