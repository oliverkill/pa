# pa
Antud kursus annab ülevaate programmeerimise aluste baasteadmistest PHP keele baasil
## Ajakava
### 20.09.2019
* Tarlvara installeerimine
    * [PhpStorm](https://www.jetbrains.com/phpstorm/)
    * [Git](https://git-scm.com/downloads)
* Tarkvara seadistamine
    * Valmistasime litsentsi
    * PhpStorm põhiseadistus (line numbers, soft wrap, zoom)
    * git.exe ühendus PhpStormiga
    * github.com repo loomine ning ühendamine PhpStormiga
### 25.09.2019
* Git kasutamine käsureal
Kui repositoorium ei ole initsialiseeritud, siis tuleb see ära teha
```
git init
```
Nüüd lisa muudetud fail jälgimissüsteemi (git)
```
git add failinimi
```
Koosta kirjeldus antud muudatustele
```
git commit -m "Kirjeldus sõne"
```
Lükka lokaalsest repost kirjeldus kaugreposse (näiteks github.com)
```
git push -uf origin master
```
Kus origin on ühenduse nimi ja master on peaharu
* Võimalik on teha ka commit ja push teha PhpStorm gui-s
    * Commitimiseks "VCS" -> "Commit" või "Ctrl + K". Valid vastava(d) failid ning tekib ülevaade muudatustest. Tegevuse lõpetamiseks "Commit".
    * Pushimiseks "VCS" -> "git" -> "Push..." või "Ctrl + Shift + K". Näitab milliseid commited faile on võimalik pushida. Tegevuse lõpetamiseks "Push".
        * Mõlema korraga tegemiseks on "Commit" menu all olemas "Commit and push" valik.
        
### 27.09.2019
* php.net lehe pealt on võimalik leida kõik finktsioonid, mis directory-sse sisestatud
* õppisime muutujate kasutamist
* kasutasime ümardamise funktsiooni
* kasutasime:
```
var_dump()
```
mis näitas vastava muutuja andmetüüpi.

```
$_GET
```
Kasutasime get funktsiooni ja võtsime vormist andmed.

### 07.10.2019
* Aritmeetilised tehted PHP-s
    * Liitmine
    * Lahutamine
    * Korrutamine
    * Jagamine
    * Jääk
* Post ja pre operaatorid
```
Enne funktsiooni ja pärast funktsiooni käivituvad käsud
```

### 08.10.2019
Tingimuslaused
```
if(tingimus){käsud}
```

### 17.10.2019
Tsüklid
```
for
(algne count variable;tingimus, mil tsükkel töötab;käsk, mis käivitatakse tsükli iga korra lõpus)
{}
```
while
```
while (){}
```
while do 
```
while (){} do (){}
```

### 21.10.2019
* Mis on funktsioon
* Funktsiooni loomine
* Funktsioonide grupid
* Matemaatilised funktsioonid
* Matemaatilised konstandid

### 22.10.2019
Keerulistema funktsioonide koos kasutamine
    * Algarvu kontroll
    * Tabel