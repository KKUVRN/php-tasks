<?php
declare(strict_types=1);
error_reporting(-1);
session_start();

//а в понимании того, ЧТО, КАК и ЗАЧЕМ вы делаете

require __DIR__ . '/vendor/autoload.php';

function dump($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

//https://github.com/KKUVRN/php-tasks


if (isset($_POST['registry'])) {

    $data = [];
    foreach ($_POST as $key => $value) {
        if (!in_array($key, ['registry'])) {
			$data[$key] = strip_tags(htmlspecialchars(trim($value)));
        }
    }

	//$username = htmlspecialchars(strip_tags(trim($_POST['username'])));
	//print_r($username);die;
	//$password = strip_tags(htmlspecialchars(trim($_POST['password'])));

	$isError = false;
	$messageError = '';
	if (empty($data['username'])) {
		$messageError .= 'Empty $username<br>';
		$isError = true;
	} elseif (strlen($data['username']) < 3) {
		$messageError .= 'Username length min 3<br>';
		$isError = true;
	}

	if (empty($data['email'])) {
		$messageError .= 'Empty $password<br>';
		$isError = true;
	} elseif (strlen($data['email']) < 5) {
		$messageError .= 'password length min 3<br>';
		$isError = true;
	}

	if (empty($data['password'])) {
		$messageError .= 'Empty $password<br>';
		$isError = true;
	} elseif (strlen($data['password']) < 5) {
		$messageError .= 'password length min 3<br>';
		$isError = true;
	}

//	if (empty($username)) {
//		$messageError .= 'Empty $username<br>';
//		$isError = true;
//	} elseif (strlen($username) < 3) {
//		$messageError .= 'Username length min 3<br>';
//		$isError = true;
//	}
//
//	if (empty($password)) {
//		$messageError .= 'Empty $password<br>';
//		$isError = true;
//	} elseif (strlen($password) < 5) {
//		$messageError .= 'Username length min 3<br>';
//		$isError = true;
//	}

	if ($isError) {
		$_SESSION['error'] =  $messageError;
	} else {
	    $_SESSION['success'] = 'Вы успешно зарегистрировались.';
	}

	header("Location: /");
	die;
}

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}

if (isset($_SESSION['success'])) {
	echo $_SESSION['success'];
	unset($_SESSION['success']);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">1</div>

        <div class="col-md-4">
            <form action="" method="post">
                <input type="hidden" name="registry" value="1">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" name="username" value="" type="text" class="form-control">
                    <div id="usernameHelp" class="form-text">7</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Password</label>
                    <input id="email" name="email" value="" type="text" class="form-control">
                    <div id="emaildHelp" class="form-text">7</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" value="" type="text" class="form-control">
                    <div id="passwordHelp" class="form-text">7</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="col-md-4">3</div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>
















