
<?php

class Location_Fn extends Fn
{

  public function flagList()
      {
          $items = array();

          $items[] = array("id"=>"AF","name"=>"Afghanistan","category_id"=>2,"capital"=>"Kabul");
          $items[] = array("id"=>"AX","name"=>"Aland Islands","category_id"=>3,"capital"=>"Mariehamn");
          $items[] = array("id"=>"AL","name"=>"Albania","category_id"=>3,"capital"=>"Tirana");
          $items[] = array("id"=>"DZ","name"=>"Algeria","category_id"=>1,"capital"=>"Algiers");
          $items[] = array("id"=>"AS","name"=>"American Samoa","category_id"=>6,"capital"=>"Pago Pago");
          $items[] = array("id"=>"AD","name"=>"Andorra","category_id"=>3,"capital"=>"Andorra la Vella");
          $items[] = array("id"=>"AO","name"=>"Angola","category_id"=>1,"capital"=>"Luanda");
          $items[] = array("id"=>"AI","name"=>"Anguilla","category_id"=>4,"capital"=>"The Valley");
          $items[] = array("id"=>"AG","name"=>"Antigua and Barbuda","category_id"=>4,"capital"=>"St. John's");
          $items[] = array("id"=>"AR","name"=>"Argentina","category_id"=>5,"capital"=>"Buenos Aires");
          $items[] = array("id"=>"AM","name"=>"Armenia","category_id"=>2,"capital"=>"Yerevan");
          $items[] = array("id"=>"AW","name"=>"Aruba","category_id"=>5,"capital"=>"Oranjestad");
          $items[] = array("id"=>"AU","name"=>"Australia","category_id"=>6,"capital"=>"Canberra");
          $items[] = array("id"=>"AT","name"=>"Austria","category_id"=>3,"capital"=>"Vienna");
          $items[] = array("id"=>"AZ","name"=>"Azerbaijan","category_id"=>2,"capital"=>"Baku");
          $items[] = array("id"=>"BS","name"=>"Bahamas","category_id"=>4,"capital"=>"Nassau");
          $items[] = array("id"=>"BH","name"=>"Bahrain","category_id"=>2,"capital"=>"Manama");
          $items[] = array("id"=>"BD","name"=>"Bangladesh","category_id"=>2,"capital"=>"Dhaka");
          $items[] = array("id"=>"BB","name"=>"Barbados","category_id"=>4,"capital"=>"Bridgetown");
          $items[] = array("id"=>"BY","name"=>"Belarus","category_id"=>3,"capital"=>"Minsk");
          $items[] = array("id"=>"BE","name"=>"Belgium","category_id"=>3,"capital"=>"Brussels");
          $items[] = array("id"=>"BZ","name"=>"Belize","category_id"=>4,"capital"=>"Belmopan");
          $items[] = array("id"=>"BJ","name"=>"Benin","category_id"=>1,"capital"=>"Porto-Novo");
          $items[] = array("id"=>"BM","name"=>"Bermuda","category_id"=>4,"capital"=>"Hamilton");
          $items[] = array("id"=>"BT","name"=>"Bhutan","category_id"=>2,"capital"=>"Thimphu");
          $items[] = array("id"=>"BO","name"=>"Bolivia (Plurinational State of)","category_id"=>5,"capital"=>"Sucre");
          $items[] = array("id"=>"BQ","name"=>"Bonaire, Sint Eustatius and Saba","category_id"=>5,"capital"=>"Kralendijk");
          $items[] = array("id"=>"BA","name"=>"Bosnia and Herzegovina","category_id"=>3,"capital"=>"Sarajevo");
          $items[] = array("id"=>"BW","name"=>"Botswana","category_id"=>1,"capital"=>"Gaborone");
          $items[] = array("id"=>"BR","name"=>"Brazil","category_id"=>5,"capital"=>"Brasília");
          $items[] = array("id"=>"IO","name"=>"British Indian Ocean Territory","category_id"=>2,"capital"=>"Diego Garcia");
          $items[] = array("id"=>"BN","name"=>"Brunei Darussalam","category_id"=>2,"capital"=>"Bandar Seri Begawan");
          $items[] = array("id"=>"BG","name"=>"Bulgaria","category_id"=>3,"capital"=>"Sofia");
          $items[] = array("id"=>"BF","name"=>"Burkina Faso","category_id"=>1,"capital"=>"Ouagadougou");
          $items[] = array("id"=>"BI","name"=>"Burundi","category_id"=>1,"capital"=>"Bujumbura");
          $items[] = array("id"=>"CV","name"=>"Cabo Verde","category_id"=>1,"capital"=>"Praia");
          $items[] = array("id"=>"KH","name"=>"Cambodia","category_id"=>2,"capital"=>"Phnom Penh");
          $items[] = array("id"=>"CM","name"=>"Cameroon","category_id"=>1,"capital"=>"Yaoundé");
          $items[] = array("id"=>"CA","name"=>"Canada","category_id"=>4,"capital"=>"Ottawa");
          $items[] = array("id"=>"KY","name"=>"Cayman Islands","category_id"=>4,"capital"=>"George Town");
          $items[] = array("id"=>"CF","name"=>"Central African Republic","category_id"=>1,"capital"=>"Bangui");
          $items[] = array("id"=>"TD","name"=>"Chad","category_id"=>1,"capital"=>"N'Djamena");
          $items[] = array("id"=>"CL","name"=>"Chile","category_id"=>5,"capital"=>"Santiago");
          $items[] = array("id"=>"CN","name"=>"China","category_id"=>2,"capital"=>"Beijing");
          $items[] = array("id"=>"CX","name"=>"Christmas Island","category_id"=>2,"capital"=>"Flying Fish Cove");
          $items[] = array("id"=>"CC","name"=>"Cocos (Keeling) Islands","category_id"=>2,"capital"=>"West Island");
          $items[] = array("id"=>"CO","name"=>"Colombia","category_id"=>5,"capital"=>"Bogotá");
          $items[] = array("id"=>"KM","name"=>"Comoros","category_id"=>1,"capital"=>"Moroni");
          $items[] = array("id"=>"CK","name"=>"Cook Islands","category_id"=>6,"capital"=>"Avarua");
          $items[] = array("id"=>"CR","name"=>"Costa Rica","category_id"=>4,"capital"=>"San José");
          $items[] = array("id"=>"HR","name"=>"Croatia","category_id"=>3,"capital"=>"Zagreb");
          $items[] = array("id"=>"CU","name"=>"Cuba","category_id"=>4,"capital"=>"Havana");
          $items[] = array("id"=>"CW","name"=>"Curaçao","category_id"=>5,"capital"=>"Willemstad");
          $items[] = array("id"=>"CY","name"=>"Cyprus","category_id"=>3,"capital"=>"Nicosia");
          $items[] = array("id"=>"CZ","name"=>"Czech Republic","category_id"=>3,"capital"=>"Prague");
          $items[] = array("id"=>"CI","name"=>"Côte d'Ivoire","category_id"=>1,"capital"=>"Yamoussoukro");
          $items[] = array("id"=>"CD","name"=>"Democratic Republic of the Congo","category_id"=>1,"capital"=>"Kinshasa");
          $items[] = array("id"=>"DK","name"=>"Denmark","category_id"=>3,"capital"=>"Copenhagen");
          $items[] = array("id"=>"DJ","name"=>"Djibouti","category_id"=>1,"capital"=>"Djibouti");
          $items[] = array("id"=>"DM","name"=>"Dominica","category_id"=>4,"capital"=>"Roseau");
          $items[] = array("id"=>"DO","name"=>"Dominican Republic","category_id"=>4,"capital"=>"Santo Domingo");
          $items[] = array("id"=>"EC","name"=>"Ecuador","category_id"=>5,"capital"=>"Quito");
          $items[] = array("id"=>"EG","name"=>"Egypt","category_id"=>1,"capital"=>"Cairo");
          $items[] = array("id"=>"SV","name"=>"El Salvador","category_id"=>4,"capital"=>"San Salvador");
          $items[] = array("id"=>"GQ","name"=>"Equatorial Guinea","category_id"=>1,"capital"=>"Malabo");
          $items[] = array("id"=>"ER","name"=>"Eritrea","category_id"=>1,"capital"=>"Asmara");
          $items[] = array("id"=>"EE","name"=>"Estonia","category_id"=>3,"capital"=>"Tallinn");
          $items[] = array("id"=>"ET","name"=>"Ethiopia","category_id"=>1,"capital"=>"Addis Ababa");
          $items[] = array("id"=>"FK","name"=>"Falkland Islands","category_id"=>5,"capital"=>"Stanley");
          $items[] = array("id"=>"FO","name"=>"Faroe Islands","category_id"=>3,"capital"=>"Tórshavn");
          $items[] = array("id"=>"FM","name"=>"Federated States of Micronesia","category_id"=>6,"capital"=>"Palikir");
          $items[] = array("id"=>"FJ","name"=>"Fiji","category_id"=>6,"capital"=>"Suva");
          $items[] = array("id"=>"FI","name"=>"Finland","category_id"=>3,"capital"=>"Helsinki");
          $items[] = array("id"=>"MK","name"=>"Former Yugoslav Republic of Macedonia","category_id"=>3,"capital"=>"Skopje");
          $items[] = array("id"=>"FR","name"=>"France","category_id"=>3,"capital"=>"Paris");
          $items[] = array("id"=>"GF","name"=>"French Guiana","category_id"=>5,"capital"=>"Cayenne");
          $items[] = array("id"=>"PF","name"=>"French Polynesia","category_id"=>6,"capital"=>"Papeete");
          $items[] = array("id"=>"TF","name"=>"French Southern Territories","category_id"=>1,"capital"=>"Saint-Pierre, Réunion");
          $items[] = array("id"=>"GA","name"=>"Gabon","category_id"=>1,"capital"=>"Libreville");
          $items[] = array("id"=>"GM","name"=>"Gambia","category_id"=>1,"capital"=>"Banjul");
          $items[] = array("id"=>"GE","name"=>"Georgia","category_id"=>2,"capital"=>"Tbilisi");
          $items[] = array("id"=>"DE","name"=>"Germany","category_id"=>3,"capital"=>"Berlin");
          $items[] = array("id"=>"GH","name"=>"Ghana","category_id"=>1,"capital"=>"Accra");
          $items[] = array("id"=>"GI","name"=>"Gibraltar","category_id"=>3,"capital"=>"Gibraltar");
          $items[] = array("id"=>"GR","name"=>"Greece","category_id"=>3,"capital"=>"Athens");
          $items[] = array("id"=>"GL","name"=>"Greenland","category_id"=>4,"capital"=>"Nuuk");
          $items[] = array("id"=>"GD","name"=>"Grenada","category_id"=>4,"capital"=>"St. George's");
          $items[] = array("id"=>"GP","name"=>"Guadeloupe","category_id"=>4,"capital"=>"Basse-Terre");
          $items[] = array("id"=>"GU","name"=>"Guam","category_id"=>6,"capital"=>"Hagåtña");
          $items[] = array("id"=>"GT","name"=>"Guatemala","category_id"=>4,"capital"=>"Guatemala City");
          $items[] = array("id"=>"GG","name"=>"Guernsey","category_id"=>3,"capital"=>"Saint Peter Port");
          $items[] = array("id"=>"GN","name"=>"Guinea","category_id"=>1,"capital"=>"Conakry");
          $items[] = array("id"=>"GW","name"=>"Guinea-Bissau","category_id"=>1,"capital"=>"Bissau");
          $items[] = array("id"=>"GY","name"=>"Guyana","category_id"=>5,"capital"=>"Georgetown");
          $items[] = array("id"=>"HT","name"=>"Haiti","category_id"=>4,"capital"=>"Port-au-Prince");
          $items[] = array("id"=>"VA","name"=>"Holy See","category_id"=>3,"capital"=>"Vatican City");
          $items[] = array("id"=>"HN","name"=>"Honduras","category_id"=>4,"capital"=>"Tegucigalpa");
          $items[] = array("id"=>"HK","name"=>"Hong Kong","category_id"=>2,"capital"=>"Hong Kong");
          $items[] = array("id"=>"HU","name"=>"Hungary","category_id"=>3,"capital"=>"Budapest");
          $items[] = array("id"=>"IS","name"=>"Iceland","category_id"=>3,"capital"=>"Reykjavik");
          $items[] = array("id"=>"IN","name"=>"India","category_id"=>2,"capital"=>"New Delhi");
          $items[] = array("id"=>"ID","name"=>"Indonesia","category_id"=>2,"capital"=>"Jakarta");
          $items[] = array("id"=>"IR","name"=>"Iran (Islamic Republic of)","category_id"=>2,"capital"=>"Tehran");
          $items[] = array("id"=>"IQ","name"=>"Iraq","category_id"=>2,"capital"=>"Baghdad");
          $items[] = array("id"=>"IE","name"=>"Ireland","category_id"=>3,"capital"=>"Dublin");
          $items[] = array("id"=>"IM","name"=>"Isle of Man","category_id"=>3,"capital"=>"Douglas");
          $items[] = array("id"=>"IL","name"=>"Israel","category_id"=>2,"capital"=>"Jerusalem");
          $items[] = array("id"=>"IT","name"=>"Italy","category_id"=>3,"capital"=>"Rome");
          $items[] = array("id"=>"JM","name"=>"Jamaica","category_id"=>4,"capital"=>"Kingston");
          $items[] = array("id"=>"JP","name"=>"Japan","category_id"=>2,"capital"=>"Tokyo");
          $items[] = array("id"=>"JE","name"=>"Jersey","category_id"=>3,"capital"=>"Saint Helier");
          $items[] = array("id"=>"JO","name"=>"Jordan","category_id"=>2,"capital"=>"Amman");
          $items[] = array("id"=>"KZ","name"=>"Kazakhstan","category_id"=>2,"capital"=>"Astana");
          $items[] = array("id"=>"KE","name"=>"Kenya","category_id"=>1,"capital"=>"Nairobi");
          $items[] = array("id"=>"KI","name"=>"Kiribati","category_id"=>6,"capital"=>"South Tarawa");
          $items[] = array("id"=>"KW","name"=>"Kuwait","category_id"=>2,"capital"=>"Kuwait City");
          $items[] = array("id"=>"KG","name"=>"Kyrgyzstan","category_id"=>2,"capital"=>"Bishkek");
          $items[] = array("id"=>"LA","name"=>"Laos","category_id"=>2,"capital"=>"Vientiane");
          $items[] = array("id"=>"LV","name"=>"Latvia","category_id"=>3,"capital"=>"Riga");
          $items[] = array("id"=>"LB","name"=>"Lebanon","category_id"=>2,"capital"=>"Beirut");
          $items[] = array("id"=>"LS","name"=>"Lesotho","category_id"=>1,"capital"=>"Maseru");
          $items[] = array("id"=>"LR","name"=>"Liberia","category_id"=>1,"capital"=>"Monrovia");
          $items[] = array("id"=>"LY","name"=>"Libya","category_id"=>1,"capital"=>"Tripoli");
          $items[] = array("id"=>"LI","name"=>"Liechtenstein","category_id"=>3,"capital"=>"Vaduz");
          $items[] = array("id"=>"LT","name"=>"Lithuania","category_id"=>3,"capital"=>"Vilnius");
          $items[] = array("id"=>"LU","name"=>"Luxembourg","category_id"=>3,"capital"=>"Luxembourg City");
          $items[] = array("id"=>"MO","name"=>"Macau","category_id"=>2,"capital"=>"Macau");
          $items[] = array("id"=>"MG","name"=>"Madagascar","category_id"=>1,"capital"=>"Antananarivo");
          $items[] = array("id"=>"MW","name"=>"Malawi","category_id"=>1,"capital"=>"Lilongwe");
          $items[] = array("id"=>"MY","name"=>"Malaysia","category_id"=>2,"capital"=>"Kuala Lumpur");
          $items[] = array("id"=>"MV","name"=>"Maldives","category_id"=>2,"capital"=>"Malé");
          $items[] = array("id"=>"ML","name"=>"Mali","category_id"=>1,"capital"=>"Bamako");
          $items[] = array("id"=>"MT","name"=>"Malta","category_id"=>3,"capital"=>"Valletta");
          $items[] = array("id"=>"MH","name"=>"Marshall Islands","category_id"=>6,"capital"=>"Majuro");
          $items[] = array("id"=>"MQ","name"=>"Martinique","category_id"=>4,"capital"=>"Fort-de-France");
          $items[] = array("id"=>"MR","name"=>"Mauritania","category_id"=>1,"capital"=>"Nouakchott");
          $items[] = array("id"=>"MU","name"=>"Mauritius","category_id"=>1,"capital"=>"Port Louis");
          $items[] = array("id"=>"YT","name"=>"Mayotte","category_id"=>1,"capital"=>"Mamoudzou");
          $items[] = array("id"=>"MX","name"=>"Mexico","category_id"=>4,"capital"=>"Mexico City");
          $items[] = array("id"=>"MD","name"=>"Moldova","category_id"=>3,"capital"=>"Chișinău");
          $items[] = array("id"=>"MC","name"=>"Monaco","category_id"=>3,"capital"=>"Monaco");
          $items[] = array("id"=>"MN","name"=>"Mongolia","category_id"=>2,"capital"=>"Ulaanbaatar");
          $items[] = array("id"=>"ME","name"=>"Montenegro","category_id"=>3,"capital"=>"Podgorica");
          $items[] = array("id"=>"MS","name"=>"Montserrat","category_id"=>4,"capital"=>"Little Bay, Brades, Plymouth");
          $items[] = array("id"=>"MA","name"=>"Morocco","category_id"=>1,"capital"=>"Rabat");
          $items[] = array("id"=>"MZ","name"=>"Mozambique","category_id"=>1,"capital"=>"Maputo");
          $items[] = array("id"=>"MM","name"=>"Myanmar","category_id"=>2,"capital"=>"Naypyidaw");
          $items[] = array("id"=>"NA","name"=>"Namibia","category_id"=>1,"capital"=>"Windhoek");
          $items[] = array("id"=>"NR","name"=>"Nauru","category_id"=>6,"capital"=>"Yaren District");
          $items[] = array("id"=>"NP","name"=>"Nepal","category_id"=>2,"capital"=>"Kathmandu");
          $items[] = array("id"=>"NL","name"=>"Netherlands","category_id"=>3,"capital"=>"Amsterdam");
          $items[] = array("id"=>"NC","name"=>"New Caledonia","category_id"=>6,"capital"=>"Nouméa");
          $items[] = array("id"=>"NZ","name"=>"New Zealand","category_id"=>6,"capital"=>"Wellington");
          $items[] = array("id"=>"NI","name"=>"Nicaragua","category_id"=>4,"capital"=>"Managua");
          $items[] = array("id"=>"NE","name"=>"Niger","category_id"=>1,"capital"=>"Niamey");
          $items[] = array("id"=>"NG","name"=>"Nigeria","category_id"=>1,"capital"=>"Abuja");
          $items[] = array("id"=>"NU","name"=>"Niue","category_id"=>6,"capital"=>"Alofi");
          $items[] = array("id"=>"NF","name"=>"Norfolk Island","category_id"=>6,"capital"=>"Kingston");
          $items[] = array("id"=>"KP","name"=>"North Korea","category_id"=>2,"capital"=>"Pyongyang");
          $items[] = array("id"=>"MP","name"=>"Northern Mariana Islands","category_id"=>6,"capital"=>"Capitol Hill");
          $items[] = array("id"=>"NO","name"=>"Norway","category_id"=>3,"capital"=>"Oslo");
          $items[] = array("id"=>"OM","name"=>"Oman","category_id"=>2,"capital"=>"Muscat");
          $items[] = array("id"=>"PK","name"=>"Pakistan","category_id"=>2,"capital"=>"Islamabad");
          $items[] = array("id"=>"PW","name"=>"Palau","category_id"=>6,"capital"=>"Ngerulmud");
          $items[] = array("id"=>"PA","name"=>"Panama","category_id"=>4,"capital"=>"Panama City");
          $items[] = array("id"=>"PG","name"=>"Papua New Guinea","category_id"=>6,"capital"=>"Port Moresby");
          $items[] = array("id"=>"PY","name"=>"Paraguay","category_id"=>5,"capital"=>"Asunción");
          $items[] = array("id"=>"PE","name"=>"Peru","category_id"=>5,"capital"=>"Lima");
          $items[] = array("id"=>"PH","name"=>"Philippines","category_id"=>2,"capital"=>"Manila");
          $items[] = array("id"=>"PN","name"=>"Pitcairn","category_id"=>6,"capital"=>"Adamstown");
          $items[] = array("id"=>"PL","name"=>"Poland","category_id"=>3,"capital"=>"Warsaw");
          $items[] = array("id"=>"PT","name"=>"Portugal","category_id"=>3,"capital"=>"Lisbon");
          $items[] = array("id"=>"PR","name"=>"Puerto Rico","category_id"=>4,"capital"=>"San Juan");
          $items[] = array("id"=>"QA","name"=>"Qatar","category_id"=>2,"capital"=>"Doha");
          $items[] = array("id"=>"CG","name"=>"Republic of the Congo","category_id"=>1,"capital"=>"Brazzaville");
          $items[] = array("id"=>"RO","name"=>"Romania","category_id"=>3,"capital"=>"Bucharest");
          $items[] = array("id"=>"RU","name"=>"Russia","category_id"=>3,"capital"=>"Moscow");
          $items[] = array("id"=>"RW","name"=>"Rwanda","category_id"=>1,"capital"=>"Kigali");
          $items[] = array("id"=>"RE","name"=>"Réunion","category_id"=>1,"capital"=>"Saint-Denis");
          $items[] = array("id"=>"BL","name"=>"Saint Barthélemy","category_id"=>4,"capital"=>"Gustavia");
          $items[] = array("id"=>"SH","name"=>"Saint Helena, Ascension and Tristan da Cunha","category_id"=>1,"capital"=>"Jamestown");
          $items[] = array("id"=>"KN","name"=>"Saint Kitts and Nevis","category_id"=>4,"capital"=>"Basseterre");
          $items[] = array("id"=>"LC","name"=>"Saint Lucia","category_id"=>4,"capital"=>"Castries");
          $items[] = array("id"=>"MF","name"=>"Saint Martin","category_id"=>4,"capital"=>"Marigot");
          $items[] = array("id"=>"PM","name"=>"Saint Pierre and Miquelon","category_id"=>4,"capital"=>"Saint-Pierre");
          $items[] = array("id"=>"VC","name"=>"Saint Vincent and the Grenadines","category_id"=>4,"capital"=>"Kingstown");
          $items[] = array("id"=>"WS","name"=>"Samoa","category_id"=>6,"capital"=>"Apia");
          $items[] = array("id"=>"SM","name"=>"San Marino","category_id"=>3,"capital"=>"San Marino");
          $items[] = array("id"=>"ST","name"=>"Sao Tome and Principe","category_id"=>1,"capital"=>"São Tomé");
          $items[] = array("id"=>"SA","name"=>"Saudi Arabia","category_id"=>2,"capital"=>"Riyadh");
          $items[] = array("id"=>"SN","name"=>"Senegal","category_id"=>1,"capital"=>"Dakar");
          $items[] = array("id"=>"RS","name"=>"Serbia","category_id"=>3,"capital"=>"Belgrade");
          $items[] = array("id"=>"SC","name"=>"Seychelles","category_id"=>1,"capital"=>"Victoria");
          $items[] = array("id"=>"SL","name"=>"Sierra Leone","category_id"=>1,"capital"=>"Freetown");
          $items[] = array("id"=>"SG","name"=>"Singapore","category_id"=>2,"capital"=>"Singapore");
          $items[] = array("id"=>"SX","name"=>"Sint Maarten","category_id"=>4,"capital"=>"Philipsburg");
          $items[] = array("id"=>"SK","name"=>"Slovakia","category_id"=>3,"capital"=>"Bratislava");
          $items[] = array("id"=>"SI","name"=>"Slovenia","category_id"=>3,"capital"=>"Ljubljana");
          $items[] = array("id"=>"SB","name"=>"Solomon Islands","category_id"=>6,"capital"=>"Honiara");
          $items[] = array("id"=>"SO","name"=>"Somalia","category_id"=>1,"capital"=>"Mogadishu");
          $items[] = array("id"=>"ZA","name"=>"South Africa","category_id"=>1,"capital"=>"Pretoria");
          $items[] = array("id"=>"GS","name"=>"South Georgia and the South Sandwich Islands","category_id"=>7,"capital"=>"King Edward Point");
          $items[] = array("id"=>"KR","name"=>"South Korea","category_id"=>2,"capital"=>"Seoul");
          $items[] = array("id"=>"SS","name"=>"South Sudan","category_id"=>1,"capital"=>"Juba");
          $items[] = array("id"=>"ES","name"=>"Spain","category_id"=>3,"capital"=>"Madrid");
          $items[] = array("id"=>"LK","name"=>"Sri Lanka","category_id"=>2,"capital"=>"Sri Jayawardenepura Kotte, Colombo");
          $items[] = array("id"=>"PS","name"=>"State of Palestine","category_id"=>2,"capital"=>"Ramallah");
          $items[] = array("id"=>"SD","name"=>"Sudan","category_id"=>1,"capital"=>"Khartoum");
          $items[] = array("id"=>"SR","name"=>"Suriname","category_id"=>5,"capital"=>"Paramaribo");
          $items[] = array("id"=>"SJ","name"=>"Svalbard and Jan Mayen","category_id"=>3,"capital"=>"Longyearbyen");
          $items[] = array("id"=>"SZ","name"=>"Swaziland","category_id"=>1,"capital"=>"Lobamba, Mbabane");
          $items[] = array("id"=>"SE","name"=>"Sweden","category_id"=>3,"capital"=>"Stockholm");
          $items[] = array("id"=>"CH","name"=>"Switzerland","category_id"=>3,"capital"=>"Bern");
          $items[] = array("id"=>"SY","name"=>"Syrian Arab Republic","category_id"=>2,"capital"=>"Damascus");
          $items[] = array("id"=>"TW","name"=>"Taiwan","category_id"=>2,"capital"=>"Taipei");
          $items[] = array("id"=>"TJ","name"=>"Tajikistan","category_id"=>2,"capital"=>"Dushanbe");
          $items[] = array("id"=>"TZ","name"=>"Tanzania","category_id"=>1,"capital"=>"Dodoma");
          $items[] = array("id"=>"TH","name"=>"Thailand","category_id"=>2,"capital"=>"Bangkok");
          $items[] = array("id"=>"TL","name"=>"Timor-Leste","category_id"=>2,"capital"=>"Dili");
          $items[] = array("id"=>"TG","name"=>"Togo","category_id"=>1,"capital"=>"Lomé");
          $items[] = array("id"=>"TK","name"=>"Tokelau","category_id"=>6,"capital"=>"Nukunonu, Atafu,Tokelau");
          $items[] = array("id"=>"TO","name"=>"Tonga","category_id"=>6,"capital"=>"Nukuʻalofa");
          $items[] = array("id"=>"TT","name"=>"Trinidad and Tobago","category_id"=>5,"capital"=>"Port of Spain");
          $items[] = array("id"=>"TN","name"=>"Tunisia","category_id"=>1,"capital"=>"Tunis");
          $items[] = array("id"=>"TR","name"=>"Turkey","category_id"=>2,"capital"=>"Ankara");
          $items[] = array("id"=>"TM","name"=>"Turkmenistan","category_id"=>2,"capital"=>"Ashgabat");
          $items[] = array("id"=>"TC","name"=>"Turks and Caicos Islands","category_id"=>4,"capital"=>"Cockburn Town");
          $items[] = array("id"=>"TV","name"=>"Tuvalu","category_id"=>6,"capital"=>"Funafuti");
          $items[] = array("id"=>"UG","name"=>"Uganda","category_id"=>1,"capital"=>"Kampala");
          $items[] = array("id"=>"UA","name"=>"Ukraine","category_id"=>3,"capital"=>"Kiev");
          $items[] = array("id"=>"AE","name"=>"United Arab Emirates","category_id"=>2,"capital"=>"Abu Dhabi");
          $items[] = array("id"=>"GB","name"=>"United Kingdom","category_id"=>3,"capital"=>"London");
          $items[] = array("id"=>"UM","name"=>"United States Minor Outlying Islands","category_id"=>4,"capital"=>"Washington, D.C.");
          $items[] = array("id"=>"US","name"=>"United States of America","category_id"=>4,"capital"=>"Washington, D.C.");
          $items[] = array("id"=>"UY","name"=>"Uruguay","category_id"=>5,"capital"=>"Montevideo");
          $items[] = array("id"=>"UZ","name"=>"Uzbekistan","category_id"=>2,"capital"=>"Tashkent");
          $items[] = array("id"=>"VU","name"=>"Vanuatu","category_id"=>6,"capital"=>"Port Vila");
          $items[] = array("id"=>"VE","name"=>"Venezuela (Bolivarian Republic of)","category_id"=>5,"capital"=>"Caracas");
          $items[] = array("id"=>"VN","name"=>"Vietnam","category_id"=>2,"capital"=>"Hanoi");
          $items[] = array("id"=>"VG","name"=>"Virgin Islands (British)","category_id"=>4,"capital"=>"Road Town");
          $items[] = array("id"=>"VI","name"=>"Virgin Islands (U.S.)","category_id"=>4,"capital"=>"Charlotte Amalie");
          $items[] = array("id"=>"WF","name"=>"Wallis and Futuna","category_id"=>6,"capital"=>"Mata-Utu");
          $items[] = array("id"=>"EH","name"=>"Western Sahara","category_id"=>1,"capital"=>"Laayoune");
          $items[] = array("id"=>"YE","name"=>"Yemen","category_id"=>2,"capital"=>"Sana'a");
          $items[] = array("id"=>"ZM","name"=>"Zambia","category_id"=>1,"capital"=>"Lusaka");
          $items[] = array("id"=>"ZW","name"=>"Zimbabwe","category_id"=>1,"capital"=>"Harare");

          foreach ($items as $key => $value) {
              $category = $this->flagCategory($value['category_id']);
              $items[$key]['category_name'] = !empty($category['name']) ? $category['name'] : '';
          }

          return $items;
      }

      public function flagCategory($id='')
      {
          
          $items[] = array("id"=>1,"name"=>'Africa');
          $items[] = array("id"=>2,"name"=>'Asia');
          $items[] = array("id"=>3,"name"=>'Europe');
          $items[] = array("id"=>4,"name"=>'North America');
          $items[] = array("id"=>5,"name"=>'South America');
          $items[] = array("id"=>6,"name"=>'Oceania');
          $items[] = array("id"=>7,"name"=>"Antarctica");

          if( !empty($id) ){
              return !empty($items[$id])? $items[$id]: array();
          }
          else{
              return $items;
          }

      }

}