<?php
if(isset($_POST["submit"])) {
    $_POST = array_map("htmlentities", $_POST);
    $name = (string) $_POST["name"];
    $email = (string) $_POST["email"];
    $dob = (string) $_POST["dob"];
    $gender = (string) $_POST["gender"];
    $country = (string) $_POST["country"];
    $file = fopen("userdata.csv", "w");
    fputcsv($file, [$name, $email, $dob, $gender, $country]);
    fclose($file);
    print_r(file("userdata.csv"));
} else {
    header("Location: ./index.html");
}
?>