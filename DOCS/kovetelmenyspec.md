 # Elearning Kezelőrendszer Követelményspecifikáció

## Bevezetés

Az E-Learning Kezelőrendszer (LMS) kifejlesztéséhez szükség van egy alapos bevezetésre, amely bemutatja az LMS rendszer céljait és a projekttel kapcsolatos általános kontextust. A bevezetés kulcsfontosságú információkat tartalmaz a projekt hátteréről és céljairól. Az e-learning rendszerek egyre fontosabb szerepet játszanak az oktatásban és a képzési folyamatokban. A digitalizáció térhódításával és az információtechnológia fejlődésével az online tanulás vált az oktatás alapvető részévé. Ez a követelményspecifikáció olyan e-learning rendszert ír le, amely a modern oktatási igényeknek megfelelően készül, és lehetővé teszi a hatékony, hozzáférhető és interaktív tanulást.

Fontos leszögezni, hogy az általunk módosított Elearning Kezelőrendszer (LMS) eredeti forráskódja [itt](https://1sourcecodr.blogspot.com/2022/02/online-elearning-system-in-php-my-sql.html) található meg.

### Cél és Háttér

Az LMS rendszer célja az oktatás modernizálása és az online oktatás elősegítése. Az online oktatás területe az elmúlt években folyamatosan növekszik, és a tanárok és diákok egyre inkább támaszkodnak digitális eszközökre az oktatási tartalmakhoz való hozzáféréshez.

Az LMS rendszer megvalósítása lehetővé teszi a tanároknak, hogy könnyedén hozzanak létre online kurzusokat és kezeljék azokat. A diákok számára pedig lehetővé teszi az interaktív tartalmakhoz való hozzáférést és a távoktatásban való részvételt. Az LMS rendszer segítségével az oktatás és tanulás egyszerűbbé és hozzáférhetőbbé válik.

### Elvárások és Környezet

Az LMS rendszernek a modern oktatási igényekhez kell igazodnia. A következő néhány fontos elvárás és környezeti tényező meghatározza a rendszer tervezését és fejlesztését:

- **Felhasználói Bázis:** Az LMS rendszernek képesnek kell lennie kezelni egy növekvő felhasználói bázist, amely tartalmaz tanárokat és diákokat.

- **Multimédia Tartalom:** A rendszernek támogatnia kell a különböző multimédia tartalmakat, beleértve videókat, PDF fájlokat és interaktív anyagokat.

- **Biztonság:** Az adatvédelem és a rendszerbiztonság kulcsfontosságúak, mivel az oktatási anyagok érzékeny információkat tartalmazhatnak.

- **Felhasználói Élmény:** Az LMS rendszernek felhasználóbarát felülettel kell rendelkeznie, amely lehetővé teszi a könnyű navigációt és a tartalmak könnyű elérését.

- **Támogatás és Karbantartás:** A rendszernek rendelkeznie kell egy támogatási és karbantartási folyamattal a hibák gyors diagnosztizálására és javítására.

### Rendszer Tervezése

Az LMS rendszer tervezése magában foglalja a rendszerkomponensek, funkciók és fejlesztési lépések meghatározását. A tervezés során figyelembe vesszük a felhasználói igényeket és az elvárásokat, és megtervezzük a rendszert, hogy azokat kielégítse.

A következő szakaszokban részletesen ismertetjük az LMS rendszer követelményeit és funkcióit annak érdekében, hogy a rendszer hatékonyan megfeleljen az oktatási céloknak és a felhasználói elvárásoknak.


## Általános Követelmények

Az E-Learning Kezelőrendszer (LMS) kifejlesztéséhez és üzemeltetéséhez az alábbi általános követelményeknek megfelelően kell eljárni. Ezek a követelmények biztosítják, hogy a rendszer hatékonyan működjön és megfeleljen a felhasználói igényeknek.

### Alkalmazhatóság

- Az LMS rendszernek több platformon kell működnie, beleértve a böngészőket és mobil eszközöket. Az alkalmazásnak reszponzív dizájnnal kell rendelkeznie, hogy különböző képernyőméreteken is hatékonyan működjön.

- Az LMS rendszernek támogatnia kell a legelterjedtebb böngészőket és operációs rendszereket, például Chrome, Firefox, Safari és Windows, iOS, Android.

### Felhasználói Regisztráció és Bejelentkezés

- A felhasználói regisztráció és bejelentkezés folyamatának egyszerűnek és biztonságosnak kell lennie. A felhasználóknak egyedi felhasználói neveket és jelszavakat kell választaniuk, és a jelszavaknak titkosítva kell lenniük a biztonság érdekében.

- A jelszó-visszaállítási mechanizmusnak is rendelkezésre kell állnia, ha a felhasználók elfelejtik a jelszavukat.

### Adatvédelem és Biztonság

- Az LMS rendszernek megfelelő adatvédelmi és biztonsági intézkedéseket kell tartalmaznia az adatok védelme érdekében. Az adatoknak titkosítva kell lenniük a tárolás és a kommunikáció során.

- A rendszernek rendelkeznie kell jogosultságkezeléssel, amely lehetővé teszi a felhasználói jogok és hozzáférések szigorú kezelését. A diákok csak az őket megillető tartalmakhoz és funkciókhoz férhetnek hozzá.

### Teljesítmény és Skálázhatóság

- Az LMS rendszernek hatékonyan kell működnie, és el kell viselnie a növekvő felhasználói terhelést. A rendszernek skálázhatónak kell lennie, hogy a növekvő diák- és tanárkapacitást kiszolgálja.

- A tartalom gyors betöltése és az interaktív anyagok zökkenőmentes lejátszása fontos a felhasználói élmény javítása érdekében.

### Támogatás és Karbantartás

- Az LMS rendszernek rendelkeznie kell egy támogatási és karbantartási folyamattal. Fel kell készülnie az esetleges hibák gyors diagnosztizálására és javítására.

- A rendszer karbantartására és frissítésére rendszeresen szükség lehet a biztonság fenntartása és a funkcionalitás javítása érdekében.

- A felhasználói visszajelzéseket és panaszokat hatékonyan kell kezelni a rendszer fejlesztése érdekében.

Ezen általános követelmények betartása biztosítja, hogy az E-Learning Kezelőrendszer (LMS) megbízhatóan működjön, és megfeleljen a felhasználói igényeknek és elvárásoknak.


## Specifikus követelmények

5. **Tartalomkezelés:**
    - A rendszer támogatja a videók, PDF fájlok illetve egyéb tartalomformátumok feltöltését és megjelenítését.

6. **Interaktivitás:**
    - A diákok számára lehetőséget nyújt a tartalmak mentésére valamint offline megtekintésére.
    - Automatikus visszajelzést ad a feladatok és kvízek során, illetve értékeléseket jelenít meg.

7. **Felhasználói Élmény:**
    - Az interfész felhasználóbarát és könnyen navigálható.
    - Értesítéseket és naprakész információkat nyújtanak a tanároknak és diákoknak egyaránt.

8. **Biztonság:**
    - Az adatok és felhasználói információk biztonságosan vannak eltárolva.
    - A jogosultságkezelés pontos és hatékony.

## Teljesítményelemzés

9. **Diákok Nyomonkövetése:**
   - A rendszer lehetővé teszi a diákok teljesítményének elemzését és követését.
   - Tanárok értékeléseket kaphatnak a diákok munkájáról.

## Kiegészítő Funkciók

10. **Keresés és Kategorizálás:**
    - A rendszer lehetőséget nyújt a kurzusok és tartalmak keresésére, valamint kategorizálásra.

11. **Offline Tartalom:**
    - A diákok letölthetik és offline módban is megtekinthetik a tartalmakat.

Ezen követelményspecifikáció alapján az eLearning kezelőrendszer célja egy modern és hatékony tanulási környezet kialakítása, ahol a tanárok könnyedén létrehozhatnak tartalmakat, és a diákok interaktív módon tanulhatnak. A rendszer biztonságos és felhasználóbarát élményt nyújt mindkét fél számára.

## Miért hasznos egy E-Learning Rendszer?

Az e-learning rendszernek számos előnye van, amelyeket az oktatás és képzés terén alkalmazva kiemelkedő eredményeket lehet elérni:

- Rugalmasság: Az e-learning lehetővé teszi a tanulók számára, hogy saját ütemükben és az igényeiknek megfelelően tanuljanak. Nem szükséges fizikailag jelen lenni az oktatási intézményben.

- Hozzáférhetőség: Az online tanulás bárhol és bármikor elvégezhető, ami különösen előnyös a távoli vagy elfoglalt tanulók számára.

- Interaktivitás: Az e-learning rendszerek képesek interaktív tartalmakat biztosítani, amelyek segítik a tanulók bevonását és megértését.

- Skálázhatóság: Az e-learning lehetővé teszi az oktatási anyagok könnyű és hatékony terjesztését, és széles körű diákok elérését.

## Célközönség

Ez a követelményspecifikáció olyan e-learning rendszer fejlesztését célozza, amely a következő célcsoportoknak szól:

- Oktatók és oktatási intézmények, akik hatékonyabb és interaktív oktatási anyagokat szeretnének létrehozni és terjeszteni.
- Diákok és tanulók, akiknek kényelmes és hozzáférhető tanulási lehetőségekre van szükségük.
- Vállalatok és vállalkozások, akik képzési programjaikat és továbbképzéseiket szeretnék modernizálni és hatékonyabbá tenni.

Az e-learning rendszer tervezése és fejlesztése során ezeknek a csoportoknak a szükségleteit és elvárásait figyelembe vesszük.

---

A felhasználói felületnek a következő követelményeknek kell megfelelnie:

1. **Felhasználóbarát kezelőfelület**: A rendszernek egyszerű és intuitív kezelőfelülettel kell rendelkeznie, amely lehetővé teszi a felhasználók számára könnyű navigációt és a funkciók gyors megtalálását. A menük, gombok és elemek elrendezése és elnevezése legyen egyértelmű és érthető.

2. **Vizuális kialakítás**: A felhasználói felületnek esztétikusnak és vonzónak kell lennie. A színpaletta, betűtípusok és ikonok harmonikusan illeszkedjenek egymáshoz, és tükrözzék a vállalati arculatot vagy a rendszer jellegét.

3. **Képernyőméret-érzékenység**: A rendszernek reszponzív tervezéssel kell rendelkeznie, hogy különböző eszközökön (asztali gépek, táblagépek, mobiltelefonok) is könnyen használható legyen, és a tartalom automatikusan igazodjon a kijelző méretéhez.

4. **Bejelentkezés és hitelesítés**: A rendszernek biztonságos bejelentkezési mechanizmust kell biztosítania a felhasználók számára. A hitelesítési folyamatnak lehetőséget kell adnia a felhasználóknak a jelszó visszaállítására, valamint kétlépcsős azonosításra.

5. **Személyre szabás**: A rendszernek lehetőséget kell adnia a felhasználóknak a profiljuk testreszabására, például a felhasználói kép, név és értesítések beállításainak módosítására.

6. **Kurzuskezelés**: A felhasználók könnyen böngészhetik a rendszer által elérhető kurzusokat, és könnyedén regisztrálhatnak bármelyikbe. Az aktuális kurzusokat és előrehaladásukat jól láthatóan kell megjeleníteni.

7. **Tartalomkezelés**: A tartalomfeltöltés és szerkesztés könnyen kezelhető legyen az oktatók és tartalomkészítők számára. Képek, videók és dokumentumok feltöltését is támogassa a rendszer.

8. **Kommunikáció és értesítések**: A rendszernek lehetőséget kell biztosítania az oktatók és diákok közötti kommunikációra, például üzenetküldési funkcióval. Emellett automatikus értesítésekkel kell rendelkeznie, amelyek informálják a felhasználókat a fontos eseményekről és határidőkről.

9. **Teljesítmény- és előrehaladás nyomon követése**: A rendszernek lehetőséget kell adnia a diákoknak és oktatóknak a tanulási teljesítmény és előrehaladás nyomon követésére. A felhasználóknak könnyen elérhetők legyenek az értékelések, eredmények és statisztikák.

10. **Hozzáférhetőség**: A rendszernek megfelelő hozzáférhetőségi szabványoknak kell megfelelnie, hogy az akadálymentes használat is biztosított legyen.

11. **Keresési funkció**: A felhasználóknak egyszerűen kereshetőknek kell lenniük a kurzusok, tartalmak és felhasználók. A keresési funkció hatékony és gyors eredményeket kell szolgáltatnia.

12. **Dokumentáció és támogatás**: A rendszernek tartalmaznia kell egy használati útmutatót, valamint könnyen elérhető támogatási lehetőségeket, például chat vagy e-mail támogatást.

A fenti követelményeknek megfelelően tervezett felhasználói felület hozzájárulhat a hatékony és kényelmes online tanulási élményhez, és segíthet a felhasználóknak a tartalom könnyű elérésében és kezelésében.

## Felhasználói Jogosultságok

A rendszerben különböző felhasználói típusoknak különböző jogosultságokat kell biztosítani a következőképpen:

- **Adminisztrátorok**: Az adminisztrátoroknak teljes hozzáférési jogosultságuk kell lennie a rendszerhez. Képesek lesznek a felhasználói fiókok kezelésére, új kurzusok létrehozására és a rendszer konfigurációjának módosítására.

- **Diákok**: A diákoknak csak a kurzusokhoz és a saját profiljukhoz kell hozzáférési jogosultságot kapniuk. Képesek lesznek a kurzusokra való regisztrációra, a kurzusok tartalmának elérésére és a saját előrehaladásuk követésére.

- **Oktatók és Tartalomkészítők**: Az oktatóknak és tartalomkészítőknek a tartalomkezelésre korlátozott hozzáférést kell biztosítaniuk. Képesek lesznek kurzusok létrehozására, tartalom feltöltésére és szerkesztésére a saját kurzusaikhoz.

- **Látogatók**: A látogatóknak korlátozott hozzáférési jogosultságot kell kapniuk. Lehetőséget kell biztosítani a rendszer böngészésére, de nem tudnak kurzusokhoz regisztrálni vagy tartalmakat elérni.

- **Hozzáférési ellenőrzés**: A rendszernek gondoskodnia kell a hozzáférési jogosultságok pontos ellenőrzéséről. A jogosultságok beállításainak könnyen módosíthatónak kell lenniük az adminisztrátorok számára, és a felhasználók csak a saját jogosultságuknak megfelelő tartalmakat láthatják.

- **Bejelentkezési jogosultságok**: A rendszernek megfelelő bejelentkezési jogosultságokat kell biztosítania. A felhasználók számára biztonságos bejelentkezési folyamatot kell garantálni, beleértve a jelszóváltoztatási lehetőséget és a kétlépcsős azonosítást.

- **Adatvédelem és biztonság**: A rendszernek gondoskodnia kell az adatvédelemről és a felhasználói adatok biztonságáról. A jogosultságoknak meg kell felelniük az adatvédelmi előírásoknak és a vonatkozó törvényeknek.

A felhasználói jogosultságok pontos beállítása és ellenőrzése kulcsfontosságú a rendszer biztonságának és az adatvédelemnek megőrzése szempontjából.

---

## Kommunikáció és Üzenetküldés

A rendszerben számos kommunikációs lehetőséget kell biztosítani a felhasználók számára:

- **Üzenetküldés**: A felhasználóknak lehetőséget kell adni egymásnak privát üzenetek küldésére a rendszeren belül. Ez lehetővé teszi az oktatók és diákok közötti együttműködést, valamint a kérdések és válaszok cseréjét.

- **Kommentek**: A kurzusok és tartalmak alatt lehetőség kell lennie kommentek hozzáfűzésére. Ez segíti a diákokat és oktatókat a tartalmakkal kapcsolatos kérdések megvitatásában, valamint az interakcióban.

- **Fórumok és közösségi terek**: A rendszernek lehetőséget kell biztosítania fórumok és közösségi terek létrehozására, ahol a felhasználók szabadon megoszthatják gondolataikat, tapasztalataikat és ötleteiket.

- **Értesítések**: Az automatikus értesítések segítenek a felhasználóknak a fontos eseményekről és határidőkről való értesítésben. Ez lehetővé teszi az oktatóknak és diákoknak, hogy mindig naprakészek legyenek a kurzusaikkal kapcsolatos változásokról.

- **Mobilalkalmazás integráció**: Amennyiben rendelkezésre áll, a rendszernek lehetőséget kell biztosítania a mobilalkalmazásokkal történő kommunikációra, beleértve az értesítéseket és az üzenetküldést mobil eszközökön keresztül.

- **Adatvédelem és moderálás**: Fontos, hogy a kommunikáció során az adatvédelmet tiszteletben tartsuk, és lehetőséget biztosítsunk a moderálásra, hogy elkerüljük a zaklatást és a nem kívánt tartalmak megjelenését.

A kommunikációs funkciók lehetővé teszik a tanulók és oktatók közötti interakciót, valamint a tartalmak megbeszélését és megértését.

---

## Teljesítménymérés és Elemzés

A rendszerben teljesítménymérés és elemzés funkciókra van szükség a következő okokból:

- **Felhasználói előrehaladás nyomon követése**: A rendszernek lehetőséget kell adnia az oktatóknak a diákok előrehaladásának nyomon követésére. Ez magában foglalja a kurzusokon elért eredmények és teljesítmények elemzését.

- **Kurzusok hatékonyságának értékelése**: Az oktatóknak és adminisztrátoroknak lehetőséget kell biztosítani a kurzusok hatékonyságának értékelésére. Ez segítheti a kurzusok továbbfejlesztését és a tanítási módszerek optimalizálását.

- **Jelentések és statisztikák**: A rendszernek automatikus jelentések és statisztikák generálására is képesnek kell lennie. Ezek az információk segítenek az oktatóknak és adminisztrátoroknak a rendszer teljesítményének és a diákok fejlődésének megértésében.

- **Felhasználói visszajelzések elemzése**: A rendszernek lehetőséget kell adnia a felhasználói visszajelzések gyűjtésére és elemzésére. Ezek a visszajelzések segíthetik a rendszer fejlesztését és a felhasználói élmény javítását.

- **Kurzusok teljesítése és tanúsítványok**: A rendszernek lehetőséget kell biztosítania a diákoknak a kurzusok befejezésének és a tanúsítványok megszerzésének nyomon követésére.

- **Adatbiztonság és adatvédelem**: A teljesítménymérés során az adatbiztonságra és az adatvédelemre is különös figyelmet kell fordítani, hogy a felhasználók személyes adatai biztonságban legyenek.

A teljesítménymérés és elemzés funkciók segítenek az oktatóknak és az adminisztrátoroknak a rendszer hatékonyságának és a diákok fejlődésének monitorozásában és értékelésében.

---

## Követelmények Teljesítése

A rendszernek a következő technológiákat és követelményeket kell teljesítenie:

- **Backend fejlesztés PHP-ben**: A rendszer hátterének PHP nyelven történő fejlesztése szükséges. Ez biztosítja a szerveroldali logika megvalósítását, például a felhasználói adatok kezelését és az adatbázis-kapcsolatot.

- **Adatbázis MySQL használatával**: Az adatok tárolásához és kezeléséhez MySQL adatbázis szükséges. Az adatbázisban kell tárolni a felhasználói profilokat, kurzusinformációkat, felhasználói előrehaladást és egyéb adatokat.

- **Felhasználói felület HTML és CSS használatával**: A felhasználói felületet HTML és CSS technológiák segítségével kell kialakítani. Az HTML felelős az oldalstruktúráért, míg a CSS a dizájn és stílusok testre szabásáért.

- **Interaktív funkciók JavaScript segítségével**: Az interaktív funkciók, például az élő kereső, a diákok közötti kommunikáció és a dinamikus tartalom betöltése JavaScript segítségével kell implementálni. Ennek révén a felhasználók számára gyors és interaktív élményt nyújthatunk.

- **Keresőoptimalizálás (SEO)**: A weboldalnak megfelelő SEO gyakorlatokat kell követnie, hogy a tartalom könnyen megtalálható legyen a keresőmotorokban.

- **Mobilbarát felület**: A felhasználói felületnek reszponzív tervezéssel kell rendelkeznie, hogy a különböző eszközökön is használható legyen, beleértve az asztali számítógépeket, táblagépeket és mobiltelefonokat.

- **Biztonság és adatvédelem**: A rendszernek megfelelő biztonsági intézkedéseket kell tartalmaznia a felhasználói adatok védelme érdekében. Ez magában foglalja a jelszókezelést és a hozzáférési jogosultságok ellenőrzését.

A fent felsorolt technológiák és követelmények teljesítése kulcsfontosságú a rendszer hatékony működése és a felhasználói élmény biztosítása szempontjából.

---

## Technológiai Követelmények

1. **Programozási Nyelv és Adatbázis:**
   - Az alkalmazást PHP programozási nyelv használatával fejlesztjük.
   - Az adatbáziskezeléshez MySQL-t alkalmazunk.

2. **Felhasználói Felület:**
   - A felhasználói felületnek reszponzívnek kell lennie, hogy támogassa a különböző eszközöket, beleértve a mobiltelefonokat és táblagépeket.

3. **Biztonság:**
   - A felhasználói jelszavaknak erős titkosítással kell lenniük védve.
   - Az alkalmazásnak ellenállnia kell a biztonsági fenyegetéseknek, például SQL-injekcióknak.

4. **Hostolás és Karbantartás:**
   - Az alkalmazást megbízható szolgáltatón kell hostolni, és rendszeres karbantartást kell végezni rajta, hogy biztosítsuk a rendszer stabilitását és biztonságát.