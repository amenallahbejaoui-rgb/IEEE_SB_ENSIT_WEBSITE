function updateAv(img) {
    var resPageLogin = document.getElementById("res-login");
    var resNav = document.getElementById("res-nav");    
    resPageLogin.src = img;
    resNav.src = img;
}

function Submitlogin() {
    var name = document.getElementById("name").value;  
    var email = document.getElementById("email").value;
    var loginName = document.getElementById("login-name");

    // Extract the first word before the first space
    var firstName = name.split(" ")[0];

    if (firstName) {
        loginName.innerHTML = firstName;
    } else {
        loginName.innerHTML = "Anonymous";
    }

    document.getElementById("badge-icon").style.display = "block";
    document.getElementById("login-window");
    closeLogin();

    // Prepare data to be saved in the file
    var data = `Name: ${firstName}\nEmail: ${email}`;

    // Create a Blob object
    var blob = new Blob([data], { type: 'text/plain' });

    // Create an anchor element and trigger the download
    var link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "player.txt";

    // Append the link to the body and trigger click
    document.body.appendChild(link);
    link.click();

    // Remove the link from the document
    document.body.removeChild(link);
}
