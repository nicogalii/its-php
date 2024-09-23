<?php
$operatori = ["+", "-", "*", "/"];

if (isset($_GET)) {
    echo "Hai richiesto via get";
    var_dump($_GET);
}
echo "<hr>";
if (isset($_POST)) {
    echo "Hai richiesto via post";
    // var_dump($_POST);
    $num1 = $_POST["num1"] ?? 0;
    $num2 = $_POST["num2"] ?? 0;
    $ope = $_POST["operatore"] ?? "+";
    $addizione = calcola($num1, $num2, $ope);
}
echo "<hr>";
if (isset($_REQUEST)) {
    echo "Hai richiesto via request";
    var_dump($_REQUEST);
}

function calcola($a, $b, $operatore = "+")
{

    switch ($operatore) {
        case "+":
            return $a + $b;
            break;
        case "-":
            return $a - $b;
            break;
        case "*":
            return $a * $b;
            break;
        case "/":
            return $a / $b;
            break;
        default:
            return "Non si può fare";
    }
}


?>

<div id="home">
    <h2 class="titolo">Fai calcoli avanzati</h2>
    <div>
        <form action="" method="post">
            <div>
                <label for="num1">Primo numero</label>
                <input type="number" name="num1" id="num1">
            </div>
            <div>
                <label for="num2">Secondo numero</label>
                <input type="number" name="num2" id="num2">
            </div>
            <div>
                + <input type="radio" name="operatore" value="+">
                - <input type="radio" name="operatore" value="-">
                * <input type="radio" name="operatore" value="*">
                / <input type="radio" name="operatore" value="/">

            </div>
            <div>
                <label for="calcola">Calcola</label>
                <input type="submit" name="calcola" id="calcola">
            </div>
        </form>
    </div>
    <div id="result">
        <p><?= $addizione ?></p>
    </div>

    <div id="pulsantiera">

        <?php for ($i = 0; $i < 10; $i++) : ?>
            <button class="cifra"><?= $i ?></button>
        <?php endfor; ?>


    </div>
    <div id="operatori">

        <?php for ($i = 0; $i < count($operatori); $i++) : ?>
            <button class="operatore"><?= $operatori[$i] ?></button>
        <?php endfor; ?>


    </div>

    <script>
        const numeriContainer = document.querySelector("#pulsantiera");
        const operatoriContainer = document.querySelector("#operatori");
        const radio = document.querySelectorAll("input[name='operatore']")

        const display = document.getElementById("result");
        const num1 = document.getElementById("num1");
        const num2 = document.getElementById("num2");
        let buco = "num1"

        console.log(radio);
        numeriContainer.addEventListener("click", function(event) {
            const cifra = event.target;
            if (!cifra.className.includes("cifra")) return;
            display.textContent += cifra.textContent
            if (buco == "num1") {
                num1.value += cifra.textContent
            }
            if (buco == "num2") {
                num2.value += cifra.textContent
            }
        })

        operatoriContainer.addEventListener("click", (event) => {
            const operatore = event.target;
            if (!operatore.className.includes("operatore")) return;
            buco = "num2"
            const selected = operatore.textContent
            radio.forEach(opzione => {

                if (opzione.value == selected) {
                    opzione.checked = true
                }
            })
            display.textContent += operatore.textContent
        })
    </script>

</div>