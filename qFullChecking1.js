var mechanicalpen_table = ["mechanicalpen_newspaper", "mechanicalpen_radio", "mechanicalpen_television", "mechanicalpen_magazine", "mechanicalpen_internet", "mechanicalpen_cinema", "mechanicalpen_videogame", "mechanicalpen_wordofmouth"];
var intermediatejewelry_table = ["intermediatejewelry_newspaper", "intermediatejewelry_radio", "intermediatejewelry_television", "intermediatejewelry_magazine", "intermediatejewelry_internet", "intermediatejewelry_cinema", "intermediatejewelry_videogame", "intermediatejewelry_wordofmouth"];
var appeardisappear_table = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function surligne(champ, erreur) {
    if (erreur)
        champ.style.backgroundColor = "#fba";
    else
        champ.style.backgroundColor = "";
}

function verifText(champ) {
    if (typeof champ == "string") {
        if (champ.length < 1) {
            return false;
        } else {
            return true;
        }
    } else {
        if (champ.value.length < 1) {
            surligne(champ, true);
            return false;
        } else {
            surligne(champ, false);
            return true;
        }
    }
}

function verifNumber(champ) {
    var number = parseInt(champ.value);

    if (isNaN(number) || number < 0) {
        surligne(champ, true);
        if (champ.id == "general_age" || champ.id == "general_ratiolanguage1" || champ.id == "general_ratiolanguage2" || champ.id == "mechanicalpen_frequency" || champ.id == "intermediatejewelry_frequency") {} else {
            for (i = 0; i < 21; i++) {
                var changenamesupport = champ.id + "_support";
                var changenamesection = champ.id + "_section";
                if (appeardisappear_table[i] == changenamesupport)
                    appeardisappear_table[i] = 0;
                else if (appeardisappear_table[i] == changenamesection)
                    appeardisappear_table[i] = 0;
            }
            document.getElementById(champ.id + "_support").style.display = 'none';
            document.getElementById(champ.id + "_section").style.display = 'none'
        }
        return false;
    } else {
        surligne(champ, false);
        if (champ.id == "general_age" || champ.id == "general_ratiolanguage1" || champ.id == "general_ratiolanguage2" || champ.id == "mechanicalpen_frequency" || champ.id == "intermediatejewelry_frequency") {
            return true;
        } else {
            if (number >= 7) {
                var testvaluesupport = 0;
                var testvaluesection = 0;

                document.getElementById(champ.id + "_support").style.display = 'block';
                document.getElementById(champ.id + "_section").style.display = 'block';

                for (i = 0; i < 21; i++) {

                    var changenamesupport = champ.id + "_support";
                    var changenamesection = champ.id + "_section";

                    if (appeardisappear_table[i] == changenamesupport)
                        testvaluesupport = 1;
                    else if (appeardisappear_table[i] == changenamesection)
                        testvaluesection = 1;

                }
                for (i = 0; i < 21; i++) {
                    if (testvaluesupport == 0 && appeardisappear_table[i] == 0) {
                        appeardisappear_table[i] = champ.id + "_support";
                        testvaluesupport = 1;
                    }
                }
                for (i = 0; i < 21; i++) {
                    if (testvaluesection == 0 && appeardisappear_table[i] == 0) {
                        appeardisappear_table[i] = champ.id + "_section";
                        testvaluesection = 1;
                    }
                }
            }
            if (number < 7) {
                for (i = 0; i < 21; i++) {
                    var changenamesupport = champ.id + "_support";
                    var changenamesection = champ.id + "_section";
                    if (appeardisappear_table[i] == changenamesupport)
                        appeardisappear_table[i] = 0;
                    else if (appeardisappear_table[i] == changenamesection)
                        appeardisappear_table[i] = 0;
                }
                document.getElementById(champ.id + "_support").style.display = 'none';
                document.getElementById(champ.id + "_section").style.display = 'none';
            }
            return true;
        }
    }
}

function verifRadio(champ, test) {

	if (test == 1) {
		if(champ[0].checked){
			champ=champ[0];
		}
		else if(champ[1].checked){
			champ=champ[1];
		}
		else{
		return false;
		}
	}
    if (champ.checked) {  
    	if(champ.id == "general_language_yes")
    	{
                document.getElementById("general_languageappear").style.display = 'block';
                document.getElementById("general_languageappear").style.display = 'block';  
                for (i = 0; i < 21; i++) {
            	if (appeardisappear_table[i] == 0) {
                appeardisappear_table[i] = "general_languageappear"; 
        		return true;
                }           
                }  	
    	}
    	else if(champ.id == "general_language_no")
    	{
                document.getElementById("general_languageappear").style.display = 'none';
                document.getElementById("general_languageappear").style.display = 'none'; 
                document.getElementsByName("general_mainlanguage")[0].value = "";
       		    document.getElementsByName("general_ratiolanguage1")[0].value = "";
                document.getElementsByName("general_ratiolanguage2")[0].value = "";
                for (i = 0; i < 21; i++) {
            	if (appeardisappear_table[i] == "general_languageappear") {
                appeardisappear_table[i] = 0; 
        		return true;
                }           
                }  	
    	}
        return true;
    } else {
        return false;
    }
}

function verifCheckbox5(champ) {
    for (i = 0; i < 5; i++) {
        if (champ[i].checked) {
            return true;
        } else {}
    }
    return false;
}

function verifCheckbox9(champ) {
    for (i = 0; i < 9; i++) {
        if (champ[i].checked) {
            return true;
        } else {}
    }
    return false;
}

function mechanicalpen_ranking(champ) {
    var selection = document.getElementById(champ);
    var selectionvalue = selection.options[selection.selectedIndex].value;

    if (selection.value >= 1 && selection.value <= 3) {
        var testvaluesupport = 0;
        for (i = 0; i < 21; i++) {
            var changenamesupport = champ + "_support";
            if (appeardisappear_table[i] == changenamesupport)
                testvaluesupport = 1;
        }
        for (i = 0; i < 21; i++) {
            if (testvaluesupport == 0 && appeardisappear_table[i] == 0) {
                appeardisappear_table[i] = champ + "_support";
                testvaluesupport = 1;
            }
        }
        document.getElementById(champ + "_support").style.display = 'block';
    } else {
        for (i = 0; i < 21; i++) {
            var changenamesupport = champ + "_support";
            if (appeardisappear_table[i] == changenamesupport)
                appeardisappear_table[i] = 0;
        }
        document.getElementsByName(champ + "_support")[0].value = "";
        document.getElementById(champ + "_support").style.display = 'none';
    }
}

function verify_mechanicalpen_ranking() {
    for (i = 0; i < 7; i++) {
        for (j = i + 1; j < 8; j++) {
            if (document.getElementById(mechanicalpen_table[i]).value == document.getElementById(mechanicalpen_table[j]).value) {
                return false;
            } else {}
        }
    }
    return true;
}

function mechanicalpen_reset() {
    for (i = 0; i < 9; i++) {
        for (j = 1; j < 9; j++) {
            document.getElementById(mechanicalpen_table[i]).options[j].disabled = false;
            document.getElementById(mechanicalpen_table[i]).options[j].selected = document.getElementById(mechanicalpen_table[i]).options[j].defaultSelected;
        }
        document.getElementById(mechanicalpen_table[i] + "_support").style.display = 'none';
        document.getElementsByName(mechanicalpen_table[i] + "_support")[0].value = "";
        for (j = 0; j < 21; j++) {
            var changenamesupport = mechanicalpen_table[i] + "_support";
            if (appeardisappear_table[j] == changenamesupport)
                appeardisappear_table[j] = 0;
        }
    }
}

function intermediatejewelry_ranking(champ) {
    var selection = document.getElementById(champ);
    var selectionvalue = selection.options[selection.selectedIndex].value;

    if (selection.value >= 1 && selection.value <= 3) {
        var testvaluesupport = 0;
        for (i = 0; i < 21; i++) {
            var changenamesupport = champ + "_support";

            if (appeardisappear_table[i] == changenamesupport)
                testvaluesupport = 1;
        }
        for (i = 0; i < 21; i++) {
            if (testvaluesupport == 0 && appeardisappear_table[i] == 0) {
                appeardisappear_table[i] = champ + "_support";
                testvaluesupport = 1;
            }
        }
        document.getElementById(champ + "_support").style.display = 'block';
    } else {
        for (i = 0; i < 21; i++) {
            var changenamesupport = champ + "_support";
            if (appeardisappear_table[i] == changenamesupport)
                appeardisappear_table[i] = 0;
        }
        document.getElementsByName(champ + "_support")[0].value = "";
        document.getElementById(champ + "_support").style.display = 'none';
    }
}

function verify_intermediatejewelry_ranking() {

    for (i = 0; i < 7; i++) {
        for (j = i + 1; j < 8; j++) {
            if (document.getElementById(intermediatejewelry_table[i]).value == document.getElementById(intermediatejewelry_table[j]).value) {

                return false;
            }
        }
    }
    return true;
}

function intermediatejewelry_reset() {
    for (i = 0; i < 9; i++) {
        for (j = 1; j < 9; j++) {
            document.getElementById(intermediatejewelry_table[i]).options[j].disabled = false;
            document.getElementById(intermediatejewelry_table[i]).options[j].selected = document.getElementById(intermediatejewelry_table[i]).options[j].defaultSelected;
        }
        document.getElementById(intermediatejewelry_table[i] + "_support").style.display = 'none';
        document.getElementsByName(intermediatejewelry_table[i] + "_support")[0].value = "";

        for (j = 0; j < 21; j++) {
            var changenamesupport = intermediatejewelry_table[i] + "_support";
            if (appeardisappear_table[j] == changenamesupport)
                appeardisappear_table[j] = 0;
        }
    }
}

function verifForm(f) {
    var appeardisappear_ok = true;
    for (i = 0; i < 21; i++) {
        if (appeardisappear_table[i] != 0) {
            if(appeardisappear_table[i] == "general_languageappear")
            {
            appeardisappear_ok = verifText(f.general_mainlanguage);
			if(appeardisappear_ok == true)
            appeardisappear_ok = verifNumber(f.general_ratiolanguage1);
			if(appeardisappear_ok == true)
            appeardisappear_ok = verifNumber(f.general_ratiolanguage2);
            }
            else{
            var changename = document.getElementsByName(appeardisappear_table[i])[0].value;
            appeardisappear_ok = verifText(changename);
            }
            if (appeardisappear_ok == false) {
            	if(appeardisappear_table[i] == "general_languageappear")
            	{
            	verifText(f.general_mainlanguage);
            	verifNumber(f.general_ratiolanguage1);
            	verifNumber(f.general_ratiolanguage2);
            	}
            	else{
                surligne(document.getElementsByName(appeardisappear_table[i])[0], true);
                }
            }
        }
    }
    for (i = 0; i < 21; i++) {
        if (appeardisappear_table[i] != 0) {
            if(appeardisappear_table[i] == "general_languageappear")
            {
            appeardisappear_ok = verifText(f.general_mainlanguage);
			if(appeardisappear_ok == true)
            appeardisappear_ok = verifNumber(f.general_ratiolanguage1);
			if(appeardisappear_ok == true)
            appeardisappear_ok = verifNumber(f.general_ratiolanguage2);
            }
            else{
            var changename = document.getElementsByName(appeardisappear_table[i])[0].value;
            appeardisappear_ok = verifText(changename);
            }
            if (appeardisappear_ok == false) {
                break;
            }
        }
    }

    var general_sex_ok = verifRadio(f.general_sex, 1);
    var general_age_ok = verifNumber(f.general_age);
    var general_country_ok = verifText(f.general_country);
    var general_city_ok = verifText(f.general_city);
    var general_newspaper_ok = verifNumber(f.general_newspaper);
    var general_radio_ok = verifNumber(f.general_radio);
    var general_television_ok = verifNumber(f.general_television);
    var general_magazine_ok = verifNumber(f.general_magazine);
    var general_internet_ok = verifNumber(f.general_internet);
    var general_cinema_ok = verifNumber(f.general_cinema);
    var general_videogame_ok = verifNumber(f.general_videogame);
    var general_language_ok = verifRadio(f.general_language, 1);
    var general_mostdelightful_ok = verifText(f.general_mostdelightful);

    var mechanicalpen_frequency_ok = verifNumber(f.mechanicalpen_frequency);
    var mechanicalpen_ranking_ok = verify_mechanicalpen_ranking();
    var mechanicalpen_property1_ok = verifText(f.mechanicalpen_property1_text);
    var mechanicalpen_property2_ok = verifText(f.mechanicalpen_property2_text);
    var mechanicalpen_property3_ok = verifText(f.mechanicalpen_property3_text);
    var mechanicalpen_expectation1_ok = verifText(f.mechanicalpen_expectation1_text);
    var mechanicalpen_expectation2_ok = verifText(f.mechanicalpen_expectation2_text);
    var mechanicalpen_expectation3_ok = verifText(f.mechanicalpen_expectation3_text);
    var mechanicalpen_buyinternet_ok = verifRadio(f.mechanicalpen_buyinternet, 1);
    var mechanicalpen_notbuyinternet_reason_ok = verifText(f.mechanicalpen_notbuyinternet_reason_text);
    var mechanicalpen_delivery_timeacceptable_ok = verifText(f.mechanicalpen_delivery_timeacceptable_text);
    var mechanicalpen_checkbox_comfortable_ok = verifCheckbox9(f.mechanicalpen_checkbox_comfortable);
    var mechanicalpen_checkbox_origin_ok = verifCheckbox5(f.mechanicalpen_checkbox_origin);
    var mechanicalpen_checkbox_production_ok = verifCheckbox5(f.mechanicalpen_checkbox_production);
    var mechanicalpen_checkbox_ecology_ok = verifCheckbox5(f.mechanicalpen_checkbox_ecology);
    var mechanicalpen_checkbox_elasticity_ok = verifCheckbox5(f.mechanicalpen_checkbox_elasticity);
    var mechanicalpen_checkbox_personalization_ok = verifCheckbox5(f.mechanicalpen_checkbox_personalization);
    var mechanicalpen_checkbox_needs_ok = verifCheckbox5(f.mechanicalpen_checkbox_needs);

    var intermediatejewelry_frequency_ok = verifNumber(f.intermediatejewelry_frequency);
    var intermediatejewelry_ranking_ok = verify_intermediatejewelry_ranking();
    var intermediatejewelry_property1_ok = verifText(f.intermediatejewelry_property1_text);
    var intermediatejewelry_property2_ok = verifText(f.intermediatejewelry_property2_text);
    var intermediatejewelry_property3_ok = verifText(f.intermediatejewelry_property3_text);
    var intermediatejewelry_expectation1_ok = verifText(f.intermediatejewelry_expectation1_text);
    var intermediatejewelry_expectation2_ok = verifText(f.intermediatejewelry_expectation2_text);
    var intermediatejewelry_expectation3_ok = verifText(f.intermediatejewelry_expectation3_text);
    var intermediatejewelry_buyinternet_ok = verifRadio(f.intermediatejewelry_buyinternet, 1);
    var intermediatejewelry_notbuyinternet_reason_ok = verifText(f.intermediatejewelry_notbuyinternet_reason_text);
    var intermediatejewelry_delivery_timeacceptable_ok = verifText(f.intermediatejewelry_delivery_timeacceptable_text);
    var intermediatejewelry_checkbox_luxurious_ok = verifCheckbox9(f.intermediatejewelry_checkbox_luxurious);
    var intermediatejewelry_checkbox_origin_ok = verifCheckbox5(f.intermediatejewelry_checkbox_origin);
    var intermediatejewelry_checkbox_production_ok = verifCheckbox5(f.intermediatejewelry_checkbox_production);
    var intermediatejewelry_checkbox_ecology_ok = verifCheckbox5(f.intermediatejewelry_checkbox_ecology);
    var intermediatejewelry_checkbox_elasticity_ok = verifCheckbox5(f.intermediatejewelry_checkbox_elasticity);
    var intermediatejewelry_checkbox_personalization_ok = verifCheckbox5(f.intermediatejewelry_checkbox_personalization);
    var intermediatejewelry_checkbox_needs_ok = verifCheckbox5(f.intermediatejewelry_checkbox_needs);

    if (general_sex_ok && general_age_ok && general_country_ok && general_city_ok && general_newspaper_ok && general_radio_ok && general_television_ok && general_magazine_ok && general_internet_ok && general_cinema_ok && general_videogame_ok && general_language_ok && general_mostdelightful_ok && mechanicalpen_frequency_ok && mechanicalpen_ranking_ok && mechanicalpen_property1_ok && mechanicalpen_property2_ok && mechanicalpen_property3_ok && mechanicalpen_expectation1_ok && mechanicalpen_expectation2_ok && mechanicalpen_expectation3_ok && mechanicalpen_buyinternet_ok && mechanicalpen_notbuyinternet_reason_ok && mechanicalpen_delivery_timeacceptable_ok && mechanicalpen_checkbox_comfortable_ok && mechanicalpen_checkbox_origin_ok && mechanicalpen_checkbox_production_ok && mechanicalpen_checkbox_ecology_ok && mechanicalpen_checkbox_elasticity_ok && mechanicalpen_checkbox_personalization_ok && mechanicalpen_checkbox_needs_ok && intermediatejewelry_frequency_ok && intermediatejewelry_ranking_ok && intermediatejewelry_property1_ok && intermediatejewelry_property2_ok && intermediatejewelry_property3_ok && intermediatejewelry_expectation1_ok && intermediatejewelry_expectation2_ok && intermediatejewelry_expectation3_ok && intermediatejewelry_buyinternet_ok && intermediatejewelry_notbuyinternet_reason_ok && intermediatejewelry_delivery_timeacceptable_ok && intermediatejewelry_checkbox_luxurious_ok && intermediatejewelry_checkbox_origin_ok && intermediatejewelry_checkbox_production_ok && intermediatejewelry_checkbox_ecology_ok && intermediatejewelry_checkbox_elasticity_ok && intermediatejewelry_checkbox_personalization_ok && intermediatejewelry_checkbox_needs_ok && appeardisappear_ok) {
        alert("ありがとうございました!");
        return true;
    } else {
        alert("Please complete correctly the form");
    /*alert(general_sex_ok);
    alert(general_age_ok);
    alert(general_country_ok);
    alert(general_city_ok);
    alert(general_newspaper_ok);
    alert(general_radio_ok);
    alert(general_television_ok);
    alert(general_magazine_ok);
    alert(general_internet_ok);
    alert(general_cinema_ok);
    alert(general_videogame_ok);
    alert(general_language_ok);
    alert(general_mostdelightful_ok);
    alert(mechanicalpen_frequency_ok);
    alert(mechanicalpen_ranking_ok);
    alert(mechanicalpen_property1_ok);
    alert(mechanicalpen_property2_ok);
    alert(mechanicalpen_property3_ok);
    alert(mechanicalpen_expectation1_ok);
    alert(mechanicalpen_expectation2_ok);
    alert(mechanicalpen_expectation3_ok);
    alert(mechanicalpen_buyinternet_ok);
    alert(mechanicalpen_notbuyinternet_reason_ok);
    alert(mechanicalpen_delivery_timeacceptable_ok);
    alert(mechanicalpen_checkbox_comfortable_ok);
    alert(mechanicalpen_checkbox_origin_ok);
    alert(mechanicalpen_checkbox_production_ok);
    alert(mechanicalpen_checkbox_ecology_ok);
    alert(mechanicalpen_checkbox_elasticity_ok);
    alert(mechanicalpen_checkbox_personalization_ok);
    alert(mechanicalpen_checkbox_needs_ok);
    alert(intermediatejewelry_frequency_ok);
    alert(intermediatejewelry_ranking_ok);
    alert(intermediatejewelry_property1_ok);
    alert(intermediatejewelry_property2_ok);
    alert(intermediatejewelry_property3_ok);
    alert(intermediatejewelry_expectation1_ok);
    alert(intermediatejewelry_expectation2_ok);
    alert(intermediatejewelry_expectation3_ok);
    alert(intermediatejewelry_buyinternet_ok);
    alert(intermediatejewelry_notbuyinternet_reason_ok);
    alert(intermediatejewelry_delivery_timeacceptable_ok);
    alert(intermediatejewelry_checkbox_luxurious_ok);
    alert(intermediatejewelry_checkbox_origin_ok);
    alert(intermediatejewelry_checkbox_production_ok);
    alert(intermediatejewelry_checkbox_ecology_ok);
    alert(intermediatejewelry_checkbox_elasticity_ok);
    alert(intermediatejewelry_checkbox_personalization_ok);
    alert(intermediatejewelry_checkbox_needs_ok);
    alert(appeardisappear_ok);*/
        return false;
    }
}