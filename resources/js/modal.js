// Get the modal
import axios from "axios";

var modal = document.getElementById("myModal");
document.getElementById('sendButton').style.display = 'none';
document.getElementById('contactDetails').style.display = 'none';

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");
var btn2 = document.getElementById("openModalBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

btn2.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    document.getElementById('contactDetails').style.display = 'none';
    document.getElementById('nextButton').style.display = 'block';
    document.getElementById('sendButton').style.display = 'none';
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        document.getElementById('contactDetails').style.display = 'none';
        document.getElementById('nextButton').style.display = 'block';
        document.getElementById('sendButton').style.display = 'none';
        modal.style.display = "none";
    }
}

// Function to check answers and show contact details
function checkAnswers() {
    const questions = document.querySelectorAll('.question');
    let yesCount = 0;

    // Check answers
    questions.forEach(question => {
        if (question.value === "yes") {
            yesCount++;
        }
    });

    // If 4 questions are answered "Да"
    if (yesCount >= 4) {
        document.getElementById('contactDetails').style.display = 'block';
        document.getElementById('nextButton').style.display = 'none';
        document.getElementById('sendButton').style.display = 'block';
    } else {
        document.getElementById('contactDetails').style.display = 'none';
        document.getElementById('nextButton').style.display = 'block';
        document.getElementById('sendButton').style.display = 'none';
        alert("Извините мы не сможем обработать ваш запрос");
    }
}

function sendToBackend() {
    const formData = new FormData(document.getElementById("applicationForm")); // Assuming you have a form with this ID
    console.log('hello');
    console.log('formdata', formData);
    // axios.post('/your-endpoint', formData, {
    //     headers: {
    //         'X-Requested-With': 'XMLHttpRequest', // Laravel recognizes this header for AJAX requests
    //     }
    // }).then(response => {
    //         console.log('Success:', response.data);
    //         // Handle success (e.g., show a success message, clear the form, etc.)
    //     })
    //     .catch(error => {
    //         console.error('Error:', error);
    //         // Handle error (e.g., show an error message)
    //     });
}

// Add event listener for the "Далее" button
document.getElementById("nextButton").onclick = function() {
    checkAnswers();
};

document.getElementById("sendButton").onclick = function() {
    sendToBackend();
}
