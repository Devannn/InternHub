function getMessages() {  
	
	var authKey = GetAuthKey();

    const apiUrl = `https://localhost:7040/api/Message/GetMessageOverview?auth_key=${authKey}`;
    
    // Make the API call using fetch
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {

			if (data == 0) {
				alert("Geen gesprekken gevonden.");
			}
            
			// Display the data in an HTML form
            displayData(data, authKey);
        })
        .catch(error => console.error('Error fetching data:', error));
    
}

function displayData(data, authKey) {
    const container = document.getElementById('messageContainer');

    if (data.length === 0) {
        container.innerHTML = '<p>No messages found.</p>';
        return;
    }

    console.log(data);
    let listHTML = '';

    getUserIdFromAuthKey(authKey)
        .then(user_id => {
            console.log(user_id);

            data.forEach(message => {
                let otherUsername = (message.Sender == user_id) ? message.Receiver_Username : message.Sender_Username;

				if (otherUsername === "") {
					otherUsername = "No Display Name";
				}
				
                const otherID = (message.Sender == user_id) ? message.Receiver : message.Sender;

                listHTML += `
                    <li>
                        <a href="?i=${otherID}" class="list-group-item">
                            <div class="row">
                                <div class="col-2">
                                    <div class="message-list-image">
                                        <img src="img/pfp.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col text-bold">${otherUsername}</div>
                                    <div class="col">${message.Message.substring(0, 20)}</div>
                                </div>
                            </div>
                        </a>
                    </li>
                `;
            });					
						
            container.innerHTML = `<ul class="list-group">${listHTML}</ul>`;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

async function retrieveData(receiverId) {
    if (receiverId !== undefined) {
		var authKey = GetAuthKey();
        try {
            const userId = await getUserIdFromAuthKey(authKey);

            const apiUrl = `https://localhost:7040/api/Message/GetChatMessage?auth_key=${authKey}&receiver=${receiverId}`;

            // Make the API call using fetch
            const response = await fetch(apiUrl);

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const data = await response.json();

            // Handle the API response data
            console.log("API response:", data);

            // Assuming data is an array of messages
            data.forEach((message) => {
                const messageDiv = document.createElement("div");
                messageDiv.classList.add("message");

                // Check if the sender is the current user				    
                const sendRightSide = (userId === message.Sender);

                if (sendRightSide) {
                    messageDiv.classList.add("sender");
                } else {
                    messageDiv.classList.add("receiver");
                }

                // Create span for time
                const timeSpan = document.createElement("span");
                timeSpan.classList.add("message-time");

                const date = new Date(message.Datetime);
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');
                const formattedTime = `${hours}:${minutes}`;

                timeSpan.textContent = formattedTime;

                // Create div for message content
                const messageContentDiv = document.createElement("div");
                messageContentDiv.classList.add("message-content");
                messageContentDiv.textContent = message.Message;

                // Append message content and time to message div
                messageDiv.appendChild(messageContentDiv);
                messageDiv.appendChild(timeSpan);

                chatContainer.appendChild(messageDiv);
            });

            // Scroll to the bottom to show the latest message
            chatContainer.scrollTop = chatContainer.scrollHeight;
        } catch (error) {
            // Handle errors
            console.error("Error:", error);
        }
    } else {
        console.warn("Invalid authKey or receiverId");
    }
}

function sendMessage(receiverId, messageInput) {
    const message = messageInput.value;
	const authKey = GetAuthKey();

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
