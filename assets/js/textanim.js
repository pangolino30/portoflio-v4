var typingtext = document.getElementById("typingtext");
var typewriter = new Typewriter(typingtext, {
	loop: true,
	delay: 75,
});
typewriter.typeString("Je suis étudiant en BTS SIO.").pauseFor(800).deleteChars(20).typeString("passionné par l'informatique.").pauseFor(800).deleteChars(15).typeString("le développement web.").pauseFor(800).deleteChars(21).typeString("la modélisation 3D.").pauseFor(800).deleteChars(19).typeString("le design.").pauseFor(800).deleteChars(37).typeString("Encore là ?").pauseFor(2000).start();
// .deleteChars(37).typeString("J'aime les chats 😻").pauseFor(800)
