<!-- Begin Main Menu -->
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(1, "mmi_user_groups", $Language->MenuPhrase("1", "MenuText"), "user_groupslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}user_groups'), FALSE, FALSE);
$RootMenu->AddMenuItem(2, "mmi_ci_cookies", $Language->MenuPhrase("2", "MenuText"), "ci_cookieslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}ci_cookies'), FALSE, FALSE);
$RootMenu->AddMenuItem(3, "mmi_ci_sessions", $Language->MenuPhrase("3", "MenuText"), "ci_sessionslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}ci_sessions'), FALSE, FALSE);
$RootMenu->AddMenuItem(4, "mmi_room_types", $Language->MenuPhrase("4", "MenuText"), "room_typeslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}room_types'), FALSE, FALSE);
$RootMenu->AddMenuItem(5, "mmi_policies", $Language->MenuPhrase("5", "MenuText"), "policieslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}policies'), FALSE, FALSE);
$RootMenu->AddMenuItem(6, "mmi_users", $Language->MenuPhrase("6", "MenuText"), "userslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}users'), FALSE, FALSE);
$RootMenu->AddMenuItem(8, "mmi_customers", $Language->MenuPhrase("8", "MenuText"), "customerslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}customers'), FALSE, FALSE);
$RootMenu->AddMenuItem(9, "mmi_destinations", $Language->MenuPhrase("9", "MenuText"), "destinationslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}destinations'), FALSE, FALSE);
$RootMenu->AddMenuItem(10, "mmi_destinations2", $Language->MenuPhrase("10", "MenuText"), "destinations2list.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}destinations2'), FALSE, FALSE);
$RootMenu->AddMenuItem(11, "mmi_hotel_booking", $Language->MenuPhrase("11", "MenuText"), "hotel_bookinglist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotel_booking'), FALSE, FALSE);
$RootMenu->AddMenuItem(12, "mmi_hotel_facilities", $Language->MenuPhrase("12", "MenuText"), "hotel_facilitieslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotel_facilities'), FALSE, FALSE);
$RootMenu->AddMenuItem(13, "mmi_hotel_gallery", $Language->MenuPhrase("13", "MenuText"), "hotel_gallerylist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotel_gallery'), FALSE, FALSE);
$RootMenu->AddMenuItem(14, "mmi_hotel_policy", $Language->MenuPhrase("14", "MenuText"), "hotel_policylist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotel_policy'), FALSE, FALSE);
$RootMenu->AddMenuItem(15, "mmi_hotel_room_gallery", $Language->MenuPhrase("15", "MenuText"), "hotel_room_gallerylist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotel_room_gallery'), FALSE, FALSE);
$RootMenu->AddMenuItem(16, "mmi_hotel_rooms", $Language->MenuPhrase("16", "MenuText"), "hotel_roomslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotel_rooms'), FALSE, FALSE);
$RootMenu->AddMenuItem(17, "mmi_hotels", $Language->MenuPhrase("17", "MenuText"), "hotelslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}hotels'), FALSE, FALSE);
$RootMenu->AddMenuItem(18, "mmi_selling_rooms", $Language->MenuPhrase("18", "MenuText"), "selling_roomslist.php", -1, "", IsLoggedIn() || AllowListMenu('{C8C6CF44-D3A2-4CDE-9B21-6EDF1C9CDF0A}selling_rooms'), FALSE, FALSE);
$RootMenu->AddMenuItem(-1, "mmi_logout", $Language->Phrase("Logout"), "logout.php", -1, "", IsLoggedIn());
$RootMenu->AddMenuItem(-1, "mmi_login", $Language->Phrase("Login"), "login.php", -1, "", !IsLoggedIn() && substr(@$_SERVER["URL"], -1 * strlen("login.php")) <> "login.php");
$RootMenu->Render();
?>
<!-- End Main Menu -->
