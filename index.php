<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Arthur Bloem</title>
</head>

<body>
    <div id="title">
        <h1>Arthur Bloem</h1>
        <p>Hallo, ik ben Arthur Bloem ik zit op het Summa college en ik volg het eerste jaar van de opleiding Software Development</p>
        <p>Zoals je kan zien ben ik een grappige jongenman (dat zei mijn oma tenminste)</p>
    </div>

    <div>
        <h1 id="compotenties-text">Competenties <-------------</h1>
        <ul>
            <li>
                <h2>Ik hou van broodjes eten</h2>
                <p>big orange balls <a href="comp#comp1">Lees meer...</a></p>
            </li>
            <li>
                <h2>big blue balls</h2>
                <p>big green balls <a href="comp#comp2">Lees meer...</a></p>
            </li>
            <li>
                <h2>big red balls</h2>
                <p>big yellow balls <a href="comp#comp3">Lees meer...</a></p>
            </li>
            <li>
                <h2>big lemon balls</h2>
                <p>big aqua balls <a href="comp#comp4">Lees meer...</a></p>
            </li>
        </ul>
        <h2>favorieten filmpjes</h2>
        <ol>
            <li>Shrek</li>
            <li>Shrek 2</li>
            <li>Shrek 3</li>
            <li>Shrek 4</li>
            <li>Shrek 5</li>
        </ol>
    </div>
    <div id="vrije-tijd">
        <h1>Wat doe ik in mijn vrije tijd?</h1>
        <p>Dat is een hele goede vraag! mischien als je op <a href="vrije-tijd">deze</a> link klikt kom je wel op een pagina die dat uitlegd!</p>
        <p>en als wil weten wat ik doe kwa games en social media dan moet je <a href="games-en-social-media">hier</a> zijn</p>
    </div>
    <h2>dit is mijn fret zeg hier hallo tegen fret</h2>
    <p>ik heb ook een andere fret maar die ligt te slapen😴😴</p>

    <form action="hallo" id="fret-foto-text">
        <input value="goedendag lieven frettenbeest. Ik wens u nog een prettige dag" type="text">
        <button>zeg hier hallo</button>
    </form>
    <img id="fret-foto" src="cv/img/fret.png" alt="" srcset="">
    <div style="position: absolute; z-index: -3;">
        <h2>Wat anderen zeggen over mij</h2>
        <?php

        for ($i = 0; $i < 300; $i++) {
            echo "<p>'Arthur is heel grappig!' - Mijn oma</p>";
        }
        ?>

    </div>
    <footer style="margin-top: 200px;">
        <div id="links">
            <a href="CV/index.php" style="z-index: 10;"> Download mijn CV</a>
            <a target="_blank" href="https://www.urbandictionary.com/define.php?term=Black+men#17805756">ik heb geen linkedin maar je kan het porbeeren</a>
        </div>

        <div id="foto">
            <p>
                (dit ben ik *insert down arrow*)
            </p>
            <img id="ikdiesmoke" src="ikdiesmoke.png" alt="">
        </div>
    </footer>


</body>

</html>