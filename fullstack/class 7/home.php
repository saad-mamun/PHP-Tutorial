<?php

$questions = [
    ['question' => "What is 2 + 2?", "Correct " => "4"],
    ['question' => "What is the capital of France?", "Correct " => "Paris"],
    ['question' => "Who wrote Hamlet?", "Correct " => "Shakespeare"]
];

$answers = [];


foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Your Answer: "));
}

//Evaluate function
function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question[$index]) {
            $score++;
        }
    }
    return $score;
};


// Calculate score
$score = evaluateQuiz($questions, $answers);

echo "\n you scored $score out of " . count($questions) . ".\n" ;

if($score === count($questions)){
    echo "Excellent job \n ";
}elseif($score > 1){
    echo "Good effort \n";
}else{
    "Better luck next time \n";
}