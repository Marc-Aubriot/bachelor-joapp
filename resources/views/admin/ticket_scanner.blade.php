<div class="main">
    <div class="content-panel">
        <div id="container">
            <h1>QR Code Scanner</h1>
            <p>Click on qr code image to activate scanner, then scan a qr code</p>

            <a id="btn-scan-qr">
                <img src="https://uploads.sitepoint.com/wp-content/uploads/2017/07/1499401426qr_icon.svg">
            <a/>

            <canvas hidden="" id="qr-canvas"></canvas>

            <div id="qr-result" hidden="">
                <b>Billet:</b> <span id="outputData"></span>
            </div>

            <div id="user-datas" class="datas" hidden="">
                <p>Prénom: <span id="user-firstname"></span></p>
                <p>Nom: <span id="user-lastname"></span></p>    
                <p>Email: <span id="user-email"></spanp></p>
                <p>Clef du compte: <span id="user-accountkey"></span></p>
                <p>Type de billet: <span id="ticket-title"></span></p>
                <p>Billet utilisé le: <span id="ticket-dateused"></span></p>
                <p>Clef du billet: <span id="ticket-key"></span></p>
                <div class="button-wrapper">
                    <button id="validate-button" onclick="validateTicket()" class="validate-button">Valider le billet</button>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>

<script>
    const qr = window.qrcode;

    const video = document.createElement("video");
    const canvasElement = document.getElementById("qr-canvas");
    const canvas = canvasElement.getContext("2d");

    const qrResult = document.getElementById("qr-result");
    const outputData = document.getElementById("outputData");
    const btnScanQR = document.getElementById("btn-scan-qr");
    const validate_button = document.getElementById("validate-button");

    const userDatasDiv = document.getElementById("user-datas");
    const p_firstname = document.getElementById("user-firstname");
    const p_lastname = document.getElementById("user-lastname");
    const p_email = document.getElementById("user-email");
    const p_accountkey = document.getElementById("user-accountkey");
    const p_title = document.getElementById("ticket-title");
    const p_dateused = document.getElementById("ticket-dateused");
    const p_ticketkey = document.getElementById("ticket-key");

    let scanning = false;
    let clientDatas = {};
    let ticketDatas = {};

    qr.callback = res => {
        if (res) {
            outputData.innerText = res;
            scanning = false;

            video.srcObject.getTracks().forEach(track => {
            track.stop();
            });

            qrResult.hidden = false;
            canvasElement.hidden = true;
            btnScanQR.hidden = false;
            getDatas(res);
        }
    };

    async function getDatas(ticketCode) {
        //const url = "http://127.0.0.1:8000/admin/ticket-scanner"; // LOCAL
        const url = "https://dev4a.online/admin/ticket-scanner"; // PROD
        try {
            const response = await fetch(url, {
                method: "POST",
                body: JSON.stringify({ "ticketcode": ticketCode }),
                headers: {
                    "Content-Type": "application/json",
                },
            });
            if (!response.ok) {
                throw new Error(`Response status: ${response.status}`);
            }
            const json = await response.json();
            clientDatas = json.client_datas;
            ticketDatas = json.ticket_datas;
            hydrateUserDatas();
        } catch (error) {
            console.error(error.message);
        }
    };

    function hydrateUserDatas() {
        console.log("generating user content");
        userDatasDiv.hidden = false;
        p_firstname.innerText = clientDatas.firstname;
        p_lastname.innerText = clientDatas.lastname;
        p_email.innerText = clientDatas.email;
        p_accountkey.innerText = clientDatas.accountkey;
        p_title.innerText = ticketDatas.ticket_title;

        //  check if ticket is already used
        if (ticketDatas.date_used != null) {
            validate_button.hidden = true;
            p_dateused.innerText = `${ticketDatas.date_used} NON VALIDE !`;
            p_dateused.classList = "error";
        } else p_dateused.innerText = "Billet valable";
        p_ticketkey.innerText = ticketDatas.ticket_key;
    };

    async function validateTicket(ticketCode) {
        //const url = "http://127.0.0.1:8000/admin/ticket-scanner/validate"; // LOCAL
        const url = "https://dev4a.online/admin/ticket-scanner/validate"; // PROD
        try {
            const response = await fetch(url, {
                method: "POST",
                body: JSON.stringify({ "ticket_id": ticketDatas.id }),
                headers: {
                    "Content-Type": "application/json",
                },
            });

            if (!response.ok) {
                throw new Error(`Response status: ${response.status}`);
            }

            const json = await response.json();
            if (json.response == "billet validé") {
                outputData.innerText = "Validé !"
                outputData.classList = "validation"
                validate_button.hidden = true;
            }
        } catch (error) {
            console.error(error.message);
        }
    };

    btnScanQR.onclick = () => {
        navigator.mediaDevices
            .getUserMedia({ video: { facingMode: "environment" } })
            .then(function(stream) {
            scanning = true;
            qrResult.hidden = true;
            btnScanQR.hidden = true;
            canvasElement.hidden = false;
            video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
            video.srcObject = stream;
            video.play();
            tick();
            scan();
            });
    };

    function tick() {
        canvasElement.height = video.videoHeight;
        canvasElement.width = video.videoWidth;
        canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

        scanning && requestAnimationFrame(tick);
    }

    function scan() {
        try {
            qrcode.decode();
        } catch (e) {
            setTimeout(scan, 300);
        }
    }
</script>
<style>
    /* tags */
    html {
        height: 100%;
    }

    body {
        font-family: sans-serif;
        padding: 0 10px;
        height: 100%;
        margin: 0;
    }

    h1 {
        margin: 0;
        padding: 15px;
    }
    
    p {
       font-size: 40px;
    }

    /* classes */
    .main {
        display: flex;
        width: 100%;
        height: 100%;
    }

    .content-panel {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .datas {
        width: 100%;
        height: fit-content;
        text-align: start;
    }

    .button-wrapper {
        width: 100%;
        height: fit-content;
        display: flex;
        justify-content: center
    }

    .validate-button {
        cursor: pointer;
        background-color: green;
        font-size: 40px;
        padding: 40px;
        border-radius: 16px;
    }

    .validation {
        background-color: green;
    }

    .error {
        background-color: red;
    }

    /* ids */
    #container {
        text-align: center;
        margin: 0;
    }

    #qr-canvas {
        margin: auto;
        width: calc(100% - 20px);
        max-width: 400px;
    }

    #btn-scan-qr {
        cursor: pointer;
    }

    #btn-scan-qr img {
        height: 10em;
        padding: 15px;
        margin: 15px;
        background: white;
    }

    #qr-result {
        font-size: 1.2em;
        margin: 20px auto;
        padding: 20px;
        max-width: 700px;
        background-color: white;
    }

    @media screen and (min-width: 992px) {
        p {
            font-size: 16px;
        }

        .validate-button {
            font-size: 16px;
            padding: 10px;
        }
    }
</style>
