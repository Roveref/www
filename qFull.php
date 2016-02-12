<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="qFullStyle.css" />
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <title>Rovere Francois - Questionnaire</title>
      <script type="text/javascript" src="1.7.2.jquery.min.js"></script>
      <script type="text/javascript" src="qFullChecking1.js"></script>
      <script type="text/javascript" src="qFullChecking2.js"></script>
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
                     <form id="form" action="qFullSending.php" onsubmit="return verifForm(this)" method="post">
                        <section>
                           <article>
                              <h1>General questions</h1>
                              <div>
                                 <p>What is your gender ? </p>
                                 <p>Male <input type="radio" name="general_sex" id="general_sex_male" value="male" onclick="verifRadio(this, 0)" >   Female <input type="radio" name="general_sex" id="general_sex_female" value="female" onclick="verifRadio(this, 0)"> </p>
                              </div>
                              <div>
                                 <p>What is you age ?</p>
                                 <p><input type="text" name="general_age" id="general_age" size="2" onblur="verifNumber(this)" /> years old</p>
                              </div>
                              <div>
                                 <p>Where do you come from ?</p>
                                 <p>Country : <input type="text" name="general_country" id="general_country" onblur="verifText(this)" />   City : <input type="text" name="general_city" id="general_city" onblur="verifText(this)" /></p>
                              </div>
                              <div>
                                 For the following media, please indicate how many hours you spend per week (if not used, please indicate 0) :
                                 <p>Newspapers : <input type="text" name="general_newspaper" id="general_newspaper" size="2" onblur="verifNumber(this)" />
                                    Radio : <input type="text" name="general_radio" id="general_radio" size="2" onblur="verifNumber(this)" />
                                    Television : <input type="text" name="general_television" id="general_television" size="2" onblur="verifNumber(this)" />
                                    Magazines : <input type="text" name="general_magazine" id="general_magazine" size="2" onblur="verifNumber(this)" />
                                    Internet : <input type="text" name="general_internet" id="general_internet" size="2" onblur="verifNumber(this)" />
                                    Cinema : <input type="text" name="general_cinema" id="general_cinema" size="2" onblur="verifNumber(this)" />
                                    Video games : <input type="text" name="general_videogame" id="general_videogame" size="2" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 For the following media, please indicate the supports mainly consulted (separate the supports with ";") : 
                                 <p class=osline id="general_newspaper_support" style="display:none">   
                                    Newspapers : <input type="text" class="textb" name="general_newspaper_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name="general_radio_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name="general_television_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="general_magazine_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name="general_internet_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="general_cinema_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name="general_videogame_support" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the following media, please indicate the sections mainly consulted (separate the sections with ";") : 
                                 <p class=osline id="general_newspaper_section" style="display:none">   
                                    Newspapers : <input type="text" class="textb" name="general_newspaper_section" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_radio_section" style="display:none">   
                                    Radio : <input type="text" class="textb" name="general_radio_section" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_television_section" style="display:none">   
                                    Television : <input type="text" class="textb" name="general_television_section" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_magazine_section" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="general_magazine_section" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline  id="general_internet_section" style="display:none">   
                                    Internet : <input type="text" class="textb" name="general_internet_section" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_cinema_section" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="general_cinema_section" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_videogame_section" style="display:none">   
                                    Video games : <input type="text" class="textb" name="general_videogame_section" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 <p>Among those supports, does the consultation is in a foreign language ? </p>
                                 <p>Yes <input type="radio" name="general_language" id="general_language_yes" value="yes" onclick="verifRadio(this, 0)" >   No <input type="radio" name="general_language" id="general_language_no" value="no" onclick="verifRadio(this, 0)"> </p>
                              </div>
                              <div id="general_languageappear" style="display:none">
                                 <p>Indicate the foreign language and please evaluate the ratio of time spent on this foreign language and your mother tongue :
                                 (For example, 20h in English, 80h in Japanese, please indicate 20-80)</p>
                                 <p><input type="text" name="general_mainlanguage" id="general_mainlanguage" onblur="verifText(this)" /></p>
                                 <p><input type="text" name="general_ratiolanguage1" id="general_ratiolanguage1" size="2" onblur="verifNumber(this)" /> - <input type="text" name="general_ratiolanguage2" id="general_ratiolanguage2" size="2" onblur="verifNumber(this)" /></p>
                              </div>
                              <div>
                                 <p>According to your own emotions, what kind of product is the most delightful ?</p>
                                 <p><input type="text" name="general_mostdelightful" id="general_mostdelightful" onblur="verifText(this)" /></p>
                              </div>
                           </article>
                        </section>
                        <section>
                           <article>
                              <h1>Questions concerning the product : Mechanical pen</h1>
                              <div>
                                 How frequently, in a year, do you buy the concerned product ?
                                 <p>Frequency : <input type="text" name="mechanicalpen_frequency" id="mechanicalpen_frequency" size="3" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 Among the following media, please indicate, by order of importance (1 being the most important and 8 the less important), to which you would mainly refer if you had to purchase the concerned product :
                                 <p>
                                    Newspapers : 
                                    <select name="mechanicalpen_newspaper" id="mechanicalpen_newspaper" onblur="mechanicalpen_ranking(this.id)" />
                                       <option name="" value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Radio : 
                                    <select name="mechanicalpen_radio" id="mechanicalpen_radio" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Television : 
                                    <select name="mechanicalpen_television" id="mechanicalpen_television" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Magazines : 
                                    <select name="mechanicalpen_magazine" id="mechanicalpen_magazine" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Internet : 
                                    <select name="mechanicalpen_internet" id="mechanicalpen_internet" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Cinema : 
                                    <select name="mechanicalpen_cinema" id="mechanicalpen_cinema" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Video games : 
                                    <select name="mechanicalpen_videogame" id="mechanicalpen_videogame" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Word of mouth : 
                                    <select name="mechanicalpen_wordofmouth" id="mechanicalpen_wordofmouth" onblur="mechanicalpen_ranking(this.id)"/>
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                 </p>
                                 <p>
                                    <button type="button" onclick="mechanicalpen_reset()">Reset</button>
                                 </p>
                              </div>
                              <div>
                                 For the three most important media selected, please indicate the main supports of the media (separate the supports with ";") : </br>
                                 For example, Rotring.com a support for internet, a friend who already owns the product is a support for word of mouth.
                                 <p class=osline id="mechanicalpen_newspaper_support" style="display:none">   
                                    Newspapers : <input type="text" class="textb" name="mechanicalpen_newspaper_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name="mechanicalpen_radio_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name="mechanicalpen_television_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="mechanicalpen_magazine_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name="mechanicalpen_internet_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="mechanicalpen_cinema_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name="mechanicalpen_videogame_support" onblur="verifText(this)" />   
                                 </p>
                                <p class=osline id="mechanicalpen_wordofmouth_support" style="display:none">   
                                    Word of mouth : <input type="text" class="textb" name="mechanicalpen_wordofmouth_support" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 If you were to buy the concerned product, please indicate the three main properties the product must have according to your standards :
                                 <p class=osline id="mechanicalpen_property1">   
                                    Property 1 : <input type="text" name="mechanicalpen_property1" id="mechanicalpen_property1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_property2">   
                                    Property 2 : <input type="text" name="mechanicalpen_property2" id="mechanicalpen_property2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_property3">   
                                    Property 3 : <input type="text" name="mechanicalpen_property3" id="mechanicalpen_property3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please indicate the three main expectations you have :
                                 <p class=osline id="mechanicalpen_expectation1">   
                                    Expectation 1 : <input type="text" name="mechanicalpen_expectation1" id="mechanicalpen_expectation1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_expectation2">   
                                    Expectation 2 : <input type="text" name="mechanicalpen_expectation2" id="mechanicalpen_expectation2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_expectation3">   
                                    Expectation 3 : <input type="text" name="mechanicalpen_expectation3" id="mechanicalpen_expectation3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the word “comfortable”, please choose the closest synonym to you, for the concerned product :
                                 <p>
                                    Friendly : <input type="checkbox" value="friendly" name="mechanicalpen_checkbox_comfortable" />
                                    Cosy : <input type="checkbox" value="cosy" name="mechanicalpen_checkbox_comfortable" />
                                    Pleasant : <input type="checkbox" value="pleasant" name="mechanicalpen_checkbox_comfortable" />
                                    Beautiful : <input type="checkbox" value="beautiful" name="mechanicalpen_checkbox_comfortable" />
                                    Enjoyable : <input type="checkbox" value="enjoyable" name="mechanicalpen_checkbox_comfortable" />
                                    Grateful : <input type="checkbox" value="grateful" name="mechanicalpen_checkbox_comfortable" />
                                    Homelike : <input type="checkbox" value="homelike" name="mechanicalpen_checkbox_comfortable" />
                                    Soothing : <input type="checkbox" value="soothing" name="mechanicalpen_checkbox_comfortable" />
                                    Easy : <input type="checkbox" value="easy" name="mechanicalpen_checkbox_comfortable" />
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the origin of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="mechanicalpen_checkbox_origin" />
                                    <input type="checkbox" value="littleimportant" name="mechanicalpen_checkbox_origin" />
                                    <input type="checkbox" value="quiteimportant" name="mechanicalpen_checkbox_origin" />
                                    <input type="checkbox" value="important" name="mechanicalpen_checkbox_origin" />
                                    <input type="checkbox" value="veryimportant" name="mechanicalpen_checkbox_origin" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the proximity of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="mechanicalpen_checkbox_production" />
                                    <input type="checkbox" value="littleimportant" name="mechanicalpen_checkbox_production" />
                                    <input type="checkbox" value="quiteimportant" name="mechanicalpen_checkbox_production" />
                                    <input type="checkbox" value="important" name="mechanicalpen_checkbox_production" />
                                    <input type="checkbox" value="veryimportant" name="mechanicalpen_checkbox_production" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the ecological concern ? 
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="mechanicalpen_checkbox_ecology" />
                                    <input type="checkbox" value="littleimportant" name="mechanicalpen_checkbox_ecology" />
                                    <input type="checkbox" value="quiteimportant" name="mechanicalpen_checkbox_ecology" />
                                    <input type="checkbox" value="important" name="mechanicalpen_checkbox_ecology" />
                                    <input type="checkbox" value="veryimportant" name="mechanicalpen_checkbox_ecology" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, are you ready to buy it on the internet ?  
                                 <p>Yes <input type="radio" name="mechanicalpen_buyinternet" id="mechanicalpen_buyinternet_yes" value="yes">  No <input type="radio" name="mechanicalpen_buyinternet" id="mechanicalpen_buyinternet_no" value="no"> 
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, what would be the main reason for not buying on the internet ?
                                 <p class="mechanicalpen_notbuyinternet" id="mechanicalpen_notbuyinternet_reason">   
                                    Reason : <input type="text" class="textb" name="mechanicalpen_notbuyinternet_reason" id="mechanicalpen_notbuyinternet_reason_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, if bought on the internet, how long is the acceptable time between the purchase and the first use ?
                                 <p class="mechanicalpen_delivery" id="mechanicalpen_delivery_timeacceptable">   
                                    Acceptable time : <input type="text" name="mechanicalpen_delivery_timeacceptable" id="mechanicalpen_delivery_timeacceptable_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please evaluate your elasticity to the price : (A high elasticity means that a high increase in the price would not change your decision to buy the product)
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="mechanicalpen_checkbox_elasticity" />
                                    <input type="checkbox" value="littleimportant" name="mechanicalpen_checkbox_elasticity" />
                                    <input type="checkbox" value="quiteimportant" name="mechanicalpen_checkbox_elasticity" />
                                    <input type="checkbox" value="important" name="mechanicalpen_checkbox_elasticity" />
                                    <input type="checkbox" value="veryimportant" name="mechanicalpen_checkbox_elasticity" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, is personalization is important ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="mechanicalpen_checkbox_personalization" />
                                    <input type="checkbox" value="littleimportant" name="mechanicalpen_checkbox_personalization" />
                                    <input type="checkbox" value="quiteimportant" name="mechanicalpen_checkbox_personalization" />
                                    <input type="checkbox" value="important" name="mechanicalpen_checkbox_personalization" />
                                    <input type="checkbox" value="veryimportant" name="mechanicalpen_checkbox_personalization" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned, would you buy a product from an unknown brand if it meets your needs ? 
                                 (For example, a better design, a better quality or more ecological)
                                 <p>
                                    Not likely <input type="checkbox" value="notimportant" name="mechanicalpen_checkbox_needs" />
                                    <input type="checkbox" value="littleimportant" name="mechanicalpen_checkbox_needs" />
                                    <input type="checkbox" value="quiteimportant" name="mechanicalpen_checkbox_needs" />
                                    <input type="checkbox" value="important" name="mechanicalpen_checkbox_needs" />
                                    <input type="checkbox" value="veryimportant" name="mechanicalpen_checkbox_needs" /> Very likely
                                 </p>
                              </div>
                           </article>
                        </section>
                        <section>
                           <article>
                              <h1>Questions concerning the product : Intermediate jewelry</h1>
                              <div>
                                 How frequently, in a year, do you buy the concerned product ?
                                 <p>Frequency : <input type="text" name="intermediatejewelry_frequency" id="intermediatejewelry_frequency" size="3" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 Among the following media, please indicate, by order of importance (1 being the most important and 8 the less important), to which you would mainly refer if you had to purchase the concerned product :
                                 <p>
                                    Newspapers : 
                                    <select name="intermediatejewelry_newspaper" id="intermediatejewelry_newspaper" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Radio : 
                                    <select name="intermediatejewelry_radio" id="intermediatejewelry_radio" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Television : 
                                    <select name="intermediatejewelry_television" id="intermediatejewelry_television" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Magazines : 
                                    <select name="intermediatejewelry_magazine" id="intermediatejewelry_magazine" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Internet : 
                                    <select name="intermediatejewelry_internet" id="intermediatejewelry_internet" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Cinema : 
                                    <select name="intermediatejewelry_cinema" id="intermediatejewelry_cinema" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Video games : 
                                    <select name="intermediatejewelry_videogame" id="intermediatejewelry_videogame" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                    Word of mouth : 
                                    <select name="intermediatejewelry_wordofmouth" id="intermediatejewelry_wordofmouth" onblur="intermediatejewelry_ranking(this.id)" />
                                       <option value="" selected="selected">-</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                    </select>
                                 </p>
                                 <p>
                                    <button type="button" onclick="intermediatejewelry_reset()">Reset</button>
                                 </p>
                              </div>
                              <div>
                                 For the three most important media, please indicate the support of the media : 
                                 (For example, Rotring.com a support for internet, A friend who already owns the product is a support for word of mouth)
                                 <p class=osline id="intermediatejewelry_newspaper_support" style="display:none">   
                                    Newspapers : <input type="text" class="textb" name="intermediatejewelry_newspaper_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name="intermediatejewelry_radio_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name="intermediatejewelry_television_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="intermediatejewelry_magazine_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name="intermediatejewelry_internet_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="intermediatejewelry_cinema_support" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name="intermediatejewelry_videogame_support" onblur="verifText(this)" />   
                                 </p>
                                <p class=osline id="intermediatejewelry_wordofmouth_support" style="display:none">   
                                    Word of mouth : <input type="text" class="textb" name="intermediatejewelry_wordofmouth_support" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 If you were to buy the concerned product, please indicate the three main properties the product must have according to your standards :
                                 <p class=osline id="intermediatejewelry_property1">   
                                    Property 1 : <input type="text" name="intermediatejewelry_property1" id="intermediatejewelry_property1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_property2">   
                                    Property 2 : <input type="text" name="intermediatejewelry_property2" id="intermediatejewelry_property2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_property3">   
                                    Property 3 : <input type="text" name="intermediatejewelry_property3" id="intermediatejewelry_property3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please indicate the three main expectations you have :
                                 <p class=osline id="intermediatejewelry_expectation1">   
                                    Expectation 1 : <input type="text" name="intermediatejewelry_expectation1" id="intermediatejewelry_expectation1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_expectation2">   
                                    Expectation 2 : <input type="text" name="intermediatejewelry_expectation2" id="intermediatejewelry_expectation2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_expectation3">   
                                    Expectation 3 : <input type="text" name="intermediatejewelry_expectation3" id="intermediatejewelry_expectation3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the word “luxurious”, please choose the closest synonym to you, for the concerned product :
                                 <p>
                                    Elegant : <input type="checkbox" value="elegant" name="intermediatejewelry_checkbox_luxurious" />
                                    Sumptuosity : <input type="checkbox" value="sumptuosity" name="intermediatejewelry_checkbox_luxurious" />
                                    Epicurean : <input type="checkbox" value="epicurean" name="intermediatejewelry_checkbox_luxurious" />
                                    Palatial : <input type="checkbox" value="palatial" name="intermediatejewelry_checkbox_luxurious" />
                                    Rich : <input type="checkbox" value="rich" name="intermediatejewelry_checkbox_luxurious" />
                                    Impressive : <input type="checkbox" value="impressive" name="intermediatejewelry_checkbox_luxurious" />
                                    Glorious : <input type="checkbox" value="glorious" name="intermediatejewelry_checkbox_luxurious" />
                                    Splendid : <input type="checkbox" value="splendid" name="intermediatejewelry_checkbox_luxurious" />
                                    Beautiful : <input type="checkbox" value="beautiful" name="intermediatejewelry_checkbox_luxurious" />
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the origin of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="intermediatejewelry_checkbox_origin" />
                                    <input type="checkbox" value="littleimportant" name="intermediatejewelry_checkbox_origin" />
                                    <input type="checkbox" value="quiteimportant" name="intermediatejewelry_checkbox_origin" />
                                    <input type="checkbox" value="important" name="intermediatejewelry_checkbox_origin" />
                                    <input type="checkbox" value="veryimportant" name="intermediatejewelry_checkbox_origin" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the proximity of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="intermediatejewelry_checkbox_production" />
                                    <input type="checkbox" value="littleimportant" name="intermediatejewelry_checkbox_production" />
                                    <input type="checkbox" value="quiteimportant" name="intermediatejewelry_checkbox_production" />
                                    <input type="checkbox" value="important" name="intermediatejewelry_checkbox_production" />
                                    <input type="checkbox" value="veryimportant" name="intermediatejewelry_checkbox_production" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the ecological concern ? 
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="intermediatejewelry_checkbox_ecology" />
                                    <input type="checkbox" value="littleimportant" name="intermediatejewelry_checkbox_ecology" />
                                    <input type="checkbox" value="quiteimportant" name="intermediatejewelry_checkbox_ecology" />
                                    <input type="checkbox" value="important" name="intermediatejewelry_checkbox_ecology" />
                                    <input type="checkbox" value="veryimportant" name="intermediatejewelry_checkbox_ecology" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, are you ready to buy it on the internet ?  
                                 <p>Yes <input type="radio" name="intermediatejewelry_buyinternet" id="intermediatejewelry_buyinternet_yes" value="yes">  No <input type="radio" name="intermediatejewelry_buyinternet" id="intermediatejewelry_buyinternet_no" value="no"> 
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, what would be the main reason for not buying on the internet ?
                                 <p class="intermediatejewelry_notbuyinternet" id="intermediatejewelry_notbuyinternet_reason">   
                                    Reason : <input type="text" class="textb" name="intermediatejewelry_notbuyinternet_reason" id="intermediatejewelry_notbuyinternet_reason_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, if bought on the internet, how long is the acceptable time between the purchase and the first use ?
                                 <p class="intermediatejewelry_delivery" id="intermediatejewelry_delivery_timeacceptable">   
                                    Acceptable time : <input type="text" name="intermediatejewelry_delivery_timeacceptable" id="intermediatejewelry_delivery_timeacceptable_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please evaluate your elasticity to the price : (A high elasticity means that a high increase in the price would not change your decision to buy the product)
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="intermediatejewelry_checkbox_elasticity" />
                                    <input type="checkbox" value="littleimportant" name="intermediatejewelry_checkbox_elasticity" />
                                    <input type="checkbox" value="quiteimportant" name="intermediatejewelry_checkbox_elasticity" />
                                    <input type="checkbox" value="important" name="intermediatejewelry_checkbox_elasticity" />
                                    <input type="checkbox" value="veryimportant" name="intermediatejewelry_checkbox_elasticity" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, is personalization is important ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="intermediatejewelry_checkbox_personalization" />
                                    <input type="checkbox" value="littleimportant" name="intermediatejewelry_checkbox_personalization" />
                                    <input type="checkbox" value="quiteimportant" name="intermediatejewelry_checkbox_personalization" />
                                    <input type="checkbox" value="important" name="intermediatejewelry_checkbox_personalization" />
                                    <input type="checkbox" value="veryimportant" name="intermediatejewelry_checkbox_personalization" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned, would you buy a product from an unknown brand if it meets your needs ? 
                                 (For example, a better design, a better quality or more ecological)
                                 <p>
                                    Not likely <input type="checkbox" value="notimportant" name="intermediatejewelry_checkbox_needs" />
                                    <input type="checkbox" value="littleimportant" name="intermediatejewelry_checkbox_needs" />
                                    <input type="checkbox" value="quiteimportant" name="intermediatejewelry_checkbox_needs" />
                                    <input type="checkbox" value="important" name="intermediatejewelry_checkbox_needs" />
                                    <input type="checkbox" value="veryimportant" name="intermediatejewelry_checkbox_needs" /> Very likely
                                 </p>
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
</html>