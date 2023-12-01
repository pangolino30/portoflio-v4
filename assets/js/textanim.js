var typingtext = document.getElementById("typingtext");
var typewriter = new Typewriter(typingtext, {
	loop: true,
	delay: 75,
});
typewriter.typeString("Je suis étudiant en BTS SIO").pauseFor(800).deleteChars(19).typeString("passionné par l'inforatique").pauseFor(800).deleteChars(13).typeString("le développement web").pauseFor(800).deleteChars(20).typeString("la modélisation 3D").pauseFor(800).deleteChars(18).typeString("le design.").pauseFor(800).start();
