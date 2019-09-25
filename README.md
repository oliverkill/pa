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