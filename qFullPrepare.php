               <?php include("qFunctions.php"); ?>
<body>
   <!--<![endif]-->
   <div id="bloc_page">
      <header>
         <div id="titre_principal">
            <h1>Questionnaire</h1>
            <p>/!\ Important /!\ If you have any questions, feel free to ask in person or directly to francoisrovere@gmail.com. </p>
         </div>
      </header>
      <form id="form" action="qFullSending.php" onsubmit="return verifForm(this)" method="post">
         <section>
            <article>
               <h1>General questions</h1>
               <div>
                  <p>What is your gender ? </p>
                  <p>Male <input type="radio" name=<?php phpInHTML("sex","general_information");?> id="general_sex_male" value="male" onclick="verifRadio(this, 0)" >   Female <input type="radio" name=<?php phpInHTML("sex","general_information");?> id="general_sex_female" value="female" onclick="verifRadio(this, 0)"> </p>
               </div>
               <div>
                  <p>What is you age ?</p>
                  <p><input type="text" name=<?php phpInHTML("age","general_information");?> id="general_age" size="2" onblur="verifNumber(this)" /> years old</p>
               </div>
               <div>
                  <p>Where do you come from ?</p>
                  <p>Country : <input type="text" name=<?php phpInHTML("country","general_information");?> id="general_country" onblur="verifText(this)" />   City : <input type="text" name=<?php phpInHTML("city","general_information");?> id="general_city" onblur="verifText(this)" /></p>
               </div>
               <div>
                  For the following media, please indicate how many hours you spend per week (if not used, please indicate 0) :
                  <p>Newspapers : <input type="text" name=<?php phpInHTML("newspaper","general_information");?> id="general_newspaper" size="2" onblur="verifNumber(this)" />
                     Radio : <input type="text" name=<?php phpInHTML("radio","general_information");?> id="general_radio" size="2" onblur="verifNumber(this)" />
                     Television : <input type="text" name=<?php phpInHTML("television","general_information");?> id="general_television" size="2" onblur="verifNumber(this)" />
                     Magazines : <input type="text" name=<?php phpInHTML("magazine","general_information");?> id="general_magazine" size="2" onblur="verifNumber(this)" />
                     Internet : <input type="text" name=<?php phpInHTML("internet","general_information");?> id="general_internet" size="2" onblur="verifNumber(this)" />
                     Cinema : <input type="text" name=<?php phpInHTML("cinema","general_information");?> id="general_cinema" size="2" onblur="verifNumber(this)" />
                     Video games : <input type="text" name=<?php phpInHTML("videogame","general_information");?> id="general_videogame" size="2" onblur="verifNumber(this)" />
                  </p>
               </div>
               <div>
                  For the following media, please indicate the supports mainly consulted (separate the supports with ";") : 
                  <p class=osline id="general_newspaper_support" style="display:none">   
                     Newspapers : <input type="text" class="textb" name=<?php phpInHTML("newspaper_support","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_radio_support" style="display:none">   
                     Radio : <input type="text" class="textb" name=<?php phpInHTML("radio_support","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_television_support" style="display:none">   
                     Television : <input type="text" class="textb" name=<?php phpInHTML("television_support","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_magazine_support" style="display:none">   
                     Magazines : <input type="text" class="textb" name=<?php phpInHTML("magazine_support","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_internet_support" style="display:none">   
                     Internet : <input type="text" class="textb" name=<?php phpInHTML("internet_support","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_cinema_support" style="display:none">   
                     Cinema : <input type="text" class="textb" name=<?php phpInHTML("cinema_support","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_videogame_support" style="display:none">   
                     Video games : <input type="text" class="textb" name=<?php phpInHTML("videogame_support","general_information");?> onblur="verifText(this)" />   
                  </p>
               </div>
               <div>
                  For the following media, please indicate the sections mainly consulted (separate the sections with ";") : 
                  <p class=osline id="general_newspaper_section" style="display:none">   
                     Newspapers : <input type="text" class="textb" name=<?php phpInHTML("newspaper_section","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_radio_section" style="display:none">   
                     Radio : <input type="text" class="textb" name=<?php phpInHTML("radio_section","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_television_section" style="display:none">   
                     Television : <input type="text" class="textb" name=<?php phpInHTML("television_section","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_magazine_section" style="display:none">   
                     Magazines : <input type="text" class="textb" name=<?php phpInHTML("magazine_section","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline  id="general_internet_section" style="display:none">   
                     Internet : <input type="text" class="textb" name=<?php phpInHTML("internet_section","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_cinema_section" style="display:none">   
                     Cinema : <input type="text" class="textb" name=<?php phpInHTML("cinema_section","general_information");?> onblur="verifText(this)" />   
                  </p>
                  <p class=osline id="general_videogame_section" style="display:none">   
                     Video games : <input type="text" class="textb" name=<?php phpInHTML("videogame_section","general_information");?> onblur="verifText(this)" />   
                  </p>
               </div>
               <div>
                  <p>Among those supports, does the consultation is in a foreign language ? </p>
                  <p>Yes <input type="radio" name=<?php phpInHTML("language","general_information");?> id="general_language_yes" value="yes" onclick="verifRadio(this, 0)" >   No <input type="radio" name=<?php phpInHTML("language","general_information");?> id="general_language_no" value="no" onclick="verifRadio(this, 0)"> </p>
               </div>
               <div id="general_languageappear" style="display:none">
                  <p>Indicate the foreign language and please evaluate the ratio of time spent on this foreign language and your mother tongue :
                     (For example, 20h in English, 80h in Japanese, please indicate 20-80)
                  </p>
                  <p><input type="text" name=<?php phpInHTML("mainlanguage","general_information");?> id="general_mainlanguage" onblur="verifText(this)" /></p>
                  <p><input type="text" name=<?php phpInHTML("ratiolanguage1","general_information");?> id="general_ratiolanguage1" size="2" onblur="verifNumber(this)" /> - <input type="text" name=<?php phpInHTML("ratiolanguage2","general_information");?> id="general_ratiolanguage2" size="2" onblur="verifNumber(this)" /></p>
               </div>
               <div>
                  <p>According to your own emotions, what kind of product is the most delightful ?</p>
                  <p><input type="text" name=<?php phpInHTML("mostdelightful","general_information");?> id="general_mostdelightful" onblur="verifText(this)" /></p>
               </div>
               <div> 
                  <input type="submit" id="submitbutton" value="Submit all" />
               </div>
            </article>
         </section>
         <article>
            <p>Rovere Francois – 37-156871 東京大学大学院工学系研究科機械工学専攻設計工学研究室</p>
         </article>
      </form>
   </div>
</body>