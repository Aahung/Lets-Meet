<?php 
$build_version = 1;
function initial_database(
    $host, $database, $user, $pass) {
    // initial database connection
    $conn = new mysqli($host, $user, $pass, $database);
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }

    // Meet Table
    $sql = "CREATE TABLE IF NOT EXISTS `Meet` (
        `Meet_Id` INT unsigned NOT NULL auto_increment,
        `Biref` varchar(1000) NOT NULL default '',
        `User_Id` INT unsigned NOT NULL,
        `Time` INT NOT NULL,
        PRIMARY KEY (`Meet_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Option Table
    $sql = "CREATE TABLE IF NOT EXISTS `Option` (
        `Option_Id` INT unsigned NOT NULL auto_increment,
        `Meet_Id` INT unsigned NOT NULL,
        `User_Id` INT unsigned NOT NULL,
        PRIMARY KEY (`Option_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Option_Snapshot Table
    $sql = "CREATE TABLE IF NOT EXISTS `Option_Snapshot` (
        `Snapshot_Id` INT unsigned NOT NULL auto_increment,
        `Option_Id` INT unsigned NOT NULL,
        `Biref` varchar(1000) NOT NULL default '',
        `Pros` varchar(1000) NOT NULL default '[]',
        `Cons` varchar(1000) NOT NULL default '[]',
        `Time` INT NOT NULL,
        PRIMARY KEY (`Snapshot_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // User Table
    $sql = "CREATE TABLE IF NOT EXISTS `User` (
        `User_Id` INT unsigned NOT NULL auto_increment,
        `Alias` varchar(100) NOT NULL default 'who is this?',
        `Facebook` varchar(50),
        `QQ` varchar(20),
        `Email` varchar(50),
        `Password` varchar(40),
        PRIMARY KEY (`User_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Comment Table
    $sql = "CREATE TABLE IF NOT EXISTS `Comment` (
        `Comment_Id` INT unsigned NOT NULL auto_increment,
        `Option_Id` INT unsigned NOT NULL,
        `User_Id` INT unsigned NOT NULL,
        `Comtent` varchar(100) NOT NULL,
        `Time` INT NOT NULL,
        PRIMARY KEY (`Comment_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Meet_User_Junction Table
    $sql = "CREATE TABLE IF NOT EXISTS `Meet_User_Junction` (
        `Meet_Id` INT unsigned NOT NULL,
        `User_Id` INT unsigned NOT NULL
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Availibity Table
    $sql = "CREATE TABLE IF NOT EXISTS `Availibity` (
        `Meet_Id` INT unsigned NOT NULL,
        `User_Id` INT unsigned NOT NULL,
        `Available_Days` varchar(200) NOT NULL default '[]',
        INDEX (`Meet_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Preference Table
    $sql = "CREATE TABLE IF NOT EXISTS `Preference` (
        `Option_Id` INT unsigned NOT NULL,
        `User_Id` INT unsigned NOT NULL,
        `Rate` TINYINT unsigned NOT NULL default 0,
        INDEX (`Option_Id`)
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);

    // Version Table
    $sql = "CREATE TABLE IF NOT EXISTS `Version` (
        `Version` INT unsigned NOT NULL default " . $build_version . ",
        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8";
    $result = $conn -> query($sql);
}
?>