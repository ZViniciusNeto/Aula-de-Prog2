var myQuestions = [
	{
		question: "1 - Teste",
		answers: {
			a: 'errada',
			b: 'certa',
			c: 'errada'
		},
		correctAnswer: 'b'
	},
	{
		question: "2 - Nome do jogo",
		answers: {
			a: 'The Scape',
			b: 'Uzur\'s Scape',
			c: 'Alice\'s Scape',
			d: 'Nenhuma das anteriores'
		},
		correctAnswer: 'c'
	},
	{
		question: "Trabalhando",
		answers: {
			a: 'musica',
			b: 'filme',
			c: 'cinema'
		},
		correctAnswer: 'a'
	}
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

	function showQuestions(questions, quizContainer){
		// precisaremos de um lugar para armazenar a saída e as opções de resposta
		var output = [];
		var answers; // poderia ter dado outro nome, alem do mais, eu mesmo me confundi :/

		// para cada questão
		for(var i=0; i<questions.length; i++){
			
			// mas, primeiro resetamos a lista de questões
			answers = [];

			// e aqui faremos para cada resposta na questão.
			for(letter in questions[i].answers){

				// Aqui será escrito para html para usar o Radio.
				answers.push(
					'<label>'
						+ '<input type="radio" name="question'+i+'" value="'+letter+'">'
					//	+ letter + ') ' vou deixar a letra comentada, porque achei melhor assim
						+ questions[i].answers[letter]
					+ '</label>'
				);
			}

			// add this question and its answers to the output
			output.push(
				'<div class="question">' + questions[i].question + '</div>'
				+ '<div class="answers">' + answers.join('') + '</div>'
			);
		}

		// finally combine our output list into one string of html and put it on the page
		quizContainer.innerHTML = output.join('');
	}


	function showResults(questions, quizContainer, resultsContainer){
			
		
		var answerContainers = quizContainer.querySelectorAll('.answers');
		
		
		var userAnswer = '';
		var numCorrect = 0;
		
		
		for(var i=0; i<questions.length; i++){

			// agora ele vai virar a letra que esta marcada.
			userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
			
			
			
			if(userAnswer===questions[i].correctAnswer){
				
				numCorrect++;
				
				
				answerContainers[i].style.color = 'lightgreen';
			}
			
			else{
				
				answerContainers[i].style.color = 'red';
			}
		}

			
			resultsContainer.innerHTML = numCorrect + ' de ' + questions.length;
		}

	// show questions right away
	showQuestions(questions, quizContainer);

	// on submit, show results
	submitButton.onclick = function(){
		showResults(questions, quizContainer, resultsContainer);
	}
}
