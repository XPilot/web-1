<script type="text/javascript">
	require([_jsBase + 'main.js'], function(common)
   	{
        require(['jquery'], function($)
   	    {
            $("#timezone-picker option[value='{{$value}}']").attr('selected','selected');	
        });
	});
</script>

<div class="dropdown-section">
    <div class="dropdown">
        <div class="element">
            <label>{{$label}}:</label>
            <select id="timezone-picker" name="{{$file}}__{{$attribute}}">
                <option value="Africa-Abidjan">Africa/Abidjan +00:00</option>
                <option value="Africa-Accra">Africa/Accra +00:00</option>
                <option value="Africa-Addis$Ababa">Africa/Addis_Ababa +03:00</option>
                <option value="Africa-Algiers">Africa/Algiers +01:00</option>
                <option value="Africa-Asmara">Africa/Asmara +03:00</option>
                <option value="Africa-Bamako">Africa/Bamako +00:00</option>
                <option value="Africa-Bangui">Africa/Bangui +01:00</option>
                <option value="Africa-Banjul">Africa/Banjul +00:00</option>
                <option value="Africa-Blantyre">Africa/Blantyre +02:00</option>
                <option value="Africa-Bissau">Africa/Bissau +00:00</option>
                <option value="Africa-Brazzaville">Africa/Brazzaville +01:00</option>
                <option value="Africa-Bujumbura">Africa/Bujumbura +02:00</option>
                <option value="Africa-Cairo">Africa/Cairo +02:00</option>
                <option value="Africa-Casablanca">Africa/Casablanca +01:00</option>
                <option value="Africa-Ceuta">Africa/Ceuta +02:00</option>
                <option value="Africa-Conakry">Africa/Conakry +00:00</option>
                <option value="Africa-Dakar">Africa/Dakar +00:00</option>
                <option value="Africa-Dar$es_Salaam">Africa/Dar_es_Salaam +03:00</option>
                <option value="Africa-Djibouti">Africa/Djibouti +03:00</option>
                <option value="Africa-Douala">Africa/Douala +01:00</option>
                <option value="Africa-El$Aaiun">Africa/El_Aaiun +01:00</option>
                <option value="Africa-Freetown">Africa/Freetown +00:00</option>
                <option value="Africa-Gaborone">Africa/Gaborone +02:00</option>
                <option value="Africa-Harare">Africa/Harare +02:00</option>
                <option value="Africa-Johannesburg">Africa/Johannesburg +02:00</option>
                <option value="Africa-Juba">Africa/Juba +03:00</option>
                <option value="Africa-Kampala">Africa/Kampala +03:00</option>
                <option value="Africa-Khartoum">Africa/Khartoum +03:00</option>
                <option value="Africa-Kigali">Africa/Kigali +02:00</option>
                <option value="Africa-Kinshasa">Africa/Kinshasa +01:00</option>
                <option value="Africa-Lagos">Africa/Lagos +01:00</option>
                <option value="Africa-Libreville">Africa/Libreville +01:00</option>
                <option value="Africa-Lome">Africa/Lome +00:00</option>
                <option value="Africa-Luanda">Africa/Luanda +01:00</option>
                <option value="Africa-Lubumbashi">Africa/Lubumbashi +02:00</option>
                <option value="Africa-Lusaka">Africa/Lusaka +02:00</option>
                <option value="Africa-Malabo">Africa/Malabo +01:00</option>
                <option value="Africa-Maputo">Africa/Maputo +02:00</option>
                <option value="Africa-Maseru">Africa/Maseru +02:00</option>
                <option value="Africa-Mbabane">Africa/Mbabane +02:00</option>
                <option value="Africa-Mogadishu">Africa/Mogadishu +03:00</option>
                <option value="Africa-Monrovia">Africa/Monrovia +00:00</option>
                <option value="Africa-Nairobi">Africa/Nairobi +03:00</option>
                <option value="Africa-Ndjamena">Africa/Ndjamena +01:00</option>
                <option value="Africa-Niamey">Africa/Niamey +01:00</option>
                <option value="Africa-Nouakchott">Africa/Nouakchott +00:00</option>
                <option value="Africa-Ouagadougou">Africa/Ouagadougou +00:00</option>
                <option value="Africa-Porto-Novo">Africa/Porto-Novo +01:00</option>
                <option value="Africa-Sao$Tome">Africa/Sao_Tome +00:00</option>
                <option value="Africa-Tripoli">Africa/Tripoli +02:00</option>
                <option value="Africa-Tunis">Africa/Tunis +01:00</option>
                <option value="Africa-Windhoek">Africa/Windhoek +01:00</option>
                <option value="America-Adak">America/Adak -09:00</option>
                <option value="America-Anchorage">America/Anchorage -08:00</option>
                <option value="America-Anguilla">America/Anguilla -04:00</option>
                <option value="America-Antigua">America/Antigua -04:00</option>
                <option value="America-Araguaina">America/Araguaina -03:00</option>
                <option value="America-Argentina/Buenos$Aires">America/Argentina/Buenos_Aires -03:00</option>
                <option value="America-Argentina/Catamarca">America/Argentina/Catamarca -03:00</option>
                <option value="America-Argentina/Cordoba">America/Argentina/Cordoba -03:00</option>
                <option value="America-Argentina/Jujuy">America/Argentina/Jujuy -03:00</option>
                <option value="America-Argentina/La$Rioja">America/Argentina/La_Rioja -03:00</option>
                <option value="America-Argentina/Mendoza">America/Argentina/Mendoza -03:00</option>
                <option value="America-Argentina/Rio$Gallegos">America/Argentina/Rio_Gallegos -03:00</option>
                <option value="America-Argentina/Salta">America/Argentina/Salta -03:00</option>
                <option value="America-Argentina/San$Juan">America/Argentina/San_Juan -03:00</option>
                <option value="America-Argentina/San$Luis">America/Argentina/San_Luis -03:00</option>
                <option value="America-Argentina/Tucuman">America/Argentina/Tucuman -03:00</option>
                <option value="America-Argentina/Ushuaia">America/Argentina/Ushuaia -03:00</option>
                <option value="America-Aruba">America/Aruba -04:00</option>
                <option value="America-Asuncion">America/Asuncion -04:00</option>
                <option value="America-Atikokan">America/Atikokan -05:00</option>
                <option value="America-Bahia">America/Bahia -03:00</option>
                <option value="America-Bahia$Banderas">America/Bahia_Banderas -05:00</option>
                <option value="America-Barbados">America/Barbados -04:00</option>
                <option value="America-Belem">America/Belem -03:00</option>
                <option value="America-Belize">America/Belize -06:00</option>
                <option value="America-Blanc-Sablon">America/Blanc-Sablon -04:00</option>
                <option value="America-Boa$Vista">America/Boa_Vista -04:00</option>
                <option value="America-Bogota">America/Bogota -05:00</option>
                <option value="America-Boise">America/Boise -06:00</option>
                <option value="America-Cambridge$Bay">America/Cambridge_Bay -06:00</option>
                <option value="America-Campo$Grande">America/Campo_Grande -04:00</option>
                <option value="America-Cancun">America/Cancun -05:00</option>
                <option value="America-Caracas">America/Caracas -04:30</option>
                <option value="America-Cayenne">America/Cayenne -03:00</option>
                <option value="America-Cayman">America/Cayman -05:00</option>
                <option value="America-Chicago">America/Chicago -05:00</option>
                <option value="America-Chihuahua">America/Chihuahua -06:00</option>
                <option value="America-Costa$Rica">America/Costa_Rica -06:00</option>
                <option value="America-Creston">America/Creston -07:00</option>
                <option value="America-Cuiaba">America/Cuiaba -04:00</option>
                <option value="America-Curacao">America/Curacao -04:00</option>
                <option value="America-Danmarkshavn">America/Danmarkshavn +00:00</option>
                <option value="America-Dawson">America/Dawson -07:00</option>
                <option value="America-Dawson$Creek">America/Dawson_Creek -07:00</option>
                <option value="America-Denver">America/Denver -06:00</option>
                <option value="America-Detroit">America/Detroit -04:00</option>
                <option value="America-Dominica">America/Dominica -04:00</option>
                <option value="America-Edmonton">America/Edmonton -06:00</option>
                <option value="America-Eirunepe">America/Eirunepe -05:00</option>
                <option value="America-El$Salvador">America/El_Salvador -06:00</option>
                <option value="America-Fortaleza">America/Fortaleza -03:00</option>
                <option value="America-Glace$Bay">America/Glace_Bay -03:00</option>
                <option value="America-Godthab">America/Godthab -02:00</option>
                <option value="America-Goose$Bay">America/Goose_Bay -03:00</option>
                <option value="America-Grand$Turk">America/Grand_Turk -04:00</option>
                <option value="America-Grenada">America/Grenada -04:00</option>
                <option value="America-Guadeloupe">America/Guadeloupe -04:00</option>
                <option value="America-Guatemala">America/Guatemala -06:00</option>
                <option value="America-Guayaquil">America/Guayaquil -05:00</option>
                <option value="America-Guyana">America/Guyana -04:00</option>
                <option value="America-Halifax">America/Halifax -03:00</option>
                <option value="America-Havana">America/Havana -04:00</option>
                <option value="America-Hermosillo">America/Hermosillo -07:00</option>
                <option value="America-Indiana/Indianapolis">America/Indiana/Indianapolis -04:00</option>
                <option value="America-Indiana/Knox">America/Indiana/Knox -05:00</option>
                <option value="America-Indiana/Marengo">America/Indiana/Marengo -04:00</option>
                <option value="America-Indiana/Petersburg">America/Indiana/Petersburg -04:00</option>
                <option value="America-Indiana/Tell$City">America/Indiana/Tell_City -05:00</option>
                <option value="America-Indiana/Vevay">America/Indiana/Vevay -04:00</option>
                <option value="America-Indiana/Vincennes">America/Indiana/Vincennes -04:00</option>
                <option value="America-Indiana/Winamac">America/Indiana/Winamac -04:00</option>
                <option value="America-Inuvik">America/Inuvik -06:00</option>
                <option value="America-Iqaluit">America/Iqaluit -04:00</option>
                <option value="America-Jamaica">America/Jamaica -05:00</option>
                <option value="America-Juneau">America/Juneau -08:00</option>
                <option value="America-Kentucky/Louisville">America/Kentucky/Louisville -04:00</option>
                <option value="America-Kentucky/Monticello">America/Kentucky/Monticello -04:00</option>
                <option value="America-Kralendijk">America/Kralendijk -04:00</option>
                <option value="America-La$Paz">America/La_Paz -04:00</option>
                <option value="America-Lima">America/Lima -05:00</option>
                <option value="America-Los$Angeles">America/Los_Angeles -07:00</option>
                <option value="America-Lower$Princes">America/Lower_Princes -04:00</option>
                <option value="America-Maceio">America/Maceio -03:00</option>
                <option value="America-Managua">America/Managua -06:00</option>
                <option value="America-Manaus">America/Manaus -04:00</option>
                <option value="America-Marigot">America/Marigot -04:00</option>
                <option value="America-Martinique">America/Martinique -04:00</option>
                <option value="America-Matamoros">America/Matamoros -05:00</option>
                <option value="America-Mazatlan">America/Mazatlan -06:00</option>
                <option value="America-Merida">America/Merida -05:00</option>
                <option value="America-Menominee">America/Menominee -05:00</option>
                <option value="America-Metlakatla">America/Metlakatla -08:00</option>
                <option value="America-Mexico$City">America/Mexico_City -05:00</option>
                <option value="America-Miquelon">America/Miquelon -02:00</option>
                <option value="America-Moncton">America/Moncton -03:00</option>
                <option value="America-Monterrey">America/Monterrey -05:00</option>
                <option value="America-Montserrat">America/Montserrat -04:00</option>
                <option value="America-Montevideo">America/Montevideo -03:00</option>
                <option value="America-Nassau">America/Nassau -04:00</option>
                <option value="America-New$York">America/New_York -04:00</option>
                <option value="America-Nipigon">America/Nipigon -04:00</option>
                <option value="America-Nome">America/Nome -08:00</option>
                <option value="America-Noronha">America/Noronha -02:00</option>
                <option value="America-North$Dakota/Beulah">America/North_Dakota/Beulah -05:00</option>
                <option value="America-North$Dakota/Center">America/North_Dakota/Center -05:00</option>
                <option value="America-North$Dakota/New_Salem">America/North_Dakota/New_Salem -05:00</option>
                <option value="America-Ojinaga">America/Ojinaga -06:00</option>
                <option value="America-Panama">America/Panama -05:00</option>
                <option value="America-Pangnirtung">America/Pangnirtung -04:00</option>
                <option value="America-Paramaribo">America/Paramaribo -03:00</option>
                <option value="America-Phoenix">America/Phoenix -07:00</option>
                <option value="America-Port-au-Prince">America/Port-au-Prince -04:00</option>
                <option value="America-Port$of_Spain">America/Port_of_Spain -04:00</option>
                <option value="America-Porto$Velho">America/Porto_Velho -04:00</option>
                <option value="America-Puerto$Rico">America/Puerto_Rico -04:00</option>
                <option value="America-Rainy$River">America/Rainy_River -05:00</option>
                <option value="America-Rankin$Inlet">America/Rankin_Inlet -05:00</option>
                <option value="America-Recife">America/Recife -03:00</option>
                <option value="America-Regina">America/Regina -06:00</option>
                <option value="America-Resolute">America/Resolute -05:00</option>
                <option value="America-Rio$Branco">America/Rio_Branco -05:00</option>
                <option value="America-Santa$Isabel">America/Santa_Isabel -07:00</option>
                <option value="America-Santarem">America/Santarem -03:00</option>
                <option value="America-Santiago">America/Santiago -03:00</option>
                <option value="America-Santo$Domingo">America/Santo_Domingo -04:00</option>
                <option value="America-Sao$Paulo">America/Sao_Paulo -03:00</option>
                <option value="America-Scoresbysund">America/Scoresbysund +00:00</option>
                <option value="America-Sitka">America/Sitka -08:00</option>
                <option value="America-St$Barthelemy">America/St_Barthelemy -04:00</option>
                <option value="America-St$Johns">America/St_Johns -02:30</option>
                <option value="America-St$Kitts">America/St_Kitts -04:00</option>
                <option value="America-St$Lucia">America/St_Lucia -04:00</option>
                <option value="America-St$Thomas">America/St_Thomas -04:00</option>
                <option value="America-St$Vincent">America/St_Vincent -04:00</option>
                <option value="America-Swift$Current">America/Swift_Current -06:00</option>
                <option value="America-Tegucigalpa">America/Tegucigalpa -06:00</option>
                <option value="America-Thule">America/Thule -03:00</option>
                <option value="America-Thunder$Bay">America/Thunder_Bay -04:00</option>
                <option value="America-Toronto">America/Toronto -04:00</option>
                <option value="America-Tijuana">America/Tijuana -07:00</option>
                <option value="America-Tortola">America/Tortola -04:00</option>
                <option value="America-Vancouver">America/Vancouver -07:00</option>
                <option value="America-Whitehorse">America/Whitehorse -07:00</option>
                <option value="America-Winnipeg">America/Winnipeg -05:00</option>
                <option value="America-Yakutat">America/Yakutat -08:00</option>
                <option value="America-Yellowknife">America/Yellowknife -06:00</option>
                <option value="Antarctica-Casey">Antarctica/Casey +08:00</option>
                <option value="Antarctica-DumontDUrville">Antarctica/DumontDUrville +10:00</option>
                <option value="Antarctica-Davis">Antarctica/Davis +07:00</option>
                <option value="Antarctica-Macquarie">Antarctica/Macquarie +11:00</option>
                <option value="Antarctica-Mawson">Antarctica/Mawson +05:00</option>
                <option value="Antarctica-McMurdo">Antarctica/McMurdo +12:00</option>
                <option value="Antarctica-Palmer">Antarctica/Palmer -03:00</option>
                <option value="Antarctica-Rothera">Antarctica/Rothera -03:00</option>
                <option value="Antarctica-Syowa">Antarctica/Syowa +03:00</option>
                <option value="Antarctica-Troll">Antarctica/Troll +02:00</option>
                <option value="Antarctica-Vostok">Antarctica/Vostok +06:00</option>
                <option value="Arctic-Longyearbyen">Arctic/Longyearbyen +02:00</option>
                <option value="Asia-Aden">Asia/Aden +03:00</option>
                <option value="Asia-Almaty">Asia/Almaty +06:00</option>
                <option value="Asia-Amman">Asia/Amman +03:00</option>
                <option value="Asia-Anadyr">Asia/Anadyr +12:00</option>
                <option value="Asia-Aqtau">Asia/Aqtau +05:00</option>
                <option value="Asia-Aqtobe">Asia/Aqtobe +05:00</option>
                <option value="Asia-Ashgabat">Asia/Ashgabat +05:00</option>
                <option value="Asia-Baghdad">Asia/Baghdad +03:00</option>
                <option value="Asia-Bahrain">Asia/Bahrain +03:00</option>
                <option value="Asia-Baku">Asia/Baku +05:00</option>
                <option value="Asia-Bangkok">Asia/Bangkok +07:00</option>
                <option value="Asia-Beirut">Asia/Beirut +03:00</option>
                <option value="Asia-Bishkek">Asia/Bishkek +06:00</option>
                <option value="Asia-Brunei">Asia/Brunei +08:00</option>
                <option value="Asia-Chita">Asia/Chita +08:00</option>
                <option value="Asia-Choibalsan">Asia/Choibalsan +09:00</option>
                <option value="Asia-Colombo">Asia/Colombo +05:30</option>
                <option value="Asia-Damascus">Asia/Damascus +03:00</option>
                <option value="Asia-Dhaka">Asia/Dhaka +06:00</option>
                <option value="Asia-Dili">Asia/Dili +09:00</option>
                <option value="Asia-Dubai">Asia/Dubai +04:00</option>
                <option value="Asia-Dushanbe">Asia/Dushanbe +05:00</option>
                <option value="Asia-Gaza">Asia/Gaza +03:00</option>
                <option value="Asia-Hebron">Asia/Hebron +03:00</option>
                <option value="Asia-Ho$Chi_Minh">Asia/Ho_Chi_Minh +07:00</option>
                <option value="Asia-Hong$Kong">Asia/Hong_Kong +08:00</option>
                <option value="Asia-Hovd">Asia/Hovd +08:00</option>
                <option value="Asia-Irkutsk">Asia/Irkutsk +08:00</option>
                <option value="Asia-Jakarta">Asia/Jakarta +07:00</option>
                <option value="Asia-Jayapura">Asia/Jayapura +09:00</option>
                <option value="Asia-Jerusalem">Asia/Jerusalem +03:00</option>
                <option value="Asia-Kabul">Asia/Kabul +04:30</option>
                <option value="Asia-Kamchatka">Asia/Kamchatka +12:00</option>
                <option value="Asia-Karachi">Asia/Karachi +05:00</option>
                <option value="Asia-Kathmandu">Asia/Kathmandu +05:45</option>
                <option value="Asia-Khandyga">Asia/Khandyga +09:00</option>
                <option value="Asia-Kolkata">Asia/Kolkata +05:30</option>
                <option value="Asia-Krasnoyarsk">Asia/Krasnoyarsk +07:00</option>
                <option value="Asia-Kuala$Lumpur">Asia/Kuala_Lumpur +08:00</option>
                <option value="Asia-Kuching">Asia/Kuching +08:00</option>
                <option value="Asia-Kuwait">Asia/Kuwait +03:00</option>
                <option value="Asia-Macau">Asia/Macau +08:00</option>
                <option value="Asia-Magadan">Asia/Magadan +10:00</option>
                <option value="Asia-Makassar">Asia/Makassar +08:00</option>
                <option value="Asia-Manila">Asia/Manila +08:00</option>
                <option value="Asia-Muscat">Asia/Muscat +04:00</option>
                <option value="Asia-Nicosia">Asia/Nicosia +03:00</option>
                <option value="Asia-Novokuznetsk">Asia/Novokuznetsk +07:00</option>
                <option value="Asia-Novosibirsk">Asia/Novosibirsk +06:00</option>
                <option value="Asia-Omsk">Asia/Omsk +06:00</option>
                <option value="Asia-Oral">Asia/Oral +05:00</option>
                <option value="Asia-Phnom$Penh">Asia/Phnom_Penh +07:00</option>
                <option value="Asia-Pontianak">Asia/Pontianak +07:00</option>
                <option value="Asia-Qatar">Asia/Qatar +03:00</option>
                <option value="Asia-Pyongyang">Asia/Pyongyang +09:00</option>
                <option value="Asia-Rangoon">Asia/Rangoon +06:30</option>
                <option value="Asia-Qyzylorda">Asia/Qyzylorda +06:00</option>
                <option value="Asia-Riyadh">Asia/Riyadh +03:00</option>
                <option value="Asia-Sakhalin">Asia/Sakhalin +10:00</option>
                <option value="Asia-Samarkand">Asia/Samarkand +05:00</option>
                <option value="Asia-Seoul">Asia/Seoul +09:00</option>
                <option value="Asia-Shanghai">Asia/Shanghai +08:00</option>
                <option value="Asia-Singapore">Asia/Singapore +08:00</option>
                <option value="Asia-Srednekolymsk">Asia/Srednekolymsk +11:00</option>
                <option value="Asia-Taipei">Asia/Taipei +08:00</option>
                <option value="Asia-Tashkent">Asia/Tashkent +05:00</option>
                <option value="Asia-Tbilisi">Asia/Tbilisi +04:00</option>
                <option value="Asia-Tehran">Asia/Tehran +04:30</option>
                <option value="Asia-Thimphu">Asia/Thimphu +06:00</option>
                <option value="Asia-Tokyo">Asia/Tokyo +09:00</option>
                <option value="Asia-Ulaanbaatar">Asia/Ulaanbaatar +09:00</option>
                <option value="Asia-Urumqi">Asia/Urumqi +06:00</option>
                <option value="Asia-Ust-Nera">Asia/Ust-Nera +10:00</option>
                <option value="Asia-Vientiane">Asia/Vientiane +07:00</option>
                <option value="Asia-Vladivostok">Asia/Vladivostok +10:00</option>
                <option value="Asia-Yakutsk">Asia/Yakutsk +09:00</option>
                <option value="Asia-Yekaterinburg">Asia/Yekaterinburg +05:00</option>
                <option value="Asia-Yerevan">Asia/Yerevan +04:00</option>
                <option value="Atlantic-Azores">Atlantic/Azores +00:00</option>
                <option value="Atlantic-Bermuda">Atlantic/Bermuda -03:00</option>
                <option value="Atlantic-Canary">Atlantic/Canary +01:00</option>
                <option value="Atlantic-Cape$Verde">Atlantic/Cape_Verde -01:00</option>
                <option value="Atlantic-Faroe">Atlantic/Faroe +01:00</option>
                <option value="Atlantic-Madeira">Atlantic/Madeira +01:00</option>
                <option value="Atlantic-Reykjavik">Atlantic/Reykjavik +00:00</option>
                <option value="Atlantic-South$Georgia">Atlantic/South_Georgia -02:00</option>
                <option value="Atlantic-St$Helena">Atlantic/St_Helena +00:00</option>
                <option value="Atlantic-Stanley">Atlantic/Stanley -03:00</option>
                <option value="Australia-Adelaide">Australia/Adelaide +09:30</option>
                <option value="Australia-Brisbane">Australia/Brisbane +10:00</option>
                <option value="Australia-Broken$Hill">Australia/Broken_Hill +09:30</option>
                <option value="Australia-Currie">Australia/Currie +10:00</option>
                <option value="Australia-Darwin">Australia/Darwin +09:30</option>
                <option value="Australia-Eucla">Australia/Eucla +08:45</option>
                <option value="Australia-Hobart">Australia/Hobart +10:00</option>
                <option value="Australia-Lindeman">Australia/Lindeman +10:00</option>
                <option value="Australia-Lord$Howe">Australia/Lord_Howe +10:30</option>
                <option value="Australia-Melbourne">Australia/Melbourne +10:00</option>
                <option value="Australia-Perth">Australia/Perth +08:00</option>
                <option value="Australia-Sydney">Australia/Sydney +10:00</option>
                <option value="Europe-Amsterdam">Europe/Amsterdam +02:00</option>
                <option value="Europe-Andorra">Europe/Andorra +02:00</option>
                <option value="Europe-Athens">Europe/Athens +03:00</option>
                <option value="Europe-Belgrade">Europe/Belgrade +02:00</option>
                <option value="Europe-Berlin">Europe/Berlin +02:00</option>
                <option value="Europe-Bratislava">Europe/Bratislava +02:00</option>
                <option value="Europe-Brussels">Europe/Brussels +02:00</option>
                <option value="Europe-Bucharest">Europe/Bucharest +03:00</option>
                <option value="Europe-Budapest">Europe/Budapest +02:00</option>
                <option value="Europe-Busingen">Europe/Busingen +02:00</option>
                <option value="Europe-Chisinau">Europe/Chisinau +03:00</option>
                <option value="Europe-Copenhagen">Europe/Copenhagen +02:00</option>
                <option value="Europe-Dublin">Europe/Dublin +01:00</option>
                <option value="Europe-Gibraltar">Europe/Gibraltar +02:00</option>
                <option value="Europe-Guernsey">Europe/Guernsey +01:00</option>
                <option value="Europe-Helsinki">Europe/Helsinki +03:00</option>
                <option value="Europe-Isle$of_Man">Europe/Isle_of_Man +01:00</option>
                <option value="Europe-Istanbul">Europe/Istanbul +03:00</option>
                <option value="Europe-Jersey">Europe/Jersey +01:00</option>
                <option value="Europe-Kaliningrad">Europe/Kaliningrad +02:00</option>
                <option value="Europe-Kiev">Europe/Kiev +03:00</option>
                <option value="Europe-Lisbon">Europe/Lisbon +01:00</option>
                <option value="Europe-Ljubljana">Europe/Ljubljana +02:00</option>
                <option value="Europe-London">Europe/London +01:00</option>
                <option value="Europe-Luxembourg">Europe/Luxembourg +02:00</option>
                <option value="Europe-Madrid">Europe/Madrid +02:00</option>
                <option value="Europe-Malta">Europe/Malta +02:00</option>
                <option value="Europe-Mariehamn">Europe/Mariehamn +03:00</option>
                <option value="Europe-Minsk">Europe/Minsk +03:00</option>
                <option value="Europe-Monaco">Europe/Monaco +02:00</option>
                <option value="Europe-Moscow">Europe/Moscow +03:00</option>
                <option value="Europe-Oslo">Europe/Oslo +02:00</option>
                <option value="Europe-Paris">Europe/Paris +02:00</option>
                <option value="Europe-Podgorica">Europe/Podgorica +02:00</option>
                <option value="Europe-Riga">Europe/Riga +03:00</option>
                <option value="Europe-Prague">Europe/Prague +02:00</option>
                <option value="Europe-Rome">Europe/Rome +02:00</option>
                <option value="Europe-Samara">Europe/Samara +04:00</option>
                <option value="Europe-San$Marino">Europe/San_Marino +02:00</option>
                <option value="Europe-Sarajevo">Europe/Sarajevo +02:00</option>
                <option value="Europe-Simferopol">Europe/Simferopol +03:00</option>
                <option value="Europe-Skopje">Europe/Skopje +02:00</option>
                <option value="Europe-Sofia">Europe/Sofia +03:00</option>
                <option value="Europe-Stockholm">Europe/Stockholm +02:00</option>
                <option value="Europe-Tallinn">Europe/Tallinn +03:00</option>
                <option value="Europe-Tirane">Europe/Tirane +02:00</option>
                <option value="Europe-Uzhgorod">Europe/Uzhgorod +03:00</option>
                <option value="Europe-Vaduz">Europe/Vaduz +02:00</option>
                <option value="Europe-Vatican">Europe/Vatican +02:00</option>
                <option value="Europe-Vilnius">Europe/Vilnius +03:00</option>
                <option value="Europe-Vienna">Europe/Vienna +02:00</option>
                <option value="Europe-Volgograd">Europe/Volgograd +03:00</option>
                <option value="Europe-Warsaw">Europe/Warsaw +02:00</option>
                <option value="Europe-Zaporozhye">Europe/Zaporozhye +03:00</option>
                <option value="Europe-Zagreb">Europe/Zagreb +02:00</option>
                <option value="Europe-Zurich">Europe/Zurich +02:00</option>
                <option value="Indian-Chagos">Indian/Chagos +06:00</option>
                <option value="Indian-Antananarivo">Indian/Antananarivo +03:00</option>
                <option value="Indian-Christmas">Indian/Christmas +07:00</option>
                <option value="Indian-Cocos">Indian/Cocos +06:30</option>
                <option value="Indian-Comoro">Indian/Comoro +03:00</option>
                <option value="Indian-Kerguelen">Indian/Kerguelen +05:00</option>
                <option value="Indian-Maldives">Indian/Maldives +05:00</option>
                <option value="Indian-Mahe">Indian/Mahe +04:00</option>
                <option value="Indian-Mauritius">Indian/Mauritius +04:00</option>
                <option value="Indian-Mayotte">Indian/Mayotte +03:00</option>
                <option value="Indian-Reunion">Indian/Reunion +04:00</option>
                <option value="Pacific-Apia">Pacific/Apia +13:00</option>
                <option value="Pacific-Auckland">Pacific/Auckland +12:00</option>
                <option value="Pacific-Bougainville">Pacific/Bougainville +11:00</option>
                <option value="Pacific-Chatham">Pacific/Chatham +12:45</option>
                <option value="Pacific-Chuuk">Pacific/Chuuk +10:00</option>
                <option value="Pacific-Easter">Pacific/Easter -05:00</option>
                <option value="Pacific-Efate">Pacific/Efate +11:00</option>
                <option value="Pacific-Enderbury">Pacific/Enderbury +13:00</option>
                <option value="Pacific-Fakaofo">Pacific/Fakaofo +13:00</option>
                <option value="Pacific-Fiji">Pacific/Fiji +12:00</option>
                <option value="Pacific-Funafuti">Pacific/Funafuti +12:00</option>
                <option value="Pacific-Galapagos">Pacific/Galapagos -06:00</option>
                <option value="Pacific-Gambier">Pacific/Gambier -09:00</option>
                <option value="Pacific-Guadalcanal">Pacific/Guadalcanal +11:00</option>
                <option value="Pacific-Guam">Pacific/Guam +10:00</option>
                <option value="Pacific-Honolulu">Pacific/Honolulu -10:00</option>
                <option value="Pacific-Johnston">Pacific/Johnston -10:00</option>
                <option value="Pacific-Kiritimati">Pacific/Kiritimati +14:00</option>
                <option value="Pacific-Kosrae">Pacific/Kosrae +11:00</option>
                <option value="Pacific-Kwajalein">Pacific/Kwajalein +12:00</option>
                <option value="Pacific-Majuro">Pacific/Majuro +12:00</option>
                <option value="Pacific-Marquesas">Pacific/Marquesas -09:30</option>
                <option value="Pacific-Midway">Pacific/Midway -11:00</option>
                <option value="Pacific-Nauru">Pacific/Nauru +12:00</option>
                <option value="Pacific-Niue">Pacific/Niue -11:00</option>
                <option value="Pacific-Norfolk">Pacific/Norfolk +11:30</option>
                <option value="Pacific-Noumea">Pacific/Noumea +11:00</option>
                <option value="Pacific-Pago$Pago">Pacific/Pago_Pago -11:00</option>
                <option value="Pacific-Palau">Pacific/Palau +09:00</option>
                <option value="Pacific-Pitcairn">Pacific/Pitcairn -08:00</option>
                <option value="Pacific-Pohnpei">Pacific/Pohnpei +11:00</option>
                <option value="Pacific-Port$Moresby">Pacific/Port_Moresby +10:00</option>
                <option value="Pacific-Saipan">Pacific/Saipan +10:00</option>
                <option value="Pacific-Rarotonga">Pacific/Rarotonga -10:00</option>
                <option value="Pacific-Tahiti">Pacific/Tahiti -10:00</option>
                <option value="Pacific-Tarawa">Pacific/Tarawa +12:00</option>
                <option value="Pacific-Tongatapu">Pacific/Tongatapu +13:00</option>
                <option value="Pacific-Wake">Pacific/Wake +12:00</option>
                <option value="Pacific-Wallis">Pacific/Wallis +12:00</option>
                <option value="UTC">UTC +00:00</option>
            </select>
        </div>
    </div>
</div>