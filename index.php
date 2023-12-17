
<?php
require_once('require/db.php');

$paramOne = null;
$paramTwo = null;

function dd($param){
    print_r('<pre>');
    var_dump($param);
}

$staticPages = [
    '' => [['guest'], 'one_level'],
    'index' => [['guest'], 'one_level'],

    'register' => [['guest'], 'one_level'], 
    'login' => [['guest'], 'one_level'],

    'course' => [['user', 'admin'], 'one_level', 'false'],
    'courses' => [['user', 'admin'], 'one_level'],

    'profile' => [['user', 'admin'], 'two_level'],
    'setting' => [['user', 'admin'], 'one_level'],
    'logout' => [['user', 'admin'], 'one_level'],

    'admin-login' => [['admin'], 'one_level'],
    'admin-courses' => [['admin'], 'one_level'],
    'admin-course' => [['admin'], 'one_level'],
];

$url = $_SERVER["REQUEST_URI"];
$lineArray = explode("/", $url);

if(!empty($lineArray[1])) $paramOne = $lineArray[1];
if(!empty($lineArray[2])) $paramTwo = $lineArray[2];

$cssAccess = [
    '../css/normalize.css',
    '../css/components.css',
    '../css/header.css',
    '../css/footer.css',
];

if(file_exists('css/'.$paramOne.".css")){ 
    $cssAccess[] = '../css/'.$paramOne.'.css';
}

function cookieCheck() {
    global $db;
    $role = 'guest';

    if(!empty($_COOKIE['login']) && !empty($_COOKIE['password'])){
        $loginCookie = $_COOKIE['login']; 
        $passwordCookie = $_COOKIE['password']; 

        $cookieCheckQuery = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$loginCookie' AND `password` = '$passwordCookie'"); 
        $resultCookieCheckQuery = mysqli_fetch_array($cookieCheckQuery);

        if($resultCookieCheckQuery['login']){
            $role = 'user';
        }else{
            setcookie('login', '');
            setcookie('password', '');
            $role = 'guest';
        }
    }else{
        $role = 'guest';
    }

    return $role;
}

function slug($db, $paramOne = null, $paramTwo = null, $paramThree = null){
    global $staticPages;
    global $cssAccess;

    if(!empty($paramOne)){
        if(array_key_exists($paramOne, $staticPages)){
            if(isset($staticPages[$paramOne]) && in_array(cookieCheck(), $staticPages[$paramOne][0])) {
                if(!empty($paramTwo)){
                    require('template/'.$paramOne.".php");
                }else{
                    if(!empty($staticPages[$paramOne][2]) == 'false'){
                        
                        die('404');
                    }

                    require('template/'.$paramOne.".php");
                }
                
            }else{
                switch (cookieCheck()) {
                    case 'guest':
                        header('Location: ../login');
                        break;
                    
                    case 'user':
                        header('Location: ../profile');
                        break;

                    case 'admin':
                        header('Location: ../admin');
                        break;
                    
                    default:
                        header('Location: ../index');
                        break;
                }
            }
        }else{
            exit('404');
        }
    }else{ 
        header('Location: ../index');
    }
}
?>

<?=slug($db, $paramOne, $paramTwo);?>