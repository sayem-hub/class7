<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-7</title>
</head>
<body>
      <!-- Question 01:
		Let’s make an exam question set (add at list 10 dummy question) like that
	$questionSet = [

                        [
                            'question-1' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'
                            ]
                        ],

                        [
                            'question'-2 => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        [
                            'question-3' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                         [
                            'question-4' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        
                         [
                            'question-5' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        
                         [
                            'question-6' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        
                         [
                            'question-7' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        
                         [
                            'question-8' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        
                         [
                            'question-9' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ],

                        
                         [
                            'question-10' => 'What is loream ipsum?',
                            'options' => [
                                'ans1', 'ans2', 'ans3', 'ans4'

                            ]
                        ]
                            ];

                    #Make a simple exam design using html css
                    #Then make a exam by using these questions
                    #Your questions must be come randomize order  -->


                            <?php 

                    $questionSet = [

                        [
                            'question-1' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        [
                            'question-2' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4'  ]
                        ],

                        [
                            'question-3' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],

                         [
                            'question-4' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                         [
                            'question-5' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],
                        
                         [
                            'question-6' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        
                         [
                            'question-7' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        
                         [
                            'question-8' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],

                        
                         [
                            'question-9' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],
 
                         [
                            'question-10' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],
                            ];

                         foreach($questionSet as $key => $all_questions) {

                            print_r($all_questions);

                            // foreach($all_questions as  $questions) {

                            //       echo $questions[0],[1];
                        
                            // } 

                            // foreach($questions as $key => $options) {
                            //     echo $options. "<br>";
                            // }
                            // echo "<pre>";    
                            // print_r ($questions['options']);
                            // echo "</pre>";
                            echo "<br>";
 
                         }

                           ?>

</body>
</html>