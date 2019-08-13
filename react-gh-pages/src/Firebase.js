import * as firebase from 'firebase';
import firestore from 'firebase/firestore'

const settings = {timestampsInSnapshots: true};

const config = {
  apiKey: "AIzaSyAD1pCxV0i1f0BTxENgYWdiDAhWP4ZyVRs",
  authDomain: "react-gh-pages.firebaseapp.com",
  databaseURL: "https://react-gh-pages.firebaseio.com",
  projectId: "react-gh-pages",
  storageBucket: "",
  messagingSenderId: "517340720542",
  appId: "1:517340720542:web:7f81c77dda66ff0b"
};
firebase.initializeApp(config);

firebase.firestore().settings(settings);

export default firebase;
