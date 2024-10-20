import Swal from 'sweetalert2';

var modal = document.getElementById("myModal");
var currentTab = 0; // Start at the first tab
var rightAnswers = 0;
document.getElementById('sendButton').style.display = 'none';
showTab(currentTab); // Display the first tab

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
    resetModal();
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        resetModal();
        modal.style.display = "none";
    }
}

// Show the current tab and update the step indicator
function showTab(n) {
    var tabs = document.getElementsByClassName("tab");
    tabs[n].style.display = "block";

    // Update step indicators
    updateStepIndicator(n);

    document.getElementById("prevButton").style.display = n == 0 ? "none" : "inline";
    document.getElementById("nextButton").style.display = (n == tabs.length - 1) ? "none" : "inline";
    document.getElementById("sendButton").style.display = (n == tabs.length - 1) ? "inline" : "none";
}

// Hide the current tab
function hideTab(n) {
    var tabs = document.getElementsByClassName("tab");
    tabs[n].style.display = "none";
}

// Handle Next button click
document.getElementById("nextButton").onclick = function() {
    var q1 = document.getElementById('question1').value;
    var q2 = document.getElementById('question2').value;
    var q3 = document.getElementById('question3').value;
    // var q4 = document.getElementById('question4').value;
    if (currentTab === 0) {
        if (q1 != "null" && q1 === "Да") {
            hideTab(currentTab);
            currentTab++;
            showTab(currentTab);
        } else if (q1 === "null") {
            Swal.fire({
                icon: 'error',
                title: 'Ошибка, что-то пошло не так',
                text: 'Пожалуйста, выберите ответ',
                confirmButtonText: 'ОК'
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Ошибка, что-то пошло не так',
                text: 'Спасибо за ваше обращение, однако, к сожалению, ваш спор не подпадает под юрисдикцию нашего арбитражного суда.',
                confirmButtonText: 'ОК'
            });
        }
    // }
    // else if(currentTab === 1) {
    //     if (q2 != "null") {
    //         hideTab(currentTab);
    //         currentTab++;
    //         showTab(currentTab);
    //     } else if (q2 === "null") {
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Ошибка',
    //             text: 'Пожалуйста, выберите ответ',
    //             confirmButtonText: 'ОК'
    //         });
    //     } else {
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Ошибка, что-то пошло не так',
    //             text: 'Спасибо за ваше обращение, однако, к сожалению, ваш спор не подпадает под юрисдикцию нашего арбитражного суда.',
    //             confirmButtonText: 'ОК'
    //         });
    //     }
    } else if (currentTab === 1) {
        if (q2 === "НУ МАС Pactum" || q2 === "В соответствии с законодательством РК") {
            hideTab(currentTab);
            currentTab++;
            showTab(currentTab);
        } else if (q2 === "null") {
            Swal.fire({
                icon: 'error',
                title: 'Ошибка, что-то пошло не так',
                text: 'Пожалуйста, выберите ответ',
                confirmButtonText: 'ОК'
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Ошибка, что-то пошло не так',
                text: 'Спасибо за ваше обращение, однако, к сожалению, ваш спор не подпадает под юрисдикцию нашего арбитражного суда.',
                confirmButtonText: 'ОК'
            });
        }
    } else if (currentTab === 2){
        if (q3 === "Нет") {
            hideTab(currentTab);
            currentTab++;
            showTab(currentTab);
        } else if (q3 === "null") {
            Swal.fire({
                icon: 'error',
                title: 'Ошибка, что-то пошло не так',
                text: 'Пожалуйста, выберите ответ',
                confirmButtonText: 'ОК'
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Ошибка, что-то пошло не так',
                text: 'Спасибо за ваше обращение, однако, к сожалению, ваш спор не подпадает под юрисдикцию нашего арбитражного суда.',
                confirmButtonText: 'ОК'
            });
        }
    } else if (currentTab < document.getElementsByClassName("tab").length - 1) {
        hideTab(currentTab);
        currentTab++;
        showTab(currentTab);
    }
};

// Handle Previous button click
document.getElementById("prevButton").onclick = function() {
    if (currentTab > 0) {
        hideTab(currentTab);
        currentTab--;
        showTab(currentTab);
    }
};

// Function to update the step indicator
function updateStepIndicator(n) {
    var steps = document.getElementsByClassName("step");
    for (var i = 0; i < steps.length; i++) {
        steps[i].classList.remove("active-step");
        steps[i].classList.remove("completed-step");
        if (i < n) {
            steps[i].classList.add("completed-step"); // Mark previous steps as completed
        } else if (i === n) {
            steps[i].classList.add("active-step"); // Mark the current step as active
        }
    }
}

// Function to reset the modal
function resetModal() {
    currentTab = 0;
    var tabs = document.getElementsByClassName("tab");
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }
    showTab(currentTab);
}

// Handle Send button click
document.getElementById("sendButton").onclick = function() {
    sendToBackend();
};

function sendToBackend() {
    const validation = validateForm();

    if (!validation.isValid) {
        // Show an error message if any field is empty
        Swal.fire({
            icon: 'error',
            title: 'Ошибка, что-то пошло не так',
            text: validation.errorMessage,
            confirmButtonText: 'ОК'
        });
        return; // Stop submission if validation fails
    }

    const formData = new FormData(document.getElementById("applicationForm"));

    Swal.fire({
        title: 'Подождите...',
        text: 'Идет обработка...',
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    axios.post('/api/send', formData, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
        }
    }).then(response => {
        Swal.close();
        Swal.fire({
            icon: 'success',
            title: 'Успешно',
            text: 'Ваше обращение принято на рассмотрение, и с вами свяжутся в ближайшее время.',
            confirmButtonText: 'ОК'
        })
            .then(() => {
            modal.style.display = "none";
            resetModal();
        });
    }).catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Ошибка, что-то пошло не так',
            text: 'Произошла ошибка при отправке данных.',
            confirmButtonText: 'ОК'
        });
    })
}

function validateForm() {
    const form = document.getElementById("applicationForm");
    const formData = new FormData(form);

    let isValid = true;
    let errorMessage = '';

    const legalStatus = formData.get('legalStatus');
    const organizationName = formData.get('organizationName');

    for (let [key, value] of formData.entries()) {
        if (key === 'organizationName' && legalStatus === 'физическое лицо') {
            continue;
        }

        if (!value) {
            var translate = '';
            switch (key) {
                case 'fullName':
                    translate = 'Полное имя';
                    break;
                case 'phone':
                    translate = 'Номер телефона';
                    break;
                case 'legalStatus':
                    translate = 'Ваш статус';
                    break;
                case 'organizationName':
                    translate = 'Наименование организации';
                    break;
                default:
                    break;
            }
            isValid = false;
            errorMessage += `${translate} не может быть пустым.\n`; // Append the name of the empty field
        }
    }

    return { isValid, errorMessage };
}

