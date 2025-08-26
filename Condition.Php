<?php

// 1. IF statement — checks if age is 18 or older
function checkAge($age) {
    if ($age >= 18) {
        return "You are an adult.";
    }
    return "You are a minor.";
}

// 2. IF...ELSE statement — checks temperature
function checkTemperature($temperature) {
    if ($temperature > 37.5) {
        return "You have a high temperature.";
    } else {
        return "Your temperature is normal.";
    }
}

// 3. IF...ELSEIF...ELSE statement — checks marital status
function checkMaritalStatus($maritalStatus) {
    if (strtolower($maritalStatus) === "single") {
        return "You are single.";
    } elseif (strtolower($maritalStatus) === "married") {
        return "You are married.";
    } elseif (strtolower($maritalStatus) === "divorced") {
        return "You are divorced.";
    } else {
        return "Marital status not recognized.";
    }
}

// 4. SWITCH statement — responds to the day of the week
function getDayMessage($dayInAWeek) {
    switch ($dayInAWeek) {
        case "Monday":
            return "It's Monday. A fresh start!";
        case "Wednesday":
            return "It's Wednesday. Halfway there!";
        case "Friday":
            return "It's Friday! The weekend is near.";
        case "Sunday":
            return "It's Sunday. Time to relax.";
        default:
            return "It's just another day.";
    }
}

// Sample inputs
$age = 17;
$temperature = 38.2;
$maritalStatus = "single";
$dayInAWeek = "Friday";

// Output
echo "Results:\n";
echo checkAge($age) . "\n";
echo checkTemperature($temperature) . "\n";
echo checkMaritalStatus($maritalStatus) . "\n";
echo getDayMessage($dayInAWeek) . "\n";

?>
