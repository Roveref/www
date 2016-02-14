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
                                 <p>Male <input type="radio" name="2" id="general_sex_male" value="male" onclick="verifRadio(this, 0)" >   Female <input type="radio" name="2" id="general_sex_female" value="female" onclick="verifRadio(this, 0)"> </p>
                              </div>
                              <div>
                                 <p>What is you age ?</p>
                                 <p><input type="text" name="3" id="general_age" size="2" onblur="verifNumber(this)" /> years old</p>
                              </div>
                              <div>
                                 <p>Where do you come from ?</p>
                                 <p>Country : <input type="text" name="4" id="general_country" onblur="verifText(this)" />   City : <input type="text" name="5" id="general_city" onblur="verifText(this)" /></p>
                              </div>
                              <div>
                                 For the following media, please indicate how many hours you spend per week (if not used, please indicate 0) :
                                 <p>Newspapers : <input type="text" name="6" id="general_newspaper" size="2" onblur="verifNumber(this)" />
                                    Radio : <input type="text" name="7" id="general_radio" size="2" onblur="verifNumber(this)" />
                                    Television : <input type="text" name="8" id="general_television" size="2" onblur="verifNumber(this)" />
                                    Magazines : <input type="text" name="9" id="general_magazine" size="2" onblur="verifNumber(this)" />
                                    Internet : <input type="text" name="10" id="general_internet" size="2" onblur="verifNumber(this)" />
                                    Cinema : <input type="text" name="11" id="general_cinema" size="2" onblur="verifNumber(this)" />
                                    Video games : <input type="text" name="12" id="general_videogame" size="2" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 For the following media, please indicate the supports mainly consulted (separate the supports with ";") : 
                                 <p class=osline id="general_newspaper_support" style="display:none">   
                                    Newspapers : <input type="text" class="textb" name="13" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name="14" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name="15" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="16" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name="17" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="18" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name="19" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the following media, please indicate the sections mainly consulted (separate the sections with ";") : 
                                 <p class=osline id="general_newspaper_section" style="display:none">   
                                    Newspapers : <input type="text" class="textb" name="20" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_radio_section" style="display:none">   
                                    Radio : <input type="text" class="textb" name="21" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_television_section" style="display:none">   
                                    Television : <input type="text" class="textb" name="22" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_magazine_section" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="23" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline  id="general_internet_section" style="display:none">   
                                    Internet : <input type="text" class="textb" name="24" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_cinema_section" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="25" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="general_videogame_section" style="display:none">   
                                    Video games : <input type="text" class="textb" name="26" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 <p>Among those supports, does the consultation is in a foreign language ? </p>
                                 <p>Yes <input type="radio" name="27" id="general_language_yes" value="yes" onclick="verifRadio(this, 0)" >   No <input type="radio" name="27" id="general_language_no" value="no" onclick="verifRadio(this, 0)"> </p>
                              </div>
                              <div id="general_languageappear" style="display:none">
                                 <p>Indicate the foreign language and please evaluate the ratio of time spent on this foreign language and your mother tongue :
                                 (For example, 20h in English, 80h in Japanese, please indicate 20-80)</p>
                                 <p><input type="text" name="28" id="general_mainlanguage" onblur="verifText(this)" /></p>
                                 <p><input type="text" name="29" id="general_ratiolanguage1" size="2" onblur="verifNumber(this)" /> - <input type="text" name="30" id="general_ratiolanguage2" size="2" onblur="verifNumber(this)" /></p>
                              </div>
                              <div>
                                 <p>According to your own emotions, what kind of product is the most delightful ?</p>
                                 <p><input type="text" name="31" id="general_mostdelightful" onblur="verifText(this)" /></p>
                              </div>
                           </article>
                        </section>
                        <section>
                           <article>
                              <h1>Questions concerning the product : Mechanical pen</h1>
                              <div>
                                 How frequently, in a year, do you buy the concerned product ?
                                 <p>Frequency : <input type="text" name="32" id="mechanicalpen_frequency" size="3" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 Among the following media, please indicate, by order of importance (1 being the most important and 8 the less important), to which you would mainly refer if you had to purchase the concerned product :
                                 <p>
                                    Newspapers : 
                                    <select name="33" id="mechanicalpen_newspaper" onblur="mechanicalpen_ranking(this.id)" />
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
                                    <select name="34" id="mechanicalpen_radio" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name="35" id="mechanicalpen_television" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name="36" id="mechanicalpen_magazine" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name="37" id="mechanicalpen_internet" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name="38" id="mechanicalpen_cinema" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name="39" id="mechanicalpen_videogame" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name="40" id="mechanicalpen_wordofmouth" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    Newspapers : <input type="text" class="textb" name="41" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name="42" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name="43" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="44" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name="45" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="46" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name="47" onblur="verifText(this)" />   
                                 </p>
                                <p class=osline id="mechanicalpen_wordofmouth_support" style="display:none">   
                                    Word of mouth : <input type="text" class="textb" name="48" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 If you were to buy the concerned product, please indicate the three main properties the product must have according to your standards :
                                 <p class=osline id="mechanicalpen_property1">   
                                    Property 1 : <input type="text" name="49" id="mechanicalpen_property1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_property2">   
                                    Property 2 : <input type="text" name="50" id="mechanicalpen_property2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_property3">   
                                    Property 3 : <input type="text" name="51" id="mechanicalpen_property3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please indicate the three main expectations you have :
                                 <p class=osline id="mechanicalpen_expectation1">   
                                    Expectation 1 : <input type="text" name="52" id="mechanicalpen_expectation1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_expectation2">   
                                    Expectation 2 : <input type="text" name="53" id="mechanicalpen_expectation2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_expectation3">   
                                    Expectation 3 : <input type="text" name="54" id="mechanicalpen_expectation3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the word “comfortable”, please choose the closest synonym to you, for the concerned product :
                                 <p>
                                    Friendly : <input type="checkbox" value="friendly" name="55" />
                                    Cosy : <input type="checkbox" value="cosy" name="55" />
                                    Pleasant : <input type="checkbox" value="pleasant" name="55" />
                                    Beautiful : <input type="checkbox" value="beautiful" name="55" />
                                    Enjoyable : <input type="checkbox" value="enjoyable" name="55" />
                                    Grateful : <input type="checkbox" value="grateful" name="55" />
                                    Homelike : <input type="checkbox" value="homelike" name="55" />
                                    Soothing : <input type="checkbox" value="soothing" name="55" />
                                    Easy : <input type="checkbox" value="easy" name="55" />
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the origin of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="56" />
                                    <input type="checkbox" value="littleimportant" name="56" />
                                    <input type="checkbox" value="quiteimportant" name="56" />
                                    <input type="checkbox" value="important" name="56" />
                                    <input type="checkbox" value="veryimportant" name="56" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the proximity of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="57" />
                                    <input type="checkbox" value="littleimportant" name="57" />
                                    <input type="checkbox" value="quiteimportant" name="57" />
                                    <input type="checkbox" value="important" name="57" />
                                    <input type="checkbox" value="veryimportant" name="57" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the ecological concern ? 
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="58" />
                                    <input type="checkbox" value="littleimportant" name="58" />
                                    <input type="checkbox" value="quiteimportant" name="58" />
                                    <input type="checkbox" value="important" name="58" />
                                    <input type="checkbox" value="veryimportant" name="58" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, are you ready to buy it on the internet ?  
                                 <p>Yes <input type="radio" name="59" id="mechanicalpen_buyinternet_yes" value="yes">  No <input type="radio" name="59" id="mechanicalpen_buyinternet_no" value="no"> 
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, what would be the main reason for not buying on the internet ?
                                 <p class="mechanicalpen_notbuyinternet" id="mechanicalpen_notbuyinternet_reason">   
                                    Reason : <input type="text" class="textb" name="60" id="mechanicalpen_notbuyinternet_reason_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, if bought on the internet, how long is the acceptable time between the purchase and the first use ?
                                 <p class="mechanicalpen_delivery" id="mechanicalpen_delivery_timeacceptable">   
                                    Acceptable time : <input type="text" name="61" id="mechanicalpen_delivery_timeacceptable_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please evaluate your elasticity to the price : (A high elasticity means that a high increase in the price would not change your decision to buy the product)
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="62" />
                                    <input type="checkbox" value="littleimportant" name="62" />
                                    <input type="checkbox" value="quiteimportant" name="62" />
                                    <input type="checkbox" value="important" name="62" />
                                    <input type="checkbox" value="veryimportant" name="62" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, is personalization is important ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="63" />
                                    <input type="checkbox" value="littleimportant" name="63" />
                                    <input type="checkbox" value="quiteimportant" name="63" />
                                    <input type="checkbox" value="important" name="63" />
                                    <input type="checkbox" value="veryimportant" name="63" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned, would you buy a product from an unknown brand if it meets your needs ? 
                                 (For example, a better design, a better quality or more ecological)
                                 <p>
                                    Not likely <input type="checkbox" value="notimportant" name="64" />
                                    <input type="checkbox" value="littleimportant" name="64" />
                                    <input type="checkbox" value="quiteimportant" name="64" />
                                    <input type="checkbox" value="important" name="64" />
                                    <input type="checkbox" value="veryimportant" name="64" /> Very likely
                                 </p>
                              </div>
                           </article>
                        </section>
                        <section>
                           <article>
                              <h1>Questions concerning the product : Intermediate jewelry</h1>
                              <div>
                                 How frequently, in a year, do you buy the concerned product ?
                                 <p>Frequency : <input type="text" name="65" id="intermediatejewelry_frequency" size="3" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 Among the following media, please indicate, by order of importance (1 being the most important and 8 the less important), to which you would mainly refer if you had to purchase the concerned product :
                                 <p>
                                    Newspapers : 
                                    <select name="66" id="intermediatejewelry_newspaper" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="67" id="intermediatejewelry_radio" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="68" id="intermediatejewelry_television" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="69" id="intermediatejewelry_magazine" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="70" id="intermediatejewelry_internet" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="71" id="intermediatejewelry_cinema" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="72" id="intermediatejewelry_videogame" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    <select name="73" id="intermediatejewelry_wordofmouth" onblur="intermediatejewelry_ranking(this.id)" />
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
                                    Newspapers : <input type="text" class="textb" name="74" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name="75" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name="76" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name="77" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name="78" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name="79" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name="80" onblur="verifText(this)" />   
                                 </p>
                                <p class=osline id="intermediatejewelry_wordofmouth_support" style="display:none">   
                                    Word of mouth : <input type="text" class="textb" name="81" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 If you were to buy the concerned product, please indicate the three main properties the product must have according to your standards :
                                 <p class=osline id="intermediatejewelry_property1">   
                                    Property 1 : <input type="text" name="82" id="intermediatejewelry_property1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_property2">   
                                    Property 2 : <input type="text" name="83" id="intermediatejewelry_property2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_property3">   
                                    Property 3 : <input type="text" name="84" id="intermediatejewelry_property3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please indicate the three main expectations you have :
                                 <p class=osline id="intermediatejewelry_expectation1">   
                                    Expectation 1 : <input type="text" name="85" id="intermediatejewelry_expectation1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_expectation2">   
                                    Expectation 2 : <input type="text" name="86" id="intermediatejewelry_expectation2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="intermediatejewelry_expectation3">   
                                    Expectation 3 : <input type="text" name="87" id="intermediatejewelry_expectation3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the word “luxurious”, please choose the closest synonym to you, for the concerned product :
                                 <p>
                                    Elegant : <input type="checkbox" value="elegant" name="88" />
                                    Sumptuosity : <input type="checkbox" value="sumptuosity" name="88" />
                                    Epicurean : <input type="checkbox" value="epicurean" name="88" />
                                    Palatial : <input type="checkbox" value="palatial" name="88" />
                                    Rich : <input type="checkbox" value="rich" name="88" />
                                    Impressive : <input type="checkbox" value="impressive" name="88" />
                                    Glorious : <input type="checkbox" value="glorious" name="88" />
                                    Splendid : <input type="checkbox" value="splendid" name="88" />
                                    Beautiful : <input type="checkbox" value="beautiful" name="88" />
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the origin of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="89" />
                                    <input type="checkbox" value="littleimportant" name="89" />
                                    <input type="checkbox" value="quiteimportant" name="89" />
                                    <input type="checkbox" value="important" name="8ç" />
                                    <input type="checkbox" value="veryimportant" name="8ç" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the proximity of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="90" />
                                    <input type="checkbox" value="littleimportant" name="90" />
                                    <input type="checkbox" value="quiteimportant" name="90" />
                                    <input type="checkbox" value="important" name="90" />
                                    <input type="checkbox" value="veryimportant" name="90" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the ecological concern ? 
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="91" />
                                    <input type="checkbox" value="littleimportant" name="91" />
                                    <input type="checkbox" value="quiteimportant" name="91" />
                                    <input type="checkbox" value="important" name="91" />
                                    <input type="checkbox" value="veryimportant" name="91" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, are you ready to buy it on the internet ?  
                                 <p>Yes <input type="radio" name="92" id="intermediatejewelry_buyinternet_yes" value="yes">  No <input type="radio" name="92" id="intermediatejewelry_buyinternet_no" value="no"> 
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, what would be the main reason for not buying on the internet ?
                                 <p class="intermediatejewelry_notbuyinternet" id="intermediatejewelry_notbuyinternet_reason">   
                                    Reason : <input type="text" class="textb" name="93" id="intermediatejewelry_notbuyinternet_reason_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, if bought on the internet, how long is the acceptable time between the purchase and the first use ?
                                 <p class="intermediatejewelry_delivery" id="intermediatejewelry_delivery_timeacceptable">   
                                    Acceptable time : <input type="text" name="94" id="intermediatejewelry_delivery_timeacceptable_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please evaluate your elasticity to the price : (A high elasticity means that a high increase in the price would not change your decision to buy the product)
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="95" />
                                    <input type="checkbox" value="littleimportant" name="95" />
                                    <input type="checkbox" value="quiteimportant" name="95" />
                                    <input type="checkbox" value="important" name="95" />
                                    <input type="checkbox" value="veryimportant" name="95" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, is personalization is important ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name="96" />
                                    <input type="checkbox" value="littleimportant" name="96" />
                                    <input type="checkbox" value="quiteimportant" name="96" />
                                    <input type="checkbox" value="important" name="96" />
                                    <input type="checkbox" value="veryimportant" name="96" /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned, would you buy a product from an unknown brand if it meets your needs ? 
                                 (For example, a better design, a better quality or more ecological)
                                 <p>
                                    Not likely <input type="checkbox" value="notimportant" name="97" />
                                    <input type="checkbox" value="littleimportant" name="97" />
                                    <input type="checkbox" value="quiteimportant" name="97" />
                                    <input type="checkbox" value="important" name="97" />
                                    <input type="checkbox" value="veryimportant" name="97" /> Very likely
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

