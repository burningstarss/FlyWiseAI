import { initializeApp } from  "https://www.gstatic.com/firebasejs/10.8.1/firebase-app.js";
import { getFirestore } from  "https://www.gstatic.com/firebasejs/10.8.1/firebase-firestore.js"

const firebaseConfig = {
  apiKey: "AIzaSyDm1mBmVy8EncByxxEzgzinZ-pS-5HYL60",
  authDomain: "flywiseai.firebaseapp.com",
  projectId: "flywiseai",
  storageBucket: "flywiseai.appspot.com",
  messagingSenderId: "179532463635",
  appId: "1:179532463635:web:e3beab3f02a9a9a0dd89e6",
  measurementId: "G-CGT9YE4EHL"
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

export { db };

console.log("conexion a Firebase establecida correctamente");