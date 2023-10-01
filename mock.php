<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz</title>
    <style>
        body {
            font-family: times_new_roman;
            color: black;
        }
        h1{
            text-align: center;
            color: darkblue;
        }
        h3{
            text-align: center;
        }
        .quiz-container {
            width: 900px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 5px;
            box-shadow: 2px 2px 6px #888888;
            background-image: linear-gradient(to right top, #7ee70a, #00c084, #008ec5, #0056c0, #130a72);;
        }
        .question {
            font-size: 19px;
            margin-bottom: 10px;
        }
        .options label {
            display: block;
            margin-bottom: 5px;
        }
        .options input[type="radio"] {
            margin-right: 5px;
        }
        #result {
            margin-top: 10px;
            font-weight: bold;
        }
        #btn{
            padding: 5px 5px 5px 5px;
            color: black;
        }
        
    </style>
    
</head>
<body>
    <h1>Mock Exam</h1>
    <div class="quiz-container">
        <?php


        $score = 0;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $correctAnswers = [
                "q1" => "a",
                "q2" => "b",
                "q3" => "b",
                "q4" => "c",
                "q5" => "c",
                "q6" => "a",
                "q7" => "b",
                "q8" => "c",
                "q9" => "a",
               "q10" => "b"
            ];

            $userAnswers =[
                "q1" => $_POST["q1"],
                "q2" => $_POST["q2"],
                "q3" => $_POST["q3"],
                "q4" => $_POST["q4"],
                "q5" => $_POST["q5"],
                "q6" => $_POST["q6"],
                "q7" => $_POST["q7"],
                "q8" => $_POST["q8"],
                "q9" => $_POST["q9"],
                "q10" => $_POST["q10"]
                
            ];

            foreach ($correctAnswers as $question => $correctAnswer) {
                if (isset($userAnswers[$question]) && $userAnswers[$question] === $correctAnswer) {
                    $score++;
                }
            }
        }
        ?>
        <form method="post" action="">
            
            <div class="question">
                <p>Q 1.Which of the following is not a valid C variable name?</p>
                <div class="options">
                    <label><input type="checkbox" name="q1" value="a">a) int $main; </label>
                    <label><input type="checkbox" name="q1" value="b">b) float rate;  </label>
                    <label><input type="checkbox" name="q1" value="c">c) int number; </label>
                </div>
            </div>
            <div class="question">
                <p>Q 2. All keywords in C are in _________</p>
                <div class="options">
                    <label><input type="checkbox" name="q2" value="a">a) UpperCase letters</label>
                    <label><input type="checkbox" name="q2" value="b">b) LowerCase letters</label>
                    <label><input type="checkbox" name="q2" value="c">c) CamelCase letters </label>
                </div>
            </div>

            <div class="question">
                <p>Q 3: Which is valid C expression?</p>
                <div class="options">
                    <label><input type="checkbox" name="q3" value="a">a) int my_num = 100,000;</label>
                    <label><input type="checkbox" name="q3" value="b">b) int my_num = 100000;</label>
                    <label><input type="checkbox" name="q3" value="c">c) int my num = 1000; </label>
                </div>
                <div><p>Q 4: Which of the following cannot be a variable name in C?</p>
                <div class="options">
                    <label><input type="checkbox" name="q4" value="a">a) friend</label>
                    <label><input type="checkbox" name="q4" value="b">b) true </label>
                    <label><input type="checkbox" name="q4" value="c">c) volatile </label>
                </div>
                <div><p>Q 5:What is short int in C programming?</p>
                <div class="options">
                    <label><input type="checkbox" name="q5" value="a">a) The basic data type of C</label>
                    <label><input type="checkbox" name="q5" value="b">b) Qualifier</label>
                    <label><input type="checkbox" name="q5" value="c">c) Short is the qualifier and int is the basic data type </label>
                </div>
                <div><p>Q 6: Which keyword is used to prevent any changes in the variable within a C program?</p>
                <div class="options">
                    <label><input type="checkbox" name="q6" value="a">a) const</label>
                    <label><input type="checkbox" name="q6" value="b">b) mutable </label>
                    <label><input type="checkbox" name="q6" value="c">c) Pvolatile </label>
                </div>
                <div><p>Q 7: Which of the following typecasting is accepted by C language?</p>
                <div class="options">
                    <label><input type="checkbox" name="q7" value="a">a) Widening conversions</label>
                    <label><input type="checkbox" name="q7" value="b">b) Widening & Narrowing conversions </label>
                    <label><input type="checkbox" name="q7" value="c">c) Narrowing conversions </label></div>
                <div><p>Q 8: What is an example of iteration in C?</p>
                <div class="options">
                    <label><input type="checkbox" name="q8" value="a">a) for</label>
                    <label><input type="checkbox" name="q8" value="b">b) while </label>
                    <label><input type="checkbox" name="q8" value="c">c) all of the mentioned </label></div>
                <div><p>Q 9: Functions can return enumeration constants in C?</p>
                <div class="options">
                    <label><input type="checkbox" name="q9" value="a">a) true</label>
                    <label><input type="checkbox" name="q9" value="b">b) false </label>
                    <label><input type="checkbox" name="q9" value="c">c) depends on the compiler </label></div>
                <div><p>Q 10: Functions in C Language are always _________</p>
                <div class="options">
                    <label><input type="checkbox" name="q10" value="a">a) Internal</label>
                    <label><input type="checkbox" name="q10" value="b">b) External </label>
                    <label><input type="checkbox" name="q10" value="c">c) Both Internal and External</label></div>
            </div>
           <br>
           <center> <input type="submit" value="Submit" name="submit" id="btn"></center>
           </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST")
         {
           
            echo '<div id="result">';
            echo "<br>";
    
            echo "<center><h1>scored mark $score out of 10 <h1> </center>";
            if($score<5){
                echo "<br><center><h1>u have to study hard <h1> </center>";
            }
            elseif($score>=8){
                echo 'you got a good score';
            }

            echo '</div>';
            echo "<br>";
        
        }
        ?>
    </div>
    
    <center> <a href="index.html"><input type="button" value="back to home page"></a></center>



    

</body>
</html>