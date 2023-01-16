
// home
// echo 'home: '.getcwd().'<br>';

// user
// $userid = posix_geteuid();
// $user = posix_getpwuid($userid);
// echo 'user: '.$user['name'].'<br>';

// group
// $groupid = posix_getegid();
// $group = posix_getgrgid($groupid);
// echo 'group: '.$group['name'].'<br>';

// write access
file_put_contents('test.txt', 'OK');

if (file_exists('test.txt')) {
    unlink('test.txt');
    echo "<h2 style=\"color: green;\">info: you have write access</h2>\n";
} else {
    echo "<h2 style=\"color: red;\">error: you do not have write access</h2>\n";
}
?>
    </body>
</html>
