<?php
    echo "<h1>Let's see how you did... (probably really bad lol)</h1>";
    $score = 0;

    echo "<h2>Q1</h2>";
    $correctAnswer = 'green';
    $selectedAnswer = $_POST['q1Answer'];
    echo "<p>You said : <b>". $selectedAnswer . "</b></p>";
    echo "<p>The correct answer is : <b>". $correctAnswer . "</b></p>";
    if ($correctAnswer == $selectedAnswer)
    {
        echo "<p>Surprisingly, that was correct.</p>";
        $score++;
    }
    else
    {
        echo "<p>Seriously? ".$selectedAnswer."? What are you, a fool?";
    }

    echo "<h2>Q2</h2>";
    $correctAnswer = 'white';
    $selectedAnswer = $_POST['q2Answer'];
    echo "<p>You said : <b><b>". $selectedAnswer . "</b></b></p>";
    echo "<p>The correct answer is <b>: <b>". $correctAnswer . "</b></b></p>";
    if ($correctAnswer == $selectedAnswer)
    {
        echo "<p>Surprisingly, that was correct.</p>";
        $score++;
    }
    else
    {
        echo "<p>Seriously? ".$selectedAnswer."? What are you, a fool?";
    }

    echo "<h2>Q3</h2>";
    $correctAnswer = 'ghostbusters';
    $selectedAnswer = $_POST['q3Answer'];
    echo "<p>You said : <b><b>". $selectedAnswer . "</b></b></p>";
    echo "<p>The correct answer is : <b>". $correctAnswer . "</b></p>";
    if ($correctAnswer == $selectedAnswer)
    {
        echo "<p>Surprisingly, that was correct.</p>";
        $score++;
    }
    else
    {
        echo "<p>Seriously? ".$selectedAnswer."? What are you, a fool?";
    }

    echo "<h2>Q4</h2>";
    $correctAnswer = 'owen';
    $selectedAnswer = $_POST['q4Answer'];
    echo "<p>You said : <b><b>". $selectedAnswer . "</b></b></p>";
    echo "<p>The correct answer is : <b>". $correctAnswer . "</b></p>";
    if ($correctAnswer == $selectedAnswer)
    {
        echo "<p>Surprisingly, that was correct.</p>";
        $score++;
    }
    else
    {
        echo "<p>Seriously? ".$selectedAnswer."? What are you, a fool?";
    }

    echo "<h2>Q5</h2>";
    $correctAnswer = 'amazing';
    $selectedAnswer = $_POST['q5Answer'];
    echo "<p>You said : <b><b>". $selectedAnswer . "</b></b></p>";
    echo "<p>The correct answer is : <b>". $correctAnswer . "</b></p>";
    if ($correctAnswer == $selectedAnswer)
    {
        echo "<p>Surprisingly, that was correct.</p>";
        $score++;
    }
    else
    {
        echo "<p>Seriously? ".$selectedAnswer."? What are you, a fool?";
    }

    echo "<h1>Your final score</h1>";
    $finalScore = $score*20;
    echo "It is " . $finalScore . "%. No surprise there, really.";
?>