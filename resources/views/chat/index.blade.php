<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>

<h3>Chat Box</h3>

<div id="box" style="border:1px solid #ccc;height:300px;overflow:auto;"></div>

<input type="text" id="msg">
<button onclick="send()">Send</button>

<script>
let userId = {{ $userId }};

function getSenderName(senderId) {
    senderId = Number(senderId);

    if (senderId === 2) {
        return 'Admin';
    }

    if (senderId === 1) {
        return 'User';
    }

    return `User ${senderId}`;
}

function load() {
    fetch(`/messages/${userId}`)
        .then(r => r.json())
        .then(data => {
            let box = document.getElementById('box');
            box.innerHTML = '';

            data.forEach(m => {
                const senderName = getSenderName(m.sender_id);
                box.innerHTML += `<div><b>${senderName}</b>: ${m.message}</div>`;
            });

            box.scrollTop = box.scrollHeight;
        });
}

function send() {
    const input = document.getElementById('msg');
    const message = input.value.trim();

    if (!message) {
        return;
    }

    fetch('/messages', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            receiver_id: userId,
            message: message
        })
    }).then(response => {
        if (!response.ok) {
            return response.json().then(data => Promise.reject(data));
        }

        input.value = '';
        load();
    }).catch(error => {
        console.error('Chat send error:', error);
    });
}

setInterval(load, 2000);
load();
</script>

</body>
</html>