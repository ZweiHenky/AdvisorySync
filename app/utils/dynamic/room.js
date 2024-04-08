// const APP_ID = document.querySelector('#id_app')
// const TOKEN = null
// const CHANNEL = document.querySelector('#channel')

const APP_ID = "4ed26a7ffb4f41a0bb601762483c6927"
const TOKEN = null
const CHANNEL = "My New Project"

const client = AgoraRTC.createClient({mode:'rtc', codec:'vp8'})

let localTracks = []
let remoteUsers = {}

let localScreenTracks;
let sharingScreen = false;

let joinAndDisplayLocalStream = async () => {

    client.on('user-published', handleUserJoined)
    
    client.on('user-left', handleUserLeft)
    
    let UID = await client.join(APP_ID, CHANNEL, TOKEN, null)

    localTracks = await AgoraRTC.createMicrophoneAndCameraTracks() 

    let player = `<div class="video-container" id="user-container-${UID}">
                        <div class="video-player" id="user-${UID}"></div>
                  </div>`
    document.getElementById('video-streams').insertAdjacentHTML('beforeend', player)

    localTracks[1].play(`user-${UID}`)
    
    await client.publish([localTracks[0], localTracks[1]])
}

let joinStream = async () => {
    await joinAndDisplayLocalStream()
    document.getElementById('join-btn').style.display = 'none'
    document.getElementById('stream-controls').style.display = 'flex'
}

let handleUserJoined = async (user, mediaType) => {

    remoteUsers[user.uid] = user 
    await client.subscribe(user, mediaType)

    if (mediaType === 'video'){
        let player = document.getElementById(`user-container-${user.uid}`)
        if (player != null){
            player.remove()
        }

        player = `<div class="video-container" id="user-container-${user.uid}">
                        <div class="video-player" id="user-${user.uid}"></div> 
                 </div>`
        document.getElementById('video-streams').insertAdjacentHTML('beforeend', player)

        user.videoTrack.play(`user-${user.uid}`)
    }

    if (mediaType === 'audio'){
        user.audioTrack.play()
    }
}

let handleUserLeft = async (user) => {
    delete remoteUsers[user.uid]
    document.getElementById(`user-container-${user.uid}`).remove()
}

let leaveAndRemoveLocalStream = async () => {
    for(let i = 0; localTracks.length > i; i++){
        localTracks[i].stop()
        localTracks[i].close()
    }

    await client.leave()
    document.getElementById('join-btn').style.display = 'block'
    document.getElementById('stream-controls').style.display = 'none'
    document.getElementById('video-streams').innerHTML = ''
}

let toggleMic = async (e) => {
    if (localTracks[0].muted){
        await localTracks[0].setMuted(false)
        e.target.innerText = 'Mic on'
        e.target.style.backgroundColor = 'cadetblue'
    }else{
        await localTracks[0].setMuted(true)
        e.target.innerText = 'Mic off'
        e.target.style.backgroundColor = '#EE4B2B'
    }
}

let toggleCamera = async (e) => {
    if(localTracks[1].muted){
        await localTracks[1].setMuted(false)
        e.target.innerText = 'Camera on'
        e.target.style.backgroundColor = 'cadetblue'
    }else{
        await localTracks[1].setMuted(true)
        e.target.innerText = 'Camera off'
        e.target.style.backgroundColor = '#EE4B2B'
    }
}

// let toggleScreen = async (e) => {
//     let screenButton = e.currentTarget
//     let cameraButton = document.getElementById('camera-btn')

//     if(!sharingScreen){
//         sharingScreen = true

//         screenButton.classList.add('active')
//         cameraButton.classList.remove('active')
//         cameraButton.style.display = 'none'

//         localScreenTracks = await AgoraRTC.createScreenVideoTrack()

//         document.getElementById(`user-container-${UID}`).remove()
//         displayFrame.style.display = 'block'

//         let player = `<div class="video__container" id="user-container-${UID}">
//                 <div class="video-player" id="user-${UID}"></div>
//             </div>`

//         displayFrame.insertAdjacentHTML('beforeend', player)
//         document.getElementById(`user-container-${UID}`).addEventListener('click', expandVideoFrame)

//         userIdInDisplayFrame = `user-container-${UID}`
//         localScreenTracks.play(`user-${UID}`)

//         await client.unpublish([localTracks[1]])
//         await client.publish([localScreenTracks])

//         let videoFrames = document.getElementsByClassName('video__container')
//         for(let i = 0; videoFrames.length > i; i++){
//             if(videoFrames[i].id != userIdInDisplayFrame){
//               videoFrames[i].style.height = '100px'
//               videoFrames[i].style.width = '100px'
//             }
//           }


//     }else{
//         sharingScreen = false 
//         cameraButton.style.display = 'block'
//         document.getElementById(`user-container-${uid}`).remove()
//         await client.unpublish([localScreenTracks])

//         switchToCamera()
//     }
// }

document.getElementById('join-btn').addEventListener('click', joinStream)
document.getElementById('leave-btn').addEventListener('click', leaveAndRemoveLocalStream)
document.getElementById('mic-btn').addEventListener('click', toggleMic)
document.getElementById('camera-btn').addEventListener('click', toggleCamera)
