<?php
// Indexed or numeric array
$colors = ["Black", "Green", "Yellow"];

print_r($colors);

?>
<br>
<?php
$user = array("Alex", "Peter", "Ann");
print $user[2];
?>
<pre>
    <?php print_r($user);?>
</pre>
<?php
// Associative arrays

$user_data = [
    "fullname" => "Alex Okama",
    "email" => "AOkama@yahoo.com",
    "phone" => "+2548458965"
];
print $user_data["email"];
?>
<pre>
    <?php print_r($user_data); ?>
</pre>
<?php
// Multidimentional Arrays

$user_details =[
    "Director" => array(
        "fullname" => "Alex Okama",
        "address" => "Mada",
        "email" => "AOkama@yahoo.com",
        "phone" => [
            "Home" => "+2548458565",
            "Work" => "+2548451265",
            "Mobile" => "+2548458965",
        ]
        ),
    "Manager" => array(
        "fullname" => "Peter Okama",
        "address" => "Mada",
        "email" => "POkama@yahoo.com",
        "phone" => [
            "Home" => "+2547268965",
            "Work" => "+2548498575",
            "Mobile" => "+2547137665",
        ]
        ),
    "Secretary" => array(
        "fullname" => "Ann Okama",
        "address" => "Mada",
        "email" => "AnOkama@yahoo.com",
        "phone" => [
            "Home" => "+2548458965",
            "Work" => "+2548496365",
            "Mobile" => "+2547128965",
        ]
        )
        ];
        print $user_details["Secretary"]["phone"]["work"];
?>
<pre>
    <?php print_r($user_details); ?>
</pre>