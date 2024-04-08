<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../app/styles/dynamic/config.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../app/utils/dynamic/tailwind.config.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src='../app/assets/AgoraRTC_N-4.20.2.js'></script>
    <style>
        #video-streams{
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            height: 90vh;
            width: 1400px;
            margin:0 auto;
        }

        .video-container{
            max-height: 100%;
            border: 2px solid black;
            background-color: #203A49;
        }

        .video-player{
            height: 100%;
            width: 100%;
        }

        button{
            border:none;
            background-color: cadetblue;
            color:#fff;
            padding:10px 20px;
            font-size:16px;
            margin:2px;
            cursor: pointer;
        }

        #stream-controls{
            display: none;
            justify-content: center;
            margin-top:0.5em;
        }

        @media screen and (max-width:1400px){
            #video-streams{
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                width: 95%;
            }
        }
    </style>
</head>
<body>

<!-- 
    <main class='bg-black h-[100dvh]  flex flex-col items-center pt-6 gap-5'>
        <div class='bg-white h-[40%] border w-[90%] rounded'>
            
        </div>
        <div class='bg-white h-[40%] border w-[90%] rounded'>
            
        </div>

    </main>

    
    <div class='flex text-white absolute  bottom-5 w-[90%] justify-between mx-auto left-5'>
        <a href="profile">
            <img src="../app/assets/icons/back.svg" class='w-[10%] h-auto' alt="">
        </a>
        <img id='btn-message' src="../app/assets/icons/chatStream.svg" class='w-[10%] h-auto' alt="">
    </div>

    <div id='chat' class='h-[70dvh] w-56 bg-white absolute rounded bottom-5 right-4 border hidden'>
        <div class='relative '>
        <img id='close-chat' src="../app/assets/icons/close.svg" class='w-[10%] h-auto absolute right-0' alt="">
        </div>
        <div class='h-[87%] w-full'>

        </div>
        <div class='flex p-2 gap-2 '>
            <textarea type="text" name="" id="" class='h-10 w-2/3 bg-gray-100 rounded' placeholder='escribir'></textarea>
            <button type="submit" class='border w-1/3'>Enviar</button>
        </div>
    </div>

    <script>

        const btnMessage = document.querySelector('#btn-message')
        const chat = document.querySelector('#chat')
        const closeChat = document.querySelector('#close-chat')

        btnMessage.addEventListener('click', e =>{
            chat.classList.remove('hidden')
        })

        closeChat.addEventListener('click', e =>{
            chat.classList.add('hidden')
        })

    </script> -->

    <button id="join-btn">Join Stream</button>

    <div id="stream-wrapper">
        <div id="video-streams">
            
        </div>

        <div id="stream-controls">
            <button id="leave-btn">Leave Stream</button>
            <button id="mic-btn">Mic On</button>
            <button id="camera-btn">Camera on</button>
            <button id="screen-btn">Share Screen</button>
        </div>
    </div>

    
    <script src='../app/utils/dynamic/room.js'></script>
</body>
</html>