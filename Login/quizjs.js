const questions = [
    {
        question: "Aprior algorithm analysis doesn't include - ",
        answers: [
            {text:"Time Complexity", correct:false},
            {text:"Space Complexity", correct:false},
            {text:"Program Complexity", correct:true},
            {text:"None", correct:false},
            
        ],
        explanation: "Answer C : Algorithms are independent of programming language, hence, program complexity is not a part of algorithm analysis."
    },
    {
        question: "Which of the following data structure is linear type?",
        answers: [
            {text:"Strings", correct:false},
            {text:"Lists", correct:false},
            {text:"Queues", correct:false},
            {text:"All", correct:true},
            
        ],
        explanation: "Answer D : Strings, Lists and Queues are all linear data structures. A linear data structure is one where data items are arranged in a linear fashion.   ." 
    },
    {
        question: "Which one of the followig affect the running time of an algorithm?",
        answers: [
            {text:"Processor speed", correct:false},
            {text:"Programming language", correct:false},
            {text:"Compiler", correct:false},
            {text:"All", correct:true},
        ],
        explanation: "Answer D : Running time of an algorithm is affected with Processor speed, Programming language used and the compiler."

    },
    {
        question: "An array is what kind of data structure?",
        answers: [
            {text:"Linear", correct:false},
            {text:"Non-Linear", correct:false},
            {text:"Complex", correct:false},
            {text:"None", correct:true},
            
        ],
        explanation: "Answer D : Running time of an algorithm is affected with Processor speed, Programming language used and the compiler."

    },
    {
        question: "Which one of the followig affect the running time of an algorithm?",
        answers: [
            {text:"Processor speed", correct:false},
            {text:"Programming language", correct:false},
            {text:"Compiler", correct:false},
            {text:"All", correct:true},
            
        ],
        explanation: "Answer D : Running time of an algorithm is affected with Processor speed, Programming language used and the compiler."

    }

];
const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");
const explanationdiv = document.getElementById("explanation");
const nextQuiz = document.getElementById("next-quiz");
const outof = document.getElementById("outof");

let currentQuestionIndex = 0;
let score = 0;


function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    explanationdiv.innerHTML = questions[currentQuestionIndex].explanation;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question; 
    outof.innerHTML = questionNo + " out of " + questions.length;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click", selectAns)
    });
}
function resetState(){
    explanationdiv.style.display = "none";
    nextButton.style.display = "none";
    nextQuiz.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAns(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    }else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display="block";
    explanationdiv.style.display="block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = 'You scored ' + score + ' out of ' + questions.length + '.';
    nextButton.innerHTML = "Play Again";
    nextButton.style.display = "block";
    nextQuiz.style.display = "block";
}

function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }else{
        showScore();
    }
}

nextButton.addEventListener("click", ()=>{
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    }else{
        startQuiz();
    }

});
startQuiz();
