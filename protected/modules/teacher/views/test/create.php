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
	//Количество вопросов
	var qCountField = document.getElementById('qCount');

	//Форма
	var questions = document.getElementById('quest_list');

	var questionCount = 0;
	var answerCount = [];

	//Кнопка "Добавить вопрос"
	var addQuestion = document.createElement('a');
	addQuestion.innerHTML = "Добавить вопрос";
	addQuestion.setAttribute("onselectstart", "return false");
	addQuestion.setAttribute("onmousedown", "return false");
	addQuestion.setAttribute("style", "cursor:default");
	addQuestion.onclick = function () {

		questionCount = parseInt(document.getElementById('qCount').value);

		//Блок вопроса
		var questionDiv = document.createElement('div');
		questionDiv.id = "question_div_"+questionCount;
//		questionDiv.innerHTML = "Вопрос "+(questionCount+1)
		questions.appendChild(questionDiv);

		//Номер вопроса (можно удалить)
		questionDiv.appendChild(document.createElement('hr'));
		var text = document.createElement('label');
		text.id = "label_"+questionCount;
		text.innerHTML = "Вопрос "+(questionCount+1);
		questionDiv.appendChild(text);

		//Удаление вопроса
		var deleteQuestion = document.createElement('a');
		deleteQuestion.innerHTML = " Удалить<br>";
		deleteQuestion.setAttribute("onselectstart", "return false");
		deleteQuestion.setAttribute("onmousedown", "return false");
		deleteQuestion.setAttribute("style", "cursor:default");
		deleteQuestion.id = "delete_"+questionCount;
		deleteQuestion.onclick = function () {

			questionCount = parseInt(document.getElementById('qCount').value);

			//Идентификатор удаляемого вопроса
			var removeId = this.id.split('_');

			//Удаление блока
			questions.removeChild(document.getElementById('question_div_'+removeId[1]));

			//Сдвиг следующих за удаляемым вопросом блоков вверх
			var n = removeId[1];
			n++;
			var i;
			for (i=n; i<questionCount; i++)
			{
				document.getElementById('question_div_'+i).id = "question_div_"+(i-1);
				document.getElementById('label_'+i).innerHTML = "Вопрос "+i;
				document.getElementById('label_'+i).id = "label_"+(i-1);
				document.getElementById('delete_'+i).id = "delete_"+(i-1);
				var ac = document.getElementById('aCount_'+i).value;
				document.getElementById('aCount_'+i).name = "aCount_"+(i-1);
				document.getElementById('aCount_'+i).id = "aCount_"+(i-1);
				document.getElementById('question_'+i).name = "question_"+(i-1);
				document.getElementById('question_'+i).id = "question_"+(i-1);
				document.getElementById('add_answer_'+i).id = "add_answer_"+(i-1);
				for (var j=0; j<ac; j++)
				{
					document.getElementById('answer_div_'+i+"_"+j).id = "answer_div_"+(i-1)+"_"+j;
					document.getElementById('answer_is_true_'+i+'_'+j).name = "answer_is_true_"+(i-1)+"_"+j;
					document.getElementById('answer_is_true_'+i+'_'+j).id = "answer_is_true_"+(i-1)+"_"+j;
					document.getElementById('answer_'+i+'_'+j).name = "answer_"+(i-1)+"_"+j;
					document.getElementById('answer_'+i+'_'+j).id = "answer_"+(i-1)+"_"+j;
				}
			}
			//Уменьшение числа вопросов
			questionCount--;
//			alert(questionCount);
			document.getElementById('qCount').setAttribute("value", questionCount);
		};
		questionDiv.appendChild(deleteQuestion);

		//Количество ответов
		var aCountField = document.createElement('input');
		aCountField.type = "text";
		aCountField.name = "aCount_"+questionCount;
		aCountField.id = "aCount_"+questionCount;
		aCountField.setAttribute("value", "0");
		aCountField.setAttribute("style", "display:none");
		questionDiv.appendChild(aCountField);

		//Ввод вопроса
		var questionField = document.createElement('input');
		questionField.type = "text";
		questionField.id = "question_"+questionCount;
		questionField.name = "question_"+questionCount;
		questionDiv.appendChild(questionField);

		//Счетчик ответов
		answerCount[questionCount] = 0;

		//Кнопка добавления ответа
		var addAnswer = document.createElement('a');
		addAnswer.innerHTML = "<p>Добавить ответ</p>";
		addAnswer.id = "add_answer_"+questionCount;
		addAnswer.setAttribute("onselectstart", "return false");
		addAnswer.setAttribute("onmousedown", "return false");
		addAnswer.setAttribute("style", "cursor:default");
		addAnswer.onclick = function () {

			var id = this.id.split("_");

			answerCount[id[2]] = parseInt(document.getElementById('aCount_'+id[2]).value);

			//Блок ответа
			var answerDiv = document.createElement('div');
			answerDiv.id = "answer_div_"+id[2]+"_"+answerCount[id[2]];
			questionDiv.appendChild(answerDiv);

			//Верный ответ
			var answerIsTrue = document.createElement('input');
			answerIsTrue.type = "checkbox";
			answerIsTrue.id = "answer_is_true_"+id[2]+"_"+answerCount[id[2]];
			answerIsTrue.name = "answer_is_true_"+id[2]+"_"+answerCount[id[2]];
			answerDiv.appendChild(answerIsTrue);

			//Ввод ответа
			var answerField = document.createElement('input');
			answerField.type = "text";
			answerField.id = "answer_"+id[2]+"_"+answerCount[id[2]];
			answerField.name = "answer_"+id[2]+"_"+answerCount[id[2]];
			answerDiv.appendChild(answerField);

			//Удаление ответа
			var deleteAnswer = document.createElement('a');
			deleteAnswer.innerHTML = "Удалить";
			deleteAnswer.id = "deleteA_"+id[2]+"_"+answerCount[id[2]];
			deleteAnswer.setAttribute("onselectstart", "returne false");
			deleteAnswer.setAttribute("onmousedown", "return false");
			deleteAnswer.setAttribute("style", "cursor:default");
			deleteAnswer.onclick = function () {
				var rm = this.id.split("_");
				var count = parseInt(document.getElementById('aCount_'+rm[1]).value);
				var i;
				var a=parseInt(rm[2]);
				var b = parseInt(rm[1]);
				document.getElementById('question_div_'+rm[1]).removeChild(document.getElementById('answer_div_'+b+'_'+a));
				for (i=a+1; i<count; i++)
				{
//					alert(i);
					document.getElementById('answer_div_'+b+'_'+i).id = "answer_div_"+b+"_"+(i-1);
					document.getElementById('answer_is_true_'+b+'_'+i).name = "answer_is_true_"+b+"_"+(i-1);
					document.getElementById('answer_is_true_'+b+'_'+i).id = "answer_is_true_"+b+"_"+(i-1);
					document.getElementById('answer_'+b+'_'+i).name = "answer_"+b+"_"+(i-1);
					document.getElementById('answer_'+b+'_'+i).id = "answer_"+b+"_"+(i-1);
					document.getElementById('deleteA_'+b+'_'+i).id = "deleteA_"+b+"_"+(i-1);
				}
				count--;
				document.getElementById('aCount_'+rm[1]).setAttribute("value", count);
			};
			answerDiv.appendChild(deleteAnswer);

			answerCount[id[2]]++;
//                alert(id[2])
			document.getElementById("aCount_"+id[2]).setAttribute("value", answerCount[id[2]])

		};
		questionDiv.appendChild(addAnswer);

		questionCount++;
		qCountField.setAttribute("value", questionCount)
	};

	questions.appendChild(addQuestion)

</script>