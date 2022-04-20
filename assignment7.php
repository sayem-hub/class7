<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Assignment-7</title>
</head>
<body>
        <?php 

            /*Question 01:
		Let’s make an exam question set (add at list 10 dummy question) like that

                    #Make a simple exam design using html css
                    #Then make a exam by using these questions
                    #Your questions must be come randomize order */


                        

                    $questionSet = [

                        [
                            'question' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        [
                            'question' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4'  ]
                        ],

                        [
                            'question' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],

                         [
                            'question' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                         [
                            'question' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],
                        
                         [
                            'question' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        
                         [
                            'question' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        
                         [
                            'question' => 'What is loream ipsum?',
                            'options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],

                        
                         [
                            'question' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],
 
                         [
                            'question' => 'What is loream ipsum?',
                            'options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],
                            ];

                    
                       
     ?>

    <div class="container">

                       <?php     
                         foreach ($questionSet as $key => $all_questions) { 
                                       
                        
                        foreach ($all_questions as $sub_key => $questions) { 
                                    
                          
                             echo "<br/>"; 
                            
                             if (is_array($questions)) {
                               echo $sub_key . " : <br>"; 
                               foreach ($questions as $index => $options) { 
                                   echo $index . " = " . $options . "<br>"; 

                                 } 
                            }  else { 
                               echo $sub_key . " ". ++$key . ") " . $questions .  "<br>" ; 
                            } 
                  } 
                }  
                
                ?> 
                          
                  

                            
       
    
                      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</div>
</body>
</html>