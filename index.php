<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="styles/style.css">
<body>

<div class="w3-container">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Klausti</button>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <form action="action.php" method="post">
                    <fieldset>
                        <legend>Užpildykite formą</legend>

                        <label for="vardas">Jūsų vardas:</label>
                        <input type="text" id="vardas" name="vardas" required>

                        <label for="elpastas">Elektroninis paštas:</label>
                        <input type="email" id="elpastas" name="elpastas" required>

                        <label for="klausimas">Jūsų klausimas:</label>
                        <textarea name="klausimas" id="klausimas" cols="30" rows="10" required></textarea>

                        <input type="submit" id="ok" name="ok" value="Klausti">

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
