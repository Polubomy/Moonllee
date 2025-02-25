<?php
echo ("&lt;HTML&gt;&lt;HEAD&gt;&lt;TITLE&gt;Использование HTML и PHP в одном файле&lt;/TITLE&gt;&lt;/HEAD&gt;&lt;BODY&gt;&lt;h1&gt;Использование HTML и PHP в одном файле&lt;/h1&gt;&lt;?php phpinfo(); ?&gt;&lt;/BODY&gt;&lt;/HTML&gt; Привает, мир ");
echo("<br>");echo("<br>");
$tags = [
    "&lt;HTML&gt;",
    "&lt;HEAD&gt;",
    "&lt;TITLE&gt;",
    "&lt;/TITLE&gt;",
    "&lt;/HEAD&gt;",
    "&lt;BODY&gt;",
    "&lt;h1&gt;",
    "&lt;/h1&gt;",
    "&lt;?php phpinfo(); ?&gt;",
    "&lt;/BODY&gt;",
    "&lt;/HTML&gt;",
    "Привет, мир"
];

$i = 0;
while ($i < count($tags)) {
    echo $tags[$i] . "<br>";
    $i++;
}
?>
