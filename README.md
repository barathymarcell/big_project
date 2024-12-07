# E-Learning System 

## Áttekintés a projektmunkáról
A célunk, hogy létrehozzunk egy átfogó eLearning platformot, amely megkönnyíti a tanfolyamok létrehozását, a diákok beiratkozását és az egyetemmel kapcsolatos teendőik kezelését, a tartalomszolgáltatást, a tanulók értékelését, előrehaladásának nyomon követését. A rendszer célja az online oktatás fejlesztése azáltal, hogy felhasználóbarát felületeket biztosít az oktatók és a diákok számára.


### Dokumentumok
- [Követelmény specifikáció](DOCS/kovetelmenyspec.md)
- [Funkció specifikáció](DOCS/funkciospec.md) 
- [Rendszerterv](DOCS/rendterv.md)

### Hogyan állítható be a rendszer otthoni eszközökről?

- 1. lépés: Töltse le a "xampp" nevű webszerver-szoftvercsomagot. Elérhetősége: [Letöltés](https://www.apachefriends.org/download.html)

- 2. lépés: Biztosítson Notepad++ vagy egyéb szövegszerkesztői alkalmazást az eszközén.

- 3. lépés: Töltse le a GitHub könyvtárban lévő állományokat.

- 4. lépés: A "xampp" telepítése után másolja az "elearning" mappát a gyökér könyvtárba, vagy arra a lemezre, ahol a "xampp/htdocs" elérési út található.
 
- 5. lépés: A "xampp" futtatásakor indítsa el az Apache, illetve MySQL modulokat. (Start gomb megnyomása az egyes modulokon)

- 6. lépés: Nyissa meg a PHPAdmin című weboldalt, melyet az alábbi linkre kattintva tehet meg: [Megnyitás](http://localhost/phpmyadmin)

- 7. lépés: Az oldal megnyitása után hozzon létre egy új adatbázist "capstone" néven, amelyet az Új / New funkcióval tehet meg.

- 8. lépés: Importálja a(z) capstone.sql névvel ellátott állományt a(z) "lms/db" mappából.

- 9. lépés: Futtassa a "http://localhost/lms" linket.
 
Bármilyen fennakadás esetén a(z) [Segítség](https://www.sourcecodester.com/php/7339/learning-management-system.html) fülön megtalálhatják a megoldást!

