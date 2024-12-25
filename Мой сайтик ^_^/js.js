document.getElementById('forma').addEventListener('submit', function(event) {
    const Name = document.getElementById('Name');
    const Email = document.getElementById("Email");
    const errorSound = document.getElementById('errorSound');
    const errorMessage = document.getElementById('errorMessage');

    errorSound.volume = 0.1;

    if (Name.value.trim() === '' || Name.validity.valid === false) {
        event.preventDefault(); 
        errorSound.currentTime = 0;
        errorSound.play(); 
        Name.style.border = '2px solid red'; 
        errorMessage.style.display = 'block';
    } 
    else {
        Name.style.border = ''; 
    }
    if (Email.value.trim() === '' || Email.validity.valid === false) {
        event.preventDefault(); 
        errorSound.currentTime = 0;
        errorSound.play(); 
        Email.style.border = '2px solid red'; 
        errorMessage.style.display = 'block';
    } 
    else {
        Email.style.border = ''; 
    }
});

