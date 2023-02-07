<!DOCTYPE html>
<html>
    <head>
    <title>TD5</title>
    <meta charset='utf-8'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name="author" content ="Yanis Helali" />
    <meta name="Date" content="2023" />
    <meta name="page" content="1"/>
    <meta name="Lieu" content="Cyu_univ"/>
    <meta name="Sujet" content="TD5"/>
    <meta name="Prof" content="Marc_LEMAIRE"/>
    <link rel="stylesheet" href ="style.css"/>
    </head> 
    <body>
        <h1>Exercice php</h1>
        <main>
    <section>
    <h2>Exercice 1</h2>
        <?php
        echo"<ul>\n";
        for($i=1;$i<21;$i++){
            echo"<li>hello numero".$i."<li\n";
        }
        echo"</ul>\n";
        ?>
        </section>
        <section>
            <h2>Exeercice 2</h2>
            <?php
            echo date("d/m/Y H:i:s"."\n");
            ?>
        </section>
        <section>
            <h2>Exercice 3 </h2>
            <article>
                <h3>premiére méthode:</h3>
                <?php
                    echo ("<p> L'affichage des chiffres hexadécimaux de 0 à F est le suivant :</p>\n");
                    echo ("<ul>\n");
                    for($i = 0; $i <16 ; $i++){
                        printf("<li> %x </li>", $i);
                    }
                    echo ("</ul>\n");
                ?>
            </article>
            <article>
                <h3>deuxiéme méthode</h3>
                <?php
                    echo ("<p> L'affichage des chiffres hexadécimaux de 0 à F est le suivant :</p>\n");
                    echo ("<ul>\n");
                for ($i = 0; $i <16; $i++) {
                    $y = dechex($i);
                    echo ("<li>$i = $y <li>\n");
                }
                echo ("</ul>\n");
                ?>
            </article>
            </section>
            <section>
                <h2>Exercice 4</h2>
                <?php
                    echo ("<table>\n");
                    echo ("<caption>Table de multipliation(10x10)</caption>\n ");
                    echo ("<thead>\n");
                    echo ("<tr>\n");
                        echo ("<th scope="."col".">x</th>\n");
                        echo ("<th scope="."col".">1</th>\n");
                        echo ("<th scope="."col".">2</th>\n");
                        echo ("<th scope="."col".">3</th>\n");
                        echo ("<th scope="."col".">4</th>\n");
                        echo ("<th scope="."col".">5</th>\n");
                        echo ("<th scope="."col".">6</th>\n");
                        echo ("<th scope="."col".">7</th>\n");
                        echo ("<th scope="."col".">8</th>\n");
                        echo ("<th scope="."col".">9</th>\n");
                        echo ("<th scope="."col".">10</th>\n");
                    echo ("</tr>\n");
                    echo ("</thead>\n");
                    echo ("<tbody>\n");
                for ($i = 1; $i <= 10; $i++) {
                    echo ("<tr>\n");
                    echo ("<th scope=" . "row" . ">$i</th>\n");
                    for ($j = 1; $j <= 10; $j++) {
                        $y = $i * $j;
                        echo ("<td>$y</td>\n");
                    }
                    echo ("</tr>\n");
                    }
                    echo ("</tbody>\n");
                    echo ("</table>\n");        
                ?>
            </section>
    <section>
        <h2>Exercice 5</h2>
        <article>
            <h3>Premiére méthode</h3>
            <?php
            echo ("<p> Premiérement, on transforme d'héxadécimal à décimal en utilisant la fonction (dechex())</p>\n");
            $i = 0x41;
            $y = dechex($i);
            echo ("<p>$y = $i</p>\n");
            echo ("<p>deuxiémement on tranforme de décimal à ASCII en utilisant (hexdec() et chr())</p>\n");
            $y = hexdec($i);
            echo ("<p>$i = $y</p>\n");
            $z = chr($i);
            echo ("<p>$y = $z</p>\n");
            ?>
        </article>
        <article>
            <h3>Deuxiéme méthode</h3>
            <?php
            echo ("<p> Premiérement, on transforme d'héxadécimal à décimal en utilisant la fonction (dechex())</p>\n");
            $i = 0x2B;
            $y = dechex($i);
            echo ("<p>$y = $i</p>\n");
            echo ("<p>deuxiémement on tranforme de décimal à ASCII en utilisant (ord() et chr())</p>\n");
            $z = ord($i);
            echo ("<p>$i = $z</p>\n");
            $x = chr($i);
            echo ("<p>$z = $x</p>\n");
            ?>
        </article>
    </section>
    <section>
        <h2>Exercice 6</h2>
        <?php
            echo ("<table>\n");
            echo ("<caption>Illustration 2 : conversions bases 2, 8, 10, 16.</caption>\n");
            echo ("<thead>\n");
            echo ("<tr>\n");
            echo ("<th scope="."col".">décimal</th>\n");
            echo ("<th scope="."col".">hexadécimal</th>\n");
            echo ("<th scope="."col".">octal</th>\n");
            echo ("<th scope="."col".">binaire</th>\n");
            echo ("</tr>\n");
            echo ("</thead>\n");
            echo ("<tbody>\n");
            for ($i = 0; $i <= 17; $i++){
                echo ("<tr>\n");
                echo("<th scope="."row".">$i</th>\n");
                $x = base_convert($i, 10, 16);
                echo ("<td>$x</td>\n");
                $y = base_convert($i, 10, 8);
                echo ("<td>$y</td>\n");
                $z = base_convert($i, 10, 2);
                echo ("<td>$z</td>\n");
                echo ("</tr>\n");
            }
            echo ("</tbody>\n");
            echo ("</table>\n");
        ?>
    </section>
        </main>
        <footer>
            <div>
                <span>HELALI_Yanis/PHP/TD5/CYU_DEPINFO/2023</span>
            </div>
        </footer>
        </body>
        </html>
        