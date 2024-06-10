<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="administracija.css">
    <title>Administracija</title>
    <script>
        function validateForm() {
            let naslov = document.getElementById('naslov').value;
            let sazetak = document.getElementById('sazetak').value;
            let glavniTekst = document.getElementById('glavniTekst').value;
            let category = document.getElementById('category').value;
            let image = document.getElementById('image').value;

            if (naslov === "" || naslov.length > 255) {
                alert("Naslov vijesti je obavezan ili je pre dugačak.");
                return false;
            }

            if (sazetak === "" || sazetak.length > 70) {
                alert("Kratki sažetak je obavezan ili je pre dugačak.");
                return false;
            }

            if (glavniTekst === "" || glavniTekst.length > 701) {
                alert("Tekst vijesti je obavezan ili je pre dugačak.");
                return false;
            }

            if (category === "" || category > 40) {
                alert("Kategorija vijesti je obaveznadd ili je pre dugačak.");
                return false;
            }

            if (image === "") {
                alert("Odabir slike je obavezan.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <header>
        <div class="red-line"></div>
        <div class="header-content">
            <h1 class="logo">einen neuen Artikel hinzufügen</h1>
            <nav>
                <ul>
                    <li><a href="naslovna.php">Home</a></li>
                    <li><a href="sport.php?id=sport">Berlin-Sport</a></li>
                    <li><a href="kultur.php?id=kultur">Kultur und Show</a></li>
                    <li><a href="administracija.php">Administration</a></li>
                </ul>
            </nav>
        </div>
    </header>
        <main class="form-container">
            <form action="scripts/submit_news.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="naslov">Naslov vijesti:</label>
                    <input type="text" id="naslov" name="naslov" >
                </div>
                <div class="form-group">
                    <label for="sazetak">Kratki sažetak vijesti:</label>
                    <textarea id="sazetak" name="sazetak" rows="2" ></textarea>
                </div>
                <div class="form-group">
                    <label for="glavniTekst">Tekst vijesti:</label>
                    <textarea id="glavniTekst" name="glavniTekst" rows="8" ></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Kategorija vijesti:</label>
                    <select id="category" name="category" >
                        <option value="" disabled selected>Select category</option>
                        <option value="sport">Sport</option>
                        <option value="kultur">Kultur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Odabir slike:</label>
                    <input type="file" id="image" name="image" accept="image/*" >
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="show" id="show"> Prikazati na stranici
                    </label>
                </div>
                <div class="form-group">
                    <button type="submit">Pošalji</button>
                </div>
            </form>
            <form method="post" action="scripts/logout.php" >
                <div class="form-group">
                    <button type="submit">Logout</button>
                </div>
            </form>
        </main>
    <footer>
        <div class="footer-content">
            <p>Weitere Online-Angebote der Axel Springer SE:</p>
        </div>
        <div class="gray-footer"></div>
    </footer>
</body>
</html>
