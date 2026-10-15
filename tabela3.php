
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
</head>
<body>

<table border="1" style="width:100%; border-collapse:collapse; text-align:center;">

    <tr style="background-color:#9900cc; color:white;">
        <th>Cabeçalho 1</th>
        <th>Cabeçalho 2</th>
        <th>Cabeçalho 3</th>
    </tr>

    <tr>
        <td rowspan="2" style="background-color:black; color:white; text-align:left;">
            Conteúdo 1
        </td>

        <td>
            <table border="1" style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="background-color:yellow;">1</td>
                    <td style="background-color:red; color:white; text-align:right;">2</td>
                </tr>
                <tr>
                    <td style="background-color:blue; color:white; text-align:right;">3</td>
                    <td style="background-color:lime;">4</td>
                </tr>
            </table>
        </td>

        <td rowspan="2" style="background:linear-gradient(to right,yellow,orange,red,purple); text-align:left;">
            Conteúdo 3
        </td>
    </tr>

    <tr>
        <td style="background-color:#eeeeee; text-align:right; height:55px;">
            Conteúdo 5
        </td>
    </tr>

    <tr>
        <td colspan="1" style="background-color:black; color:white;">
            Conteúdo 4
        </td>

        <td>
            <table border="1" style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="background-color:orange;">5</td>
                    <td style="background-color:violet;">6</td>
                </tr>
                <tr>
                    <td style="background-color:deeppink;">7</td>
                    <td style="background-color:orange;">8</td>
                </tr>
            </table>
        </td>

        <td></td>
    </tr>

</table>

</body>
</html>
