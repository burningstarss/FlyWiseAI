import { collection, addDoc } from "https://www.gstatic.com/firebasejs/10.8.1/firebase-firestore.js"; 
import { db } from "./firebaseconnect.js";

const formulario = document.getElementById("formulario");
const contrasena = document.getElementById("password");
const nombre = document.getElementById("name");

formulario.addEventListener("submit", async function (event) {
    event.preventDefault();
    try {
        await addDoc(collection(db, "Usuario"), {
        contrasena: contrasena.value,
        nombre: nombre.value
        });
    } catch (error) {
        console.error("Error adding document: ", error);
    }
});