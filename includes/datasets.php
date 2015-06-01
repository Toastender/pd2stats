<?php
//
//Curse you oh roman numerals
//
$romnum = array(
	1 => 'I',
	2 => 'II',
	3 => 'III',
	4 => 'IV',
	5 => 'V',
	6 => 'VI',
	7 => 'VII',
	8 => 'VIII',
	9 => 'IX',
	10 => 'X',
	11 => 'XI',
	12 => 'XII',
	13 => 'XIII',
	14 => 'XIV',
	15 => 'XV',
	16 => 'XVI',
	17 => 'XVII',
	18 => 'XVIII',
	19 => 'XIX',
	20 => 'XX',
	21 => 'XXI',
	22 => 'XXII',
	23 => 'XXIII',
	24 => 'XXIV',
	25 => 'XXV',
	26 => 'XXVI'
);

//
//PRIMARY
//
$weapons_primary = array(
////Assault Rifles
array( 'Name' => $l['akm_gold'], 'Wiki' => 'Golden_AK.762', 'Image' => 'akm_gold', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_akm_gold , 'Kills' => $weapon_kills_akm_gold, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 90, 'Firerate' => 560, 'Damage' => 40, 'Accuracy' => 10, 'Stability' => 12, 'Concealment' => 11, 'Threat' => 22)),
array( 'Name' => $l['amcar'], 'Wiki' => 'AMCAR_(Payday_2)', 'Image' => 'amcar', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_amcar , 'Kills' => $weapon_kills_amcar, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 180, 'Firerate' => 550, 'Damage' => 16, 'Accuracy' => 10, 'Stability' => 19, 'Concealment' => 21, 'Threat' => 14)),
array( 'Name' => $l['ak74'], 'Wiki' => 'AK_(Payday_2)', 'Image' => 'ak74', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_ak74 , 'Kills' => $weapon_kills_ak74, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 120, 'Firerate' => 650, 'Damage' => 28, 'Accuracy' => 10, 'Stability' => 15, 'Concealment' => 16, 'Threat' => 14)),
array( 'Name' => $l['new_m4'], 'Wiki' => 'CAR-4', 'Image' => 'new_m4', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_new_m4 , 'Kills' => $weapon_kills_new_m4, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 150, 'Firerate' => 600, 'Damage' => 23, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 20, 'Threat' => 14)),
array( 'Name' => $l['aug'], 'Wiki' => 'UAR', 'Image' => 'aug', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_aug , 'Kills' => $weapon_kills_aug, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 120, 'Firerate' => 750, 'Damage' => 28, 'Accuracy' => 14, 'Stability' => 12, 'Concealment' => 20, 'Threat' => 14)),
array( 'Name' => $l['akm'], 'Wiki' => 'AK.762', 'Image' => 'akm', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_akm , 'Kills' => $weapon_kills_akm, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 90, 'Firerate' => 560, 'Damage' => 40, 'Accuracy' => 10, 'Stability' => 12, 'Concealment' => 13, 'Threat' => 22)),
array( 'Name' => $l['g36'], 'Wiki' => 'JP36', 'Image' => 'g36', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_g36 , 'Kills' => $weapon_kills_g36, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 180, 'Firerate' => 710, 'Damage' => 25, 'Accuracy' => 12, 'Stability' => 19, 'Concealment' => 19, 'Threat' => 13)),
array( 'Name' => $l['new_m14'], 'Wiki' => 'M308_(Payday_2)', 'Image' => 'new_m14', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_new_m14 , 'Kills' => $weapon_kills_new_m14, 'Stats' => array(
'Magazine' => 10, 'Ammo' => 40, 'Firerate' => 710, 'Damage' => 95, 'Accuracy' => 16, 'Stability' => 3, 'Concealment' => 8, 'Threat' => 31)),
array( 'Name' => $l['ak5'], 'Wiki' => 'Ak_5', 'Image' => 'ak5', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_ak5 , 'Kills' => $weapon_kills_ak5, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 150, 'Firerate' => 710, 'Damage' => 20, 'Accuracy' => 16, 'Stability' => 22, 'Concealment' => 18, 'Threat' => 14)),
array( 'Name' => $l['m16'], 'Wiki' => 'AMR-16', 'Image' => 'm16', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_m16 , 'Kills' => $weapon_kills_m16, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 90, 'Firerate' => 860, 'Damage' => 30, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 17, 'Threat' => 14)),
array( 'Name' => $l['s552'], 'Wiki' => 'Commando_553', 'Image' => 's552', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Used' => $weapon_used_s552 , 'Kills' => $weapon_kills_s552, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 150, 'Firerate' => 710, 'Damage' => 28, 'Accuracy' => 10, 'Stability' => 20, 'Concealment' => 22, 'Threat' => 12)),
array( 'Name' => $l['scar'], 'Wiki' => 'Eagle_Heavy', 'Image' => 'scar', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Used' => $weapon_used_scar , 'Kills' => $weapon_kills_scar, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 80, 'Firerate' => 610, 'Damage' => 43, 'Accuracy' => 12, 'Stability' => 12, 'Concealment' => 8, 'Threat' => 22)),
array( 'Name' => $l['fal'], 'Wiki' => 'Falcon', 'Image' => 'fal', 'Quality' => 'dlc', 'Extra' => $l['Big_Bank_Heist'], 'Used' => $weapon_used_fal , 'Kills' => $weapon_kills_fal, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 80, 'Firerate' => 700, 'Damage' => 43, 'Accuracy' => 10, 'Stability' => 12, 'Concealment' => 10, 'Threat' => 22)),
array( 'Name' => $l['famas'], 'Wiki' => 'Clarion', 'Image' => 'famas', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Used' => $weapon_used_famas , 'Kills' => $weapon_kills_famas, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 150, 'Firerate' => 1000, 'Damage' => 25, 'Accuracy' => 14, 'Stability' => 12, 'Concealment' => 24, 'Threat' => 14)),
array( 'Name' => $l['galil'], 'Wiki' => 'Gecko_7.62', 'Image' => 'galil', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Used' => $weapon_used_galil , 'Kills' => $weapon_kills_galil, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 120, 'Firerate' => 850, 'Damage' => 30, 'Accuracy' => 12, 'Stability' => 19, 'Concealment' => 15, 'Threat' => 24)),
array( 'Name' => $l['g3'], 'Wiki' => 'Gewehr_3', 'Image' => 'g3', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Used' => $weapon_used_g3 , 'Kills' => $weapon_kills_g3, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 80, 'Firerate' => 650, 'Damage' => 43, 'Accuracy' => 14, 'Stability' => 8, 'Concealment' => 12, 'Threat' => 26)),
array( 'Name' => $l['l85a2'], 'Wiki' => 'Queen’s_Wrath', 'Image' => 'l85a2', 'Quality' => 'dlc', 'Extra' => $l['cloverpack'], 'Used' => $weapon_used_l85a2 , 'Kills' => $weapon_kills_l85a2, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 180, 'Firerate' => 720, 'Damage' => 33, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 16, 'Threat' => 12)),
array( 'Name' => $l['vhs'], 'Wiki' => 'Lion\'s_Roar', 'Image' => 'vhs', 'Quality' => 'dlc', 'Extra' => $l['draganpack'], 'Used' => $weapon_used_vhs , 'Kills' => $weapon_kills_vhs, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 150, 'Firerate' => 860, 'Damage' => 33, 'Accuracy' => 16, 'Stability' => 8, 'Concealment' => 17, 'Threat' => 12)),
////Sniper Rifles
array( 'Name' => $l['msr'], 'Wiki' => 'Rattlesnake', 'Image' => 'msr', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Used' => $weapon_used_msr , 'Kills' => $weapon_kills_msr, 'Stats' => array(
'Magazine' => 10, 'Ammo' => 50, 'Firerate' => 60, 'Damage' => 130, 'Accuracy' => 18, 'Stability' => 3, 'Concealment' => 5, 'Threat' => 78)),
array( 'Name' => $l['r93'], 'Wiki' => 'R93', 'Image' => 'r93', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Used' => $weapon_used_r93 , 'Kills' => $weapon_kills_r93, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 30, 'Firerate' => 50, 'Damage' => 250, 'Accuracy' => 18, 'Stability' => 3, 'Concealment' => 5, 'Threat' => 93)),
array( 'Name' => $l['m95'], 'Wiki' => 'Thanatos_.50_cal', 'Image' => 'm95', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Used' => $weapon_used_m95 , 'Kills' => $weapon_kills_m95, 'Stats' => array(
'Magazine' => 5, 'Ammo' => 15, 'Firerate' => 40, 'Damage' => 2880, 'Accuracy' => 18, 'Stability' => 0, 'Concealment' => 2, 'Threat' => 185)),
array( 'Name' => $l['mosin'], 'Wiki' => 'Nagant', 'Image' => 'mosin', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Used' => $weapon_used_mosin , 'Kills' => $weapon_kills_mosin, 'Stats' => array(
'Magazine' => 5, 'Ammo' => 25, 'Firerate' => 60, 'Damage' => 280, 'Accuracy' => 18, 'Stability' => 6, 'Concealment' => 6, 'Threat' => 84)),
array( 'Name' => $l['winchester1874'], 'Wiki' => 'Repeater_1874', 'Image' => 'winchester1874', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Used' => $weapon_used_winchester1874 , 'Kills' => $weapon_kills_winchester1874, 'Stats' => array(
'Magazine' => 15, 'Ammo' => 45, 'Firerate' => 90, 'Damage' => 175, 'Accuracy' => 16, 'Stability' => 12, 'Concealment' => 12, 'Threat' => 84)),
////Shotguns
array( 'Name' => $l['r870'], 'Wiki' => 'Reinfeld_880', 'Image' => 'r870', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_r870 , 'Kills' => $weapon_kills_r870, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 48, 'Firerate' => 100, 'Damage' => 60, 'Accuracy' => 14, 'Stability' => 6, 'Concealment' => 11, 'Threat' => 28)),
array( 'Name' => $l['saiga'], 'Wiki' => 'IZHMA_12G', 'Image' => 'saiga', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_saiga , 'Kills' => $weapon_kills_saiga, 'Stats' => array(
'Magazine' => 7, 'Ammo' => 88, 'Firerate' => 330, 'Damage' => 35, 'Accuracy' => 10, 'Stability' => 8, 'Concealment' => 13, 'Threat' => 28)),
array( 'Name' => $l['huntsman'], 'Wiki' => 'Mosconi_12G', 'Image' => 'huntsman', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_huntsman , 'Kills' => $weapon_kills_huntsman, 'Stats' => array(
'Magazine' => 2, 'Ammo' => 26, 'Firerate' => 500, 'Damage' => 138, 'Accuracy' => 12, 'Stability' => 3, 'Concealment' => 7, 'Threat' => 37)),
array( 'Name' => $l['benelli'], 'Wiki' => 'M1014', 'Image' => 'benelli', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Used' => $weapon_used_benelli , 'Kills' => $weapon_kills_benelli, 'Stats' => array(
'Magazine' => 8, 'Ammo' => 72, 'Firerate' => 430, 'Damage' => 35, 'Accuracy' => 14, 'Stability' => 12, 'Concealment' => 12, 'Threat' => 26)),
array( 'Name' => $l['ksg'], 'Wiki' => 'Raven', 'Image' => 'ksg', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Used' => $weapon_used_ksg , 'Kills' => $weapon_kills_ksg, 'Stats' => array(
'Magazine' => 14, 'Ammo' => 42, 'Firerate' => 100, 'Damage' => 60, 'Accuracy' => 10, 'Stability' => 12, 'Concealment' => 22, 'Threat' => 28)),
array( 'Name' => $l['spas12'], 'Wiki' => 'Predator_12', 'Image' => 'spas12', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_spas12 , 'Kills' => $weapon_kills_spas12, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 36, 'Firerate' => 300, 'Damage' => 48, 'Accuracy' => 10, 'Stability' => 8, 'Concealment' => 14, 'Threat' => 28)),
array( 'Name' => $l['b682'], 'Wiki' => 'Joceline_O/U_12G', 'Image' => 'b682', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_b682 , 'Kills' => $weapon_kills_b682, 'Stats' => array(
'Magazine' => 2, 'Ammo' => 26, 'Firerate' => 500, 'Damage' => 138, 'Accuracy' => 14, 'Stability' => 20, 'Concealment' => 5, 'Threat' => 37)),
array( 'Name' => $l['aa12'], 'Wiki' => 'Steakout_12G', 'Image' => 'aa12', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Used' => $weapon_used_aa12 , 'Kills' => $weapon_kills_aa12, 'Stats' => array(
'Magazine' => 8, 'Ammo' => 64, 'Firerate' => 300, 'Damage' => 38, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 9, 'Threat' => 28)),
////Akimbo
array( 'Name' => $l['jowi'], 'Wiki' => 'Akimbo_Chimano_Compact', 'Image' => 'jowi', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_jowi , 'Kills' => $weapon_kills_jowi, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 120, 'Firerate' => 670, 'Damage' => 18, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 30, 'Threat' => 9)),
array( 'Name' => $l['x_deagle'], 'Wiki' => 'Akimbo_Deagle', 'Image' => 'x_deagle', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_x_deagle , 'Kills' => $weapon_kills_x_deagle, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 60, 'Firerate' => 240, 'Damage' => 45, 'Accuracy' => 10, 'Stability' => 6, 'Concealment' => 26, 'Threat' => 24)),
array( 'Name' => $l['x_1911'], 'Wiki' => 'Akimbo_Crosskill', 'Image' => 'x_1911', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_x_1911 , 'Kills' => $weapon_kills_x_1911, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 120, 'Firerate' => 500, 'Damage' => 23, 'Accuracy' => 12, 'Stability' => 12, 'Concealment' => 27, 'Threat' => 10)),
array( 'Name' => $l['x_b92fs'], 'Wiki' => 'Akimbo_Bernetti_9', 'Image' => 'x_b92fs', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_x_b92fs, 'Kills' => $weapon_kills_x_b92fs, 'Stats' => array(
'Magazine' => 28, 'Ammo' => 196, 'Firerate' => 670, 'Damage' => 18, 'Accuracy' => 14, 'Stability' => 19, 'Concealment' => 28, 'Threat' => 6)),
array( 'Name' => $l['x_g17'], 'Wiki' => 'Akimbo_Chimano_88', 'Image' => 'x_g17', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_x_g17 , 'Kills' => $weapon_kills_x_g17, 'Stats' => array(
'Magazine' => 34, 'Ammo' => 136, 'Firerate' => 500, 'Damage' => 15, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 30, 'Threat' => 8)),
array( 'Name' => $l['x_g22c'], 'Wiki' => 'Akimbo_Chimano_Custom', 'Image' => 'x_g22c', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_x_g22c , 'Kills' => $weapon_kills_x_g22c, 'Stats' => array(
'Magazine' => 32, 'Ammo' => 160, 'Firerate' => 500, 'Damage' => 23, 'Accuracy' => 10, 'Stability' => 23, 'Concealment' => 29, 'Threat' => 9)),
array( 'Name' => $l['x_usp'], 'Wiki' => 'Akimbo_Interceptor_45', 'Image' => 'x_usp', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_x_usp, 'Kills' => $weapon_kills_x_usp, 'Stats' => array(
'Magazine' => 26, 'Ammo' => 156, 'Firerate' => 500, 'Damage' => 20, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 29, 'Threat' => 8)),
////Light Machine Guns
array( 'Name' => $l['rpk'], 'Wiki' => 'RPK', 'Image' => 'rpk', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Used' => $weapon_used_rpk , 'Kills' => $weapon_kills_rpk, 'Stats' => array(
'Magazine' => 100, 'Ammo' => 300, 'Firerate' => 750, 'Damage' => 30, 'Accuracy' => 8, 'Stability' => 15, 'Concealment' => 5, 'Threat' => 22)),
array( 'Name' => $l['m249'], 'Wiki' => 'KSP', 'Image' => 'm249', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Used' => $weapon_used_m249 , 'Kills' => $weapon_kills_m249, 'Stats' => array(
'Magazine' => 200, 'Ammo' => 400, 'Firerate' => 910, 'Damage' => 28, 'Accuracy' => 6, 'Stability' => 17, 'Concealment' => 2, 'Threat' => 31)),
array( 'Name' => $l['hk21'], 'Wiki' => 'Brenner_21_(Payday_2)', 'Image' => 'hk21', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Used' => $weapon_used_hk21 , 'Kills' => $weapon_kills_hk21, 'Stats' => array(
'Magazine' => 150, 'Ammo' => 300, 'Firerate' => 720, 'Damage' => 33, 'Accuracy' => 10, 'Stability' => 12, 'Concealment' => 2, 'Threat' => 37)),
array( 'Name' => $l['mg42'], 'Wiki' => 'Buzzsaw_42', 'Image' => 'mg42', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Used' => $weapon_used_mg42 , 'Kills' => $weapon_kills_mg42, 'Stats' => array(
'Magazine' => 150, 'Ammo' => 450, 'Firerate' => 1200, 'Damage' => 30, 'Accuracy' => 6, 'Stability' => 15, 'Concealment' => 2, 'Threat' => 31)),
////Special
array( 'Name' => $l['saw'], 'Wiki' => 'OVE9000', 'Image' => 'saw', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_saw , 'Kills' => $weapon_kills_saw, 'Stats' => array(
'Magazine' => 150, 'Ammo' => 300, 'Firerate' => 400, 'Damage' => 23, 'Accuracy' => 4, 'Stability' => 17, 'Concealment' => 16, 'Threat' => 24)),
array( 'Name' => $l['m134'], 'Wiki' => 'Vulcan_Minigun', 'Image' => 'm134', 'Quality' => 'dlc', 'Extra' => $l['overkillpack'], 'Used' => $weapon_used_m134 , 'Kills' => $weapon_kills_m134, 'Stats' => array(
'Magazine' => 750, 'Ammo' => 750, 'Firerate' => 3000, 'Damage' => 38, 'Accuracy' => 8, 'Stability' => 3, 'Concealment' => 5, 'Threat' => 31)),
array( 'Name' => $l['flamethrower_mk2'], 'Wiki' => 'Flamethrower', 'Image' => 'flamethrower_mk2', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Used' => $weapon_used_flamethrower_mk2 , 'Kills' => $weapon_kills_flamethrower_mk2, 'Stats' => array(
'Magazine' => 150, 'Ammo' => 600, 'Firerate' => 2000, 'Damage' => 14, 'Accuracy' => 0, 'Stability' => 0, 'Concealment' => 7, 'Threat' => 37)),
array( 'Name' => $l['m32'], 'Wiki' => 'Piglet', 'Image' => 'm32', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Used' => $weapon_used_m32 , 'Kills' => $weapon_kills_m32, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 12, 'Firerate' => 60, 'Damage' => 340, 'Accuracy' => 4, 'Stability' => 20, 'Concealment' => 10, 'Threat' => 37)),
array( 'Name' => $l['gre_m79'], 'Wiki' => 'GL40_(Payday_2)', 'Image' => 'gre_m79', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Used' => $weapon_used_gre_m79 , 'Kills' => $weapon_kills_gre_m79, 'Stats' => array(
'Magazine' => 1, 'Ammo' => 6, 'Firerate' => 30, 'Damage' => 340, 'Accuracy' => 12, 'Stability' => 6, 'Concealment' => 18, 'Threat' => 37)),
array( 'Name' => $l['plainsrider'], 'Wiki' => 'Plainsrider_Bow', 'Image' => 'plainsrider', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Used' => $weapon_used_plainsrider , 'Kills' => $weapon_kills_plainsrider, 'Stats' => array(
'Magazine' => 1, 'Ammo' => 50, 'Firerate' => 300, 'Damage' => 195, 'Accuracy' => 18, 'Stability' => 24, 'Concealment' => 30, 'Threat' => 37))
);
//
//SECONDARY
//
$weapons_secondary = array(
////Pistols
array( 'Name' => $l['usp'], 'Wiki' => 'Interceptor_45', 'Image' => 'usp', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_usp , 'Kills' => $weapon_kills_usp, 'Stats' => array(
'Magazine' => 13, 'Ammo' => 130, 'Firerate' => 750, 'Damage' => 20, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 29, 'Threat' => 8)),
array( 'Name' => $l['g22c'], 'Wiki' => 'Chimano_Custom', 'Image' => 'g22c', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_g22c , 'Kills' => $weapon_kills_g22c, 'Stats' => array(
'Magazine' => 16, 'Ammo' => 128, 'Firerate' => 750, 'Damage' => 23, 'Accuracy' => 10, 'Stability' => 23, 'Concealment' => 29, 'Threat' => 9)),
array( 'Name' => $l['glock_17'], 'Wiki' => 'Chimano_88', 'Image' => 'glock_17', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_glock_17 , 'Kills' => $weapon_kills_glock_17, 'Stats' => array(
'Magazine' => 17, 'Ammo' => 136, 'Firerate' => 500, 'Damage' => 15, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 30, 'Threat' => 8)),
array( 'Name' => $l['colt_1911'], 'Wiki' => 'Crosskill', 'Image' => 'colt_1911', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_colt_1911 , 'Kills' => $weapon_kills_colt_1911, 'Stats' => array(
'Magazine' => 10, 'Ammo' => 60, 'Firerate' => 500, 'Damage' => 23, 'Accuracy' => 12, 'Stability' => 12, 'Concealment' => 29, 'Threat' => 10)),
array( 'Name' => $l['b92fs'], 'Wiki' => 'Bernetti_9', 'Image' => 'b92fs', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_b92fs , 'Kills' => $weapon_kills_b92fs, 'Stats' => array(
'Magazine' => 14, 'Ammo' => 154, 'Firerate' => 670, 'Damage' => 18, 'Accuracy' => 14, 'Stability' => 19, 'Concealment' => 30, 'Threat' => 6)),
array( 'Name' => $l['new_raging_bull'], 'Wiki' => 'Bronco_.44_(Payday_2)', 'Image' => 'new_raging_bull', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_new_raging_bull , 'Kills' => $weapon_kills_new_raging_bull, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 30, 'Firerate' => 290, 'Damage' => 75, 'Accuracy' => 12, 'Stability' => 3, 'Concealment' => 26, 'Threat' => 24)),
array( 'Name' => $l['glock_18c'], 'Wiki' => 'STRYK_18c', 'Image' => 'glock_18c', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_glock_18c , 'Kills' => $weapon_kills_glock_18c, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 140, 'Firerate' => 910, 'Damage' => 20, 'Accuracy' => 8, 'Stability' => 15, 'Concealment' => 29, 'Threat' => 8)),
array( 'Name' => $l['deagle'], 'Wiki' => 'Deagle', 'Image' => 'deagle', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_deagle , 'Kills' => $weapon_kills_deagle, 'Stats' => array(
'Magazine' => 10, 'Ammo' => 30, 'Firerate' => 400, 'Damage' => 60, 'Accuracy' => 10, 'Stability' => 6, 'Concealment' => 28, 'Threat' => 24)),
array( 'Name' => $l['ppk'], 'Wiki' => 'Gruber_Kurz', 'Image' => 'ppk', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Used' => $weapon_used_ppk , 'Kills' => $weapon_kills_ppk, 'Stats' => array(
'Magazine' => 14, 'Ammo' => 154, 'Firerate' => 670, 'Damage' => 18, 'Accuracy' => 16, 'Stability' => 20, 'Concealment' => 30, 'Threat' => 4)),
array( 'Name' => $l['p226'], 'Wiki' => 'Signature_.40', 'Image' => 'p226', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Used' => $weapon_used_p226 , 'Kills' => $weapon_kills_p226, 'Stats' => array(
'Magazine' => 12, 'Ammo' => 84, 'Firerate' => 670, 'Damage' => 23, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 29, 'Threat' => 9)),
array( 'Name' => $l['g26'], 'Wiki' => 'Chimano_Compact', 'Image' => 'g26', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_g26 , 'Kills' => $weapon_kills_g26, 'Stats' => array(
'Magazine' => 10, 'Ammo' => 150, 'Firerate' => 670, 'Damage' => 18, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 30, 'Threat' => 4)),
array( 'Name' => $l['c96'], 'Wiki' => 'Broomstick', 'Image' => 'c96', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Used' => $weapon_used_c96 , 'Kills' => $weapon_kills_c96, 'Stats' => array(
'Magazine' => 10, 'Ammo' => 80, 'Firerate' => 670, 'Damage' => 33, 'Accuracy' => 10, 'Stability' => 17, 'Concealment' => 28, 'Threat' => 10)),
array( 'Name' => $l['hs2000'], 'Wiki' => 'LEO', 'Image' => 'hs2000', 'Quality' => 'dlc', 'Extra' => $l['thebombpack'], 'Used' => $weapon_used_hs2000 , 'Kills' => $weapon_kills_hs2000, 'Stats' => array(
'Magazine' => 19, 'Ammo' => 133, 'Firerate' => 670, 'Damage' => 18, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 29, 'Threat' => 9)),
array( 'Name' => $l['peacemaker'], 'Wiki' => 'Peacemaker_.45', 'Image' => 'peacemaker', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Used' => $weapon_used_peacemaker , 'Kills' => $weapon_kills_peacemaker, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 36, 'Firerate' => 240, 'Damage' => 151, 'Accuracy' => 14, 'Stability' => 15, 'Concealment' => 26, 'Threat' => 28)),
////Submachine Guns
array( 'Name' => $l['mac10'], 'Wiki' => 'Mark_10', 'Image' => 'mac10', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_mac10 , 'Kills' => $weapon_kills_mac10, 'Stats' => array(
'Magazine' => 40, 'Ammo' => 80, 'Firerate' => 1000, 'Damage' => 25, 'Accuracy' => 8, 'Stability' => 15, 'Concealment' => 27, 'Threat' => 10)),
array( 'Name' => $l['new_mp5'], 'Wiki' => 'Compact-5_(Payday_2)', 'Image' => 'new_mp5', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_new_mp5 , 'Kills' => $weapon_kills_new_mp5, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 150, 'Firerate' => 750, 'Damage' => 18, 'Accuracy' => 12, 'Stability' => 21, 'Concealment' => 23, 'Threat' => 6)),
array( 'Name' => $l['mp9'], 'Wiki' => 'CMP', 'Image' => 'mp9', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_mp9 , 'Kills' => $weapon_kills_mp9, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 120, 'Firerate' => 950, 'Damage' => 20, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 26, 'Threat' => 8)),
array( 'Name' => $l['olympic'], 'Wiki' => 'Para', 'Image' => 'olympic', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_olympic , 'Kills' => $weapon_kills_olympic, 'Stats' => array(
'Magazine' => 25, 'Ammo' => 100, 'Firerate' => 680, 'Damage' => 18, 'Accuracy' => 14, 'Stability' => 20, 'Concealment' => 24, 'Threat' => 14)),
array( 'Name' => $l['akmsu'], 'Wiki' => 'Krinkov', 'Image' => 'akmsu', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_akmsu , 'Kills' => $weapon_kills_akmsu, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 90, 'Firerate' => 820, 'Damage' => 25, 'Accuracy' => 8, 'Stability' => 15, 'Concealment' => 21, 'Threat' => 22)),
array( 'Name' => $l['p90'], 'Wiki' => 'Kobus_90', 'Image' => 'p90', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_p90 , 'Kills' => $weapon_kills_p90, 'Stats' => array(
'Magazine' => 50, 'Ammo' => 100, 'Firerate' => 910, 'Damage' => 20, 'Accuracy' => 14, 'Stability' => 20, 'Concealment' => 25, 'Threat' => 12)),
array( 'Name' => $l['m45'], 'Wiki' => 'Swedish_K', 'Image' => 'm45', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Used' => $weapon_used_m45 , 'Kills' => $weapon_kills_m45, 'Stats' => array(
'Magazine' => 40, 'Ammo' => 80, 'Firerate' => 600, 'Damage' => 28, 'Accuracy' => 10, 'Stability' => 17, 'Concealment' => 24, 'Threat' => 10)),
array( 'Name' => $l['mp7'], 'Wiki' => 'SpecOps', 'Image' => 'mp7', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Used' => $weapon_used_mp7 , 'Kills' => $weapon_kills_mp7, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 80, 'Firerate' => 950, 'Damage' => 28, 'Accuracy' => 12, 'Stability' => 19, 'Concealment' => 23, 'Threat' => 8)),
array( 'Name' => $l['cobrasmg'], 'Wiki' => 'Cobra', 'Image' => 'scorpion', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Used' => $weapon_used_scorpion , 'Kills' => $weapon_kills_scorpion, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 160, 'Firerate' => 1000, 'Damage' => 18, 'Accuracy' => 10, 'Stability' => 17, 'Concealment' => 28, 'Threat' => 6)),
array( 'Name' => $l['blastersmg'], 'Wiki' => 'Blaster_9mm', 'Image' => 'tec9', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Used' => $weapon_used_tec9 , 'Kills' => $weapon_kills_tec9, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 120, 'Firerate' => 900, 'Damage' => 25, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 27, 'Threat' => 12)),
array( 'Name' => $l['uzi'], 'Wiki' => 'Uzi', 'Image' => 'uzi', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Used' => $weapon_used_uzi , 'Kills' => $weapon_kills_uzi, 'Stats' => array(
'Magazine' => 30, 'Ammo' => 90, 'Firerate' => 700, 'Damage' => 28, 'Accuracy' => 14, 'Stability' => 20, 'Concealment' => 24, 'Threat' => 12)),
array( 'Name' => $l['sterling'], 'Wiki' => 'Patchett_L2A1', 'Image' => 'sterling', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Used' => $weapon_used_sterling , 'Kills' => $weapon_kills_sterling, 'Stats' => array(
'Magazine' => 20, 'Ammo' => 80, 'Firerate' => 550, 'Damage' => 35, 'Accuracy' => 12, 'Stability' => 17, 'Concealment' => 20, 'Threat' => 12)),
array( 'Name' => $l['m1928'], 'Wiki' => 'Chicago_Typewriter', 'Image' => 'm1928', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_m1928 , 'Kills' => $weapon_kills_m1928, 'Stats' => array(
'Magazine' => 50, 'Ammo' => 150, 'Firerate' => 720, 'Damage' => 23, 'Accuracy' => 12, 'Stability' => 20, 'Concealment' => 18, 'Threat' => 12)),
array( 'Name' => $l['cobray'], 'Wiki' => 'Jacket\'s_Piece', 'Image' => 'cobray', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2_deluxe'], 'Used' => $weapon_used_cobray , 'Kills' => $weapon_kills_cobray, 'Stats' => array(
'Magazine' => 32, 'Ammo' => 128, 'Firerate' => 1200, 'Damage' => 25, 'Accuracy' => 6, 'Stability' => 19, 'Concealment' => 25, 'Threat' => 10)),
////Special
array( 'Name' => $l['rpg7'], 'Wiki' => 'HRL-7', 'Image' => 'rpg7', 'Quality' => 'dlc', 'Extra' => $l['overkillpack'], 'Used' => $weapon_used_rpg7 , 'Kills' => $weapon_kills_rpg7, 'Stats' => array(
'Magazine' => 1, 'Ammo' => 4, 'Firerate' => 30, 'Damage' => 10000, 'Accuracy' => 18, 'Stability' => 9, 'Concealment' => 5, 'Threat' => 37)),
////Shotguns
array( 'Name' => $l['judge'], 'Wiki' => 'The_Judge', 'Image' => 'judge', 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $weapon_used_judge , 'Kills' => $weapon_kills_judge, 'Stats' => array(
'Magazine' => 5, 'Ammo' => 20, 'Firerate' => 500, 'Damage' => 95, 'Accuracy' => 6, 'Stability' => 3, 'Concealment' => 29, 'Threat' => 28)),
array( 'Name' => $l['serbu'], 'Wiki' => 'Locomotive_12G_(Payday_2)', 'Image' => 'serbu', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_serbu , 'Kills' => $weapon_kills_serbu, 'Stats' => array(
'Magazine' => 6, 'Ammo' => 30, 'Firerate' => 160, 'Damage' => 65, 'Accuracy' => 8, 'Stability' => 6, 'Concealment' => 23, 'Threat' => 28)),
array( 'Name' => $l['striker'], 'Wiki' => 'Street_Sweeper', 'Image' => 'striker', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Used' => $weapon_used_striker , 'Kills' => $weapon_kills_striker, 'Stats' => array(
'Magazine' => 12, 'Ammo' => 48, 'Firerate' => 430, 'Damage' => 35, 'Accuracy' => 10, 'Stability' => 8, 'Concealment' => 21, 'Threat' => 28)),
);

if($skill_enforcer_carbon_blade_ace == 1){
array_push($weapons_secondary, array( 'Name' => $l['saw'], 'Wiki' => 'OVE9000', 'Image' => 'saw', 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $weapon_used_saw , 'Kills' => $weapon_kills_saw, 'Stats' => array(
'Magazine' => 150, 'Ammo' => 300, 'Firerate' => 400, 'Damage' => 23, 'Accuracy' => 4, 'Stability' => 17, 'Concealment' => 16, 'Threat' => 24)));
}
//
//Melee
//
$weapons_melee = array(
array( 'Name' => $l['butt'], 'Wiki' => 'Weapon_Butt', 'Image' => 'butt', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['butt-description'], 'Used' => $melee_used_weapon , 'Kills' => $melee_kills_weapon , 'Stats' => array(
'Damage' => 15, 'DamageMAX' => 15, 'Knockdown' => 26, 'KnockdownMAX' => 26, 'Charge' => 0.0, 'Range' => 150, 'Concealment' => 30 )),
array( 'Name' => $l['fists'], 'Wiki' => 'Fists', 'Image' => 'fists', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['fists-description'], 'Used' => $melee_used_fists , 'Kills' => $melee_kills_fists , 'Stats' => array(
'Damage' => 10, 'DamageMAX' => 30, 'Knockdown' => 54, 'KnockdownMAX' => 87, 'Charge' => 1.0, 'Range' => 150, 'Concealment' => 30 )),
array( 'Name' => $l['brass_knuckles'], 'Wiki' => '350K_Brass_Knuckles', 'Image' => 'brass_knuckles', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['brass_knuckles-description'], 'Used' => $melee_used_brass_knuckles , 'Kills' => $melee_kills_brass_knuckles , 'Stats' => array(
'Damage' => 15, 'DamageMAX' => 35, 'Knockdown' => 56, 'KnockdownMAX' => 94, 'Charge' => 1.3, 'Range' => 150, 'Concealment' => 30 )),
array( 'Name' => $l['moneybundle'], 'Wiki' => 'Money_Bundle', 'Image' => 'moneybundle', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['moneybundle-description'], 'Used' => $melee_used_moneybundle , 'Kills' => $melee_kills_moneybundle , 'Stats' => array(
'Damage' => 2, 'DamageMAX' => 10, 'Knockdown' => 30, 'KnockdownMAX' => 100, 'Charge' => 2.0, 'Range' => 150, 'Concealment' => 30 )),
array( 'Name' => $l['barbedwire'], 'Wiki' => 'Lucille Baseball_Bat', 'Image' => 'barbedwire', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['barbedwire-description'], 'Used' => $melee_used_barbedwire , 'Kills' => $melee_kills_barbedwire , 'Stats' => array(
'Damage' => 40, 'DamageMAX' => 66, 'Knockdown' => 160, 'KnockdownMAX' => 212, 'Charge' => 3.0, 'Range' => 275, 'Concealment' => 21 )),
array( 'Name' => $l['kabar'], 'Wiki' => 'URSA_Knife', 'Image' => 'kabar', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['kabar-description'], 'Used' => $melee_used_kabar , 'Kills' => $melee_kills_kabar , 'Stats' => array(
'Damage' => 15, 'DamageMAX' => 70, 'Knockdown' => 11, 'KnockdownMAX' => 37, 'Charge' => 1.8, 'Range' => 185, 'Concealment' => 29 )),
array( 'Name' => $l['kampfmesser'], 'Wiki' => 'Krieger_Blade', 'Image' => 'kampfmesser', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['kampfmesser-description'], 'Used' => $melee_used_kampfmesser , 'Kills' => $melee_kills_kampfmesser , 'Stats' => array(
'Damage' => 15, 'DamageMAX' => 75, 'Knockdown' => 15, 'KnockdownMAX' => 33, 'Charge' => 1.5, 'Range' => 185, 'Concealment' => 29 )),
array( 'Name' => $l['gerber'], 'Wiki' => 'Berger_Combat_Knife', 'Image' => 'gerber', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['gerber-description'], 'Used' => $melee_used_gerber , 'Kills' => $melee_kills_gerber , 'Stats' => array(
'Damage' => 20, 'DamageMAX' => 52, 'Knockdown' => 20, 'KnockdownMAX' => 30, 'Charge' => 1.3, 'Range' => 160, 'Concealment' => 30 )),
array( 'Name' => $l['rambo'], 'Wiki' => 'Trautman_Knife', 'Image' => 'rambo', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['rambo-description'], 'Used' => $melee_used_rambo , 'Kills' => $melee_kills_rambo , 'Stats' => array(
'Damage' => 22, 'DamageMAX' => 100, 'Knockdown' => 13, 'KnockdownMAX' => 40, 'Charge' => 2.0, 'Range' => 200, 'Concealment' => 29 )),
array( 'Name' => $l['shovel'], 'Wiki' => 'K.L.A.S._Shovel', 'Image' => 'shovel', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['shovel-description'], 'Used' => $melee_used_shovel , 'Kills' => $melee_kills_shovel , 'Stats' => array(
'Damage' => 13, 'DamageMAX' => 26, 'Knockdown' => 64, 'KnockdownMAX' => 134, 'Charge' => 2.2, 'Range' => 250, 'Concealment' => 24 )),
array( 'Name' => $l['baton'], 'Wiki' => 'Telescopic_Baton', 'Image' => 'baton', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['baton-description'], 'Used' => $melee_used_baton , 'Kills' => $melee_kills_baton , 'Stats' => array(
'Damage' => 7, 'DamageMAX' => 17, 'Knockdown' => 82, 'KnockdownMAX' => 148, 'Charge' => 2.0, 'Range' => 250, 'Concealment' => 30 )),
array( 'Name' => $l['tomahawk'], 'Wiki' => 'Survival_Tomahawk', 'Image' => 'tomahawk', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['tomahawk-description'], 'Used' => $melee_used_tomahawk , 'Kills' => $melee_kills_tomahawk , 'Stats' => array(
'Damage' => 40, 'DamageMAX' => 66, 'Knockdown' => 20, 'KnockdownMAX' => 40, 'Charge' => 2.2, 'Range' => 225, 'Concealment' => 26 )),
array( 'Name' => $l['becker'], 'Wiki' => 'Utility_Machete', 'Image' => 'becker', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['becker-description'], 'Used' => $melee_used_becker , 'Kills' => $melee_kills_becker , 'Stats' => array(
'Damage' => 17, 'DamageMAX' => 117, 'Knockdown' => 7, 'KnockdownMAX' => 40, 'Charge' => 3.0, 'Range' => 200, 'Concealment' => 28 )),
array( 'Name' => $l['bayonet'], 'Wiki' => 'Bayonet', 'Image' => 'bayonet', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['bayonet-description'], 'Used' => $melee_used_bayonet , 'Kills' => $melee_kills_bayonet , 'Stats' => array(
'Damage' => 20, 'DamageMAX' => 80, 'Knockdown' => 20, 'KnockdownMAX' => 36, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 29 )),
array( 'Name' => $l['bullseye'], 'Wiki' => 'Compact_Hatchet', 'Image' => 'bullseye', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['bullseye-description'], 'Used' => $melee_used_bullseye , 'Kills' => $melee_kills_bullseye , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 80, 'Knockdown' => 15, 'KnockdownMAX' => 48, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['x46'], 'Wiki' => 'X-46_Knife', 'Image' => 'x46', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['x46-description'], 'Used' => $melee_used_x46 , 'Kills' => $melee_kills_x46 , 'Stats' => array(
'Damage' => 25, 'DamageMAX' => 60, 'Knockdown' => 25, 'KnockdownMAX' => 60, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 30 )),
array( 'Name' => $l['dingdong'], 'Wiki' => 'Ding_Dong_Breaching_Tool', 'Image' => 'dingdong', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['dingdong-description'], 'Used' => $melee_used_dingdong , 'Kills' => $melee_kills_dingdong , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 92, 'Knockdown' => 120, 'KnockdownMAX' => 294, 'Charge' => 3.0, 'Range' => 275, 'Concealment' => 20 )),
array( 'Name' => $l['baseballbat'], 'Wiki' => 'Baseball_Bat', 'Image' => 'baseballbat', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['baseballbat-description'], 'Used' => $melee_used_baseballbat , 'Kills' => $melee_kills_baseballbat , 'Stats' => array(
'Damage' => 35, 'DamageMAX' => 60, 'Knockdown' => 140, 'KnockdownMAX' => 192, 'Charge' => 2.0, 'Range' => 250, 'Concealment' => 24 )),
array( 'Name' => $l['cleaver'], 'Wiki' => 'Cleaver_Knife', 'Image' => 'cleaver', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['cleaver-description'], 'Used' => $melee_used_cleaver , 'Kills' => $melee_kills_cleaver , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 95, 'Knockdown' => 15, 'KnockdownMAX' => 57, 'Charge' => 3.0, 'Range' => 185, 'Concealment' => 26 )),
array( 'Name' => $l['machete'], 'Wiki' => 'Machete_Knife', 'Image' => 'machete', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['machete-description'], 'Used' => $melee_used_machete , 'Kills' => $melee_kills_machete , 'Stats' => array(
'Damage' => 40, 'DamageMAX' => 85, 'Knockdown' => 20, 'KnockdownMAX' => 51, 'Charge' => 3.0, 'Range' => 225, 'Concealment' => 24 )),
array( 'Name' => $l['fireaxe'], 'Wiki' => 'Fire Axe', 'Image' => 'fireaxe', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['fireaxe-description'], 'Used' => $melee_used_fireaxe , 'Kills' => $melee_kills_fireaxe , 'Stats' => array(
'Damage' => 90, 'DamageMAX' => 140, 'Knockdown' => 90, 'KnockdownMAX' => 140, 'Charge' => 4.0, 'Range' => 275, 'Concealment' => 20 )),
array( 'Name' => $l['briefcase'], 'Wiki' => '50_Blessings_Briefcase', 'Image' => 'briefcase', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami'], 'Description' => $l['briefcase-description'], 'Used' => $melee_used_briefcase , 'Kills' => $melee_kills_briefcase , 'Stats' => array(
'Damage' => 7, 'DamageMAX' => 17, 'Knockdown' => 68, 'KnockdownMAX' => 168, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 30 )),
array( 'Name' => $l['kabartanto'], 'Wiki' => 'Ursa_Tanto_Knife', 'Image' => 'kabartanto', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['kabartanto-description'], 'Used' => $melee_used_kabartanto , 'Kills' => $melee_kills_kabartanto , 'Stats' => array(
'Damage' => 20, 'DamageMAX' => 80, 'Knockdown' => 16, 'KnockdownMAX' => 40, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 30 )),
array( 'Name' => $l['toothbrush'], 'Wiki' => 'Nova&apos;s_Shank', 'Image' => 'toothbrush', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['toothbrush-description'], 'Used' => $melee_used_toothbrush , 'Kills' => $melee_kills_toothbrush , 'Stats' => array(
'Damage' => 20, 'DamageMAX' => 80, 'Knockdown' => 16, 'KnockdownMAX' => 40, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 30 )),
array( 'Name' => $l['chef'], 'Wiki' => 'Psycho_Knife', 'Image' => 'chef', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['chef-description'], 'Used' => $melee_used_chef , 'Kills' => $melee_kills_chef , 'Stats' => array(
'Damage' => 28, 'DamageMAX' => 140, 'Knockdown' => 28, 'KnockdownMAX' => 140, 'Charge' => 4.0, 'Range' => 150, 'Concealment' => 28 )),
array( 'Name' => $l['fairbair'], 'Wiki' => 'Trench_Knife', 'Image' => 'fairbair', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['fairbair-description'], 'Used' => $melee_used_fairbair , 'Kills' => $melee_kills_fairbair , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 50, 'Knockdown' => 6, 'KnockdownMAX' => 50, 'Charge' => 2.0, 'Range' => 175, 'Concealment' => 30 )),
array( 'Name' => $l['freedom'], 'Wiki' => 'The_Spear_of_Freedom', 'Image' => 'freedom', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['freedom-description'], 'Used' => $melee_used_freedom , 'Kills' => $melee_kills_freedom , 'Stats' => array(
'Damage' => 70, 'DamageMAX' => 160, 'Knockdown' => 70, 'KnockdownMAX' => 160, 'Charge' => 4.0, 'Range' => 275, 'Concealment' => 18 )),
array( 'Name' => $l['model24'], 'Wiki' => 'Potato_Masher', 'Image' => 'model24', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['model24-description'], 'Used' => $melee_used_model24 , 'Kills' => $melee_kills_model24 , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 61, 'Knockdown' => 96, 'KnockdownMAX' => 92, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['swagger'], 'Wiki' => 'Swagger_Stick', 'Image' => 'swagger', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['swagger-description'], 'Used' => $melee_used_swagger , 'Kills' => $melee_kills_swagger , 'Stats' => array(
'Damage' => 20, 'DamageMAX' => 35, 'Knockdown' => 76, 'KnockdownMAX' => 140, 'Charge' => 2.0, 'Range' => 225, 'Concealment' => 27 )),
array( 'Name' => $l['alien_maul'], 'Wiki' => 'Alpha_Mauler', 'Image' => 'alien_maul', 'Quality' => 'event', 'Extra' => $l['Humble2Pack'], 'Description' => $l['alien_maul-description'], 'Used' => $melee_used_alien_maul , 'Kills' => $melee_kills_alien_maul , 'Stats' => array(
'Damage' => 29, 'DamageMAX' => 60, 'Knockdown' => 113, 'KnockdownMAX' => 186, 'Charge' => 2.0, 'Range' => 275, 'Concealment' => 20 )),
array( 'Name' => $l['shillelagh'], 'Wiki' => 'Clover\'s_Shillelagh', 'Image' => 'shillelagh', 'Quality' => 'dlc', 'Extra' => $l['cloverpack'], 'Description' => $l['shillelagh-description'], 'Used' => $melee_used_shillelagh , 'Kills' => $melee_kills_shillelagh , 'Stats' => array(
'Damage' => 35, 'DamageMAX' => 65, 'Knockdown' => 140, 'KnockdownMAX' => 195, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 26 )),
array( 'Name' => $l['meat_cleaver'], 'Wiki' => 'Dragan\'s_Cleaver_Knife', 'Image' => 'meat_cleaver', 'Quality' => 'dlc', 'Extra' => $l['draganpack'], 'Description' => $l['meat_cleaver-description'], 'Used' => $melee_used_meat_cleaver , 'Kills' => $melee_kills_meat_cleaver , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 75, 'Knockdown' => 15, 'KnockdownMAX' => 45, 'Charge' => 2.0, 'Range' => 195, 'Concealment' => 26 )),
array( 'Name' => $l['boxing_gloves'], 'Wiki' => 'Alpha_Mauler', 'Image' => 'boxing_gloves', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['boxing_gloves-description'], 'Used' => $melee_used_boxing_gloves , 'Kills' => $melee_kills_boxing_gloves , 'Stats' => array(
'Damage' => 15, 'DamageMAX' => 35, 'Knockdown' => 60, 'KnockdownMAX' => 105, 'Charge' => 1.0, 'Range' => 150, 'Concealment' => 30 )),
array( 'Name' => $l['hammer'], 'Wiki' => 'Carpenter\'s_Delight', 'Image' => 'hammer', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2_deluxe'], 'Description' => $l['hammer-description'], 'Used' => $melee_used_hammer , 'Kills' => $melee_kills_hammer , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 61, 'Knockdown' => 96, 'KnockdownMAX' => 92, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['whiskey'], 'Wiki' => 'Rivertown_Glen_Bottle', 'Image' => 'whiskey', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['whiskey-description'], 'Used' => $melee_used_whiskey , 'Kills' => $melee_kills_whiskey , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 55, 'Knockdown' => 90, 'KnockdownMAX' => 110, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['fork'], 'Wiki' => 'The_Motherforker', 'Image' => 'fork', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['fork-description'], 'Used' => $melee_used_fork , 'Kills' => $melee_kills_fork , 'Stats' => array(
'Damage' => 40, 'DamageMAX' => 90, 'Knockdown' => 10, 'KnockdownMAX' => 45, 'Charge' => 2.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['poker'], 'Wiki' => 'Poker', 'Image' => 'poker', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['poker-description'], 'Used' => $melee_used_poker , 'Kills' => $melee_kills_poker , 'Stats' => array(
'Damage' => 60, 'DamageMAX' => 120, 'Knockdown' => 102, 'KnockdownMAX' => 240, 'Charge' => 3.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['spatula'], 'Wiki' => 'Spatula', 'Image' => 'spatula', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['spatula-description'], 'Used' => $melee_used_spatula , 'Kills' => $melee_kills_spatula , 'Stats' => array(
'Damage' => 20, 'DamageMAX' => 30, 'Knockdown' => 30, 'KnockdownMAX' => 60, 'Charge' => 1.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['tenderizer'], 'Wiki' => 'Tenderizer', 'Image' => 'tenderizer', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['tenderizer-description'], 'Used' => $melee_used_tenderizer , 'Kills' => $melee_kills_tenderizer , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 90, 'Knockdown' => 60, 'KnockdownMAX' => 144, 'Charge' => 3.0, 'Range' => 185, 'Concealment' => 27 )),
array( 'Name' => $l['bowie'], 'Wiki' => 'Arkansas_Toothpick', 'Image' => 'bowie', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['bowie-description'], 'Used' => $melee_used_bowie , 'Kills' => $melee_kills_bowie , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 61, 'Knockdown' => 96, 'KnockdownMAX' => 92, 'Charge' => 2.0, 'Range' => 225, 'Concealment' => 27 )),
array( 'Name' => $l['branding_iron'], 'Wiki' => 'You\'re_Mine', 'Image' => 'branding_iron', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['branding_iron-description'], 'Used' => $melee_used_branding_iron , 'Kills' => $melee_kills_branding_iron , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 61, 'Knockdown' => 96, 'KnockdownMAX' => 98, 'Charge' => 2.0, 'Range' => 225, 'Concealment' => 20 )),
array( 'Name' => $l['mining_pick'], 'Wiki' => 'Gold_Fever', 'Image' => 'mining_pick', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['mining_pick-description'], 'Used' => $melee_used_mining_pick , 'Kills' => $melee_kills_mining_pick , 'Stats' => array(
'Damage' => 35, 'DamageMAX' => 80, 'Knockdown' => 18, 'KnockdownMAX' => 48, 'Charge' => 3.0, 'Range' => 225, 'Concealment' => 20 )),
array( 'Name' => $l['scalper'], 'Wiki' => 'Scalper_Tomahawk', 'Image' => 'scalper', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['scalper-description'], 'Used' => $melee_used_scalper , 'Kills' => $melee_kills_scalper , 'Stats' => array(
'Damage' => 30, 'DamageMAX' => 90, 'Knockdown' => 60, 'KnockdownMAX' => 144, 'Charge' => 3.0, 'Range' => 185, 'Concealment' => 27 ))
);
//
//Grenades
//
$weapons_grenades = array(
array( 'Name' => $l['frag_grenade'], 'Wiki' => 'Frag_Grenade', 'Image' => 'frag', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Description' => $l['frag_grenade-description'], 'Used' => $grenade_used_frag , 'Kills' => $grenade_kills_frag),
array( 'Name' => $l['dynamite'], 'Wiki' => 'Dynamite', 'Image' => 'dynamite', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['dynamite-description'], 'Used' => $grenade_used_dynamite , 'Kills' => $grenade_kills_dynamite),
array( 'Name' => $l['molotov'], 'Wiki' => 'Molotov_Cocktail', 'Image' => 'molotov', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['molotov-description'], 'Used' => $grenade_used_molotov , 'Kills' => $grenade_kills_molotov)
);
//
//Gadgets
//
$gadgets = array(
array( 'Name' => $l['ammo_bag'], 'Wiki' => 'Ammo_bag_(Payday_2)', 'Image' => 'ammobag', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['ammo_bag-description'], 'Used' => $gadget_used_ammo_bag),
array( 'Name' => $l['doctor_bag'], 'Wiki' => 'Doctor_bag_(Payday_2)', 'Image' => 'doctorbag', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['doctor_bag-description'], 'Used' => $gadget_used_doctor_bag),
array( 'Name' => $l['trip_mine'], 'Wiki' => 'Trip_mine_(Payday_2)', 'Image' => 'tripmine', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['trip_mine-description'], 'Used' => $gadget_used_trip_mine),
array( 'Name' => $l['sentry_gun'], 'Wiki' => 'Sentry_gun_(Payday_2)', 'Image' => 'sentrygun', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['sentry_gun-description'], 'Used' => $gadget_used_sentry_gun),
array( 'Name' => $l['ecm_jammer'], 'Wiki' => 'ECM_jammer', 'Image' => 'ecmjammer', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['ecm_jammer-description'], 'Used' => $gadget_used_ecm_jammer),
array( 'Name' => $l['armor_kit'], 'Wiki' => 'Armor_Bag', 'Image' => 'armor_kit', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['armor_kit-description'], 'Used' => $gadget_used_armor_bag),
array( 'Name' => $l['bodybags_bag'], 'Wiki' => 'Body_Bag_Case', 'Image' => 'bodybags_bag', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['bodybags_bag-description'], 'Used' => $gadget_used_body_bag),
array( 'Name' => $l['first_aid_kit'], 'Wiki' => 'First_Aid_Kit', 'Image' => 'first_aid_kit', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['first_aid_kit-description'], 'Used' => $gadget_used_first_aid)
);

//Kill Total
//Calculate Totals
$kills_total = 0;
$i=0;
while($weapons_primary[$i] != NULL){
$kills_total = $kills_total + $weapons_primary[$i]['Kills'];
$i++;
}
$i=0;
while($weapons_secondary[$i] != NULL){
$kills_total = $kills_total + $weapons_secondary[$i]['Kills'];
$i++;
}
$i=0;
while($weapons_melee[$i] != NULL){
$kills_total = $kills_total + $weapons_melee[$i]['Kills'];
$i++;
}
$i=0;

//
//Armor
//
$armor = array(
array( 'Name' => $l['level_1'], 'Wiki' => 'Armor#Two-Piece_Suit', 'Image' => 'level_1', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_1-description'],'Used' => $armor_used_level_1, 'Stats' => array(
'Armor' => 20, 'Concealment' => 30, 'Speed' => 37, 'Dodge' => 9, 'Steadiness' => 11, 'Stamina' => 21)),
array( 'Name' => $l['level_2'], 'Wiki' => 'Armor#Lightweight_Ballistic_Vest', 'Image' => 'level_2', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_2-description'], 'Used' => $armor_used_level_2, 'Stats' => array(
'Armor' => 30, 'Concealment' => 26, 'Speed' => 36, 'Dodge' => 5, 'Steadiness' => 11, 'Stamina' => 20)),
array( 'Name' => $l['level_3'], 'Wiki' => 'Armor#Ballistic_Vest', 'Image' => 'level_3', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_3-description'], 'Used' => $armor_used_level_3, 'Stats' => array(
'Armor' => 40, 'Concealment' => 23, 'Speed' => 35, 'Dodge' => 3, 'Steadiness' => 12, 'Stamina' => 19)),
array( 'Name' => $l['level_4'], 'Wiki' => 'Armor#Heavy_Ballistic_Vest', 'Image' => 'level_4', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_4-description'], 'Used' => $armor_used_level_4, 'Stats' => array(
'Armor' => 50, 'Concealment' => 21, 'Speed' => 33, 'Dodge' => -3, 'Steadiness' => 13, 'Stamina' => 18)),
array( 'Name' => $l['level_5'], 'Wiki' => 'Armor#Flak_Jacket', 'Image' => 'level_5', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_5-description'], 'Used' => $armor_used_level_5, 'Stats' => array(
'Armor' => 70, 'Concealment' => 18, 'Speed' => 26, 'Dodge' => -10, 'Steadiness' => 14, 'Stamina' => 17)),
array( 'Name' => $l['level_6'], 'Wiki' => 'Armor#Combined_Tactical_Vest', 'Image' => 'level_6', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_6-description'], 'Used' => $armor_used_level_6, 'Stats' => array(
'Armor' => 90, 'Concealment' => 12, 'Speed' => 23, 'Dodge' => -30, 'Steadiness' => 16, 'Stamina' => 16)),
array( 'Name' => $l['level_7'], 'Wiki' => 'Armor#Improved_Combined_Tactical_Vest', 'Image' => 'level_7', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['level_7-description'], 'Used' => $armor_used_level_7, 'Stats' => array(
'Armor' => 170, 'Concealment' => 1, 'Speed' => 20, 'Dodge' => -50, 'Steadiness' => 22, 'Stamina' => 14))
);
//
//Masks
//
$masks = array(
////Community Group
array( 'Name' => $l['bear'], 'Image' => 'bear', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['bear-description'], 'Used' => $mask_used_bear),
array( 'Name' => $l['heat'], 'Image' => 'heat', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['heat-description'], 'Used' => $mask_used_heat),
array( 'Name' => $l['santa_happy'], 'Image' => 'santa_happy', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['santa_happy-description'], 'Used' => $mask_used_santa_happy),
array( 'Name' => $l['unicorn'], 'Image' => 'unicorn', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['unicorn-description'], 'Used' => $mask_used_unicorn),
array( 'Name' => $l['smiley'], 'Image' => 'smiley', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['smiley-description'], 'Used' => $mask_used_smiley),
array( 'Name' => $l['gumbo'], 'Image' => 'gumbo', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['gumbo-description'], 'Used' => $mask_used_gumbo),
array( 'Name' => $l['stoneface'], 'Image' => 'stoneface', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['stoneface-description'], 'Used' => $mask_used_stoneface),
array( 'Name' => $l['wayfarer'], 'Image' => 'wayfarer', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['wayfarer-description'], 'Used' => $mask_used_wayfarer),
array( 'Name' => $l['crazy_lion'], 'Image' => 'crazy_lion', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['crazy_lion-description'], 'Used' => $mask_used_crazy_lion),
////Alienware Alpha
array( 'Name' => $l['area51'], 'Image' => 'area51', 'Quality' => 'event', 'Extra' => $l['Humble2Pack'], 'Description' => $l['area51-description'], 'Used' => $mask_used_area51),
array( 'Name' => $l['alien_helmet'], 'Image' => 'alien_helmet', 'Quality' => 'event', 'Extra' => $l['Humble2Pack'], 'Description' => $l['alien_helmet-description'], 'Used' => $mask_used_alien_helmet),
////Crimefest
array( 'Name' => $l['combusto'], 'Image' => 'combusto', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['combusto-description'], 'Used' => $mask_used_combusto),
array( 'Name' => $l['spackle'], 'Image' => 'spackle', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['spackle-description'], 'Used' => $mask_used_spackle),
////Lootbag
array( 'Name' => $l['skull'], 'Image' => 'skull', 'Quality' => 'dlc', 'Extra' => $l['lootbagdlc'], 'Description' => $l['skull-description'], 'Used' => $mask_used_skull),
////Merry Soundtrack
array( 'Name' => $l['santa_mad'], 'Image' => 'santa_mad', 'Quality' => 'dlc', 'Extra' => $l['Xmas_soundtrack'], 'Description' => $l['santa_mad-description'], 'Used' => $mask_used_santa_mad),
array( 'Name' => $l['santa_surprise'], 'Image' => 'santa_surprise', 'Quality' => 'dlc', 'Extra' => $l['Xmas_soundtrack'], 'Description' => $l['santa_surprise-description'], 'Used' => $mask_used_santa_surprise),
array( 'Name' => $l['santa_drunk'], 'Image' => 'santa_drunk', 'Quality' => 'dlc', 'Extra' => $l['Xmas_soundtrack'], 'Description' => $l['santa_drunk-description'], 'Used' => $mask_used_santa_drunk),
////Armored Transport
array( 'Name' => $l['nixon'], 'Image' => 'nixon', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Description' => $l['nixon-description'], 'Used' => $mask_used_nixon),
array( 'Name' => $l['clinton'], 'Image' => 'clinton', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Description' => $l['clinton-description'], 'Used' => $mask_used_clinton),
array( 'Name' => $l['bush'], 'Image' => 'bush', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Description' => $l['bush-description'], 'Used' => $mask_used_bush),
array( 'Name' => $l['obama'], 'Image' => 'obama', 'Quality' => 'dlc', 'Extra' => $l['Armored_Transport'], 'Description' => $l['obama-description'], 'Used' => $mask_used_obama),
////Gage Weapon Pack 1
array( 'Name' => $l['pitbull'], 'Image' => 'pitbull', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Description' => $l['pitbull-description'], 'Used' => $mask_used_pitbull),
array( 'Name' => $l['eagle'], 'Image' => 'eagle', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Description' => $l['eagle-description'], 'Used' => $mask_used_eagle),
array( 'Name' => $l['goat'], 'Image' => 'goat', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Description' => $l['goat-description'], 'Used' => $mask_used_goat),
array( 'Name' => $l['panda'], 'Image' => 'panda', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_01'], 'Description' => $l['panda-description'], 'Used' => $mask_used_panda),
////Gage Weapon Pack 2
array( 'Name' => $l['gage_deltaforce'], 'Image' => 'gage_deltaforce', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['gage_deltaforce-description'], 'Used' => $mask_used_gage_deltaforce),
array( 'Name' => $l['cloth_commander'], 'Image' => 'cloth_commander', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['cloth_commander-description'], 'Used' => $mask_used_cloth_commander),
array( 'Name' => $l['gage_blade'], 'Image' => 'gage_blade', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['gage_blade-description'], 'Used' => $mask_used_gage_blade),
array( 'Name' => $l['gage_rambo'], 'Image' => 'gage_rambo', 'Quality' => 'dlc', 'Extra' => $l['Gage_Weapon_Pack_02'], 'Description' => $l['gage_rambo-description'], 'Used' => $mask_used_gage_rambo),
////Gage Sniper
array( 'Name' => $l['robberfly'], 'Image' => 'robberfly', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Description' => $l['robberfly-description'], 'Used' => $mask_used_robberfly),
array( 'Name' => $l['mantis'], 'Image' => 'mantis', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Description' => $l['mantis-description'], 'Used' => $mask_used_mantis),
array( 'Name' => $l['spider'], 'Image' => 'spider', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Description' => $l['spider-description'], 'Used' => $mask_used_spider),
array( 'Name' => $l['wasp'], 'Image' => 'wasp', 'Quality' => 'dlc', 'Extra' => $l['Gage_Sniper_Pack'], 'Description' => $l['wasp-description'], 'Used' => $mask_used_wasp),
////Gage Shotgun
array( 'Name' => $l['orangutang'], 'Image' => 'orangutang', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['orangutang-description'], 'Used' => $mask_used_orangutang),
array( 'Name' => $l['silverback'], 'Image' => 'silverback', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['silverback-description'], 'Used' => $mask_used_silverback),
array( 'Name' => $l['mandril'], 'Image' => 'mandril', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['mandril-description'], 'Used' => $mask_used_mandril),
array( 'Name' => $l['skullmonkey'], 'Image' => 'skullmonkey', 'Quality' => 'dlc', 'Extra' => $l['Gage_Shotgun_Pack'], 'Description' => $l['skullmonkey-description'], 'Used' => $mask_used_skullmonkey),
////Gage Assault Pack
array( 'Name' => $l['crowgoblin'], 'Image' => 'crowgoblin', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['crowgoblin-description'], 'Used' => $mask_used_crowgoblin),
array( 'Name' => $l['evil'], 'Image' => 'evil', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['evil-description'], 'Used' => $mask_used_evil),
array( 'Name' => $l['galax'], 'Image' => 'galax', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['galax-description'], 'Used' => $mask_used_galax),
array( 'Name' => $l['volt'], 'Image' => 'volt', 'Quality' => 'dlc', 'Extra' => $l['Gage_Assault_Pack'], 'Description' => $l['volt-description'], 'Used' => $mask_used_volt),
////Gage Historical Pack
array( 'Name' => $l['churchill'], 'Image' => 'churchill', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['churchill-description'], 'Used' => $mask_used_churchill),
array( 'Name' => $l['de_gaulle'], 'Image' => 'de_gaulle', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['de_gaulle-description'], 'Used' => $mask_used_de_gaulle),
array( 'Name' => $l['patton'], 'Image' => 'patton', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['patton-description'], 'Used' => $mask_used_patton),
array( 'Name' => $l['red_hurricane'], 'Image' => 'red_hurricane', 'Quality' => 'dlc', 'Extra' => $l['Gage_Historical'], 'Description' => $l['red_hurricane-description'], 'Used' => $mask_used_red_hurricane),
////Official Soundtrack
array( 'Name' => $l['tcn'], 'Image' => 'tcn', 'Quality' => 'dlc', 'Extra' => $l['Poetry_jam'], 'Description' => $l['tcn-description'], 'Used' => $mask_used_tcn),
array( 'Name' => $l['metalhead'], 'Image' => 'metalhead', 'Quality' => 'dlc', 'Extra' => $l['Poetry_jam'], 'Description' => $l['metalhead-description'], 'Used' => $mask_used_metalhead),
array( 'Name' => $l['optimist_prime'], 'Image' => 'optimist_prime', 'Quality' => 'dlc', 'Extra' => $l['Poetry_jam'], 'Description' => $l['optimist_prime-description'], 'Used' => $mask_used_optimist_prime),
array( 'Name' => $l['surprise'], 'Image' => 'surprise', 'Quality' => 'dlc', 'Extra' => $l['Poetry_jam'], 'Description' => $l['surprise-description'], 'Used' => $mask_used_surprise),
////Big Bank
array( 'Name' => $l['lincoln'], 'Image' => 'lincoln', 'Quality' => 'dlc', 'Extra' => $l['Big_Bank_Heist'], 'Description' => $l['lincoln-description'], 'Used' => $mask_used_lincoln),
array( 'Name' => $l['grant'], 'Image' => 'grant', 'Quality' => 'dlc', 'Extra' => $l['Big_Bank_Heist'], 'Description' => $l['grant-description'], 'Used' => $mask_used_grant),
array( 'Name' => $l['washington'], 'Image' => 'washington', 'Quality' => 'dlc', 'Extra' => $l['Big_Bank_Heist'], 'Description' => $l['washington-description'], 'Used' => $mask_used_washington),
array( 'Name' => $l['franklin'], 'Image' => 'franklin', 'Quality' => 'dlc', 'Extra' => $l['Big_Bank_Heist'], 'Description' => $l['franklin-description'], 'Used' => $mask_used_franklin),
////Twisted Metal
array( 'Name' => $l['sweettooth'], 'Image' => 'sweettooth', 'Quality' => 'dlc', 'Extra' => $l['Twisted_metal'], 'Description' => $l['sweettooth-description'], 'Used' => $mask_used_needles),
////Halloween 2013
array( 'Name' => $l['frank'], 'Image' => 'frank', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['frank-description'], 'Used' => $mask_used_frank),
array( 'Name' => $l['pumpkin_king'], 'Image' => 'pumpkin_king', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['pumpkin_king-description'], 'Used' => $mask_used_pumpkin_king),
array( 'Name' => $l['venomorph'], 'Image' => 'venomorph', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['venomorph-description'], 'Used' => $mask_used_venomorph),
array( 'Name' => $l['witch'], 'Image' => 'witch', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['witch-description'], 'Used' => $mask_used_witch),
array( 'Name' => $l['baby_angry'], 'Image' => 'baby_angry', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['baby_angry-description'], 'Used' => $mask_used_baby_angry),
array( 'Name' => $l['baby_cry'], 'Image' => 'baby_cry', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['baby_cry-description'], 'Used' => $mask_used_baby_cry),
array( 'Name' => $l['baby_happy'], 'Image' => 'baby_happy', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['baby_happy-description'], 'Used' => $mask_used_baby_happy),
array( 'Name' => $l['brazil_baby'], 'Image' => 'brazil_baby', 'Quality' => 'event', 'Extra' => $l['Halloween'], 'Description' => $l['brazil_baby-description'], 'Used' => $mask_used_brazil_baby),
////Twitch Pack
array( 'Name' => $l['the_one_below'], 'Image' => 'the_one_below', 'Quality' => 'event', 'Extra' => $l['humblehalloween_pack'], 'Description' => $l['the_one_below-description'], 'Used' => $mask_used_the_one_below),
array( 'Name' => $l['werewolf'], 'Image' => 'lycan', 'Quality' => 'event', 'Extra' => $l['humblehalloween_pack'], 'Description' => $l['werewolf-description'], 'Used' => $mask_used_lycan),
////Humble Halloween Pack
array( 'Name' => $l['ancient'], 'Image' => 'ancient', 'Quality' => 'event', 'Extra' => $l['Twitch_pack'], 'Description' => $l['ancient-description'], 'Used' => $mask_used_ancient),
array( 'Name' => $l['twitch_orc'], 'Image' => 'twitch_orc', 'Quality' => 'event', 'Extra' => $l['Twitch_pack'], 'Description' => $l['twitch_orc-description'], 'Used' => $mask_used_twitch_orc),
////Shadow Raid
array( 'Name' => $l['samurai'], 'Image' => 'samurai', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['samurai-description'], 'Used' => $mask_used_samurai),
////Hotline Miami DLC
array( 'Name' => $l['pig'], 'Image' => 'pig', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['pig-description'], 'Used' => $mask_used_pig),
array( 'Name' => $l['white_wolf'], 'Image' => 'white_wolf', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['white_wolf-description'], 'Used' => $mask_used_white_wolf),
array( 'Name' => $l['rabbit'], 'Image' => 'rabbit', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['rabbit-description'], 'Used' => $mask_used_rabbit),
array( 'Name' => $l['owl'], 'Image' => 'owl', 'Quality' => 'dlc', 'Extra' => $l['hotline_miami_dlc'], 'Description' => $l['owl-description'], 'Used' => $mask_used_owl),
////White Xmas
array( 'Name' => $l['krampus'], 'Image' => 'krampus', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['krampus-description'], 'Used' => $mask_used_krampus),
array( 'Name' => $l['mrs_claus'], 'Image' => 'mrs_claus', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['mrs_claus-description'], 'Used' => $mask_used_mrs_claus),
array( 'Name' => $l['strinch'], 'Image' => 'strinch', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['strinch-description'], 'Used' => $mask_used_strinch),
array( 'Name' => $l['robo_santa'], 'Image' => 'robo_santa', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['robo_santa-description'], 'Used' => $mask_used_robo_santa),
array( 'Name' => $l['almirs_beard'], 'Image' => 'almirs_beard', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['almirs_beard-description'], 'Used' => $mask_used_almirs_beard),
////The Diamond
array( 'Name' => $l['cursed_crown'], 'Image' => 'cursed_crown', 'Quality' => 'dlc', 'Extra' => $l['diamondheistdlc'], 'Description' => $l['cursed_crown-description'], 'Used' => $mask_used_cursed_crown),
array( 'Name' => $l['medusa'], 'Image' => 'medusa', 'Quality' => 'dlc', 'Extra' => $l['diamondheistdlc'], 'Description' => $l['medusa-description'], 'Used' => $mask_used_medusa),
array( 'Name' => $l['anubis'], 'Image' => 'anubis', 'Quality' => 'dlc', 'Extra' => $l['diamondheistdlc'], 'Description' => $l['anubis-description'], 'Used' => $mask_used_anubis),
array( 'Name' => $l['pazuzu'], 'Image' => 'pazuzu', 'Quality' => 'dlc', 'Extra' => $l['diamondheistdlc'], 'Description' => $l['pazuzu-description'], 'Used' => $mask_used_pazuzu),
////Clover Character Pack
array( 'Name' => $l['msk_grizel'], 'Image' => 'msk_grizel', 'Quality' => 'dlc', 'Extra' => $l['cloverpack'], 'Description' => $l['msk_grizel-description'], 'Used' => $mask_used_msk_grizel),
array( 'Name' => $l['grizel_clean'], 'Image' => 'grizel_clean', 'Quality' => 'dlc', 'Extra' => $l['cloverpack'], 'Description' => $l['grizel_clean-description'], 'Used' => $mask_used_grizel_clean),
////Bonnie Character Pack
array( 'Name' => $l['bonnie'], 'Image' => 'bonnie', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['bonnie-description'], 'Used' => $mask_used_bonnie),
array( 'Name' => $l['bonnie_begins'], 'Image' => 'bonnie_begins', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['bonnie_begins-description'], 'Used' => $mask_used_bonnie_begins),
////GOTY
array( 'Name' => $l['robo_arnold'], 'Image' => 'robo_arnold', 'Quality' => 'dlc', 'Extra' => $l['weaponbundledlc'], 'Description' => $l['robo_arnold-description'], 'Used' => $mask_used_robo_arnold),
array( 'Name' => $l['nun_town'], 'Image' => 'nun_town', 'Quality' => 'dlc', 'Extra' => $l['heistbundle'], 'Description' => $l['nun_town-description'], 'Used' => $mask_used_nun_town),
array( 'Name' => $l['arch_nemesis'], 'Image' => 'arch_nemesis', 'Quality' => 'dlc', 'Extra' => $l['gotyeddlc'], 'Description' => $l['arch_nemesis-description'], 'Used' => $mask_used_arch_nemesis),
////Champ
array( 'Name' => $l['champion_dallas'], 'Image' => 'champion_dallas', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['champion_dallas-description'], 'Used' => $mask_used_champion_dallas),
////Dragan Char Pack
array( 'Name' => $l['dragan'], 'Image' => 'dragan1', 'Quality' => 'dlc', 'Extra' => $l['draganpack'], 'Description' => $l['dragan-description'], 'Used' => $mask_used_dragan),
array( 'Name' => $l['dragan_begins'], 'Image' => 'dragan_begins', 'Quality' => 'dlc', 'Extra' => $l['draganpack'], 'Description' => $l['dragan_begins-description'], 'Used' => $mask_used_dragan_begins),
////The Bomb
array( 'Name' => $l['butcher'], 'Image' => 'butcher', 'Quality' => 'dlc', 'Extra' => $l['thebombpack'], 'Description' => $l['butcher-description'], 'Used' => $mask_used_butcher),
array( 'Name' => $l['doctor'], 'Image' => 'doctor', 'Quality' => 'dlc', 'Extra' => $l['thebombpack'], 'Description' => $l['doctor-description'], 'Used' => $mask_used_doctor),
array( 'Name' => $l['lady_butcher'], 'Image' => 'lady_butcher', 'Quality' => 'dlc', 'Extra' => $l['thebombpack'], 'Description' => $l['lady_butcher-description'], 'Used' => $mask_used_lady_butcher),
array( 'Name' => $l['tech_lion'], 'Image' => 'tech_lion', 'Quality' => 'dlc', 'Extra' => $l['thebombpack'], 'Description' => $l['tech_lion-description'], 'Used' => $mask_used_tech_lion),
////Overkill Pack
array( 'Name' => $l['the_overkill_mask'], 'Image' => 'the_overkill_mask', 'Quality' => 'dlc', 'Extra' => $l['overkillpack'], 'Description' => $l['the_overkill_mask-description'], 'Used' => $mask_used_the_overkill_mask),
array( 'Name' => $l['dallas_glow'], 'Image' => 'dallas_glow', 'Quality' => 'dlc', 'Extra' => $l['compoverkillpack'], 'Description' => $l['dallas_glow-description'], 'Used' => $mask_used_dallas_glow),
array( 'Name' => $l['chains_glow'], 'Image' => 'chains_glow', 'Quality' => 'dlc', 'Extra' => $l['compoverkillpack'], 'Description' => $l['chains_glow-description'], 'Used' => $mask_used_chains_glow),
array( 'Name' => $l['hoxton_glow'], 'Image' => 'hoxton_glow', 'Quality' => 'dlc', 'Extra' => $l['compoverkillpack'], 'Description' => $l['hoxton_glow-description'], 'Used' => $mask_used_hoxton_glow),
array( 'Name' => $l['wolf_glow'], 'Image' => 'wolf_glow', 'Quality' => 'dlc', 'Extra' => $l['compoverkillpack'], 'Description' => $l['wolf_glow-description'], 'Used' => $mask_used_wolf_glow),
////Deathwish
array( 'Name' => $l['skullhard'], 'Image' => 'skullhard', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['skullhard-description'], 'Used' => $mask_used_skullhard),
array( 'Name' => $l['skullveryhard'], 'Image' => 'skullveryhard', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['skullveryhard-description'], 'Used' => $mask_used_skullveryhard),
array( 'Name' => $l['skulloverkill'], 'Image' => 'skulloverkill', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['skulloverkill-description'], 'Used' => $mask_used_skulloverkill),
array( 'Name' => $l['skulloverkillplus'], 'Image' => 'skulloverkillplus', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['skulloverkillplus-description'], 'Used' => $mask_used_skulloverkillplus),
////Hoxton Revenge
array( 'Name' => $l['hectors_helmet'], 'Image' => 'hectors_helmet', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['hectors_helmet-description'], 'Used' => $mask_used_hectors_helmet),
array( 'Name' => $l['old_hoxton_begins'], 'Image' => 'old_hoxton_begins', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['old_hoxton_begins-description'], 'Used' => $mask_used_old_hoxton_begins),
////Infamy
array( 'Name' => $l['aviator'], 'Image' => 'aviator', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['aviator-description'], 'Used' => $mask_used_aviator),
array( 'Name' => $l['plague'], 'Image' => 'plague', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['plague-description'], 'Used' => $mask_used_plague),
array( 'Name' => $l['welder'], 'Image' => 'welder', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['welder-description'], 'Used' => $mask_used_welder),
array( 'Name' => $l['smoker'], 'Image' => 'smoker', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['smoker-description'], 'Used' => $mask_used_smoker),
array( 'Name' => $l['spectre'], 'Image' => 'ghost', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['spectre-description'], 'Used' => $mask_used_ghost),
array( 'Name' => $l['daft'], 'Image' => 'daft', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['daft-description'], 'Used' => $mask_used_daft),
array( 'Name' => $l['destroyer'], 'Image' => 'destroyer', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['destroyer-description'], 'Used' => $mask_used_destroyer),
array( 'Name' => $l['balaclava'], 'Image' => 'balaclava', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['balaclava-description'], 'Used' => $mask_used_balaclava),
array( 'Name' => $l['infamy_hood'], 'Image' => 'infamy_hood', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['infamy_hood-description'], 'Used' => $mask_used_infamy_hood),
array( 'Name' => $l['infamy_lurker'], 'Image' => 'infamy_lurker', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['infamy_lurker-description'], 'Used' => $mask_used_infamy_lurker),
array( 'Name' => $l['pain'], 'Image' => 'pain', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['pain-description'], 'Used' => $mask_used_pain),
array( 'Name' => $l['punk'], 'Image' => 'punk', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['punk-description'], 'Used' => $mask_used_punk),
array( 'Name' => $l['ranger'], 'Image' => 'ranger', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['ranger-description'], 'Used' => $mask_used_ranger),
////Infamous
array( 'Name' => $l['dallas'], 'Image' => 'dallas', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['dallas-description'], 'Used' => $mask_used_dallas),
array( 'Name' => $l['chains'], 'Image' => 'chains', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['chains-description'], 'Used' => $mask_used_chains),
array( 'Name' => $l['hoxton'], 'Image' => 'hoxton', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['hoxton-description'], 'Used' => $mask_used_hoxton),
array( 'Name' => $l['wolf'], 'Image' => 'wolf', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['wolf-description'], 'Used' => $mask_used_wolf),
array( 'Name' => $l['dallas_clean'], 'Image' => 'dallas_clean', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['dallas_clean-description'], 'Used' => $mask_used_dallas_clean),
array( 'Name' => $l['chains_clean'], 'Image' => 'chains_clean', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['chains_clean-description'], 'Used' => $mask_used_chains_clean),
array( 'Name' => $l['hoxton_clean'], 'Image' => 'hoxton_clean', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['hoxton_clean-description'], 'Used' => $mask_used_hoxton_clean),
array( 'Name' => $l['wolf_clean'], 'Image' => 'wolf_clean', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['wolf_clean-description'], 'Used' => $mask_used_wolf_clean),
array( 'Name' => $l['anonymous'], 'Image' => 'anonymous', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['anonymous-description'] , 'Used' => $mask_used_anonymous),
array( 'Name' => $l['cthulhu'], 'Image' => 'cthulhu', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['cthulhu-description'], 'Used' => $mask_used_cthulhu),
array( 'Name' => $l['dillinger_death_mask'], 'Image' => 'dillinger_death_mask', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['dillinger_death_mask-description'], 'Used' => $mask_used_dillinger_death_mask),
array( 'Name' => $l['grin'], 'Image' => 'grin', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['grin-description'], 'Used' => $mask_used_grin),
array( 'Name' => $l['old_hoxton'], 'Image' => 'old_hoxton', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['old_hoxton-description'], 'Used' => $mask_used_old_hoxton),
////AK/CAR Pack
array( 'Name' => $l['carnotaurus'], 'Image' => 'carnotaurus', 'Quality' => 'dlc', 'Extra' => $l['akcarmodpack'], 'Description' => $l['carnotaurus-description'], 'Used' => $mask_used_carnotaurus),
array( 'Name' => $l['pachy'], 'Image' => 'pachy', 'Quality' => 'dlc', 'Extra' => $l['akcarmodpack'], 'Description' => $l['pachy-description'], 'Used' => $mask_used_pachy),
array( 'Name' => $l['triceratops'], 'Image' => 'triceratops', 'Quality' => 'dlc', 'Extra' => $l['akcarmodpack'], 'Description' => $l['triceratops-description'], 'Used' => $mask_used_triceratops),
array( 'Name' => $l['velociraptor'], 'Image' => 'velociraptor', 'Quality' => 'dlc', 'Extra' => $l['akcarmodpack'], 'Description' => $l['velociraptor-description'], 'Used' => $mask_used_velociraptor),
////BBQ Pack
array( 'Name' => $l['chef_hat'], 'Image' => 'chef_hat', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['chef_hat-description'], 'Used' => $mask_used_chef_hat),
array( 'Name' => $l['firedemon'], 'Image' => 'firedemon', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['firedemon-description'], 'Used' => $mask_used_firedemon),
array( 'Name' => $l['firemask'], 'Image' => 'firemask', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['firemask-description'], 'Used' => $mask_used_firemask),
array( 'Name' => $l['gasmask'], 'Image' => 'gasmask', 'Quality' => 'dlc', 'Extra' => $l['bbq'], 'Description' => $l['gasmask-description'], 'Used' => $mask_used_gasmask),
////Western Pack
array( 'Name' => $l['bandit'], 'Image' => 'bandit', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['bandit-description'], 'Used' => $mask_used_bandit),
array( 'Name' => $l['bullskull'], 'Image' => 'bullskull', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['bullskull-description'], 'Used' => $mask_used_bullskull),
array( 'Name' => $l['kangee'], 'Image' => 'kangee', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['kangee-description'], 'Used' => $mask_used_kangee),
array( 'Name' => $l['lone'], 'Image' => 'lone', 'Quality' => 'dlc', 'Extra' => $l['westpack'], 'Description' => $l['lone-description'], 'Used' => $mask_used_lone),
////Meltdown
array( 'Name' => $l['grendel'], 'Image' => 'grendel', 'Quality' => 'infamous', 'Extra' => 'Infamous', 'Description' => $l['grendel-description'], 'Used' => $mask_used_grendel),
//////Collaboration
////Hotline Miami Game
array( 'Name' => $l['panther'], 'Image' => 'panther', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami'], 'Description' => $l['panther-description'], 'Used' => $mask_used_panther),
array( 'Name' => $l['horse'], 'Image' => 'horse', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami'], 'Description' => $l['horse-description'], 'Used' => $mask_used_horse),
array( 'Name' => $l['rooster'], 'Image' => 'rooster', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami'], 'Description' => $l['rooster-description'], 'Used' => $mask_used_rooster),
array( 'Name' => $l['tiger'], 'Image' => 'tiger', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami'], 'Description' => $l['tiger-description'], 'Used' => $mask_used_tiger),
////Hotline Miami 2 Game
array( 'Name' => $l['alex'], 'Image' => 'alex', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2'], 'Description' => $l['alex-description'], 'Used' => $mask_used_alex),
array( 'Name' => $l['biker'], 'Image' => 'biker', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2'], 'Description' => $l['biker-description'], 'Used' => $mask_used_biker),
array( 'Name' => $l['corey'], 'Image' => 'corey', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2'], 'Description' => $l['corey-description'], 'Used' => $mask_used_corey),
array( 'Name' => $l['jake'], 'Image' => 'jake', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2'], 'Description' => $l['jake-description'], 'Used' => $mask_used_jake),
array( 'Name' => $l['richter'], 'Image' => 'richter', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2'], 'Description' => $l['richter-description'], 'Used' => $mask_used_richter),
array( 'Name' => $l['tonys_revenge'], 'Image' => 'tonys_revenge', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2'], 'Description' => $l['tonys_revenge-description'], 'Used' => $mask_used_tonys_revenge),
////Hotline Miami 2 Deluxe Game
array( 'Name' => $l['richard_begins'], 'Image' => 'richard_begins', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2_deluxe'], 'Description' => $l['richard_begins-description'], 'Used' => $mask_used_richard_begins),
array( 'Name' => $l['richard_returns'], 'Image' => 'richard_returns', 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2_deluxe'], 'Description' => $l['richard_returns-description'], 'Used' => $mask_used_richard_returns),
////Speedrunner
array( 'Name' => $l['falcon'], 'Image' => 'falcon', 'Quality' => 'collaboration', 'Extra' => $l['speedrunnersdlc'], 'Description' => $l['falcon-description'], 'Used' => $mask_used_falcon),
array( 'Name' => $l['hothead'], 'Image' => 'hothead', 'Quality' => 'collaboration', 'Extra' => $l['speedrunnersdlc'], 'Description' => $l['hothead-description'], 'Used' => $mask_used_hothead),
array( 'Name' => $l['speedrunner'], 'Image' => 'speedrunner', 'Quality' => 'collaboration', 'Extra' => $l['speedrunnersdlc'], 'Description' => $l['speedrunner-description'], 'Used' => $mask_used_speedrunner),
array( 'Name' => $l['unic'], 'Image' => 'unic', 'Quality' => 'collaboration', 'Extra' => $l['speedrunnersdlc'], 'Description' => $l['unic-description'], 'Used' => $mask_used_unic),
//////Collaboration End
////Normal
array( 'Name' => $l['alienware'], 'Image' => 'alienware', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['alienware-description'], 'Used' => $mask_used_alienware),
array( 'Name' => $l['babyrhino'], 'Image' => 'babyrhino', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['babyrhino-description'], 'Used' => $mask_used_babyrhino),
array( 'Name' => $l['biglips'], 'Image' => 'biglips', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['biglips-description'], 'Used' => $mask_used_biglips),
array( 'Name' => $l['mr_sinister'], 'Image' => 'mr_sinister', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['mr_sinister-description'], 'Used' => $mask_used_mr_sinister),
array( 'Name' => $l['brainiack'], 'Image' => 'brainiack', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['brainiack-description'], 'Used' => $mask_used_brainiack),
array( 'Name' => $l['bullet'], 'Image' => 'bullet', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['bullet-description'], 'Used' => $mask_used_bullet),
array( 'Name' => $l['day_of_the_dead'], 'Image' => 'day_of_the_dead', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['day_of_the_dead-description'], 'Used' => $mask_used_day_of_the_dead),
array( 'Name' => $l['outlandish_a'], 'Image' => 'outlandish_a', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['outlandish_a-description'], 'Used' => $mask_used_outlandish_a),
array( 'Name' => $l['clowncry'], 'Image' => 'clowncry', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['clowncry-description'], 'Used' => $mask_used_clowncry),
array( 'Name' => $l['dripper'], 'Image' => 'dripper', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['dripper-description'], 'Used' => $mask_used_dripper),
array( 'Name' => $l['irondoom'], 'Image' => 'irondoom', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['irondoom-description'], 'Used' => $mask_used_irondoom),
array( 'Name' => $l['gagball'], 'Image' => 'gagball', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['gagball-description'], 'Used' => $mask_used_gagball),
array( 'Name' => $l['greek_tragedy'], 'Image' => 'greek_tragedy', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['greek_tragedy-description'], 'Used' => $mask_used_greek_tragedy),
array( 'Name' => $l['hockey'], 'Image' => 'hockey', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['hockey-description'], 'Used' => $mask_used_hockey),
array( 'Name' => $l['hog'], 'Image' => 'hog', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['hog-description'], 'Used' => $mask_used_hog),
array( 'Name' => $l['demon'], 'Image' => 'demon', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['demon-description'], 'Used' => $mask_used_demon),
array( 'Name' => $l['jaw'], 'Image' => 'jaw', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['jaw-description'], 'Used' => $mask_used_jaw),
array( 'Name' => $l['kawaii'], 'Image' => 'kawaii', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['kawaii-description'], 'Used' => $mask_used_kawaii),
array( 'Name' => $l['demonictender'], 'Image' => 'demonictender', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['demonictender-description'], 'Used' => $mask_used_demonictender),
array( 'Name' => $l['rubber_male'], 'Image' => 'rubber_male', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['rubber_male-description'], 'Used' => $mask_used_rubber_male),
array( 'Name' => $l['rubber_female'], 'Image' => 'rubber_female', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['rubber_female-description'], 'Used' => $mask_used_rubber_female),
array( 'Name' => $l['scarecrow'], 'Image' => 'scarecrow', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['scarecrow-description'], 'Used' => $mask_used_scarecrow),
array( 'Name' => $l['tounge'], 'Image' => 'tounge', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['tounge-description'], 'Used' => $mask_used_tounge),
array( 'Name' => $l['monkeybiss'], 'Image' => 'monkeybiss', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['monkeybiss-description'], 'Used' => $mask_used_monkeybiss),
array( 'Name' => $l['mummy'], 'Image' => 'mummy', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['mummy-description'], 'Used' => $mask_used_mummy),
array( 'Name' => $l['oni'], 'Image' => 'oni', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['oni-description'], 'Used' => $mask_used_oni),
array( 'Name' => $l['outlandish_b'], 'Image' => 'outlandish_b', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['outlandish_b-description'], 'Used' => $mask_used_outlandish_b),
array( 'Name' => $l['outlandish_c'], 'Image' => 'outlandish_c', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['outlandish_c-description'], 'Used' => $mask_used_outlandish_c),
array( 'Name' => $l['stonekisses'], 'Image' => 'stonekisses', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['stonekisses-description'], 'Used' => $mask_used_stonekisses),
array( 'Name' => $l['buha'], 'Image' => 'buha', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['buha-description'], 'Used' => $mask_used_buha),
array( 'Name' => $l['shogun'], 'Image' => 'shogun', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['shogun-description'], 'Used' => $mask_used_shogun),
array( 'Name' => $l['shrunken'], 'Image' => 'shrunken', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['shrunken-description'], 'Used' => $mask_used_shrunken),
array( 'Name' => $l['clown_56'], 'Image' => 'clown_56', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['clown_56-description'], 'Used' => $mask_used_clown_56),
array( 'Name' => $l['troll'], 'Image' => 'troll', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['troll-description'], 'Used' => $mask_used_troll),
array( 'Name' => $l['dawn_of_the_dead'], 'Image' => 'dawn_of_the_dead', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['dawn_of_the_dead-description'], 'Used' => $mask_used_dawn_of_the_dead),
array( 'Name' => $l['vampire'], 'Image' => 'vampire', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['vampire-description'], 'Used' => $mask_used_vampire),
array( 'Name' => $l['zipper'], 'Image' => 'zipper', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['zipper-description'], 'Used' => $mask_used_zipper),
array( 'Name' => $l['zombie'], 'Image' => 'zombie', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['zombie-description'], 'Used' => $mask_used_zombie),
array( 'Name' => $l['jw_shades'], 'Image' => 'jw_shades', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['jw_shades-description'], 'Used' => $mask_used_jw_shades),
////Car Shop Heist
array( 'Name' => $l['simpson'], 'Image' => 'simpson', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['simpson-description'], 'Used' => $mask_used_simpson),
////Default Masks
array( 'Name' => $l['pref'], 'Image' => 'pref', 'Quality' => 'normal', 'Extra' => 'Normal', 'Description' => $l['pref-description'], 'Used' => $mask_used_character_locked),
////Future Content
array( 'Name' => $l['twister'], 'Image' => 'twister', 'Quality' => 'community', 'Extra' => 'Community', 'Description' => $l['twister-description'], 'Used' => $mask_used_twister),
////Thespian Mask Pack
array( 'Name' => $l['thespian'], 'Image' => 'thespian', 'Quality' => 'dlc', 'Extra' => $l['thespiandlc'], 'Description' => $l['thespian-description'], 'Used' => $mask_used_thespian)
);

//
//Heists
//
$heists = array(
array( 'Name' => $l['frame'], 'Wiki' => 'Framing_Frame', 'Image' => 'frame', 'Win' => $contract_framing_frame_win, 'Dropin' => $contract_framing_frame_win_dropin, 'Fail' => $contract_framing_frame_fail, 'Quality' => 'normal', 'deathwish' => $death_35),
array( 'Name' => $l['dogs'], 'Wiki' => 'Watchdogs', 'Image' => 'dogs', 'Win' => $contract_watchdogs_win, 'Dropin' => $contract_watchdogs_win_dropin, 'Fail' => $contract_watchdogs_fail, 'Quality' => 'normal', 'deathwish' => $death_34),
array( 'Name' => $l['dogs'].' '.$l['nightsuffix'], 'Wiki' => 'Watchdogs', 'Image' => 'dogs_n', 'Win' => $contract_watchdogs_night_win, 'Dropin' => $contract_watchdogs_night_win_dropin, 'Fail' => $contract_watchdogs_night_fail, 'Quality' => 'normal', 'deathwish' => $death_34),
array( 'Name' => $l['fire'], 'Wiki' => 'Firestarter', 'Image' => 'fire', 'Win' => $contract_firestarter_win, 'Dropin' => $contract_firestarter_win_dropin, 'Fail' => $contract_firestarter_fail, 'Quality' => 'normal', 'deathwish' => $death_32),
array( 'Name' => $l['rats'], 'Wiki' => 'Rats', 'Image' => 'rats', 'Win' => $contract_alex_win, 'Dropin' => $contract_alex_win_dropin, 'Fail' => $contract_alex_fail, 'Quality' => 'normal', 'deathwish' => $death_33),
array( 'Name' => $l['election'], 'Wiki' => 'Election_Day', 'Image' => 'election', 'Win' => $contract_election_day_win, 'Dropin' => $contract_election_day_win_dropin, 'Fail' => $contract_election_day_fail, 'Quality' => 'normal', 'deathwish' => $bob_9),
array( 'Name' => $l['fourstores'], 'Wiki' => 'Four_Stores', 'Image' => 'fourstores', 'Win' => $contract_four_stores_win, 'Dropin' => $contract_four_stores_win_dropin, 'Fail' => $contract_four_stores_fail, 'Quality' => 'normal', 'deathwish' => $death_3),
array( 'Name' => $l['nightclub'], 'Wiki' => 'Nightclub', 'Image' => 'nightclub', 'Win' => $contract_nightclub_win, 'Dropin' => $contract_nightclub_win_dropin, 'Fail' => $contract_nightclub_fail, 'Quality' => 'normal', 'deathwish' => $death_4),
array( 'Name' => $l['mallcrasher'], 'Wiki' => 'Mallcrasher', 'Image' => 'mallcrasher', 'Win' => $contract_mallcrasher_win, 'Dropin' => $contract_mallcrasher_win_dropin, 'Fail' => $contract_mallcrasher_fail, 'Quality' => 'normal', 'deathwish' => $death_2),
array( 'Name' => $l['diamond-store'], 'Wiki' => 'Diamond_Store', 'Image' => 'diamond-store', 'Win' => $contract_family_win, 'Dropin' => $contract_family_win_dropin, 'Fail' => $contract_family_fail, 'Quality' => 'normal', 'deathwish' => $death_14),
array( 'Name' => $l['shadowraid'], 'Wiki' => 'Shadow_Raid', 'Image' => 'shadowraid', 'Win' => $contract_kosugi_win, 'Dropin' => $contract_kosugi_win_dropin, 'Fail' => $contract_kosugi_fail, 'Quality' => 'normal', 'deathwish' => $kosugi_6),
array( 'Name' => $l['bank-deposit'], 'Wiki' => 'Bank_Heist', 'Image' => 'bank', 'Win' => $contract_branchbank_deposit_win, 'Dropin' => $contract_branchbank_deposit_win_dropin, 'Fail' => $contract_branchbank_deposit_fail, 'Quality' => 'normal', 'deathwish' => $death_19),
array( 'Name' => $l['bank-cash'], 'Wiki' => 'Bank_Heist', 'Image' => 'bank', 'Win' => $contract_branchbank_cash_win, 'Dropin' => $contract_branchbank_cash_win_dropin, 'Fail' => $contract_branchbank_cash_fail, 'Quality' => 'normal', 'deathwish' => $death_18),
array( 'Name' => $l['go-bank'], 'Wiki' => 'GO_Bank', 'Image' => 'go-bank', 'Win' => $contract_roberts_win, 'Dropin' => $contract_roberts_win_dropin, 'Fail' => $contract_roberts_fail, 'Quality' => 'normal', 'deathwish' => $death_15),
array( 'Name' => $l['big-bank'], 'Wiki' => 'Big_Bank', 'Image' => 'big-bank', 'Win' => $contract_big_win, 'Dropin' => $contract_big_win_dropin, 'Fail' => $contract_big_fail, 'Quality' => 'dlc', 'deathwish' => $bigbank_9),
array( 'Name' => $l['jewelry-store'], 'Wiki' => 'Jewelry_Store', 'Image' => 'jewelry-store', 'Win' => $contract_jewelry_store_win, 'Dropin' => $contract_jewelry_store_win_dropin, 'Fail' => $contract_jewelry_store_fail, 'Quality' => 'normal', 'deathwish' => $death_13),
array( 'Name' => $l['transport-harbor'], 'Wiki' => 'Armored_Transport', 'Image' => 'transport-harbor', 'Win' => $contract_arm_fac_win, 'Dropin' => $contract_arm_fac_win_dropin, 'Fail' => $contract_arm_fac_fail, 'Quality' => 'dlc', 'deathwish' => $death_22),
array( 'Name' => $l['transport-park'], 'Wiki' => 'Armored_Transport', 'Image' => 'transport-park', 'Win' => $contract_arm_par_win, 'Dropin' => $contract_arm_par_win_dropin, 'Fail' => $contract_arm_par_fail, 'Quality' => 'dlc', 'deathwish' => $death_23),
array( 'Name' => $l['transport-downtown'], 'Wiki' => 'Armored_Transport', 'Image' => 'transport-downtown', 'Win' => $contract_arm_hcm_win, 'Dropin' => $contract_arm_hcm_win_dropin, 'Fail' => $contract_arm_hcm_fail, 'Quality' => 'dlc', 'deathwish' => $death_21),
array( 'Name' => $l['transport-underpass'], 'Wiki' => 'Armored_Transport', 'Image' => 'transport-underpass', 'Win' => $contract_arm_und_win, 'Dropin' => $contract_arm_und_win_dropin, 'Fail' => $contract_arm_und_fail, 'Quality' => 'dlc', 'deathwish' => $death_24),
array( 'Name' => $l['transport-crossroads'], 'Wiki' => 'Armored_Transport', 'Image' => 'transport-crossroads', 'Win' => $contract_arm_cro_win, 'Dropin' => $contract_arm_cro_win_dropin, 'Fail' => $contract_arm_cro_fail, 'Quality' => 'dlc', 'deathwish' => $death_20),
array( 'Name' => $l['nightmare'], 'Wiki' => 'Safe_House_Nightmare', 'Image' => 'nightmare', 'Win' => $contract_haunted_win, 'Dropin' => $contract_haunted_win_dropin, 'Fail' => $contract_haunted_fail, 'Quality' => 'event', 'deathwish' => $halloween_nightmare_5),
array( 'Name' => $l['election'].' '.$l['pro'], 'Wiki' => 'Election_Day', 'Image' => 'election', 'Win' => $contract_election_day_prof_win, 'Dropin' => $contract_election_day_prof_win_dropin, 'Fail' => $contract_election_day_prof_fail, 'Quality' => 'normal', 'deathwish' => $bob_2),
array( 'Name' => $l['dogs'].' '.$l['pro'], 'Wiki' => 'Watchdogs', 'Image' => 'dogs', 'Win' => $contract_watchdogs_prof_win, 'Dropin' => $contract_watchdogs_prof_win_dropin, 'Fail' => $contract_watchdogs_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_6),
array( 'Name' => $l['dogs'].' '.$l['nightsuffix'].' '.$l['pro'], 'Wiki' => 'Watchdogs', 'Image' => 'dogs_n', 'Win' => $contract_watchdogs_night_prof_win, 'Dropin' => $contract_watchdogs_night_prof_win_dropin, 'Fail' => $contract_watchdogs_night_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_6),
array( 'Name' => $l['fire'].' '.$l['pro'], 'Wiki' => 'Firestarter', 'Image' => 'fire', 'Win' => $contract_firestarter_prof_win, 'Dropin' => $contract_firestarter_prof_win_dropin, 'Fail' => $contract_firestarter_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_8),
array( 'Name' => $l['rats'].' '.$l['pro'], 'Wiki' => 'Rats', 'Image' => 'rats', 'Win' => $contract_alex_prof_win, 'Dropin' => $contract_alex_prof_win_dropin, 'Fail' => $contract_alex_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_7),
array( 'Name' => $l['big-oil'].' '.$l['pro'], 'Wiki' => 'Big_Oil', 'Image' => 'big-oil', 'Win' => $contract_welcome_to_the_jungle_prof_win, 'Dropin' => $contract_welcome_to_the_jungle_prof_win_dropin, 'Fail' => $contract_welcome_to_the_jungle_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_11),
array( 'Name' => $l['big-oil'].' '.$l['nightsuffix'].' '.$l['pro'], 'Wiki' => 'Big_Oil', 'Image' => 'big-oil_n', 'Win' => $contract_welcome_to_the_jungle_night_prof_win, 'Dropin' => $contract_welcome_to_the_jungle_night_prof_win_dropin, 'Fail' => $contract_welcome_to_the_jungle_night_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_11),
array( 'Name' => $l['frame'].' '.$l['pro'], 'Wiki' => 'Framing_Frame', 'Image' => 'frame', 'Win' => $contract_framing_frame_prof_win, 'Dropin' => $contract_framing_frame_prof_win_dropin, 'Fail' => $contract_framing_frame_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_10),
array( 'Name' => $l['ukrainian'].' '.$l['pro'], 'Wiki' => 'Ukrainian_Job', 'Image' => 'ukrainian', 'Win' => $contract_ukrainian_job_prof_win, 'Dropin' => $contract_ukrainian_job_prof_win_dropin, 'Fail' => $contract_ukrainian_job_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_1),
array( 'Name' => $l['bank'].' '.$l['pro'], 'Wiki' => 'Bank_Heist', 'Image' => 'bank', 'Win' => $contract_branchbank_prof_win, 'Dropin' => $contract_branchbank_prof_win_dropin, 'Fail' => $contract_branchbank_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_16),
array( 'Name' => $l['bank-gold'].' '.$l['pro'], 'Wiki' => 'Bank_Heist', 'Image' => 'bank', 'Win' => $contract_branchbank_gold_prof_win, 'Dropin' => $contract_branchbank_gold_prof_win_dropin, 'Fail' => $contract_branchbank_gold_prof_fail, 'Quality' => 'normal', 'deathwish' => $death_17),
array( 'Name' => $l['hotline'], 'Wiki' => 'Hotline_Miami', 'Image' => 'mia', 'Win' => $contract_mia_win, 'Dropin' => $contract_mia_win_dropin, 'Fail' => $contract_mia_fail, 'Quality' => 'dlc', 'deathwish' => $pig_1),
array( 'Name' => $l['hotline'].' '.$l['pro'], 'Wiki' => 'Hotline_Miami', 'Image' => 'mia', 'Win' => $contract_mia_prof_win, 'Dropin' => $contract_mia_prof_win_dropin, 'Fail' => $contract_mia_prof_fail, 'Quality' => 'dlc', 'deathwish' => $pig_6),
array( 'Name' => $l['artgallery'], 'Wiki' => 'Art_Gallery', 'Image' => 'artgallery', 'Win' => $contract_gallery_win, 'Dropin' => $contract_gallery_win_dropin, 'Fail' => $contract_gallery_fail, 'Quality' => 'community', 'deathwish' => $squek),
array( 'Name' => $l['hoxtonbreakout'], 'Wiki' => 'Hoxton_Breakout', 'Image' => 'hoxtonbreakout', 'Win' => $contract_hox_win, 'Dropin' => $contract_hox_win_dropin, 'Fail' => $contract_hox_fail, 'Quality' => 'community', 'deathwish' => $bulldog_2),
array( 'Name' => $l['hoxtonbreakout'].' '.$l['pro'], 'Wiki' => 'Hoxton_Breakout', 'Image' => 'hoxtonbreakout', 'Win' => $contract_hox_prof_win, 'Dropin' => $contract_hox_prof_win_dropin, 'Fail' => $contract_hox_prof_fail, 'Quality' => 'community', 'deathwish' => $bulldog_3),
array( 'Name' => $l['pines'], 'Wiki' => 'White_Xmas', 'Image' => 'pines', 'Win' => $contract_pines_win, 'Dropin' => $contract_pines_win_dropin, 'Fail' => $contract_pines_fail, 'Quality' => 'normal', 'deathwish' => $deer_5),
array( 'Name' => $l['crojob1'], 'Wiki' => 'The_Bomb:_Dockyard', 'Image' => 'crojob1', 'Win' => $contract_crojob1_win, 'Dropin' => $contract_crojob1_win_dropin, 'Fail' => $contract_crojob1_fail, 'Quality' => 'dlc', 'deathwish' => $cow_7),
array( 'Name' => $l['crojob2'], 'Wiki' => 'The_Bomb:_Forest', 'Image' => 'crojob2', 'Win' => $contract_crojob2_win, 'Dropin' => $contract_crojob2_win_dropin, 'Fail' => $contract_crojob2_fail, 'Quality' => 'dlc', 'deathwish' => $cow_2),
array( 'Name' => $l['mus'], 'Wiki' => 'The_Diamond', 'Image' => 'mus', 'Win' => $contract_mus_win, 'Dropin' => $contract_mus_win_dropin, 'Fail' => $contract_mus_fail, 'Quality' => 'dlc', 'deathwish' => $bat_1),
array( 'Name' => $l['cookoff'], 'Wiki' => 'Cook_Off', 'Image' => 'rat', 'Win' => $contract_rat_win, 'Dropin' => $contract_rat_win_dropin, 'Fail' => $contract_rat_fail, 'Quality' => 'community', 'deathwish' => $djur_1),
array( 'Name' => $l['transp-train'], 'Wiki' => 'Train', 'Image' => 'train', 'Win' => $contract_arm_for_win, 'Dropin' => $contract_arm_for_win_dropin, 'Fail' => $contract_arm_for_fail, 'Quality' => 'dlc', 'deathwish' => $I_AM_ERROR),
array( 'Name' => $l['carshop'], 'Wiki' => 'Car_Shop', 'Image' => 'carshop', 'Win' => $contract_cage_win, 'Dropin' => $contract_cage_win_dropin, 'Fail' => $contract_cage_fail, 'Quality' => 'community', 'deathwish' => $fort_1),
array( 'Name' => $l['hoxtonrevenge'], 'Wiki' => 'Hoxton_Revenge', 'Image' => 'revenge', 'Win' => $contract_hox_3_win, 'Dropin' => $contract_hox_3_win_dropin, 'Fail' => $contract_hox_3_fail, 'Quality' => 'community', 'deathwish' => $payback_1),
array( 'Name' => $l['shoutout_raid'], 'Wiki' => 'Meltdown', 'Image' => 'meltdown', 'Win' => $contract_shoutout_raid_win, 'Dropin' => $contract_shoutout_raid_win_dropin, 'Fail' => $contract_shoutout_raid_fail, 'Quality' => 'normal', 'deathwish' => $melt_1)
);

//Calculate Totals
$win_total = 0;
$dropin_total = 0;
$fail_total = 0;
$i = 0;
while($heists[$i] != NULL){
$win_total = $win_total + $heists[$i]['Win'];
$dropin_total = $dropin_total + $heists[$i]['Dropin'];
$fail_total = $fail_total + $heists[$i]['Fail'];
$i++;
}


//
//Escapes
//
$escape = array(
array( 'Name' => $l['escapeparknight'], 'Wiki' => 'Park', 'Image' => 'escapeparknight', 'Quality' => 'normal', 'Total' => $level_escape_park ),
array( 'Name' => $l['escapeparkday'], 'Wiki' => 'Park', 'Image' => 'escapeparkday', 'Quality' => 'normal', 'Total' => $level_escape_park_day ),
array( 'Name' => $l['escapecafenight'], 'Wiki' => 'Cafe', 'Image' => 'escapecafenight', 'Quality' => 'normal', 'Total' => $level_escape_cafe ),
array( 'Name' => $l['escapecafeday'], 'Wiki' => 'Cafe', 'Image' => 'escapecafeday', 'Quality' => 'normal', 'Total' => $level_escape_cafe_day ),
array( 'Name' => $l['escapestreet'], 'Wiki' => 'Street', 'Image' => 'escapestreet', 'Quality' => 'normal', 'Total' => $level_escape_street ),
array( 'Name' => $l['escapeoverpass'], 'Wiki' => 'Overpass', 'Image' => 'escapeoverpass', 'Quality' => 'normal', 'Total' => $level_escape_overpass ),
array( 'Name' => $l['escapegarage'], 'Wiki' => 'Garage', 'Image' => 'escapegarage', 'Quality' => 'normal', 'Total' => $level_escape_garage )
);

//
//Perk Deck
//
$deck_crew_chief = array(
array( 'Name' => $l['perk-crew-chief-1'], 'Image' => 'perk_health3', 'Description' => $l['perk-crew-chief-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-crew-chief-2'], 'Image' => 'perk_runningman', 'Description' => $l['perk-crew-chief-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-crew-chief-3'], 'Image' => 'perk_health5', 'Description' => $l['perk-crew-chief-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-crew-chief-4'], 'Image' => 'perk_armor1', 'Description' => $l['perk-crew-chief-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-crew-chief-5'], 'Image' => 'perk_hostagelove', 'Description' => $l['perk-crew-chief-5-desc'])
);

$deck_muscle = array(
array( 'Name' => $l['perk-muscle-1'], 'Image' => 'perk_health3', 'Description' => $l['perk-muscle-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-muscle-2'], 'Image' => 'perk_meat', 'Description' => $l['perk-muscle-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-muscle-3'], 'Image' => 'perk_health8', 'Description' => $l['perk-muscle-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-muscle-4'], 'Image' => 'perk_distrubing', 'Description' => $l['perk-muscle-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-muscle-5'], 'Image' => 'perk_health12', 'Description' => $l['perk-muscle-5-desc'])
);

$deck_armorer = array(
array( 'Name' => $l['perk-armorer-1'], 'Image' => 'perk_armor1', 'Description' => $l['perk-armorer-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-armorer-2'], 'Image' => 'perk_armor2', 'Description' => $l['perk-armorer-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-armorer-3'], 'Image' => 'perk_armor3', 'Description' => $l['perk-armorer-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-armorer-4'], 'Image' => 'perk_recovery1', 'Description' => $l['perk-armorer-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-armorer-5'], 'Image' => 'perk_armor4', 'Description' => $l['perk-armorer-5-desc'])
);

$deck_rouge = array(
array( 'Name' => $l['perk-rouge-1'], 'Image' => 'perk_dodge2', 'Description' => $l['perk-rouge-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-rouge-2'], 'Image' => 'perk_elusive', 'Description' => $l['perk-rouge-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-rouge-3'], 'Image' => 'perk_dodge4', 'Description' => $l['perk-rouge-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-rouge-4'], 'Image' => 'perk_dodge8', 'Description' => $l['perk-rouge-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-rouge-5'], 'Image' => 'perk_instinct4', 'Description' => $l['perk-rouge-5-desc'])
);

$deck_hitman = array(
array( 'Name' => $l['perk-hitman-1'], 'Image' => 'perk_recovery2', 'Description' => $l['perk-hitman-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-hitman-2'], 'Image' => 'perk_akimbo', 'Description' => $l['perk-hitman-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-hitman-3'], 'Image' => 'perk_recovery8', 'Description' => $l['perk-hitman-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-hitman-4'], 'Image' => 'perk_recovery10', 'Description' => $l['perk-hitman-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-hitman-5'], 'Image' => 'perk_claw', 'Description' => $l['perk-hitman-5-desc'])
);

$deck_crook = array(
array( 'Name' => $l['perk-crook-1'], 'Image' => 'perk_dodge2', 'Description' => $l['perk-crook-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-crook-2'], 'Image' => 'perk_runner2', 'Description' => $l['perk-crook-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-crook-3'], 'Image' => 'perk_runner4', 'Description' => $l['perk-crook-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-crook-4'], 'Image' => 'perk_runner8', 'Description' => $l['perk-crook-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-crook-5'], 'Image' => 'perk_recovery2', 'Description' => $l['perk-crook-5-desc'])
);

$deck_burglar = array(
array( 'Name' => $l['perk-burglar-1'], 'Image' => 'perk_dodge2', 'Description' => $l['perk-burglar-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-burglar-2'], 'Image' => 'perk_bags', 'Description' => $l['perk-burglar-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-burglar-3'], 'Image' => 'perk_lucky', 'Description' => $l['perk-burglar-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-burglar-4'], 'Image' => 'perk_courage', 'Description' => $l['perk-burglar-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-burglar-5'], 'Image' => 'perk_shield3', 'Description' => $l['perk-burglar-5-desc'])
);

$deck_infiltrator = array(
array( 'Name' => $l['perk-infiltrator-1'], 'Image' => 'perk_closecombat1', 'Description' => $l['perk-infiltrator-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-infiltrator-2'], 'Image' => 'perk_closecombat2', 'Description' => $l['perk-infiltrator-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-infiltrator-3'], 'Image' => 'perk_closecombat3', 'Description' => $l['perk-infiltrator-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-infiltrator-4'], 'Image' => 'perk_hitguys4', 'Description' => $l['perk-infiltrator-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-infiltrator-5'], 'Image' => 'perk_heathhit2', 'Description' => $l['perk-infiltrator-5-desc'])
);

$deck_gambler = array(
array( 'Name' => $l['perk-gambler-1'], 'Image' => 'perk_mheal1', 'Description' => $l['perk-gambler-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-gambler-2'], 'Image' => 'perk_ammogive', 'Description' => $l['perk-gambler-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-gambler-3'], 'Image' => 'perk_mteam', 'Description' => $l['perk-gambler-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-gambler-4'], 'Image' => 'perk_mheal2', 'Description' => $l['perk-gambler-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-gambler-5'], 'Image' => 'perk_mheal3', 'Description' => $l['perk-gambler-5-desc'])
);

$deck_sociopath = array(
array( 'Name' => $l['perk-sociopath-1'], 'Image' => 'perk_closecombat1', 'Description' => $l['perk-sociopath-1-desc']),
array( 'Name' => $l['perk-common-1'], 'Image' => 'perk_headshot', 'Description' => $l['perk-common-1-desc']),
array( 'Name' => $l['perk-sociopath-2'], 'Image' => 'perk_skullshield', 'Description' => $l['perk-sociopath-2-desc']),
array( 'Name' => $l['perk-common-2'], 'Image' => 'perk_blender', 'Description' => $l['perk-common-2-desc']),
array( 'Name' => $l['perk-sociopath-3'], 'Image' => 'perk_skullheart', 'Description' => $l['perk-sociopath-3-desc']),
array( 'Name' => $l['perk-common-3'], 'Image' => 'perk_closet', 'Description' => $l['perk-common-3-desc']),
array( 'Name' => $l['perk-sociopath-4'], 'Image' => 'perk_pointgun', 'Description' => $l['perk-sociopath-4-desc']),
array( 'Name' => $l['perk-common-4'], 'Image' => 'perk_fast', 'Description' => $l['perk-common-4-desc']),
array( 'Name' => $l['perk-sociopath-5'], 'Image' => 'perk_exclam', 'Description' => $l['perk-sociopath-5-desc'])
);

//
//Skilltrees
//
if ($skill_mastermind_cable_guy == 1 || $skill_mastermind_combat_medic == 1 || $skill_mastermind_triathlete == 1){$skill_mastermind_unlocked = 1;};

$mastermind = array(
array( 'Name' => $l['controlfreak'], 'Wiki' => 'Hostage_Taker', 'Image' => '_(82)', 'Description-Normal' => $l['controlfreak-normal'], 'Description-Ace' => $l['controlfreak-ace'], 'Normal' => $skill_mastermind_black_marketeer, 'Ace' => $skill_mastermind_black_marketeer_ace ),
array( 'Name' => $l['pistolmessiah'], 'Wiki' => 'Pistol_Messiah', 'Image' => '_(74)', 'Description-Normal' => $l['pistolmessiah-normal'], 'Description-Ace' => $l['pistolmessiah-ace'], 'Normal' => $skill_mastermind_pistol_messiah, 'Ace' => $skill_mastermind_pistol_messiah_ace ),
array( 'Name' => $l['inspire'], 'Wiki' => 'Inspire', 'Image' => '_(76)', 'Description-Normal' => $l['inspire-normal'], 'Description-Ace' => $l['inspire-ace'], 'Normal' => $skill_mastermind_inspire, 'Ace' => $skill_mastermind_inspire_ace ),
array( 'Name' => $l['kilmer'], 'Wiki' => 'Kilmer', 'Image' => '_(73)', 'Description-Normal' => $l['kilmer-normal'], 'Description-Ace' => $l['kilmer-ace'], 'Normal' => $skill_mastermind_kilmer, 'Ace' => $skill_mastermind_kilmer_ace ),
array( 'Name' => $l['gunslinger'], 'Wiki' => 'Gunslinger', 'Image' => '_(72)', 'Description-Normal' => $l['gunslinger-normal'], 'Description-Ace' => $l['gunslinger-ace'], 'Normal' => $skill_mastermind_gun_fighter, 'Ace' => $skill_mastermind_gun_fighter_ace ),
array( 'Name' => $l['blackmarketeer'], 'Wiki' => 'Partner_In_Crime', 'Image' => '_(81)', 'Description-Normal' => $l['blackmarketeer-normal'], 'Description-Ace' => $l['blackmarketeer-ace'], 'Normal' => $skill_mastermind_control_freak, 'Ace' => $skill_mastermind_control_freak_ace ),
array( 'Name' => $l['stockholmsyndrome'], 'Wiki' => 'Stockholm_Syndrome', 'Image' => '_(67)', 'Description-Normal' => $l['stockholmsyndrome-normal'], 'Description-Ace' => $l['stockholmsyndrome-ace'], 'Normal' => $skill_mastermind_stockholm_syndrome, 'Ace' => $skill_mastermind_stockholm_syndrome_ace ),
array( 'Name' => $l['combatdoctor'], 'Wiki' => 'Combat_Doctor', 'Image' => '_(69)', 'Description-Normal' => $l['combatdoctor-normal'], 'Description-Ace' => $l['combatdoctor-ace'], 'Normal' => $skill_mastermind_medic_2x, 'Ace' => $skill_mastermind_medic_2x_ace ),
array( 'Name' => $l['joker'], 'Wiki' => 'Joker', 'Image' => '_(70)', 'Description-Normal' => $l['joker-normal'], 'Description-Ace' => $l['joker-ace'], 'Normal' => $skill_mastermind_joker, 'Ace' => $skill_mastermind_joker_ace ),
array( 'Name' => $l['spotter'], 'Wiki' => 'Spotter', 'Image' => '_(59)', 'Description-Normal' => $l['spotter-normal'], 'Description-Ace' => $l['spotter-ace'], 'Normal' => $skill_mastermind_tactician, 'Ace' => $skill_mastermind_tactician_ace ),
array( 'Name' => $l['equilibrium'], 'Wiki' => 'Equilibrium', 'Image' => '_(75)', 'Description-Normal' => $l['equilibrium-normal'], 'Description-Ace' => $l['equilibrium-ace'], 'Normal' => $skill_mastermind_equilibrium, 'Ace' => $skill_mastermind_equilibrium_ace ),
array( 'Name' => $l['dominator'], 'Wiki' => 'Dominator', 'Image' => '_(66)', 'Description-Normal' => $l['dominator-normal'], 'Description-Ace' => $l['dominator-ace'], 'Normal' => $skill_mastermind_dominator, 'Ace' => $skill_mastermind_dominator_ace ),
array( 'Name' => $l['insideman'], 'Wiki' => 'Control_Freak', 'Image' => '_(62)', 'Description-Normal' => $l['insideman-normal'], 'Description-Ace' => $l['insideman-ace'], 'Normal' => $skill_mastermind_inside_man, 'Ace' => $skill_mastermind_inside_man_ace ),
array( 'Name' => $l['fastlearner'], 'Wiki' => 'Painkillers', 'Image' => '_(80)', 'Description-Normal' => $l['fastlearner-normal'], 'Description-Ace' => $l['fastlearner-ace'], 'Normal' => $skill_mastermind_fast_learner, 'Ace' => $skill_mastermind_fast_learner_ace ),
array( 'Name' => $l['leadership'], 'Wiki' => 'Leadership', 'Image' => '_(63)', 'Description-Normal' => $l['leadership-normal'], 'Description-Ace' => $l['leadership-ace'], 'Normal' => $skill_mastermind_leadership, 'Ace' => $skill_mastermind_leadership_ace ),
array( 'Name' => $l['cableguy'], 'Wiki' => 'Cable_Guy', 'Image' => '_(60)', 'Description-Normal' => $l['cableguy-normal'], 'Description-Ace' => $l['cableguy-ace'], 'Normal' => $skill_mastermind_cable_guy, 'Ace' => $skill_mastermind_cable_guy_ace ),
array( 'Name' => $l['combatmedic'], 'Wiki' => 'Combat_Medic', 'Image' => '_(61)', 'Description-Normal' => $l['combatmedic-normal'], 'Description-Ace' => $l['combatmedic-ace'], 'Normal' => $skill_mastermind_combat_medic, 'Ace' => $skill_mastermind_combat_medic_ace ),
array( 'Name' => $l['endurance'], 'Wiki' => 'Endurance', 'Image' => '_(65)', 'Description-Normal' => $l['endurance-normal'], 'Description-Ace' => $l['endurance-ace'], 'Normal' => $skill_mastermind_triathlete, 'Ace' => $skill_mastermind_triathlete_ace ),
array( 'Name' => $l['unlockmastermind'], 'Wiki' => 'Skills#Mastermind', 'Image' => '_(58)', 'Description-Normal' => $l['unlockmastermind-normal'], 'Description-Ace' => '', 'Normal' => $skill_mastermind_unlocked, 'Ace' => '' )
);

if ($skill_enforcer_oppressor == 1 || $skill_enforcer_ammo_reservoir == 1 || $skill_enforcer_pack_mule == 1){$skill_enforcer_unlocked = 1;};

$enforcer = array(
array( 'Name' => $l['overkill'], 'Wiki' => 'Overkill_(skill)', 'Image' => '_(19)', 'Description-Normal' => $l['overkill-normal'], 'Description-Ace' => $l['overkill-ace'], 'Normal' => $skill_enforcer_overkill, 'Ace' => $skill_enforcer_overkill_ace ),
array( 'Name' => $l['ironman'], 'Wiki' => 'Iron_Man', 'Image' => '_(11)', 'Description-Normal' => $l['ironman-normal'], 'Description-Ace' => $l['ironman-ace'], 'Normal' => $skill_enforcer_juggernaut, 'Ace' => $skill_enforcer_juggernaut_ace ),
array( 'Name' => $l['carbonblade'], 'Wiki' => 'Carbon_Blade', 'Image' => '_(16)', 'Description-Normal' => $l['carbonblade-normal'], 'Description-Ace' => $l['carbonblade-ace'], 'Normal' => $skill_enforcer_carbon_blade, 'Ace' => $skill_enforcer_carbon_blade_ace ),
array( 'Name' => $l['hardboiled'], 'Wiki' => 'Hard_Boiled', 'Image' => '_(12)', 'Description-Normal' => $l['hardboiled-normal'], 'Description-Ace' => $l['hardboiled-ace'], 'Normal' => $skill_enforcer_from_the_hip, 'Ace' => $skill_enforcer_from_the_hip_ace ),
array( 'Name' => $l['fullyloaded'], 'Wiki' => 'Fully_Loaded', 'Image' => '_(3)', 'Description-Normal' => $l['fullyloaded-normal'], 'Description-Ace' => $l['fullyloaded-ace'], 'Normal' => $skill_enforcer_bandoliers, 'Ace' => $skill_enforcer_bandoliers_ace ),
array( 'Name' => $l['portablesaw'], 'Wiki' => 'Portable_Saw', 'Image' => '_(8)', 'Description-Normal' => $l['portablesaw-normal'], 'Description-Ace' => $l['portablesaw-ace'], 'Normal' => $skill_enforcer_portable_saw, 'Ace' => $skill_enforcer_portable_saw_ace ),
array( 'Name' => $l['shotguncqb'], 'Wiki' => 'Shotgun_CQB', 'Image' => '_(13)', 'Description-Normal' => $l['shotguncqb-normal'], 'Description-Ace' => $l['shotguncqb-ace'], 'Normal' => $skill_enforcer_shotgun_cqb, 'Ace' => $skill_enforcer_shotgun_cqb_ace ),
array( 'Name' => $l['ammospecialist'], 'Wiki' => 'Ammunition_Specialist', 'Image' => '_(15)', 'Description-Normal' => $l['ammospecialist-normal'], 'Description-Ace' => $l['ammospecialist-ace'], 'Normal' => $skill_enforcer_ammo_2x, 'Ace' => $skill_enforcer_ammo_2x_ace ),
array( 'Name' => $l['berserker'], 'Wiki' => 'Berserker', 'Image' => '_(18)', 'Description-Normal' => $l['berserker-normal'], 'Description-Ace' => $l['berserker-ace'], 'Normal' => $skill_enforcer_wolverine, 'Ace' => $skill_enforcer_wolverine_ace ),
array( 'Name' => $l['shotgunimpact'], 'Wiki' => 'Shotgun_Impact', 'Image' => '_(5)', 'Description-Normal' => $l['shotgunimpact-normal'], 'Description-Ace' => $l['shotgunimpact-ace'], 'Normal' => $skill_enforcer_shotgun_impact, 'Ace' => $skill_enforcer_shotgun_impact_ace ),
array( 'Name' => $l['stunresistance'], 'Wiki' => 'Stun_Resistance', 'Image' => '_(14)', 'Description-Normal' => $l['stunresistance-normal'], 'Description-Ace' => $l['stunresistance-ace'], 'Normal' => $skill_enforcer_shades, 'Ace' => $skill_enforcer_shades_ace ),
array( 'Name' => $l['toughguy'], 'Wiki' => 'Tough_Guy', 'Image' => '_(9)', 'Description-Normal' => $l['toughguy-normal'], 'Description-Ace' => $l['toughguy-ace'], 'Normal' => $skill_enforcer_tough_guy, 'Ace' => $skill_enforcer_tough_guy_ace ),
array( 'Name' => $l['diehard'], 'Wiki' => 'Die_Hard', 'Image' => '_(17)', 'Description-Normal' => $l['diehard-normal'], 'Description-Ace' => $l['diehard-ace'], 'Normal' => $skill_enforcer_show_of_force, 'Ace' => $skill_enforcer_show_of_force_ace ),
array( 'Name' => $l['underdog'], 'Wiki' => 'Underdog', 'Image' => '_(10)', 'Description-Normal' => $l['underdog-normal'], 'Description-Ace' => $l['underdog-ace'], 'Normal' => $skill_enforcer_underdog, 'Ace' => $skill_enforcer_underdog_ace ),
array( 'Name' => $l['pumpingiron'], 'Wiki' => 'Pumping_Iron', 'Image' => '_(4)', 'Description-Normal' => $l['pumpingiron-normal'], 'Description-Ace' => $l['pumpingiron-ace'], 'Normal' => $skill_enforcer_steroids, 'Ace' => $skill_enforcer_steroids_ace ),
array( 'Name' => $l['oppressor'], 'Wiki' => 'Oppressor', 'Image' => '_(7)', 'Description-Normal' => $l['oppressor-normal'], 'Description-Ace' => $l['oppressor-ace'], 'Normal' => $skill_enforcer_oppressor, 'Ace' => $skill_enforcer_oppressor_ace ),
array( 'Name' => $l['bulletstorm'], 'Wiki' => 'Bullet_Storm', 'Image' => '_(44)', 'Description-Normal' => $l['bulletstorm-normal'], 'Description-Ace' => $l['bulletstorm-ace'], 'Normal' => $skill_enforcer_ammo_reservoir, 'Ace' => $skill_enforcer_ammo_reservoir_ace ),
array( 'Name' => $l['transporter'], 'Wiki' => 'Transporter', 'Image' => '_(6)', 'Description-Normal' => $l['transporter-normal'], 'Description-Ace' => $l['transporter-ace'], 'Normal' => $skill_enforcer_pack_mule, 'Ace' => $skill_enforcer_pack_mule_ace ),
array( 'Name' => $l['unlockenforcer'], 'Wiki' => 'Skills#Enforcer', 'Image' => '_(1)', 'Description-Normal' => $l['unlockenforcer-normal'], 'Description-Ace' => '', 'Normal' => $skill_enforcer_unlocked, 'Ace' => '' ),
);

if ($skill_technician_rifleman == 1 || $skill_technician_trip_miner == 1 || $skill_technician_discipline == 1){$skill_technician_unlocked = 1;};

$technician = array(
array( 'Name' => $l['sentrytowerdefence'], 'Wiki' => 'Sentry_Tower_Defense', 'Image' => '_(55)', 'Description-Normal' => $l['sentrytowerdefence-normal'], 'Description-Ace' => $l['sentrytowerdefence-ace'], 'Normal' => $skill_technician_sentry_gun_2x, 'Ace' => $skill_technician_sentry_gun_2x_ace ),
array( 'Name' => $l['magplus'], 'Wiki' => 'Mag_Plus', 'Image' => '_(2)', 'Description-Normal' => $l['magplus-normal'], 'Description-Ace' => $l['magplus-ace'], 'Normal' => $skill_technician_mag_plus, 'Ace' => $skill_technician_mag_plus_ace ),
array( 'Name' => $l['bulletproof'], 'Wiki' => 'Bulletproof', 'Image' => '_(38)', 'Description-Normal' => $l['bulletproof-normal'], 'Description-Ace' => $l['bulletproof-ace'], 'Normal' => $skill_technician_iron_man, 'Ace' => $skill_technician_iron_man_ace ),
array( 'Name' => $l['sentrycombatupgrade'], 'Wiki' => 'Sentry_Combat_Upgrade', 'Image' => '_(53)', 'Description-Normal' => $l['sentrycombatupgrade-normal'], 'Description-Ace' => $l['sentrycombatupgrade-ace'], 'Normal' => $skill_technician_sentry_2_0, 'Ace' => $skill_technician_sentry_2_0_ace ),
array( 'Name' => $l['shapedcharge'], 'Wiki' => 'Shaped_Charge', 'Image' => '_(87)', 'Description-Normal' => $l['shapedcharge-normal'], 'Description-Ace' => $l['shapedcharge-ace'], 'Normal' => $skill_technician_shaped_charge, 'Ace' => $skill_technician_shaped_charge_ace ),
array( 'Name' => $l['shockproof'], 'Wiki' => 'Shockproof', 'Image' => '_(43)', 'Description-Normal' => $l['shockproof-normal'], 'Description-Ace' => $l['shockproof-ace'], 'Normal' => $skill_technician_insulation, 'Ace' => $skill_technician_insulation_ace ),
array( 'Name' => $l['sentrytargetingpackage'], 'Wiki' => 'Sentry_Targeting_Package', 'Image' => '_(49)', 'Description-Normal' => $l['sentrytargetingpackage-normal'], 'Description-Ace' => $l['sentrytargetingpackage-ace'], 'Normal' => $skill_technician_sentry_targeting_package, 'Ace' => $skill_technician_sentry_targeting_package_ace ),
array( 'Name' => $l['blastradius'], 'Wiki' => 'Jack_Of_All_Trades', 'Image' => '_(89)', 'Description-Normal' => $l['blastradius-normal'], 'Description-Ace' => $l['blastradius-ace'], 'Normal' => $skill_technician_blast_radius, 'Ace' => $skill_technician_blast_radius_ace ),
array( 'Name' => $l['silentdrilling'], 'Wiki' => 'Silent_Drilling', 'Image' => '_(50)', 'Description-Normal' => $l['silentdrilling-normal'], 'Description-Ace' => $l['silentdrilling-ace'], 'Normal' => $skill_technician_silent_drilling, 'Ace' => $skill_technician_silent_drilling_ace ),
array( 'Name' => $l['sentrygun'], 'Wiki' => 'Sentry_Gun', 'Image' => '_(47)', 'Description-Normal' => $l['sentrygun-normal'], 'Description-Ace' => $l['sentrygun-ace'], 'Normal' => $skill_technician_sentry_gun, 'Ace' => $skill_technician_sentry_gun_ace ),
array( 'Name' => $l['improvedcrafting'], 'Wiki' => 'Tactical_Mines', 'Image' => '_(88)', 'Description-Normal' => $l['improvedcrafting-normal'], 'Description-Ace' => $l['improvedcrafting-ace'], 'Normal' => $skill_technician_master_craftsman, 'Ace' => $skill_technician_master_craftsman_ace ),
array( 'Name' => $l['drillsergant'], 'Wiki' => 'Drill_Sergeant', 'Image' => '_(51)', 'Description-Normal' => $l['drillsergant-normal'], 'Description-Ace' => $l['drillsergant-ace'], 'Normal' => $skill_technician_drill_expert, 'Ace' => $skill_technician_drill_expert_ace ),
array( 'Name' => $l['sharpshooter'], 'Wiki' => 'Sharpshooter_(PAYDAY_2)', 'Image' => '_(46)', 'Description-Normal' => $l['sharpshooter-normal'], 'Description-Ace' => $l['sharpshooter-ace'], 'Normal' => $skill_technician_sharpshooter, 'Ace' => $skill_technician_sharpshooter_ace ),
array( 'Name' => $l['combatengineer'], 'Wiki' => 'Combat_Engineer', 'Image' => '_(86)', 'Description-Normal' => $l['combatengineer-normal'], 'Description-Ace' => $l['combatengineer-ace'], 'Normal' => $skill_technician_trip_mine_expert, 'Ace' => $skill_technician_trip_mine_expert_ace ),
array( 'Name' => $l['hardwareexpert'], 'Wiki' => 'Hardware_Expert', 'Image' => '_(45)', 'Description-Normal' => $l['hardwareexpert-normal'], 'Description-Ace' => $l['hardwareexpert-ace'], 'Normal' => $skill_technician_hardware_expert, 'Ace' => $skill_technician_hardware_expert_ace ),
array( 'Name' => $l['rifleman'], 'Wiki' => 'Rifleman', 'Image' => '_(40)', 'Description-Normal' => $l['rifleman-normal'], 'Description-Ace' => $l['rifleman-ace'], 'Normal' => $skill_technician_rifleman, 'Ace' => $skill_technician_rifleman_ace ),
array( 'Name' => $l['demolitionman'], 'Wiki' => 'Demolition_Man', 'Image' => '_(85)', 'Description-Normal' => $l['demolitionman-normal'], 'Description-Ace' => $l['demolitionman-ace'], 'Normal' => $skill_technician_trip_miner, 'Ace' => $skill_technician_trip_miner_ace ),
array( 'Name' => $l['nervesofsteel'], 'Wiki' => 'Nerves_of_Steel', 'Image' => '_(54)', 'Description-Normal' => $l['nervesofsteel-normal'], 'Description-Ace' => $l['nervesofsteel-ace'], 'Normal' => $skill_technician_discipline, 'Ace' => $skill_technician_discipline_ace ),
array( 'Name' => $l['unlocktechnician'], 'Wiki' => 'Skills#Technician', 'Image' => '_(83)', 'Description-Normal' => $l['unlocktechnician-normal'], 'Description-Ace' => '', 'Normal' => $skill_technician_unlocked, 'Ace' => '' )
);

if ($skill_ghost_scavenger == 1 || $skill_ghost_sprinter == 1 || $skill_ghost_cat_burglar == 1){$skill_ghost_unlocked = 1;};

$ghost = array(
array( 'Name' => $l['cameraloop'], 'Wiki' => 'Camera_Loop', 'Image' => '_(20)', 'Description-Normal' => $l['cameraloop-normal'], 'Description-Ace' => $l['cameraloop-ace'], 'Normal' => $skill_ghost_good_luck_charm, 'Ace' => $skill_ghost_good_luck_charm_ace ),
array( 'Name' => $l['ecmfeedback'], 'Wiki' => 'ECM_Feedback', 'Image' => '_(22)', 'Description-Normal' => $l['ecmfeedback-normal'], 'Description-Ace' => $l['ecmfeedback-ace'], 'Normal' => $skill_ghost_ecm_feedback, 'Ace' => $skill_ghost_ecm_feedback_ace ),
array( 'Name' => $l['movingtarget'], 'Wiki' => 'Moving_Target', 'Image' => '_(34)', 'Description-Normal' => $l['movingtarget-normal'], 'Description-Ace' => $l['movingtarget-ace'], 'Normal' => $skill_ghost_moving_target, 'Ace' => $skill_ghost_moving_target_ace ),
array( 'Name' => $l['lockpicking'], 'Wiki' => 'Lockpicking_Expert', 'Image' => '_(37)', 'Description-Normal' => $l['lockpicking-normal'], 'Description-Ace' => $l['lockpicking-ace'], 'Normal' => $skill_ghost_magic_touch, 'Ace' => $skill_ghost_magic_touch_ace ),
array( 'Name' => $l['ecmoverdrive'], 'Wiki' => 'ECM_Overdrive', 'Image' => '_(30)', 'Description-Normal' => $l['ecmoverdrive-normal'], 'Description-Ace' => $l['ecmoverdrive-ace'], 'Normal' => $skill_ghost_ecm_booster, 'Ace' => $skill_ghost_ecm_booster_ace ),
array( 'Name' => $l['professional'], 'Wiki' => 'The_Professional', 'Image' => '_(36)', 'Description-Normal' => $l['professional-normal'], 'Description-Ace' => $l['professional-ace'], 'Normal' => $skill_ghost_silence_expert, 'Ace' => $skill_ghost_silence_expert_ace ),
array( 'Name' => $l['ninelives'], 'Wiki' => 'Nine_Lives', 'Image' => '_(21)', 'Description-Normal' => $l['ninelives-normal'], 'Description-Ace' => $l['ninelives-ace'], 'Normal' => $skill_ghost_nine_lives, 'Ace' => $skill_ghost_nine_lives_ace ),
array( 'Name' => $l['ecmspecialist'], 'Wiki' => 'ECM_Specialist', 'Image' => '_(35)', 'Description-Normal' => $l['ecmspecialist-normal'], 'Description-Ace' => $l['ecmspecialist-ace'], 'Normal' => $skill_ghost_ecm_2x, 'Ace' => $skill_ghost_ecm_2x_ace ),
array( 'Name' => $l['silentkiller'], 'Wiki' => 'Silent_Killer', 'Image' => '_(77)', 'Description-Normal' => $l['silentkiller-normal'], 'Description-Ace' => $l['silentkiller-ace'], 'Normal' => $skill_ghost_hitman, 'Ace' => $skill_ghost_hitman_ace ),
array( 'Name' => $l['shinobi'], 'Wiki' => 'Shinobi_(skill)', 'Image' => '_(24)', 'Description-Normal' => $l['shinobi-normal'], 'Description-Ace' => $l['shinobi-ace'], 'Normal' => $skill_ghost_assassin, 'Ace' => $skill_ghost_assassin_ace ),
array( 'Name' => $l['martialarts'], 'Wiki' => 'Martial_Arts', 'Image' => '_(25)', 'Description-Normal' => $l['martialarts-normal'], 'Description-Ace' => $l['martialarts-ace'], 'Normal' => $skill_ghost_martial_arts, 'Ace' => $skill_ghost_martial_arts_ace ),
array( 'Name' => $l['smgspecialist'], 'Wiki' => 'SMG_Specialist', 'Image' => '_(27)', 'Description-Normal' => $l['smgspecialist-normal'], 'Description-Ace' => $l['smgspecialist-ace'], 'Normal' => $skill_ghost_smg_master, 'Ace' => $skill_ghost_smg_master_ace ),
array( 'Name' => $l['fasthands'], 'Wiki' => 'Fast_Hands', 'Image' => '_(28)', 'Description-Normal' => $l['fasthands-normal'], 'Description-Ace' => $l['fasthands-ace'], 'Normal' => $skill_ghost_transporter, 'Ace' => $skill_ghost_transporter_ace ),
array( 'Name' => $l['chameleon'], 'Wiki' => 'Chameleon', 'Image' => '_(29)', 'Description-Normal' => $l['chameleon-normal'], 'Description-Ace' => $l['chameleon-ace'], 'Normal' => $skill_ghost_chameleon, 'Ace' => $skill_ghost_chameleon_ace ),
array( 'Name' => $l['cleaner'], 'Wiki' => 'Cleaner', 'Image' => '_(23)', 'Description-Normal' => $l['cleaner-normal'], 'Description-Ace' => $l['cleaner-ace'], 'Normal' => $skill_ghost_cleaner, 'Ace' => $skill_ghost_cleaner_ace ),
array( 'Name' => $l['deadpresidents'], 'Wiki' => 'Dead_Presidents', 'Image' => '_(26)', 'Description-Normal' => $l['deadpresidents-normal'], 'Description-Ace' => $l['deadpresidents-ace'], 'Normal' => $skill_ghost_scavenger, 'Ace' => $skill_ghost_scavenger_ace ),
array( 'Name' => $l['sprinter'], 'Wiki' => 'Sprinter', 'Image' => '_(31)', 'Description-Normal' => $l['sprinter-normal'], 'Description-Ace' => $l['sprinter-ace'], 'Normal' => $skill_ghost_sprinter, 'Ace' => $skill_ghost_sprinter_ace ),
array( 'Name' => $l['catburglar'], 'Wiki' => 'Cat_Burglar', 'Image' => '_(32)', 'Description-Normal' => $l['catburglar-normal'], 'Description-Ace' => $l['catburglar-ace'], 'Normal' => $skill_ghost_cat_burglar, 'Ace' => $skill_ghost_cat_burglar_ace ),
array( 'Name' => $l['unlockghost'], 'Wiki' => 'Skills#Ghost', 'Image' => '_(33)', 'Description-Normal' => $l['unlockghost-normal'], 'Description-Ace' => '', 'Normal' => $skill_ghost_unlocked, 'Ace' => '' )
);

if ($skill_hoxton_freedom_call == 1 || $skill_hoxton_hidden_blade == 1 || $skill_hoxton_thick_skin == 1){$skill_hoxton_unlocked = 1;};

$hoxton = array(
array( 'Name' => $l['bullseye'], 'Wiki' => 'Bullseye', 'Image' => 'Bullseye', 'Description-Normal' => $l['bullseye-normal'], 'Description-Ace' => $l['bullseye-ace'], 'Normal' => $skill_hoxton_prison_wife, 'Ace' => $skill_hoxton_prison_wife_ace ),
array( 'Name' => $l['sneakybastard'], 'Wiki' => 'Sneaky_Bastard', 'Image' => 'Sneaky_Bastard', 'Description-Normal' => $l['sneakybastard-normal'], 'Description-Ace' => $l['sneakybastard-ace'], 'Normal' => $skill_hoxton_jail_diet, 'Ace' => $skill_hoxton_jail_diet_ace ),
array( 'Name' => $l['akimbo'], 'Wiki' => 'Akimbo', 'Image' => 'Akimbo', 'Description-Normal' => $l['akimbo-normal'], 'Description-Ace' => $l['akimbo-ace'], 'Normal' => $skill_hoxton_akimbo, 'Ace' => $skill_hoxton_akimbo_ace ),
array( 'Name' => $l['triggerhappy'], 'Wiki' => 'Trigger_Happy', 'Image' => 'Trigger_Happy', 'Description-Normal' => $l['triggerhappy-normal'], 'Description-Ace' => $l['triggerhappy-ace'], 'Normal' => $skill_hoxton_trigger_happy, 'Ace' => $skill_hoxton_trigger_happy_ace ),
array( 'Name' => $l['lowblow'], 'Wiki' => 'Low_Blow', 'Image' => 'Low_Blow', 'Description-Normal' => $l['lowblow-normal'], 'Description-Ace' => $l['lowblow-ace'], 'Normal' => $skill_hoxton_backstab, 'Ace' => $skill_hoxton_backstab_ace ),
array( 'Name' => $l['counterstrike'], 'Wiki' => 'Counter-Strike', 'Image' => 'Counter-Strike', 'Description-Normal' => $l['counterstrike-normal'], 'Description-Ace' => $l['counterstrike-ace'], 'Normal' => $skill_hoxton_drop_soap, 'Ace' => $skill_hoxton_drop_soap_ace ),
array( 'Name' => $l['swansong'], 'Wiki' => 'Swan_Song', 'Image' => 'Swan_Song', 'Description-Normal' => $l['swansong-normal'], 'Description-Ace' => $l['swansong-ace'], 'Normal' => $skill_hoxton_perseverance, 'Ace' => $skill_hoxton_perseverance_ace ),
array( 'Name' => $l['undertaker'], 'Wiki' => 'Undertaker', 'Image' => 'Undertaker', 'Description-Normal' => $l['undertaker-normal'], 'Description-Ace' => $l['undertaker-ace'], 'Normal' => $skill_hoxton_second_chances, 'Ace' => $skill_hoxton_second_chances_ace ),
array( 'Name' => $l['uppers'], 'Wiki' => 'Uppers', 'Image' => 'Uppers', 'Description-Normal' => $l['uppers-normal'], 'Description-Ace' => $l['uppers-ace'], 'Normal' => $skill_hoxton_tea_cookies, 'Ace' => $skill_hoxton_tea_cookies_ace ),
array( 'Name' => $l['brotherskeeper'], 'Wiki' => 'Brother&apos;s_Keeper', 'Image' => 'Brothers_Keeper', 'Description-Normal' => $l['brotherskeeper-normal'], 'Description-Ace' => $l['brotherskeeper-ace'], 'Normal' => $skill_hoxton_cell_mates, 'Ace' => $skill_hoxton_cell_mates_ace ),
array( 'Name' => $l['winstonwolfe'], 'Wiki' => 'Winston_Wolfe', 'Image' => 'Winston_Wolfe', 'Description-Normal' => $l['winstonwolfe-normal'], 'Description-Ace' => $l['winstonwolfe-ace'], 'Normal' => $skill_hoxton_thug_life, 'Ace' => $skill_hoxton_thug_life_ace ),
array( 'Name' => $l['quickfix'], 'Wiki' => 'Quick_Fix', 'Image' => 'Quick_Fix', 'Description-Normal' => $l['quickfix-normal'], 'Description-Ace' => $l['quickfix-ace'], 'Normal' => $skill_hoxton_tea_time, 'Ace' => $skill_hoxton_tea_time_ace ),
array( 'Name' => $l['runandgun'], 'Wiki' => 'Run_And_Gun', 'Image' => 'Run_And_Gun', 'Description-Normal' => $l['runandgun-normal'], 'Description-Ace' => $l['runandgun-ace'], 'Normal' => $skill_hoxton_awareness, 'Ace' => $skill_hoxton_awareness_ace ),
array( 'Name' => $l['sixthsense'], 'Wiki' => 'Sixth_Sense', 'Image' => 'Sixth_Sense', 'Description-Normal' => $l['sixthsense-normal'], 'Description-Ace' => $l['sixthsense-ace'], 'Normal' => $skill_hoxton_jail_workout, 'Ace' => $skill_hoxton_jail_workout_ace ),
array( 'Name' => $l['duckandcover'], 'Wiki' => 'Duck_And_Cover', 'Image' => 'Duck_And_Cover', 'Description-Normal' => $l['duckandcover-normal'], 'Description-Ace' => $l['duckandcover-ace'], 'Normal' => $skill_hoxton_alpha_dog, 'Ace' => $skill_hoxton_alpha_dog_ace ),
array( 'Name' => $l['daredevil'], 'Wiki' => 'Daredevil', 'Image' => 'Daredevil', 'Description-Normal' => $l['daredevil-normal'], 'Description-Ace' => $l['daredevil-ace'], 'Normal' => $skill_hoxton_freedom_call, 'Ace' => $skill_hoxton_freedom_call_ace ),
array( 'Name' => $l['hiddenblade'], 'Wiki' => 'Hidden_Blade', 'Image' => 'Hidden_Blade', 'Description-Normal' => $l['hiddenblade-normal'], 'Description-Ace' => $l['hiddenblade-ace'], 'Normal' => $skill_hoxton_hidden_blade, 'Ace' => $skill_hoxton_hidden_blade_ace ),
array( 'Name' => $l['thickskin'], 'Wiki' => 'Thick_Skin', 'Image' => 'Thick_Skin', 'Description-Normal' => $l['thickskin-normal'], 'Description-Ace' => $l['thickskin-ace'], 'Normal' => $skill_hoxton_thick_skin, 'Ace' => $skill_hoxton_thick_skin_ace ),
array( 'Name' => $l['unlockfugitive'], 'Wiki' => 'Skills#Fugitive', 'Image' => 'Unlocking_the_Fugitive', 'Description-Normal' => $l['unlockfugitive-normal'], 'Description-Ace' => '', 'Normal' => $skill_hoxton_unlocked, 'Ace' => '' )
);

//Multibuild Vars
$mastermind2 = $mastermind;
$technician2 = $technician;
$enforcer2 = $enforcer;
$ghost2 = $ghost;
$hoxton2 = $hoxton;

$characters = array(
array( 'Name' => $l['dallas'], 'Wiki' => 'Dallas', 'Image' => 'dallas', 'Description' => $l['dallas-char'], 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $character_used_russian ),
array( 'Name' => $l['chains'], 'Wiki' => 'Chains', 'Image' => 'chains', 'Description' => $l['chains-char'], 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $character_used_spanish ),
array( 'Name' => $l['houston'], 'Wiki' => 'Houston', 'Image' => 'hoxton', 'Description' => $l['houston-char'], 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $character_used_american ),
array( 'Name' => $l['wolf'], 'Wiki' => 'Wolf', 'Image' => 'wolf', 'Description' => $l['wolf-char'], 'Quality' => 'normal', 'Extra' => 'Normal', 'Used' => $character_used_german ),
array( 'Name' => $l['wick'], 'Wiki' => 'John_Wick', 'Image' => 'jowi', 'Description' => $l['wick-char'], 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $character_used_jowi ),
array( 'Name' => $l['hoxton'], 'Wiki' => 'Hoxton', 'Image' => 'old_hoxton', 'Description' => $l['hoxton-char'], 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $character_used_old_hoxton ),
array( 'Name' => $l['clover'], 'Wiki' => 'Clover', 'Image' => 'female_1', 'Description' => $l['clover-char'], 'Quality' => 'dlc', 'Used' => $character_used_female_1 ),
array( 'Name' => $l['dragan'], 'Wiki' => 'Dragan', 'Image' => 'dragan1', 'Description' => $l['dragan-char'], 'Quality' => 'dlc', 'Used' => $character_used_dragan ),
array( 'Name' => $l['jacket'], 'Wiki' => 'Jacket', 'Image' => 'jacket', 'Description' => $l['jacket-char'], 'Quality' => 'collaboration', 'Extra' => $l['hotline_miami_2_deluxe'], 'Used' => $character_used_jacket ),
array( 'Name' => $l['bonnie'], 'Wiki' => 'Bonnie', 'Image' => 'bonnie', 'Description' => $l['bonnie-char'], 'Quality' => 'community', 'Extra' => 'Community', 'Used' => $character_used_bonnie )
);

$enemies = array(
array( 'Name' => $l['e-cop'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_cop ),
array( 'Name' => $l['e-cop_heavy'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_cop_heavy ),
array( 'Name' => $l['e-cop_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_cop_swat ),
array( 'Name' => $l['e-city_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_city_swat ),
array( 'Name' => $l['e-fbi'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_fbi ),
array( 'Name' => $l['e-fbi_office'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_fbi_office ),
array( 'Name' => $l['e-fbi_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_fbi_swat ),
array( 'Name' => $l['e-fbi_heavy_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_fbi_heavy_swat ),
array( 'Name' => $l['e-swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_swat ),
array( 'Name' => $l['e-heavy_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_heavy_swat ),
array( 'Name' => $l['e-murky_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_murky_swat ),
array( 'Name' => $l['e-security'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_security ),
array( 'Name' => $l['e-gensec'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_gensec ),
array( 'Name' => $l['e-gensec_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_gensec_swat ),
array( 'Name' => $l['e-gensec_heavy_swat'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_gensec_heavy_swat ),
array( 'Name' => $l['e-gangster'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_gangster ),
array( 'Name' => $l['e-biker'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_biker ),
array( 'Name' => $l['e-mobster'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_mobster ),
array( 'Name' => $l['e-mobster_boss'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_mobster_boss ),
array( 'Name' => $l['e-prison_guard'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_prison_guard ),
array( 'Name' => $l['e-sniper'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_sniper ),
array( 'Name' => $l['e-sniper_gensec'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_sniper_gensec ),
array( 'Name' => $l['e-shield'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_shield ),
array( 'Name' => $l['e-shield_gensec'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_shield_gensec ),
array( 'Name' => $l['e-spooc'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_spooc ),
array( 'Name' => $l['e-spooc_gensec'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_spooc_gensec ),
array( 'Name' => $l['e-tank'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_tank ),
array( 'Name' => $l['e-tank_black'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_tank_black ),
array( 'Name' => $l['e-tank_skull'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_tank_gensec ),
array( 'Name' => $l['e-tank_hw'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_tank_hw ),
array( 'Name' => $l['e-taser'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_taser ),
array( 'Name' => $l['e-taser_gensec'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_taser_gensec ),
array( 'Name' => $l['e-civilian'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_civilian ),
array( 'Name' => $l['e-civilian_female'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_civilian_female ),
array( 'Name' => $l['e-turret_gensec'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_turret_gensec ),
array( 'Name' => $l['e-fbi-fieldagent'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_hector_fbi ),
array( 'Name' => $l['e-hector'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_hector_boss ),
array( 'Name' => $l['e-hector-no-armor'], 'Wiki' => '', 'Description' => '', 'Value' => $enemy_kills_hector_boss_no_armor )
);

//Temporary
$heists_dropin = $heists;
$heists_fail = $heists;
$heists_quality = $heists;
$weapons_primary_kills = $weapons_primary;
$weapons_secondary_kills = $weapons_secondary;
$weapons_melee_kills = $weapons_melee;
$weapons_grenades_kills = $weapons_grenades;
$weapons_primary_name = $weapons_primary;
$weapons_secondary_name = $weapons_secondary;
$weapons_melee_name = $weapons_melee;
$weapons_grenades_name = $weapons_grenades;
$weapons_primary_quality = $weapons_primary;
$weapons_secondary_quality = $weapons_secondary;
$weapons_melee_quality = $weapons_melee;
$weapons_grenades_quality = $weapons_grenades;
$masks_name = $masks;
$masks_quality = $masks;
$enemies_name = $enemies;

function array_sort_by_column(&$arr, $col, $dir = SORT_DESC) {
    $sort_col = array();
    foreach ($arr as $key=> $row) {
        $sort_col[$key] = $row[$col];
    }

    array_multisort($sort_col, $dir, $arr);
}

array_sort_by_column($escape, 'Total');
array_sort_by_column($heists, 'Win');
array_sort_by_column($weapons_primary, 'Used');
array_sort_by_column($weapons_secondary, 'Used');
array_sort_by_column($weapons_melee, 'Used');
array_sort_by_column($weapons_grenades, 'Used');
array_sort_by_column($armor, 'Used');
array_sort_by_column($gadgets, 'Used');
array_sort_by_column($masks, 'Used');
array_sort_by_column($characters, 'Used');
array_sort_by_column($enemies, 'Value');
//Temporary
array_sort_by_column($heists_dropin, 'Dropin');
array_sort_by_column($heists_fail, 'Fail');
array_sort_by_column($heists_quality, 'Quality', SORT_ASC);
array_sort_by_column($weapons_primary_kills, 'Kills');
array_sort_by_column($weapons_secondary_kills, 'Kills');
array_sort_by_column($weapons_melee_kills, 'Kills');
array_sort_by_column($weapons_grenades_kills, 'Kills');
array_sort_by_column($weapons_primary_name, 'Name', SORT_ASC);
array_sort_by_column($weapons_secondary_name, 'Name', SORT_ASC);
array_sort_by_column($weapons_melee_name, 'Name', SORT_ASC);
array_sort_by_column($weapons_grenades_name, 'Name', SORT_ASC);
array_sort_by_column($weapons_primary_quality, 'Quality', SORT_ASC);
array_sort_by_column($weapons_secondary_quality, 'Quality', SORT_ASC);
array_sort_by_column($weapons_melee_quality, 'Quality', SORT_ASC);
array_sort_by_column($weapons_grenades_quality, 'Quality', SORT_ASC);
array_sort_by_column($masks_name, 'Name', SORT_ASC);
array_sort_by_column($masks_quality, 'Quality', SORT_ASC);
array_sort_by_column($enemies_name, 'Name', SORT_ASC);
?>