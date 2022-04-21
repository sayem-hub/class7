<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dynamic Question | Class-7</title>
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
                            'Question' => 'What is PHP?',
                            'Options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        [
                            'Question' => 'What is Laravel?',
                            'Options' => [ 'ans1', 'ans2', 'ans3', 'ans4'  ]
                        ],

                        [
                            'Question' => 'What is Mysql?',
                            'Options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],

                         [
                            'Question' => 'What is Database?',
                            'Options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                         [
                            'Question' => 'What is Programming?',
                            'Options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],
                        
                         [
                            'Question' => 'What is Coding?',
                            'Options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        
                         [
                            'Question' => 'What is Web development?',
                            'Options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],

                        
                         [
                            'Question' => 'What is Web design?',
                            'Options' => [ 'ans1', 'ans2', 'ans3', 'ans4' ]
                        ],

                        
                         [
                            'Question' => 'What is Wordpress?',
                            'Options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],
 
                         [
                            'Question' => 'What is E-commerce?',
                            'Options' => ['ans1', 'ans2', 'ans3', 'ans4']
                        ],
                            ];

                shuffle($questionSet);        
        ?>

    <div class="container">
                            <h3 class="text-center m-3">Please select correct answer of the follwoing questions:</h3>
    
                    <?php     
                         foreach ($questionSet as $key => $all_questions) { ?>                            
                   <h6 class="fw-bolder"> <?php     foreach ($all_questions as $sub_key => $questions) { ?> 
                                    
                             <?php echo "<br/>"; ?> 
                            
                           <?php  if (is_array($questions)) {  ?> 
                            <?php    echo $sub_key . " : <br>"; ?> 
                          <?php     foreach ($questions as $index => $options) {  ?> 
                                 <input type="radio" name="answer" value="<?php echo $options; ?>"> 
                                 <label for =" "><?php echo $options; ?> </label> <br>
                                 
                              <?php   }  ?> <br>
                              <hr>

                            <?php  }  else { 
                            
                               echo $sub_key . " ". ++$key . ") " . $questions .  "<br>" ;
                            } ?>  </h6>
               <?php   }   ?> 

                <?php }   ?>

    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>