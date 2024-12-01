# ELearning Management System (LMS) Tesztterv

|    |                                                  | Succes/Not |
|----|--------------------------------------------------|------------|
| 1  | Felhasználói Bejelentkezés                       | Success    |
| 2  | Új Kurzus Létrehozása                            | Success    |
| 3  | Feladat Beküldése                                | Success    |
| 4  | Tananyag Letöltése                               | Success    |
| 5  | Felhasználói Profil Szerkesztése                 | Success    |
| 6  | Kérdőív Kitöltése és Értékelése                  | Success    |
| 7  | Szerepkörök Jogosultságainak Ellenőrzése         | Success    |
| 8  | Készségfejlesztő Játék Ellenőrzése               | Success    |
| 9  | Kommunikációs Eszközök Működésének Ellenőrzése   | Success    |
| 10 | Hibaüzenetek és Visszajelzések Ellenőrzése       | Success    |
| 11 | Keresési Funkció Tesztelése                      | Success    |
| 12 | Videó Lejátszó Működésének Ellenőrzése           | Success    |
| 13 | Közösségi Funkciók Tesztelése                    | Success    |
| 14 | Egyedi Felhasználói Profil Ellenőrzése           | Success    |
| 15 | Tanúsítvány Kiosztásának Ellenőrzése             | Success    |
| 16 | Beiratkozás Kurzusra                             | Success    |
| 17 | Kijelentkezés és Újbóli Bejelentkezés Tesztelése | Success    |
| 18 | Hiba Tolerancia Tesztelése                       | Success    |
| 19 | Teljesítmény Tesztelése                          | Success    |
| 20 | Frissítések És Hibajavítások Ellenőrzése         | Success    |

## Tesztlépések

### 1. Bejelentkezés:

   - Felnéztem az ELearning Management System főoldalára, ahol a bejelentkező formmal találtam magam.
   - Sikeresen be tudtam jelentkezni Hallgatói, illetve Oktatói fiókokkal.
   - Sikeresen be tudtam jelentkezni a Rendszergazdai fiókba is, amit az LMS rendszerünk admin felületének megnyitásával voltam képes elérni.

### 2. Kurzusok böngészése:

   - Navigáljon a rendszeren keresztül különböző kurzusokhoz. A rendszer futtatása során elnavigáltam különböző kurzusokhoz, amiket korábban rögzítettünk az adatbázisból.
   - A művelet végrehajtása során mindegyik kurzus sikeresen elérhető volt oktatói, illetve hallgatói fülből is.

### 3. Lecke megnyitása:

   - A kurzus megnyitásakor célom volt, hogy ellenőrizzem a feltöltött anyagok megfelelő működését.
   - Megnyitottam egy leckét.
   - A lecke tartalma sikeresen megjelent, az elvárt eredményt hozta.

### 4. Interaktív tartalom:

   - Ellenőriztem az interaktív tartalmak működését (pl., kvíz létrehozását, illetve megoldását).
   - Megbizonyosodtam arról, hogy a válaszok, pontszámok stb. helyesen megjelentek.

### 5. Teljesítményteszt:

   - Itt az Elearning Management System adminisztrációs paneljéből végeztem kísérletet a weboldal futtatásakor, megvizsgálva a futási időt és a rendszer agilis válaszidejét.
   - Az eredménnyel elégedett voltam, különböző információs ablakok és hibakódok jól beállított késleltetéssel jelentek meg, továbbá az átirányítással sem volt problémám.

### 6. Admin felhasználó funkciók:

   - **Adatok rögzítése:**
     - Az Admin felhasználóval jelentkezzen be.
     - Próbáljon meg új adatokat rögzíteni az adatbázisban.
     - Ellenőrizze, hogy az adatok sikeresen rögzültek-e.

   - **Tartalom módosítása:**
     - Az Admin felhasználóval jelentkezzen be.
     - Módosítsa a rendszer tartalmát.
     - Győződjön meg róla, hogy a módosítások érvényesülnek.

### 7. Oktató felhasználó funkciók:

   - **Gyakorló kvízek készítése:**
     - Az Oktató felhasználóval jelentkezzen be.
     - Hozzon létre egy új gyakorló kvízt.
     - Ellenőrizze, hogy a kvíz sikeresen létrejött.

   - **Tananyag megosztása:**
     - Az Oktató felhasználóval jelentkezzen be.
     - Ossza meg egy kurzus tananyagát.
     - Bizonyosodjon meg arról, hogy a tananyag megfelelően megosztásra került.

   - **Csoport létrehozása:**
     - Az Oktató felhasználóval jelentkezzen be.
     - Hozzon létre egy saját hallgatói csoportot.
     - Ellenőrizze, hogy a csoport létrejött és a hallgatók hozzáadása lehetséges.

## Teszteredmények rögzítése

A tesztlépések eredményeit a következőképpen rögzítettem:

- Sikeres végrehajtás: A tesztterv kitöltése során pozitív csalódásom van a rendszer futtatását illetően, sikerült kihoznunk magunkból az elvárásainkat.
- Sikertelen végrehajtás, hibaüzenettel: Ha üres tömböket tárolunk például kvízeknél vagy listáknál, akkor etnikai szempontból jelennek meg hibaüzenetek, amiket a későbbiekben törekszünk korrigálni.
- Teljesítményproblémák: Nem ütköztem teljesítményproblémával a teszt végrehajtása során, elégedett lehetek ilyen szempontból.
