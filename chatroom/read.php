 <script>
// 	(function(){
//     var req = new XMLHttpRequest,
//     folder = folder;

//     //Div that the output will go into once it's loaded
//     document.write('<div id="' + folder + '"></div>');
//     req.open('GET', 'chatlog.txt');
//     req.onreadystatechange = function () {
//         if (req.readyState == 4) {
//             document.getElementById(folder).innerHTML = req.responseText;
//         }
//     }
//     req.send();
// })();



</script>

<?php 

$myfile = fopen("chatlog.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("chatlog.txt"));
fclose($myfile);
 ?>