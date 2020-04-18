// FAQ expanding answer
window.onload = function() {
    var questions = this.document.getElementsByClassName('question');
    for (let i = 0; i < questions.length; i++) {
        questions[i].addEventListener("click", function(e) {
           var answer = e.target.nextElementSibling;
           answer.classList.toggle('show');
        });
    }
}