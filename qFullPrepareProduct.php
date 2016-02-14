<section>
                           <article>
                              <h1>Questions concerning the product : Mechanical pen</h1>
                              <div>
                                 How frequently, in a year, do you buy the concerned product ?
                                 <p>Frequency : <input type="text" name=<?php phpInHTML("frequency","mechanicalpen");?> id="mechanicalpen_frequency" size="3" onblur="verifNumber(this)" />
                                 </p>
                              </div>
                              <div>
                                 Among the following media, please indicate, by order of importance (1 being the most important and 8 the less important), to which you would mainly refer if you had to purchase the concerned product :
                                 <p>
                                    Newspapers : 
                                    <select name= <?php phpInHTML("newspaper","mechanicalpen");?> id="mechanicalpen_newspaper" onblur="mechanicalpen_ranking(this.id)" />
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
                                    <select name= <?php phpInHTML("radio","mechanicalpen");?> id="mechanicalpen_radio" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name= <?php phpInHTML("television","mechanicalpen");?> id="mechanicalpen_television" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name= <?php phpInHTML("magazine","mechanicalpen");?> id="mechanicalpen_magazine" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name= <?php phpInHTML("internet","mechanicalpen");?> id="mechanicalpen_internet" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name= <?php phpInHTML("cinema","mechanicalpen");?> id="mechanicalpen_cinema" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name= <?php phpInHTML("videogame","mechanicalpen");?> id="mechanicalpen_videogame" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    <select name= <?php phpInHTML("wordofmouth","mechanicalpen");?> id="mechanicalpen_wordofmouth" onblur="mechanicalpen_ranking(this.id)"/>
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
                                    Newspapers : <input type="text" class="textb" name= <?php phpInHTML("newspaper_support","mechanicalpen");?>onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_radio_support" style="display:none">   
                                    Radio : <input type="text" class="textb" name=<?php phpInHTML("radio_support","mechanicalpen");?> onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_television_support" style="display:none">   
                                    Television : <input type="text" class="textb" name= <?php phpInHTML("television_support","mechanicalpen");?>onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_magazine_support" style="display:none">   
                                    Magazines : <input type="text" class="textb" name=<?php phpInHTML("magazine_support","mechanicalpen");?> onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_internet_support" style="display:none">   
                                    Internet : <input type="text" class="textb" name=<?php phpInHTML("internet_support","mechanicalpen");?> onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_cinema_support" style="display:none">   
                                    Cinema : <input type="text" class="textb" name=<?php phpInHTML("cinema_support","mechanicalpen");?> onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_videogame_support" style="display:none">   
                                    Video games : <input type="text" class="textb" name=<?php phpInHTML("videogame_support","mechanicalpen");?> onblur="verifText(this)" />   
                                 </p>
                                <p class=osline id="mechanicalpen_wordofmouth_support" style="display:none">   
                                    Word of mouth : <input type="text" class="textb" name=<?php phpInHTML("wordofmouth_support","mechanicalpen");?> onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 If you were to buy the concerned product, please indicate the three main properties the product must have according to your standards :
                                 <p class=osline id="mechanicalpen_property1">   
                                    Property 1 : <input type="text" name=<?php phpInHTML("property1","mechanicalpen");?> id="mechanicalpen_property1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_property2">   
                                    Property 2 : <input type="text" name= <?php phpInHTML("property2","mechanicalpen");?>id="mechanicalpen_property2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_property3">   
                                    Property 3 : <input type="text" name=<?php phpInHTML("property3","mechanicalpen");?> id="mechanicalpen_property3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                              For the concerned product, please indicate the three main expectations you have :
                                 <p class=osline id="mechanicalpen_expectation1">   
                                    Expectation 1 : <input type="text" name=<?php phpInHTML("expectation1","mechanicalpen");?> id="mechanicalpen_expectation1_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_expectation2">   
                                    Expectation 2 : <input type="text" name=<?php phpInHTML("expectation2","mechanicalpen");?> id="mechanicalpen_expectation2_text" onblur="verifText(this)" />   
                                 </p>
                                 <p class=osline id="mechanicalpen_expectation3">   
                                    Expectation 3 : <input type="text" name=<?php phpInHTML("expectation3","mechanicalpen");?> id="mechanicalpen_expectation3_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the word “comfortable”, please choose the closest synonym to you, for the concerned product :
                                 <p>
                                    Friendly : <input type="checkbox" value="friendly" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Cosy : <input type="checkbox" value="cosy" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Pleasant : <input type="checkbox" value="pleasant" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Beautiful : <input type="checkbox" value="beautiful" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Enjoyable : <input type="checkbox" value="enjoyable" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Grateful : <input type="checkbox" value="grateful" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Homelike : <input type="checkbox" value="homelike" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Soothing : <input type="checkbox" value="soothing" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                    Easy : <input type="checkbox" value="easy" name=<?php phpInHTML("comfortable","mechanicalpen");?> />
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the origin of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name=<?php phpInHTML("origin","mechanicalpen");?> />
                                    <input type="checkbox" value="littleimportant" name=<?php phpInHTML("origin","mechanicalpen");?> />
                                    <input type="checkbox" value="quiteimportant" name=<?php phpInHTML("origin","mechanicalpen");?> />
                                    <input type="checkbox" value="important" name=<?php phpInHTML("origin","mechanicalpen");?> />
                                    <input type="checkbox" value="veryimportant" name=<?php phpInHTML("origin","mechanicalpen");?> /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the proximity of production ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name=<?php phpInHTML("production","mechanicalpen");?> />
                                    <input type="checkbox" value="littleimportant" name=<?php phpInHTML("production","mechanicalpen");?> />
                                    <input type="checkbox" value="quiteimportant" name=<?php phpInHTML("production","mechanicalpen");?> />
                                    <input type="checkbox" value="important" name=<?php phpInHTML("production","mechanicalpen");?> />
                                    <input type="checkbox" value="veryimportant" name=<?php phpInHTML("production","mechanicalpen");?> /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, how important is the ecological concern ? 
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name=<?php phpInHTML("ecology","mechanicalpen");?> />
                                    <input type="checkbox" value="littleimportant" name=<?php phpInHTML("ecology","mechanicalpen");?> />
                                    <input type="checkbox" value="quiteimportant" name=<?php phpInHTML("ecology","mechanicalpen");?> />
                                    <input type="checkbox" value="important" name=<?php phpInHTML("ecology","mechanicalpen");?> />
                                    <input type="checkbox" value="veryimportant" name=<?php phpInHTML("ecology","mechanicalpen");?> /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, are you ready to buy it on the internet ?  
                                 <p>Yes <input type="radio" name=<?php phpInHTML("buyinternet","mechanicalpen");?> id="mechanicalpen_buyinternet_yes" value="yes">  No <input type="radio" name=<?php phpInHTML("buyinternet","mechanicalpen");?> id="mechanicalpen_buyinternet_no" value="no"> 
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, what would be the main reason for not buying on the internet ?
                                 <p class="mechanicalpen_notbuyinternet" id="mechanicalpen_notbuyinternet_reason">   
                                    Reason : <input type="text" class="textb" name=<?php phpInHTML("reason","mechanicalpen");?> id="mechanicalpen_notbuyinternet_reason_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, if bought on the internet, how long is the acceptable time between the purchase and the first use ?
                                 <p class="mechanicalpen_delivery" id="mechanicalpen_delivery_timeacceptable">   
                                    Acceptable time : <input type="text" name=<?php phpInHTML("timeacceptable","mechanicalpen");?> id="mechanicalpen_delivery_timeacceptable_text" onblur="verifText(this)" />   
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, please evaluate your elasticity to the price : (A high elasticity means that a high increase in the price would not change your decision to buy the product)
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name=<?php phpInHTML("elasticity","mechanicalpen");?> />
                                    <input type="checkbox" value="littleimportant" name=<?php phpInHTML("elasticity","mechanicalpen");?> />
                                    <input type="checkbox" value="quiteimportant" name=<?php phpInHTML("elasticity","mechanicalpen");?> />
                                    <input type="checkbox" value="important" name=<?php phpInHTML("elasticity","mechanicalpen");?> />
                                    <input type="checkbox" value="veryimportant" name=<?php phpInHTML("elasticity","mechanicalpen");?> /> Very important
                                 </p>
                              </div>
                              <div>
                                 For the concerned product, is personalization is important ?
                                 <p>
                                    Not important <input type="checkbox" value="notimportant" name=<?php phpInHTML("personalization","mechanicalpen");?> />
                                    <input type="checkbox" value="littleimportant" name=<?php phpInHTML("personalization","mechanicalpen");?> />
                                    <input type="checkbox" value="quiteimportant" name=<?php phpInHTML("personalization","mechanicalpen");?> />
                                    <input type="checkbox" value="important" name=<?php phpInHTML("personalization","mechanicalpen");?> />
                                    <input type="checkbox" value="veryimportant" name=<?php phpInHTML("personalization","mechanicalpen");?> /> Very important
                                 </p>
                                 </div>
                              <div>
                                 For the concerned, would you buy a product from an unknown brand if it meets your needs ? 
                                 (For example, a better design, a better quality or more ecological)
                                 <p>
                                    Not likely <input type="checkbox" value="notimportant" name=<?php phpInHTML("needs","mechanicalpen");?> />
                                    <input type="checkbox" value="littleimportant" name=<?php phpInHTML("needs","mechanicalpen");?> />
                                    <input type="checkbox" value="quiteimportant" name=<?php phpInHTML("needs","mechanicalpen");?> />
                                    <input type="checkbox" value="important" name=<?php phpInHTML("needs","mechanicalpen");?> />
                                    <input type="checkbox" value="veryimportant" name=<?php phpInHTML("needs","mechanicalpen");?> /> Very likely
                                 </p>
                              </div>

