<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="qSimpleStyle.css" />
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <title>Rovere Francois - Questionnaire</title>
      <script type="text/javascript" src="1.7.2.jquery.min.js"></script>
   </head>
   <!--[if IE 6 ]>
   <body class="ie6 old_ie">
      <![endif]-->
      <!--[if IE 7 ]>
      <body class="ie7 old_ie">
         <![endif]-->
         <!--[if IE 8 ]>
         <body class="ie8">
            <![endif]-->
            <!--[if IE 9 ]>
            <body class="ie9">
               <![endif]-->
               <!--[if !IE]><!-->
               <body>
                  <!--<![endif]-->
                  <div id="bloc_page">
                     <header>
                        <div id="titre_principal">
                           <h1>Questionnaire</h1>
                           <p>/!\ Important /!\ If you have any questions, feel free to ask in person or directly to francoisrovere@gmail.com. </p>
                        </div>
                     </header>
                     <form id="form" action="qSimpleSending.php" onsubmit="" method="post">
                        <section>
                           <article>
                              <h1>General questions</h1>
                              <div>
                                 <p>What is your gender ? </p>
                                 <p>Male <input type="radio" name="general_sex" id="general_sex_male" value="male" onclick="" >   Female <input type="radio" name="general_sex" id="general_sex_female" value="female" onclick=""> </p>
                              </div>
                           </article>
                        </section>
                        <article>
                              <div> 
                                 <input type="submit" id="submitbutton" value="Submit all" />
                              </div>
</article>
                     </form>
                  </div>
   </body>
</html>