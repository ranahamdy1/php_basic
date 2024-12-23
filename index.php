<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>php_basic</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
<h1>hello world</h1>

<p>
    <?php
    echo "hello world";
    ?>
</p>

<p>
    <?php
    // Create variable
    $var = 10;
    echo $var;
    ?>
</p>

<p>
    <?php
    echo '$var'; // Display as a string
    ?>
</p>

<p>
    <?php
    echo "$var"; // Display the value of $var
    ?>
</p>

<?php
$name = "Dark matter";
?>
<h1>you have read <?php echo $name; ?></h1>

<br>
///---------------------------
<br>

<?php
$score = 75;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}
?>

<br>
///---------------------------
<br>

<?php
// Ternary Operator
$age = 18;
$message = ($age >= 18) ? "Adult" : "Minor";
?>
<p>message is <?php echo $message; ?></p>

<br>
///---------------------------
<br>

<?php
// Switch Statement
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Friday":
        echo "Almost the weekend.";
        break;
    default:
        echo "Just another day.";
}
?>

<br>
///---------------------------
<br>

<br>
<?php
// Boolean value
$is_logged_in = true;

if ($is_logged_in) {
    echo "Welcome back!";
} else {
    echo "Please log in.";
}
?>

<br>
///---------------------------
<br>
/// Array
<br>

<?php
//1. Indexed Arrays (مصفوفة مفهرسة)
//$fruits = ["Apple", "Banana", "Orange"];
//or
$fruits = array("Apple", "Banana", "Orange");
//reach to values
//echo $fruits[0]; // Apple
//echo $fruits[1]; // Banana
//to add new item
$fruits[] = "Grapes";
//to show items
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>

<br>
///---------------------------
<br>

<?php
//2. Associative Arrays (مصفوفة ترابطية)
// to create array
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];
//or
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);
// to reach to value
//echo $person["name"]; // John
//echo $person["age"];  // 30

//to show value
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
?>

<br>
///---------------------------
<br>

<?php
//3. Multidimensional Arrays (مصفوفة متعددة الأبعاد)
// to create array
$people = [
    ["name" => "Alice", "age" => 25],
    ["name" => "Bob", "age" => 30],
    ["name" => "Charlie", "age" => 35]
];
// to reach to value
//echo $people[0]["name"]; // Alice
//echo $people[1]["age"];  // 30

//to show value
foreach ($people as $person) {
    echo "Name: " . $person["name"] . ", Age: " . $person["age"] . "<br>";
}
?>

<br>
///---------------------------
<br>
/// Function
<br>

<?php
function add($num1, $num2){
    return $num1 + $num2;
}

$result = add(2,5);
echo "result is $result";
?>

<h1>date is <?php echo date("Y-m-d"); ?></h1>

<br>
///---------------------------
<br>
/// Filters
<br>

<?php
$email = "user@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email!";
} else {
    echo "Invalid email!";
}
?>

<br>

<?php
// filter_input():
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if ($email) {
        echo "Valid email: $email";
    } else {
        echo "Invalid email.";
    }
}
?>

<br>

<?php
// filter_input_array():
$filters = [
    "name" => FILTER_SANITIZE_STRING,
    "age" => FILTER_VALIDATE_INT,
];

$data = filter_input_array(INPUT_POST, $filters);

if ($data) {
    print_r($data);
}
?>

<br>
///---------------------------
<br>

<br>

<?php
// array_filter()
$numbers = [1, 2, 3, 4, 5, 6];

$evenNumbers = array_filter($numbers, function ($number) {
    return $number % 2 === 0; // فقط الأرقام الزوجية
});

print_r($evenNumbers); // [2, 4, 6]

?>

<br>

<?php
// array_map()
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function ($number) {
    return $number ** 2;
}, $numbers);

print_r($squaredNumbers); // [1, 4, 9, 16, 25]

?>

<br>
///---------------------------
<br>

<br>
//Lambda Function
<br>
<?php
// الدالة Lambda Function في PHP هي دالة مجهولة (Anonymous Function) يتم تعريفها بدون اسم.
$sayHello = function ($name) {
    return "Hello, $name!";
};

echo $sayHello("Ahmed"); // Hello, Ahmed!
?>

</body>
</html>
