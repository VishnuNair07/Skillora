function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } 
    else if (input == "contact") {
        return `<a href="#contact">Click here</a>`;
    } 
    else if (input == "quiz") {
        return `<a href="online_quize/quizhome.php">Click here</a>`;
    } 
    else if (input == "faq") {
        return `<a href="#myfaq">Click here</a>`;
    } 
    else if (input == "service") {
        return `<a href="#service">Click here</a>`;
    } 
    else if (input == "logout") {
        return `<a href="./logout.php">Click here</a>`;
    } 
    else if (input == "login") {
        return `<a href="./login.php">Click here</a>`;
    } 
    else if (input == "signup") {
        return `<a href="./signup.php">Click here</a>`;
    } 
    else if (input == "details" || input == "detail") {
        return `<a href="#footer">Click here</a>`;
    } 
    else if (input == "tutorial" || input == "tutorials" || input == "programming" || input == "programming language" || input == "language" || input == "languages") {
        return `<a href="programmingdemo.php">Click here</a>`;
    } 
    else {
        return "Try asking something else!";
    }
}



