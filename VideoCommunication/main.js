import './style.css';

import firebase from 'firebase/app';
import 'firebase/firestore';

// const firebaseConfig = {
//   apiKey: "AIzaSyA29sfHd9kj2R4MkwfuOxNN7q2C5lsXFpA",
//   authDomain: "webrtc-18570.firebaseapp.com",
//   databaseURL: "https://webrtc-18570-default-rtdb.firebaseio.com",
//   projectId: "webrtc-18570",
//   storageBucket: "webrtc-18570.appspot.com",
//   messagingSenderId: "468198801835",
//   appId: "1:468198801835:web:65ca26cc74c109d82852ee",
//   measurementId: "G-CWZXJNHMG5"
// };

const firebaseConfig = {
  apiKey: "AIzaSyA8WycXcmMxJtnfgfQk7FqLGqRo83PVlRQ",
  authDomain: "pdgr7-80f78.firebaseapp.com",
  projectId: "pdgr7-80f78",
  storageBucket: "pdgr7-80f78.appspot.com",
  messagingSenderId: "468386100556",
  appId: "1:468386100556:web:ea4a2d99d372503b5f0be9",
  measurementId: "G-BX5YCKV4FC"
};

if (!firebase.apps.length) {
  firebase.initializeApp(firebaseConfig);
}
const firestore = firebase.firestore();

const servers = {
  iceServers: [
    {
      urls: ['stun:stun1.l.google.com:19302', 'stun:stun2.l.google.com:19302'],
    },
  ],
  iceCandidatePoolSize: 10,
};


const pc = new RTCPeerConnection(servers);
let localStream = null;
let remoteStream = null;



const webcamButton = document.getElementById('webcamButton');
// const voiceButton = document.getElementById('voiceButton');
// const wButton = document.getElementById('wButton');
const webcamVideo = document.getElementById('webcamVideo');
const callButton = document.getElementById('callButton');
const callInput = document.getElementById('callInput');
const answerButton = document.getElementById('answerButton');
const remoteVideo = document.getElementById('remoteVideo');
const hangupButton = document.getElementById('hangupButton');


webcamButton.onclick = async () => {
  if(localStream !== null)
    localStream = null
  

  localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
  remoteStream = new MediaStream();

  // Dergo tracks nga local stream ne lidhje
  localStream.getTracks().forEach((track) => {
    pc.addTrack(track, localStream);
  });

  // Merri tracks nga remote stream, dhe shtoi ne video stream
  pc.ontrack = (event) => {
    event.streams[0].getTracks().forEach((track) => {
      remoteStream.addTrack(track);
    });
  };

  webcamVideo.srcObject = localStream;
  remoteVideo.srcObject = remoteStream;

  callButton.disabled = false;
  answerButton.disabled = false;
  webcamButton.disabled = false;
};





// 2. Krijo nje thirrje
callButton.onclick = async () => {
  const callDoc = firestore.collection('calls').doc();
  const offerCandidates = callDoc.collection('offerCandidates');
  const answerCandidates = callDoc.collection('answerCandidates');

  callInput.value = callDoc.id;

  // Merr kandidate per thirrje dhe ruaji ne databaze
  pc.onicecandidate = (event) => {
    event.candidate && offerCandidates.add(event.candidate.toJSON());
  };

  // Krijo thirrjen
  const offerDescription = await pc.createOffer();
  await pc.setLocalDescription(offerDescription);

  const offer = {
    sdp: offerDescription.sdp,
    type: offerDescription.type,
  };

  await callDoc.set({ offer });

  // Degjo per pergjigje
  callDoc.onSnapshot((snapshot) => {
    const data = snapshot.data();
    if (!pc.currentRemoteDescription && data?.answer) {
      const answerDescription = new RTCSessionDescription(data.answer);
      pc.setRemoteDescription(answerDescription);
    }
  });

  // Kur klikohet butoni pergjigju shto kandidatin ne thirrje
  answerCandidates.onSnapshot((snapshot) => {
    snapshot.docChanges().forEach((change) => {
      if (change.type === 'added') {
        const candidate = new RTCIceCandidate(change.doc.data());
        pc.addIceCandidate(candidate);
      }
    });
  });

  hangupButton.disabled = false;
};

// Pergjigju thirrjes
answerButton.onclick = async () => {
  const callId = callInput.value;
  const callDoc = firestore.collection('calls').doc(callId);
  const answerCandidates = callDoc.collection('answerCandidates');
  const offerCandidates = callDoc.collection('offerCandidates');

  pc.onicecandidate = (event) => {
    event.candidate && answerCandidates.add(event.candidate.toJSON());
  };

  const callData = (await callDoc.get()).data();

  const offerDescription = callData.offer;
  await pc.setRemoteDescription(new RTCSessionDescription(offerDescription));

  const answerDescription = await pc.createAnswer();
  await pc.setLocalDescription(answerDescription);

  const answer = {
    type: answerDescription.type,
    sdp: answerDescription.sdp,
  };

  await callDoc.update({ answer });

  offerCandidates.onSnapshot((snapshot) => {
    snapshot.docChanges().forEach((change) => {
      console.log(change);
      if (change.type === 'added') {
        let data = change.doc.data();
        pc.addIceCandidate(new RTCIceCandidate(data));
      }
    });
  });
};


