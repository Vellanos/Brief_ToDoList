const progressBar = document.querySelector('progress');
const tasks = document.querySelectorAll('li');
const checkbox = document.querySelectorAll('.check_progress');
const maxProgress = tasks.length;
let currentProgress = 0;

// console.log(currentProgress);


for (let i = 0; i < maxProgress; i++) {
    checkbox[i].addEventListener('click', () => fProgress())
}


function fProgress() {
    currentProgress = 0
    for (let i = 0; i < maxProgress; i++) {
        if (checkbox[i].checked) {
            currentProgress = currentProgress + 1
        }
    }

    console.log(currentProgress);
    let percentage = Math.floor((currentProgress / maxProgress) * 100);
    progressBar.value = percentage;
}


