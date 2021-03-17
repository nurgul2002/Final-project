<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Survey</title>
	<style>
		/*

#fcc_foldout_menu, #fcc_test_suite_indicator, #fcc_foldout_toggler {
  display: none;
}

.dark-primary-color    { background: #00838F; }
.default-primary-color { background: #00ACC1; }
.light-primary-color   { background: #80DEEA; }
.accent-color          { background: #FFAB40; }
.accent-light          { background: #FFD180; }
.accent-tint           { background: #FFBC66; }
.accent-shade          { background: #FA9933; }
.accent-button         { background: #FFAB40; box-shadow: 0px 1px 0px #FFBC66 inset, 0px -1px 0px #FA9933 inset, 0px 0px 5px rgba(0, 0, 0, 0.5); }

font-family: 'Open Sans', sans-serif;
font-family: 'Zilla Slab', serif;

*/

#fcc_foldout_menu, #fcc_foldout_toggler, #fcc_test_suite_indicator {
  display: none;
}

* {
  margin: 0;
  padding: 0;
}
html, html a {
    -webkit-font-smoothing: antialiased !important;
}

body {
  display: flex;
  flex-direction: column;
  background-color: #00838F;
  font-family: 'Open Sans', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  min-height: 100vh;
}

header {
  color: #FFFFFF;
  text-align: center;
  font-family: 'Zilla Slab', serif;
  letter-spacing: 2px;
  /*text-shadow: 2px 2px 3px #000000;*/
  text-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  padding: 15px;
}

main {
  display: flex;
  flex-grow: 1;
  height: 100%;
  background-color: white;
  border-radius: 5px;
  margin-left: 15%;
  margin-right: 15%;
  margin-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

form {
  width: 100%;
}

.question {
  display: flex;
  padding: 5px 0 5px 0;
}

textarea {
  padding: 5px;
  width: 75%;
}

input {
  padding: 5px;
}

input[type=radio] {
  margin-right: 5px;
}

input[type=checkbox] {
  margin-right: 5px;
}

input[type=submit] {
  border-radius: 5px;
  border: 0;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.submit {
  text-align: center;
}

#name, #email, #number {
  border-radius: 5px;
  border: 1px solid #606060;
  width: 200px;
}

#name:focus, #email:focus, #number:focus {
  border-radius: 5px;
  border: 1px solid #FFAB40;
  width: 200px;
  outline: 0;
}


#comments {
  border-radius: 5px;
  border: 1px solid #606060;
}

#comments:focus {
  border-radius: 5px;
  border: 1px solid #FFAB40;
  outline: 0;
}

select {
  padding: 5px;
  border: 1px solid #606060;
}

select:focus {
  padding: 5px;
  border: 1px solid #FFAB40;
  outline: 0;
}

.description {
  text-align: center;
  padding: 5px 0 5px 0;
}

.questions {
  text-align: right;
  width: 50%;
  padding-right: 5px;
}

.answers {
  width: 50%;
  padding-left: 5px;
}

	</style>
</head>
<body>
	<header>
  <h1 name="title" id="title">Survey Form</h1>
</header>

<main>
  <form id="survey-form">

    <p class="description" id="description">Welcome to the survey page and thanks for the answers</p>

    <div class="question">

      <div class="questions">
        <label id="name-label">Your Name:</label>
      </div>

      <div class="answers">
        <input type="text" id="name" placeholder="Enter your name" required/>
      </div>

    </div>

    <div class="question">

      <div class="questions">
        <label id="email-label">Your Email:</label>
      </div>

      <div class="answers">
        <input type="email" id="email" placeholder="Enter your email" required/>
      </div>

    </div>

    <div class="question">

      <div class="questions">
        <label id="number-label">Your Age:</label>
      </div>

      <div class="answers">
        <input type="number" min="1" max="150" id="number" placeholder="Enter your age" required/>
      </div>

    </div>

    <div class="question">

      <div class="questions">
        <p>Which option best describes your current role?:</p>
      </div>

      <div class="answers">

        <select id="dropdown">

        <?php

        	$list = array(
        		'<option value="Student">Student</option>',
		        '<option value="Full time job">Full time job</option>',
		        '<option value="Full time learner">Full time learner</option>',
		        '<option value="Prefer not to say">Prefer not to say</option>',
		        '<option value="Other">Other</option>'
        	);

        	foreach ($list as $item) {
        		echo $item;
        	}

        ?>
        
      </select>

      </div>

    </div>

    <div class="question">

      <div class="questions">
        <p>How often do you play sports?</p>
      </div>

      <div class="answers">
      	<?php

      		$recommendations = ["Everyday", "Three times per week", "Two times a week", "Once a week", "Once a month", "Infrequently", "Never"];

      		foreach ($recommendations as $recommendation)
      			echo "<p><input type='radio' name='recommendation' value='$recommendation' required/>$recommendation</p>";
      	?>
      </div>
    </div>

    <div class="question">

      <div class="questions">
        <p>What kind of fitness classes do you like best?</p>
      </div>

      <div class="answers">

        <select id="likeMost">
        <option value="" disabled selected>Select an option</option>
        <?php

        	$options = ["Aerobic", "Power", "Dance", "Mind&Body", "Mixed"];

        	foreach ($options as $option) {
        		echo "<option value='$option'>$option</option>";
        	}
          
        ?>
      </select>

      </div>

    </div>
    
    <div class="question">

      <div class="questions">
        <p>Any Comments or Suggestions?</p>
      </div>

      <div class="answers">
        <textarea rows="4" name="comments" id="comments" placeholder="Describe yourself here..."></textarea>
      </div>

    </div>

    <div class="submit">
      <input type="submit" id="submit">
    </div>

  </form>
</main>

<footer>
</footer>
</body>
</html>