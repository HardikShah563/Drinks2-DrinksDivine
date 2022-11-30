<?php

$dbname = 'drinks-divine';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (!$db) {
    echo "Error Connecting to Database";
}
session_start();

function signup($data)
{
    global $db;
    $password = md5($data["password"]);
    $sql = "insert into users(name, email, password) values(?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sss", $data["name"], $data["email"], $password);
    if ($stmt->execute()) {
        return 1;
    }
    return 0;
}

function email_exists($email)
{
    global $db;
    $sql = "select * from users where email = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if (mysqli_num_rows($result)) {
        return 1;
    }
    return 0;
}

function login($data)
{
    global $db;
    $sql = "select * from users where email = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $data["email"]);
    $stmt->execute();
    $result = $stmt->get_result();
    if (mysqli_num_rows($result)) {
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == md5($data["password"])) {
                $_SESSION["uid"] = $row["uid"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                return 1;
            } else {
                return 0;
            }
        }
    }
    return 0;
}

function get_drinks()
{
    global $db;
    $sql = "select * from drinks";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function get_drink($id)
{
    global $db;
    $sql = "select * from drinks where pid = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function get_users()
{
    global $db;
    $id = $_SESSION['uid'];
    $sql = "select * from users";
    $stmt = $db->prepare($sql);
    // $stmt->bind_param("s", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function get_user($id)
{
    global $db;
    $sql = "select * from users where uid = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    return $stmt->get_result();
}

function edit_user($data)
{
    global $db;
    $password = md5($data['password']);
    $sql = "update users set name = ?, email = ?, password = ? where uid = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ssss', $data['name'], $data['email'], $password, $data['uid']);
    if ($stmt->execute()) {
        return 1;
    }
    return 0;
}

function delete_user($id)
{
    global $db;
    $sql = "delete from users where uid = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $id);
    if ($stmt->execute()) {
        return 1;
    }
    return 0;
}

function add_to_cart($item)
{
    $quantity = 1;
    if (isset($_SESSION["cart"])) {
        $cart = $_SESSION["cart"];
    } else {
        $cart = [];
    }

    if (array_key_exists($item, $cart)) {
        $tmpqty = $cart[$item] + $quantity;
        unset($cart[$item]);
        $cart[$item] = $tmpqty;
        $_SESSION["cart"] = $cart;
    } else {
        $cart[$item] = $quantity;
        $_SESSION["cart"] = $cart;
    }

    return 1;
}

function remove_from_cart($item)
{
    if (isset($_SESSION["cart"])) {
        $cart = $_SESSION["cart"];
    } else {
        $cart = [];
    }
    unset($cart[$item]);
    $_SESSION["cart"] = $cart;
    return 1;
}

function get_cart()
{
    if (isset($_SESSION["cart"])) {
        return $_SESSION["cart"];
    }
    return [];
}

function get_drinks_by_ids($ids)
{
    global $db;
    $id_str = implode("', '", array_keys($ids));
    $sql = "select * from drinks where dID in ('" . $id_str . "')";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}

function get_total()
{
    $cart = get_cart();
    $drinks = get_drinks_by_ids($cart);
    $total = 0.0;
    if (mysqli_num_rows($drinks)) {
        while ($row = $drinks->fetch_assoc()) {
            $total += $row["dPrice"];
        }
    }
    return $total;
}

function checkout($data)
{
    global $db;
    $sql = "insert into orders(userID, name, email, total, drinks) values(?,?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssss", $data["uid"], $data["name"], $data["email"], $data["total"], $data["drinks"]);
    if ($stmt->execute()) {
        return 1;
    }
    return 0;
}

function empty_cart()
{
    $cart = [];
    $_SESSION['cart'] = $cart;
}

function get_orders($id)
{
    global $db;
    $sql = "select * from orders where userID = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}
