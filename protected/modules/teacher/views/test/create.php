<ol class="breadcrumb">
	<li>
		<a href="index.php?r=teacher">Панель учителя</a>
	</li>
	<li>
		<a href="index.php?r=teacher/test">Тесты</a>
	</li>
	<li class="active">Новый тест</li>
</ol>

<form id="quest_list" method="post" action="index.php?r=teacher/test/new">
	<input type="text" name="name" placeholder="Название">
	<input type="text" name="description" placeholder="Описание">
	<p><input type="text" value="0" id="qCount" name="qCount" style="display: none"></p>
	<p><input type="submit" value="Сохранить"></p>
</form>

<script type="text/javascript">

	var qCountField = document.getElementById('qCount')

	var questions = document.getElementById('quest_list')

	var questionCount = 0
	var answerCount = new Array()

	var addQuestion = document.createElement('a')
	addQuestion.innerHTML = "Добавить вопрос"
	addQuestion.setAttribute("onselectstart", "return false")
	addQuestion.setAttribute("onmousedown", "return false")
	addQuestion.setAttribute("style", "cursor:default")
	addQuestion.onclick = function () {

		questions.appendChild(document.createElement('hr'))

		var questionDiv = document.createElement('div')
		questionDiv.id = "question_div_"+questionCount
		questionDiv.innerHTML = "<p>Вопрос "+(questionCount+1)+"</p>"
		questions.appendChild(questionDiv)

		var aCountField = document.createElement('input')
		aCountField.type = "text"
		aCountField.name = "aCount_"+questionCount
		aCountField.id = "aCount_"+questionCount
		aCountField.setAttribute("value", "0")
		aCountField.setAttribute("style", "display:none")
		questionDiv.appendChild(aCountField)

		var questionField = document.createElement('input')
		questionField.type = "text"
		questionField.name = "question_"+questionCount
		questionDiv.appendChild(questionField)

		answerCount[questionCount] = 0

		var addAnswer = document.createElement('a')
		addAnswer.innerHTML = "<p>Добавить ответ</p>"
		addAnswer.id = "add_answer_"+questionCount
		addAnswer.setAttribute("onselectstart", "return false")
		addAnswer.setAttribute("onmousedown", "return false")
		addAnswer.setAttribute("style", "cursor:default")
		addAnswer.onclick = function () {
			var id = this.id.split("_")

			var answerDiv = document.createElement('div')
			answerDiv.id = "answer_div_"+id[2]+"_"+answerCount[id[2]]
			questionDiv.appendChild(answerDiv)

			var answerIsTrue = document.createElement('input')
			answerIsTrue.type = "checkbox"
			answerIsTrue.name = "answer_is_true_"+id[2]+"_"+answerCount[id[2]]
			answerDiv.appendChild(answerIsTrue)

			var answerField = document.createElement('input')
			answerField.type = "text"
			answerField.name = "answer_"+id[2]+"_"+answerCount[id[2]]
			answerDiv.appendChild(answerField)

			answerCount[id[2]]++
//                alert(id[2])
			document.getElementById("aCount_"+id[2]).setAttribute("value", answerCount[id[2]])

		}
		questionDiv.appendChild(addAnswer)

		questionCount++
		qCountField.setAttribute("value", questionCount)
	}

	questions.appendChild(addQuestion)

</script>